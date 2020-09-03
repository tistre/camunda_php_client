<?php

error_reporting(-1);

use GuzzleHttp\Client;
use GuzzleHttp\HandlerStack;
use GuzzleHttp\MessageFormatter;
use GuzzleHttp\Middleware;
use Monolog\Handler\ErrorLogHandler;
use Monolog\Logger;
use Psr\Log\LogLevel;
use StrehleDe\CamundaClient\Api\ProcessDefinitionApi;
use StrehleDe\CamundaClient\Api\ProcessInstanceApi;
use StrehleDe\CamundaClient\Configuration;
use StrehleDe\CamundaClient\Model\ProcessInstanceDto;
use StrehleDe\CamundaClient\Model\StartProcessInstanceDto;

require_once 'vendor/autoload.php';

// Example handler class

class ExampleHandler extends CamundaExternalTaskHandler
{
    /**
     * @return CamundaTopicBag
     */
    public function getHandledTopics(): CamundaTopicBag
    {
        $topics = new CamundaTopicBag();
        $topics[] = (new CamundaTopic())->setTopicName('ExampleTopic')->setLockDuration(1000);
        return $topics;
    }


    /**
     * @param CamundaExternalTask $externalTask
     * @param CamundaVariableBag $updateVariables
     */
    public function handle_ExampleTopic(CamundaExternalTask $externalTask, CamundaVariableBag $updateVariables): void
    {
        // In real life, we would do some work here. For this example, just return and set a variable.
        $updateVariables['ExampleVariable'] = sprintf(
            'Topic <%s> handled by <%s>',
            $externalTask->getTopicName(),
            __METHOD__
        );
    }
}


// Create your own Logger and HTTP Client (not required - we do it so we can log REST requests and responses)

$logger = (new Logger('camundaClient'))
    ->pushHandler(new ErrorLogHandler(ErrorLogHandler::OPERATING_SYSTEM, LogLevel::DEBUG));

$stack = HandlerStack::create();

$stack->push(
    Middleware::log(
        $logger,
        new MessageFormatter('Camunda request: {request} Camunda response: {response}'),
        LogLevel::DEBUG
    )
);

$httpClient = new Client(['handler' => $stack]);

// Configure the Camunda client

$configuration = (new Configuration())->setHost('http://localhost:8080/engine-rest');

// Start process instance

$processDefinitionApi = new ProcessDefinitionApi($httpClient, $configuration);

$startProcessInstanceDto = (new StartProcessInstanceDto())->setVariables([
    'VariableName' => [
        'type' => 'string',
        'value' => 'hello world'
    ]
]);

$processDefinitionApi->startProcessInstanceByKey('ProcessDefinitionKey', $startProcessInstanceDto);

// Fetch external task

$workerId = 'worker' . getmypid();

$topics = new CamundaTopicBag();
$topics[] = (new CamundaTopic())
    ->setTopicName('TopicName')
    ->setLockDuration(1000);

$request = (new CamundaExternalTaskFetchAndLockRequest($camundaClient))
    ->setWorkerId($workerId)
    ->setMaxTasks(1)
    ->setTopics($topics);

$externalTaskService = new CamundaExternalTaskService($camundaClient);

$externalTask = $externalTaskService->fetchAndLock($request)->getExternalTasks()[0];

var_dump($externalTask);

// Complete external task

$variables = new CamundaVariableBag();
$variables['NewVariableName'] = new CamundaStringVariable('hello on complete');

$request = (new CamundaExternalTaskCompleteRequest($camundaClient))
    ->setId($externalTask->getId())
    ->setWorkerId($workerId)
    ->setVariables($variables);

var_dump($externalTaskService->complete($request));

// ... or mark external task as failed

$request = (new CamundaExternalTaskHandleFailureRequest($camundaClient))
    ->setId($externalTask->getId())
    ->setWorkerId($workerId)
    ->setErrorMessage('ERROR_MESSAGE')
    ->setErrorDetails('Here goes error details');

var_dump($externalTaskService->handleFailure($request));

// Or use a worker loop to handle external tasks

$handler = new ExampleHandler($logger);
$worker = new CamundaExternalTaskWorker($camundaClient, $this->logger, $handler, $workerId);

while (true) {
    foreach ($worker->fetchExternalTasks() as $externalTask) {
        $worker->handleExternalTask($externalTask);
    }

    usleep(100000);
    break; // Remove this for a true endless loop
}
