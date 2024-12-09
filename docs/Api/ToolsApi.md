# SynergiTech\Staffology\ToolsApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**calculateNetOfOnCostsTools()**](ToolsApi.md#calculateNetOfOnCostsTools) | **GET** /tools/calculate-net-of-on-costs | Calculate Net of On Costs |


## `calculateNetOfOnCostsTools()`

```php
calculateNetOfOnCostsTools($notionalDayRate, $fee, $feeIsPercentage, $employersPensionContribution, $employersPensionContributionIsPercentage, $employeesPensionContribution, $employeesPensionContributionIsPercentage, $useAeBandings, $holidayWeeks, $daysWorkedPerWeek, $payPeriod, $calculationDate, $apprenticeshipLevyRateOverride, $pensionRule): \SynergiTech\Staffology\Model\ContractNetOfOnCostsResponse
```

Calculate Net of On Costs

Calculate the Gross Daily Pay and typical Net Costs for an employee.  This endpoint is currently being beta tested and subject to un-announced breaking changes.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\ToolsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$notionalDayRate = 3.4; // float | The total chargeable rate per day.
$fee = 3.4; // float | The charge for providing this service, per pay period.
$feeIsPercentage = True; // bool | If true, 'Fee' will be treated as a percentage.
$employersPensionContribution = 3.4; // float | The employers pension contributions, per pay period.
$employersPensionContributionIsPercentage = True; // bool | If true, EmployersPensionContribution will be treated as a percentage.
$employeesPensionContribution = 3.4; // float | The employees pension contributions, per pay period.
$employeesPensionContributionIsPercentage = True; // bool | If true, EmployeesPensionContribution will be used as a percentage.
$useAeBandings = True; // bool | If true, legislative Ae Bandings will be applied during calculation.
$holidayWeeks = 3.4; // float | The holiday weeks to use for the calculation.
$daysWorkedPerWeek = 56; // int | Number of days the employee works per week.
$payPeriod = new \SynergiTech\Staffology\Model\\SynergiTech\Staffology\Model\PayPeriods(); // \SynergiTech\Staffology\Model\PayPeriods | The pay frequency to be used for the calculation.
$calculationDate = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | Used to find associated legislative values, default Today.
$apprenticeshipLevyRateOverride = 3.4; // float | Override the Apprenticeship Levy Rate. 0.50 for 0.5%.
$pensionRule = new \SynergiTech\Staffology\Model\\SynergiTech\Staffology\Model\PensionRule(); // \SynergiTech\Staffology\Model\PensionRule | The type of pension scheme being enrolled into, default SalarySacrifice.

try {
    $result = $apiInstance->calculateNetOfOnCostsTools($notionalDayRate, $fee, $feeIsPercentage, $employersPensionContribution, $employersPensionContributionIsPercentage, $employeesPensionContribution, $employeesPensionContributionIsPercentage, $useAeBandings, $holidayWeeks, $daysWorkedPerWeek, $payPeriod, $calculationDate, $apprenticeshipLevyRateOverride, $pensionRule);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ToolsApi->calculateNetOfOnCostsTools: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **notionalDayRate** | **float**| The total chargeable rate per day. | |
| **fee** | **float**| The charge for providing this service, per pay period. | |
| **feeIsPercentage** | **bool**| If true, &#39;Fee&#39; will be treated as a percentage. | |
| **employersPensionContribution** | **float**| The employers pension contributions, per pay period. | |
| **employersPensionContributionIsPercentage** | **bool**| If true, EmployersPensionContribution will be treated as a percentage. | |
| **employeesPensionContribution** | **float**| The employees pension contributions, per pay period. | |
| **employeesPensionContributionIsPercentage** | **bool**| If true, EmployeesPensionContribution will be used as a percentage. | |
| **useAeBandings** | **bool**| If true, legislative Ae Bandings will be applied during calculation. | |
| **holidayWeeks** | **float**| The holiday weeks to use for the calculation. | |
| **daysWorkedPerWeek** | **int**| Number of days the employee works per week. | |
| **payPeriod** | [**\SynergiTech\Staffology\Model\PayPeriods**](../Model/.md)| The pay frequency to be used for the calculation. | |
| **calculationDate** | **\DateTime**| Used to find associated legislative values, default Today. | [optional] |
| **apprenticeshipLevyRateOverride** | **float**| Override the Apprenticeship Levy Rate. 0.50 for 0.5%. | [optional] |
| **pensionRule** | [**\SynergiTech\Staffology\Model\PensionRule**](../Model/.md)| The type of pension scheme being enrolled into, default SalarySacrifice. | [optional] |

### Return type

[**\SynergiTech\Staffology\Model\ContractNetOfOnCostsResponse**](../Model/ContractNetOfOnCostsResponse.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
