<?php

namespace StrehleDe\CamundaClient;

use ArrayIterator;


/**
 * Class CamundaExternalTaskBag
 * @package StrehleDe\CamundaClient
 */
class CamundaExternalTaskBag extends ArrayIterator
{
    public function __construct(CamundaExternalTask ...$variables)
    {
        parent::__construct($variables);
    }


    public function current(): CamundaExternalTask
    {
        return parent::current();
    }


    public function offsetGet($offset): CamundaExternalTask
    {
        return parent::offsetGet($offset);
    }
}