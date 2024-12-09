# SynergiTech\Staffology\OccupationalPolicyApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createOccupationalPolicy()**](OccupationalPolicyApi.md#createOccupationalPolicy) | **POST** /employers/{employerId}/occupationalpolicies | Create Occupational Policy |
| [**deleteOccupationalPolicy()**](OccupationalPolicyApi.md#deleteOccupationalPolicy) | **DELETE** /employers/{employerId}/occupationalpolicies/{id} | Delete Occupational Policy |
| [**getOccupationalPolicy()**](OccupationalPolicyApi.md#getOccupationalPolicy) | **GET** /employers/{employerId}/occupationalpolicies/{id} | Get Occupational Policy |
| [**indexOccupationalPolicy()**](OccupationalPolicyApi.md#indexOccupationalPolicy) | **GET** /employers/{employerId}/occupationalpolicies | List Occupational Policies |
| [**updateOccupationalPolicy()**](OccupationalPolicyApi.md#updateOccupationalPolicy) | **PUT** /employers/{employerId}/occupationalpolicies/{id} | Update Occupational Policy |


## `createOccupationalPolicy()`

```php
createOccupationalPolicy($employerId, $occupationalPolicy): \SynergiTech\Staffology\Model\OccupationalPolicy
```

Create Occupational Policy

Creates a new Occupational Policy for the Employer.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\OccupationalPolicyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string | The Id of the Employer to which the Employee belongs.
$occupationalPolicy = new \SynergiTech\Staffology\Model\OccupationalPolicy(); // \SynergiTech\Staffology\Model\OccupationalPolicy

try {
    $result = $apiInstance->createOccupationalPolicy($employerId, $occupationalPolicy);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OccupationalPolicyApi->createOccupationalPolicy: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employerId** | **string**| The Id of the Employer to which the Employee belongs. | |
| **occupationalPolicy** | [**\SynergiTech\Staffology\Model\OccupationalPolicy**](../Model/OccupationalPolicy.md)|  | [optional] |

### Return type

[**\SynergiTech\Staffology\Model\OccupationalPolicy**](../Model/OccupationalPolicy.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: `application/json-patch+json`, `application/json`, `text/json`, `application/*+json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteOccupationalPolicy()`

```php
deleteOccupationalPolicy($employerId, $id)
```

Delete Occupational Policy

Deletes the specified Occupational Policy.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\OccupationalPolicyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string | The Id of the Employer to which the Occupational Policy belongs.
$id = 'id_example'; // string | The Id of the Occupational Policy which you want to fetch

try {
    $apiInstance->deleteOccupationalPolicy($employerId, $id);
} catch (Exception $e) {
    echo 'Exception when calling OccupationalPolicyApi->deleteOccupationalPolicy: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employerId** | **string**| The Id of the Employer to which the Occupational Policy belongs. | |
| **id** | **string**| The Id of the Occupational Policy which you want to fetch | |

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

## `getOccupationalPolicy()`

```php
getOccupationalPolicy($employerId, $id): \SynergiTech\Staffology\Model\OccupationalPolicy
```

Get Occupational Policy

Gets the Occupational Policy specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\OccupationalPolicyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string | The Id of the Employer to which the Occupational Policy belongs.
$id = 'id_example'; // string | The Id of the Occupational Policy which you want to fetch

try {
    $result = $apiInstance->getOccupationalPolicy($employerId, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OccupationalPolicyApi->getOccupationalPolicy: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employerId** | **string**| The Id of the Employer to which the Occupational Policy belongs. | |
| **id** | **string**| The Id of the Occupational Policy which you want to fetch | |

### Return type

[**\SynergiTech\Staffology\Model\OccupationalPolicy**](../Model/OccupationalPolicy.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `indexOccupationalPolicy()`

```php
indexOccupationalPolicy($employerId): \SynergiTech\Staffology\Model\Item[]
```

List Occupational Policies

Lists all Occupational Policies for an Employer.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\OccupationalPolicyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string | The Id of the Employer to which the Employee belongs.

try {
    $result = $apiInstance->indexOccupationalPolicy($employerId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OccupationalPolicyApi->indexOccupationalPolicy: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employerId** | **string**| The Id of the Employer to which the Employee belongs. | |

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

## `updateOccupationalPolicy()`

```php
updateOccupationalPolicy($employerId, $id, $occupationalPolicy): \SynergiTech\Staffology\Model\OccupationalPolicy
```

Update Occupational Policy

Updates a Occupational Policy for the Employer.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\OccupationalPolicyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string | The Id of the Employer to which the Occupational Policy belongs.
$id = 'id_example'; // string | The Id of the Occupational Policy which you want to fetch
$occupationalPolicy = new \SynergiTech\Staffology\Model\OccupationalPolicy(); // \SynergiTech\Staffology\Model\OccupationalPolicy

try {
    $result = $apiInstance->updateOccupationalPolicy($employerId, $id, $occupationalPolicy);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OccupationalPolicyApi->updateOccupationalPolicy: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employerId** | **string**| The Id of the Employer to which the Occupational Policy belongs. | |
| **id** | **string**| The Id of the Occupational Policy which you want to fetch | |
| **occupationalPolicy** | [**\SynergiTech\Staffology\Model\OccupationalPolicy**](../Model/OccupationalPolicy.md)|  | [optional] |

### Return type

[**\SynergiTech\Staffology\Model\OccupationalPolicy**](../Model/OccupationalPolicy.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: `application/json-patch+json`, `application/json`, `text/json`, `application/*+json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
