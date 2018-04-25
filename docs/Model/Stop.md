# Stop

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**address** | [**\GraphHopper\Swagger\Client\Model\Address**](Address.md) |  | [optional] 
**duration** | **int** | duration of stop, i.e. time in seconds the corresponding activity takes | [optional] 
**preparation_time** | **int** | preparation time of service, e.g. search for a parking space. it only falls due if the location of previous activity differs from this location | [optional] 
**time_windows** | [**\GraphHopper\Swagger\Client\Model\TimeWindow[]**](TimeWindow.md) | array of time windows. currently, only a single time window is allowed | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


