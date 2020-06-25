<?php

namespace StrehleDe\CamundaClient\Service\ProcessInstance;

use Psr\Http\Message\ResponseInterface;
use StrehleDe\CamundaClient\CamundaProcessInstance;
use StrehleDe\CamundaClient\CamundaProcessInstanceBag;
use StrehleDe\CamundaClient\CamundaResponse;
use StrehleDe\CamundaClient\Exception\CamundaRequestException;


/**
 * Class CamundaProcessInstanceGetListResponse
 * @package StrehleDe\CamundaClient\Service\ProcessInstance
 */
class CamundaProcessInstanceGetListResponse extends CamundaResponse
{
    protected CamundaProcessInstanceBag $processInstances;


    /**
     * CamundaProcessInstanceGetListResponse constructor.
     */
    public function __construct()
    {
        $this->processInstances = new CamundaProcessInstanceBag();
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

        foreach ($json as $processInstanceJson) {
            $this->processInstances[] = (new CamundaProcessInstance())->fromJson($processInstanceJson);
        }

        return $this;
    }


    /**
     * @return CamundaProcessInstanceBag
     */
    public function getProcessInstances(): CamundaProcessInstanceBag
    {
        return $this->processInstances;
    }
}