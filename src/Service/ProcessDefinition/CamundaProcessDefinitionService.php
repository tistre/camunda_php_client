<?php

namespace StrehleDe\CamundaClient\Service\ProcessDefinition;

use Camunda\Service\ProcessDefinitionService;
use StrehleDe\CamundaClient\CamundaClient;
use StrehleDe\CamundaClient\Service\CamundaService;


/**
 * Class CamundaProcessDefinitionService
 * @package StrehleDe\CamundaClient\Service
 */
class CamundaProcessDefinitionService extends CamundaService
{
    protected ProcessDefinitionService $restService;


    /**
     * CamundaProcessDefinitionService constructor.
     * @param CamundaClient $camundaClient
     */
    public function __construct(CamundaClient $camundaClient)
    {
        parent::__construct($camundaClient);

        $this->restService = new ProcessDefinitionService($this->getConfig()->getUrl());
    }


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