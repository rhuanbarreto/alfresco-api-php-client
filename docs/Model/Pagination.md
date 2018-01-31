# Pagination

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**count** | **int** | The number of objects in the entries array. | 
**has_more_items** | **bool** | A boolean value which is **true** if there are more entities in the collection beyond those in this response. A true value means a request with a larger value for the **skipCount** or the **maxItems** parameter will return more entities. | 
**total_items** | **int** | An integer describing the total number of entities in the collection. The API might not be able to determine this value, in which case this property will not be present. | [optional] 
**skip_count** | **int** | An integer describing how many entities exist in the collection before those included in this list. If there was no **skipCount** parameter then the  default value is 0. | 
**max_items** | **int** | The value of the **maxItems** parameter used to generate this list. If there was no **maxItems** parameter then the default value is 100. | 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


