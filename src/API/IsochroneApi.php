<?php
/**
 * IsochroneApi
 * PHP version 5
 *
 * @category Class
 * @package  GraphHopper\Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * GraphHopper Directions API
 *
 * You use the GraphHopper Directions API to add route planning, navigation and route optimization to your software. E.g. the Routing API has turn instructions and elevation data and the Route Optimization API solves your logistic problems and supports various constraints like time window and capacity restrictions. Also it is possible to get all distances between all locations with our fast Matrix API.
 *
 * OpenAPI spec version: 1.0.0
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 1.0.16
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace GraphHopper\Swagger\Client\API;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use GraphHopper\Swagger\Client\ApiException;
use GraphHopper\Swagger\Client\Configuration;
use GraphHopper\Swagger\Client\HeaderSelector;
use GraphHopper\Swagger\Client\ObjectSerializer;

/**
 * IsochroneApi Class Doc Comment
 *
 * @category Class
 * @package  GraphHopper\Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class IsochroneApi
{
    /**
     * @var ClientInterface
     */
    protected $client;

    /**
     * @var Configuration
     */
    protected $config;

    /**
     * @param ClientInterface $client
     * @param Configuration   $config
     * @param HeaderSelector  $selector
     */
    public function __construct(
        ClientInterface $client = null,
        Configuration $config = null,
        HeaderSelector $selector = null
    ) {
        $this->client = $client ?: new Client();
        $this->config = $config ?: new Configuration();
        $this->headerSelector = $selector ?: new HeaderSelector();
    }

    /**
     * @return Configuration
     */
    public function getConfig()
    {
        return $this->config;
    }

    /**
     * Operation isochroneGet
     *
     * Isochrone Request
     *
     * @param  string $point Specify the start coordinate (required)
     * @param  string $key Get your key at graphhopper.com (required)
     * @param  int $time_limit Specify which time the vehicle should travel. In seconds. (optional, default to 600)
     * @param  int $distance_limit Specify which distance the vehicle should travel. In meter. (optional, default to -1)
     * @param  string $vehicle Possible vehicles are bike, car, foot and [more](https://graphhopper.com/api/1/docs/supported-vehicle-profiles/) (optional, default to car)
     * @param  int $buckets For how many sub intervals an additional polygon should be calculated. (optional, default to 1)
     * @param  bool $reverse_flow If &#x60;false&#x60; the flow goes from point to the polygon, if &#x60;true&#x60; the flow goes from the polygon \&quot;inside\&quot; to the point. Example usage for &#x60;false&#x60;&amp;#58; *How many potential customer can be reached within 30min travel time from your store* vs. &#x60;true&#x60;&amp;#58; *How many customers can reach your store within 30min travel time.* (optional, default to false)
     *
     * @throws \GraphHopper\Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \GraphHopper\Swagger\Client\Model\IsochroneResponse
     */
    public function isochroneGet($point, $key, $time_limit = '600', $distance_limit = '-1', $vehicle = 'car', $buckets = '1', $reverse_flow = 'false')
    {
        list($response) = $this->isochroneGetWithHttpInfo($point, $key, $time_limit, $distance_limit, $vehicle, $buckets, $reverse_flow);
        return $response;
    }

    /**
     * Operation isochroneGetWithHttpInfo
     *
     * Isochrone Request
     *
     * @param  string $point Specify the start coordinate (required)
     * @param  string $key Get your key at graphhopper.com (required)
     * @param  int $time_limit Specify which time the vehicle should travel. In seconds. (optional, default to 600)
     * @param  int $distance_limit Specify which distance the vehicle should travel. In meter. (optional, default to -1)
     * @param  string $vehicle Possible vehicles are bike, car, foot and [more](https://graphhopper.com/api/1/docs/supported-vehicle-profiles/) (optional, default to car)
     * @param  int $buckets For how many sub intervals an additional polygon should be calculated. (optional, default to 1)
     * @param  bool $reverse_flow If &#x60;false&#x60; the flow goes from point to the polygon, if &#x60;true&#x60; the flow goes from the polygon \&quot;inside\&quot; to the point. Example usage for &#x60;false&#x60;&amp;#58; *How many potential customer can be reached within 30min travel time from your store* vs. &#x60;true&#x60;&amp;#58; *How many customers can reach your store within 30min travel time.* (optional, default to false)
     *
     * @throws \GraphHopper\Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \GraphHopper\Swagger\Client\Model\IsochroneResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function isochroneGetWithHttpInfo($point, $key, $time_limit = '600', $distance_limit = '-1', $vehicle = 'car', $buckets = '1', $reverse_flow = 'false')
    {
        $returnType = '\GraphHopper\Swagger\Client\Model\IsochroneResponse';
        $request = $this->isochroneGetRequest($point, $key, $time_limit, $distance_limit, $vehicle, $buckets, $reverse_flow);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if ($returnType !== 'string') {
                    $content = json_decode($content);
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\GraphHopper\Swagger\Client\Model\IsochroneResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                default:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\GraphHopper\Swagger\Client\Model\GHError',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation isochroneGetAsync
     *
     * Isochrone Request
     *
     * @param  string $point Specify the start coordinate (required)
     * @param  string $key Get your key at graphhopper.com (required)
     * @param  int $time_limit Specify which time the vehicle should travel. In seconds. (optional, default to 600)
     * @param  int $distance_limit Specify which distance the vehicle should travel. In meter. (optional, default to -1)
     * @param  string $vehicle Possible vehicles are bike, car, foot and [more](https://graphhopper.com/api/1/docs/supported-vehicle-profiles/) (optional, default to car)
     * @param  int $buckets For how many sub intervals an additional polygon should be calculated. (optional, default to 1)
     * @param  bool $reverse_flow If &#x60;false&#x60; the flow goes from point to the polygon, if &#x60;true&#x60; the flow goes from the polygon \&quot;inside\&quot; to the point. Example usage for &#x60;false&#x60;&amp;#58; *How many potential customer can be reached within 30min travel time from your store* vs. &#x60;true&#x60;&amp;#58; *How many customers can reach your store within 30min travel time.* (optional, default to false)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function isochroneGetAsync($point, $key, $time_limit = '600', $distance_limit = '-1', $vehicle = 'car', $buckets = '1', $reverse_flow = 'false')
    {
        return $this->isochroneGetAsyncWithHttpInfo($point, $key, $time_limit, $distance_limit, $vehicle, $buckets, $reverse_flow)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation isochroneGetAsyncWithHttpInfo
     *
     * Isochrone Request
     *
     * @param  string $point Specify the start coordinate (required)
     * @param  string $key Get your key at graphhopper.com (required)
     * @param  int $time_limit Specify which time the vehicle should travel. In seconds. (optional, default to 600)
     * @param  int $distance_limit Specify which distance the vehicle should travel. In meter. (optional, default to -1)
     * @param  string $vehicle Possible vehicles are bike, car, foot and [more](https://graphhopper.com/api/1/docs/supported-vehicle-profiles/) (optional, default to car)
     * @param  int $buckets For how many sub intervals an additional polygon should be calculated. (optional, default to 1)
     * @param  bool $reverse_flow If &#x60;false&#x60; the flow goes from point to the polygon, if &#x60;true&#x60; the flow goes from the polygon \&quot;inside\&quot; to the point. Example usage for &#x60;false&#x60;&amp;#58; *How many potential customer can be reached within 30min travel time from your store* vs. &#x60;true&#x60;&amp;#58; *How many customers can reach your store within 30min travel time.* (optional, default to false)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function isochroneGetAsyncWithHttpInfo($point, $key, $time_limit = '600', $distance_limit = '-1', $vehicle = 'car', $buckets = '1', $reverse_flow = 'false')
    {
        $returnType = '\GraphHopper\Swagger\Client\Model\IsochroneResponse';
        $request = $this->isochroneGetRequest($point, $key, $time_limit, $distance_limit, $vehicle, $buckets, $reverse_flow);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'isochroneGet'
     *
     * @param  string $point Specify the start coordinate (required)
     * @param  string $key Get your key at graphhopper.com (required)
     * @param  int $time_limit Specify which time the vehicle should travel. In seconds. (optional, default to 600)
     * @param  int $distance_limit Specify which distance the vehicle should travel. In meter. (optional, default to -1)
     * @param  string $vehicle Possible vehicles are bike, car, foot and [more](https://graphhopper.com/api/1/docs/supported-vehicle-profiles/) (optional, default to car)
     * @param  int $buckets For how many sub intervals an additional polygon should be calculated. (optional, default to 1)
     * @param  bool $reverse_flow If &#x60;false&#x60; the flow goes from point to the polygon, if &#x60;true&#x60; the flow goes from the polygon \&quot;inside\&quot; to the point. Example usage for &#x60;false&#x60;&amp;#58; *How many potential customer can be reached within 30min travel time from your store* vs. &#x60;true&#x60;&amp;#58; *How many customers can reach your store within 30min travel time.* (optional, default to false)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function isochroneGetRequest($point, $key, $time_limit = '600', $distance_limit = '-1', $vehicle = 'car', $buckets = '1', $reverse_flow = 'false')
    {
        // verify the required parameter 'point' is set
        if ($point === null) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $point when calling isochroneGet'
            );
        }
        // verify the required parameter 'key' is set
        if ($key === null) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $key when calling isochroneGet'
            );
        }

        $resourcePath = '/isochrone';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($point !== null) {
            $queryParams['point'] = ObjectSerializer::toQueryValue($point);
        }
        // query params
        if ($time_limit !== null) {
            $queryParams['time_limit'] = ObjectSerializer::toQueryValue($time_limit);
        }
        // query params
        if ($distance_limit !== null) {
            $queryParams['distance_limit'] = ObjectSerializer::toQueryValue($distance_limit);
        }
        // query params
        if ($vehicle !== null) {
            $queryParams['vehicle'] = ObjectSerializer::toQueryValue($vehicle);
        }
        // query params
        if ($buckets !== null) {
            $queryParams['buckets'] = ObjectSerializer::toQueryValue($buckets);
        }
        // query params
        if ($reverse_flow !== null) {
            $queryParams['reverse_flow'] = ObjectSerializer::toQueryValue($reverse_flow);
        }
        // query params
        if ($key !== null) {
            $queryParams['key'] = ObjectSerializer::toQueryValue($key);
        }


        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            // \stdClass has no __toString(), so we should encode it manually
            if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($httpBody);
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
            }
        }


        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'GET',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Create http client option
     *
     * @throws \RuntimeException on file opening failure
     * @return array of http client options
     */
    protected function createHttpClientOption()
    {
        $options = [];
        if ($this->config->getDebug()) {
            $options[RequestOptions::DEBUG] = fopen($this->config->getDebugFile(), 'a');
            if (!$options[RequestOptions::DEBUG]) {
                throw new \RuntimeException('Failed to open the debug file: ' . $this->config->getDebugFile());
            }
        }

        return $options;
    }
}
