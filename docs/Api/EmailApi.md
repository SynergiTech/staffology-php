# SynergiTech\Staffology\EmailApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getEmailEmail()**](EmailApi.md#getEmailEmail) | **GET** /employers/{employerId}/email/{emailId} | Get Email |
| [**getMailSettingsEmail()**](EmailApi.md#getMailSettingsEmail) | **GET** /employers/{employerId}/email/settings | Get MailSettings |
| [**indexEmail()**](EmailApi.md#indexEmail) | **GET** /employers/{employerId}/email | List Emails |
| [**resendEmailEmail()**](EmailApi.md#resendEmailEmail) | **POST** /employers/{employerId}/email/{emailId} | Re-send Email |
| [**testMailSettingsEmail()**](EmailApi.md#testMailSettingsEmail) | **POST** /employers/{employerId}/email/settings/test | Send Test Email |
| [**updateMailSettingsEmail()**](EmailApi.md#updateMailSettingsEmail) | **PUT** /employers/{employerId}/email/settings | Update MailSettings |
| [**verifyMailSettingsEmail()**](EmailApi.md#verifyMailSettingsEmail) | **POST** /employers/{employerId}/email/settings/verify | Email Verification (Request) |
| [**verifyMailSettingsResponseEmail()**](EmailApi.md#verifyMailSettingsResponseEmail) | **PUT** /employers/{employerId}/email/settings/verify | Email Verification (Respond) |


## `getEmailEmail()`

```php
getEmailEmail($employerId, $emailId): \SynergiTech\Staffology\Model\EmployerEmail
```

Get Email

Returns the email along with its status.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\EmailApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string
$emailId = 'emailId_example'; // string

try {
    $result = $apiInstance->getEmailEmail($employerId, $emailId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailApi->getEmailEmail: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employerId** | **string**|  | |
| **emailId** | **string**|  | |

### Return type

[**\SynergiTech\Staffology\Model\EmployerEmail**](../Model/EmployerEmail.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getMailSettingsEmail()`

```php
getMailSettingsEmail($employerId): \SynergiTech\Staffology\Model\MailSettings
```

Get MailSettings

Returns the MailSettings for an Employer.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\EmailApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string | The Id of the Employer

try {
    $result = $apiInstance->getMailSettingsEmail($employerId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailApi->getMailSettingsEmail: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employerId** | **string**| The Id of the Employer | |

### Return type

[**\SynergiTech\Staffology\Model\MailSettings**](../Model/MailSettings.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `indexEmail()`

```php
indexEmail($employerId, $pageNum, $pageSize): \SynergiTech\Staffology\Model\Item[]
```

List Emails

Returns a list of all emails sent for this Employer.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\EmailApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string
$pageNum = 56; // int
$pageSize = 56; // int

try {
    $result = $apiInstance->indexEmail($employerId, $pageNum, $pageSize);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailApi->indexEmail: ', $e->getMessage(), PHP_EOL;
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

## `resendEmailEmail()`

```php
resendEmailEmail($employerId, $emailId): \SynergiTech\Staffology\Model\EmployerEmail
```

Re-send Email

Re-send an existing email.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\EmailApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string
$emailId = 'emailId_example'; // string

try {
    $result = $apiInstance->resendEmailEmail($employerId, $emailId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailApi->resendEmailEmail: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employerId** | **string**|  | |
| **emailId** | **string**|  | |

### Return type

[**\SynergiTech\Staffology\Model\EmployerEmail**](../Model/EmployerEmail.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `testMailSettingsEmail()`

```php
testMailSettingsEmail($employerId, $email): \SynergiTech\Staffology\Model\EmployerEmail
```

Send Test Email

This API call will generate a test email based on your MailSettings.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\EmailApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string | The Id of the Employer
$email = 'email_example'; // string | The address to send a test email to

try {
    $result = $apiInstance->testMailSettingsEmail($employerId, $email);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailApi->testMailSettingsEmail: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employerId** | **string**| The Id of the Employer | |
| **email** | **string**| The address to send a test email to | [optional] |

### Return type

[**\SynergiTech\Staffology\Model\EmployerEmail**](../Model/EmployerEmail.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateMailSettingsEmail()`

```php
updateMailSettingsEmail($employerId, $mailSettings): \SynergiTech\Staffology\Model\MailSettings
```

Update MailSettings

Updates the MailSettings for an Employer.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\EmailApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string | The Id of the Employer
$mailSettings = new \SynergiTech\Staffology\Model\MailSettings(); // \SynergiTech\Staffology\Model\MailSettings

try {
    $result = $apiInstance->updateMailSettingsEmail($employerId, $mailSettings);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailApi->updateMailSettingsEmail: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employerId** | **string**| The Id of the Employer | |
| **mailSettings** | [**\SynergiTech\Staffology\Model\MailSettings**](../Model/MailSettings.md)|  | [optional] |

### Return type

[**\SynergiTech\Staffology\Model\MailSettings**](../Model/MailSettings.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: `application/json-patch+json`, `application/json`, `text/json`, `application/*+json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `verifyMailSettingsEmail()`

```php
verifyMailSettingsEmail($employerId)
```

Email Verification (Request)

If the user attempts to use a non-verified email address in their MailSettings then we'll send them a verification email.  This API endpoint can be used to re-send the email.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\EmailApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string | The Id of the Employer

try {
    $apiInstance->verifyMailSettingsEmail($employerId);
} catch (Exception $e) {
    echo 'Exception when calling EmailApi->verifyMailSettingsEmail: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employerId** | **string**| The Id of the Employer | |

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

## `verifyMailSettingsResponseEmail()`

```php
verifyMailSettingsResponseEmail($employerId, $u, $k): bool
```

Email Verification (Respond)

Used to process the link sent in an email to verify an email address that's being used in MailSettings.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\EmailApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string | The employer Id.
$u = 'u_example'; // string | The value from the link in the email.
$k = 'k_example'; // string | The value from the link in the email.

try {
    $result = $apiInstance->verifyMailSettingsResponseEmail($employerId, $u, $k);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailApi->verifyMailSettingsResponseEmail: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employerId** | **string**| The employer Id. | |
| **u** | **string**| The value from the link in the email. | [optional] |
| **k** | **string**| The value from the link in the email. | [optional] |

### Return type

**bool**

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
