# Swagger\Client\ClassifierServiceApi

All URIs are relative to *https://localhost/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**classifierActivateService**](ClassifierServiceApi.md#classifierActivateService) | **POST** /api/Services/Classifier/{id}/Activate | 
[**classifierDeactivateService**](ClassifierServiceApi.md#classifierDeactivateService) | **POST** /api/Services/Classifier/{id}/Deactivate | 
[**classifierExportDictionaries**](ClassifierServiceApi.md#classifierExportDictionaries) | **POST** /api/Services/Classifier/{id}/ExportDictionaries | 
[**classifierGetService**](ClassifierServiceApi.md#classifierGetService) | **GET** /api/Services/Classifier/{id} | 
[**classifierPrepareService**](ClassifierServiceApi.md#classifierPrepareService) | **POST** /api/Services/Classifier/{id}/Prepare | 
[**classifierRecommendService**](ClassifierServiceApi.md#classifierRecommendService) | **POST** /api/Services/Classifier/{id}/Recommend | 




# **classifierActivateService**
> \Swagger\Client\Model\Process classifierActivateService($id, $classifier_activate_settings)



### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$api_instance = new Swagger\Client\Api\ClassifierServiceApi();
$id = "id_example"; // string | 
$classifier_activate_settings = new \Swagger\Client\Model\ClassifierActivateSettings(); // \Swagger\Client\Model\ClassifierActivateSettings | 


try { 
    $result = $api_instance->classifierActivateService($id, $classifier_activate_settings);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClassifierServiceApi->classifierActivateService: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  | 
 **classifier_activate_settings** | [**\Swagger\Client\Model\ClassifierActivateSettings**](\Swagger\Client\Model\ClassifierActivateSettings.md)|  | [optional] 


### Return type

[**\Swagger\Client\Model\Process**](Process.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/json-patch+json
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)


# **classifierDeactivateService**
> classifierDeactivateService($id)



### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$api_instance = new Swagger\Client\Api\ClassifierServiceApi();
$id = "id_example"; // string | 


try { 
    $api_instance->classifierDeactivateService($id);
} catch (Exception $e) {
    echo 'Exception when calling ClassifierServiceApi->classifierDeactivateService: ', $e->getMessage(), "\n";
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


# **classifierExportDictionaries**
> \Swagger\Client\Model\Process classifierExportDictionaries($id, $settings)



### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$api_instance = new Swagger\Client\Api\ClassifierServiceApi();
$id = "id_example"; // string | 
$settings = new \Swagger\Client\Model\ExportDictionariesSettings(); // \Swagger\Client\Model\ExportDictionariesSettings | 


try { 
    $result = $api_instance->classifierExportDictionaries($id, $settings);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClassifierServiceApi->classifierExportDictionaries: ', $e->getMessage(), "\n";
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


# **classifierGetService**
> \Swagger\Client\Model\ClassifierService classifierGetService($id)



### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$api_instance = new Swagger\Client\Api\ClassifierServiceApi();
$id = "id_example"; // string | 


try { 
    $result = $api_instance->classifierGetService($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClassifierServiceApi->classifierGetService: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  | 


### Return type

[**\Swagger\Client\Model\ClassifierService**](ClassifierService.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)


# **classifierPrepareService**
> \Swagger\Client\Model\Process classifierPrepareService($id, $classifier_prepare_settings)



### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$api_instance = new Swagger\Client\Api\ClassifierServiceApi();
$id = "id_example"; // string | 
$classifier_prepare_settings = new \Swagger\Client\Model\ClassifierPrepareSettings(); // \Swagger\Client\Model\ClassifierPrepareSettings | 


try { 
    $result = $api_instance->classifierPrepareService($id, $classifier_prepare_settings);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClassifierServiceApi->classifierPrepareService: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  | 
 **classifier_prepare_settings** | [**\Swagger\Client\Model\ClassifierPrepareSettings**](\Swagger\Client\Model\ClassifierPrepareSettings.md)|  | [optional] 


### Return type

[**\Swagger\Client\Model\Process**](Process.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/json-patch+json
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)


# **classifierRecommendService**
> \Swagger\Client\Model\ClassifierRecommendationResult[] classifierRecommendService($id, $request)



### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$api_instance = new Swagger\Client\Api\ClassifierServiceApi();
$id = "id_example"; // string | 
$request = new \Swagger\Client\Model\ClassifierRecommendationRequest(); // \Swagger\Client\Model\ClassifierRecommendationRequest | 


try { 
    $result = $api_instance->classifierRecommendService($id, $request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClassifierServiceApi->classifierRecommendService: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  | 
 **request** | [**\Swagger\Client\Model\ClassifierRecommendationRequest**](\Swagger\Client\Model\ClassifierRecommendationRequest.md)|  | [optional] 


### Return type

[**\Swagger\Client\Model\ClassifierRecommendationResult[]**](ClassifierRecommendationResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/json-patch+json
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)



