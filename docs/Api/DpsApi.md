# SynergiTech\Staffology\DpsApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**applyDps()**](DpsApi.md#applyDps) | **PUT** /employers/{employerId}/dps/notices/{id} | Apply Notice |
| [**checkForNoticesDps()**](DpsApi.md#checkForNoticesDps) | **POST** /employers/{employerId}/dps/notices | Check for new Notices |
| [**deleteAllDps()**](DpsApi.md#deleteAllDps) | **DELETE** /employers/{employerId}/dps/notices | Delete All Notices |
| [**deleteDps()**](DpsApi.md#deleteDps) | **DELETE** /employers/{employerId}/dps/notices/{id} | Delete Notice |
| [**getDps()**](DpsApi.md#getDps) | **GET** /employers/{employerId}/dps/notices/{id} | Get Notice |
| [**getDpsSettingsDps()**](DpsApi.md#getDpsSettingsDps) | **GET** /employers/{employerId}/dps/settings | Get DPS Settings |
| [**listNoticesDps()**](DpsApi.md#listNoticesDps) | **GET** /employers/{employerId}/dps/notices | List Notices |
| [**parseXmlDps()**](DpsApi.md#parseXmlDps) | **POST** /employers/{employerId}/dps/notices/xml | Parse notices from XML |
| [**reapplyNoticesDps()**](DpsApi.md#reapplyNoticesDps) | **PUT** /employers/{employerId}/dps/reapply | Reapply DpsNotices |
| [**updateDpsSettingsDps()**](DpsApi.md#updateDpsSettingsDps) | **PUT** /employers/{employerId}/dps/settings | Update DPS Settings |


## `applyDps()`

```php
applyDps($employerId, $id): \SynergiTech\Staffology\Model\DpsNotice
```

Apply Notice

Applies the specified DPS Notice.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\DpsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string
$id = 'id_example'; // string | The Id of the DpsNotice you want to apply.

try {
    $result = $apiInstance->applyDps($employerId, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DpsApi->applyDps: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employerId** | **string**|  | |
| **id** | **string**| The Id of the DpsNotice you want to apply. | |

### Return type

[**\SynergiTech\Staffology\Model\DpsNotice**](../Model/DpsNotice.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `checkForNoticesDps()`

```php
checkForNoticesDps($employerId): int
```

Check for new Notices

Checks with HMRC for new notices. Returns an integer showing how many new notices were found

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\DpsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string

try {
    $result = $apiInstance->checkForNoticesDps($employerId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DpsApi->checkForNoticesDps: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employerId** | **string**|  | |

### Return type

**int**

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteAllDps()`

```php
deleteAllDps($employerId)
```

Delete All Notices

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\DpsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string | The Id of the Employer that you want to delete all notices for.

try {
    $apiInstance->deleteAllDps($employerId);
} catch (Exception $e) {
    echo 'Exception when calling DpsApi->deleteAllDps: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employerId** | **string**| The Id of the Employer that you want to delete all notices for. | |

### Return type

void (empty response body)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteDps()`

```php
deleteDps($employerId, $id)
```

Delete Notice

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\DpsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string | The Id of the Employer to which the DpsNotice belongs.
$id = 'id_example'; // string | The Id of the DsNotice you want to delete.

try {
    $apiInstance->deleteDps($employerId, $id);
} catch (Exception $e) {
    echo 'Exception when calling DpsApi->deleteDps: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employerId** | **string**| The Id of the Employer to which the DpsNotice belongs. | |
| **id** | **string**| The Id of the DsNotice you want to delete. | |

### Return type

void (empty response body)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getDps()`

```php
getDps($employerId, $id): \SynergiTech\Staffology\Model\DpsNotice
```

Get Notice

Returns the specified DPS Notice.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\DpsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string
$id = 'id_example'; // string | The Id of the DpsNotice you want to retrieve.

try {
    $result = $apiInstance->getDps($employerId, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DpsApi->getDps: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employerId** | **string**|  | |
| **id** | **string**| The Id of the DpsNotice you want to retrieve. | |

### Return type

[**\SynergiTech\Staffology\Model\DpsNotice**](../Model/DpsNotice.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getDpsSettingsDps()`

```php
getDpsSettingsDps($employerId): \SynergiTech\Staffology\Model\DpsSettings
```

Get DPS Settings

Returns the DpsSettings for the Employer

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\DpsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string | The Id of the Employer

try {
    $result = $apiInstance->getDpsSettingsDps($employerId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DpsApi->getDpsSettingsDps: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employerId** | **string**| The Id of the Employer | |

### Return type

[**\SynergiTech\Staffology\Model\DpsSettings**](../Model/DpsSettings.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listNoticesDps()`

```php
listNoticesDps($employerId, $pageNum, $pageSize): \SynergiTech\Staffology\Model\Item[]
```

List Notices

Lists DPS Notices.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\DpsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string
$pageNum = 56; // int
$pageSize = 56; // int

try {
    $result = $apiInstance->listNoticesDps($employerId, $pageNum, $pageSize);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DpsApi->listNoticesDps: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employerId** | **string**|  | |
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

## `parseXmlDps()`

```php
parseXmlDps($employerId, $body): int
```

Parse notices from XML

Checks the supplied XML string for notices. They're then processed in the same was as if received from HMRC.  Only used for testing the parsing of DPS XML.  Returns an integer showing how many new notices were found

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\DpsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string
$body = 'body_example'; // string

try {
    $result = $apiInstance->parseXmlDps($employerId, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DpsApi->parseXmlDps: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employerId** | **string**|  | |
| **body** | **string**|  | [optional] |

### Return type

**int**

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: `application/json-patch+json`, `application/json`, `text/json`, `application/*+json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `reapplyNoticesDps()`

```php
reapplyNoticesDps($employerId, $appliedFromDate): \SynergiTech\Staffology\Model\ContractReapplyDpsNoticeResponse
```

Reapply DpsNotices

From a specified date onwards, reapply DpsNotices

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\DpsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string | The Id of the Employer
$appliedFromDate = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | The date from which to apply DpsNotices

try {
    $result = $apiInstance->reapplyNoticesDps($employerId, $appliedFromDate);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DpsApi->reapplyNoticesDps: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employerId** | **string**| The Id of the Employer | |
| **appliedFromDate** | **\DateTime**| The date from which to apply DpsNotices | |

### Return type

[**\SynergiTech\Staffology\Model\ContractReapplyDpsNoticeResponse**](../Model/ContractReapplyDpsNoticeResponse.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateDpsSettingsDps()`

```php
updateDpsSettingsDps($employerId, $dpsSettings): \SynergiTech\Staffology\Model\DpsSettings
```

Update DPS Settings

Updates the DpsSettings for the Employer

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\DpsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string | The Id of the Employer
$dpsSettings = new \SynergiTech\Staffology\Model\DpsSettings(); // \SynergiTech\Staffology\Model\DpsSettings

try {
    $result = $apiInstance->updateDpsSettingsDps($employerId, $dpsSettings);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DpsApi->updateDpsSettingsDps: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employerId** | **string**| The Id of the Employer | |
| **dpsSettings** | [**\SynergiTech\Staffology\Model\DpsSettings**](../Model/DpsSettings.md)|  | [optional] |

### Return type

[**\SynergiTech\Staffology\Model\DpsSettings**](../Model/DpsSettings.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: `application/json-patch+json`, `application/json`, `text/json`, `application/*+json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
