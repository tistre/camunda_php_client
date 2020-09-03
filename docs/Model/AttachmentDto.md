# # AttachmentDto

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | The id of the task attachment. | [optional] 
**name** | **string** | The name of the task attachment. | [optional] 
**description** | **string** | The description of the task attachment. | [optional] 
**task_id** | **string** | The id of the task to which the attachment belongs. | [optional] 
**type** | **string** | Indication of the type of content that this attachment refers to. Can be MIME type or any other indication. | [optional] 
**url** | **string** | The url to the remote content of the task attachment. | [optional] 
**create_time** | [**\DateTime**](\DateTime.md) | The time the variable was inserted. [Default format](https://docs.camunda.org/manual/7.13/reference/rest/overview/date-format/) &#x60;yyyy-MM-dd&#39;T&#39;HH:mm:ss.SSSZ&#x60;. | [optional] 
**removal_time** | [**\DateTime**](\DateTime.md) | The time after which the attachment should be removed by the History Cleanup job. [Default format](https://docs.camunda.org/manual/7.13/reference/rest/overview/date-format/) &#x60;yyyy-MM-dd&#39;T&#39;HH:mm:ss.SSSZ&#x60;. | [optional] 
**root_process_instance_id** | **string** | The process instance id of the root process instance that initiated the process containing the task. | [optional] 
**links** | [**\StrehleDe\CamundaClient\Model\AtomLink[]**](AtomLink.md) | The links associated to this resource, with &#x60;method&#x60;, &#x60;href&#x60; and &#x60;rel&#x60;. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


