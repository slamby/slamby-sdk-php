# PrcService

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**prepare_settings** | [**\Swagger\Client\Model\PrcPrepareSettings**](PrcPrepareSettings.md) |  | [optional] 
**activate_settings** | [**\Swagger\Client\Model\PrcActivateSettings**](PrcActivateSettings.md) |  | [optional] 
**index_settings** | [**\Swagger\Client\Model\PrcIndexSettings**](PrcIndexSettings.md) |  | [optional] 
**id** | **string** | Service unique identifier. It cannot be modified. | [optional] 
**name** | **string** | User-defined name for the service | 
**alias** | **string** | Alias name of the service. Services can be accessed via this name.\r\n            Alias can be modified. It is unique amongst the services. | [optional] 
**description** | **string** | Service description | [optional] 
**status** | **string** | New - the service was created | \r\n            Busy - the service is working on something (e.g.: during the Prepare) | \r\n            Prepared - the service was prepared so you can activate it to use | \r\n            Active - the service so you can use it | [optional] 
**type** | **string** | Type of the service.\r\n            Currently supported types:\r\n            - Classifier\r\n            - Prc | 
**process_id_list** | **string[]** | Contains all the process ids which belong to this service | [optional] 
**actual_process_id** | **string** |  | [optional] 


[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


