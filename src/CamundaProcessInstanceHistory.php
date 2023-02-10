<?php

namespace StrehleDe\CamundaClient;


class CamundaProcessInstanceHistory
{
    protected ?string $businessKey;
    protected ?string $caseInstanceId;
    protected ?string $deleteReason;
    protected ?int $durationInMillis;
    protected ?string $endTime;
    protected ?string $id;
    protected ?string $processDefinitionId;
    protected ?string $processDefinitionKey;
    protected ?string $processDefinitionName;
    protected ?int $processDefinitionVersion;
    protected ?string $removalTime;
    protected ?string $rootProcessInstanceId;
    protected ?string $startActivityId;
    protected ?string $startTime;
    protected ?string $startUserId;
    protected ?string $state;
    protected ?string $superCaseInstanceId;
    protected ?string $superProcessInstanceId;
    protected ?string $tenantId;


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
            'deleteReason',
            'durationInMillis',
            'endTime',
            'id',
            'processDefinitionId',
            'processDefinitionKey',
            'processDefinitionName',
            'processDefinitionVersion',
            'removalTime',
            'rootProcessInstanceId',
            'startActivityId',
            'startTime',
            'startUserId',
            'state',
            'superCaseInstanceId',
            'superProcessInstanceId',
            'tenantId',
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
        return $this->caseInstanceId;
    }


    /**
     * @return string|null
     */
    public function getDeleteReason(): ?string
    {
        return $this->deleteReason;
    }


    /**
     * @return int|null
     */
    public function getDurationInMillis(): ?int
    {
        return $this->durationInMillis;
    }


    /**
     * @return string|null
     */
    public function getEndTime(): ?string
    {
        return $this->endTime;
    }


    /**
     * @return string|null
     */
    public function getId(): ?string
    {
        return $this->id;
    }


    /**
     * @return string|null
     */
    public function getProcessDefinitionId(): ?string
    {
        return $this->processDefinitionId;
    }


    /**
     * @return string|null
     */
    public function getProcessDefinitionKey(): ?string
    {
        return $this->processDefinitionKey;
    }


    /**
     * @return string|null
     */
    public function getProcessDefinitionName(): ?string
    {
        return $this->processDefinitionName;
    }


    /**
     * @return int|null
     */
    public function getProcessDefinitionVersion(): ?int
    {
        return $this->processDefinitionVersion;
    }


    /**
     * @return string|null
     */
    public function getRemovalTime(): ?string
    {
        return $this->removalTime;
    }


    /**
     * @return string|null
     */
    public function getRootProcessInstanceId(): ?string
    {
        return $this->rootProcessInstanceId;
    }


    /**
     * @return string|null
     */
    public function getStartActivityId(): ?string
    {
        return $this->startActivityId;
    }


    /**
     * @return string|null
     */
    public function getStartTime(): ?string
    {
        return $this->startTime;
    }


    /**
     * @return string|null
     */
    public function getStartUserId(): ?string
    {
        return $this->startUserId;
    }


    /**
     * @return string|null
     */
    public function getState(): ?string
    {
        return $this->state;
    }


    /**
     * @return string|null
     */
    public function getSuperCaseInstanceId(): ?string
    {
        return $this->superCaseInstanceId;
    }


    /**
     * @return string|null
     */
    public function getSuperProcessInstanceId(): ?string
    {
        return $this->superProcessInstanceId;
    }


    /**
     * @return string|null
     */
    public function getTenantId(): ?string
    {
        return $this->tenantId;
    }
}