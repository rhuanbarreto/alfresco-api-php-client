# Alfresco\SitesApi

All URIs are relative to *https://localhost/alfresco/api/-default-/public/alfresco/versions/1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createSite**](SitesApi.md#createSite) | **POST** /sites | Create a site
[**createSiteMembership**](SitesApi.md#createSiteMembership) | **POST** /sites/{siteId}/members | Create a site membership
[**createSiteMembershipRequestForPerson**](SitesApi.md#createSiteMembershipRequestForPerson) | **POST** /people/{personId}/site-membership-requests | Create a site membership request
[**deleteSite**](SitesApi.md#deleteSite) | **DELETE** /sites/{siteId} | Delete a site
[**deleteSiteMembership**](SitesApi.md#deleteSiteMembership) | **DELETE** /sites/{siteId}/members/{personId} | Delete a site membership
[**deleteSiteMembershipForPerson**](SitesApi.md#deleteSiteMembershipForPerson) | **DELETE** /people/{personId}/sites/{siteId} | Delete a site membership
[**deleteSiteMembershipRequestForPerson**](SitesApi.md#deleteSiteMembershipRequestForPerson) | **DELETE** /people/{personId}/site-membership-requests/{siteId} | Delete a site membership request
[**getSite**](SitesApi.md#getSite) | **GET** /sites/{siteId} | Get a site
[**getSiteContainer**](SitesApi.md#getSiteContainer) | **GET** /sites/{siteId}/containers/{containerId} | Get a site container
[**getSiteMembership**](SitesApi.md#getSiteMembership) | **GET** /sites/{siteId}/members/{personId} | Get a site membership
[**getSiteMembershipForPerson**](SitesApi.md#getSiteMembershipForPerson) | **GET** /people/{personId}/sites/{siteId} | Get a site membership
[**getSiteMembershipRequestForPerson**](SitesApi.md#getSiteMembershipRequestForPerson) | **GET** /people/{personId}/site-membership-requests/{siteId} | Get a site membership request
[**listSiteContainers**](SitesApi.md#listSiteContainers) | **GET** /sites/{siteId}/containers | List site containers
[**listSiteMembershipRequestsForPerson**](SitesApi.md#listSiteMembershipRequestsForPerson) | **GET** /people/{personId}/site-membership-requests | List site membership requests
[**listSiteMemberships**](SitesApi.md#listSiteMemberships) | **GET** /sites/{siteId}/members | List site memberships
[**listSiteMembershipsForPerson**](SitesApi.md#listSiteMembershipsForPerson) | **GET** /people/{personId}/sites | List site memberships
[**listSites**](SitesApi.md#listSites) | **GET** /sites | List sites
[**updateSite**](SitesApi.md#updateSite) | **PUT** /sites/{siteId} | Update a site
[**updateSiteMembership**](SitesApi.md#updateSiteMembership) | **PUT** /sites/{siteId}/members/{personId} | Update a site membership
[**updateSiteMembershipRequestForPerson**](SitesApi.md#updateSiteMembershipRequestForPerson) | **PUT** /people/{personId}/site-membership-requests/{siteId} | Update a site membership request


# **createSite**
> \Alfresco\Model\SiteEntry createSite($site_body_create, $skip_configuration, $skip_add_to_favorites, $fields)

Create a site

**Note:** this endpoint is available in Alfresco 5.2 and newer versions.  Creates a default site with the given details.  Unless explicitly specified, the site id will be generated from the site title. The site id must be unique and only contain alphanumeric and/or dash characters.  Note: the id of a site cannot be updated once the site has been created.  For example, to create a public site called \"Marketing\" the following body could be used: ```JSON {   \"title\": \"Marketing\",   \"visibility\": \"PUBLIC\" } ```  The creation of the (surf) configuration files required by Share can be skipped via the **skipConfiguration** query parameter.  **Note:** if skipped then such a site will **not** work within Share.  The addition of the site to the user's site favorites can be skipped via the **skipAddToFavorites** query parameter.  The creator will be added as a member with Site Manager role.  When you create a site, a container called **documentLibrary** is created for you in the new site.  This container is the root folder for content stored in the site.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
Alfresco\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Alfresco\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Alfresco\Api\SitesApi();
$site_body_create = new \Alfresco\Model\SiteBodyCreate(); // \Alfresco\Model\SiteBodyCreate | The site details
$skip_configuration = false; // bool | Flag to indicate whether the Share-specific (surf) configuration files for the site should not be created.
$skip_add_to_favorites = false; // bool | Flag to indicate whether the site should not be added to the user's site favorites.
$fields = array("fields_example"); // string[] | A list of field names.  You can use this parameter to restrict the fields returned within a response if, for example, you want to save on overall bandwidth.  The list applies to a returned individual entity or entries within a collection.  If the API method also supports the **include** parameter, then the fields specified in the **include** parameter are returned in addition to those specified in the **fields** parameter.

try {
    $result = $api_instance->createSite($site_body_create, $skip_configuration, $skip_add_to_favorites, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SitesApi->createSite: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **site_body_create** | [**\Alfresco\Model\SiteBodyCreate**](../Model/SiteBodyCreate.md)| The site details |
 **skip_configuration** | **bool**| Flag to indicate whether the Share-specific (surf) configuration files for the site should not be created. | [optional] [default to false]
 **skip_add_to_favorites** | **bool**| Flag to indicate whether the site should not be added to the user&#39;s site favorites. | [optional] [default to false]
 **fields** | [**string[]**](../Model/string.md)| A list of field names.  You can use this parameter to restrict the fields returned within a response if, for example, you want to save on overall bandwidth.  The list applies to a returned individual entity or entries within a collection.  If the API method also supports the **include** parameter, then the fields specified in the **include** parameter are returned in addition to those specified in the **fields** parameter. | [optional]

### Return type

[**\Alfresco\Model\SiteEntry**](../Model/SiteEntry.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createSiteMembership**
> \Alfresco\Model\SiteMemberEntry createSiteMembership($site_id, $site_membership_body_create, $fields)

Create a site membership

Creates a site membership for person **personId** on site **siteId**.  You can set the **role** to one of four types:  * SiteConsumer * SiteCollaborator * SiteContributor * SiteManager  **Note:** You can create more than one site membership by  specifying a list of people in the JSON body like this:  ```JSON [   {     \"role\": \"SiteConsumer\",     \"id\": \"joe\"   },   {     \"role\": \"SiteConsumer\",     \"id\": \"fred\"   } ] ``` If you specify a list as input, then a paginated list rather than an entry is returned in the response body. For example:  ```JSON {   \"list\": {     \"pagination\": {       \"count\": 2,       \"hasMoreItems\": false,       \"totalItems\": 2,       \"skipCount\": 0,       \"maxItems\": 100     },     \"entries\": [       {         \"entry\": {           ...         }       },       {         \"entry\": {           ...         }       }     ]   } } ```

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
Alfresco\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Alfresco\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Alfresco\Api\SitesApi();
$site_id = "site_id_example"; // string | The identifier of a site.
$site_membership_body_create = new \Alfresco\Model\SiteMembershipBodyCreate(); // \Alfresco\Model\SiteMembershipBodyCreate | The person to add and their role
$fields = array("fields_example"); // string[] | A list of field names.  You can use this parameter to restrict the fields returned within a response if, for example, you want to save on overall bandwidth.  The list applies to a returned individual entity or entries within a collection.  If the API method also supports the **include** parameter, then the fields specified in the **include** parameter are returned in addition to those specified in the **fields** parameter.

try {
    $result = $api_instance->createSiteMembership($site_id, $site_membership_body_create, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SitesApi->createSiteMembership: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **site_id** | **string**| The identifier of a site. |
 **site_membership_body_create** | [**\Alfresco\Model\SiteMembershipBodyCreate**](../Model/SiteMembershipBodyCreate.md)| The person to add and their role |
 **fields** | [**string[]**](../Model/string.md)| A list of field names.  You can use this parameter to restrict the fields returned within a response if, for example, you want to save on overall bandwidth.  The list applies to a returned individual entity or entries within a collection.  If the API method also supports the **include** parameter, then the fields specified in the **include** parameter are returned in addition to those specified in the **fields** parameter. | [optional]

### Return type

[**\Alfresco\Model\SiteMemberEntry**](../Model/SiteMemberEntry.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createSiteMembershipRequestForPerson**
> \Alfresco\Model\SiteMembershipRequestEntry createSiteMembershipRequestForPerson($person_id, $site_membership_request_body_create, $fields)

Create a site membership request

Create a site membership request for yourself on the site with the identifier of **id**, specified in the JSON body.  The result of the request differs depending on the type of site.  * For a **public** site, you join the site immediately as a SiteConsumer. * For a **moderated** site, your request is added to the site membership request list. The request waits for approval from the Site Manager. * You cannot request membership of a **private** site. Members are invited by the site administrator.  You can use the `-me-` string in place of `<personId>` to specify the currently authenticated user.   **Note:** You can create site membership requests for more than one site by  specifying a list of sites in the JSON body like this:  ```JSON [   {     \"message\": \"Please can you add me\",     \"id\": \"test-site-1\",     \"title\": \"Request for test site 1\",   },   {     \"message\": \"Please can you add me\",     \"id\": \"test-site-2\",     \"title\": \"Request for test site 2\",   } ] ``` If you specify a list as input, then a paginated list rather than an entry is returned in the response body. For example:  ```JSON {   \"list\": {     \"pagination\": {       \"count\": 2,       \"hasMoreItems\": false,       \"totalItems\": 2,       \"skipCount\": 0,       \"maxItems\": 100     },     \"entries\": [       {         \"entry\": {           ...         }       },       {         \"entry\": {           ...         }       }     ]   } } ```

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
Alfresco\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Alfresco\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Alfresco\Api\SitesApi();
$person_id = "person_id_example"; // string | The identifier of a person.
$site_membership_request_body_create = new \Alfresco\Model\SiteMembershipRequestBodyCreate(); // \Alfresco\Model\SiteMembershipRequestBodyCreate | Site membership request details
$fields = array("fields_example"); // string[] | A list of field names.  You can use this parameter to restrict the fields returned within a response if, for example, you want to save on overall bandwidth.  The list applies to a returned individual entity or entries within a collection.  If the API method also supports the **include** parameter, then the fields specified in the **include** parameter are returned in addition to those specified in the **fields** parameter.

try {
    $result = $api_instance->createSiteMembershipRequestForPerson($person_id, $site_membership_request_body_create, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SitesApi->createSiteMembershipRequestForPerson: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **person_id** | **string**| The identifier of a person. |
 **site_membership_request_body_create** | [**\Alfresco\Model\SiteMembershipRequestBodyCreate**](../Model/SiteMembershipRequestBodyCreate.md)| Site membership request details |
 **fields** | [**string[]**](../Model/string.md)| A list of field names.  You can use this parameter to restrict the fields returned within a response if, for example, you want to save on overall bandwidth.  The list applies to a returned individual entity or entries within a collection.  If the API method also supports the **include** parameter, then the fields specified in the **include** parameter are returned in addition to those specified in the **fields** parameter. | [optional]

### Return type

[**\Alfresco\Model\SiteMembershipRequestEntry**](../Model/SiteMembershipRequestEntry.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteSite**
> deleteSite($site_id, $permanent)

Delete a site

**Note:** this endpoint is available in Alfresco 5.2 and newer versions.  Deletes the site with **siteId**.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
Alfresco\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Alfresco\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Alfresco\Api\SitesApi();
$site_id = "site_id_example"; // string | The identifier of a site.
$permanent = false; // bool | Flag to indicate whether the site should be permanently deleted i.e. bypass the trashcan.

try {
    $api_instance->deleteSite($site_id, $permanent);
} catch (Exception $e) {
    echo 'Exception when calling SitesApi->deleteSite: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **site_id** | **string**| The identifier of a site. |
 **permanent** | **bool**| Flag to indicate whether the site should be permanently deleted i.e. bypass the trashcan. | [optional] [default to false]

### Return type

void (empty response body)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteSiteMembership**
> deleteSiteMembership($site_id, $person_id)

Delete a site membership

Deletes person **personId** as a member of site **siteId**.  You can use the `-me-` string in place of `<personId>` to specify the currently authenticated user.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
Alfresco\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Alfresco\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Alfresco\Api\SitesApi();
$site_id = "site_id_example"; // string | The identifier of a site.
$person_id = "person_id_example"; // string | The identifier of a person.

try {
    $api_instance->deleteSiteMembership($site_id, $person_id);
} catch (Exception $e) {
    echo 'Exception when calling SitesApi->deleteSiteMembership: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **site_id** | **string**| The identifier of a site. |
 **person_id** | **string**| The identifier of a person. |

### Return type

void (empty response body)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteSiteMembershipForPerson**
> deleteSiteMembershipForPerson($person_id, $site_id)

Delete a site membership

Deletes person **personId** as a member of site **siteId**.  You can use the `-me-` string in place of `<personId>` to specify the currently authenticated user.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
Alfresco\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Alfresco\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Alfresco\Api\SitesApi();
$person_id = "person_id_example"; // string | The identifier of a person.
$site_id = "site_id_example"; // string | The identifier of a site.

try {
    $api_instance->deleteSiteMembershipForPerson($person_id, $site_id);
} catch (Exception $e) {
    echo 'Exception when calling SitesApi->deleteSiteMembershipForPerson: ', $e->getMessage(), PHP_EOL;
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

# **deleteSiteMembershipRequestForPerson**
> deleteSiteMembershipRequestForPerson($person_id, $site_id)

Delete a site membership request

Deletes the site membership request to site **siteId** for person **personId**.  You can use the `-me-` string in place of `<personId>` to specify the currently authenticated user.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
Alfresco\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Alfresco\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Alfresco\Api\SitesApi();
$person_id = "person_id_example"; // string | The identifier of a person.
$site_id = "site_id_example"; // string | The identifier of a site.

try {
    $api_instance->deleteSiteMembershipRequestForPerson($person_id, $site_id);
} catch (Exception $e) {
    echo 'Exception when calling SitesApi->deleteSiteMembershipRequestForPerson: ', $e->getMessage(), PHP_EOL;
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

# **getSite**
> \Alfresco\Model\SiteEntry getSite($site_id, $relations, $fields)

Get a site

Gets information for site **siteId**.  You can use the **relations** parameter to include one or more related entities in a single response and so reduce network traffic.  The entity types in Alfresco are organized in a tree structure. The **sites** entity has two children, **containers** and **members**. The following relations parameter returns all the container and member objects related to the site **siteId**:  ``` containers,members ```

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
Alfresco\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Alfresco\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Alfresco\Api\SitesApi();
$site_id = "site_id_example"; // string | The identifier of a site.
$relations = array("relations_example"); // string[] | Use the relations parameter to include one or more related entities in a single response.
$fields = array("fields_example"); // string[] | A list of field names.  You can use this parameter to restrict the fields returned within a response if, for example, you want to save on overall bandwidth.  The list applies to a returned individual entity or entries within a collection.  If the API method also supports the **include** parameter, then the fields specified in the **include** parameter are returned in addition to those specified in the **fields** parameter.

try {
    $result = $api_instance->getSite($site_id, $relations, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SitesApi->getSite: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **site_id** | **string**| The identifier of a site. |
 **relations** | [**string[]**](../Model/string.md)| Use the relations parameter to include one or more related entities in a single response. | [optional]
 **fields** | [**string[]**](../Model/string.md)| A list of field names.  You can use this parameter to restrict the fields returned within a response if, for example, you want to save on overall bandwidth.  The list applies to a returned individual entity or entries within a collection.  If the API method also supports the **include** parameter, then the fields specified in the **include** parameter are returned in addition to those specified in the **fields** parameter. | [optional]

### Return type

[**\Alfresco\Model\SiteEntry**](../Model/SiteEntry.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSiteContainer**
> \Alfresco\Model\SiteContainerEntry getSiteContainer($site_id, $container_id, $fields)

Get a site container

Gets information on the container **containerId** in site **siteId**.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
Alfresco\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Alfresco\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Alfresco\Api\SitesApi();
$site_id = "site_id_example"; // string | The identifier of a site.
$container_id = "container_id_example"; // string | The unique identifier of a site container.
$fields = array("fields_example"); // string[] | A list of field names.  You can use this parameter to restrict the fields returned within a response if, for example, you want to save on overall bandwidth.  The list applies to a returned individual entity or entries within a collection.  If the API method also supports the **include** parameter, then the fields specified in the **include** parameter are returned in addition to those specified in the **fields** parameter.

try {
    $result = $api_instance->getSiteContainer($site_id, $container_id, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SitesApi->getSiteContainer: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **site_id** | **string**| The identifier of a site. |
 **container_id** | **string**| The unique identifier of a site container. |
 **fields** | [**string[]**](../Model/string.md)| A list of field names.  You can use this parameter to restrict the fields returned within a response if, for example, you want to save on overall bandwidth.  The list applies to a returned individual entity or entries within a collection.  If the API method also supports the **include** parameter, then the fields specified in the **include** parameter are returned in addition to those specified in the **fields** parameter. | [optional]

### Return type

[**\Alfresco\Model\SiteContainerEntry**](../Model/SiteContainerEntry.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSiteMembership**
> \Alfresco\Model\SiteMemberEntry getSiteMembership($site_id, $person_id, $fields)

Get a site membership

Gets site membership information for person **personId** on site **siteId**.  You can use the `-me-` string in place of `<personId>` to specify the currently authenticated user.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
Alfresco\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Alfresco\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Alfresco\Api\SitesApi();
$site_id = "site_id_example"; // string | The identifier of a site.
$person_id = "person_id_example"; // string | The identifier of a person.
$fields = array("fields_example"); // string[] | A list of field names.  You can use this parameter to restrict the fields returned within a response if, for example, you want to save on overall bandwidth.  The list applies to a returned individual entity or entries within a collection.  If the API method also supports the **include** parameter, then the fields specified in the **include** parameter are returned in addition to those specified in the **fields** parameter.

try {
    $result = $api_instance->getSiteMembership($site_id, $person_id, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SitesApi->getSiteMembership: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **site_id** | **string**| The identifier of a site. |
 **person_id** | **string**| The identifier of a person. |
 **fields** | [**string[]**](../Model/string.md)| A list of field names.  You can use this parameter to restrict the fields returned within a response if, for example, you want to save on overall bandwidth.  The list applies to a returned individual entity or entries within a collection.  If the API method also supports the **include** parameter, then the fields specified in the **include** parameter are returned in addition to those specified in the **fields** parameter. | [optional]

### Return type

[**\Alfresco\Model\SiteMemberEntry**](../Model/SiteMemberEntry.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSiteMembershipForPerson**
> \Alfresco\Model\SiteRoleEntry getSiteMembershipForPerson($person_id, $site_id)

Get a site membership

Gets site membership information for person **personId** on site **siteId**.  You can use the `-me-` string in place of `<personId>` to specify the currently authenticated user.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
Alfresco\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Alfresco\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Alfresco\Api\SitesApi();
$person_id = "person_id_example"; // string | The identifier of a person.
$site_id = "site_id_example"; // string | The identifier of a site.

try {
    $result = $api_instance->getSiteMembershipForPerson($person_id, $site_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SitesApi->getSiteMembershipForPerson: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **person_id** | **string**| The identifier of a person. |
 **site_id** | **string**| The identifier of a site. |

### Return type

[**\Alfresco\Model\SiteRoleEntry**](../Model/SiteRoleEntry.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSiteMembershipRequestForPerson**
> \Alfresco\Model\SiteMembershipRequestEntry getSiteMembershipRequestForPerson($person_id, $site_id, $fields)

Get a site membership request

Gets the site membership request for site **siteId** for person **personId**, if one exists.  You can use the `-me-` string in place of `<personId>` to specify the currently authenticated user.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
Alfresco\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Alfresco\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Alfresco\Api\SitesApi();
$person_id = "person_id_example"; // string | The identifier of a person.
$site_id = "site_id_example"; // string | The identifier of a site.
$fields = array("fields_example"); // string[] | A list of field names.  You can use this parameter to restrict the fields returned within a response if, for example, you want to save on overall bandwidth.  The list applies to a returned individual entity or entries within a collection.  If the API method also supports the **include** parameter, then the fields specified in the **include** parameter are returned in addition to those specified in the **fields** parameter.

try {
    $result = $api_instance->getSiteMembershipRequestForPerson($person_id, $site_id, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SitesApi->getSiteMembershipRequestForPerson: ', $e->getMessage(), PHP_EOL;
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

[**\Alfresco\Model\SiteMembershipRequestEntry**](../Model/SiteMembershipRequestEntry.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listSiteContainers**
> \Alfresco\Model\SiteContainerPaging listSiteContainers($site_id, $skip_count, $max_items, $fields)

List site containers

Gets a list of containers for the site **siteId**.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
Alfresco\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Alfresco\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Alfresco\Api\SitesApi();
$site_id = "site_id_example"; // string | The identifier of a site.
$skip_count = 0; // int | The number of entities that exist in the collection before those included in this list.  If not supplied then the default value is 0.
$max_items = 100; // int | The maximum number of items to return in the list.  If not supplied then the default value is 100.
$fields = array("fields_example"); // string[] | A list of field names.  You can use this parameter to restrict the fields returned within a response if, for example, you want to save on overall bandwidth.  The list applies to a returned individual entity or entries within a collection.  If the API method also supports the **include** parameter, then the fields specified in the **include** parameter are returned in addition to those specified in the **fields** parameter.

try {
    $result = $api_instance->listSiteContainers($site_id, $skip_count, $max_items, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SitesApi->listSiteContainers: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **site_id** | **string**| The identifier of a site. |
 **skip_count** | **int**| The number of entities that exist in the collection before those included in this list.  If not supplied then the default value is 0. | [optional] [default to 0]
 **max_items** | **int**| The maximum number of items to return in the list.  If not supplied then the default value is 100. | [optional] [default to 100]
 **fields** | [**string[]**](../Model/string.md)| A list of field names.  You can use this parameter to restrict the fields returned within a response if, for example, you want to save on overall bandwidth.  The list applies to a returned individual entity or entries within a collection.  If the API method also supports the **include** parameter, then the fields specified in the **include** parameter are returned in addition to those specified in the **fields** parameter. | [optional]

### Return type

[**\Alfresco\Model\SiteContainerPaging**](../Model/SiteContainerPaging.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listSiteMembershipRequestsForPerson**
> \Alfresco\Model\SiteMembershipRequestPaging listSiteMembershipRequestsForPerson($person_id, $skip_count, $max_items, $fields)

List site membership requests

Gets a list of the current site membership requests for person **personId**.  You can use the `-me-` string in place of `<personId>` to specify the currently authenticated user.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
Alfresco\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Alfresco\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Alfresco\Api\SitesApi();
$person_id = "person_id_example"; // string | The identifier of a person.
$skip_count = 0; // int | The number of entities that exist in the collection before those included in this list.  If not supplied then the default value is 0.
$max_items = 100; // int | The maximum number of items to return in the list.  If not supplied then the default value is 100.
$fields = array("fields_example"); // string[] | A list of field names.  You can use this parameter to restrict the fields returned within a response if, for example, you want to save on overall bandwidth.  The list applies to a returned individual entity or entries within a collection.  If the API method also supports the **include** parameter, then the fields specified in the **include** parameter are returned in addition to those specified in the **fields** parameter.

try {
    $result = $api_instance->listSiteMembershipRequestsForPerson($person_id, $skip_count, $max_items, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SitesApi->listSiteMembershipRequestsForPerson: ', $e->getMessage(), PHP_EOL;
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

[**\Alfresco\Model\SiteMembershipRequestPaging**](../Model/SiteMembershipRequestPaging.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listSiteMemberships**
> \Alfresco\Model\SiteMemberPaging listSiteMemberships($site_id, $skip_count, $max_items, $fields)

List site memberships

Gets a list of site memberships for site **siteId**.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
Alfresco\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Alfresco\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Alfresco\Api\SitesApi();
$site_id = "site_id_example"; // string | The identifier of a site.
$skip_count = 0; // int | The number of entities that exist in the collection before those included in this list.  If not supplied then the default value is 0.
$max_items = 100; // int | The maximum number of items to return in the list.  If not supplied then the default value is 100.
$fields = array("fields_example"); // string[] | A list of field names.  You can use this parameter to restrict the fields returned within a response if, for example, you want to save on overall bandwidth.  The list applies to a returned individual entity or entries within a collection.  If the API method also supports the **include** parameter, then the fields specified in the **include** parameter are returned in addition to those specified in the **fields** parameter.

try {
    $result = $api_instance->listSiteMemberships($site_id, $skip_count, $max_items, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SitesApi->listSiteMemberships: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **site_id** | **string**| The identifier of a site. |
 **skip_count** | **int**| The number of entities that exist in the collection before those included in this list.  If not supplied then the default value is 0. | [optional] [default to 0]
 **max_items** | **int**| The maximum number of items to return in the list.  If not supplied then the default value is 100. | [optional] [default to 100]
 **fields** | [**string[]**](../Model/string.md)| A list of field names.  You can use this parameter to restrict the fields returned within a response if, for example, you want to save on overall bandwidth.  The list applies to a returned individual entity or entries within a collection.  If the API method also supports the **include** parameter, then the fields specified in the **include** parameter are returned in addition to those specified in the **fields** parameter. | [optional]

### Return type

[**\Alfresco\Model\SiteMemberPaging**](../Model/SiteMemberPaging.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listSiteMembershipsForPerson**
> \Alfresco\Model\SiteRolePaging listSiteMembershipsForPerson($person_id, $skip_count, $max_items, $order_by, $relations, $fields, $where)

List site memberships

Gets a list of site membership information for person **personId**.  You can use the `-me-` string in place of `<personId>` to specify the currently authenticated user.  You can use the **where** parameter to filter the returned sites by **visibility** or site **preset**.  Example to filter by **visibility**, use any one of:  ``` (visibility='PRIVATE') (visibility='PUBLIC') (visibility='MODERATED') ```  Example to filter by site **preset**:  ``` (preset='site-dashboard') ```  The default sort order for the returned list is for sites to be sorted by ascending title. You can override the default by using the **orderBy** parameter. You can specify one or more of the following fields in the **orderBy** parameter: * id * title * role

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
Alfresco\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Alfresco\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Alfresco\Api\SitesApi();
$person_id = "person_id_example"; // string | The identifier of a person.
$skip_count = 0; // int | The number of entities that exist in the collection before those included in this list.  If not supplied then the default value is 0.
$max_items = 100; // int | The maximum number of items to return in the list.  If not supplied then the default value is 100.
$order_by = array("order_by_example"); // string[] | A string to control the order of the entities returned in a list. You can use the **orderBy** parameter to sort the list by one or more fields.  Each field has a default sort order, which is normally ascending order. Read the API method implementation notes above to check if any fields used in this method have a descending default search order.  To sort the entities in a specific order, you can use the **ASC** and **DESC** keywords for any field.
$relations = array("relations_example"); // string[] | Use the relations parameter to include one or more related entities in a single response.
$fields = array("fields_example"); // string[] | A list of field names.  You can use this parameter to restrict the fields returned within a response if, for example, you want to save on overall bandwidth.  The list applies to a returned individual entity or entries within a collection.  If the API method also supports the **include** parameter, then the fields specified in the **include** parameter are returned in addition to those specified in the **fields** parameter.
$where = "where_example"; // string | A string to restrict the returned objects by using a predicate.

try {
    $result = $api_instance->listSiteMembershipsForPerson($person_id, $skip_count, $max_items, $order_by, $relations, $fields, $where);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SitesApi->listSiteMembershipsForPerson: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **person_id** | **string**| The identifier of a person. |
 **skip_count** | **int**| The number of entities that exist in the collection before those included in this list.  If not supplied then the default value is 0. | [optional] [default to 0]
 **max_items** | **int**| The maximum number of items to return in the list.  If not supplied then the default value is 100. | [optional] [default to 100]
 **order_by** | [**string[]**](../Model/string.md)| A string to control the order of the entities returned in a list. You can use the **orderBy** parameter to sort the list by one or more fields.  Each field has a default sort order, which is normally ascending order. Read the API method implementation notes above to check if any fields used in this method have a descending default search order.  To sort the entities in a specific order, you can use the **ASC** and **DESC** keywords for any field. | [optional]
 **relations** | [**string[]**](../Model/string.md)| Use the relations parameter to include one or more related entities in a single response. | [optional]
 **fields** | [**string[]**](../Model/string.md)| A list of field names.  You can use this parameter to restrict the fields returned within a response if, for example, you want to save on overall bandwidth.  The list applies to a returned individual entity or entries within a collection.  If the API method also supports the **include** parameter, then the fields specified in the **include** parameter are returned in addition to those specified in the **fields** parameter. | [optional]
 **where** | **string**| A string to restrict the returned objects by using a predicate. | [optional]

### Return type

[**\Alfresco\Model\SiteRolePaging**](../Model/SiteRolePaging.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listSites**
> \Alfresco\Model\SitePaging listSites($skip_count, $max_items, $order_by, $relations, $fields, $where)

List sites

Gets a list of sites in this repository.  You can use the **where** parameter to filter the returned sites by **visibility** or site **preset**.  Example to filter by **visibility**, use any one of:  ``` (visibility='PRIVATE') (visibility='PUBLIC') (visibility='MODERATED') ```  Example to filter by site **preset**:  ``` (preset='site-dashboard') ```  The default sort order for the returned list is for sites to be sorted by ascending title. You can override the default by using the **orderBy** parameter. You can specify one or more of the following fields in the **orderBy** parameter: * id * title * description  You can use the **relations** parameter to include one or more related entities in a single response and so reduce network traffic.  The entity types in Alfresco are organized in a tree structure. The **sites** entity has two children, **containers** and **members**. The following relations parameter returns all the container and member objects related to each site:  ``` containers,members ```

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
Alfresco\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Alfresco\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Alfresco\Api\SitesApi();
$skip_count = 0; // int | The number of entities that exist in the collection before those included in this list.  If not supplied then the default value is 0.
$max_items = 100; // int | The maximum number of items to return in the list.  If not supplied then the default value is 100.
$order_by = array("order_by_example"); // string[] | A string to control the order of the entities returned in a list. You can use the **orderBy** parameter to sort the list by one or more fields.  Each field has a default sort order, which is normally ascending order. Read the API method implementation notes above to check if any fields used in this method have a descending default search order.  To sort the entities in a specific order, you can use the **ASC** and **DESC** keywords for any field.
$relations = array("relations_example"); // string[] | Use the relations parameter to include one or more related entities in a single response.
$fields = array("fields_example"); // string[] | A list of field names.  You can use this parameter to restrict the fields returned within a response if, for example, you want to save on overall bandwidth.  The list applies to a returned individual entity or entries within a collection.  If the API method also supports the **include** parameter, then the fields specified in the **include** parameter are returned in addition to those specified in the **fields** parameter.
$where = "where_example"; // string | A string to restrict the returned objects by using a predicate.

try {
    $result = $api_instance->listSites($skip_count, $max_items, $order_by, $relations, $fields, $where);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SitesApi->listSites: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **skip_count** | **int**| The number of entities that exist in the collection before those included in this list.  If not supplied then the default value is 0. | [optional] [default to 0]
 **max_items** | **int**| The maximum number of items to return in the list.  If not supplied then the default value is 100. | [optional] [default to 100]
 **order_by** | [**string[]**](../Model/string.md)| A string to control the order of the entities returned in a list. You can use the **orderBy** parameter to sort the list by one or more fields.  Each field has a default sort order, which is normally ascending order. Read the API method implementation notes above to check if any fields used in this method have a descending default search order.  To sort the entities in a specific order, you can use the **ASC** and **DESC** keywords for any field. | [optional]
 **relations** | [**string[]**](../Model/string.md)| Use the relations parameter to include one or more related entities in a single response. | [optional]
 **fields** | [**string[]**](../Model/string.md)| A list of field names.  You can use this parameter to restrict the fields returned within a response if, for example, you want to save on overall bandwidth.  The list applies to a returned individual entity or entries within a collection.  If the API method also supports the **include** parameter, then the fields specified in the **include** parameter are returned in addition to those specified in the **fields** parameter. | [optional]
 **where** | **string**| A string to restrict the returned objects by using a predicate. | [optional]

### Return type

[**\Alfresco\Model\SitePaging**](../Model/SitePaging.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateSite**
> \Alfresco\Model\SiteEntry updateSite($site_id, $site_body_update, $fields)

Update a site

**Note:** this endpoint is available in Alfresco 5.2 and newer versions.  Update the details for the given site **siteId**. Site Manager or otherwise a  (site) admin can update title, description or visibility.  Note: the id of a site cannot be updated once the site has been created.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
Alfresco\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Alfresco\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Alfresco\Api\SitesApi();
$site_id = "site_id_example"; // string | The identifier of a site.
$site_body_update = new \Alfresco\Model\SiteBodyUpdate(); // \Alfresco\Model\SiteBodyUpdate | The site information to update.
$fields = array("fields_example"); // string[] | A list of field names.  You can use this parameter to restrict the fields returned within a response if, for example, you want to save on overall bandwidth.  The list applies to a returned individual entity or entries within a collection.  If the API method also supports the **include** parameter, then the fields specified in the **include** parameter are returned in addition to those specified in the **fields** parameter.

try {
    $result = $api_instance->updateSite($site_id, $site_body_update, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SitesApi->updateSite: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **site_id** | **string**| The identifier of a site. |
 **site_body_update** | [**\Alfresco\Model\SiteBodyUpdate**](../Model/SiteBodyUpdate.md)| The site information to update. |
 **fields** | [**string[]**](../Model/string.md)| A list of field names.  You can use this parameter to restrict the fields returned within a response if, for example, you want to save on overall bandwidth.  The list applies to a returned individual entity or entries within a collection.  If the API method also supports the **include** parameter, then the fields specified in the **include** parameter are returned in addition to those specified in the **fields** parameter. | [optional]

### Return type

[**\Alfresco\Model\SiteEntry**](../Model/SiteEntry.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateSiteMembership**
> \Alfresco\Model\SiteMemberEntry updateSiteMembership($site_id, $person_id, $site_membership_body_update, $fields)

Update a site membership

Update the membership of person **personId** in site **siteId**.  You can use the `-me-` string in place of `<personId>` to specify the currently authenticated user.  You can set the **role** to one of four types:  * SiteConsumer * SiteCollaborator * SiteContributor * SiteManager

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
Alfresco\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Alfresco\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Alfresco\Api\SitesApi();
$site_id = "site_id_example"; // string | The identifier of a site.
$person_id = "person_id_example"; // string | The identifier of a person.
$site_membership_body_update = new \Alfresco\Model\SiteMembershipBodyUpdate(); // \Alfresco\Model\SiteMembershipBodyUpdate | The persons new role
$fields = array("fields_example"); // string[] | A list of field names.  You can use this parameter to restrict the fields returned within a response if, for example, you want to save on overall bandwidth.  The list applies to a returned individual entity or entries within a collection.  If the API method also supports the **include** parameter, then the fields specified in the **include** parameter are returned in addition to those specified in the **fields** parameter.

try {
    $result = $api_instance->updateSiteMembership($site_id, $person_id, $site_membership_body_update, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SitesApi->updateSiteMembership: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **site_id** | **string**| The identifier of a site. |
 **person_id** | **string**| The identifier of a person. |
 **site_membership_body_update** | [**\Alfresco\Model\SiteMembershipBodyUpdate**](../Model/SiteMembershipBodyUpdate.md)| The persons new role |
 **fields** | [**string[]**](../Model/string.md)| A list of field names.  You can use this parameter to restrict the fields returned within a response if, for example, you want to save on overall bandwidth.  The list applies to a returned individual entity or entries within a collection.  If the API method also supports the **include** parameter, then the fields specified in the **include** parameter are returned in addition to those specified in the **fields** parameter. | [optional]

### Return type

[**\Alfresco\Model\SiteMemberEntry**](../Model/SiteMemberEntry.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateSiteMembershipRequestForPerson**
> \Alfresco\Model\SiteMembershipRequestEntry updateSiteMembershipRequestForPerson($person_id, $site_id, $site_membership_request_body_update, $fields)

Update a site membership request

Updates the message for the site membership request to site **siteId** for person **personId**.  You can use the `-me-` string in place of `<personId>` to specify the currently authenticated user.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
Alfresco\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Alfresco\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Alfresco\Api\SitesApi();
$person_id = "person_id_example"; // string | The identifier of a person.
$site_id = "site_id_example"; // string | The identifier of a site.
$site_membership_request_body_update = new \Alfresco\Model\SiteMembershipRequestBodyUpdate(); // \Alfresco\Model\SiteMembershipRequestBodyUpdate | The new message to display
$fields = array("fields_example"); // string[] | A list of field names.  You can use this parameter to restrict the fields returned within a response if, for example, you want to save on overall bandwidth.  The list applies to a returned individual entity or entries within a collection.  If the API method also supports the **include** parameter, then the fields specified in the **include** parameter are returned in addition to those specified in the **fields** parameter.

try {
    $result = $api_instance->updateSiteMembershipRequestForPerson($person_id, $site_id, $site_membership_request_body_update, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SitesApi->updateSiteMembershipRequestForPerson: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **person_id** | **string**| The identifier of a person. |
 **site_id** | **string**| The identifier of a site. |
 **site_membership_request_body_update** | [**\Alfresco\Model\SiteMembershipRequestBodyUpdate**](../Model/SiteMembershipRequestBodyUpdate.md)| The new message to display |
 **fields** | [**string[]**](../Model/string.md)| A list of field names.  You can use this parameter to restrict the fields returned within a response if, for example, you want to save on overall bandwidth.  The list applies to a returned individual entity or entries within a collection.  If the API method also supports the **include** parameter, then the fields specified in the **include** parameter are returned in addition to those specified in the **fields** parameter. | [optional]

### Return type

[**\Alfresco\Model\SiteMembershipRequestEntry**](../Model/SiteMembershipRequestEntry.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

