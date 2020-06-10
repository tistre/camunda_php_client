<?php

namespace StrehleDe\CamundaClient\Service\ProcessDefinition;

use StrehleDe\CamundaClient\Service\CamundaService;


/**
 * Class CamundaProcessDefinitionService
 * @package StrehleDe\CamundaClient\Service
 */
class CamundaProcessDefinitionService extends CamundaService
{
    /**
     * @see https://docs.camunda.org/manual/latest/reference/rest/process-definition/post-start-process-instance/
     * @param CamundaProcessDefinitionStartInstanceRequest $request
     * @return CamundaProcessDefinitionStartInstanceResponse
     */
    public function startInstance(CamundaProcessDefinitionStartInstanceRequest $request): CamundaProcessDefinitionStartInstanceResponse
    {
        $request->validate();
        $restResponse = $request->toRestRequest()->send();

        return (new CamundaProcessDefinitionStartInstanceResponse())->fromRestResponse($restResponse);
    }
}