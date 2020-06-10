<?php

namespace StrehleDe\CamundaClient\Variable;


use StrehleDe\CamundaClient\CamundaResponse;
use StrehleDe\CamundaClient\CamundaUtils;

/**
 * Class CamundaVariable
 * @package StrehleDe\CamundaClient\Variable
 * @see https://docs.camunda.org/manual/latest/reference/rest/process-instance/variables/put-variable/
 */
class CamundaVariable
{
    const TYPE_BOOLEAN = 'boolean';
    const TYPE_BYTES = 'bytes';
    const TYPE_SHORT = 'short';
    const TYPE_INTEGER = 'integer';
    const TYPE_LONG = 'long';
    const TYPE_DOUBLE = 'double';
    const TYPE_DATE = 'date';
    const TYPE_STRING = 'string';
    const TYPE_NULL = 'null';

    protected string $type = '';

    /** @var mixed */
    protected $value = '';


    /**
     * CamundaVariable constructor.
     * @param string $type
     * @param mixed $value
     */
    public function __construct(string $type = '', $value = '')
    {
        $this->setType($type);
        $this->setValue($value);
    }


    /**
     * @param array $json
     * @return self
     */
    public function fromJson(array $json): self
    {
        $propertyValues = CamundaUtils::jsonToPropertyValues(
            $json,
            get_class($this),
            ['type', 'value']
        );

        foreach ($propertyValues as $propertyName => $value) {
            $this->{$propertyName} = $value;
        }

        return $this;
    }


    /**
     * @return array
     */
    public function toJson(): array
    {
        $result = ['value' => $this->getValue()];

        if ($this->getType() !== '') {
            $result['type'] = $this->getType();
        }

        return $result;
    }


    /**
     * @return mixed
     */
    public function getValue()
    {
        return $this->value;
    }


    /**
     * @param mixed $value
     * @return self
     */
    public function setValue($value): self
    {
        $this->value = $value;
        return $this;
    }


    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }


    /**
     * @param string $type
     * @return self
     */
    public function setType(string $type): self
    {
        $this->type = $type;
        return $this;
    }
}