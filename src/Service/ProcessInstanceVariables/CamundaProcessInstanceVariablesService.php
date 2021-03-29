<?php

namespace StrehleDe\CamundaClient\Service\ProcessInstanceVariables;

use StrehleDe\CamundaClient\CamundaResponse;
use StrehleDe\CamundaClient\Service\CamundaService;
use StrehleDe\CamundaClient\Variable\CamundaVariable;
use StrehleDe\CamundaClient\Variable\CamundaVariableBag;


/**
 * Class CamundaProcessInstanceService
 * @package StrehleDe\CamundaClient\Service\ProcessInstance
 */
class CamundaProcessInstanceVariablesService extends CamundaService
{
    /**
     * @param CamundaProcessInstanceVariablesGetRequest $request
     * @return CamundaVariable
     */
    public function get(CamundaProcessInstanceVariablesGetRequest $request): CamundaVariable
    {
        $request->validate();
        $restResponse = $request->toRestRequest()->send();

        return (new CamundaVariable())->fromJson(CamundaResponse::restResponseToJson($restResponse));
    }


    /**
     * @param CamundaProcessInstanceVariablesGetListRequest $request
     * @return CamundaVariableBag
     */
    public function getList(CamundaProcessInstanceVariablesGetListRequest $request): CamundaVariableBag
    {
        $request->validate();
        $restResponse = $request->toRestRequest()->send();

        return (new CamundaVariableBag())->fromJson(CamundaResponse::restResponseToJson($restResponse));
    }
}