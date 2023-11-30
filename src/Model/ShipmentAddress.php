<?php
/**
 * ShipmentAddress
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
 * ShipmentAddress Class Doc Comment
 *
 * @category Class
 * @description Address
 * @package  RoyalMailV4\ShipmentsApi
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ShipmentAddress implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ShipmentAddress';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'contactName' => 'string',
        'companyName' => 'string',
        'contactEmail' => 'string',
        'contactPhone' => 'string',
        'line1' => 'string',
        'line2' => 'string',
        'line3' => 'string',
        'town' => 'string',
        'postcode' => 'string',
        'county' => 'string',
        'countryCode' => 'string',
        'what3Words' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'contactName' => null,
        'companyName' => null,
        'contactEmail' => 'email',
        'contactPhone' => 'tel',
        'line1' => null,
        'line2' => null,
        'line3' => null,
        'town' => null,
        'postcode' => null,
        'county' => null,
        'countryCode' => null,
        'what3Words' => null
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
        'contactName' => 'ContactName',
        'companyName' => 'CompanyName',
        'contactEmail' => 'ContactEmail',
        'contactPhone' => 'ContactPhone',
        'line1' => 'Line1',
        'line2' => 'Line2',
        'line3' => 'Line3',
        'town' => 'Town',
        'postcode' => 'Postcode',
        'county' => 'County',
        'countryCode' => 'CountryCode',
        'what3Words' => 'What3Words'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'contactName' => 'setContactName',
        'companyName' => 'setCompanyName',
        'contactEmail' => 'setContactEmail',
        'contactPhone' => 'setContactPhone',
        'line1' => 'setLine1',
        'line2' => 'setLine2',
        'line3' => 'setLine3',
        'town' => 'setTown',
        'postcode' => 'setPostcode',
        'county' => 'setCounty',
        'countryCode' => 'setCountryCode',
        'what3Words' => 'setWhat3Words'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'contactName' => 'getContactName',
        'companyName' => 'getCompanyName',
        'contactEmail' => 'getContactEmail',
        'contactPhone' => 'getContactPhone',
        'line1' => 'getLine1',
        'line2' => 'getLine2',
        'line3' => 'getLine3',
        'town' => 'getTown',
        'postcode' => 'getPostcode',
        'county' => 'getCounty',
        'countryCode' => 'getCountryCode',
        'what3Words' => 'getWhat3Words'
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
        $this->container['contactName'] = isset($data['contactName']) ? $data['contactName'] : null;
        $this->container['companyName'] = isset($data['companyName']) ? $data['companyName'] : null;
        $this->container['contactEmail'] = isset($data['contactEmail']) ? $data['contactEmail'] : null;
        $this->container['contactPhone'] = isset($data['contactPhone']) ? $data['contactPhone'] : null;
        $this->container['line1'] = isset($data['line1']) ? $data['line1'] : null;
        $this->container['line2'] = isset($data['line2']) ? $data['line2'] : null;
        $this->container['line3'] = isset($data['line3']) ? $data['line3'] : null;
        $this->container['town'] = isset($data['town']) ? $data['town'] : null;
        $this->container['postcode'] = isset($data['postcode']) ? $data['postcode'] : null;
        $this->container['county'] = isset($data['county']) ? $data['county'] : null;
        $this->container['countryCode'] = isset($data['countryCode']) ? $data['countryCode'] : null;
        $this->container['what3Words'] = isset($data['what3Words']) ? $data['what3Words'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['line1'] === null) {
            $invalidProperties[] = "'line1' can't be null";
        }
        if ($this->container['town'] === null) {
            $invalidProperties[] = "'town' can't be null";
        }
        if ($this->container['countryCode'] === null) {
            $invalidProperties[] = "'countryCode' can't be null";
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
     * Gets contactName
     *
     * @return string
     */
    public function getContactName()
    {
        return $this->container['contactName'];
    }

    /**
     * Sets contactName
     *
     * @param string $contactName Either Contact Name or Company Name must be provided. <br />Up to 50 characters may be allowed, however it is carrier dependent and some carriers may allow less.<br>Royal Mail: 40 characters
     *
     * @return $this
     */
    public function setContactName($contactName)
    {
        $this->container['contactName'] = $contactName;

        return $this;
    }

    /**
     * Gets companyName
     *
     * @return string
     */
    public function getCompanyName()
    {
        return $this->container['companyName'];
    }

    /**
     * Sets companyName
     *
     * @param string $companyName Either Contact Name or Company Name must be provided. <br />Up to 50 characters may be allowed, however it is carrier dependent and some carriers may allow less.<br>Royal Mail: 40 characters
     *
     * @return $this
     */
    public function setCompanyName($companyName)
    {
        $this->container['companyName'] = $companyName;

        return $this;
    }

    /**
     * Gets contactEmail
     *
     * @return string
     */
    public function getContactEmail()
    {
        return $this->container['contactEmail'];
    }

    /**
     * Sets contactEmail
     *
     * @param string $contactEmail Email address.
     *
     * @return $this
     */
    public function setContactEmail($contactEmail)
    {
        $this->container['contactEmail'] = $contactEmail;

        return $this;
    }

    /**
     * Gets contactPhone
     *
     * @return string
     */
    public function getContactPhone()
    {
        return $this->container['contactPhone'];
    }

    /**
     * Sets contactPhone
     *
     * @param string $contactPhone Phone number.
     *
     * @return $this
     */
    public function setContactPhone($contactPhone)
    {
        $this->container['contactPhone'] = $contactPhone;

        return $this;
    }

    /**
     * Gets line1
     *
     * @return string
     */
    public function getLine1()
    {
        return $this->container['line1'];
    }

    /**
     * Sets line1
     *
     * @param string $line1 First Line Address <br />Up to 50 characters may be allowed, however it is carrier dependent and some carriers may allow less.<br>Royal Mail: 40 characters
     *
     * @return $this
     */
    public function setLine1($line1)
    {
        $this->container['line1'] = $line1;

        return $this;
    }

    /**
     * Gets line2
     *
     * @return string
     */
    public function getLine2()
    {
        return $this->container['line2'];
    }

    /**
     * Sets line2
     *
     * @param string $line2 Second Line Address, if applicable <br />Up to 50 characters may be allowed, however it is carrier dependent and some carriers may allow less.<br>Royal Mail: 40 characters
     *
     * @return $this
     */
    public function setLine2($line2)
    {
        $this->container['line2'] = $line2;

        return $this;
    }

    /**
     * Gets line3
     *
     * @return string
     */
    public function getLine3()
    {
        return $this->container['line3'];
    }

    /**
     * Sets line3
     *
     * @param string $line3 Third Line Address, if applicable <br />Up to 50 characters may be allowed, however it is carrier dependent and some carriers may allow less.<br>Royal Mail: 40 characters
     *
     * @return $this
     */
    public function setLine3($line3)
    {
        $this->container['line3'] = $line3;

        return $this;
    }

    /**
     * Gets town
     *
     * @return string
     */
    public function getTown()
    {
        return $this->container['town'];
    }

    /**
     * Sets town
     *
     * @param string $town Town <br />Up to 50 characters may be allowed, however it is carrier dependent and some carriers may allow less.<br>Royal Mail: 40 characters
     *
     * @return $this
     */
    public function setTown($town)
    {
        $this->container['town'] = $town;

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
     * @param string $postcode Postcode / Zip <br />Required for United Kingdom addresses and some international addresses. <br />The Countries API can be used to check whether postcode/zip code is required for a country. <br />Up to 20 characters may be allowed, however it is carrier dependent and some carriers may allow less.<br>Royal Mail: 10 characters
     *
     * @return $this
     */
    public function setPostcode($postcode)
    {
        $this->container['postcode'] = $postcode;

        return $this;
    }

    /**
     * Gets county
     *
     * @return string
     */
    public function getCounty()
    {
        return $this->container['county'];
    }

    /**
     * Sets county
     *
     * @param string $county County / State / Province <br />May be required depending on the country. <br />USA, Australia and Canada all require a valid state code or name. <br />The Countries API can be used to check whether county/state is required for a country. <br />Up to 50 characters may be allowed, however it is carrier dependent and some carriers may allow less.<br>Royal Mail: 40 characters
     *
     * @return $this
     */
    public function setCounty($county)
    {
        $this->container['county'] = $county;

        return $this;
    }

    /**
     * Gets countryCode
     *
     * @return string
     */
    public function getCountryCode()
    {
        return $this->container['countryCode'];
    }

    /**
     * Sets countryCode
     *
     * @param string $countryCode Country Code <br />2 Digit ISO Country Code, per ISO 3166 Standard.
     *
     * @return $this
     */
    public function setCountryCode($countryCode)
    {
        $this->container['countryCode'] = $countryCode;

        return $this;
    }

    /**
     * Gets what3Words
     *
     * @return string
     */
    public function getWhat3Words()
    {
        return $this->container['what3Words'];
    }

    /**
     * Sets what3Words
     *
     * @param string $what3Words The what3words identifier for this address.
     *
     * @return $this
     */
    public function setWhat3Words($what3Words)
    {
        $this->container['what3Words'] = $what3Words;

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
