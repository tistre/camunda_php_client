<?php

namespace StrehleDe\CamundaClient;

use ArrayIterator;


/**
 * Class CamundaProcessInstanceBag
 * @package StrehleDe\CamundaClient
 */
class CamundaProcessInstanceBag extends ArrayIterator
{
    public function __construct(CamundaProcessInstance ...$instances)
    {
        parent::__construct($instances);
    }


    public function current(): CamundaProcessInstance
    {
        return parent::current();
    }


    public function offsetGet($offset): CamundaProcessInstance
    {
        return parent::offsetGet($offset);
    }
}