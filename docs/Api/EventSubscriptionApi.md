# StrehleDe\CamundaClient\EventSubscriptionApi

All URIs are relative to *http://localhost:8080/engine-rest*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getEventSubscriptions**](EventSubscriptionApi.md#getEventSubscriptions) | **GET** /event-subscription | 
[**getEventSubscriptionsCount**](EventSubscriptionApi.md#getEventSubscriptionsCount) | **GET** /event-subscription/count | 



## getEventSubscriptions

> \StrehleDe\CamundaClient\Model\EventSubscriptionDto[] getEventSubscriptions($event_subscription_id, $event_name, $event_type, $execution_id, $process_instance_id, $activity_id, $tenant_id_in, $without_tenant_id, $include_event_subscriptions_without_tenant_id, $sort_by, $sort_order, $first_result, $max_results)



Queries for event subscriptions that fulfill given parameters. The size of the result set can be retrieved by using the [Get Event Subscriptions count](https://docs.camunda.org/manual/7.13/reference/rest/event-subscription/get-query-count/) method.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new StrehleDe\CamundaClient\Api\EventSubscriptionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$event_subscription_id = 'event_subscription_id_example'; // string | Only select subscription with the given id.
$event_name = 'event_name_example'; // string | Only select subscriptions for events with the given name.
$event_type = 'event_type_example'; // string | Only select subscriptions for events with the given type. Valid values: `message`, `signal`, `compensate` and `conditional`.
$execution_id = 'execution_id_example'; // string | Only select subscriptions that belong to an execution with the given id.
$process_instance_id = 'process_instance_id_example'; // string | Only select subscriptions that belong to a process instance with the given id.
$activity_id = 'activity_id_example'; // string | Only select subscriptions that belong to an activity with the given id.
$tenant_id_in = 'tenant_id_in_example'; // string | Filter by a comma-separated list of tenant ids. Only select subscriptions that belong to one of the given tenant ids.
$without_tenant_id = True; // bool | Only select subscriptions which have no tenant id. Value may only be `true`, as `false` is the default behavior.
$include_event_subscriptions_without_tenant_id = True; // bool | Select event subscriptions which have no tenant id. Can be used in combination with tenantIdIn parameter. Value may only be `true`, as `false` is the default behavior.
$sort_by = 'sort_by_example'; // string | Sort the results lexicographically by a given criterion. Must be used in conjunction with the sortOrder parameter.
$sort_order = 'sort_order_example'; // string | Sort the results in a given order. Values may be asc for ascending order or desc for descending order. Must be used in conjunction with the sortBy parameter.
$first_result = 56; // int | Pagination of results. Specifies the index of the first result to return.
$max_results = 56; // int | Pagination of results. Specifies the maximum number of results to return. Will return less results if there are no more results left.

try {
    $result = $apiInstance->getEventSubscriptions($event_subscription_id, $event_name, $event_type, $execution_id, $process_instance_id, $activity_id, $tenant_id_in, $without_tenant_id, $include_event_subscriptions_without_tenant_id, $sort_by, $sort_order, $first_result, $max_results);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EventSubscriptionApi->getEventSubscriptions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **event_subscription_id** | **string**| Only select subscription with the given id. | [optional]
 **event_name** | **string**| Only select subscriptions for events with the given name. | [optional]
 **event_type** | **string**| Only select subscriptions for events with the given type. Valid values: &#x60;message&#x60;, &#x60;signal&#x60;, &#x60;compensate&#x60; and &#x60;conditional&#x60;. | [optional]
 **execution_id** | **string**| Only select subscriptions that belong to an execution with the given id. | [optional]
 **process_instance_id** | **string**| Only select subscriptions that belong to a process instance with the given id. | [optional]
 **activity_id** | **string**| Only select subscriptions that belong to an activity with the given id. | [optional]
 **tenant_id_in** | **string**| Filter by a comma-separated list of tenant ids. Only select subscriptions that belong to one of the given tenant ids. | [optional]
 **without_tenant_id** | **bool**| Only select subscriptions which have no tenant id. Value may only be &#x60;true&#x60;, as &#x60;false&#x60; is the default behavior. | [optional]
 **include_event_subscriptions_without_tenant_id** | **bool**| Select event subscriptions which have no tenant id. Can be used in combination with tenantIdIn parameter. Value may only be &#x60;true&#x60;, as &#x60;false&#x60; is the default behavior. | [optional]
 **sort_by** | **string**| Sort the results lexicographically by a given criterion. Must be used in conjunction with the sortOrder parameter. | [optional]
 **sort_order** | **string**| Sort the results in a given order. Values may be asc for ascending order or desc for descending order. Must be used in conjunction with the sortBy parameter. | [optional]
 **first_result** | **int**| Pagination of results. Specifies the index of the first result to return. | [optional]
 **max_results** | **int**| Pagination of results. Specifies the maximum number of results to return. Will return less results if there are no more results left. | [optional]

### Return type

[**\StrehleDe\CamundaClient\Model\EventSubscriptionDto[]**](../Model/EventSubscriptionDto.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getEventSubscriptionsCount

> \StrehleDe\CamundaClient\Model\CountResultDto getEventSubscriptionsCount($event_subscription_id, $event_name, $event_type, $execution_id, $process_instance_id, $activity_id, $tenant_id_in, $without_tenant_id, $include_event_subscriptions_without_tenant_id)



Queries for the number of event subscriptions that fulfill given parameters. Takes the same parameters as the [Get Event Subscriptions](https://docs.camunda.org/manual/7.13/reference/rest/event-subscription/get-query/) method.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new StrehleDe\CamundaClient\Api\EventSubscriptionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$event_subscription_id = 'event_subscription_id_example'; // string | Only select subscription with the given id.
$event_name = 'event_name_example'; // string | Only select subscriptions for events with the given name.
$event_type = 'event_type_example'; // string | Only select subscriptions for events with the given type. Valid values: `message`, `signal`, `compensate` and `conditional`.
$execution_id = 'execution_id_example'; // string | Only select subscriptions that belong to an execution with the given id.
$process_instance_id = 'process_instance_id_example'; // string | Only select subscriptions that belong to a process instance with the given id.
$activity_id = 'activity_id_example'; // string | Only select subscriptions that belong to an activity with the given id.
$tenant_id_in = 'tenant_id_in_example'; // string | Filter by a comma-separated list of tenant ids. Only select subscriptions that belong to one of the given tenant ids.
$without_tenant_id = True; // bool | Only select subscriptions which have no tenant id. Value may only be `true`, as `false` is the default behavior.
$include_event_subscriptions_without_tenant_id = True; // bool | Select event subscriptions which have no tenant id. Can be used in combination with tenantIdIn parameter. Value may only be `true`, as `false` is the default behavior.

try {
    $result = $apiInstance->getEventSubscriptionsCount($event_subscription_id, $event_name, $event_type, $execution_id, $process_instance_id, $activity_id, $tenant_id_in, $without_tenant_id, $include_event_subscriptions_without_tenant_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EventSubscriptionApi->getEventSubscriptionsCount: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **event_subscription_id** | **string**| Only select subscription with the given id. | [optional]
 **event_name** | **string**| Only select subscriptions for events with the given name. | [optional]
 **event_type** | **string**| Only select subscriptions for events with the given type. Valid values: &#x60;message&#x60;, &#x60;signal&#x60;, &#x60;compensate&#x60; and &#x60;conditional&#x60;. | [optional]
 **execution_id** | **string**| Only select subscriptions that belong to an execution with the given id. | [optional]
 **process_instance_id** | **string**| Only select subscriptions that belong to a process instance with the given id. | [optional]
 **activity_id** | **string**| Only select subscriptions that belong to an activity with the given id. | [optional]
 **tenant_id_in** | **string**| Filter by a comma-separated list of tenant ids. Only select subscriptions that belong to one of the given tenant ids. | [optional]
 **without_tenant_id** | **bool**| Only select subscriptions which have no tenant id. Value may only be &#x60;true&#x60;, as &#x60;false&#x60; is the default behavior. | [optional]
 **include_event_subscriptions_without_tenant_id** | **bool**| Select event subscriptions which have no tenant id. Can be used in combination with tenantIdIn parameter. Value may only be &#x60;true&#x60;, as &#x60;false&#x60; is the default behavior. | [optional]

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

