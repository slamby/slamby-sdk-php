# Swagger\Client\ServiceApi

All URIs are relative to *https://localhost/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createService**](ServiceApi.md#createService) | **POST** /api/Services | 
[**deleteService**](ServiceApi.md#deleteService) | **DELETE** /api/Services/{id} | 
[**getService**](ServiceApi.md#getService) | **GET** /api/Services/{id} | 
[**getServices**](ServiceApi.md#getServices) | **GET** /api/Services | 
[**updateService**](ServiceApi.md#updateService) | **PUT** /api/Services/{id} | 




# **createService**
> createService($service)



### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$api_instance = new Swagger\Client\Api\ServiceApi();
$service = new \Swagger\Client\Model\Service(); // \Swagger\Client\Model\Service | 


try { 
    $api_instance->createService($service);
} catch (Exception $e) {
    echo 'Exception when calling ServiceApi->createService: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **service** | [**\Swagger\Client\Model\Service**](\Swagger\Client\Model\Service.md)|  | [optional] 


### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)


# **deleteService**
> deleteService($id)



### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$api_instance = new Swagger\Client\Api\ServiceApi();
$id = "id_example"; // string | 


try { 
    $api_instance->deleteService($id);
} catch (Exception $e) {
    echo 'Exception when calling ServiceApi->deleteService: ', $e->getMessage(), "\n";
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


# **getService**
> \Swagger\Client\Model\Service getService($id)



### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$api_instance = new Swagger\Client\Api\ServiceApi();
$id = "id_example"; // string | 


try { 
    $result = $api_instance->getService($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServiceApi->getService: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  | 


### Return type

[**\Swagger\Client\Model\Service**](Service.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)


# **getServices**
> \Swagger\Client\Model\Service[] getServices()



### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$api_instance = new Swagger\Client\Api\ServiceApi();


try { 
    $result = $api_instance->getServices();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServiceApi->getServices: ', $e->getMessage(), "\n";
}
?>
```

### Parameters
This endpoint does not need any parameter.


### Return type

[**\Swagger\Client\Model\Service[]**](Service.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)


# **updateService**
> \Swagger\Client\Model\Service updateService($id, $service)



### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$api_instance = new Swagger\Client\Api\ServiceApi();
$id = "id_example"; // string | 
$service = new \Swagger\Client\Model\Service(); // \Swagger\Client\Model\Service | 


try { 
    $result = $api_instance->updateService($id, $service);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServiceApi->updateService: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  | 
 **service** | [**\Swagger\Client\Model\Service**](\Swagger\Client\Model\Service.md)|  | [optional] 


### Return type

[**\Swagger\Client\Model\Service**](Service.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)



