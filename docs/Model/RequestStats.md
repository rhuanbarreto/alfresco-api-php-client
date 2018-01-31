# RequestStats

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**field** | **string** | The stats field | [optional] 
**label** | **string** | A label to include for reference the stats field | [optional] 
**min** | **bool** | The minimum value of the field | [optional] [default to true]
**max** | **bool** | The maximum value of the field | [optional] [default to true]
**sum** | **bool** | The sum of all values of the field | [optional] [default to true]
**count_values** | **bool** | The number which have a value for this field | [optional] [default to true]
**missing** | **bool** | The number which do not have a value for this field | [optional] [default to true]
**mean** | **bool** | The average | [optional] [default to true]
**stddev** | **bool** | Standard deviation | [optional] [default to true]
**sum_of_squares** | **bool** | Sum of all values squared | [optional] [default to true]
**distinct_values** | **bool** | The set of all distinct values for the field (This can be very expensive to calculate) | [optional] [default to false]
**count_distinct** | **bool** | The number of distinct values  (This can be very expensive to calculate) | [optional] [default to false]
**cardinality** | **bool** | A statistical approximation of the number of distinct values | [optional] [default to false]
**cardinality_accuracy** | **float** | Number between 0.0 and 1.0 indicating how aggressively the algorithm should try to be accurate. Used with boolean cardinality flag. | [optional] [default to 0.3]
**exclude_filters** | **string[]** | A list of filters to exclude | [optional] 
**percentiles** | **float[]** | A list of percentile values, e.g. \&quot;1,99,99.9\&quot; | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


