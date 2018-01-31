# Alfresco\RatingsApi

All URIs are relative to *https://localhost/alfresco/api/-default-/public/alfresco/versions/1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createRating**](RatingsApi.md#createRating) | **POST** /nodes/{nodeId}/ratings | Create a rating
[**deleteRating**](RatingsApi.md#deleteRating) | **DELETE** /nodes/{nodeId}/ratings/{ratingId} | Delete a rating
[**getRating**](RatingsApi.md#getRating) | **GET** /nodes/{nodeId}/ratings/{ratingId} | Get a rating
[**listRatings**](RatingsApi.md#listRatings) | **GET** /nodes/{nodeId}/ratings | List ratings


# **createRating**
> \Alfresco\Model\RatingEntry createRating($node_id, $rating_body_create, $fields)

Create a rating

Create a rating for the node with identifier **nodeId**

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
Alfresco\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Alfresco\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Alfresco\Api\RatingsApi();
$node_id = "node_id_example"; // string | The identifier of a node.
$rating_body_create = new \Alfresco\Model\RatingBody(); // \Alfresco\Model\RatingBody | For \"myRating\" the type is specific to the rating scheme, boolean for the likes and an integer for the fiveStar.  For example, to \"like\" a file the following body would be used:  ```JSON   {     \"id\": \"likes\",     \"myRating\": true   } ```
$fields = array("fields_example"); // string[] | A list of field names.  You can use this parameter to restrict the fields returned within a response if, for example, you want to save on overall bandwidth.  The list applies to a returned individual entity or entries within a collection.  If the API method also supports the **include** parameter, then the fields specified in the **include** parameter are returned in addition to those specified in the **fields** parameter.

try {
    $result = $api_instance->createRating($node_id, $rating_body_create, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RatingsApi->createRating: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **node_id** | **string**| The identifier of a node. |
 **rating_body_create** | [**\Alfresco\Model\RatingBody**](../Model/RatingBody.md)| For \&quot;myRating\&quot; the type is specific to the rating scheme, boolean for the likes and an integer for the fiveStar.  For example, to \&quot;like\&quot; a file the following body would be used:  &#x60;&#x60;&#x60;JSON   {     \&quot;id\&quot;: \&quot;likes\&quot;,     \&quot;myRating\&quot;: true   } &#x60;&#x60;&#x60; |
 **fields** | [**string[]**](../Model/string.md)| A list of field names.  You can use this parameter to restrict the fields returned within a response if, for example, you want to save on overall bandwidth.  The list applies to a returned individual entity or entries within a collection.  If the API method also supports the **include** parameter, then the fields specified in the **include** parameter are returned in addition to those specified in the **fields** parameter. | [optional]

### Return type

[**\Alfresco\Model\RatingEntry**](../Model/RatingEntry.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteRating**
> deleteRating($node_id, $rating_id)

Delete a rating

Deletes rating **ratingId** from node **nodeId**.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
Alfresco\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Alfresco\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Alfresco\Api\RatingsApi();
$node_id = "node_id_example"; // string | The identifier of a node.
$rating_id = "rating_id_example"; // string | The identifier of a rating.

try {
    $api_instance->deleteRating($node_id, $rating_id);
} catch (Exception $e) {
    echo 'Exception when calling RatingsApi->deleteRating: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **node_id** | **string**| The identifier of a node. |
 **rating_id** | **string**| The identifier of a rating. |

### Return type

void (empty response body)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getRating**
> \Alfresco\Model\RatingEntry getRating($node_id, $rating_id, $fields)

Get a rating

Get the specific rating **ratingId** on node **nodeId**.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
Alfresco\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Alfresco\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Alfresco\Api\RatingsApi();
$node_id = "node_id_example"; // string | The identifier of a node.
$rating_id = "rating_id_example"; // string | The identifier of a rating.
$fields = array("fields_example"); // string[] | A list of field names.  You can use this parameter to restrict the fields returned within a response if, for example, you want to save on overall bandwidth.  The list applies to a returned individual entity or entries within a collection.  If the API method also supports the **include** parameter, then the fields specified in the **include** parameter are returned in addition to those specified in the **fields** parameter.

try {
    $result = $api_instance->getRating($node_id, $rating_id, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RatingsApi->getRating: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **node_id** | **string**| The identifier of a node. |
 **rating_id** | **string**| The identifier of a rating. |
 **fields** | [**string[]**](../Model/string.md)| A list of field names.  You can use this parameter to restrict the fields returned within a response if, for example, you want to save on overall bandwidth.  The list applies to a returned individual entity or entries within a collection.  If the API method also supports the **include** parameter, then the fields specified in the **include** parameter are returned in addition to those specified in the **fields** parameter. | [optional]

### Return type

[**\Alfresco\Model\RatingEntry**](../Model/RatingEntry.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listRatings**
> \Alfresco\Model\RatingPaging listRatings($node_id, $skip_count, $max_items, $fields)

List ratings

Gets a list of ratings for node **nodeId**.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
Alfresco\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Alfresco\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Alfresco\Api\RatingsApi();
$node_id = "node_id_example"; // string | The identifier of a node.
$skip_count = 0; // int | The number of entities that exist in the collection before those included in this list.  If not supplied then the default value is 0.
$max_items = 100; // int | The maximum number of items to return in the list.  If not supplied then the default value is 100.
$fields = array("fields_example"); // string[] | A list of field names.  You can use this parameter to restrict the fields returned within a response if, for example, you want to save on overall bandwidth.  The list applies to a returned individual entity or entries within a collection.  If the API method also supports the **include** parameter, then the fields specified in the **include** parameter are returned in addition to those specified in the **fields** parameter.

try {
    $result = $api_instance->listRatings($node_id, $skip_count, $max_items, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RatingsApi->listRatings: ', $e->getMessage(), PHP_EOL;
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

[**\Alfresco\Model\RatingPaging**](../Model/RatingPaging.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

