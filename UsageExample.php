<?php

error_reporting(-1);

use Monolog\Handler\ErrorLogHandler;
use Monolog\Logger;
use StrehleDe\CamundaClient\CamundaClient;
use StrehleDe\CamundaClient\CamundaConfig;
use StrehleDe\CamundaClient\CamundaExternalTask;
use StrehleDe\CamundaClient\CamundaExternalTaskHandler;
use StrehleDe\CamundaClient\CamundaExternalTaskWorker;
use StrehleDe\CamundaClient\CamundaTopic;
use StrehleDe\CamundaClient\CamundaTopicBag;
use StrehleDe\CamundaClient\Service\ExternalTask\CamundaExternalTaskFetchAndLockRequest;
use StrehleDe\CamundaClient\Service\ExternalTask\CamundaExternalTaskService;
use StrehleDe\CamundaClient\Service\Message\CamundaMessageCorrelateRequest;
use StrehleDe\CamundaClient\Service\Message\CamundaMessageService;
use StrehleDe\CamundaClient\Service\ProcessDefinition\CamundaProcessDefinitionService;
use StrehleDe\CamundaClient\Service\ProcessDefinition\CamundaProcessDefinitionStartInstanceRequest;
use StrehleDe\CamundaClient\Service\ExternalTask\CamundaExternalTaskCompleteRequest;
use StrehleDe\CamundaClient\Service\ExternalTask\CamundaExternalTaskHandleFailureRequest;
use StrehleDe\CamundaClient\Variable\CamundaVariableBag;
use StrehleDe\CamundaClient\Variable\CamundaStringVariable;

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

// Set up CamundaClient instance

$logger = new Logger('camundaClient');
$logger->pushHandler(new ErrorLogHandler());

$config = new CamundaConfig('http://localhost:8080/engine-rest');

$camundaClient = new CamundaClient($config, $logger);

// Start process instance

$variables = new CamundaVariableBag();
$variables['VariableName'] = new CamundaStringVariable('hello world');

$request = (new CamundaProcessDefinitionStartInstanceRequest($camundaClient))
    ->setKey('ProcessDefinitionKey')
    ->setVariables($variables);

var_dump((new CamundaProcessDefinitionService($camundaClient))->startInstance($request));

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

// Correlate a message

$correlationKeys = new CamundaVariableBag();
$correlationKeys['corrKey'] = new CamundaStringVariable('one');

$processVariables = new CamundaVariableBag();
$processVariables['fromMessage'] = new CamundaStringVariable('hello world');

$request = (new CamundaMessageCorrelateRequest($camundaClient))
    ->setMessageName('someMessage')
    ->setCorrelationKeys($correlationKeys)
    ->setProcessVariables($processVariables);

(new CamundaMessageService($camundaClient))->correlate($request);
