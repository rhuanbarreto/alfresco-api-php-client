# Alfresco\Core\ActivitiesApi

All URIs are relative to *https://localhost/alfresco/api/-default-/public/alfresco/versions/1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**listActivitiesForPerson**](ActivitiesApi.md#listActivitiesForPerson) | **GET** /people/{personId}/activities | List activities


# **listActivitiesForPerson**
> \Alfresco\Core\Model\ActivityPaging listActivitiesForPerson($person_id, $skip_count, $max_items, $who, $site_id, $fields)

List activities

Gets a list of activities for person **personId**.  You can use the `-me-` string in place of `<personId>` to specify the currently authenticated user.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
Alfresco\Core\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Alfresco\Core\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Alfresco\Core\Api\ActivitiesApi();
$person_id = "person_id_example"; // string | The identifier of a person.
$skip_count = 0; // int | The number of entities that exist in the collection before those included in this list.  If not supplied then the default value is 0.
$max_items = 100; // int | The maximum number of items to return in the list.  If not supplied then the default value is 100.
$who = "who_example"; // string | A filter to include the user's activities only `me`, other user's activities only `others`'
$site_id = "site_id_example"; // string | Include only activity feed entries relating to this site.
$fields = array("fields_example"); // string[] | A list of field names.  You can use this parameter to restrict the fields returned within a response if, for example, you want to save on overall bandwidth.  The list applies to a returned individual entity or entries within a collection.  If the API method also supports the **include** parameter, then the fields specified in the **include** parameter are returned in addition to those specified in the **fields** parameter.

try {
    $result = $api_instance->listActivitiesForPerson($person_id, $skip_count, $max_items, $who, $site_id, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ActivitiesApi->listActivitiesForPerson: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **person_id** | **string**| The identifier of a person. |
 **skip_count** | **int**| The number of entities that exist in the collection before those included in this list.  If not supplied then the default value is 0. | [optional] [default to 0]
 **max_items** | **int**| The maximum number of items to return in the list.  If not supplied then the default value is 100. | [optional] [default to 100]
 **who** | **string**| A filter to include the user&#39;s activities only &#x60;me&#x60;, other user&#39;s activities only &#x60;others&#x60;&#39; | [optional]
 **site_id** | **string**| Include only activity feed entries relating to this site. | [optional]
 **fields** | [**string[]**](../Model/string.md)| A list of field names.  You can use this parameter to restrict the fields returned within a response if, for example, you want to save on overall bandwidth.  The list applies to a returned individual entity or entries within a collection.  If the API method also supports the **include** parameter, then the fields specified in the **include** parameter are returned in addition to those specified in the **fields** parameter. | [optional]

### Return type

[**\Alfresco\Core\Model\ActivityPaging**](../Model/ActivityPaging.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)
