# Swagger\Client\LicenseApi

All URIs are relative to *https://localhost/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**changeLicense**](LicenseApi.md#changeLicense) | **POST** /api/License | 
[**getLicense**](LicenseApi.md#getLicense) | **GET** /api/License | 




# **changeLicense**
> changeLicense($model)



### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$api_instance = new Swagger\Client\Api\LicenseApi();
$model = new \Swagger\Client\Model\ChangeLicense(); // \Swagger\Client\Model\ChangeLicense | 


try { 
    $api_instance->changeLicense($model);
} catch (Exception $e) {
    echo 'Exception when calling LicenseApi->changeLicense: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **model** | [**\Swagger\Client\Model\ChangeLicense**](\Swagger\Client\Model\ChangeLicense.md)|  | [optional] 


### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/json-patch+json
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)


# **getLicense**
> \Swagger\Client\Model\License getLicense()



### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$api_instance = new Swagger\Client\Api\LicenseApi();


try { 
    $result = $api_instance->getLicense();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LicenseApi->getLicense: ', $e->getMessage(), "\n";
}
?>
```

### Parameters
This endpoint does not need any parameter.


### Return type

[**\Swagger\Client\Model\License**](License.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)



