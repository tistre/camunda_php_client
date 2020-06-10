<?php

namespace StrehleDe\CamundaClient;

use ArrayIterator;


/**
 * Class CamundaTopicBag
 * @package StrehleDe\CamundaClient
 */
class CamundaTopicBag extends ArrayIterator
{
    public function __construct(CamundaTopic ...$variables)
    {
        parent::__construct($variables);
    }


    public function current(): CamundaTopic
    {
        return parent::current();
    }


    public function offsetGet($offset): CamundaTopic
    {
        return parent::offsetGet($offset);
    }
}