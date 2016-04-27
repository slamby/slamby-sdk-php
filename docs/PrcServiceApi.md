# Swagger\Client\PrcServiceApi

All URIs are relative to *https://localhost/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**activateService**](PrcServiceApi.md#activateService) | **POST** /api/Services/Prc/{id}/Activate | 
[**deactivateService**](PrcServiceApi.md#deactivateService) | **POST** /api/Services/Prc/{id}/Deactivate | 
[**exportDictionaries**](PrcServiceApi.md#exportDictionaries) | **POST** /api/Services/Prc/{id}/ExportDictionaries | 
[**getService**](PrcServiceApi.md#getService) | **GET** /api/Services/Prc/{id} | 
[**prepareService**](PrcServiceApi.md#prepareService) | **POST** /api/Services/Prc/{id}/Prepare | 
[**recommendService**](PrcServiceApi.md#recommendService) | **POST** /api/Services/Prc/{id}/Recommend | 




# **activateService**
> activateService($id, $prc_activate_settings)



### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$api_instance = new Swagger\Client\Api\PrcServiceApi();
$id = "id_example"; // string | 
$prc_activate_settings = new \Swagger\Client\Model\PrcActivateSettings(); // \Swagger\Client\Model\PrcActivateSettings | 


try { 
    $api_instance->activateService($id, $prc_activate_settings);
} catch (Exception $e) {
    echo 'Exception when calling PrcServiceApi->activateService: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  | 
 **prc_activate_settings** | [**\Swagger\Client\Model\PrcActivateSettings**](\Swagger\Client\Model\PrcActivateSettings.md)|  | [optional] 


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


$api_instance = new Swagger\Client\Api\PrcServiceApi();
$id = "id_example"; // string | 


try { 
    $api_instance->deactivateService($id);
} catch (Exception $e) {
    echo 'Exception when calling PrcServiceApi->deactivateService: ', $e->getMessage(), "\n";
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


$api_instance = new Swagger\Client\Api\PrcServiceApi();
$id = "id_example"; // string | 
$settings = new \Swagger\Client\Model\ExportDictionariesSettings(); // \Swagger\Client\Model\ExportDictionariesSettings | 


try { 
    $result = $api_instance->exportDictionaries($id, $settings);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PrcServiceApi->exportDictionaries: ', $e->getMessage(), "\n";
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
> \Swagger\Client\Model\PrcService getService($id)



### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$api_instance = new Swagger\Client\Api\PrcServiceApi();
$id = "id_example"; // string | 


try { 
    $result = $api_instance->getService($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PrcServiceApi->getService: ', $e->getMessage(), "\n";
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


# **prepareService**
> \Swagger\Client\Model\Process prepareService($id, $prc_prepare_settings)



### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$api_instance = new Swagger\Client\Api\PrcServiceApi();
$id = "id_example"; // string | 
$prc_prepare_settings = new \Swagger\Client\Model\PrcPrepareSettings(); // \Swagger\Client\Model\PrcPrepareSettings | 


try { 
    $result = $api_instance->prepareService($id, $prc_prepare_settings);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PrcServiceApi->prepareService: ', $e->getMessage(), "\n";
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

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)


# **recommendService**
> \Swagger\Client\Model\PrcRecommendationResult[] recommendService($id, $request)



### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$api_instance = new Swagger\Client\Api\PrcServiceApi();
$id = "id_example"; // string | 
$request = new \Swagger\Client\Model\PrcRecommendationRequest(); // \Swagger\Client\Model\PrcRecommendationRequest | 


try { 
    $result = $api_instance->recommendService($id, $request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PrcServiceApi->recommendService: ', $e->getMessage(), "\n";
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

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)



