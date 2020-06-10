<?php

namespace StrehleDe\CamundaClient;

use StrehleDe\CamundaClient\Exception\CamundaInvalidInputException;


/**
 * Class CamundaRequest
 * @package StrehleDe\CamundaClient\Request
 */
abstract class CamundaRequest
{
    protected CamundaClient $camundaClient;


    /**
     * Request constructor.
     * @param CamundaClient $camundaClient
     */
    public function __construct(CamundaClient $camundaClient)
    {
        $this->camundaClient = $camundaClient;
    }


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
        return [];
    }


    /**
     * @return CamundaRestRequest
     */
    abstract public function toRestRequest(): CamundaRestRequest;
}
