# SynergiTech\Staffology\PaySpineApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createAllowanceGradesPaySpine()**](PaySpineApi.md#createAllowanceGradesPaySpine) | **POST** /employers/{employerId}/payspines/{paySpineId}/allowances/{allowanceId}/allowancegrades | Create AllowanceGrade |
| [**createLondonAllowancePaySpine()**](PaySpineApi.md#createLondonAllowancePaySpine) | **POST** /employers/{employerId}/payspines/{paySpineId}/londonallowances | Create LondonAllowance |
| [**createMultipleAllowanceGradesPaySpine()**](PaySpineApi.md#createMultipleAllowanceGradesPaySpine) | **POST** /employers/{employerId}/payspines/{paySpineId}/allowances/{allowanceId}/allowancegrades/create/bulk | Create Multiple AllowanceGrades |
| [**createMultiplePaySpine()**](PaySpineApi.md#createMultiplePaySpine) | **POST** /employers/{employerId}/payspines/{paySpineId}/spinalpoints/bulk | Create Multiple SpinalPoints |
| [**createMultipleSpineAllowancePaySpine()**](PaySpineApi.md#createMultipleSpineAllowancePaySpine) | **POST** /employers/{employerId}/payspines/{paySpineId}/allowances/create/bulk | Create Multiple SpineAllowances |
| [**createPaySpine()**](PaySpineApi.md#createPaySpine) | **POST** /employers/{employerId}/payspines | Create PaySpine |
| [**createPaySpineGradePaySpine()**](PaySpineApi.md#createPaySpineGradePaySpine) | **POST** /employers/{employerId}/payspines/{paySpineId}/paygrades | Create PaySpine Grade |
| [**createSpinalPointPaySpine()**](PaySpineApi.md#createSpinalPointPaySpine) | **POST** /employers/{employerId}/payspines/{paySpineId}/spinalpoints | Create SpinalPoint |
| [**createSpineAllowancePaySpine()**](PaySpineApi.md#createSpineAllowancePaySpine) | **POST** /employers/{employerId}/payspines/{paySpineId}/allowances | Create SpineAllowance |
| [**deleteAllAllowanceGradesPaySpine()**](PaySpineApi.md#deleteAllAllowanceGradesPaySpine) | **DELETE** /employers/{employerId}/payspines/{paySpineId}/allowances/{allowanceId}/allowancegrades | Delete All AllowanceGrades Associated with a PaySpine |
| [**deleteAllSpinalPointsPaySpine()**](PaySpineApi.md#deleteAllSpinalPointsPaySpine) | **DELETE** /employers/{employerId}/payspines/{paySpineId}/spinalpoints | Delete All SpinalPoints Associated with a PaySpine |
| [**deleteAllSpineAllowancesPaySpine()**](PaySpineApi.md#deleteAllSpineAllowancesPaySpine) | **DELETE** /employers/{employerId}/payspines/{paySpineId}/allowances | Delete All SpineAllowances Associated with a PaySpine |
| [**deleteAllowanceGradePaySpine()**](PaySpineApi.md#deleteAllowanceGradePaySpine) | **DELETE** /employers/{employerId}/payspines/{paySpineId}/allowances/{allowanceId}/allowancegrades/{allowanceGradeId} | Delete AllowanceGrade |
| [**deleteLondonAllowancePaySpine()**](PaySpineApi.md#deleteLondonAllowancePaySpine) | **DELETE** /employers/{employerId}/payspines/{paySpineId}/londonallowances/{londonAllowanceId} | Delete LondonAllowance |
| [**deletePaySpine()**](PaySpineApi.md#deletePaySpine) | **DELETE** /employers/{employerId}/payspines/{id} | Delete PaySpine |
| [**deletePaySpineGradePaySpine()**](PaySpineApi.md#deletePaySpineGradePaySpine) | **DELETE** /employers/{employerId}/payspines/{paySpineId}/paygrades/{payGradeId} | Delete PaySpine Grade |
| [**deleteSpinalPointPaySpine()**](PaySpineApi.md#deleteSpinalPointPaySpine) | **DELETE** /employers/{employerId}/payspines/{paySpineId}/spinalpoints/{spinalPointId} | Delete SpinalPoint |
| [**deleteSpineAllowancePaySpine()**](PaySpineApi.md#deleteSpineAllowancePaySpine) | **DELETE** /employers/{employerId}/payspines/{paySpineId}/allowances/{allowanceid} | Delete SpineAllowance |
| [**getAllowanceGradePaySpine()**](PaySpineApi.md#getAllowanceGradePaySpine) | **GET** /employers/{employerId}/payspines/{paySpineId}/allowances/{allowanceId}/allowancegrades/{allowanceGradeId} | Get AllowanceGrade |
| [**getAllowanceGradesPaySpine()**](PaySpineApi.md#getAllowanceGradesPaySpine) | **GET** /employers/{employerId}/payspines/{paySpineId}/allowances/{allowanceId}/allowancegrades | List AllowanceGrades |
| [**getAnnualValueFromSalaryFormulaPaySpine()**](PaySpineApi.md#getAnnualValueFromSalaryFormulaPaySpine) | **GET** /employers/{employerId}/payspines/{id}/annualsalarybypayspines | Get Annual Value from pay spines formula |
| [**getLondonAllowanceListPaySpine()**](PaySpineApi.md#getLondonAllowanceListPaySpine) | **GET** /employers/{employerId}/payspines/{paySpineId}/londonallowances | List LondonAllowances |
| [**getLondonAllowancePaySpine()**](PaySpineApi.md#getLondonAllowancePaySpine) | **GET** /employers/{employerId}/payspines/{paySpineId}/londonallowances/{londonAllowanceId} | Get LondonAllowance |
| [**getPaySpine()**](PaySpineApi.md#getPaySpine) | **GET** /employers/{employerId}/payspines/{id} | Get PaySpine |
| [**getPaySpineGradeListPaySpine()**](PaySpineApi.md#getPaySpineGradeListPaySpine) | **GET** /employers/{employerId}/payspines/{paySpineId}/paygrades | List PaySpine Grade |
| [**getPaySpineGradePaySpine()**](PaySpineApi.md#getPaySpineGradePaySpine) | **GET** /employers/{employerId}/payspines/{paySpineId}/paygrades/{payGradeId} | Get PaySpine Grade |
| [**getSpinalPointListPaySpine()**](PaySpineApi.md#getSpinalPointListPaySpine) | **GET** /employers/{employerId}/payspines/{paySpineId}/spinalpoints | List SpinalPoints |
| [**getSpinalPointPaySpine()**](PaySpineApi.md#getSpinalPointPaySpine) | **GET** /employers/{employerId}/payspines/{paySpineId}/spinalpoints/{spinalPointId} | Get SpinalPoint |
| [**getSpineAllowanceListPaySpine()**](PaySpineApi.md#getSpineAllowanceListPaySpine) | **GET** /employers/{employerId}/payspines/{paySpineId}/allowances | List SpineAllowances |
| [**getSpineAllowancePaySpine()**](PaySpineApi.md#getSpineAllowancePaySpine) | **GET** /employers/{employerId}/payspines/{paySpineId}/allowances/{allowanceid} | Get SpineAllowance |
| [**importCsvPaySpine()**](PaySpineApi.md#importCsvPaySpine) | **POST** /employers/{employerId}/payspines/spinalpoints/import | Import SpinalPoints from csv file |
| [**importCsvPaySpinePaySpine()**](PaySpineApi.md#importCsvPaySpinePaySpine) | **POST** /employers/{employerId}/payspines/import | Import PaySpine from csv file |
| [**importPayspineGradeCsvPaySpine()**](PaySpineApi.md#importPayspineGradeCsvPaySpine) | **POST** /employers/{employerId}/payspines/paygrades/import | Import SpineGrades from csv file |
| [**indexPaySpine()**](PaySpineApi.md#indexPaySpine) | **GET** /employers/{employerId}/payspines | List PaySpine |
| [**updateAllowanceGradePaySpine()**](PaySpineApi.md#updateAllowanceGradePaySpine) | **PUT** /employers/{employerId}/payspines/{paySpineId}/allowances/{allowanceId}/allowancegrades/{allowanceGradeId} | Update AllowanceGrade |
| [**updateLondonAllowancePaySpine()**](PaySpineApi.md#updateLondonAllowancePaySpine) | **PUT** /employers/{employerId}/payspines/{paySpineId}/londonallowances/{londonAllowanceId} | Update LondonAllowance |
| [**updateMultipleAllowanceGradesPaySpine()**](PaySpineApi.md#updateMultipleAllowanceGradesPaySpine) | **PUT** /employers/{employerId}/payspines/{paySpineId}/allowances/{allowanceId}/allowancegrades/update/bulk | Update Multiple AllowanceGrades |
| [**updateMultiplePaySpine()**](PaySpineApi.md#updateMultiplePaySpine) | **PUT** /employers/{employerId}/payspines/{paySpineId}/spinalpoints/bulk | Update Multiple SpinalPoints |
| [**updateMultipleSpineAllowancePaySpine()**](PaySpineApi.md#updateMultipleSpineAllowancePaySpine) | **PUT** /employers/{employerId}/payspines/{paySpineId}/allowances/update/bulk | Update Multiple SpineAllowances |
| [**updatePayGradePaySpine()**](PaySpineApi.md#updatePayGradePaySpine) | **PUT** /employers/{employerId}/payspines/{paySpineId}/paygrades/{payGradeId} | Update PaySpine Grade |
| [**updatePaySpine()**](PaySpineApi.md#updatePaySpine) | **PUT** /employers/{employerId}/payspines/{id} | Update PaySpine |
| [**updateSpinalPointPaySpine()**](PaySpineApi.md#updateSpinalPointPaySpine) | **PUT** /employers/{employerId}/payspines/{paySpineId}/spinalpoints/{spinalPointId} | Update SpinalPoint |
| [**updateSpineAllowancePaySpine()**](PaySpineApi.md#updateSpineAllowancePaySpine) | **PUT** /employers/{employerId}/payspines/{paySpineId}/allowances/{allowanceid} | Update SpineAllowance |


## `createAllowanceGradesPaySpine()`

```php
createAllowanceGradesPaySpine($employerId, $paySpineId, $allowanceId, $contractAllowanceGradesRequest): \SynergiTech\Staffology\Model\ContractAllowanceGradesResponse
```

Create AllowanceGrade

Create AllowanceGrade for a PaySpine. [This endpoint is in beta for future development work and should not be used]

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\PaySpineApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string | The Id of the Employer for which you want to create Allowance Grade
$paySpineId = 'paySpineId_example'; // string | The Id of the Pay spine for which you want to create Allowance Grade
$allowanceId = 'allowanceId_example'; // string | The Id of the Spine Allowance for which you want to create Allowance Grade
$contractAllowanceGradesRequest = new \SynergiTech\Staffology\Model\ContractAllowanceGradesRequest(); // \SynergiTech\Staffology\Model\ContractAllowanceGradesRequest

try {
    $result = $apiInstance->createAllowanceGradesPaySpine($employerId, $paySpineId, $allowanceId, $contractAllowanceGradesRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaySpineApi->createAllowanceGradesPaySpine: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employerId** | **string**| The Id of the Employer for which you want to create Allowance Grade | |
| **paySpineId** | **string**| The Id of the Pay spine for which you want to create Allowance Grade | |
| **allowanceId** | **string**| The Id of the Spine Allowance for which you want to create Allowance Grade | |
| **contractAllowanceGradesRequest** | [**\SynergiTech\Staffology\Model\ContractAllowanceGradesRequest**](../Model/ContractAllowanceGradesRequest.md)|  | [optional] |

### Return type

[**\SynergiTech\Staffology\Model\ContractAllowanceGradesResponse**](../Model/ContractAllowanceGradesResponse.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: `application/json-patch+json`, `application/json`, `text/json`, `application/*+json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createLondonAllowancePaySpine()`

```php
createLondonAllowancePaySpine($employerId, $paySpineId, $contractLondonAllowanceRequest): \SynergiTech\Staffology\Model\ContractLondonAllowanceResponse
```

Create LondonAllowance

Create LondonAllowance for an Employer and Payspine. [This endpoint is in beta for future development work and should not be used]

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\PaySpineApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string | The Id of the Employer for which you want to create London Allowance
$paySpineId = 'paySpineId_example'; // string | The Id of the Pay spine for which you want to create London Allowance
$contractLondonAllowanceRequest = new \SynergiTech\Staffology\Model\ContractLondonAllowanceRequest(); // \SynergiTech\Staffology\Model\ContractLondonAllowanceRequest

try {
    $result = $apiInstance->createLondonAllowancePaySpine($employerId, $paySpineId, $contractLondonAllowanceRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaySpineApi->createLondonAllowancePaySpine: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employerId** | **string**| The Id of the Employer for which you want to create London Allowance | |
| **paySpineId** | **string**| The Id of the Pay spine for which you want to create London Allowance | |
| **contractLondonAllowanceRequest** | [**\SynergiTech\Staffology\Model\ContractLondonAllowanceRequest**](../Model/ContractLondonAllowanceRequest.md)|  | [optional] |

### Return type

[**\SynergiTech\Staffology\Model\ContractLondonAllowanceResponse**](../Model/ContractLondonAllowanceResponse.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: `application/json-patch+json`, `application/json`, `text/json`, `application/*+json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createMultipleAllowanceGradesPaySpine()`

```php
createMultipleAllowanceGradesPaySpine($employerId, $paySpineId, $allowanceId, $contractAllowanceGradesRequest): \SynergiTech\Staffology\Model\ContractAllowanceGradesResponse[]
```

Create Multiple AllowanceGrades

Create multiple AllowanceGrades for a PaySpine. [This endpoint is in beta for future development work and should not be used]

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\PaySpineApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string | The Id of the Employer for which you want to create multiple Allowance Grades
$paySpineId = 'paySpineId_example'; // string | The Id of the Pay Spine for which you want to create multiple Allowance Grades
$allowanceId = 'allowanceId_example'; // string | The Id of the Spine Allowance for which you want to create multiple Allowance Grades
$contractAllowanceGradesRequest = array(new \SynergiTech\Staffology\Model\ContractAllowanceGradesRequest()); // \SynergiTech\Staffology\Model\ContractAllowanceGradesRequest[]

try {
    $result = $apiInstance->createMultipleAllowanceGradesPaySpine($employerId, $paySpineId, $allowanceId, $contractAllowanceGradesRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaySpineApi->createMultipleAllowanceGradesPaySpine: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employerId** | **string**| The Id of the Employer for which you want to create multiple Allowance Grades | |
| **paySpineId** | **string**| The Id of the Pay Spine for which you want to create multiple Allowance Grades | |
| **allowanceId** | **string**| The Id of the Spine Allowance for which you want to create multiple Allowance Grades | |
| **contractAllowanceGradesRequest** | [**\SynergiTech\Staffology\Model\ContractAllowanceGradesRequest[]**](../Model/ContractAllowanceGradesRequest.md)|  | [optional] |

### Return type

[**\SynergiTech\Staffology\Model\ContractAllowanceGradesResponse[]**](../Model/ContractAllowanceGradesResponse.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: `application/json-patch+json`, `application/json`, `text/json`, `application/*+json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createMultiplePaySpine()`

```php
createMultiplePaySpine($employerId, $paySpineId, $contractSpinalPointRequest): \SynergiTech\Staffology\Model\ContractSpinalPointResponse[]
```

Create Multiple SpinalPoints

Create multiple SpinalPoints for the specified PaySpine.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\PaySpineApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string | The Id of the Employer for which you want to create multiple Spinal Point
$paySpineId = 'paySpineId_example'; // string | The Id of the Pay Spine for which you want to create multiple Spinal Point
$contractSpinalPointRequest = array(new \SynergiTech\Staffology\Model\ContractSpinalPointRequest()); // \SynergiTech\Staffology\Model\ContractSpinalPointRequest[]

try {
    $result = $apiInstance->createMultiplePaySpine($employerId, $paySpineId, $contractSpinalPointRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaySpineApi->createMultiplePaySpine: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employerId** | **string**| The Id of the Employer for which you want to create multiple Spinal Point | |
| **paySpineId** | **string**| The Id of the Pay Spine for which you want to create multiple Spinal Point | |
| **contractSpinalPointRequest** | [**\SynergiTech\Staffology\Model\ContractSpinalPointRequest[]**](../Model/ContractSpinalPointRequest.md)|  | [optional] |

### Return type

[**\SynergiTech\Staffology\Model\ContractSpinalPointResponse[]**](../Model/ContractSpinalPointResponse.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: `application/json-patch+json`, `application/json`, `text/json`, `application/*+json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createMultipleSpineAllowancePaySpine()`

```php
createMultipleSpineAllowancePaySpine($employerId, $paySpineId, $contractSpineAllowanceRequest): \SynergiTech\Staffology\Model\ContractSpineAllowanceResponse[]
```

Create Multiple SpineAllowances

Creates multiple Spine Allowance for the specified PaySpine. [This endpoint is in beta for future development work and should not be used]

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\PaySpineApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string | The Id of the Employer for which you want to create multiple SpineAllowance
$paySpineId = 'paySpineId_example'; // string | The Id of the Pay Spine for which you want to create multiple SpineAllowance
$contractSpineAllowanceRequest = array(new \SynergiTech\Staffology\Model\ContractSpineAllowanceRequest()); // \SynergiTech\Staffology\Model\ContractSpineAllowanceRequest[]

try {
    $result = $apiInstance->createMultipleSpineAllowancePaySpine($employerId, $paySpineId, $contractSpineAllowanceRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaySpineApi->createMultipleSpineAllowancePaySpine: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employerId** | **string**| The Id of the Employer for which you want to create multiple SpineAllowance | |
| **paySpineId** | **string**| The Id of the Pay Spine for which you want to create multiple SpineAllowance | |
| **contractSpineAllowanceRequest** | [**\SynergiTech\Staffology\Model\ContractSpineAllowanceRequest[]**](../Model/ContractSpineAllowanceRequest.md)|  | [optional] |

### Return type

[**\SynergiTech\Staffology\Model\ContractSpineAllowanceResponse[]**](../Model/ContractSpineAllowanceResponse.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: `application/json-patch+json`, `application/json`, `text/json`, `application/*+json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createPaySpine()`

```php
createPaySpine($employerId, $contractPaySpineRequest): \SynergiTech\Staffology\Model\ContractPaySpineResponse
```

Create PaySpine

Create a new PaySpine for the Employer.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\PaySpineApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string
$contractPaySpineRequest = new \SynergiTech\Staffology\Model\ContractPaySpineRequest(); // \SynergiTech\Staffology\Model\ContractPaySpineRequest

try {
    $result = $apiInstance->createPaySpine($employerId, $contractPaySpineRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaySpineApi->createPaySpine: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employerId** | **string**|  | |
| **contractPaySpineRequest** | [**\SynergiTech\Staffology\Model\ContractPaySpineRequest**](../Model/ContractPaySpineRequest.md)|  | [optional] |

### Return type

[**\SynergiTech\Staffology\Model\ContractPaySpineResponse**](../Model/ContractPaySpineResponse.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: `application/json-patch+json`, `application/json`, `text/json`, `application/*+json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createPaySpineGradePaySpine()`

```php
createPaySpineGradePaySpine($employerId, $paySpineId, $contractPaySpineGradeRequest): \SynergiTech\Staffology\Model\ContractPaySpineGradeResponse
```

Create PaySpine Grade

create PaySpine Grade for an Employer and Payspine.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\PaySpineApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string | The Id of the Employer for which you want to create PaySpine Grade
$paySpineId = 'paySpineId_example'; // string | The Id of the Pay spine for which you want to create PaySpine Grade
$contractPaySpineGradeRequest = new \SynergiTech\Staffology\Model\ContractPaySpineGradeRequest(); // \SynergiTech\Staffology\Model\ContractPaySpineGradeRequest

try {
    $result = $apiInstance->createPaySpineGradePaySpine($employerId, $paySpineId, $contractPaySpineGradeRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaySpineApi->createPaySpineGradePaySpine: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employerId** | **string**| The Id of the Employer for which you want to create PaySpine Grade | |
| **paySpineId** | **string**| The Id of the Pay spine for which you want to create PaySpine Grade | |
| **contractPaySpineGradeRequest** | [**\SynergiTech\Staffology\Model\ContractPaySpineGradeRequest**](../Model/ContractPaySpineGradeRequest.md)|  | [optional] |

### Return type

[**\SynergiTech\Staffology\Model\ContractPaySpineGradeResponse**](../Model/ContractPaySpineGradeResponse.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: `application/json-patch+json`, `application/json`, `text/json`, `application/*+json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createSpinalPointPaySpine()`

```php
createSpinalPointPaySpine($employerId, $paySpineId, $contractSpinalPointRequest): \SynergiTech\Staffology\Model\ContractSpinalPointResponse
```

Create SpinalPoint

Create SpinalPoint for an Employer and Payspine.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\PaySpineApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string | The Id of the Employer for which you want to create Spinal Point
$paySpineId = 'paySpineId_example'; // string | The Id of the Pay spine for which you want to create Spinal Point
$contractSpinalPointRequest = new \SynergiTech\Staffology\Model\ContractSpinalPointRequest(); // \SynergiTech\Staffology\Model\ContractSpinalPointRequest

try {
    $result = $apiInstance->createSpinalPointPaySpine($employerId, $paySpineId, $contractSpinalPointRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaySpineApi->createSpinalPointPaySpine: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employerId** | **string**| The Id of the Employer for which you want to create Spinal Point | |
| **paySpineId** | **string**| The Id of the Pay spine for which you want to create Spinal Point | |
| **contractSpinalPointRequest** | [**\SynergiTech\Staffology\Model\ContractSpinalPointRequest**](../Model/ContractSpinalPointRequest.md)|  | [optional] |

### Return type

[**\SynergiTech\Staffology\Model\ContractSpinalPointResponse**](../Model/ContractSpinalPointResponse.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: `application/json-patch+json`, `application/json`, `text/json`, `application/*+json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createSpineAllowancePaySpine()`

```php
createSpineAllowancePaySpine($employerId, $paySpineId, $contractSpineAllowanceRequest): \SynergiTech\Staffology\Model\ContractSpineAllowanceResponse
```

Create SpineAllowance

Create Allowance for a Pay Spine. [This endpoint is in beta for future development work and should not be used]

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\PaySpineApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string | The Id of the Employer for which you want to create Spine Allowance
$paySpineId = 'paySpineId_example'; // string | The Id of the Pay spine for which you want to create Spine Allowance
$contractSpineAllowanceRequest = new \SynergiTech\Staffology\Model\ContractSpineAllowanceRequest(); // \SynergiTech\Staffology\Model\ContractSpineAllowanceRequest

try {
    $result = $apiInstance->createSpineAllowancePaySpine($employerId, $paySpineId, $contractSpineAllowanceRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaySpineApi->createSpineAllowancePaySpine: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employerId** | **string**| The Id of the Employer for which you want to create Spine Allowance | |
| **paySpineId** | **string**| The Id of the Pay spine for which you want to create Spine Allowance | |
| **contractSpineAllowanceRequest** | [**\SynergiTech\Staffology\Model\ContractSpineAllowanceRequest**](../Model/ContractSpineAllowanceRequest.md)|  | [optional] |

### Return type

[**\SynergiTech\Staffology\Model\ContractSpineAllowanceResponse**](../Model/ContractSpineAllowanceResponse.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: `application/json-patch+json`, `application/json`, `text/json`, `application/*+json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteAllAllowanceGradesPaySpine()`

```php
deleteAllAllowanceGradesPaySpine($employerId, $paySpineId, $allowanceId)
```

Delete All AllowanceGrades Associated with a PaySpine

Delete all AllowanceGrades associated with a PaySpine. [This endpoint is in beta for future development work and should not be used]

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\PaySpineApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string | The Id of the Employer for which you want to delete Allowance Grades
$paySpineId = 'paySpineId_example'; // string | The Id of the Pay Spine for which you want to delete Allowance Grades
$allowanceId = 'allowanceId_example'; // string | The Id of the Spine Allowance for which you want to delete Allowance Grades

try {
    $apiInstance->deleteAllAllowanceGradesPaySpine($employerId, $paySpineId, $allowanceId);
} catch (Exception $e) {
    echo 'Exception when calling PaySpineApi->deleteAllAllowanceGradesPaySpine: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employerId** | **string**| The Id of the Employer for which you want to delete Allowance Grades | |
| **paySpineId** | **string**| The Id of the Pay Spine for which you want to delete Allowance Grades | |
| **allowanceId** | **string**| The Id of the Spine Allowance for which you want to delete Allowance Grades | |

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

## `deleteAllSpinalPointsPaySpine()`

```php
deleteAllSpinalPointsPaySpine($employerId, $paySpineId)
```

Delete All SpinalPoints Associated with a PaySpine

Delete all SpinalPoints associated with the specified PaySpine.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\PaySpineApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string | The Id of the Employer for which you want to delete Spinal Point List
$paySpineId = 'paySpineId_example'; // string | The Id of the Pay Spine for which you want to delete Spinal Point List

try {
    $apiInstance->deleteAllSpinalPointsPaySpine($employerId, $paySpineId);
} catch (Exception $e) {
    echo 'Exception when calling PaySpineApi->deleteAllSpinalPointsPaySpine: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employerId** | **string**| The Id of the Employer for which you want to delete Spinal Point List | |
| **paySpineId** | **string**| The Id of the Pay Spine for which you want to delete Spinal Point List | |

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

## `deleteAllSpineAllowancesPaySpine()`

```php
deleteAllSpineAllowancesPaySpine($employerId, $paySpineId)
```

Delete All SpineAllowances Associated with a PaySpine

Delete all Allowances associated with the specified Pay Spine. [This endpoint is in beta for future development work and should not be used]

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\PaySpineApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string | The Id of the Employer for which you want to delete SpineAllowances
$paySpineId = 'paySpineId_example'; // string | The Id of the Pay Spine for which you want to delete SpineAllowances

try {
    $apiInstance->deleteAllSpineAllowancesPaySpine($employerId, $paySpineId);
} catch (Exception $e) {
    echo 'Exception when calling PaySpineApi->deleteAllSpineAllowancesPaySpine: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employerId** | **string**| The Id of the Employer for which you want to delete SpineAllowances | |
| **paySpineId** | **string**| The Id of the Pay Spine for which you want to delete SpineAllowances | |

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

## `deleteAllowanceGradePaySpine()`

```php
deleteAllowanceGradePaySpine($employerId, $paySpineId, $allowanceId, $allowanceGradeId)
```

Delete AllowanceGrade

Delete AllowanceGrade for a PaySpine. [This endpoint is in beta for future development work and should not be used]

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\PaySpineApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string | The Id of the Employer for which you want to delete Allowance Grade
$paySpineId = 'paySpineId_example'; // string | The Id of the Pay Spine for which you want to delete Allowance Grade
$allowanceId = 'allowanceId_example'; // string | The Id of the Spine Allowance for which you want to delete Allowance Grade
$allowanceGradeId = 'allowanceGradeId_example'; // string | The Id of the Allowance Grade for which you want to delete Allowance Grade

try {
    $apiInstance->deleteAllowanceGradePaySpine($employerId, $paySpineId, $allowanceId, $allowanceGradeId);
} catch (Exception $e) {
    echo 'Exception when calling PaySpineApi->deleteAllowanceGradePaySpine: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employerId** | **string**| The Id of the Employer for which you want to delete Allowance Grade | |
| **paySpineId** | **string**| The Id of the Pay Spine for which you want to delete Allowance Grade | |
| **allowanceId** | **string**| The Id of the Spine Allowance for which you want to delete Allowance Grade | |
| **allowanceGradeId** | **string**| The Id of the Allowance Grade for which you want to delete Allowance Grade | |

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

## `deleteLondonAllowancePaySpine()`

```php
deleteLondonAllowancePaySpine($employerId, $paySpineId, $londonAllowanceId)
```

Delete LondonAllowance

Delete the specified London Allowance. [This endpoint is in beta for future development work and should not be used]

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\PaySpineApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string | The Id of the Employer for which you want to delete London Allowance
$paySpineId = 'paySpineId_example'; // string | The Id of the Pay Spine for which you want to delete London Allowance
$londonAllowanceId = 'londonAllowanceId_example'; // string | The Id of the Spinal Point for which you want to delete London Allowance

try {
    $apiInstance->deleteLondonAllowancePaySpine($employerId, $paySpineId, $londonAllowanceId);
} catch (Exception $e) {
    echo 'Exception when calling PaySpineApi->deleteLondonAllowancePaySpine: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employerId** | **string**| The Id of the Employer for which you want to delete London Allowance | |
| **paySpineId** | **string**| The Id of the Pay Spine for which you want to delete London Allowance | |
| **londonAllowanceId** | **string**| The Id of the Spinal Point for which you want to delete London Allowance | |

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

## `deletePaySpine()`

```php
deletePaySpine($employerId, $id)
```

Delete PaySpine

Deletes the specified PaySpine.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\PaySpineApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string
$id = 'id_example'; // string

try {
    $apiInstance->deletePaySpine($employerId, $id);
} catch (Exception $e) {
    echo 'Exception when calling PaySpineApi->deletePaySpine: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employerId** | **string**|  | |
| **id** | **string**|  | |

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

## `deletePaySpineGradePaySpine()`

```php
deletePaySpineGradePaySpine($employerId, $paySpineId, $payGradeId)
```

Delete PaySpine Grade

Deletes the specified PaySpine Grade.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\PaySpineApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string
$paySpineId = 'paySpineId_example'; // string
$payGradeId = 'payGradeId_example'; // string

try {
    $apiInstance->deletePaySpineGradePaySpine($employerId, $paySpineId, $payGradeId);
} catch (Exception $e) {
    echo 'Exception when calling PaySpineApi->deletePaySpineGradePaySpine: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employerId** | **string**|  | |
| **paySpineId** | **string**|  | |
| **payGradeId** | **string**|  | |

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

## `deleteSpinalPointPaySpine()`

```php
deleteSpinalPointPaySpine($employerId, $paySpineId, $spinalPointId)
```

Delete SpinalPoint

Delete the specified SpinalPoint.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\PaySpineApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string | The Id of the Employer for which you want to update Spinal Point List
$paySpineId = 'paySpineId_example'; // string | The Id of the Pay Spine for which you want to update Spinal Point List
$spinalPointId = 'spinalPointId_example'; // string | The Id of the Spinal Point for which you want to update Spinal Point List

try {
    $apiInstance->deleteSpinalPointPaySpine($employerId, $paySpineId, $spinalPointId);
} catch (Exception $e) {
    echo 'Exception when calling PaySpineApi->deleteSpinalPointPaySpine: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employerId** | **string**| The Id of the Employer for which you want to update Spinal Point List | |
| **paySpineId** | **string**| The Id of the Pay Spine for which you want to update Spinal Point List | |
| **spinalPointId** | **string**| The Id of the Spinal Point for which you want to update Spinal Point List | |

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

## `deleteSpineAllowancePaySpine()`

```php
deleteSpineAllowancePaySpine($employerId, $paySpineId, $allowanceid)
```

Delete SpineAllowance

Delete Allowance for a Pay Spine. [This endpoint is in beta for future development work and should not be used]

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\PaySpineApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string | The Id of the Employer for which you want to delete Spine Allowance
$paySpineId = 'paySpineId_example'; // string | The Id of the Pay Spine for which you want to delete Spine Allowance
$allowanceid = 'allowanceid_example'; // string | The Id of the Spine Allowance for which you want to delete Spine Allowance

try {
    $apiInstance->deleteSpineAllowancePaySpine($employerId, $paySpineId, $allowanceid);
} catch (Exception $e) {
    echo 'Exception when calling PaySpineApi->deleteSpineAllowancePaySpine: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employerId** | **string**| The Id of the Employer for which you want to delete Spine Allowance | |
| **paySpineId** | **string**| The Id of the Pay Spine for which you want to delete Spine Allowance | |
| **allowanceid** | **string**| The Id of the Spine Allowance for which you want to delete Spine Allowance | |

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

## `getAllowanceGradePaySpine()`

```php
getAllowanceGradePaySpine($employerId, $paySpineId, $allowanceId, $allowanceGradeId): \SynergiTech\Staffology\Model\ContractAllowanceGradesResponse
```

Get AllowanceGrade

Get AllowanceGrade for a PaySpine. [This endpoint is in beta for future development work and should not be used]

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\PaySpineApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string | The Id of the Employer for which you want Allowance Grade
$paySpineId = 'paySpineId_example'; // string | The Id of the Pay Spine for which you want Allowance Grade
$allowanceId = 'allowanceId_example'; // string | The Id of the Spine Allowance for which you want Allowance Grade
$allowanceGradeId = 'allowanceGradeId_example'; // string | The Id of the Allowance Grade for which you want Allowance Grade

try {
    $result = $apiInstance->getAllowanceGradePaySpine($employerId, $paySpineId, $allowanceId, $allowanceGradeId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaySpineApi->getAllowanceGradePaySpine: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employerId** | **string**| The Id of the Employer for which you want Allowance Grade | |
| **paySpineId** | **string**| The Id of the Pay Spine for which you want Allowance Grade | |
| **allowanceId** | **string**| The Id of the Spine Allowance for which you want Allowance Grade | |
| **allowanceGradeId** | **string**| The Id of the Allowance Grade for which you want Allowance Grade | |

### Return type

[**\SynergiTech\Staffology\Model\ContractAllowanceGradesResponse**](../Model/ContractAllowanceGradesResponse.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAllowanceGradesPaySpine()`

```php
getAllowanceGradesPaySpine($employerId, $paySpineId, $allowanceId): \SynergiTech\Staffology\Model\ContractAllowanceGradesResponse[]
```

List AllowanceGrades

List AllowanceGrades for a PaySpine. [This endpoint is in beta for future development work and should not be used]

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\PaySpineApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string | The Id of the Employer for which you want list of Allowance Grades
$paySpineId = 'paySpineId_example'; // string | The Id of the Pay Spine for which you want list of Allowance Grades
$allowanceId = 'allowanceId_example'; // string | The Id of the Spine Allowance for which you want list of Allowance Grades

try {
    $result = $apiInstance->getAllowanceGradesPaySpine($employerId, $paySpineId, $allowanceId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaySpineApi->getAllowanceGradesPaySpine: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employerId** | **string**| The Id of the Employer for which you want list of Allowance Grades | |
| **paySpineId** | **string**| The Id of the Pay Spine for which you want list of Allowance Grades | |
| **allowanceId** | **string**| The Id of the Spine Allowance for which you want list of Allowance Grades | |

### Return type

[**\SynergiTech\Staffology\Model\ContractAllowanceGradesResponse[]**](../Model/ContractAllowanceGradesResponse.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAnnualValueFromSalaryFormulaPaySpine()`

```php
getAnnualValueFromSalaryFormulaPaySpine($employerId, $id, $employeeId, $paySpineGradeId, $spinalPointId, $londonAllowanceType, $effectiveFrom, $workingPatternId): \SynergiTech\Staffology\Model\PaylineCalculationData
```

Get Annual Value from pay spines formula

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\PaySpineApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string | The Employer id.
$id = 'id_example'; // string | The selected PaySpine Id.
$employeeId = 'employeeId_example'; // string | The Employee id.
$paySpineGradeId = 'paySpineGradeId_example'; // string | The selected PaySpineGrade Id.
$spinalPointId = 'spinalPointId_example'; // string | The selected SpinalPoint Id.
$londonAllowanceType = 56; // int | The London Allowance Id of PayLine.
$effectiveFrom = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | The PayLine effective from.
$workingPatternId = 'workingPatternId_example'; // string

try {
    $result = $apiInstance->getAnnualValueFromSalaryFormulaPaySpine($employerId, $id, $employeeId, $paySpineGradeId, $spinalPointId, $londonAllowanceType, $effectiveFrom, $workingPatternId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaySpineApi->getAnnualValueFromSalaryFormulaPaySpine: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employerId** | **string**| The Employer id. | |
| **id** | **string**| The selected PaySpine Id. | |
| **employeeId** | **string**| The Employee id. | [optional] |
| **paySpineGradeId** | **string**| The selected PaySpineGrade Id. | [optional] |
| **spinalPointId** | **string**| The selected SpinalPoint Id. | [optional] |
| **londonAllowanceType** | **int**| The London Allowance Id of PayLine. | [optional] |
| **effectiveFrom** | **\DateTime**| The PayLine effective from. | [optional] |
| **workingPatternId** | **string**|  | [optional] |

### Return type

[**\SynergiTech\Staffology\Model\PaylineCalculationData**](../Model/PaylineCalculationData.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getLondonAllowanceListPaySpine()`

```php
getLondonAllowanceListPaySpine($employerId, $paySpineId): \SynergiTech\Staffology\Model\LondonAllowance[]
```

List LondonAllowances

List LondonAllowances for an Employer and Payspine. [This endpoint is in beta for future development work and should not be used]

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\PaySpineApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string | The Id of the Employer for which you want list of London Allowances
$paySpineId = 'paySpineId_example'; // string | The Id of the Pay Spine for which you want list of London Allowances

try {
    $result = $apiInstance->getLondonAllowanceListPaySpine($employerId, $paySpineId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaySpineApi->getLondonAllowanceListPaySpine: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employerId** | **string**| The Id of the Employer for which you want list of London Allowances | |
| **paySpineId** | **string**| The Id of the Pay Spine for which you want list of London Allowances | |

### Return type

[**\SynergiTech\Staffology\Model\LondonAllowance[]**](../Model/LondonAllowance.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getLondonAllowancePaySpine()`

```php
getLondonAllowancePaySpine($employerId, $paySpineId, $londonAllowanceId): \SynergiTech\Staffology\Model\ContractLondonAllowanceResponse
```

Get LondonAllowance

Get LondonAllowance for an Employer and Payspine. [This endpoint is in beta for future development work and should not be used]

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\PaySpineApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string | The Id of the Employer for which you want to get London Allowance
$paySpineId = 'paySpineId_example'; // string | The Id of the Pay Spine for which you want to get London Allowance
$londonAllowanceId = 'londonAllowanceId_example'; // string | The Id of the London Allowance for which you want to get London Allowance

try {
    $result = $apiInstance->getLondonAllowancePaySpine($employerId, $paySpineId, $londonAllowanceId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaySpineApi->getLondonAllowancePaySpine: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employerId** | **string**| The Id of the Employer for which you want to get London Allowance | |
| **paySpineId** | **string**| The Id of the Pay Spine for which you want to get London Allowance | |
| **londonAllowanceId** | **string**| The Id of the London Allowance for which you want to get London Allowance | |

### Return type

[**\SynergiTech\Staffology\Model\ContractLondonAllowanceResponse**](../Model/ContractLondonAllowanceResponse.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPaySpine()`

```php
getPaySpine($employerId, $id): \SynergiTech\Staffology\Model\ContractPaySpineResponse
```

Get PaySpine

Gets the PaySpine specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\PaySpineApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string | The Id of the Employer to which the PaySpine belongs.
$id = 'id_example'; // string | The Id of the PaySpine which you want to fetch

try {
    $result = $apiInstance->getPaySpine($employerId, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaySpineApi->getPaySpine: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employerId** | **string**| The Id of the Employer to which the PaySpine belongs. | |
| **id** | **string**| The Id of the PaySpine which you want to fetch | |

### Return type

[**\SynergiTech\Staffology\Model\ContractPaySpineResponse**](../Model/ContractPaySpineResponse.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPaySpineGradeListPaySpine()`

```php
getPaySpineGradeListPaySpine($employerId, $paySpineId): \SynergiTech\Staffology\Model\ContractPaySpineGradeResponse[]
```

List PaySpine Grade

Lists PaySpine Grade for an Employer and PaySpine Grade.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\PaySpineApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string | The Id of the Employer for which you want PaySpine Grade List
$paySpineId = 'paySpineId_example'; // string | The Id of the PaySpine Grade for which you want PaySpine Grade List

try {
    $result = $apiInstance->getPaySpineGradeListPaySpine($employerId, $paySpineId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaySpineApi->getPaySpineGradeListPaySpine: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employerId** | **string**| The Id of the Employer for which you want PaySpine Grade List | |
| **paySpineId** | **string**| The Id of the PaySpine Grade for which you want PaySpine Grade List | |

### Return type

[**\SynergiTech\Staffology\Model\ContractPaySpineGradeResponse[]**](../Model/ContractPaySpineGradeResponse.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPaySpineGradePaySpine()`

```php
getPaySpineGradePaySpine($employerId, $paySpineId, $payGradeId): \SynergiTech\Staffology\Model\ContractPaySpineGradeResponse
```

Get PaySpine Grade

PaySpine Grade for an Employer and Payspine.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\PaySpineApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string | The Id of the Employer for which you want PaySpine Grade
$paySpineId = 'paySpineId_example'; // string | The Id of the Pay Spine for which you want PaySpine Grade
$payGradeId = 'payGradeId_example'; // string | The Id of the PaySpine Grade for which you want PaySpine Grade

try {
    $result = $apiInstance->getPaySpineGradePaySpine($employerId, $paySpineId, $payGradeId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaySpineApi->getPaySpineGradePaySpine: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employerId** | **string**| The Id of the Employer for which you want PaySpine Grade | |
| **paySpineId** | **string**| The Id of the Pay Spine for which you want PaySpine Grade | |
| **payGradeId** | **string**| The Id of the PaySpine Grade for which you want PaySpine Grade | |

### Return type

[**\SynergiTech\Staffology\Model\ContractPaySpineGradeResponse**](../Model/ContractPaySpineGradeResponse.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getSpinalPointListPaySpine()`

```php
getSpinalPointListPaySpine($employerId, $paySpineId): \SynergiTech\Staffology\Model\ContractSpinalPointResponse[]
```

List SpinalPoints

List SpinalPoints for an Employer and Payspine.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\PaySpineApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string | The Id of the Employer for which you want Spinal Point List
$paySpineId = 'paySpineId_example'; // string | The Id of the Spinal Point for which you want Spinal Point List

try {
    $result = $apiInstance->getSpinalPointListPaySpine($employerId, $paySpineId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaySpineApi->getSpinalPointListPaySpine: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employerId** | **string**| The Id of the Employer for which you want Spinal Point List | |
| **paySpineId** | **string**| The Id of the Spinal Point for which you want Spinal Point List | |

### Return type

[**\SynergiTech\Staffology\Model\ContractSpinalPointResponse[]**](../Model/ContractSpinalPointResponse.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getSpinalPointPaySpine()`

```php
getSpinalPointPaySpine($employerId, $paySpineId, $spinalPointId): \SynergiTech\Staffology\Model\ContractSpinalPointResponse
```

Get SpinalPoint

Get SpinalPoint for an Employer and Payspine.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\PaySpineApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string | The Id of the Employer for which you want Spinal Point
$paySpineId = 'paySpineId_example'; // string | The Id of the Pay Spine for which you want Spinal Point
$spinalPointId = 'spinalPointId_example'; // string | The Id of the Spinal Point for which you want Spinal Point

try {
    $result = $apiInstance->getSpinalPointPaySpine($employerId, $paySpineId, $spinalPointId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaySpineApi->getSpinalPointPaySpine: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employerId** | **string**| The Id of the Employer for which you want Spinal Point | |
| **paySpineId** | **string**| The Id of the Pay Spine for which you want Spinal Point | |
| **spinalPointId** | **string**| The Id of the Spinal Point for which you want Spinal Point | |

### Return type

[**\SynergiTech\Staffology\Model\ContractSpinalPointResponse**](../Model/ContractSpinalPointResponse.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getSpineAllowanceListPaySpine()`

```php
getSpineAllowanceListPaySpine($employerId, $paySpineId): \SynergiTech\Staffology\Model\ContractSpineAllowanceResponse[]
```

List SpineAllowances

List Spine Allowances for a Pay Spine. [This endpoint is in beta for future development work and should not be used]

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\PaySpineApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string | The Id of the Employer for which you want list of Spine Allowances
$paySpineId = 'paySpineId_example'; // string | The Id of the Pay Spine for which you want list of Spine Allowances

try {
    $result = $apiInstance->getSpineAllowanceListPaySpine($employerId, $paySpineId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaySpineApi->getSpineAllowanceListPaySpine: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employerId** | **string**| The Id of the Employer for which you want list of Spine Allowances | |
| **paySpineId** | **string**| The Id of the Pay Spine for which you want list of Spine Allowances | |

### Return type

[**\SynergiTech\Staffology\Model\ContractSpineAllowanceResponse[]**](../Model/ContractSpineAllowanceResponse.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getSpineAllowancePaySpine()`

```php
getSpineAllowancePaySpine($employerId, $paySpineId, $allowanceid): \SynergiTech\Staffology\Model\ContractSpineAllowanceResponse
```

Get SpineAllowance

Get Allowance for a Pay Spine. [This endpoint is in beta for future development work and should not be used]

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\PaySpineApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string | The Id of the Employer for which you want to get Spine Allowance
$paySpineId = 'paySpineId_example'; // string | The Id of the Pay Spine for which you want to get Spine Allowance
$allowanceid = 'allowanceid_example'; // string | The Id of the Spine Allowance for which you want to get Spine Allowance

try {
    $result = $apiInstance->getSpineAllowancePaySpine($employerId, $paySpineId, $allowanceid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaySpineApi->getSpineAllowancePaySpine: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employerId** | **string**| The Id of the Employer for which you want to get Spine Allowance | |
| **paySpineId** | **string**| The Id of the Pay Spine for which you want to get Spine Allowance | |
| **allowanceid** | **string**| The Id of the Spine Allowance for which you want to get Spine Allowance | |

### Return type

[**\SynergiTech\Staffology\Model\ContractSpineAllowanceResponse**](../Model/ContractSpineAllowanceResponse.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `importCsvPaySpine()`

```php
importCsvPaySpine($employerId, $file): \SynergiTech\Staffology\Model\Item[]
```

Import SpinalPoints from csv file

Import SpinalPoints from a CSV file.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\PaySpineApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string
$file = '/path/to/file.txt'; // \SplFileObject

try {
    $result = $apiInstance->importCsvPaySpine($employerId, $file);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaySpineApi->importCsvPaySpine: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employerId** | **string**|  | |
| **file** | **\SplFileObject****\SplFileObject**|  | [optional] |

### Return type

[**\SynergiTech\Staffology\Model\Item[]**](../Model/Item.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `importCsvPaySpinePaySpine()`

```php
importCsvPaySpinePaySpine($employerId, $file): \SynergiTech\Staffology\Model\Item[]
```

Import PaySpine from csv file

Import PaySpine from a CSV file.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\PaySpineApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string
$file = '/path/to/file.txt'; // \SplFileObject

try {
    $result = $apiInstance->importCsvPaySpinePaySpine($employerId, $file);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaySpineApi->importCsvPaySpinePaySpine: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employerId** | **string**|  | |
| **file** | **\SplFileObject****\SplFileObject**|  | [optional] |

### Return type

[**\SynergiTech\Staffology\Model\Item[]**](../Model/Item.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `importPayspineGradeCsvPaySpine()`

```php
importPayspineGradeCsvPaySpine($employerId, $file): \SynergiTech\Staffology\Model\Item[]
```

Import SpineGrades from csv file

Import Spine Grades from a CSV file.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\PaySpineApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string | The Id of the Employer
$file = '/path/to/file.txt'; // \SplFileObject

try {
    $result = $apiInstance->importPayspineGradeCsvPaySpine($employerId, $file);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaySpineApi->importPayspineGradeCsvPaySpine: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employerId** | **string**| The Id of the Employer | |
| **file** | **\SplFileObject****\SplFileObject**|  | [optional] |

### Return type

[**\SynergiTech\Staffology\Model\Item[]**](../Model/Item.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `indexPaySpine()`

```php
indexPaySpine($employerId): \SynergiTech\Staffology\Model\Item[]
```

List PaySpine

Lists all PaySpine for an Employer.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\PaySpineApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string | The Id of the Employer for which you want to list PaySpine

try {
    $result = $apiInstance->indexPaySpine($employerId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaySpineApi->indexPaySpine: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employerId** | **string**| The Id of the Employer for which you want to list PaySpine | |

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

## `updateAllowanceGradePaySpine()`

```php
updateAllowanceGradePaySpine($employerId, $paySpineId, $allowanceId, $allowanceGradeId, $contractAllowanceGradesRequest): \SynergiTech\Staffology\Model\ContractAllowanceGradesResponse
```

Update AllowanceGrade

Update AllowanceGrade for a PaySpine. [This endpoint is in beta for future development work and should not be used]

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\PaySpineApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string | The Id of the Employer for which you want to update Allowance Grade
$paySpineId = 'paySpineId_example'; // string | The Id of the Pay Spine for which you want to update Allowance Grade
$allowanceId = 'allowanceId_example'; // string | The Id of the Spine Allowance for which you want to update Allowance Grade
$allowanceGradeId = 'allowanceGradeId_example'; // string | The Id of the Allowance Grade for which you want to update Allowance Grade
$contractAllowanceGradesRequest = new \SynergiTech\Staffology\Model\ContractAllowanceGradesRequest(); // \SynergiTech\Staffology\Model\ContractAllowanceGradesRequest

try {
    $result = $apiInstance->updateAllowanceGradePaySpine($employerId, $paySpineId, $allowanceId, $allowanceGradeId, $contractAllowanceGradesRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaySpineApi->updateAllowanceGradePaySpine: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employerId** | **string**| The Id of the Employer for which you want to update Allowance Grade | |
| **paySpineId** | **string**| The Id of the Pay Spine for which you want to update Allowance Grade | |
| **allowanceId** | **string**| The Id of the Spine Allowance for which you want to update Allowance Grade | |
| **allowanceGradeId** | **string**| The Id of the Allowance Grade for which you want to update Allowance Grade | |
| **contractAllowanceGradesRequest** | [**\SynergiTech\Staffology\Model\ContractAllowanceGradesRequest**](../Model/ContractAllowanceGradesRequest.md)|  | [optional] |

### Return type

[**\SynergiTech\Staffology\Model\ContractAllowanceGradesResponse**](../Model/ContractAllowanceGradesResponse.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: `application/json-patch+json`, `application/json`, `text/json`, `application/*+json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateLondonAllowancePaySpine()`

```php
updateLondonAllowancePaySpine($employerId, $paySpineId, $londonAllowanceId, $contractLondonAllowanceRequest): \SynergiTech\Staffology\Model\ContractLondonAllowanceResponse
```

Update LondonAllowance

Update LondonAllowance for the Employer and PaySpine. [This endpoint is in beta for future development work and should not be used]

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\PaySpineApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string | The Id of the Employer for which you want to update London Allowance
$paySpineId = 'paySpineId_example'; // string | The Id of the Pay Spine for which you want to update London Allowance
$londonAllowanceId = 'londonAllowanceId_example'; // string | The Id of the London Allowance for which you want to update London Allowance
$contractLondonAllowanceRequest = new \SynergiTech\Staffology\Model\ContractLondonAllowanceRequest(); // \SynergiTech\Staffology\Model\ContractLondonAllowanceRequest

try {
    $result = $apiInstance->updateLondonAllowancePaySpine($employerId, $paySpineId, $londonAllowanceId, $contractLondonAllowanceRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaySpineApi->updateLondonAllowancePaySpine: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employerId** | **string**| The Id of the Employer for which you want to update London Allowance | |
| **paySpineId** | **string**| The Id of the Pay Spine for which you want to update London Allowance | |
| **londonAllowanceId** | **string**| The Id of the London Allowance for which you want to update London Allowance | |
| **contractLondonAllowanceRequest** | [**\SynergiTech\Staffology\Model\ContractLondonAllowanceRequest**](../Model/ContractLondonAllowanceRequest.md)|  | [optional] |

### Return type

[**\SynergiTech\Staffology\Model\ContractLondonAllowanceResponse**](../Model/ContractLondonAllowanceResponse.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: `application/json-patch+json`, `application/json`, `text/json`, `application/*+json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateMultipleAllowanceGradesPaySpine()`

```php
updateMultipleAllowanceGradesPaySpine($employerId, $paySpineId, $allowanceId, $contractAllowanceGradesUpdateRequest): \SynergiTech\Staffology\Model\ContractAllowanceGradesResponse[]
```

Update Multiple AllowanceGrades

Update multiple AllowanceGrades for a PaySpine. [This endpoint is in beta for future development work and should not be used]

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\PaySpineApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string | The Id of the Employer for which you want to update multiple Allowance Grades
$paySpineId = 'paySpineId_example'; // string | The Id of the Pay Spine for which you want to update multiple Allowance Grades
$allowanceId = 'allowanceId_example'; // string | The Id of the Spine Allowance for which you want to update multiple Allowance Grades
$contractAllowanceGradesUpdateRequest = array(new \SynergiTech\Staffology\Model\ContractAllowanceGradesUpdateRequest()); // \SynergiTech\Staffology\Model\ContractAllowanceGradesUpdateRequest[]

try {
    $result = $apiInstance->updateMultipleAllowanceGradesPaySpine($employerId, $paySpineId, $allowanceId, $contractAllowanceGradesUpdateRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaySpineApi->updateMultipleAllowanceGradesPaySpine: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employerId** | **string**| The Id of the Employer for which you want to update multiple Allowance Grades | |
| **paySpineId** | **string**| The Id of the Pay Spine for which you want to update multiple Allowance Grades | |
| **allowanceId** | **string**| The Id of the Spine Allowance for which you want to update multiple Allowance Grades | |
| **contractAllowanceGradesUpdateRequest** | [**\SynergiTech\Staffology\Model\ContractAllowanceGradesUpdateRequest[]**](../Model/ContractAllowanceGradesUpdateRequest.md)|  | [optional] |

### Return type

[**\SynergiTech\Staffology\Model\ContractAllowanceGradesResponse[]**](../Model/ContractAllowanceGradesResponse.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: `application/json-patch+json`, `application/json`, `text/json`, `application/*+json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateMultiplePaySpine()`

```php
updateMultiplePaySpine($employerId, $paySpineId, $contractSpinalPointUpdateRequest): \SynergiTech\Staffology\Model\ContractSpinalPointResponse[]
```

Update Multiple SpinalPoints

Update an array of SpinalPoints for the specified PaySpine.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\PaySpineApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string | The Id of the Employer for which you want to update multiple Spinal Point
$paySpineId = 'paySpineId_example'; // string | The Id of the Pay Spine for which you want to update multiple Spinal Point
$contractSpinalPointUpdateRequest = array(new \SynergiTech\Staffology\Model\ContractSpinalPointUpdateRequest()); // \SynergiTech\Staffology\Model\ContractSpinalPointUpdateRequest[]

try {
    $result = $apiInstance->updateMultiplePaySpine($employerId, $paySpineId, $contractSpinalPointUpdateRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaySpineApi->updateMultiplePaySpine: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employerId** | **string**| The Id of the Employer for which you want to update multiple Spinal Point | |
| **paySpineId** | **string**| The Id of the Pay Spine for which you want to update multiple Spinal Point | |
| **contractSpinalPointUpdateRequest** | [**\SynergiTech\Staffology\Model\ContractSpinalPointUpdateRequest[]**](../Model/ContractSpinalPointUpdateRequest.md)|  | [optional] |

### Return type

[**\SynergiTech\Staffology\Model\ContractSpinalPointResponse[]**](../Model/ContractSpinalPointResponse.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: `application/json-patch+json`, `application/json`, `text/json`, `application/*+json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateMultipleSpineAllowancePaySpine()`

```php
updateMultipleSpineAllowancePaySpine($employerId, $paySpineId, $contractSpineAllowanceUpdateRequest): \SynergiTech\Staffology\Model\ContractSpineAllowanceResponse[]
```

Update Multiple SpineAllowances

Updates an array of Spine Allowance for the specified PaySpine. [This endpoint is in beta for future development work and should not be used]

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\PaySpineApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string | The Id of the Employer for which you want to update multiple SpineAllowance
$paySpineId = 'paySpineId_example'; // string | The Id of the Pay Spine for which you want to update multiple SpineAllowance
$contractSpineAllowanceUpdateRequest = array(new \SynergiTech\Staffology\Model\ContractSpineAllowanceUpdateRequest()); // \SynergiTech\Staffology\Model\ContractSpineAllowanceUpdateRequest[]

try {
    $result = $apiInstance->updateMultipleSpineAllowancePaySpine($employerId, $paySpineId, $contractSpineAllowanceUpdateRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaySpineApi->updateMultipleSpineAllowancePaySpine: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employerId** | **string**| The Id of the Employer for which you want to update multiple SpineAllowance | |
| **paySpineId** | **string**| The Id of the Pay Spine for which you want to update multiple SpineAllowance | |
| **contractSpineAllowanceUpdateRequest** | [**\SynergiTech\Staffology\Model\ContractSpineAllowanceUpdateRequest[]**](../Model/ContractSpineAllowanceUpdateRequest.md)|  | [optional] |

### Return type

[**\SynergiTech\Staffology\Model\ContractSpineAllowanceResponse[]**](../Model/ContractSpineAllowanceResponse.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: `application/json-patch+json`, `application/json`, `text/json`, `application/*+json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updatePayGradePaySpine()`

```php
updatePayGradePaySpine($employerId, $paySpineId, $payGradeId, $contractPaySpineGradeRequest): \SynergiTech\Staffology\Model\ContractPaySpineGradeResponse
```

Update PaySpine Grade

Updates a PaySpine Grade for the Employer and PaySpine.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\PaySpineApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string | The Id of the Employer for which you want to update PaySpine Grade
$paySpineId = 'paySpineId_example'; // string | The Id of the Pay Spine for which you want to update PaySpine Grade
$payGradeId = 'payGradeId_example'; // string | The Id of the PaySpine Grade for which you want to update PaySpine Grade
$contractPaySpineGradeRequest = new \SynergiTech\Staffology\Model\ContractPaySpineGradeRequest(); // \SynergiTech\Staffology\Model\ContractPaySpineGradeRequest

try {
    $result = $apiInstance->updatePayGradePaySpine($employerId, $paySpineId, $payGradeId, $contractPaySpineGradeRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaySpineApi->updatePayGradePaySpine: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employerId** | **string**| The Id of the Employer for which you want to update PaySpine Grade | |
| **paySpineId** | **string**| The Id of the Pay Spine for which you want to update PaySpine Grade | |
| **payGradeId** | **string**| The Id of the PaySpine Grade for which you want to update PaySpine Grade | |
| **contractPaySpineGradeRequest** | [**\SynergiTech\Staffology\Model\ContractPaySpineGradeRequest**](../Model/ContractPaySpineGradeRequest.md)|  | [optional] |

### Return type

[**\SynergiTech\Staffology\Model\ContractPaySpineGradeResponse**](../Model/ContractPaySpineGradeResponse.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: `application/json-patch+json`, `application/json`, `text/json`, `application/*+json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updatePaySpine()`

```php
updatePaySpine($employerId, $id, $contractPaySpineUpdateRequest): \SynergiTech\Staffology\Model\ContractPaySpineResponse
```

Update PaySpine

Updates a PaySpine for the Employer.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\PaySpineApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string
$id = 'id_example'; // string
$contractPaySpineUpdateRequest = new \SynergiTech\Staffology\Model\ContractPaySpineUpdateRequest(); // \SynergiTech\Staffology\Model\ContractPaySpineUpdateRequest

try {
    $result = $apiInstance->updatePaySpine($employerId, $id, $contractPaySpineUpdateRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaySpineApi->updatePaySpine: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employerId** | **string**|  | |
| **id** | **string**|  | |
| **contractPaySpineUpdateRequest** | [**\SynergiTech\Staffology\Model\ContractPaySpineUpdateRequest**](../Model/ContractPaySpineUpdateRequest.md)|  | [optional] |

### Return type

[**\SynergiTech\Staffology\Model\ContractPaySpineResponse**](../Model/ContractPaySpineResponse.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: `application/json-patch+json`, `application/json`, `text/json`, `application/*+json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateSpinalPointPaySpine()`

```php
updateSpinalPointPaySpine($employerId, $paySpineId, $spinalPointId, $contractSpinalPointRequest): \SynergiTech\Staffology\Model\ContractSpinalPointResponse
```

Update SpinalPoint

Update SpinalPoint for the Employer and PaySpine.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\PaySpineApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string | The Id of the Employer for which you want to update Spinal Point
$paySpineId = 'paySpineId_example'; // string | The Id of the Pay Spine for which you want to update Spinal Point
$spinalPointId = 'spinalPointId_example'; // string | The Id of the Spinal Point for which you want to update Spinal Point
$contractSpinalPointRequest = new \SynergiTech\Staffology\Model\ContractSpinalPointRequest(); // \SynergiTech\Staffology\Model\ContractSpinalPointRequest

try {
    $result = $apiInstance->updateSpinalPointPaySpine($employerId, $paySpineId, $spinalPointId, $contractSpinalPointRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaySpineApi->updateSpinalPointPaySpine: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employerId** | **string**| The Id of the Employer for which you want to update Spinal Point | |
| **paySpineId** | **string**| The Id of the Pay Spine for which you want to update Spinal Point | |
| **spinalPointId** | **string**| The Id of the Spinal Point for which you want to update Spinal Point | |
| **contractSpinalPointRequest** | [**\SynergiTech\Staffology\Model\ContractSpinalPointRequest**](../Model/ContractSpinalPointRequest.md)|  | [optional] |

### Return type

[**\SynergiTech\Staffology\Model\ContractSpinalPointResponse**](../Model/ContractSpinalPointResponse.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: `application/json-patch+json`, `application/json`, `text/json`, `application/*+json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateSpineAllowancePaySpine()`

```php
updateSpineAllowancePaySpine($employerId, $paySpineId, $allowanceid, $contractSpineAllowanceRequest): \SynergiTech\Staffology\Model\ContractSpineAllowanceResponse
```

Update SpineAllowance

Update Allowance for a Pay Spine. [This endpoint is in beta for future development work and should not be used]

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\PaySpineApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string | The Id of the Employer for which you want to update Spine Allowance
$paySpineId = 'paySpineId_example'; // string | The Id of the Pay Spine for which you want to update Spine Allowance
$allowanceid = 'allowanceid_example'; // string | The Id of the Spine Allowance for which you want to update Spine Allowance
$contractSpineAllowanceRequest = new \SynergiTech\Staffology\Model\ContractSpineAllowanceRequest(); // \SynergiTech\Staffology\Model\ContractSpineAllowanceRequest

try {
    $result = $apiInstance->updateSpineAllowancePaySpine($employerId, $paySpineId, $allowanceid, $contractSpineAllowanceRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaySpineApi->updateSpineAllowancePaySpine: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employerId** | **string**| The Id of the Employer for which you want to update Spine Allowance | |
| **paySpineId** | **string**| The Id of the Pay Spine for which you want to update Spine Allowance | |
| **allowanceid** | **string**| The Id of the Spine Allowance for which you want to update Spine Allowance | |
| **contractSpineAllowanceRequest** | [**\SynergiTech\Staffology\Model\ContractSpineAllowanceRequest**](../Model/ContractSpineAllowanceRequest.md)|  | [optional] |

### Return type

[**\SynergiTech\Staffology\Model\ContractSpineAllowanceResponse**](../Model/ContractSpineAllowanceResponse.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: `application/json-patch+json`, `application/json`, `text/json`, `application/*+json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
