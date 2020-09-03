# # MessageCorrelationResultWithVariableDto

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**result_type** | **string** | Indicates if the message was correlated to a message start event or an  intermediate message catching event. In the first case, the resultType is  &#x60;ProcessDefinition&#x60; and otherwise &#x60;Execution&#x60;. | [optional] 
**process_instance** | [**\StrehleDe\CamundaClient\Model\ProcessInstanceDto**](ProcessInstanceDto.md) |  | [optional] 
**execution** | [**\StrehleDe\CamundaClient\Model\ExecutionDto**](ExecutionDto.md) |  | [optional] 
**variables** | [**map[string,\StrehleDe\CamundaClient\Model\VariableValueDto]**](VariableValueDto.md) | This property is returned if the &#x60;variablesInResultEnabled&#x60; is set to &#x60;true&#x60;. Contains a list of the process variables. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


