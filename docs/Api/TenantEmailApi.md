# SynergiTech\Staffology\TenantEmailApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getEmailTenantEmail()**](TenantEmailApi.md#getEmailTenantEmail) | **GET** /tenants/{id}/email/{emailId} | Get Email |
| [**getMailSettingsTenantEmail()**](TenantEmailApi.md#getMailSettingsTenantEmail) | **GET** /tenants/{id}/email/settings | Get MailSettings |
| [**indexTenantEmail()**](TenantEmailApi.md#indexTenantEmail) | **GET** /tenants/{id}/email | List Emails |
| [**resendEmailTenantEmail()**](TenantEmailApi.md#resendEmailTenantEmail) | **POST** /tenants/{id}/email/{emailId} | Re-send Email |
| [**testMailSettingsTenantEmail()**](TenantEmailApi.md#testMailSettingsTenantEmail) | **POST** /tenants/{id}/email/settings/test | Send test email |
| [**updateMailSettingsTenantEmail()**](TenantEmailApi.md#updateMailSettingsTenantEmail) | **PUT** /tenants/{id}/email/settings | Update MailSettings |


## `getEmailTenantEmail()`

```php
getEmailTenantEmail($id, $emailId): \SynergiTech\Staffology\Model\TenantEmail
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


$apiInstance = new SynergiTech\Staffology\Api\TenantEmailApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$emailId = 'emailId_example'; // string

try {
    $result = $apiInstance->getEmailTenantEmail($id, $emailId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TenantEmailApi->getEmailTenantEmail: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |
| **emailId** | **string**|  | |

### Return type

[**\SynergiTech\Staffology\Model\TenantEmail**](../Model/TenantEmail.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getMailSettingsTenantEmail()`

```php
getMailSettingsTenantEmail($id): \SynergiTech\Staffology\Model\MailSettings
```

Get MailSettings

Returns the MailSettings for a Tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\TenantEmailApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | The Id of the Tenant

try {
    $result = $apiInstance->getMailSettingsTenantEmail($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TenantEmailApi->getMailSettingsTenantEmail: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| The Id of the Tenant | |

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

## `indexTenantEmail()`

```php
indexTenantEmail($id, $pageNum, $pageSize): \SynergiTech\Staffology\Model\Item[]
```

List Emails

Returns a list of all emails sent for this Tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\TenantEmailApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$pageNum = 56; // int
$pageSize = 56; // int

try {
    $result = $apiInstance->indexTenantEmail($id, $pageNum, $pageSize);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TenantEmailApi->indexTenantEmail: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |
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

## `resendEmailTenantEmail()`

```php
resendEmailTenantEmail($id, $emailId): \SynergiTech\Staffology\Model\TenantEmail
```

Re-send Email

Re-sends an existing email.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\TenantEmailApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$emailId = 'emailId_example'; // string

try {
    $result = $apiInstance->resendEmailTenantEmail($id, $emailId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TenantEmailApi->resendEmailTenantEmail: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |
| **emailId** | **string**|  | |

### Return type

[**\SynergiTech\Staffology\Model\TenantEmail**](../Model/TenantEmail.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `testMailSettingsTenantEmail()`

```php
testMailSettingsTenantEmail($id, $email): \SynergiTech\Staffology\Model\EmployerEmail
```

Send test email

This API call will generate a test email based on your MailSettings.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\TenantEmailApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | The Id of the Tenant
$email = 'email_example'; // string | The address to send a test email to

try {
    $result = $apiInstance->testMailSettingsTenantEmail($id, $email);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TenantEmailApi->testMailSettingsTenantEmail: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| The Id of the Tenant | |
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

## `updateMailSettingsTenantEmail()`

```php
updateMailSettingsTenantEmail($id, $mailSettings): \SynergiTech\Staffology\Model\MailSettings
```

Update MailSettings

Updates the MailSettings for a Tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\TenantEmailApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | The Id of the Tenant
$mailSettings = new \SynergiTech\Staffology\Model\MailSettings(); // \SynergiTech\Staffology\Model\MailSettings

try {
    $result = $apiInstance->updateMailSettingsTenantEmail($id, $mailSettings);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TenantEmailApi->updateMailSettingsTenantEmail: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| The Id of the Tenant | |
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
