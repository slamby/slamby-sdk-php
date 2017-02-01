# SearchSettings

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**filter** | [**\Swagger\Client\Model\Filter**](Filter.md) | The Filter settings | [optional] 
**use_default_filter** | **bool** | When you activate a Search service with a Filter, you can use this property to control if you want to use that &#39;default filter&#39; during each searches | [optional] 
**weights** | [**\Swagger\Client\Model\Weight[]**](Weight.md) | Can use each available dataset field, a preferred value and a weighted score between 0 and 10 to boost the result | [optional] 
**use_default_weights** | **bool** | When you activate a Search service with Weights, you can use this property to control if you want to use that &#39;default weights&#39; during each searches | [optional] 
**response_field_list** | **string[]** | Which dataset fields must be in the search response | [optional] 
**search_field_list** | **string[]** | In which fields you would liket to search. The list can contains boosts. For example: title^2  which means matches on the title field will have twice the weight as those on the other fields | [optional] 
**type** | **string** | The type of the search. Can be MATCH (default) which means a simple word based search or can be QUERY which means you can use expressions in the query, like in the [QueryString Query](https://www.elastic.co/guide/en/elasticsearch/reference/current/query-dsl-query-string-query.html#query-string-syntax) in ElasticSearch | [optional] 
**cut_off_frequency** | **double** | Allows specifying an absolute or relative document frequency where high frequency terms are moved into an optional subquery and are only scored if one of the low frequency (below the cutoff) terms in the case of an OR operator or all of the low frequency terms in the case of an AND operator match | [optional] 
**fuzziness** | **int** | Interpreted as a Levenshtein Edit Distance\u00E2\u20AC\u2030\u00E2\u20AC\u201D\u00E2\u20AC\u2030the number of one character changes that need to be made to one string to make it the same as another string. Can be specified as: -1 (generates an edit distance based on the length of the term) or 0, 1, 2 (the maximum allowed Levenshtein Edit Distance) | [optional] 
**count** | **int** | The maximum number of matches | [optional] 
**operator** | **string** | Can be set to OR or AND to control the operators between the text words\r\nFor example if the operator is AND, and the query is: &#39;white mobilephone&#39; then the &#39;white&#39; AND the &#39;mobilephone&#39; must be match the documents\r\nIf the operator is OR in the same query then one of the query words is enough for a match. Of course if a document matches all the words then that will have a higher score | [optional] 
**order** | [**\Swagger\Client\Model\Order**](Order.md) | You can change the order of the search results. You have to specify a field of the dataset the order (Ascending or Descending)\r\nBe careful with this, if you change the default order then not the most relevant (for the text) documents will be on the top | [optional] 


[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


