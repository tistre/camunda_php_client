<?php

namespace StrehleDe\CamundaClient;

use \Exception;
use Psr\Log\LoggerInterface;
use StrehleDe\CamundaClient\Exception\CamundaInvalidInputException;
use StrehleDe\CamundaClient\Service\ExternalTask\CamundaExternalTaskCompleteRequest;
use StrehleDe\CamundaClient\Service\ExternalTask\CamundaExternalTaskFetchAndLockRequest;
use StrehleDe\CamundaClient\Service\ExternalTask\CamundaExternalTaskHandleFailureRequest;
use StrehleDe\CamundaClient\Service\ExternalTask\CamundaExternalTaskService;
use StrehleDe\CamundaClient\Variable\CamundaVariableBag;


/**
 * Class CamundaExternalTaskWorker
 * @package StrehleDe\CamundaClient
 */
class CamundaExternalTaskWorker
{
    protected CamundaClient $camundaClient;
    protected CamundaExternalTaskHandler $externalTaskHandler;
    protected CamundaExternalTaskService $externalTaskService;
    protected LoggerInterface $logger;
    protected string $workerId;


    /**
     * CamundaExternalTaskWorker constructor.
     * @param CamundaClient $camundaClient
     * @param LoggerInterface $logger
     * @param CamundaExternalTaskHandler $externalTaskHandler
     * @param string $workerId
     */
    public function __construct(
        CamundaClient $camundaClient,
        LoggerInterface $logger,
        CamundaExternalTaskHandler $externalTaskHandler,
        string $workerId
    ) {
        $this->camundaClient = $camundaClient;
        $this->logger = $logger;
        $this->externalTaskHandler = $externalTaskHandler;
        $this->externalTaskService = new CamundaExternalTaskService($this->camundaClient);
        $this->workerId = $workerId;
    }


    /**
     * @param int $maxTasks How many external tasks to fetch
     * @param string[] $filterTopics Only fetch tasks with the given topics (empty array = all supported topics)
     * @return CamundaExternalTaskBag
     */
    public function fetchExternalTasks(int $maxTasks = 1, array $filterTopics = []): CamundaExternalTaskBag
    {
        $supportedTopics = $this->externalTaskHandler->getHandledTopics();
        $topics = new CamundaTopicBag();

        if (count($filterTopics) > 0) {
            foreach ($filterTopics as $topicName) {
                $topic = $supportedTopics->getByTopicName($topicName);

                if ($topic === null) {
                    throw new CamundaInvalidInputException(sprintf(
                        '%s: Topic <%s> not supported by <%s>',
                        __METHOD__,
                        $topicName,
                        get_class($this->externalTaskHandler)
                    ));
                }

                $topics[] = $topic;
            }
        }

        $request = (new CamundaExternalTaskFetchAndLockRequest($this->camundaClient))
            ->setWorkerId($this->workerId)
            ->setMaxTasks($maxTasks)
            ->setTopics($topics);

        return $this->externalTaskService->fetchAndLock($request)->getExternalTasks();
    }


    /**
     * @param CamundaExternalTask $externalTask
     */
    public function handleExternalTask(CamundaExternalTask $externalTask): void
    {
        try {
            $updateVariables = new CamundaVariableBag();
            $this->externalTaskHandler->handle($externalTask, $updateVariables);
        } catch (Exception $e) {
            $request = (new CamundaExternalTaskHandleFailureRequest($this->camundaClient))
                ->setId($externalTask->getId())
                ->setWorkerId($this->workerId)
                ->setErrorMessage($e->getMessage())
                ->setErrorDetails($e->getTraceAsString());

            $this->externalTaskService->handleFailure($request);

            $this->logger->error(
                sprintf(
                    '%s: Failed task <%s>: <%s>',
                    __METHOD__,
                    $externalTask->getId(),
                    $e->getMessage()
                )
            );

            return;
        }

        $request = (new CamundaExternalTaskCompleteRequest($this->camundaClient))
            ->setId($externalTask->getId())
            ->setWorkerId($this->workerId)
            ->setVariables($updateVariables);

        $this->externalTaskService->complete($request);

        $this->logger->info(sprintf('Completed task <%s>', $externalTask->getId()));
    }
}