<?php

namespace StrehleDe\CamundaClient\Service\ProcessInstanceVariables;

use StrehleDe\CamundaClient\CamundaRequest;
use StrehleDe\CamundaClient\CamundaRestRequest;


class CamundaProcessInstanceVariablesGetRequest extends CamundaRequest
{
    protected string $id;
    protected string $varName;


    /**
     * @return CamundaRestRequest
     */
    public function toRestRequest(): CamundaRestRequest
    {
        $url = sprintf(
            '/process-instance/%s/variables/%s',
            urlencode($this->getId()),
            urlencode($this->getVarName())
        );

        return (new CamundaRestRequest($this->camundaClient))
            ->setRequestUrl($url)
            ->setRequestMethod('GET');
    }


    /**
     * @return string[]
     */
    protected function getRequiredProperties(): array
    {
        return ['id', 'varName'];
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
     * @return string
     */
    public function getVarName(): ?string
    {
        return $this->varName ?? null;
    }


    /**
     * @param string $varName
     * @return self
     */
    public function setVarName(string $varName): self
    {
        $this->varName = $varName;
        return $this;
    }
}