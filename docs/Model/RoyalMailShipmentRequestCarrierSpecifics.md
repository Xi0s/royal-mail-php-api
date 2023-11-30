# RoyalMailShipmentRequestCarrierSpecifics

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**serviceLevel** | **string** | The Royal Mail service level of the service specified in the ServiceCode field.  &lt;br /&gt;Valid values are 01-99. &lt;br /&gt;Defaults to lowest service level available for the specified service if not provided. | [optional] 
**ebayVtn** | **string** | The eBay Virtual Tracking Number. This should be provided for all shipments that relate to orders created on eBay, so that the shipment tracking data can be made available on eBay. | [optional] 
**serviceEnhancements** | [**\RoyalMailV4\ShipmentsApi\Model\RoyalMailServiceEnhancement[]**](RoyalMailServiceEnhancement.md) | Service Enhancements &lt;br /&gt;Any enhancements that you would like to add to the requested service. &lt;br /&gt;A maximum of 4 service enhancements can be used per shipment. | [optional] 
**offlineBarcode** | [**\RoyalMailV4\ShipmentsApi\Model\RoyalMailOfflineBarcode**](RoyalMailOfflineBarcode.md) |  | [optional] 
**offlineBarcodes** | [**\RoyalMailV4\ShipmentsApi\Model\RoyalMailOfflineBarcode[]**](RoyalMailOfflineBarcode.md) | The Offline Barcodes element is to create shipment records for shipments that had a tracking number allocated outside of PRO SHIPPING.  &lt;br /&gt;Offline Barcoding is only available if it has been activated on your customer account in the GUI.  &lt;br /&gt;If Offline Barcodes information is provided, then Process is the only valid action accepted in the Action field. | [optional] 
**preAllocatedTrackingNumber** | **string** | The pre-allocated tracking number to use for the shipment. Shipping Account, Shipping Location, Service Code, Destination Country and Postcode where required for the Country of Destination must match the one sent when the pre-allocation barcode was requested. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

