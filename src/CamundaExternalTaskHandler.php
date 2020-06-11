<?php

namespace StrehleDe\CamundaClient;

use Psr\Log\LoggerInterface;
use StrehleDe\CamundaClient\Exception\CamundaInvalidInputException;
use StrehleDe\CamundaClient\Variable\CamundaVariableBag;


abstract class CamundaExternalTaskHandler
{
    const METHOD_PREFIX_HANDLE_TASK = 'handleTask_';

    protected LoggerInterface $logger;


    /**
     * CamundaExternalTaskHandler constructor.
     * @param LoggerInterface $logger
     */
    public function __construct(LoggerInterface $logger)
    {
        $this->logger = $logger;
    }


    /**
     * @return CamundaTopicBag
     */
    abstract public function getHandledTopics(): CamundaTopicBag;


    /**
     * @return string[]
     */
    public function getHandledTopicNames(): array
    {
        $topicNames = [];

        foreach ($this->getHandledTopics() as $topic) {
            $topicNames[] = $topic->getTopicName();
        }

        return $topicNames;
    }


    /**
     * @param CamundaExternalTask $externalTask
     * @param CamundaVariableBag $updateVariables
     */
    public function handleTask(CamundaExternalTask $externalTask, CamundaVariableBag $updateVariables): void
    {
        $methodName = self::METHOD_PREFIX_HANDLE_TASK . $externalTask->getTopicName();

        if (!method_exists($this, $methodName)) {
            throw new CamundaInvalidInputException(sprintf('%s: Method <%s> does not exist', __METHOD__, $methodName));
        }

        $this->$methodName($externalTask, $updateVariables);
    }
}