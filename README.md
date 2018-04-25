# 
You use the GraphHopper Directions API to add route planning, navigation and route optimization to your software. E.g. the Routing API has turn instructions and elevation data and the Route Optimization API solves your logistic problems and supports various constraints like time window and capacity restrictions. Also it is possible to get all distances between all locations with our fast Matrix API.

This PHP package is automatically generated by the [Swagger Codegen](https://github.com/swagger-api/swagger-codegen) project:

- API version: 1.0.0
- Build package: io.swagger.codegen.languages.PhpClientCodegen

## Requirements

PHP 5.5 and later

## Installation & Usage
### Composer

To install the bindings via [Composer](http://getcomposer.org/), add the following to `composer.json`:

```
{
  "repositories": [
    {
      "type": "git",
      "url": "https://github.com/GraphHopper/graphhopper-swagger-client-api-php.git"
    }
  ],
  "require": {
    "GraphHopper/graphhopper-swagger-client-api-php": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
    require_once('/path/to//vendor/autoload.php');
```

## Tests

To run the unit tests:

```
composer install
./vendor/bin/phpunit
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new GraphHopper/Swagger/Client\Api\GeocodingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$key = "key_example"; // string | Get your key at graphhopper.com
$q = "q_example"; // string | If you do forward geocoding, then this would be a textual description of the address you are looking for
$locale = "locale_example"; // string | Display the search results for the specified locale. Currently French (fr), English (en), German (de) and Italian (it) are supported. If the locale wasn't found the default (en) is used.
$limit = 56; // int | Specify the maximum number of returned results
$reverse = true; // bool | Set to true to do a reverse Geocoding request, see point parameter
$point = "point_example"; // string | The location bias in the format 'latitude,longitude' e.g. point=45.93272,11.58803
$provider = "provider_example"; // string | Can be either, default, nominatim, opencagedata

try {
    $result = $apiInstance->geocodeGet($key, $q, $locale, $limit, $reverse, $point, $provider);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GeocodingApi->geocodeGet: ', $e->getMessage(), PHP_EOL;
}

?>
```

## Documentation for API Endpoints

All URIs are relative to *https://graphhopper.com/api/1*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*GeocodingApi* | [**geocodeGet**](docs/Api/GeocodingApi.md#geocodeget) | **GET** /geocode | Execute a Geocoding request
*IsochroneApi* | [**isochroneGet**](docs/Api/IsochroneApi.md#isochroneget) | **GET** /isochrone | Isochrone Request
*MatrixApi* | [**matrixGet**](docs/Api/MatrixApi.md#matrixget) | **GET** /matrix | Matrix API
*MatrixApi* | [**matrixPost**](docs/Api/MatrixApi.md#matrixpost) | **POST** /matrix | Matrix API Post
*RoutingApi* | [**routeGet**](docs/Api/RoutingApi.md#routeget) | **GET** /route | Routing Request
*SolutionApi* | [**getSolution**](docs/Api/SolutionApi.md#getsolution) | **GET** /vrp/solution/{jobId} | Return the solution associated to the jobId
*VrpApi* | [**postVrp**](docs/Api/VrpApi.md#postvrp) | **POST** /vrp/optimize | Solves vehicle routing problems


## Documentation For Models

 - [Activity](docs/Model/Activity.md)
 - [Address](docs/Model/Address.md)
 - [Algorithm](docs/Model/Algorithm.md)
 - [Configuration](docs/Model/Configuration.md)
 - [CostMatrix](docs/Model/CostMatrix.md)
 - [CostMatrixData](docs/Model/CostMatrixData.md)
 - [CostMatrixDataInfo](docs/Model/CostMatrixDataInfo.md)
 - [GHError](docs/Model/GHError.md)
 - [GHErrorHints](docs/Model/GHErrorHints.md)
 - [GeocodingLocation](docs/Model/GeocodingLocation.md)
 - [GeocodingPoint](docs/Model/GeocodingPoint.md)
 - [GeocodingResponse](docs/Model/GeocodingResponse.md)
 - [IsochroneResponse](docs/Model/IsochroneResponse.md)
 - [IsochroneResponsePolygon](docs/Model/IsochroneResponsePolygon.md)
 - [IsochroneResponsePolygonGeometry](docs/Model/IsochroneResponsePolygonGeometry.md)
 - [IsochroneResponsePolygonProperties](docs/Model/IsochroneResponsePolygonProperties.md)
 - [JobId](docs/Model/JobId.md)
 - [Location](docs/Model/Location.md)
 - [MatrixRequest](docs/Model/MatrixRequest.md)
 - [MatrixResponse](docs/Model/MatrixResponse.md)
 - [ModelBreak](docs/Model/ModelBreak.md)
 - [Objective](docs/Model/Objective.md)
 - [Relation](docs/Model/Relation.md)
 - [Request](docs/Model/Request.md)
 - [Response](docs/Model/Response.md)
 - [ResponseCoordinates](docs/Model/ResponseCoordinates.md)
 - [ResponseCoordinatesArray](docs/Model/ResponseCoordinatesArray.md)
 - [ResponseInfo](docs/Model/ResponseInfo.md)
 - [ResponseInstruction](docs/Model/ResponseInstruction.md)
 - [ResponseInstructions](docs/Model/ResponseInstructions.md)
 - [Route](docs/Model/Route.md)
 - [RoutePoint](docs/Model/RoutePoint.md)
 - [RouteResponse](docs/Model/RouteResponse.md)
 - [RouteResponsePath](docs/Model/RouteResponsePath.md)
 - [Routing](docs/Model/Routing.md)
 - [Service](docs/Model/Service.md)
 - [Shipment](docs/Model/Shipment.md)
 - [Solution](docs/Model/Solution.md)
 - [SolutionUnassigned](docs/Model/SolutionUnassigned.md)
 - [Stop](docs/Model/Stop.md)
 - [TimeWindow](docs/Model/TimeWindow.md)
 - [Vehicle](docs/Model/Vehicle.md)
 - [VehicleType](docs/Model/VehicleType.md)


## Documentation For Authorization


## api_key

- **Type**: API key
- **API key parameter name**: key
- **Location**: URL query string


## Author




