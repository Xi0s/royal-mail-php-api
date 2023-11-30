# RoyalMailShippingAccount

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**shippingAccountId** | **string** | Shipping Account Id &lt;br /&gt;The system identifier for this account. &lt;br /&gt;Use one of the Id or Alias in the Create Shipment Request to identify the account to use. | 
**carrierCode** | **string** | Carrier Code &lt;br /&gt;The carrier that this shipping account is for. | 
**accountNumber** | **string** | Carrier Account Number &lt;br /&gt;The account number given by the carrier. | [optional] 
**accountType** | [**\RoyalMailV4\ShipmentsApi\Model\AccountType**](AccountType.md) |  | 
**accountName** | **string** | Shipping Account Name &lt;br /&gt;The name of the Shipping Account. | 
**accountRegisteredEmail** | **string** | Account Registered Email &lt;br /&gt;This is the email that was used to register your Shipping Account with the carrier when the Shipping Account was created. | 
**accountAlias** | **string** | Shipping Account Alias &lt;br /&gt;Your identifier for this account. Must be unique. | 
**accountStatus** | **string** | Account Status &lt;br /&gt;The status of the shipping account. | 
**contactName** | **string** | Contact Name &lt;br /&gt;Used in a create shipment request as the shipper&#x27;s contact name if the shipper address is not provided. | 
**contactNumber** | **string** | Contact Number &lt;br /&gt;Used in a create shipment request as the shipper&#x27;s contact number if the shipper address is not provided, and the contact number is not set on the associated shipping location. | 
**lastUpdatedBy** | **string** | Last Updated By &lt;br /&gt;The user that last updated the shipping account. | 
**lastUpdatedDateUtc** | [**\DateTime**](\DateTime.md) | Last Updated Date UTC &lt;br /&gt;The system date and time when the shipping account was last updated. | 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

