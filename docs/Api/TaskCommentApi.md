# StrehleDe\CamundaClient\TaskCommentApi

All URIs are relative to *http://localhost:8080/engine-rest*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createComment**](TaskCommentApi.md#createComment) | **POST** /task/{id}/comment/create | 
[**getComment**](TaskCommentApi.md#getComment) | **GET** /task/{id}/comment/{commentId} | 
[**getComments**](TaskCommentApi.md#getComments) | **GET** /task/{id}/comment | 



## createComment

> \StrehleDe\CamundaClient\Model\CommentDto createComment($id, $comment_dto)



Creates a comment for a task by id.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new StrehleDe\CamundaClient\Api\TaskCommentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | The id of the task to add the comment to.
$comment_dto = {"message":"a task comment"}; // \StrehleDe\CamundaClient\Model\CommentDto | **Note:** Only the `message` property will be used. Every other property passed to this endpoint will be ignored.

try {
    $result = $apiInstance->createComment($id, $comment_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaskCommentApi->createComment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The id of the task to add the comment to. |
 **comment_dto** | [**\StrehleDe\CamundaClient\Model\CommentDto**](../Model/CommentDto.md)| **Note:** Only the &#x60;message&#x60; property will be used. Every other property passed to this endpoint will be ignored. | [optional]

### Return type

[**\StrehleDe\CamundaClient\Model\CommentDto**](../Model/CommentDto.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getComment

> \StrehleDe\CamundaClient\Model\CommentDto getComment($id, $comment_id)



Retrieves a task comment by task id and comment id.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new StrehleDe\CamundaClient\Api\TaskCommentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | The id of the task.
$comment_id = 'comment_id_example'; // string | The id of the comment to be retrieved.

try {
    $result = $apiInstance->getComment($id, $comment_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaskCommentApi->getComment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The id of the task. |
 **comment_id** | **string**| The id of the comment to be retrieved. |

### Return type

[**\StrehleDe\CamundaClient\Model\CommentDto**](../Model/CommentDto.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getComments

> \StrehleDe\CamundaClient\Model\CommentDto[] getComments($id)



Gets the comments for a task by id.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new StrehleDe\CamundaClient\Api\TaskCommentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string | The id of the task to retrieve the comments for.

try {
    $result = $apiInstance->getComments($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaskCommentApi->getComments: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The id of the task to retrieve the comments for. |

### Return type

[**\StrehleDe\CamundaClient\Model\CommentDto[]**](../Model/CommentDto.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

