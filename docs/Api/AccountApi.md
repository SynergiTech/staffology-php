# SynergiTech\Staffology\AccountApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**activateAccount()**](AccountApi.md#activateAccount) | **POST** /account/activate | Activate an Account |
| [**changeEmailAddressAccount()**](AccountApi.md#changeEmailAddressAccount) | **POST** /account/emailaddress | Change Email Address |
| [**createApiKeyAccount()**](AccountApi.md#createApiKeyAccount) | **POST** /account/keys | Create ApiKey |
| [**createDemoEmployerAccount()**](AccountApi.md#createDemoEmployerAccount) | **POST** /account/demo | Create Demo Employer |
| [**deleteApiKeyAccount()**](AccountApi.md#deleteApiKeyAccount) | **DELETE** /account/keys/{id} | Delete ApiKey |
| [**getAccount()**](AccountApi.md#getAccount) | **GET** /account | Get Account Details |
| [**getApiKeyAccount()**](AccountApi.md#getApiKeyAccount) | **GET** /account/keys/{id} | Get ApiKey |
| [**getEmployerDefaultsAccount()**](AccountApi.md#getEmployerDefaultsAccount) | **GET** /account/employerdefaults | Get EmployerDefaults |
| [**getInvitationsAccount()**](AccountApi.md#getInvitationsAccount) | **GET** /account/invitations | Get Invitations |
| [**getTenantAccount()**](AccountApi.md#getTenantAccount) | **GET** /account/Tenant | Get Tenant |
| [**getUserEmployersAccount()**](AccountApi.md#getUserEmployersAccount) | **GET** /account/useremployers | List User Employers |
| [**listApiKeysAccount()**](AccountApi.md#listApiKeysAccount) | **GET** /account/keys | List ApiKeys |
| [**profileAccount()**](AccountApi.md#profileAccount) | **POST** /account/profile | Update Profile |
| [**setEmployerDefaultsAccount()**](AccountApi.md#setEmployerDefaultsAccount) | **PUT** /account/employerdefaults | Set EmployerDefaults |
| [**updatePhotoAccount()**](AccountApi.md#updatePhotoAccount) | **POST** /account/photo | Update Photo |
| [**verifyAccount()**](AccountApi.md#verifyAccount) | **POST** /account/verify | Re-send Verification Email |
| [**verifyResponseAccount()**](AccountApi.md#verifyResponseAccount) | **PUT** /account/verify/respond | Verify Email Address |


## `activateAccount()`

```php
activateAccount($brandCode, $autoActivate, $user): \SynergiTech\Staffology\Model\User
```

Activate an Account

New accounts need to be activated to confirm Terms and Conditions have been accepted.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$brandCode = 'brandCode_example'; // string
$autoActivate = false; // bool | If autoActivate is set to true, the account activation should be automatically performed without any user interaction
$user = new \SynergiTech\Staffology\Model\User(); // \SynergiTech\Staffology\Model\User

try {
    $result = $apiInstance->activateAccount($brandCode, $autoActivate, $user);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->activateAccount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **brandCode** | **string**|  | [optional] |
| **autoActivate** | **bool**| If autoActivate is set to true, the account activation should be automatically performed without any user interaction | [optional] [default to false] |
| **user** | [**\SynergiTech\Staffology\Model\User**](../Model/User.md)|  | [optional] |

### Return type

[**\SynergiTech\Staffology\Model\User**](../Model/User.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: `application/json-patch+json`, `application/json`, `text/json`, `application/*+json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `changeEmailAddressAccount()`

```php
changeEmailAddressAccount($emailAddress): \SynergiTech\Staffology\Model\User
```

Change Email Address

The user.PendingEmailAddress will be set to the give address and a new verification email will be sent.  Once the link in the email is clicked on then the user account will be updated to use the new email address

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$emailAddress = 'emailAddress_example'; // string

try {
    $result = $apiInstance->changeEmailAddressAccount($emailAddress);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->changeEmailAddressAccount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **emailAddress** | **string**|  | [optional] |

### Return type

[**\SynergiTech\Staffology\Model\User**](../Model/User.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createApiKeyAccount()`

```php
createApiKeyAccount($item): \SynergiTech\Staffology\Model\Item
```

Create ApiKey

Creates a new APIKey. The only property that's required or used is Name.  A new ApiKey will be generated and returned to you.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$item = new \SynergiTech\Staffology\Model\Item(); // \SynergiTech\Staffology\Model\Item

try {
    $result = $apiInstance->createApiKeyAccount($item);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->createApiKeyAccount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **item** | [**\SynergiTech\Staffology\Model\Item**](../Model/Item.md)|  | [optional] |

### Return type

[**\SynergiTech\Staffology\Model\Item**](../Model/Item.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: `application/json-patch+json`, `application/json`, `text/json`, `application/*+json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createDemoEmployerAccount()`

```php
createDemoEmployerAccount()
```

Create Demo Employer

Creates a demo employer for the user

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $apiInstance->createDemoEmployerAccount();
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->createDemoEmployerAccount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

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

## `deleteApiKeyAccount()`

```php
deleteApiKeyAccount($id)
```

Delete ApiKey



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $apiInstance->deleteApiKeyAccount($id);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->deleteApiKeyAccount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
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

## `getAccount()`

```php
getAccount($defaults, $defaultsKey): \SynergiTech\Staffology\Model\User
```

Get Account Details

Returns the details for the authorised account.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$defaults = 'defaults_example'; // string | You can leave this empty, it's for internal use only.
$defaultsKey = 'defaultsKey_example'; // string | You can leave this empty, it's for internal use only.

try {
    $result = $apiInstance->getAccount($defaults, $defaultsKey);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->getAccount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **defaults** | **string**| You can leave this empty, it&#39;s for internal use only. | [optional] |
| **defaultsKey** | **string**| You can leave this empty, it&#39;s for internal use only. | [optional] |

### Return type

[**\SynergiTech\Staffology\Model\User**](../Model/User.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getApiKeyAccount()`

```php
getApiKeyAccount($id): \SynergiTech\Staffology\Model\Item
```

Get ApiKey



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->getApiKeyAccount($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->getApiKeyAccount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |

### Return type

[**\SynergiTech\Staffology\Model\Item**](../Model/Item.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getEmployerDefaultsAccount()`

```php
getEmployerDefaultsAccount(): \SynergiTech\Staffology\Model\EmployerDefaults
```

Get EmployerDefaults

Get the EmployerDefaults for the currently authorised User.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getEmployerDefaultsAccount();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->getEmployerDefaultsAccount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\SynergiTech\Staffology\Model\EmployerDefaults**](../Model/EmployerDefaults.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getInvitationsAccount()`

```php
getInvitationsAccount(): \SynergiTech\Staffology\Model\Item[]
```

Get Invitations

Returns any pending Invitations for the authorised user.  If the email address isn't yet verified then the Name displayed in the Item will be the users email address instead of the company name.  Invitations cannot be accepted until the email address for the user is verified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getInvitationsAccount();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->getInvitationsAccount: ', $e->getMessage(), PHP_EOL;
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

## `getTenantAccount()`

```php
getTenantAccount($tenantId, $key): \SynergiTech\Staffology\Model\Tenant
```

Get Tenant

Returns branding details for the specified tenant. This is used by the web app and is unlikely to be used by third-parties.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tenantId = 'tenantId_example'; // string
$key = 'key_example'; // string

try {
    $result = $apiInstance->getTenantAccount($tenantId, $key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->getTenantAccount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tenantId** | **string**|  | [optional] |
| **key** | **string**|  | [optional] |

### Return type

[**\SynergiTech\Staffology\Model\Tenant**](../Model/Tenant.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getUserEmployersAccount()`

```php
getUserEmployersAccount($id): \SynergiTech\Staffology\Model\EmployerItem[]
```

List User Employers

Returns a list of Employers that are associated to the given User

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | The Id of the user you want a list of employers for.

try {
    $result = $apiInstance->getUserEmployersAccount($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->getUserEmployersAccount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| The Id of the user you want a list of employers for. | [optional] |

### Return type

[**\SynergiTech\Staffology\Model\EmployerItem[]**](../Model/EmployerItem.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listApiKeysAccount()`

```php
listApiKeysAccount(): \SynergiTech\Staffology\Model\Item[]
```

List ApiKeys



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->listApiKeysAccount();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->listApiKeysAccount: ', $e->getMessage(), PHP_EOL;
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

## `profileAccount()`

```php
profileAccount($user): \SynergiTech\Staffology\Model\User
```

Update Profile

Updates your profile. Only Salutation, FirstName, LastName, JobType, JobTitle, TelephoneNumber, BusinessName, Industry, Address and DisplayPrefs fields are updated.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user = new \SynergiTech\Staffology\Model\User(); // \SynergiTech\Staffology\Model\User

try {
    $result = $apiInstance->profileAccount($user);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->profileAccount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **user** | [**\SynergiTech\Staffology\Model\User**](../Model/User.md)|  | [optional] |

### Return type

[**\SynergiTech\Staffology\Model\User**](../Model/User.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: `application/json-patch+json`, `application/json`, `text/json`, `application/*+json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `setEmployerDefaultsAccount()`

```php
setEmployerDefaultsAccount($employerDefaults): \SynergiTech\Staffology\Model\EmployerDefaults
```

Set EmployerDefaults

Set the EmployerDefaults for the currently authorised User.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerDefaults = new \SynergiTech\Staffology\Model\EmployerDefaults(); // \SynergiTech\Staffology\Model\EmployerDefaults

try {
    $result = $apiInstance->setEmployerDefaultsAccount($employerDefaults);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->setEmployerDefaultsAccount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employerDefaults** | [**\SynergiTech\Staffology\Model\EmployerDefaults**](../Model/EmployerDefaults.md)|  | [optional] |

### Return type

[**\SynergiTech\Staffology\Model\EmployerDefaults**](../Model/EmployerDefaults.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: `application/json-patch+json`, `application/json`, `text/json`, `application/*+json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updatePhotoAccount()`

```php
updatePhotoAccount($file): \SynergiTech\Staffology\Model\User
```

Update Photo

Submit an image here and we'll upload it, resize it to 200px squared and set it as the image for your account.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$file = '/path/to/file.txt'; // \SplFileObject

try {
    $result = $apiInstance->updatePhotoAccount($file);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->updatePhotoAccount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **file** | **\SplFileObject****\SplFileObject**|  | [optional] |

### Return type

[**\SynergiTech\Staffology\Model\User**](../Model/User.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `verifyAccount()`

```php
verifyAccount()
```

Re-send Verification Email

Users should receive an email to verify their email address when they first register or if they change their email address.  However, this API endpoint can be used to re-send the email.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $apiInstance->verifyAccount();
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->verifyAccount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

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

## `verifyResponseAccount()`

```php
verifyResponseAccount($u, $k): bool
```

Verify Email Address

Used to process the link sent in an email to verify an email address.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$u = 'u_example'; // string | The value from the link in the email.
$k = 'k_example'; // string | The value from the link in the email.

try {
    $result = $apiInstance->verifyResponseAccount($u, $k);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->verifyResponseAccount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
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
