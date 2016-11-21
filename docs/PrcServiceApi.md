# Swagger\Client\PrcServiceApi

All URIs are relative to *https://localhost/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**prcActivateService**](PrcServiceApi.md#prcActivateService) | **POST** /api/Services/Prc/{id}/Activate | 
[**prcDeactivateService**](PrcServiceApi.md#prcDeactivateService) | **POST** /api/Services/Prc/{id}/Deactivate | 
[**prcExportDictionaries**](PrcServiceApi.md#prcExportDictionaries) | **POST** /api/Services/Prc/{id}/ExportDictionaries | 
[**prcGetService**](PrcServiceApi.md#prcGetService) | **GET** /api/Services/Prc/{id} | 
[**prcIndexPartialService**](PrcServiceApi.md#prcIndexPartialService) | **POST** /api/Services/Prc/{id}/IndexPartial | 
[**prcIndexService**](PrcServiceApi.md#prcIndexService) | **POST** /api/Services/Prc/{id}/Index | 
[**prcKeywordsService**](PrcServiceApi.md#prcKeywordsService) | **POST** /api/Services/Prc/{id}/Keywords | 
[**prcPrepareService**](PrcServiceApi.md#prcPrepareService) | **POST** /api/Services/Prc/{id}/Prepare | 
[**prcRecommendByIdService**](PrcServiceApi.md#prcRecommendByIdService) | **POST** /api/Services/Prc/{id}/RecommendById | 
[**prcRecommendService**](PrcServiceApi.md#prcRecommendService) | **POST** /api/Services/Prc/{id}/Recommend | 




# **prcActivateService**
> \Swagger\Client\Model\Process prcActivateService($id, $prc_activate_settings)



### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$api_instance = new Swagger\Client\Api\PrcServiceApi();
$id = "id_example"; // string | 
$prc_activate_settings = new \Swagger\Client\Model\PrcActivateSettings(); // \Swagger\Client\Model\PrcActivateSettings | 


try { 
    $result = $api_instance->prcActivateService($id, $prc_activate_settings);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PrcServiceApi->prcActivateService: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  | 
 **prc_activate_settings** | [**\Swagger\Client\Model\PrcActivateSettings**](\Swagger\Client\Model\PrcActivateSettings.md)|  | [optional] 


### Return type

[**\Swagger\Client\Model\Process**](Process.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/json-patch+json
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)


# **prcDeactivateService**
> prcDeactivateService($id)



### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$api_instance = new Swagger\Client\Api\PrcServiceApi();
$id = "id_example"; // string | 


try { 
    $api_instance->prcDeactivateService($id);
} catch (Exception $e) {
    echo 'Exception when calling PrcServiceApi->prcDeactivateService: ', $e->getMessage(), "\n";
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


# **prcExportDictionaries**
> \Swagger\Client\Model\Process prcExportDictionaries($id, $settings)



### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$api_instance = new Swagger\Client\Api\PrcServiceApi();
$id = "id_example"; // string | 
$settings = new \Swagger\Client\Model\ExportDictionariesSettings(); // \Swagger\Client\Model\ExportDictionariesSettings | 


try { 
    $result = $api_instance->prcExportDictionaries($id, $settings);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PrcServiceApi->prcExportDictionaries: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  | 
 **settings** | [**\Swagger\Client\Model\ExportDictionariesSettings**](\Swagger\Client\Model\ExportDictionariesSettings.md)|  | [optional] 


### Return type

[**\Swagger\Client\Model\Process**](Process.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/json-patch+json
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)


# **prcGetService**
> \Swagger\Client\Model\PrcService prcGetService($id)



### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$api_instance = new Swagger\Client\Api\PrcServiceApi();
$id = "id_example"; // string | 


try { 
    $result = $api_instance->prcGetService($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PrcServiceApi->prcGetService: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  | 


### Return type

[**\Swagger\Client\Model\PrcService**](PrcService.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)


# **prcIndexPartialService**
> \Swagger\Client\Model\Process prcIndexPartialService($id)



### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$api_instance = new Swagger\Client\Api\PrcServiceApi();
$id = "id_example"; // string | 


try { 
    $result = $api_instance->prcIndexPartialService($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PrcServiceApi->prcIndexPartialService: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  | 


### Return type

[**\Swagger\Client\Model\Process**](Process.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)


# **prcIndexService**
> \Swagger\Client\Model\Process prcIndexService($id, $prc_index_settings)



### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$api_instance = new Swagger\Client\Api\PrcServiceApi();
$id = "id_example"; // string | 
$prc_index_settings = new \Swagger\Client\Model\PrcIndexSettings(); // \Swagger\Client\Model\PrcIndexSettings | 


try { 
    $result = $api_instance->prcIndexService($id, $prc_index_settings);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PrcServiceApi->prcIndexService: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  | 
 **prc_index_settings** | [**\Swagger\Client\Model\PrcIndexSettings**](\Swagger\Client\Model\PrcIndexSettings.md)|  | [optional] 


### Return type

[**\Swagger\Client\Model\Process**](Process.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/json-patch+json
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)


# **prcKeywordsService**
> \Swagger\Client\Model\PrcKeywordsResult[] prcKeywordsService($id, $request, $is_strict)



### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$api_instance = new Swagger\Client\Api\PrcServiceApi();
$id = "id_example"; // string | 
$request = new \Swagger\Client\Model\PrcKeywordsRequest(); // \Swagger\Client\Model\PrcKeywordsRequest | 
$is_strict = true; // bool | 


try { 
    $result = $api_instance->prcKeywordsService($id, $request, $is_strict);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PrcServiceApi->prcKeywordsService: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  | 
 **request** | [**\Swagger\Client\Model\PrcKeywordsRequest**](\Swagger\Client\Model\PrcKeywordsRequest.md)|  | [optional] 
 **is_strict** | **bool**|  | [optional] 


### Return type

[**\Swagger\Client\Model\PrcKeywordsResult[]**](PrcKeywordsResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/json-patch+json
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)


# **prcPrepareService**
> \Swagger\Client\Model\Process prcPrepareService($id, $prc_prepare_settings)



### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$api_instance = new Swagger\Client\Api\PrcServiceApi();
$id = "id_example"; // string | 
$prc_prepare_settings = new \Swagger\Client\Model\PrcPrepareSettings(); // \Swagger\Client\Model\PrcPrepareSettings | 


try { 
    $result = $api_instance->prcPrepareService($id, $prc_prepare_settings);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PrcServiceApi->prcPrepareService: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  | 
 **prc_prepare_settings** | [**\Swagger\Client\Model\PrcPrepareSettings**](\Swagger\Client\Model\PrcPrepareSettings.md)|  | [optional] 


### Return type

[**\Swagger\Client\Model\Process**](Process.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/json-patch+json
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)


# **prcRecommendByIdService**
> \Swagger\Client\Model\PrcRecommendationResult[] prcRecommendByIdService($id, $request)



### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$api_instance = new Swagger\Client\Api\PrcServiceApi();
$id = "id_example"; // string | 
$request = new \Swagger\Client\Model\PrcRecommendationByIdRequest(); // \Swagger\Client\Model\PrcRecommendationByIdRequest | 


try { 
    $result = $api_instance->prcRecommendByIdService($id, $request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PrcServiceApi->prcRecommendByIdService: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  | 
 **request** | [**\Swagger\Client\Model\PrcRecommendationByIdRequest**](\Swagger\Client\Model\PrcRecommendationByIdRequest.md)|  | [optional] 


### Return type

[**\Swagger\Client\Model\PrcRecommendationResult[]**](PrcRecommendationResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/json-patch+json
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)


# **prcRecommendService**
> \Swagger\Client\Model\PrcRecommendationResult[] prcRecommendService($id, $request)



### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$api_instance = new Swagger\Client\Api\PrcServiceApi();
$id = "id_example"; // string | 
$request = new \Swagger\Client\Model\PrcRecommendationRequest(); // \Swagger\Client\Model\PrcRecommendationRequest | 


try { 
    $result = $api_instance->prcRecommendService($id, $request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PrcServiceApi->prcRecommendService: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  | 
 **request** | [**\Swagger\Client\Model\PrcRecommendationRequest**](\Swagger\Client\Model\PrcRecommendationRequest.md)|  | [optional] 


### Return type

[**\Swagger\Client\Model\PrcRecommendationResult[]**](PrcRecommendationResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/json-patch+json
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)



