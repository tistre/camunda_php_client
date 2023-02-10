<?php

namespace StrehleDe\CamundaClient\Service\ProcessInstance;

use GuzzleHttp\RequestOptions;
use StrehleDe\CamundaClient\CamundaRequest;
use StrehleDe\CamundaClient\CamundaRestRequest;


class CamundaProcessInstanceGetListRequest extends CamundaRequest
{
    protected bool $active = false;
    protected array $activityIdIn = [];
    protected string $businessKey;
    protected int $firstResult;
    protected int $maxResults;
    protected string $processDefinitionId;
    protected string $processDefinitionKey;
    protected bool $withIncident;


    /**
     * @return CamundaRestRequest
     */
    public function toRestRequest(): CamundaRestRequest
    {
        $query = [];

        if ($this->isActive()) {
            $query['active'] = 'true';
        }

        if (!empty($this->activityIdIn)) {
            $query['activityIdIn'] = implode(',', $this->activityIdIn);
        }

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

        if ($this->isWithIncident()) {
            $query['withIncident'] = 'true';
        }

        return (new CamundaRestRequest($this->camundaClient))
            ->setRequestUrl('/process-instance')
            ->setRequestMethod('GET')
            ->setRequestOption(RequestOptions::QUERY, $query);
    }


    /**
     * @return bool
     */
    public function isActive(): bool
    {
        return $this->active;
    }


    /**
     * @param bool $active
     * @return self
     */
    public function setActive(bool $active): self
    {
        $this->active = $active;
        return $this;
    }

    /**
     * @return array
     */
    public function getActivityIdIn(): array
    {
        return $this->activityIdIn;
    }

    /**
     * @param array $activityIdIn
     * @return self
     */
    public function setActivityIdIn(array $activityIdIn): self
    {
        $this->activityIdIn = $activityIdIn;
        return $this;
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


    /**
     * @return bool
     */
    public function isWithIncident(): ?bool
    {
        return $this->withIncident ?? null;
    }


    /**
     * @param bool $withIncident
     * @return self
     */
    public function setWithIncident(bool $withIncident): self
    {
        $this->withIncident = $withIncident;
        return $this;
    }
}