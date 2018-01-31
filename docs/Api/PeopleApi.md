# Alfresco\Core\PeopleApi

All URIs are relative to *https://localhost/alfresco/api/-default-/public/alfresco/versions/1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createPerson**](PeopleApi.md#createPerson) | **POST** /people | Create person
[**deleteAvatarImage**](PeopleApi.md#deleteAvatarImage) | **DELETE** /people/{personId}/avatar | Delete avatar image
[**getAvatarImage**](PeopleApi.md#getAvatarImage) | **GET** /people/{personId}/avatar | Get avatar image
[**getPerson**](PeopleApi.md#getPerson) | **GET** /people/{personId} | Get a person
[**listPeople**](PeopleApi.md#listPeople) | **GET** /people | List people
[**requestPasswordReset**](PeopleApi.md#requestPasswordReset) | **POST** /people/{personId}/request-password-reset | Request password reset
[**resetPassword**](PeopleApi.md#resetPassword) | **POST** /people/{personId}/reset-password | Reset password
[**updateAvatarImage**](PeopleApi.md#updateAvatarImage) | **PUT** /people/{personId}/avatar | Update avatar image
[**updatePerson**](PeopleApi.md#updatePerson) | **PUT** /people/{personId} | Update person


# **createPerson**
> \Alfresco\Core\Model\PersonEntry createPerson($person_body_create, $fields)

Create person

**Note:** this endpoint is available in Alfresco 5.2 and newer versions.  Create a person.  If applicable, the given person's login access can also be optionally disabled.  You must have admin rights to create a person.  You can set custom properties when you create a person: ```JSON {   \"id\": \"abeecher\",   \"firstName\": \"Alice\",   \"lastName\": \"Beecher\",   \"email\": \"abeecher@example.com\",   \"password\": \"secret\",   \"properties\":   {     \"my:property\": \"The value\"   } } ``` **Note:** setting properties of type d:content and d:category are not supported.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
Alfresco\Core\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Alfresco\Core\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Alfresco\Core\Api\PeopleApi();
$person_body_create = new \Alfresco\Core\Model\PersonBodyCreate(); // \Alfresco\Core\Model\PersonBodyCreate | The person details.
$fields = array("fields_example"); // string[] | A list of field names.  You can use this parameter to restrict the fields returned within a response if, for example, you want to save on overall bandwidth.  The list applies to a returned individual entity or entries within a collection.  If the API method also supports the **include** parameter, then the fields specified in the **include** parameter are returned in addition to those specified in the **fields** parameter.

try {
    $result = $api_instance->createPerson($person_body_create, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PeopleApi->createPerson: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **person_body_create** | [**\Alfresco\Core\Model\PersonBodyCreate**](../Model/PersonBodyCreate.md)| The person details. |
 **fields** | [**string[]**](../Model/string.md)| A list of field names.  You can use this parameter to restrict the fields returned within a response if, for example, you want to save on overall bandwidth.  The list applies to a returned individual entity or entries within a collection.  If the API method also supports the **include** parameter, then the fields specified in the **include** parameter are returned in addition to those specified in the **fields** parameter. | [optional]

### Return type

[**\Alfresco\Core\Model\PersonEntry**](../Model/PersonEntry.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteAvatarImage**
> deleteAvatarImage($person_id)

Delete avatar image

**Note:** this endpoint is available in Alfresco 5.2.2 and newer versions.  Deletes the avatar image related to person **personId**.  You must be the person or have admin rights to update a person's avatar.  You can use the `-me-` string in place of `<personId>` to specify the currently authenticated user.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
Alfresco\Core\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Alfresco\Core\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Alfresco\Core\Api\PeopleApi();
$person_id = "person_id_example"; // string | The identifier of a person.

try {
    $api_instance->deleteAvatarImage($person_id);
} catch (Exception $e) {
    echo 'Exception when calling PeopleApi->deleteAvatarImage: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **person_id** | **string**| The identifier of a person. |

### Return type

void (empty response body)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAvatarImage**
> getAvatarImage($person_id, $attachment, $if_modified_since, $placeholder)

Get avatar image

**Note:** this endpoint is available in Alfresco 5.2.2 and newer versions.  Gets the avatar image related to the person **personId**. If the person has no related avatar then  the **placeholder** query parameter can be optionally used to request a placeholder image to be returned.  You can use the `-me-` string in place of `<personId>` to specify the currently authenticated user.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
Alfresco\Core\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Alfresco\Core\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Alfresco\Core\Api\PeopleApi();
$person_id = "person_id_example"; // string | The identifier of a person.
$attachment = true; // bool | **true** enables a web browser to download the file as an attachment. **false** means a web browser may preview the file in a new tab or window, but not download the file.  You can only set this parameter to **false** if the content type of the file is in the supported list; for example, certain image files and PDF files.  If the content type is not supported for preview, then a value of **false**  is ignored, and the attachment will be returned in the response.
$if_modified_since = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Only returns the content if it has been modified since the date provided. Use the date format defined by HTTP. For example, `Wed, 09 Mar 2016 16:56:34 GMT`.
$placeholder = true; // bool | If **true** and there is no avatar for this **personId**  then the placeholder image is returned, rather than a 404 response.

try {
    $api_instance->getAvatarImage($person_id, $attachment, $if_modified_since, $placeholder);
} catch (Exception $e) {
    echo 'Exception when calling PeopleApi->getAvatarImage: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **person_id** | **string**| The identifier of a person. |
 **attachment** | **bool**| **true** enables a web browser to download the file as an attachment. **false** means a web browser may preview the file in a new tab or window, but not download the file.  You can only set this parameter to **false** if the content type of the file is in the supported list; for example, certain image files and PDF files.  If the content type is not supported for preview, then a value of **false**  is ignored, and the attachment will be returned in the response. | [optional] [default to true]
 **if_modified_since** | **\DateTime**| Only returns the content if it has been modified since the date provided. Use the date format defined by HTTP. For example, &#x60;Wed, 09 Mar 2016 16:56:34 GMT&#x60;. | [optional]
 **placeholder** | **bool**| If **true** and there is no avatar for this **personId**  then the placeholder image is returned, rather than a 404 response. | [optional] [default to true]

### Return type

void (empty response body)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getPerson**
> \Alfresco\Core\Model\PersonEntry getPerson($person_id, $fields)

Get a person

Gets information for the person **personId**.  You can use the `-me-` string in place of `<personId>` to specify the currently authenticated user.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
Alfresco\Core\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Alfresco\Core\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Alfresco\Core\Api\PeopleApi();
$person_id = "person_id_example"; // string | The identifier of a person.
$fields = array("fields_example"); // string[] | A list of field names.  You can use this parameter to restrict the fields returned within a response if, for example, you want to save on overall bandwidth.  The list applies to a returned individual entity or entries within a collection.  If the API method also supports the **include** parameter, then the fields specified in the **include** parameter are returned in addition to those specified in the **fields** parameter.

try {
    $result = $api_instance->getPerson($person_id, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PeopleApi->getPerson: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **person_id** | **string**| The identifier of a person. |
 **fields** | [**string[]**](../Model/string.md)| A list of field names.  You can use this parameter to restrict the fields returned within a response if, for example, you want to save on overall bandwidth.  The list applies to a returned individual entity or entries within a collection.  If the API method also supports the **include** parameter, then the fields specified in the **include** parameter are returned in addition to those specified in the **fields** parameter. | [optional]

### Return type

[**\Alfresco\Core\Model\PersonEntry**](../Model/PersonEntry.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listPeople**
> \Alfresco\Core\Model\PersonPaging listPeople($skip_count, $max_items, $order_by, $include, $fields)

List people

**Note:** this endpoint is available in Alfresco 5.2 and newer versions.  List people.  You can use the **include** parameter to return any additional information.  The default sort order for the returned list is for people to be sorted by ascending id. You can override the default by using the **orderBy** parameter.  You can use any of the following fields to order the results: * id * firstName * lastName

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
Alfresco\Core\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Alfresco\Core\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Alfresco\Core\Api\PeopleApi();
$skip_count = 0; // int | The number of entities that exist in the collection before those included in this list.  If not supplied then the default value is 0.
$max_items = 100; // int | The maximum number of items to return in the list.  If not supplied then the default value is 100.
$order_by = array("order_by_example"); // string[] | A string to control the order of the entities returned in a list. You can use the **orderBy** parameter to sort the list by one or more fields.  Each field has a default sort order, which is normally ascending order. Read the API method implementation notes above to check if any fields used in this method have a descending default search order.  To sort the entities in a specific order, you can use the **ASC** and **DESC** keywords for any field.
$include = array("include_example"); // string[] | Returns additional information about the person. The following optional fields can be requested: * properties * aspectNames
$fields = array("fields_example"); // string[] | A list of field names.  You can use this parameter to restrict the fields returned within a response if, for example, you want to save on overall bandwidth.  The list applies to a returned individual entity or entries within a collection.  If the API method also supports the **include** parameter, then the fields specified in the **include** parameter are returned in addition to those specified in the **fields** parameter.

try {
    $result = $api_instance->listPeople($skip_count, $max_items, $order_by, $include, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PeopleApi->listPeople: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **skip_count** | **int**| The number of entities that exist in the collection before those included in this list.  If not supplied then the default value is 0. | [optional] [default to 0]
 **max_items** | **int**| The maximum number of items to return in the list.  If not supplied then the default value is 100. | [optional] [default to 100]
 **order_by** | [**string[]**](../Model/string.md)| A string to control the order of the entities returned in a list. You can use the **orderBy** parameter to sort the list by one or more fields.  Each field has a default sort order, which is normally ascending order. Read the API method implementation notes above to check if any fields used in this method have a descending default search order.  To sort the entities in a specific order, you can use the **ASC** and **DESC** keywords for any field. | [optional]
 **include** | [**string[]**](../Model/string.md)| Returns additional information about the person. The following optional fields can be requested: * properties * aspectNames | [optional]
 **fields** | [**string[]**](../Model/string.md)| A list of field names.  You can use this parameter to restrict the fields returned within a response if, for example, you want to save on overall bandwidth.  The list applies to a returned individual entity or entries within a collection.  If the API method also supports the **include** parameter, then the fields specified in the **include** parameter are returned in addition to those specified in the **fields** parameter. | [optional]

### Return type

[**\Alfresco\Core\Model\PersonPaging**](../Model/PersonPaging.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **requestPasswordReset**
> requestPasswordReset($person_id, $client_body)

Request password reset

**Note:** this endpoint is available in Alfresco 5.2.1 and newer versions.  Initiates the reset password workflow to send an email with reset password instruction to the user's registered email.  The client is mandatory in the request body. For example: ```JSON {   \"client\": \"myClient\" } ``` **Note:** The client must be registered before this API can send an email. See [server documentation]. However, out-of-the-box share is registered as a default client, so you could pass **share** as the client name: ```JSON {   \"client\": \"share\" } ``` **Note:** No authentication is required to call this endpoint.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
Alfresco\Core\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Alfresco\Core\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Alfresco\Core\Api\PeopleApi();
$person_id = "person_id_example"; // string | The identifier of a person.
$client_body = new \Alfresco\Core\Model\ClientBody(); // \Alfresco\Core\Model\ClientBody | The client name to send email with app-specific url.

try {
    $api_instance->requestPasswordReset($person_id, $client_body);
} catch (Exception $e) {
    echo 'Exception when calling PeopleApi->requestPasswordReset: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **person_id** | **string**| The identifier of a person. |
 **client_body** | [**\Alfresco\Core\Model\ClientBody**](../Model/ClientBody.md)| The client name to send email with app-specific url. |

### Return type

void (empty response body)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **resetPassword**
> resetPassword($person_id, $password_reset_body)

Reset password

**Note:** this endpoint is available in Alfresco 5.2.1 and newer versions.  Resets user's password  The password, id and key properties are mandatory in the request body. For example: ```JSON {   \"password\":\"newPassword\",   \"id\":\"activiti$10\",   \"key\":\"4dad6d00-0daf-413a-b200-f64af4e12345\" } ``` **Note:** No authentication is required to call this endpoint.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
Alfresco\Core\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Alfresco\Core\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Alfresco\Core\Api\PeopleApi();
$person_id = "person_id_example"; // string | The identifier of a person.
$password_reset_body = new \Alfresco\Core\Model\PasswordResetBody(); // \Alfresco\Core\Model\PasswordResetBody | The reset password details

try {
    $api_instance->resetPassword($person_id, $password_reset_body);
} catch (Exception $e) {
    echo 'Exception when calling PeopleApi->resetPassword: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **person_id** | **string**| The identifier of a person. |
 **password_reset_body** | [**\Alfresco\Core\Model\PasswordResetBody**](../Model/PasswordResetBody.md)| The reset password details |

### Return type

void (empty response body)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateAvatarImage**
> updateAvatarImage($person_id, $content_body_update)

Update avatar image

**Note:** this endpoint is available in Alfresco 5.2.2 and newer versions.  Updates the avatar image related to the person **personId**.  The request body should be the binary stream for the avatar image. The content type of the file  should be an image file. This will be used to generate an \"avatar\" thumbnail rendition.  You must be the person or have admin rights to update a person's avatar.  You can use the `-me-` string in place of `<personId>` to specify the currently authenticated user.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
Alfresco\Core\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Alfresco\Core\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Alfresco\Core\Api\PeopleApi();
$person_id = "person_id_example"; // string | The identifier of a person.
$content_body_update = "B"; // string | The binary content

try {
    $api_instance->updateAvatarImage($person_id, $content_body_update);
} catch (Exception $e) {
    echo 'Exception when calling PeopleApi->updateAvatarImage: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **person_id** | **string**| The identifier of a person. |
 **content_body_update** | **string**| The binary content |

### Return type

void (empty response body)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/octet-stream
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updatePerson**
> \Alfresco\Core\Model\PersonEntry updatePerson($person_id, $person_body_update, $fields)

Update person

**Note:** this endpoint is available in Alfresco 5.2 and newer versions.  Update the given person's details.  You can use the `-me-` string in place of `<personId>` to specify the currently authenticated user.  If applicable, the given person's login access can also be optionally disabled or re-enabled.  You must have admin rights to update a person — unless updating your own details.  If you are changing your password, as a non-admin user, then the existing password must also be supplied (using the oldPassword field in addition to the new password value).  Admin users cannot be disabled by setting enabled to false.  Non-admin users may not disable themselves.  You can set custom properties when you update a person: ```JSON {   \"firstName\": \"Alice\",   \"properties\":   {     \"my:property\": \"The value\"   } } ``` **Note:** setting properties of type d:content and d:category are not supported.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
Alfresco\Core\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Alfresco\Core\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Alfresco\Core\Api\PeopleApi();
$person_id = "person_id_example"; // string | The identifier of a person.
$person_body_update = new \Alfresco\Core\Model\PersonBodyUpdate(); // \Alfresco\Core\Model\PersonBodyUpdate | The person details.
$fields = array("fields_example"); // string[] | A list of field names.  You can use this parameter to restrict the fields returned within a response if, for example, you want to save on overall bandwidth.  The list applies to a returned individual entity or entries within a collection.  If the API method also supports the **include** parameter, then the fields specified in the **include** parameter are returned in addition to those specified in the **fields** parameter.

try {
    $result = $api_instance->updatePerson($person_id, $person_body_update, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PeopleApi->updatePerson: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **person_id** | **string**| The identifier of a person. |
 **person_body_update** | [**\Alfresco\Core\Model\PersonBodyUpdate**](../Model/PersonBodyUpdate.md)| The person details. |
 **fields** | [**string[]**](../Model/string.md)| A list of field names.  You can use this parameter to restrict the fields returned within a response if, for example, you want to save on overall bandwidth.  The list applies to a returned individual entity or entries within a collection.  If the API method also supports the **include** parameter, then the fields specified in the **include** parameter are returned in addition to those specified in the **fields** parameter. | [optional]

### Return type

[**\Alfresco\Core\Model\PersonEntry**](../Model/PersonEntry.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

