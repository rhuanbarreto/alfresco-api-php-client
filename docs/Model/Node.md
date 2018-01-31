# Node

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** |  | 
**name** | **string** | The name must not contain spaces or the following special characters: * \&quot; &lt; &gt; \\ / ? : and |. The character . must not be used at the end of the name. | 
**node_type** | **string** |  | 
**is_folder** | **bool** |  | 
**is_file** | **bool** |  | 
**is_locked** | **bool** |  | [optional] [default to false]
**modified_at** | [**\DateTime**](\DateTime.md) |  | 
**modified_by_user** | [**\Alfresco\Model\UserInfo**](UserInfo.md) |  | 
**created_at** | [**\DateTime**](\DateTime.md) |  | 
**created_by_user** | [**\Alfresco\Model\UserInfo**](UserInfo.md) |  | 
**parent_id** | **string** |  | [optional] 
**is_link** | **bool** |  | [optional] 
**content** | [**\Alfresco\Model\ContentInfo**](ContentInfo.md) |  | [optional] 
**aspect_names** | **string[]** |  | [optional] 
**properties** | **object** |  | [optional] 
**allowable_operations** | **string[]** |  | [optional] 
**path** | [**\Alfresco\Model\PathInfo**](PathInfo.md) |  | [optional] 
**permissions** | [**\Alfresco\Model\PermissionsInfo**](PermissionsInfo.md) |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


