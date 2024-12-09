<?php
/**
 * BenefitType
 *
 * PHP version 8.1
 *
 * @package  SynergiTech\Staffology
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Staffology Payroll API
 *
 * No description provided (generated by Openapi Generator https://github.com/openapitools/openapi-generator)
 *
 * The version of the OpenAPI document: v1
 * Contact: duane@staffology.co.uk
 * @generated Generated by: https://openapi-generator.tech
 * Generator version: 7.11.0-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace SynergiTech\Staffology\Model;

/**
 * BenefitType Class Doc Comment
 *
 * @package  SynergiTech\Staffology
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
enum BenefitType: string
{
    case ASSETS_TRANSFERRED = 'AssetsTransferred';

    case PAYMENTS_ON_BEHALF = 'PaymentsOnBehalf';

    case UNBORNE_TAX = 'UnborneTax';

    case VOUCHERS = 'Vouchers';

    case ACCOMMODATION = 'Accommodation';

    case MILEAGE_ALLOWANCE = 'MileageAllowance';

    case CAR = 'Car';

    case VANS = 'Vans';

    case LOAN = 'Loan';

    case MEDICAL = 'Medical';

    case QUALIFYING_RELOCATION_EXPENSES = 'QualifyingRelocationExpenses';

    case SERVICES = 'Services';

    case ASSETS_AT_EMPLOYEE_DISPOSAL = 'AssetsAtEmployeeDisposal';

    case OTHER_CLASS1_A_ITEMS = 'OtherClass1AItems';

    case OTHER_NON_CLASS1_A_ITEMS = 'OtherNonClass1AItems';

    case DIRECTOR_TAX = 'DirectorTax';

    case TRAVELLING_AND_SUBSISTENCE = 'TravellingAndSubsistence';

    case ENTERTAINMENT = 'Entertainment';

    case HOME_TELEPHONE = 'HomeTelephone';

    case NON_QUALIFYING_RELOCATION_EXPENSES = 'NonQualifyingRelocationExpenses';

    case OTHER_EXPENSES = 'OtherExpenses';
}


