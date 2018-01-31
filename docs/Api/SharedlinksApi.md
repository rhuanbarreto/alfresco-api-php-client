# Alfresco\SharedlinksApi

All URIs are relative to *https://localhost/alfresco/api/-default-/public/alfresco/versions/1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createSharedLink**](SharedlinksApi.md#createSharedLink) | **POST** /shared-links | Create a shared link to a file
[**deleteSharedLink**](SharedlinksApi.md#deleteSharedLink) | **DELETE** /shared-links/{sharedId} | Deletes a shared link
[**emailSharedLink**](SharedlinksApi.md#emailSharedLink) | **POST** /shared-links/{sharedId}/email | Email shared link
[**getSharedLink**](SharedlinksApi.md#getSharedLink) | **GET** /shared-links/{sharedId} | Get a shared link
[**getSharedLinkContent**](SharedlinksApi.md#getSharedLinkContent) | **GET** /shared-links/{sharedId}/content | Get shared link content
[**getSharedLinkRendition**](SharedlinksApi.md#getSharedLinkRendition) | **GET** /shared-links/{sharedId}/renditions/{renditionId} | Get shared link rendition information
[**getSharedLinkRenditionContent**](SharedlinksApi.md#getSharedLinkRenditionContent) | **GET** /shared-links/{sharedId}/renditions/{renditionId}/content | Get shared link rendition content
[**listSharedLinkRenditions**](SharedlinksApi.md#listSharedLinkRenditions) | **GET** /shared-links/{sharedId}/renditions | List renditions for a shared link
[**listSharedLinks**](SharedlinksApi.md#listSharedLinks) | **GET** /shared-links | List shared links


# **createSharedLink**
> \Alfresco\Model\SharedLinkEntry createSharedLink($shared_link_body_create, $include, $fields)

Create a shared link to a file

**Note:** this endpoint is available in Alfresco 5.2 and newer versions.  Create a shared link to the file **nodeId** in the request body. Also, an optional expiry date could be set, so the shared link would become invalid when the expiry date is reached. For example:  ```JSON   {     \"nodeId\": \"1ff9da1a-ee2f-4b9c-8c34-3333333333\",     \"expiresAt\": \"2017-03-23T23:00:00.000+0000\"   } ```  **Note:** You can create shared links to more than one file  specifying a list of **nodeId**s in the JSON body like this:  ```JSON [   {     \"nodeId\": \"1ff9da1a-ee2f-4b9c-8c34-4444444444\"   },   {                 \"nodeId\": \"1ff9da1a-ee2f-4b9c-8c34-5555555555\"   } ] ``` If you specify a list as input, then a paginated list rather than an entry is returned in the response body. For example:  ```JSON {   \"list\": {     \"pagination\": {       \"count\": 2,       \"hasMoreItems\": false,       \"totalItems\": 2,       \"skipCount\": 0,       \"maxItems\": 100     },     \"entries\": [       {         \"entry\": {           ...         }       },       {         \"entry\": {           ...         }       }     ]   } } ```

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
Alfresco\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Alfresco\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Alfresco\Api\SharedlinksApi();
$shared_link_body_create = new \Alfresco\Model\SharedLinkBodyCreate(); // \Alfresco\Model\SharedLinkBodyCreate | The nodeId to create a shared link for.
$include = array("include_example"); // string[] | Returns additional information about the shared link, the following optional fields can be requested: * allowableOperations * path
$fields = array("fields_example"); // string[] | A list of field names.  You can use this parameter to restrict the fields returned within a response if, for example, you want to save on overall bandwidth.  The list applies to a returned individual entity or entries within a collection.  If the API method also supports the **include** parameter, then the fields specified in the **include** parameter are returned in addition to those specified in the **fields** parameter.

try {
    $result = $api_instance->createSharedLink($shared_link_body_create, $include, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SharedlinksApi->createSharedLink: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **shared_link_body_create** | [**\Alfresco\Model\SharedLinkBodyCreate**](../Model/SharedLinkBodyCreate.md)| The nodeId to create a shared link for. |
 **include** | [**string[]**](../Model/string.md)| Returns additional information about the shared link, the following optional fields can be requested: * allowableOperations * path | [optional]
 **fields** | [**string[]**](../Model/string.md)| A list of field names.  You can use this parameter to restrict the fields returned within a response if, for example, you want to save on overall bandwidth.  The list applies to a returned individual entity or entries within a collection.  If the API method also supports the **include** parameter, then the fields specified in the **include** parameter are returned in addition to those specified in the **fields** parameter. | [optional]

### Return type

[**\Alfresco\Model\SharedLinkEntry**](../Model/SharedLinkEntry.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteSharedLink**
> deleteSharedLink($shared_id)

Deletes a shared link

**Note:** this endpoint is available in Alfresco 5.2 and newer versions.  Deletes the shared link with identifier **sharedId**.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
Alfresco\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Alfresco\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Alfresco\Api\SharedlinksApi();
$shared_id = "shared_id_example"; // string | The identifier of a shared link to a file.

try {
    $api_instance->deleteSharedLink($shared_id);
} catch (Exception $e) {
    echo 'Exception when calling SharedlinksApi->deleteSharedLink: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **shared_id** | **string**| The identifier of a shared link to a file. |

### Return type

void (empty response body)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **emailSharedLink**
> emailSharedLink($shared_id, $shared_link_body_email)

Email shared link

**Note:** this endpoint is available in Alfresco 5.2 and newer versions.  Sends email with app-specific url including identifier **sharedId**.  The client and recipientEmails properties are mandatory in the request body. For example, to email a shared link with minimum info: ```JSON {     \"client\": \"myClient\",     \"recipientEmails\": [\"john.doe@acme.com\", \"joe.bloggs@acme.com\"] } ``` A plain text message property can be optionally provided in the request body to customise the sent email. Also, a locale property can be optionally provided in the request body to send the emails in a particular language (if the locale is supported by Alfresco). For example, to email a shared link with a messages and a locale: ```JSON {     \"client\": \"myClient\",     \"recipientEmails\": [\"john.doe@acme.com\", \"joe.bloggs@acme.com\"],     \"message\": \"myMessage\",     \"locale\":\"en-GB\" } ``` **Note:** The client must be registered before you can send a shared link email. See [server documentation]. However, out-of-the-box  share is registered as a default client, so you could pass **share** as the client name: ```JSON {     \"client\": \"share\",     \"recipientEmails\": [\"john.doe@acme.com\"] } ```

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
Alfresco\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Alfresco\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Alfresco\Api\SharedlinksApi();
$shared_id = "shared_id_example"; // string | The identifier of a shared link to a file.
$shared_link_body_email = new \Alfresco\Model\SharedLinkBodyEmail(); // \Alfresco\Model\SharedLinkBodyEmail | The shared link email to send.

try {
    $api_instance->emailSharedLink($shared_id, $shared_link_body_email);
} catch (Exception $e) {
    echo 'Exception when calling SharedlinksApi->emailSharedLink: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **shared_id** | **string**| The identifier of a shared link to a file. |
 **shared_link_body_email** | [**\Alfresco\Model\SharedLinkBodyEmail**](../Model/SharedLinkBodyEmail.md)| The shared link email to send. |

### Return type

void (empty response body)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSharedLink**
> \Alfresco\Model\SharedLinkEntry getSharedLink($shared_id, $fields)

Get a shared link

**Note:** this endpoint is available in Alfresco 5.2 and newer versions.  Gets minimal information for the file with shared link identifier **sharedId**.  **Note:** No authentication is required to call this endpoint.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
Alfresco\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Alfresco\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Alfresco\Api\SharedlinksApi();
$shared_id = "shared_id_example"; // string | The identifier of a shared link to a file.
$fields = array("fields_example"); // string[] | A list of field names.  You can use this parameter to restrict the fields returned within a response if, for example, you want to save on overall bandwidth.  The list applies to a returned individual entity or entries within a collection.  If the API method also supports the **include** parameter, then the fields specified in the **include** parameter are returned in addition to those specified in the **fields** parameter.

try {
    $result = $api_instance->getSharedLink($shared_id, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SharedlinksApi->getSharedLink: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **shared_id** | **string**| The identifier of a shared link to a file. |
 **fields** | [**string[]**](../Model/string.md)| A list of field names.  You can use this parameter to restrict the fields returned within a response if, for example, you want to save on overall bandwidth.  The list applies to a returned individual entity or entries within a collection.  If the API method also supports the **include** parameter, then the fields specified in the **include** parameter are returned in addition to those specified in the **fields** parameter. | [optional]

### Return type

[**\Alfresco\Model\SharedLinkEntry**](../Model/SharedLinkEntry.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSharedLinkContent**
> getSharedLinkContent($shared_id, $attachment, $if_modified_since)

Get shared link content

**Note:** this endpoint is available in Alfresco 5.2 and newer versions.  Gets the content of the file with shared link identifier **sharedId**.  **Note:** No authentication is required to call this endpoint.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
Alfresco\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Alfresco\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Alfresco\Api\SharedlinksApi();
$shared_id = "shared_id_example"; // string | The identifier of a shared link to a file.
$attachment = true; // bool | **true** enables a web browser to download the file as an attachment. **false** means a web browser may preview the file in a new tab or window, but not download the file.  You can only set this parameter to **false** if the content type of the file is in the supported list; for example, certain image files and PDF files.  If the content type is not supported for preview, then a value of **false**  is ignored, and the attachment will be returned in the response.
$if_modified_since = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Only returns the content if it has been modified since the date provided. Use the date format defined by HTTP. For example, `Wed, 09 Mar 2016 16:56:34 GMT`.

try {
    $api_instance->getSharedLinkContent($shared_id, $attachment, $if_modified_since);
} catch (Exception $e) {
    echo 'Exception when calling SharedlinksApi->getSharedLinkContent: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **shared_id** | **string**| The identifier of a shared link to a file. |
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

# **getSharedLinkRendition**
> \Alfresco\Model\RenditionEntry getSharedLinkRendition($shared_id, $rendition_id)

Get shared link rendition information

**Note:** this endpoint is available in Alfresco 5.2 and newer versions.  Gets rendition information for the file with shared link identifier **sharedId**.  This API method returns rendition information where the rendition status is CREATED,  which means the rendition is available to view/download.  **Note:** No authentication is required to call this endpoint.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
Alfresco\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Alfresco\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Alfresco\Api\SharedlinksApi();
$shared_id = "shared_id_example"; // string | The identifier of a shared link to a file.
$rendition_id = "rendition_id_example"; // string | The name of a thumbnail rendition, for example *doclib*, or *pdf*.

try {
    $result = $api_instance->getSharedLinkRendition($shared_id, $rendition_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SharedlinksApi->getSharedLinkRendition: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **shared_id** | **string**| The identifier of a shared link to a file. |
 **rendition_id** | **string**| The name of a thumbnail rendition, for example *doclib*, or *pdf*. |

### Return type

[**\Alfresco\Model\RenditionEntry**](../Model/RenditionEntry.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSharedLinkRenditionContent**
> getSharedLinkRenditionContent($shared_id, $rendition_id, $attachment, $if_modified_since)

Get shared link rendition content

**Note:** this endpoint is available in Alfresco 5.2 and newer versions.  Gets the rendition content for file with shared link identifier **sharedId**.  **Note:** No authentication is required to call this endpoint.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
Alfresco\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Alfresco\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Alfresco\Api\SharedlinksApi();
$shared_id = "shared_id_example"; // string | The identifier of a shared link to a file.
$rendition_id = "rendition_id_example"; // string | The name of a thumbnail rendition, for example *doclib*, or *pdf*.
$attachment = true; // bool | **true** enables a web browser to download the file as an attachment. **false** means a web browser may preview the file in a new tab or window, but not download the file.  You can only set this parameter to **false** if the content type of the file is in the supported list; for example, certain image files and PDF files.  If the content type is not supported for preview, then a value of **false**  is ignored, and the attachment will be returned in the response.
$if_modified_since = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Only returns the content if it has been modified since the date provided. Use the date format defined by HTTP. For example, `Wed, 09 Mar 2016 16:56:34 GMT`.

try {
    $api_instance->getSharedLinkRenditionContent($shared_id, $rendition_id, $attachment, $if_modified_since);
} catch (Exception $e) {
    echo 'Exception when calling SharedlinksApi->getSharedLinkRenditionContent: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **shared_id** | **string**| The identifier of a shared link to a file. |
 **rendition_id** | **string**| The name of a thumbnail rendition, for example *doclib*, or *pdf*. |
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

# **listSharedLinkRenditions**
> \Alfresco\Model\RenditionPaging listSharedLinkRenditions($shared_id)

List renditions for a shared link

**Note:** this endpoint is available in Alfresco 5.2 and newer versions.  Gets a list of the rendition information for the file with shared link identifier **sharedId**.  This API method returns rendition information, including the rendition id, for each rendition where the rendition status is CREATED, which means the rendition is available to view/download.  **Note:** No authentication is required to call this endpoint.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
Alfresco\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Alfresco\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Alfresco\Api\SharedlinksApi();
$shared_id = "shared_id_example"; // string | The identifier of a shared link to a file.

try {
    $result = $api_instance->listSharedLinkRenditions($shared_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SharedlinksApi->listSharedLinkRenditions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **shared_id** | **string**| The identifier of a shared link to a file. |

### Return type

[**\Alfresco\Model\RenditionPaging**](../Model/RenditionPaging.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listSharedLinks**
> \Alfresco\Model\SharedLinkPaging listSharedLinks($skip_count, $max_items, $where, $include, $fields)

List shared links

**Note:** this endpoint is available in Alfresco 5.2 and newer versions.  Get a list of links that the current user has read permission on source node.  The list is ordered in descending modified order.  **Note:** The list of links is eventually consistent so newly created shared links may not appear immediately.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
Alfresco\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Alfresco\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Alfresco\Api\SharedlinksApi();
$skip_count = 0; // int | The number of entities that exist in the collection before those included in this list.  If not supplied then the default value is 0.
$max_items = 100; // int | The maximum number of items to return in the list.  If not supplied then the default value is 100.
$where = "where_example"; // string | Optionally filter the list by \"sharedByUser\" userid of person who shared the link (can also use -me-)  *   ```where=(sharedByUser='jbloggs')```  *   ```where=(sharedByUser='-me-')```
$include = array("include_example"); // string[] | Returns additional information about the shared link, the following optional fields can be requested: * allowableOperations * path
$fields = array("fields_example"); // string[] | A list of field names.  You can use this parameter to restrict the fields returned within a response if, for example, you want to save on overall bandwidth.  The list applies to a returned individual entity or entries within a collection.  If the API method also supports the **include** parameter, then the fields specified in the **include** parameter are returned in addition to those specified in the **fields** parameter.

try {
    $result = $api_instance->listSharedLinks($skip_count, $max_items, $where, $include, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SharedlinksApi->listSharedLinks: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **skip_count** | **int**| The number of entities that exist in the collection before those included in this list.  If not supplied then the default value is 0. | [optional] [default to 0]
 **max_items** | **int**| The maximum number of items to return in the list.  If not supplied then the default value is 100. | [optional] [default to 100]
 **where** | **string**| Optionally filter the list by \&quot;sharedByUser\&quot; userid of person who shared the link (can also use -me-)  *   &#x60;&#x60;&#x60;where&#x3D;(sharedByUser&#x3D;&#39;jbloggs&#39;)&#x60;&#x60;&#x60;  *   &#x60;&#x60;&#x60;where&#x3D;(sharedByUser&#x3D;&#39;-me-&#39;)&#x60;&#x60;&#x60; | [optional]
 **include** | [**string[]**](../Model/string.md)| Returns additional information about the shared link, the following optional fields can be requested: * allowableOperations * path | [optional]
 **fields** | [**string[]**](../Model/string.md)| A list of field names.  You can use this parameter to restrict the fields returned within a response if, for example, you want to save on overall bandwidth.  The list applies to a returned individual entity or entries within a collection.  If the API method also supports the **include** parameter, then the fields specified in the **include** parameter are returned in addition to those specified in the **fields** parameter. | [optional]

### Return type

[**\Alfresco\Model\SharedLinkPaging**](../Model/SharedLinkPaging.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

