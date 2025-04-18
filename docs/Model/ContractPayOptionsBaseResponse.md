# # ContractPayOptionsBaseResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**regularPayLines** | [**\SynergiTech\Staffology\Model\ContractPayLineResponse[]**](ContractPayLineResponse.md) | These are used to make additions/deductions to the pay for this Employee.  You do not need to include Pension, Tax, NI,  Loan Repayments, etc as these will all be automatically created. | [optional]
**basis** | [**\SynergiTech\Staffology\Model\PayBasis**](PayBasis.md) |  | [optional]
**nationalMinimumWage** | **bool** |  | [optional]
**payCode** | **string** | If you want the Employees pay to be allocated to a code other than BASIC, specify it here | [optional]
**mileageVehicleType** | [**\SynergiTech\Staffology\Model\MileageVehicleType**](MileageVehicleType.md) |  | [optional]
**mapsMiles** | **int** | The number of miles to pay for as Mileage Allowance Payments | [optional]
**payAmount** | **float** | The amount the Employee is regularly paid each period | [optional]
**payAmountMultiplier** | **float** | This property is irrelevant if the basis is Monthly.  But if the basis is Daily or Hourly then this property sets how many days/hours the employee should be paid for in the period. | [optional]
**baseHourlyRate** | **float** | This property is used to calculate values for PayCodes that are set as multiples of  the employees base hourly rate. Eg Overtime.  If this is set as zero then we&#39;ll attempt to calculate a value based on the other fields | [optional]
**baseDailyRate** | **float** | This property is used to calculate values for PayCodes that are set as multiples of  the employees base daily rate. Eg sick.  If this is set as zero then we&#39;ll attempt to calculate a value based on the other fields | [optional]
**autoAdjustForLeave** | **bool** | This sets whether the PayLine should be automatically adjusted or not for:  Leave Entries;  Starters/Leavers;  PayLine effectiveFrom and effectiveTo values falling mid-way through a PayRun | [optional]
**niTable** | **string** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
