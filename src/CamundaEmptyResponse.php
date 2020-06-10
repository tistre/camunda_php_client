<?php

namespace StrehleDe\CamundaClient;

use Psr\Http\Message\ResponseInterface;


/**
 * Class CamundaEmptyResponse
 * @package StrehleDe\CamundaClient
 * @see https://docs.camunda.org/manual/latest/reference/rest/
 */
class CamundaEmptyResponse extends CamundaResponse
{
    /**
     * @param ResponseInterface $restResponse
     * @return self
     */
    public function fromRestResponse(ResponseInterface $restResponse): self
    {
        return $this;
    }
}