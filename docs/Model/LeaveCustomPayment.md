# # LeaveCustomPayment

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**roleId** | **string** |  | [optional]
**percentOfPay** | **float** | If this is Sick Leave with Custom Payment,  the user will input the desired impact on the employee’s pay, per role.  This will be via an amount between 0-100 in &#39;Pay for Absence&#39;.  The employees pay will be fully reduced for the absence, and the % paid will be added back using the OSP pay code. | [optional]
**paySSPInAddition** | **bool** | If this is Sick Leave with Custom Payment,  If true, then reduce the OSP by the amount of SSP paid (and apportioned according to role weighting)  If false, then do not reduce the OSP at all. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
