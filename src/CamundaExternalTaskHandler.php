<?php

namespace StrehleDe\CamundaClient;

use Psr\Log\LoggerInterface;
use StrehleDe\CamundaClient\Exception\CamundaInvalidInputException;
use StrehleDe\CamundaClient\Variable\CamundaVariableBag;


/**
 * Class CamundaExternalTaskHandler
 * @package StrehleDe\CamundaClient
 */
abstract class CamundaExternalTaskHandler
{
    const METHOD_PREFIX_HANDLE_TOPIC = 'handle_';

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
     * @param CamundaExternalTask $externalTask
     * @param CamundaVariableBag $updateVariables
     */
    public function handle(CamundaExternalTask $externalTask, CamundaVariableBag $updateVariables): void
    {
        $methodName = $this->topicNameToMethodName($externalTask->getTopicName());

        if (!method_exists($this, $methodName)) {
            throw new CamundaInvalidInputException(sprintf('%s: Method <%s> does not exist', __METHOD__, $methodName));
        }

        $this->$methodName($externalTask, $updateVariables);
    }


    /**
     * @param string $topicName
     * @return string
     */
    protected function topicNameToMethodName(string $topicName): string
    {
        return self::METHOD_PREFIX_HANDLE_TOPIC . strtr($topicName, ['-' => '_']);
    }
}