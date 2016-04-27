# Swagger\Client\ProcessApi

All URIs are relative to *https://localhost/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**cancelProcess**](ProcessApi.md#cancelProcess) | **POST** /api/Processes/{id}/Cancel | 
[**getProcess**](ProcessApi.md#getProcess) | **GET** /api/Processes/{id} | 
[**getProcesses**](ProcessApi.md#getProcesses) | **GET** /api/Processes | 




# **cancelProcess**
> cancelProcess($id)



### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$api_instance = new Swagger\Client\Api\ProcessApi();
$id = "id_example"; // string | 


try { 
    $api_instance->cancelProcess($id);
} catch (Exception $e) {
    echo 'Exception when calling ProcessApi->cancelProcess: ', $e->getMessage(), "\n";
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


# **getProcess**
> \Swagger\Client\Model\Process getProcess($id)



### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$api_instance = new Swagger\Client\Api\ProcessApi();
$id = "id_example"; // string | 


try { 
    $result = $api_instance->getProcess($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProcessApi->getProcess: ', $e->getMessage(), "\n";
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


# **getProcesses**
> \Swagger\Client\Model\Process[] getProcesses($all_status)



### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$api_instance = new Swagger\Client\Api\ProcessApi();
$all_status = true; // bool | 


try { 
    $result = $api_instance->getProcesses($all_status);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProcessApi->getProcesses: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **all_status** | **bool**|  | [optional] 


### Return type

[**\Swagger\Client\Model\Process[]**](Process.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)



