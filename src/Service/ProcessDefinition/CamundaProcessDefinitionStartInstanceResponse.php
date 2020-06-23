<?php

namespace StrehleDe\CamundaClient\Service\ProcessDefinition;

use Psr\Http\Message\ResponseInterface;
use StrehleDe\CamundaClient\CamundaResponse;
use StrehleDe\CamundaClient\CamundaRestRequest;
use StrehleDe\CamundaClient\Variable\CamundaVariableBag;


/**
 * Class CamundaProcessDefinitionStartInstanceResponse
 * @package StrehleDe\CamundaClient\Response
 * @see https://docs.camunda.org/manual/latest/reference/rest/process-definition/post-start-process-instance/
 */
class CamundaProcessDefinitionStartInstanceResponse extends CamundaResponse
{
    protected string $businessKey;
    protected string $caseInstanceId;
    protected string $definitionId;
    protected bool $ended;
    protected string $id;
    protected bool $suspended;
    protected string $tenantId;
    protected CamundaVariableBag $variables;


    /**
     * CamundaProcessDefinitionStartInstanceResponse constructor.
     */
    public function __construct()
    {
        $this->variables = new CamundaVariableBag();
    }


    /**
     * @param ResponseInterface $restResponse
     * @return self
     */
    public function fromRestResponse(ResponseInterface $restResponse): self
    {
        $json = CamundaResponse::restResponseToJson($restResponse);

        parent::jsonToProperties($json);

        // TODO: Can this be moved into a generic method? Detect VariablesBag type properties?
        if (isset($json['variables'])) {
            $this->variables->fromJson($json['variables']);
        }

        return $this;
    }


    /**
     * @return array
     */
    protected function getPropertiesToCopyFromJson(): array
    {
        return ['businessKey', 'caseInstanceId', 'definitionId', 'ended', 'id', 'suspended', 'tenantId'];
    }


    /**
     * @return string|null
     */
    public function getBusinessKey(): ?string
    {
        return $this->businessKey ?? null;
    }


    /**
     * @return string|null
     */
    public function getDefinitionId(): ?string
    {
        return $this->definitionId ?? null;
    }


    /**
     * @return string|null
     */
    public function getId(): ?string
    {
        return $this->id ?? null;
    }


    /**
     * @return string|null
     */
    public function getCaseInstanceId(): ?string
    {
        return $this->caseInstanceId ?? null;
    }


    /**
     * @return bool|null
     */
    public function isEnded(): ?bool
    {
        return $this->ended ?? null;
    }


    /**
     * @return bool|null
     */
    public function isSuspended(): ?bool
    {
        return $this->suspended ?? null;
    }


    /**
     * @return CamundaVariableBag
     */
    public function getVariables(): CamundaVariableBag
    {
        return $this->variables;
    }


    /**
     * @return string|null
     */
    public function getTenantId(): ?string
    {
        return $this->tenantId ?? null;
    }
}