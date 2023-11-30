# RoyalMailV4\ShipmentsApi\OfflineBarcodingApi

All URIs are relative to *https://api.proshipping.net/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**v4OfflineBarcodeNumberRangeRmPost**](OfflineBarcodingApi.md#v4offlinebarcodenumberrangermpost) | **POST** /v4/offlineBarcodeNumberRange/rm | Get Barcode Range

# **v4OfflineBarcodeNumberRangeRmPost**
> \RoyalMailV4\ShipmentsApi\Model\RoyalMailGetOfflineBarcodingResponse[] v4OfflineBarcodeNumberRangeRmPost($body)

Get Barcode Range

Get barcode ranges for offline barcoding. <br />Offline Barcoding is only available if it has been activated on your customer account in the GUI.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = RoyalMailV4\ShipmentsApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new RoyalMailV4\ShipmentsApi\Api\OfflineBarcodingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \RoyalMailV4\ShipmentsApi\Model\RoyalMailGetOfflineBarcodingRequest(); // \RoyalMailV4\ShipmentsApi\Model\RoyalMailGetOfflineBarcodingRequest | The request.

try {
    $result = $apiInstance->v4OfflineBarcodeNumberRangeRmPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OfflineBarcodingApi->v4OfflineBarcodeNumberRangeRmPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\RoyalMailV4\ShipmentsApi\Model\RoyalMailGetOfflineBarcodingRequest**](../Model/RoyalMailGetOfflineBarcodingRequest.md)| The request. | [optional]

### Return type

[**\RoyalMailV4\ShipmentsApi\Model\RoyalMailGetOfflineBarcodingResponse[]**](../Model/RoyalMailGetOfflineBarcodingResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

