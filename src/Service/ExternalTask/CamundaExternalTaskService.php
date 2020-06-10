<?php

namespace StrehleDe\CamundaClient\Service\ExternalTask;

use Camunda\Service\ExternalTaskService;
use StrehleDe\CamundaClient\CamundaClient;
use StrehleDe\CamundaClient\CamundaEmptyResponse;
use StrehleDe\CamundaClient\Service\CamundaService;


class CamundaExternalTaskService extends CamundaService
{
    protected ExternalTaskService $restService;


    /**
     * CamundaExternalTaskService constructor.
     * @param CamundaClient $camundaClient
     */
    public function __construct(CamundaClient $camundaClient)
    {
        parent::__construct($camundaClient);

        $this->restService = new ExternalTaskService($this->getConfig()->getUrl());
    }


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