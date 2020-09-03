# # ProcessDefinitionDto

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | The id of the process definition | [optional] 
**key** | **string** | The key of the process definition, i.e., the id of the BPMN 2.0 XML process definition. | [optional] 
**category** | **string** | The category of the process definition. | [optional] 
**description** | **string** | The description of the process definition. | [optional] 
**name** | **string** | The name of the process definition. | [optional] 
**version** | **int** | The version of the process definition that the engine assigned to it. | [optional] 
**resource** | **string** | The file name of the process definition. | [optional] 
**deployment_id** | **string** | The deployment id of the process definition. | [optional] 
**diagram** | **string** | The file name of the process definition diagram, if it exists. | [optional] 
**suspended** | **bool** | A flag indicating whether the definition is suspended or not. | [optional] 
**tenant_id** | **string** | The tenant id of the process definition. | [optional] 
**version_tag** | **string** | The version tag of the process definition. | [optional] 
**history_time_to_live** | **int** | History time to live value of the process definition. Is used within [History cleanup](https://docs.camunda.org/manual/7.13/user-guide/process-engine/history/#history-cleanup). | [optional] 
**startable_in_tasklist** | **bool** | A flag indicating whether the process definition is startable in Tasklist or not. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


