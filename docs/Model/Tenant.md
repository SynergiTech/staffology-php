# # Tenant

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**brandCode** | **string** | [readonly] | [optional]
**appName** | **string** |  | [optional]
**homeUrl** | **string** |  | [optional]
**headContent** | **string** |  | [optional]
**logOutUrl** | **string** |  | [optional]
**loginImgUrl** | **string** | [readonly] | [optional]
**homeImgUrl** | **string** | [readonly] | [optional]
**favIcon** | **string** | [readonly] | [optional]
**cssColorsFile** | **string** | [readonly] | [optional]
**cssFile** | **string** | [readonly] | [optional]
**mailingList** | **bool** |  | [optional]
**htmlInsertions** | [**\SynergiTech\Staffology\Model\TenantHtmlInsertion[]**](TenantHtmlInsertion.md) |  | [optional]
**mailSettings** | [**\SynergiTech\Staffology\Model\MailSettings**](MailSettings.md) |  | [optional]
**signupUrl** | **string** |  | [optional]
**termsUrl** | **string** |  | [optional]
**helpUrl** | **string** |  | [optional]
**supportEmail** | **string** |  | [optional]
**newUserSignupEmail** | **string** |  | [optional]
**approveNewUsers** | **bool** |  | [optional]
**enableBureauFeatures** | **bool** |  | [optional]
**requireDdMandateBeforeAllowingBillableActivity** | **bool** |  | [optional]
**whiteLabelMode** | **bool** |  | [optional]
**enableReportWriterFeature** | **bool** | Indicates if the Report Writer feature is enabled for the tenant. | [optional]
**disableEvc** | **bool** | Indicates whether FPS should be submitted to EVC for employees/employers under this tenant. | [optional]
**tenantOwnsBilling** | **bool** | [readonly] | [optional]
**billingSettings** | [**\SynergiTech\Staffology\Model\TenantBillingSettings**](TenantBillingSettings.md) |  | [optional]
**usersCanManageAccountSecuritySettings** | **bool** | If the users are allowed manage their own account security settings through a page or portal defined by their current authentication provider | [optional]
**id** | **string** | [readonly] The unique id of the object | [optional] [readonly]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
