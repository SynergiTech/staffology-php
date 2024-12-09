# SynergiTech\Staffology\BureauApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**employersBureau()**](BureauApi.md#employersBureau) | **GET** /bureau/employers | List Employers |
| [**getProcessorUserBureau()**](BureauApi.md#getProcessorUserBureau) | **GET** /employers/{employerId}/bureau/settings/processor | Get Processor |
| [**getReportPackBureau()**](BureauApi.md#getReportPackBureau) | **GET** /employers/{employerId}/bureau/settings/reportpack | Get BureauSettings ReportPack |
| [**getSettingsBureau()**](BureauApi.md#getSettingsBureau) | **GET** /employers/{employerId}/bureau/settings | Get BureauSettings |
| [**processorUsersBureau()**](BureauApi.md#processorUsersBureau) | **GET** /bureau/processors | List Allocated Processors |
| [**updateSettingsBureau()**](BureauApi.md#updateSettingsBureau) | **PUT** /employers/{employerId}/bureau/settings | Update BureauSettings |


## `employersBureau()`

```php
employersBureau($processor): \SynergiTech\Staffology\Model\Item[]
```

List Employers

Returns a list of Employers.  This differs from the main Employer list end point in that the metadata included is more relevant to Bureau activities  It also gives you the ability to filter based on the allocated Processor.  Note: an entry is returned for each PaySchedule. So if the employer has both a Monthly and a Weekly PaySchedule then they'll appear twice

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\BureauApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$processor = 'processor_example'; // string | The Id of the Processor (User) you want to restrict the list to.

try {
    $result = $apiInstance->employersBureau($processor);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BureauApi->employersBureau: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **processor** | **string**| The Id of the Processor (User) you want to restrict the list to. | [optional] |

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

## `getProcessorUserBureau()`

```php
getProcessorUserBureau($employerId): \SynergiTech\Staffology\Model\User
```

Get Processor

If a Processor is specified in the BureauSettings then it is returned as a User, otherwise a 404 is returned

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\BureauApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string | The Id of the Employer

try {
    $result = $apiInstance->getProcessorUserBureau($employerId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BureauApi->getProcessorUserBureau: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employerId** | **string**| The Id of the Employer | |

### Return type

[**\SynergiTech\Staffology\Model\User**](../Model/User.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getReportPackBureau()`

```php
getReportPackBureau($employerId): \SynergiTech\Staffology\Model\ReportPack
```

Get BureauSettings ReportPack

If a ReportPack is specified in the BureauSettings then it is returned, otherwise an empty ReportPAck is returned

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\BureauApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string | The Id of the Employer

try {
    $result = $apiInstance->getReportPackBureau($employerId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BureauApi->getReportPackBureau: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employerId** | **string**| The Id of the Employer | |

### Return type

[**\SynergiTech\Staffology\Model\ReportPack**](../Model/ReportPack.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getSettingsBureau()`

```php
getSettingsBureau($employerId): \SynergiTech\Staffology\Model\BureauSettings
```

Get BureauSettings

Returns the BureauSettings for the Employer

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\BureauApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string | The Id of the Employer

try {
    $result = $apiInstance->getSettingsBureau($employerId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BureauApi->getSettingsBureau: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employerId** | **string**| The Id of the Employer | |

### Return type

[**\SynergiTech\Staffology\Model\BureauSettings**](../Model/BureauSettings.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `processorUsersBureau()`

```php
processorUsersBureau(): \SynergiTech\Staffology\Model\Item[]
```

List Allocated Processors

Returns a list of Users that have one or more Employers allocated to them as the Processor

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\BureauApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->processorUsersBureau();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BureauApi->processorUsersBureau: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

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

## `updateSettingsBureau()`

```php
updateSettingsBureau($employerId, $bureauSettings): \SynergiTech\Staffology\Model\BureauSettings
```

Update BureauSettings

Updates the BureauSettings for the Employer

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\BureauApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string | The Id of the Employer
$bureauSettings = new \SynergiTech\Staffology\Model\BureauSettings(); // \SynergiTech\Staffology\Model\BureauSettings

try {
    $result = $apiInstance->updateSettingsBureau($employerId, $bureauSettings);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BureauApi->updateSettingsBureau: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employerId** | **string**| The Id of the Employer | |
| **bureauSettings** | [**\SynergiTech\Staffology\Model\BureauSettings**](../Model/BureauSettings.md)|  | [optional] |

### Return type

[**\SynergiTech\Staffology\Model\BureauSettings**](../Model/BureauSettings.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: `application/json-patch+json`, `application/json`, `text/json`, `application/*+json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
