# # CommentDtoAllOf

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | The id of the task comment. | [optional] 
**user_id** | **string** | The id of the user who created the comment. | [optional] 
**task_id** | **string** | The id of the task to which the comment belongs. | [optional] 
**time** | [**\DateTime**](\DateTime.md) | The time when the comment was created. [Default format]($(docsUrl)/reference/rest/overview/date-format/) &#x60;yyyy-MM-dd&#39;T&#39;HH:mm:ss.SSSZ&#x60;. | [optional] 
**message** | **string** | The content of the comment. | [optional] 
**removal_time** | [**\DateTime**](\DateTime.md) | The time after which the comment should be removed by the History Cleanup job. [Default format]($(docsUrl)/reference/rest/overview/date-format/) &#x60;yyyy-MM-dd&#39;T&#39;HH:mm:ss.SSSZ&#x60;. | [optional] 
**root_process_instance_id** | **string** | The process instance id of the root process instance that initiated the process containing the task. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


