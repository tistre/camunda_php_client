# A PHP client for the Camunda BPMN workflow engine

This is an inofficial PHP client for the [Camunda BPMN workflow engine](https://camunda.com/products/bpmn-engine/)
using its [REST API](https://docs.camunda.org/manual/latest/reference/rest/).

It is automatically generated from the [Camunda OpenAPI spec](https://start.camunda.com/openapi.json) 
by the [OpenAPI Generator](https://openapi-generator.tech) project:

- API version: 7.13.0
- Build package: org.openapitools.codegen.languages.PhpClientCodegen

## Status right now: Developers only, not suitable for production use

While the most important REST calls should be supported already (see the blog post
 [Camunda’s Evolution: An Open, Distributed Platform](https://camunda.com/blog/2020/08/camundas-evolution-an-open-distributed-platform/)),
this library has not yet been tested or used in production. Use at your own risk!

For other PHP libraries, check out the nice [endpot / camunda-rest-client](https://github.com/endpot/camunda-rest-client)
and the official but dated [Camunda BPM PHP SDK](http://camunda.github.io/camunda-bpm-php-sdk/) (or its forks,
for example [kmhamdi00 / camunda-bpm-php-sdk](https://github.com/kmhamdi00/camunda-bpm-php-sdk)). 

## Quick test 

Here’s how to do a quick test, starting from scratch with a new project (Docker and Camunda server required):

### Install dependencies using Composer

```
$ docker run --rm --interactive --tty \
  --volume $PWD:/app \
  --volume ${COMPOSER_HOME:-$HOME/.composer}:/tmp \
  composer require strehle-de/camunda-client:dev-master
```

### Copy and edit the example script

`$ cp vendor/strehle-de/camunda-client/UsageExample.php MyExample.php`

Edit your copy.

### Then run your copy

```
$ docker run -it --rm \
  --volume "$PWD":/usr/src/myapp --workdir /usr/src/myapp \
  php:7.4-cli php MyExample.php
```

## Documentation for API Endpoints

All URIs are relative to *http://localhost:8080/engine-rest*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*ConditionApi* | [**evaluateCondition**](docs/Api/ConditionApi.md#evaluatecondition) | **POST** /condition | 
*DeploymentApi* | [**createDeployment**](docs/Api/DeploymentApi.md#createdeployment) | **POST** /deployment/create | 
*DeploymentApi* | [**deleteDeployment**](docs/Api/DeploymentApi.md#deletedeployment) | **DELETE** /deployment/{id} | 
*DeploymentApi* | [**getDeployment**](docs/Api/DeploymentApi.md#getdeployment) | **GET** /deployment/{id} | 
*DeploymentApi* | [**getDeploymentResource**](docs/Api/DeploymentApi.md#getdeploymentresource) | **GET** /deployment/{id}/resources/{resourceId} | 
*DeploymentApi* | [**getDeploymentResourceData**](docs/Api/DeploymentApi.md#getdeploymentresourcedata) | **GET** /deployment/{id}/resources/{resourceId}/data | 
*DeploymentApi* | [**getDeploymentResources**](docs/Api/DeploymentApi.md#getdeploymentresources) | **GET** /deployment/{id}/resources | 
*DeploymentApi* | [**getDeployments**](docs/Api/DeploymentApi.md#getdeployments) | **GET** /deployment | 
*DeploymentApi* | [**getDeploymentsCount**](docs/Api/DeploymentApi.md#getdeploymentscount) | **GET** /deployment/count | 
*DeploymentApi* | [**redeploy**](docs/Api/DeploymentApi.md#redeploy) | **POST** /deployment/{id}/redeploy | 
*EngineApi* | [**getProcessEngineNames**](docs/Api/EngineApi.md#getprocessenginenames) | **GET** /engine | 
*EventSubscriptionApi* | [**getEventSubscriptions**](docs/Api/EventSubscriptionApi.md#geteventsubscriptions) | **GET** /event-subscription | 
*EventSubscriptionApi* | [**getEventSubscriptionsCount**](docs/Api/EventSubscriptionApi.md#geteventsubscriptionscount) | **GET** /event-subscription/count | 
*ExternalTaskApi* | [**completeExternalTaskResource**](docs/Api/ExternalTaskApi.md#completeexternaltaskresource) | **POST** /external-task/{id}/complete | 
*ExternalTaskApi* | [**extendLock**](docs/Api/ExternalTaskApi.md#extendlock) | **POST** /external-task/{id}/extendLock | 
*ExternalTaskApi* | [**fetchAndLock**](docs/Api/ExternalTaskApi.md#fetchandlock) | **POST** /external-task/fetchAndLock | 
*ExternalTaskApi* | [**getExternalTask**](docs/Api/ExternalTaskApi.md#getexternaltask) | **GET** /external-task/{id} | 
*ExternalTaskApi* | [**getExternalTaskErrorDetails**](docs/Api/ExternalTaskApi.md#getexternaltaskerrordetails) | **GET** /external-task/{id}/errorDetails | 
*ExternalTaskApi* | [**getExternalTasks**](docs/Api/ExternalTaskApi.md#getexternaltasks) | **GET** /external-task | 
*ExternalTaskApi* | [**getExternalTasksCount**](docs/Api/ExternalTaskApi.md#getexternaltaskscount) | **GET** /external-task/count | 
*ExternalTaskApi* | [**getTopicNames**](docs/Api/ExternalTaskApi.md#gettopicnames) | **GET** /external-task/topic-names | 
*ExternalTaskApi* | [**handleExternalTaskBpmnError**](docs/Api/ExternalTaskApi.md#handleexternaltaskbpmnerror) | **POST** /external-task/{id}/bpmnError | 
*ExternalTaskApi* | [**handleFailure**](docs/Api/ExternalTaskApi.md#handlefailure) | **POST** /external-task/{id}/failure | 
*ExternalTaskApi* | [**queryExternalTasks**](docs/Api/ExternalTaskApi.md#queryexternaltasks) | **POST** /external-task | 
*ExternalTaskApi* | [**queryExternalTasksCount**](docs/Api/ExternalTaskApi.md#queryexternaltaskscount) | **POST** /external-task/count | 
*ExternalTaskApi* | [**setExternalTaskResourcePriority**](docs/Api/ExternalTaskApi.md#setexternaltaskresourcepriority) | **PUT** /external-task/{id}/priority | 
*ExternalTaskApi* | [**setExternalTaskResourceRetries**](docs/Api/ExternalTaskApi.md#setexternaltaskresourceretries) | **PUT** /external-task/{id}/retries | 
*ExternalTaskApi* | [**setExternalTaskRetries**](docs/Api/ExternalTaskApi.md#setexternaltaskretries) | **PUT** /external-task/retries | 
*ExternalTaskApi* | [**setExternalTaskRetriesAsyncOperation**](docs/Api/ExternalTaskApi.md#setexternaltaskretriesasyncoperation) | **POST** /external-task/retries-async | 
*ExternalTaskApi* | [**unlock**](docs/Api/ExternalTaskApi.md#unlock) | **POST** /external-task/{id}/unlock | 
*MessageApi* | [**deliverMessage**](docs/Api/MessageApi.md#delivermessage) | **POST** /message | 
*MetricsApi* | [**getMetrics**](docs/Api/MetricsApi.md#getmetrics) | **GET** /metrics/{metrics-name}/sum | 
*MetricsApi* | [**interval**](docs/Api/MetricsApi.md#interval) | **GET** /metrics | 
*ProcessDefinitionApi* | [**deleteProcessDefinition**](docs/Api/ProcessDefinitionApi.md#deleteprocessdefinition) | **DELETE** /process-definition/{id} | Delete
*ProcessDefinitionApi* | [**deleteProcessDefinitionsByKey**](docs/Api/ProcessDefinitionApi.md#deleteprocessdefinitionsbykey) | **DELETE** /process-definition/key/{key} | Delete By Key
*ProcessDefinitionApi* | [**deleteProcessDefinitionsByKeyAndTenantId**](docs/Api/ProcessDefinitionApi.md#deleteprocessdefinitionsbykeyandtenantid) | **DELETE** /process-definition/key/{key}/tenant/{tenant-id} | Delete By Key
*ProcessDefinitionApi* | [**getActivityStatistics**](docs/Api/ProcessDefinitionApi.md#getactivitystatistics) | **GET** /process-definition/{id}/statistics | Get Activity Instance Statistics
*ProcessDefinitionApi* | [**getActivityStatisticsByProcessDefinitionKey**](docs/Api/ProcessDefinitionApi.md#getactivitystatisticsbyprocessdefinitionkey) | **GET** /process-definition/key/{key}/statistics | Get Activity Instance Statistics
*ProcessDefinitionApi* | [**getActivityStatisticsByProcessDefinitionKeyAndTenantId**](docs/Api/ProcessDefinitionApi.md#getactivitystatisticsbyprocessdefinitionkeyandtenantid) | **GET** /process-definition/key/{key}/tenant/{tenant-id}/statistics | Get Activity Instance Statistics
*ProcessDefinitionApi* | [**getDeployedStartForm**](docs/Api/ProcessDefinitionApi.md#getdeployedstartform) | **GET** /process-definition/{id}/deployed-start-form | Get Deployed Start Form
*ProcessDefinitionApi* | [**getDeployedStartFormByKey**](docs/Api/ProcessDefinitionApi.md#getdeployedstartformbykey) | **GET** /process-definition/key/{key}/deployed-start-form | Get Deployed Start Form
*ProcessDefinitionApi* | [**getDeployedStartFormByKeyAndTenantId**](docs/Api/ProcessDefinitionApi.md#getdeployedstartformbykeyandtenantid) | **GET** /process-definition/key/{key}/tenant/{tenant-id}/deployed-start-form | Get Deployed Start Form
*ProcessDefinitionApi* | [**getLatestProcessDefinitionByTenantId**](docs/Api/ProcessDefinitionApi.md#getlatestprocessdefinitionbytenantid) | **GET** /process-definition/key/{key}/tenant/{tenant-id} | Get
*ProcessDefinitionApi* | [**getProcessDefinition**](docs/Api/ProcessDefinitionApi.md#getprocessdefinition) | **GET** /process-definition/{id} | Get
*ProcessDefinitionApi* | [**getProcessDefinitionBpmn20Xml**](docs/Api/ProcessDefinitionApi.md#getprocessdefinitionbpmn20xml) | **GET** /process-definition/{id}/xml | Get XML
*ProcessDefinitionApi* | [**getProcessDefinitionBpmn20XmlByKey**](docs/Api/ProcessDefinitionApi.md#getprocessdefinitionbpmn20xmlbykey) | **GET** /process-definition/key/{key}/xml | Get XML
*ProcessDefinitionApi* | [**getProcessDefinitionBpmn20XmlByKeyAndTenantId**](docs/Api/ProcessDefinitionApi.md#getprocessdefinitionbpmn20xmlbykeyandtenantid) | **GET** /process-definition/key/{key}/tenant/{tenant-id}/xml | Get XML
*ProcessDefinitionApi* | [**getProcessDefinitionByKey**](docs/Api/ProcessDefinitionApi.md#getprocessdefinitionbykey) | **GET** /process-definition/key/{key} | Get
*ProcessDefinitionApi* | [**getProcessDefinitionDiagram**](docs/Api/ProcessDefinitionApi.md#getprocessdefinitiondiagram) | **GET** /process-definition/{id}/diagram | Get Diagram
*ProcessDefinitionApi* | [**getProcessDefinitionDiagramByKey**](docs/Api/ProcessDefinitionApi.md#getprocessdefinitiondiagrambykey) | **GET** /process-definition/key/{key}/diagram | Get Diagram
*ProcessDefinitionApi* | [**getProcessDefinitionDiagramByKeyAndTenantId**](docs/Api/ProcessDefinitionApi.md#getprocessdefinitiondiagrambykeyandtenantid) | **GET** /process-definition/key/{key}/tenant/{tenant-id}/diagram | Get Diagram
*ProcessDefinitionApi* | [**getProcessDefinitionStatistics**](docs/Api/ProcessDefinitionApi.md#getprocessdefinitionstatistics) | **GET** /process-definition/statistics | Get Process Instance Statistics
*ProcessDefinitionApi* | [**getProcessDefinitions**](docs/Api/ProcessDefinitionApi.md#getprocessdefinitions) | **GET** /process-definition | Get List
*ProcessDefinitionApi* | [**getProcessDefinitionsCount**](docs/Api/ProcessDefinitionApi.md#getprocessdefinitionscount) | **GET** /process-definition/count | Get List Count
*ProcessDefinitionApi* | [**getRenderedStartForm**](docs/Api/ProcessDefinitionApi.md#getrenderedstartform) | **GET** /process-definition/{id}/rendered-form | Get Rendered Start Form
*ProcessDefinitionApi* | [**getRenderedStartFormByKey**](docs/Api/ProcessDefinitionApi.md#getrenderedstartformbykey) | **GET** /process-definition/key/{key}/rendered-form | Get Rendered Start Form
*ProcessDefinitionApi* | [**getRenderedStartFormByKeyAndTenantId**](docs/Api/ProcessDefinitionApi.md#getrenderedstartformbykeyandtenantid) | **GET** /process-definition/key/{key}/tenant/{tenant-id}/rendered-form | Get Rendered Start Form
*ProcessDefinitionApi* | [**getStartForm**](docs/Api/ProcessDefinitionApi.md#getstartform) | **GET** /process-definition/{id}/startForm | Get Start Form Key
*ProcessDefinitionApi* | [**getStartFormByKey**](docs/Api/ProcessDefinitionApi.md#getstartformbykey) | **GET** /process-definition/key/{key}/startForm | Get Start Form Key
*ProcessDefinitionApi* | [**getStartFormByKeyAndTenantId**](docs/Api/ProcessDefinitionApi.md#getstartformbykeyandtenantid) | **GET** /process-definition/key/{key}/tenant/{tenant-id}/startForm | Get Start Form Key
*ProcessDefinitionApi* | [**getStartFormVariables**](docs/Api/ProcessDefinitionApi.md#getstartformvariables) | **GET** /process-definition/{id}/form-variables | Get Start Form Variables
*ProcessDefinitionApi* | [**getStartFormVariablesByKey**](docs/Api/ProcessDefinitionApi.md#getstartformvariablesbykey) | **GET** /process-definition/key/{key}/form-variables | Get Start Form Variables
*ProcessDefinitionApi* | [**getStartFormVariablesByKeyAndTenantId**](docs/Api/ProcessDefinitionApi.md#getstartformvariablesbykeyandtenantid) | **GET** /process-definition/key/{key}/tenant/{tenant-id}/form-variables | Get Start Form Variables
*ProcessDefinitionApi* | [**restartProcessInstance**](docs/Api/ProcessDefinitionApi.md#restartprocessinstance) | **POST** /process-definition/{id}/restart | Restart Process Instance
*ProcessDefinitionApi* | [**restartProcessInstanceAsyncOperation**](docs/Api/ProcessDefinitionApi.md#restartprocessinstanceasyncoperation) | **POST** /process-definition/{id}/restart-async | Restart Process Instance Async
*ProcessDefinitionApi* | [**startProcessInstance**](docs/Api/ProcessDefinitionApi.md#startprocessinstance) | **POST** /process-definition/{id}/start | Start Instance
*ProcessDefinitionApi* | [**startProcessInstanceByKey**](docs/Api/ProcessDefinitionApi.md#startprocessinstancebykey) | **POST** /process-definition/key/{key}/start | Start Instance
*ProcessDefinitionApi* | [**startProcessInstanceByKeyAndTenantId**](docs/Api/ProcessDefinitionApi.md#startprocessinstancebykeyandtenantid) | **POST** /process-definition/key/{key}/tenant/{tenant-id}/start | Start Instance
*ProcessDefinitionApi* | [**submitForm**](docs/Api/ProcessDefinitionApi.md#submitform) | **POST** /process-definition/{id}/submit-form | Submit Start Form
*ProcessDefinitionApi* | [**submitFormByKey**](docs/Api/ProcessDefinitionApi.md#submitformbykey) | **POST** /process-definition/key/{key}/submit-form | Submit Start Form
*ProcessDefinitionApi* | [**submitFormByKeyAndTenantId**](docs/Api/ProcessDefinitionApi.md#submitformbykeyandtenantid) | **POST** /process-definition/key/{key}/tenant/{tenant-id}/submit-form | Submit Start Form
*ProcessDefinitionApi* | [**updateHistoryTimeToLiveByProcessDefinitionId**](docs/Api/ProcessDefinitionApi.md#updatehistorytimetolivebyprocessdefinitionid) | **PUT** /process-definition/{id}/history-time-to-live | Update History Time to Live
*ProcessDefinitionApi* | [**updateHistoryTimeToLiveByProcessDefinitionKey**](docs/Api/ProcessDefinitionApi.md#updatehistorytimetolivebyprocessdefinitionkey) | **PUT** /process-definition/key/{key}/history-time-to-live | Update History Time to Live
*ProcessDefinitionApi* | [**updateHistoryTimeToLiveByProcessDefinitionKeyAndTenantId**](docs/Api/ProcessDefinitionApi.md#updatehistorytimetolivebyprocessdefinitionkeyandtenantid) | **PUT** /process-definition/key/{key}/tenant/{tenant-id}/history-time-to-live | Update History Time to Live
*ProcessDefinitionApi* | [**updateProcessDefinitionSuspensionState**](docs/Api/ProcessDefinitionApi.md#updateprocessdefinitionsuspensionstate) | **PUT** /process-definition/suspended | Activate/Suspend By Key
*ProcessDefinitionApi* | [**updateProcessDefinitionSuspensionStateById**](docs/Api/ProcessDefinitionApi.md#updateprocessdefinitionsuspensionstatebyid) | **PUT** /process-definition/{id}/suspended | Activate/Suspend By Id
*ProcessDefinitionApi* | [**updateProcessDefinitionSuspensionStateByKey**](docs/Api/ProcessDefinitionApi.md#updateprocessdefinitionsuspensionstatebykey) | **PUT** /process-definition/key/{key}/suspended | Activate/Suspend by Id
*ProcessDefinitionApi* | [**updateProcessDefinitionSuspensionStateByKeyAndTenantId**](docs/Api/ProcessDefinitionApi.md#updateprocessdefinitionsuspensionstatebykeyandtenantid) | **PUT** /process-definition/key/{key}/tenant/{tenant-id}/suspended | Activate/Suspend by Id
*ProcessInstanceApi* | [**deleteAsyncHistoricQueryBased**](docs/Api/ProcessInstanceApi.md#deleteasynchistoricquerybased) | **POST** /process-instance/delete-historic-query-based | 
*ProcessInstanceApi* | [**deleteProcessInstance**](docs/Api/ProcessInstanceApi.md#deleteprocessinstance) | **DELETE** /process-instance/{id} | 
*ProcessInstanceApi* | [**deleteProcessInstanceVariable**](docs/Api/ProcessInstanceApi.md#deleteprocessinstancevariable) | **DELETE** /process-instance/{id}/variables/{varName} | 
*ProcessInstanceApi* | [**deleteProcessInstancesAsyncOperation**](docs/Api/ProcessInstanceApi.md#deleteprocessinstancesasyncoperation) | **POST** /process-instance/delete | 
*ProcessInstanceApi* | [**getActivityInstanceTree**](docs/Api/ProcessInstanceApi.md#getactivityinstancetree) | **GET** /process-instance/{id}/activity-instances | 
*ProcessInstanceApi* | [**getProcessInstanceVariable**](docs/Api/ProcessInstanceApi.md#getprocessinstancevariable) | **GET** /process-instance/{id}/variables/{varName} | 
*ProcessInstanceApi* | [**getProcessInstanceVariableBinary**](docs/Api/ProcessInstanceApi.md#getprocessinstancevariablebinary) | **GET** /process-instance/{id}/variables/{varName}/data | 
*ProcessInstanceApi* | [**getProcessInstanceVariables**](docs/Api/ProcessInstanceApi.md#getprocessinstancevariables) | **GET** /process-instance/{id}/variables | 
*ProcessInstanceApi* | [**getProcessInstances**](docs/Api/ProcessInstanceApi.md#getprocessinstances) | **GET** /process-instance | 
*ProcessInstanceApi* | [**getProcessInstancesCount**](docs/Api/ProcessInstanceApi.md#getprocessinstancescount) | **GET** /process-instance/count | 
*ProcessInstanceApi* | [**modifyProcessInstance**](docs/Api/ProcessInstanceApi.md#modifyprocessinstance) | **POST** /process-instance/{id}/modification | 
*ProcessInstanceApi* | [**modifyProcessInstanceAsyncOperation**](docs/Api/ProcessInstanceApi.md#modifyprocessinstanceasyncoperation) | **POST** /process-instance/{id}/modification-async | 
*ProcessInstanceApi* | [**modifyProcessInstanceVariables**](docs/Api/ProcessInstanceApi.md#modifyprocessinstancevariables) | **POST** /process-instance/{id}/variables | 
*ProcessInstanceApi* | [**queryProcessInstances**](docs/Api/ProcessInstanceApi.md#queryprocessinstances) | **POST** /process-instance | 
*ProcessInstanceApi* | [**queryProcessInstancesCount**](docs/Api/ProcessInstanceApi.md#queryprocessinstancescount) | **POST** /process-instance/count | 
*ProcessInstanceApi* | [**setProcessInstanceVariable**](docs/Api/ProcessInstanceApi.md#setprocessinstancevariable) | **PUT** /process-instance/{id}/variables/{varName} | 
*ProcessInstanceApi* | [**setProcessInstanceVariableBinary**](docs/Api/ProcessInstanceApi.md#setprocessinstancevariablebinary) | **POST** /process-instance/{id}/variables/{varName}/data | 
*ProcessInstanceApi* | [**setRetriesByProcess**](docs/Api/ProcessInstanceApi.md#setretriesbyprocess) | **POST** /process-instance/job-retries | 
*ProcessInstanceApi* | [**setRetriesByProcessHistoricQueryBased**](docs/Api/ProcessInstanceApi.md#setretriesbyprocesshistoricquerybased) | **POST** /process-instance/job-retries-historic-query-based | 
*ProcessInstanceApi* | [**updateSuspensionState**](docs/Api/ProcessInstanceApi.md#updatesuspensionstate) | **PUT** /process-instance/suspended | 
*ProcessInstanceApi* | [**updateSuspensionStateAsyncOperation**](docs/Api/ProcessInstanceApi.md#updatesuspensionstateasyncoperation) | **POST** /process-instance/suspended-async | 
*ProcessInstanceApi* | [**updateSuspensionStateById**](docs/Api/ProcessInstanceApi.md#updatesuspensionstatebyid) | **PUT** /process-instance/{id}/suspended | 
*SchemaLogApi* | [**getSchemaLog**](docs/Api/SchemaLogApi.md#getschemalog) | **GET** /schema/log | 
*SchemaLogApi* | [**querySchemaLog**](docs/Api/SchemaLogApi.md#queryschemalog) | **POST** /schema/log | 
*SignalApi* | [**throwSignal**](docs/Api/SignalApi.md#throwsignal) | **POST** /signal | 
*TaskApi* | [**claim**](docs/Api/TaskApi.md#claim) | **POST** /task/{id}/claim | 
*TaskApi* | [**complete**](docs/Api/TaskApi.md#complete) | **POST** /task/{id}/complete | 
*TaskApi* | [**createTask**](docs/Api/TaskApi.md#createtask) | **POST** /task/create | 
*TaskApi* | [**delegateTask**](docs/Api/TaskApi.md#delegatetask) | **POST** /task/{id}/delegate | 
*TaskApi* | [**deleteTask**](docs/Api/TaskApi.md#deletetask) | **DELETE** /task/{id} | 
*TaskApi* | [**getDeployedForm**](docs/Api/TaskApi.md#getdeployedform) | **GET** /task/{id}/deployed-form | 
*TaskApi* | [**getForm**](docs/Api/TaskApi.md#getform) | **GET** /task/{id}/form | 
*TaskApi* | [**getFormVariables**](docs/Api/TaskApi.md#getformvariables) | **GET** /task/{id}/form-variables | 
*TaskApi* | [**getRenderedForm**](docs/Api/TaskApi.md#getrenderedform) | **GET** /task/{id}/rendered-form | 
*TaskApi* | [**getTask**](docs/Api/TaskApi.md#gettask) | **GET** /task/{id} | 
*TaskApi* | [**getTasks**](docs/Api/TaskApi.md#gettasks) | **GET** /task | 
*TaskApi* | [**getTasksCount**](docs/Api/TaskApi.md#gettaskscount) | **GET** /task/count | 
*TaskApi* | [**handleBpmnError**](docs/Api/TaskApi.md#handlebpmnerror) | **POST** /task/{id}/bpmnError | 
*TaskApi* | [**handleEscalation**](docs/Api/TaskApi.md#handleescalation) | **POST** /task/{id}/bpmnEscalation | 
*TaskApi* | [**queryTasks**](docs/Api/TaskApi.md#querytasks) | **POST** /task | 
*TaskApi* | [**queryTasksCount**](docs/Api/TaskApi.md#querytaskscount) | **POST** /task/count | 
*TaskApi* | [**resolve**](docs/Api/TaskApi.md#resolve) | **POST** /task/{id}/resolve | 
*TaskApi* | [**setAssignee**](docs/Api/TaskApi.md#setassignee) | **POST** /task/{id}/assignee | 
*TaskApi* | [**submit**](docs/Api/TaskApi.md#submit) | **POST** /task/{id}/submit-form | 
*TaskApi* | [**unclaim**](docs/Api/TaskApi.md#unclaim) | **POST** /task/{id}/unclaim | 
*TaskApi* | [**updateTask**](docs/Api/TaskApi.md#updatetask) | **PUT** /task/{id} | 
*TaskAttachmentApi* | [**addAttachment**](docs/Api/TaskAttachmentApi.md#addattachment) | **POST** /task/{id}/attachment/create | 
*TaskAttachmentApi* | [**deleteAttachment**](docs/Api/TaskAttachmentApi.md#deleteattachment) | **DELETE** /task/{id}/attachment/{attachmentId} | 
*TaskAttachmentApi* | [**getAttachment**](docs/Api/TaskAttachmentApi.md#getattachment) | **GET** /task/{id}/attachment/{attachmentId} | 
*TaskAttachmentApi* | [**getAttachmentData**](docs/Api/TaskAttachmentApi.md#getattachmentdata) | **GET** /task/{id}/attachment/{attachmentId}/data | 
*TaskAttachmentApi* | [**getAttachments**](docs/Api/TaskAttachmentApi.md#getattachments) | **GET** /task/{id}/attachment | 
*TaskCommentApi* | [**createComment**](docs/Api/TaskCommentApi.md#createcomment) | **POST** /task/{id}/comment/create | 
*TaskCommentApi* | [**getComment**](docs/Api/TaskCommentApi.md#getcomment) | **GET** /task/{id}/comment/{commentId} | 
*TaskCommentApi* | [**getComments**](docs/Api/TaskCommentApi.md#getcomments) | **GET** /task/{id}/comment | 
*TaskIdentityLinkApi* | [**addIdentityLink**](docs/Api/TaskIdentityLinkApi.md#addidentitylink) | **POST** /task/{id}/identity-links | 
*TaskIdentityLinkApi* | [**deleteIdentityLink**](docs/Api/TaskIdentityLinkApi.md#deleteidentitylink) | **POST** /task/{id}/identity-links/delete | 
*TaskIdentityLinkApi* | [**getIdentityLinks**](docs/Api/TaskIdentityLinkApi.md#getidentitylinks) | **GET** /task/{id}/identity-links | 
*TaskLocalVariableApi* | [**deleteTaskLocalVariable**](docs/Api/TaskLocalVariableApi.md#deletetasklocalvariable) | **DELETE** /task/{id}/localVariables/{varName} | 
*TaskLocalVariableApi* | [**getTaskLocalVariable**](docs/Api/TaskLocalVariableApi.md#gettasklocalvariable) | **GET** /task/{id}/localVariables/{varName} | 
*TaskLocalVariableApi* | [**getTaskLocalVariableBinary**](docs/Api/TaskLocalVariableApi.md#gettasklocalvariablebinary) | **GET** /task/{id}/localVariables/{varName}/data | 
*TaskLocalVariableApi* | [**getTaskLocalVariables**](docs/Api/TaskLocalVariableApi.md#gettasklocalvariables) | **GET** /task/{id}/localVariables | 
*TaskLocalVariableApi* | [**modifyTaskLocalVariables**](docs/Api/TaskLocalVariableApi.md#modifytasklocalvariables) | **POST** /task/{id}/localVariables | 
*TaskLocalVariableApi* | [**putTaskLocalVariable**](docs/Api/TaskLocalVariableApi.md#puttasklocalvariable) | **PUT** /task/{id}/localVariables/{varName} | 
*TaskLocalVariableApi* | [**setBinaryTaskLocalVariable**](docs/Api/TaskLocalVariableApi.md#setbinarytasklocalvariable) | **POST** /task/{id}/localVariables/{varName}/data | 
*TaskVariableApi* | [**deleteTaskVariable**](docs/Api/TaskVariableApi.md#deletetaskvariable) | **DELETE** /task/{id}/variables/{varName} | 
*TaskVariableApi* | [**getTaskVariable**](docs/Api/TaskVariableApi.md#gettaskvariable) | **GET** /task/{id}/variables/{varName} | 
*TaskVariableApi* | [**getTaskVariableBinary**](docs/Api/TaskVariableApi.md#gettaskvariablebinary) | **GET** /task/{id}/variables/{varName}/data | 
*TaskVariableApi* | [**getTaskVariables**](docs/Api/TaskVariableApi.md#gettaskvariables) | **GET** /task/{id}/variables | 
*TaskVariableApi* | [**modifyTaskVariables**](docs/Api/TaskVariableApi.md#modifytaskvariables) | **POST** /task/{id}/variables | 
*TaskVariableApi* | [**putTaskVariable**](docs/Api/TaskVariableApi.md#puttaskvariable) | **PUT** /task/{id}/variables/{varName} | 
*TaskVariableApi* | [**setBinaryTaskVariable**](docs/Api/TaskVariableApi.md#setbinarytaskvariable) | **POST** /task/{id}/variables/{varName}/data | 
*VersionApi* | [**getRestAPIVersion**](docs/Api/VersionApi.md#getrestapiversion) | **GET** /version | 


## Documentation For Models

 - [ActivityInstanceDto](docs/Model/ActivityInstanceDto.md)
 - [ActivityInstanceIncidentDto](docs/Model/ActivityInstanceIncidentDto.md)
 - [ActivityStatisticsResultDto](docs/Model/ActivityStatisticsResultDto.md)
 - [AtomLink](docs/Model/AtomLink.md)
 - [AttachmentDto](docs/Model/AttachmentDto.md)
 - [AttachmentDtoAllOf](docs/Model/AttachmentDtoAllOf.md)
 - [AuthorizationExceptionDto](docs/Model/AuthorizationExceptionDto.md)
 - [AuthorizationExceptionDtoAllOf](docs/Model/AuthorizationExceptionDtoAllOf.md)
 - [BatchDto](docs/Model/BatchDto.md)
 - [CaseDefinitionDto](docs/Model/CaseDefinitionDto.md)
 - [CommentDto](docs/Model/CommentDto.md)
 - [CommentDtoAllOf](docs/Model/CommentDtoAllOf.md)
 - [CompleteExternalTaskDto](docs/Model/CompleteExternalTaskDto.md)
 - [CompleteTaskDto](docs/Model/CompleteTaskDto.md)
 - [CorrelationMessageDto](docs/Model/CorrelationMessageDto.md)
 - [CountResultDto](docs/Model/CountResultDto.md)
 - [DecisionDefinitionDto](docs/Model/DecisionDefinitionDto.md)
 - [DecisionRequirementsDefinitionDto](docs/Model/DecisionRequirementsDefinitionDto.md)
 - [DeleteProcessInstancesDto](docs/Model/DeleteProcessInstancesDto.md)
 - [DeploymentDto](docs/Model/DeploymentDto.md)
 - [DeploymentDtoAllOf](docs/Model/DeploymentDtoAllOf.md)
 - [DeploymentResourceDto](docs/Model/DeploymentResourceDto.md)
 - [DeploymentWithDefinitionsDto](docs/Model/DeploymentWithDefinitionsDto.md)
 - [DeploymentWithDefinitionsDtoAllOf](docs/Model/DeploymentWithDefinitionsDtoAllOf.md)
 - [EvaluationConditionDto](docs/Model/EvaluationConditionDto.md)
 - [EventSubscriptionDto](docs/Model/EventSubscriptionDto.md)
 - [EventSubscriptionQueryDto](docs/Model/EventSubscriptionQueryDto.md)
 - [EventSubscriptionQueryDtoSorting](docs/Model/EventSubscriptionQueryDtoSorting.md)
 - [ExceptionDto](docs/Model/ExceptionDto.md)
 - [ExecutionDto](docs/Model/ExecutionDto.md)
 - [ExtendLockOnExternalTaskDto](docs/Model/ExtendLockOnExternalTaskDto.md)
 - [ExternalTaskBpmnError](docs/Model/ExternalTaskBpmnError.md)
 - [ExternalTaskBpmnErrorAllOf](docs/Model/ExternalTaskBpmnErrorAllOf.md)
 - [ExternalTaskDto](docs/Model/ExternalTaskDto.md)
 - [ExternalTaskFailureDto](docs/Model/ExternalTaskFailureDto.md)
 - [ExternalTaskQueryDto](docs/Model/ExternalTaskQueryDto.md)
 - [ExternalTaskQueryDtoSorting](docs/Model/ExternalTaskQueryDtoSorting.md)
 - [FetchExternalTaskTopicDto](docs/Model/FetchExternalTaskTopicDto.md)
 - [FetchExternalTasksDto](docs/Model/FetchExternalTasksDto.md)
 - [FormDto](docs/Model/FormDto.md)
 - [HistoricProcessInstanceQueryDto](docs/Model/HistoricProcessInstanceQueryDto.md)
 - [HistoricProcessInstanceQueryDtoSorting](docs/Model/HistoricProcessInstanceQueryDtoSorting.md)
 - [HistoryTimeToLiveDto](docs/Model/HistoryTimeToLiveDto.md)
 - [IdentityLinkDto](docs/Model/IdentityLinkDto.md)
 - [IncidentStatisticsResultDto](docs/Model/IncidentStatisticsResultDto.md)
 - [LinkableDto](docs/Model/LinkableDto.md)
 - [LockedExternalTaskDto](docs/Model/LockedExternalTaskDto.md)
 - [MessageCorrelationResultWithVariableDto](docs/Model/MessageCorrelationResultWithVariableDto.md)
 - [MetricsIntervalResultDto](docs/Model/MetricsIntervalResultDto.md)
 - [MetricsResultDto](docs/Model/MetricsResultDto.md)
 - [MissingAuthorizationDto](docs/Model/MissingAuthorizationDto.md)
 - [MultiFormAttachmentDto](docs/Model/MultiFormAttachmentDto.md)
 - [MultiFormDeploymentDto](docs/Model/MultiFormDeploymentDto.md)
 - [MultiFormVariableBinaryDto](docs/Model/MultiFormVariableBinaryDto.md)
 - [ParseExceptionDto](docs/Model/ParseExceptionDto.md)
 - [ParseExceptionDtoAllOf](docs/Model/ParseExceptionDtoAllOf.md)
 - [PatchVariablesDto](docs/Model/PatchVariablesDto.md)
 - [PriorityDto](docs/Model/PriorityDto.md)
 - [ProblemDto](docs/Model/ProblemDto.md)
 - [ProcessDefinitionDiagramDto](docs/Model/ProcessDefinitionDiagramDto.md)
 - [ProcessDefinitionDto](docs/Model/ProcessDefinitionDto.md)
 - [ProcessDefinitionStatisticsResultDto](docs/Model/ProcessDefinitionStatisticsResultDto.md)
 - [ProcessDefinitionSuspensionStateDto](docs/Model/ProcessDefinitionSuspensionStateDto.md)
 - [ProcessEngineDto](docs/Model/ProcessEngineDto.md)
 - [ProcessInstanceDto](docs/Model/ProcessInstanceDto.md)
 - [ProcessInstanceDtoAllOf](docs/Model/ProcessInstanceDtoAllOf.md)
 - [ProcessInstanceModificationDto](docs/Model/ProcessInstanceModificationDto.md)
 - [ProcessInstanceModificationInstructionDto](docs/Model/ProcessInstanceModificationInstructionDto.md)
 - [ProcessInstanceQueryDto](docs/Model/ProcessInstanceQueryDto.md)
 - [ProcessInstanceQueryDtoSorting](docs/Model/ProcessInstanceQueryDtoSorting.md)
 - [ProcessInstanceSuspensionStateAsyncDto](docs/Model/ProcessInstanceSuspensionStateAsyncDto.md)
 - [ProcessInstanceSuspensionStateDto](docs/Model/ProcessInstanceSuspensionStateDto.md)
 - [ProcessInstanceWithVariablesDto](docs/Model/ProcessInstanceWithVariablesDto.md)
 - [ProcessInstanceWithVariablesDtoAllOf](docs/Model/ProcessInstanceWithVariablesDtoAllOf.md)
 - [RedeploymentDto](docs/Model/RedeploymentDto.md)
 - [ResourceReportDto](docs/Model/ResourceReportDto.md)
 - [RestartProcessInstanceDto](docs/Model/RestartProcessInstanceDto.md)
 - [RestartProcessInstanceModificationInstructionDto](docs/Model/RestartProcessInstanceModificationInstructionDto.md)
 - [RetriesDto](docs/Model/RetriesDto.md)
 - [SchemaLogEntryDto](docs/Model/SchemaLogEntryDto.md)
 - [SchemaLogQueryDto](docs/Model/SchemaLogQueryDto.md)
 - [SchemaLogQueryDtoSorting](docs/Model/SchemaLogQueryDtoSorting.md)
 - [SetJobRetriesByProcessDto](docs/Model/SetJobRetriesByProcessDto.md)
 - [SetRetriesForExternalTasksDto](docs/Model/SetRetriesForExternalTasksDto.md)
 - [SignalDto](docs/Model/SignalDto.md)
 - [SortTaskQueryParametersDto](docs/Model/SortTaskQueryParametersDto.md)
 - [StartProcessInstanceDto](docs/Model/StartProcessInstanceDto.md)
 - [StartProcessInstanceFormDto](docs/Model/StartProcessInstanceFormDto.md)
 - [SuspensionStateDto](docs/Model/SuspensionStateDto.md)
 - [TaskBpmnErrorDto](docs/Model/TaskBpmnErrorDto.md)
 - [TaskDto](docs/Model/TaskDto.md)
 - [TaskEscalationDto](docs/Model/TaskEscalationDto.md)
 - [TaskQueryDto](docs/Model/TaskQueryDto.md)
 - [TaskQueryDtoSorting](docs/Model/TaskQueryDtoSorting.md)
 - [TransitionInstanceDto](docs/Model/TransitionInstanceDto.md)
 - [TriggerVariableValueDto](docs/Model/TriggerVariableValueDto.md)
 - [TriggerVariableValueDtoAllOf](docs/Model/TriggerVariableValueDtoAllOf.md)
 - [UserIdDto](docs/Model/UserIdDto.md)
 - [VariableQueryParameterDto](docs/Model/VariableQueryParameterDto.md)
 - [VariableValueDto](docs/Model/VariableValueDto.md)
 - [VersionDto](docs/Model/VersionDto.md)


## Documentation For Authorization

All endpoints do not require authorization.


## Authors

* The Camunda team who wrote the OpenAPI spec for their REST API
* The [OpenAPI-Generator contributors](https://openapi-generator.tech) 
* [Tim Strehle](https://github.com/tistre) - https://twitter.com/tistre

## License

This library has been generated with the "unlicense" license by the OpenAPI Generator.
