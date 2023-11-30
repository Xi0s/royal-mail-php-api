<?php
/**
 * RoyalMailLabelFormatShipmentInformationTest
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
 * Please update the test case below to test the model.
 */

namespace RoyalMailV4\ShipmentsApi;

use PHPUnit\Framework\TestCase;

/**
 * RoyalMailLabelFormatShipmentInformationTest Class Doc Comment
 *
 * @category    Class
 * @description Used to provide shipment-level information such as service code, content type, general goods description, total shipment weight and value etc.
 * @package     RoyalMailV4\ShipmentsApi
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class RoyalMailLabelFormatShipmentInformationTest extends TestCase
{

    /**
     * Setup before running any test case
     */
    public static function setUpBeforeClass(): void
    {
    }

    /**
     * Setup before running each test case
     */
    public function setUp(): void
    {
    }

    /**
     * Clean up after running each test case
     */
    public function tearDown(): void
    {
    }

    /**
     * Clean up after running all test cases
     */
    public static function tearDownAfterClass(): void
    {
    }

    /**
     * Test "RoyalMailLabelFormatShipmentInformation"
     */
    public function testRoyalMailLabelFormatShipmentInformation()
    {
    }

    /**
     * Test attribute "action"
     */
    public function testPropertyAction()
    {
    }

    /**
     * Test attribute "labelFormat"
     */
    public function testPropertyLabelFormat()
    {
    }

    /**
     * Test attribute "contentType"
     */
    public function testPropertyContentType()
    {
    }

    /**
     * Test attribute "serviceCode"
     */
    public function testPropertyServiceCode()
    {
    }

    /**
     * Test attribute "descriptionOfGoods"
     */
    public function testPropertyDescriptionOfGoods()
    {
    }

    /**
     * Test attribute "businessTransactionType"
     */
    public function testPropertyBusinessTransactionType()
    {
    }

    /**
     * Test attribute "shipmentDate"
     */
    public function testPropertyShipmentDate()
    {
    }

    /**
     * Test attribute "declaredValue"
     */
    public function testPropertyDeclaredValue()
    {
    }

    /**
     * Test attribute "declaredWeight"
     */
    public function testPropertyDeclaredWeight()
    {
    }

    /**
     * Test attribute "currencyCode"
     */
    public function testPropertyCurrencyCode()
    {
    }

    /**
     * Test attribute "weightUnitOfMeasure"
     */
    public function testPropertyWeightUnitOfMeasure()
    {
    }

    /**
     * Test attribute "dimensionsUnitOfMeasure"
     */
    public function testPropertyDimensionsUnitOfMeasure()
    {
    }
}
