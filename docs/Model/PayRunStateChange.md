# # PayRunStateChange

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**state** | [**\SynergiTech\Staffology\Model\PayRunState**](PayRunState.md) |  | [optional]
**reason** | [**\SynergiTech\Staffology\Model\PayRunStateChangeReason**](PayRunStateChangeReason.md) |  | [optional]
**reasonText** | **string** | A free-form text field for a reason for the change of state. | [optional]
**employeeUniqueIds** | **string[]** | List of employee unique ids, whose PayRunEntries to be re-opened during a Payrun rollback operation.  Will be used only during a transition to a rolled back pay run state | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
