# # PensionProvider

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** |  |
**accountNo** | **string** |  | [optional]
**portal** | **string** |  | [optional]
**website** | **string** |  | [optional]
**address** | [**\SynergiTech\Staffology\Model\Address**](Address.md) |  | [optional]
**telephone** | **string** |  | [optional]
**papdisVersion** | [**\SynergiTech\Staffology\Model\PapdisVersion**](PapdisVersion.md) |  | [optional]
**papdisProviderId** | **string** |  | [optional]
**papdisEmployerId** | **string** |  | [optional]
**csvFormat** | [**\SynergiTech\Staffology\Model\PensionCsvFormat**](PensionCsvFormat.md) |  | [optional]
**excludeNilPaidFromContributions** | **bool** | If we&#39;re sending contributions to an external provider then we&#39;ll include all employees that were on the payrun.  If you want to exclude employees that don&#39;t have any contributions to report then set this to true. | [optional]
**payPeriodDateAdjustment** | **int** | If you need to adjust the reported dates of the contributions then you can do so by setting a non-zero value here.  A negative value of will move the date back in time. | [optional]
**miscBoolean1** | **bool** | This field has different uses dependent on the ExternalDataProvider, if any.  For Nest, it indicates whether or not contributions are reported as \&quot;Tax Weekly/Monthly\&quot; rather than just \&quot;Weekly/Monthly\&quot; | [optional]
**miscBoolean2** | **bool** | This field has different uses dependent on the ExternalDataProvider, if any.  For Nest, it indicates whether or not to approve payments after submitting contributions | [optional]
**miscString1** | **string** | This field has different uses dependent on the ExternalDataProvider, if any.  For Nest, it dictates the PaymentSource. | [optional]
**miscString2** | **string** | This field has different uses dependent on the ExternalDataProvider, if any. | [optional]
**optOutWindow** | **int** | The number of days or months that an employee has to Opt out after being enrolled | [optional]
**optOutWindowIsMonths** | **bool** | Determines whether the value given for OptOutWindow is in Months (true) or days (false) | [optional]
**id** | **string** | [readonly] The unique id of the object | [optional] [readonly]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
