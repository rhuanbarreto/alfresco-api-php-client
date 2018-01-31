# RequestRange

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**field** | **string** | The name of the field to perform range | [optional] 
**start** | **string** | The start of the range | [optional] 
**end** | **string** | The end of the range | [optional] 
**gap** | **string** | Bucket size | [optional] 
**hardend** | **bool** | If true means that the last bucket will end at “end” even if it is less than “gap” wide. | [optional] 
**other** | **string[]** | before, after, between, non, all | [optional] 
**include** | **string[]** | lower, upper, edge, outer, all | [optional] 
**label** | **string** | A label to include as a pivot reference | [optional] 
**exclude_filters** | **string[]** | Filter queries to exclude when calculating statistics | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


