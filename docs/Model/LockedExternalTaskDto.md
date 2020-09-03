# # LockedExternalTaskDto

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**activity_id** | **string** | The id of the activity that this external task belongs to. | [optional] 
**activity_instance_id** | **string** | The id of the activity instance that the external task belongs to. | [optional] 
**error_message** | **string** | The full error message submitted with the latest reported failure executing this task;&#x60;null&#x60; if no failure was reported previously or if no error message was submitted | [optional] 
**error_details** | **string** | The error details submitted with the latest reported failure executing this task.&#x60;null&#x60; if no failure was reported previously or if no error details was submitted | [optional] 
**execution_id** | **string** | The id of the execution that the external task belongs to. | [optional] 
**id** | **string** | The id of the external task. | [optional] 
**lock_expiration_time** | [**\DateTime**](\DateTime.md) | The date that the task&#39;s most recent lock expires or has expired. | [optional] 
**process_definition_id** | **string** | The id of the process definition the external task is defined in. | [optional] 
**process_definition_key** | **string** | The key of the process definition the external task is defined in. | [optional] 
**process_definition_version_tag** | **string** | The version tag of the process definition the external task is defined in. | [optional] 
**process_instance_id** | **string** | The id of the process instance the external task belongs to. | [optional] 
**tenant_id** | **string** | The id of the tenant the external task belongs to. | [optional] 
**retries** | **int** | The number of retries the task currently has left. | [optional] 
**suspended** | **bool** | Whether the process instance the external task belongs to is suspended. | [optional] 
**worker_id** | **string** | The id of the worker that posesses or posessed the most recent lock. | [optional] 
**priority** | **int** | The priority of the external task. | [optional] 
**topic_name** | **string** | The topic name of the external task. | [optional] 
**business_key** | **string** | The business key of the process instance the external task belongs to. | [optional] 
**variables** | [**map[string,\StrehleDe\CamundaClient\Model\VariableValueDto]**](VariableValueDto.md) | A JSON object containing a property for each of the requested variables. The key is the variable name, the value is a JSON object of serialized variable values with the following properties: | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


