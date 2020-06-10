<?php

namespace StrehleDe\CamundaClient\Service;

use Psr\Log\LoggerInterface;
use StrehleDe\CamundaClient\CamundaClient;
use StrehleDe\CamundaClient\CamundaConfig;


/**
 * Class CamundaService
 * @package StrehleDe\CamundaClient\Service
 */
abstract class CamundaService
{
    protected CamundaClient $camundaClient;


    /**
     * CamundaService constructor.
     * @param CamundaClient $camundaClient
     */
    public function __construct(CamundaClient $camundaClient)
    {
        $this->camundaClient = $camundaClient;
    }


    /**
     * @return CamundaConfig
     */
    public function getConfig(): CamundaConfig
    {
        return $this->camundaClient->getConfig();
    }


    /**
     * @return LoggerInterface
     */
    public function getLogger(): LoggerInterface
    {
        return $this->camundaClient->getLogger();
    }
}