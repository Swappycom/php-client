# Product

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** |  | [optional] 
**title** | **string** |  | 
**quantity** | **int** |  | [optional] 
**images** | [**\Swappy\Api\Model\ProductImage[]**](ProductImage.md) |  | [optional] 
**category** | [**\Swappy\Api\Model\Category**](Category.md) |  | 
**address** | [**\Swappy\Api\Model\Address**](Address.md) |  | [optional] 
**description** | **string** |  | 
**auction** | **bool** |  | 
**date_start** | [**\DateTime**](\DateTime.md) | ISO-8601 date or Duration, if it is a duration, it will be relative to process time | [optional] 
**live_id** | **int** |  | [optional] 
**price** | **double** |  | 
**reserve_price** | **double** |  | [optional] 
**buynow_price** | **double** |  | [optional] 
**lot_number** | **string** |  | [optional] 
**delivery** | [**\Swappy\Api\Model\Delivery[]**](Delivery.md) |  | 
**payment** | [**\Swappy\Api\Model\Payment[]**](Payment.md) |  | 
**auto_renew** | **bool** |  | [optional] 
**taxes** | [**\Swappy\Api\Model\ProductTaxes**](ProductTaxes.md) |  | [optional] 
**offer** | [**\Swappy\Api\Model\ProductOffer**](ProductOffer.md) |  | [optional] 
**duration** | **int** |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


