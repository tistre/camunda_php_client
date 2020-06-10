<?php

namespace StrehleDe\CamundaClient\Service\ExternalTask;

use StrehleDe\CamundaClient\CamundaEmptyResponse;
use StrehleDe\CamundaClient\Service\CamundaService;


class CamundaExternalTaskService extends CamundaService
{
    /**
     * @see https://docs.camunda.org/manual/latest/reference/rest/external-task/fetch/
     * @param CamundaExternalTaskFetchAndLockRequest $request
     * @return CamundaExternalTaskFetchAndLockResponse
     */
    public function fetchAndLock(CamundaExternalTaskFetchAndLockRequest $request): CamundaExternalTaskFetchAndLockResponse
    {
        $request->validate();
        $restResponse = $request->toRestRequest()->send();

        return (new CamundaExternalTaskFetchAndLockResponse())->fromRestResponse($restResponse);
    }


    /**
     * @see https://docs.camunda.org/manual/latest/reference/rest/external-task/post-complete/
     * @param CamundaExternalTaskCompleteRequest $request
     * @return CamundaEmptyResponse
     */
    public function complete(CamundaExternalTaskCompleteRequest $request): CamundaEmptyResponse
    {
        $request->validate();
        $restResponse = $request->toRestRequest()->send();

        return (new CamundaEmptyResponse())->fromRestResponse($restResponse);
    }


    /**
     * @see https://docs.camunda.org/manual/latest/reference/rest/external-task/post-failure/
     * @param CamundaExternalTaskHandleFailureRequest $request
     * @return CamundaEmptyResponse
     */
    public function handleFailure(CamundaExternalTaskHandleFailureRequest $request): CamundaEmptyResponse
    {
        $request->validate();
        $restResponse = $request->toRestRequest()->send();

        return (new CamundaEmptyResponse())->fromRestResponse($restResponse);
    }
}