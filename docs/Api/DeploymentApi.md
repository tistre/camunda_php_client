# StrehleDe\CamundaClient\DeploymentApi

All URIs are relative to *http://localhost:8080/engine-rest*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createDeployment**](DeploymentApi.md#createDeployment) | **POST** /deployment/create | 
[**deleteDeployment**](DeploymentApi.md#deleteDeployment) | **DELETE** /deployment/{id} | 
[**getDeployment**](DeploymentApi.md#getDeployment) | **GET** /deployment/{id} | 
[**getDeploymentResource**](DeploymentApi.md#getDeploymentResource) | **GET** /deployment/{id}/resources/{resourceId} | 
[**getDeploymentResourceData**](DeploymentApi.md#getDeploymentResourceData) | **GET** /deployment/{id}/resources/{resourceId}/data | 
[**getDeploymentResources**](DeploymentApi.md#getDeploymentResources) | **GET** /deployment/{id}/resources | 
[**getDeployments**](DeploymentApi.md#getDeployments) | **GET** /deployment | 
[**getDeploymentsCount**](DeploymentApi.md#getDeploymentsCount) | **GET** /deployment/count | 
[**redeploy**](DeploymentApi.md#redeploy) | **POST** /deployment/{id}/redeploy | 



## createDeployment

> \StrehleDe\CamundaClient\Model\DeploymentWithDefinitionsDto createDeployment($tenant_id, $deployment_source, $deploy_changed_only, $enable_duplicate_filtering, $deployment_name, $data)



Creates a deployment.  **Security Consideration**  Deployments can contain custom code in form of scripts or EL expressions to customize process behavior. This may be abused for remote execution of arbitrary code.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new StrehleDe\CamundaClient\Api\DeploymentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tenant_id = 'tenant_id_example'; // string | The tenant id for the deployment to be created.
$deployment_source = 'deployment_source_example'; // string | The source for the deployment to be created.
$deploy_changed_only = false; // bool | A flag indicating whether the process engine should perform duplicate checking on a per-resource basis. If set to true, only those resources that have actually changed are deployed. Checks are made against resources included previous deployments of the same name and only against the latest versions of those resources. If set to true, the option enable-duplicate-filtering is overridden and set to true.
$enable_duplicate_filtering = false; // bool | A flag indicating whether the process engine should perform duplicate checking for the deployment or not. This allows you to check if a deployment with the same name and the same resouces already exists and if true, not create a new deployment but instead return the existing deployment. The default value is false.
$deployment_name = 'deployment_name_example'; // string | The name for the deployment to be created.
$data = "/path/to/file.txt"; // \SplFileObject | The binary data to create the deployment resource. It is possible to have more than one form part with different form part names for the binary data to create a deployment.

try {
    $result = $apiInstance->createDeployment($tenant_id, $deployment_source, $deploy_changed_only, $enable_duplicate_filtering, $deployment_name, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DeploymentApi->createDeployment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **tenant_id** | **string**| The tenant id for the deployment to be created. | [optional]
 **deployment_source** | **string**| The source for the deployment to be created. | [optional]
 **deploy_changed_only** | **bool**| A flag indicating whether the process engine should perform duplicate checking on a per-resource basis. If set to true, only those resources that have actually changed are deployed. Checks are made against resources included previous deployments of the same name and only against the latest versions of those resources. If set to true, the option enable-duplicate-filtering is overridden and set to true. | [optional] [default to false]
 **enable_duplicate_filtering** | **bool**| A flag indicating whether the process engine should perform duplicate checking for the deployment or not. This allows you to check if a deployment with the same name and the same resouces already exists and if true, not create a new deployment but instead return the existing deployment. The default value is false. | [optional] [default to false]
 **deployment_name** | **string**| The name for the deployment to be created. | [optional]
 **data** | **\SplFileObject****\SplFileObject**| The binary data to create the deployment resource. It is possible to have more than one form part with different form part names for the binary data to create a deployment. | [optional]

### Return type

[**\StrehleDe\CamundaClient\Model\DeploymentWithDefinitionsDto**](../Model/DeploymentWithDefinitionsDto.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: multipart/form-data
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## deleteDeployment

> deleteDeployment($id, $cascade, $skip_custom_listeners, $skip_io_mappings)



Deletes a deployment by id.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new StrehleDe\CamundaClient\Api\DeploymentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | The id of the deployment to be deleted.
$cascade = false; // bool | `true`, if all process instances, historic process instances and jobs for this deployment should be deleted.
$skip_custom_listeners = false; // bool | `true`, if only the built-in ExecutionListeners should be notified with the end event.
$skip_io_mappings = false; // bool | `true`, if all input/output mappings should not be invoked.

try {
    $apiInstance->deleteDeployment($id, $cascade, $skip_custom_listeners, $skip_io_mappings);
} catch (Exception $e) {
    echo 'Exception when calling DeploymentApi->deleteDeployment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The id of the deployment to be deleted. |
 **cascade** | **bool**| &#x60;true&#x60;, if all process instances, historic process instances and jobs for this deployment should be deleted. | [optional] [default to false]
 **skip_custom_listeners** | **bool**| &#x60;true&#x60;, if only the built-in ExecutionListeners should be notified with the end event. | [optional] [default to false]
 **skip_io_mappings** | **bool**| &#x60;true&#x60;, if all input/output mappings should not be invoked. | [optional] [default to false]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getDeployment

> \StrehleDe\CamundaClient\Model\DeploymentDto[] getDeployment($id)



Retrieves a deployment by id, according to the `Deployment` interface of the engine.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new StrehleDe\CamundaClient\Api\DeploymentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | The id of the deployment.

try {
    $result = $apiInstance->getDeployment($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DeploymentApi->getDeployment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The id of the deployment. |

### Return type

[**\StrehleDe\CamundaClient\Model\DeploymentDto[]**](../Model/DeploymentDto.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getDeploymentResource

> \StrehleDe\CamundaClient\Model\DeploymentResourceDto getDeploymentResource($id, $resource_id)



Retrieves a deployment resource by resource id for the given deployment.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new StrehleDe\CamundaClient\Api\DeploymentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | The id of the deployment
$resource_id = 'resource_id_example'; // string | The id of the deployment resource

try {
    $result = $apiInstance->getDeploymentResource($id, $resource_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DeploymentApi->getDeploymentResource: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The id of the deployment |
 **resource_id** | **string**| The id of the deployment resource |

### Return type

[**\StrehleDe\CamundaClient\Model\DeploymentResourceDto**](../Model/DeploymentResourceDto.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getDeploymentResourceData

> \SplFileObject getDeploymentResourceData($id, $resource_id)



Retrieves the binary content of a deployment resource for the given deployment by id.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new StrehleDe\CamundaClient\Api\DeploymentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | The id of the deployment.
$resource_id = 'resource_id_example'; // string | The id of the deployment resource.

try {
    $result = $apiInstance->getDeploymentResourceData($id, $resource_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DeploymentApi->getDeploymentResourceData: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The id of the deployment. |
 **resource_id** | **string**| The id of the deployment resource. |

### Return type

[**\SplFileObject**](../Model/\SplFileObject.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/octet-stream, */*, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getDeploymentResources

> \StrehleDe\CamundaClient\Model\DeploymentResourceDto[] getDeploymentResources($id)



Retrieves all deployment resources of a given deployment.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new StrehleDe\CamundaClient\Api\DeploymentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | The id of the deployment to retrieve the deployment resources for.

try {
    $result = $apiInstance->getDeploymentResources($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DeploymentApi->getDeploymentResources: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The id of the deployment to retrieve the deployment resources for. |

### Return type

[**\StrehleDe\CamundaClient\Model\DeploymentResourceDto[]**](../Model/DeploymentResourceDto.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getDeployments

> \StrehleDe\CamundaClient\Model\DeploymentDto[] getDeployments($id, $name, $name_like, $source, $without_source, $tenant_id_in, $without_tenant_id, $include_deployments_without_tenant_id, $after, $before, $sort_by, $sort_order, $first_result, $max_results)



Queries for deployments that fulfill given parameters. Parameters may be the properties of deployments, such as the id or name or a range of the deployment time. The size of the result set can be retrieved by using the [Get Deployment count](https://docs.camunda.org/manual/7.13/reference/rest/deployment/get-query-count/) method.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new StrehleDe\CamundaClient\Api\DeploymentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | Filter by deployment id
$name = 'name_example'; // string | Filter by the deployment name. Exact match.
$name_like = 'name_like_example'; // string | Filter by the deployment name that the parameter is a substring of. The parameter can include the wildcard `%` to express like-strategy such as: starts with (`%`name), ends with (name`%`) or contains (`%`name`%`).
$source = 'source_example'; // string | Filter by the deployment source.
$without_source = false; // bool | Filter by the deployment source whereby source is equal to `null`.
$tenant_id_in = 'tenant_id_in_example'; // string | Filter by a comma-separated list of tenant ids. A deployment must have one of the given tenant ids.
$without_tenant_id = false; // bool | Only include deployments which belong to no tenant. Value may only be `true`, as `false` is the default behavior.
$include_deployments_without_tenant_id = false; // bool | Include deployments which belong to no tenant. Can be used in combination with `tenantIdIn`. Value may only be `true`, as `false` is the default behavior.
$after = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Restricts to all deployments after the given date. By [default](https://docs.camunda.org/manual/7.13/reference/rest/overview/date-format/), the date must have the format `yyyy-MM-dd'T'HH:mm:ss.SSSZ`, e.g., `2013-01-23T14:42:45.000+0200`.
$before = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Restricts to all deployments before the given date. By [default](https://docs.camunda.org/manual/7.13/reference/rest/overview/date-format/), the date must have the format `yyyy-MM-dd'T'HH:mm:ss.SSSZ`, e.g., `2013-01-23T14:42:45.000+0200`.
$sort_by = 'sort_by_example'; // string | Sort the results lexicographically by a given criterion. Must be used in conjunction with the sortOrder parameter.
$sort_order = 'sort_order_example'; // string | Sort the results in a given order. Values may be asc for ascending order or desc for descending order. Must be used in conjunction with the sortBy parameter.
$first_result = 56; // int | Pagination of results. Specifies the index of the first result to return.
$max_results = 56; // int | Pagination of results. Specifies the maximum number of results to return. Will return less results if there are no more results left.

try {
    $result = $apiInstance->getDeployments($id, $name, $name_like, $source, $without_source, $tenant_id_in, $without_tenant_id, $include_deployments_without_tenant_id, $after, $before, $sort_by, $sort_order, $first_result, $max_results);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DeploymentApi->getDeployments: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Filter by deployment id | [optional]
 **name** | **string**| Filter by the deployment name. Exact match. | [optional]
 **name_like** | **string**| Filter by the deployment name that the parameter is a substring of. The parameter can include the wildcard &#x60;%&#x60; to express like-strategy such as: starts with (&#x60;%&#x60;name), ends with (name&#x60;%&#x60;) or contains (&#x60;%&#x60;name&#x60;%&#x60;). | [optional]
 **source** | **string**| Filter by the deployment source. | [optional]
 **without_source** | **bool**| Filter by the deployment source whereby source is equal to &#x60;null&#x60;. | [optional] [default to false]
 **tenant_id_in** | **string**| Filter by a comma-separated list of tenant ids. A deployment must have one of the given tenant ids. | [optional]
 **without_tenant_id** | **bool**| Only include deployments which belong to no tenant. Value may only be &#x60;true&#x60;, as &#x60;false&#x60; is the default behavior. | [optional] [default to false]
 **include_deployments_without_tenant_id** | **bool**| Include deployments which belong to no tenant. Can be used in combination with &#x60;tenantIdIn&#x60;. Value may only be &#x60;true&#x60;, as &#x60;false&#x60; is the default behavior. | [optional] [default to false]
 **after** | **\DateTime**| Restricts to all deployments after the given date. By [default](https://docs.camunda.org/manual/7.13/reference/rest/overview/date-format/), the date must have the format &#x60;yyyy-MM-dd&#39;T&#39;HH:mm:ss.SSSZ&#x60;, e.g., &#x60;2013-01-23T14:42:45.000+0200&#x60;. | [optional]
 **before** | **\DateTime**| Restricts to all deployments before the given date. By [default](https://docs.camunda.org/manual/7.13/reference/rest/overview/date-format/), the date must have the format &#x60;yyyy-MM-dd&#39;T&#39;HH:mm:ss.SSSZ&#x60;, e.g., &#x60;2013-01-23T14:42:45.000+0200&#x60;. | [optional]
 **sort_by** | **string**| Sort the results lexicographically by a given criterion. Must be used in conjunction with the sortOrder parameter. | [optional]
 **sort_order** | **string**| Sort the results in a given order. Values may be asc for ascending order or desc for descending order. Must be used in conjunction with the sortBy parameter. | [optional]
 **first_result** | **int**| Pagination of results. Specifies the index of the first result to return. | [optional]
 **max_results** | **int**| Pagination of results. Specifies the maximum number of results to return. Will return less results if there are no more results left. | [optional]

### Return type

[**\StrehleDe\CamundaClient\Model\DeploymentDto[]**](../Model/DeploymentDto.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getDeploymentsCount

> \StrehleDe\CamundaClient\Model\CountResultDto getDeploymentsCount($id, $name, $name_like, $source, $without_source, $tenant_id_in, $without_tenant_id, $include_deployments_without_tenant_id, $after, $before)



Queries for the number of deployments that fulfill given parameters. Takes the same parameters as the [Get Deployments](https://docs.camunda.org/manual/7.13/reference/rest/deployment/get-query/) method.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new StrehleDe\CamundaClient\Api\DeploymentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | Filter by deployment id
$name = 'name_example'; // string | Filter by the deployment name. Exact match.
$name_like = 'name_like_example'; // string | Filter by the deployment name that the parameter is a substring of. The parameter can include the wildcard `%` to express like-strategy such as: starts with (`%`name), ends with (name`%`) or contains (`%`name`%`).
$source = 'source_example'; // string | Filter by the deployment source.
$without_source = false; // bool | Filter by the deployment source whereby source is equal to `null`.
$tenant_id_in = 'tenant_id_in_example'; // string | Filter by a comma-separated list of tenant ids. A deployment must have one of the given tenant ids.
$without_tenant_id = false; // bool | Only include deployments which belong to no tenant. Value may only be `true`, as `false` is the default behavior.
$include_deployments_without_tenant_id = false; // bool | Include deployments which belong to no tenant. Can be used in combination with `tenantIdIn`. Value may only be `true`, as `false` is the default behavior.
$after = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Restricts to all deployments after the given date. By [default](https://docs.camunda.org/manual/7.13/reference/rest/overview/date-format/), the date must have the format `yyyy-MM-dd'T'HH:mm:ss.SSSZ`, e.g., `2013-01-23T14:42:45.000+0200`.
$before = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Restricts to all deployments before the given date. By [default](https://docs.camunda.org/manual/7.13/reference/rest/overview/date-format/), the date must have the format `yyyy-MM-dd'T'HH:mm:ss.SSSZ`, e.g., `2013-01-23T14:42:45.000+0200`.

try {
    $result = $apiInstance->getDeploymentsCount($id, $name, $name_like, $source, $without_source, $tenant_id_in, $without_tenant_id, $include_deployments_without_tenant_id, $after, $before);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DeploymentApi->getDeploymentsCount: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Filter by deployment id | [optional]
 **name** | **string**| Filter by the deployment name. Exact match. | [optional]
 **name_like** | **string**| Filter by the deployment name that the parameter is a substring of. The parameter can include the wildcard &#x60;%&#x60; to express like-strategy such as: starts with (&#x60;%&#x60;name), ends with (name&#x60;%&#x60;) or contains (&#x60;%&#x60;name&#x60;%&#x60;). | [optional]
 **source** | **string**| Filter by the deployment source. | [optional]
 **without_source** | **bool**| Filter by the deployment source whereby source is equal to &#x60;null&#x60;. | [optional] [default to false]
 **tenant_id_in** | **string**| Filter by a comma-separated list of tenant ids. A deployment must have one of the given tenant ids. | [optional]
 **without_tenant_id** | **bool**| Only include deployments which belong to no tenant. Value may only be &#x60;true&#x60;, as &#x60;false&#x60; is the default behavior. | [optional] [default to false]
 **include_deployments_without_tenant_id** | **bool**| Include deployments which belong to no tenant. Can be used in combination with &#x60;tenantIdIn&#x60;. Value may only be &#x60;true&#x60;, as &#x60;false&#x60; is the default behavior. | [optional] [default to false]
 **after** | **\DateTime**| Restricts to all deployments after the given date. By [default](https://docs.camunda.org/manual/7.13/reference/rest/overview/date-format/), the date must have the format &#x60;yyyy-MM-dd&#39;T&#39;HH:mm:ss.SSSZ&#x60;, e.g., &#x60;2013-01-23T14:42:45.000+0200&#x60;. | [optional]
 **before** | **\DateTime**| Restricts to all deployments before the given date. By [default](https://docs.camunda.org/manual/7.13/reference/rest/overview/date-format/), the date must have the format &#x60;yyyy-MM-dd&#39;T&#39;HH:mm:ss.SSSZ&#x60;, e.g., &#x60;2013-01-23T14:42:45.000+0200&#x60;. | [optional]

### Return type

[**\StrehleDe\CamundaClient\Model\CountResultDto**](../Model/CountResultDto.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## redeploy

> \StrehleDe\CamundaClient\Model\DeploymentWithDefinitionsDto redeploy($id, $redeployment_dto)



Re-deploys an existing deployment.  The deployment resources to re-deploy can be restricted by using the properties `resourceIds` or `resourceNames`. If no deployment resources to re-deploy are passed then all existing resources of the given deployment are re-deployed.  **Warning**: Deployments can contain custom code in form of scripts or EL expressions to customize process behavior. This may be abused for remote execution of arbitrary code. See the section on [security considerations for custom code](https://docs.camunda.org/manual/7.13/user-guide/process-engine/securing-custom-code/) in the user guide for details.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new StrehleDe\CamundaClient\Api\DeploymentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | The id of the deployment to re-deploy.
$redeployment_dto = {"resourceIds":["aResourceId"],"resourceNames":["aResourceName"],"source":"cockpit"}; // \StrehleDe\CamundaClient\Model\RedeploymentDto | 

try {
    $result = $apiInstance->redeploy($id, $redeployment_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DeploymentApi->redeploy: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The id of the deployment to re-deploy. |
 **redeployment_dto** | [**\StrehleDe\CamundaClient\Model\RedeploymentDto**](../Model/RedeploymentDto.md)|  | [optional]

### Return type

[**\StrehleDe\CamundaClient\Model\DeploymentWithDefinitionsDto**](../Model/DeploymentWithDefinitionsDto.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

