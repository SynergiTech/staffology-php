# SynergiTech\Staffology\ProcessingNoteApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**addDocumentProcessingNote()**](ProcessingNoteApi.md#addDocumentProcessingNote) | **POST** /employers/{employerId}/payrun/{id}/documents | Add Document |
| [**createProcessingNote()**](ProcessingNoteApi.md#createProcessingNote) | **POST** /employers/{employerId}/payrun/{taxYear}/{payPeriod}/{periodNumber}/processingnotes | Create ProcessingNote |
| [**deleteDocumentProcessingNote()**](ProcessingNoteApi.md#deleteDocumentProcessingNote) | **DELETE** /employers/{employerId}/payrun/{id}/documents/{documentId} | Delete ProcessingNote Document |
| [**getDocumentProcessingNote()**](ProcessingNoteApi.md#getDocumentProcessingNote) | **GET** /employers/{employerId}/payrun/{id}/documents/{documentId} | Get ProcessingNote Document |
| [**getProcessingNote()**](ProcessingNoteApi.md#getProcessingNote) | **GET** /employers/{employerId}/payrun/{taxYear}/{payPeriod}/{periodNumber}/processingnotes/{id} | Get a ProcessingNote |
| [**listProcessingNote()**](ProcessingNoteApi.md#listProcessingNote) | **GET** /employers/{employerId}/payrun/{taxYear}/{payPeriod}/{periodNumber}/processingnotes | List ProcessingNotes for a PayRun |
| [**setStatusProcessingNote()**](ProcessingNoteApi.md#setStatusProcessingNote) | **PUT** /employers/{employerId}/payrun/{taxYear}/{payPeriod}/{periodNumber}/processingnotes/{id}/status | Set a ProcessingNote status |


## `addDocumentProcessingNote()`

```php
addDocumentProcessingNote($employerId, $id, $file)
```

Add Document

Adds document to the ProcessingNote

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\ProcessingNoteApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string
$id = 'id_example'; // string | The Id of the ProcessingNote you want to attach documents to
$file = '/path/to/file.txt'; // \SplFileObject

try {
    $apiInstance->addDocumentProcessingNote($employerId, $id, $file);
} catch (Exception $e) {
    echo 'Exception when calling ProcessingNoteApi->addDocumentProcessingNote: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employerId** | **string**|  | |
| **id** | **string**| The Id of the ProcessingNote you want to attach documents to | |
| **file** | **\SplFileObject****\SplFileObject**|  | [optional] |

### Return type

void (empty response body)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: `multipart/form-data`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createProcessingNote()`

```php
createProcessingNote($employerId, $taxYear, $payPeriod, $periodNumber, $ordinal, $processingNote): \SynergiTech\Staffology\Model\ProcessingNote
```

Create ProcessingNote

Creates a Processing Note for the PayRun.  You must have Bureau Features enabled and the payrun must be editable.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\ProcessingNoteApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string
$taxYear = new \SynergiTech\Staffology\Model\\SynergiTech\Staffology\Model\TaxYear(); // \SynergiTech\Staffology\Model\TaxYear
$payPeriod = new \SynergiTech\Staffology\Model\\SynergiTech\Staffology\Model\PayPeriods(); // \SynergiTech\Staffology\Model\PayPeriods
$periodNumber = 56; // int
$ordinal = 1; // int
$processingNote = new \SynergiTech\Staffology\Model\ProcessingNote(); // \SynergiTech\Staffology\Model\ProcessingNote

try {
    $result = $apiInstance->createProcessingNote($employerId, $taxYear, $payPeriod, $periodNumber, $ordinal, $processingNote);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProcessingNoteApi->createProcessingNote: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employerId** | **string**|  | |
| **taxYear** | [**\SynergiTech\Staffology\Model\TaxYear**](../Model/.md)|  | |
| **payPeriod** | [**\SynergiTech\Staffology\Model\PayPeriods**](../Model/.md)|  | |
| **periodNumber** | **int**|  | |
| **ordinal** | **int**|  | [optional] [default to 1] |
| **processingNote** | [**\SynergiTech\Staffology\Model\ProcessingNote**](../Model/ProcessingNote.md)|  | [optional] |

### Return type

[**\SynergiTech\Staffology\Model\ProcessingNote**](../Model/ProcessingNote.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: `application/json-patch+json`, `application/json`, `text/json`, `application/*+json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteDocumentProcessingNote()`

```php
deleteDocumentProcessingNote($employerId, $id, $documentId)
```

Delete ProcessingNote Document

Deletes the document specified by the documentId for the ProcessingNote specified by the Id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\ProcessingNoteApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string
$id = 'id_example'; // string
$documentId = 'documentId_example'; // string | The Id of the Document you want to delete.

try {
    $apiInstance->deleteDocumentProcessingNote($employerId, $id, $documentId);
} catch (Exception $e) {
    echo 'Exception when calling ProcessingNoteApi->deleteDocumentProcessingNote: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employerId** | **string**|  | |
| **id** | **string**|  | |
| **documentId** | **string**| The Id of the Document you want to delete. | |

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

## `getDocumentProcessingNote()`

```php
getDocumentProcessingNote($employerId, $id, $documentId): \SplFileObject
```

Get ProcessingNote Document

Gets the document specified by the documentId for the ProcessingNote specified by the Id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\ProcessingNoteApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string
$id = 'id_example'; // string
$documentId = 'documentId_example'; // string | The Id of the Document you want to retrieve.

try {
    $result = $apiInstance->getDocumentProcessingNote($employerId, $id, $documentId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProcessingNoteApi->getDocumentProcessingNote: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employerId** | **string**|  | |
| **id** | **string**|  | |
| **documentId** | **string**| The Id of the Document you want to retrieve. | |

### Return type

**\SplFileObject**

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getProcessingNote()`

```php
getProcessingNote($employerId, $payPeriod, $periodNumber, $taxYear, $id, $ordinal): \SynergiTech\Staffology\Model\ProcessingNote
```

Get a ProcessingNote

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\ProcessingNoteApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string
$payPeriod = new \SynergiTech\Staffology\Model\\SynergiTech\Staffology\Model\PayPeriods(); // \SynergiTech\Staffology\Model\PayPeriods
$periodNumber = 56; // int
$taxYear = new \SynergiTech\Staffology\Model\\SynergiTech\Staffology\Model\TaxYear(); // \SynergiTech\Staffology\Model\TaxYear
$id = 'id_example'; // string
$ordinal = 1; // int

try {
    $result = $apiInstance->getProcessingNote($employerId, $payPeriod, $periodNumber, $taxYear, $id, $ordinal);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProcessingNoteApi->getProcessingNote: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employerId** | **string**|  | |
| **payPeriod** | [**\SynergiTech\Staffology\Model\PayPeriods**](../Model/.md)|  | |
| **periodNumber** | **int**|  | |
| **taxYear** | [**\SynergiTech\Staffology\Model\TaxYear**](../Model/.md)|  | |
| **id** | **string**|  | |
| **ordinal** | **int**|  | [optional] [default to 1] |

### Return type

[**\SynergiTech\Staffology\Model\ProcessingNote**](../Model/ProcessingNote.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listProcessingNote()`

```php
listProcessingNote($employerId, $payPeriod, $periodNumber, $taxYear, $ordinal, $payrunEntryId): \SynergiTech\Staffology\Model\Item[]
```

List ProcessingNotes for a PayRun

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\ProcessingNoteApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string
$payPeriod = new \SynergiTech\Staffology\Model\\SynergiTech\Staffology\Model\PayPeriods(); // \SynergiTech\Staffology\Model\PayPeriods
$periodNumber = 56; // int
$taxYear = new \SynergiTech\Staffology\Model\\SynergiTech\Staffology\Model\TaxYear(); // \SynergiTech\Staffology\Model\TaxYear
$ordinal = 1; // int
$payrunEntryId = 'payrunEntryId_example'; // string | Optionally filter ProcessingNotes to just those for the specified PayRunEntry

try {
    $result = $apiInstance->listProcessingNote($employerId, $payPeriod, $periodNumber, $taxYear, $ordinal, $payrunEntryId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProcessingNoteApi->listProcessingNote: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employerId** | **string**|  | |
| **payPeriod** | [**\SynergiTech\Staffology\Model\PayPeriods**](../Model/.md)|  | |
| **periodNumber** | **int**|  | |
| **taxYear** | [**\SynergiTech\Staffology\Model\TaxYear**](../Model/.md)|  | |
| **ordinal** | **int**|  | [optional] [default to 1] |
| **payrunEntryId** | **string**| Optionally filter ProcessingNotes to just those for the specified PayRunEntry | [optional] |

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

## `setStatusProcessingNote()`

```php
setStatusProcessingNote($employerId, $payPeriod, $periodNumber, $taxYear, $id, $ordinal, $body): \SynergiTech\Staffology\Model\ProcessingNote
```

Set a ProcessingNote status

Set a ProcessingNote status.  You must have Bureau Features enabled and the payrun must be editable.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\ProcessingNoteApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string
$payPeriod = new \SynergiTech\Staffology\Model\\SynergiTech\Staffology\Model\PayPeriods(); // \SynergiTech\Staffology\Model\PayPeriods
$periodNumber = 56; // int
$taxYear = new \SynergiTech\Staffology\Model\\SynergiTech\Staffology\Model\TaxYear(); // \SynergiTech\Staffology\Model\TaxYear
$id = 'id_example'; // string
$ordinal = 1; // int
$body = 'body_example'; // string

try {
    $result = $apiInstance->setStatusProcessingNote($employerId, $payPeriod, $periodNumber, $taxYear, $id, $ordinal, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProcessingNoteApi->setStatusProcessingNote: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employerId** | **string**|  | |
| **payPeriod** | [**\SynergiTech\Staffology\Model\PayPeriods**](../Model/.md)|  | |
| **periodNumber** | **int**|  | |
| **taxYear** | [**\SynergiTech\Staffology\Model\TaxYear**](../Model/.md)|  | |
| **id** | **string**|  | |
| **ordinal** | **int**|  | [optional] [default to 1] |
| **body** | **string**|  | [optional] |

### Return type

[**\SynergiTech\Staffology\Model\ProcessingNote**](../Model/ProcessingNote.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: `application/json-patch+json`, `application/json`, `text/json`, `application/*+json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
