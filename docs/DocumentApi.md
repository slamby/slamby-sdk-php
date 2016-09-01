# Swagger\Client\DocumentApi

All URIs are relative to *https://localhost/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**bulkDocuments**](DocumentApi.md#bulkDocuments) | **POST** /api/Documents/Bulk | 
[**copyDocuments**](DocumentApi.md#copyDocuments) | **POST** /api/Documents/Copy | 
[**createDocument**](DocumentApi.md#createDocument) | **POST** /api/Documents | 
[**deleteDocument**](DocumentApi.md#deleteDocument) | **DELETE** /api/Documents/{id} | 
[**getDocument**](DocumentApi.md#getDocument) | **GET** /api/Documents/{id} | 
[**getFilteredDocuments**](DocumentApi.md#getFilteredDocuments) | **POST** /api/Documents/Filter/{scrollId} | 
[**getSampleDocuments**](DocumentApi.md#getSampleDocuments) | **POST** /api/Documents/Sample | 
[**moveDocuments**](DocumentApi.md#moveDocuments) | **POST** /api/Documents/Move | 
[**updateDocument**](DocumentApi.md#updateDocument) | **PUT** /api/Documents/{id} | 




# **bulkDocuments**
> \Swagger\Client\Model\BulkResults bulkDocuments($settings, $x_data_set)



### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$api_instance = new Swagger\Client\Api\DocumentApi();
$settings = new \Swagger\Client\Model\DocumentBulkSettings(); // \Swagger\Client\Model\DocumentBulkSettings | 
$x_data_set = "x_data_set_example"; // string | 


try { 
    $result = $api_instance->bulkDocuments($settings, $x_data_set);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentApi->bulkDocuments: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **settings** | [**\Swagger\Client\Model\DocumentBulkSettings**](\Swagger\Client\Model\DocumentBulkSettings.md)|  | [optional] 
 **x_data_set** | **string**|  | [optional] 


### Return type

[**\Swagger\Client\Model\BulkResults**](BulkResults.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)


# **copyDocuments**
> copyDocuments($copy_settings, $x_data_set)



### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$api_instance = new Swagger\Client\Api\DocumentApi();
$copy_settings = new \Swagger\Client\Model\DocumentCopySettings(); // \Swagger\Client\Model\DocumentCopySettings | 
$x_data_set = "x_data_set_example"; // string | 


try { 
    $api_instance->copyDocuments($copy_settings, $x_data_set);
} catch (Exception $e) {
    echo 'Exception when calling DocumentApi->copyDocuments: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **copy_settings** | [**\Swagger\Client\Model\DocumentCopySettings**](\Swagger\Client\Model\DocumentCopySettings.md)|  | [optional] 
 **x_data_set** | **string**|  | [optional] 


### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)


# **createDocument**
> createDocument($document)



### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$api_instance = new Swagger\Client\Api\DocumentApi();
$document = NULL; // object | 


try { 
    $api_instance->createDocument($document);
} catch (Exception $e) {
    echo 'Exception when calling DocumentApi->createDocument: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **document** | **object**|  | [optional] 


### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)


# **deleteDocument**
> deleteDocument($id)



### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$api_instance = new Swagger\Client\Api\DocumentApi();
$id = "id_example"; // string | 


try { 
    $api_instance->deleteDocument($id);
} catch (Exception $e) {
    echo 'Exception when calling DocumentApi->deleteDocument: ', $e->getMessage(), "\n";
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


# **getDocument**
> object getDocument($id)



### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$api_instance = new Swagger\Client\Api\DocumentApi();
$id = "id_example"; // string | 


try { 
    $result = $api_instance->getDocument($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentApi->getDocument: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  | 


### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)


# **getFilteredDocuments**
> \Swagger\Client\Model\PaginatedListObject getFilteredDocuments($scroll_id, $x_data_set, $filter_settings)



### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$api_instance = new Swagger\Client\Api\DocumentApi();
$scroll_id = "scroll_id_example"; // string | 
$x_data_set = "x_data_set_example"; // string | 
$filter_settings = new \Swagger\Client\Model\DocumentFilterSettings(); // \Swagger\Client\Model\DocumentFilterSettings | 


try { 
    $result = $api_instance->getFilteredDocuments($scroll_id, $x_data_set, $filter_settings);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentApi->getFilteredDocuments: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **scroll_id** | **string**|  | 
 **x_data_set** | **string**|  | [optional] 
 **filter_settings** | [**\Swagger\Client\Model\DocumentFilterSettings**](\Swagger\Client\Model\DocumentFilterSettings.md)|  | [optional] 


### Return type

[**\Swagger\Client\Model\PaginatedListObject**](PaginatedListObject.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)


# **getSampleDocuments**
> \Swagger\Client\Model\PaginatedListObject getSampleDocuments($sample_settings, $x_data_set)



### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$api_instance = new Swagger\Client\Api\DocumentApi();
$sample_settings = new \Swagger\Client\Model\DocumentSampleSettings(); // \Swagger\Client\Model\DocumentSampleSettings | 
$x_data_set = "x_data_set_example"; // string | 


try { 
    $result = $api_instance->getSampleDocuments($sample_settings, $x_data_set);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentApi->getSampleDocuments: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sample_settings** | [**\Swagger\Client\Model\DocumentSampleSettings**](\Swagger\Client\Model\DocumentSampleSettings.md)|  | [optional] 
 **x_data_set** | **string**|  | [optional] 


### Return type

[**\Swagger\Client\Model\PaginatedListObject**](PaginatedListObject.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)


# **moveDocuments**
> moveDocuments($move_settings, $x_data_set)



### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$api_instance = new Swagger\Client\Api\DocumentApi();
$move_settings = new \Swagger\Client\Model\DocumentMoveSettings(); // \Swagger\Client\Model\DocumentMoveSettings | 
$x_data_set = "x_data_set_example"; // string | 


try { 
    $api_instance->moveDocuments($move_settings, $x_data_set);
} catch (Exception $e) {
    echo 'Exception when calling DocumentApi->moveDocuments: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **move_settings** | [**\Swagger\Client\Model\DocumentMoveSettings**](\Swagger\Client\Model\DocumentMoveSettings.md)|  | [optional] 
 **x_data_set** | **string**|  | [optional] 


### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)


# **updateDocument**
> object updateDocument($id, $document)



### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$api_instance = new Swagger\Client\Api\DocumentApi();
$id = "id_example"; // string | 
$document = NULL; // object | 


try { 
    $result = $api_instance->updateDocument($id, $document);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentApi->updateDocument: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  | 
 **document** | **object**|  | [optional] 


### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)



