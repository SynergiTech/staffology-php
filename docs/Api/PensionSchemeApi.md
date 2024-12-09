# SynergiTech\Staffology\PensionSchemeApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**contributionsForPayrunPensionScheme()**](PensionSchemeApi.md#contributionsForPayrunPensionScheme) | **GET** /employers/{employerId}/pensionschemes/{id}/contributions/{taxYear}/{payPeriod}/{periodNumber} | Contributions for Payrun |
| [**contributionsPensionScheme()**](PensionSchemeApi.md#contributionsPensionScheme) | **GET** /employers/{employerId}/pensionschemes/{id}/contributions/{taxYear}/{submissionId} | Contributions Data |
| [**createPensionScheme()**](PensionSchemeApi.md#createPensionScheme) | **POST** /employers/{employerId}/pensionschemes | Create a PensionScheme |
| [**deletePensionScheme()**](PensionSchemeApi.md#deletePensionScheme) | **DELETE** /employers/{employerId}/pensionschemes/{id} | Delete a PensionScheme |
| [**employeesPensionScheme()**](PensionSchemeApi.md#employeesPensionScheme) | **GET** /employers/{employerId}/pensionschemes/{id}/employees | Get Employees |
| [**getPensionScheme()**](PensionSchemeApi.md#getPensionScheme) | **GET** /employers/{employerId}/pensionschemes/{id} | Get a PensionScheme |
| [**indexPensionScheme()**](PensionSchemeApi.md#indexPensionScheme) | **GET** /employers/{employerId}/pensionschemes | List PensionSchemes |
| [**listContributionsPensionScheme()**](PensionSchemeApi.md#listContributionsPensionScheme) | **GET** /employers/{employerId}/pensionschemes/{id}/contributions/{taxYear} | List Contributions |
| [**markAsSentPensionScheme()**](PensionSchemeApi.md#markAsSentPensionScheme) | **POST** /employers/{employerId}/pensionschemes/{id}/contributions/{taxYear}/{submissionId}/markassent | Mark as Sent |
| [**resubmitContributionsPensionScheme()**](PensionSchemeApi.md#resubmitContributionsPensionScheme) | **POST** /employers/{employerId}/pensionschemes/{id}/contributions/{taxYear}/{submissionId} | Re-submit Contributions |
| [**updatePensionScheme()**](PensionSchemeApi.md#updatePensionScheme) | **PUT** /employers/{employerId}/pensionschemes/{id} | Update a PensionScheme |


## `contributionsForPayrunPensionScheme()`

```php
contributionsForPayrunPensionScheme($employerId, $id, $taxYear, $payPeriod, $periodNumber, $ordinal): \SynergiTech\Staffology\Model\PensionContributionsSubmission
```

Contributions for Payrun

Returns contributions for a specific scheme and payrun

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\PensionSchemeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string | The Id of the Employer to which the PensionScheme belongs.
$id = 'id_example'; // string | The Id of the PensionScheme.
$taxYear = new \SynergiTech\Staffology\Model\\SynergiTech\Staffology\Model\TaxYear(); // \SynergiTech\Staffology\Model\TaxYear | The TaxYear to query
$payPeriod = new \SynergiTech\Staffology\Model\\SynergiTech\Staffology\Model\PayPeriods(); // \SynergiTech\Staffology\Model\PayPeriods
$periodNumber = 56; // int
$ordinal = 1; // int

try {
    $result = $apiInstance->contributionsForPayrunPensionScheme($employerId, $id, $taxYear, $payPeriod, $periodNumber, $ordinal);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PensionSchemeApi->contributionsForPayrunPensionScheme: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employerId** | **string**| The Id of the Employer to which the PensionScheme belongs. | |
| **id** | **string**| The Id of the PensionScheme. | |
| **taxYear** | [**\SynergiTech\Staffology\Model\TaxYear**](../Model/.md)| The TaxYear to query | |
| **payPeriod** | [**\SynergiTech\Staffology\Model\PayPeriods**](../Model/.md)|  | |
| **periodNumber** | **int**|  | |
| **ordinal** | **int**|  | [optional] [default to 1] |

### Return type

[**\SynergiTech\Staffology\Model\PensionContributionsSubmission**](../Model/PensionContributionsSubmission.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `contributionsPensionScheme()`

```php
contributionsPensionScheme($employerId, $id, $taxYear, $submissionId): \SynergiTech\Staffology\Model\ExternalProviderConversation
```

Contributions Data

Returns an ExternalProviderConversation showing data sent to and received from the ExternalDataProvider for the pension contribution submission.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\PensionSchemeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string | The Id of the Employer to which the PensionScheme belongs.
$id = 'id_example'; // string | The Id of the PensionScheme.
$taxYear = new \SynergiTech\Staffology\Model\\SynergiTech\Staffology\Model\TaxYear(); // \SynergiTech\Staffology\Model\TaxYear | The TaxYear of the submission
$submissionId = 'submissionId_example'; // string | The Id of the Submission.

try {
    $result = $apiInstance->contributionsPensionScheme($employerId, $id, $taxYear, $submissionId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PensionSchemeApi->contributionsPensionScheme: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employerId** | **string**| The Id of the Employer to which the PensionScheme belongs. | |
| **id** | **string**| The Id of the PensionScheme. | |
| **taxYear** | [**\SynergiTech\Staffology\Model\TaxYear**](../Model/.md)| The TaxYear of the submission | |
| **submissionId** | **string**| The Id of the Submission. | |

### Return type

[**\SynergiTech\Staffology\Model\ExternalProviderConversation**](../Model/ExternalProviderConversation.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createPensionScheme()`

```php
createPensionScheme($employerId, $pensionScheme): \SynergiTech\Staffology\Model\PensionScheme
```

Create a PensionScheme

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\PensionSchemeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string
$pensionScheme = new \SynergiTech\Staffology\Model\PensionScheme(); // \SynergiTech\Staffology\Model\PensionScheme

try {
    $result = $apiInstance->createPensionScheme($employerId, $pensionScheme);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PensionSchemeApi->createPensionScheme: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employerId** | **string**|  | |
| **pensionScheme** | [**\SynergiTech\Staffology\Model\PensionScheme**](../Model/PensionScheme.md)|  | [optional] |

### Return type

[**\SynergiTech\Staffology\Model\PensionScheme**](../Model/PensionScheme.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: `application/json-patch+json`, `application/json`, `text/json`, `application/*+json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deletePensionScheme()`

```php
deletePensionScheme($employerId, $id)
```

Delete a PensionScheme

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\PensionSchemeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string
$id = 'id_example'; // string

try {
    $apiInstance->deletePensionScheme($employerId, $id);
} catch (Exception $e) {
    echo 'Exception when calling PensionSchemeApi->deletePensionScheme: ', $e->getMessage(), PHP_EOL;
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

## `employeesPensionScheme()`

```php
employeesPensionScheme($employerId, $id): \SynergiTech\Staffology\Model\Item[]
```

Get Employees

Returns the employees that are enrolled in the specified scheme

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\PensionSchemeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string | The Id of the Employer to which the PensionScheme belongs.
$id = 'id_example'; // string | The Id of the PensionScheme you want to retrieve Employees for.

try {
    $result = $apiInstance->employeesPensionScheme($employerId, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PensionSchemeApi->employeesPensionScheme: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employerId** | **string**| The Id of the Employer to which the PensionScheme belongs. | |
| **id** | **string**| The Id of the PensionScheme you want to retrieve Employees for. | |

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

## `getPensionScheme()`

```php
getPensionScheme($employerId, $id): \SynergiTech\Staffology\Model\PensionScheme
```

Get a PensionScheme

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\PensionSchemeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string | The Id of the Employer to which the PensionScheme belongs.
$id = 'id_example'; // string | The Id of the PensionScheme you want to retrieve.

try {
    $result = $apiInstance->getPensionScheme($employerId, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PensionSchemeApi->getPensionScheme: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employerId** | **string**| The Id of the Employer to which the PensionScheme belongs. | |
| **id** | **string**| The Id of the PensionScheme you want to retrieve. | |

### Return type

[**\SynergiTech\Staffology\Model\PensionScheme**](../Model/PensionScheme.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `indexPensionScheme()`

```php
indexPensionScheme($employerId): \SynergiTech\Staffology\Model\Item[]
```

List PensionSchemes

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\PensionSchemeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string | The Id of the Employer for which you want to list PensionSchemes

try {
    $result = $apiInstance->indexPensionScheme($employerId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PensionSchemeApi->indexPensionScheme: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employerId** | **string**| The Id of the Employer for which you want to list PensionSchemes | |

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

## `listContributionsPensionScheme()`

```php
listContributionsPensionScheme($employerId, $id, $taxYear): \SynergiTech\Staffology\Model\Item[]
```

List Contributions

Returns a list of Items that tell you which PayRuns contain contributions to this scheme and the Url to the relevant report.  IF the scheme is connected to an ExternalDataProvider then the status of the submission will also be included.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\PensionSchemeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string | The Id of the Employer to which the PensionScheme belongs.
$id = 'id_example'; // string | The Id of the PensionScheme.
$taxYear = new \SynergiTech\Staffology\Model\\SynergiTech\Staffology\Model\TaxYear(); // \SynergiTech\Staffology\Model\TaxYear | The TaxYear to query

try {
    $result = $apiInstance->listContributionsPensionScheme($employerId, $id, $taxYear);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PensionSchemeApi->listContributionsPensionScheme: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employerId** | **string**| The Id of the Employer to which the PensionScheme belongs. | |
| **id** | **string**| The Id of the PensionScheme. | |
| **taxYear** | [**\SynergiTech\Staffology\Model\TaxYear**](../Model/.md)| The TaxYear to query | |

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

## `markAsSentPensionScheme()`

```php
markAsSentPensionScheme($employerId, $id, $taxYear, $submissionId): \SynergiTech\Staffology\Model\ExternalProviderConversation
```

Mark as Sent

Marks the Pension Contributions as sent

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\PensionSchemeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string | The Id of the Employer to which the PensionScheme belongs.
$id = 'id_example'; // string | The Id of the PensionScheme.
$taxYear = new \SynergiTech\Staffology\Model\\SynergiTech\Staffology\Model\TaxYear(); // \SynergiTech\Staffology\Model\TaxYear | The TaxYear of the submission
$submissionId = 'submissionId_example'; // string | The Id of the Submission.

try {
    $result = $apiInstance->markAsSentPensionScheme($employerId, $id, $taxYear, $submissionId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PensionSchemeApi->markAsSentPensionScheme: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employerId** | **string**| The Id of the Employer to which the PensionScheme belongs. | |
| **id** | **string**| The Id of the PensionScheme. | |
| **taxYear** | [**\SynergiTech\Staffology\Model\TaxYear**](../Model/.md)| The TaxYear of the submission | |
| **submissionId** | **string**| The Id of the Submission. | |

### Return type

[**\SynergiTech\Staffology\Model\ExternalProviderConversation**](../Model/ExternalProviderConversation.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `resubmitContributionsPensionScheme()`

```php
resubmitContributionsPensionScheme($employerId, $id, $taxYear, $submissionId)
```

Re-submit Contributions

Re-submits previously failed Contributions to a Pension Scheme.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\PensionSchemeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string | The Id of the Employer to which the PensionScheme belongs.
$id = 'id_example'; // string | The Id of the PensionScheme.
$taxYear = new \SynergiTech\Staffology\Model\\SynergiTech\Staffology\Model\TaxYear(); // \SynergiTech\Staffology\Model\TaxYear | The TaxYear of the submission
$submissionId = 'submissionId_example'; // string | The Id of the Submission to re-submit.

try {
    $apiInstance->resubmitContributionsPensionScheme($employerId, $id, $taxYear, $submissionId);
} catch (Exception $e) {
    echo 'Exception when calling PensionSchemeApi->resubmitContributionsPensionScheme: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employerId** | **string**| The Id of the Employer to which the PensionScheme belongs. | |
| **id** | **string**| The Id of the PensionScheme. | |
| **taxYear** | [**\SynergiTech\Staffology\Model\TaxYear**](../Model/.md)| The TaxYear of the submission | |
| **submissionId** | **string**| The Id of the Submission to re-submit. | |

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

## `updatePensionScheme()`

```php
updatePensionScheme($employerId, $id, $pensionScheme): \SynergiTech\Staffology\Model\PensionScheme
```

Update a PensionScheme

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\PensionSchemeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string
$id = 'id_example'; // string
$pensionScheme = new \SynergiTech\Staffology\Model\PensionScheme(); // \SynergiTech\Staffology\Model\PensionScheme

try {
    $result = $apiInstance->updatePensionScheme($employerId, $id, $pensionScheme);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PensionSchemeApi->updatePensionScheme: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employerId** | **string**|  | |
| **id** | **string**|  | |
| **pensionScheme** | [**\SynergiTech\Staffology\Model\PensionScheme**](../Model/PensionScheme.md)|  | [optional] |

### Return type

[**\SynergiTech\Staffology\Model\PensionScheme**](../Model/PensionScheme.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: `application/json-patch+json`, `application/json`, `text/json`, `application/*+json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
