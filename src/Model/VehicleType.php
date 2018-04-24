<?php
/**
 * VehicleType
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
 * VehicleType Class Doc Comment
 *
 * @category Class
 * @package     GraphHopper\Swagger\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class VehicleType implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'VehicleType';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'type_id' => 'string',
        'profile' => 'string',
        'capacity' => 'int[]',
        'speed_factor' => 'double',
        'service_time_factor' => 'double',
        'cost_per_meter' => 'double',
        'cost_per_second' => 'double',
        'cost_per_activation' => 'double'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'type_id' => null,
        'profile' => null,
        'capacity' => 'int32',
        'speed_factor' => 'double',
        'service_time_factor' => 'double',
        'cost_per_meter' => 'double',
        'cost_per_second' => 'double',
        'cost_per_activation' => 'double'
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
        'type_id' => 'type_id',
        'profile' => 'profile',
        'capacity' => 'capacity',
        'speed_factor' => 'speed_factor',
        'service_time_factor' => 'service_time_factor',
        'cost_per_meter' => 'cost_per_meter',
        'cost_per_second' => 'cost_per_second',
        'cost_per_activation' => 'cost_per_activation'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'type_id' => 'setTypeId',
        'profile' => 'setProfile',
        'capacity' => 'setCapacity',
        'speed_factor' => 'setSpeedFactor',
        'service_time_factor' => 'setServiceTimeFactor',
        'cost_per_meter' => 'setCostPerMeter',
        'cost_per_second' => 'setCostPerSecond',
        'cost_per_activation' => 'setCostPerActivation'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'type_id' => 'getTypeId',
        'profile' => 'getProfile',
        'capacity' => 'getCapacity',
        'speed_factor' => 'getSpeedFactor',
        'service_time_factor' => 'getServiceTimeFactor',
        'cost_per_meter' => 'getCostPerMeter',
        'cost_per_second' => 'getCostPerSecond',
        'cost_per_activation' => 'getCostPerActivation'
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

    const PROFILE_CAR = 'car';
    const PROFILE_BIKE = 'bike';
    const PROFILE_FOOT = 'foot';
    const PROFILE_HIKE = 'hike';
    const PROFILE_MTB = 'mtb';
    const PROFILE_RACINGBIKE = 'racingbike';
    const PROFILE_SCOOTER = 'scooter';
    const PROFILE_TRUCK = 'truck';
    const PROFILE_SMALL_TRUCK = 'small_truck';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getProfileAllowableValues()
    {
        return [
            self::PROFILE_CAR,
            self::PROFILE_BIKE,
            self::PROFILE_FOOT,
            self::PROFILE_HIKE,
            self::PROFILE_MTB,
            self::PROFILE_RACINGBIKE,
            self::PROFILE_SCOOTER,
            self::PROFILE_TRUCK,
            self::PROFILE_SMALL_TRUCK,
        ];
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
        $this->container['type_id'] = isset($data['type_id']) ? $data['type_id'] : null;
        $this->container['profile'] = isset($data['profile']) ? $data['profile'] : null;
        $this->container['capacity'] = isset($data['capacity']) ? $data['capacity'] : null;
        $this->container['speed_factor'] = isset($data['speed_factor']) ? $data['speed_factor'] : null;
        $this->container['service_time_factor'] = isset($data['service_time_factor']) ? $data['service_time_factor'] : null;
        $this->container['cost_per_meter'] = isset($data['cost_per_meter']) ? $data['cost_per_meter'] : null;
        $this->container['cost_per_second'] = isset($data['cost_per_second']) ? $data['cost_per_second'] : null;
        $this->container['cost_per_activation'] = isset($data['cost_per_activation']) ? $data['cost_per_activation'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getProfileAllowableValues();
        if (!in_array($this->container['profile'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'profile', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

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

        $allowedValues = $this->getProfileAllowableValues();
        if (!in_array($this->container['profile'], $allowedValues)) {
            return false;
        }
        return true;
    }


    /**
     * Gets type_id
     *
     * @return string
     */
    public function getTypeId()
    {
        return $this->container['type_id'];
    }

    /**
     * Sets type_id
     *
     * @param string $type_id Unique identifier for the vehicle type
     *
     * @return $this
     */
    public function setTypeId($type_id)
    {
        $this->container['type_id'] = $type_id;

        return $this;
    }

    /**
     * Gets profile
     *
     * @return string
     */
    public function getProfile()
    {
        return $this->container['profile'];
    }

    /**
     * Sets profile
     *
     * @param string $profile Profile of vehicle type
     *
     * @return $this
     */
    public function setProfile($profile)
    {
        $allowedValues = $this->getProfileAllowableValues();
        if (!is_null($profile) && !in_array($profile, $allowedValues)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'profile', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['profile'] = $profile;

        return $this;
    }

    /**
     * Gets capacity
     *
     * @return int[]
     */
    public function getCapacity()
    {
        return $this->container['capacity'];
    }

    /**
     * Sets capacity
     *
     * @param int[] $capacity array of capacity dimensions
     *
     * @return $this
     */
    public function setCapacity($capacity)
    {
        $this->container['capacity'] = $capacity;

        return $this;
    }

    /**
     * Gets speed_factor
     *
     * @return double
     */
    public function getSpeedFactor()
    {
        return $this->container['speed_factor'];
    }

    /**
     * Sets speed_factor
     *
     * @param double $speed_factor speed_factor of vehicle type
     *
     * @return $this
     */
    public function setSpeedFactor($speed_factor)
    {
        $this->container['speed_factor'] = $speed_factor;

        return $this;
    }

    /**
     * Gets service_time_factor
     *
     * @return double
     */
    public function getServiceTimeFactor()
    {
        return $this->container['service_time_factor'];
    }

    /**
     * Sets service_time_factor
     *
     * @param double $service_time_factor service time factor of vehicle type
     *
     * @return $this
     */
    public function setServiceTimeFactor($service_time_factor)
    {
        $this->container['service_time_factor'] = $service_time_factor;

        return $this;
    }

    /**
     * Gets cost_per_meter
     *
     * @return double
     */
    public function getCostPerMeter()
    {
        return $this->container['cost_per_meter'];
    }

    /**
     * Sets cost_per_meter
     *
     * @param double $cost_per_meter cost parameter per distance unit, here meter is used
     *
     * @return $this
     */
    public function setCostPerMeter($cost_per_meter)
    {
        $this->container['cost_per_meter'] = $cost_per_meter;

        return $this;
    }

    /**
     * Gets cost_per_second
     *
     * @return double
     */
    public function getCostPerSecond()
    {
        return $this->container['cost_per_second'];
    }

    /**
     * Sets cost_per_second
     *
     * @param double $cost_per_second cost parameter per time unit, here second is used
     *
     * @return $this
     */
    public function setCostPerSecond($cost_per_second)
    {
        $this->container['cost_per_second'] = $cost_per_second;

        return $this;
    }

    /**
     * Gets cost_per_activation
     *
     * @return double
     */
    public function getCostPerActivation()
    {
        return $this->container['cost_per_activation'];
    }

    /**
     * Sets cost_per_activation
     *
     * @param double $cost_per_activation cost parameter vehicle activation, i.e. fixed costs per vehicle
     *
     * @return $this
     */
    public function setCostPerActivation($cost_per_activation)
    {
        $this->container['cost_per_activation'] = $cost_per_activation;

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

