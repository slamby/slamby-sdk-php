# Swagger\Client\StatisticsApi

All URIs are relative to *https://localhost/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getStatistics**](StatisticsApi.md#getStatistics) | **GET** /api/Statistics | 
[**getStatistics_0**](StatisticsApi.md#getStatistics_0) | **GET** /api/Statistics/{year} | 
[**getStatistics_1**](StatisticsApi.md#getStatistics_1) | **GET** /api/Statistics/{year}/{month} | 




# **getStatistics**
> \Swagger\Client\Model\StatisticsWrapper getStatistics()



### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$api_instance = new Swagger\Client\Api\StatisticsApi();


try { 
    $result = $api_instance->getStatistics();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StatisticsApi->getStatistics: ', $e->getMessage(), "\n";
}
?>
```

### Parameters
This endpoint does not need any parameter.


### Return type

[**\Swagger\Client\Model\StatisticsWrapper**](StatisticsWrapper.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)


# **getStatistics_0**
> \Swagger\Client\Model\StatisticsWrapper getStatistics_0($year)



### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$api_instance = new Swagger\Client\Api\StatisticsApi();
$year = 56; // int | 


try { 
    $result = $api_instance->getStatistics_0($year);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StatisticsApi->getStatistics_0: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **year** | **int**|  | 


### Return type

[**\Swagger\Client\Model\StatisticsWrapper**](StatisticsWrapper.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)


# **getStatistics_1**
> \Swagger\Client\Model\StatisticsWrapper getStatistics_1($year, $month)



### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$api_instance = new Swagger\Client\Api\StatisticsApi();
$year = 56; // int | 
$month = 56; // int | 


try { 
    $result = $api_instance->getStatistics_1($year, $month);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StatisticsApi->getStatistics_1: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **year** | **int**|  | 
 **month** | **int**|  | 


### Return type

[**\Swagger\Client\Model\StatisticsWrapper**](StatisticsWrapper.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)



