# Alfresco\QueriesApi

All URIs are relative to *https://localhost/alfresco/api/-default-/public/alfresco/versions/1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**findNodes**](QueriesApi.md#findNodes) | **GET** /queries/nodes | Find nodes
[**findPeople**](QueriesApi.md#findPeople) | **GET** /queries/people | Find people
[**findSites**](QueriesApi.md#findSites) | **GET** /queries/sites | Find sites


# **findNodes**
> \Alfresco\Model\NodePaging findNodes($term, $root_node_id, $skip_count, $max_items, $node_type, $include, $order_by, $fields)

Find nodes

**Note:** this endpoint is available in Alfresco 5.2 and newer versions.  Gets a list of nodes that match the given search criteria.  The search term is used to look for nodes that match against name, title, description, full text content or tags.  The search term: - must contain a minimum of 3 alphanumeric characters - allows \"quoted term\" - can optionally use '*' for wildcard matching  By default, file and folder types will be searched unless a specific type is provided as a query parameter.  By default, the search will be across the repository unless a specific root node id is provided to start the search from.  You can sort the result list using the **orderBy** parameter. You can specify one or more of the following fields in the **orderBy** parameter: * name * modifiedAt * createdAt

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
Alfresco\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Alfresco\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Alfresco\Api\QueriesApi();
$term = "term_example"; // string | The term to search for.
$root_node_id = "root_node_id_example"; // string | The id of the node to start the search from.  Supports the aliases -my-, -root- and -shared-.
$skip_count = 0; // int | The number of entities that exist in the collection before those included in this list.  If not supplied then the default value is 0.
$max_items = 100; // int | The maximum number of items to return in the list.  If not supplied then the default value is 100.
$node_type = "node_type_example"; // string | Restrict the returned results to only those of the given node type and its sub-types
$include = array("include_example"); // string[] | Returns additional information about the node. The following optional fields can be requested: * allowableOperations * aspectNames * isLink * isLocked * path * properties
$order_by = array("order_by_example"); // string[] | A string to control the order of the entities returned in a list. You can use the **orderBy** parameter to sort the list by one or more fields.  Each field has a default sort order, which is normally ascending order. Read the API method implementation notes above to check if any fields used in this method have a descending default search order.  To sort the entities in a specific order, you can use the **ASC** and **DESC** keywords for any field.
$fields = array("fields_example"); // string[] | A list of field names.  You can use this parameter to restrict the fields returned within a response if, for example, you want to save on overall bandwidth.  The list applies to a returned individual entity or entries within a collection.  If the API method also supports the **include** parameter, then the fields specified in the **include** parameter are returned in addition to those specified in the **fields** parameter.

try {
    $result = $api_instance->findNodes($term, $root_node_id, $skip_count, $max_items, $node_type, $include, $order_by, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QueriesApi->findNodes: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **term** | **string**| The term to search for. |
 **root_node_id** | **string**| The id of the node to start the search from.  Supports the aliases -my-, -root- and -shared-. | [optional]
 **skip_count** | **int**| The number of entities that exist in the collection before those included in this list.  If not supplied then the default value is 0. | [optional] [default to 0]
 **max_items** | **int**| The maximum number of items to return in the list.  If not supplied then the default value is 100. | [optional] [default to 100]
 **node_type** | **string**| Restrict the returned results to only those of the given node type and its sub-types | [optional]
 **include** | [**string[]**](../Model/string.md)| Returns additional information about the node. The following optional fields can be requested: * allowableOperations * aspectNames * isLink * isLocked * path * properties | [optional]
 **order_by** | [**string[]**](../Model/string.md)| A string to control the order of the entities returned in a list. You can use the **orderBy** parameter to sort the list by one or more fields.  Each field has a default sort order, which is normally ascending order. Read the API method implementation notes above to check if any fields used in this method have a descending default search order.  To sort the entities in a specific order, you can use the **ASC** and **DESC** keywords for any field. | [optional]
 **fields** | [**string[]**](../Model/string.md)| A list of field names.  You can use this parameter to restrict the fields returned within a response if, for example, you want to save on overall bandwidth.  The list applies to a returned individual entity or entries within a collection.  If the API method also supports the **include** parameter, then the fields specified in the **include** parameter are returned in addition to those specified in the **fields** parameter. | [optional]

### Return type

[**\Alfresco\Model\NodePaging**](../Model/NodePaging.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **findPeople**
> \Alfresco\Model\PersonPaging findPeople($term, $skip_count, $max_items, $fields, $order_by)

Find people

**Note:** this endpoint is available in Alfresco 5.2 and newer versions.  Gets a list of people that match the given search criteria.  The search term is used to look for matches against person id, firstname and lastname.  The search term: - must contain a minimum of 2 alphanumeric characters - can optionally use '*' for wildcard matching within the term  You can sort the result list using the **orderBy** parameter. You can specify one or more of the following fields in the **orderBy** parameter: * id * firstName * lastName

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
Alfresco\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Alfresco\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Alfresco\Api\QueriesApi();
$term = "term_example"; // string | The term to search for.
$skip_count = 0; // int | The number of entities that exist in the collection before those included in this list.  If not supplied then the default value is 0.
$max_items = 100; // int | The maximum number of items to return in the list.  If not supplied then the default value is 100.
$fields = array("fields_example"); // string[] | A list of field names.  You can use this parameter to restrict the fields returned within a response if, for example, you want to save on overall bandwidth.  The list applies to a returned individual entity or entries within a collection.  If the API method also supports the **include** parameter, then the fields specified in the **include** parameter are returned in addition to those specified in the **fields** parameter.
$order_by = array("order_by_example"); // string[] | A string to control the order of the entities returned in a list. You can use the **orderBy** parameter to sort the list by one or more fields.  Each field has a default sort order, which is normally ascending order. Read the API method implementation notes above to check if any fields used in this method have a descending default search order.  To sort the entities in a specific order, you can use the **ASC** and **DESC** keywords for any field.

try {
    $result = $api_instance->findPeople($term, $skip_count, $max_items, $fields, $order_by);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QueriesApi->findPeople: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **term** | **string**| The term to search for. |
 **skip_count** | **int**| The number of entities that exist in the collection before those included in this list.  If not supplied then the default value is 0. | [optional] [default to 0]
 **max_items** | **int**| The maximum number of items to return in the list.  If not supplied then the default value is 100. | [optional] [default to 100]
 **fields** | [**string[]**](../Model/string.md)| A list of field names.  You can use this parameter to restrict the fields returned within a response if, for example, you want to save on overall bandwidth.  The list applies to a returned individual entity or entries within a collection.  If the API method also supports the **include** parameter, then the fields specified in the **include** parameter are returned in addition to those specified in the **fields** parameter. | [optional]
 **order_by** | [**string[]**](../Model/string.md)| A string to control the order of the entities returned in a list. You can use the **orderBy** parameter to sort the list by one or more fields.  Each field has a default sort order, which is normally ascending order. Read the API method implementation notes above to check if any fields used in this method have a descending default search order.  To sort the entities in a specific order, you can use the **ASC** and **DESC** keywords for any field. | [optional]

### Return type

[**\Alfresco\Model\PersonPaging**](../Model/PersonPaging.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **findSites**
> \Alfresco\Model\SitePaging findSites($term, $skip_count, $max_items, $order_by, $fields)

Find sites

**Note:** this endpoint is available in Alfresco 5.2 and newer versions.  Gets a list of sites that match the given search criteria.  The search term is used to look for sites that match against site id, title or description.  The search term: - must contain a minimum of 2 alphanumeric characters - can optionally use '*' for wildcard matching within the term  The default sort order for the returned list is for sites to be sorted by ascending id.  You can override the default by using the **orderBy** parameter. You can specify one or more of the following fields in the **orderBy** parameter: * id * title * description

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
Alfresco\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Alfresco\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Alfresco\Api\QueriesApi();
$term = "term_example"; // string | The term to search for.
$skip_count = 0; // int | The number of entities that exist in the collection before those included in this list.  If not supplied then the default value is 0.
$max_items = 100; // int | The maximum number of items to return in the list.  If not supplied then the default value is 100.
$order_by = array("order_by_example"); // string[] | A string to control the order of the entities returned in a list. You can use the **orderBy** parameter to sort the list by one or more fields.  Each field has a default sort order, which is normally ascending order. Read the API method implementation notes above to check if any fields used in this method have a descending default search order.  To sort the entities in a specific order, you can use the **ASC** and **DESC** keywords for any field.
$fields = array("fields_example"); // string[] | A list of field names.  You can use this parameter to restrict the fields returned within a response if, for example, you want to save on overall bandwidth.  The list applies to a returned individual entity or entries within a collection.  If the API method also supports the **include** parameter, then the fields specified in the **include** parameter are returned in addition to those specified in the **fields** parameter.

try {
    $result = $api_instance->findSites($term, $skip_count, $max_items, $order_by, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QueriesApi->findSites: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **term** | **string**| The term to search for. |
 **skip_count** | **int**| The number of entities that exist in the collection before those included in this list.  If not supplied then the default value is 0. | [optional] [default to 0]
 **max_items** | **int**| The maximum number of items to return in the list.  If not supplied then the default value is 100. | [optional] [default to 100]
 **order_by** | [**string[]**](../Model/string.md)| A string to control the order of the entities returned in a list. You can use the **orderBy** parameter to sort the list by one or more fields.  Each field has a default sort order, which is normally ascending order. Read the API method implementation notes above to check if any fields used in this method have a descending default search order.  To sort the entities in a specific order, you can use the **ASC** and **DESC** keywords for any field. | [optional]
 **fields** | [**string[]**](../Model/string.md)| A list of field names.  You can use this parameter to restrict the fields returned within a response if, for example, you want to save on overall bandwidth.  The list applies to a returned individual entity or entries within a collection.  If the API method also supports the **include** parameter, then the fields specified in the **include** parameter are returned in addition to those specified in the **fields** parameter. | [optional]

### Return type

[**\Alfresco\Model\SitePaging**](../Model/SitePaging.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

