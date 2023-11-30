# RoyalMailV4\ShipmentsApi\ShippingAccountsApi

All URIs are relative to *https://api.proshipping.net/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**v4ShippingAccountsCarrierCodeShippingAccountIdDelete**](ShippingAccountsApi.md#v4shippingaccountscarriercodeshippingaccountiddelete) | **DELETE** /v4/shippingAccounts/{carrierCode}/{shippingAccountId} | Delete Account
[**v4ShippingAccountsCarrierCodeShippingAccountIdUnlinkLocationsPut**](ShippingAccountsApi.md#v4shippingaccountscarriercodeshippingaccountidunlinklocationsput) | **PUT** /v4/shippingAccounts/{carrierCode}/{shippingAccountId}/unlinkLocations | Unlink Locations
[**v4ShippingAccountsGet**](ShippingAccountsApi.md#v4shippingaccountsget) | **GET** /v4/shippingAccounts | Get Accounts
[**v4ShippingAccountsRmGet**](ShippingAccountsApi.md#v4shippingaccountsrmget) | **GET** /v4/shippingAccounts/rm | Get Carrier Accounts
[**v4ShippingAccountsRmPost**](ShippingAccountsApi.md#v4shippingaccountsrmpost) | **POST** /v4/shippingAccounts/rm | Add Account
[**v4ShippingAccountsRmShippingAccountIdGet**](ShippingAccountsApi.md#v4shippingaccountsrmshippingaccountidget) | **GET** /v4/shippingAccounts/rm/{shippingAccountId} | Get Account
[**v4ShippingAccountsRmShippingAccountIdLinkLocationsPost**](ShippingAccountsApi.md#v4shippingaccountsrmshippingaccountidlinklocationspost) | **POST** /v4/shippingAccounts/rm/{shippingAccountId}/linkLocations | Link Locations
[**v4ShippingAccountsRmShippingAccountIdPut**](ShippingAccountsApi.md#v4shippingaccountsrmshippingaccountidput) | **PUT** /v4/shippingAccounts/rm/{shippingAccountId} | Update Account
[**v4ShippingAccountsRmShippingAccountIdShippingLocationsGet**](ShippingAccountsApi.md#v4shippingaccountsrmshippingaccountidshippinglocationsget) | **GET** /v4/shippingAccounts/rm/{shippingAccountId}/shippingLocations | Get Associated Locations
[**v4ShippingAccountsRmShippingAccountIdShippingLocationsShippingLocationIdGet**](ShippingAccountsApi.md#v4shippingaccountsrmshippingaccountidshippinglocationsshippinglocationidget) | **GET** /v4/shippingAccounts/rm/{shippingAccountId}/shippingLocations/{shippingLocationId} | Get Associated Location
[**v4ShippingAccountsRmShippingAccountIdShippingLocationsShippingLocationIdPut**](ShippingAccountsApi.md#v4shippingaccountsrmshippingaccountidshippinglocationsshippinglocationidput) | **PUT** /v4/shippingAccounts/rm/{shippingAccountId}/shippingLocations/{shippingLocationId} | Update Associated Location

# **v4ShippingAccountsCarrierCodeShippingAccountIdDelete**
> v4ShippingAccountsCarrierCodeShippingAccountIdDelete($carrierCode, $shippingAccountId)

Delete Account

Delete a specific shipping account.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = RoyalMailV4\ShipmentsApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new RoyalMailV4\ShipmentsApi\Api\ShippingAccountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$carrierCode = "carrierCode_example"; // string | Carrier Code
$shippingAccountId = "shippingAccountId_example"; // string | Shipping Account Identifier <br />PRO SHIPPING Shipping Account Id (assigned by PRO SHIPPING) or Alias (assigned by you).

try {
    $apiInstance->v4ShippingAccountsCarrierCodeShippingAccountIdDelete($carrierCode, $shippingAccountId);
} catch (Exception $e) {
    echo 'Exception when calling ShippingAccountsApi->v4ShippingAccountsCarrierCodeShippingAccountIdDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **carrierCode** | **string**| Carrier Code |
 **shippingAccountId** | **string**| Shipping Account Identifier &lt;br /&gt;PRO SHIPPING Shipping Account Id (assigned by PRO SHIPPING) or Alias (assigned by you). |

### Return type

void (empty response body)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v4ShippingAccountsCarrierCodeShippingAccountIdUnlinkLocationsPut**
> v4ShippingAccountsCarrierCodeShippingAccountIdUnlinkLocationsPut($carrierCode, $shippingAccountId, $body)

Unlink Locations

Unlink one or more shipping location from a specific carrier shipping account.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = RoyalMailV4\ShipmentsApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new RoyalMailV4\ShipmentsApi\Api\ShippingAccountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$carrierCode = "carrierCode_example"; // string | Carrier Code
$shippingAccountId = "shippingAccountId_example"; // string | Shipping Account Identifier <br />PRO SHIPPING Shipping Account Id (assigned by PRO SHIPPING) or Alias (assigned by you).
$body = array(new \RoyalMailV4\ShipmentsApi\Model\ShippingLocationIdRequest()); // \RoyalMailV4\ShipmentsApi\Model\ShippingLocationIdRequest[] | Shipping Locations
The locations to remove from the account.
At least one location must be provided.

try {
    $apiInstance->v4ShippingAccountsCarrierCodeShippingAccountIdUnlinkLocationsPut($carrierCode, $shippingAccountId, $body);
} catch (Exception $e) {
    echo 'Exception when calling ShippingAccountsApi->v4ShippingAccountsCarrierCodeShippingAccountIdUnlinkLocationsPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **carrierCode** | **string**| Carrier Code |
 **shippingAccountId** | **string**| Shipping Account Identifier &lt;br /&gt;PRO SHIPPING Shipping Account Id (assigned by PRO SHIPPING) or Alias (assigned by you). |
 **body** | [**\RoyalMailV4\ShipmentsApi\Model\ShippingLocationIdRequest[]**](../Model/ShippingLocationIdRequest.md)| Shipping Locations
The locations to remove from the account.
At least one location must be provided. | [optional]

### Return type

void (empty response body)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v4ShippingAccountsGet**
> \RoyalMailV4\ShipmentsApi\Model\ShippingAccountsPagedResponse v4ShippingAccountsGet($searchTerm, $pageSize, $pageNumber, $sortBy, $sortDir)

Get Accounts

Provides a list of all shipping accounts for all carriers (created on your customer account). <br />Information about the associated carrier, account number, account type, and contact details is included in the response.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = RoyalMailV4\ShipmentsApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new RoyalMailV4\ShipmentsApi\Api\ShippingAccountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$searchTerm = "searchTerm_example"; // string | Search Term
$pageSize = 100; // int | The maximum number of records per page.
$pageNumber = 1; // int | The number of the requested page, starting at 1.
$sortBy = new \RoyalMailV4\ShipmentsApi\Model\ShippingAccountsSortBy(); // \RoyalMailV4\ShipmentsApi\Model\ShippingAccountsSortBy | Sort By <br />Default: Name
$sortDir = new \RoyalMailV4\ShipmentsApi\Model\OrderDirection(); // \RoyalMailV4\ShipmentsApi\Model\OrderDirection | Sort Direction <br />Default: Ascending

try {
    $result = $apiInstance->v4ShippingAccountsGet($searchTerm, $pageSize, $pageNumber, $sortBy, $sortDir);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShippingAccountsApi->v4ShippingAccountsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **searchTerm** | **string**| Search Term | [optional]
 **pageSize** | **int**| The maximum number of records per page. | [optional] [default to 100]
 **pageNumber** | **int**| The number of the requested page, starting at 1. | [optional] [default to 1]
 **sortBy** | [**\RoyalMailV4\ShipmentsApi\Model\ShippingAccountsSortBy**](../Model/.md)| Sort By &lt;br /&gt;Default: Name | [optional]
 **sortDir** | [**\RoyalMailV4\ShipmentsApi\Model\OrderDirection**](../Model/.md)| Sort Direction &lt;br /&gt;Default: Ascending | [optional]

### Return type

[**\RoyalMailV4\ShipmentsApi\Model\ShippingAccountsPagedResponse**](../Model/ShippingAccountsPagedResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v4ShippingAccountsRmGet**
> \RoyalMailV4\ShipmentsApi\Model\RoyalMailShippingAccountShippingAccountsPagedResponse v4ShippingAccountsRmGet($searchTerm, $pageSize, $pageNumber, $sortBy, $sortDir)

Get Carrier Accounts

Provides a list of Royal Mail shipping accounts only. <br />Information about the account number, account type, and contact details is included in the response.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = RoyalMailV4\ShipmentsApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new RoyalMailV4\ShipmentsApi\Api\ShippingAccountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$searchTerm = "searchTerm_example"; // string | Search Term
$pageSize = 100; // int | The maximum number of records per page.
$pageNumber = 1; // int | The number of the requested page, starting at 1.
$sortBy = new \RoyalMailV4\ShipmentsApi\Model\ShippingAccountsSortBy(); // \RoyalMailV4\ShipmentsApi\Model\ShippingAccountsSortBy | Sort By <br />Default: Name
$sortDir = new \RoyalMailV4\ShipmentsApi\Model\OrderDirection(); // \RoyalMailV4\ShipmentsApi\Model\OrderDirection | Sort Direction <br />Default: Ascending

try {
    $result = $apiInstance->v4ShippingAccountsRmGet($searchTerm, $pageSize, $pageNumber, $sortBy, $sortDir);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShippingAccountsApi->v4ShippingAccountsRmGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **searchTerm** | **string**| Search Term | [optional]
 **pageSize** | **int**| The maximum number of records per page. | [optional] [default to 100]
 **pageNumber** | **int**| The number of the requested page, starting at 1. | [optional] [default to 1]
 **sortBy** | [**\RoyalMailV4\ShipmentsApi\Model\ShippingAccountsSortBy**](../Model/.md)| Sort By &lt;br /&gt;Default: Name | [optional]
 **sortDir** | [**\RoyalMailV4\ShipmentsApi\Model\OrderDirection**](../Model/.md)| Sort Direction &lt;br /&gt;Default: Ascending | [optional]

### Return type

[**\RoyalMailV4\ShipmentsApi\Model\RoyalMailShippingAccountShippingAccountsPagedResponse**](../Model/RoyalMailShippingAccountShippingAccountsPagedResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v4ShippingAccountsRmPost**
> \RoyalMailV4\ShipmentsApi\Model\AddShippingAccountResponse v4ShippingAccountsRmPost($body)

Add Account

Add a shipping account for Royal Mail and link it with an existing shipping location. <br />Ensure to have required carrier details ready like Royal Mail account number, Posting Location, OBA access codes and receiving hub, so that you can use the account for shipping with Royal Mail.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = RoyalMailV4\ShipmentsApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new RoyalMailV4\ShipmentsApi\Api\ShippingAccountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \RoyalMailV4\ShipmentsApi\Model\RoyalMailAddShippingAccountRequest(); // \RoyalMailV4\ShipmentsApi\Model\RoyalMailAddShippingAccountRequest | Add Shipping Account Request

try {
    $result = $apiInstance->v4ShippingAccountsRmPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShippingAccountsApi->v4ShippingAccountsRmPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\RoyalMailV4\ShipmentsApi\Model\RoyalMailAddShippingAccountRequest**](../Model/RoyalMailAddShippingAccountRequest.md)| Add Shipping Account Request | [optional]

### Return type

[**\RoyalMailV4\ShipmentsApi\Model\AddShippingAccountResponse**](../Model/AddShippingAccountResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v4ShippingAccountsRmShippingAccountIdGet**
> \RoyalMailV4\ShipmentsApi\Model\RoyalMailShippingAccount v4ShippingAccountsRmShippingAccountIdGet($shippingAccountId)

Get Account

Provides details for a Royal Mail account. <br />Information about the account number, alias, account type, and contact details is included in the response.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = RoyalMailV4\ShipmentsApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new RoyalMailV4\ShipmentsApi\Api\ShippingAccountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$shippingAccountId = "shippingAccountId_example"; // string | Shipping Account Identifier <br />PRO SHIPPING Shipping Account Id (assigned by PRO SHIPPING) or Alias (assigned by you).

try {
    $result = $apiInstance->v4ShippingAccountsRmShippingAccountIdGet($shippingAccountId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShippingAccountsApi->v4ShippingAccountsRmShippingAccountIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **shippingAccountId** | **string**| Shipping Account Identifier &lt;br /&gt;PRO SHIPPING Shipping Account Id (assigned by PRO SHIPPING) or Alias (assigned by you). |

### Return type

[**\RoyalMailV4\ShipmentsApi\Model\RoyalMailShippingAccount**](../Model/RoyalMailShippingAccount.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v4ShippingAccountsRmShippingAccountIdLinkLocationsPost**
> v4ShippingAccountsRmShippingAccountIdLinkLocationsPost($shippingAccountId, $body)

Link Locations

Link one or more shipping locations with a Royal Mail shipping account. <br />Ensure to have required carrier details ready: Royal Mail Posting Location number, OBA access codes and receiving hub, so that you can link it successfully.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = RoyalMailV4\ShipmentsApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new RoyalMailV4\ShipmentsApi\Api\ShippingAccountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$shippingAccountId = "shippingAccountId_example"; // string | Shipping Account Identifier <br />PRO SHIPPING Shipping Account Id (assigned by PRO SHIPPING) or Alias (assigned by you).
$body = array(new \RoyalMailV4\ShipmentsApi\Model\RoyalMailLinkShippingAccountLocation()); // \RoyalMailV4\ShipmentsApi\Model\RoyalMailLinkShippingAccountLocation[] | Shipping Locations
The locations to associate with this shipping account.

try {
    $apiInstance->v4ShippingAccountsRmShippingAccountIdLinkLocationsPost($shippingAccountId, $body);
} catch (Exception $e) {
    echo 'Exception when calling ShippingAccountsApi->v4ShippingAccountsRmShippingAccountIdLinkLocationsPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **shippingAccountId** | **string**| Shipping Account Identifier &lt;br /&gt;PRO SHIPPING Shipping Account Id (assigned by PRO SHIPPING) or Alias (assigned by you). |
 **body** | [**\RoyalMailV4\ShipmentsApi\Model\RoyalMailLinkShippingAccountLocation[]**](../Model/RoyalMailLinkShippingAccountLocation.md)| Shipping Locations
The locations to associate with this shipping account. | [optional]

### Return type

void (empty response body)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v4ShippingAccountsRmShippingAccountIdPut**
> v4ShippingAccountsRmShippingAccountIdPut($shippingAccountId, $body)

Update Account

Update shipping account details. <br />Note: All required fields must be populated in the request, regardless if they need updating or not.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = RoyalMailV4\ShipmentsApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new RoyalMailV4\ShipmentsApi\Api\ShippingAccountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$shippingAccountId = "shippingAccountId_example"; // string | Shipping Account Identifier <br />PRO SHIPPING Shipping Account Id (assigned by PRO SHIPPING) or Alias (assigned by you).
$body = new \RoyalMailV4\ShipmentsApi\Model\RoyalMailUpdateShippingAccountRequest(); // \RoyalMailV4\ShipmentsApi\Model\RoyalMailUpdateShippingAccountRequest | Shipping Account Details

try {
    $apiInstance->v4ShippingAccountsRmShippingAccountIdPut($shippingAccountId, $body);
} catch (Exception $e) {
    echo 'Exception when calling ShippingAccountsApi->v4ShippingAccountsRmShippingAccountIdPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **shippingAccountId** | **string**| Shipping Account Identifier &lt;br /&gt;PRO SHIPPING Shipping Account Id (assigned by PRO SHIPPING) or Alias (assigned by you). |
 **body** | [**\RoyalMailV4\ShipmentsApi\Model\RoyalMailUpdateShippingAccountRequest**](../Model/RoyalMailUpdateShippingAccountRequest.md)| Shipping Account Details | [optional]

### Return type

void (empty response body)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v4ShippingAccountsRmShippingAccountIdShippingLocationsGet**
> \RoyalMailV4\ShipmentsApi\Model\RoyalMailViewShippingAccountLocationShippingLocationsForAccountPagedResponse v4ShippingAccountsRmShippingAccountIdShippingLocationsGet($shippingAccountId, $searchTerm, $pageSize, $pageNumber, $sortBy, $sortDir)

Get Associated Locations

Provides a list of all shipping locations associated with a Royal Mail shipping account.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = RoyalMailV4\ShipmentsApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new RoyalMailV4\ShipmentsApi\Api\ShippingAccountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$shippingAccountId = "shippingAccountId_example"; // string | Shipping Account Identifier <br />PRO SHIPPING Shipping Account Id (assigned by PRO SHIPPING) or Alias (assigned by you).
$searchTerm = "searchTerm_example"; // string | Search Term
$pageSize = 100; // int | The maximum number of records per page.
$pageNumber = 1; // int | The number of the requested page, starting at 1.
$sortBy = new \RoyalMailV4\ShipmentsApi\Model\ShippingLocationsSortBy(); // \RoyalMailV4\ShipmentsApi\Model\ShippingLocationsSortBy | Sort By <br />Default: Name
$sortDir = new \RoyalMailV4\ShipmentsApi\Model\OrderDirection(); // \RoyalMailV4\ShipmentsApi\Model\OrderDirection | Sort Direction <br />Default: Ascending

try {
    $result = $apiInstance->v4ShippingAccountsRmShippingAccountIdShippingLocationsGet($shippingAccountId, $searchTerm, $pageSize, $pageNumber, $sortBy, $sortDir);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShippingAccountsApi->v4ShippingAccountsRmShippingAccountIdShippingLocationsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **shippingAccountId** | **string**| Shipping Account Identifier &lt;br /&gt;PRO SHIPPING Shipping Account Id (assigned by PRO SHIPPING) or Alias (assigned by you). |
 **searchTerm** | **string**| Search Term | [optional]
 **pageSize** | **int**| The maximum number of records per page. | [optional] [default to 100]
 **pageNumber** | **int**| The number of the requested page, starting at 1. | [optional] [default to 1]
 **sortBy** | [**\RoyalMailV4\ShipmentsApi\Model\ShippingLocationsSortBy**](../Model/.md)| Sort By &lt;br /&gt;Default: Name | [optional]
 **sortDir** | [**\RoyalMailV4\ShipmentsApi\Model\OrderDirection**](../Model/.md)| Sort Direction &lt;br /&gt;Default: Ascending | [optional]

### Return type

[**\RoyalMailV4\ShipmentsApi\Model\RoyalMailViewShippingAccountLocationShippingLocationsForAccountPagedResponse**](../Model/RoyalMailViewShippingAccountLocationShippingLocationsForAccountPagedResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v4ShippingAccountsRmShippingAccountIdShippingLocationsShippingLocationIdGet**
> \RoyalMailV4\ShipmentsApi\Model\RoyalMailViewShippingAccountLocationShippingLocationForAccount v4ShippingAccountsRmShippingAccountIdShippingLocationsShippingLocationIdGet($shippingAccountId, $shippingLocationId)

Get Associated Location

Provides information for a specific shipping location linked to a Royal Mail shipping account including location alias, Royal Mail specific details, timezone, address, when it was last updated, and by who.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = RoyalMailV4\ShipmentsApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new RoyalMailV4\ShipmentsApi\Api\ShippingAccountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$shippingAccountId = "shippingAccountId_example"; // string | Shipping Account Identifier <br />PRO SHIPPING Shipping Account Id (assigned by PRO SHIPPING) or Alias (assigned by you).
$shippingLocationId = "shippingLocationId_example"; // string | Shipping Location Identifier <br />PRO SHIPPING Shipping Location Id (assigned by PRO SHIPPING) or Alias (assigned by you).

try {
    $result = $apiInstance->v4ShippingAccountsRmShippingAccountIdShippingLocationsShippingLocationIdGet($shippingAccountId, $shippingLocationId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShippingAccountsApi->v4ShippingAccountsRmShippingAccountIdShippingLocationsShippingLocationIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **shippingAccountId** | **string**| Shipping Account Identifier &lt;br /&gt;PRO SHIPPING Shipping Account Id (assigned by PRO SHIPPING) or Alias (assigned by you). |
 **shippingLocationId** | **string**| Shipping Location Identifier &lt;br /&gt;PRO SHIPPING Shipping Location Id (assigned by PRO SHIPPING) or Alias (assigned by you). |

### Return type

[**\RoyalMailV4\ShipmentsApi\Model\RoyalMailViewShippingAccountLocationShippingLocationForAccount**](../Model/RoyalMailViewShippingAccountLocationShippingLocationForAccount.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v4ShippingAccountsRmShippingAccountIdShippingLocationsShippingLocationIdPut**
> v4ShippingAccountsRmShippingAccountIdShippingLocationsShippingLocationIdPut($shippingAccountId, $shippingLocationId, $body)

Update Associated Location

Update a shipping location associated with a specific Royal Mail shipping account with carrier specific details like Posting Location, OBA access code and receiving hub. <br />Note: All required fields must be populated in the request, regardless if they need updating or not.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = RoyalMailV4\ShipmentsApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new RoyalMailV4\ShipmentsApi\Api\ShippingAccountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$shippingAccountId = "shippingAccountId_example"; // string | Shipping Account Identifier <br />PRO SHIPPING Shipping Account Id (assigned by PRO SHIPPING) or Alias (assigned by you).
$shippingLocationId = "shippingLocationId_example"; // string | Shipping Location Identifier <br />PRO SHIPPING Shipping Location Id (assigned by PRO SHIPPING) or Alias (assigned by you).
$body = new \RoyalMailV4\ShipmentsApi\Model\RoyalMailUpdateShippingAccountLocation(); // \RoyalMailV4\ShipmentsApi\Model\RoyalMailUpdateShippingAccountLocation | Location Details

try {
    $apiInstance->v4ShippingAccountsRmShippingAccountIdShippingLocationsShippingLocationIdPut($shippingAccountId, $shippingLocationId, $body);
} catch (Exception $e) {
    echo 'Exception when calling ShippingAccountsApi->v4ShippingAccountsRmShippingAccountIdShippingLocationsShippingLocationIdPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **shippingAccountId** | **string**| Shipping Account Identifier &lt;br /&gt;PRO SHIPPING Shipping Account Id (assigned by PRO SHIPPING) or Alias (assigned by you). |
 **shippingLocationId** | **string**| Shipping Location Identifier &lt;br /&gt;PRO SHIPPING Shipping Location Id (assigned by PRO SHIPPING) or Alias (assigned by you). |
 **body** | [**\RoyalMailV4\ShipmentsApi\Model\RoyalMailUpdateShippingAccountLocation**](../Model/RoyalMailUpdateShippingAccountLocation.md)| Location Details | [optional]

### Return type

void (empty response body)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

