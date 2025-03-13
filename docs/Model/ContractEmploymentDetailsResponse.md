# # ContractEmploymentDetailsResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**cis** | [**\SynergiTech\Staffology\Model\ContractCisDetailsResponse**](ContractCisDetailsResponse.md) |  | [optional]
**department** | [**\SynergiTech\Staffology\Model\ContractDepartmentResponse**](ContractDepartmentResponse.md) |  | [optional]
**includeSecondedInfoOnStarter** | **bool** |  | [optional]
**cisSubContractor** | **bool** | Set to True if this Employee is a CIS Subcontractor. The &#x60;&#x60;&#x60;Cis&#x60;&#x60;&#x60; property contains further information | [optional]
**payrollCode** | **string** | The Employees Payroll Code. Must be unique within the Employer. |
**jobTitle** | **string** | Job Title of Primary role of the Employee | [optional]
**workplacePostcode** | **string** | Set the workplace postcode, ensuring it is no longer than 10 characters. | [optional]
**onHold** | **bool** | Set to true to temporarily exclude the employee from payruns | [optional]
**onFurlough** | **bool** | Set to true if the employee is on furlough. | [optional]
**furloughStart** | **\DateTime** | Furlough Start Date. | [optional]
**furloughEnd** | **\DateTime** | Furlough End Date. | [optional]
**furloughCalculationBasis** | [**\SynergiTech\Staffology\Model\FurloughCalculationBasis**](FurloughCalculationBasis.md) |  | [optional]
**furloughCalculationBasisAmount** | **float** |  | [optional]
**partialFurlough** | **bool** | Set to true if the employee is partially furloughed. | [optional]
**furloughHoursNormallyWorked** | **float** |  | [optional]
**furloughHoursOnFurlough** | **float** |  | [optional]
**isApprentice** | **bool** | Set to True if this Employee is an apprentice. This affects the calculations for National Minimum Wage | [optional]
**apprenticeshipStartDate** | **\DateTime** |  | [optional]
**apprenticeshipEndDate** | **\DateTime** |  | [optional]
**workingPattern** | **string** | Used when calculating payments for Leave.  If null then the default Working Pattern is used | [optional]
**forcePreviousPayrollCode** | **string** | If this property has a non-empty value then a change of Payroll code will be declared on the next FPS. | [optional]
**starterDetails** | [**\SynergiTech\Staffology\Model\ContractStarterDetails**](ContractStarterDetails.md) |  | [optional]
**directorshipDetails** | [**\SynergiTech\Staffology\Model\ContractDirectorshipDetails**](ContractDirectorshipDetails.md) |  | [optional]
**leaverDetails** | [**\SynergiTech\Staffology\Model\ContractLeaverDetails**](ContractLeaverDetails.md) |  | [optional]
**roles** | [**\SynergiTech\Staffology\Model\ContractEmployeeRoleItem[]**](ContractEmployeeRoleItem.md) | List of Roles held by Employee | [optional]
**isWorkingInFreePort** | **bool** | Flag indicating the employee is employed in a Freeport | [optional]
**isWorkingInInvestmentZone** | **bool** | Flag indicating the employee is employed in an Investment Zone | [optional]
**veteranDetails** | [**\SynergiTech\Staffology\Model\ContractVeteranDetails**](ContractVeteranDetails.md) |  | [optional]
**continuousEmploymentDate** | **\DateTime** | Date of continuous employment | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
