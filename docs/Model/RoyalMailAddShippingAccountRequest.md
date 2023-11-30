# RoyalMailAddShippingAccountRequest

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**accountNumber** | **string** | Carrier Account Number &lt;br /&gt;The account number given by the carrier. | 
**accountType** | [**\RoyalMailV4\ShipmentsApi\Model\AccountType**](AccountType.md) |  | 
**accountName** | **string** | Account Name &lt;br /&gt;The name on this Account. &lt;br /&gt;Defaults to your Customer name if not provided. | [optional] 
**accountRegisteredEmail** | **string** | Account Registered Email &lt;br /&gt;This is the email that was used to register your Shipping Account with the carrier when the Shipping Account was created. | 
**accountAlias** | **string** | Account Alias &lt;br /&gt;Your identifier for this account. Must be unique. | 
**contactName** | **string** | Contact Name &lt;br /&gt;Used in a create shipment request as the shipper&#x27;s contact name if the shipper address is not provided. | 
**contactNumber** | **string** | Contact Number &lt;br /&gt;Used in a create shipment request as the shipper&#x27;s contact number if the shipper address is not provided, and the contact number is not set on the associated shipping location. | 
**shippingLocations** | [**\RoyalMailV4\ShipmentsApi\Model\RoyalMailAddShippingAccountLocation[]**](RoyalMailAddShippingAccountLocation.md) | Shipping Locations &lt;br /&gt;At least one location is required when adding a shipping account. &lt;br /&gt;If providing a new location when adding the account, only one location can be added. | 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

