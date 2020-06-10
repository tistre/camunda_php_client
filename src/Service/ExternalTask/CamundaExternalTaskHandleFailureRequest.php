<?php

namespace StrehleDe\CamundaClient\Service\ExternalTask;

use StrehleDe\CamundaClient\CamundaRequest;
use StrehleDe\CamundaClient\CamundaRestRequest;


/**
 * Class CamundaExternalTaskHandleFailureRequest
 * @see https://docs.camunda.org/manual/latest/reference/rest/external-task/post-failure/
 * @package StrehleDe\CamundaClient\Service\ExternalTask
 */
class CamundaExternalTaskHandleFailureRequest extends CamundaRequest
{
    protected string $errorDetails;
    protected string $errorMessage;
    protected string $id;
    protected int $retries;
    protected int $retryTimeout;
    protected string $workerId;


    /**
     * @return string[]
     */
    protected function getRequiredProperties(): array
    {
        return ['id', 'workerId'];
    }


    /**
     * @return CamundaRestRequest
     */
    public function toRestRequest(): CamundaRestRequest
    {
        $json = [
            'errorDetails' => $this->getErrorDetails(),
            'errorMessage' => $this->getErrorMessage(),
            'retries' => $this->getRetries(),
            'retryTimeout' => $this->getRetryTimeout(),
            'workerId' => $this->getWorkerId()
        ];

        return (new CamundaRestRequest($this->camundaClient))
            ->setRequestUrl(sprintf('/external-task/%s/failure', $this->getId()))
            ->setRequestMethod('POST')
            ->setJson($json);
    }


    /**
     * Get external task ID
     * @return string|null
     */
    public function getId(): ?string
    {
        return $this->id ?? null;
    }


    /**
     * Set external task ID
     * @param string $id
     * @return self
     */
    public function setId(string $id): self
    {
        $this->id = $id;
        return $this;
    }


    /**
     * @return string|null
     */
    public function getErrorDetails(): ?string
    {
        return $this->errorDetails ?? null;
    }


    /**
     * @param string $errorDetails
     * @return self
     */
    public function setErrorDetails(string $errorDetails): self
    {
        $this->errorDetails = $errorDetails;
        return $this;
    }


    /**
     * @return string|null
     */
    public function getErrorMessage(): ?string
    {
        return $this->errorMessage ?? null;
    }


    /**
     * @param string $errorMessage
     * @return self
     */
    public function setErrorMessage(string $errorMessage): self
    {
        $this->errorMessage = $errorMessage;
        return $this;
    }


    /**
     * @return int|null
     */
    public function getRetries(): ?int
    {
        return $this->retries ?? null;
    }


    /**
     * @param int $retries
     * @return self
     */
    public function setRetries(int $retries): self
    {
        $this->retries = $retries;
        return $this;
    }


    /**
     * @return int|null
     */
    public function getRetryTimeout(): ?int
    {
        return $this->retryTimeout ?? null;
    }


    /**
     * @param int $retryTimeout
     * @return self
     */
    public function setRetryTimeout(int $retryTimeout): self
    {
        $this->retryTimeout = $retryTimeout;
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