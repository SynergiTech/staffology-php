# # Note

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**noteDate** | **\DateTime** | The date of the note | [optional]
**noteText** | **string** | Note text | [optional]
**createdBy** | **string** | [readonly] The email address of the user that create the Note | [optional]
**updatedBy** | **string** | [readonly] The email address of the user that last updated the Note | [optional]
**type** | [**\SynergiTech\Staffology\Model\NoteType**](NoteType.md) |  | [optional]
**documentCount** | **int** | [readonly] The number of attachments associated with this model | [optional]
**documents** | [**\SynergiTech\Staffology\Model\Item[]**](Item.md) | [readonly] The attachments associated with this model | [optional]
**employee** | [**\SynergiTech\Staffology\Model\Item**](Item.md) |  | [optional]
**id** | **string** | [readonly] The unique id of the object | [optional] [readonly]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
