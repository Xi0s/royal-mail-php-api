# RoyalMailLabelFormatRoyalMailShipmentResponseCarrierSpecificsPackageResponseCreateShipmentResponse

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**consignmentShipmentId** | **string** | Consignment Shipment Id &lt;br /&gt;Only populated if the service is a consignment service. | [optional] 
**consignmentTrackingNumber** | **string** | Consignment Tracking Number &lt;br /&gt;Only populated if the service is a consignment service | [optional] 
**consignmentCarrierTrackingUrl** | **string** | Consignment Carrier Tracking URL &lt;br /&gt;Only populated if the service is a consignment service and is available | [optional] 
**labels** | **string** | Labels &lt;br /&gt;Populated if requested Action was &#x27;Process&#x27; | [optional] 
**labelFormat** | [**\RoyalMailV4\ShipmentsApi\Model\RoyalMailLabelFormat**](RoyalMailLabelFormat.md) |  | [optional] 
**packages** | [**\RoyalMailV4\ShipmentsApi\Model\RoyalMailShipmentResponseCarrierSpecificsPackageResponse[]**](RoyalMailShipmentResponseCarrierSpecificsPackageResponse.md) | Packages &lt;br /&gt;The details of each package. | [optional] 
**documents** | **string** | Customs Documents &lt;br /&gt;Populated if requested Action was &#x27;Process&#x27; and shipment is dutiable | [optional] 
**documentFormat** | [**\RoyalMailV4\ShipmentsApi\Model\DocumentFormat**](DocumentFormat.md) |  | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

