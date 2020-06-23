<?php

namespace StrehleDe\CamundaClient;


use Psr\Http\Message\ResponseInterface;

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


    /**
     * Parse JSON response string into array, throw exception on error response
     *
     * @param ResponseInterface $response
     * @return array
     */
    public static function restResponseToJson(ResponseInterface $response): array
    {
        if (!in_array('application/json', $response->getHeader('Content-Type'))) {
            return [];
        }

        return json_decode($response->getBody(), true, 512, JSON_THROW_ON_ERROR);
    }
}