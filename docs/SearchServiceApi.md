# Swagger\Client\SearchServiceApi

All URIs are relative to *https://localhost/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**searchActivateService**](SearchServiceApi.md#searchActivateService) | **POST** /api/Services/Search/{id}/Activate | 
[**searchDeactivateService**](SearchServiceApi.md#searchDeactivateService) | **POST** /api/Services/Search/{id}/Deactivate | 
[**searchGetService**](SearchServiceApi.md#searchGetService) | **GET** /api/Services/Search/{id} | 
[**searchPrepareService**](SearchServiceApi.md#searchPrepareService) | **POST** /api/Services/Search/{id}/Prepare | 
[**searchService**](SearchServiceApi.md#searchService) | **POST** /api/Services/Search/{id} | 




# **searchActivateService**
> searchActivateService($id, $search_activate_settings)



### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$api_instance = new Swagger\Client\Api\SearchServiceApi();
$id = "id_example"; // string | 
$search_activate_settings = new \Swagger\Client\Model\SearchActivateSettings(); // \Swagger\Client\Model\SearchActivateSettings | 


try { 
    $api_instance->searchActivateService($id, $search_activate_settings);
} catch (Exception $e) {
    echo 'Exception when calling SearchServiceApi->searchActivateService: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  | 
 **search_activate_settings** | [**\Swagger\Client\Model\SearchActivateSettings**](\Swagger\Client\Model\SearchActivateSettings.md)|  | [optional] 


### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/json-patch+json
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)


# **searchDeactivateService**
> searchDeactivateService($id)



### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$api_instance = new Swagger\Client\Api\SearchServiceApi();
$id = "id_example"; // string | 


try { 
    $api_instance->searchDeactivateService($id);
} catch (Exception $e) {
    echo 'Exception when calling SearchServiceApi->searchDeactivateService: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  | 


### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)


# **searchGetService**
> \Swagger\Client\Model\SearchService searchGetService($id)



### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$api_instance = new Swagger\Client\Api\SearchServiceApi();
$id = "id_example"; // string | 


try { 
    $result = $api_instance->searchGetService($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SearchServiceApi->searchGetService: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  | 


### Return type

[**\Swagger\Client\Model\SearchService**](SearchService.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)


# **searchPrepareService**
> searchPrepareService($id, $search_prepare_settings)



### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$api_instance = new Swagger\Client\Api\SearchServiceApi();
$id = "id_example"; // string | 
$search_prepare_settings = new \Swagger\Client\Model\SearchPrepareSettings(); // \Swagger\Client\Model\SearchPrepareSettings | 


try { 
    $api_instance->searchPrepareService($id, $search_prepare_settings);
} catch (Exception $e) {
    echo 'Exception when calling SearchServiceApi->searchPrepareService: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  | 
 **search_prepare_settings** | [**\Swagger\Client\Model\SearchPrepareSettings**](\Swagger\Client\Model\SearchPrepareSettings.md)|  | [optional] 


### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/json-patch+json
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)


# **searchService**
> \Swagger\Client\Model\SearchResultWrapper[] searchService($id, $request)



### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$api_instance = new Swagger\Client\Api\SearchServiceApi();
$id = "id_example"; // string | 
$request = new \Swagger\Client\Model\SearchRequest(); // \Swagger\Client\Model\SearchRequest | 


try { 
    $result = $api_instance->searchService($id, $request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SearchServiceApi->searchService: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  | 
 **request** | [**\Swagger\Client\Model\SearchRequest**](\Swagger\Client\Model\SearchRequest.md)|  | [optional] 


### Return type

[**\Swagger\Client\Model\SearchResultWrapper[]**](SearchResultWrapper.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/json-patch+json
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)



