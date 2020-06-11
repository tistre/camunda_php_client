<?php

namespace StrehleDe\CamundaClient\Service\ExternalTask;

use StrehleDe\CamundaClient\CamundaClient;
use StrehleDe\CamundaClient\CamundaRequest;
use StrehleDe\CamundaClient\CamundaRestRequest;
use StrehleDe\CamundaClient\Variable\CamundaVariableBag;


/**
 * Class CamundaExternalTaskCompleteRequest
 * @package StrehleDe\CamundaClient\Service\ExternalTask
 * @see https://docs.camunda.org/manual/latest/reference/rest/external-task/post-complete/
 */
class CamundaExternalTaskCompleteRequest extends CamundaRequest
{
    protected string $id;
    protected CamundaVariableBag $variables;
    protected string $workerId;


    /**
     * CamundaExternalTaskCompleteRequest constructor.
     * @param CamundaClient $camundaClient
     */
    public function __construct(CamundaClient $camundaClient)
    {
        parent::__construct($camundaClient);

        $this->variables = new CamundaVariableBag();
    }


    /**
     * @return string[]
     */
    protected function getRequiredProperties(): array
    {
        return ['id', 'workerId'];
    }


    /**
     * @return CamundaRestRequest
     */
    public function toRestRequest(): CamundaRestRequest
    {
        $json = [
            'workerId' => $this->getWorkerId()
        ];

        if (count($this->getVariables()) > 0) {
            $json['variables'] = $this->getVariables()->toJson();
        }

        return (new CamundaRestRequest($this->camundaClient))
            ->setRequestUrl(sprintf('/external-task/%s/complete', $this->getId()))
            ->setRequestMethod('POST')
            ->setJson($json);
    }


    /**
     * Get external task ID
     * @return string|null
     */
    public function getId(): ?string
    {
        return $this->id ?? null;
    }


    /**
     * Set external task ID
     * @param string $id
     * @return self
     */
    public function setId(string $id): self
    {
        $this->id = $id;
        return $this;
    }


    /**
     * @return CamundaVariableBag
     */
    public function getVariables(): CamundaVariableBag
    {
        return $this->variables;
    }


    /**
     * @param CamundaVariableBag $variables
     * @return self
     */
    public function setVariables(CamundaVariableBag $variables): self
    {
        $this->variables = $variables;
        return $this;
    }


    /**
     * @return string|null
     */
    public function getWorkerId(): ?string
    {
        return $this->workerId ?? null;
    }


    /**
     * @param string $workerId
     * @return self
     */
    public function setWorkerId(string $workerId): self
    {
        $this->workerId = $workerId;
        return $this;
    }
}