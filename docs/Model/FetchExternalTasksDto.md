# # FetchExternalTasksDto

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**worker_id** | **string** | **Mandatory.** The id of the worker on which behalf tasks are fetched. The returned tasks are locked for that worker and can only be completed when providing the same worker id. | 
**max_tasks** | **int** | **Mandatory.** The maximum number of tasks to return. | 
**use_priority** | **bool** | A &#x60;boolean&#x60; value, which indicates whether the task should be fetched based on its priority or arbitrarily. | [optional] 
**async_response_timeout** | **int** | The [Long Polling](https://docs.camunda.org/manual/7.13/user-guide/process-engine/external-tasks/#long-polling-to-fetch-and-lock-external-tasks) timeout in milliseconds.  **Note:** The value cannot be set larger than 1.800.000 milliseconds (corresponds to 30 minutes). | [optional] 
**topics** | [**\StrehleDe\CamundaClient\Model\FetchExternalTaskTopicDto[]**](FetchExternalTaskTopicDto.md) | A JSON array of topic objects for which external tasks should be fetched. The returned tasks may be arbitrarily distributed among these topics. Each topic object has the following properties: | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


