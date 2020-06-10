<?php

namespace StrehleDe\CamundaClient;

use ReflectionProperty;
use \RuntimeException;
use StrehleDe\CamundaClient\Exception\CamundaRequestException;
use StrehleDe\CamundaClient\Variable\CamundaVariable;
use StrehleDe\CamundaClient\Variable\CamundaVariableBag;


/**
 * Class CamundaUtils
 * @package StrehleDe\CamundaClient
 */
class CamundaUtils
{
    /**
     * @param array $json REST response JSON array
     * @param string $className Class name (for getting property types)
     * @param string[] $propertyNames Property names whose values to copy from REST response
     * @return array Associative array of property name to value
     */
    public static function jsonToPropertyValues(array $json, string $className, array $propertyNames): array
    {
        $values = [];

        foreach ($propertyNames as $propertyName) {
            if (isset($json[$propertyName])) {
                $value = $json[$propertyName];
            } else {
                continue;
            }

            $rp = new ReflectionProperty($className, $propertyName);

            if ($rp->hasType()) {
                $propertyType = $rp->getType()->getName();

                if ($propertyType === 'int') {
                    $value = intval($value);
                } elseif ($propertyType === 'bool') {
                    if (strtolower($value) === 'true') {
                        $value = true;
                    } elseif (strtolower($value) === 'false') {
                        $value = false;
                    } else {
                        $value = boolval($value);
                    }
                }
            }

            $values[$propertyName] = $value;
        }

        return $values;
    }
}