<?php

error_reporting(-1);

use Monolog\Handler\ErrorLogHandler;
use Monolog\Logger;
use StrehleDe\CamundaClient\CamundaClient;
use StrehleDe\CamundaClient\CamundaConfig;
use StrehleDe\CamundaClient\CamundaTopic;
use StrehleDe\CamundaClient\CamundaTopicBag;
use StrehleDe\CamundaClient\Service\ExternalTask\CamundaExternalTaskFetchAndLockRequest;
use StrehleDe\CamundaClient\Service\ExternalTask\CamundaExternalTaskService;
use StrehleDe\CamundaClient\Service\ProcessDefinition\CamundaProcessDefinitionService;
use StrehleDe\CamundaClient\Service\ProcessDefinition\CamundaProcessDefinitionStartInstanceRequest;
use StrehleDe\CamundaClient\Service\ExternalTask\CamundaExternalTaskCompleteRequest;
use StrehleDe\CamundaClient\Service\ExternalTask\CamundaExternalTaskHandleFailureRequest;
use StrehleDe\CamundaClient\Variable\CamundaVariableBag;
use StrehleDe\CamundaClient\Variable\CamundaStringVariable;

require_once 'vendor/autoload.php';

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

(new CamundaProcessDefinitionService($camundaClient))->startInstance($request);

// Fetch external task

$topics = new CamundaTopicBag();
$topics[] = (new CamundaTopic())
    ->setTopicName('TopicName')
    ->setLockDuration(1000);

$request = (new CamundaExternalTaskFetchAndLockRequest($camundaClient))
    ->setWorkerId('worker' . getmypid())
    ->setMaxTasks(1)
    ->setTopics($topics);

$externalTaskService = new CamundaExternalTaskService($camundaClient);

$externalTask = $externalTaskService->fetchAndLock($request)->getExternalTasks()[0];

// Complete external task

$variables = new CamundaVariableBag();
$variables['NewVariableName'] = new CamundaStringVariable('hello on complete');

$request = (new CamundaExternalTaskCompleteRequest($camundaClient))
    ->setId($externalTask->getId())
    ->setWorkerId($externalTask->getWorkerId())
    ->setVariables($variables);

$externalTaskService->complete($request);

// ... or mark external task as failed

$request = (new CamundaExternalTaskHandleFailureRequest($camundaClient))
    ->setId($externalTask->getId())
    ->setWorkerId($externalTask->getWorkerId())
    ->setErrorMessage('ERROR_MESSAGE')
    ->setErrorDetails('Here goes error details');

$externalTaskService->handleFailure($request);
