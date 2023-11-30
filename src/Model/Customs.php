<?php
/**
 * Customs
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
 * Customs Class Doc Comment
 *
 * @category Class
 * @description Customs Information &lt;br /&gt;Required for some international shipments, depending on the customs requirements of the destination country.  &lt;br /&gt;A shipment is considered to be international if the shipper country and destination country are different.
 * @package  RoyalMailV4\ShipmentsApi
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Customs implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Customs';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'reasonForExport' => 'string',
        'incoterms' => '\RoyalMailV4\ShipmentsApi\Model\TermsOfTrade',
        'preRegistrationNumber' => 'string',
        'preRegistrationType' => 'string',
        'shippingCharges' => 'double',
        'otherCharges' => 'double',
        'quotedLandedCost' => 'double',
        'invoiceNumber' => 'string',
        'invoiceDate' => '\DateTime',
        'exportLicenceRequired' => 'bool',
        'airn' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'reasonForExport' => null,
        'incoterms' => null,
        'preRegistrationNumber' => null,
        'preRegistrationType' => null,
        'shippingCharges' => 'double',
        'otherCharges' => 'double',
        'quotedLandedCost' => 'double',
        'invoiceNumber' => null,
        'invoiceDate' => 'date',
        'exportLicenceRequired' => null,
        'airn' => null
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
        'reasonForExport' => 'ReasonForExport',
        'incoterms' => 'Incoterms',
        'preRegistrationNumber' => 'PreRegistrationNumber',
        'preRegistrationType' => 'PreRegistrationType',
        'shippingCharges' => 'ShippingCharges',
        'otherCharges' => 'OtherCharges',
        'quotedLandedCost' => 'QuotedLandedCost',
        'invoiceNumber' => 'InvoiceNumber',
        'invoiceDate' => 'InvoiceDate',
        'exportLicenceRequired' => 'ExportLicenceRequired',
        'airn' => 'Airn'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'reasonForExport' => 'setReasonForExport',
        'incoterms' => 'setIncoterms',
        'preRegistrationNumber' => 'setPreRegistrationNumber',
        'preRegistrationType' => 'setPreRegistrationType',
        'shippingCharges' => 'setShippingCharges',
        'otherCharges' => 'setOtherCharges',
        'quotedLandedCost' => 'setQuotedLandedCost',
        'invoiceNumber' => 'setInvoiceNumber',
        'invoiceDate' => 'setInvoiceDate',
        'exportLicenceRequired' => 'setExportLicenceRequired',
        'airn' => 'setAirn'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'reasonForExport' => 'getReasonForExport',
        'incoterms' => 'getIncoterms',
        'preRegistrationNumber' => 'getPreRegistrationNumber',
        'preRegistrationType' => 'getPreRegistrationType',
        'shippingCharges' => 'getShippingCharges',
        'otherCharges' => 'getOtherCharges',
        'quotedLandedCost' => 'getQuotedLandedCost',
        'invoiceNumber' => 'getInvoiceNumber',
        'invoiceDate' => 'getInvoiceDate',
        'exportLicenceRequired' => 'getExportLicenceRequired',
        'airn' => 'getAirn'
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
        $this->container['reasonForExport'] = isset($data['reasonForExport']) ? $data['reasonForExport'] : null;
        $this->container['incoterms'] = isset($data['incoterms']) ? $data['incoterms'] : null;
        $this->container['preRegistrationNumber'] = isset($data['preRegistrationNumber']) ? $data['preRegistrationNumber'] : null;
        $this->container['preRegistrationType'] = isset($data['preRegistrationType']) ? $data['preRegistrationType'] : null;
        $this->container['shippingCharges'] = isset($data['shippingCharges']) ? $data['shippingCharges'] : null;
        $this->container['otherCharges'] = isset($data['otherCharges']) ? $data['otherCharges'] : null;
        $this->container['quotedLandedCost'] = isset($data['quotedLandedCost']) ? $data['quotedLandedCost'] : null;
        $this->container['invoiceNumber'] = isset($data['invoiceNumber']) ? $data['invoiceNumber'] : null;
        $this->container['invoiceDate'] = isset($data['invoiceDate']) ? $data['invoiceDate'] : null;
        $this->container['exportLicenceRequired'] = isset($data['exportLicenceRequired']) ? $data['exportLicenceRequired'] : null;
        $this->container['airn'] = isset($data['airn']) ? $data['airn'] : null;
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
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets reasonForExport
     *
     * @return string
     */
    public function getReasonForExport()
    {
        return $this->container['reasonForExport'];
    }

    /**
     * Sets reasonForExport
     *
     * @param string $reasonForExport Used to provide the reason an international shipment is being sent e.g. Sale, Gift, Return etc.  <br />Mandatory for Royal Mail international shipments and Yodel international shipments.  <br />If there are no accepted values for the carrier stated below, any value can be provided in the field. <br />For shipments where the carrier is UPU affiliated and the service is a postal service, then only the following values are accepted: <br />**Gift** <br />**Commercial Sample** <br />**Documents** <br />**Sale of Goods** <br />**Return of Goods** <br />**Mixed Content** <br />**Other** <br />For Yodel shipments, only the following values are accepted: <br />**Sales** <br />**Gift** <br />**Sample** <br />**Personal**
     *
     * @return $this
     */
    public function setReasonForExport($reasonForExport)
    {
        $this->container['reasonForExport'] = $reasonForExport;

        return $this;
    }

    /**
     * Gets incoterms
     *
     * @return \RoyalMailV4\ShipmentsApi\Model\TermsOfTrade
     */
    public function getIncoterms()
    {
        return $this->container['incoterms'];
    }

    /**
     * Sets incoterms
     *
     * @param \RoyalMailV4\ShipmentsApi\Model\TermsOfTrade $incoterms incoterms
     *
     * @return $this
     */
    public function setIncoterms($incoterms)
    {
        $this->container['incoterms'] = $incoterms;

        return $this;
    }

    /**
     * Gets preRegistrationNumber
     *
     * @return string
     */
    public function getPreRegistrationNumber()
    {
        return $this->container['preRegistrationNumber'];
    }

    /**
     * Sets preRegistrationNumber
     *
     * @param string $preRegistrationNumber Some countries operate a Tax Pre-Registration scheme (e.g., VOEC in Norway, GST in Australia). If you are registered for a Tax Pre-Registration scheme for the destination country and are shipping under the scheme rules then provide the pre-registration number for the destination country.  <br />A pre-registration number is only relevant if the shipment Incoterms are DDU (Delivery Duty Unpaid). <br />If not provided and the shipment incoterms are set to DDU, any pre-registration numbers set up for your account in the Customs Settings GUI will be used. <br />**NOTE**: VAT and EORI numbers should be provided in the  Shipper VatNumber and Shipper EoriNumber fields, not in the preRegistrationNumber fields.
     *
     * @return $this
     */
    public function setPreRegistrationNumber($preRegistrationNumber)
    {
        $this->container['preRegistrationNumber'] = $preRegistrationNumber;

        return $this;
    }

    /**
     * Gets preRegistrationType
     *
     * @return string
     */
    public function getPreRegistrationType()
    {
        return $this->container['preRegistrationType'];
    }

    /**
     * Sets preRegistrationType
     *
     * @param string $preRegistrationType The type of pre-registration number provided in the PreRegistrationNumber element. <br />Required if a pre-registration number has been provided. <br />Ignored if there is no pre-registration number. <br />**NOTE:** VAT and EORI numbers should be provided in the  Shipper VatNumber and Shipper EoriNumber fields, not in the preRegistrationNumber and PreRegistrationType fields
     *
     * @return $this
     */
    public function setPreRegistrationType($preRegistrationType)
    {
        $this->container['preRegistrationType'] = $preRegistrationType;

        return $this;
    }

    /**
     * Gets shippingCharges
     *
     * @return double
     */
    public function getShippingCharges()
    {
        return $this->container['shippingCharges'];
    }

    /**
     * Sets shippingCharges
     *
     * @param double $shippingCharges Shipping Charges for International Shipments. <br />The postage amount paid by the customer. The amount can be 0.00 if the customer has been offered free delivery. <br />Used for the calculation of customs fees. <br />Any value should be in the currency specified in the ShipmentInformation/Currency field.
     *
     * @return $this
     */
    public function setShippingCharges($shippingCharges)
    {
        $this->container['shippingCharges'] = $shippingCharges;

        return $this;
    }

    /**
     * Gets otherCharges
     *
     * @return double
     */
    public function getOtherCharges()
    {
        return $this->container['otherCharges'];
    }

    /**
     * Sets otherCharges
     *
     * @param double $otherCharges Insurance and Other Costs for International Shipments. <br />Used to declare any costs the customer has been charged in addition to the standard shipping cost, such as insurance. <br />This field can be left blank, or be 0.00 if no other charges have been levied.         <br />Any value should be in the currency specified in the ShipmentInformation/Currency field.
     *
     * @return $this
     */
    public function setOtherCharges($otherCharges)
    {
        $this->container['otherCharges'] = $otherCharges;

        return $this;
    }

    /**
     * Gets quotedLandedCost
     *
     * @return double
     */
    public function getQuotedLandedCost()
    {
        return $this->container['quotedLandedCost'];
    }

    /**
     * Sets quotedLandedCost
     *
     * @param double $quotedLandedCost The total cost quoted to the customer for delivering the shipment. This includes shipping charges, other charges and any customs taxes and duties charges that were quoted. <br />Required for some international destinations when the shipment incoterms are DDP. <br />Any value should be in the currency specified in the ShipmentInformation/Currency field.
     *
     * @return $this
     */
    public function setQuotedLandedCost($quotedLandedCost)
    {
        $this->container['quotedLandedCost'] = $quotedLandedCost;

        return $this;
    }

    /**
     * Gets invoiceNumber
     *
     * @return string
     */
    public function getInvoiceNumber()
    {
        return $this->container['invoiceNumber'];
    }

    /**
     * Sets invoiceNumber
     *
     * @param string $invoiceNumber Invoice Number for International Shipments. <br />When sending an item to an overseas address and a Commercial or Proforma invoice is available, the Invoice Number and Date should be provided where possible. This supports customs processing in certain circumstances. <br />Required if Invoice Date is provided. <br />If provided, this will be displayed on commercial invoices generated for the shipment.
     *
     * @return $this
     */
    public function setInvoiceNumber($invoiceNumber)
    {
        $this->container['invoiceNumber'] = $invoiceNumber;

        return $this;
    }

    /**
     * Gets invoiceDate
     *
     * @return \DateTime
     */
    public function getInvoiceDate()
    {
        return $this->container['invoiceDate'];
    }

    /**
     * Sets invoiceDate
     *
     * @param \DateTime $invoiceDate If not provided, defaults to today's date. <br />Ignored if no Invoice Number provided. <br />Accepted Format: YYYY-MM-DD
     *
     * @return $this
     */
    public function setInvoiceDate($invoiceDate)
    {
        $this->container['invoiceDate'] = $invoiceDate;

        return $this;
    }

    /**
     * Gets exportLicenceRequired
     *
     * @return bool
     */
    public function getExportLicenceRequired()
    {
        return $this->container['exportLicenceRequired'];
    }

    /**
     * Sets exportLicenceRequired
     *
     * @param bool $exportLicenceRequired Used to flag shipments requiring an export license.  <br />An export license is neeed for a specific type of goods used predominantly for military purposes. <br />You can find out more about the type of items requiring an export licence on the UK Government website. <br />If an export licence is required, it should be affixed to the outside of the package.
     *
     * @return $this
     */
    public function setExportLicenceRequired($exportLicenceRequired)
    {
        $this->container['exportLicenceRequired'] = $exportLicenceRequired;

        return $this;
    }

    /**
     * Gets airn
     *
     * @return string
     */
    public function getAirn()
    {
        return $this->container['airn'];
    }

    /**
     * Sets airn
     *
     * @param string $airn The AIRN (Addressee Identification Reference Number) is the generic name given to a national identification number for the overseas recipient of an item. <br />The AIRN, when available, should be provided for items being exported to a destination where the customs/tax authority requests one. E.g. Russia and Brazil.
     *
     * @return $this
     */
    public function setAirn($airn)
    {
        $this->container['airn'] = $airn;

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
