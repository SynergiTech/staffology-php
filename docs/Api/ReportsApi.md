# SynergiTech\Staffology\ReportsApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**advancedVarianceReportReports()**](ReportsApi.md#advancedVarianceReportReports) | **GET** /employers/{employerId}/reports/advancedvariance | Advanced Variance Report |
| [**aeAssessmentsReports()**](ReportsApi.md#aeAssessmentsReports) | **GET** /employers/{employerId}/reports/AeAssessments | AutoEnrolment Assessments |
| [**aeoStatementReports()**](ReportsApi.md#aeoStatementReports) | **GET** /aeo/{employeeId}/{id} | AEO Statement |
| [**analysisReports()**](ReportsApi.md#analysisReports) | **GET** /employers/{employerId}/reports/{taxYear}/{payPeriod}/analysis | Analysis |
| [**apprenticeshipLevyDetailsReports()**](ReportsApi.md#apprenticeshipLevyDetailsReports) | **GET** /employers/{employerId}/reports/{taxYear}/apprenticeshiplevy | Apprenticeship Levy Details |
| [**attachmentOrdersReports()**](ReportsApi.md#attachmentOrdersReports) | **GET** /employers/{employerId}/reports/{taxYear}/{payPeriod}/attachmentorders | Attachment Orders |
| [**averageHolidayPayRateReports()**](ReportsApi.md#averageHolidayPayRateReports) | **GET** /employers/{employerId}/reports/{taxYear}/{payPeriod}/averageholidaypayrate | Average Holiday Pay Rate |
| [**bankPaymentInstructionsReports()**](ReportsApi.md#bankPaymentInstructionsReports) | **GET** /employers/{employerId}/reports/{taxYear}/{payPeriod}/{periodNumber}/payments/employee/credit | Bank Payment Instructions |
| [**changesReports()**](ReportsApi.md#changesReports) | **GET** /employers/{employerId}/reports/changes | Gets audit changes of all employees within a company. |
| [**cis300Reports()**](ReportsApi.md#cis300Reports) | **GET** /employers/{employerId}/reports/{taxYear}/cis300/{id} | CIS300 |
| [**cisStatementReports()**](ReportsApi.md#cisStatementReports) | **GET** /employers/{employerId}/reports/{taxYear}/cisstatement/{taxMonth} | CIS Statement |
| [**cisSubContractorSummaryReports()**](ReportsApi.md#cisSubContractorSummaryReports) | **GET** /employers/{employerId}/reports/cissummary | CIS Subcontractor Summary |
| [**costAnalysisReports()**](ReportsApi.md#costAnalysisReports) | **GET** /employers/{employerId}/reports/{taxYear}/{payPeriod}/costanalysis | Cost Analysis |
| [**costOfEmploymentReports()**](ReportsApi.md#costOfEmploymentReports) | **GET** /employers/{employerId}/reports/{taxYear}/{payPeriod}/costofemployment | Cost Of Employment |
| [**downloadMaternitySchedulesReports()**](ReportsApi.md#downloadMaternitySchedulesReports) | **GET** /employers/{employerId}/reports/downloadmaternityschedules | Download Maternity Payment Schedule |
| [**emailP11DMultipleReports()**](ReportsApi.md#emailP11DMultipleReports) | **POST** /employers/{employerId}/reports/p11d/email | Email P11D to all Employees |
| [**emailP11DReports()**](ReportsApi.md#emailP11DReports) | **POST** /employers/{employerId}/reports/p11d/email/{employeeId} | Email P11D to an Employee |
| [**emailP45Reports()**](ReportsApi.md#emailP45Reports) | **POST** /employers/{employerId}/reports/p45/email | Email P45 to Employee |
| [**emailP60MultipleReports()**](ReportsApi.md#emailP60MultipleReports) | **POST** /employers/{employerId}/reports/p60/email | Email P60 to all Employees |
| [**emailP60Reports()**](ReportsApi.md#emailP60Reports) | **POST** /employers/{employerId}/reports/p60/email/{employeeId} | Email P60 to an Employee |
| [**employeeBenefitsReports()**](ReportsApi.md#employeeBenefitsReports) | **GET** /employers/{employerId}/reports/{taxYear}/EmployeeBenefits | Employee Benefits |
| [**employeeExportReports()**](ReportsApi.md#employeeExportReports) | **GET** /employees | Employee Export Details |
| [**employeeLeaveReports()**](ReportsApi.md#employeeLeaveReports) | **GET** /employers/{employerId}/reports/employeeleave | Employee Leave |
| [**employeeRoleExportReports()**](ReportsApi.md#employeeRoleExportReports) | **GET** /employeeroles | Employee Export Roles Details |
| [**employerChangesReports()**](ReportsApi.md#employerChangesReports) | **GET** /employers/{employerId}/reports/employerchanges | Gets audit changes for a company. |
| [**employerExportReports()**](ReportsApi.md#employerExportReports) | **GET** /employers/{employerId}/reports/employers | Employer Export |
| [**examplePayslipReports()**](ReportsApi.md#examplePayslipReports) | **POST** /payslip/example/pdf | Example Payslip |
| [**exbReports()**](ReportsApi.md#exbReports) | **GET** /employers/{employerId}/reports/{taxYear}/exb/{id} | EXB |
| [**fpsReports()**](ReportsApi.md#fpsReports) | **GET** /employers/{employerId}/reports/{taxYear}/fps/{id} | FPS |
| [**fullSummaryOfPayReports()**](ReportsApi.md#fullSummaryOfPayReports) | **GET** /employers/{employerId}/reports/{taxYear}/{payPeriod}/fullsummaryofpay | Cost Of Employment |
| [**furloughReportReports()**](ReportsApi.md#furloughReportReports) | **GET** /employers/{employerId}/reports/{taxYear}/{payPeriod}/{periodNumber}/furlough | FurloughReport |
| [**genderPayGapReports()**](ReportsApi.md#genderPayGapReports) | **GET** /employers/{employerId}/reports/{taxYear}/GenderPayGap | Gender Pay Gap |
| [**getPayRunCsvReports()**](ReportsApi.md#getPayRunCsvReports) | **GET** /employers/{employerId}/reports/{taxYear}/{payPeriod}/{periodNumber}/payruncsv | Get PayRun CSV |
| [**grossToNetReports()**](ReportsApi.md#grossToNetReports) | **GET** /employers/{employerId}/reports/{taxYear}/{payPeriod}/gross-to-net | Gross To Net |
| [**holidayReports()**](ReportsApi.md#holidayReports) | **GET** /employers/{employerId}/reports/holiday | Holiday |
| [**hourlyPayReports()**](ReportsApi.md#hourlyPayReports) | **GET** /employers/{employerId}/reports/{taxYear}/{payPeriod}/hourly-pay | Hourly Pay |
| [**loanBalancesReports()**](ReportsApi.md#loanBalancesReports) | **GET** /employers/{employerId}/reports/{payPeriod}/loanbalances | Loan Balances |
| [**niLetterValidationReportEmployeesReports()**](ReportsApi.md#niLetterValidationReportEmployeesReports) | **GET** /employers/{employerId}/reports/NiLetterValidationReport | NI Letter Validation (Employees) |
| [**niLetterValidationReportReports()**](ReportsApi.md#niLetterValidationReportReports) | **GET** /employers/{employerId}/reports/{taxYear}/{payPeriod}/{periodNumber}/NiLetterValidationReport | NI Letter Validation (Payrun) |
| [**niYtdReports()**](ReportsApi.md#niYtdReports) | **GET** /niytd | NI Year To Date Values |
| [**p11DMultipleReports()**](ReportsApi.md#p11DMultipleReports) | **GET** /employers/{employerId}/reports/{taxYear}/p11d | All P11Ds For TaxYear |
| [**p11DReports()**](ReportsApi.md#p11DReports) | **GET** /employers/{employerId}/reports/{taxYear}/p11d/{employeeId} | P11D For Employee |
| [**p11DetailedMultipleReports()**](ReportsApi.md#p11DetailedMultipleReports) | **GET** /employers/{employerId}/reports/{taxYear}/p11detailed | All Detailed P11s For TaxYear |
| [**p11DetailedReports()**](ReportsApi.md#p11DetailedReports) | **GET** /employers/{employerId}/reports/{taxYear}/{employeeId}/p11detailed | P11 (Detailed) |
| [**p11Reports()**](ReportsApi.md#p11Reports) | **GET** /employers/{employerId}/reports/{taxYear}/{employeeId}/p11 | P11 |
| [**p30Reports()**](ReportsApi.md#p30Reports) | **GET** /employers/{employerId}/reports/{taxYear}/p30/{periodEnding} | P30 |
| [**p32Reports()**](ReportsApi.md#p32Reports) | **GET** /employers/{employerId}/reports/{taxYear}/p32 | P32 |
| [**p45Reports()**](ReportsApi.md#p45Reports) | **GET** /employers/{employerId}/reports/p45 | P45 For Employee |
| [**p60MultipleReports()**](ReportsApi.md#p60MultipleReports) | **GET** /employers/{employerId}/reports/{taxYear}/p60 | All P60s For TaxYear |
| [**p60Reports()**](ReportsApi.md#p60Reports) | **GET** /employers/{employerId}/reports/{taxYear}/p60/{employeeId} | P60 For Employee |
| [**papdisFileReports()**](ReportsApi.md#papdisFileReports) | **GET** /employers/{employerId}/reports/{taxYear}/{payPeriod}/{periodNumber}/papdis | PAPDIS File |
| [**payCodeExportReports()**](ReportsApi.md#payCodeExportReports) | **GET** /employers/{employerId}/reports/paycodes | Pay Code Export Details |
| [**payElementReports()**](ReportsApi.md#payElementReports) | **GET** /employers/{employerId}/reports/{taxYear}/{payPeriod}/pay-element | Pay Element |
| [**payGradesReports()**](ReportsApi.md#payGradesReports) | **GET** /employers/{employerId}/reports/payGrades | Pay Grade |
| [**payRunCsvReports()**](ReportsApi.md#payRunCsvReports) | **GET** /employers/{employerId}/reports/{taxYear}/{payPeriod}/{periodNumber}/payrun-csv | PayRun CSV (deprecated) |
| [**payRunPaymentsReports()**](ReportsApi.md#payRunPaymentsReports) | **GET** /employers/{employerId}/reports/{taxYear}/{payPeriod}/{periodNumber}/payments/employee | PayRun Payments |
| [**payRunSummaryReports()**](ReportsApi.md#payRunSummaryReports) | **GET** /employers/{employerId}/reports/{taxYear}/{payPeriod}/payrunsummary | PayRunSummary |
| [**paySpineReports()**](ReportsApi.md#paySpineReports) | **GET** /employers/{employerId}/reports/payspines | Pay Spine |
| [**payrollAnalysisCostBreakdownReports()**](ReportsApi.md#payrollAnalysisCostBreakdownReports) | **GET** /employers/{employerId}/reports/{taxYear}/{payPeriod}/analysiscostbreakdown | Analysis Cost Breakdown |
| [**payrollAnalysisEmployeeRoleBreakdownReports()**](ReportsApi.md#payrollAnalysisEmployeeRoleBreakdownReports) | **GET** /employers/{employerId}/reports/{taxYear}/{payPeriod}/analysisemployeerolebreakdown | Payroll Analysis with Employee Role Breakdown |
| [**payrollJournalCsvReportReports()**](ReportsApi.md#payrollJournalCsvReportReports) | **GET** /employers/{employerId}/reports/{taxYear}/{payPeriod}/{periodNumber}/payrolljournalcsv | Payroll Journal CSV |
| [**payrunNiYtdReports()**](ReportsApi.md#payrunNiYtdReports) | **GET** /employers/{employerId}/reports/{taxYear}/{payPeriod}/{periodNumber}/niytd | NI Year To Date Values |
| [**payrunYtdReports()**](ReportsApi.md#payrunYtdReports) | **GET** /employers/{employerId}/reports/{taxYear}/{payPeriod}/{periodNumber}/ytd | Year To Date Values |
| [**payslipReports()**](ReportsApi.md#payslipReports) | **GET** /employers/{employerId}/reports/{taxYear}/{payPeriod}/{periodNumber}/{id}/payslip | Payslip |
| [**payslipsReports()**](ReportsApi.md#payslipsReports) | **GET** /employers/{employerId}/reports/{taxYear}/{payPeriod}/{periodNumber}/payslips | Payslips |
| [**pensionMembershipsReports()**](ReportsApi.md#pensionMembershipsReports) | **GET** /employers/{employerId}/reports/{taxYear}/pensionmemberships | Export Multiple Pension Memberships Report |
| [**rightToWorkReports()**](ReportsApi.md#rightToWorkReports) | **GET** /employers/{employerId}/reports/right-to-work | RightToWork |
| [**spinePointReports()**](ReportsApi.md#spinePointReports) | **GET** /employers/{employerId}/reports/spinepoints | Spine Point |
| [**statutoryPayReports()**](ReportsApi.md#statutoryPayReports) | **GET** /employers/{employerId}/reports/{taxYear}/{payPeriod}/statutory-pay | Statutory Pay |
| [**taxCodeChangesReports()**](ReportsApi.md#taxCodeChangesReports) | **GET** /employers/{employerId}/reports/{taxYear}/taxcode | Taxcode Change |
| [**teachersPensionEoyReports()**](ReportsApi.md#teachersPensionEoyReports) | **GET** /employers/{employerId}/reports/{taxYear}/teachersPensionEoy | Teachers Pension Eoy Report |
| [**umbrellaReconciliationReports()**](ReportsApi.md#umbrellaReconciliationReports) | **GET** /employers/{employerId}/reports/{taxYear}/{payPeriod}/umbrella-reconciliation | Umbrella Reconciliation |
| [**varianceReportReports()**](ReportsApi.md#varianceReportReports) | **GET** /employers/{employerId}/reports/{taxYear}/{payPeriod}/variance | Variance Report |
| [**warningsReports()**](ReportsApi.md#warningsReports) | **GET** /employers/{employerId}/reports/{taxYear}/{payPeriod}/{periodNumber}/PayrollRunWarnings | Export Payroll Run Warnings |
| [**ytdReports()**](ReportsApi.md#ytdReports) | **GET** /ytd | Year To Date Values |


## `advancedVarianceReportReports()`

```php
advancedVarianceReportReports($employerId, $payPeriod, $ordinal, $taxYear, $period, $taxYearCompare, $periodCompare, $payCodes, $accept): \SynergiTech\Staffology\Model\AdvancedVarianceReportReportResponse
```

Advanced Variance Report

Returns a report comparing one period to another period.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\ReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string
$payPeriod = new \SynergiTech\Staffology\Model\\SynergiTech\Staffology\Model\PayPeriods(); // \SynergiTech\Staffology\Model\PayPeriods
$ordinal = 56; // int
$taxYear = new \SynergiTech\Staffology\Model\\SynergiTech\Staffology\Model\TaxYear(); // \SynergiTech\Staffology\Model\TaxYear
$period = 56; // int
$taxYearCompare = new \SynergiTech\Staffology\Model\\SynergiTech\Staffology\Model\TaxYear(); // \SynergiTech\Staffology\Model\TaxYear
$periodCompare = 56; // int
$payCodes = 'payCodes_example'; // string
$accept = 'accept_example'; // string

try {
    $result = $apiInstance->advancedVarianceReportReports($employerId, $payPeriod, $ordinal, $taxYear, $period, $taxYearCompare, $periodCompare, $payCodes, $accept);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportsApi->advancedVarianceReportReports: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employerId** | **string**|  | |
| **payPeriod** | [**\SynergiTech\Staffology\Model\PayPeriods**](../Model/.md)|  | [optional] |
| **ordinal** | **int**|  | [optional] |
| **taxYear** | [**\SynergiTech\Staffology\Model\TaxYear**](../Model/.md)|  | [optional] |
| **period** | **int**|  | [optional] |
| **taxYearCompare** | [**\SynergiTech\Staffology\Model\TaxYear**](../Model/.md)|  | [optional] |
| **periodCompare** | **int**|  | [optional] |
| **payCodes** | **string**|  | [optional] |
| **accept** | **string**|  | [optional] |

### Return type

[**\SynergiTech\Staffology\Model\AdvancedVarianceReportReportResponse**](../Model/AdvancedVarianceReportReportResponse.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `aeAssessmentsReports()`

```php
aeAssessmentsReports($employerId, $accept): \SynergiTech\Staffology\Model\ItemListReportResponse
```

AutoEnrolment Assessments

Returns a list of Items representing your current Employees along with their most recent Auto Enrolment Assessment in the metadata field.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\ReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string
$accept = 'accept_example'; // string

try {
    $result = $apiInstance->aeAssessmentsReports($employerId, $accept);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportsApi->aeAssessmentsReports: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employerId** | **string**|  | |
| **accept** | **string**|  | [optional] |

### Return type

[**\SynergiTech\Staffology\Model\ItemListReportResponse**](../Model/ItemListReportResponse.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `aeoStatementReports()`

```php
aeoStatementReports($employeeId, $id, $employerId, $accept): \SynergiTech\Staffology\Model\AttachmentOrderReportResponse
```

AEO Statement

Returns a statement for an Attachment Order, listing payments that have been made.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\ReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employeeId = 'employeeId_example'; // string
$id = 'id_example'; // string | The id of the AttachmentOrder
$employerId = 'employerId_example'; // string
$accept = 'accept_example'; // string

try {
    $result = $apiInstance->aeoStatementReports($employeeId, $id, $employerId, $accept);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportsApi->aeoStatementReports: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employeeId** | **string**|  | |
| **id** | **string**| The id of the AttachmentOrder | |
| **employerId** | **string**|  | [optional] |
| **accept** | **string**|  | [optional] |

### Return type

[**\SynergiTech\Staffology\Model\AttachmentOrderReportResponse**](../Model/AttachmentOrderReportResponse.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/csv`, `text/html`, `application/pdf`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `analysisReports()`

```php
analysisReports($employerId, $payPeriod, $taxYear, $fromPeriod, $toPeriod, $accept, $ordinal, $deptCode, $showPayPeriodBreakdown): \SynergiTech\Staffology\Model\AnalysisReportReportResponse
```

Analysis

Returns an AnalysisReport for one or multiple periods.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\ReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string
$payPeriod = new \SynergiTech\Staffology\Model\\SynergiTech\Staffology\Model\PayPeriods(); // \SynergiTech\Staffology\Model\PayPeriods
$taxYear = new \SynergiTech\Staffology\Model\\SynergiTech\Staffology\Model\TaxYear(); // \SynergiTech\Staffology\Model\TaxYear
$fromPeriod = 56; // int
$toPeriod = 56; // int
$accept = 'accept_example'; // string
$ordinal = 1; // int
$deptCode = 'deptCode_example'; // string | If specified then only employees assigned to this department code at the time of the payrun will be included
$showPayPeriodBreakdown = false; // bool | If set to true, then the report will show a breakdown of each period for each employee

try {
    $result = $apiInstance->analysisReports($employerId, $payPeriod, $taxYear, $fromPeriod, $toPeriod, $accept, $ordinal, $deptCode, $showPayPeriodBreakdown);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportsApi->analysisReports: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employerId** | **string**|  | |
| **payPeriod** | [**\SynergiTech\Staffology\Model\PayPeriods**](../Model/.md)|  | |
| **taxYear** | [**\SynergiTech\Staffology\Model\TaxYear**](../Model/.md)|  | |
| **fromPeriod** | **int**|  | [optional] |
| **toPeriod** | **int**|  | [optional] |
| **accept** | **string**|  | [optional] |
| **ordinal** | **int**|  | [optional] [default to 1] |
| **deptCode** | **string**| If specified then only employees assigned to this department code at the time of the payrun will be included | [optional] |
| **showPayPeriodBreakdown** | **bool**| If set to true, then the report will show a breakdown of each period for each employee | [optional] [default to false] |

### Return type

[**\SynergiTech\Staffology\Model\AnalysisReportReportResponse**](../Model/AnalysisReportReportResponse.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apprenticeshipLevyDetailsReports()`

```php
apprenticeshipLevyDetailsReports($employerId, $taxYear, $accept): \SynergiTech\Staffology\Model\ReportResponse
```

Apprenticeship Levy Details

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\ReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string | The Id of the Employer.
$taxYear = new \SynergiTech\Staffology\Model\\SynergiTech\Staffology\Model\TaxYear(); // \SynergiTech\Staffology\Model\TaxYear | The TaxYear that the Apprenticeship Levy is for.
$accept = 'accept_example'; // string

try {
    $result = $apiInstance->apprenticeshipLevyDetailsReports($employerId, $taxYear, $accept);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportsApi->apprenticeshipLevyDetailsReports: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employerId** | **string**| The Id of the Employer. | |
| **taxYear** | [**\SynergiTech\Staffology\Model\TaxYear**](../Model/.md)| The TaxYear that the Apprenticeship Levy is for. | |
| **accept** | **string**|  | [optional] |

### Return type

[**\SynergiTech\Staffology\Model\ReportResponse**](../Model/ReportResponse.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/pdf`, `application/json`, `text/html`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `attachmentOrdersReports()`

```php
attachmentOrdersReports($employerId, $payPeriod, $taxYear, $fromPeriod, $toPeriod, $accept, $ordinal): \SynergiTech\Staffology\Model\AttachmentOrdersReportReportResponse
```

Attachment Orders

Returns a report detailing attachment of earning order deductions for one or multiple periods.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\ReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string
$payPeriod = new \SynergiTech\Staffology\Model\\SynergiTech\Staffology\Model\PayPeriods(); // \SynergiTech\Staffology\Model\PayPeriods
$taxYear = new \SynergiTech\Staffology\Model\\SynergiTech\Staffology\Model\TaxYear(); // \SynergiTech\Staffology\Model\TaxYear
$fromPeriod = 56; // int
$toPeriod = 56; // int
$accept = 'accept_example'; // string
$ordinal = 1; // int

try {
    $result = $apiInstance->attachmentOrdersReports($employerId, $payPeriod, $taxYear, $fromPeriod, $toPeriod, $accept, $ordinal);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportsApi->attachmentOrdersReports: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employerId** | **string**|  | |
| **payPeriod** | [**\SynergiTech\Staffology\Model\PayPeriods**](../Model/.md)|  | |
| **taxYear** | [**\SynergiTech\Staffology\Model\TaxYear**](../Model/.md)|  | |
| **fromPeriod** | **int**|  | [optional] |
| **toPeriod** | **int**|  | [optional] |
| **accept** | **string**|  | [optional] |
| **ordinal** | **int**|  | [optional] [default to 1] |

### Return type

[**\SynergiTech\Staffology\Model\AttachmentOrdersReportReportResponse**](../Model/AttachmentOrdersReportReportResponse.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/html`, `application/pdf`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `averageHolidayPayRateReports()`

```php
averageHolidayPayRateReports($employerId, $payPeriod, $taxYear, $period, $accept, $ordinal): \SynergiTech\Staffology\Model\AverageHolidayPayRateReportReportResponse
```

Average Holiday Pay Rate

Returns a report for average holiday pay rate.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\ReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string
$payPeriod = new \SynergiTech\Staffology\Model\\SynergiTech\Staffology\Model\PayPeriods(); // \SynergiTech\Staffology\Model\PayPeriods
$taxYear = new \SynergiTech\Staffology\Model\\SynergiTech\Staffology\Model\TaxYear(); // \SynergiTech\Staffology\Model\TaxYear
$period = 56; // int
$accept = 'accept_example'; // string
$ordinal = 1; // int

try {
    $result = $apiInstance->averageHolidayPayRateReports($employerId, $payPeriod, $taxYear, $period, $accept, $ordinal);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportsApi->averageHolidayPayRateReports: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employerId** | **string**|  | |
| **payPeriod** | [**\SynergiTech\Staffology\Model\PayPeriods**](../Model/.md)|  | |
| **taxYear** | [**\SynergiTech\Staffology\Model\TaxYear**](../Model/.md)|  | |
| **period** | **int**|  | [optional] |
| **accept** | **string**|  | [optional] |
| **ordinal** | **int**|  | [optional] [default to 1] |

### Return type

[**\SynergiTech\Staffology\Model\AverageHolidayPayRateReportReportResponse**](../Model/AverageHolidayPayRateReportReportResponse.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/csv`, `text/html`, `application/pdf`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `bankPaymentInstructionsReports()`

```php
bankPaymentInstructionsReports($employerId, $payPeriod, $periodNumber, $taxYear, $accept, $paymentDate, $bankHoliday, $ordinal, $incPensions, $incHmrc, $incAeos, $incDeductions): \SynergiTech\Staffology\Model\BankPaymentInstructionReportResponse
```

Bank Payment Instructions

Returns a list of bank payments that need to be made to employees as a result of a Payrun.  You can optionally provide a PaymentDate and only payments for that date will be returned.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\ReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string
$payPeriod = new \SynergiTech\Staffology\Model\\SynergiTech\Staffology\Model\PayPeriods(); // \SynergiTech\Staffology\Model\PayPeriods
$periodNumber = 56; // int
$taxYear = new \SynergiTech\Staffology\Model\\SynergiTech\Staffology\Model\TaxYear(); // \SynergiTech\Staffology\Model\TaxYear
$accept = 'accept_example'; // string
$paymentDate = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime
$bankHoliday = new \SynergiTech\Staffology\Model\\SynergiTech\Staffology\Model\BankHolidayCollection(); // \SynergiTech\Staffology\Model\BankHolidayCollection | Specifies the region whose bank holidays are to be considered in the operation.
$ordinal = 1; // int
$incPensions = false; // bool | Set to true and we'll include any payment due to Pension Providers
$incHmrc = false; // bool | Set to true and we'll include any payment due to HMRC
$incAeos = false; // bool | Set to true and we'll include any payment due as a result of AttachmentOrders
$incDeductions = false; // bool | Set to true and we'll include any payment due to Deductions that are set to be paid to a Payee

try {
    $result = $apiInstance->bankPaymentInstructionsReports($employerId, $payPeriod, $periodNumber, $taxYear, $accept, $paymentDate, $bankHoliday, $ordinal, $incPensions, $incHmrc, $incAeos, $incDeductions);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportsApi->bankPaymentInstructionsReports: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employerId** | **string**|  | |
| **payPeriod** | [**\SynergiTech\Staffology\Model\PayPeriods**](../Model/.md)|  | |
| **periodNumber** | **int**|  | |
| **taxYear** | [**\SynergiTech\Staffology\Model\TaxYear**](../Model/.md)|  | |
| **accept** | **string**|  | [optional] |
| **paymentDate** | **\DateTime**|  | [optional] |
| **bankHoliday** | [**\SynergiTech\Staffology\Model\BankHolidayCollection**](../Model/.md)| Specifies the region whose bank holidays are to be considered in the operation. | [optional] |
| **ordinal** | **int**|  | [optional] [default to 1] |
| **incPensions** | **bool**| Set to true and we&#39;ll include any payment due to Pension Providers | [optional] [default to false] |
| **incHmrc** | **bool**| Set to true and we&#39;ll include any payment due to HMRC | [optional] [default to false] |
| **incAeos** | **bool**| Set to true and we&#39;ll include any payment due as a result of AttachmentOrders | [optional] [default to false] |
| **incDeductions** | **bool**| Set to true and we&#39;ll include any payment due to Deductions that are set to be paid to a Payee | [optional] [default to false] |

### Return type

[**\SynergiTech\Staffology\Model\BankPaymentInstructionReportResponse**](../Model/BankPaymentInstructionReportResponse.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/csv`, `application/zip`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `changesReports()`

```php
changesReports($employerId, $fromDate, $toDate, $accept): \SynergiTech\Staffology\Model\ChangeSummaryListReportResponse
```

Gets audit changes of all employees within a company.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\ReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string | The Id of any employer to which you have access.
$fromDate = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime
$toDate = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime
$accept = 'accept_example'; // string

try {
    $result = $apiInstance->changesReports($employerId, $fromDate, $toDate, $accept);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportsApi->changesReports: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employerId** | **string**| The Id of any employer to which you have access. | |
| **fromDate** | **\DateTime**|  | [optional] |
| **toDate** | **\DateTime**|  | [optional] |
| **accept** | **string**|  | [optional] |

### Return type

[**\SynergiTech\Staffology\Model\ChangeSummaryListReportResponse**](../Model/ChangeSummaryListReportResponse.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cis300Reports()`

```php
cis300Reports($employerId, $taxYear, $id, $accept): \SynergiTech\Staffology\Model\Cis300ReportResponse
```

CIS300

Returns a CIS300 as a CSV or human-readable report

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\ReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string
$taxYear = new \SynergiTech\Staffology\Model\\SynergiTech\Staffology\Model\TaxYear(); // \SynergiTech\Staffology\Model\TaxYear
$id = 'id_example'; // string | The Id of CIS300.
$accept = 'accept_example'; // string

try {
    $result = $apiInstance->cis300Reports($employerId, $taxYear, $id, $accept);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportsApi->cis300Reports: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employerId** | **string**|  | |
| **taxYear** | [**\SynergiTech\Staffology\Model\TaxYear**](../Model/.md)|  | |
| **id** | **string**| The Id of CIS300. | |
| **accept** | **string**|  | [optional] |

### Return type

[**\SynergiTech\Staffology\Model\Cis300ReportResponse**](../Model/Cis300ReportResponse.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/pdf`, `text/csv`, `text/html`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cisStatementReports()`

```php
cisStatementReports($employerId, $taxYear, $taxMonth, $employeeId, $accept): \SynergiTech\Staffology\Model\CisStatementListReportResponse
```

CIS Statement

Returns a CIS Statement for the employee specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\ReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string
$taxYear = new \SynergiTech\Staffology\Model\\SynergiTech\Staffology\Model\TaxYear(); // \SynergiTech\Staffology\Model\TaxYear
$taxMonth = 56; // int
$employeeId = 'employeeId_example'; // string | Specify an employeeId to get a single statement.              If you don't provide a value then all Subcontractors will be included.
$accept = 'accept_example'; // string

try {
    $result = $apiInstance->cisStatementReports($employerId, $taxYear, $taxMonth, $employeeId, $accept);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportsApi->cisStatementReports: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employerId** | **string**|  | |
| **taxYear** | [**\SynergiTech\Staffology\Model\TaxYear**](../Model/.md)|  | |
| **taxMonth** | **int**|  | |
| **employeeId** | **string**| Specify an employeeId to get a single statement.              If you don&#39;t provide a value then all Subcontractors will be included. | [optional] |
| **accept** | **string**|  | [optional] |

### Return type

[**\SynergiTech\Staffology\Model\CisStatementListReportResponse**](../Model/CisStatementListReportResponse.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/pdf`, `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cisSubContractorSummaryReports()`

```php
cisSubContractorSummaryReports($employerId, $accept): \SynergiTech\Staffology\Model\CisSubContractorSummaryListReportResponse
```

CIS Subcontractor Summary

Returns a list of all CIS Subcontractors along with verification details

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\ReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string
$accept = 'accept_example'; // string

try {
    $result = $apiInstance->cisSubContractorSummaryReports($employerId, $accept);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportsApi->cisSubContractorSummaryReports: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employerId** | **string**|  | |
| **accept** | **string**|  | [optional] |

### Return type

[**\SynergiTech\Staffology\Model\CisSubContractorSummaryListReportResponse**](../Model/CisSubContractorSummaryListReportResponse.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/pdf`, `text/html`, `text/csv`, `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `costAnalysisReports()`

```php
costAnalysisReports($employerId, $payPeriod, $taxYear, $fromPeriod, $toPeriod, $accept, $ordinal): \SynergiTech\Staffology\Model\CostAnalysisReportReportResponse
```

Cost Analysis

Returns a report analysing the costs of a payrun or range of payruns.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\ReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string
$payPeriod = new \SynergiTech\Staffology\Model\\SynergiTech\Staffology\Model\PayPeriods(); // \SynergiTech\Staffology\Model\PayPeriods
$taxYear = new \SynergiTech\Staffology\Model\\SynergiTech\Staffology\Model\TaxYear(); // \SynergiTech\Staffology\Model\TaxYear
$fromPeriod = 56; // int
$toPeriod = 56; // int
$accept = 'accept_example'; // string
$ordinal = 1; // int

try {
    $result = $apiInstance->costAnalysisReports($employerId, $payPeriod, $taxYear, $fromPeriod, $toPeriod, $accept, $ordinal);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportsApi->costAnalysisReports: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employerId** | **string**|  | |
| **payPeriod** | [**\SynergiTech\Staffology\Model\PayPeriods**](../Model/.md)|  | |
| **taxYear** | [**\SynergiTech\Staffology\Model\TaxYear**](../Model/.md)|  | |
| **fromPeriod** | **int**|  | [optional] |
| **toPeriod** | **int**|  | [optional] |
| **accept** | **string**|  | [optional] |
| **ordinal** | **int**|  | [optional] [default to 1] |

### Return type

[**\SynergiTech\Staffology\Model\CostAnalysisReportReportResponse**](../Model/CostAnalysisReportReportResponse.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/html`, `application/pdf`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `costOfEmploymentReports()`

```php
costOfEmploymentReports($employerId, $payPeriod, $taxYear, $fromPeriod, $toPeriod, $accept, $ordinal): \SynergiTech\Staffology\Model\CostOfEmploymentReportReportResponse
```

Cost Of Employment

Returns a report detailing the employment cost per employee for a payrun or range of payruns.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\ReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string
$payPeriod = new \SynergiTech\Staffology\Model\\SynergiTech\Staffology\Model\PayPeriods(); // \SynergiTech\Staffology\Model\PayPeriods
$taxYear = new \SynergiTech\Staffology\Model\\SynergiTech\Staffology\Model\TaxYear(); // \SynergiTech\Staffology\Model\TaxYear
$fromPeriod = 56; // int
$toPeriod = 56; // int
$accept = 'accept_example'; // string
$ordinal = 1; // int

try {
    $result = $apiInstance->costOfEmploymentReports($employerId, $payPeriod, $taxYear, $fromPeriod, $toPeriod, $accept, $ordinal);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportsApi->costOfEmploymentReports: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employerId** | **string**|  | |
| **payPeriod** | [**\SynergiTech\Staffology\Model\PayPeriods**](../Model/.md)|  | |
| **taxYear** | [**\SynergiTech\Staffology\Model\TaxYear**](../Model/.md)|  | |
| **fromPeriod** | **int**|  | [optional] |
| **toPeriod** | **int**|  | [optional] |
| **accept** | **string**|  | [optional] |
| **ordinal** | **int**|  | [optional] [default to 1] |

### Return type

[**\SynergiTech\Staffology\Model\CostOfEmploymentReportReportResponse**](../Model/CostOfEmploymentReportReportResponse.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/html`, `application/pdf`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `downloadMaternitySchedulesReports()`

```php
downloadMaternitySchedulesReports($employerId, $employeeId, $id, $leave): \SynergiTech\Staffology\Model\ReportResponse
```

Download Maternity Payment Schedule

Returns a Maternity Pay schedule for employee

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\ReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string
$employeeId = 'employeeId_example'; // string
$id = 'id_example'; // string
$leave = new \SynergiTech\Staffology\Model\Leave(); // \SynergiTech\Staffology\Model\Leave

try {
    $result = $apiInstance->downloadMaternitySchedulesReports($employerId, $employeeId, $id, $leave);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportsApi->downloadMaternitySchedulesReports: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employerId** | **string**|  | |
| **employeeId** | **string**|  | [optional] |
| **id** | **string**|  | [optional] |
| **leave** | [**\SynergiTech\Staffology\Model\Leave**](../Model/Leave.md)|  | [optional] |

### Return type

[**\SynergiTech\Staffology\Model\ReportResponse**](../Model/ReportResponse.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: `application/json-patch+json`, `application/json`, `text/json`, `application/*+json`
- **Accept**: `application/pdf`, `application/json`, `text/html`, `application/octet-stream`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `emailP11DMultipleReports()`

```php
emailP11DMultipleReports($employerId, $taxYear, $excludeEmployeesWithP11DEmailSent)
```

Email P11D to all Employees

Email P11D to all Employee

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\ReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string | The Id of the Employer.
$taxYear = new \SynergiTech\Staffology\Model\\SynergiTech\Staffology\Model\TaxYear(); // \SynergiTech\Staffology\Model\TaxYear | The TaxYear you want P11Ds for.
$excludeEmployeesWithP11DEmailSent = false; // bool | Exclude Employees with Already Sent P11D Emails.

try {
    $apiInstance->emailP11DMultipleReports($employerId, $taxYear, $excludeEmployeesWithP11DEmailSent);
} catch (Exception $e) {
    echo 'Exception when calling ReportsApi->emailP11DMultipleReports: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employerId** | **string**| The Id of the Employer. | |
| **taxYear** | [**\SynergiTech\Staffology\Model\TaxYear**](../Model/.md)| The TaxYear you want P11Ds for. | [optional] |
| **excludeEmployeesWithP11DEmailSent** | **bool**| Exclude Employees with Already Sent P11D Emails. | [optional] [default to false] |

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

## `emailP11DReports()`

```php
emailP11DReports($employerId, $employeeId, $taxYear)
```

Email P11D to an Employee

Email a P11D to an Employee

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\ReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string | The Id of the Employer.
$employeeId = 'employeeId_example'; // string | The Id of the Employee you want the email a P11D to.
$taxYear = new \SynergiTech\Staffology\Model\\SynergiTech\Staffology\Model\TaxYear(); // \SynergiTech\Staffology\Model\TaxYear | The TaxYear you want P11Ds for.

try {
    $apiInstance->emailP11DReports($employerId, $employeeId, $taxYear);
} catch (Exception $e) {
    echo 'Exception when calling ReportsApi->emailP11DReports: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employerId** | **string**| The Id of the Employer. | |
| **employeeId** | **string**| The Id of the Employee you want the email a P11D to. | |
| **taxYear** | [**\SynergiTech\Staffology\Model\TaxYear**](../Model/.md)| The TaxYear you want P11Ds for. | [optional] |

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

## `emailP45Reports()`

```php
emailP45Reports($employerId, $employeeId)
```

Email P45 to Employee

Email a P45 to an Employee you've marked as a leaver

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\ReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string | The Id of the Employer.
$employeeId = 'employeeId_example'; // string | The Id of the Employee you want the email a P45 to.

try {
    $apiInstance->emailP45Reports($employerId, $employeeId);
} catch (Exception $e) {
    echo 'Exception when calling ReportsApi->emailP45Reports: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employerId** | **string**| The Id of the Employer. | |
| **employeeId** | **string**| The Id of the Employee you want the email a P45 to. | [optional] |

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

## `emailP60MultipleReports()`

```php
emailP60MultipleReports($employerId, $taxYear, $excludeEmployeesWithP60EmailSent)
```

Email P60 to all Employees

Email P60 to all Employee

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\ReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string | The Id of the Employer.
$taxYear = new \SynergiTech\Staffology\Model\\SynergiTech\Staffology\Model\TaxYear(); // \SynergiTech\Staffology\Model\TaxYear | The TaxYear you want P60s for.
$excludeEmployeesWithP60EmailSent = false; // bool | Exclude Employees with Already Sent P60 Emails.

try {
    $apiInstance->emailP60MultipleReports($employerId, $taxYear, $excludeEmployeesWithP60EmailSent);
} catch (Exception $e) {
    echo 'Exception when calling ReportsApi->emailP60MultipleReports: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employerId** | **string**| The Id of the Employer. | |
| **taxYear** | [**\SynergiTech\Staffology\Model\TaxYear**](../Model/.md)| The TaxYear you want P60s for. | [optional] |
| **excludeEmployeesWithP60EmailSent** | **bool**| Exclude Employees with Already Sent P60 Emails. | [optional] [default to false] |

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

## `emailP60Reports()`

```php
emailP60Reports($employerId, $employeeId, $taxYear)
```

Email P60 to an Employee

Email a P60 to an Employee

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\ReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string | The Id of the Employer.
$employeeId = 'employeeId_example'; // string | The Id of the Employee you want the email a P60 to.
$taxYear = new \SynergiTech\Staffology\Model\\SynergiTech\Staffology\Model\TaxYear(); // \SynergiTech\Staffology\Model\TaxYear | The TaxYear you want P60s for.

try {
    $apiInstance->emailP60Reports($employerId, $employeeId, $taxYear);
} catch (Exception $e) {
    echo 'Exception when calling ReportsApi->emailP60Reports: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employerId** | **string**| The Id of the Employer. | |
| **employeeId** | **string**| The Id of the Employee you want the email a P60 to. | |
| **taxYear** | [**\SynergiTech\Staffology\Model\TaxYear**](../Model/.md)| The TaxYear you want P60s for. | [optional] |

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

## `employeeBenefitsReports()`

```php
employeeBenefitsReports($employerId, $taxYear, $reportType, $accept): \SynergiTech\Staffology\Model\EmployeeBenefitsReportReportResponse
```

Employee Benefits

Returns a output containing details for employee benefits.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\ReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string
$taxYear = new \SynergiTech\Staffology\Model\\SynergiTech\Staffology\Model\TaxYear(); // \SynergiTech\Staffology\Model\TaxYear
$reportType = 'reportType_example'; // string
$accept = 'accept_example'; // string

try {
    $result = $apiInstance->employeeBenefitsReports($employerId, $taxYear, $reportType, $accept);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportsApi->employeeBenefitsReports: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employerId** | **string**|  | |
| **taxYear** | [**\SynergiTech\Staffology\Model\TaxYear**](../Model/.md)|  | |
| **reportType** | **string**|  | [optional] |
| **accept** | **string**|  | [optional] |

### Return type

[**\SynergiTech\Staffology\Model\EmployeeBenefitsReportReportResponse**](../Model/EmployeeBenefitsReportReportResponse.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/csv`, `text/html`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `employeeExportReports()`

```php
employeeExportReports($employerId, $taxYear, $includeBankAccountDetails, $includeYtd, $incPensionInfo, $includePayInfo, $includeNotes, $accept): \SynergiTech\Staffology\Model\ReportResponse
```

Employee Export Details

Returns a CSV file containing details for all Employees.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\ReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string
$taxYear = new \SynergiTech\Staffology\Model\\SynergiTech\Staffology\Model\TaxYear(); // \SynergiTech\Staffology\Model\TaxYear
$includeBankAccountDetails = True; // bool
$includeYtd = True; // bool
$incPensionInfo = True; // bool
$includePayInfo = True; // bool
$includeNotes = True; // bool
$accept = 'accept_example'; // string

try {
    $result = $apiInstance->employeeExportReports($employerId, $taxYear, $includeBankAccountDetails, $includeYtd, $incPensionInfo, $includePayInfo, $includeNotes, $accept);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportsApi->employeeExportReports: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employerId** | **string**|  | [optional] |
| **taxYear** | [**\SynergiTech\Staffology\Model\TaxYear**](../Model/.md)|  | [optional] |
| **includeBankAccountDetails** | **bool**|  | [optional] |
| **includeYtd** | **bool**|  | [optional] |
| **incPensionInfo** | **bool**|  | [optional] |
| **includePayInfo** | **bool**|  | [optional] |
| **includeNotes** | **bool**|  | [optional] |
| **accept** | **string**|  | [optional] |

### Return type

[**\SynergiTech\Staffology\Model\ReportResponse**](../Model/ReportResponse.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `employeeLeaveReports()`

```php
employeeLeaveReports($employerId, $taxYear, $accept): \SynergiTech\Staffology\Model\EmployeeLeaveReportReportResponse
```

Employee Leave

Returns the Employee Leave report for the selected tax year. If the tax year is not selected, returns the Employee Leave report for all the leave entries.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\ReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string | The Id of the Employer.
$taxYear = new \SynergiTech\Staffology\Model\\SynergiTech\Staffology\Model\TaxYear(); // \SynergiTech\Staffology\Model\TaxYear
$accept = 'accept_example'; // string

try {
    $result = $apiInstance->employeeLeaveReports($employerId, $taxYear, $accept);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportsApi->employeeLeaveReports: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employerId** | **string**| The Id of the Employer. | |
| **taxYear** | [**\SynergiTech\Staffology\Model\TaxYear**](../Model/.md)|  | [optional] |
| **accept** | **string**|  | [optional] |

### Return type

[**\SynergiTech\Staffology\Model\EmployeeLeaveReportReportResponse**](../Model/EmployeeLeaveReportReportResponse.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `employeeRoleExportReports()`

```php
employeeRoleExportReports($employerId, $accept): \SynergiTech\Staffology\Model\ReportResponse
```

Employee Export Roles Details

Returns a CSV file containing details for all Employee Roles.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\ReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string
$accept = 'accept_example'; // string

try {
    $result = $apiInstance->employeeRoleExportReports($employerId, $accept);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportsApi->employeeRoleExportReports: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employerId** | **string**|  | [optional] |
| **accept** | **string**|  | [optional] |

### Return type

[**\SynergiTech\Staffology\Model\ReportResponse**](../Model/ReportResponse.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `employerChangesReports()`

```php
employerChangesReports($employerId, $fromDate, $toDate, $accept): \SynergiTech\Staffology\Model\ChangeSummaryListReportResponse
```

Gets audit changes for a company.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\ReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string | The Id of any employer to which you have access.
$fromDate = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime
$toDate = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime
$accept = 'accept_example'; // string

try {
    $result = $apiInstance->employerChangesReports($employerId, $fromDate, $toDate, $accept);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportsApi->employerChangesReports: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employerId** | **string**| The Id of any employer to which you have access. | |
| **fromDate** | **\DateTime**|  | [optional] |
| **toDate** | **\DateTime**|  | [optional] |
| **accept** | **string**|  | [optional] |

### Return type

[**\SynergiTech\Staffology\Model\ChangeSummaryListReportResponse**](../Model/ChangeSummaryListReportResponse.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `employerExportReports()`

```php
employerExportReports($employerId, $accept): \SynergiTech\Staffology\Model\ReportResponse
```

Employer Export

Returns a CSV file containing details for all Employers.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\ReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string | The Id of any employer to which you have access. It wont affect the report results.
$accept = 'accept_example'; // string

try {
    $result = $apiInstance->employerExportReports($employerId, $accept);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportsApi->employerExportReports: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employerId** | **string**| The Id of any employer to which you have access. It wont affect the report results. | |
| **accept** | **string**|  | [optional] |

### Return type

[**\SynergiTech\Staffology\Model\ReportResponse**](../Model/ReportResponse.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `examplePayslipReports()`

```php
examplePayslipReports($employerId, $accept, $payslipCustomisation): \SynergiTech\Staffology\Model\ReportResponse
```

Example Payslip

Use this operation to test your PayslipCustomisation.  We'll use dummy date and create a Payslip PDF or HTML document based on the customisation that you submit

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\ReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string
$accept = 'accept_example'; // string
$payslipCustomisation = new \SynergiTech\Staffology\Model\PayslipCustomisation(); // \SynergiTech\Staffology\Model\PayslipCustomisation | Your PayslipCustomisation.

try {
    $result = $apiInstance->examplePayslipReports($employerId, $accept, $payslipCustomisation);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportsApi->examplePayslipReports: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employerId** | **string**|  | [optional] |
| **accept** | **string**|  | [optional] |
| **payslipCustomisation** | [**\SynergiTech\Staffology\Model\PayslipCustomisation**](../Model/PayslipCustomisation.md)| Your PayslipCustomisation. | [optional] |

### Return type

[**\SynergiTech\Staffology\Model\ReportResponse**](../Model/ReportResponse.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: `application/json-patch+json`, `application/json`, `text/json`, `application/*+json`
- **Accept**: `application/json`, `application/pdf`, `text/html`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `exbReports()`

```php
exbReports($employerId, $taxYear, $id, $accept): \SynergiTech\Staffology\Model\ExbReportResponse
```

EXB

Returns an EXB as a CSV file

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\ReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string
$taxYear = new \SynergiTech\Staffology\Model\\SynergiTech\Staffology\Model\TaxYear(); // \SynergiTech\Staffology\Model\TaxYear
$id = 'id_example'; // string | The Id of EXB.
$accept = 'accept_example'; // string

try {
    $result = $apiInstance->exbReports($employerId, $taxYear, $id, $accept);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportsApi->exbReports: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employerId** | **string**|  | |
| **taxYear** | [**\SynergiTech\Staffology\Model\TaxYear**](../Model/.md)|  | |
| **id** | **string**| The Id of EXB. | |
| **accept** | **string**|  | [optional] |

### Return type

[**\SynergiTech\Staffology\Model\ExbReportResponse**](../Model/ExbReportResponse.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `fpsReports()`

```php
fpsReports($employerId, $taxYear, $id, $incAllEmployees, $accept): \SynergiTech\Staffology\Model\FpsReportResponse
```

FPS

Returns an FPS as a CSV file

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\ReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string
$taxYear = new \SynergiTech\Staffology\Model\\SynergiTech\Staffology\Model\TaxYear(); // \SynergiTech\Staffology\Model\TaxYear
$id = 'id_example'; // string | The Id of FPS.
$incAllEmployees = True; // bool | If true, then any employees that were paid earlier in the year but not on this FPS will also be included
$accept = 'accept_example'; // string

try {
    $result = $apiInstance->fpsReports($employerId, $taxYear, $id, $incAllEmployees, $accept);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportsApi->fpsReports: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employerId** | **string**|  | |
| **taxYear** | [**\SynergiTech\Staffology\Model\TaxYear**](../Model/.md)|  | |
| **id** | **string**| The Id of FPS. | |
| **incAllEmployees** | **bool**| If true, then any employees that were paid earlier in the year but not on this FPS will also be included | [optional] |
| **accept** | **string**|  | [optional] |

### Return type

[**\SynergiTech\Staffology\Model\FpsReportResponse**](../Model/FpsReportResponse.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `fullSummaryOfPayReports()`

```php
fullSummaryOfPayReports($employerId, $payPeriod, $taxYear, $period, $accept, $ordinal): \SynergiTech\Staffology\Model\FullSummaryOfPayReportReportResponse
```

Cost Of Employment

Returns a report detailing the employment cost per employee for a payrun or range of payruns.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\ReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string
$payPeriod = new \SynergiTech\Staffology\Model\\SynergiTech\Staffology\Model\PayPeriods(); // \SynergiTech\Staffology\Model\PayPeriods
$taxYear = new \SynergiTech\Staffology\Model\\SynergiTech\Staffology\Model\TaxYear(); // \SynergiTech\Staffology\Model\TaxYear
$period = 56; // int
$accept = 'accept_example'; // string
$ordinal = 1; // int

try {
    $result = $apiInstance->fullSummaryOfPayReports($employerId, $payPeriod, $taxYear, $period, $accept, $ordinal);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportsApi->fullSummaryOfPayReports: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employerId** | **string**|  | |
| **payPeriod** | [**\SynergiTech\Staffology\Model\PayPeriods**](../Model/.md)|  | |
| **taxYear** | [**\SynergiTech\Staffology\Model\TaxYear**](../Model/.md)|  | |
| **period** | **int**|  | [optional] |
| **accept** | **string**|  | [optional] |
| **ordinal** | **int**|  | [optional] [default to 1] |

### Return type

[**\SynergiTech\Staffology\Model\FullSummaryOfPayReportReportResponse**](../Model/FullSummaryOfPayReportReportResponse.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/html`, `application/pdf`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `furloughReportReports()`

```php
furloughReportReports($employerId, $payPeriod, $taxYear, $periodNumber, $accept, $ordinal): \SynergiTech\Staffology\Model\FurloughReportReportResponse
```

FurloughReport

Returns a Furlough Report.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\ReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string
$payPeriod = new \SynergiTech\Staffology\Model\\SynergiTech\Staffology\Model\PayPeriods(); // \SynergiTech\Staffology\Model\PayPeriods
$taxYear = new \SynergiTech\Staffology\Model\\SynergiTech\Staffology\Model\TaxYear(); // \SynergiTech\Staffology\Model\TaxYear
$periodNumber = 56; // int
$accept = 'accept_example'; // string
$ordinal = 1; // int

try {
    $result = $apiInstance->furloughReportReports($employerId, $payPeriod, $taxYear, $periodNumber, $accept, $ordinal);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportsApi->furloughReportReports: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employerId** | **string**|  | |
| **payPeriod** | [**\SynergiTech\Staffology\Model\PayPeriods**](../Model/.md)|  | |
| **taxYear** | [**\SynergiTech\Staffology\Model\TaxYear**](../Model/.md)|  | |
| **periodNumber** | **int**|  | |
| **accept** | **string**|  | [optional] |
| **ordinal** | **int**|  | [optional] [default to 1] |

### Return type

[**\SynergiTech\Staffology\Model\FurloughReportReportResponse**](../Model/FurloughReportReportResponse.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/csv`, `text/html`, `application/pdf`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `genderPayGapReports()`

```php
genderPayGapReports($employerId, $taxYear, $genderPayGapSnapShotDate, $ordinaryPayCodeSetId, $bonusPayCodeSetId, $accept): \SynergiTech\Staffology\Model\GenderPayGapReportReportResponse
```

Gender Pay Gap

Returns a report containing details for gender pay gap analysis.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\ReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string
$taxYear = new \SynergiTech\Staffology\Model\\SynergiTech\Staffology\Model\TaxYear(); // \SynergiTech\Staffology\Model\TaxYear
$genderPayGapSnapShotDate = new \SynergiTech\Staffology\Model\\SynergiTech\Staffology\Model\GenderPayGapSnapShotDate(); // \SynergiTech\Staffology\Model\GenderPayGapSnapShotDate
$ordinaryPayCodeSetId = 'ordinaryPayCodeSetId_example'; // string
$bonusPayCodeSetId = 'bonusPayCodeSetId_example'; // string
$accept = 'accept_example'; // string

try {
    $result = $apiInstance->genderPayGapReports($employerId, $taxYear, $genderPayGapSnapShotDate, $ordinaryPayCodeSetId, $bonusPayCodeSetId, $accept);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportsApi->genderPayGapReports: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employerId** | **string**|  | |
| **taxYear** | [**\SynergiTech\Staffology\Model\TaxYear**](../Model/.md)|  | |
| **genderPayGapSnapShotDate** | [**\SynergiTech\Staffology\Model\GenderPayGapSnapShotDate**](../Model/.md)|  | [optional] |
| **ordinaryPayCodeSetId** | **string**|  | [optional] |
| **bonusPayCodeSetId** | **string**|  | [optional] |
| **accept** | **string**|  | [optional] |

### Return type

[**\SynergiTech\Staffology\Model\GenderPayGapReportReportResponse**](../Model/GenderPayGapReportReportResponse.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/csv`, `text/html`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPayRunCsvReports()`

```php
getPayRunCsvReports($employerId, $taxYear, $payPeriod, $periodNumber, $ordinal, $csvType, $mappingId, $accept): \SynergiTech\Staffology\Model\ReportResponse
```

Get PayRun CSV

Download the lines of a PayRun to a CSV file.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\ReportsApi(
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
$csvType = new \SynergiTech\Staffology\Model\\SynergiTech\Staffology\Model\PayRunCsvType(); // \SynergiTech\Staffology\Model\PayRunCsvType | Choose the type of CSV you want to generate
$mappingId = 'mappingId_example'; // string | If you provide the id of a PaymentCsvMapping that is column based then we'll return the CSV formatted accordingly
$accept = 'application/json'; // string

try {
    $result = $apiInstance->getPayRunCsvReports($employerId, $taxYear, $payPeriod, $periodNumber, $ordinal, $csvType, $mappingId, $accept);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportsApi->getPayRunCsvReports: ', $e->getMessage(), PHP_EOL;
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
| **csvType** | [**\SynergiTech\Staffology\Model\PayRunCsvType**](../Model/.md)| Choose the type of CSV you want to generate | [optional] |
| **mappingId** | **string**| If you provide the id of a PaymentCsvMapping that is column based then we&#39;ll return the CSV formatted accordingly | [optional] |
| **accept** | **string**|  | [optional] [default to &#39;application/json&#39;] |

### Return type

[**\SynergiTech\Staffology\Model\ReportResponse**](../Model/ReportResponse.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `grossToNetReports()`

```php
grossToNetReports($employerId, $payPeriod, $taxYear, $fromPeriod, $toPeriod, $accept, $sortBy, $sortDescending, $ordinal, $forCis): \SynergiTech\Staffology\Model\GrossToNetReportReportResponse
```

Gross To Net

Returns a report comparing employees' gross pay with their net pay for one or more pay periods.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\ReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string
$payPeriod = new \SynergiTech\Staffology\Model\\SynergiTech\Staffology\Model\PayPeriods(); // \SynergiTech\Staffology\Model\PayPeriods
$taxYear = new \SynergiTech\Staffology\Model\\SynergiTech\Staffology\Model\TaxYear(); // \SynergiTech\Staffology\Model\TaxYear
$fromPeriod = 56; // int
$toPeriod = 56; // int
$accept = 'accept_example'; // string
$sortBy = new \SynergiTech\Staffology\Model\\SynergiTech\Staffology\Model\ReportSortBy(); // \SynergiTech\Staffology\Model\ReportSortBy | Defines the way to sort the data. Defaults to sorting by PayrollCode.
$sortDescending = True; // bool | Defines whether to sort the data in descending order. Defaults to false.
$ordinal = 1; // int
$forCis = false; // bool | If true then CIS Subcontractors are reported on.              If all your employees are CIS Subcontractors then this will default to true, otherwise it defaults to false

try {
    $result = $apiInstance->grossToNetReports($employerId, $payPeriod, $taxYear, $fromPeriod, $toPeriod, $accept, $sortBy, $sortDescending, $ordinal, $forCis);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportsApi->grossToNetReports: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employerId** | **string**|  | |
| **payPeriod** | [**\SynergiTech\Staffology\Model\PayPeriods**](../Model/.md)|  | |
| **taxYear** | [**\SynergiTech\Staffology\Model\TaxYear**](../Model/.md)|  | |
| **fromPeriod** | **int**|  | [optional] |
| **toPeriod** | **int**|  | [optional] |
| **accept** | **string**|  | [optional] |
| **sortBy** | [**\SynergiTech\Staffology\Model\ReportSortBy**](../Model/.md)| Defines the way to sort the data. Defaults to sorting by PayrollCode. | [optional] |
| **sortDescending** | **bool**| Defines whether to sort the data in descending order. Defaults to false. | [optional] |
| **ordinal** | **int**|  | [optional] [default to 1] |
| **forCis** | **bool**| If true then CIS Subcontractors are reported on.              If all your employees are CIS Subcontractors then this will default to true, otherwise it defaults to false | [optional] [default to false] |

### Return type

[**\SynergiTech\Staffology\Model\GrossToNetReportReportResponse**](../Model/GrossToNetReportReportResponse.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/csv`, `text/html`, `application/pdf`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `holidayReports()`

```php
holidayReports($employerId, $accept, $accruals, $accrualsHrs): \SynergiTech\Staffology\Model\HolidayReportReportResponse
```

Holiday

Returns a report summarising holiday usage for all employees.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\ReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string
$accept = 'accept_example'; // string
$accruals = false; // bool | If set to true then you'll receive a report for holiday pay accruals instead of holiday allowances. Defaults to false.
$accrualsHrs = false; // bool | If set to true then you'll receive a report for holiday pay accruals hours. Defaults to false.

try {
    $result = $apiInstance->holidayReports($employerId, $accept, $accruals, $accrualsHrs);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportsApi->holidayReports: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employerId** | **string**|  | |
| **accept** | **string**|  | [optional] |
| **accruals** | **bool**| If set to true then you&#39;ll receive a report for holiday pay accruals instead of holiday allowances. Defaults to false. | [optional] [default to false] |
| **accrualsHrs** | **bool**| If set to true then you&#39;ll receive a report for holiday pay accruals hours. Defaults to false. | [optional] [default to false] |

### Return type

[**\SynergiTech\Staffology\Model\HolidayReportReportResponse**](../Model/HolidayReportReportResponse.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/csv`, `text/html`, `application/pdf`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `hourlyPayReports()`

```php
hourlyPayReports($employerId, $payPeriod, $taxYear, $fromPeriod, $toPeriod, $accept, $ordinal): \SynergiTech\Staffology\Model\HourlyPayReportReportResponse
```

Hourly Pay

Returns a report summarising the hourly pay for employees for one or more pay periods.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\ReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string
$payPeriod = new \SynergiTech\Staffology\Model\\SynergiTech\Staffology\Model\PayPeriods(); // \SynergiTech\Staffology\Model\PayPeriods
$taxYear = new \SynergiTech\Staffology\Model\\SynergiTech\Staffology\Model\TaxYear(); // \SynergiTech\Staffology\Model\TaxYear
$fromPeriod = 56; // int
$toPeriod = 56; // int
$accept = 'accept_example'; // string
$ordinal = 1; // int

try {
    $result = $apiInstance->hourlyPayReports($employerId, $payPeriod, $taxYear, $fromPeriod, $toPeriod, $accept, $ordinal);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportsApi->hourlyPayReports: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employerId** | **string**|  | |
| **payPeriod** | [**\SynergiTech\Staffology\Model\PayPeriods**](../Model/.md)|  | |
| **taxYear** | [**\SynergiTech\Staffology\Model\TaxYear**](../Model/.md)|  | |
| **fromPeriod** | **int**|  | [optional] |
| **toPeriod** | **int**|  | [optional] |
| **accept** | **string**|  | [optional] |
| **ordinal** | **int**|  | [optional] [default to 1] |

### Return type

[**\SynergiTech\Staffology\Model\HourlyPayReportReportResponse**](../Model/HourlyPayReportReportResponse.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/csv`, `text/html`, `application/pdf`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `loanBalancesReports()`

```php
loanBalancesReports($employerId, $payPeriod, $accept, $ordinal): \SynergiTech\Staffology\Model\LoanBalancesReportReportResponse
```

Loan Balances

Returns the Loan Balances report for the given pay schedule

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\ReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string | The Id of the Employer.
$payPeriod = new \SynergiTech\Staffology\Model\\SynergiTech\Staffology\Model\PayPeriods(); // \SynergiTech\Staffology\Model\PayPeriods
$accept = 'accept_example'; // string
$ordinal = 1; // int

try {
    $result = $apiInstance->loanBalancesReports($employerId, $payPeriod, $accept, $ordinal);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportsApi->loanBalancesReports: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employerId** | **string**| The Id of the Employer. | |
| **payPeriod** | [**\SynergiTech\Staffology\Model\PayPeriods**](../Model/.md)|  | |
| **accept** | **string**|  | [optional] |
| **ordinal** | **int**|  | [optional] [default to 1] |

### Return type

[**\SynergiTech\Staffology\Model\LoanBalancesReportReportResponse**](../Model/LoanBalancesReportReportResponse.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/pdf`, `text/html`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `niLetterValidationReportEmployeesReports()`

```php
niLetterValidationReportEmployeesReports($employerId, $accept, $payDate, $payPeriod): \SynergiTech\Staffology\Model\NiLetterValidationReportReportResponse
```

NI Letter Validation (Employees)

Checks the NI Letters allocated to your employees. If no pay date is provided, the checks are based on today's date.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\ReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string
$accept = 'accept_example'; // string
$payDate = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime
$payPeriod = new \SynergiTech\Staffology\Model\\SynergiTech\Staffology\Model\PayPeriods(); // \SynergiTech\Staffology\Model\PayPeriods

try {
    $result = $apiInstance->niLetterValidationReportEmployeesReports($employerId, $accept, $payDate, $payPeriod);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportsApi->niLetterValidationReportEmployeesReports: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employerId** | **string**|  | |
| **accept** | **string**|  | [optional] |
| **payDate** | **\DateTime**|  | [optional] |
| **payPeriod** | [**\SynergiTech\Staffology\Model\PayPeriods**](../Model/.md)|  | [optional] |

### Return type

[**\SynergiTech\Staffology\Model\NiLetterValidationReportReportResponse**](../Model/NiLetterValidationReportReportResponse.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/html`, `application/pdf`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `niLetterValidationReportReports()`

```php
niLetterValidationReportReports($employerId, $payPeriod, $taxYear, $periodNumber, $accept, $ordinal): \SynergiTech\Staffology\Model\NiLetterValidationReportReportResponse
```

NI Letter Validation (Payrun)

Checks the NI Letters allocated to employees on a specific payrun

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\ReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string
$payPeriod = new \SynergiTech\Staffology\Model\\SynergiTech\Staffology\Model\PayPeriods(); // \SynergiTech\Staffology\Model\PayPeriods
$taxYear = new \SynergiTech\Staffology\Model\\SynergiTech\Staffology\Model\TaxYear(); // \SynergiTech\Staffology\Model\TaxYear
$periodNumber = 56; // int
$accept = 'accept_example'; // string
$ordinal = 1; // int

try {
    $result = $apiInstance->niLetterValidationReportReports($employerId, $payPeriod, $taxYear, $periodNumber, $accept, $ordinal);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportsApi->niLetterValidationReportReports: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employerId** | **string**|  | |
| **payPeriod** | [**\SynergiTech\Staffology\Model\PayPeriods**](../Model/.md)|  | |
| **taxYear** | [**\SynergiTech\Staffology\Model\TaxYear**](../Model/.md)|  | |
| **periodNumber** | **int**|  | |
| **accept** | **string**|  | [optional] |
| **ordinal** | **int**|  | [optional] [default to 1] |

### Return type

[**\SynergiTech\Staffology\Model\NiLetterValidationReportReportResponse**](../Model/NiLetterValidationReportReportResponse.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/html`, `application/pdf`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `niYtdReports()`

```php
niYtdReports($employerId, $accept): \SynergiTech\Staffology\Model\ReportResponse
```

NI Year To Date Values

Returns a CSV file containing NI YTD values for all Employees.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\ReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string
$accept = 'accept_example'; // string

try {
    $result = $apiInstance->niYtdReports($employerId, $accept);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportsApi->niYtdReports: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employerId** | **string**|  | [optional] |
| **accept** | **string**|  | [optional] |

### Return type

[**\SynergiTech\Staffology\Model\ReportResponse**](../Model/ReportResponse.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `p11DMultipleReports()`

```php
p11DMultipleReports($employerId, $taxYear, $accept, $excludeEmployeesWithP11dEmailSent): \SynergiTech\Staffology\Model\ReportResponse
```

All P11Ds For TaxYear

Returns all P11Ds in a single PDF file for the TaxYear and Employer specified  If you set the accept header to \"text/html\" then unlike other reports the html is NOT in the ```Content``` field.  As there are multiple HTML documents they are encoded as a JSON array of strings in the ```Model``` field.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\ReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string | The Id of the Employer.
$taxYear = new \SynergiTech\Staffology\Model\\SynergiTech\Staffology\Model\TaxYear(); // \SynergiTech\Staffology\Model\TaxYear | The TaxYear you want P11Ds for.
$accept = 'accept_example'; // string
$excludeEmployeesWithP11dEmailSent = false; // bool | Exclude Employees with Already Sent P11Ds Emails.

try {
    $result = $apiInstance->p11DMultipleReports($employerId, $taxYear, $accept, $excludeEmployeesWithP11dEmailSent);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportsApi->p11DMultipleReports: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employerId** | **string**| The Id of the Employer. | |
| **taxYear** | [**\SynergiTech\Staffology\Model\TaxYear**](../Model/.md)| The TaxYear you want P11Ds for. | |
| **accept** | **string**|  | [optional] |
| **excludeEmployeesWithP11dEmailSent** | **bool**| Exclude Employees with Already Sent P11Ds Emails. | [optional] [default to false] |

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

## `p11DReports()`

```php
p11DReports($employerId, $employeeId, $taxYear, $accept): \SynergiTech\Staffology\Model\ReportResponse
```

P11D For Employee

Gets a P11D in PDF format for the TaxYear and Employee specified. A URL is returned which points to the PDF file.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\ReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string | The Id of the Employer.
$employeeId = 'employeeId_example'; // string | The Id of the Employee.
$taxYear = new \SynergiTech\Staffology\Model\\SynergiTech\Staffology\Model\TaxYear(); // \SynergiTech\Staffology\Model\TaxYear | The TaxYear the P60 is for.
$accept = 'accept_example'; // string

try {
    $result = $apiInstance->p11DReports($employerId, $employeeId, $taxYear, $accept);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportsApi->p11DReports: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employerId** | **string**| The Id of the Employer. | |
| **employeeId** | **string**| The Id of the Employee. | |
| **taxYear** | [**\SynergiTech\Staffology\Model\TaxYear**](../Model/.md)| The TaxYear the P60 is for. | |
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

## `p11DetailedMultipleReports()`

```php
p11DetailedMultipleReports($employerId, $taxYear, $accept): \SynergiTech\Staffology\Model\ReportResponse
```

All Detailed P11s For TaxYear

Returns all detailed P11s in a single PDF file for the TaxYear and Employer specified  If you set the accept header to \"text/html\" then unlike other reports the html is NOT in the ```Content``` field.  As there are multiple HTML documents they are encoded as a JSON array of strings in the ```Model``` field.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\ReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string | The Id of the employer you want to report on
$taxYear = new \SynergiTech\Staffology\Model\\SynergiTech\Staffology\Model\TaxYear(); // \SynergiTech\Staffology\Model\TaxYear | The tax year you want to report on.
$accept = 'accept_example'; // string

try {
    $result = $apiInstance->p11DetailedMultipleReports($employerId, $taxYear, $accept);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportsApi->p11DetailedMultipleReports: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employerId** | **string**| The Id of the employer you want to report on | |
| **taxYear** | [**\SynergiTech\Staffology\Model\TaxYear**](../Model/.md)| The tax year you want to report on. | |
| **accept** | **string**|  | [optional] |

### Return type

[**\SynergiTech\Staffology\Model\ReportResponse**](../Model/ReportResponse.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/pdf`, `text/html`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `p11DetailedReports()`

```php
p11DetailedReports($employerId, $employeeId, $taxYear, $accept): \SynergiTech\Staffology\Model\P11DetailedReportResponse
```

P11 (Detailed)

Returns a detailed P11 Report for the given employee.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\ReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string
$employeeId = 'employeeId_example'; // string | The employee Id of the employee you want to report on
$taxYear = new \SynergiTech\Staffology\Model\\SynergiTech\Staffology\Model\TaxYear(); // \SynergiTech\Staffology\Model\TaxYear | The tax year you want to report on.
$accept = 'accept_example'; // string

try {
    $result = $apiInstance->p11DetailedReports($employerId, $employeeId, $taxYear, $accept);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportsApi->p11DetailedReports: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employerId** | **string**|  | |
| **employeeId** | **string**| The employee Id of the employee you want to report on | |
| **taxYear** | [**\SynergiTech\Staffology\Model\TaxYear**](../Model/.md)| The tax year you want to report on. | |
| **accept** | **string**|  | [optional] |

### Return type

[**\SynergiTech\Staffology\Model\P11DetailedReportResponse**](../Model/P11DetailedReportResponse.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/pdf`, `application/json`, `text/html`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `p11Reports()`

```php
p11Reports($employerId, $employeeId, $taxYear, $accept): \SynergiTech\Staffology\Model\P11ReportResponse
```

P11

Returns a P11 Report, detailing all payments and deductions for the given employee

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\ReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string
$employeeId = 'employeeId_example'; // string | The employee Id of the employee you want to report on
$taxYear = new \SynergiTech\Staffology\Model\\SynergiTech\Staffology\Model\TaxYear(); // \SynergiTech\Staffology\Model\TaxYear | The tax year you want to report on.
$accept = 'accept_example'; // string

try {
    $result = $apiInstance->p11Reports($employerId, $employeeId, $taxYear, $accept);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportsApi->p11Reports: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employerId** | **string**|  | |
| **employeeId** | **string**| The employee Id of the employee you want to report on | |
| **taxYear** | [**\SynergiTech\Staffology\Model\TaxYear**](../Model/.md)| The tax year you want to report on. | |
| **accept** | **string**|  | [optional] |

### Return type

[**\SynergiTech\Staffology\Model\P11ReportResponse**](../Model/P11ReportResponse.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/pdf`, `application/json`, `text/csv`, `text/html`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `p30Reports()`

```php
p30Reports($employerId, $taxYear, $periodEnding, $accept): \SynergiTech\Staffology\Model\ReportResponse
```

P30

Returns a P30 Report summarising the employers HMRC liabilities for the period.  For available periods retrieve a list of HmrcLiability and examine the metadata.  If the accept header is set to \"text/csv\" then the periodEnding parameter is ignored and you'll receive a CSV for the entire TaxYear.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\ReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string
$taxYear = new \SynergiTech\Staffology\Model\\SynergiTech\Staffology\Model\TaxYear(); // \SynergiTech\Staffology\Model\TaxYear
$periodEnding = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime
$accept = 'accept_example'; // string

try {
    $result = $apiInstance->p30Reports($employerId, $taxYear, $periodEnding, $accept);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportsApi->p30Reports: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employerId** | **string**|  | |
| **taxYear** | [**\SynergiTech\Staffology\Model\TaxYear**](../Model/.md)|  | |
| **periodEnding** | **\DateTime**|  | |
| **accept** | **string**|  | [optional] |

### Return type

[**\SynergiTech\Staffology\Model\ReportResponse**](../Model/ReportResponse.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/pdf`, `text/csv`, `text/html`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `p32Reports()`

```php
p32Reports($employerId, $taxYear, $accept): \SynergiTech\Staffology\Model\P32ReportResponse
```

P32

Returns a P32 Report detailing the employers HMRC liabilities for the year.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\ReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string
$taxYear = new \SynergiTech\Staffology\Model\\SynergiTech\Staffology\Model\TaxYear(); // \SynergiTech\Staffology\Model\TaxYear
$accept = 'accept_example'; // string

try {
    $result = $apiInstance->p32Reports($employerId, $taxYear, $accept);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportsApi->p32Reports: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employerId** | **string**|  | |
| **taxYear** | [**\SynergiTech\Staffology\Model\TaxYear**](../Model/.md)|  | |
| **accept** | **string**|  | [optional] |

### Return type

[**\SynergiTech\Staffology\Model\P32ReportResponse**](../Model/P32ReportResponse.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/html`, `application/pdf`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `p45Reports()`

```php
p45Reports($employerId, $employeeId, $accept): \SynergiTech\Staffology\Model\ReportResponse
```

P45 For Employee

Get a P45 for an Employee you've marked as a leaver

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\ReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string | The Id of the Employer.
$employeeId = 'employeeId_example'; // string | The Id of the Employee you want a P45 for.
$accept = 'accept_example'; // string

try {
    $result = $apiInstance->p45Reports($employerId, $employeeId, $accept);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportsApi->p45Reports: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employerId** | **string**| The Id of the Employer. | |
| **employeeId** | **string**| The Id of the Employee you want a P45 for. | [optional] |
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

## `p60MultipleReports()`

```php
p60MultipleReports($employerId, $taxYear, $accept, $excludeEmployeesWithP60EmailSent): \SynergiTech\Staffology\Model\ReportResponse
```

All P60s For TaxYear

Returns all P60s in a single PDF file for the TaxYear and Employer specified  If you set the accept header to \"text/html\" then unlike other reports the html is NOT in the ```Content``` field.  As there are multiple HTML documents they are encoded as a JSON array of strings in the ```Model``` field.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\ReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string | The Id of the Employer.
$taxYear = new \SynergiTech\Staffology\Model\\SynergiTech\Staffology\Model\TaxYear(); // \SynergiTech\Staffology\Model\TaxYear | The TaxYear you want P60s for.
$accept = 'accept_example'; // string
$excludeEmployeesWithP60EmailSent = false; // bool | Exclude Employees with Already Sent P60 Emails.

try {
    $result = $apiInstance->p60MultipleReports($employerId, $taxYear, $accept, $excludeEmployeesWithP60EmailSent);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportsApi->p60MultipleReports: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employerId** | **string**| The Id of the Employer. | |
| **taxYear** | [**\SynergiTech\Staffology\Model\TaxYear**](../Model/.md)| The TaxYear you want P60s for. | |
| **accept** | **string**|  | [optional] |
| **excludeEmployeesWithP60EmailSent** | **bool**| Exclude Employees with Already Sent P60 Emails. | [optional] [default to false] |

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

## `p60Reports()`

```php
p60Reports($employerId, $employeeId, $taxYear, $accept): \SynergiTech\Staffology\Model\ReportResponse
```

P60 For Employee

Gets a P60 in PDF format for the TaxYear and Employee specified. A URL is returned which points to the PDF file.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\ReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string | The Id of the Employer.
$employeeId = 'employeeId_example'; // string | The Id of the Employee.
$taxYear = new \SynergiTech\Staffology\Model\\SynergiTech\Staffology\Model\TaxYear(); // \SynergiTech\Staffology\Model\TaxYear | The TaxYear the P60 is for.
$accept = 'accept_example'; // string

try {
    $result = $apiInstance->p60Reports($employerId, $employeeId, $taxYear, $accept);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportsApi->p60Reports: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employerId** | **string**| The Id of the Employer. | |
| **employeeId** | **string**| The Id of the Employee. | |
| **taxYear** | [**\SynergiTech\Staffology\Model\TaxYear**](../Model/.md)| The TaxYear the P60 is for. | |
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

## `papdisFileReports()`

```php
papdisFileReports($employerId, $payPeriod, $periodNumber, $taxYear, $schemeId, $accept, $ordinal, $csvFormat): \SynergiTech\Staffology\Model\PapdisDocumentReportResponse
```

PAPDIS File

Returns a PAPDIS compliant file for the PayRun and Pension Provider PAPDIS Id specified

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\ReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string
$payPeriod = new \SynergiTech\Staffology\Model\\SynergiTech\Staffology\Model\PayPeriods(); // \SynergiTech\Staffology\Model\PayPeriods
$periodNumber = 56; // int
$taxYear = new \SynergiTech\Staffology\Model\\SynergiTech\Staffology\Model\TaxYear(); // \SynergiTech\Staffology\Model\TaxYear
$schemeId = 'schemeId_example'; // string | The Id of the Pension Scheme you want a file for.
$accept = 'accept_example'; // string
$ordinal = 1; // int
$csvFormat = new \SynergiTech\Staffology\Model\\SynergiTech\Staffology\Model\PensionCsvFormat(); // \SynergiTech\Staffology\Model\PensionCsvFormat

try {
    $result = $apiInstance->papdisFileReports($employerId, $payPeriod, $periodNumber, $taxYear, $schemeId, $accept, $ordinal, $csvFormat);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportsApi->papdisFileReports: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employerId** | **string**|  | |
| **payPeriod** | [**\SynergiTech\Staffology\Model\PayPeriods**](../Model/.md)|  | |
| **periodNumber** | **int**|  | |
| **taxYear** | [**\SynergiTech\Staffology\Model\TaxYear**](../Model/.md)|  | |
| **schemeId** | **string**| The Id of the Pension Scheme you want a file for. | [optional] |
| **accept** | **string**|  | [optional] |
| **ordinal** | **int**|  | [optional] [default to 1] |
| **csvFormat** | [**\SynergiTech\Staffology\Model\PensionCsvFormat**](../Model/.md)|  | [optional] |

### Return type

[**\SynergiTech\Staffology\Model\PapdisDocumentReportResponse**](../Model/PapdisDocumentReportResponse.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/pdf`, `application/json`, `text/csv`, `text/xml`, `text/html`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `payCodeExportReports()`

```php
payCodeExportReports($employerId, $accept): \SynergiTech\Staffology\Model\ReportResponse
```

Pay Code Export Details

Returns details for all Pay Codes.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\ReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string
$accept = 'accept_example'; // string

try {
    $result = $apiInstance->payCodeExportReports($employerId, $accept);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportsApi->payCodeExportReports: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employerId** | **string**|  | |
| **accept** | **string**|  | [optional] |

### Return type

[**\SynergiTech\Staffology\Model\ReportResponse**](../Model/ReportResponse.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `payElementReports()`

```php
payElementReports($employerId, $payPeriod, $taxYear, $fromPeriod, $toPeriod, $payCodes, $accept, $ordinal): \SynergiTech\Staffology\Model\PayElementReportReportResponse
```

Pay Element

Returns a report detailing pay elements for one or more pay periods.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\ReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string
$payPeriod = new \SynergiTech\Staffology\Model\\SynergiTech\Staffology\Model\PayPeriods(); // \SynergiTech\Staffology\Model\PayPeriods
$taxYear = new \SynergiTech\Staffology\Model\\SynergiTech\Staffology\Model\TaxYear(); // \SynergiTech\Staffology\Model\TaxYear
$fromPeriod = 56; // int
$toPeriod = 56; // int
$payCodes = 'payCodes_example'; // string | Comma separated values of pay codes, e.g., (BASIC,BASICANNUAL,BASICDAILY)
$accept = 'accept_example'; // string
$ordinal = 1; // int

try {
    $result = $apiInstance->payElementReports($employerId, $payPeriod, $taxYear, $fromPeriod, $toPeriod, $payCodes, $accept, $ordinal);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportsApi->payElementReports: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employerId** | **string**|  | |
| **payPeriod** | [**\SynergiTech\Staffology\Model\PayPeriods**](../Model/.md)|  | |
| **taxYear** | [**\SynergiTech\Staffology\Model\TaxYear**](../Model/.md)|  | |
| **fromPeriod** | **int**|  | [optional] |
| **toPeriod** | **int**|  | [optional] |
| **payCodes** | **string**| Comma separated values of pay codes, e.g., (BASIC,BASICANNUAL,BASICDAILY) | [optional] |
| **accept** | **string**|  | [optional] |
| **ordinal** | **int**|  | [optional] [default to 1] |

### Return type

[**\SynergiTech\Staffology\Model\PayElementReportReportResponse**](../Model/PayElementReportReportResponse.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/csv`, `text/html`, `application/pdf`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `payGradesReports()`

```php
payGradesReports($employerId, $effectiveDateFrom, $effectiveDateTo, $paySpineId, $accept): \SynergiTech\Staffology\Model\PayGradesReportReportResponse
```

Pay Grade

Returns a report for Pay Grade.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\ReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string
$effectiveDateFrom = 'effectiveDateFrom_example'; // string
$effectiveDateTo = 'effectiveDateTo_example'; // string
$paySpineId = 'paySpineId_example'; // string
$accept = 'accept_example'; // string

try {
    $result = $apiInstance->payGradesReports($employerId, $effectiveDateFrom, $effectiveDateTo, $paySpineId, $accept);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportsApi->payGradesReports: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employerId** | **string**|  | |
| **effectiveDateFrom** | **string**|  | [optional] |
| **effectiveDateTo** | **string**|  | [optional] |
| **paySpineId** | **string**|  | [optional] |
| **accept** | **string**|  | [optional] |

### Return type

[**\SynergiTech\Staffology\Model\PayGradesReportReportResponse**](../Model/PayGradesReportReportResponse.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/csv`, `text/html`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `payRunCsvReports()`

```php
payRunCsvReports($employerId, $payPeriod, $periodNumber, $taxYear, $accept, $ordinal, $summary): \SynergiTech\Staffology\Model\ReportResponse
```

PayRun CSV (deprecated)

Download the lines of a PayRun to a CSV file.  Please use Get PayRun CSV that now accepts a parameter for CSV type

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\ReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string
$payPeriod = new \SynergiTech\Staffology\Model\\SynergiTech\Staffology\Model\PayPeriods(); // \SynergiTech\Staffology\Model\PayPeriods
$periodNumber = 56; // int
$taxYear = new \SynergiTech\Staffology\Model\\SynergiTech\Staffology\Model\TaxYear(); // \SynergiTech\Staffology\Model\TaxYear
$accept = 'accept_example'; // string
$ordinal = 1; // int
$summary = false; // bool | If set to true then instead of a line-by-line CSV, you'll receive a summary for each employee

try {
    $result = $apiInstance->payRunCsvReports($employerId, $payPeriod, $periodNumber, $taxYear, $accept, $ordinal, $summary);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportsApi->payRunCsvReports: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employerId** | **string**|  | |
| **payPeriod** | [**\SynergiTech\Staffology\Model\PayPeriods**](../Model/.md)|  | |
| **periodNumber** | **int**|  | |
| **taxYear** | [**\SynergiTech\Staffology\Model\TaxYear**](../Model/.md)|  | |
| **accept** | **string**|  | [optional] |
| **ordinal** | **int**|  | [optional] [default to 1] |
| **summary** | **bool**| If set to true then instead of a line-by-line CSV, you&#39;ll receive a summary for each employee | [optional] [default to false] |

### Return type

[**\SynergiTech\Staffology\Model\ReportResponse**](../Model/ReportResponse.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `payRunPaymentsReports()`

```php
payRunPaymentsReports($employerId, $payPeriod, $periodNumber, $taxYear, $accept, $bankHoliday, $ordinal, $includeNonEmployeePayments): \SynergiTech\Staffology\Model\PayrunPaymentsReportReportResponse
```

PayRun Payments

Returns a list of all employee payments that need to be made as a result of a Payrun.  If you specifically want just bank payments (employees where PayMethod is Credit) then you  may find the Bank Payment Instructions API call more useful

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\ReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string
$payPeriod = new \SynergiTech\Staffology\Model\\SynergiTech\Staffology\Model\PayPeriods(); // \SynergiTech\Staffology\Model\PayPeriods
$periodNumber = 56; // int
$taxYear = new \SynergiTech\Staffology\Model\\SynergiTech\Staffology\Model\TaxYear(); // \SynergiTech\Staffology\Model\TaxYear
$accept = 'accept_example'; // string
$bankHoliday = new \SynergiTech\Staffology\Model\\SynergiTech\Staffology\Model\BankHolidayCollection(); // \SynergiTech\Staffology\Model\BankHolidayCollection | Specifies the region whose bank holidays are to be considered in the operation.
$ordinal = 1; // int
$includeNonEmployeePayments = false; // bool | If set to true then we'll also include payments that need to be made to HMRC and PensionProviders

try {
    $result = $apiInstance->payRunPaymentsReports($employerId, $payPeriod, $periodNumber, $taxYear, $accept, $bankHoliday, $ordinal, $includeNonEmployeePayments);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportsApi->payRunPaymentsReports: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employerId** | **string**|  | |
| **payPeriod** | [**\SynergiTech\Staffology\Model\PayPeriods**](../Model/.md)|  | |
| **periodNumber** | **int**|  | |
| **taxYear** | [**\SynergiTech\Staffology\Model\TaxYear**](../Model/.md)|  | |
| **accept** | **string**|  | [optional] |
| **bankHoliday** | [**\SynergiTech\Staffology\Model\BankHolidayCollection**](../Model/.md)| Specifies the region whose bank holidays are to be considered in the operation. | [optional] |
| **ordinal** | **int**|  | [optional] [default to 1] |
| **includeNonEmployeePayments** | **bool**| If set to true then we&#39;ll also include payments that need to be made to HMRC and PensionProviders | [optional] [default to false] |

### Return type

[**\SynergiTech\Staffology\Model\PayrunPaymentsReportReportResponse**](../Model/PayrunPaymentsReportReportResponse.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/csv`, `text/html`, `application/pdf`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `payRunSummaryReports()`

```php
payRunSummaryReports($employerId, $payPeriod, $taxYear, $fromPeriod, $toPeriod, $accept, $ordinal, $deptCode, $includeQty): \SynergiTech\Staffology\Model\PayRunSummaryLineIEnumerableReportResponse
```

PayRunSummary

Returns an array of PayRunSummaryLine for one or multiple periods. Similar to a PayRunJournal except that it can cover multiple periods.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\ReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string
$payPeriod = new \SynergiTech\Staffology\Model\\SynergiTech\Staffology\Model\PayPeriods(); // \SynergiTech\Staffology\Model\PayPeriods
$taxYear = new \SynergiTech\Staffology\Model\\SynergiTech\Staffology\Model\TaxYear(); // \SynergiTech\Staffology\Model\TaxYear
$fromPeriod = 56; // int
$toPeriod = 56; // int
$accept = 'accept_example'; // string
$ordinal = 1; // int
$deptCode = 'deptCode_example'; // string | If specified then only employees assigned to this department code at the time of the payrun will be included
$includeQty = false; // bool | If set to true and acceptType is text/csv, then where a PayCode on a PayLine is a multiplier code we'll include a Qty value for the number of days/hours

try {
    $result = $apiInstance->payRunSummaryReports($employerId, $payPeriod, $taxYear, $fromPeriod, $toPeriod, $accept, $ordinal, $deptCode, $includeQty);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportsApi->payRunSummaryReports: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employerId** | **string**|  | |
| **payPeriod** | [**\SynergiTech\Staffology\Model\PayPeriods**](../Model/.md)|  | |
| **taxYear** | [**\SynergiTech\Staffology\Model\TaxYear**](../Model/.md)|  | |
| **fromPeriod** | **int**|  | [optional] |
| **toPeriod** | **int**|  | [optional] |
| **accept** | **string**|  | [optional] |
| **ordinal** | **int**|  | [optional] [default to 1] |
| **deptCode** | **string**| If specified then only employees assigned to this department code at the time of the payrun will be included | [optional] |
| **includeQty** | **bool**| If set to true and acceptType is text/csv, then where a PayCode on a PayLine is a multiplier code we&#39;ll include a Qty value for the number of days/hours | [optional] [default to false] |

### Return type

[**\SynergiTech\Staffology\Model\PayRunSummaryLineIEnumerableReportResponse**](../Model/PayRunSummaryLineIEnumerableReportResponse.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `paySpineReports()`

```php
paySpineReports($employerId, $paySpineId, $accept): \SynergiTech\Staffology\Model\PaySpineReportReportResponse
```

Pay Spine

Returns a report for Pay Spine.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\ReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string
$paySpineId = 'paySpineId_example'; // string
$accept = 'accept_example'; // string

try {
    $result = $apiInstance->paySpineReports($employerId, $paySpineId, $accept);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportsApi->paySpineReports: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employerId** | **string**|  | |
| **paySpineId** | **string**|  | [optional] |
| **accept** | **string**|  | [optional] |

### Return type

[**\SynergiTech\Staffology\Model\PaySpineReportReportResponse**](../Model/PaySpineReportReportResponse.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/csv`, `text/html`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `payrollAnalysisCostBreakdownReports()`

```php
payrollAnalysisCostBreakdownReports($employerId, $payPeriod, $taxYear, $fromPeriod, $toPeriod, $accept, $ordinal, $deptCode): \SynergiTech\Staffology\Model\PayrollAnalysisCostBreakdownReportReportResponse
```

Analysis Cost Breakdown

Returns an AnalysisCostBreakdownReport for one or multiple periods.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\ReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string
$payPeriod = new \SynergiTech\Staffology\Model\\SynergiTech\Staffology\Model\PayPeriods(); // \SynergiTech\Staffology\Model\PayPeriods
$taxYear = new \SynergiTech\Staffology\Model\\SynergiTech\Staffology\Model\TaxYear(); // \SynergiTech\Staffology\Model\TaxYear
$fromPeriod = 56; // int
$toPeriod = 56; // int
$accept = 'accept_example'; // string
$ordinal = 1; // int
$deptCode = 'deptCode_example'; // string | If specified then only employees assigned to this department code at the time of the payrun will be included

try {
    $result = $apiInstance->payrollAnalysisCostBreakdownReports($employerId, $payPeriod, $taxYear, $fromPeriod, $toPeriod, $accept, $ordinal, $deptCode);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportsApi->payrollAnalysisCostBreakdownReports: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employerId** | **string**|  | |
| **payPeriod** | [**\SynergiTech\Staffology\Model\PayPeriods**](../Model/.md)|  | |
| **taxYear** | [**\SynergiTech\Staffology\Model\TaxYear**](../Model/.md)|  | |
| **fromPeriod** | **int**|  | [optional] |
| **toPeriod** | **int**|  | [optional] |
| **accept** | **string**|  | [optional] |
| **ordinal** | **int**|  | [optional] [default to 1] |
| **deptCode** | **string**| If specified then only employees assigned to this department code at the time of the payrun will be included | [optional] |

### Return type

[**\SynergiTech\Staffology\Model\PayrollAnalysisCostBreakdownReportReportResponse**](../Model/PayrollAnalysisCostBreakdownReportReportResponse.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `payrollAnalysisEmployeeRoleBreakdownReports()`

```php
payrollAnalysisEmployeeRoleBreakdownReports($employerId, $payPeriod, $taxYear, $fromPeriod, $toPeriod, $accept, $ordinal, $deptCode): \SynergiTech\Staffology\Model\PayrollAnalysisEmployeeRoleBreakdownReportReportResponse
```

Payroll Analysis with Employee Role Breakdown

Return a Payroll Analysis Report with Employee Role Breakdown for a specified pay period.  If a department code is specified, only employees assigned to this department at the time of the payrun will be included.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\ReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string
$payPeriod = new \SynergiTech\Staffology\Model\\SynergiTech\Staffology\Model\PayPeriods(); // \SynergiTech\Staffology\Model\PayPeriods
$taxYear = new \SynergiTech\Staffology\Model\\SynergiTech\Staffology\Model\TaxYear(); // \SynergiTech\Staffology\Model\TaxYear
$fromPeriod = 56; // int
$toPeriod = 56; // int
$accept = 'accept_example'; // string
$ordinal = 1; // int
$deptCode = 'deptCode_example'; // string | Optional. Filters employees by department code.

try {
    $result = $apiInstance->payrollAnalysisEmployeeRoleBreakdownReports($employerId, $payPeriod, $taxYear, $fromPeriod, $toPeriod, $accept, $ordinal, $deptCode);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportsApi->payrollAnalysisEmployeeRoleBreakdownReports: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employerId** | **string**|  | |
| **payPeriod** | [**\SynergiTech\Staffology\Model\PayPeriods**](../Model/.md)|  | |
| **taxYear** | [**\SynergiTech\Staffology\Model\TaxYear**](../Model/.md)|  | |
| **fromPeriod** | **int**|  | [optional] |
| **toPeriod** | **int**|  | [optional] |
| **accept** | **string**|  | [optional] |
| **ordinal** | **int**|  | [optional] [default to 1] |
| **deptCode** | **string**| Optional. Filters employees by department code. | [optional] |

### Return type

[**\SynergiTech\Staffology\Model\PayrollAnalysisEmployeeRoleBreakdownReportReportResponse**](../Model/PayrollAnalysisEmployeeRoleBreakdownReportReportResponse.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `payrollJournalCsvReportReports()`

```php
payrollJournalCsvReportReports($employerId, $payPeriod, $periodNumber, $taxYear, $accept, $ordinal, $deptBreakdown): \SynergiTech\Staffology\Model\ReportResponse
```

Payroll Journal CSV

Download the lines of Payroll Journal to CSV file.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\ReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string
$payPeriod = new \SynergiTech\Staffology\Model\\SynergiTech\Staffology\Model\PayPeriods(); // \SynergiTech\Staffology\Model\PayPeriods
$periodNumber = 56; // int
$taxYear = new \SynergiTech\Staffology\Model\\SynergiTech\Staffology\Model\TaxYear(); // \SynergiTech\Staffology\Model\TaxYear
$accept = 'accept_example'; // string
$ordinal = 1; // int
$deptBreakdown = false; // bool | Set to true and the journal will be split between any relevant Departments

try {
    $result = $apiInstance->payrollJournalCsvReportReports($employerId, $payPeriod, $periodNumber, $taxYear, $accept, $ordinal, $deptBreakdown);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportsApi->payrollJournalCsvReportReports: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employerId** | **string**|  | |
| **payPeriod** | [**\SynergiTech\Staffology\Model\PayPeriods**](../Model/.md)|  | |
| **periodNumber** | **int**|  | |
| **taxYear** | [**\SynergiTech\Staffology\Model\TaxYear**](../Model/.md)|  | |
| **accept** | **string**|  | [optional] |
| **ordinal** | **int**|  | [optional] [default to 1] |
| **deptBreakdown** | **bool**| Set to true and the journal will be split between any relevant Departments | [optional] [default to false] |

### Return type

[**\SynergiTech\Staffology\Model\ReportResponse**](../Model/ReportResponse.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `payrunNiYtdReports()`

```php
payrunNiYtdReports($employerId, $payPeriod, $periodNumber, $taxYear, $ordinal, $accept): \SynergiTech\Staffology\Model\NiYtdReportReportResponse
```

NI Year To Date Values

Returns a CSV file containing NI YTD values for all Employees on the payrun.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\ReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string
$payPeriod = new \SynergiTech\Staffology\Model\\SynergiTech\Staffology\Model\PayPeriods(); // \SynergiTech\Staffology\Model\PayPeriods
$periodNumber = 56; // int
$taxYear = new \SynergiTech\Staffology\Model\\SynergiTech\Staffology\Model\TaxYear(); // \SynergiTech\Staffology\Model\TaxYear
$ordinal = 56; // int
$accept = 'accept_example'; // string

try {
    $result = $apiInstance->payrunNiYtdReports($employerId, $payPeriod, $periodNumber, $taxYear, $ordinal, $accept);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportsApi->payrunNiYtdReports: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employerId** | **string**|  | |
| **payPeriod** | [**\SynergiTech\Staffology\Model\PayPeriods**](../Model/.md)|  | |
| **periodNumber** | **int**|  | |
| **taxYear** | [**\SynergiTech\Staffology\Model\TaxYear**](../Model/.md)|  | |
| **ordinal** | **int**|  | [optional] |
| **accept** | **string**|  | [optional] |

### Return type

[**\SynergiTech\Staffology\Model\NiYtdReportReportResponse**](../Model/NiYtdReportReportResponse.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/csv`, `text/html`, `application/pdf`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `payrunYtdReports()`

```php
payrunYtdReports($employerId, $payPeriod, $periodNumber, $taxYear, $ordinal, $accept): \SynergiTech\Staffology\Model\YtdReportReportResponse
```

Year To Date Values

Returns a CSV file containing YTD values for all Employees on the payrun.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\ReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string
$payPeriod = new \SynergiTech\Staffology\Model\\SynergiTech\Staffology\Model\PayPeriods(); // \SynergiTech\Staffology\Model\PayPeriods
$periodNumber = 56; // int
$taxYear = new \SynergiTech\Staffology\Model\\SynergiTech\Staffology\Model\TaxYear(); // \SynergiTech\Staffology\Model\TaxYear
$ordinal = 56; // int
$accept = 'accept_example'; // string

try {
    $result = $apiInstance->payrunYtdReports($employerId, $payPeriod, $periodNumber, $taxYear, $ordinal, $accept);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportsApi->payrunYtdReports: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employerId** | **string**|  | |
| **payPeriod** | [**\SynergiTech\Staffology\Model\PayPeriods**](../Model/.md)|  | |
| **periodNumber** | **int**|  | |
| **taxYear** | [**\SynergiTech\Staffology\Model\TaxYear**](../Model/.md)|  | |
| **ordinal** | **int**|  | [optional] |
| **accept** | **string**|  | [optional] |

### Return type

[**\SynergiTech\Staffology\Model\YtdReportReportResponse**](../Model/YtdReportReportResponse.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/csv`, `text/html`, `application/pdf`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `payslipReports()`

```php
payslipReports($employerId, $payPeriod, $periodNumber, $taxYear, $id, $accept, $ordinal): \SynergiTech\Staffology\Model\PayslipReportResponse
```

Payslip

Returns a single Payslip for the given PayRunEntry of a PayRun. The type of response depends on the accept header.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\ReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string
$payPeriod = new \SynergiTech\Staffology\Model\\SynergiTech\Staffology\Model\PayPeriods(); // \SynergiTech\Staffology\Model\PayPeriods
$periodNumber = 56; // int
$taxYear = new \SynergiTech\Staffology\Model\\SynergiTech\Staffology\Model\TaxYear(); // \SynergiTech\Staffology\Model\TaxYear
$id = 'id_example'; // string | The Id of the PayRunEntry.
$accept = 'accept_example'; // string
$ordinal = 1; // int

try {
    $result = $apiInstance->payslipReports($employerId, $payPeriod, $periodNumber, $taxYear, $id, $accept, $ordinal);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportsApi->payslipReports: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employerId** | **string**|  | |
| **payPeriod** | [**\SynergiTech\Staffology\Model\PayPeriods**](../Model/.md)|  | |
| **periodNumber** | **int**|  | |
| **taxYear** | [**\SynergiTech\Staffology\Model\TaxYear**](../Model/.md)|  | |
| **id** | **string**| The Id of the PayRunEntry. | |
| **accept** | **string**|  | [optional] |
| **ordinal** | **int**|  | [optional] [default to 1] |

### Return type

[**\SynergiTech\Staffology\Model\PayslipReportResponse**](../Model/PayslipReportResponse.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/pdf`, `application/json`, `text/html`, `application/octet-stream`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `payslipsReports()`

```php
payslipsReports($employerId, $payPeriod, $periodNumber, $taxYear, $accept, $ordinal, $unemailed, $deptCode, $startersLeaversFilter, $pageNum, $pageSize, $sortBy, $sortDescending): \SynergiTech\Staffology\Model\ReportResponse
```

Payslips

Returns all Payslips for the given PayRun  If you set the accept header to \"text/html\" then unlike other reports the html is NOT in the ```Content``` field.  As there are multiple HTML documents they are encoded as a JSON array of strings in the ```Model``` field.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\ReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string
$payPeriod = new \SynergiTech\Staffology\Model\\SynergiTech\Staffology\Model\PayPeriods(); // \SynergiTech\Staffology\Model\PayPeriods
$periodNumber = 56; // int
$taxYear = new \SynergiTech\Staffology\Model\\SynergiTech\Staffology\Model\TaxYear(); // \SynergiTech\Staffology\Model\TaxYear
$accept = 'accept_example'; // string
$ordinal = 1; // int
$unemailed = false; // bool | Set this to True if you only want the Payslips that haven't been sent by email
$deptCode = 'deptCode_example'; // string | Set if you want to filter by department
$startersLeaversFilter = new \SynergiTech\Staffology\Model\\SynergiTech\Staffology\Model\StartersLeaversFilter(); // \SynergiTech\Staffology\Model\StartersLeaversFilter
$pageNum = 56; // int
$pageSize = 56; // int
$sortBy = new \SynergiTech\Staffology\Model\\SynergiTech\Staffology\Model\PayRunEntrySortBy(); // \SynergiTech\Staffology\Model\PayRunEntrySortBy
$sortDescending = false; // bool

try {
    $result = $apiInstance->payslipsReports($employerId, $payPeriod, $periodNumber, $taxYear, $accept, $ordinal, $unemailed, $deptCode, $startersLeaversFilter, $pageNum, $pageSize, $sortBy, $sortDescending);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportsApi->payslipsReports: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employerId** | **string**|  | |
| **payPeriod** | [**\SynergiTech\Staffology\Model\PayPeriods**](../Model/.md)|  | |
| **periodNumber** | **int**|  | |
| **taxYear** | [**\SynergiTech\Staffology\Model\TaxYear**](../Model/.md)|  | |
| **accept** | **string**|  | [optional] |
| **ordinal** | **int**|  | [optional] [default to 1] |
| **unemailed** | **bool**| Set this to True if you only want the Payslips that haven&#39;t been sent by email | [optional] [default to false] |
| **deptCode** | **string**| Set if you want to filter by department | [optional] |
| **startersLeaversFilter** | [**\SynergiTech\Staffology\Model\StartersLeaversFilter**](../Model/.md)|  | [optional] |
| **pageNum** | **int**|  | [optional] |
| **pageSize** | **int**|  | [optional] |
| **sortBy** | [**\SynergiTech\Staffology\Model\PayRunEntrySortBy**](../Model/.md)|  | [optional] |
| **sortDescending** | **bool**|  | [optional] [default to false] |

### Return type

[**\SynergiTech\Staffology\Model\ReportResponse**](../Model/ReportResponse.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `pensionMembershipsReports()`

```php
pensionMembershipsReports($employerId, $taxYear, $payPeriod, $accept, $ordinal): \SynergiTech\Staffology\Model\PensionMembershipsReportReportResponse
```

Export Multiple Pension Memberships Report

Returns a report for Multiple Pension Memberships

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\ReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string
$taxYear = new \SynergiTech\Staffology\Model\\SynergiTech\Staffology\Model\TaxYear(); // \SynergiTech\Staffology\Model\TaxYear
$payPeriod = new \SynergiTech\Staffology\Model\\SynergiTech\Staffology\Model\PayPeriods(); // \SynergiTech\Staffology\Model\PayPeriods
$accept = 'accept_example'; // string
$ordinal = 1; // int

try {
    $result = $apiInstance->pensionMembershipsReports($employerId, $taxYear, $payPeriod, $accept, $ordinal);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportsApi->pensionMembershipsReports: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employerId** | **string**|  | |
| **taxYear** | [**\SynergiTech\Staffology\Model\TaxYear**](../Model/.md)|  | |
| **payPeriod** | [**\SynergiTech\Staffology\Model\PayPeriods**](../Model/.md)|  | [optional] |
| **accept** | **string**|  | [optional] |
| **ordinal** | **int**|  | [optional] [default to 1] |

### Return type

[**\SynergiTech\Staffology\Model\PensionMembershipsReportReportResponse**](../Model/PensionMembershipsReportReportResponse.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/csv`, `text/html`, `application/pdf`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `rightToWorkReports()`

```php
rightToWorkReports($employerId, $accept): \SynergiTech\Staffology\Model\RightToWorkReportReportResponse
```

RightToWork

Returns a report summarising RightToWork information for all employees.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\ReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string
$accept = 'accept_example'; // string

try {
    $result = $apiInstance->rightToWorkReports($employerId, $accept);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportsApi->rightToWorkReports: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employerId** | **string**|  | |
| **accept** | **string**|  | [optional] |

### Return type

[**\SynergiTech\Staffology\Model\RightToWorkReportReportResponse**](../Model/RightToWorkReportReportResponse.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/csv`, `text/html`, `application/pdf`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `spinePointReports()`

```php
spinePointReports($employerId, $paySpineId, $effectiveDateFrom, $effectiveDateTo, $accept): \SynergiTech\Staffology\Model\SpinePointReportReportResponse
```

Spine Point

Returns a report for Spine Point.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\ReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string
$paySpineId = 'paySpineId_example'; // string
$effectiveDateFrom = 'effectiveDateFrom_example'; // string
$effectiveDateTo = 'effectiveDateTo_example'; // string
$accept = 'accept_example'; // string

try {
    $result = $apiInstance->spinePointReports($employerId, $paySpineId, $effectiveDateFrom, $effectiveDateTo, $accept);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportsApi->spinePointReports: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employerId** | **string**|  | |
| **paySpineId** | **string**|  | [optional] |
| **effectiveDateFrom** | **string**|  | [optional] |
| **effectiveDateTo** | **string**|  | [optional] |
| **accept** | **string**|  | [optional] |

### Return type

[**\SynergiTech\Staffology\Model\SpinePointReportReportResponse**](../Model/SpinePointReportReportResponse.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/csv`, `text/html`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `statutoryPayReports()`

```php
statutoryPayReports($employerId, $payPeriod, $taxYear, $fromPeriod, $toPeriod, $statutoryPayTypes, $accept, $ordinal): \SynergiTech\Staffology\Model\StatutoryPayReportReportResponse
```

Statutory Pay

Returns a report detailing statutory pay for one or more pay periods.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\ReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string
$payPeriod = new \SynergiTech\Staffology\Model\\SynergiTech\Staffology\Model\PayPeriods(); // \SynergiTech\Staffology\Model\PayPeriods
$taxYear = new \SynergiTech\Staffology\Model\\SynergiTech\Staffology\Model\TaxYear(); // \SynergiTech\Staffology\Model\TaxYear
$fromPeriod = 56; // int
$toPeriod = 56; // int
$statutoryPayTypes = 'statutoryPayTypes_example'; // string | Comma separated values from (SAP, SHPP, SMP, SPBP, SPP)
$accept = 'accept_example'; // string
$ordinal = 1; // int

try {
    $result = $apiInstance->statutoryPayReports($employerId, $payPeriod, $taxYear, $fromPeriod, $toPeriod, $statutoryPayTypes, $accept, $ordinal);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportsApi->statutoryPayReports: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employerId** | **string**|  | |
| **payPeriod** | [**\SynergiTech\Staffology\Model\PayPeriods**](../Model/.md)|  | |
| **taxYear** | [**\SynergiTech\Staffology\Model\TaxYear**](../Model/.md)|  | |
| **fromPeriod** | **int**|  | [optional] |
| **toPeriod** | **int**|  | [optional] |
| **statutoryPayTypes** | **string**| Comma separated values from (SAP, SHPP, SMP, SPBP, SPP) | [optional] |
| **accept** | **string**|  | [optional] |
| **ordinal** | **int**|  | [optional] [default to 1] |

### Return type

[**\SynergiTech\Staffology\Model\StatutoryPayReportReportResponse**](../Model/StatutoryPayReportReportResponse.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/csv`, `text/html`, `application/pdf`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `taxCodeChangesReports()`

```php
taxCodeChangesReports($employerId, $taxYear, $accept): \SynergiTech\Staffology\Model\TaxCodeChangeReportReportResponse
```

Taxcode Change

Returns a CSV file containing Tax Code Changes values for all Employees.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\ReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string
$taxYear = new \SynergiTech\Staffology\Model\\SynergiTech\Staffology\Model\TaxYear(); // \SynergiTech\Staffology\Model\TaxYear
$accept = 'accept_example'; // string

try {
    $result = $apiInstance->taxCodeChangesReports($employerId, $taxYear, $accept);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportsApi->taxCodeChangesReports: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employerId** | **string**|  | |
| **taxYear** | [**\SynergiTech\Staffology\Model\TaxYear**](../Model/.md)|  | |
| **accept** | **string**|  | [optional] |

### Return type

[**\SynergiTech\Staffology\Model\TaxCodeChangeReportReportResponse**](../Model/TaxCodeChangeReportReportResponse.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/csv`, `text/html`, `application/pdf`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `teachersPensionEoyReports()`

```php
teachersPensionEoyReports($employerId, $taxYear, $localAuthorityNumber, $schoolEmployerType, $accept): \SynergiTech\Staffology\Model\TeachersPensionEoyReportReportResponse
```

Teachers Pension Eoy Report

Returns a report response containing the Teachers Pension EOYC Report

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\ReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string
$taxYear = new \SynergiTech\Staffology\Model\\SynergiTech\Staffology\Model\TaxYear(); // \SynergiTech\Staffology\Model\TaxYear
$localAuthorityNumber = 'localAuthorityNumber_example'; // string
$schoolEmployerType = 'schoolEmployerType_example'; // string
$accept = 'accept_example'; // string

try {
    $result = $apiInstance->teachersPensionEoyReports($employerId, $taxYear, $localAuthorityNumber, $schoolEmployerType, $accept);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportsApi->teachersPensionEoyReports: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employerId** | **string**|  | |
| **taxYear** | [**\SynergiTech\Staffology\Model\TaxYear**](../Model/.md)|  | |
| **localAuthorityNumber** | **string**|  | [optional] |
| **schoolEmployerType** | **string**|  | [optional] |
| **accept** | **string**|  | [optional] |

### Return type

[**\SynergiTech\Staffology\Model\TeachersPensionEoyReportReportResponse**](../Model/TeachersPensionEoyReportReportResponse.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/csv`, `text/html`, `application/pdf`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `umbrellaReconciliationReports()`

```php
umbrellaReconciliationReports($employerId, $payPeriod, $taxYear, $fromPeriod, $toPeriod, $accept, $ordinal, $employeeId): \SynergiTech\Staffology\Model\UmbrellaReconciliationReportReportResponse
```

Umbrella Reconciliation

Returns an Umbrella Reconciliation report.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\ReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string
$payPeriod = new \SynergiTech\Staffology\Model\\SynergiTech\Staffology\Model\PayPeriods(); // \SynergiTech\Staffology\Model\PayPeriods
$taxYear = new \SynergiTech\Staffology\Model\\SynergiTech\Staffology\Model\TaxYear(); // \SynergiTech\Staffology\Model\TaxYear
$fromPeriod = 56; // int
$toPeriod = 56; // int
$accept = 'accept_example'; // string
$ordinal = 1; // int
$employeeId = 'employeeId_example'; // string | Specify an employee id to report on just that employee, otherwise all employees will be included.

try {
    $result = $apiInstance->umbrellaReconciliationReports($employerId, $payPeriod, $taxYear, $fromPeriod, $toPeriod, $accept, $ordinal, $employeeId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportsApi->umbrellaReconciliationReports: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employerId** | **string**|  | |
| **payPeriod** | [**\SynergiTech\Staffology\Model\PayPeriods**](../Model/.md)|  | |
| **taxYear** | [**\SynergiTech\Staffology\Model\TaxYear**](../Model/.md)|  | |
| **fromPeriod** | **int**|  | [optional] |
| **toPeriod** | **int**|  | [optional] |
| **accept** | **string**|  | [optional] |
| **ordinal** | **int**|  | [optional] [default to 1] |
| **employeeId** | **string**| Specify an employee id to report on just that employee, otherwise all employees will be included. | [optional] |

### Return type

[**\SynergiTech\Staffology\Model\UmbrellaReconciliationReportReportResponse**](../Model/UmbrellaReconciliationReportReportResponse.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/csv`, `text/html`, `application/pdf`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `varianceReportReports()`

```php
varianceReportReports($employerId, $payPeriod, $taxYear, $ordinal, $fromPeriod, $toPeriod, $payPeriodCompare, $ordinalCompare, $taxYearCompare, $fromPeriodCompare, $toPeriodCompare, $showPercentage, $minChange, $accept): \SynergiTech\Staffology\Model\VarianceReportReportResponse
```

Variance Report

Returns a report comparing two pay periods or two ranges of pay periods.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\ReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string
$payPeriod = new \SynergiTech\Staffology\Model\\SynergiTech\Staffology\Model\PayPeriods(); // \SynergiTech\Staffology\Model\PayPeriods
$taxYear = new \SynergiTech\Staffology\Model\\SynergiTech\Staffology\Model\TaxYear(); // \SynergiTech\Staffology\Model\TaxYear
$ordinal = 56; // int
$fromPeriod = 56; // int
$toPeriod = 56; // int
$payPeriodCompare = new \SynergiTech\Staffology\Model\\SynergiTech\Staffology\Model\PayPeriods(); // \SynergiTech\Staffology\Model\PayPeriods
$ordinalCompare = 56; // int
$taxYearCompare = new \SynergiTech\Staffology\Model\\SynergiTech\Staffology\Model\TaxYear(); // \SynergiTech\Staffology\Model\TaxYear
$fromPeriodCompare = 56; // int
$toPeriodCompare = 56; // int
$showPercentage = True; // bool | If true then any variations will be shown as a percentage.
$minChange = 3.4; // float | Set a threshold for reporting variance. Ie, provide 0.10 and any variance below 10% will be ignored
$accept = 'accept_example'; // string

try {
    $result = $apiInstance->varianceReportReports($employerId, $payPeriod, $taxYear, $ordinal, $fromPeriod, $toPeriod, $payPeriodCompare, $ordinalCompare, $taxYearCompare, $fromPeriodCompare, $toPeriodCompare, $showPercentage, $minChange, $accept);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportsApi->varianceReportReports: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employerId** | **string**|  | |
| **payPeriod** | [**\SynergiTech\Staffology\Model\PayPeriods**](../Model/.md)|  | |
| **taxYear** | [**\SynergiTech\Staffology\Model\TaxYear**](../Model/.md)|  | |
| **ordinal** | **int**|  | [optional] |
| **fromPeriod** | **int**|  | [optional] |
| **toPeriod** | **int**|  | [optional] |
| **payPeriodCompare** | [**\SynergiTech\Staffology\Model\PayPeriods**](../Model/.md)|  | [optional] |
| **ordinalCompare** | **int**|  | [optional] |
| **taxYearCompare** | [**\SynergiTech\Staffology\Model\TaxYear**](../Model/.md)|  | [optional] |
| **fromPeriodCompare** | **int**|  | [optional] |
| **toPeriodCompare** | **int**|  | [optional] |
| **showPercentage** | **bool**| If true then any variations will be shown as a percentage. | [optional] |
| **minChange** | **float**| Set a threshold for reporting variance. Ie, provide 0.10 and any variance below 10% will be ignored | [optional] |
| **accept** | **string**|  | [optional] |

### Return type

[**\SynergiTech\Staffology\Model\VarianceReportReportResponse**](../Model/VarianceReportReportResponse.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/csv`, `text/html`, `application/pdf`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `warningsReports()`

```php
warningsReports($employerId, $taxYear, $payPeriod, $periodNumber, $accept, $ordinal): \SynergiTech\Staffology\Model\WarningsReportReportResponse
```

Export Payroll Run Warnings

Returns a report for payroll warnings

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\ReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string
$taxYear = new \SynergiTech\Staffology\Model\\SynergiTech\Staffology\Model\TaxYear(); // \SynergiTech\Staffology\Model\TaxYear
$payPeriod = new \SynergiTech\Staffology\Model\\SynergiTech\Staffology\Model\PayPeriods(); // \SynergiTech\Staffology\Model\PayPeriods
$periodNumber = 56; // int
$accept = 'accept_example'; // string
$ordinal = 1; // int

try {
    $result = $apiInstance->warningsReports($employerId, $taxYear, $payPeriod, $periodNumber, $accept, $ordinal);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportsApi->warningsReports: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employerId** | **string**|  | |
| **taxYear** | [**\SynergiTech\Staffology\Model\TaxYear**](../Model/.md)|  | |
| **payPeriod** | [**\SynergiTech\Staffology\Model\PayPeriods**](../Model/.md)|  | |
| **periodNumber** | **int**|  | |
| **accept** | **string**|  | [optional] |
| **ordinal** | **int**|  | [optional] [default to 1] |

### Return type

[**\SynergiTech\Staffology\Model\WarningsReportReportResponse**](../Model/WarningsReportReportResponse.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/csv`, `application/pdf`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `ytdReports()`

```php
ytdReports($employerId, $accept): \SynergiTech\Staffology\Model\ReportResponse
```

Year To Date Values

Returns a CSV file containing YTD values for all Employees.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = SynergiTech\Staffology\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SynergiTech\Staffology\Api\ReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employerId = 'employerId_example'; // string
$accept = 'accept_example'; // string

try {
    $result = $apiInstance->ytdReports($employerId, $accept);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportsApi->ytdReports: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employerId** | **string**|  | [optional] |
| **accept** | **string**|  | [optional] |

### Return type

[**\SynergiTech\Staffology\Model\ReportResponse**](../Model/ReportResponse.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
