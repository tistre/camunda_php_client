<?php

namespace StrehleDe\CamundaClient\Service\ExternalTask;

use StrehleDe\CamundaClient\CamundaClient;
use StrehleDe\CamundaClient\CamundaRequest;
use StrehleDe\CamundaClient\CamundaRestRequest;
use StrehleDe\CamundaClient\CamundaTopicBag;
use StrehleDe\CamundaClient\Exception\CamundaInvalidInputException;


/**
 * Class CamundaExternalTaskFetchAndLockRequest
 * @package StrehleDe\CamundaClient\Service\ExternalTask
 * @see https://docs.camunda.org/manual/latest/reference/rest/external-task/fetch/
 */
class CamundaExternalTaskFetchAndLockRequest extends CamundaRequest
{
    protected int $maxTasks;
    protected CamundaTopicBag $topics;
    protected bool $usePriority;
    protected string $workerId;


    /**
     * CamundaExternalTaskFetchAndLockRequest constructor.
     * @param CamundaClient $camundaClient
     */
    public function __construct(CamundaClient $camundaClient)
    {
        parent::__construct($camundaClient);

        $this->topics = new CamundaTopicBag();
    }


    /**
     * @return string[]
     */
    protected function getRequiredProperties(): array
    {
        return ['maxTasks', 'workerId'];
    }


    /**
     *
     */
    public function validate(): void
    {
        parent::validate();

        if (count($this->topics) === 0) {
            throw new CamundaInvalidInputException(
                sprintf(
                    '%s: No topics set',
                    __METHOD__
                )
            );
        }

        foreach ($this->topics as $topic) {
            $topic->validate();
        }
    }


    /**
     * @return CamundaRestRequest
     */
    public function toRestRequest(): CamundaRestRequest
    {
        $json = [
            'topics' => [],
            'workerId' => $this->getWorkerId(),
            'maxTasks' => $this->getMaxTasks()
        ];

        foreach ($this->topics as $topic) {
            $json['topics'][] = [
                'topicName' => $topic->getTopicName(),
                'lockDuration' => $topic->getLockDuration()
            ];
        }

        return (new CamundaRestRequest($this->camundaClient))
            ->setRequestUrl('/external-task/fetchAndLock')
            ->setRequestMethod('POST')
            ->setJson($json);
    }


    /**
     * @return int|null
     */
    public function getMaxTasks(): ?int
    {
        return $this->maxTasks ?? null;
    }


    /**
     * @param int $maxTasks
     * @return self
     */
    public function setMaxTasks(int $maxTasks): self
    {
        $this->maxTasks = $maxTasks;
        return $this;
    }


    /**
     * @return CamundaTopicBag
     */
    public function getTopics(): CamundaTopicBag
    {
        return $this->topics;
    }


    /**
     * @param CamundaTopicBag $topics
     * @return self
     */
    public function setTopics(CamundaTopicBag $topics): self
    {
        $this->topics = $topics;
        return $this;
    }


    /**
     * @return bool|null
     */
    public function isUsePriority(): ?bool
    {
        return $this->usePriority ?? null;
    }


    /**
     * @param bool $usePriority
     * @return self
     */
    public function setUsePriority(bool $usePriority): self
    {
        $this->usePriority = $usePriority;
        return $this;
    }


    /**
     * @return string|null
     */
    public function getWorkerId(): ?string
    {
        return $this->workerId ?? null;
    }


    /**
     * @param string $workerId
     * @return self
     */
    public function setWorkerId(string $workerId): self
    {
        $this->workerId = $workerId;
        return $this;
    }
}