# Alfresco\RenditionsApi

All URIs are relative to *https://localhost/alfresco/api/-default-/public/alfresco/versions/1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createRendition**](RenditionsApi.md#createRendition) | **POST** /nodes/{nodeId}/renditions | Create rendition
[**getRendition**](RenditionsApi.md#getRendition) | **GET** /nodes/{nodeId}/renditions/{renditionId} | Get rendition information
[**getRenditionContent**](RenditionsApi.md#getRenditionContent) | **GET** /nodes/{nodeId}/renditions/{renditionId}/content | Get rendition content
[**listRenditions**](RenditionsApi.md#listRenditions) | **GET** /nodes/{nodeId}/renditions | List renditions


# **createRendition**
> createRendition($node_id, $rendition_body_create)

Create rendition

**Note:** this endpoint is available in Alfresco 5.2 and newer versions.  An asynchronous request to create a rendition for file **nodeId**.  The rendition is specified by name **id** in the request body: ```JSON {   \"id\":\"doclib\" } ```

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
Alfresco\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Alfresco\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Alfresco\Api\RenditionsApi();
$node_id = "node_id_example"; // string | The identifier of a node.
$rendition_body_create = new \Alfresco\Model\RenditionBodyCreate(); // \Alfresco\Model\RenditionBodyCreate | The rendition \"id\".

try {
    $api_instance->createRendition($node_id, $rendition_body_create);
} catch (Exception $e) {
    echo 'Exception when calling RenditionsApi->createRendition: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **node_id** | **string**| The identifier of a node. |
 **rendition_body_create** | [**\Alfresco\Model\RenditionBodyCreate**](../Model/RenditionBodyCreate.md)| The rendition \&quot;id\&quot;. |

### Return type

void (empty response body)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getRendition**
> \Alfresco\Model\RenditionEntry getRendition($node_id, $rendition_id)

Get rendition information

**Note:** this endpoint is available in Alfresco 5.2 and newer versions.  Gets the rendition information for **renditionId** of file **nodeId**.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
Alfresco\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Alfresco\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Alfresco\Api\RenditionsApi();
$node_id = "node_id_example"; // string | The identifier of a node.
$rendition_id = "rendition_id_example"; // string | The name of a thumbnail rendition, for example *doclib*, or *pdf*.

try {
    $result = $api_instance->getRendition($node_id, $rendition_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RenditionsApi->getRendition: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **node_id** | **string**| The identifier of a node. |
 **rendition_id** | **string**| The name of a thumbnail rendition, for example *doclib*, or *pdf*. |

### Return type

[**\Alfresco\Model\RenditionEntry**](../Model/RenditionEntry.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getRenditionContent**
> getRenditionContent($node_id, $rendition_id, $attachment, $if_modified_since, $placeholder)

Get rendition content

**Note:** this endpoint is available in Alfresco 5.2 and newer versions.  Gets the rendition content for **renditionId** of file **nodeId**.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
Alfresco\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Alfresco\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Alfresco\Api\RenditionsApi();
$node_id = "node_id_example"; // string | The identifier of a node.
$rendition_id = "rendition_id_example"; // string | The name of a thumbnail rendition, for example *doclib*, or *pdf*.
$attachment = true; // bool | **true** enables a web browser to download the file as an attachment. **false** means a web browser may preview the file in a new tab or window, but not download the file.  You can only set this parameter to **false** if the content type of the file is in the supported list; for example, certain image files and PDF files.  If the content type is not supported for preview, then a value of **false**  is ignored, and the attachment will be returned in the response.
$if_modified_since = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Only returns the content if it has been modified since the date provided. Use the date format defined by HTTP. For example, `Wed, 09 Mar 2016 16:56:34 GMT`.
$placeholder = false; // bool | If **true** and there is no rendition for this **nodeId** and **renditionId**,  then the placeholder image for the mime type of this rendition is returned, rather  than a 404 response.

try {
    $api_instance->getRenditionContent($node_id, $rendition_id, $attachment, $if_modified_since, $placeholder);
} catch (Exception $e) {
    echo 'Exception when calling RenditionsApi->getRenditionContent: ', $e->getMessage(), PHP_EOL;
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
 **placeholder** | **bool**| If **true** and there is no rendition for this **nodeId** and **renditionId**,  then the placeholder image for the mime type of this rendition is returned, rather  than a 404 response. | [optional] [default to false]

### Return type

void (empty response body)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listRenditions**
> \Alfresco\Model\RenditionPaging listRenditions($node_id, $where)

List renditions

**Note:** this endpoint is available in Alfresco 5.2 and newer versions.  Gets a list of the rendition information for each rendition of the the file **nodeId**, including the rendition id.  Each rendition returned has a **status**: CREATED means it is available to view or download, NOT_CREATED means the rendition can be requested.  You can use the **where** parameter to filter the returned renditions by **status**. For example, the following **where**  clause will return just the CREATED renditions:    ``` (status='CREATED') ```

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
Alfresco\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Alfresco\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Alfresco\Api\RenditionsApi();
$node_id = "node_id_example"; // string | The identifier of a node.
$where = "where_example"; // string | A string to restrict the returned objects by using a predicate.

try {
    $result = $api_instance->listRenditions($node_id, $where);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RenditionsApi->listRenditions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **node_id** | **string**| The identifier of a node. |
 **where** | **string**| A string to restrict the returned objects by using a predicate. | [optional]

### Return type

[**\Alfresco\Model\RenditionPaging**](../Model/RenditionPaging.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

