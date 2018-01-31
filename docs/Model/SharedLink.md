# SharedLink

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** |  | [optional] 
**expires_at** | [**\DateTime**](\DateTime.md) |  | [optional] 
**node_id** | **string** |  | [optional] 
**name** | **string** | The name must not contain spaces or the following special characters: * \&quot; &lt; &gt; \\ / ? : and |.  The character . must not be used at the end of the name. | [optional] 
**title** | **string** |  | [optional] 
**description** | **string** |  | [optional] 
**modified_at** | [**\DateTime**](\DateTime.md) |  | [optional] 
**modified_by_user** | [**\Alfresco\Model\UserInfo**](UserInfo.md) |  | [optional] 
**shared_by_user** | [**\Alfresco\Model\UserInfo**](UserInfo.md) |  | [optional] 
**content** | [**\Alfresco\Model\ContentInfo**](ContentInfo.md) |  | [optional] 
**allowable_operations** | **string[]** | The allowable operations for the Quickshare link itself. See allowableOperationsOnTarget for the allowable operations pertaining to the linked content node. | [optional] 
**allowable_operations_on_target** | **string[]** | The allowable operations for the content node being shared. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


