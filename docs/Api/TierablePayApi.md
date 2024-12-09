# SynergiTech\Staffology\TierablePayApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getTierablePay()**](TierablePayApi.md#getTierablePay) | **GET** /employers/{employerId}/tierablepay/{payrunEntryId} | Calculate tierable pay |


## `getTierablePay()`

```php
getTierablePay($employerId, $payrunEntryId): float
```

Calculate tierable pay

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\TierablePayApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string | Employer ID
$payrunEntryId = 'payrunEntryId_example'; // string | Payrun entry ID

try {
    $result = $apiInstance->getTierablePay($employerId, $payrunEntryId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TierablePayApi->getTierablePay: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employerId** | **string**| Employer ID | |
| **payrunEntryId** | **string**| Payrun entry ID | |

### Return type

**float**

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
