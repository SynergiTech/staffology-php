# # ProcessingNote

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**payRunEntryId** | **string** | The Id of the payrunEntry this ProcessingNote relates to, if any | [optional]
**note** | **string** |  |
**user** | [**\SynergiTech\Staffology\Model\Item**](Item.md) |  | [optional]
**payRun** | [**\SynergiTech\Staffology\Model\Item**](Item.md) |  | [optional]
**date** | **\DateTime** |  | [optional]
**documentCount** | **int** | [readonly] The number of attachments associated with this model | [optional]
**documents** | [**\SynergiTech\Staffology\Model\Item[]**](Item.md) | [readonly] The attachments associated with this model | [optional]
**status** | [**\SynergiTech\Staffology\Model\ProcessingNoteStatus**](ProcessingNoteStatus.md) |  | [optional]
**updatedByName** | **string** | Name of the user who was last to update the record | [optional]
**completedDate** | **\DateTime** | UpdatedDate is assigned to this to get around the base implementation of UpdatedDate having [JsonIgnore] tag | [optional]
**id** | **string** | [readonly] The unique id of the object | [optional] [readonly]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
