<?php

namespace StrehleDe\CamundaClient\Service\ProcessDefinition;

use StrehleDe\CamundaClient\CamundaClient;
use StrehleDe\CamundaClient\CamundaRequest;
use StrehleDe\CamundaClient\CamundaRestRequest;
use StrehleDe\CamundaClient\Exception\CamundaInvalidInputException;
use StrehleDe\CamundaClient\Variable\CamundaVariableBag;


/**
 * Class CamundaProcessDefinitionStartInstanceRequest
 * @package StrehleDe\CamundaClient\Request
 * @see https://docs.camunda.org/manual/latest/reference/rest/process-definition/post-start-process-instance/
 */
class CamundaProcessDefinitionStartInstanceRequest extends CamundaRequest
{
    protected string $businessKey;
    protected string $id;
    protected string $key;
    protected string $tenantId;
    protected CamundaVariableBag $variables;
    protected bool $withVariablesInReturn;


    /**
     * CamundaProcessDefinitionStartInstanceRequest constructor.
     * @param CamundaClient $camundaClient
     */
    public function __construct(CamundaClient $camundaClient)
    {
        parent::__construct($camundaClient);

        $this->variables = new CamundaVariableBag();
    }


    /**
     *
     */
    public function validate(): void
    {
        parent::validate();

        if ((($this->getId() ?? '') === '') && (($this->getKey() ?? '') === '')) {
            throw new CamundaInvalidInputException(
                sprintf(
                    '%s: Either "id" or "key" must be set in <%s>',
                    __METHOD__,
                    get_class($this)
                )
            );
        }
    }


    /**
     * @return CamundaRestRequest
     */
    public function toRestRequest(): CamundaRestRequest
    {
        $json = [
            'businessKey' => $this->getBusinessKey(),
            'withVariablesInReturn' => $this->isWithVariablesInReturn()
            ];

        if (!empty($this->getVariables())) {
            $json['variables'] = $this->getVariables()->toJson();
        }

        if (($this->getId() ?? '') !== '') {
            $requestUrl = sprintf(
                '/process-definition/%s/start',
                $this->getId()
            );
        } elseif (($this->getTenantId() ?? '') !== '') {
            $requestUrl = sprintf(
                '/process-definition/key/%s/tenant-id/%s/start',
                $this->getKey(),
                $this->getTenantId()
            );
        } else {
            $requestUrl = sprintf(
                '/process-definition/key/%s/start',
                $this->getKey()
            );
        }

        return (new CamundaRestRequest($this->camundaClient))
            ->setRequestUrl($requestUrl)
            ->setRequestMethod('POST')
            ->setJson($json);
    }


    /**
     * @return string|null
     */
    public function getBusinessKey(): ?string
    {
        return $this->businessKey ?? null;
    }


    /**
     * @param string $businessKey
     * @return self
     */
    public function setBusinessKey(string $businessKey): self
    {
        $this->businessKey = $businessKey;
        return $this;
    }


    /**
     * @return string|null
     */
    public function getId(): ?string
    {
        return $this->id ?? null;
    }


    /**
     * @param string $id
     * @return self
     */
    public function setId(string $id): self
    {
        $this->id = $id;
        return $this;
    }


    /**
     * @return string|null
     */
    public function getKey(): ?string
    {
        return $this->key ?? null;
    }


    /**
     * @param string $key
     * @return self
     */
    public function setKey(string $key): self
    {
        $this->key = $key;
        return $this;
    }


    /**
     * @return string|null
     */
    public function getTenantId(): ?string
    {
        return $this->tenantId ?? null;
    }


    /**
     * @param string $tenantId
     * @return self
     */
    public function setTenantId(string $tenantId): self
    {
        $this->tenantId = $tenantId;
        return $this;
    }


    /**
     * @return CamundaVariableBag|null
     */
    public function getVariables(): ?CamundaVariableBag
    {
        return $this->variables ?? null;
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
     * @return bool|null
     */
    public function isWithVariablesInReturn(): ?bool
    {
        return $this->withVariablesInReturn ?? null;
    }


    /**
     * @param bool $withVariablesInReturn
     * @return self
     */
    public function setWithVariablesInReturn(bool $withVariablesInReturn): self
    {
        $this->withVariablesInReturn = $withVariablesInReturn;
        return $this;
    }
}