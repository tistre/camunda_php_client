<?php

namespace StrehleDe\CamundaClient;

use ArrayIterator;


/**
 * Class CamundaTopicBag
 * @package StrehleDe\CamundaClient
 */
class CamundaTopicBag extends ArrayIterator
{
    /**
     * CamundaTopicBag constructor.
     * @param CamundaTopic ...$variables
     */
    public function __construct(CamundaTopic ...$variables)
    {
        parent::__construct($variables);
    }


    /**
     * @return CamundaTopic
     */
    public function current(): CamundaTopic
    {
        return parent::current();
    }


    /**
     * @param string $offset
     * @return CamundaTopic
     */
    public function offsetGet($offset): CamundaTopic
    {
        return parent::offsetGet($offset);
    }


    /**
     * @param string $topicName
     * @return CamundaTopic|null
     */
    public function getByTopicName(string $topicName): ?CamundaTopic
    {
        foreach ($this as $topic) {
            if ($topic->getTopicName() === $topicName) {
                return $topic;
            }
        }

        return null;
    }


    /**
     * @return string[]
     */
    public function getTopicNames(): array
    {
        $topicNames = [];

        foreach ($this as $topic) {
            $topicNames[] = $topic->getTopicName();
        }

        return $topicNames;
    }
}