# SynergiTech\Staffology\AuditApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**employerAuditListAudit()**](AuditApi.md#employerAuditListAudit) | **GET** /employers/{employerId}/audit | Employer Audit Log |


## `employerAuditListAudit()`

```php
employerAuditListAudit($employerId, $entity, $entityId, $fromDate, $toDate, $pageNum, $pageSize): \SynergiTech\Staffology\Model\Item[]
```

Employer Audit Log

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\AuditApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string | The Id of the Employer for which you want to list Audit logs
$entity = new \SynergiTech\Staffology\Model\\SynergiTech\Staffology\Model\EntityType(); // \SynergiTech\Staffology\Model\EntityType | Entity type name for which audit log should be retrieved
$entityId = 'entityId_example'; // string | Id of the entity for which audit log should be retrieved
$fromDate = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | Date from which records should be retrieved
$toDate = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | Date till records should be retrieved
$pageNum = 56; // int
$pageSize = 56; // int

try {
    $result = $apiInstance->employerAuditListAudit($employerId, $entity, $entityId, $fromDate, $toDate, $pageNum, $pageSize);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuditApi->employerAuditListAudit: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employerId** | **string**| The Id of the Employer for which you want to list Audit logs | |
| **entity** | [**\SynergiTech\Staffology\Model\EntityType**](../Model/.md)| Entity type name for which audit log should be retrieved | [optional] |
| **entityId** | **string**| Id of the entity for which audit log should be retrieved | [optional] |
| **fromDate** | **\DateTime**| Date from which records should be retrieved | [optional] |
| **toDate** | **\DateTime**| Date till records should be retrieved | [optional] |
| **pageNum** | **int**|  | [optional] |
| **pageSize** | **int**|  | [optional] |

### Return type

[**\SynergiTech\Staffology\Model\Item[]**](../Model/Item.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
