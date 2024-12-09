# SynergiTech\Staffology\LeaveApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**addDocumentLeave()**](LeaveApi.md#addDocumentLeave) | **POST** /employers/{employerId}/employees/{employeeId}/leave/{id}/documents | Add Document |
| [**createLeave()**](LeaveApi.md#createLeave) | **POST** /employers/{employerId}/employees/{employeeId}/leave | Create Leave |
| [**deleteDocumentLeave()**](LeaveApi.md#deleteDocumentLeave) | **DELETE** /employers/{employerId}/employees/{employeeId}/leave/{id}/documents/{documentId} | Delete Leave Document |
| [**deleteLeave()**](LeaveApi.md#deleteLeave) | **DELETE** /employers/{employerId}/employees/{employeeId}/leave/{id} | Delete Leave |
| [**findLinkedPiwLeave()**](LeaveApi.md#findLinkedPiwLeave) | **GET** /employers/{employerId}/employees/{employeeId}/leave/findlinkedpiw | Find Linked Piw |
| [**getDocumentLeave()**](LeaveApi.md#getDocumentLeave) | **GET** /employers/{employerId}/employees/{employeeId}/leave/{id}/documents/{documentId} | Get Leave Document |
| [**getLeave()**](LeaveApi.md#getLeave) | **GET** /employers/{employerId}/employees/{employeeId}/leave/{id} | Get Leave |
| [**getMaternityLeaveScheduleLeave()**](LeaveApi.md#getMaternityLeaveScheduleLeave) | **GET** /employers/{employerId}/employees/{employeeId}/leave/statutorymaternityschedule | List Statutory Maternity Leave History |
| [**getOccupationalMaternityScheduleLeave()**](LeaveApi.md#getOccupationalMaternityScheduleLeave) | **GET** /employers/{employerId}/employees/{employeeId}/leave/occupationalmaternityschedule/{id} | List occupational Maternity Leave History |
| [**indexLeave()**](LeaveApi.md#indexLeave) | **GET** /employers/{employerId}/employees/{employeeId}/leave | List Leave |
| [**updateLeave()**](LeaveApi.md#updateLeave) | **PUT** /employers/{employerId}/employees/{employeeId}/leave/{id} | Update Leave |


## `addDocumentLeave()`

```php
addDocumentLeave($employerId, $employeeId, $id, $file)
```

Add Document

Adds document to the leave

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\LeaveApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string
$employeeId = 'employeeId_example'; // string
$id = 'id_example'; // string | The Id of the leave you want to attach documents to
$file = '/path/to/file.txt'; // \SplFileObject

try {
    $apiInstance->addDocumentLeave($employerId, $employeeId, $id, $file);
} catch (Exception $e) {
    echo 'Exception when calling LeaveApi->addDocumentLeave: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employerId** | **string**|  | |
| **employeeId** | **string**|  | |
| **id** | **string**| The Id of the leave you want to attach documents to | |
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

## `createLeave()`

```php
createLeave($employerId, $employeeId, $leave)
```

Create Leave

Creates Leave for the Employee

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\LeaveApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string
$employeeId = 'employeeId_example'; // string
$leave = new \SynergiTech\Staffology\Model\Leave(); // \SynergiTech\Staffology\Model\Leave

try {
    $apiInstance->createLeave($employerId, $employeeId, $leave);
} catch (Exception $e) {
    echo 'Exception when calling LeaveApi->createLeave: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employerId** | **string**|  | |
| **employeeId** | **string**|  | |
| **leave** | [**\SynergiTech\Staffology\Model\Leave**](../Model/Leave.md)|  | [optional] |

### Return type

void (empty response body)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: `application/json-patch+json`, `application/json`, `text/json`, `application/*+json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteDocumentLeave()`

```php
deleteDocumentLeave($employerId, $employeeId, $id, $documentId)
```

Delete Leave Document

Deletes the document specified by the documentId for the Leave specified by the Id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\LeaveApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string
$employeeId = 'employeeId_example'; // string
$id = 'id_example'; // string
$documentId = 'documentId_example'; // string | The Id of the Document you want to delete.

try {
    $apiInstance->deleteDocumentLeave($employerId, $employeeId, $id, $documentId);
} catch (Exception $e) {
    echo 'Exception when calling LeaveApi->deleteDocumentLeave: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employerId** | **string**|  | |
| **employeeId** | **string**|  | |
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

## `deleteLeave()`

```php
deleteLeave($employerId, $employeeId, $id)
```

Delete Leave

Deletes the Leave specified by the Id for the Employee specified by the EmployeeId

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\LeaveApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string
$employeeId = 'employeeId_example'; // string
$id = 'id_example'; // string | The Id of the Leave you want to delete.

try {
    $apiInstance->deleteLeave($employerId, $employeeId, $id);
} catch (Exception $e) {
    echo 'Exception when calling LeaveApi->deleteLeave: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employerId** | **string**|  | |
| **employeeId** | **string**|  | |
| **id** | **string**| The Id of the Leave you want to delete. | |

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

## `findLinkedPiwLeave()`

```php
findLinkedPiwLeave($employerId, $employeeId, $leaveType, $leavePayType, $from, $to): \SynergiTech\Staffology\Model\LinkedPiw
```

Find Linked Piw

Finds the linked piw the supplied leave would linked to, or null if none found

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\LeaveApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string
$employeeId = 'employeeId_example'; // string
$leaveType = new \SynergiTech\Staffology\Model\\SynergiTech\Staffology\Model\LeaveType(); // \SynergiTech\Staffology\Model\LeaveType | The type of leave to you want to find a linked Piw for.
$leavePayType = new \SynergiTech\Staffology\Model\\SynergiTech\Staffology\Model\LeavePayType(); // \SynergiTech\Staffology\Model\LeavePayType | The type of leave pay to you want to find a linked Piw for.
$from = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | The leave from date you want to find a linked Piw for.
$to = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | The leave to date you want to find a linked Piw for.

try {
    $result = $apiInstance->findLinkedPiwLeave($employerId, $employeeId, $leaveType, $leavePayType, $from, $to);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LeaveApi->findLinkedPiwLeave: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employerId** | **string**|  | |
| **employeeId** | **string**|  | |
| **leaveType** | [**\SynergiTech\Staffology\Model\LeaveType**](../Model/.md)| The type of leave to you want to find a linked Piw for. | [optional] |
| **leavePayType** | [**\SynergiTech\Staffology\Model\LeavePayType**](../Model/.md)| The type of leave pay to you want to find a linked Piw for. | [optional] |
| **from** | **\DateTime**| The leave from date you want to find a linked Piw for. | [optional] |
| **to** | **\DateTime**| The leave to date you want to find a linked Piw for. | [optional] |

### Return type

[**\SynergiTech\Staffology\Model\LinkedPiw**](../Model/LinkedPiw.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getDocumentLeave()`

```php
getDocumentLeave($employerId, $employeeId, $id, $documentId): \SplFileObject
```

Get Leave Document

Gets the document specified by the documentId for the Leave specified by the Id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\LeaveApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string
$employeeId = 'employeeId_example'; // string
$id = 'id_example'; // string
$documentId = 'documentId_example'; // string | The Id of the Document you want to retrieve.

try {
    $result = $apiInstance->getDocumentLeave($employerId, $employeeId, $id, $documentId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LeaveApi->getDocumentLeave: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employerId** | **string**|  | |
| **employeeId** | **string**|  | |
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

## `getLeave()`

```php
getLeave($employerId, $employeeId, $id): \SynergiTech\Staffology\Model\Leave
```

Get Leave

Gets the Leave specified by the Id for the Employee specified by the EmployeeId

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\LeaveApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string
$employeeId = 'employeeId_example'; // string
$id = 'id_example'; // string | The Id of the Leave you want to retrieve.

try {
    $result = $apiInstance->getLeave($employerId, $employeeId, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LeaveApi->getLeave: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employerId** | **string**|  | |
| **employeeId** | **string**|  | |
| **id** | **string**| The Id of the Leave you want to retrieve. | |

### Return type

[**\SynergiTech\Staffology\Model\Leave**](../Model/Leave.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getMaternityLeaveScheduleLeave()`

```php
getMaternityLeaveScheduleLeave($employerId, $employeeId, $babyDueDate, $leaveFrom, $leaveTo, $leaveType, $leavePayType, $payFrequency, $averageWeeklyEarnings, $isReversed): \SynergiTech\Staffology\Model\Item[]
```

List Statutory Maternity Leave History

Lists all Statutory Maternity leave history specified for an Employee.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\LeaveApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string
$employeeId = 'employeeId_example'; // string
$babyDueDate = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime
$leaveFrom = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime
$leaveTo = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime
$leaveType = new \SynergiTech\Staffology\Model\\SynergiTech\Staffology\Model\LeaveType(); // \SynergiTech\Staffology\Model\LeaveType
$leavePayType = new \SynergiTech\Staffology\Model\\SynergiTech\Staffology\Model\LeavePayType(); // \SynergiTech\Staffology\Model\LeavePayType
$payFrequency = new \SynergiTech\Staffology\Model\\SynergiTech\Staffology\Model\StatPayFrequency(); // \SynergiTech\Staffology\Model\StatPayFrequency
$averageWeeklyEarnings = 0; // float
$isReversed = false; // bool

try {
    $result = $apiInstance->getMaternityLeaveScheduleLeave($employerId, $employeeId, $babyDueDate, $leaveFrom, $leaveTo, $leaveType, $leavePayType, $payFrequency, $averageWeeklyEarnings, $isReversed);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LeaveApi->getMaternityLeaveScheduleLeave: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employerId** | **string**|  | |
| **employeeId** | **string**|  | |
| **babyDueDate** | **\DateTime**|  | [optional] |
| **leaveFrom** | **\DateTime**|  | [optional] |
| **leaveTo** | **\DateTime**|  | [optional] |
| **leaveType** | [**\SynergiTech\Staffology\Model\LeaveType**](../Model/.md)|  | [optional] |
| **leavePayType** | [**\SynergiTech\Staffology\Model\LeavePayType**](../Model/.md)|  | [optional] |
| **payFrequency** | [**\SynergiTech\Staffology\Model\StatPayFrequency**](../Model/.md)|  | [optional] |
| **averageWeeklyEarnings** | **float**|  | [optional] [default to 0] |
| **isReversed** | **bool**|  | [optional] [default to false] |

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

## `getOccupationalMaternityScheduleLeave()`

```php
getOccupationalMaternityScheduleLeave($employerId, $employeeId, $id): \SynergiTech\Staffology\Model\Item[]
```

List occupational Maternity Leave History

Lists all occupational Maternity leave history specified for an Employee.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\LeaveApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string
$employeeId = 'employeeId_example'; // string
$id = 'id_example'; // string

try {
    $result = $apiInstance->getOccupationalMaternityScheduleLeave($employerId, $employeeId, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LeaveApi->getOccupationalMaternityScheduleLeave: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employerId** | **string**|  | |
| **employeeId** | **string**|  | |
| **id** | **string**|  | |

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

## `indexLeave()`

```php
indexLeave($employerId, $employeeId): \SynergiTech\Staffology\Model\Item[]
```

List Leave

Lists all Leave for the Employee

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\LeaveApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string
$employeeId = 'employeeId_example'; // string

try {
    $result = $apiInstance->indexLeave($employerId, $employeeId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LeaveApi->indexLeave: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employerId** | **string**|  | |
| **employeeId** | **string**|  | |

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

## `updateLeave()`

```php
updateLeave($employerId, $employeeId, $id, $leave): \SynergiTech\Staffology\Model\Leave
```

Update Leave

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\LeaveApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string
$employeeId = 'employeeId_example'; // string
$id = 'id_example'; // string | The Id of the Leave you want to update.
$leave = new \SynergiTech\Staffology\Model\Leave(); // \SynergiTech\Staffology\Model\Leave

try {
    $result = $apiInstance->updateLeave($employerId, $employeeId, $id, $leave);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LeaveApi->updateLeave: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employerId** | **string**|  | |
| **employeeId** | **string**|  | |
| **id** | **string**| The Id of the Leave you want to update. | |
| **leave** | [**\SynergiTech\Staffology\Model\Leave**](../Model/Leave.md)|  | [optional] |

### Return type

[**\SynergiTech\Staffology\Model\Leave**](../Model/Leave.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: `application/json-patch+json`, `application/json`, `text/json`, `application/*+json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
