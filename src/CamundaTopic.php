<?php

namespace StrehleDe\CamundaClient;

use StrehleDe\CamundaClient\Exception\CamundaInvalidInputException;


/**
 * Class CamundaExternalTaskTopic
 * @package StrehleDe\CamundaClient
 * @see https://docs.camunda.org/manual/latest/reference/rest/external-task/fetch/
 */
class CamundaTopic
{
    protected string $businessKey;
    protected int $lockDuration;
    protected string $processDefinitionId;
    protected string $processDefinitionKey;
    protected string $topicName;
    /** @var string[] */
    protected array $variables = [];


    /**
     *
     */
    public function validate(): void
    {
        foreach ($this->getRequiredProperties() as $propertyName) {
            if (!isset($this->{$propertyName})) {
                throw new CamundaInvalidInputException(
                    sprintf(
                        '%s: Required request property "%s" is not set in <%s>',
                        __METHOD__,
                        $propertyName,
                        get_class($this)
                    )
                );
            }

            if (strlen($this->{$propertyName}) === 0) {
                throw new CamundaInvalidInputException(
                    sprintf(
                        '%s: Required request property "%s" is set to an empty value in <%s>',
                        __METHOD__,
                        $propertyName,
                        get_class($this)
                    )
                );
            }
        }
    }


    /**
     * @return string[]
     */
    protected function getRequiredProperties(): array
    {
        return ['lockDuration', 'topicName'];
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
    public function getLockDuration(): ?int
    {
        return $this->lockDuration ?? null;
    }


    /**
     * @param int $lockDuration
     * @return self
     */
    public function setLockDuration(int $lockDuration): self
    {
        $this->lockDuration = $lockDuration;
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
     * @return string|null
     */
    public function getTopicName(): ?string
    {
        return $this->topicName ?? null;
    }


    /**
     * @param string $topicName
     * @return self
     */
    public function setTopicName(string $topicName): self
    {
        $this->topicName = $topicName;
        return $this;
    }


    /**
     * @return string[]
     */
    public function getVariables(): array
    {
        return $this->variables;
    }


    /**
     * @param string[] $variables
     * @return self
     */
    public function setVariables(array $variables): self
    {
        $this->variables = $variables;
        return $this;
    }
}