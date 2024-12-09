# # Benefit

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**taxYear** | [**\SynergiTech\Staffology\Model\TaxYear**](TaxYear.md) |  | [optional]
**type** | [**\SynergiTech\Staffology\Model\BenefitType**](BenefitType.md) |  | [optional]
**declarationType** | [**\SynergiTech\Staffology\Model\BenefitDeclarationType**](BenefitDeclarationType.md) |  | [optional]
**benefitPayrolled** | [**\SynergiTech\Staffology\Model\BenefitPayrolled[]**](BenefitPayrolled.md) |  | [optional]
**description** | **string** | A description of this benefit | [optional]
**value** | **float** |  | [optional]
**employeeContribution** | **float** |  | [optional]
**startDate** | **\DateTime** | The date the benefits starts if different to the start date of the TaxYear | [optional]
**endDate** | **\DateTime** | The date the benefits ends if different to the end date of the TaxYear | [optional]
**useProRata** | **bool** | Benefit calculation should be done on pro rata rules | [optional]
**cashEquivalent** | **float** | [readonly] | [optional] [readonly]
**assetType** | [**\SynergiTech\Staffology\Model\BenefitDetailsAssetType**](BenefitDetailsAssetType.md) |  | [optional]
**useOfAssetType** | [**\SynergiTech\Staffology\Model\BenefitDetailsUseOfAssetType**](BenefitDetailsUseOfAssetType.md) |  | [optional]
**class1AType** | [**\SynergiTech\Staffology\Model\BenefitDetailsClass1AType**](BenefitDetailsClass1AType.md) |  | [optional]
**nonClass1AType** | [**\SynergiTech\Staffology\Model\BenefitDetailsNonClass1AType**](BenefitDetailsNonClass1AType.md) |  | [optional]
**paymentType** | [**\SynergiTech\Staffology\Model\BenefitDetailsPaymentType**](BenefitDetailsPaymentType.md) |  | [optional]
**tradingOrganisation** | **bool** | Only relevant to Benefits with Type Entertainment | [optional]
**cashEquivalentFuel** | **float** | Only relevant to Benefits with Type Vans | [optional]
**loan** | [**\SynergiTech\Staffology\Model\BenefitDetailsLoan**](BenefitDetailsLoan.md) |  | [optional]
**car** | [**\SynergiTech\Staffology\Model\BenefitDetailsCar**](BenefitDetailsCar.md) |  | [optional]
**openingBalance** | **float** | The amount of benefit paid YTD when setting up a benefit | [optional]
**paid** | **float** | [readonly] | [optional] [readonly]
**bikOutstanding** | **float** | [readonly] | [optional] [readonly]
**isPeriodValue** | **bool** | To be used for the benefit period | [optional]
**employee** | [**\SynergiTech\Staffology\Model\Item**](Item.md) |  | [optional]
**id** | **string** | [readonly] The unique id of the object | [optional] [readonly]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
