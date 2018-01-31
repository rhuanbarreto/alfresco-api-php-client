# RequestHighlight

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**prefix** | **string** | The string used to mark the start of a highlight in a fragment. | [optional] 
**postfix** | **string** | The string used to mark the end of a highlight in a fragment. | [optional] 
**snippet_count** | **int** | The maximum number of distinct highlight snippets to return for each highlight field. | [optional] 
**fragment_size** | **int** | The character length of each snippet. | [optional] 
**max_analyzed_chars** | **int** | The number of characters to be considered for highlighting. Matches after this count will not be shown. | [optional] 
**merge_contiguous** | **bool** | If fragments over lap they can be  merged into one larger fragment | [optional] 
**use_phrase_highlighter** | **bool** | Should phrases be identified. | [optional] 
**fields** | [**\Alfresco\Model\RequestHighlightFields[]**](RequestHighlightFields.md) | The fields to highlight and field specific configuration properties for each field | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


