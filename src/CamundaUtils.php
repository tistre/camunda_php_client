<?php

namespace StrehleDe\CamundaClient;

use ReflectionProperty;
use StrehleDe\CamundaClient\Exception\CamundaInvalidInputException;
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


    /**
     * @param CamundaVariableBag $variables
     * @param array $required
     * @param string $addMessage
     */
    public static function assertRequiredVariables(CamundaVariableBag $variables, array $required, string $addMessage = ''): void
    {
        foreach ($required as $variableName) {
            $variable = $variables[$variableName] ?? null;

            if ($variable === null) {
                throw new CamundaInvalidInputException(
                    sprintf(
                        '%s: Required input variable "%s" is not set%s',
                        __METHOD__,
                        $variableName,
                        ($addMessage === '' ? '' : ' - ' . $addMessage)
                    )
                );
            }

            if (strlen($variable->getValue()) === 0) {
                throw new CamundaInvalidInputException(
                    sprintf(
                        '%s: Required input variable "%s" is set to an empty value%s',
                        __METHOD__,
                        $variableName,
                        ($addMessage === '' ? '' : ' - ' . $addMessage)
                    )
                );
            }
        }
    }
}