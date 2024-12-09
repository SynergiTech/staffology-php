<?php
/**
 * PayPeriodEventType
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
 * PayPeriodEventType Class Doc Comment
 *
 * @description Different events supported for a PaySchedule Period. These events happen a pre-configured number of days before the PaymentDate for that PaySchedulePeriod.
 * @package  SynergiTech\Staffology
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
enum PayPeriodEventType: string
{
    case SUBMIT_FOR_PROCESSING = 'SubmitForProcessing';

    case SEND_FOR_APPROVAL = 'SendForApproval';

    case APPROVAL = 'Approval';

    case FINALISE = 'Finalise';

    case SEND_PAY_SLIP = 'SendPaySlip';

    case SUBMIT_RTI = 'SubmitRti';
}

