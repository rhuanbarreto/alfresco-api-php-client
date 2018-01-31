# Alfresco\Core\DownloadsApi

All URIs are relative to *https://localhost/alfresco/api/-default-/public/alfresco/versions/1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**cancelDownload**](DownloadsApi.md#cancelDownload) | **DELETE** /downloads/{downloadId} | Cancel a download
[**createDownload**](DownloadsApi.md#createDownload) | **POST** /downloads | Create a new download
[**getDownload**](DownloadsApi.md#getDownload) | **GET** /downloads/{downloadId} | Get a download


# **cancelDownload**
> cancelDownload($download_id)

Cancel a download

**Note:** this endpoint is available in Alfresco 5.2.1 and newer versions.  Cancels the creation of a download request.  **Note:** The download node can be deleted using the **DELETE /nodes/{downloadId}** endpoint   By default, if the download node is not deleted it will be picked up by a cleaner job which removes download nodes older than a configurable amount of time (default is 1 hour)  Information about the existing progress at the time of cancelling can be retrieved by calling the **GET /downloads/{downloadId}** endpoint  The cancel operation is done asynchronously.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
Alfresco\Core\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Alfresco\Core\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Alfresco\Core\Api\DownloadsApi();
$download_id = "download_id_example"; // string | The identifier of a download node.

try {
    $api_instance->cancelDownload($download_id);
} catch (Exception $e) {
    echo 'Exception when calling DownloadsApi->cancelDownload: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **download_id** | **string**| The identifier of a download node. |

### Return type

void (empty response body)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createDownload**
> \Alfresco\Core\Model\DownloadEntry createDownload($download_body_create, $fields)

Create a new download

**Note:** this endpoint is available in Alfresco 5.2.1 and newer versions.  Creates a new download node asynchronously, the content of which will be the zipped content of the **nodeIds** specified in the JSON body like this:  ```JSON {     \"nodeIds\":      [        \"c8bb482a-ff3c-4704-a3a3-de1c83ccd84c\",        \"cffa62db-aa01-493d-9594-058bc058eeb1\"      ] } ```  **Note:** The content of the download node can be obtained using the **GET /nodes/{downloadId}/content** endpoint

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
Alfresco\Core\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Alfresco\Core\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Alfresco\Core\Api\DownloadsApi();
$download_body_create = new \Alfresco\Core\Model\DownloadBodyCreate(); // \Alfresco\Core\Model\DownloadBodyCreate | The nodeIds the content of which will be zipped, which zip will be set as the content of our download node.
$fields = array("fields_example"); // string[] | A list of field names.  You can use this parameter to restrict the fields returned within a response if, for example, you want to save on overall bandwidth.  The list applies to a returned individual entity or entries within a collection.  If the API method also supports the **include** parameter, then the fields specified in the **include** parameter are returned in addition to those specified in the **fields** parameter.

try {
    $result = $api_instance->createDownload($download_body_create, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DownloadsApi->createDownload: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **download_body_create** | [**\Alfresco\Core\Model\DownloadBodyCreate**](../Model/DownloadBodyCreate.md)| The nodeIds the content of which will be zipped, which zip will be set as the content of our download node. |
 **fields** | [**string[]**](../Model/string.md)| A list of field names.  You can use this parameter to restrict the fields returned within a response if, for example, you want to save on overall bandwidth.  The list applies to a returned individual entity or entries within a collection.  If the API method also supports the **include** parameter, then the fields specified in the **include** parameter are returned in addition to those specified in the **fields** parameter. | [optional]

### Return type

[**\Alfresco\Core\Model\DownloadEntry**](../Model/DownloadEntry.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getDownload**
> \Alfresco\Core\Model\DownloadEntry getDownload($download_id, $fields)

Get a download

**Note:** this endpoint is available in Alfresco 5.2.1 and newer versions.  Retrieve status information for download node **downloadId**

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
Alfresco\Core\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Alfresco\Core\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Alfresco\Core\Api\DownloadsApi();
$download_id = "download_id_example"; // string | The identifier of a download node.
$fields = array("fields_example"); // string[] | A list of field names.  You can use this parameter to restrict the fields returned within a response if, for example, you want to save on overall bandwidth.  The list applies to a returned individual entity or entries within a collection.  If the API method also supports the **include** parameter, then the fields specified in the **include** parameter are returned in addition to those specified in the **fields** parameter.

try {
    $result = $api_instance->getDownload($download_id, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DownloadsApi->getDownload: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **download_id** | **string**| The identifier of a download node. |
 **fields** | [**string[]**](../Model/string.md)| A list of field names.  You can use this parameter to restrict the fields returned within a response if, for example, you want to save on overall bandwidth.  The list applies to a returned individual entity or entries within a collection.  If the API method also supports the **include** parameter, then the fields specified in the **include** parameter are returned in addition to those specified in the **fields** parameter. | [optional]

### Return type

[**\Alfresco\Core\Model\DownloadEntry**](../Model/DownloadEntry.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

