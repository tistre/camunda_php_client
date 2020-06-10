<?php

namespace StrehleDe\CamundaClient;

use GuzzleHttp\Client;
use Psr\Log\LoggerInterface;


/**
 * Class CamundaClient
 * @package StrehleDe\CamundaClient
 */
class CamundaClient
{
    protected CamundaConfig $config;
    protected Client $httpClient;
    protected LoggerInterface $logger;


    /**
     * CamundaClient constructor.
     * @param CamundaConfig $config
     */
    public function __construct(CamundaConfig $config, LoggerInterface $logger)
    {
        $this->config = $config;
        $this->logger = $logger;

        $this->httpClient = new Client();
    }


    /**
     * @return CamundaConfig
     */
    public function getConfig(): CamundaConfig
    {
        return $this->config;
    }


    /**
     * @return Client
     */
    public function getHttpClient(): Client
    {
        return $this->httpClient;
    }


    /**
     * @return LoggerInterface
     */
    public function getLogger(): LoggerInterface
    {
        return $this->logger;
    }
}