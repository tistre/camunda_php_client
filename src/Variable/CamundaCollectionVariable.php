<?php

namespace StrehleDe\CamundaClient\Variable;


/**
 * Class CamundaCollectionVariable
 * @package StrehleDe\CamundaClient\Variable
 */
class CamundaCollectionVariable extends CamundaVariable
{
    /**
     * CamundaCollectionVariable constructor.
     * @param string $value
     */
    public function __construct($value = [])
    {
        parent::__construct(
            CamundaVariable::TYPE_OBJECT,
            json_encode($value),
            [
                'serializationDataFormat' => 'application/json',
                'objectTypeName' => 'java.util.ArrayList'
            ]
        );
    }
}