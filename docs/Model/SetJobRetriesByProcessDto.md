# # SetJobRetriesByProcessDto

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**process_instances** | **string[]** | A list of process instance ids to fetch jobs, for which retries will be set. | [optional] 
**retries** | **int** | An integer representing the number of retries. Please note that the value cannot be negative or null. | [optional] 
**process_instance_query** | [**\StrehleDe\CamundaClient\Model\ProcessInstanceQueryDto**](ProcessInstanceQueryDto.md) |  | [optional] 
**historic_process_instance_query** | [**\StrehleDe\CamundaClient\Model\HistoricProcessInstanceQueryDto**](HistoricProcessInstanceQueryDto.md) |  | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


