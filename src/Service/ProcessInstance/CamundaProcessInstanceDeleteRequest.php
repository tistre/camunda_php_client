<?php

namespace StrehleDe\CamundaClient\Service\ProcessInstance;

use GuzzleHttp\RequestOptions;
use StrehleDe\CamundaClient\CamundaRequest;
use StrehleDe\CamundaClient\CamundaRestRequest;


class CamundaProcessInstanceDeleteRequest extends CamundaRequest
{
    protected bool $failIfNotExists;
    protected string $id;


    /**
     * @return CamundaRestRequest
     */
    public function toRestRequest(): CamundaRestRequest
    {
        $query = [];

        if ($this->isFailIfNotExists() !== null) {
            $query['failIfNotExists'] = $this->isFailIfNotExists();
        }

        return (new CamundaRestRequest($this->camundaClient))
            ->setRequestUrl('/process-instance/' . urlencode($this->getId()))
            ->setRequestMethod('DELETE')
            ->setRequestOption(RequestOptions::QUERY, $query);
    }


    /**
     * @return string[]
     */
    protected function getRequiredProperties(): array
    {
        return ['id'];
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
     * @return bool|null
     */
    public function isFailIfNotExists(): ?bool
    {
        return $this->failIfNotExists ?? null;
    }


    /**
     * @param bool $failIfNotExists
     * @return self
     */
    public function setFailIfNotExists(bool $failIfNotExists): self
    {
        $this->failIfNotExists = $failIfNotExists;
        return $this;
    }
}