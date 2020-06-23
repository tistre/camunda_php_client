<?php

namespace StrehleDe\CamundaClient\Service\ProcessInstance;

use StrehleDe\CamundaClient\CamundaEmptyResponse;
use StrehleDe\CamundaClient\Service\CamundaService;


/**
 * Class CamundaProcessInstanceService
 * @package StrehleDe\CamundaClient\Service\ProcessInstance
 */
class CamundaProcessInstanceService extends CamundaService
{
    /**
     * @param CamundaProcessInstanceGetListRequest $request
     * @return CamundaProcessInstanceGetListResponse
     */
    public function getList(CamundaProcessInstanceGetListRequest $request): CamundaProcessInstanceGetListResponse
    {
        $request->validate();
        $restResponse = $request->toRestRequest()->send();

        return (new CamundaProcessInstanceGetListResponse())->fromRestResponse($restResponse);
    }


    /**
     * @param CamundaProcessInstanceDeleteRequest $request
     * @return CamundaEmptyResponse
     */
    public function delete(CamundaProcessInstanceDeleteRequest $request): CamundaEmptyResponse
    {
        $request->validate();
        $restResponse = $request->toRestRequest()->send();

        return (new CamundaEmptyResponse())->fromRestResponse($restResponse);
    }
}