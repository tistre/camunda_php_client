<?php

namespace StrehleDe\CamundaClient\Variable;


/**
 * Class CamundaIntegerVariable
 * @package StrehleDe\CamundaClient\Variable
 */
class CamundaIntegerVariable extends CamundaVariable
{
    /**
     * CamundaIntegerVariable constructor.
     * @param int $value
     */
    public function __construct(int $value = -1)
    {
        parent::__construct(CamundaVariable::TYPE_INTEGER, $value);
    }


    /**
     * @param mixed $value
     * @return CamundaVariable
     */
    public function setValue($value): CamundaVariable
    {
        return parent::setValue(intval($value));
    }
}