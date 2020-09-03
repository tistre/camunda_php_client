# # DeploymentWithDefinitionsDto

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**deployed_process_definitions** | [**map[string,\StrehleDe\CamundaClient\Model\ProcessDefinitionDto]**](ProcessDefinitionDto.md) | A JSON Object containing a property for each of the process definitions, which are successfully deployed with that deployment. The key is the process definition id, the value is a JSON Object corresponding to the process definition. | [optional] 
**deployed_decision_definitions** | [**map[string,\StrehleDe\CamundaClient\Model\DecisionDefinitionDto]**](DecisionDefinitionDto.md) | A JSON Object containing a property for each of the decision definitions, which are successfully deployed with that deployment. The key is the decision definition id, the value is a JSON Object corresponding to the decision definition. | [optional] 
**deployed_decision_requirements_definitions** | [**map[string,\StrehleDe\CamundaClient\Model\DecisionRequirementsDefinitionDto]**](DecisionRequirementsDefinitionDto.md) | A JSON Object containing a property for each of the decision requirements definitions, which are successfully deployed with that deployment. The key is the decision requirements definition id, the value is a JSON Object corresponding to the decision requirements definition. | [optional] 
**deployed_case_definitions** | [**map[string,\StrehleDe\CamundaClient\Model\CaseDefinitionDto]**](CaseDefinitionDto.md) | A JSON Object containing a property for each of the case definitions, which are successfully deployed with that deployment. The key is the case definition id, the value is a JSON Object corresponding to the case definition. | [optional] 
**id** | **string** | The id of the deployment. | [optional] 
**tenant_id** | **string** | The tenant id of the deployment. | [optional] 
**deployment_time** | [**\DateTime**](\DateTime.md) | The time when the deployment was created. | [optional] 
**source** | **string** | The source of the deployment. | [optional] 
**name** | **string** | The name of the deployment. | [optional] 
**links** | [**\StrehleDe\CamundaClient\Model\AtomLink[]**](AtomLink.md) | The links associated to this resource, with &#x60;method&#x60;, &#x60;href&#x60; and &#x60;rel&#x60;. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


