# RouteResponsePath

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**distance** | **double** | The total distance of the route, in meter | [optional] 
**time** | **int** | The total time of the route, in ms | [optional] 
**ascend** | **double** |  | [optional] 
**descend** | **double** | The total descend (downhill) of the route, in meter | [optional] 
**points** | [**\GraphHopper\Model\ResponseCoordinates**](ResponseCoordinates.md) |  | [optional] 
**points_encoded** | **bool** | Is true if the points are encoded, if not paths[0].points contains the geo json of the path (then order is lon,lat,elevation), which is easier to handle but consumes more bandwidth compared to encoded version | [optional] 
**bbox** | **double[]** | The bounding box of the route, format &lt;br&gt; minLon, minLat, maxLon, maxLat | [optional] 
**snapped_waypoints** | [**\GraphHopper\Model\ResponseCoordinates**](ResponseCoordinates.md) |  | [optional] 
**instructions** | [**\GraphHopper\Model\ResponseInstructions**](ResponseInstructions.md) |  | [optional] 
**details** | **object** |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


