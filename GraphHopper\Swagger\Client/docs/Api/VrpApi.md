# GraphHopper\Swagger\Client\VrpApi

All URIs are relative to *https://graphhopper.com/api/1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**postVrp**](VrpApi.md#postVrp) | **POST** /vrp/optimize | Solves vehicle routing problems


# **postVrp**
> \GraphHopper\Swagger\Client\Model\JobId postVrp($key, $body)

Solves vehicle routing problems

This endpoint for solving vehicle routing problems, i.e. traveling salesman or vehicle routing problems, and returns the solution.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new GraphHopper\Swagger\Client\Api\VrpApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$key = "key_example"; // string | your API key
$body = new \GraphHopper\Swagger\Client\Model\Request(); // \GraphHopper\Swagger\Client\Model\Request | Request object that contains the problem to be solved

try {
    $result = $apiInstance->postVrp($key, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VrpApi->postVrp: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **key** | **string**| your API key |
 **body** | [**\GraphHopper\Swagger\Client\Model\Request**](../Model/Request.md)| Request object that contains the problem to be solved |

### Return type

[**\GraphHopper\Swagger\Client\Model\JobId**](../Model/JobId.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

