<?php

namespace StrehleDe\CamundaClient\Service\History\ProcessInstance;

use StrehleDe\CamundaClient\CamundaRequest;
use StrehleDe\CamundaClient\CamundaRestRequest;


class CamundaProcessInstanceHistoryGetRequest extends CamundaRequest
{
    protected string $id;


    /**
     * @return CamundaRestRequest
     */
    public function toRestRequest(): CamundaRestRequest
    {
        return (new CamundaRestRequest($this->camundaClient))
            ->setRequestUrl(sprintf('/history/process-instance/%s', urlencode($this->getId())))
            ->setRequestMethod('GET');
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
}