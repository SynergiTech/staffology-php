# # NationalInsuranceCalculationBase

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**niCategory** | **string** | Calculated on NI table letter | [optional]
**asDirector** | **bool** | Calculated as a Director | [optional]
**earningsUptoIncludingLEL** | **float** | Earnings up to and including LEL | [optional]
**earningsAboveLELUptoIncludingPT** | **float** | Earnings above LEL up to PT | [optional]
**earningsAbovePTUptoIncludingST** | **float** | Earnings above PT up to ST | [optional]
**earningsAbovePTUptoIncludingUEL** | **float** | Earnings above PT up to UEL | [optional]
**earningsAboveSTUptoIncludingUEL** | **float** | Earnings above ST up to UEL | [optional]
**earningsAboveSTUptoIncludingFUST** | **float** | Earnings above ST up to FUST | [optional]
**earningsAboveFUSTUptoIncludingUEL** | **float** | Earnings above FUST up to UEL | [optional]
**earningsAboveUEL** | **float** | Earnings above UEL | [optional]
**employeeNiGross** | **float** | Employee National Insurance Gross Value | [optional]
**employeeNiRebate** | **float** | Employee National Insurance Rebate Value | [optional]
**employerNiGross** | **float** | Employer National Insurance Gross Value | [optional]
**employerNiRebate** | **float** | Employer National Insurance Rebate Value | [optional]
**employeeNi** | **float** | [readonly] Net Employee National Insurance | [optional] [readonly]
**employerNi** | **float** | [readonly] Net Employer National Insurance | [optional] [readonly]
**netNi** | **float** | [readonly] Net National Insurance (Employer + Employee) | [optional] [readonly]
**niablePay** | **float** | Niable pay value, required for payrun overrides | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
