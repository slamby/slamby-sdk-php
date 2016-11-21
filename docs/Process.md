# Process

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | The process GUID identifier | [optional] 
**start** | [**\DateTime**](\DateTime.md) | The UTC time of the process start | [optional] 
**end** | [**\DateTime**](\DateTime.md) | The UTC time of the process end | [optional] 
**percent** | **double** | The percent of the whole process. (e.g.: 12.23 means 12.23%) | [optional] 
**description** | **string** | Process description | [optional] 
**status** | **string** | InProgress - the process is in progress, it&#39;s working |\r\nCancelled - the process was cancelled by the user |\r\nFinished - the process was finished successfully |\r\nError - the process stopped by an error, see the ErrorMessages for detailed information |\r\nInterrupted - the process was interrupted by an unknown event (e.g.: server restart) - under development |\r\nPaused - the process was paused  - under development | [optional] 
**type** | **string** | Type of the process | [optional] 
**error_messages** | **string[]** |  | [optional] 
**result_message** | **string** |  | [optional] 


[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


