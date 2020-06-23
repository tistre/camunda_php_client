<?php

namespace StrehleDe\CamundaClient\Service\ProcessInstance;

use GuzzleHttp\RequestOptions;
use StrehleDe\CamundaClient\CamundaRequest;
use StrehleDe\CamundaClient\CamundaRestRequest;


class CamundaProcessInstanceGetListRequest extends CamundaRequest
{
    protected string $businessKey;
    protected int $firstResult;
    protected int $maxResults;
    protected string $processDefinitionId;
    protected string $processDefinitionKey;


    /**
     * @return CamundaRestRequest
     */
    public function toRestRequest(): CamundaRestRequest
    {
        $query = [];

        if (($this->getBusinessKey() ?? '') !== '') {
            $query['businessKey'] = $this->getBusinessKey();
        }

        if ($this->getFirstResult() !== null) {
            $query['firstResult'] = $this->getFirstResult();
        }

        if ($this->getMaxResults() !== null) {
            $query['maxResults'] = $this->getMaxResults();
        }

        if (($this->getProcessDefinitionId() ?? '') !== '') {
            $query['processDefinitionId'] = $this->getProcessDefinitionId();
        }

        if (($this->getProcessDefinitionKey() ?? '') !== '') {
            $query['processDefinitionKey'] = $this->getProcessDefinitionKey();
        }

        return (new CamundaRestRequest($this->camundaClient))
            ->setRequestUrl('/process-instance')
            ->setRequestMethod('GET')
            ->setRequestOption(RequestOptions::QUERY, $query);
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
     * @return int|null
     */
    public function getFirstResult(): ?int
    {
        return $this->firstResult ?? null;
    }


    /**
     * @param int $firstResult
     * @return self
     */
    public function setFirstResult(int $firstResult): self
    {
        $this->firstResult = $firstResult;
        return $this;
    }


    /**
     * @return int|null
     */
    public function getMaxResults(): ?int
    {
        return $this->maxResults ?? null;
    }


    /**
     * @param int $maxResults
     * @return self
     */
    public function setMaxResults(int $maxResults): self
    {
        $this->maxResults = $maxResults;
        return $this;
    }


    /**
     * @return string|null
     */
    public function getProcessDefinitionId(): ?string
    {
        return $this->processDefinitionId ?? null;
    }


    /**
     * @param string $processDefinitionId
     * @return self
     */
    public function setProcessDefinitionId(string $processDefinitionId): self
    {
        $this->processDefinitionId = $processDefinitionId;
        return $this;
    }


    /**
     * @return string|null
     */
    public function getProcessDefinitionKey(): ?string
    {
        return $this->processDefinitionKey ?? null;
    }


    /**
     * @param string $processDefinitionKey
     * @return self
     */
    public function setProcessDefinitionKey(string $processDefinitionKey): self
    {
        $this->processDefinitionKey = $processDefinitionKey;
        return $this;
    }
}