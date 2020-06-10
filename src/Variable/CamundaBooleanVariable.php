<?php

namespace StrehleDe\CamundaClient\Variable;


/**
 * Class CamundaBooleanVariable
 * @package StrehleDe\CamundaClient\Variable
 */
class CamundaBooleanVariable extends CamundaVariable
{
    /**
     * CamundaBooleanVariable constructor.
     * @param bool $value
     */
    public function __construct(bool $value = false)
    {
        parent::__construct(CamundaVariable::TYPE_BOOLEAN, $value);
    }


    /**
     * @param mixed $value
     * @return CamundaVariable
     */
    public function setValue($value): CamundaVariable
    {
        if (strtolower($value) === 'true') {
            $value = true;
        } elseif (strtolower($value) === 'false') {
            $value = false;
        } else {
            $value = boolval($value);
        }

        return parent::setValue($value);
    }
}