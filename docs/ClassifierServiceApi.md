# Swagger\Client\ClassifierServiceApi

All URIs are relative to *https://localhost/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**activateService**](ClassifierServiceApi.md#activateService) | **POST** /api/Services/Classifier/{id}/Activate | 
[**deactivateService**](ClassifierServiceApi.md#deactivateService) | **POST** /api/Services/Classifier/{id}/Deactivate | 
[**exportDictionaries**](ClassifierServiceApi.md#exportDictionaries) | **POST** /api/Services/Classifier/{id}/ExportDictionaries | 
[**getService**](ClassifierServiceApi.md#getService) | **GET** /api/Services/Classifier/{id} | 
[**prepareService**](ClassifierServiceApi.md#prepareService) | **POST** /api/Services/Classifier/{id}/Prepare | 
[**recommendService**](ClassifierServiceApi.md#recommendService) | **POST** /api/Services/Classifier/{id}/Recommend | 




# **activateService**
> activateService($id, $classifier_activate_settings)



### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$api_instance = new Swagger\Client\Api\ClassifierServiceApi();
$id = "id_example"; // string | 
$classifier_activate_settings = new \Swagger\Client\Model\ClassifierActivateSettings(); // \Swagger\Client\Model\ClassifierActivateSettings | 


try { 
    $api_instance->activateService($id, $classifier_activate_settings);
} catch (Exception $e) {
    echo 'Exception when calling ClassifierServiceApi->activateService: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  | 
 **classifier_activate_settings** | [**\Swagger\Client\Model\ClassifierActivateSettings**](\Swagger\Client\Model\ClassifierActivateSettings.md)|  | [optional] 


### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)


# **deactivateService**
> deactivateService($id)



### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$api_instance = new Swagger\Client\Api\ClassifierServiceApi();
$id = "id_example"; // string | 


try { 
    $api_instance->deactivateService($id);
} catch (Exception $e) {
    echo 'Exception when calling ClassifierServiceApi->deactivateService: ', $e->getMessage(), "\n";
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


# **exportDictionaries**
> \Swagger\Client\Model\Process exportDictionaries($id, $settings)



### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$api_instance = new Swagger\Client\Api\ClassifierServiceApi();
$id = "id_example"; // string | 
$settings = new \Swagger\Client\Model\ExportDictionariesSettings(); // \Swagger\Client\Model\ExportDictionariesSettings | 


try { 
    $result = $api_instance->exportDictionaries($id, $settings);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClassifierServiceApi->exportDictionaries: ', $e->getMessage(), "\n";
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

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)


# **getService**
> \Swagger\Client\Model\ClassifierService getService($id)



### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$api_instance = new Swagger\Client\Api\ClassifierServiceApi();
$id = "id_example"; // string | 


try { 
    $result = $api_instance->getService($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClassifierServiceApi->getService: ', $e->getMessage(), "\n";
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


# **prepareService**
> \Swagger\Client\Model\Process prepareService($id, $classifier_prepare_settings)



### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$api_instance = new Swagger\Client\Api\ClassifierServiceApi();
$id = "id_example"; // string | 
$classifier_prepare_settings = new \Swagger\Client\Model\ClassifierPrepareSettings(); // \Swagger\Client\Model\ClassifierPrepareSettings | 


try { 
    $result = $api_instance->prepareService($id, $classifier_prepare_settings);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClassifierServiceApi->prepareService: ', $e->getMessage(), "\n";
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

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)


# **recommendService**
> \Swagger\Client\Model\ClassifierRecommendationResult[] recommendService($id, $request)



### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$api_instance = new Swagger\Client\Api\ClassifierServiceApi();
$id = "id_example"; // string | 
$request = new \Swagger\Client\Model\ClassifierRecommendationRequest(); // \Swagger\Client\Model\ClassifierRecommendationRequest | 


try { 
    $result = $api_instance->recommendService($id, $request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClassifierServiceApi->recommendService: ', $e->getMessage(), "\n";
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

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)



