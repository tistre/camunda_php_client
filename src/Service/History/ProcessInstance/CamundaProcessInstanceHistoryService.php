<?php

namespace StrehleDe\CamundaClient\Service\History\ProcessInstance;

use StrehleDe\CamundaClient\CamundaProcessInstanceHistory;
use StrehleDe\CamundaClient\CamundaResponse;
use StrehleDe\CamundaClient\Service\CamundaService;


/**
 * Class CamundaProcessInstanceHistoryService
 * @package StrehleDe\CamundaClient\Service\History\ProcessInstance
 */
class CamundaProcessInstanceHistoryService extends CamundaService
{
    public function get(CamundaProcessInstanceHistoryGetRequest $request): CamundaProcessInstanceHistory
    {
        $request->validate();
        $restResponse = $request->toRestRequest()->send();

        return (new CamundaProcessInstanceHistory())->fromJson(CamundaResponse::restResponseToJson($restResponse));
    }
}