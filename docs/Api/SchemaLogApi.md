# StrehleDe\CamundaClient\SchemaLogApi

All URIs are relative to *http://localhost:8080/engine-rest*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getSchemaLog**](SchemaLogApi.md#getSchemaLog) | **GET** /schema/log | 
[**querySchemaLog**](SchemaLogApi.md#querySchemaLog) | **POST** /schema/log | 



## getSchemaLog

> \StrehleDe\CamundaClient\Model\SchemaLogEntryDto[] getSchemaLog($version, $first_result, $max_results)



Queries for schema log entries that fulfill given parameters.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new StrehleDe\CamundaClient\Api\SchemaLogApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$version = 'version_example'; // string | Only return schema log entries with a specific version.
$first_result = 56; // int | Pagination of results. Specifies the index of the first result to return.
$max_results = 56; // int | Pagination of results. Specifies the maximum number of results to return. Will return less results if there are no more results left.

try {
    $result = $apiInstance->getSchemaLog($version, $first_result, $max_results);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SchemaLogApi->getSchemaLog: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **version** | **string**| Only return schema log entries with a specific version. | [optional]
 **first_result** | **int**| Pagination of results. Specifies the index of the first result to return. | [optional]
 **max_results** | **int**| Pagination of results. Specifies the maximum number of results to return. Will return less results if there are no more results left. | [optional]

### Return type

[**\StrehleDe\CamundaClient\Model\SchemaLogEntryDto[]**](../Model/SchemaLogEntryDto.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## querySchemaLog

> \StrehleDe\CamundaClient\Model\SchemaLogEntryDto[] querySchemaLog($first_result, $max_results, $schema_log_query_dto)



Queries for schema log entries that fulfill given parameters.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new StrehleDe\CamundaClient\Api\SchemaLogApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$first_result = 56; // int | Pagination of results. Specifies the index of the first result to return.
$max_results = 56; // int | Pagination of results. Specifies the maximum number of results to return. Will return less results if there are no more results left.
$schema_log_query_dto = {"version":"7.11.0","sortBy":"timestamp","sortOrder":"asc"}; // \StrehleDe\CamundaClient\Model\SchemaLogQueryDto | 

try {
    $result = $apiInstance->querySchemaLog($first_result, $max_results, $schema_log_query_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SchemaLogApi->querySchemaLog: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **first_result** | **int**| Pagination of results. Specifies the index of the first result to return. | [optional]
 **max_results** | **int**| Pagination of results. Specifies the maximum number of results to return. Will return less results if there are no more results left. | [optional]
 **schema_log_query_dto** | [**\StrehleDe\CamundaClient\Model\SchemaLogQueryDto**](../Model/SchemaLogQueryDto.md)|  | [optional]

### Return type

[**\StrehleDe\CamundaClient\Model\SchemaLogEntryDto[]**](../Model/SchemaLogEntryDto.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

