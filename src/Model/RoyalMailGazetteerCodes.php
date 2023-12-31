<?php
/**
 * RoyalMailGazetteerCodes
 *
 * PHP version 5
 *
 * @category Class
 * @package  RoyalMailV4\ShipmentsApi
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * PRO SHIPPING API
 *
 * # Introduction Here you will find requirements for integrating with PRO SHIPPING API.  The documentation specifically covers how the API can be used by business customers to conduct shipping activity with available carriers and provides the technical information to build this integration. The API allows customers to create and manage shipments, produce labels, customs documentation, and collection manifests, retrieve reference data such as carriers and countries, and maintain their own data such as shipping account details.  Pro Shipping API is a fully RESTful service implemented using JSON messaging. You, as the customer are responsible for sending JSON messages and for maintaining the capability of receiving JSON messages in the format described in this specification. Request and response examples for each API service are included in this specification.  # Authentication  The PRO SHIPPING API uses OAuth2 authentication.  To request the authorization token you need to create API credentials (Client ID and Secret) on the system first. If you have not done it already, log into your account and go to API Credentials or follow the link [add a link here with the path to the API Credentials menu]. Use the credentials to retrieve the authorization token.  Note: Make sure you copy the Secret and keep it secure as you won't be able to view it again on the system.  <!-- ReDoc-Inject: <SecurityDefinitions /> -->
 *
 * OpenAPI spec version: v4.0-RM
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.51
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace RoyalMailV4\ShipmentsApi\Model;

use \ArrayAccess;
use \RoyalMailV4\ShipmentsApi\ObjectSerializer;

/**
 * RoyalMailGazetteerCodes Class Doc Comment
 *
 * @category Class
 * @description Gazetteer Codes
 * @package  RoyalMailV4\ShipmentsApi
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class RoyalMailGazetteerCodes implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'RoyalMailGazetteerCodes';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'part1' => 'string',
        'part2' => 'string',
        'part3' => 'string',
        'part4' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'part1' => null,
        'part2' => null,
        'part3' => null,
        'part4' => null
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
        'part1' => 'Part1',
        'part2' => 'Part2',
        'part3' => 'Part3',
        'part4' => 'Part4'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'part1' => 'setPart1',
        'part2' => 'setPart2',
        'part3' => 'setPart3',
        'part4' => 'setPart4'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'part1' => 'getPart1',
        'part2' => 'getPart2',
        'part3' => 'getPart3',
        'part4' => 'getPart4'
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
        $this->container['part1'] = isset($data['part1']) ? $data['part1'] : null;
        $this->container['part2'] = isset($data['part2']) ? $data['part2'] : null;
        $this->container['part3'] = isset($data['part3']) ? $data['part3'] : null;
        $this->container['part4'] = isset($data['part4']) ? $data['part4'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['part1'] === null) {
            $invalidProperties[] = "'part1' can't be null";
        }
        if ($this->container['part2'] === null) {
            $invalidProperties[] = "'part2' can't be null";
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
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets part1
     *
     * @return string
     */
    public function getPart1()
    {
        return $this->container['part1'];
    }

    /**
     * Sets part1
     *
     * @param string $part1 First Part of the Gazetteer code.
     *
     * @return $this
     */
    public function setPart1($part1)
    {
        $this->container['part1'] = $part1;

        return $this;
    }

    /**
     * Gets part2
     *
     * @return string
     */
    public function getPart2()
    {
        return $this->container['part2'];
    }

    /**
     * Sets part2
     *
     * @param string $part2 Second Part of the Gazetteer code.
     *
     * @return $this
     */
    public function setPart2($part2)
    {
        $this->container['part2'] = $part2;

        return $this;
    }

    /**
     * Gets part3
     *
     * @return string
     */
    public function getPart3()
    {
        return $this->container['part3'];
    }

    /**
     * Sets part3
     *
     * @param string $part3 Third Part of the Gazetteer code.
     *
     * @return $this
     */
    public function setPart3($part3)
    {
        $this->container['part3'] = $part3;

        return $this;
    }

    /**
     * Gets part4
     *
     * @return string
     */
    public function getPart4()
    {
        return $this->container['part4'];
    }

    /**
     * Sets part4
     *
     * @param string $part4 Fourth Part of the Gazetteer code.
     *
     * @return $this
     */
    public function setPart4($part4)
    {
        $this->container['part4'] = $part4;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    #[\ReturnTypeWillChange]
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    #[\ReturnTypeWillChange]
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
     * @param integer $offset Offset
     *
     * @return void
     */
    #[\ReturnTypeWillChange]
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
