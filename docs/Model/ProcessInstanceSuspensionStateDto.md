# # ProcessInstanceSuspensionStateDto

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**suspended** | **bool** | A &#x60;Boolean&#x60; value which indicates whether to activate or suspend a given process instance. When the value is set to &#x60;true&#x60;, the given process instance will be suspended and when the value is set to &#x60;false&#x60;, the given process instance will be activated. | [optional] 
**process_definition_id** | **string** | The process definition id of the process instances to activate or suspend.  **Note**: This parameter can be used only with combination of &#x60;suspended&#x60;. | [optional] 
**process_definition_key** | **string** | The process definition key of the process instances to activate or suspend.  **Note**: This parameter can be used only with combination of &#x60;suspended&#x60;, &#x60;processDefinitionTenantId&#x60;, and &#x60;processDefinitionWithoutTenantId&#x60;. | [optional] 
**process_definition_tenant_id** | **string** | Only activate or suspend process instances of a process definition which belongs to a tenant with the given id.  **Note**: This parameter can be used only with combination of &#x60;suspended&#x60;, &#x60;processDefinitionKey&#x60;, and &#x60;processDefinitionWithoutTenantId&#x60;. | [optional] 
**process_definition_without_tenant_id** | **bool** | Only activate or suspend process instances of a process definition which belongs to no tenant. Value may only be true, as false is the default behavior.  **Note**: This parameter can be used only with combination of &#x60;suspended&#x60;, &#x60;processDefinitionKey&#x60;, and &#x60;processDefinitionTenantId&#x60;. | [optional] 
**process_instance_ids** | **string[]** | A list of process instance ids which defines a group of process instances which will be activated or suspended by the operation.  **Note**: This parameter can be used only with combination of &#x60;suspended&#x60;, &#x60;processInstanceQuery&#x60;, and &#x60;historicProcessInstanceQuery&#x60;. | [optional] 
**process_instance_query** | [**\StrehleDe\CamundaClient\Model\ProcessInstanceQueryDto**](ProcessInstanceQueryDto.md) |  | [optional] 
**historic_process_instance_query** | [**\StrehleDe\CamundaClient\Model\HistoricProcessInstanceQueryDto**](HistoricProcessInstanceQueryDto.md) |  | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


