# Version

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** |  | 
**version_comment** | **string** |  | [optional] 
**name** | **string** | The name must not contain spaces or the following special characters: * \&quot; &lt; &gt; \\ / ? : and |.  The character . must not be used at the end of the name. | 
**node_type** | **string** |  | 
**is_folder** | **bool** |  | 
**is_file** | **bool** |  | 
**modified_at** | [**\DateTime**](\DateTime.md) |  | 
**modified_by_user** | [**\Alfresco\Core\Model\UserInfo**](UserInfo.md) |  | 
**content** | [**\Alfresco\Core\Model\ContentInfo**](ContentInfo.md) |  | [optional] 
**aspect_names** | **string[]** |  | [optional] 
**properties** | **map[string,string]** |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


