# # FetchExternalTaskTopicDto

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**topic_name** | **string** | **Mandatory.** The topic&#39;s name. | 
**lock_duration** | **int** | **Mandatory.** The duration to lock the external tasks for in milliseconds. | 
**variables** | **string[]** | A JSON array of &#x60;String&#x60; values that represent variable names. For each result task belonging to this topic, the given variables are returned as well if they are accessible from the external task&#39;s execution. If not provided - all variables will be fetched. | [optional] 
**local_variables** | **bool** | If &#x60;true&#x60; only local variables will be fetched. | [optional] [default to false]
**business_key** | **string** | A &#x60;String&#x60; value which enables the filtering of tasks based on process instance business key. | [optional] 
**process_definition_id** | **string** | Filter tasks based on process definition id. | [optional] 
**process_definition_id_in** | **string[]** | Filter tasks based on process definition ids. | [optional] 
**process_definition_key** | **string** | Filter tasks based on process definition key. | [optional] 
**process_definition_key_in** | **string[]** | Filter tasks based on process definition keys. | [optional] 
**process_definition_version_tag** | **string** | Filter tasks based on process definition version tag. | [optional] 
**without_tenant_id** | **bool** | Filter tasks without tenant id. | [optional] [default to false]
**tenant_id_in** | **string[]** | Filter tasks based on tenant ids. | [optional] 
**process_variables** | **map[string,object]** | A &#x60;JSON&#x60; object used for filtering tasks based on process instance variable values. A property name of the object represents a process variable name, while the property value represents the process variable value to filter tasks by. | [optional] 
**deserialize_values** | **bool** | Determines whether serializable variable values (typically variables that store custom Java objects) should be deserialized on server side (default &#x60;false&#x60;).  If set to &#x60;true&#x60;, a serializable variable will be deserialized on server side and transformed to JSON using [Jackson&#39;s](https://github.com/FasterXML/jackson) POJO/bean property introspection feature. Note that this requires the Java classes of the variable value to be on the REST API&#39;s classpath.  If set to &#x60;false&#x60;, a serializable variable will be returned in its serialized format. For example, a variable that is serialized as XML will be returned as a JSON string containing XML. | [optional] [default to false]

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


