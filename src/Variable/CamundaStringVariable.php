<?php

namespace StrehleDe\CamundaClient\Variable;


/**
 * Class CamundaStringVariable
 * @package StrehleDe\CamundaClient\Variable
 */
class CamundaStringVariable extends CamundaVariable
{
    /**
     * CamundaStringVariable constructor.
     * @param string $value
     */
    public function __construct($value = '')
    {
        parent::__construct(CamundaVariable::TYPE_STRING, $value);
    }
}