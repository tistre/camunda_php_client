# # ProcessDefinitionSuspensionStateDto

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**suspended** | **bool** | A &#x60;Boolean&#x60; value which indicates whether to activate or suspend all process definitions with the given key. When the value is set to &#x60;true&#x60;, all process definitions with the given key will be suspended and when the value is set to &#x60;false&#x60;, all process definitions with the given key will be activated. | [optional] 
**process_definition_id** | **string** | The id of the process definitions to activate or suspend. | [optional] 
**process_definition_key** | **string** | The key of the process definitions to activate or suspend. | [optional] 
**include_process_instances** | **bool** | A &#x60;Boolean&#x60; value which indicates whether to activate or suspend also all process instances of  the process definitions with the given key. When the value is set to &#x60;true&#x60;, all process instances of the process definitions with the given key will be activated or suspended and when the value is set to &#x60;false&#x60;, the suspension state of  all process instances of the process definitions with the given key will not be updated. | [optional] 
**execution_date** | [**\DateTime**](\DateTime.md) | The date on which all process definitions with the given key will be activated or suspended. If &#x60;null&#x60;, the suspension state of all process definitions with the given key is updated immediately. By [default](https://docs.camunda.org/manual/7.13/reference/rest/overview/date-format/), the date must have the format yyyy-MM-dd&#39;T&#39;HH:mm:ss.SSSZ, e.g., 2013-01-23T14:42:45.000+0200. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


