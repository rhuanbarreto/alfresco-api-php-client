# RequestDefaults

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**text_attributes** | **string[]** | A list of query fields/properties used to expand TEXT: queries. The default is cm:content. You could include all content properties using d:content or list all individual content properties or types. As more terms are included the query size, complexity, memory impact and query time will increase. | [optional] 
**default_fts_operator** | **string** | The default way to combine query parts when AND or OR is not explicitly stated - includes ! - + one two three (one two three) | [optional] [default to 'AND']
**default_fts_field_operator** | **string** | The default way to combine query parts in field query groups when AND or OR is not explicitly stated - includes ! - + FIELD:(one two three) | [optional] [default to 'AND']
**namespace** | **string** | The default name space to use if one is not provided | [optional] [default to 'cm']
**default_field_name** | **string** |  | [optional] [default to 'TEXT']

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


