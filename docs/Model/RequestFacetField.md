# RequestFacetField

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**field** | **string** | The facet field | [optional] 
**label** | **string** | A label to include in place of the facet field | [optional] 
**prefix** | **string** | Restricts the possible constraints to only indexed values with a specified prefix. | [optional] 
**sort** | **string** |  | [optional] 
**method** | **string** |  | [optional] 
**missing** | **bool** | When true, count results that match the query but which have no facet value for the field (in addition to the Term-based constraints). | [optional] [default to false]
**limit** | **int** |  | [optional] 
**offset** | **int** |  | [optional] 
**mincount** | **int** | The minimum count required for a facet field to be included in the response. | [optional] 
**facet_enum_cache_min_df** | **int** |  | [optional] 
**exclude_filters** | **string[]** | Filter Queries with tags listed here will not be included in facet counts. This is used for multi-select facetting. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


