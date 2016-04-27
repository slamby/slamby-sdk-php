# Swagger\Client\DocumentApi

All URIs are relative to *https://localhost/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**bulkDocuments**](DocumentApi.md#bulkDocuments) | **POST** /api/Documents/Bulk | 
[**copyDocuments**](DocumentApi.md#copyDocuments) | **POST** /api/Documents/Copy | 
[**createDocument**](DocumentApi.md#createDocument) | **POST** /api/Documents | 
[**deleteDocument**](DocumentApi.md#deleteDocument) | **DELETE** /api/Documents/{id} | 
[**getDocument**](DocumentApi.md#getDocument) | **GET** /api/Documents/{id} | 
[**getFilteredDocuments**](DocumentApi.md#getFilteredDocuments) | **POST** /api/Documents/Filter | 
[**getSampleDocuments**](DocumentApi.md#getSampleDocuments) | **POST** /api/Documents/Sample | 
[**moveDocuments**](DocumentApi.md#moveDocuments) | **POST** /api/Documents/Move | 
[**updateDocument**](DocumentApi.md#updateDocument) | **PUT** /api/Documents/{id} | 




# **bulkDocuments**
> \Swagger\Client\Model\BulkResults bulkDocuments($settings)



### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$api_instance = new Swagger\Client\Api\DocumentApi();
$settings = new \Swagger\Client\Model\DocumentBulkSettings(); // \Swagger\Client\Model\DocumentBulkSettings | 


try { 
    $result = $api_instance->bulkDocuments($settings);
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


### Return type

[**\Swagger\Client\Model\BulkResults**](BulkResults.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)


# **copyDocuments**
> copyDocuments($copy_settings)



### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$api_instance = new Swagger\Client\Api\DocumentApi();
$copy_settings = new \Swagger\Client\Model\DocumentCopySettings(); // \Swagger\Client\Model\DocumentCopySettings | 


try { 
    $api_instance->copyDocuments($copy_settings);
} catch (Exception $e) {
    echo 'Exception when calling DocumentApi->copyDocuments: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **copy_settings** | [**\Swagger\Client\Model\DocumentCopySettings**](\Swagger\Client\Model\DocumentCopySettings.md)|  | [optional] 


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
$document = new \Swagger\Client\Model\Object(); // \Swagger\Client\Model\Object | 


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
 **document** | [**\Swagger\Client\Model\Object**](\Swagger\Client\Model\Object.md)|  | [optional] 


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
> \Swagger\Client\Model\Object getDocument($id)



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

[**\Swagger\Client\Model\Object**](Object.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)


# **getFilteredDocuments**
> \Swagger\Client\Model\PaginatedListObject getFilteredDocuments($filter_settings)



### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$api_instance = new Swagger\Client\Api\DocumentApi();
$filter_settings = new \Swagger\Client\Model\DocumentFilterSettings(); // \Swagger\Client\Model\DocumentFilterSettings | 


try { 
    $result = $api_instance->getFilteredDocuments($filter_settings);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentApi->getFilteredDocuments: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
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
> \Swagger\Client\Model\PaginatedListObject getSampleDocuments($sample_settings)



### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$api_instance = new Swagger\Client\Api\DocumentApi();
$sample_settings = new \Swagger\Client\Model\DocumentSampleSettings(); // \Swagger\Client\Model\DocumentSampleSettings | 


try { 
    $result = $api_instance->getSampleDocuments($sample_settings);
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


### Return type

[**\Swagger\Client\Model\PaginatedListObject**](PaginatedListObject.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)


# **moveDocuments**
> moveDocuments($move_settings)



### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$api_instance = new Swagger\Client\Api\DocumentApi();
$move_settings = new \Swagger\Client\Model\DocumentMoveSettings(); // \Swagger\Client\Model\DocumentMoveSettings | 


try { 
    $api_instance->moveDocuments($move_settings);
} catch (Exception $e) {
    echo 'Exception when calling DocumentApi->moveDocuments: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **move_settings** | [**\Swagger\Client\Model\DocumentMoveSettings**](\Swagger\Client\Model\DocumentMoveSettings.md)|  | [optional] 


### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)


# **updateDocument**
> \Swagger\Client\Model\Object updateDocument($id, $document)



### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$api_instance = new Swagger\Client\Api\DocumentApi();
$id = "id_example"; // string | 
$document = new \Swagger\Client\Model\Object(); // \Swagger\Client\Model\Object | 


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
 **document** | [**\Swagger\Client\Model\Object**](\Swagger\Client\Model\Object.md)|  | [optional] 


### Return type

[**\Swagger\Client\Model\Object**](Object.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)



