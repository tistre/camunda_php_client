<?php

namespace StrehleDe\CamundaClient;


abstract class CamundaResponse
{
    /**
     * @param array $json
     * @return self
     */
    public function jsonToProperties(array $json): self
    {
        $propertyValues = CamundaUtils::jsonToPropertyValues(
            $json,
            get_class($this),
            $this->getPropertiesToCopyFromJson()
        );

        foreach ($propertyValues as $propertyName => $value) {
            $this->{$propertyName} = $value;
        }

        return $this;
    }


    /**
     * @return array
     */
    protected function getPropertiesToCopyFromJson(): array
    {
        return [];
    }
}