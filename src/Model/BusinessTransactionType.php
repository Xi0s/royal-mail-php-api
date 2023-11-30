<?php
/**
 * BusinessTransactionType
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
use \RoyalMailV4\ShipmentsApi\ObjectSerializer;

/**
 * BusinessTransactionType Class Doc Comment
 *
 * @category Class
 * @description The Commercial Transaction type of the shipment.       &lt;br /&gt;Valid values are: &lt;br /&gt;**B2C** - Business to Consumer &lt;br /&gt;**B2B** - Business to Business &lt;br /&gt;**D2C** - Direct to Consumer &lt;br /&gt;**C2B** - Consumer to Business (i.e. a Returns shipment) &lt;br /&gt;Defaults to B2C if not populated.
 * @package  RoyalMailV4\ShipmentsApi
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class BusinessTransactionType
{
    /**
     * Possible values of this enum
     */
    const B2_C = 'B2C';
    const B2_B = 'B2B';
    const D2_C = 'D2C';
    const C2_B = 'C2B';
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::B2_C,
            self::B2_B,
            self::D2_C,
            self::C2_B,
        ];
    }
}
