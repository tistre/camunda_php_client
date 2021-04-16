<?php

namespace StrehleDe\CamundaClient\Service\ProcessInstance;

use StrehleDe\CamundaClient\CamundaEmptyResponse;
use StrehleDe\CamundaClient\CamundaProcessInstance;
use StrehleDe\CamundaClient\CamundaResponse;
use StrehleDe\CamundaClient\Service\CamundaService;


/**
 * Class CamundaProcessInstanceService
 * @package StrehleDe\CamundaClient\Service\ProcessInstance
 */
class CamundaProcessInstanceService extends CamundaService
{
    /**
     * @param CamundaProcessInstanceGetRequest $request
     * @return CamundaProcessInstance
     */
    public function get(CamundaProcessInstanceGetRequest $request): CamundaProcessInstance
    {
        $request->validate();
        $restResponse = $request->toRestRequest()->send();

        return (new CamundaProcessInstance())->fromJson(CamundaResponse::restResponseToJson($restResponse));
    }


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