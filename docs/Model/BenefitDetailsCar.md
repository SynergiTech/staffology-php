# # BenefitDetailsCar

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**makeAndModel** | **string** |  | [optional]
**registration** | **string** |  | [optional]
**firstRegistered** | **\DateTime** |  | [optional]
**hasApprovedEmissionsValue** | **bool** |  | [optional]
**co2Emissions** | **int** |  | [optional]
**engineSize** | **int** |  | [optional]
**zeroEmissionsMileage** | **int** |  | [optional]
**fuelType** | [**\SynergiTech\Staffology\Model\BenefitDetailsCarPowerType**](BenefitDetailsCarPowerType.md) |  | [optional]
**availableFrom** | **\DateTime** |  | [optional]
**availableTo** | **\DateTime** |  | [optional]
**daysUnavailable** | **int** |  | [optional]
**listPrice** | **float** |  | [optional]
**nonStandardAccessories** | **float** |  | [optional]
**employeeCapitalContributions** | **float** |  | [optional]
**employeePrivateContributions** | **float** |  | [optional]
**freeFuel** | **bool** |  | [optional]
**fuelAvailableFrom** | **\DateTime** |  | [optional]
**fuelAvailableTo** | **\DateTime** |  | [optional]
**freeFuelReinstated** | **bool** |  | [optional]
**registeredPriorTo1998** | **bool** | [readonly] | [optional] [readonly]
**rate** | **float** | [readonly] The applicable rate based on CO2Emissions and Engine Size | [optional]
**chargeableValue** | **float** | [readonly] The chargeable value of the car | [optional] [readonly]
**fullYearCharge** | **float** | [readonly] The charge for the car for a full year, not taking in to account available dates or EmployeePrivateContributions | [optional] [readonly]
**cashEquivalent** | **float** | [readonly] | [optional]
**cashEquivalentFuel** | **float** | [readonly] | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
