<?php
/**
 * AeAssessment
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

use ArrayAccess;
use JsonSerializable;
use InvalidArgumentException;
use ReturnTypeWillChange;
use SynergiTech\Staffology\ObjectSerializer;

/**
 * AeAssessment Class Doc Comment
 *
 * @description As part of AutoEnrolment we assess your Employees to see if they need to be auto-enroled in a Pension.  This model shows the result of an assessment.
 * @package  SynergiTech\Staffology
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements ArrayAccess<string, mixed>
 */
class AeAssessment implements ModelInterface, ArrayAccess, JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'AeAssessment';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var array<string, string>
      */
    protected static array $openAPITypes = [
        'assessmentDate' => '\DateTime',
        'employeeState' => '\SynergiTech\Staffology\Model\AeEmployeeState',
        'age' => 'int',
        'ukWorker' => '\SynergiTech\Staffology\Model\AeUKWorker',
        'payPeriod' => '\SynergiTech\Staffology\Model\PayPeriods',
        'ordinal' => 'int',
        'earningsInPeriod' => 'float',
        'qualifyingEarningsInPeriod' => 'float',
        'aeExclusionCode' => '\SynergiTech\Staffology\Model\AeExclusionCode',
        'status' => '\SynergiTech\Staffology\Model\AeStatus',
        'reason' => 'string',
        'action' => '\SynergiTech\Staffology\Model\AeAssessmentAction',
        'startReportingType' => '\SynergiTech\Staffology\Model\PensionReportingType',
        'endReportingType' => '\SynergiTech\Staffology\Model\PensionReportingType',
        'startPayRunEntryId' => 'int',
        'endPayRunEntryId' => 'int',
        'employee' => '\SynergiTech\Staffology\Model\Item',
        'id' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'assessmentDate' => 'date-time',
        'employeeState' => null,
        'age' => 'int32',
        'ukWorker' => null,
        'payPeriod' => null,
        'ordinal' => 'int32',
        'earningsInPeriod' => 'double',
        'qualifyingEarningsInPeriod' => 'double',
        'aeExclusionCode' => null,
        'status' => null,
        'reason' => null,
        'action' => null,
        'startReportingType' => null,
        'endReportingType' => null,
        'startPayRunEntryId' => 'int32',
        'endPayRunEntryId' => 'int32',
        'employee' => null,
        'id' => 'uuid'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var array<string, bool>
      */
    protected static array $openAPINullables = [
        'assessmentDate' => false,
        'employeeState' => false,
        'age' => false,
        'ukWorker' => false,
        'payPeriod' => false,
        'ordinal' => false,
        'earningsInPeriod' => false,
        'qualifyingEarningsInPeriod' => false,
        'aeExclusionCode' => false,
        'status' => false,
        'reason' => true,
        'action' => false,
        'startReportingType' => false,
        'endReportingType' => false,
        'startPayRunEntryId' => true,
        'endPayRunEntryId' => true,
        'employee' => false,
        'id' => false
    ];

    /**
      * If a nullable field gets set to null, insert it here
      *
      * @var array<string, bool>
      */
    protected array $openAPINullablesSetToNull = [];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array<string, string>
     */
    public static function openAPITypes(): array
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array<string, string>
     */
    public static function openAPIFormats(): array
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of nullable properties
     *
     * @return array<string, bool>
     */
    protected static function openAPINullables(): array
    {
        return self::$openAPINullables;
    }

    /**
     * Array of nullable field names deliberately set to null
     *
     * @return array<string, bool>
     */
    private function getOpenAPINullablesSetToNull(): array
    {
        return $this->openAPINullablesSetToNull;
    }

    /**
     * Setter - Array of nullable field names deliberately set to null
     *
     * @param array<string, bool> $openAPINullablesSetToNull
     */
    private function setOpenAPINullablesSetToNull(array $openAPINullablesSetToNull): void
    {
        $this->openAPINullablesSetToNull = $openAPINullablesSetToNull;
    }

    /**
     * Checks if a property is nullable
     *
     * @param string $property
     * @return bool
     */
    public static function isNullable(string $property): bool
    {
        return self::openAPINullables()[$property] ?? false;
    }

    /**
     * Checks if a nullable property is set to null.
     *
     * @param string $property
     * @return bool
     */
    public function isNullableSetToNull(string $property): bool
    {
        return in_array($property, $this->getOpenAPINullablesSetToNull(), true);
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var array<string, string>
     */
    protected static array $attributeMap = [
        'assessmentDate' => 'assessmentDate',
        'employeeState' => 'employeeState',
        'age' => 'age',
        'ukWorker' => 'ukWorker',
        'payPeriod' => 'payPeriod',
        'ordinal' => 'ordinal',
        'earningsInPeriod' => 'earningsInPeriod',
        'qualifyingEarningsInPeriod' => 'qualifyingEarningsInPeriod',
        'aeExclusionCode' => 'aeExclusionCode',
        'status' => 'status',
        'reason' => 'reason',
        'action' => 'action',
        'startReportingType' => 'startReportingType',
        'endReportingType' => 'endReportingType',
        'startPayRunEntryId' => 'startPayRunEntryId',
        'endPayRunEntryId' => 'endPayRunEntryId',
        'employee' => 'employee',
        'id' => 'id'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var array<string, string>
     */
    protected static array $setters = [
        'assessmentDate' => 'setAssessmentDate',
        'employeeState' => 'setEmployeeState',
        'age' => 'setAge',
        'ukWorker' => 'setUkWorker',
        'payPeriod' => 'setPayPeriod',
        'ordinal' => 'setOrdinal',
        'earningsInPeriod' => 'setEarningsInPeriod',
        'qualifyingEarningsInPeriod' => 'setQualifyingEarningsInPeriod',
        'aeExclusionCode' => 'setAeExclusionCode',
        'status' => 'setStatus',
        'reason' => 'setReason',
        'action' => 'setAction',
        'startReportingType' => 'setStartReportingType',
        'endReportingType' => 'setEndReportingType',
        'startPayRunEntryId' => 'setStartPayRunEntryId',
        'endPayRunEntryId' => 'setEndPayRunEntryId',
        'employee' => 'setEmployee',
        'id' => 'setId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var array<string, string>
     */
    protected static array $getters = [
        'assessmentDate' => 'getAssessmentDate',
        'employeeState' => 'getEmployeeState',
        'age' => 'getAge',
        'ukWorker' => 'getUkWorker',
        'payPeriod' => 'getPayPeriod',
        'ordinal' => 'getOrdinal',
        'earningsInPeriod' => 'getEarningsInPeriod',
        'qualifyingEarningsInPeriod' => 'getQualifyingEarningsInPeriod',
        'aeExclusionCode' => 'getAeExclusionCode',
        'status' => 'getStatus',
        'reason' => 'getReason',
        'action' => 'getAction',
        'startReportingType' => 'getStartReportingType',
        'endReportingType' => 'getEndReportingType',
        'startPayRunEntryId' => 'getStartPayRunEntryId',
        'endPayRunEntryId' => 'getEndPayRunEntryId',
        'employee' => 'getEmployee',
        'id' => 'getId'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array<string, string>
     */
    public static function attributeMap(): array
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array<string, string>
     */
    public static function setters(): array
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array<string, string>
     */
    public static function getters(): array
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName(): string
    {
        return self::$openAPIModelName;
    }


    /**
     * Associative array for storing property values
     *
     * @var array
     */
    protected array $container = [];

    /**
     * Constructor
     *
     * @param array $data Associated array of property values initializing the model
     */
    public function __construct(?array $data = null)
    {
        $this->setIfExists('assessmentDate', $data ?? [], null);
        $this->setIfExists('employeeState', $data ?? [], null);
        $this->setIfExists('age', $data ?? [], null);
        $this->setIfExists('ukWorker', $data ?? [], null);
        $this->setIfExists('payPeriod', $data ?? [], null);
        $this->setIfExists('ordinal', $data ?? [], null);
        $this->setIfExists('earningsInPeriod', $data ?? [], null);
        $this->setIfExists('qualifyingEarningsInPeriod', $data ?? [], null);
        $this->setIfExists('aeExclusionCode', $data ?? [], null);
        $this->setIfExists('status', $data ?? [], null);
        $this->setIfExists('reason', $data ?? [], null);
        $this->setIfExists('action', $data ?? [], null);
        $this->setIfExists('startReportingType', $data ?? [], null);
        $this->setIfExists('endReportingType', $data ?? [], null);
        $this->setIfExists('startPayRunEntryId', $data ?? [], null);
        $this->setIfExists('endPayRunEntryId', $data ?? [], null);
        $this->setIfExists('employee', $data ?? [], null);
        $this->setIfExists('id', $data ?? [], null);
    }

    /**
    * Sets $this->container[$variableName] to the given data or to the given default Value; if $variableName
    * is nullable and its value is set to null in the $fields array, then mark it as "set to null" in the
    * $this->openAPINullablesSetToNull array
    *
    * @param string $variableName
    * @param array  $fields
    * @param mixed  $defaultValue
    */
    private function setIfExists(string $variableName, array $fields, mixed $defaultValue): void
    {
        if (self::isNullable($variableName) && array_key_exists($variableName, $fields) && is_null($fields[$variableName])) {
            $this->openAPINullablesSetToNull[] = $variableName;
        }

        $this->container[$variableName] = $fields[$variableName] ?? $defaultValue;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return string[] invalid properties with reasons
     */
    public function listInvalidProperties(): array
    {
        $invalidProperties = [];

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid(): bool
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets assessmentDate
     *
     * @return \DateTime|null
     */
    public function getAssessmentDate(): ?\DateTime
    {
        return $this->container['assessmentDate'];
    }

    /**
     * Sets assessmentDate
     *
     * @param \DateTime|null $assessmentDate assessmentDate
     *
     * @return $this
     */
    public function setAssessmentDate(?\DateTime $assessmentDate): static
    {
        if (is_null($assessmentDate)) {
            throw new InvalidArgumentException('non-nullable assessmentDate cannot be null');
        }
        $this->container['assessmentDate'] = $assessmentDate;

        return $this;
    }

    /**
     * Gets employeeState
     *
     * @return \SynergiTech\Staffology\Model\AeEmployeeState|null
     */
    public function getEmployeeState(): ?\SynergiTech\Staffology\Model\AeEmployeeState
    {
        return $this->container['employeeState'];
    }

    /**
     * Sets employeeState
     *
     * @param \SynergiTech\Staffology\Model\AeEmployeeState|null $employeeState employeeState
     *
     * @return $this
     */
    public function setEmployeeState(?\SynergiTech\Staffology\Model\AeEmployeeState $employeeState): static
    {
        if (is_null($employeeState)) {
            throw new InvalidArgumentException('non-nullable employeeState cannot be null');
        }
        $this->container['employeeState'] = $employeeState;

        return $this;
    }

    /**
     * Gets age
     *
     * @return int|null
     */
    public function getAge(): ?int
    {
        return $this->container['age'];
    }

    /**
     * Sets age
     *
     * @param int|null $age [readonly] The age of the Employee at the time of the assessment
     *
     * @return $this
     */
    public function setAge(?int $age): static
    {
        if (is_null($age)) {
            throw new InvalidArgumentException('non-nullable age cannot be null');
        }
        $this->container['age'] = $age;

        return $this;
    }

    /**
     * Gets ukWorker
     *
     * @return \SynergiTech\Staffology\Model\AeUKWorker|null
     */
    public function getUkWorker(): ?\SynergiTech\Staffology\Model\AeUKWorker
    {
        return $this->container['ukWorker'];
    }

    /**
     * Sets ukWorker
     *
     * @param \SynergiTech\Staffology\Model\AeUKWorker|null $ukWorker ukWorker
     *
     * @return $this
     */
    public function setUkWorker(?\SynergiTech\Staffology\Model\AeUKWorker $ukWorker): static
    {
        if (is_null($ukWorker)) {
            throw new InvalidArgumentException('non-nullable ukWorker cannot be null');
        }
        $this->container['ukWorker'] = $ukWorker;

        return $this;
    }

    /**
     * Gets payPeriod
     *
     * @return \SynergiTech\Staffology\Model\PayPeriods|null
     */
    public function getPayPeriod(): ?\SynergiTech\Staffology\Model\PayPeriods
    {
        return $this->container['payPeriod'];
    }

    /**
     * Sets payPeriod
     *
     * @param \SynergiTech\Staffology\Model\PayPeriods|null $payPeriod payPeriod
     *
     * @return $this
     */
    public function setPayPeriod(?\SynergiTech\Staffology\Model\PayPeriods $payPeriod): static
    {
        if (is_null($payPeriod)) {
            throw new InvalidArgumentException('non-nullable payPeriod cannot be null');
        }
        $this->container['payPeriod'] = $payPeriod;

        return $this;
    }

    /**
     * Gets ordinal
     *
     * @return int|null
     */
    public function getOrdinal(): ?int
    {
        return $this->container['ordinal'];
    }

    /**
     * Sets ordinal
     *
     * @param int|null $ordinal [readonly] The PaySchedule ordinal for the Employee at the time of the assessment
     *
     * @return $this
     */
    public function setOrdinal(?int $ordinal): static
    {
        if (is_null($ordinal)) {
            throw new InvalidArgumentException('non-nullable ordinal cannot be null');
        }
        $this->container['ordinal'] = $ordinal;

        return $this;
    }

    /**
     * Gets earningsInPeriod
     *
     * @return float|null
     */
    public function getEarningsInPeriod(): ?float
    {
        return $this->container['earningsInPeriod'];
    }

    /**
     * Sets earningsInPeriod
     *
     * @param float|null $earningsInPeriod [readonly]
     *
     * @return $this
     */
    public function setEarningsInPeriod(?float $earningsInPeriod): static
    {
        if (is_null($earningsInPeriod)) {
            throw new InvalidArgumentException('non-nullable earningsInPeriod cannot be null');
        }
        $this->container['earningsInPeriod'] = $earningsInPeriod;

        return $this;
    }

    /**
     * Gets qualifyingEarningsInPeriod
     *
     * @return float|null
     */
    public function getQualifyingEarningsInPeriod(): ?float
    {
        return $this->container['qualifyingEarningsInPeriod'];
    }

    /**
     * Sets qualifyingEarningsInPeriod
     *
     * @param float|null $qualifyingEarningsInPeriod [readonly]
     *
     * @return $this
     */
    public function setQualifyingEarningsInPeriod(?float $qualifyingEarningsInPeriod): static
    {
        if (is_null($qualifyingEarningsInPeriod)) {
            throw new InvalidArgumentException('non-nullable qualifyingEarningsInPeriod cannot be null');
        }
        $this->container['qualifyingEarningsInPeriod'] = $qualifyingEarningsInPeriod;

        return $this;
    }

    /**
     * Gets aeExclusionCode
     *
     * @return \SynergiTech\Staffology\Model\AeExclusionCode|null
     */
    public function getAeExclusionCode(): ?\SynergiTech\Staffology\Model\AeExclusionCode
    {
        return $this->container['aeExclusionCode'];
    }

    /**
     * Sets aeExclusionCode
     *
     * @param \SynergiTech\Staffology\Model\AeExclusionCode|null $aeExclusionCode aeExclusionCode
     *
     * @return $this
     */
    public function setAeExclusionCode(?\SynergiTech\Staffology\Model\AeExclusionCode $aeExclusionCode): static
    {
        if (is_null($aeExclusionCode)) {
            throw new InvalidArgumentException('non-nullable aeExclusionCode cannot be null');
        }
        $this->container['aeExclusionCode'] = $aeExclusionCode;

        return $this;
    }

    /**
     * Gets status
     *
     * @return \SynergiTech\Staffology\Model\AeStatus|null
     */
    public function getStatus(): ?\SynergiTech\Staffology\Model\AeStatus
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param \SynergiTech\Staffology\Model\AeStatus|null $status status
     *
     * @return $this
     */
    public function setStatus(?\SynergiTech\Staffology\Model\AeStatus $status): static
    {
        if (is_null($status)) {
            throw new InvalidArgumentException('non-nullable status cannot be null');
        }
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets reason
     *
     * @return string|null
     */
    public function getReason(): ?string
    {
        return $this->container['reason'];
    }

    /**
     * Sets reason
     *
     * @param string|null $reason [readonly] The reason for determining the Status given.
     *
     * @return $this
     */
    public function setReason(?string $reason): static
    {
        if (is_null($reason)) {
            array_push($this->openAPINullablesSetToNull, 'reason');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('reason', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['reason'] = $reason;

        return $this;
    }

    /**
     * Gets action
     *
     * @return \SynergiTech\Staffology\Model\AeAssessmentAction|null
     */
    public function getAction(): ?\SynergiTech\Staffology\Model\AeAssessmentAction
    {
        return $this->container['action'];
    }

    /**
     * Sets action
     *
     * @param \SynergiTech\Staffology\Model\AeAssessmentAction|null $action action
     *
     * @return $this
     */
    public function setAction(?\SynergiTech\Staffology\Model\AeAssessmentAction $action): static
    {
        if (is_null($action)) {
            throw new InvalidArgumentException('non-nullable action cannot be null');
        }
        $this->container['action'] = $action;

        return $this;
    }

    /**
     * Gets startReportingType
     *
     * @return \SynergiTech\Staffology\Model\PensionReportingType|null
     */
    public function getStartReportingType(): ?\SynergiTech\Staffology\Model\PensionReportingType
    {
        return $this->container['startReportingType'];
    }

    /**
     * Sets startReportingType
     *
     * @param \SynergiTech\Staffology\Model\PensionReportingType|null $startReportingType startReportingType
     *
     * @return $this
     */
    public function setStartReportingType(?\SynergiTech\Staffology\Model\PensionReportingType $startReportingType): static
    {
        if (is_null($startReportingType)) {
            throw new InvalidArgumentException('non-nullable startReportingType cannot be null');
        }
        $this->container['startReportingType'] = $startReportingType;

        return $this;
    }

    /**
     * Gets endReportingType
     *
     * @return \SynergiTech\Staffology\Model\PensionReportingType|null
     */
    public function getEndReportingType(): ?\SynergiTech\Staffology\Model\PensionReportingType
    {
        return $this->container['endReportingType'];
    }

    /**
     * Sets endReportingType
     *
     * @param \SynergiTech\Staffology\Model\PensionReportingType|null $endReportingType endReportingType
     *
     * @return $this
     */
    public function setEndReportingType(?\SynergiTech\Staffology\Model\PensionReportingType $endReportingType): static
    {
        if (is_null($endReportingType)) {
            throw new InvalidArgumentException('non-nullable endReportingType cannot be null');
        }
        $this->container['endReportingType'] = $endReportingType;

        return $this;
    }

    /**
     * Gets startPayRunEntryId
     *
     * @return int|null
     */
    public function getStartPayRunEntryId(): ?int
    {
        return $this->container['startPayRunEntryId'];
    }

    /**
     * Sets startPayRunEntryId
     *
     * @param int|null $startPayRunEntryId startPayRunEntryId
     *
     * @return $this
     */
    public function setStartPayRunEntryId(?int $startPayRunEntryId): static
    {
        if (is_null($startPayRunEntryId)) {
            array_push($this->openAPINullablesSetToNull, 'startPayRunEntryId');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('startPayRunEntryId', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['startPayRunEntryId'] = $startPayRunEntryId;

        return $this;
    }

    /**
     * Gets endPayRunEntryId
     *
     * @return int|null
     */
    public function getEndPayRunEntryId(): ?int
    {
        return $this->container['endPayRunEntryId'];
    }

    /**
     * Sets endPayRunEntryId
     *
     * @param int|null $endPayRunEntryId endPayRunEntryId
     *
     * @return $this
     */
    public function setEndPayRunEntryId(?int $endPayRunEntryId): static
    {
        if (is_null($endPayRunEntryId)) {
            array_push($this->openAPINullablesSetToNull, 'endPayRunEntryId');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('endPayRunEntryId', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['endPayRunEntryId'] = $endPayRunEntryId;

        return $this;
    }

    /**
     * Gets employee
     *
     * @return \SynergiTech\Staffology\Model\Item|null
     */
    public function getEmployee(): ?\SynergiTech\Staffology\Model\Item
    {
        return $this->container['employee'];
    }

    /**
     * Sets employee
     *
     * @param \SynergiTech\Staffology\Model\Item|null $employee employee
     *
     * @return $this
     */
    public function setEmployee(?\SynergiTech\Staffology\Model\Item $employee): static
    {
        if (is_null($employee)) {
            throw new InvalidArgumentException('non-nullable employee cannot be null');
        }
        $this->container['employee'] = $employee;

        return $this;
    }

    /**
     * Gets id
     *
     * @return string|null
     */
    public function getId(): ?string
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string|null $id [readonly] The unique id of the object
     *
     * @return $this
     */
    public function setId(?string $id): static
    {
        if (is_null($id)) {
            throw new InvalidArgumentException('non-nullable id cannot be null');
        }
        $this->container['id'] = $id;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists(mixed $offset): bool
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed|null
     */
    #[ReturnTypeWillChange]
    public function offsetGet(mixed $offset): mixed
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
     *
     * @return void
     */
    public function offsetSet(mixed $offset, mixed $value): void
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset(mixed $offset): void
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    #[ReturnTypeWillChange]
    public function jsonSerialize(): mixed
    {
       return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString(): string
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue(): string
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


