<?php

namespace StrehleDe\CamundaClient;


/**
 * Class CamundaConfig
 * @package StrehleDe\CamundaClient
 */
class CamundaConfig
{
    protected string $url;


    /**
     * CamundaConfig constructor.
     * @param string $url
     */
    public function __construct(string $url)
    {
        $this->url = trim($url);
    }


    /**
     * @return string
     */
    public function getUrl(): string
    {
        return $this->url;
    }
}