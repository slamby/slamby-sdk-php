# Swagger\Client\HelperApi

All URIs are relative to *https://localhost/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**fileParser**](HelperApi.md#fileParser) | **POST** /api/Helper/FileParser | 




# **fileParser**
> \Swagger\Client\Model\FileParserResult fileParser($file_parser)



### Example 
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$api_instance = new Swagger\Client\Api\HelperApi();
$file_parser = new \Swagger\Client\Model\FileParser(); // \Swagger\Client\Model\FileParser | 


try { 
    $result = $api_instance->fileParser($file_parser);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HelperApi->fileParser: ', $e->getMessage(), "\n";
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **file_parser** | [**\Swagger\Client\Model\FileParser**](\Swagger\Client\Model\FileParser.md)|  | [optional] 


### Return type

[**\Swagger\Client\Model\FileParserResult**](FileParserResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)



