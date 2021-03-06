# SwaggerClient-php

Slamby API


This PHP package is automatically generated by the modified [Swagger Codegen](https://github.com/slamby/swagger-codegen) project:

- API version: 1.5.0
- Package version: 1.5.1
- Build date: 2017-02-07T12:59:29.743+01:00
- Build package: class io.swagger.codegen.languages.PhpClientCodegen


## Requirements

PHP 5.4.0 and later

## Installation & Usage
### Composer

To install the bindings via [Composer](http://getcomposer.org/), add the following to `composer.json`:

```
{
  "repositories": [
    {
      "type": "git",
      "url": "https://github.com/slamby/slamby-sdk-php.git"
    }
  ],
  "require": {
    "slamby/slamby-sdk-php": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
    require_once('/path/to/SwaggerClient-php/autoload.php');
```

## Tests 

To run the unit tests:

```
composer install
./vendor/bin/phpunit lib/Tests
```

## Getting Started

```php
require 'autoload.php';

use \Swagger\Client\Configuration;
use \Swagger\Client\ApiClient;
use \Swagger\Client\ApiException;
use \Swagger\Client\ObjectSerializer;
use \Swagger\Client\Api;
use \Swagger\Client\Model;

$config = new Configuration();
$config->setHost("http://<api_host>/");
$config->setSSLVerification(false);
$config->addDefaultHeader("Authorization", "Slamby <api_secret>");

$client = new ApiClient($config);
```

Getting DataSet list

```php
$dataSetManager = new Api\DataSetApi($client);
$dataSets = $dataSetManager->getDataSets();
```

Selecting a DataSet for work

```php
$config->addDefaultHeader("X-DataSet", "<my_dataset>");
```

Get Tag list

```php
$tagManager = new Api\TagApi($client);
$tags = $tagManager->getTags();
```

Creating a new Tag

```php
$tag = new Model\Tag();
$tag["id"] = "123";
$tag["name"] = "New tag";

try {
    $tagManager->createTag($tag);
} catch (ApiException $e) {
    print($e->getResponseObject());
}
```

Get a Document

```php
$documentManager = new Api\DocumentApi($client);
$document = $documentManager->getDocument("123456");
```

Update a Document

```php
try {
    $document->language = "hu";
    $documentManager->updateDocument("123456", $document);
} catch (ApiException $e) {
    print($e->getResponseObject());
}
```

## Documentation for API Endpoints

All URIs are relative to *https://localhost/*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*ClassifierServiceApi* | [**classifierActivateService**](docs/ClassifierServiceApi.md#classifieractivateservice) | **POST** /api/Services/Classifier/{id}/Activate | 
*ClassifierServiceApi* | [**classifierDeactivateService**](docs/ClassifierServiceApi.md#classifierdeactivateservice) | **POST** /api/Services/Classifier/{id}/Deactivate | 
*ClassifierServiceApi* | [**classifierExportDictionaries**](docs/ClassifierServiceApi.md#classifierexportdictionaries) | **POST** /api/Services/Classifier/{id}/ExportDictionaries | 
*ClassifierServiceApi* | [**classifierGetService**](docs/ClassifierServiceApi.md#classifiergetservice) | **GET** /api/Services/Classifier/{id} | 
*ClassifierServiceApi* | [**classifierPrepareService**](docs/ClassifierServiceApi.md#classifierprepareservice) | **POST** /api/Services/Classifier/{id}/Prepare | 
*ClassifierServiceApi* | [**classifierRecommendService**](docs/ClassifierServiceApi.md#classifierrecommendservice) | **POST** /api/Services/Classifier/{id}/Recommend | 
*DataSetApi* | [**createDataSet**](docs/DataSetApi.md#createdataset) | **POST** /api/DataSets | 
*DataSetApi* | [**createDataSetSchema**](docs/DataSetApi.md#createdatasetschema) | **POST** /api/DataSets/Schema | 
*DataSetApi* | [**deleteDataSet**](docs/DataSetApi.md#deletedataset) | **DELETE** /api/DataSets/{name} | 
*DataSetApi* | [**getDataSet**](docs/DataSetApi.md#getdataset) | **GET** /api/DataSets/{name} | 
*DataSetApi* | [**getDataSets**](docs/DataSetApi.md#getdatasets) | **GET** /api/DataSets | 
*DataSetApi* | [**updateDataSet**](docs/DataSetApi.md#updatedataset) | **PUT** /api/DataSets/{existingName} | 
*DocumentApi* | [**bulkDocuments**](docs/DocumentApi.md#bulkdocuments) | **POST** /api/Documents/Bulk | 
*DocumentApi* | [**copyDocuments**](docs/DocumentApi.md#copydocuments) | **POST** /api/Documents/Copy | 
*DocumentApi* | [**createDocument**](docs/DocumentApi.md#createdocument) | **POST** /api/Documents | 
*DocumentApi* | [**deleteDocument**](docs/DocumentApi.md#deletedocument) | **DELETE** /api/Documents/{id} | 
*DocumentApi* | [**getDocument**](docs/DocumentApi.md#getdocument) | **GET** /api/Documents/{id} | 
*DocumentApi* | [**getFilteredDocuments**](docs/DocumentApi.md#getfiltereddocuments) | **POST** /api/Documents/Filter/{scrollId} | 
*DocumentApi* | [**getSampleDocuments**](docs/DocumentApi.md#getsampledocuments) | **POST** /api/Documents/Sample | 
*DocumentApi* | [**moveDocuments**](docs/DocumentApi.md#movedocuments) | **POST** /api/Documents/Move | 
*DocumentApi* | [**updateDocument**](docs/DocumentApi.md#updatedocument) | **PUT** /api/Documents/{id} | 
*HelperApi* | [**fileParser**](docs/HelperApi.md#fileparser) | **POST** /api/Helper/FileParser | 
*LicenseApi* | [**changeLicense**](docs/LicenseApi.md#changelicense) | **POST** /api/License | 
*LicenseApi* | [**getLicense**](docs/LicenseApi.md#getlicense) | **GET** /api/License | 
*MaintenanceApi* | [**changeSecret**](docs/MaintenanceApi.md#changesecret) | **POST** /api/Maintenance/ChangeSecret | 
*PrcServiceApi* | [**prcActivateService**](docs/PrcServiceApi.md#prcactivateservice) | **POST** /api/Services/Prc/{id}/Activate | 
*PrcServiceApi* | [**prcDeactivateService**](docs/PrcServiceApi.md#prcdeactivateservice) | **POST** /api/Services/Prc/{id}/Deactivate | 
*PrcServiceApi* | [**prcExportDictionaries**](docs/PrcServiceApi.md#prcexportdictionaries) | **POST** /api/Services/Prc/{id}/ExportDictionaries | 
*PrcServiceApi* | [**prcGetService**](docs/PrcServiceApi.md#prcgetservice) | **GET** /api/Services/Prc/{id} | 
*PrcServiceApi* | [**prcIndexPartialService**](docs/PrcServiceApi.md#prcindexpartialservice) | **POST** /api/Services/Prc/{id}/IndexPartial | 
*PrcServiceApi* | [**prcIndexService**](docs/PrcServiceApi.md#prcindexservice) | **POST** /api/Services/Prc/{id}/Index | 
*PrcServiceApi* | [**prcKeywordsService**](docs/PrcServiceApi.md#prckeywordsservice) | **POST** /api/Services/Prc/{id}/Keywords | 
*PrcServiceApi* | [**prcPrepareService**](docs/PrcServiceApi.md#prcprepareservice) | **POST** /api/Services/Prc/{id}/Prepare | 
*PrcServiceApi* | [**prcRecommendByIdService**](docs/PrcServiceApi.md#prcrecommendbyidservice) | **POST** /api/Services/Prc/{id}/RecommendById | 
*PrcServiceApi* | [**prcRecommendService**](docs/PrcServiceApi.md#prcrecommendservice) | **POST** /api/Services/Prc/{id}/Recommend | 
*ProcessApi* | [**cancelProcess**](docs/ProcessApi.md#cancelprocess) | **POST** /api/Processes/{id}/Cancel | 
*ProcessApi* | [**getProcess**](docs/ProcessApi.md#getprocess) | **GET** /api/Processes/{id} | 
*ProcessApi* | [**getProcesses**](docs/ProcessApi.md#getprocesses) | **GET** /api/Processes | 
*SearchServiceApi* | [**searchActivateService**](docs/SearchServiceApi.md#searchactivateservice) | **POST** /api/Services/Search/{id}/Activate | 
*SearchServiceApi* | [**searchDeactivateService**](docs/SearchServiceApi.md#searchdeactivateservice) | **POST** /api/Services/Search/{id}/Deactivate | 
*SearchServiceApi* | [**searchGetService**](docs/SearchServiceApi.md#searchgetservice) | **GET** /api/Services/Search/{id} | 
*SearchServiceApi* | [**searchPrepareService**](docs/SearchServiceApi.md#searchprepareservice) | **POST** /api/Services/Search/{id}/Prepare | 
*SearchServiceApi* | [**searchService**](docs/SearchServiceApi.md#searchservice) | **POST** /api/Services/Search/{id} | 
*ServiceApi* | [**createService**](docs/ServiceApi.md#createservice) | **POST** /api/Services | 
*ServiceApi* | [**deleteService**](docs/ServiceApi.md#deleteservice) | **DELETE** /api/Services/{id} | 
*ServiceApi* | [**getService**](docs/ServiceApi.md#getservice) | **GET** /api/Services/{id} | 
*ServiceApi* | [**getServices**](docs/ServiceApi.md#getservices) | **GET** /api/Services | 
*ServiceApi* | [**updateService**](docs/ServiceApi.md#updateservice) | **PUT** /api/Services/{id} | 
*StatisticsApi* | [**getStatistics**](docs/StatisticsApi.md#getstatistics) | **GET** /api/Statistics | 
*StatisticsApi* | [**getStatistics_0**](docs/StatisticsApi.md#getstatistics_0) | **GET** /api/Statistics/{year} | 
*StatisticsApi* | [**getStatistics_1**](docs/StatisticsApi.md#getstatistics_1) | **GET** /api/Statistics/{year}/{month} | 
*StatusApi* | [**getStatus**](docs/StatusApi.md#getstatus) | **GET** /api/Status | 
*TagApi* | [**bulkTags**](docs/TagApi.md#bulktags) | **POST** /api/Tags/Bulk | 
*TagApi* | [**cleanDocuments**](docs/TagApi.md#cleandocuments) | **POST** /api/Tags/CleanDocuments | 
*TagApi* | [**createTag**](docs/TagApi.md#createtag) | **POST** /api/Tags | 
*TagApi* | [**deleteTag**](docs/TagApi.md#deletetag) | **DELETE** /api/Tags/{id} | 
*TagApi* | [**getTag**](docs/TagApi.md#gettag) | **GET** /api/Tags/{id} | 
*TagApi* | [**getTags**](docs/TagApi.md#gettags) | **GET** /api/Tags | 
*TagApi* | [**updateTag**](docs/TagApi.md#updatetag) | **PUT** /api/Tags/{id} | 
*TagApi* | [**wordsExport**](docs/TagApi.md#wordsexport) | **POST** /api/Tags/ExportWords | 


## Documentation For Models

 - [Action](docs/Action.md)
 - [AutoCompleteResult](docs/AutoCompleteResult.md)
 - [AutoCompleteSettings](docs/AutoCompleteSettings.md)
 - [BulkResult](docs/BulkResult.md)
 - [BulkResults](docs/BulkResults.md)
 - [ChangeLicense](docs/ChangeLicense.md)
 - [ChangeSecret](docs/ChangeSecret.md)
 - [ClassifierActivateSettings](docs/ClassifierActivateSettings.md)
 - [ClassifierPrepareSettings](docs/ClassifierPrepareSettings.md)
 - [ClassifierRecommendationRequest](docs/ClassifierRecommendationRequest.md)
 - [ClassifierRecommendationResult](docs/ClassifierRecommendationResult.md)
 - [ClassifierService](docs/ClassifierService.md)
 - [ClassifierSettings](docs/ClassifierSettings.md)
 - [CompressSettings](docs/CompressSettings.md)
 - [DataSet](docs/DataSet.md)
 - [DataSetStats](docs/DataSetStats.md)
 - [DataSetUpdate](docs/DataSetUpdate.md)
 - [DocumentBulkSettings](docs/DocumentBulkSettings.md)
 - [DocumentCopySettings](docs/DocumentCopySettings.md)
 - [DocumentFilterSettings](docs/DocumentFilterSettings.md)
 - [DocumentMoveSettings](docs/DocumentMoveSettings.md)
 - [DocumentSampleSettings](docs/DocumentSampleSettings.md)
 - [ErrorsModel](docs/ErrorsModel.md)
 - [ExportDictionariesSettings](docs/ExportDictionariesSettings.md)
 - [FileParser](docs/FileParser.md)
 - [FileParserResult](docs/FileParserResult.md)
 - [Filter](docs/Filter.md)
 - [License](docs/License.md)
 - [Order](docs/Order.md)
 - [PaginatedListObject](docs/PaginatedListObject.md)
 - [Pagination](docs/Pagination.md)
 - [PathItem](docs/PathItem.md)
 - [PrcActivateSettings](docs/PrcActivateSettings.md)
 - [PrcIndexSettings](docs/PrcIndexSettings.md)
 - [PrcKeywordsRequest](docs/PrcKeywordsRequest.md)
 - [PrcKeywordsResult](docs/PrcKeywordsResult.md)
 - [PrcPrepareSettings](docs/PrcPrepareSettings.md)
 - [PrcRecommendationByIdRequest](docs/PrcRecommendationByIdRequest.md)
 - [PrcRecommendationRequest](docs/PrcRecommendationRequest.md)
 - [PrcRecommendationResult](docs/PrcRecommendationResult.md)
 - [PrcService](docs/PrcService.md)
 - [Process](docs/Process.md)
 - [SearchActivateSettings](docs/SearchActivateSettings.md)
 - [SearchClassifierRecommendationResult](docs/SearchClassifierRecommendationResult.md)
 - [SearchPrepareSettings](docs/SearchPrepareSettings.md)
 - [SearchRequest](docs/SearchRequest.md)
 - [SearchResult](docs/SearchResult.md)
 - [SearchResultWrapper](docs/SearchResultWrapper.md)
 - [SearchService](docs/SearchService.md)
 - [SearchSettings](docs/SearchSettings.md)
 - [Service](docs/Service.md)
 - [Statistics](docs/Statistics.md)
 - [StatisticsWrapper](docs/StatisticsWrapper.md)
 - [Status](docs/Status.md)
 - [Tag](docs/Tag.md)
 - [TagBulkSettings](docs/TagBulkSettings.md)
 - [TagProperties](docs/TagProperties.md)
 - [TagsExportWordsSettings](docs/TagsExportWordsSettings.md)
 - [Weight](docs/Weight.md)


## Documentation For Authorization

 All endpoints do not require authorization.



## Author




