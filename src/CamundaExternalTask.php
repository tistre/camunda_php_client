<?php

namespace StrehleDe\CamundaClient;

use StrehleDe\CamundaClient\Variable\CamundaVariableBag;


class CamundaExternalTask
{
    protected string $activityId;
    protected string $activityInstanceId;
    protected string $businessKey;
    protected string $errorMessage;
    protected string $errorDetails;
    protected string $executionId;
    protected string $id;
    protected string $lockExpirationTime;
    protected int $priority;
    protected string $processDefinitionId;
    protected string $processDefinitionKey;
    protected string $processDefinitionVersionTag;
    protected string $processInstanceId;
    protected int $retries;
    protected bool $suspended;
    protected string $tenantId;
    protected string $topicName;
    protected CamundaVariableBag $variables;
    protected string $workerId;


    /**
     * CamundaExternalTaskFetchAndLockResponse constructor.
     */
    public function __construct()
    {
        $this->variables = new CamundaVariableBag();
    }


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

        if (isset($json['variables'])) {
            $this->variables->fromJson($json['variables']);
        }

        return $this;
    }


    /**
     * @return array
     */
    protected function getPropertiesToCopyFromRestResponse(): array
    {
        return [
            'activityId',
            'activityInstanceId',
            'businessKey',
            'errorMessage',
            'errorDetails',
            'executionId',
            'id',
            'lockExpirationTime',
            'priority',
            'processDefinitionId',
            'processDefinitionKey',
            'processDefinitionVersionTag',
            'processInstanceId',
            'retries',
            'suspended',
            'tenantId',
            'topicName',
            'workerId'
        ];
    }


    /**
     * @return string|null
     */
    public function getActivityId(): ?string
    {
        return $this->activityId ?? null;
    }


    /**
     * @return string|null
     */
    public function getActivityInstanceId(): ?string
    {
        return $this->activityInstanceId ?? null;
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
    public function getErrorMessage(): ?string
    {
        return $this->errorMessage ?? null;
    }


    /**
     * @return string|null
     */
    public function getErrorDetails(): ?string
    {
        return $this->errorDetails ?? null;
    }


    /**
     * @return string|null
     */
    public function getExecutionId(): ?string
    {
        return $this->executionId ?? null;
    }


    /**
     * @return string|null
     */
    public function getId(): ?string
    {
        return $this->id ?? null;
    }


    /**
     * @return string|null
     */
    public function getLockExpirationTime(): ?string
    {
        return $this->lockExpirationTime ?? null;
    }


    /**
     * @return int|null
     */
    public function getPriority(): ?int
    {
        return $this->priority ?? null;
    }


    /**
     * @return string|null
     */
    public function getProcessDefinitionId(): ?string
    {
        return $this->processDefinitionId ?? null;
    }


    /**
     * @return string|null
     */
    public function getProcessDefinitionKey(): ?string
    {
        return $this->processDefinitionKey ?? null;
    }


    /**
     * @return string|null
     */
    public function getProcessDefinitionVersionTag(): ?string
    {
        return $this->processDefinitionVersionTag ?? null;
    }


    /**
     * @return string|null
     */
    public function getProcessInstanceId(): ?string
    {
        return $this->processInstanceId ?? null;
    }


    /**
     * @return int|null
     */
    public function getRetries(): ?int
    {
        return $this->retries ?? null;
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


    /**
     * @return string|null
     */
    public function getTopicName(): ?string
    {
        return $this->topicName ?? null;
    }


    /**
     * @return CamundaVariableBag
     */
    public function getVariables(): CamundaVariableBag
    {
        return $this->variables;
    }


    /**
     * @return string|null
     */
    public function getWorkerId(): ?string
    {
        return $this->workerId ?? null;
    }
}