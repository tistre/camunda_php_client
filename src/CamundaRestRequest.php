<?php

namespace StrehleDe\CamundaClient;

use GuzzleHttp\RequestOptions;
use \RuntimeException;
use GuzzleHttp\Exception\GuzzleException;
use Psr\Http\Message\ResponseInterface;


/**
 * Class CamundaRestRequest
 * Derived from Camunda\Service\BasicService, see https://github.com/endpot/camunda-rest-client
 * @package StrehleDe\CamundaClient
 */
class CamundaRestRequest
{
    /** @var CamundaClient */
    protected CamundaClient $camundaClient;

    /** @var string url of specific operation for specific resource */
    protected string $requestUrl = '';

    /** @var string request method (GET/POST/PUT/DELETE/OPTIONS/...) */
    protected string $requestMethod = 'GET';

    /** @var array Guzzle request options */
    protected array $requestOptions = [];


    /**
     * CamundaRestRequest constructor.
     *
     * @param CamundaClient $camundaClient
     */
    public function __construct(CamundaClient $camundaClient)
    {
        $this->camundaClient = $camundaClient;
    }


    /**
     * set request url.
     *
     * @param $requestUrl
     * @return self
     */
    public function setRequestUrl(string $requestUrl): self
    {
        $this->requestUrl = $requestUrl;
        return $this;
    }


    /**
     * get request url.
     *
     * @return string
     */
    public function getRequestUrl(): string
    {
        return $this->requestUrl;
    }


    /**
     * set request method.
     *
     * @param string $requestMethod
     * @return self
     */
    public function setRequestMethod(string $requestMethod): self
    {
        $this->requestMethod = strtoupper($requestMethod);
        return $this;
    }


    /**
     * get request method.
     *
     * @return string
     */
    public function getRequestMethod(): string
    {
        return $this->requestMethod;
    }


    /**
     * Set Guzzle request option
     *
     * @param string $key
     * @param mixed $value
     * @return self
     */
    public function setRequestOption(string $key, $value): self
    {
        $this->requestOptions[$key] = $value;
        return $this;
    }


    /**
     * @return array
     */
    public function getRequestOptions(): array
    {
        return $this->requestOptions;
    }


    /**
     * @param array $json
     * @return self
     */
    public function setJson(array $json): self
    {
        $this->setRequestOption(RequestOptions::JSON, $json);
        return $this;
    }


    /**
     * run this service and get response from camunda engine.
     *
     * @return ResponseInterface
     */
    public function send(): ResponseInterface
    {
        try {
            return $this->camundaClient->getHttpClient()->request(
                $this->requestMethod,
                $this->camundaClient->getConfig()->getUrl() . $this->requestUrl,
                $this->requestOptions
            );
        } catch (GuzzleException $e) {
            // throw RuntimeException instead, to match the exception thrown by `ElvisServerBase::parseJsonResponse`
            throw new RuntimeException($e->getMessage(), $e->getCode());
        }

        /*
         TODO: Add check for RestException here?

         if (($restResponse->type ?? '') === 'RestException')
             throw new CamundaRequestException($restResponse->message ?? json_encode($restResponse));
         */
    }
}
