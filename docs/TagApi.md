# Swagger\Client\TagApi

All URIs are relative to *https://localhost/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**bulkTags**](TagApi.md#bulkTags) | **POST** /api/Tags/Bulk | 
[**cleanDocuments**](TagApi.md#cleanDocuments) | **POST** /api/Tags/CleanDocuments | 
[**createTag**](TagApi.md#createTag) | **POST** /api/Tags | 
[**deleteTag**](TagApi.md#deleteTag) | **DELETE** /api/Tags/{id} | 
[**getTag**](TagApi.md#getTag) | **GET** /api/Tags/{id} | 
[**getTags**](TagApi.md#getTags) | **GET** /api/Tags | 
[**updateTag**](TagApi.md#updateTag) | **PUT** /api/Tags/{id} | 
[**wordsExport**](TagApi.md#wordsExport) | **POST** /api/Tags/ExportWords | 




# **bulkTags**
> \Swagger\Client\Model\BulkResults bulkTags($settings)



### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$api_instance = new Swagger\Client\Api\TagApi();
$settings = new \Swagger\Client\Model\TagBulkSettings(); // \Swagger\Client\Model\TagBulkSettings | 


try { 
    $result = $api_instance->bulkTags($settings);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TagApi->bulkTags: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **settings** | [**\Swagger\Client\Model\TagBulkSettings**](\Swagger\Client\Model\TagBulkSettings.md)|  | [optional] 


### Return type

[**\Swagger\Client\Model\BulkResults**](BulkResults.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/json-patch+json
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)


# **cleanDocuments**
> cleanDocuments()



### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$api_instance = new Swagger\Client\Api\TagApi();


try { 
    $api_instance->cleanDocuments();
} catch (Exception $e) {
    echo 'Exception when calling TagApi->cleanDocuments: ', $e->getMessage(), "\n";
}
?>
```

### Parameters
This endpoint does not need any parameter.


### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)


# **createTag**
> \Swagger\Client\Model\Tag createTag($tag)



### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$api_instance = new Swagger\Client\Api\TagApi();
$tag = new \Swagger\Client\Model\Tag(); // \Swagger\Client\Model\Tag | 


try { 
    $result = $api_instance->createTag($tag);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TagApi->createTag: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **tag** | [**\Swagger\Client\Model\Tag**](\Swagger\Client\Model\Tag.md)|  | [optional] 


### Return type

[**\Swagger\Client\Model\Tag**](Tag.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/json-patch+json
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)


# **deleteTag**
> deleteTag($id, $force, $clean_documents)



### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$api_instance = new Swagger\Client\Api\TagApi();
$id = "id_example"; // string | 
$force = true; // bool | 
$clean_documents = true; // bool | 


try { 
    $api_instance->deleteTag($id, $force, $clean_documents);
} catch (Exception $e) {
    echo 'Exception when calling TagApi->deleteTag: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  | 
 **force** | **bool**|  | [optional] 
 **clean_documents** | **bool**|  | [optional] 


### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)


# **getTag**
> \Swagger\Client\Model\Tag getTag($id, $with_details)



### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$api_instance = new Swagger\Client\Api\TagApi();
$id = "id_example"; // string | 
$with_details = true; // bool | 


try { 
    $result = $api_instance->getTag($id, $with_details);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TagApi->getTag: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  | 
 **with_details** | **bool**|  | [optional] 


### Return type

[**\Swagger\Client\Model\Tag**](Tag.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)


# **getTags**
> \Swagger\Client\Model\Tag[] getTags($with_details)



### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$api_instance = new Swagger\Client\Api\TagApi();
$with_details = true; // bool | 


try { 
    $result = $api_instance->getTags($with_details);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TagApi->getTags: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **with_details** | **bool**|  | [optional] 


### Return type

[**\Swagger\Client\Model\Tag[]**](Tag.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)


# **updateTag**
> updateTag($id, $tag)



### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$api_instance = new Swagger\Client\Api\TagApi();
$id = "id_example"; // string | 
$tag = new \Swagger\Client\Model\Tag(); // \Swagger\Client\Model\Tag | 


try { 
    $api_instance->updateTag($id, $tag);
} catch (Exception $e) {
    echo 'Exception when calling TagApi->updateTag: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  | 
 **tag** | [**\Swagger\Client\Model\Tag**](\Swagger\Client\Model\Tag.md)|  | [optional] 


### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/json-patch+json
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)


# **wordsExport**
> \Swagger\Client\Model\Process wordsExport($settings)



### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$api_instance = new Swagger\Client\Api\TagApi();
$settings = new \Swagger\Client\Model\TagsExportWordsSettings(); // \Swagger\Client\Model\TagsExportWordsSettings | 


try { 
    $result = $api_instance->wordsExport($settings);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TagApi->wordsExport: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **settings** | [**\Swagger\Client\Model\TagsExportWordsSettings**](\Swagger\Client\Model\TagsExportWordsSettings.md)|  | [optional] 


### Return type

[**\Swagger\Client\Model\Process**](Process.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/json-patch+json
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)



