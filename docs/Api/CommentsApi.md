# Alfresco\CommentsApi

All URIs are relative to *https://localhost/alfresco/api/-default-/public/alfresco/versions/1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createComment**](CommentsApi.md#createComment) | **POST** /nodes/{nodeId}/comments | Create a comment
[**deleteComment**](CommentsApi.md#deleteComment) | **DELETE** /nodes/{nodeId}/comments/{commentId} | Delete a comment
[**listComments**](CommentsApi.md#listComments) | **GET** /nodes/{nodeId}/comments | List comments
[**updateComment**](CommentsApi.md#updateComment) | **PUT** /nodes/{nodeId}/comments/{commentId} | Update a comment


# **createComment**
> \Alfresco\Model\CommentEntry createComment($node_id, $comment_body_create, $fields)

Create a comment

Creates a comment on node **nodeId**. You specify the comment in a JSON body like this:  ```JSON {   \"content\": \"This is a comment\" } ```  **Note:** You can create more than one comment by  specifying a list of comments in the JSON body like this:  ```JSON [   {     \"content\": \"This is a comment\"   },   {     \"content\": \"This is another comment\"   } ] ``` If you specify a list as input, then a paginated list rather than an entry is returned in the response body. For example:  ```JSON {   \"list\": {     \"pagination\": {       \"count\": 2,       \"hasMoreItems\": false,       \"totalItems\": 2,       \"skipCount\": 0,       \"maxItems\": 100     },     \"entries\": [       {         \"entry\": {           ...         }       },       {         \"entry\": {           ...         }       }     ]   } } ```

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
Alfresco\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Alfresco\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Alfresco\Api\CommentsApi();
$node_id = "node_id_example"; // string | The identifier of a node.
$comment_body_create = new \Alfresco\Model\CommentBody(); // \Alfresco\Model\CommentBody | The comment text. Note that you can also provide a list of comments.
$fields = array("fields_example"); // string[] | A list of field names.  You can use this parameter to restrict the fields returned within a response if, for example, you want to save on overall bandwidth.  The list applies to a returned individual entity or entries within a collection.  If the API method also supports the **include** parameter, then the fields specified in the **include** parameter are returned in addition to those specified in the **fields** parameter.

try {
    $result = $api_instance->createComment($node_id, $comment_body_create, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CommentsApi->createComment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **node_id** | **string**| The identifier of a node. |
 **comment_body_create** | [**\Alfresco\Model\CommentBody**](../Model/CommentBody.md)| The comment text. Note that you can also provide a list of comments. |
 **fields** | [**string[]**](../Model/string.md)| A list of field names.  You can use this parameter to restrict the fields returned within a response if, for example, you want to save on overall bandwidth.  The list applies to a returned individual entity or entries within a collection.  If the API method also supports the **include** parameter, then the fields specified in the **include** parameter are returned in addition to those specified in the **fields** parameter. | [optional]

### Return type

[**\Alfresco\Model\CommentEntry**](../Model/CommentEntry.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteComment**
> deleteComment($node_id, $comment_id)

Delete a comment

Deletes the comment **commentId** from node **nodeId**.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
Alfresco\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Alfresco\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Alfresco\Api\CommentsApi();
$node_id = "node_id_example"; // string | The identifier of a node.
$comment_id = "comment_id_example"; // string | The identifier of a comment.

try {
    $api_instance->deleteComment($node_id, $comment_id);
} catch (Exception $e) {
    echo 'Exception when calling CommentsApi->deleteComment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **node_id** | **string**| The identifier of a node. |
 **comment_id** | **string**| The identifier of a comment. |

### Return type

void (empty response body)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listComments**
> \Alfresco\Model\CommentPaging listComments($node_id, $skip_count, $max_items, $fields)

List comments

Gets a list of comments for the node **nodeId**, sorted chronologically with the newest comment first.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
Alfresco\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Alfresco\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Alfresco\Api\CommentsApi();
$node_id = "node_id_example"; // string | The identifier of a node.
$skip_count = 0; // int | The number of entities that exist in the collection before those included in this list.  If not supplied then the default value is 0.
$max_items = 100; // int | The maximum number of items to return in the list.  If not supplied then the default value is 100.
$fields = array("fields_example"); // string[] | A list of field names.  You can use this parameter to restrict the fields returned within a response if, for example, you want to save on overall bandwidth.  The list applies to a returned individual entity or entries within a collection.  If the API method also supports the **include** parameter, then the fields specified in the **include** parameter are returned in addition to those specified in the **fields** parameter.

try {
    $result = $api_instance->listComments($node_id, $skip_count, $max_items, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CommentsApi->listComments: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **node_id** | **string**| The identifier of a node. |
 **skip_count** | **int**| The number of entities that exist in the collection before those included in this list.  If not supplied then the default value is 0. | [optional] [default to 0]
 **max_items** | **int**| The maximum number of items to return in the list.  If not supplied then the default value is 100. | [optional] [default to 100]
 **fields** | [**string[]**](../Model/string.md)| A list of field names.  You can use this parameter to restrict the fields returned within a response if, for example, you want to save on overall bandwidth.  The list applies to a returned individual entity or entries within a collection.  If the API method also supports the **include** parameter, then the fields specified in the **include** parameter are returned in addition to those specified in the **fields** parameter. | [optional]

### Return type

[**\Alfresco\Model\CommentPaging**](../Model/CommentPaging.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateComment**
> \Alfresco\Model\CommentEntry updateComment($node_id, $comment_id, $comment_body_update, $fields)

Update a comment

Updates an existing comment **commentId** on node **nodeId**.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
Alfresco\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Alfresco\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Alfresco\Api\CommentsApi();
$node_id = "node_id_example"; // string | The identifier of a node.
$comment_id = "comment_id_example"; // string | The identifier of a comment.
$comment_body_update = new \Alfresco\Model\CommentBody(); // \Alfresco\Model\CommentBody | The JSON representing the comment to be updated.
$fields = array("fields_example"); // string[] | A list of field names.  You can use this parameter to restrict the fields returned within a response if, for example, you want to save on overall bandwidth.  The list applies to a returned individual entity or entries within a collection.  If the API method also supports the **include** parameter, then the fields specified in the **include** parameter are returned in addition to those specified in the **fields** parameter.

try {
    $result = $api_instance->updateComment($node_id, $comment_id, $comment_body_update, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CommentsApi->updateComment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **node_id** | **string**| The identifier of a node. |
 **comment_id** | **string**| The identifier of a comment. |
 **comment_body_update** | [**\Alfresco\Model\CommentBody**](../Model/CommentBody.md)| The JSON representing the comment to be updated. |
 **fields** | [**string[]**](../Model/string.md)| A list of field names.  You can use this parameter to restrict the fields returned within a response if, for example, you want to save on overall bandwidth.  The list applies to a returned individual entity or entries within a collection.  If the API method also supports the **include** parameter, then the fields specified in the **include** parameter are returned in addition to those specified in the **fields** parameter. | [optional]

### Return type

[**\Alfresco\Model\CommentEntry**](../Model/CommentEntry.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

