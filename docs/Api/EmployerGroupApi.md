# SynergiTech\Staffology\EmployerGroupApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createEmployerGroup()**](EmployerGroupApi.md#createEmployerGroup) | **POST** /employers/groups | Create EmployerGroup |
| [**deleteEmployerGroup()**](EmployerGroupApi.md#deleteEmployerGroup) | **DELETE** /employers/groups/{code} | Delete EmployerGroup |
| [**getEmployerGroup()**](EmployerGroupApi.md#getEmployerGroup) | **GET** /employers/groups/{code} | Get EmployerGroup |
| [**indexEmployerGroup()**](EmployerGroupApi.md#indexEmployerGroup) | **GET** /employers/groups | List EmployerGroups |
| [**updateEmployerGroup()**](EmployerGroupApi.md#updateEmployerGroup) | **PUT** /employers/groups/{code} | Update EmployerGroup |


## `createEmployerGroup()`

```php
createEmployerGroup($employerGroup): \SynergiTech\Staffology\Model\EmployerGroup
```

Create EmployerGroup

Creates a new EmployerGroup for the user.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\EmployerGroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerGroup = new \SynergiTech\Staffology\Model\EmployerGroup(); // \SynergiTech\Staffology\Model\EmployerGroup

try {
    $result = $apiInstance->createEmployerGroup($employerGroup);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmployerGroupApi->createEmployerGroup: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employerGroup** | [**\SynergiTech\Staffology\Model\EmployerGroup**](../Model/EmployerGroup.md)|  | [optional] |

### Return type

[**\SynergiTech\Staffology\Model\EmployerGroup**](../Model/EmployerGroup.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: `application/json-patch+json`, `application/json`, `text/json`, `application/*+json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteEmployerGroup()`

```php
deleteEmployerGroup($code)
```

Delete EmployerGroup

Deletes the specified EmployerGroup.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\EmployerGroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$code = 'code_example'; // string

try {
    $apiInstance->deleteEmployerGroup($code);
} catch (Exception $e) {
    echo 'Exception when calling EmployerGroupApi->deleteEmployerGroup: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **code** | **string**|  | |

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

## `getEmployerGroup()`

```php
getEmployerGroup($code): \SynergiTech\Staffology\Model\EmployerGroup
```

Get EmployerGroup

Gets the EmployerGroup specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\EmployerGroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$code = 'code_example'; // string

try {
    $result = $apiInstance->getEmployerGroup($code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmployerGroupApi->getEmployerGroup: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **code** | **string**|  | |

### Return type

[**\SynergiTech\Staffology\Model\EmployerGroup**](../Model/EmployerGroup.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `indexEmployerGroup()`

```php
indexEmployerGroup(): \SynergiTech\Staffology\Model\Item[]
```

List EmployerGroups

Lists all EmployerGroups for the user.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\EmployerGroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->indexEmployerGroup();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmployerGroupApi->indexEmployerGroup: ', $e->getMessage(), PHP_EOL;
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

## `updateEmployerGroup()`

```php
updateEmployerGroup($code, $employerGroup): \SynergiTech\Staffology\Model\EmployerGroup
```

Update EmployerGroup

Updates a EmployerGroup for the user.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\EmployerGroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$code = 'code_example'; // string
$employerGroup = new \SynergiTech\Staffology\Model\EmployerGroup(); // \SynergiTech\Staffology\Model\EmployerGroup

try {
    $result = $apiInstance->updateEmployerGroup($code, $employerGroup);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmployerGroupApi->updateEmployerGroup: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **code** | **string**|  | |
| **employerGroup** | [**\SynergiTech\Staffology\Model\EmployerGroup**](../Model/EmployerGroup.md)|  | [optional] |

### Return type

[**\SynergiTech\Staffology\Model\EmployerGroup**](../Model/EmployerGroup.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: `application/json-patch+json`, `application/json`, `text/json`, `application/*+json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
