<?php

namespace StrehleDe\CamundaClient;


class CamundaProcessInstance
{
    protected string $businessKey;
    protected string $caseInstanceId;
    protected string $definitionId;
    protected bool $ended;
    protected string $id;
    protected bool $suspended;
    protected string $tenantId;


    /**
     * @param array $json
     * @return self
     */
    public function fromJson(array $json): self
    {
        $propertyValues = CamundaUtils::jsonToPropertyValues(
            $json,
            get_class($this),
            $this->getPropertiesToCopyFromRestResponse()
        );

        foreach ($propertyValues as $propertyName => $value) {
            $this->{$propertyName} = $value;
        }

        return $this;
    }


    /**
     * @return array
     */
    protected function getPropertiesToCopyFromRestResponse(): array
    {
        return [
            'businessKey',
            'caseInstanceId',
            'definitionId',
            'ended',
            'id',
            'suspended',
            'tenantId'
        ];
    }


    /**
     * @return string|null
     */
    public function getBusinessKey(): ?string
    {
        return $this->businessKey ?? null;
    }


    /**
     * @return string|null
     */
    public function getCaseInstanceId(): ?string
    {
        return $this->caseInstanceId ?? null;
    }


    /**
     * @return string|null
     */
    public function getDefinitionId(): ?string
    {
        return $this->definitionId ?? null;
    }


    /**
     * @return bool|null
     */
    public function isEnded(): ?bool
    {
        return $this->ended ?? null;
    }


    /**
     * @return string|null
     */
    public function getId(): ?string
    {
        return $this->id ?? null;
    }


    /**
     * @return bool|null
     */
    public function isSuspended(): ?bool
    {
        return $this->suspended ?? null;
    }


    /**
     * @return string|null
     */
    public function getTenantId(): ?string
    {
        return $this->tenantId ?? null;
    }
}