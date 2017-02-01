# AutoCompleteSettings

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**confidence** | **double** | The confidence level defines a factor applied to the input phrases score which is used as a threshold for other suggest candidates. Only candidates that score higher than the threshold will be included in the result. For instance a confidence level of 1.0 will only return suggestions that score higher than the input phrase. If set to 0.0 the top N candidates are returned. The default is 1.0. | [optional] 
**maximum_errors** | **double** | The maximum percentage of the terms that at most considered to be misspellings in order to form a correction. This method accepts a float value in the range [0..1) as a fraction of the actual query terms or a number &amp;gt;=1 as an absolute number of query terms. The default is set to 1.0 which corresponds to that only corrections with at most 1 misspelled term are returned | [optional] 
**count** | **int** | The number of candidates that are generated for each individual query term. Low numbers like 3 or 5 typically produce good results. Raising this can bring up terms with higher edit distances | [optional] 


[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


