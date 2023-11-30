# RoyalMailV4\ShipmentsApi\ShipmentsApi

All URIs are relative to *https://api.proshipping.net/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**v4ShipmentsDeferPut**](ShipmentsApi.md#v4shipmentsdeferput) | **PUT** /v4/shipments/defer | Defer Shipments
[**v4ShipmentsPreallocateTrackingNumberRmPost**](ShipmentsApi.md#v4shipmentspreallocatetrackingnumberrmpost) | **POST** /v4/shipments/preallocateTrackingNumber/rm | Pre Allocate Tracking Number
[**v4ShipmentsPrintDocumentCarrierCodeShipmentIdPost**](ShipmentsApi.md#v4shipmentsprintdocumentcarriercodeshipmentidpost) | **POST** /v4/shipments/printDocument/{carrierCode}/{shipmentId} | Print Document
[**v4ShipmentsPrintLabelRmShipmentIdGet**](ShipmentsApi.md#v4shipmentsprintlabelrmshipmentidget) | **GET** /v4/shipments/printLabel/rm/{shipmentId} | Print Label
[**v4ShipmentsPrintMyLabelQRCodeRmShipmentIdGet**](ShipmentsApi.md#v4shipmentsprintmylabelqrcodermshipmentidget) | **GET** /v4/shipments/printMyLabelQRCode/rm/{shipmentId} | Print My Label QR Code
[**v4ShipmentsRmPost**](ShipmentsApi.md#v4shipmentsrmpost) | **POST** /v4/shipments/rm | Create Shipment
[**v4ShipmentsShippingLocationIdGet**](ShipmentsApi.md#v4shipmentsshippinglocationidget) | **GET** /v4/shipments/{shippingLocationId} | Get Shipments
[**v4ShipmentsStatusPut**](ShipmentsApi.md#v4shipmentsstatusput) | **PUT** /v4/shipments/status | Update Status

# **v4ShipmentsDeferPut**
> v4ShipmentsDeferPut($body)

Defer Shipments

Used to update the shipment shipping data for a current shipment. <br />A shipment can be deferred by a maximum of 28 days from the date of the request. <br />This service can only be used before the shipment has been manifested. <br />There can be a maximum of 99 defer requests per call.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = RoyalMailV4\ShipmentsApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new RoyalMailV4\ShipmentsApi\Api\ShipmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = array(new \RoyalMailV4\ShipmentsApi\Model\DeferShipmentRequest()); // \RoyalMailV4\ShipmentsApi\Model\DeferShipmentRequest[] | Defer shipment requests

try {
    $apiInstance->v4ShipmentsDeferPut($body);
} catch (Exception $e) {
    echo 'Exception when calling ShipmentsApi->v4ShipmentsDeferPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\RoyalMailV4\ShipmentsApi\Model\DeferShipmentRequest[]**](../Model/DeferShipmentRequest.md)| Defer shipment requests | [optional]

### Return type

void (empty response body)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v4ShipmentsPreallocateTrackingNumberRmPost**
> \RoyalMailV4\ShipmentsApi\Model\PreAllocateTrackingNumberResponse v4ShipmentsPreallocateTrackingNumberRmPost($body)

Pre Allocate Tracking Number

This service can be used to receive a Royal Mail Tracking Number that will be pre-allocated to the service and destination supplied in the request. No shipment or label will be produced from this service. <br />This service can only be used for services that are assigned a tracking number. <br />This service must be used in conjunction with CreateShipment service populating the TrackingNumber in the CarrierSpecifics /PreAllocatedBarcode section with the pre-allocated TrackingNumber returned in this service response.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = RoyalMailV4\ShipmentsApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new RoyalMailV4\ShipmentsApi\Api\ShipmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \RoyalMailV4\ShipmentsApi\Model\PreAllocateTrackingNumberRequest(); // \RoyalMailV4\ShipmentsApi\Model\PreAllocateTrackingNumberRequest | The request.

try {
    $result = $apiInstance->v4ShipmentsPreallocateTrackingNumberRmPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShipmentsApi->v4ShipmentsPreallocateTrackingNumberRmPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\RoyalMailV4\ShipmentsApi\Model\PreAllocateTrackingNumberRequest**](../Model/PreAllocateTrackingNumberRequest.md)| The request. | [optional]

### Return type

[**\RoyalMailV4\ShipmentsApi\Model\PreAllocateTrackingNumberResponse**](../Model/PreAllocateTrackingNumberResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v4ShipmentsPrintDocumentCarrierCodeShipmentIdPost**
> \RoyalMailV4\ShipmentsApi\Model\PrintDocumentResponse v4ShipmentsPrintDocumentCarrierCodeShipmentIdPost($carrierCode, $shipmentId, $body)

Print Document

Request the associated Customs Documents for the printed label.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = RoyalMailV4\ShipmentsApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new RoyalMailV4\ShipmentsApi\Api\ShipmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$carrierCode = "carrierCode_example"; // string | Carrier Code
$shipmentId = "shipmentId_example"; // string | Shipment Id <br />The Shipment Id may be an id or a tracking/barcode number.
$body = new \RoyalMailV4\ShipmentsApi\Model\PrintDocumentRequest(); // \RoyalMailV4\ShipmentsApi\Model\PrintDocumentRequest | Print Document Request

try {
    $result = $apiInstance->v4ShipmentsPrintDocumentCarrierCodeShipmentIdPost($carrierCode, $shipmentId, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShipmentsApi->v4ShipmentsPrintDocumentCarrierCodeShipmentIdPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **carrierCode** | **string**| Carrier Code |
 **shipmentId** | **string**| Shipment Id &lt;br /&gt;The Shipment Id may be an id or a tracking/barcode number. |
 **body** | [**\RoyalMailV4\ShipmentsApi\Model\PrintDocumentRequest**](../Model/PrintDocumentRequest.md)| Print Document Request | [optional]

### Return type

[**\RoyalMailV4\ShipmentsApi\Model\PrintDocumentResponse**](../Model/PrintDocumentResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v4ShipmentsPrintLabelRmShipmentIdGet**
> \RoyalMailV4\ShipmentsApi\Model\RoyalMailLabelFormatRoyalMailShipmentResponseCarrierSpecificsPrintLabelResponse v4ShipmentsPrintLabelRmShipmentIdGet($shipmentId, $labelFormat)

Print Label

This changes the status of the shipment to label printed. This should be done at the time of actual printing or label creation dependent on how you operate in reality. Shipments must be updated to printed status prior to manifesting.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = RoyalMailV4\ShipmentsApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new RoyalMailV4\ShipmentsApi\Api\ShipmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$shipmentId = "shipmentId_example"; // string | Shipment Id <br />The Shipment Id may be an id or a tracking/barcode number.
$labelFormat = new \RoyalMailV4\ShipmentsApi\Model\RoyalMailLabelFormat(); // \RoyalMailV4\ShipmentsApi\Model\RoyalMailLabelFormat | Label Format <br />             <br />**PDF** Base 64 encoded PDF <br />**PNG** Base 64 encoded PNG <br />**DATASTREAM** - Label components broken down into a data-stream, for you to draw your own label <br />**ZPL203DPI** Base 64 encoded text for Zebra printer at 203 DPI <br />**ZPL300DPI** Base 64 encoded text for Zebra printer at 300 DPI <br />             <br />*DATASTREAM is only available if it has been activated on your account.* <br />             <br />Defaults To PDF

try {
    $result = $apiInstance->v4ShipmentsPrintLabelRmShipmentIdGet($shipmentId, $labelFormat);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShipmentsApi->v4ShipmentsPrintLabelRmShipmentIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **shipmentId** | **string**| Shipment Id &lt;br /&gt;The Shipment Id may be an id or a tracking/barcode number. |
 **labelFormat** | [**\RoyalMailV4\ShipmentsApi\Model\RoyalMailLabelFormat**](../Model/.md)| Label Format &lt;br /&gt;             &lt;br /&gt;**PDF** Base 64 encoded PDF &lt;br /&gt;**PNG** Base 64 encoded PNG &lt;br /&gt;**DATASTREAM** - Label components broken down into a data-stream, for you to draw your own label &lt;br /&gt;**ZPL203DPI** Base 64 encoded text for Zebra printer at 203 DPI &lt;br /&gt;**ZPL300DPI** Base 64 encoded text for Zebra printer at 300 DPI &lt;br /&gt;             &lt;br /&gt;*DATASTREAM is only available if it has been activated on your account.* &lt;br /&gt;             &lt;br /&gt;Defaults To PDF | [optional]

### Return type

[**\RoyalMailV4\ShipmentsApi\Model\RoyalMailLabelFormatRoyalMailShipmentResponseCarrierSpecificsPrintLabelResponse**](../Model/RoyalMailLabelFormatRoyalMailShipmentResponseCarrierSpecificsPrintLabelResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v4ShipmentsPrintMyLabelQRCodeRmShipmentIdGet**
> \RoyalMailV4\ShipmentsApi\Model\QRCodeResponse v4ShipmentsPrintMyLabelQRCodeRmShipmentIdGet($shipmentId)

Print My Label QR Code

Request associated QR Code for the associated label in the print label call. <br />This is only available for Royal Mail Tracked Return Services.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = RoyalMailV4\ShipmentsApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new RoyalMailV4\ShipmentsApi\Api\ShipmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$shipmentId = "shipmentId_example"; // string | Shipment Id <br />The Shipment Id may be an id or a tracking/barcode number.

try {
    $result = $apiInstance->v4ShipmentsPrintMyLabelQRCodeRmShipmentIdGet($shipmentId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShipmentsApi->v4ShipmentsPrintMyLabelQRCodeRmShipmentIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **shipmentId** | **string**| Shipment Id &lt;br /&gt;The Shipment Id may be an id or a tracking/barcode number. |

### Return type

[**\RoyalMailV4\ShipmentsApi\Model\QRCodeResponse**](../Model/QRCodeResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v4ShipmentsRmPost**
> \RoyalMailV4\ShipmentsApi\Model\RoyalMailLabelFormatRoyalMailShipmentResponseCarrierSpecificsPackageResponseCreateShipmentResponse v4ShipmentsRmPost($body)

Create Shipment

Create a Royal Mail shipment. This will return an image of the shipping label in PDF, PNG or ZPL format.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = RoyalMailV4\ShipmentsApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new RoyalMailV4\ShipmentsApi\Api\ShipmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \RoyalMailV4\ShipmentsApi\Model\RoyalMailShipmentRequestCarrierSpecificsRoyalMailPackageRoyalMailLabelFormatCreateShipmentRequest(); // \RoyalMailV4\ShipmentsApi\Model\RoyalMailShipmentRequestCarrierSpecificsRoyalMailPackageRoyalMailLabelFormatCreateShipmentRequest | Shipment Details

try {
    $result = $apiInstance->v4ShipmentsRmPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShipmentsApi->v4ShipmentsRmPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\RoyalMailV4\ShipmentsApi\Model\RoyalMailShipmentRequestCarrierSpecificsRoyalMailPackageRoyalMailLabelFormatCreateShipmentRequest**](../Model/RoyalMailShipmentRequestCarrierSpecificsRoyalMailPackageRoyalMailLabelFormatCreateShipmentRequest.md)| Shipment Details | [optional]

### Return type

[**\RoyalMailV4\ShipmentsApi\Model\RoyalMailLabelFormatRoyalMailShipmentResponseCarrierSpecificsPackageResponseCreateShipmentResponse**](../Model/RoyalMailLabelFormatRoyalMailShipmentResponseCarrierSpecificsPackageResponseCreateShipmentResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v4ShipmentsShippingLocationIdGet**
> \RoyalMailV4\ShipmentsApi\Model\ShipmentsPagedResponse v4ShipmentsShippingLocationIdGet($shippingLocationId, $shippingAccountId, $carrierCode, $status, $destinationCountryCode, $dateFrom, $dateTo, $pageSize, $pageNumber)

Get Shipments

Provides a list of shipments for the specified shipping location in a given time period.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = RoyalMailV4\ShipmentsApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new RoyalMailV4\ShipmentsApi\Api\ShipmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$shippingLocationId = "shippingLocationId_example"; // string | Shipping Location Id <br />PRO SHIPPING Shipping Location Id (assigned by PRO SHIPPING) or Alias (assigned by you). <br />Filter by shipping location.
$shippingAccountId = "shippingAccountId_example"; // string | Shipping Account Id <br />PRO SHIPPING Shipping Account Id (assigned by PRO SHIPPING) or Alias (assigned by you). <br />Filter by shipping account.
$carrierCode = "carrierCode_example"; // string | Carrier Code <br />If shippingAccountId and carrier are both provided, then the value sent in the carrier field will be ignored and the carrier associated with the shipping account will be used.
$status = new \RoyalMailV4\ShipmentsApi\Model\GetShipmentsStatusType(); // \RoyalMailV4\ShipmentsApi\Model\GetShipmentsStatusType | Status <br />Filter by shipment status.
$destinationCountryCode = "destinationCountryCode_example"; // string | Country Code <br />ISO Alpha-2 Country Code per ISO 3166 Standard.
$dateFrom = new \DateTime("2013-10-20"); // \DateTime | Date From <br />Defaults to Today's date if not provided. <br />Format: YYYY-MM-DD
$dateTo = new \DateTime("2013-10-20"); // \DateTime | Date To <br />Defaults to Today's date if not provided. <br />Format: YYYY-MM-DD
$pageSize = 100; // int | The maximum number of records per page.
$pageNumber = 1; // int | The number of the requested page, starting at 1.

try {
    $result = $apiInstance->v4ShipmentsShippingLocationIdGet($shippingLocationId, $shippingAccountId, $carrierCode, $status, $destinationCountryCode, $dateFrom, $dateTo, $pageSize, $pageNumber);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShipmentsApi->v4ShipmentsShippingLocationIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **shippingLocationId** | **string**| Shipping Location Id &lt;br /&gt;PRO SHIPPING Shipping Location Id (assigned by PRO SHIPPING) or Alias (assigned by you). &lt;br /&gt;Filter by shipping location. |
 **shippingAccountId** | **string**| Shipping Account Id &lt;br /&gt;PRO SHIPPING Shipping Account Id (assigned by PRO SHIPPING) or Alias (assigned by you). &lt;br /&gt;Filter by shipping account. | [optional]
 **carrierCode** | **string**| Carrier Code &lt;br /&gt;If shippingAccountId and carrier are both provided, then the value sent in the carrier field will be ignored and the carrier associated with the shipping account will be used. | [optional]
 **status** | [**\RoyalMailV4\ShipmentsApi\Model\GetShipmentsStatusType**](../Model/.md)| Status &lt;br /&gt;Filter by shipment status. | [optional]
 **destinationCountryCode** | **string**| Country Code &lt;br /&gt;ISO Alpha-2 Country Code per ISO 3166 Standard. | [optional]
 **dateFrom** | **\DateTime**| Date From &lt;br /&gt;Defaults to Today&#x27;s date if not provided. &lt;br /&gt;Format: YYYY-MM-DD | [optional]
 **dateTo** | **\DateTime**| Date To &lt;br /&gt;Defaults to Today&#x27;s date if not provided. &lt;br /&gt;Format: YYYY-MM-DD | [optional]
 **pageSize** | **int**| The maximum number of records per page. | [optional] [default to 100]
 **pageNumber** | **int**| The number of the requested page, starting at 1. | [optional] [default to 1]

### Return type

[**\RoyalMailV4\ShipmentsApi\Model\ShipmentsPagedResponse**](../Model/ShipmentsPagedResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v4ShipmentsStatusPut**
> v4ShipmentsStatusPut($body)

Update Status

**Hold** - Put the shipments on hold for up to 28 days. Shipments on hold for longer than 28 days will be cancelled. A shipment on hold will not be included in an closeouts/manifests, but instead will remain in its current state. You can only put shipments on hold that are in the 'LabelPrinted' status as only shipments with this status are included in manifests. <br />             <br />**Cancel** - Use to cancel/void one or more current shipments. This can only be used before a shipment has been confirmed by being manifested. <br />             <br />**Release** - Use to release shipments from hold and shipments cancelled for less than 24 hours. Once released, the shipment will be included in the next manifest. <br />             <br />**Picked** - Set the shipment to picked. This means this shipment will only be manifested if you choose to manifest 'Picked' shipments.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = RoyalMailV4\ShipmentsApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new RoyalMailV4\ShipmentsApi\Api\ShipmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \RoyalMailV4\ShipmentsApi\Model\UpdateStatusRequest(); // \RoyalMailV4\ShipmentsApi\Model\UpdateStatusRequest | Update Status Request

try {
    $apiInstance->v4ShipmentsStatusPut($body);
} catch (Exception $e) {
    echo 'Exception when calling ShipmentsApi->v4ShipmentsStatusPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\RoyalMailV4\ShipmentsApi\Model\UpdateStatusRequest**](../Model/UpdateStatusRequest.md)| Update Status Request | [optional]

### Return type

void (empty response body)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

