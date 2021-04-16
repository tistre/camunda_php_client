<?php

namespace StrehleDe\CamundaClient;

use GuzzleHttp\Client;
use GuzzleHttp\HandlerStack;
use GuzzleHttp\MessageFormatter;
use GuzzleHttp\Middleware;
use Psr\Log\LoggerInterface;
use Psr\Log\LogLevel;


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
     * @param LoggerInterface $logger
     */
    public function __construct(CamundaConfig $config, LoggerInterface $logger)
    {
        $this->config = $config;
        $this->logger = $logger;

        $stack = HandlerStack::create();

        $stack->push(
            Middleware::log(
                $logger,
                new MessageFormatter('Camunda {method} request to {uri}: {req_body} Camunda response: {res_body}'),
                LogLevel::DEBUG
            )
        );

        $this->httpClient = new Client(['handler' => $stack]);
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