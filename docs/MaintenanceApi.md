# Swagger\Client\MaintenanceApi

All URIs are relative to *https://localhost/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**changeSecret**](MaintenanceApi.md#changeSecret) | **POST** /api/Maintenance/ChangeSecret | 




# **changeSecret**
> changeSecret($secret)



### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$api_instance = new Swagger\Client\Api\MaintenanceApi();
$secret = new \Swagger\Client\Model\ChangeSecret(); // \Swagger\Client\Model\ChangeSecret | 


try { 
    $api_instance->changeSecret($secret);
} catch (Exception $e) {
    echo 'Exception when calling MaintenanceApi->changeSecret: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **secret** | [**\Swagger\Client\Model\ChangeSecret**](\Swagger\Client\Model\ChangeSecret.md)|  | [optional] 


### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/json-patch+json
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)



