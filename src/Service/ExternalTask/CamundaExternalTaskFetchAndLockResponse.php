<?php

namespace StrehleDe\CamundaClient\Service\ExternalTask;

use Psr\Http\Message\ResponseInterface;
use StrehleDe\CamundaClient\CamundaExternalTask;
use StrehleDe\CamundaClient\CamundaExternalTaskBag;
use StrehleDe\CamundaClient\CamundaResponse;
use StrehleDe\CamundaClient\Exception\CamundaRequestException;


/**
 * Class CamundaExternalTaskFetchAndLockResponse
 * @package StrehleDe\CamundaClient\Service\ExternalTask
 * @see https://docs.camunda.org/manual/latest/reference/rest/external-task/fetch/
 */
class CamundaExternalTaskFetchAndLockResponse extends CamundaResponse
{
    protected CamundaExternalTaskBag $externalTasks;


    /**
     * CamundaExternalTaskFetchAndLockResponse constructor.
     */
    public function __construct()
    {
        $this->externalTasks = new CamundaExternalTaskBag();
    }


    /**
     * @param ResponseInterface $restResponse
     * @return self
     */
    public function fromRestResponse(ResponseInterface $restResponse): self
    {
        $json = CamundaResponse::restResponseToJson($restResponse);

        if (!is_array($json)) {
            throw new CamundaRequestException(sprintf('%s: Response is not an array', __METHOD__));
        }

        foreach ($json as $externalTaskJson) {
            $this->externalTasks[] = (new CamundaExternalTask())->fromJson($externalTaskJson);
        }

        return $this;
    }


    /**
     * @return CamundaExternalTaskBag
     */
    public function getExternalTasks(): CamundaExternalTaskBag
    {
        return $this->externalTasks;
    }
}