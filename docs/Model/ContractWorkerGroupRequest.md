# # ContractWorkerGroupRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** |  | [optional]
**name** | **string** |  | [optional]
**contributionLevelType** | [**\SynergiTech\Staffology\Model\PensionContributionLevelType**](PensionContributionLevelType.md) |  | [optional]
**employeeContribution** | **float** |  | [optional]
**employeeContributionIsPercentage** | **bool** |  | [optional]
**employerContribution** | **float** |  | [optional]
**employerContributionIsPercentage** | **bool** |  | [optional]
**employerContributionTopUpPercentage** | **float** | Increase Employer Contribution by this percentage of the Employee Contribution | [optional]
**employerContributionIncludesNiSaving** | **bool** | Employer Contribution includes the Employers NI saving | [optional]
**employerContributionNiSavingPercentage** | **float** | Increase Employer Contribution by this percentage of the Employers NI saving | [optional]
**isAvc** | **bool** | Determines whether the workergroup uses additonal voluntary contributions.  This property will automatically be set to true for the following Contribution Level Types: TpFasterAccrual, TpAdditionalPensionContributions, TpActuariallyAdjustedBenefits, TpFamilyBenefits, tpPastAddedYears, tpHigherSalaries, tpPreston, tpElectedFurtherEmployment, LgpsAdditionalPensionContributions, LgpsSharedAdditionalPensionContributions, LgpsAdditionalRegularContributions, LgpsAddedYearsContributions, LgpsSharedAdditionalPensionLumpSump, LgpsPartTimeBuyBack, PrudentialAVC. | [optional]
**additionalVoluntaryContribution** | **float** | Any additional voluntary amount the employee contributes towards the pension. Could be a percentage or a fixed amount depending on AvcIsPercentage. | [optional]
**avcIsPercentage** | **bool** | Determines whether the Value of the Additional Voluntary Contribution is a fixed amount or a percentage, | [optional]
**employerContributionNiSaving** | **float** | Employers NI Saving | [optional]
**customThreshold** | **bool** |  | [optional]
**lowerLimit** | **float** |  | [optional]
**upperLimit** | **float** |  | [optional]
**papdisGroup** | **string** |  | [optional]
**papdisSubGroup** | **string** |  | [optional]
**localAuthorityNumber** | **string** | Only applicable if ContributionLevelType is TeachersPensionEnglandAndWales | [optional]
**schoolEmployerType** | **string** | Only applicable if ContributionLevelType is TeachersPensionEnglandAndWales | [optional]
**matIdentifier** | **string** | Only applicable if ContributionLevelType is TeachersPensionEnglandAndWales | [optional]
**matUniqueNumber** | **string** | Only applicable if ContributionLevelType is TeachersPensionEnglandAndWales | [optional]
**employerReference** | **string** |  | [optional]
**lgpsFund** | [**\SynergiTech\Staffology\Model\LgpsFund**](LgpsFund.md) |  | [optional]
**workerGroupId** | **string** | [readonly] | [optional]
**assumedPensionablePay** | [**\SynergiTech\Staffology\Model\AssumedPensionablePay**](AssumedPensionablePay.md) |  | [optional]
**pensionablePayDefinition** | [**\SynergiTech\Staffology\Model\PensionablePayDefinition**](PensionablePayDefinition.md) |  | [optional]
**payslipDescription** | **string** | Used for overwriting the pension description that is displayed on the payslip | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
