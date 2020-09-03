# # ActivityInstanceDto

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | The id of the activity instance. | [optional] 
**parent_activity_instance_id** | **string** | The id of the parent activity instance, for example a sub process instance. | [optional] 
**activity_id** | **string** | The id of the activity. | [optional] 
**activity_name** | **string** | The name of the activity | [optional] 
**activity_type** | **string** | The type of activity (corresponds to the XML element name in the BPMN 2.0, e.g., &#39;userTask&#39;) | [optional] 
**process_instance_id** | **string** | The id of the process instance this activity instance is part of. | [optional] 
**process_definition_id** | **string** | The id of the process definition. | [optional] 
**child_activity_instances** | [**\StrehleDe\CamundaClient\Model\ActivityInstanceDto[]**](ActivityInstanceDto.md) | A list of child activity instances. | [optional] 
**child_transition_instances** | [**\StrehleDe\CamundaClient\Model\TransitionInstanceDto[]**](TransitionInstanceDto.md) | A list of child transition instances. A transition instance represents an execution waiting in an asynchronous continuation. | [optional] 
**execution_ids** | **string[]** | A list of execution ids. | [optional] 
**incident_ids** | **string[]** | A list of incident ids. | [optional] 
**incidents** | [**\StrehleDe\CamundaClient\Model\ActivityInstanceIncidentDto[]**](ActivityInstanceIncidentDto.md) | A list of JSON objects containing incident specific properties: * &#x60;id&#x60;: the id of the incident * &#x60;activityId&#x60;: the activity id in which the incident occurred | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


