<?php

namespace StrehleDe\CamundaClient\Variable;

use StrehleDe\CamundaClient\CamundaUtils;


/**
 * Class CamundaVariable
 * @package StrehleDe\CamundaClient\Variable
 * @see https://docs.camunda.org/manual/latest/reference/rest/overview/variables/
 * @see https://docs.camunda.org/manual/latest/reference/rest/process-instance/variables/put-variable/
 */
class CamundaVariable
{
    const TYPE_BOOLEAN = 'Boolean';
    const TYPE_BYTES = 'Bytes';
    const TYPE_DATE = 'Date';
    const TYPE_DOUBLE = 'Double';
    const TYPE_INTEGER = 'Integer';
    const TYPE_LONG = 'Long';
    const TYPE_NULL = 'Null';
    const TYPE_OBJECT = 'Object';
    const TYPE_SHORT = 'Short';
    const TYPE_STRING = 'String';

    protected string $type = '';

    /** @var mixed */
    protected $value = '';

    protected array $valueInfo = [];


    /**
     * CamundaVariable constructor.
     * @param string $type
     * @param mixed $value
     */
    public function __construct(string $type = '', $value = '', array $valueInfo = [])
    {
        $this->setType($type);
        $this->setValue($value);
        $this->setValueInfo($valueInfo);
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
            ['type', 'value', 'valueInfo']
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

        if (!empty($this->getValueInfo())) {
            $result['valueInfo'] = $this->getValueInfo();
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


    /**
     * @return array
     */
    public function getValueInfo(): array
    {
        return $this->valueInfo;
    }


    /**
     * @param array $valueInfo
     * @return self
     */
    public function setValueInfo(array $valueInfo): self
    {
        $this->valueInfo = $valueInfo;
        return $this;
    }
}