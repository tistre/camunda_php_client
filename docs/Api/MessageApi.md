# StrehleDe\CamundaClient\MessageApi

All URIs are relative to *http://localhost:8080/engine-rest*

Method | HTTP request | Description
------------- | ------------- | -------------
[**deliverMessage**](MessageApi.md#deliverMessage) | **POST** /message | 



## deliverMessage

> \StrehleDe\CamundaClient\Model\MessageCorrelationResultWithVariableDto[] deliverMessage($correlation_message_dto)



Correlates a message to the process engine to either trigger a message start event or an intermediate message  catching event. Internally this maps to the engine's message correlation builder methods `MessageCorrelationBuilder#correlateWithResult()` and `MessageCorrelationBuilder#correlateAllWithResult()`. For more information about the correlation behavior, see the [Message Events](https://docs.camunda.org/manual/7.13/bpmn20/events/message-events/) section of the [BPMN 2.0 Implementation Reference](https://docs.camunda.org/manual/7.13/reference/bpmn20/).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new StrehleDe\CamundaClient\Api\MessageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$correlation_message_dto = {"messageName":"aMessage","businessKey":"aBusinessKey","correlationKeys":{"aVariable":{"value":"aValue","type":"String"}},"processVariables":{"aVariable":{"value":"aNewValue","type":"String","valueInfo":{"transient":true}},"anotherVariable":{"value":true,"type":"Boolean"}}}; // \StrehleDe\CamundaClient\Model\CorrelationMessageDto | 

try {
    $result = $apiInstance->deliverMessage($correlation_message_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessageApi->deliverMessage: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **correlation_message_dto** | [**\StrehleDe\CamundaClient\Model\CorrelationMessageDto**](../Model/CorrelationMessageDto.md)|  | [optional]

### Return type

[**\StrehleDe\CamundaClient\Model\MessageCorrelationResultWithVariableDto[]**](../Model/MessageCorrelationResultWithVariableDto.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

