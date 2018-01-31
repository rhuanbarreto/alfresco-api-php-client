# Alfresco\Core\TagsApi

All URIs are relative to *https://localhost/alfresco/api/-default-/public/alfresco/versions/1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createTagForNode**](TagsApi.md#createTagForNode) | **POST** /nodes/{nodeId}/tags | Create a tag for a node
[**deleteTagFromNode**](TagsApi.md#deleteTagFromNode) | **DELETE** /nodes/{nodeId}/tags/{tagId} | Delete a tag from a node
[**getTag**](TagsApi.md#getTag) | **GET** /tags/{tagId} | Get a tag
[**listTags**](TagsApi.md#listTags) | **GET** /tags | List tags
[**listTagsForNode**](TagsApi.md#listTagsForNode) | **GET** /nodes/{nodeId}/tags | List tags for a node
[**updateTag**](TagsApi.md#updateTag) | **PUT** /tags/{tagId} | Update a tag


# **createTagForNode**
> \Alfresco\Core\Model\TagEntry createTagForNode($node_id, $tag_body_create, $fields)

Create a tag for a node

Creates a tag on the node **nodeId**. You specify the tag in a JSON body like this:  ```JSON {   \"tag\":\"test-tag-1\" } ```  **Note:** You can create more than one tag by  specifying a list of tags in the JSON body like this:  ```JSON [   {     \"tag\":\"test-tag-1\"   },   {     \"tag\":\"test-tag-2\"   } ] ``` If you specify a list as input, then a paginated list rather than an entry is returned in the response body. For example:  ```JSON {   \"list\": {     \"pagination\": {       \"count\": 2,       \"hasMoreItems\": false,       \"totalItems\": 2,       \"skipCount\": 0,       \"maxItems\": 100     },     \"entries\": [       {         \"entry\": {           ...         }       },       {         \"entry\": {          ...         }       }     ]   } } ```

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
Alfresco\Core\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Alfresco\Core\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Alfresco\Core\Api\TagsApi();
$node_id = "node_id_example"; // string | The identifier of a node.
$tag_body_create = new \Alfresco\Core\Model\TagBody(); // \Alfresco\Core\Model\TagBody | The new tag
$fields = array("fields_example"); // string[] | A list of field names.  You can use this parameter to restrict the fields returned within a response if, for example, you want to save on overall bandwidth.  The list applies to a returned individual entity or entries within a collection.  If the API method also supports the **include** parameter, then the fields specified in the **include** parameter are returned in addition to those specified in the **fields** parameter.

try {
    $result = $api_instance->createTagForNode($node_id, $tag_body_create, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TagsApi->createTagForNode: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **node_id** | **string**| The identifier of a node. |
 **tag_body_create** | [**\Alfresco\Core\Model\TagBody**](../Model/TagBody.md)| The new tag |
 **fields** | [**string[]**](../Model/string.md)| A list of field names.  You can use this parameter to restrict the fields returned within a response if, for example, you want to save on overall bandwidth.  The list applies to a returned individual entity or entries within a collection.  If the API method also supports the **include** parameter, then the fields specified in the **include** parameter are returned in addition to those specified in the **fields** parameter. | [optional]

### Return type

[**\Alfresco\Core\Model\TagEntry**](../Model/TagEntry.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteTagFromNode**
> deleteTagFromNode($node_id, $tag_id)

Delete a tag from a node

Deletes tag **tagId** from node **nodeId**.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
Alfresco\Core\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Alfresco\Core\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Alfresco\Core\Api\TagsApi();
$node_id = "node_id_example"; // string | The identifier of a node.
$tag_id = "tag_id_example"; // string | The identifier of a tag.

try {
    $api_instance->deleteTagFromNode($node_id, $tag_id);
} catch (Exception $e) {
    echo 'Exception when calling TagsApi->deleteTagFromNode: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **node_id** | **string**| The identifier of a node. |
 **tag_id** | **string**| The identifier of a tag. |

### Return type

void (empty response body)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getTag**
> \Alfresco\Core\Model\TagEntry getTag($tag_id, $fields)

Get a tag

Get a specific tag with **tagId**.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
Alfresco\Core\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Alfresco\Core\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Alfresco\Core\Api\TagsApi();
$tag_id = "tag_id_example"; // string | The identifier of a tag.
$fields = array("fields_example"); // string[] | A list of field names.  You can use this parameter to restrict the fields returned within a response if, for example, you want to save on overall bandwidth.  The list applies to a returned individual entity or entries within a collection.  If the API method also supports the **include** parameter, then the fields specified in the **include** parameter are returned in addition to those specified in the **fields** parameter.

try {
    $result = $api_instance->getTag($tag_id, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TagsApi->getTag: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **tag_id** | **string**| The identifier of a tag. |
 **fields** | [**string[]**](../Model/string.md)| A list of field names.  You can use this parameter to restrict the fields returned within a response if, for example, you want to save on overall bandwidth.  The list applies to a returned individual entity or entries within a collection.  If the API method also supports the **include** parameter, then the fields specified in the **include** parameter are returned in addition to those specified in the **fields** parameter. | [optional]

### Return type

[**\Alfresco\Core\Model\TagEntry**](../Model/TagEntry.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listTags**
> \Alfresco\Core\Model\TagPaging listTags($skip_count, $max_items, $fields)

List tags

Gets a list of tags in this repository.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
Alfresco\Core\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Alfresco\Core\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Alfresco\Core\Api\TagsApi();
$skip_count = 0; // int | The number of entities that exist in the collection before those included in this list.  If not supplied then the default value is 0.
$max_items = 100; // int | The maximum number of items to return in the list.  If not supplied then the default value is 100.
$fields = array("fields_example"); // string[] | A list of field names.  You can use this parameter to restrict the fields returned within a response if, for example, you want to save on overall bandwidth.  The list applies to a returned individual entity or entries within a collection.  If the API method also supports the **include** parameter, then the fields specified in the **include** parameter are returned in addition to those specified in the **fields** parameter.

try {
    $result = $api_instance->listTags($skip_count, $max_items, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TagsApi->listTags: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **skip_count** | **int**| The number of entities that exist in the collection before those included in this list.  If not supplied then the default value is 0. | [optional] [default to 0]
 **max_items** | **int**| The maximum number of items to return in the list.  If not supplied then the default value is 100. | [optional] [default to 100]
 **fields** | [**string[]**](../Model/string.md)| A list of field names.  You can use this parameter to restrict the fields returned within a response if, for example, you want to save on overall bandwidth.  The list applies to a returned individual entity or entries within a collection.  If the API method also supports the **include** parameter, then the fields specified in the **include** parameter are returned in addition to those specified in the **fields** parameter. | [optional]

### Return type

[**\Alfresco\Core\Model\TagPaging**](../Model/TagPaging.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listTagsForNode**
> \Alfresco\Core\Model\TagPaging listTagsForNode($node_id, $skip_count, $max_items, $fields)

List tags for a node

Gets a list of tags for node **nodeId**.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
Alfresco\Core\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Alfresco\Core\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Alfresco\Core\Api\TagsApi();
$node_id = "node_id_example"; // string | The identifier of a node.
$skip_count = 0; // int | The number of entities that exist in the collection before those included in this list.  If not supplied then the default value is 0.
$max_items = 100; // int | The maximum number of items to return in the list.  If not supplied then the default value is 100.
$fields = array("fields_example"); // string[] | A list of field names.  You can use this parameter to restrict the fields returned within a response if, for example, you want to save on overall bandwidth.  The list applies to a returned individual entity or entries within a collection.  If the API method also supports the **include** parameter, then the fields specified in the **include** parameter are returned in addition to those specified in the **fields** parameter.

try {
    $result = $api_instance->listTagsForNode($node_id, $skip_count, $max_items, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TagsApi->listTagsForNode: ', $e->getMessage(), PHP_EOL;
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

[**\Alfresco\Core\Model\TagPaging**](../Model/TagPaging.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateTag**
> \Alfresco\Core\Model\TagEntry updateTag($tag_id, $tag_body_update, $fields)

Update a tag

Updates the tag **tagId**.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
Alfresco\Core\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Alfresco\Core\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Alfresco\Core\Api\TagsApi();
$tag_id = "tag_id_example"; // string | The identifier of a tag.
$tag_body_update = new \Alfresco\Core\Model\TagBody(); // \Alfresco\Core\Model\TagBody | The updated tag
$fields = array("fields_example"); // string[] | A list of field names.  You can use this parameter to restrict the fields returned within a response if, for example, you want to save on overall bandwidth.  The list applies to a returned individual entity or entries within a collection.  If the API method also supports the **include** parameter, then the fields specified in the **include** parameter are returned in addition to those specified in the **fields** parameter.

try {
    $result = $api_instance->updateTag($tag_id, $tag_body_update, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TagsApi->updateTag: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **tag_id** | **string**| The identifier of a tag. |
 **tag_body_update** | [**\Alfresco\Core\Model\TagBody**](../Model/TagBody.md)| The updated tag |
 **fields** | [**string[]**](../Model/string.md)| A list of field names.  You can use this parameter to restrict the fields returned within a response if, for example, you want to save on overall bandwidth.  The list applies to a returned individual entity or entries within a collection.  If the API method also supports the **include** parameter, then the fields specified in the **include** parameter are returned in addition to those specified in the **fields** parameter. | [optional]

### Return type

[**\Alfresco\Core\Model\TagEntry**](../Model/TagEntry.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

