# RoyalMailViewShippingAccountLocation

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**receivingHubDescription** | **string** | Receiving Hub Description &lt;br /&gt;The name and postcodes covered by the Receiving Hub as per the Gazetteer file. | 
**accountLocationStatus** | [**\RoyalMailV4\ShipmentsApi\Model\RoyalMailAccountLocationStatus**](RoyalMailAccountLocationStatus.md) |  | [optional] 
**postingLocationCode** | **string** | Posting Location Code &lt;br /&gt;The number assigned to this Location by Royal Mail. | 
**obaAccessCode** | **string** | OBA Access Code &lt;br /&gt;A password for the account to access the OBA services. &lt;br /&gt;A Royal Mail shipping account cannot be active unless the OBA Access code has been provided. | [optional] 
**receivingHubCode** | **string** | Receiving Hub Code &lt;br /&gt;Receiving Hub/Regional Distribution Center used for this Shipping Location. &lt;br /&gt;Must be an existing receiving hub code. &lt;br /&gt;Please refer to Royal Mail ReceivingHubs for a list of possible receiving hubs. | 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

