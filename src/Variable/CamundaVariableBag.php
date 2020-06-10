<?php

namespace StrehleDe\CamundaClient\Variable;

use ArrayIterator;


/**
 * Class CamundaVariableBag
 * @package StrehleDe\CamundaClient\Variable
 */
class CamundaVariableBag extends ArrayIterator
{
    public function __construct(CamundaVariable ...$variables)
    {
        parent::__construct($variables);
    }


    public function current(): CamundaVariable
    {
        return parent::current();
    }


    public function offsetGet($offset): CamundaVariable
    {
        return parent::offsetGet($offset);
    }


    /**
     * @return array
     */
    public function toJson(): array
    {
        $result = [];

        foreach ($this as $variableName => $variable) {
            $result[$variableName] = $variable->toJson();
        }

        return $result;
    }


    /**
     * @param array $json
     */
    public function fromJson(array $json): void
    {
        // TODO: Reset (empty) values first?

        foreach ($json as $variableName => $value) {
            $this[$variableName] = (new CamundaVariable())->fromJson($value);
        }
    }
}