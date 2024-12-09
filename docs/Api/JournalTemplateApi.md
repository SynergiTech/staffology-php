# SynergiTech\Staffology\JournalTemplateApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createJournalTemplate()**](JournalTemplateApi.md#createJournalTemplate) | **POST** /employers/{employerId}/journaltemplate | Create Journal Template |
| [**getJournalTemplate()**](JournalTemplateApi.md#getJournalTemplate) | **GET** /employers/{employerId}/journaltemplate | Get Journal Template |
| [**updateJournalTemplate()**](JournalTemplateApi.md#updateJournalTemplate) | **PUT** /employers/{employerId}/journaltemplate/{id} | Update Journal Template |


## `createJournalTemplate()`

```php
createJournalTemplate($employerId, $contractJournalTemplateRequest): \SynergiTech\Staffology\Model\JournalTemplate
```

Create Journal Template

Create Journal Template for an Employer.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\JournalTemplateApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string | The Id of the Employer for which you want to create Journal Template
$contractJournalTemplateRequest = new \SynergiTech\Staffology\Model\ContractJournalTemplateRequest(); // \SynergiTech\Staffology\Model\ContractJournalTemplateRequest

try {
    $result = $apiInstance->createJournalTemplate($employerId, $contractJournalTemplateRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling JournalTemplateApi->createJournalTemplate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employerId** | **string**| The Id of the Employer for which you want to create Journal Template | |
| **contractJournalTemplateRequest** | [**\SynergiTech\Staffology\Model\ContractJournalTemplateRequest**](../Model/ContractJournalTemplateRequest.md)|  | [optional] |

### Return type

[**\SynergiTech\Staffology\Model\JournalTemplate**](../Model/JournalTemplate.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: `application/json-patch+json`, `application/json`, `text/json`, `application/*+json`
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getJournalTemplate()`

```php
getJournalTemplate($employerId): \SynergiTech\Staffology\Model\ContractJournalTemplateResponse
```

Get Journal Template

Get Journal Template for an Employer.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\JournalTemplateApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string | The Id of the Employer for which you want to get Journal Template

try {
    $result = $apiInstance->getJournalTemplate($employerId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling JournalTemplateApi->getJournalTemplate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employerId** | **string**| The Id of the Employer for which you want to get Journal Template | |

### Return type

[**\SynergiTech\Staffology\Model\ContractJournalTemplateResponse**](../Model/ContractJournalTemplateResponse.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateJournalTemplate()`

```php
updateJournalTemplate($employerId, $id, $contractJournalTemplateRequest): \SynergiTech\Staffology\Model\ContractJournalTemplateResponse
```

Update Journal Template

Updates Specified Journal Template for the Employer.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\JournalTemplateApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string | The Id of the Employer for which you want to update Journal Template
$id = 'id_example'; // string
$contractJournalTemplateRequest = new \SynergiTech\Staffology\Model\ContractJournalTemplateRequest(); // \SynergiTech\Staffology\Model\ContractJournalTemplateRequest

try {
    $result = $apiInstance->updateJournalTemplate($employerId, $id, $contractJournalTemplateRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling JournalTemplateApi->updateJournalTemplate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employerId** | **string**| The Id of the Employer for which you want to update Journal Template | |
| **id** | **string**|  | |
| **contractJournalTemplateRequest** | [**\SynergiTech\Staffology\Model\ContractJournalTemplateRequest**](../Model/ContractJournalTemplateRequest.md)|  | [optional] |

### Return type

[**\SynergiTech\Staffology\Model\ContractJournalTemplateResponse**](../Model/ContractJournalTemplateResponse.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: `application/json-patch+json`, `application/json`, `text/json`, `application/*+json`
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
