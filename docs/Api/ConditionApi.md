# StrehleDe\CamundaClient\ConditionApi

All URIs are relative to *http://localhost:8080/engine-rest*

Method | HTTP request | Description
------------- | ------------- | -------------
[**evaluateCondition**](ConditionApi.md#evaluateCondition) | **POST** /condition | 



## evaluateCondition

> \StrehleDe\CamundaClient\Model\ProcessInstanceDto[] evaluateCondition($evaluation_condition_dto)



Triggers evaluation of conditions for conditional start event(s).  Internally this maps to the engines condition evaluation builder method ConditionEvaluationBuilder#evaluateStartConditions().  For more information see the [Conditional Start Events](https://docs.camunda.org/manual/7.13/reference/bpmn20/events/conditional-events/#conditional-start-event) section of the [BPMN 2.0 Implementation Reference](https://docs.camunda.org/manual/7.13/reference/bpmn20/).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new StrehleDe\CamundaClient\Api\ConditionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$evaluation_condition_dto = {"variables":{"temperature":{"value":24,"type":"Integer","valueInfo":{"transient":true}},"city":{"value":"Parma","type":"String"}},"businessKey":"aBusinessKey","tenantId":"aTenantId"}; // \StrehleDe\CamundaClient\Model\EvaluationConditionDto | 

try {
    $result = $apiInstance->evaluateCondition($evaluation_condition_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConditionApi->evaluateCondition: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **evaluation_condition_dto** | [**\StrehleDe\CamundaClient\Model\EvaluationConditionDto**](../Model/EvaluationConditionDto.md)|  | [optional]

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

