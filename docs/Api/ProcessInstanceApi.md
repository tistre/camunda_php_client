# StrehleDe\CamundaClient\ProcessInstanceApi

All URIs are relative to *http://localhost:8080/engine-rest*

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteAsyncHistoricQueryBased**](ProcessInstanceApi.md#deleteAsyncHistoricQueryBased) | **POST** /process-instance/delete-historic-query-based | 
[**deleteProcessInstance**](ProcessInstanceApi.md#deleteProcessInstance) | **DELETE** /process-instance/{id} | 
[**deleteProcessInstanceVariable**](ProcessInstanceApi.md#deleteProcessInstanceVariable) | **DELETE** /process-instance/{id}/variables/{varName} | 
[**deleteProcessInstancesAsyncOperation**](ProcessInstanceApi.md#deleteProcessInstancesAsyncOperation) | **POST** /process-instance/delete | 
[**getActivityInstanceTree**](ProcessInstanceApi.md#getActivityInstanceTree) | **GET** /process-instance/{id}/activity-instances | 
[**getProcessInstanceVariable**](ProcessInstanceApi.md#getProcessInstanceVariable) | **GET** /process-instance/{id}/variables/{varName} | 
[**getProcessInstanceVariableBinary**](ProcessInstanceApi.md#getProcessInstanceVariableBinary) | **GET** /process-instance/{id}/variables/{varName}/data | 
[**getProcessInstanceVariables**](ProcessInstanceApi.md#getProcessInstanceVariables) | **GET** /process-instance/{id}/variables | 
[**getProcessInstances**](ProcessInstanceApi.md#getProcessInstances) | **GET** /process-instance | 
[**getProcessInstancesCount**](ProcessInstanceApi.md#getProcessInstancesCount) | **GET** /process-instance/count | 
[**modifyProcessInstance**](ProcessInstanceApi.md#modifyProcessInstance) | **POST** /process-instance/{id}/modification | 
[**modifyProcessInstanceAsyncOperation**](ProcessInstanceApi.md#modifyProcessInstanceAsyncOperation) | **POST** /process-instance/{id}/modification-async | 
[**modifyProcessInstanceVariables**](ProcessInstanceApi.md#modifyProcessInstanceVariables) | **POST** /process-instance/{id}/variables | 
[**queryProcessInstances**](ProcessInstanceApi.md#queryProcessInstances) | **POST** /process-instance | 
[**queryProcessInstancesCount**](ProcessInstanceApi.md#queryProcessInstancesCount) | **POST** /process-instance/count | 
[**setProcessInstanceVariable**](ProcessInstanceApi.md#setProcessInstanceVariable) | **PUT** /process-instance/{id}/variables/{varName} | 
[**setProcessInstanceVariableBinary**](ProcessInstanceApi.md#setProcessInstanceVariableBinary) | **POST** /process-instance/{id}/variables/{varName}/data | 
[**setRetriesByProcess**](ProcessInstanceApi.md#setRetriesByProcess) | **POST** /process-instance/job-retries | 
[**setRetriesByProcessHistoricQueryBased**](ProcessInstanceApi.md#setRetriesByProcessHistoricQueryBased) | **POST** /process-instance/job-retries-historic-query-based | 
[**updateSuspensionState**](ProcessInstanceApi.md#updateSuspensionState) | **PUT** /process-instance/suspended | 
[**updateSuspensionStateAsyncOperation**](ProcessInstanceApi.md#updateSuspensionStateAsyncOperation) | **POST** /process-instance/suspended-async | 
[**updateSuspensionStateById**](ProcessInstanceApi.md#updateSuspensionStateById) | **PUT** /process-instance/{id}/suspended | 



## deleteAsyncHistoricQueryBased

> \StrehleDe\CamundaClient\Model\BatchDto deleteAsyncHistoricQueryBased($delete_process_instances_dto)



Deletes a set of process instances asynchronously (batch) based on a historic process instance query.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new StrehleDe\CamundaClient\Api\ProcessInstanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$delete_process_instances_dto = {"deleteReason":"aReason","historicProcessInstanceQuery":{"startedBefore":"2017-04-28T11:24:37.765+0200"},"skipCustomListeners":true,"skipSubprocesses":true}; // \StrehleDe\CamundaClient\Model\DeleteProcessInstancesDto | **Unallowed property**: `processInstanceQuery`

try {
    $result = $apiInstance->deleteAsyncHistoricQueryBased($delete_process_instances_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProcessInstanceApi->deleteAsyncHistoricQueryBased: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **delete_process_instances_dto** | [**\StrehleDe\CamundaClient\Model\DeleteProcessInstancesDto**](../Model/DeleteProcessInstancesDto.md)| **Unallowed property**: &#x60;processInstanceQuery&#x60; | [optional]

### Return type

[**\StrehleDe\CamundaClient\Model\BatchDto**](../Model/BatchDto.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## deleteProcessInstance

> deleteProcessInstance($id, $skip_custom_listeners, $skip_io_mappings, $skip_subprocesses, $fail_if_not_exists)



Deletes a running process instance by id.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new StrehleDe\CamundaClient\Api\ProcessInstanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | The id of the process instance to be deleted.
$skip_custom_listeners = false; // bool | If set to true, the custom listeners will be skipped.
$skip_io_mappings = false; // bool | If set to true, the input/output mappings will be skipped.
$skip_subprocesses = false; // bool | If set to true, subprocesses related to deleted processes will be skipped.
$fail_if_not_exists = true; // bool | If set to false, the request will still be successful if the process id is not found.

try {
    $apiInstance->deleteProcessInstance($id, $skip_custom_listeners, $skip_io_mappings, $skip_subprocesses, $fail_if_not_exists);
} catch (Exception $e) {
    echo 'Exception when calling ProcessInstanceApi->deleteProcessInstance: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The id of the process instance to be deleted. |
 **skip_custom_listeners** | **bool**| If set to true, the custom listeners will be skipped. | [optional] [default to false]
 **skip_io_mappings** | **bool**| If set to true, the input/output mappings will be skipped. | [optional] [default to false]
 **skip_subprocesses** | **bool**| If set to true, subprocesses related to deleted processes will be skipped. | [optional] [default to false]
 **fail_if_not_exists** | **bool**| If set to false, the request will still be successful if the process id is not found. | [optional] [default to true]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## deleteProcessInstanceVariable

> deleteProcessInstanceVariable($id, $var_name)



Deletes a variable of a process instance by id.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new StrehleDe\CamundaClient\Api\ProcessInstanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | The id of the process instance to delete the variable from.
$var_name = 'var_name_example'; // string | The name of the variable to delete.

try {
    $apiInstance->deleteProcessInstanceVariable($id, $var_name);
} catch (Exception $e) {
    echo 'Exception when calling ProcessInstanceApi->deleteProcessInstanceVariable: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The id of the process instance to delete the variable from. |
 **var_name** | **string**| The name of the variable to delete. |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## deleteProcessInstancesAsyncOperation

> \StrehleDe\CamundaClient\Model\BatchDto deleteProcessInstancesAsyncOperation($delete_process_instances_dto)



Deletes multiple process instances asynchronously (batch).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new StrehleDe\CamundaClient\Api\ProcessInstanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$delete_process_instances_dto = {"deleteReason":"aReason","processInstanceIds":["aProcess","secondProcess"],"skipCustomListeners":true,"skipSubprocesses":true}; // \StrehleDe\CamundaClient\Model\DeleteProcessInstancesDto | **Unallowed property**: `historicProcessInstanceQuery`

try {
    $result = $apiInstance->deleteProcessInstancesAsyncOperation($delete_process_instances_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProcessInstanceApi->deleteProcessInstancesAsyncOperation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **delete_process_instances_dto** | [**\StrehleDe\CamundaClient\Model\DeleteProcessInstancesDto**](../Model/DeleteProcessInstancesDto.md)| **Unallowed property**: &#x60;historicProcessInstanceQuery&#x60; | [optional]

### Return type

[**\StrehleDe\CamundaClient\Model\BatchDto**](../Model/BatchDto.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getActivityInstanceTree

> \StrehleDe\CamundaClient\Model\ActivityInstanceDto getActivityInstanceTree($id)



Retrieves an Activity Instance (Tree) for a given process instance by id.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new StrehleDe\CamundaClient\Api\ProcessInstanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | The id of the process instance for which the activity instance should be retrieved.

try {
    $result = $apiInstance->getActivityInstanceTree($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProcessInstanceApi->getActivityInstanceTree: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The id of the process instance for which the activity instance should be retrieved. |

### Return type

[**\StrehleDe\CamundaClient\Model\ActivityInstanceDto**](../Model/ActivityInstanceDto.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getProcessInstanceVariable

> \StrehleDe\CamundaClient\Model\VariableValueDto getProcessInstanceVariable($id, $var_name, $deserialize_value)



Retrieves a variable of a given process instance by id.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new StrehleDe\CamundaClient\Api\ProcessInstanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | The id of the process instance to retrieve the variable for.
$var_name = 'var_name_example'; // string | The name of the variable to retrieve.
$deserialize_value = true; // bool | Determines whether serializable variable values (typically variables that store custom Java objects) should be deserialized on server side (default true).  If set to true, a serializable variable will be deserialized on server side and transformed to JSON using [Jackson's](https://github.com/FasterXML/jackson) POJO/bean property introspection feature. Note that this requires the Java classes of the variable value to be on the REST API's classpath.  If set to false, a serializable variable will be returned in its serialized format. For example, a variable that is serialized as XML will be returned as a JSON string containing XML.  Note: While true is the default value for reasons of backward compatibility, we recommend setting this parameter to false when developing web applications that are independent of the Java process applications deployed to the engine.

try {
    $result = $apiInstance->getProcessInstanceVariable($id, $var_name, $deserialize_value);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProcessInstanceApi->getProcessInstanceVariable: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The id of the process instance to retrieve the variable for. |
 **var_name** | **string**| The name of the variable to retrieve. |
 **deserialize_value** | **bool**| Determines whether serializable variable values (typically variables that store custom Java objects) should be deserialized on server side (default true).  If set to true, a serializable variable will be deserialized on server side and transformed to JSON using [Jackson&#39;s](https://github.com/FasterXML/jackson) POJO/bean property introspection feature. Note that this requires the Java classes of the variable value to be on the REST API&#39;s classpath.  If set to false, a serializable variable will be returned in its serialized format. For example, a variable that is serialized as XML will be returned as a JSON string containing XML.  Note: While true is the default value for reasons of backward compatibility, we recommend setting this parameter to false when developing web applications that are independent of the Java process applications deployed to the engine. | [optional] [default to true]

### Return type

[**\StrehleDe\CamundaClient\Model\VariableValueDto**](../Model/VariableValueDto.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getProcessInstanceVariableBinary

> \SplFileObject getProcessInstanceVariableBinary($id, $var_name)



Retrieves the content of a Process Variable by the Process Instance id and the Process Variable name. Applicable for byte array or file Process Variables.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new StrehleDe\CamundaClient\Api\ProcessInstanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | The id of the process instance to retrieve the variable for.
$var_name = 'var_name_example'; // string | The name of the variable to retrieve.

try {
    $result = $apiInstance->getProcessInstanceVariableBinary($id, $var_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProcessInstanceApi->getProcessInstanceVariableBinary: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The id of the process instance to retrieve the variable for. |
 **var_name** | **string**| The name of the variable to retrieve. |

### Return type

[**\SplFileObject**](../Model/\SplFileObject.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/octet-stream, text/plain, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getProcessInstanceVariables

> map[string,\StrehleDe\CamundaClient\Model\VariableValueDto] getProcessInstanceVariables($id, $deserialize_value)



Retrieves all variables of a given process instance by id.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new StrehleDe\CamundaClient\Api\ProcessInstanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | The id of the process instance to retrieve the variables from.
$deserialize_value = true; // bool | Determines whether serializable variable values (typically variables that store custom Java objects) should be deserialized on server side (default true).  If set to true, a serializable variable will be deserialized on server side and transformed to JSON using [Jackson's](https://github.com/FasterXML/jackson) POJO/bean property introspection feature. Note that this requires the Java classes of the variable value to be on the REST API's classpath.  If set to false, a serializable variable will be returned in its serialized format. For example, a variable that is serialized as XML will be returned as a JSON string containing XML.  Note: While true is the default value for reasons of backward compatibility, we recommend setting this parameter to false when developing web applications that are independent of the Java process applications deployed to the engine.

try {
    $result = $apiInstance->getProcessInstanceVariables($id, $deserialize_value);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProcessInstanceApi->getProcessInstanceVariables: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The id of the process instance to retrieve the variables from. |
 **deserialize_value** | **bool**| Determines whether serializable variable values (typically variables that store custom Java objects) should be deserialized on server side (default true).  If set to true, a serializable variable will be deserialized on server side and transformed to JSON using [Jackson&#39;s](https://github.com/FasterXML/jackson) POJO/bean property introspection feature. Note that this requires the Java classes of the variable value to be on the REST API&#39;s classpath.  If set to false, a serializable variable will be returned in its serialized format. For example, a variable that is serialized as XML will be returned as a JSON string containing XML.  Note: While true is the default value for reasons of backward compatibility, we recommend setting this parameter to false when developing web applications that are independent of the Java process applications deployed to the engine. | [optional] [default to true]

### Return type

[**map[string,\StrehleDe\CamundaClient\Model\VariableValueDto]**](../Model/VariableValueDto.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getProcessInstances

> \StrehleDe\CamundaClient\Model\ProcessInstanceDto[] getProcessInstances($sort_by, $sort_order, $first_result, $max_results, $process_instance_ids, $business_key, $business_key_like, $case_instance_id, $process_definition_id, $process_definition_key, $process_definition_key_in, $process_definition_key_not_in, $deployment_id, $super_process_instance, $sub_process_instance, $super_case_instance, $sub_case_instance, $active, $suspended, $with_incident, $incident_id, $incident_type, $incident_message, $incident_message_like, $tenant_id_in, $without_tenant_id, $process_definition_without_tenant_id, $activity_id_in, $root_process_instances, $leaf_process_instances, $variables, $variable_names_ignore_case, $variable_values_ignore_case)



Queries for process instances that fulfill given parameters. Parameters may be static as well as dynamic runtime properties of process instances. The size of the result set can be retrieved by using the Get Instance Count method.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new StrehleDe\CamundaClient\Api\ProcessInstanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$sort_by = 'sort_by_example'; // string | Sort the results lexicographically by a given criterion. Must be used in conjunction with the sortOrder parameter.
$sort_order = 'sort_order_example'; // string | Sort the results in a given order. Values may be asc for ascending order or desc for descending order. Must be used in conjunction with the sortBy parameter.
$first_result = 56; // int | Pagination of results. Specifies the index of the first result to return.
$max_results = 56; // int | Pagination of results. Specifies the maximum number of results to return. Will return less results if there are no more results left.
$process_instance_ids = 'process_instance_ids_example'; // string | Filter by a comma-separated list of process instance ids.
$business_key = 'business_key_example'; // string | Filter by process instance business key.
$business_key_like = 'business_key_like_example'; // string | Filter by process instance business key that the parameter is a substring of.
$case_instance_id = 'case_instance_id_example'; // string | Filter by case instance id.
$process_definition_id = 'process_definition_id_example'; // string | Filter by the deployment the id belongs to.
$process_definition_key = 'process_definition_key_example'; // string | Filter by the key of the process definition the instances run on.
$process_definition_key_in = 'process_definition_key_in_example'; // string | Filter by a comma-separated list of process definition keys. A process instance must have one of the given process definition keys.
$process_definition_key_not_in = 'process_definition_key_not_in_example'; // string | Exclude instances by a comma-separated list of process definition keys. A process instance must not have one of the given process definition keys.
$deployment_id = 'deployment_id_example'; // string | Filter by the deployment the id belongs to.
$super_process_instance = 'super_process_instance_example'; // string | Restrict query to all process instances that are sub process instances of the given process instance. Takes a process instance id.
$sub_process_instance = 'sub_process_instance_example'; // string | Restrict query to all process instances that have the given process instance as a sub process instance. Takes a process instance id.
$super_case_instance = 'super_case_instance_example'; // string | Restrict query to all process instances that are sub process instances of the given case instance. Takes a case instance id.
$sub_case_instance = 'sub_case_instance_example'; // string | Restrict query to all process instances that have the given case instance as a sub case instance. Takes a case instance id.
$active = false; // bool | Only include active process instances. Value may only be true, as false is the default behavior.
$suspended = false; // bool | Only include suspended process instances. Value may only be true, as false is the default behavior.
$with_incident = false; // bool | Filter by presence of incidents. Selects only process instances that have an incident.
$incident_id = 'incident_id_example'; // string | Filter by the incident id.
$incident_type = 'incident_type_example'; // string | Filter by the incident type. See the [User Guide](https://docs.camunda.org/manual/7.13/user-guide/process-engine/incidents/#incident-types) for a list of incident types.
$incident_message = 'incident_message_example'; // string | Filter by the incident message. Exact match.
$incident_message_like = 'incident_message_like_example'; // string | Filter by the incident message that the parameter is a substring of.
$tenant_id_in = 'tenant_id_in_example'; // string | Filter by a comma-separated list of tenant ids. A process instance must have one of the given tenant ids.
$without_tenant_id = false; // bool | Only include process instances which belong to no tenant.
$process_definition_without_tenant_id = false; // bool | Only include process instances which process definition has no tenant id.
$activity_id_in = 'activity_id_in_example'; // string | Filter by a comma-separated list of activity ids. A process instance must currently wait in a leaf activity with one of the given activity ids.
$root_process_instances = false; // bool | Restrict the query to all process instances that are top level process instances.
$leaf_process_instances = false; // bool | Restrict the query to all process instances that are leaf instances. (i.e. don't have any sub instances).
$variables = 'variables_example'; // string | Only include process instances that have variables with certain values. Variable filtering expressions are comma-separated and are structured as follows:  A valid parameter value has the form `key_operator_value`. `key` is the variable name, `operator` is the comparison operator to be used and `value` the variable value.  **Note**: Values are always treated as String objects on server side.  Valid `operator` values are: `eq` - equal to; `neq` - not equal to; `gt` - greater than; `gteq` - greater than or equal to; `lt` - lower than; `lteq` - lower than or equal to; `like`. `key` and `value` may not contain underscore or comma characters.
$variable_names_ignore_case = false; // bool | Match all variable names in this query case-insensitively. If set to true variableName and variablename are treated as equal.
$variable_values_ignore_case = false; // bool | Match all variable values in this query case-insensitively. If set to true variableValue and variablevalue are treated as equal.

try {
    $result = $apiInstance->getProcessInstances($sort_by, $sort_order, $first_result, $max_results, $process_instance_ids, $business_key, $business_key_like, $case_instance_id, $process_definition_id, $process_definition_key, $process_definition_key_in, $process_definition_key_not_in, $deployment_id, $super_process_instance, $sub_process_instance, $super_case_instance, $sub_case_instance, $active, $suspended, $with_incident, $incident_id, $incident_type, $incident_message, $incident_message_like, $tenant_id_in, $without_tenant_id, $process_definition_without_tenant_id, $activity_id_in, $root_process_instances, $leaf_process_instances, $variables, $variable_names_ignore_case, $variable_values_ignore_case);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProcessInstanceApi->getProcessInstances: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sort_by** | **string**| Sort the results lexicographically by a given criterion. Must be used in conjunction with the sortOrder parameter. | [optional]
 **sort_order** | **string**| Sort the results in a given order. Values may be asc for ascending order or desc for descending order. Must be used in conjunction with the sortBy parameter. | [optional]
 **first_result** | **int**| Pagination of results. Specifies the index of the first result to return. | [optional]
 **max_results** | **int**| Pagination of results. Specifies the maximum number of results to return. Will return less results if there are no more results left. | [optional]
 **process_instance_ids** | **string**| Filter by a comma-separated list of process instance ids. | [optional]
 **business_key** | **string**| Filter by process instance business key. | [optional]
 **business_key_like** | **string**| Filter by process instance business key that the parameter is a substring of. | [optional]
 **case_instance_id** | **string**| Filter by case instance id. | [optional]
 **process_definition_id** | **string**| Filter by the deployment the id belongs to. | [optional]
 **process_definition_key** | **string**| Filter by the key of the process definition the instances run on. | [optional]
 **process_definition_key_in** | **string**| Filter by a comma-separated list of process definition keys. A process instance must have one of the given process definition keys. | [optional]
 **process_definition_key_not_in** | **string**| Exclude instances by a comma-separated list of process definition keys. A process instance must not have one of the given process definition keys. | [optional]
 **deployment_id** | **string**| Filter by the deployment the id belongs to. | [optional]
 **super_process_instance** | **string**| Restrict query to all process instances that are sub process instances of the given process instance. Takes a process instance id. | [optional]
 **sub_process_instance** | **string**| Restrict query to all process instances that have the given process instance as a sub process instance. Takes a process instance id. | [optional]
 **super_case_instance** | **string**| Restrict query to all process instances that are sub process instances of the given case instance. Takes a case instance id. | [optional]
 **sub_case_instance** | **string**| Restrict query to all process instances that have the given case instance as a sub case instance. Takes a case instance id. | [optional]
 **active** | **bool**| Only include active process instances. Value may only be true, as false is the default behavior. | [optional] [default to false]
 **suspended** | **bool**| Only include suspended process instances. Value may only be true, as false is the default behavior. | [optional] [default to false]
 **with_incident** | **bool**| Filter by presence of incidents. Selects only process instances that have an incident. | [optional] [default to false]
 **incident_id** | **string**| Filter by the incident id. | [optional]
 **incident_type** | **string**| Filter by the incident type. See the [User Guide](https://docs.camunda.org/manual/7.13/user-guide/process-engine/incidents/#incident-types) for a list of incident types. | [optional]
 **incident_message** | **string**| Filter by the incident message. Exact match. | [optional]
 **incident_message_like** | **string**| Filter by the incident message that the parameter is a substring of. | [optional]
 **tenant_id_in** | **string**| Filter by a comma-separated list of tenant ids. A process instance must have one of the given tenant ids. | [optional]
 **without_tenant_id** | **bool**| Only include process instances which belong to no tenant. | [optional] [default to false]
 **process_definition_without_tenant_id** | **bool**| Only include process instances which process definition has no tenant id. | [optional] [default to false]
 **activity_id_in** | **string**| Filter by a comma-separated list of activity ids. A process instance must currently wait in a leaf activity with one of the given activity ids. | [optional]
 **root_process_instances** | **bool**| Restrict the query to all process instances that are top level process instances. | [optional] [default to false]
 **leaf_process_instances** | **bool**| Restrict the query to all process instances that are leaf instances. (i.e. don&#39;t have any sub instances). | [optional] [default to false]
 **variables** | **string**| Only include process instances that have variables with certain values. Variable filtering expressions are comma-separated and are structured as follows:  A valid parameter value has the form &#x60;key_operator_value&#x60;. &#x60;key&#x60; is the variable name, &#x60;operator&#x60; is the comparison operator to be used and &#x60;value&#x60; the variable value.  **Note**: Values are always treated as String objects on server side.  Valid &#x60;operator&#x60; values are: &#x60;eq&#x60; - equal to; &#x60;neq&#x60; - not equal to; &#x60;gt&#x60; - greater than; &#x60;gteq&#x60; - greater than or equal to; &#x60;lt&#x60; - lower than; &#x60;lteq&#x60; - lower than or equal to; &#x60;like&#x60;. &#x60;key&#x60; and &#x60;value&#x60; may not contain underscore or comma characters. | [optional]
 **variable_names_ignore_case** | **bool**| Match all variable names in this query case-insensitively. If set to true variableName and variablename are treated as equal. | [optional] [default to false]
 **variable_values_ignore_case** | **bool**| Match all variable values in this query case-insensitively. If set to true variableValue and variablevalue are treated as equal. | [optional] [default to false]

### Return type

[**\StrehleDe\CamundaClient\Model\ProcessInstanceDto[]**](../Model/ProcessInstanceDto.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getProcessInstancesCount

> \StrehleDe\CamundaClient\Model\CountResultDto getProcessInstancesCount($process_instance_ids, $business_key, $business_key_like, $case_instance_id, $process_definition_id, $process_definition_key, $process_definition_key_in, $process_definition_key_not_in, $deployment_id, $super_process_instance, $sub_process_instance, $super_case_instance, $sub_case_instance, $active, $suspended, $with_incident, $incident_id, $incident_type, $incident_message, $incident_message_like, $tenant_id_in, $without_tenant_id, $process_definition_without_tenant_id, $activity_id_in, $root_process_instances, $leaf_process_instances, $variables, $variable_names_ignore_case, $variable_values_ignore_case)



Queries for the number of process instances that fulfill given parameters.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new StrehleDe\CamundaClient\Api\ProcessInstanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$process_instance_ids = 'process_instance_ids_example'; // string | Filter by a comma-separated list of process instance ids.
$business_key = 'business_key_example'; // string | Filter by process instance business key.
$business_key_like = 'business_key_like_example'; // string | Filter by process instance business key that the parameter is a substring of.
$case_instance_id = 'case_instance_id_example'; // string | Filter by case instance id.
$process_definition_id = 'process_definition_id_example'; // string | Filter by the deployment the id belongs to.
$process_definition_key = 'process_definition_key_example'; // string | Filter by the key of the process definition the instances run on.
$process_definition_key_in = 'process_definition_key_in_example'; // string | Filter by a comma-separated list of process definition keys. A process instance must have one of the given process definition keys.
$process_definition_key_not_in = 'process_definition_key_not_in_example'; // string | Exclude instances by a comma-separated list of process definition keys. A process instance must not have one of the given process definition keys.
$deployment_id = 'deployment_id_example'; // string | Filter by the deployment the id belongs to.
$super_process_instance = 'super_process_instance_example'; // string | Restrict query to all process instances that are sub process instances of the given process instance. Takes a process instance id.
$sub_process_instance = 'sub_process_instance_example'; // string | Restrict query to all process instances that have the given process instance as a sub process instance. Takes a process instance id.
$super_case_instance = 'super_case_instance_example'; // string | Restrict query to all process instances that are sub process instances of the given case instance. Takes a case instance id.
$sub_case_instance = 'sub_case_instance_example'; // string | Restrict query to all process instances that have the given case instance as a sub case instance. Takes a case instance id.
$active = false; // bool | Only include active process instances. Value may only be true, as false is the default behavior.
$suspended = false; // bool | Only include suspended process instances. Value may only be true, as false is the default behavior.
$with_incident = false; // bool | Filter by presence of incidents. Selects only process instances that have an incident.
$incident_id = 'incident_id_example'; // string | Filter by the incident id.
$incident_type = 'incident_type_example'; // string | Filter by the incident type. See the [User Guide](https://docs.camunda.org/manual/7.13/user-guide/process-engine/incidents/#incident-types) for a list of incident types.
$incident_message = 'incident_message_example'; // string | Filter by the incident message. Exact match.
$incident_message_like = 'incident_message_like_example'; // string | Filter by the incident message that the parameter is a substring of.
$tenant_id_in = 'tenant_id_in_example'; // string | Filter by a comma-separated list of tenant ids. A process instance must have one of the given tenant ids.
$without_tenant_id = false; // bool | Only include process instances which belong to no tenant.
$process_definition_without_tenant_id = false; // bool | Only include process instances which process definition has no tenant id.
$activity_id_in = 'activity_id_in_example'; // string | Filter by a comma-separated list of activity ids. A process instance must currently wait in a leaf activity with one of the given activity ids.
$root_process_instances = false; // bool | Restrict the query to all process instances that are top level process instances.
$leaf_process_instances = false; // bool | Restrict the query to all process instances that are leaf instances. (i.e. don't have any sub instances).
$variables = 'variables_example'; // string | Only include process instances that have variables with certain values. Variable filtering expressions are comma-separated and are structured as follows:  A valid parameter value has the form `key_operator_value`. `key` is the variable name, `operator` is the comparison operator to be used and `value` the variable value.  **Note**: Values are always treated as String objects on server side.  Valid `operator` values are: `eq` - equal to; `neq` - not equal to; `gt` - greater than; `gteq` - greater than or equal to; `lt` - lower than; `lteq` - lower than or equal to; `like`. `key` and `value` may not contain underscore or comma characters.
$variable_names_ignore_case = false; // bool | Match all variable names in this query case-insensitively. If set to true variableName and variablename are treated as equal.
$variable_values_ignore_case = false; // bool | Match all variable values in this query case-insensitively. If set to true variableValue and variablevalue are treated as equal.

try {
    $result = $apiInstance->getProcessInstancesCount($process_instance_ids, $business_key, $business_key_like, $case_instance_id, $process_definition_id, $process_definition_key, $process_definition_key_in, $process_definition_key_not_in, $deployment_id, $super_process_instance, $sub_process_instance, $super_case_instance, $sub_case_instance, $active, $suspended, $with_incident, $incident_id, $incident_type, $incident_message, $incident_message_like, $tenant_id_in, $without_tenant_id, $process_definition_without_tenant_id, $activity_id_in, $root_process_instances, $leaf_process_instances, $variables, $variable_names_ignore_case, $variable_values_ignore_case);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProcessInstanceApi->getProcessInstancesCount: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **process_instance_ids** | **string**| Filter by a comma-separated list of process instance ids. | [optional]
 **business_key** | **string**| Filter by process instance business key. | [optional]
 **business_key_like** | **string**| Filter by process instance business key that the parameter is a substring of. | [optional]
 **case_instance_id** | **string**| Filter by case instance id. | [optional]
 **process_definition_id** | **string**| Filter by the deployment the id belongs to. | [optional]
 **process_definition_key** | **string**| Filter by the key of the process definition the instances run on. | [optional]
 **process_definition_key_in** | **string**| Filter by a comma-separated list of process definition keys. A process instance must have one of the given process definition keys. | [optional]
 **process_definition_key_not_in** | **string**| Exclude instances by a comma-separated list of process definition keys. A process instance must not have one of the given process definition keys. | [optional]
 **deployment_id** | **string**| Filter by the deployment the id belongs to. | [optional]
 **super_process_instance** | **string**| Restrict query to all process instances that are sub process instances of the given process instance. Takes a process instance id. | [optional]
 **sub_process_instance** | **string**| Restrict query to all process instances that have the given process instance as a sub process instance. Takes a process instance id. | [optional]
 **super_case_instance** | **string**| Restrict query to all process instances that are sub process instances of the given case instance. Takes a case instance id. | [optional]
 **sub_case_instance** | **string**| Restrict query to all process instances that have the given case instance as a sub case instance. Takes a case instance id. | [optional]
 **active** | **bool**| Only include active process instances. Value may only be true, as false is the default behavior. | [optional] [default to false]
 **suspended** | **bool**| Only include suspended process instances. Value may only be true, as false is the default behavior. | [optional] [default to false]
 **with_incident** | **bool**| Filter by presence of incidents. Selects only process instances that have an incident. | [optional] [default to false]
 **incident_id** | **string**| Filter by the incident id. | [optional]
 **incident_type** | **string**| Filter by the incident type. See the [User Guide](https://docs.camunda.org/manual/7.13/user-guide/process-engine/incidents/#incident-types) for a list of incident types. | [optional]
 **incident_message** | **string**| Filter by the incident message. Exact match. | [optional]
 **incident_message_like** | **string**| Filter by the incident message that the parameter is a substring of. | [optional]
 **tenant_id_in** | **string**| Filter by a comma-separated list of tenant ids. A process instance must have one of the given tenant ids. | [optional]
 **without_tenant_id** | **bool**| Only include process instances which belong to no tenant. | [optional] [default to false]
 **process_definition_without_tenant_id** | **bool**| Only include process instances which process definition has no tenant id. | [optional] [default to false]
 **activity_id_in** | **string**| Filter by a comma-separated list of activity ids. A process instance must currently wait in a leaf activity with one of the given activity ids. | [optional]
 **root_process_instances** | **bool**| Restrict the query to all process instances that are top level process instances. | [optional] [default to false]
 **leaf_process_instances** | **bool**| Restrict the query to all process instances that are leaf instances. (i.e. don&#39;t have any sub instances). | [optional] [default to false]
 **variables** | **string**| Only include process instances that have variables with certain values. Variable filtering expressions are comma-separated and are structured as follows:  A valid parameter value has the form &#x60;key_operator_value&#x60;. &#x60;key&#x60; is the variable name, &#x60;operator&#x60; is the comparison operator to be used and &#x60;value&#x60; the variable value.  **Note**: Values are always treated as String objects on server side.  Valid &#x60;operator&#x60; values are: &#x60;eq&#x60; - equal to; &#x60;neq&#x60; - not equal to; &#x60;gt&#x60; - greater than; &#x60;gteq&#x60; - greater than or equal to; &#x60;lt&#x60; - lower than; &#x60;lteq&#x60; - lower than or equal to; &#x60;like&#x60;. &#x60;key&#x60; and &#x60;value&#x60; may not contain underscore or comma characters. | [optional]
 **variable_names_ignore_case** | **bool**| Match all variable names in this query case-insensitively. If set to true variableName and variablename are treated as equal. | [optional] [default to false]
 **variable_values_ignore_case** | **bool**| Match all variable values in this query case-insensitively. If set to true variableValue and variablevalue are treated as equal. | [optional] [default to false]

### Return type

[**\StrehleDe\CamundaClient\Model\CountResultDto**](../Model/CountResultDto.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## modifyProcessInstance

> modifyProcessInstance($id, $process_instance_modification_dto)



Submits a list of modification instructions to change a process instance's execution state. A modification instruction is one of the following:  * Starting execution before an activity * Starting execution after an activity on its single outgoing sequence flow * Starting execution on a specific sequence flow * Canceling an activity instance, transition instance, or all instances (activity or transition) for an activity  Instructions are executed immediately and in the order they are provided in this request's body. Variables can be provided with every starting instruction.  The exact semantics of modification can be read about in the [User guide](https://docs.camunda.org/manual/develop/user-guide/process-engine/process-instance-modification/).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new StrehleDe\CamundaClient\Api\ProcessInstanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | The id of the process instance to modify.
$process_instance_modification_dto = {"skipCustomListeners":true,"skipIoMappings":true,"instructions":[{"type":"startBeforeActivity","activityId":"activityId","variables":{"var":{"value":"aVariableValue","local":false,"type":"String"},"varLocal":{"value":"anotherVariableValue","local":true,"type":"String"}}},{"type":"cancel","activityInstanceId":"anActivityInstanceId"}],"annotation":"Modified to resolve an error."}; // \StrehleDe\CamundaClient\Model\ProcessInstanceModificationDto | 

try {
    $apiInstance->modifyProcessInstance($id, $process_instance_modification_dto);
} catch (Exception $e) {
    echo 'Exception when calling ProcessInstanceApi->modifyProcessInstance: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The id of the process instance to modify. |
 **process_instance_modification_dto** | [**\StrehleDe\CamundaClient\Model\ProcessInstanceModificationDto**](../Model/ProcessInstanceModificationDto.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## modifyProcessInstanceAsyncOperation

> \StrehleDe\CamundaClient\Model\BatchDto modifyProcessInstanceAsyncOperation($id, $process_instance_modification_dto)



Submits a list of modification instructions to change a process instance's execution state async. A modification instruction is one of the following:  * Starting execution before an activity * Starting execution after an activity on its single outgoing sequence flow * Starting execution on a specific sequence flow * Cancelling an activity instance, transition instance, or all instances (activity or transition) for an activity  Instructions are executed asynchronous and in the order they are provided in this request's body. Variables can be provided with every starting instruction.  The exact semantics of modification can be read about in the [User guide](https://docs.camunda.org/manual/7.13/user-guide/process-engine/process-instance-modification/).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new StrehleDe\CamundaClient\Api\ProcessInstanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | The id of the process instance to modify.
$process_instance_modification_dto = {"skipCustomListeners":true,"skipIoMappings":true,"instructions":[{"type":"startBeforeActivity","activityId":"activityId"},{"type":"cancel","activityInstanceId":"anActivityInstanceId"}],"annotation":"Modified to resolve an error."}; // \StrehleDe\CamundaClient\Model\ProcessInstanceModificationDto | 

try {
    $result = $apiInstance->modifyProcessInstanceAsyncOperation($id, $process_instance_modification_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProcessInstanceApi->modifyProcessInstanceAsyncOperation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The id of the process instance to modify. |
 **process_instance_modification_dto** | [**\StrehleDe\CamundaClient\Model\ProcessInstanceModificationDto**](../Model/ProcessInstanceModificationDto.md)|  | [optional]

### Return type

[**\StrehleDe\CamundaClient\Model\BatchDto**](../Model/BatchDto.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## modifyProcessInstanceVariables

> modifyProcessInstanceVariables($id, $patch_variables_dto)



Updates or deletes the variables of a process instance by id. Updates precede deletions. So, if a variable is updated AND deleted, the deletion overrides the update.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new StrehleDe\CamundaClient\Api\ProcessInstanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | The id of the process instance to set variables for.
$patch_variables_dto = {"modifications":{"aVariable":{"value":"aValue","type":"String"},"anotherVariable":{"value":42,"type":"Integer"}},"deletions":["aThirdVariable","FourthVariable"]}; // \StrehleDe\CamundaClient\Model\PatchVariablesDto | 

try {
    $apiInstance->modifyProcessInstanceVariables($id, $patch_variables_dto);
} catch (Exception $e) {
    echo 'Exception when calling ProcessInstanceApi->modifyProcessInstanceVariables: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The id of the process instance to set variables for. |
 **patch_variables_dto** | [**\StrehleDe\CamundaClient\Model\PatchVariablesDto**](../Model/PatchVariablesDto.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## queryProcessInstances

> \StrehleDe\CamundaClient\Model\ProcessInstanceDto[] queryProcessInstances($first_result, $max_results, $process_instance_query_dto)



Queries for process instances that fulfill given parameters through a JSON object. This method is slightly more powerful than the Get Instances method because it allows filtering by multiple process variables of types `string`, `number` or `boolean`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new StrehleDe\CamundaClient\Api\ProcessInstanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$first_result = 56; // int | Pagination of results. Specifies the index of the first result to return.
$max_results = 56; // int | Pagination of results. Specifies the maximum number of results to return. Will return less results if there are no more results left.
$process_instance_query_dto = {"variables":[{"name":"myVariable","operator":"eq","value":"camunda"},{"name":"mySecondVariable","operator":"neq","value":124}],"processDefinitionId":"aProcessDefinitionId","sorting":[{"sortBy":"definitionKey","sortOrder":"asc"},{"sortBy":"instanceId","sortOrder":"desc"}]}; // \StrehleDe\CamundaClient\Model\ProcessInstanceQueryDto | 

try {
    $result = $apiInstance->queryProcessInstances($first_result, $max_results, $process_instance_query_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProcessInstanceApi->queryProcessInstances: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **first_result** | **int**| Pagination of results. Specifies the index of the first result to return. | [optional]
 **max_results** | **int**| Pagination of results. Specifies the maximum number of results to return. Will return less results if there are no more results left. | [optional]
 **process_instance_query_dto** | [**\StrehleDe\CamundaClient\Model\ProcessInstanceQueryDto**](../Model/ProcessInstanceQueryDto.md)|  | [optional]

### Return type

[**\StrehleDe\CamundaClient\Model\ProcessInstanceDto[]**](../Model/ProcessInstanceDto.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## queryProcessInstancesCount

> \StrehleDe\CamundaClient\Model\CountResultDto queryProcessInstancesCount($process_instance_query_dto)



Queries for the number of process instances that fulfill the given parameters. This method takes the same message body as the Get Instances (POST) method and therefore it is slightly more powerful than the Get Instance Count method.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new StrehleDe\CamundaClient\Api\ProcessInstanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$process_instance_query_dto = {"variables":[{"name":"myVariable","operator":"eq","value":"camunda"},{"name":"mySecondVariable","operator":"neq","value":124}],"processDefinitionId":"aProcessDefinitionId"}; // \StrehleDe\CamundaClient\Model\ProcessInstanceQueryDto | 

try {
    $result = $apiInstance->queryProcessInstancesCount($process_instance_query_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProcessInstanceApi->queryProcessInstancesCount: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **process_instance_query_dto** | [**\StrehleDe\CamundaClient\Model\ProcessInstanceQueryDto**](../Model/ProcessInstanceQueryDto.md)|  | [optional]

### Return type

[**\StrehleDe\CamundaClient\Model\CountResultDto**](../Model/CountResultDto.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## setProcessInstanceVariable

> setProcessInstanceVariable($id, $var_name, $variable_value_dto)



Sets a variable of a given process instance by id.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new StrehleDe\CamundaClient\Api\ProcessInstanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | The id of the process instance to set the variable for.
$var_name = 'var_name_example'; // string | The name of the variable to set.
$variable_value_dto = {"value":"someValue","type":"String"}; // \StrehleDe\CamundaClient\Model\VariableValueDto | 

try {
    $apiInstance->setProcessInstanceVariable($id, $var_name, $variable_value_dto);
} catch (Exception $e) {
    echo 'Exception when calling ProcessInstanceApi->setProcessInstanceVariable: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The id of the process instance to set the variable for. |
 **var_name** | **string**| The name of the variable to set. |
 **variable_value_dto** | [**\StrehleDe\CamundaClient\Model\VariableValueDto**](../Model/VariableValueDto.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## setProcessInstanceVariableBinary

> setProcessInstanceVariableBinary($id, $var_name, $data, $value_type)



Sets the serialized value for a binary variable or the binary value for a file variable.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new StrehleDe\CamundaClient\Api\ProcessInstanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | The id of the process instance to retrieve the variable for.
$var_name = 'var_name_example'; // string | The name of the variable to retrieve.
$data = "/path/to/file.txt"; // \SplFileObject | The binary data to be set. For File variables, this multipart can contain the filename, binary value and MIME type of the file variable to be set Only the filename is mandatory.
$value_type = 'value_type_example'; // string | The name of the variable type. Either Bytes for a byte array variable or File for a file variable.

try {
    $apiInstance->setProcessInstanceVariableBinary($id, $var_name, $data, $value_type);
} catch (Exception $e) {
    echo 'Exception when calling ProcessInstanceApi->setProcessInstanceVariableBinary: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The id of the process instance to retrieve the variable for. |
 **var_name** | **string**| The name of the variable to retrieve. |
 **data** | **\SplFileObject****\SplFileObject**| The binary data to be set. For File variables, this multipart can contain the filename, binary value and MIME type of the file variable to be set Only the filename is mandatory. | [optional]
 **value_type** | **string**| The name of the variable type. Either Bytes for a byte array variable or File for a file variable. | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: multipart/form-data
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## setRetriesByProcess

> \StrehleDe\CamundaClient\Model\BatchDto setRetriesByProcess($set_job_retries_by_process_dto)



Create a batch to set retries of jobs associated with given processes asynchronously.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new StrehleDe\CamundaClient\Api\ProcessInstanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$set_job_retries_by_process_dto = {"retries":5,"processInstances":["aProcess","secondProcess"],"processInstanceQuery":{"processDefinitionId":"aProcessDefinitionId"}}; // \StrehleDe\CamundaClient\Model\SetJobRetriesByProcessDto | Please note that if both processInstances and processInstanceQuery are provided, then the resulting execution will be performed on the union of these sets. **Unallowed property**: `historicProcessInstanceQuery`

try {
    $result = $apiInstance->setRetriesByProcess($set_job_retries_by_process_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProcessInstanceApi->setRetriesByProcess: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **set_job_retries_by_process_dto** | [**\StrehleDe\CamundaClient\Model\SetJobRetriesByProcessDto**](../Model/SetJobRetriesByProcessDto.md)| Please note that if both processInstances and processInstanceQuery are provided, then the resulting execution will be performed on the union of these sets. **Unallowed property**: &#x60;historicProcessInstanceQuery&#x60; | [optional]

### Return type

[**\StrehleDe\CamundaClient\Model\BatchDto**](../Model/BatchDto.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## setRetriesByProcessHistoricQueryBased

> \StrehleDe\CamundaClient\Model\BatchDto setRetriesByProcessHistoricQueryBased($set_job_retries_by_process_dto)



Create a batch to set retries of jobs asynchronously based on a historic process instance query.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new StrehleDe\CamundaClient\Api\ProcessInstanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$set_job_retries_by_process_dto = {"retries":5,"historicProcessInstanceQuery":{"startedBefore":"2017-04-28T11:24:37.769+0200"},"processInstances":["aProcess","secondProcess"]}; // \StrehleDe\CamundaClient\Model\SetJobRetriesByProcessDto | Please note that if both processInstances and historicProcessInstanceQuery are provided, then the resulting execution will be performed on the union of these sets. **Unallowed property**: `processInstanceQuery`

try {
    $result = $apiInstance->setRetriesByProcessHistoricQueryBased($set_job_retries_by_process_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProcessInstanceApi->setRetriesByProcessHistoricQueryBased: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **set_job_retries_by_process_dto** | [**\StrehleDe\CamundaClient\Model\SetJobRetriesByProcessDto**](../Model/SetJobRetriesByProcessDto.md)| Please note that if both processInstances and historicProcessInstanceQuery are provided, then the resulting execution will be performed on the union of these sets. **Unallowed property**: &#x60;processInstanceQuery&#x60; | [optional]

### Return type

[**\StrehleDe\CamundaClient\Model\BatchDto**](../Model/BatchDto.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## updateSuspensionState

> updateSuspensionState($process_instance_suspension_state_dto)



Activates or suspends process instances by providing certain criteria:  # Activate/Suspend Process Instance By Process Definition Id * `suspend` * `processDefinitionId`  # Activate/Suspend Process Instance By Process Definition Key  * `suspend` * `processDefinitionKey` * `processDefinitionTenantId` * `processDefinitionWithoutTenantId`  # Activate/Suspend Process Instance In Group * `suspend` * `processInstanceIds` * `processInstanceQuery` * `historicProcessInstanceQuery`

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new StrehleDe\CamundaClient\Api\ProcessInstanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$process_instance_suspension_state_dto = {"processDefinitionId":"aProcDefId","suspended":true}; // \StrehleDe\CamundaClient\Model\ProcessInstanceSuspensionStateDto | 

try {
    $apiInstance->updateSuspensionState($process_instance_suspension_state_dto);
} catch (Exception $e) {
    echo 'Exception when calling ProcessInstanceApi->updateSuspensionState: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **process_instance_suspension_state_dto** | [**\StrehleDe\CamundaClient\Model\ProcessInstanceSuspensionStateDto**](../Model/ProcessInstanceSuspensionStateDto.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## updateSuspensionStateAsyncOperation

> \StrehleDe\CamundaClient\Model\BatchDto updateSuspensionStateAsyncOperation($process_instance_suspension_state_async_dto)



Activates or suspends process instances asynchronously with a list of process instance ids, a process instance query, and/or a historical process instance query.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new StrehleDe\CamundaClient\Api\ProcessInstanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$process_instance_suspension_state_async_dto = {"processInstanceIds":["processInstanceId1","processInstanceIdN"],"suspended":true}; // \StrehleDe\CamundaClient\Model\ProcessInstanceSuspensionStateAsyncDto | 

try {
    $result = $apiInstance->updateSuspensionStateAsyncOperation($process_instance_suspension_state_async_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProcessInstanceApi->updateSuspensionStateAsyncOperation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **process_instance_suspension_state_async_dto** | [**\StrehleDe\CamundaClient\Model\ProcessInstanceSuspensionStateAsyncDto**](../Model/ProcessInstanceSuspensionStateAsyncDto.md)|  | [optional]

### Return type

[**\StrehleDe\CamundaClient\Model\BatchDto**](../Model/BatchDto.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## updateSuspensionStateById

> updateSuspensionStateById($id, $suspension_state_dto)



Activates or suspends a given process instance by id.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new StrehleDe\CamundaClient\Api\ProcessInstanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | The id of the process instance to activate or suspend.
$suspension_state_dto = {"suspended":true}; // \StrehleDe\CamundaClient\Model\SuspensionStateDto | 

try {
    $apiInstance->updateSuspensionStateById($id, $suspension_state_dto);
} catch (Exception $e) {
    echo 'Exception when calling ProcessInstanceApi->updateSuspensionStateById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The id of the process instance to activate or suspend. |
 **suspension_state_dto** | [**\StrehleDe\CamundaClient\Model\SuspensionStateDto**](../Model/SuspensionStateDto.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

