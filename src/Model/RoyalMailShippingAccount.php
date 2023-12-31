<?php
/**
 * RoyalMailShippingAccount
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
 * RoyalMailShippingAccount Class Doc Comment
 *
 * @category Class
 * @description Shipping Account &lt;br /&gt;An account that sends shipments. A shipping account is for a specified carrier. &lt;br /&gt;You can have multiple shipping accounts. &lt;br /&gt;A Shipping Account must have at least one Shipping Location.
 * @package  RoyalMailV4\ShipmentsApi
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class RoyalMailShippingAccount implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'RoyalMailShippingAccount';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'shippingAccountId' => 'string',
        'carrierCode' => 'string',
        'accountNumber' => 'string',
        'accountType' => '\RoyalMailV4\ShipmentsApi\Model\AccountType',
        'accountName' => 'string',
        'accountRegisteredEmail' => 'string',
        'accountAlias' => 'string',
        'accountStatus' => 'string',
        'contactName' => 'string',
        'contactNumber' => 'string',
        'lastUpdatedBy' => 'string',
        'lastUpdatedDateUtc' => '\DateTime'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'shippingAccountId' => 'uuid',
        'carrierCode' => null,
        'accountNumber' => null,
        'accountType' => null,
        'accountName' => null,
        'accountRegisteredEmail' => 'email',
        'accountAlias' => null,
        'accountStatus' => null,
        'contactName' => null,
        'contactNumber' => 'tel',
        'lastUpdatedBy' => null,
        'lastUpdatedDateUtc' => 'date-time'
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
        'shippingAccountId' => 'ShippingAccountId',
        'carrierCode' => 'CarrierCode',
        'accountNumber' => 'AccountNumber',
        'accountType' => 'AccountType',
        'accountName' => 'AccountName',
        'accountRegisteredEmail' => 'AccountRegisteredEmail',
        'accountAlias' => 'AccountAlias',
        'accountStatus' => 'AccountStatus',
        'contactName' => 'ContactName',
        'contactNumber' => 'ContactNumber',
        'lastUpdatedBy' => 'LastUpdatedBy',
        'lastUpdatedDateUtc' => 'LastUpdatedDateUtc'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'shippingAccountId' => 'setShippingAccountId',
        'carrierCode' => 'setCarrierCode',
        'accountNumber' => 'setAccountNumber',
        'accountType' => 'setAccountType',
        'accountName' => 'setAccountName',
        'accountRegisteredEmail' => 'setAccountRegisteredEmail',
        'accountAlias' => 'setAccountAlias',
        'accountStatus' => 'setAccountStatus',
        'contactName' => 'setContactName',
        'contactNumber' => 'setContactNumber',
        'lastUpdatedBy' => 'setLastUpdatedBy',
        'lastUpdatedDateUtc' => 'setLastUpdatedDateUtc'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'shippingAccountId' => 'getShippingAccountId',
        'carrierCode' => 'getCarrierCode',
        'accountNumber' => 'getAccountNumber',
        'accountType' => 'getAccountType',
        'accountName' => 'getAccountName',
        'accountRegisteredEmail' => 'getAccountRegisteredEmail',
        'accountAlias' => 'getAccountAlias',
        'accountStatus' => 'getAccountStatus',
        'contactName' => 'getContactName',
        'contactNumber' => 'getContactNumber',
        'lastUpdatedBy' => 'getLastUpdatedBy',
        'lastUpdatedDateUtc' => 'getLastUpdatedDateUtc'
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
        $this->container['shippingAccountId'] = isset($data['shippingAccountId']) ? $data['shippingAccountId'] : null;
        $this->container['carrierCode'] = isset($data['carrierCode']) ? $data['carrierCode'] : null;
        $this->container['accountNumber'] = isset($data['accountNumber']) ? $data['accountNumber'] : null;
        $this->container['accountType'] = isset($data['accountType']) ? $data['accountType'] : null;
        $this->container['accountName'] = isset($data['accountName']) ? $data['accountName'] : null;
        $this->container['accountRegisteredEmail'] = isset($data['accountRegisteredEmail']) ? $data['accountRegisteredEmail'] : null;
        $this->container['accountAlias'] = isset($data['accountAlias']) ? $data['accountAlias'] : null;
        $this->container['accountStatus'] = isset($data['accountStatus']) ? $data['accountStatus'] : null;
        $this->container['contactName'] = isset($data['contactName']) ? $data['contactName'] : null;
        $this->container['contactNumber'] = isset($data['contactNumber']) ? $data['contactNumber'] : null;
        $this->container['lastUpdatedBy'] = isset($data['lastUpdatedBy']) ? $data['lastUpdatedBy'] : null;
        $this->container['lastUpdatedDateUtc'] = isset($data['lastUpdatedDateUtc']) ? $data['lastUpdatedDateUtc'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['shippingAccountId'] === null) {
            $invalidProperties[] = "'shippingAccountId' can't be null";
        }
        if ($this->container['carrierCode'] === null) {
            $invalidProperties[] = "'carrierCode' can't be null";
        }
        if ($this->container['accountType'] === null) {
            $invalidProperties[] = "'accountType' can't be null";
        }
        if ($this->container['accountName'] === null) {
            $invalidProperties[] = "'accountName' can't be null";
        }
        if ($this->container['accountRegisteredEmail'] === null) {
            $invalidProperties[] = "'accountRegisteredEmail' can't be null";
        }
        if ($this->container['accountAlias'] === null) {
            $invalidProperties[] = "'accountAlias' can't be null";
        }
        if ($this->container['accountStatus'] === null) {
            $invalidProperties[] = "'accountStatus' can't be null";
        }
        if ($this->container['contactName'] === null) {
            $invalidProperties[] = "'contactName' can't be null";
        }
        if ($this->container['contactNumber'] === null) {
            $invalidProperties[] = "'contactNumber' can't be null";
        }
        if ($this->container['lastUpdatedBy'] === null) {
            $invalidProperties[] = "'lastUpdatedBy' can't be null";
        }
        if ($this->container['lastUpdatedDateUtc'] === null) {
            $invalidProperties[] = "'lastUpdatedDateUtc' can't be null";
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
     * Gets shippingAccountId
     *
     * @return string
     */
    public function getShippingAccountId()
    {
        return $this->container['shippingAccountId'];
    }

    /**
     * Sets shippingAccountId
     *
     * @param string $shippingAccountId Shipping Account Id <br />The system identifier for this account. <br />Use one of the Id or Alias in the Create Shipment Request to identify the account to use.
     *
     * @return $this
     */
    public function setShippingAccountId($shippingAccountId)
    {
        $this->container['shippingAccountId'] = $shippingAccountId;

        return $this;
    }

    /**
     * Gets carrierCode
     *
     * @return string
     */
    public function getCarrierCode()
    {
        return $this->container['carrierCode'];
    }

    /**
     * Sets carrierCode
     *
     * @param string $carrierCode Carrier Code <br />The carrier that this shipping account is for.
     *
     * @return $this
     */
    public function setCarrierCode($carrierCode)
    {
        $this->container['carrierCode'] = $carrierCode;

        return $this;
    }

    /**
     * Gets accountNumber
     *
     * @return string
     */
    public function getAccountNumber()
    {
        return $this->container['accountNumber'];
    }

    /**
     * Sets accountNumber
     *
     * @param string $accountNumber Carrier Account Number <br />The account number given by the carrier.
     *
     * @return $this
     */
    public function setAccountNumber($accountNumber)
    {
        $this->container['accountNumber'] = $accountNumber;

        return $this;
    }

    /**
     * Gets accountType
     *
     * @return \RoyalMailV4\ShipmentsApi\Model\AccountType
     */
    public function getAccountType()
    {
        return $this->container['accountType'];
    }

    /**
     * Sets accountType
     *
     * @param \RoyalMailV4\ShipmentsApi\Model\AccountType $accountType accountType
     *
     * @return $this
     */
    public function setAccountType($accountType)
    {
        $this->container['accountType'] = $accountType;

        return $this;
    }

    /**
     * Gets accountName
     *
     * @return string
     */
    public function getAccountName()
    {
        return $this->container['accountName'];
    }

    /**
     * Sets accountName
     *
     * @param string $accountName Shipping Account Name <br />The name of the Shipping Account.
     *
     * @return $this
     */
    public function setAccountName($accountName)
    {
        $this->container['accountName'] = $accountName;

        return $this;
    }

    /**
     * Gets accountRegisteredEmail
     *
     * @return string
     */
    public function getAccountRegisteredEmail()
    {
        return $this->container['accountRegisteredEmail'];
    }

    /**
     * Sets accountRegisteredEmail
     *
     * @param string $accountRegisteredEmail Account Registered Email <br />This is the email that was used to register your Shipping Account with the carrier when the Shipping Account was created.
     *
     * @return $this
     */
    public function setAccountRegisteredEmail($accountRegisteredEmail)
    {
        $this->container['accountRegisteredEmail'] = $accountRegisteredEmail;

        return $this;
    }

    /**
     * Gets accountAlias
     *
     * @return string
     */
    public function getAccountAlias()
    {
        return $this->container['accountAlias'];
    }

    /**
     * Sets accountAlias
     *
     * @param string $accountAlias Shipping Account Alias <br />Your identifier for this account. Must be unique.
     *
     * @return $this
     */
    public function setAccountAlias($accountAlias)
    {
        $this->container['accountAlias'] = $accountAlias;

        return $this;
    }

    /**
     * Gets accountStatus
     *
     * @return string
     */
    public function getAccountStatus()
    {
        return $this->container['accountStatus'];
    }

    /**
     * Sets accountStatus
     *
     * @param string $accountStatus Account Status <br />The status of the shipping account.
     *
     * @return $this
     */
    public function setAccountStatus($accountStatus)
    {
        $this->container['accountStatus'] = $accountStatus;

        return $this;
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
     * @param string $contactName Contact Name <br />Used in a create shipment request as the shipper's contact name if the shipper address is not provided.
     *
     * @return $this
     */
    public function setContactName($contactName)
    {
        $this->container['contactName'] = $contactName;

        return $this;
    }

    /**
     * Gets contactNumber
     *
     * @return string
     */
    public function getContactNumber()
    {
        return $this->container['contactNumber'];
    }

    /**
     * Sets contactNumber
     *
     * @param string $contactNumber Contact Number <br />Used in a create shipment request as the shipper's contact number if the shipper address is not provided, and the contact number is not set on the associated shipping location.
     *
     * @return $this
     */
    public function setContactNumber($contactNumber)
    {
        $this->container['contactNumber'] = $contactNumber;

        return $this;
    }

    /**
     * Gets lastUpdatedBy
     *
     * @return string
     */
    public function getLastUpdatedBy()
    {
        return $this->container['lastUpdatedBy'];
    }

    /**
     * Sets lastUpdatedBy
     *
     * @param string $lastUpdatedBy Last Updated By <br />The user that last updated the shipping account.
     *
     * @return $this
     */
    public function setLastUpdatedBy($lastUpdatedBy)
    {
        $this->container['lastUpdatedBy'] = $lastUpdatedBy;

        return $this;
    }

    /**
     * Gets lastUpdatedDateUtc
     *
     * @return \DateTime
     */
    public function getLastUpdatedDateUtc()
    {
        return $this->container['lastUpdatedDateUtc'];
    }

    /**
     * Sets lastUpdatedDateUtc
     *
     * @param \DateTime $lastUpdatedDateUtc Last Updated Date UTC <br />The system date and time when the shipping account was last updated.
     *
     * @return $this
     */
    public function setLastUpdatedDateUtc($lastUpdatedDateUtc)
    {
        $this->container['lastUpdatedDateUtc'] = $lastUpdatedDateUtc;

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
