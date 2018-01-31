# Alfresco\FavoritesApi

All URIs are relative to *https://localhost/alfresco/api/-default-/public/alfresco/versions/1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createFavorite**](FavoritesApi.md#createFavorite) | **POST** /people/{personId}/favorites | Create a favorite
[**createSiteFavorite**](FavoritesApi.md#createSiteFavorite) | **POST** /people/{personId}/favorite-sites | Create a site favorite
[**deleteFavorite**](FavoritesApi.md#deleteFavorite) | **DELETE** /people/{personId}/favorites/{favoriteId} | Delete a favorite
[**deleteSiteFavorite**](FavoritesApi.md#deleteSiteFavorite) | **DELETE** /people/{personId}/favorite-sites/{siteId} | Delete a site favorite
[**getFavorite**](FavoritesApi.md#getFavorite) | **GET** /people/{personId}/favorites/{favoriteId} | Get a favorite
[**getFavoriteSite**](FavoritesApi.md#getFavoriteSite) | **GET** /people/{personId}/favorite-sites/{siteId} | Get a favorite site
[**listFavoriteSitesForPerson**](FavoritesApi.md#listFavoriteSitesForPerson) | **GET** /people/{personId}/favorite-sites | List favorite sites
[**listFavorites**](FavoritesApi.md#listFavorites) | **GET** /people/{personId}/favorites | List favorites


# **createFavorite**
> \Alfresco\Model\FavoriteEntry createFavorite($person_id, $favorite_body_create, $include, $fields)

Create a favorite

Favorite a **site**, **file**, or **folder** in the repository.  You can use the `-me-` string in place of `<personId>` to specify the currently authenticated user.  **Note:** You can favorite more than one entity by  specifying a list of objects in the JSON body like this:  ```JSON [   {        \"target\": {           \"file\": {              \"guid\": \"abcde-01234-....\"           }        }    },    {        \"target\": {           \"file\": {              \"guid\": \"abcde-09863-....\"           }        }    }, ] ``` If you specify a list as input, then a paginated list rather than an entry is returned in the response body. For example:  ```JSON {   \"list\": {     \"pagination\": {       \"count\": 2,       \"hasMoreItems\": false,       \"totalItems\": 2,       \"skipCount\": 0,       \"maxItems\": 100     },     \"entries\": [       {         \"entry\": {           ...         }       },       {         \"entry\": {           ...         }       }     ]   } } ```

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
Alfresco\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Alfresco\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Alfresco\Api\FavoritesApi();
$person_id = "person_id_example"; // string | The identifier of a person.
$favorite_body_create = new \Alfresco\Model\FavoriteBodyCreate(); // \Alfresco\Model\FavoriteBodyCreate | An object identifying the entity to be favorited.   The object consists of a single property which is an object with the name `site`, `file`, or `folder`.  The content of that object is the `guid` of the target entity.  For example, to favorite a file the following body would be used:  ```JSON {    \"target\": {       \"file\": {          \"guid\": \"abcde-01234-....\"       }    } } ```
$include = array("include_example"); // string[] | Returns additional information about favorites, the following optional fields can be requested: * path (note, this only applies to files and folders)
$fields = array("fields_example"); // string[] | A list of field names.  You can use this parameter to restrict the fields returned within a response if, for example, you want to save on overall bandwidth.  The list applies to a returned individual entity or entries within a collection.  If the API method also supports the **include** parameter, then the fields specified in the **include** parameter are returned in addition to those specified in the **fields** parameter.

try {
    $result = $api_instance->createFavorite($person_id, $favorite_body_create, $include, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FavoritesApi->createFavorite: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **person_id** | **string**| The identifier of a person. |
 **favorite_body_create** | [**\Alfresco\Model\FavoriteBodyCreate**](../Model/FavoriteBodyCreate.md)| An object identifying the entity to be favorited.   The object consists of a single property which is an object with the name &#x60;site&#x60;, &#x60;file&#x60;, or &#x60;folder&#x60;.  The content of that object is the &#x60;guid&#x60; of the target entity.  For example, to favorite a file the following body would be used:  &#x60;&#x60;&#x60;JSON {    \&quot;target\&quot;: {       \&quot;file\&quot;: {          \&quot;guid\&quot;: \&quot;abcde-01234-....\&quot;       }    } } &#x60;&#x60;&#x60; |
 **include** | [**string[]**](../Model/string.md)| Returns additional information about favorites, the following optional fields can be requested: * path (note, this only applies to files and folders) | [optional]
 **fields** | [**string[]**](../Model/string.md)| A list of field names.  You can use this parameter to restrict the fields returned within a response if, for example, you want to save on overall bandwidth.  The list applies to a returned individual entity or entries within a collection.  If the API method also supports the **include** parameter, then the fields specified in the **include** parameter are returned in addition to those specified in the **fields** parameter. | [optional]

### Return type

[**\Alfresco\Model\FavoriteEntry**](../Model/FavoriteEntry.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createSiteFavorite**
> \Alfresco\Model\FavoriteSiteEntry createSiteFavorite($person_id, $favorite_site_body_create, $fields)

Create a site favorite

**Note:** this endpoint is deprecated as of Alfresco 4.2, and will be removed in the future. Use `/people/{personId}/favorites` instead.  Create a site favorite for person **personId**.  You can use the `-me-` string in place of `<personId>` to specify the currently authenticated user.   **Note:** You can favorite more than one site by  specifying a list of sites in the JSON body like this:  ```JSON [   {     \"id\": \"test-site-1\"   },   {     \"id\": \"test-site-2\"   } ] ``` If you specify a list as input, then a paginated list rather than an entry is returned in the response body. For example:  ```JSON {   \"list\": {     \"pagination\": {       \"count\": 2,       \"hasMoreItems\": false,       \"totalItems\": 2,       \"skipCount\": 0,       \"maxItems\": 100     },     \"entries\": [       {         \"entry\": {           ...         }       },       {         \"entry\": {           ...         }       }     ]   } } ```

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
Alfresco\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Alfresco\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Alfresco\Api\FavoritesApi();
$person_id = "person_id_example"; // string | The identifier of a person.
$favorite_site_body_create = new \Alfresco\Model\FavoriteSiteBodyCreate(); // \Alfresco\Model\FavoriteSiteBodyCreate | The id of the site to favorite.
$fields = array("fields_example"); // string[] | A list of field names.  You can use this parameter to restrict the fields returned within a response if, for example, you want to save on overall bandwidth.  The list applies to a returned individual entity or entries within a collection.  If the API method also supports the **include** parameter, then the fields specified in the **include** parameter are returned in addition to those specified in the **fields** parameter.

try {
    $result = $api_instance->createSiteFavorite($person_id, $favorite_site_body_create, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FavoritesApi->createSiteFavorite: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **person_id** | **string**| The identifier of a person. |
 **favorite_site_body_create** | [**\Alfresco\Model\FavoriteSiteBodyCreate**](../Model/FavoriteSiteBodyCreate.md)| The id of the site to favorite. |
 **fields** | [**string[]**](../Model/string.md)| A list of field names.  You can use this parameter to restrict the fields returned within a response if, for example, you want to save on overall bandwidth.  The list applies to a returned individual entity or entries within a collection.  If the API method also supports the **include** parameter, then the fields specified in the **include** parameter are returned in addition to those specified in the **fields** parameter. | [optional]

### Return type

[**\Alfresco\Model\FavoriteSiteEntry**](../Model/FavoriteSiteEntry.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteFavorite**
> deleteFavorite($person_id, $favorite_id)

Delete a favorite

Deletes **favoriteId** as a favorite of person **personId**.  You can use the `-me-` string in place of `<personId>` to specify the currently authenticated user.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
Alfresco\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Alfresco\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Alfresco\Api\FavoritesApi();
$person_id = "person_id_example"; // string | The identifier of a person.
$favorite_id = "favorite_id_example"; // string | The identifier of a favorite.

try {
    $api_instance->deleteFavorite($person_id, $favorite_id);
} catch (Exception $e) {
    echo 'Exception when calling FavoritesApi->deleteFavorite: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **person_id** | **string**| The identifier of a person. |
 **favorite_id** | **string**| The identifier of a favorite. |

### Return type

void (empty response body)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteSiteFavorite**
> deleteSiteFavorite($person_id, $site_id)

Delete a site favorite

**Note:** this endpoint is deprecated as of Alfresco 4.2, and will be removed in the future. Use `/people/{personId}/favorites/{favoriteId}` instead.  Deletes site **siteId** from the favorite site list of person **personId**.  You can use the `-me-` string in place of `<personId>` to specify the currently authenticated user.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
Alfresco\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Alfresco\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Alfresco\Api\FavoritesApi();
$person_id = "person_id_example"; // string | The identifier of a person.
$site_id = "site_id_example"; // string | The identifier of a site.

try {
    $api_instance->deleteSiteFavorite($person_id, $site_id);
} catch (Exception $e) {
    echo 'Exception when calling FavoritesApi->deleteSiteFavorite: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **person_id** | **string**| The identifier of a person. |
 **site_id** | **string**| The identifier of a site. |

### Return type

void (empty response body)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getFavorite**
> \Alfresco\Model\FavoriteEntry getFavorite($person_id, $favorite_id, $include, $fields)

Get a favorite

Gets favorite **favoriteId** for person **personId**.  You can use the `-me-` string in place of `<personId>` to specify the currently authenticated user.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
Alfresco\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Alfresco\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Alfresco\Api\FavoritesApi();
$person_id = "person_id_example"; // string | The identifier of a person.
$favorite_id = "favorite_id_example"; // string | The identifier of a favorite.
$include = array("include_example"); // string[] | Returns additional information about favorites, the following optional fields can be requested: * path (note, this only applies to files and folders)
$fields = array("fields_example"); // string[] | A list of field names.  You can use this parameter to restrict the fields returned within a response if, for example, you want to save on overall bandwidth.  The list applies to a returned individual entity or entries within a collection.  If the API method also supports the **include** parameter, then the fields specified in the **include** parameter are returned in addition to those specified in the **fields** parameter.

try {
    $result = $api_instance->getFavorite($person_id, $favorite_id, $include, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FavoritesApi->getFavorite: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **person_id** | **string**| The identifier of a person. |
 **favorite_id** | **string**| The identifier of a favorite. |
 **include** | [**string[]**](../Model/string.md)| Returns additional information about favorites, the following optional fields can be requested: * path (note, this only applies to files and folders) | [optional]
 **fields** | [**string[]**](../Model/string.md)| A list of field names.  You can use this parameter to restrict the fields returned within a response if, for example, you want to save on overall bandwidth.  The list applies to a returned individual entity or entries within a collection.  If the API method also supports the **include** parameter, then the fields specified in the **include** parameter are returned in addition to those specified in the **fields** parameter. | [optional]

### Return type

[**\Alfresco\Model\FavoriteEntry**](../Model/FavoriteEntry.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getFavoriteSite**
> \Alfresco\Model\SiteEntry getFavoriteSite($person_id, $site_id, $fields)

Get a favorite site

**Note:** this endpoint is deprecated as of Alfresco 4.2, and will be removed in the future. Use `/people/{personId}/favorites/{favoriteId}` instead.  Gets information on favorite site **siteId** of person **personId**.  You can use the `-me-` string in place of `<personId>` to specify the currently authenticated user.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
Alfresco\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Alfresco\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Alfresco\Api\FavoritesApi();
$person_id = "person_id_example"; // string | The identifier of a person.
$site_id = "site_id_example"; // string | The identifier of a site.
$fields = array("fields_example"); // string[] | A list of field names.  You can use this parameter to restrict the fields returned within a response if, for example, you want to save on overall bandwidth.  The list applies to a returned individual entity or entries within a collection.  If the API method also supports the **include** parameter, then the fields specified in the **include** parameter are returned in addition to those specified in the **fields** parameter.

try {
    $result = $api_instance->getFavoriteSite($person_id, $site_id, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FavoritesApi->getFavoriteSite: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **person_id** | **string**| The identifier of a person. |
 **site_id** | **string**| The identifier of a site. |
 **fields** | [**string[]**](../Model/string.md)| A list of field names.  You can use this parameter to restrict the fields returned within a response if, for example, you want to save on overall bandwidth.  The list applies to a returned individual entity or entries within a collection.  If the API method also supports the **include** parameter, then the fields specified in the **include** parameter are returned in addition to those specified in the **fields** parameter. | [optional]

### Return type

[**\Alfresco\Model\SiteEntry**](../Model/SiteEntry.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listFavoriteSitesForPerson**
> \Alfresco\Model\SitePaging listFavoriteSitesForPerson($person_id, $skip_count, $max_items, $fields)

List favorite sites

**Note:** this endpoint is deprecated as of Alfresco 4.2, and will be removed in the future. Use `/people/{personId}/favorites` instead.  Gets a list of a person's favorite sites.  You can use the `-me-` string in place of `<personId>` to specify the currently authenticated user.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
Alfresco\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Alfresco\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Alfresco\Api\FavoritesApi();
$person_id = "person_id_example"; // string | The identifier of a person.
$skip_count = 0; // int | The number of entities that exist in the collection before those included in this list.  If not supplied then the default value is 0.
$max_items = 100; // int | The maximum number of items to return in the list.  If not supplied then the default value is 100.
$fields = array("fields_example"); // string[] | A list of field names.  You can use this parameter to restrict the fields returned within a response if, for example, you want to save on overall bandwidth.  The list applies to a returned individual entity or entries within a collection.  If the API method also supports the **include** parameter, then the fields specified in the **include** parameter are returned in addition to those specified in the **fields** parameter.

try {
    $result = $api_instance->listFavoriteSitesForPerson($person_id, $skip_count, $max_items, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FavoritesApi->listFavoriteSitesForPerson: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **person_id** | **string**| The identifier of a person. |
 **skip_count** | **int**| The number of entities that exist in the collection before those included in this list.  If not supplied then the default value is 0. | [optional] [default to 0]
 **max_items** | **int**| The maximum number of items to return in the list.  If not supplied then the default value is 100. | [optional] [default to 100]
 **fields** | [**string[]**](../Model/string.md)| A list of field names.  You can use this parameter to restrict the fields returned within a response if, for example, you want to save on overall bandwidth.  The list applies to a returned individual entity or entries within a collection.  If the API method also supports the **include** parameter, then the fields specified in the **include** parameter are returned in addition to those specified in the **fields** parameter. | [optional]

### Return type

[**\Alfresco\Model\SitePaging**](../Model/SitePaging.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listFavorites**
> \Alfresco\Model\FavoritePaging listFavorites($person_id, $skip_count, $max_items, $where, $include, $fields)

List favorites

Gets a list of favorites for person **personId**.  You can use the `-me-` string in place of `<personId>` to specify the currently authenticated user.  You can use the **where** parameter to restrict the list in the response to entries of a specific kind. The **where** parameter takes a value. The value is a single predicate that can include one or more **EXISTS** conditions. The **EXISTS** condition uses a single operand to limit the list to include entries that include that one property. The property values are:  *   `target/file` *   `target/folder` *   `target/site`  For example, the following **where** parameter restricts the returned list to the file favorites for a person:  ```SQL (EXISTS(target/file)) ``` You can specify more than one condition using **OR**. The predicate must be enclosed in parentheses.   For example, the following **where** parameter restricts the returned list to the file and folder favorites for a person:  ```SQL (EXISTS(target/file) OR EXISTS(target/folder)) ```

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
Alfresco\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Alfresco\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Alfresco\Api\FavoritesApi();
$person_id = "person_id_example"; // string | The identifier of a person.
$skip_count = 0; // int | The number of entities that exist in the collection before those included in this list.  If not supplied then the default value is 0.
$max_items = 100; // int | The maximum number of items to return in the list.  If not supplied then the default value is 100.
$where = "where_example"; // string | A string to restrict the returned objects by using a predicate.
$include = array("include_example"); // string[] | Returns additional information about favorites, the following optional fields can be requested: * path (note, this only applies to files and folders)
$fields = array("fields_example"); // string[] | A list of field names.  You can use this parameter to restrict the fields returned within a response if, for example, you want to save on overall bandwidth.  The list applies to a returned individual entity or entries within a collection.  If the API method also supports the **include** parameter, then the fields specified in the **include** parameter are returned in addition to those specified in the **fields** parameter.

try {
    $result = $api_instance->listFavorites($person_id, $skip_count, $max_items, $where, $include, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FavoritesApi->listFavorites: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **person_id** | **string**| The identifier of a person. |
 **skip_count** | **int**| The number of entities that exist in the collection before those included in this list.  If not supplied then the default value is 0. | [optional] [default to 0]
 **max_items** | **int**| The maximum number of items to return in the list.  If not supplied then the default value is 100. | [optional] [default to 100]
 **where** | **string**| A string to restrict the returned objects by using a predicate. | [optional]
 **include** | [**string[]**](../Model/string.md)| Returns additional information about favorites, the following optional fields can be requested: * path (note, this only applies to files and folders) | [optional]
 **fields** | [**string[]**](../Model/string.md)| A list of field names.  You can use this parameter to restrict the fields returned within a response if, for example, you want to save on overall bandwidth.  The list applies to a returned individual entity or entries within a collection.  If the API method also supports the **include** parameter, then the fields specified in the **include** parameter are returned in addition to those specified in the **fields** parameter. | [optional]

### Return type

[**\Alfresco\Model\FavoritePaging**](../Model/FavoritePaging.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

