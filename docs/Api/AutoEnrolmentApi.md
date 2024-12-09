# SynergiTech\Staffology\AutoEnrolmentApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**assessAutoEnrolment()**](AutoEnrolmentApi.md#assessAutoEnrolment) | **POST** /employers/{employerId}/employees/{employeeId}/autoenrolment/assessments | Assess Employee for AutoEnrolment |
| [**deleteAutoEnrolment()**](AutoEnrolmentApi.md#deleteAutoEnrolment) | **DELETE** /employers/{employerId}/employees/{employeeId}/autoenrolment/assessments/{id} | Delete AE Assessment |
| [**emailAllLettersAutoEnrolment()**](AutoEnrolmentApi.md#emailAllLettersAutoEnrolment) | **POST** /employers/{employerId}/autoenrolment/letters/email | Email All Letters |
| [**emailLetterAutoEnrolment()**](AutoEnrolmentApi.md#emailLetterAutoEnrolment) | **POST** /employers/{employerId}/employees/{employeeId}/autoenrolment/assessments/{id}/letter/email | Email Letter |
| [**getAutoEnrolment()**](AutoEnrolmentApi.md#getAutoEnrolment) | **GET** /employers/{employerId}/employees/{employeeId}/autoenrolment/assessments/{id} | Get AE Assessment |
| [**getLastAutoEnrolment()**](AutoEnrolmentApi.md#getLastAutoEnrolment) | **GET** /employers/{employerId}/employees/{employeeId}/autoenrolment/assessments/last | Get Last AE Assessment |
| [**getLetterAutoEnrolment()**](AutoEnrolmentApi.md#getLetterAutoEnrolment) | **GET** /employers/{employerId}/employees/{employeeId}/autoenrolment/assessments/{id}/letter | Get Letter |
| [**listAutoEnrolment()**](AutoEnrolmentApi.md#listAutoEnrolment) | **GET** /employers/{employerId}/employees/{employeeId}/autoenrolment | Get AE Assessments |
| [**markLetterAsSentAutoEnrolment()**](AutoEnrolmentApi.md#markLetterAsSentAutoEnrolment) | **PUT** /employers/{employerId}/employees/{employeeId}/autoenrolment/assessments/{id}/letter/sent | Mark Letter as Sent |
| [**markLettersAsSentAutoEnrolment()**](AutoEnrolmentApi.md#markLettersAsSentAutoEnrolment) | **PUT** /employers/{employerId}/autoenrolment/letters/sent | Mark All Letters as Sent |
| [**pendingLettersAutoEnrolment()**](AutoEnrolmentApi.md#pendingLettersAutoEnrolment) | **GET** /employers/{employerId}/autoenrolment/letters/pending | Pending Letters |
| [**pendingLettersCountAutoEnrolment()**](AutoEnrolmentApi.md#pendingLettersCountAutoEnrolment) | **GET** /employers/{employerId}/autoenrolment/letters/pending/count | Pending Letters Count |
| [**pendingPostponementLettersAutoEnrolment()**](AutoEnrolmentApi.md#pendingPostponementLettersAutoEnrolment) | **GET** /employers/{employerId}/autoenrolment/letters/pending/postponement | Pending Postponement Letters |
| [**reenrolAutoEnrolment()**](AutoEnrolmentApi.md#reenrolAutoEnrolment) | **GET** /employers/{employerId}/autoenrolment/renrol | Cyclical Re-enrolment |
| [**setStateAutoEnrolment()**](AutoEnrolmentApi.md#setStateAutoEnrolment) | **PUT** /employers/{employerId}/employees/{employeeId}/autoenrolment/state | Update State |


## `assessAutoEnrolment()`

```php
assessAutoEnrolment($employerId, $employeeId): \SynergiTech\Staffology\Model\AeAssessment
```

Assess Employee for AutoEnrolment

Asseses an Employee for AutoEnrolment

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\AutoEnrolmentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string | The Id of the Employer to which the Employee belongs
$employeeId = 'employeeId_example'; // string | The Id of the Employee you want to assess

try {
    $result = $apiInstance->assessAutoEnrolment($employerId, $employeeId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AutoEnrolmentApi->assessAutoEnrolment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employerId** | **string**| The Id of the Employer to which the Employee belongs | |
| **employeeId** | **string**| The Id of the Employee you want to assess | |

### Return type

[**\SynergiTech\Staffology\Model\AeAssessment**](../Model/AeAssessment.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteAutoEnrolment()`

```php
deleteAutoEnrolment($employerId, $employeeId, $id)
```

Delete AE Assessment

Deletes the AeAssessment specified by the Id for the Employee specified by the EmployeeId.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\AutoEnrolmentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string | The Id of the Employer to which the Employee belongs
$employeeId = 'employeeId_example'; // string | The Id of the Employee the assessment is for
$id = 'id_example'; // string | The Id of the Assessment.

try {
    $apiInstance->deleteAutoEnrolment($employerId, $employeeId, $id);
} catch (Exception $e) {
    echo 'Exception when calling AutoEnrolmentApi->deleteAutoEnrolment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employerId** | **string**| The Id of the Employer to which the Employee belongs | |
| **employeeId** | **string**| The Id of the Employee the assessment is for | |
| **id** | **string**| The Id of the Assessment. | |

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

## `emailAllLettersAutoEnrolment()`

```php
emailAllLettersAutoEnrolment($employerId)
```

Email All Letters



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\AutoEnrolmentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string | The Id of the Employer to which the Employee belongs

try {
    $apiInstance->emailAllLettersAutoEnrolment($employerId);
} catch (Exception $e) {
    echo 'Exception when calling AutoEnrolmentApi->emailAllLettersAutoEnrolment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employerId** | **string**| The Id of the Employer to which the Employee belongs | |

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

## `emailLetterAutoEnrolment()`

```php
emailLetterAutoEnrolment($employerId, $employeeId, $id): \SynergiTech\Staffology\Model\EmployerEmail
```

Email Letter

Send via email letter that needs to be sent to an employee as a result of the assessment.  The letter is then marked as having been sent.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\AutoEnrolmentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string | The Id of the Employer to which the Employee belongs
$employeeId = 'employeeId_example'; // string | The Id of the Employee the assessment is for
$id = 'id_example'; // string | The Id of the Assessment

try {
    $result = $apiInstance->emailLetterAutoEnrolment($employerId, $employeeId, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AutoEnrolmentApi->emailLetterAutoEnrolment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employerId** | **string**| The Id of the Employer to which the Employee belongs | |
| **employeeId** | **string**| The Id of the Employee the assessment is for | |
| **id** | **string**| The Id of the Assessment | |

### Return type

[**\SynergiTech\Staffology\Model\EmployerEmail**](../Model/EmployerEmail.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAutoEnrolment()`

```php
getAutoEnrolment($employerId, $employeeId, $id): \SynergiTech\Staffology\Model\AeAssessment
```

Get AE Assessment

Returns the specified AeAssessment for the specified Employee

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\AutoEnrolmentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string | The Id of the Employer to which the Employee belongs
$employeeId = 'employeeId_example'; // string | The Id of the Employee the assessment is for
$id = 'id_example'; // string | The Id of the Assessment.

try {
    $result = $apiInstance->getAutoEnrolment($employerId, $employeeId, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AutoEnrolmentApi->getAutoEnrolment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employerId** | **string**| The Id of the Employer to which the Employee belongs | |
| **employeeId** | **string**| The Id of the Employee the assessment is for | |
| **id** | **string**| The Id of the Assessment. | |

### Return type

[**\SynergiTech\Staffology\Model\AeAssessment**](../Model/AeAssessment.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getLastAutoEnrolment()`

```php
getLastAutoEnrolment($employerId, $employeeId): \SynergiTech\Staffology\Model\AeAssessment
```

Get Last AE Assessment

Returns the most recent AeAssessment for an Employee

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\AutoEnrolmentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string | The Id of the Employer to which the Employee belongs
$employeeId = 'employeeId_example'; // string | The Id of the Employee the assessment is for

try {
    $result = $apiInstance->getLastAutoEnrolment($employerId, $employeeId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AutoEnrolmentApi->getLastAutoEnrolment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employerId** | **string**| The Id of the Employer to which the Employee belongs | |
| **employeeId** | **string**| The Id of the Employee the assessment is for | |

### Return type

[**\SynergiTech\Staffology\Model\AeAssessment**](../Model/AeAssessment.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getLetterAutoEnrolment()`

```php
getLetterAutoEnrolment($employerId, $employeeId, $id, $accept): \SynergiTech\Staffology\Model\ReportResponse
```

Get Letter

Returns either a PDF or HTML (depending on accept header) of the letter that needs to be sent to an employee as a result of the assessment.  The same ReportResponse model that is used for reports is used here.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\AutoEnrolmentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string | The Id of the Employer to which the Employee belongs
$employeeId = 'employeeId_example'; // string | The Id of the Employee the assessment is for
$id = 'id_example'; // string | The Id of the Assessment
$accept = 'accept_example'; // string

try {
    $result = $apiInstance->getLetterAutoEnrolment($employerId, $employeeId, $id, $accept);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AutoEnrolmentApi->getLetterAutoEnrolment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employerId** | **string**| The Id of the Employer to which the Employee belongs | |
| **employeeId** | **string**| The Id of the Employee the assessment is for | |
| **id** | **string**| The Id of the Assessment | |
| **accept** | **string**|  | [optional] |

### Return type

[**\SynergiTech\Staffology\Model\ReportResponse**](../Model/ReportResponse.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/pdf`, `text/html`, `application/octet-stream`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listAutoEnrolment()`

```php
listAutoEnrolment($employerId, $employeeId): \SynergiTech\Staffology\Model\Item[]
```

Get AE Assessments

Returns all AE Assessments for the Employee specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\AutoEnrolmentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string | The Id of the Employer to which the Employee belongs
$employeeId = 'employeeId_example'; // string | The Id of the Employee for which you want to retrieve AE Assessments

try {
    $result = $apiInstance->listAutoEnrolment($employerId, $employeeId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AutoEnrolmentApi->listAutoEnrolment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employerId** | **string**| The Id of the Employer to which the Employee belongs | |
| **employeeId** | **string**| The Id of the Employee for which you want to retrieve AE Assessments | |

### Return type

[**\SynergiTech\Staffology\Model\Item[]**](../Model/Item.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `markLetterAsSentAutoEnrolment()`

```php
markLetterAsSentAutoEnrolment($employerId, $employeeId, $id)
```

Mark Letter as Sent

Update an Assessment to mark the letter as sent.  This is done automatically if you send the letter via email so you'd  only need to use this is you are printing/posting the letter.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\AutoEnrolmentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string | The Id of the Employer to which the Employee belongs
$employeeId = 'employeeId_example'; // string | The Id of the Employee the assessment is for
$id = 'id_example'; // string | The Id of the Assessment

try {
    $apiInstance->markLetterAsSentAutoEnrolment($employerId, $employeeId, $id);
} catch (Exception $e) {
    echo 'Exception when calling AutoEnrolmentApi->markLetterAsSentAutoEnrolment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employerId** | **string**| The Id of the Employer to which the Employee belongs | |
| **employeeId** | **string**| The Id of the Employee the assessment is for | |
| **id** | **string**| The Id of the Assessment | |

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

## `markLettersAsSentAutoEnrolment()`

```php
markLettersAsSentAutoEnrolment($employerId)
```

Mark All Letters as Sent

Update an Assessments to mark all the letter as sent.  This is done automatically if you send the letter via email so you'd  only need to use this is you are printing/posting the letter.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\AutoEnrolmentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string | The Id of the Employer to which the Employee belongs

try {
    $apiInstance->markLettersAsSentAutoEnrolment($employerId);
} catch (Exception $e) {
    echo 'Exception when calling AutoEnrolmentApi->markLettersAsSentAutoEnrolment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employerId** | **string**| The Id of the Employer to which the Employee belongs | |

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

## `pendingLettersAutoEnrolment()`

```php
pendingLettersAutoEnrolment($employerId): \SynergiTech\Staffology\Model\Item[]
```

Pending Letters

Returns all AE Assessments that are awaiting a letter to be sent

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\AutoEnrolmentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string | The Id of the Employer

try {
    $result = $apiInstance->pendingLettersAutoEnrolment($employerId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AutoEnrolmentApi->pendingLettersAutoEnrolment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employerId** | **string**| The Id of the Employer | |

### Return type

[**\SynergiTech\Staffology\Model\Item[]**](../Model/Item.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `pendingLettersCountAutoEnrolment()`

```php
pendingLettersCountAutoEnrolment($employerId): \SynergiTech\Staffology\Model\ContractPendingLettersCountResponse
```

Pending Letters Count

Returns the count of AE Assessments that are awaiting a letter to be sent  and the count of the employees that are awaiting a postponement letter to be sent.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\AutoEnrolmentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string | The Id of the Employer

try {
    $result = $apiInstance->pendingLettersCountAutoEnrolment($employerId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AutoEnrolmentApi->pendingLettersCountAutoEnrolment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employerId** | **string**| The Id of the Employer | |

### Return type

[**\SynergiTech\Staffology\Model\ContractPendingLettersCountResponse**](../Model/ContractPendingLettersCountResponse.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `pendingPostponementLettersAutoEnrolment()`

```php
pendingPostponementLettersAutoEnrolment($employerId): \SynergiTech\Staffology\Model\Item[]
```

Pending Postponement Letters

Returns all employees that are awaiting a postponement letter to be sent.  Because there is no associated AeAssessment they can't be returned with the other pending letters

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\AutoEnrolmentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string | The Id of the Employer

try {
    $result = $apiInstance->pendingPostponementLettersAutoEnrolment($employerId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AutoEnrolmentApi->pendingPostponementLettersAutoEnrolment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employerId** | **string**| The Id of the Employer | |

### Return type

[**\SynergiTech\Staffology\Model\Item[]**](../Model/Item.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `reenrolAutoEnrolment()`

```php
reenrolAutoEnrolment($employerId, $cyclicalReenrolmentDate): \SynergiTech\Staffology\Model\Item[]
```

Cyclical Re-enrolment

Performs a Cyclical Re-enrolment. All employees that have opted-out or ceased membership    will be re-assessed and auto-enrolled if necessary.  The employers cyclical re-enrolment date will then be updated to the date provided.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\AutoEnrolmentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string | The Id of the Employer
$cyclicalReenrolmentDate = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | The new Cyclical Re-enrolment Date for the  Employer

try {
    $result = $apiInstance->reenrolAutoEnrolment($employerId, $cyclicalReenrolmentDate);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AutoEnrolmentApi->reenrolAutoEnrolment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employerId** | **string**| The Id of the Employer | |
| **cyclicalReenrolmentDate** | **\DateTime**| The new Cyclical Re-enrolment Date for the  Employer | [optional] |

### Return type

[**\SynergiTech\Staffology\Model\Item[]**](../Model/Item.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `setStateAutoEnrolment()`

```php
setStateAutoEnrolment($employerId, $employeeId, $state, $status, $stateDate, $pensionId, $workerGroupId, $startActionAlreadyReported, $endActionAlreadyReported): \SynergiTech\Staffology\Model\AeAssessment
```

Update State

Updates the AutoEnrolment state for an Employee.   You would use this API call to process notices such as Opt Out, Opt In, etc.  A new assessment is returned showing the result of the state change.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\AutoEnrolmentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string | The Id of the Employer to which the Employee belongs
$employeeId = 'employeeId_example'; // string | The Id of the Employee you want to set the status for
$state = new \SynergiTech\Staffology\Model\\SynergiTech\Staffology\Model\AeEmployeeState(); // \SynergiTech\Staffology\Model\AeEmployeeState | The AutoEnrolment State to set for the Employee
$status = new \SynergiTech\Staffology\Model\\SynergiTech\Staffology\Model\AeStatus(); // \SynergiTech\Staffology\Model\AeStatus
$stateDate = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | Optional. Will default to the current date
$pensionId = 'pensionId_example'; // string | Optional. Used to override the default AE Pension. Only valid with states of Enrol, VoluntaryJoiner or OptIn
$workerGroupId = 'workerGroupId_example'; // string | Optional. Used to override the default AE Pension Workergroup. Only valid with states of Enrol, Join or OptIn. Must be provided if a pensionId is being provided.
$startActionAlreadyReported = false; // bool
$endActionAlreadyReported = false; // bool

try {
    $result = $apiInstance->setStateAutoEnrolment($employerId, $employeeId, $state, $status, $stateDate, $pensionId, $workerGroupId, $startActionAlreadyReported, $endActionAlreadyReported);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AutoEnrolmentApi->setStateAutoEnrolment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employerId** | **string**| The Id of the Employer to which the Employee belongs | |
| **employeeId** | **string**| The Id of the Employee you want to set the status for | |
| **state** | [**\SynergiTech\Staffology\Model\AeEmployeeState**](../Model/.md)| The AutoEnrolment State to set for the Employee | [optional] |
| **status** | [**\SynergiTech\Staffology\Model\AeStatus**](../Model/.md)|  | [optional] |
| **stateDate** | **\DateTime**| Optional. Will default to the current date | [optional] |
| **pensionId** | **string**| Optional. Used to override the default AE Pension. Only valid with states of Enrol, VoluntaryJoiner or OptIn | [optional] |
| **workerGroupId** | **string**| Optional. Used to override the default AE Pension Workergroup. Only valid with states of Enrol, Join or OptIn. Must be provided if a pensionId is being provided. | [optional] |
| **startActionAlreadyReported** | **bool**|  | [optional] [default to false] |
| **endActionAlreadyReported** | **bool**|  | [optional] [default to false] |

### Return type

[**\SynergiTech\Staffology\Model\AeAssessment**](../Model/AeAssessment.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
