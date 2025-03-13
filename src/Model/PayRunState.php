<?php
/**
 * PayRunState
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
 * Generator version: 7.13.0-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace SynergiTech\Staffology\Model;

/**
 * PayRunState Class Doc Comment
 *
 * @package  SynergiTech\Staffology
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
enum PayRunState: string
{
    case OPENING = 'Opening';

    case OPEN = 'Open';

    case RE_OPENING = 'ReOpening';

    case ROLLING_BACK = 'RollingBack';

    case ROLLED_BACK = 'RolledBack';

    case SUBMITTED_FOR_PROCESSING = 'SubmittedForProcessing';

    case PROCESSING = 'Processing';

    case AWAITING_APPROVAL = 'AwaitingApproval';

    case APPROVED = 'Approved';

    case FINALISING = 'Finalising';

    case FINALISED = 'Finalised';

    case DELETING = 'Deleting';
}


