# Alfresco\Core\TrashcanApi

All URIs are relative to *https://localhost/alfresco/api/-default-/public/alfresco/versions/1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteDeletedNode**](TrashcanApi.md#deleteDeletedNode) | **DELETE** /deleted-nodes/{nodeId} | Permanently delete a deleted node
[**getArchivedNodeRendition**](TrashcanApi.md#getArchivedNodeRendition) | **GET** /deleted-nodes/{nodeId}/renditions/{renditionId} | Get rendition information for a deleted node
[**getArchivedNodeRenditionContent**](TrashcanApi.md#getArchivedNodeRenditionContent) | **GET** /deleted-nodes/{nodeId}/renditions/{renditionId}/content | Get rendition content of a deleted node
[**getDeletedNode**](TrashcanApi.md#getDeletedNode) | **GET** /deleted-nodes/{nodeId} | Get a deleted node
[**getDeletedNodeContent**](TrashcanApi.md#getDeletedNodeContent) | **GET** /deleted-nodes/{nodeId}/content | Get deleted node content
[**listDeletedNodeRenditions**](TrashcanApi.md#listDeletedNodeRenditions) | **GET** /deleted-nodes/{nodeId}/renditions | List renditions for a deleted node
[**listDeletedNodes**](TrashcanApi.md#listDeletedNodes) | **GET** /deleted-nodes | List deleted nodes
[**restoreDeletedNode**](TrashcanApi.md#restoreDeletedNode) | **POST** /deleted-nodes/{nodeId}/restore | Restore a deleted node


# **deleteDeletedNode**
> deleteDeletedNode($node_id)

Permanently delete a deleted node

**Note:** this endpoint is available in Alfresco 5.2 and newer versions.  Permanently deletes the deleted node **nodeId**.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
Alfresco\Core\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Alfresco\Core\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Alfresco\Core\Api\TrashcanApi();
$node_id = "node_id_example"; // string | The identifier of a node.

try {
    $api_instance->deleteDeletedNode($node_id);
} catch (Exception $e) {
    echo 'Exception when calling TrashcanApi->deleteDeletedNode: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **node_id** | **string**| The identifier of a node. |

### Return type

void (empty response body)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getArchivedNodeRendition**
> \Alfresco\Core\Model\RenditionEntry getArchivedNodeRendition($node_id, $rendition_id)

Get rendition information for a deleted node

**Note:** this endpoint is available in Alfresco 5.2 and newer versions.  Gets the rendition information for **renditionId** of file **nodeId**.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
Alfresco\Core\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Alfresco\Core\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Alfresco\Core\Api\TrashcanApi();
$node_id = "node_id_example"; // string | The identifier of a node.
$rendition_id = "rendition_id_example"; // string | The name of a thumbnail rendition, for example *doclib*, or *pdf*.

try {
    $result = $api_instance->getArchivedNodeRendition($node_id, $rendition_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TrashcanApi->getArchivedNodeRendition: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **node_id** | **string**| The identifier of a node. |
 **rendition_id** | **string**| The name of a thumbnail rendition, for example *doclib*, or *pdf*. |

### Return type

[**\Alfresco\Core\Model\RenditionEntry**](../Model/RenditionEntry.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getArchivedNodeRenditionContent**
> getArchivedNodeRenditionContent($node_id, $rendition_id, $attachment, $if_modified_since, $placeholder)

Get rendition content of a deleted node

**Note:** this endpoint is available in Alfresco 5.2 and newer versions.  Gets the rendition content for **renditionId** of file **nodeId**.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
Alfresco\Core\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Alfresco\Core\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Alfresco\Core\Api\TrashcanApi();
$node_id = "node_id_example"; // string | The identifier of a node.
$rendition_id = "rendition_id_example"; // string | The name of a thumbnail rendition, for example *doclib*, or *pdf*.
$attachment = true; // bool | **true** enables a web browser to download the file as an attachment. **false** means a web browser may preview the file in a new tab or window, but not download the file.  You can only set this parameter to **false** if the content type of the file is in the supported list; for example, certain image files and PDF files.  If the content type is not supported for preview, then a value of **false**  is ignored, and the attachment will be returned in the response.
$if_modified_since = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Only returns the content if it has been modified since the date provided. Use the date format defined by HTTP. For example, `Wed, 09 Mar 2016 16:56:34 GMT`.
$placeholder = false; // bool | If **true** and there is no rendition for this **nodeId** and **renditionId**, then the placeholder image for the mime type of this rendition is returned, rather than a 404 response.

try {
    $api_instance->getArchivedNodeRenditionContent($node_id, $rendition_id, $attachment, $if_modified_since, $placeholder);
} catch (Exception $e) {
    echo 'Exception when calling TrashcanApi->getArchivedNodeRenditionContent: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **node_id** | **string**| The identifier of a node. |
 **rendition_id** | **string**| The name of a thumbnail rendition, for example *doclib*, or *pdf*. |
 **attachment** | **bool**| **true** enables a web browser to download the file as an attachment. **false** means a web browser may preview the file in a new tab or window, but not download the file.  You can only set this parameter to **false** if the content type of the file is in the supported list; for example, certain image files and PDF files.  If the content type is not supported for preview, then a value of **false**  is ignored, and the attachment will be returned in the response. | [optional] [default to true]
 **if_modified_since** | **\DateTime**| Only returns the content if it has been modified since the date provided. Use the date format defined by HTTP. For example, &#x60;Wed, 09 Mar 2016 16:56:34 GMT&#x60;. | [optional]
 **placeholder** | **bool**| If **true** and there is no rendition for this **nodeId** and **renditionId**, then the placeholder image for the mime type of this rendition is returned, rather than a 404 response. | [optional] [default to false]

### Return type

void (empty response body)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getDeletedNode**
> \Alfresco\Core\Model\DeletedNodeEntry getDeletedNode($node_id, $include)

Get a deleted node

**Note:** this endpoint is available in Alfresco 5.2 and newer versions.  Gets the specific deleted node **nodeId**.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
Alfresco\Core\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Alfresco\Core\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Alfresco\Core\Api\TrashcanApi();
$node_id = "node_id_example"; // string | The identifier of a node.
$include = array("include_example"); // string[] | Returns additional information about the node. The following optional fields can be requested: * allowableOperations * association * isLink * isLocked * path * permissions

try {
    $result = $api_instance->getDeletedNode($node_id, $include);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TrashcanApi->getDeletedNode: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **node_id** | **string**| The identifier of a node. |
 **include** | [**string[]**](../Model/string.md)| Returns additional information about the node. The following optional fields can be requested: * allowableOperations * association * isLink * isLocked * path * permissions | [optional]

### Return type

[**\Alfresco\Core\Model\DeletedNodeEntry**](../Model/DeletedNodeEntry.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getDeletedNodeContent**
> getDeletedNodeContent($node_id, $attachment, $if_modified_since)

Get deleted node content

**Note:** this endpoint is available in Alfresco 5.2 and newer versions.  Gets the content of the deleted node with identifier **nodeId**.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
Alfresco\Core\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Alfresco\Core\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Alfresco\Core\Api\TrashcanApi();
$node_id = "node_id_example"; // string | The identifier of a node.
$attachment = true; // bool | **true** enables a web browser to download the file as an attachment. **false** means a web browser may preview the file in a new tab or window, but not download the file.  You can only set this parameter to **false** if the content type of the file is in the supported list; for example, certain image files and PDF files.  If the content type is not supported for preview, then a value of **false**  is ignored, and the attachment will be returned in the response.
$if_modified_since = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Only returns the content if it has been modified since the date provided. Use the date format defined by HTTP. For example, `Wed, 09 Mar 2016 16:56:34 GMT`.

try {
    $api_instance->getDeletedNodeContent($node_id, $attachment, $if_modified_since);
} catch (Exception $e) {
    echo 'Exception when calling TrashcanApi->getDeletedNodeContent: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **node_id** | **string**| The identifier of a node. |
 **attachment** | **bool**| **true** enables a web browser to download the file as an attachment. **false** means a web browser may preview the file in a new tab or window, but not download the file.  You can only set this parameter to **false** if the content type of the file is in the supported list; for example, certain image files and PDF files.  If the content type is not supported for preview, then a value of **false**  is ignored, and the attachment will be returned in the response. | [optional] [default to true]
 **if_modified_since** | **\DateTime**| Only returns the content if it has been modified since the date provided. Use the date format defined by HTTP. For example, &#x60;Wed, 09 Mar 2016 16:56:34 GMT&#x60;. | [optional]

### Return type

void (empty response body)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listDeletedNodeRenditions**
> \Alfresco\Core\Model\RenditionPaging listDeletedNodeRenditions($node_id, $where)

List renditions for a deleted node

**Note:** this endpoint is available in Alfresco 5.2 and newer versions.  Gets a list of the rendition information for each rendition of the file **nodeId**, including the rendition id.  Each rendition returned has a **status**: CREATED means it is available to view or download, NOT_CREATED means the rendition can be requested.  You can use the **where** parameter to filter the returned renditions by **status**. For example, the following **where** clause will return just the CREATED renditions:  ``` (status='CREATED') ```

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
Alfresco\Core\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Alfresco\Core\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Alfresco\Core\Api\TrashcanApi();
$node_id = "node_id_example"; // string | The identifier of a node.
$where = "where_example"; // string | A string to restrict the returned objects by using a predicate.

try {
    $result = $api_instance->listDeletedNodeRenditions($node_id, $where);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TrashcanApi->listDeletedNodeRenditions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **node_id** | **string**| The identifier of a node. |
 **where** | **string**| A string to restrict the returned objects by using a predicate. | [optional]

### Return type

[**\Alfresco\Core\Model\RenditionPaging**](../Model/RenditionPaging.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listDeletedNodes**
> \Alfresco\Core\Model\DeletedNodesPaging listDeletedNodes($skip_count, $max_items, $include)

List deleted nodes

**Note:** this endpoint is available in Alfresco 5.2 and newer versions.  Gets a list of deleted nodes for the current user.  If the current user is an administrator deleted nodes for all users will be returned.  The list of deleted nodes will be ordered with the most recently deleted node at the top of the list.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
Alfresco\Core\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Alfresco\Core\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Alfresco\Core\Api\TrashcanApi();
$skip_count = 0; // int | The number of entities that exist in the collection before those included in this list.  If not supplied then the default value is 0.
$max_items = 100; // int | The maximum number of items to return in the list.  If not supplied then the default value is 100.
$include = array("include_example"); // string[] | Returns additional information about the node. The following optional fields can be requested: * allowableOperations * aspectNames * association * isLink * isLocked * path * properties * permissions

try {
    $result = $api_instance->listDeletedNodes($skip_count, $max_items, $include);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TrashcanApi->listDeletedNodes: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **skip_count** | **int**| The number of entities that exist in the collection before those included in this list.  If not supplied then the default value is 0. | [optional] [default to 0]
 **max_items** | **int**| The maximum number of items to return in the list.  If not supplied then the default value is 100. | [optional] [default to 100]
 **include** | [**string[]**](../Model/string.md)| Returns additional information about the node. The following optional fields can be requested: * allowableOperations * aspectNames * association * isLink * isLocked * path * properties * permissions | [optional]

### Return type

[**\Alfresco\Core\Model\DeletedNodesPaging**](../Model/DeletedNodesPaging.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **restoreDeletedNode**
> \Alfresco\Core\Model\NodeEntry restoreDeletedNode($node_id, $fields)

Restore a deleted node

**Note:** this endpoint is available in Alfresco 5.2 and newer versions.  Attempts to restore the deleted node **nodeId** to its original location.  If the node is successfully restored to its former primary parent, then only the  primary child association will be restored, including recursively for any primary  children. It should be noted that no other secondary child associations or peer  associations will be restored, for any of the nodes within the primary parent-child  hierarchy of restored nodes, irrespective of whether these associations were to  nodes within or outside of the restored hierarchy.   Also, any previously shared link will not be restored since it is deleted at the time  of delete of each node.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
Alfresco\Core\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Alfresco\Core\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Alfresco\Core\Api\TrashcanApi();
$node_id = "node_id_example"; // string | The identifier of a node.
$fields = array("fields_example"); // string[] | A list of field names.  You can use this parameter to restrict the fields returned within a response if, for example, you want to save on overall bandwidth.  The list applies to a returned individual entity or entries within a collection.  If the API method also supports the **include** parameter, then the fields specified in the **include** parameter are returned in addition to those specified in the **fields** parameter.

try {
    $result = $api_instance->restoreDeletedNode($node_id, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TrashcanApi->restoreDeletedNode: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **node_id** | **string**| The identifier of a node. |
 **fields** | [**string[]**](../Model/string.md)| A list of field names.  You can use this parameter to restrict the fields returned within a response if, for example, you want to save on overall bandwidth.  The list applies to a returned individual entity or entries within a collection.  If the API method also supports the **include** parameter, then the fields specified in the **include** parameter are returned in addition to those specified in the **fields** parameter. | [optional]

### Return type

[**\Alfresco\Core\Model\NodeEntry**](../Model/NodeEntry.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

