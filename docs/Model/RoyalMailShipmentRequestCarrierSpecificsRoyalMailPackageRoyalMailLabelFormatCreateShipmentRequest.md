# RoyalMailShipmentRequestCarrierSpecificsRoyalMailPackageRoyalMailLabelFormatCreateShipmentRequest

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**shipmentInformation** | [**\RoyalMailV4\ShipmentsApi\Model\RoyalMailLabelFormatShipmentInformation**](RoyalMailLabelFormatShipmentInformation.md) |  | 
**shipper** | [**\RoyalMailV4\ShipmentsApi\Model\Shipper**](Shipper.md) |  | 
**destination** | [**\RoyalMailV4\ShipmentsApi\Model\Destination**](Destination.md) |  | 
**carrierSpecifics** | [**\RoyalMailV4\ShipmentsApi\Model\RoyalMailShipmentRequestCarrierSpecifics**](RoyalMailShipmentRequestCarrierSpecifics.md) |  | [optional] 
**packages** | [**\RoyalMailV4\ShipmentsApi\Model\RoyalMailPackage[]**](RoyalMailPackage.md) | Shipment Packages &lt;br /&gt;The packages that are being sent in this shipment. &lt;br /&gt;There must be at least 1 package. &lt;br /&gt;A maximum of 99 packages is allowed. | 
**items** | [**\RoyalMailV4\ShipmentsApi\Model\Item[]**](Item.md) | Shipment Items &lt;br /&gt;The items contained in the shipment, i.e. the goods/products being shipped  &lt;br /&gt;Item information is required for dutiable shipments for customs purposes. &lt;br /&gt;Non-Dutiable shipments and &#x27;Documents Only&#x27; (DOX) shipments do not require item information. &lt;br /&gt;If Item Verification check on shipment creation is enabled, the maximum number of distinct items that will be verified in one shipment is 15. | [optional] 
**customs** | [**\RoyalMailV4\ShipmentsApi\Model\Customs**](Customs.md) |  | [optional] 
**returnToSender** | [**\RoyalMailV4\ShipmentsApi\Model\ReturnToSender**](ReturnToSender.md) |  | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

