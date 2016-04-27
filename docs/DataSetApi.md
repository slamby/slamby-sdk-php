# Swagger\Client\DataSetApi

All URIs are relative to *https://localhost/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createDataSet**](DataSetApi.md#createDataSet) | **POST** /api/DataSets | 
[**deleteDataSet**](DataSetApi.md#deleteDataSet) | **DELETE** /api/DataSets/{name} | 
[**getDataSet**](DataSetApi.md#getDataSet) | **GET** /api/DataSets/{name} | 
[**getDataSets**](DataSetApi.md#getDataSets) | **GET** /api/DataSets | 




# **createDataSet**
> createDataSet($data_set)



### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$api_instance = new Swagger\Client\Api\DataSetApi();
$data_set = new \Swagger\Client\Model\DataSet(); // \Swagger\Client\Model\DataSet | 


try { 
    $api_instance->createDataSet($data_set);
} catch (Exception $e) {
    echo 'Exception when calling DataSetApi->createDataSet: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **data_set** | [**\Swagger\Client\Model\DataSet**](\Swagger\Client\Model\DataSet.md)|  | [optional] 


### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)


# **deleteDataSet**
> deleteDataSet($name)



### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$api_instance = new Swagger\Client\Api\DataSetApi();
$name = "name_example"; // string | 


try { 
    $api_instance->deleteDataSet($name);
} catch (Exception $e) {
    echo 'Exception when calling DataSetApi->deleteDataSet: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**|  | 


### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)


# **getDataSet**
> \Swagger\Client\Model\DataSet getDataSet($name)



### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$api_instance = new Swagger\Client\Api\DataSetApi();
$name = "name_example"; // string | 


try { 
    $result = $api_instance->getDataSet($name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataSetApi->getDataSet: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**|  | 


### Return type

[**\Swagger\Client\Model\DataSet**](DataSet.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)


# **getDataSets**
> \Swagger\Client\Model\DataSet[] getDataSets()



### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$api_instance = new Swagger\Client\Api\DataSetApi();


try { 
    $result = $api_instance->getDataSets();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataSetApi->getDataSets: ', $e->getMessage(), "\n";
}
?>
```

### Parameters
This endpoint does not need any parameter.


### Return type

[**\Swagger\Client\Model\DataSet[]**](DataSet.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)



