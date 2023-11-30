# RoyalMailDataStreamDetails

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**primary2DBarcodeImage** | **string** | Primary 2D Barcode Image &lt;br /&gt;Base64 Encoded PNG Image of the 2D data matrix barcode. | 
**primary2DBarcodeData** | **string** | Primary 2D Barcode Data - Base 64 Encoded &lt;br /&gt;Data required to create your own 2D data matrix barcode. Please decode before use. | 
**formattedUniqueId** | **string** | Formatted Unique Id &lt;br /&gt;Label for 2D data matrix barcode. | 
**gazetteerCodes** | [**\RoyalMailV4\ShipmentsApi\Model\RoyalMailGazetteerCodes**](RoyalMailGazetteerCodes.md) |  | [optional] 
**primary1DBarcodeImage** | **string** | Primary 1D Barcode Image &lt;br /&gt;Only populated where the service requires the barcode on the label. &lt;br /&gt;Base64 Encoded PNG Image of the barcode. | [optional] 
**primary1DBarcodeData** | **string** | Primary 1D Barcode Data &lt;br /&gt;Only populated where the service requires the barcode on the label. &lt;br /&gt;Data required to create your own barcode. | [optional] 
**highVolumeBarcodeImage** | **string** | High Volume Barcode Image &lt;br /&gt;Only populated where the service (Tracked High Volume) requires the barcode on the label. &lt;br /&gt;Base64 Encoded PNG Image of the barcode. | [optional] 
**highVolumeBarcodeData** | **string** | High Volume Barcode Data &lt;br /&gt;Only populated where the service (Tracked High Volume) requires the barcode on the label. &lt;br /&gt;Data required to create your own barcode. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

