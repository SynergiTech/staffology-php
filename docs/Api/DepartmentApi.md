# SynergiTech\Staffology\DepartmentApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createDepartment()**](DepartmentApi.md#createDepartment) | **POST** /employers/{employerId}/departments | Create Department |
| [**deleteDepartment()**](DepartmentApi.md#deleteDepartment) | **DELETE** /employers/{employerId}/departments/{code} | Delete Department (deprecated) |
| [**deleteDepartmentDepartment()**](DepartmentApi.md#deleteDepartmentDepartment) | **DELETE** /employers/{employerId}/departments/department | Delete Department |
| [**getDepartment()**](DepartmentApi.md#getDepartment) | **GET** /employers/{employerId}/departments/{code} | Get Department (deprecated) |
| [**getDepartmentDepartment()**](DepartmentApi.md#getDepartmentDepartment) | **GET** /employers/{employerId}/departments/Department | Get Department |
| [**indexDepartment()**](DepartmentApi.md#indexDepartment) | **GET** /employers/{employerId}/departments | List Departments |
| [**updateDepartment()**](DepartmentApi.md#updateDepartment) | **PUT** /employers/{employerId}/departments/{code} | Update Department (deprecated) |
| [**updateDepartmentDepartment()**](DepartmentApi.md#updateDepartmentDepartment) | **PUT** /employers/{employerId}/departments/department | Update Department |


## `createDepartment()`

```php
createDepartment($employerId, $department): \SynergiTech\Staffology\Model\Department
```

Create Department

Creates a new Department for the Employer.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\DepartmentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string
$department = new \SynergiTech\Staffology\Model\Department(); // \SynergiTech\Staffology\Model\Department

try {
    $result = $apiInstance->createDepartment($employerId, $department);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DepartmentApi->createDepartment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employerId** | **string**|  | |
| **department** | [**\SynergiTech\Staffology\Model\Department**](../Model/Department.md)|  | [optional] |

### Return type

[**\SynergiTech\Staffology\Model\Department**](../Model/Department.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: `application/json-patch+json`, `application/json`, `text/json`, `application/*+json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteDepartment()`

```php
deleteDepartment($employerId, $code)
```

Delete Department (deprecated)

Deletes the specified Department.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\DepartmentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string
$code = 'code_example'; // string

try {
    $apiInstance->deleteDepartment($employerId, $code);
} catch (Exception $e) {
    echo 'Exception when calling DepartmentApi->deleteDepartment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employerId** | **string**|  | |
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

## `deleteDepartmentDepartment()`

```php
deleteDepartmentDepartment($employerId, $code)
```

Delete Department

Deletes the specified Department.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\DepartmentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string
$code = 'code_example'; // string

try {
    $apiInstance->deleteDepartmentDepartment($employerId, $code);
} catch (Exception $e) {
    echo 'Exception when calling DepartmentApi->deleteDepartmentDepartment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employerId** | **string**|  | |
| **code** | **string**|  | [optional] |

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

## `getDepartment()`

```php
getDepartment($employerId, $code): \SynergiTech\Staffology\Model\Department
```

Get Department (deprecated)

Gets the Department specified.  Use the other GET endpoint that supports non-alphanumeric characters for a department code

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\DepartmentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string | The Id of the Employer to which the Department belongs.
$code = 'code_example'; // string

try {
    $result = $apiInstance->getDepartment($employerId, $code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DepartmentApi->getDepartment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employerId** | **string**| The Id of the Employer to which the Department belongs. | |
| **code** | **string**|  | |

### Return type

[**\SynergiTech\Staffology\Model\Department**](../Model/Department.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getDepartmentDepartment()`

```php
getDepartmentDepartment($employerId, $code): \SynergiTech\Staffology\Model\Department
```

Get Department

Gets the Department specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\DepartmentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string | The Id of the Employer to which the Department belongs.
$code = 'code_example'; // string | The code of the Department you want to retrieve.

try {
    $result = $apiInstance->getDepartmentDepartment($employerId, $code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DepartmentApi->getDepartmentDepartment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employerId** | **string**| The Id of the Employer to which the Department belongs. | |
| **code** | **string**| The code of the Department you want to retrieve. | [optional] |

### Return type

[**\SynergiTech\Staffology\Model\Department**](../Model/Department.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `indexDepartment()`

```php
indexDepartment($employerId): \SynergiTech\Staffology\Model\Item[]
```

List Departments

Lists all Departments for an Employer.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\DepartmentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string | The Id of the Employer for which you want to list Departments

try {
    $result = $apiInstance->indexDepartment($employerId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DepartmentApi->indexDepartment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employerId** | **string**| The Id of the Employer for which you want to list Departments | |

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

## `updateDepartment()`

```php
updateDepartment($employerId, $code, $department): \SynergiTech\Staffology\Model\Department
```

Update Department (deprecated)

Updates a Department for the Employer.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\DepartmentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string
$code = 'code_example'; // string
$department = new \SynergiTech\Staffology\Model\Department(); // \SynergiTech\Staffology\Model\Department

try {
    $result = $apiInstance->updateDepartment($employerId, $code, $department);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DepartmentApi->updateDepartment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employerId** | **string**|  | |
| **code** | **string**|  | |
| **department** | [**\SynergiTech\Staffology\Model\Department**](../Model/Department.md)|  | [optional] |

### Return type

[**\SynergiTech\Staffology\Model\Department**](../Model/Department.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: `application/json-patch+json`, `application/json`, `text/json`, `application/*+json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateDepartmentDepartment()`

```php
updateDepartmentDepartment($employerId, $code, $department): \SynergiTech\Staffology\Model\Department
```

Update Department

Updates the details of an existing Department.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\DepartmentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string
$code = 'code_example'; // string
$department = new \SynergiTech\Staffology\Model\Department(); // \SynergiTech\Staffology\Model\Department

try {
    $result = $apiInstance->updateDepartmentDepartment($employerId, $code, $department);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DepartmentApi->updateDepartmentDepartment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employerId** | **string**|  | |
| **code** | **string**|  | [optional] |
| **department** | [**\SynergiTech\Staffology\Model\Department**](../Model/Department.md)|  | [optional] |

### Return type

[**\SynergiTech\Staffology\Model\Department**](../Model/Department.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: `application/json-patch+json`, `application/json`, `text/json`, `application/*+json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
