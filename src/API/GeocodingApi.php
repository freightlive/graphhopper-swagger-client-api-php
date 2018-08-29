<?php
/**
 * GeocodingApi
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
 * GeocodingApi Class Doc Comment
 *
 * @category Class
 * @package  GraphHopper\Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class GeocodingApi
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
     * Operation geocodeGet
     *
     * Execute a Geocoding request
     *
     * @param  string $key Get your key at graphhopper.com (required)
     * @param  string $q If you do forward geocoding, then this would be a textual description of the address you are looking for (optional)
     * @param  string $locale Display the search results for the specified locale. Currently French (fr), English (en), German (de) and Italian (it) are supported. If the locale wasn&#39;t found the default (en) is used. (optional)
     * @param  int $limit Specify the maximum number of returned results (optional)
     * @param  bool $reverse Set to true to do a reverse Geocoding request, see point parameter (optional)
     * @param  string $point The location bias in the format &#39;latitude,longitude&#39; e.g. point&#x3D;45.93272,11.58803 (optional)
     * @param  string $provider Can be either, default, nominatim, opencagedata (optional)
     *
     * @throws \GraphHopper\Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \GraphHopper\Swagger\Client\Model\GeocodingResponse
     */
    public function geocodeGet($key, $q = null, $locale = null, $limit = null, $reverse = null, $point = null, $provider = null)
    {
        list($response) = $this->geocodeGetWithHttpInfo($key, $q, $locale, $limit, $reverse, $point, $provider);
        return $response;
    }

    /**
     * Operation geocodeGetWithHttpInfo
     *
     * Execute a Geocoding request
     *
     * @param  string $key Get your key at graphhopper.com (required)
     * @param  string $q If you do forward geocoding, then this would be a textual description of the address you are looking for (optional)
     * @param  string $locale Display the search results for the specified locale. Currently French (fr), English (en), German (de) and Italian (it) are supported. If the locale wasn&#39;t found the default (en) is used. (optional)
     * @param  int $limit Specify the maximum number of returned results (optional)
     * @param  bool $reverse Set to true to do a reverse Geocoding request, see point parameter (optional)
     * @param  string $point The location bias in the format &#39;latitude,longitude&#39; e.g. point&#x3D;45.93272,11.58803 (optional)
     * @param  string $provider Can be either, default, nominatim, opencagedata (optional)
     *
     * @throws \GraphHopper\Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \GraphHopper\Swagger\Client\Model\GeocodingResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function geocodeGetWithHttpInfo($key, $q = null, $locale = null, $limit = null, $reverse = null, $point = null, $provider = null)
    {
        $returnType = '\GraphHopper\Swagger\Client\Model\GeocodingResponse';
        $request = $this->geocodeGetRequest($key, $q, $locale, $limit, $reverse, $point, $provider);

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
                        '\GraphHopper\Swagger\Client\Model\GeocodingResponse',
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
     * Operation geocodeGetAsync
     *
     * Execute a Geocoding request
     *
     * @param  string $key Get your key at graphhopper.com (required)
     * @param  string $q If you do forward geocoding, then this would be a textual description of the address you are looking for (optional)
     * @param  string $locale Display the search results for the specified locale. Currently French (fr), English (en), German (de) and Italian (it) are supported. If the locale wasn&#39;t found the default (en) is used. (optional)
     * @param  int $limit Specify the maximum number of returned results (optional)
     * @param  bool $reverse Set to true to do a reverse Geocoding request, see point parameter (optional)
     * @param  string $point The location bias in the format &#39;latitude,longitude&#39; e.g. point&#x3D;45.93272,11.58803 (optional)
     * @param  string $provider Can be either, default, nominatim, opencagedata (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function geocodeGetAsync($key, $q = null, $locale = null, $limit = null, $reverse = null, $point = null, $provider = null)
    {
        return $this->geocodeGetAsyncWithHttpInfo($key, $q, $locale, $limit, $reverse, $point, $provider)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation geocodeGetAsyncWithHttpInfo
     *
     * Execute a Geocoding request
     *
     * @param  string $key Get your key at graphhopper.com (required)
     * @param  string $q If you do forward geocoding, then this would be a textual description of the address you are looking for (optional)
     * @param  string $locale Display the search results for the specified locale. Currently French (fr), English (en), German (de) and Italian (it) are supported. If the locale wasn&#39;t found the default (en) is used. (optional)
     * @param  int $limit Specify the maximum number of returned results (optional)
     * @param  bool $reverse Set to true to do a reverse Geocoding request, see point parameter (optional)
     * @param  string $point The location bias in the format &#39;latitude,longitude&#39; e.g. point&#x3D;45.93272,11.58803 (optional)
     * @param  string $provider Can be either, default, nominatim, opencagedata (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function geocodeGetAsyncWithHttpInfo($key, $q = null, $locale = null, $limit = null, $reverse = null, $point = null, $provider = null)
    {
        $returnType = '\GraphHopper\Swagger\Client\Model\GeocodingResponse';
        $request = $this->geocodeGetRequest($key, $q, $locale, $limit, $reverse, $point, $provider);

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
     * Create request for operation 'geocodeGet'
     *
     * @param  string $key Get your key at graphhopper.com (required)
     * @param  string $q If you do forward geocoding, then this would be a textual description of the address you are looking for (optional)
     * @param  string $locale Display the search results for the specified locale. Currently French (fr), English (en), German (de) and Italian (it) are supported. If the locale wasn&#39;t found the default (en) is used. (optional)
     * @param  int $limit Specify the maximum number of returned results (optional)
     * @param  bool $reverse Set to true to do a reverse Geocoding request, see point parameter (optional)
     * @param  string $point The location bias in the format &#39;latitude,longitude&#39; e.g. point&#x3D;45.93272,11.58803 (optional)
     * @param  string $provider Can be either, default, nominatim, opencagedata (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function geocodeGetRequest($key, $q = null, $locale = null, $limit = null, $reverse = null, $point = null, $provider = null)
    {
        // verify the required parameter 'key' is set
        if ($key === null) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $key when calling geocodeGet'
            );
        }

        $resourcePath = '/geocode';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($q !== null) {
            $queryParams['q'] = ObjectSerializer::toQueryValue($q);
        }
        // query params
        if ($locale !== null) {
            $queryParams['locale'] = ObjectSerializer::toQueryValue($locale);
        }
        // query params
        if ($limit !== null) {
            $queryParams['limit'] = ObjectSerializer::toQueryValue($limit);
        }
        // query params
        if ($reverse !== null) {
            $queryParams['reverse'] = ObjectSerializer::toQueryValue($reverse);
        }
        // query params
        if ($point !== null) {
            $queryParams['point'] = ObjectSerializer::toQueryValue($point);
        }
        // query params
        if ($provider !== null) {
            $queryParams['provider'] = ObjectSerializer::toQueryValue($provider);
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
