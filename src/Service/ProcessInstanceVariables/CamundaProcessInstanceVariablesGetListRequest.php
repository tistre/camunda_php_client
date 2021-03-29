<?php

namespace StrehleDe\CamundaClient\Service\ProcessInstanceVariables;

use StrehleDe\CamundaClient\CamundaRequest;
use StrehleDe\CamundaClient\CamundaRestRequest;


class CamundaProcessInstanceVariablesGetListRequest extends CamundaRequest
{
    protected string $id;


    /**
     * @return CamundaRestRequest
     */
    public function toRestRequest(): CamundaRestRequest
    {
        $url = sprintf('/process-instance/%s/variables', urlencode($this->getId()));

        return (new CamundaRestRequest($this->camundaClient))
            ->setRequestUrl($url)
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