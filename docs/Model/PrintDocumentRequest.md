# PrintDocumentRequest

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**documentType** | [**\RoyalMailV4\ShipmentsApi\Model\DocumentType**](DocumentType.md) |  | [optional] 
**numberOfCopies** | **int** | Number of Copies | [optional] [default to 1]
**eoriNumber** | **string** | EORI Number &lt;br /&gt;Shipper/Receiver&#x27;s EORI number starts with the ISO Alpha-2 Country Code followed by a maximum 15 alphanumeric characters. For Northern Ireland starts with XI &lt;br /&gt;Overrides the shipper&#x27;s EORI number on the shipment if provided. &lt;br /&gt;If both an EORI and VAT number exist, then only the EORI Number is printed on the CN23. | [optional] 
**vatNumber** | **string** | VAT Number &lt;br /&gt;Overrides the shipper&#x27;s VAT number on the shipment if provided. | [optional] 
**reasonForExport** | **string** | Reason for Export &lt;br /&gt;Overrides the shipment&#x27;s Reason for Export if provided. &lt;br /&gt;If the carrier is UPU affiliated, then the allowed Reason for Exports are: &lt;br /&gt;**Gift** &lt;br /&gt;**Commercial Sample** &lt;br /&gt;**Documents** &lt;br /&gt;**Sale of Goods** &lt;br /&gt;**Return of Goods** &lt;br /&gt;**Mixed Content** &lt;br /&gt;**Other** | [optional] 
**name** | **string** | Shipper&#x27;s Name &lt;br /&gt;Override the shipment&#x27;s shipper&#x27;s company/contact name if provided. | [optional] 
**position** | **string** | Position &lt;br /&gt;The shipper&#x27;s job title in the sender&#x27;s company. &lt;br /&gt;*Note: The field can only be used with the proforma and commercial invoice. It will be ignored for CN23s.* | [optional] 
**signatureImage** | **string** | Signature Image &lt;br /&gt;Base 64 encoded PNG or JPEG. Maximum image size supported is 240 x 34 pixels. &lt;br /&gt;*Note: The field can only be used with the proforma and commercial invoice. It will be ignored for CN23s.* | [optional] 
**companyStampImage** | **string** | Company Stamp Image &lt;br /&gt;Base 64 encoded PNG or JPEG. Maximum image size supported is 600 x 66 pixels. &lt;br /&gt;*Note: The field can only be used with the proforma and commercial invoice. It will be ignored for CN23s.* | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

