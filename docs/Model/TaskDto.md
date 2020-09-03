# # TaskDto

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | The task id. | [optional] 
**name** | **string** | The task name. | [optional] 
**assignee** | **string** | The assignee&#39;s id. | [optional] 
**owner** | **string** | The owner&#39;s id. | [optional] 
**created** | [**\DateTime**](\DateTime.md) | The date the task was created on. [Default format](https://docs.camunda.org/manual/7.13/reference/rest/overview/date-format/) &#x60;yyyy-MM-dd&#39;T&#39;HH:mm:ss.SSSZ&#x60;. | [optional] 
**due** | [**\DateTime**](\DateTime.md) | The task&#39;s due date. [Default format](https://docs.camunda.org/manual/7.13/reference/rest/overview/date-format/) &#x60;yyyy-MM-dd&#39;T&#39;HH:mm:ss.SSSZ&#x60;. | [optional] 
**follow_up** | [**\DateTime**](\DateTime.md) | The follow-up date for the task. [Default format](https://docs.camunda.org/manual/7.13/reference/rest/overview/date-format/) &#x60;yyyy-MM-dd&#39;T&#39;HH:mm:ss.SSSZ&#x60;. | [optional] 
**delegation_state** | **string** | The task&#39;s delegation state. Possible values are &#x60;PENDING&#x60; and &#x60;RESOLVED&#x60;. | [optional] 
**description** | **string** | The task&#39;s description. | [optional] 
**execution_id** | **string** | The id of the execution the task belongs to. | [optional] 
**parent_task_id** | **string** | The id the parent task, if this task is a subtask. | [optional] 
**priority** | **int** | The task&#39;s priority. | [optional] 
**process_definition_id** | **string** | The id of the process definition the task belongs to. | [optional] 
**process_instance_id** | **string** | The id of the process instance the task belongs to. | [optional] 
**case_execution_id** | **string** | The id of the case execution the task belongs to. | [optional] 
**case_definition_id** | **string** | The id of the case definition the task belongs to. | [optional] 
**case_instance_id** | **string** | The id of the case instance the task belongs to. | [optional] 
**task_definition_key** | **string** | The task&#39;s key. | [optional] 
**suspended** | **bool** | Whether the task belongs to a process instance that is suspended. | [optional] 
**form_key** | **string** | If not &#x60;null&#x60;, the form key for the task. | [optional] 
**tenant_id** | **string** | If not &#x60;null&#x60;, the tenant id of the task. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


