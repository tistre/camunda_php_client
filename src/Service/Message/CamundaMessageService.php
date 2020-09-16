<?php

namespace StrehleDe\CamundaClient\Service\Message;

use StrehleDe\CamundaClient\CamundaEmptyResponse;
use StrehleDe\CamundaClient\Service\CamundaService;


class CamundaMessageService extends CamundaService
{
    /**
     * @see https://docs.camunda.org/manual/latest/reference/rest/message/post-message/
     * @param CamundaMessageCorrelateRequest $request
     * @return CamundaEmptyResponse
     */
    public function correlate(CamundaMessageCorrelateRequest $request): CamundaEmptyResponse
    {
        $request->validate();
        $restResponse = $request->toRestRequest()->send();

        return (new CamundaEmptyResponse())->fromRestResponse($restResponse);
    }
}