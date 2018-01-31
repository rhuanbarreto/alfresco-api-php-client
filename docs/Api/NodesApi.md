# Alfresco\NodesApi

All URIs are relative to *https://localhost/alfresco/api/-default-/public/alfresco/versions/1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**copyNode**](NodesApi.md#copyNode) | **POST** /nodes/{nodeId}/copy | Copy a node
[**createAssocation**](NodesApi.md#createAssocation) | **POST** /nodes/{nodeId}/targets | Create node association
[**createNode**](NodesApi.md#createNode) | **POST** /nodes/{nodeId}/children | Create a node
[**createSecondaryChildAssocation**](NodesApi.md#createSecondaryChildAssocation) | **POST** /nodes/{nodeId}/secondary-children | Create secondary child
[**deleteAssocation**](NodesApi.md#deleteAssocation) | **DELETE** /nodes/{nodeId}/targets/{targetId} | Delete node association(s)
[**deleteNode**](NodesApi.md#deleteNode) | **DELETE** /nodes/{nodeId} | Delete a node
[**deleteSecondaryChildAssocation**](NodesApi.md#deleteSecondaryChildAssocation) | **DELETE** /nodes/{nodeId}/secondary-children/{childId} | Delete secondary child or children
[**getNode**](NodesApi.md#getNode) | **GET** /nodes/{nodeId} | Get a node
[**getNodeContent**](NodesApi.md#getNodeContent) | **GET** /nodes/{nodeId}/content | Get node content
[**listNodeChildren**](NodesApi.md#listNodeChildren) | **GET** /nodes/{nodeId}/children | List node children
[**listParents**](NodesApi.md#listParents) | **GET** /nodes/{nodeId}/parents | List parents
[**listSecondaryChildren**](NodesApi.md#listSecondaryChildren) | **GET** /nodes/{nodeId}/secondary-children | List secondary children
[**listSourceAssociations**](NodesApi.md#listSourceAssociations) | **GET** /nodes/{nodeId}/sources | List source associations
[**listTargetAssociations**](NodesApi.md#listTargetAssociations) | **GET** /nodes/{nodeId}/targets | List target associations
[**lockNode**](NodesApi.md#lockNode) | **POST** /nodes/{nodeId}/lock | Lock a node
[**moveNode**](NodesApi.md#moveNode) | **POST** /nodes/{nodeId}/move | Move a node
[**unlockNode**](NodesApi.md#unlockNode) | **POST** /nodes/{nodeId}/unlock | Unlock a node
[**updateNode**](NodesApi.md#updateNode) | **PUT** /nodes/{nodeId} | Update a node
[**updateNodeContent**](NodesApi.md#updateNodeContent) | **PUT** /nodes/{nodeId}/content | Update node content


# **copyNode**
> \Alfresco\Model\NodeEntry copyNode($node_id, $node_body_copy, $include, $fields)

Copy a node

**Note:** this endpoint is available in Alfresco 5.2 and newer versions.  Copies the node **nodeId** to the parent folder node **targetParentId**. You specify the **targetParentId** in the request body.  The new node has the same name as the source node unless you specify a new **name** in the request body.  If the source **nodeId** is a folder, then all of its children are also copied.  If the source **nodeId** is a file, it's properties, aspects and tags are copied, it's ratings, comments and locks are not.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
Alfresco\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Alfresco\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Alfresco\Api\NodesApi();
$node_id = "node_id_example"; // string | The identifier of a node.
$node_body_copy = new \Alfresco\Model\NodeBodyCopy(); // \Alfresco\Model\NodeBodyCopy | The targetParentId and, optionally, a new name which should include the file extension.
$include = array("include_example"); // string[] | Returns additional information about the node. The following optional fields can be requested: * allowableOperations * association * isLink * isLocked * path * permissions
$fields = array("fields_example"); // string[] | A list of field names.  You can use this parameter to restrict the fields returned within a response if, for example, you want to save on overall bandwidth.  The list applies to a returned individual entity or entries within a collection.  If the API method also supports the **include** parameter, then the fields specified in the **include** parameter are returned in addition to those specified in the **fields** parameter.

try {
    $result = $api_instance->copyNode($node_id, $node_body_copy, $include, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NodesApi->copyNode: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **node_id** | **string**| The identifier of a node. |
 **node_body_copy** | [**\Alfresco\Model\NodeBodyCopy**](../Model/NodeBodyCopy.md)| The targetParentId and, optionally, a new name which should include the file extension. |
 **include** | [**string[]**](../Model/string.md)| Returns additional information about the node. The following optional fields can be requested: * allowableOperations * association * isLink * isLocked * path * permissions | [optional]
 **fields** | [**string[]**](../Model/string.md)| A list of field names.  You can use this parameter to restrict the fields returned within a response if, for example, you want to save on overall bandwidth.  The list applies to a returned individual entity or entries within a collection.  If the API method also supports the **include** parameter, then the fields specified in the **include** parameter are returned in addition to those specified in the **fields** parameter. | [optional]

### Return type

[**\Alfresco\Model\NodeEntry**](../Model/NodeEntry.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createAssocation**
> \Alfresco\Model\AssociationEntry createAssocation($node_id, $association_body_create, $fields)

Create node association

**Note:** this endpoint is available in Alfresco 5.2 and newer versions.  Create an association, with the given association type, between the source **nodeId** and a target node.  **Note:** You can create more than one association by specifying a list of associations in the JSON body like this:  ```JSON [   {      \"targetId\": \"string\",      \"assocType\": \"string\"   },   {     \"targetId\": \"string\",     \"assocType\": \"string\"   } ] ``` If you specify a list as input, then a paginated list rather than an entry is returned in the response body. For example:  ```JSON {   \"list\": {     \"pagination\": {       \"count\": 2,       \"hasMoreItems\": false,       \"totalItems\": 2,       \"skipCount\": 0,       \"maxItems\": 100     },     \"entries\": [       {         \"entry\": {           ...         }       },       {         \"entry\": {           ...         }       }     ]   } } ```

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
Alfresco\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Alfresco\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Alfresco\Api\NodesApi();
$node_id = "node_id_example"; // string | The identifier of a source node.
$association_body_create = new \Alfresco\Model\AssociationBody(); // \Alfresco\Model\AssociationBody | The target node id and assoc type.
$fields = array("fields_example"); // string[] | A list of field names.  You can use this parameter to restrict the fields returned within a response if, for example, you want to save on overall bandwidth.  The list applies to a returned individual entity or entries within a collection.  If the API method also supports the **include** parameter, then the fields specified in the **include** parameter are returned in addition to those specified in the **fields** parameter.

try {
    $result = $api_instance->createAssocation($node_id, $association_body_create, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NodesApi->createAssocation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **node_id** | **string**| The identifier of a source node. |
 **association_body_create** | [**\Alfresco\Model\AssociationBody**](../Model/AssociationBody.md)| The target node id and assoc type. |
 **fields** | [**string[]**](../Model/string.md)| A list of field names.  You can use this parameter to restrict the fields returned within a response if, for example, you want to save on overall bandwidth.  The list applies to a returned individual entity or entries within a collection.  If the API method also supports the **include** parameter, then the fields specified in the **include** parameter are returned in addition to those specified in the **fields** parameter. | [optional]

### Return type

[**\Alfresco\Model\AssociationEntry**](../Model/AssociationEntry.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createNode**
> \Alfresco\Model\NodeEntry createNode($node_id, $node_body_create, $auto_rename, $include, $fields)

Create a node

**Note:** this endpoint is available in Alfresco 5.2 and newer versions.  Create a node and add it as a primary child of node **nodeId**.  This endpoint supports both JSON and multipart/form-data (file upload).  **Using multipart/form-data**  Use the **filedata** field to represent the content to upload, for example, the following curl command will create a node with the contents of test.txt in the test user's home folder.  ```curl -utest:test -X POST host:port/alfresco/api/-default-/public/alfresco/versions/1/nodes/-my-/children -F filedata=@test.txt```  You can use the **name** field to give an alternative name for the new file.  You can use the **nodeType** field to create a specific type. The default is cm:content.  You can use the **renditions** field to create renditions (e.g. doclib) asynchronously upon upload. Note that currently only one rendition can be requested. Also, as requesting rendition is a background process, any rendition failure (e.g. No transformer is currently available) will not fail the whole upload and has the potential to silently fail.  Use **overwrite** to overwrite an existing file, matched by name. If the file is versionable, the existing content is replaced.  When you overwrite existing content, you can set the **majorVersion** boolean field to **true** to indicate a major version should be created. The default for **majorVersion** is **false**. Setting  **majorVersion** enables versioning of the node, if it is not already versioned.  When you overwrite existing content, you can use the **comment** field to add a version comment that appears in the version history. This also enables versioning of this node, if it is not already versioned.  You can set the **autoRename** boolean field to automatically resolve name clashes. If there is a name clash, then the API method tries to create a unique name using an integer suffix.  You can use the **relativePath** field to specify the folder structure to create relative to the node **nodeId**. Folders in the **relativePath** that do not exist are created before the node is created.  Any other field provided will be treated as a property to set on the newly created node.  **Note:** setting properties of type d:content and d:category are not supported.  **Using JSON**  You must specify at least a **name** and **nodeType**. For example, to create a folder: ```JSON {   \"name\":\"My Folder\",   \"nodeType\":\"cm:folder\" } ```  You can create an empty file like this: ```JSON {   \"name\":\"My text file.txt\",   \"nodeType\":\"cm:content\" } ``` You can update binary content using the ```PUT /nodes/{nodeId}``` API method.  You can create a folder, or other node, inside a folder hierarchy: ```JSON {   \"name\":\"My Special Folder\",   \"nodeType\":\"cm:folder\",   \"relativePath\":\"X/Y/Z\" } ``` The **relativePath** specifies the folder structure to create relative to the node **nodeId**. Folders in the **relativePath** that do not exist are created before the node is created.  You can set properties when you create a new node: ```JSON {   \"name\":\"My Other Folder\",   \"nodeType\":\"cm:folder\",   \"properties\":   {     \"cm:title\":\"Folder title\",     \"cm:description\":\"This is an important folder\"   } } ``` Any missing aspects are applied automatically. For example, **cm:titled** in the JSON shown above. You can set aspects explicitly, if needed, using an **aspectNames** field.  **Note:** setting properties of type d:content and d:category are not supported.  Typically, for files and folders, the primary children are created within the parent folder using the default \"cm:contains\" assocType.  If the content model allows then it is also possible to create primary children with a different assoc type. For example: ```JSON {   \"name\":\"My Node\",   \"nodeType\":\"my:specialNodeType\",   \"association\":   {     \"assocType\":\"my:specialAssocType\"   } } ```   Additional associations can be added after creating a node. You can also add associations at the time the node is created. This is  required, for example, if the content model specifies that a node has mandatory associations to one or more existing nodes. You can optionally  specify an array of **secondaryChildren** to create one or more secondary child associations, such that the newly created node acts as a parent node.  You can optionally specify an array of **targets** to create one or more peer associations such that the newly created node acts as a source node.  For example, to associate one or more secondary children at time of creation: ```JSON {   \"name\":\"My Folder\",   \"nodeType\":\"cm:folder\",   \"secondaryChildren\":     [ {\"childId\":\"abcde-01234-...\", \"assocType\":\"my:specialChildAssocType\"} ] } ```  For example, to associate one or more targets at time of creation: ```JSON {   \"name\":\"My Folder\",   \"nodeType\":\"cm:folder\",   \"targets\":     [ {\"targetId\":\"abcde-01234-...\", \"assocType\":\"my:specialPeerAssocType\"} ] } ```  **Note:** You can create more than one child by  specifying a list of nodes in the JSON body. For example, the following JSON body creates two folders inside the specified **nodeId**, if the **nodeId** identifies a folder:  ```JSON [   {     \"name\":\"My Folder 1\",     \"nodeType\":\"cm:folder\"   },   {     \"name\":\"My Folder 2\",     \"nodeType\":\"cm:folder\"   } ] ``` If you specify a list as input, then a paginated list rather than an entry is returned in the response body. For example:  ```JSON {   \"list\": {     \"pagination\": {       \"count\": 2,       \"hasMoreItems\": false,       \"totalItems\": 2,       \"skipCount\": 0,       \"maxItems\": 100     },     \"entries\": [       {         \"entry\": {           ...         }       },       {         \"entry\": {           ...         }       }     ]   } } ```

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
Alfresco\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Alfresco\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Alfresco\Api\NodesApi();
$node_id = "node_id_example"; // string | The identifier of a node. You can also use one of these well-known aliases: * -my- * -shared- * -root-
$node_body_create = new \Alfresco\Model\NodeBodyCreate(); // \Alfresco\Model\NodeBodyCreate | The node information to create.
$auto_rename = true; // bool | If true, then  a name clash will cause an attempt to auto rename by finding a unique name using an integer suffix.
$include = array("include_example"); // string[] | Returns additional information about the node. The following optional fields can be requested: * allowableOperations * association * isLink * isLocked * path * permissions
$fields = array("fields_example"); // string[] | A list of field names.  You can use this parameter to restrict the fields returned within a response if, for example, you want to save on overall bandwidth.  The list applies to a returned individual entity or entries within a collection.  If the API method also supports the **include** parameter, then the fields specified in the **include** parameter are returned in addition to those specified in the **fields** parameter.

try {
    $result = $api_instance->createNode($node_id, $node_body_create, $auto_rename, $include, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NodesApi->createNode: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **node_id** | **string**| The identifier of a node. You can also use one of these well-known aliases: * -my- * -shared- * -root- |
 **node_body_create** | [**\Alfresco\Model\NodeBodyCreate**](../Model/NodeBodyCreate.md)| The node information to create. |
 **auto_rename** | **bool**| If true, then  a name clash will cause an attempt to auto rename by finding a unique name using an integer suffix. | [optional]
 **include** | [**string[]**](../Model/string.md)| Returns additional information about the node. The following optional fields can be requested: * allowableOperations * association * isLink * isLocked * path * permissions | [optional]
 **fields** | [**string[]**](../Model/string.md)| A list of field names.  You can use this parameter to restrict the fields returned within a response if, for example, you want to save on overall bandwidth.  The list applies to a returned individual entity or entries within a collection.  If the API method also supports the **include** parameter, then the fields specified in the **include** parameter are returned in addition to those specified in the **fields** parameter. | [optional]

### Return type

[**\Alfresco\Model\NodeEntry**](../Model/NodeEntry.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json, multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createSecondaryChildAssocation**
> \Alfresco\Model\ChildAssociationEntry createSecondaryChildAssocation($node_id, $secondary_child_association_body_create, $fields)

Create secondary child

**Note:** this endpoint is available in Alfresco 5.2 and newer versions.  Create a secondary child association, with the given association type, between the parent **nodeId** and a child node.  **Note:** You can create more than one secondary child association by  specifying a list of associations in the JSON body like this:  ```JSON [   {     \"childId\": \"string\",     \"assocType\": \"string\"   },   {     \"childId\": \"string\",     \"assocType\": \"string\"   } ] ``` If you specify a list as input, then a paginated list rather than an entry is returned in the response body. For example:  ```JSON {   \"list\": {     \"pagination\": {       \"count\": 2,       \"hasMoreItems\": false,       \"totalItems\": 2,       \"skipCount\": 0,       \"maxItems\": 100     },     \"entries\": [       {         \"entry\": {           ...         }       },       {         \"entry\": {           ...         }       }     ]   } } ```

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
Alfresco\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Alfresco\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Alfresco\Api\NodesApi();
$node_id = "node_id_example"; // string | The identifier of a parent node.
$secondary_child_association_body_create = new \Alfresco\Model\ChildAssociationBody(); // \Alfresco\Model\ChildAssociationBody | The child node id and assoc type.
$fields = array("fields_example"); // string[] | A list of field names.  You can use this parameter to restrict the fields returned within a response if, for example, you want to save on overall bandwidth.  The list applies to a returned individual entity or entries within a collection.  If the API method also supports the **include** parameter, then the fields specified in the **include** parameter are returned in addition to those specified in the **fields** parameter.

try {
    $result = $api_instance->createSecondaryChildAssocation($node_id, $secondary_child_association_body_create, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NodesApi->createSecondaryChildAssocation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **node_id** | **string**| The identifier of a parent node. |
 **secondary_child_association_body_create** | [**\Alfresco\Model\ChildAssociationBody**](../Model/ChildAssociationBody.md)| The child node id and assoc type. |
 **fields** | [**string[]**](../Model/string.md)| A list of field names.  You can use this parameter to restrict the fields returned within a response if, for example, you want to save on overall bandwidth.  The list applies to a returned individual entity or entries within a collection.  If the API method also supports the **include** parameter, then the fields specified in the **include** parameter are returned in addition to those specified in the **fields** parameter. | [optional]

### Return type

[**\Alfresco\Model\ChildAssociationEntry**](../Model/ChildAssociationEntry.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteAssocation**
> deleteAssocation($node_id, $target_id, $assoc_type)

Delete node association(s)

**Note:** this endpoint is available in Alfresco 5.2 and newer versions.  Delete an association, or associations, from the source **nodeId* to a target node for the given association type.  If the association type is **not** specified, then all peer associations, of any type, in the direction  from source to target, are deleted.  **Note:** After removal of the peer association, or associations, from source to target, the two nodes may still have peer associations in the other direction.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
Alfresco\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Alfresco\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Alfresco\Api\NodesApi();
$node_id = "node_id_example"; // string | The identifier of a source node.
$target_id = "target_id_example"; // string | The identifier of a target node.
$assoc_type = "assoc_type_example"; // string | Only delete associations of this type.

try {
    $api_instance->deleteAssocation($node_id, $target_id, $assoc_type);
} catch (Exception $e) {
    echo 'Exception when calling NodesApi->deleteAssocation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **node_id** | **string**| The identifier of a source node. |
 **target_id** | **string**| The identifier of a target node. |
 **assoc_type** | **string**| Only delete associations of this type. | [optional]

### Return type

void (empty response body)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteNode**
> deleteNode($node_id, $permanent)

Delete a node

**Note:** this endpoint is available in Alfresco 5.2 and newer versions.  Deletes the node **nodeId**.  If **nodeId** is a folder, then its children are also deleted.  Deleted nodes move to the trashcan unless the **permanent** query parameter is **true** and the current user is the owner of the node or an admin.  Deleting a node deletes it from its primary parent and also from any secondary parents. Peer associations are also deleted, where the deleted  node is either a source or target of an association. This applies recursively to any hierarchy of primary children of the deleted node.   **Note:** If the node is not permanently deleted, and is later successfully restored to its former primary parent, then the primary  child association is restored. This applies recursively for any primary children. No other secondary child associations or  peer associations are restored for any of the nodes in the primary parent-child hierarchy of restored nodes, regardless of whether the original  associations were to nodes inside or outside the restored hierarchy.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
Alfresco\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Alfresco\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Alfresco\Api\NodesApi();
$node_id = "node_id_example"; // string | The identifier of a node.
$permanent = false; // bool | If **true** then the node is deleted permanently, without moving to the trashcan. Only the owner of the node or an admin can permanently delete the node.

try {
    $api_instance->deleteNode($node_id, $permanent);
} catch (Exception $e) {
    echo 'Exception when calling NodesApi->deleteNode: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **node_id** | **string**| The identifier of a node. |
 **permanent** | **bool**| If **true** then the node is deleted permanently, without moving to the trashcan. Only the owner of the node or an admin can permanently delete the node. | [optional] [default to false]

### Return type

void (empty response body)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteSecondaryChildAssocation**
> deleteSecondaryChildAssocation($node_id, $child_id, $assoc_type)

Delete secondary child or children

**Note:** this endpoint is available in Alfresco 5.2 and newer versions.  Delete secondary child associations between the parent **nodeId** and child nodes for the given association type.  If the association type is **not** specified, then all secondary child associations, of any type in the direction  from parent to secondary child, will be deleted. The child will still have a primary parent and may still be associated as a secondary child with other secondary parents.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
Alfresco\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Alfresco\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Alfresco\Api\NodesApi();
$node_id = "node_id_example"; // string | The identifier of a parent node.
$child_id = "child_id_example"; // string | The identifier of a child node.
$assoc_type = "assoc_type_example"; // string | Only delete associations of this type.

try {
    $api_instance->deleteSecondaryChildAssocation($node_id, $child_id, $assoc_type);
} catch (Exception $e) {
    echo 'Exception when calling NodesApi->deleteSecondaryChildAssocation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **node_id** | **string**| The identifier of a parent node. |
 **child_id** | **string**| The identifier of a child node. |
 **assoc_type** | **string**| Only delete associations of this type. | [optional]

### Return type

void (empty response body)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getNode**
> \Alfresco\Model\NodeEntry getNode($node_id, $include, $relative_path, $fields)

Get a node

**Note:** this endpoint is available in Alfresco 5.2 and newer versions.  Get information for node **nodeId**.  You can use the **include** parameter to return additional information.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
Alfresco\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Alfresco\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Alfresco\Api\NodesApi();
$node_id = "node_id_example"; // string | The identifier of a node. You can also use one of these well-known aliases: * -my- * -shared- * -root-
$include = array("include_example"); // string[] | Returns additional information about the node. The following optional fields can be requested: * allowableOperations * association * isLink * isLocked * path * permissions
$relative_path = "relative_path_example"; // string | A path relative to the **nodeId**. If you set this,  information is returned on the node resolved by this path.
$fields = array("fields_example"); // string[] | A list of field names.  You can use this parameter to restrict the fields returned within a response if, for example, you want to save on overall bandwidth.  The list applies to a returned individual entity or entries within a collection.  If the API method also supports the **include** parameter, then the fields specified in the **include** parameter are returned in addition to those specified in the **fields** parameter.

try {
    $result = $api_instance->getNode($node_id, $include, $relative_path, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NodesApi->getNode: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **node_id** | **string**| The identifier of a node. You can also use one of these well-known aliases: * -my- * -shared- * -root- |
 **include** | [**string[]**](../Model/string.md)| Returns additional information about the node. The following optional fields can be requested: * allowableOperations * association * isLink * isLocked * path * permissions | [optional]
 **relative_path** | **string**| A path relative to the **nodeId**. If you set this,  information is returned on the node resolved by this path. | [optional]
 **fields** | [**string[]**](../Model/string.md)| A list of field names.  You can use this parameter to restrict the fields returned within a response if, for example, you want to save on overall bandwidth.  The list applies to a returned individual entity or entries within a collection.  If the API method also supports the **include** parameter, then the fields specified in the **include** parameter are returned in addition to those specified in the **fields** parameter. | [optional]

### Return type

[**\Alfresco\Model\NodeEntry**](../Model/NodeEntry.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getNodeContent**
> getNodeContent($node_id, $attachment, $if_modified_since)

Get node content

**Note:** this endpoint is available in Alfresco 5.2 and newer versions.  Gets the content of the node with identifier **nodeId**.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
Alfresco\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Alfresco\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Alfresco\Api\NodesApi();
$node_id = "node_id_example"; // string | The identifier of a node.
$attachment = true; // bool | **true** enables a web browser to download the file as an attachment. **false** means a web browser may preview the file in a new tab or window, but not download the file.  You can only set this parameter to **false** if the content type of the file is in the supported list; for example, certain image files and PDF files.  If the content type is not supported for preview, then a value of **false**  is ignored, and the attachment will be returned in the response.
$if_modified_since = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Only returns the content if it has been modified since the date provided. Use the date format defined by HTTP. For example, `Wed, 09 Mar 2016 16:56:34 GMT`.

try {
    $api_instance->getNodeContent($node_id, $attachment, $if_modified_since);
} catch (Exception $e) {
    echo 'Exception when calling NodesApi->getNodeContent: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **node_id** | **string**| The identifier of a node. |
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

# **listNodeChildren**
> \Alfresco\Model\NodeChildAssociationPaging listNodeChildren($node_id, $skip_count, $max_items, $order_by, $where, $include, $relative_path, $include_source, $fields)

List node children

**Note:** this endpoint is available in Alfresco 5.2 and newer versions.  Gets a list of children of the parent node **nodeId**.  Minimal information for each child is returned by default.  You can use the **include** parameter to return additional information.  The list of child nodes includes primary children and secondary children, if there are any.  You can use the **include** parameter (include=association) to return child association details  for each child, including the **assocTyp**e and the **isPrimary** flag.  The default sort order for the returned list is for folders to be sorted before files, and by ascending name.  You can override the default using **orderBy** to specify one or more fields to sort by. The default order is always ascending, but you can use an optional **ASC** or **DESC** modifier to specify an ascending or descending sort order.       For example, specifying ```orderBy=name DESC``` returns a mixed folder/file list in descending **name** order.  You can use any of the following fields to order the results: * isFolder * name * mimeType * nodeType * sizeInBytes * modifiedAt * createdAt * modifiedByUser * createdByUser

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
Alfresco\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Alfresco\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Alfresco\Api\NodesApi();
$node_id = "node_id_example"; // string | The identifier of a node. You can also use one of these well-known aliases: * -my- * -shared- * -root-
$skip_count = 0; // int | The number of entities that exist in the collection before those included in this list.  If not supplied then the default value is 0.
$max_items = 100; // int | The maximum number of items to return in the list.  If not supplied then the default value is 100.
$order_by = array("order_by_example"); // string[] | A string to control the order of the entities returned in a list. You can use the **orderBy** parameter to sort the list by one or more fields.  Each field has a default sort order, which is normally ascending order. Read the API method implementation notes above to check if any fields used in this method have a descending default search order.  To sort the entities in a specific order, you can use the **ASC** and **DESC** keywords for any field.
$where = "where_example"; // string | Optionally filter the list. Here are some examples:  *   ```where=(isFolder=true)```  *   ```where=(isFile=true)```  *   ```where=(nodeType='my:specialNodeType')```  *   ```where=(nodeType='my:specialNodeType INCLUDESUBTYPES')```  *   ```where=(isPrimary=true)```  *   ```where=(assocType='my:specialAssocType')```  *   ```where=(isPrimary=false and assocType='my:specialAssocType')```
$include = array("include_example"); // string[] | Returns additional information about the node. The following optional fields can be requested: * allowableOperations * aspectNames * association * isLink * isLocked * path * properties * permissions
$relative_path = "relative_path_example"; // string | Return information on children in the folder resolved by this path. The path is relative to **nodeId**.
$include_source = true; // bool | Also include **source** in addition to **entries** with folder information on the parent node – either the specified parent **nodeId**, or as resolved by **relativePath**.
$fields = array("fields_example"); // string[] | A list of field names.  You can use this parameter to restrict the fields returned within a response if, for example, you want to save on overall bandwidth.  The list applies to a returned individual entity or entries within a collection.  If the API method also supports the **include** parameter, then the fields specified in the **include** parameter are returned in addition to those specified in the **fields** parameter.

try {
    $result = $api_instance->listNodeChildren($node_id, $skip_count, $max_items, $order_by, $where, $include, $relative_path, $include_source, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NodesApi->listNodeChildren: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **node_id** | **string**| The identifier of a node. You can also use one of these well-known aliases: * -my- * -shared- * -root- |
 **skip_count** | **int**| The number of entities that exist in the collection before those included in this list.  If not supplied then the default value is 0. | [optional] [default to 0]
 **max_items** | **int**| The maximum number of items to return in the list.  If not supplied then the default value is 100. | [optional] [default to 100]
 **order_by** | [**string[]**](../Model/string.md)| A string to control the order of the entities returned in a list. You can use the **orderBy** parameter to sort the list by one or more fields.  Each field has a default sort order, which is normally ascending order. Read the API method implementation notes above to check if any fields used in this method have a descending default search order.  To sort the entities in a specific order, you can use the **ASC** and **DESC** keywords for any field. | [optional]
 **where** | **string**| Optionally filter the list. Here are some examples:  *   &#x60;&#x60;&#x60;where&#x3D;(isFolder&#x3D;true)&#x60;&#x60;&#x60;  *   &#x60;&#x60;&#x60;where&#x3D;(isFile&#x3D;true)&#x60;&#x60;&#x60;  *   &#x60;&#x60;&#x60;where&#x3D;(nodeType&#x3D;&#39;my:specialNodeType&#39;)&#x60;&#x60;&#x60;  *   &#x60;&#x60;&#x60;where&#x3D;(nodeType&#x3D;&#39;my:specialNodeType INCLUDESUBTYPES&#39;)&#x60;&#x60;&#x60;  *   &#x60;&#x60;&#x60;where&#x3D;(isPrimary&#x3D;true)&#x60;&#x60;&#x60;  *   &#x60;&#x60;&#x60;where&#x3D;(assocType&#x3D;&#39;my:specialAssocType&#39;)&#x60;&#x60;&#x60;  *   &#x60;&#x60;&#x60;where&#x3D;(isPrimary&#x3D;false and assocType&#x3D;&#39;my:specialAssocType&#39;)&#x60;&#x60;&#x60; | [optional]
 **include** | [**string[]**](../Model/string.md)| Returns additional information about the node. The following optional fields can be requested: * allowableOperations * aspectNames * association * isLink * isLocked * path * properties * permissions | [optional]
 **relative_path** | **string**| Return information on children in the folder resolved by this path. The path is relative to **nodeId**. | [optional]
 **include_source** | **bool**| Also include **source** in addition to **entries** with folder information on the parent node – either the specified parent **nodeId**, or as resolved by **relativePath**. | [optional]
 **fields** | [**string[]**](../Model/string.md)| A list of field names.  You can use this parameter to restrict the fields returned within a response if, for example, you want to save on overall bandwidth.  The list applies to a returned individual entity or entries within a collection.  If the API method also supports the **include** parameter, then the fields specified in the **include** parameter are returned in addition to those specified in the **fields** parameter. | [optional]

### Return type

[**\Alfresco\Model\NodeChildAssociationPaging**](../Model/NodeChildAssociationPaging.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listParents**
> \Alfresco\Model\NodeAssociationPaging listParents($node_id, $where, $include, $skip_count, $max_items, $include_source, $fields)

List parents

**Note:** this endpoint is available in Alfresco 5.2 and newer versions.  Gets a list of parent nodes that are associated with the current child **nodeId**.  The list includes both the primary parent and any secondary parents.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
Alfresco\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Alfresco\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Alfresco\Api\NodesApi();
$node_id = "node_id_example"; // string | The identifier of a child node. You can also use one of these well-known aliases: * -my- * -shared- * -root-
$where = "where_example"; // string | Optionally filter the list by **assocType** and/or **isPrimary**. Here are some example filters:  *   ```where=(assocType='my:specialAssocType')```  *   ```where=(isPrimary=true)```  *   ```where=(isPrimary=false and assocType='my:specialAssocType')```
$include = array("include_example"); // string[] | Returns additional information about the node. The following optional fields can be requested: * allowableOperations * aspectNames * isLink * isLocked * path * properties
$skip_count = 0; // int | The number of entities that exist in the collection before those included in this list.  If not supplied then the default value is 0.
$max_items = 100; // int | The maximum number of items to return in the list.  If not supplied then the default value is 100.
$include_source = true; // bool | Also include **source** (in addition to **entries**) with folder information on **nodeId**
$fields = array("fields_example"); // string[] | A list of field names.  You can use this parameter to restrict the fields returned within a response if, for example, you want to save on overall bandwidth.  The list applies to a returned individual entity or entries within a collection.  If the API method also supports the **include** parameter, then the fields specified in the **include** parameter are returned in addition to those specified in the **fields** parameter.

try {
    $result = $api_instance->listParents($node_id, $where, $include, $skip_count, $max_items, $include_source, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NodesApi->listParents: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **node_id** | **string**| The identifier of a child node. You can also use one of these well-known aliases: * -my- * -shared- * -root- |
 **where** | **string**| Optionally filter the list by **assocType** and/or **isPrimary**. Here are some example filters:  *   &#x60;&#x60;&#x60;where&#x3D;(assocType&#x3D;&#39;my:specialAssocType&#39;)&#x60;&#x60;&#x60;  *   &#x60;&#x60;&#x60;where&#x3D;(isPrimary&#x3D;true)&#x60;&#x60;&#x60;  *   &#x60;&#x60;&#x60;where&#x3D;(isPrimary&#x3D;false and assocType&#x3D;&#39;my:specialAssocType&#39;)&#x60;&#x60;&#x60; | [optional]
 **include** | [**string[]**](../Model/string.md)| Returns additional information about the node. The following optional fields can be requested: * allowableOperations * aspectNames * isLink * isLocked * path * properties | [optional]
 **skip_count** | **int**| The number of entities that exist in the collection before those included in this list.  If not supplied then the default value is 0. | [optional] [default to 0]
 **max_items** | **int**| The maximum number of items to return in the list.  If not supplied then the default value is 100. | [optional] [default to 100]
 **include_source** | **bool**| Also include **source** (in addition to **entries**) with folder information on **nodeId** | [optional]
 **fields** | [**string[]**](../Model/string.md)| A list of field names.  You can use this parameter to restrict the fields returned within a response if, for example, you want to save on overall bandwidth.  The list applies to a returned individual entity or entries within a collection.  If the API method also supports the **include** parameter, then the fields specified in the **include** parameter are returned in addition to those specified in the **fields** parameter. | [optional]

### Return type

[**\Alfresco\Model\NodeAssociationPaging**](../Model/NodeAssociationPaging.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listSecondaryChildren**
> \Alfresco\Model\NodeChildAssociationPaging listSecondaryChildren($node_id, $where, $include, $skip_count, $max_items, $include_source, $fields)

List secondary children

**Note:** this endpoint is available in Alfresco 5.2 and newer versions.  Gets a list of secondary child nodes that are associated with the current parent **nodeId**, via a secondary child association.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
Alfresco\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Alfresco\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Alfresco\Api\NodesApi();
$node_id = "node_id_example"; // string | The identifier of a parent node. You can also use one of these well-known aliases: * -my- * -shared- * -root-
$where = "where_example"; // string | Optionally filter the list by assocType. Here's an example:  *   ```where=(assocType='my:specialAssocType')```
$include = array("include_example"); // string[] | Returns additional information about the node. The following optional fields can be requested: * allowableOperations * aspectNames * isLink * isLocked * path * properties
$skip_count = 0; // int | The number of entities that exist in the collection before those included in this list.  If not supplied then the default value is 0.
$max_items = 100; // int | The maximum number of items to return in the list.  If not supplied then the default value is 100.
$include_source = true; // bool | Also include **source** (in addition to **entries**) with folder information on **nodeId**
$fields = array("fields_example"); // string[] | A list of field names.  You can use this parameter to restrict the fields returned within a response if, for example, you want to save on overall bandwidth.  The list applies to a returned individual entity or entries within a collection.  If the API method also supports the **include** parameter, then the fields specified in the **include** parameter are returned in addition to those specified in the **fields** parameter.

try {
    $result = $api_instance->listSecondaryChildren($node_id, $where, $include, $skip_count, $max_items, $include_source, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NodesApi->listSecondaryChildren: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **node_id** | **string**| The identifier of a parent node. You can also use one of these well-known aliases: * -my- * -shared- * -root- |
 **where** | **string**| Optionally filter the list by assocType. Here&#39;s an example:  *   &#x60;&#x60;&#x60;where&#x3D;(assocType&#x3D;&#39;my:specialAssocType&#39;)&#x60;&#x60;&#x60; | [optional]
 **include** | [**string[]**](../Model/string.md)| Returns additional information about the node. The following optional fields can be requested: * allowableOperations * aspectNames * isLink * isLocked * path * properties | [optional]
 **skip_count** | **int**| The number of entities that exist in the collection before those included in this list.  If not supplied then the default value is 0. | [optional] [default to 0]
 **max_items** | **int**| The maximum number of items to return in the list.  If not supplied then the default value is 100. | [optional] [default to 100]
 **include_source** | **bool**| Also include **source** (in addition to **entries**) with folder information on **nodeId** | [optional]
 **fields** | [**string[]**](../Model/string.md)| A list of field names.  You can use this parameter to restrict the fields returned within a response if, for example, you want to save on overall bandwidth.  The list applies to a returned individual entity or entries within a collection.  If the API method also supports the **include** parameter, then the fields specified in the **include** parameter are returned in addition to those specified in the **fields** parameter. | [optional]

### Return type

[**\Alfresco\Model\NodeChildAssociationPaging**](../Model/NodeChildAssociationPaging.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listSourceAssociations**
> \Alfresco\Model\NodeAssociationPaging listSourceAssociations($node_id, $where, $include, $fields)

List source associations

**Note:** this endpoint is available in Alfresco 5.2 and newer versions.  Gets a list of source nodes that are associated with the current target **nodeId**.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
Alfresco\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Alfresco\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Alfresco\Api\NodesApi();
$node_id = "node_id_example"; // string | The identifier of a target node.
$where = "where_example"; // string | Optionally filter the list by **assocType**. Here's an example:  *   ```where=(assocType='my:specialAssocType')```
$include = array("include_example"); // string[] | Returns additional information about the node. The following optional fields can be requested: * allowableOperations * aspectNames * isLink * isLocked * path * properties
$fields = array("fields_example"); // string[] | A list of field names.  You can use this parameter to restrict the fields returned within a response if, for example, you want to save on overall bandwidth.  The list applies to a returned individual entity or entries within a collection.  If the API method also supports the **include** parameter, then the fields specified in the **include** parameter are returned in addition to those specified in the **fields** parameter.

try {
    $result = $api_instance->listSourceAssociations($node_id, $where, $include, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NodesApi->listSourceAssociations: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **node_id** | **string**| The identifier of a target node. |
 **where** | **string**| Optionally filter the list by **assocType**. Here&#39;s an example:  *   &#x60;&#x60;&#x60;where&#x3D;(assocType&#x3D;&#39;my:specialAssocType&#39;)&#x60;&#x60;&#x60; | [optional]
 **include** | [**string[]**](../Model/string.md)| Returns additional information about the node. The following optional fields can be requested: * allowableOperations * aspectNames * isLink * isLocked * path * properties | [optional]
 **fields** | [**string[]**](../Model/string.md)| A list of field names.  You can use this parameter to restrict the fields returned within a response if, for example, you want to save on overall bandwidth.  The list applies to a returned individual entity or entries within a collection.  If the API method also supports the **include** parameter, then the fields specified in the **include** parameter are returned in addition to those specified in the **fields** parameter. | [optional]

### Return type

[**\Alfresco\Model\NodeAssociationPaging**](../Model/NodeAssociationPaging.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listTargetAssociations**
> \Alfresco\Model\NodeAssociationPaging listTargetAssociations($node_id, $where, $include, $fields)

List target associations

**Note:** this endpoint is available in Alfresco 5.2 and newer versions.  Gets a list of target nodes that are associated with the current source **nodeId**.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
Alfresco\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Alfresco\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Alfresco\Api\NodesApi();
$node_id = "node_id_example"; // string | The identifier of a source node.
$where = "where_example"; // string | Optionally filter the list by **assocType**. Here's an example:  *   ```where=(assocType='my:specialAssocType')```
$include = array("include_example"); // string[] | Returns additional information about the node. The following optional fields can be requested: * allowableOperations * aspectNames * isLink * isLocked * path * properties
$fields = array("fields_example"); // string[] | A list of field names.  You can use this parameter to restrict the fields returned within a response if, for example, you want to save on overall bandwidth.  The list applies to a returned individual entity or entries within a collection.  If the API method also supports the **include** parameter, then the fields specified in the **include** parameter are returned in addition to those specified in the **fields** parameter.

try {
    $result = $api_instance->listTargetAssociations($node_id, $where, $include, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NodesApi->listTargetAssociations: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **node_id** | **string**| The identifier of a source node. |
 **where** | **string**| Optionally filter the list by **assocType**. Here&#39;s an example:  *   &#x60;&#x60;&#x60;where&#x3D;(assocType&#x3D;&#39;my:specialAssocType&#39;)&#x60;&#x60;&#x60; | [optional]
 **include** | [**string[]**](../Model/string.md)| Returns additional information about the node. The following optional fields can be requested: * allowableOperations * aspectNames * isLink * isLocked * path * properties | [optional]
 **fields** | [**string[]**](../Model/string.md)| A list of field names.  You can use this parameter to restrict the fields returned within a response if, for example, you want to save on overall bandwidth.  The list applies to a returned individual entity or entries within a collection.  If the API method also supports the **include** parameter, then the fields specified in the **include** parameter are returned in addition to those specified in the **fields** parameter. | [optional]

### Return type

[**\Alfresco\Model\NodeAssociationPaging**](../Model/NodeAssociationPaging.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **lockNode**
> \Alfresco\Model\NodeEntry lockNode($node_id, $node_body_lock, $include, $fields)

Lock a node

**Note:** this endpoint is available in Alfresco 5.2 and newer versions.  Places a lock on node **nodeId**.  **Note:** you can only lock files. More specifically, a node can only be locked if it is of type `cm:content` or a subtype of `cm:content`.  The lock is owned by the current user, and prevents other users or processes from making updates to the node until the lock is released.    If the **timeToExpire** is not set or is zero, then the lock never expires.  Otherwise, the **timeToExpire** is the number of seconds before the lock expires.    When a lock expires, the lock is released.  If the node is already locked, and the user is the lock owner, then the lock is renewed with the new **timeToExpire**.          By default, a lock is applied that allows the owner to update or delete the node. You can use **type** to change the lock type to one of the following:  * **ALLOW_OWNER_CHANGES** (default) changes to the node can be made only by the lock owner. This enum is the same value as the deprecated WRITE_LOCK described in `org.alfresco.service.cmr.lock.LockType` in the Alfresco Public Java API. This is the default value. * **FULL** no changes by any user are allowed. This enum is the same value as the deprecated READ_ONLY_LOCK described in `org.alfresco.service.cmr.lock.LockType` in the Alfresco Public Java API.  By default, a lock is persisted in the database. You can create a volatile in-memory lock by setting the **lifetime** property to EPHEMERAL. You might choose use EPHEMERAL locks, for example, if you are taking frequent short-term locks that you don't need  to be kept over a restart of the repository. In this case you don't need the  overhead of writing the locks to the database.  If a lock on the node cannot be taken, then an error is returned.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
Alfresco\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Alfresco\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Alfresco\Api\NodesApi();
$node_id = "node_id_example"; // string | The identifier of a node.
$node_body_lock = new \Alfresco\Model\NodeBodyLock(); // \Alfresco\Model\NodeBodyLock | Lock details.
$include = array("include_example"); // string[] | Returns additional information about the node. The following optional fields can be requested: * allowableOperations * association * isLink * isLocked * path * permissions
$fields = array("fields_example"); // string[] | A list of field names.  You can use this parameter to restrict the fields returned within a response if, for example, you want to save on overall bandwidth.  The list applies to a returned individual entity or entries within a collection.  If the API method also supports the **include** parameter, then the fields specified in the **include** parameter are returned in addition to those specified in the **fields** parameter.

try {
    $result = $api_instance->lockNode($node_id, $node_body_lock, $include, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NodesApi->lockNode: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **node_id** | **string**| The identifier of a node. |
 **node_body_lock** | [**\Alfresco\Model\NodeBodyLock**](../Model/NodeBodyLock.md)| Lock details. |
 **include** | [**string[]**](../Model/string.md)| Returns additional information about the node. The following optional fields can be requested: * allowableOperations * association * isLink * isLocked * path * permissions | [optional]
 **fields** | [**string[]**](../Model/string.md)| A list of field names.  You can use this parameter to restrict the fields returned within a response if, for example, you want to save on overall bandwidth.  The list applies to a returned individual entity or entries within a collection.  If the API method also supports the **include** parameter, then the fields specified in the **include** parameter are returned in addition to those specified in the **fields** parameter. | [optional]

### Return type

[**\Alfresco\Model\NodeEntry**](../Model/NodeEntry.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **moveNode**
> \Alfresco\Model\NodeEntry moveNode($node_id, $node_body_move, $include, $fields)

Move a node

**Note:** this endpoint is available in Alfresco 5.2 and newer versions.  Move the node **nodeId** to the parent folder node **targetParentId**.  The **targetParentId** is specified in the in request body.  The moved node retains its name unless you specify a new **name** in the request body.  If the source **nodeId** is a folder, then its children are also moved.  The move will effectively change the primary parent.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
Alfresco\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Alfresco\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Alfresco\Api\NodesApi();
$node_id = "node_id_example"; // string | The identifier of a node.
$node_body_move = new \Alfresco\Model\NodeBodyMove(); // \Alfresco\Model\NodeBodyMove | The targetParentId and, optionally, a new name which should include the file extension.
$include = array("include_example"); // string[] | Returns additional information about the node. The following optional fields can be requested: * allowableOperations * association * isLink * isLocked * path * permissions
$fields = array("fields_example"); // string[] | A list of field names.  You can use this parameter to restrict the fields returned within a response if, for example, you want to save on overall bandwidth.  The list applies to a returned individual entity or entries within a collection.  If the API method also supports the **include** parameter, then the fields specified in the **include** parameter are returned in addition to those specified in the **fields** parameter.

try {
    $result = $api_instance->moveNode($node_id, $node_body_move, $include, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NodesApi->moveNode: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **node_id** | **string**| The identifier of a node. |
 **node_body_move** | [**\Alfresco\Model\NodeBodyMove**](../Model/NodeBodyMove.md)| The targetParentId and, optionally, a new name which should include the file extension. |
 **include** | [**string[]**](../Model/string.md)| Returns additional information about the node. The following optional fields can be requested: * allowableOperations * association * isLink * isLocked * path * permissions | [optional]
 **fields** | [**string[]**](../Model/string.md)| A list of field names.  You can use this parameter to restrict the fields returned within a response if, for example, you want to save on overall bandwidth.  The list applies to a returned individual entity or entries within a collection.  If the API method also supports the **include** parameter, then the fields specified in the **include** parameter are returned in addition to those specified in the **fields** parameter. | [optional]

### Return type

[**\Alfresco\Model\NodeEntry**](../Model/NodeEntry.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **unlockNode**
> \Alfresco\Model\NodeEntry unlockNode($node_id, $include, $fields)

Unlock a node

**Note:** this endpoint is available in Alfresco 5.2 and newer versions.  Deletes a lock on node **nodeId**.  The current user must be the owner of the locks or have admin rights, otherwise an error is returned.  If a lock on the node cannot be released, then an error is returned.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
Alfresco\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Alfresco\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Alfresco\Api\NodesApi();
$node_id = "node_id_example"; // string | The identifier of a node.
$include = array("include_example"); // string[] | Returns additional information about the node. The following optional fields can be requested: * allowableOperations * association * isLink * isLocked * path * permissions
$fields = array("fields_example"); // string[] | A list of field names.  You can use this parameter to restrict the fields returned within a response if, for example, you want to save on overall bandwidth.  The list applies to a returned individual entity or entries within a collection.  If the API method also supports the **include** parameter, then the fields specified in the **include** parameter are returned in addition to those specified in the **fields** parameter.

try {
    $result = $api_instance->unlockNode($node_id, $include, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NodesApi->unlockNode: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **node_id** | **string**| The identifier of a node. |
 **include** | [**string[]**](../Model/string.md)| Returns additional information about the node. The following optional fields can be requested: * allowableOperations * association * isLink * isLocked * path * permissions | [optional]
 **fields** | [**string[]**](../Model/string.md)| A list of field names.  You can use this parameter to restrict the fields returned within a response if, for example, you want to save on overall bandwidth.  The list applies to a returned individual entity or entries within a collection.  If the API method also supports the **include** parameter, then the fields specified in the **include** parameter are returned in addition to those specified in the **fields** parameter. | [optional]

### Return type

[**\Alfresco\Model\NodeEntry**](../Model/NodeEntry.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateNode**
> \Alfresco\Model\NodeEntry updateNode($node_id, $node_body_update, $include, $fields)

Update a node

**Note:** this endpoint is available in Alfresco 5.2 and newer versions.  Updates the node **nodeId**. For example, you can rename a file or folder: ```JSON {   \"name\":\"My new name\" } ``` You can also set or update one or more properties: ```JSON {   \"properties\":   {     \"cm:title\":\"Folder title\"   } } ``` **Note:** setting properties of type d:content and d:category are not supported.  **Note:** if you want to add or remove aspects, then you must use **GET /nodes/{nodeId}** first to get the complete set of *aspectNames*.  You can add (or remove) *locallySet* permissions, if any, in addition to any inherited permissions. You can also optionally disable (or re-enable) inherited permissions via *isInheritanceEnabled* flag: ```JSON {   \"permissions\":     {       \"isInheritanceEnabled\": false,       \"locallySet\":         [           {\"authorityId\": \"GROUP_special\", \"name\": \"Read\", \"accessStatus\":\"DENIED\"},           {\"authorityId\": \"testuser\", \"name\": \"Contributor\", \"accessStatus\":\"ALLOWED\"}         ]     } } ``` **Note:** if you want to add or remove locally set permissions then you must use **GET /nodes/{nodeId}** first to get the complete set of *locallySet* permissions.  **Note:** Currently there is no optimistic locking for updates, so they are applied in \"last one wins\" order.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
Alfresco\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Alfresco\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Alfresco\Api\NodesApi();
$node_id = "node_id_example"; // string | The identifier of a node.
$node_body_update = new \Alfresco\Model\NodeBodyUpdate(); // \Alfresco\Model\NodeBodyUpdate | The node information to update.
$include = array("include_example"); // string[] | Returns additional information about the node. The following optional fields can be requested: * allowableOperations * association * isLink * isLocked * path * permissions
$fields = array("fields_example"); // string[] | A list of field names.  You can use this parameter to restrict the fields returned within a response if, for example, you want to save on overall bandwidth.  The list applies to a returned individual entity or entries within a collection.  If the API method also supports the **include** parameter, then the fields specified in the **include** parameter are returned in addition to those specified in the **fields** parameter.

try {
    $result = $api_instance->updateNode($node_id, $node_body_update, $include, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NodesApi->updateNode: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **node_id** | **string**| The identifier of a node. |
 **node_body_update** | [**\Alfresco\Model\NodeBodyUpdate**](../Model/NodeBodyUpdate.md)| The node information to update. |
 **include** | [**string[]**](../Model/string.md)| Returns additional information about the node. The following optional fields can be requested: * allowableOperations * association * isLink * isLocked * path * permissions | [optional]
 **fields** | [**string[]**](../Model/string.md)| A list of field names.  You can use this parameter to restrict the fields returned within a response if, for example, you want to save on overall bandwidth.  The list applies to a returned individual entity or entries within a collection.  If the API method also supports the **include** parameter, then the fields specified in the **include** parameter are returned in addition to those specified in the **fields** parameter. | [optional]

### Return type

[**\Alfresco\Model\NodeEntry**](../Model/NodeEntry.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateNodeContent**
> \Alfresco\Model\NodeEntry updateNodeContent($node_id, $content_body_update, $major_version, $comment, $name, $include, $fields)

Update node content

**Note:** this endpoint is available in Alfresco 5.2 and newer versions.  Updates the content of the node with identifier **nodeId**.  The request body for this endpoint can be any text or binary stream.  The **majorVersion** and **comment** parameters can be used to control versioning behaviour. If the content is versionable, a new minor version is created by default.  Optionally a new **name** parameter can also be specified that must be unique within the parent folder. If specified and valid then this  will rename the node. If invalid then an error is returned and the content is not updated.  **Note:** This API method accepts any content type, but for testing with this tool text based content can be provided. This is because the OpenAPI Specification does not allow a wildcard to be provided or the ability for tooling to accept an arbitrary file.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
Alfresco\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Alfresco\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Alfresco\Api\NodesApi();
$node_id = "node_id_example"; // string | The identifier of a node.
$content_body_update = "B"; // string | The binary content
$major_version = false; // bool | If **true**, create a major version. Setting this parameter also enables versioning of this node, if it is not already versioned.
$comment = "comment_example"; // string | Add a version comment which will appear in version history. Setting this parameter also enables versioning of this node, if it is not already versioned.
$name = "name_example"; // string | Optional new name. This should include the file extension. The name must not contain spaces or the following special characters: * \" < > \\ / ? : and |.  The character `.` must not be used at the end of the name.
$include = array("include_example"); // string[] | Returns additional information about the node. The following optional fields can be requested: * allowableOperations * association * isLink * isLocked * path * permissions
$fields = array("fields_example"); // string[] | A list of field names.  You can use this parameter to restrict the fields returned within a response if, for example, you want to save on overall bandwidth.  The list applies to a returned individual entity or entries within a collection.  If the API method also supports the **include** parameter, then the fields specified in the **include** parameter are returned in addition to those specified in the **fields** parameter.

try {
    $result = $api_instance->updateNodeContent($node_id, $content_body_update, $major_version, $comment, $name, $include, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NodesApi->updateNodeContent: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **node_id** | **string**| The identifier of a node. |
 **content_body_update** | **string**| The binary content |
 **major_version** | **bool**| If **true**, create a major version. Setting this parameter also enables versioning of this node, if it is not already versioned. | [optional] [default to false]
 **comment** | **string**| Add a version comment which will appear in version history. Setting this parameter also enables versioning of this node, if it is not already versioned. | [optional]
 **name** | **string**| Optional new name. This should include the file extension. The name must not contain spaces or the following special characters: * \&quot; &lt; &gt; \\ / ? : and |.  The character &#x60;.&#x60; must not be used at the end of the name. | [optional]
 **include** | [**string[]**](../Model/string.md)| Returns additional information about the node. The following optional fields can be requested: * allowableOperations * association * isLink * isLocked * path * permissions | [optional]
 **fields** | [**string[]**](../Model/string.md)| A list of field names.  You can use this parameter to restrict the fields returned within a response if, for example, you want to save on overall bandwidth.  The list applies to a returned individual entity or entries within a collection.  If the API method also supports the **include** parameter, then the fields specified in the **include** parameter are returned in addition to those specified in the **fields** parameter. | [optional]

### Return type

[**\Alfresco\Model\NodeEntry**](../Model/NodeEntry.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/octet-stream
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

