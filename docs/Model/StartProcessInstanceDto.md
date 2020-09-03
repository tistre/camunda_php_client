# # StartProcessInstanceDto

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**business_key** | **string** | The business key of the process instance. | [optional] 
**variables** | [**map[string,\StrehleDe\CamundaClient\Model\VariableValueDto]**](VariableValueDto.md) |  | [optional] 
**case_instance_id** | **string** | The case instance id the process instance is to be initialized with. | [optional] 
**start_instructions** | [**\StrehleDe\CamundaClient\Model\ProcessInstanceModificationInstructionDto[]**](ProcessInstanceModificationInstructionDto.md) | **Optional**. A JSON array of instructions that specify which activities to start the process instance at. If this property is omitted, the process instance starts at its default blank start event. | [optional] 
**skip_custom_listeners** | **bool** | Skip execution listener invocation for activities that are started or ended as part of this request. **Note**: This option is currently only respected when start instructions are submitted via the &#x60;startInstructions&#x60; property. | [optional] 
**skip_io_mappings** | **bool** | Skip execution of [input/output variable mappings](https://docs.camunda.org/manual/7.13/user-guide/process-engine/variables/#input-output-variable-mapping) for activities that are started or ended as part of this request. **Note**: This option is currently only respected when start instructions are submitted via the &#x60;startInstructions&#x60; property. | [optional] 
**with_variables_in_return** | **bool** | Indicates if the variables, which was used by the process instance during execution, should be returned. Default value: &#x60;false&#x60; | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


