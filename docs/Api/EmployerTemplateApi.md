# SynergiTech\Staffology\EmployerTemplateApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getEmployerTemplate()**](EmployerTemplateApi.md#getEmployerTemplate) | **GET** /employers/{employerId}/templates/{type} | Get EmployerTemplate |
| [**indexEmployerTemplate()**](EmployerTemplateApi.md#indexEmployerTemplate) | **GET** /employers/{employerId}/templates | List EmployerTemplates |
| [**updateEmployerTemplate()**](EmployerTemplateApi.md#updateEmployerTemplate) | **PUT** /employers/{employerId}/templates/{type} | Update EmployerTemplate |


## `getEmployerTemplate()`

```php
getEmployerTemplate($employerId, $type): \SynergiTech\Staffology\Model\EmployerTemplate
```

Get EmployerTemplate

Gets the EmployerTemplate specified by the Type.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\EmployerTemplateApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string | The Id of the Employer to which the EmployerTemplate belongs.
$type = new \SynergiTech\Staffology\Model\\SynergiTech\Staffology\Model\EmployerTemplateType(); // \SynergiTech\Staffology\Model\EmployerTemplateType | The EmployerTemplateType you want to retrieve.

try {
    $result = $apiInstance->getEmployerTemplate($employerId, $type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmployerTemplateApi->getEmployerTemplate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employerId** | **string**| The Id of the Employer to which the EmployerTemplate belongs. | |
| **type** | [**\SynergiTech\Staffology\Model\EmployerTemplateType**](../Model/.md)| The EmployerTemplateType you want to retrieve. | |

### Return type

[**\SynergiTech\Staffology\Model\EmployerTemplate**](../Model/EmployerTemplate.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `indexEmployerTemplate()`

```php
indexEmployerTemplate($employerId): \SynergiTech\Staffology\Model\Item[]
```

List EmployerTemplates

Lists all EmployerTemplates for the Employer specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\EmployerTemplateApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string | The Id of the Employer for which you want to list Pay Codes

try {
    $result = $apiInstance->indexEmployerTemplate($employerId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmployerTemplateApi->indexEmployerTemplate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employerId** | **string**| The Id of the Employer for which you want to list Pay Codes | |

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

## `updateEmployerTemplate()`

```php
updateEmployerTemplate($employerId, $type, $employerTemplate): \SynergiTech\Staffology\Model\EmployerTemplate
```

Update EmployerTemplate

Updates the EmployerTemplate specified by the Type.  The only values need to supply are ```Content```  and (if applicable) ```Subject```.  If these values are empty strings or not provided then the template will revert to the default values.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\EmployerTemplateApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string | The Id of the Employer to which the EmployerTemplate belongs.
$type = new \SynergiTech\Staffology\Model\\SynergiTech\Staffology\Model\EmployerTemplateType(); // \SynergiTech\Staffology\Model\EmployerTemplateType
$employerTemplate = new \SynergiTech\Staffology\Model\EmployerTemplate(); // \SynergiTech\Staffology\Model\EmployerTemplate | The EmployerTemplateType you want to retrieve.

try {
    $result = $apiInstance->updateEmployerTemplate($employerId, $type, $employerTemplate);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmployerTemplateApi->updateEmployerTemplate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employerId** | **string**| The Id of the Employer to which the EmployerTemplate belongs. | |
| **type** | [**\SynergiTech\Staffology\Model\EmployerTemplateType**](../Model/.md)|  | |
| **employerTemplate** | [**\SynergiTech\Staffology\Model\EmployerTemplate**](../Model/EmployerTemplate.md)| The EmployerTemplateType you want to retrieve. | [optional] |

### Return type

[**\SynergiTech\Staffology\Model\EmployerTemplate**](../Model/EmployerTemplate.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: `application/json-patch+json`, `application/json`, `text/json`, `application/*+json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
