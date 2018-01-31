# Alfresco\VersionsApi

All URIs are relative to *https://localhost/alfresco/api/-default-/public/alfresco/versions/1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteVersion**](VersionsApi.md#deleteVersion) | **DELETE** /nodes/{nodeId}/versions/{versionId} | Delete a version
[**getVersion**](VersionsApi.md#getVersion) | **GET** /nodes/{nodeId}/versions/{versionId} | Get version information
[**getVersionContent**](VersionsApi.md#getVersionContent) | **GET** /nodes/{nodeId}/versions/{versionId}/content | Get version content
[**listVersionHistory**](VersionsApi.md#listVersionHistory) | **GET** /nodes/{nodeId}/versions | List version history
[**revertVersion**](VersionsApi.md#revertVersion) | **POST** /nodes/{nodeId}/versions/{versionId}/revert | Revert a version


# **deleteVersion**
> deleteVersion($node_id, $version_id)

Delete a version

**Note:** this endpoint is available in Alfresco 5.2 and newer versions.  Delete the version identified by **versionId** and **nodeId*.  If the version is successfully deleted then the content and metadata for that versioned node will be deleted and will no longer appear in the version history. This operation cannot be undone.  If the most recent version is deleted the live node will revert to the next most recent version.  We currently do not allow the last version to be deleted. If you wish to clear the history then you can remove the \"cm:versionable\" aspect (via update node) which will also disable versioning. In this case, you can re-enable versioning by adding back the \"cm:versionable\" aspect or using the version  params (majorVersion and comment) on a subsequent file content update.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
Alfresco\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Alfresco\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Alfresco\Api\VersionsApi();
$node_id = "node_id_example"; // string | The identifier of a node.
$version_id = "version_id_example"; // string | The identifier of a version, ie. version label, within the version history of a node.

try {
    $api_instance->deleteVersion($node_id, $version_id);
} catch (Exception $e) {
    echo 'Exception when calling VersionsApi->deleteVersion: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **node_id** | **string**| The identifier of a node. |
 **version_id** | **string**| The identifier of a version, ie. version label, within the version history of a node. |

### Return type

void (empty response body)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getVersion**
> \Alfresco\Model\VersionEntry getVersion($node_id, $version_id)

Get version information

**Note:** this endpoint is available in Alfresco 5.2 and newer versions.  Gets the version information for **versionId** of file node **nodeId**.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
Alfresco\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Alfresco\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Alfresco\Api\VersionsApi();
$node_id = "node_id_example"; // string | The identifier of a node.
$version_id = "version_id_example"; // string | The identifier of a version, ie. version label, within the version history of a node.

try {
    $result = $api_instance->getVersion($node_id, $version_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VersionsApi->getVersion: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **node_id** | **string**| The identifier of a node. |
 **version_id** | **string**| The identifier of a version, ie. version label, within the version history of a node. |

### Return type

[**\Alfresco\Model\VersionEntry**](../Model/VersionEntry.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getVersionContent**
> getVersionContent($node_id, $version_id, $attachment, $if_modified_since)

Get version content

**Note:** this endpoint is available in Alfresco 5.2 and newer versions.  Gets the version content for **versionId** of file node **nodeId**.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
Alfresco\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Alfresco\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Alfresco\Api\VersionsApi();
$node_id = "node_id_example"; // string | The identifier of a node.
$version_id = "version_id_example"; // string | The identifier of a version, ie. version label, within the version history of a node.
$attachment = true; // bool | **true** enables a web browser to download the file as an attachment. **false** means a web browser may preview the file in a new tab or window, but not download the file.  You can only set this parameter to **false** if the content type of the file is in the supported list; for example, certain image files and PDF files.  If the content type is not supported for preview, then a value of **false**  is ignored, and the attachment will be returned in the response.
$if_modified_since = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Only returns the content if it has been modified since the date provided. Use the date format defined by HTTP. For example, `Wed, 09 Mar 2016 16:56:34 GMT`.

try {
    $api_instance->getVersionContent($node_id, $version_id, $attachment, $if_modified_since);
} catch (Exception $e) {
    echo 'Exception when calling VersionsApi->getVersionContent: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **node_id** | **string**| The identifier of a node. |
 **version_id** | **string**| The identifier of a version, ie. version label, within the version history of a node. |
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

# **listVersionHistory**
> \Alfresco\Model\VersionPaging listVersionHistory($node_id, $include, $fields, $skip_count, $max_items)

List version history

**Note:** this endpoint is available in Alfresco 5.2 and newer versions.  Gets the version history as an ordered list of versions for the specified **nodeId**.  The list is ordered in descending modified order. So the most recent version is first and  the original version is last in the list.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
Alfresco\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Alfresco\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Alfresco\Api\VersionsApi();
$node_id = "node_id_example"; // string | The identifier of a node.
$include = array("include_example"); // string[] | Returns additional information about the version node. The following optional fields can be requested: * properties * aspectNames
$fields = array("fields_example"); // string[] | A list of field names.  You can use this parameter to restrict the fields returned within a response if, for example, you want to save on overall bandwidth.  The list applies to a returned individual entity or entries within a collection.  If the API method also supports the **include** parameter, then the fields specified in the **include** parameter are returned in addition to those specified in the **fields** parameter.
$skip_count = 0; // int | The number of entities that exist in the collection before those included in this list.  If not supplied then the default value is 0.
$max_items = 100; // int | The maximum number of items to return in the list.  If not supplied then the default value is 100.

try {
    $result = $api_instance->listVersionHistory($node_id, $include, $fields, $skip_count, $max_items);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VersionsApi->listVersionHistory: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **node_id** | **string**| The identifier of a node. |
 **include** | [**string[]**](../Model/string.md)| Returns additional information about the version node. The following optional fields can be requested: * properties * aspectNames | [optional]
 **fields** | [**string[]**](../Model/string.md)| A list of field names.  You can use this parameter to restrict the fields returned within a response if, for example, you want to save on overall bandwidth.  The list applies to a returned individual entity or entries within a collection.  If the API method also supports the **include** parameter, then the fields specified in the **include** parameter are returned in addition to those specified in the **fields** parameter. | [optional]
 **skip_count** | **int**| The number of entities that exist in the collection before those included in this list.  If not supplied then the default value is 0. | [optional] [default to 0]
 **max_items** | **int**| The maximum number of items to return in the list.  If not supplied then the default value is 100. | [optional] [default to 100]

### Return type

[**\Alfresco\Model\VersionPaging**](../Model/VersionPaging.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **revertVersion**
> \Alfresco\Model\VersionEntry revertVersion($node_id, $version_id, $revert_body, $fields)

Revert a version

**Note:** this endpoint is available in Alfresco 5.2 and newer versions.  Attempts to revert the version identified by **versionId** and **nodeId** to the live node.  If the node is successfully reverted then the content and metadata for that versioned node will be promoted to the live node and a new version will appear in the version history.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
Alfresco\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Alfresco\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Alfresco\Api\VersionsApi();
$node_id = "node_id_example"; // string | The identifier of a node.
$version_id = "version_id_example"; // string | The identifier of a version, ie. version label, within the version history of a node.
$revert_body = new \Alfresco\Model\RevertBody(); // \Alfresco\Model\RevertBody | Optionally, specify a version comment and whether this should be a major version, or not.
$fields = array("fields_example"); // string[] | A list of field names.  You can use this parameter to restrict the fields returned within a response if, for example, you want to save on overall bandwidth.  The list applies to a returned individual entity or entries within a collection.  If the API method also supports the **include** parameter, then the fields specified in the **include** parameter are returned in addition to those specified in the **fields** parameter.

try {
    $result = $api_instance->revertVersion($node_id, $version_id, $revert_body, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VersionsApi->revertVersion: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **node_id** | **string**| The identifier of a node. |
 **version_id** | **string**| The identifier of a version, ie. version label, within the version history of a node. |
 **revert_body** | [**\Alfresco\Model\RevertBody**](../Model/RevertBody.md)| Optionally, specify a version comment and whether this should be a major version, or not. |
 **fields** | [**string[]**](../Model/string.md)| A list of field names.  You can use this parameter to restrict the fields returned within a response if, for example, you want to save on overall bandwidth.  The list applies to a returned individual entity or entries within a collection.  If the API method also supports the **include** parameter, then the fields specified in the **include** parameter are returned in addition to those specified in the **fields** parameter. | [optional]

### Return type

[**\Alfresco\Model\VersionEntry**](../Model/VersionEntry.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

