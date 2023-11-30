# RoyalMailGetOfflineBarcodingRequest

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**shippingLocationId** | **string** | This can be populated with either the Shipping Location ID assigned by PRO SHIPPING or the Shipping Location Alias set when the Shipping Location was created. Optional if the shipping account only has one Shipping Location assigned. If the Shipping Account has multiple Shipping Locations, then this field must be populated. | [optional] 
**shippingAccountId** | **string** | Shipping Account the number range is being requested for. This can be populated with either the Shipping Account ID assigned by PRO SHIPPING or the Shipping Account Alias set when the Shipping Account was created. | 
**serviceCode** | **string** | Service Code | 
**serviceLevel** | **string** | The Royal Mail service level of the service specified in the ServiceCode field. &lt;br /&gt;Valid values are 01-99. | 
**serviceEnhancementCode** | [**\RoyalMailV4\ShipmentsApi\Model\RoyalMailOfflineBarcodingEnhancementCode**](RoyalMailOfflineBarcodingEnhancementCode.md) |  | [optional] 
**channelId** | **string** | The Channel ID agreed with Royal Mail for the offline barcodes. If no value is sent in the request then the Channel ID assigned in PRO SHIPPING will be used. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

