<?php

namespace StrehleDe\CamundaClient\Service\Message;

use StrehleDe\CamundaClient\CamundaClient;
use StrehleDe\CamundaClient\CamundaRequest;
use StrehleDe\CamundaClient\CamundaRestRequest;
use StrehleDe\CamundaClient\Variable\CamundaVariableBag;


/**
 * Class CamundaMessageCorrelateRequest
 * @package StrehleDe\CamundaClient\Service\Message
 * @see https://docs.camunda.org/manual/latest/reference/rest/message/post-message/
 */
class CamundaMessageCorrelateRequest extends CamundaRequest
{
    protected string $businessKey;
    protected CamundaVariableBag $correlationKeys;
    protected string $messageName;
    protected CamundaVariableBag $processVariables;


    /**
     * CamundaMessageCorrelateRequest constructor.
     * @param CamundaClient $camundaClient
     */
    public function __construct(CamundaClient $camundaClient)
    {
        parent::__construct($camundaClient);

        $this->correlationKeys = new CamundaVariableBag();
        $this->processVariables = new CamundaVariableBag();
    }


    /**
     * @return string[]
     */
    protected function getRequiredProperties(): array
    {
        return ['messageName'];
    }


    /**
     * @return CamundaRestRequest
     */
    public function toRestRequest(): CamundaRestRequest
    {
        $json = [
            'messageName' => $this->getMessageName()
        ];

        if ($this->getBusinessKey() !== null) {
            $json['businessKey'] = $this->getBusinessKey();
        }

        if (count($this->getCorrelationKeys()) > 0) {
            $json['correlationKeys'] = $this->getCorrelationKeys()->toJson();
        }

        if (count($this->getProcessVariables()) > 0) {
            $json['processVariables'] = $this->getProcessVariables()->toJson();
        }

        return (new CamundaRestRequest($this->camundaClient))
            ->setRequestUrl('/message')
            ->setRequestMethod('POST')
            ->setJson($json);
    }


    /**
     * Get business key
     * @return string|null
     */
    public function getBusinessKey(): ?string
    {
        return $this->businessKey ?? null;
    }


    /**
     * Set business key
     * @param string $businessKey
     * @return self
     */
    public function setBusinessKey(string $businessKey): self
    {
        $this->businessKey = $businessKey;
        return $this;
    }


    /**
     * @return CamundaVariableBag
     */
    public function getCorrelationKeys(): CamundaVariableBag
    {
        return $this->correlationKeys;
    }


    /**
     * @param CamundaVariableBag $correlationKeys
     * @return self
     */
    public function setCorrelationKeys(CamundaVariableBag $correlationKeys): self
    {
        $this->correlationKeys = $correlationKeys;
        return $this;
    }


    /**
     * @return string|null
     */
    public function getMessageName(): ?string
    {
        return $this->messageName ?? null;
    }


    /**
     * @param string $messageName
     * @return self
     */
    public function setMessageName(string $messageName): self
    {
        $this->messageName = $messageName;
        return $this;
    }


    /**
     * @return CamundaVariableBag
     */
    public function getProcessVariables(): CamundaVariableBag
    {
        return $this->processVariables;
    }


    /**
     * @param CamundaVariableBag $processVariables
     * @return self
     */
    public function setProcessVariables(CamundaVariableBag $processVariables): self
    {
        $this->processVariables = $processVariables;
        return $this;
    }
}