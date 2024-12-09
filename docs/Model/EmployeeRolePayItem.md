# # EmployeeRolePayItem

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**roleId** | **string** |  | [optional]
**isPrimary** | **bool** |  | [optional]
**baseDailyRate** | **float** | This property is used to calculate values for PayCodes that are set as multiples of   the employees base daily rate. Eg sick.  If this is set as zero then we&#39;ll attempt to calculate a value based on the other fields | [optional]
**baseHourlyRate** | **float** | This property is used to calculate values for PayCodes that are set as multiples of   the employees base hourly rate. Eg Overtime.  If this is set as zero then we&#39;ll attempt to calculate a value based on the other fields | [optional]
**weight** | **float** | This property is used to calculate values for the relative weight of the usual pay for   each role compared to the sum of all roles&#39; usual pay  Usual pay for the purpose of the current value&#39;s calculation is based on the employee&#39;s permanent pay items  including employee basic pay and permanent addition and deduction pay lines subject to NI or Tax | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
