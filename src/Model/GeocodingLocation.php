<?php
/**
 * GeocodingLocation
 *
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

namespace GraphHopper\Swagger\Client\Model;

use \ArrayAccess;
use \GraphHopper\Swagger\Client\ObjectSerializer;

/**
 * GeocodingLocation Class Doc Comment
 *
 * @category Class
 * @package     GraphHopper\Swagger\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class GeocodingLocation implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'GeocodingLocation';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'point' => '\GraphHopper\Swagger\Client\Model\GeocodingPoint',
        'osm_id' => 'string',
        'osm_type' => 'string',
        'osm_key' => 'string',
        'name' => 'string',
        'country' => 'string',
        'city' => 'string',
        'state' => 'string',
        'street' => 'string',
        'housenumber' => 'string',
        'postcode' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'point' => null,
        'osm_id' => null,
        'osm_type' => null,
        'osm_key' => null,
        'name' => null,
        'country' => null,
        'city' => null,
        'state' => null,
        'street' => null,
        'housenumber' => null,
        'postcode' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'point' => 'point',
        'osm_id' => 'osm_id',
        'osm_type' => 'osm_type',
        'osm_key' => 'osm_key',
        'name' => 'name',
        'country' => 'country',
        'city' => 'city',
        'state' => 'state',
        'street' => 'street',
        'housenumber' => 'housenumber',
        'postcode' => 'postcode'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'point' => 'setPoint',
        'osm_id' => 'setOsmId',
        'osm_type' => 'setOsmType',
        'osm_key' => 'setOsmKey',
        'name' => 'setName',
        'country' => 'setCountry',
        'city' => 'setCity',
        'state' => 'setState',
        'street' => 'setStreet',
        'housenumber' => 'setHousenumber',
        'postcode' => 'setPostcode'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'point' => 'getPoint',
        'osm_id' => 'getOsmId',
        'osm_type' => 'getOsmType',
        'osm_key' => 'getOsmKey',
        'name' => 'getName',
        'country' => 'getCountry',
        'city' => 'getCity',
        'state' => 'getState',
        'street' => 'getStreet',
        'housenumber' => 'getHousenumber',
        'postcode' => 'getPostcode'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$swaggerModelName;
    }

    

    

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['point'] = isset($data['point']) ? $data['point'] : null;
        $this->container['osm_id'] = isset($data['osm_id']) ? $data['osm_id'] : null;
        $this->container['osm_type'] = isset($data['osm_type']) ? $data['osm_type'] : null;
        $this->container['osm_key'] = isset($data['osm_key']) ? $data['osm_key'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['country'] = isset($data['country']) ? $data['country'] : null;
        $this->container['city'] = isset($data['city']) ? $data['city'] : null;
        $this->container['state'] = isset($data['state']) ? $data['state'] : null;
        $this->container['street'] = isset($data['street']) ? $data['street'] : null;
        $this->container['housenumber'] = isset($data['housenumber']) ? $data['housenumber'] : null;
        $this->container['postcode'] = isset($data['postcode']) ? $data['postcode'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {

        return true;
    }


    /**
     * Gets point
     *
     * @return \GraphHopper\Swagger\Client\Model\GeocodingPoint
     */
    public function getPoint()
    {
        return $this->container['point'];
    }

    /**
     * Sets point
     *
     * @param \GraphHopper\Swagger\Client\Model\GeocodingPoint $point point
     *
     * @return $this
     */
    public function setPoint($point)
    {
        $this->container['point'] = $point;

        return $this;
    }

    /**
     * Gets osm_id
     *
     * @return string
     */
    public function getOsmId()
    {
        return $this->container['osm_id'];
    }

    /**
     * Sets osm_id
     *
     * @param string $osm_id OSM Id
     *
     * @return $this
     */
    public function setOsmId($osm_id)
    {
        $this->container['osm_id'] = $osm_id;

        return $this;
    }

    /**
     * Gets osm_type
     *
     * @return string
     */
    public function getOsmType()
    {
        return $this->container['osm_type'];
    }

    /**
     * Sets osm_type
     *
     * @param string $osm_type N = node, R = relation, W = way
     *
     * @return $this
     */
    public function setOsmType($osm_type)
    {
        $this->container['osm_type'] = $osm_type;

        return $this;
    }

    /**
     * Gets osm_key
     *
     * @return string
     */
    public function getOsmKey()
    {
        return $this->container['osm_key'];
    }

    /**
     * Sets osm_key
     *
     * @param string $osm_key The osm key of the result like `place` or `amenity`
     *
     * @return $this
     */
    public function setOsmKey($osm_key)
    {
        $this->container['osm_key'] = $osm_key;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name name
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets country
     *
     * @return string
     */
    public function getCountry()
    {
        return $this->container['country'];
    }

    /**
     * Sets country
     *
     * @param string $country country
     *
     * @return $this
     */
    public function setCountry($country)
    {
        $this->container['country'] = $country;

        return $this;
    }

    /**
     * Gets city
     *
     * @return string
     */
    public function getCity()
    {
        return $this->container['city'];
    }

    /**
     * Sets city
     *
     * @param string $city city
     *
     * @return $this
     */
    public function setCity($city)
    {
        $this->container['city'] = $city;

        return $this;
    }

    /**
     * Gets state
     *
     * @return string
     */
    public function getState()
    {
        return $this->container['state'];
    }

    /**
     * Sets state
     *
     * @param string $state state
     *
     * @return $this
     */
    public function setState($state)
    {
        $this->container['state'] = $state;

        return $this;
    }

    /**
     * Gets street
     *
     * @return string
     */
    public function getStreet()
    {
        return $this->container['street'];
    }

    /**
     * Sets street
     *
     * @param string $street street
     *
     * @return $this
     */
    public function setStreet($street)
    {
        $this->container['street'] = $street;

        return $this;
    }

    /**
     * Gets housenumber
     *
     * @return string
     */
    public function getHousenumber()
    {
        return $this->container['housenumber'];
    }

    /**
     * Sets housenumber
     *
     * @param string $housenumber housenumber
     *
     * @return $this
     */
    public function setHousenumber($housenumber)
    {
        $this->container['housenumber'] = $housenumber;

        return $this;
    }

    /**
     * Gets postcode
     *
     * @return string
     */
    public function getPostcode()
    {
        return $this->container['postcode'];
    }

    /**
     * Sets postcode
     *
     * @param string $postcode postcode
     *
     * @return $this
     */
    public function setPostcode($postcode)
    {
        $this->container['postcode'] = $postcode;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param  integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param  integer $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param  integer $offset Offset
     * @param  mixed   $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param  integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}
