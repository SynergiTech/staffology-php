<?php
/**
 * ContractLeaveImportRequest
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
 * ContractLeaveImportRequest Class Doc Comment
 *
 * @package  SynergiTech\Staffology
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements ArrayAccess<string, mixed>
 */
class ContractLeaveImportRequest implements ModelInterface, ArrayAccess, JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'Contract.LeaveImportRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var array<string, string>
      */
    protected static array $openAPITypes = [
        'payrollCode' => 'string',
        'type' => '\SynergiTech\Staffology\Model\LeaveType',
        'pay' => '\SynergiTech\Staffology\Model\LeavePayType',
        'openEndedAbsence' => 'bool',
        'from' => '\DateTime',
        'to' => '\DateTime',
        'historicLeaveRequiresProcessing' => 'bool',
        'averageWeeklyEarnings' => 'float',
        'automaticAWECalculation' => 'bool',
        'offsetPay' => 'bool',
        'calculationType' => '\SynergiTech\Staffology\Model\LeaveCalculationType',
        'percentOfPay' => 'float',
        'strikeHoursToDeduct' => 'float',
        'paySSPInAddition' => 'bool',
        'useAssumedPensionablePay' => 'bool',
        'assumedPensionablePay' => 'float',
        'automaticAPPCalculation' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'payrollCode' => null,
        'type' => null,
        'pay' => null,
        'openEndedAbsence' => null,
        'from' => 'date',
        'to' => 'date',
        'historicLeaveRequiresProcessing' => null,
        'averageWeeklyEarnings' => 'double',
        'automaticAWECalculation' => null,
        'offsetPay' => null,
        'calculationType' => null,
        'percentOfPay' => 'double',
        'strikeHoursToDeduct' => 'double',
        'paySSPInAddition' => null,
        'useAssumedPensionablePay' => null,
        'assumedPensionablePay' => 'double',
        'automaticAPPCalculation' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var array<string, bool>
      */
    protected static array $openAPINullables = [
        'payrollCode' => true,
        'type' => false,
        'pay' => false,
        'openEndedAbsence' => false,
        'from' => true,
        'to' => true,
        'historicLeaveRequiresProcessing' => false,
        'averageWeeklyEarnings' => true,
        'automaticAWECalculation' => false,
        'offsetPay' => false,
        'calculationType' => false,
        'percentOfPay' => true,
        'strikeHoursToDeduct' => true,
        'paySSPInAddition' => false,
        'useAssumedPensionablePay' => false,
        'assumedPensionablePay' => true,
        'automaticAPPCalculation' => false
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
        'payrollCode' => 'payrollCode',
        'type' => 'type',
        'pay' => 'pay',
        'openEndedAbsence' => 'openEndedAbsence',
        'from' => 'from',
        'to' => 'to',
        'historicLeaveRequiresProcessing' => 'historicLeaveRequiresProcessing',
        'averageWeeklyEarnings' => 'averageWeeklyEarnings',
        'automaticAWECalculation' => 'automaticAWECalculation',
        'offsetPay' => 'offsetPay',
        'calculationType' => 'calculationType',
        'percentOfPay' => 'percentOfPay',
        'strikeHoursToDeduct' => 'strikeHoursToDeduct',
        'paySSPInAddition' => 'paySSPInAddition',
        'useAssumedPensionablePay' => 'useAssumedPensionablePay',
        'assumedPensionablePay' => 'assumedPensionablePay',
        'automaticAPPCalculation' => 'automaticAPPCalculation'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var array<string, string>
     */
    protected static array $setters = [
        'payrollCode' => 'setPayrollCode',
        'type' => 'setType',
        'pay' => 'setPay',
        'openEndedAbsence' => 'setOpenEndedAbsence',
        'from' => 'setFrom',
        'to' => 'setTo',
        'historicLeaveRequiresProcessing' => 'setHistoricLeaveRequiresProcessing',
        'averageWeeklyEarnings' => 'setAverageWeeklyEarnings',
        'automaticAWECalculation' => 'setAutomaticAWECalculation',
        'offsetPay' => 'setOffsetPay',
        'calculationType' => 'setCalculationType',
        'percentOfPay' => 'setPercentOfPay',
        'strikeHoursToDeduct' => 'setStrikeHoursToDeduct',
        'paySSPInAddition' => 'setPaySSPInAddition',
        'useAssumedPensionablePay' => 'setUseAssumedPensionablePay',
        'assumedPensionablePay' => 'setAssumedPensionablePay',
        'automaticAPPCalculation' => 'setAutomaticAPPCalculation'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var array<string, string>
     */
    protected static array $getters = [
        'payrollCode' => 'getPayrollCode',
        'type' => 'getType',
        'pay' => 'getPay',
        'openEndedAbsence' => 'getOpenEndedAbsence',
        'from' => 'getFrom',
        'to' => 'getTo',
        'historicLeaveRequiresProcessing' => 'getHistoricLeaveRequiresProcessing',
        'averageWeeklyEarnings' => 'getAverageWeeklyEarnings',
        'automaticAWECalculation' => 'getAutomaticAWECalculation',
        'offsetPay' => 'getOffsetPay',
        'calculationType' => 'getCalculationType',
        'percentOfPay' => 'getPercentOfPay',
        'strikeHoursToDeduct' => 'getStrikeHoursToDeduct',
        'paySSPInAddition' => 'getPaySSPInAddition',
        'useAssumedPensionablePay' => 'getUseAssumedPensionablePay',
        'assumedPensionablePay' => 'getAssumedPensionablePay',
        'automaticAPPCalculation' => 'getAutomaticAPPCalculation'
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
        $this->setIfExists('payrollCode', $data ?? [], null);
        $this->setIfExists('type', $data ?? [], null);
        $this->setIfExists('pay', $data ?? [], null);
        $this->setIfExists('openEndedAbsence', $data ?? [], null);
        $this->setIfExists('from', $data ?? [], null);
        $this->setIfExists('to', $data ?? [], null);
        $this->setIfExists('historicLeaveRequiresProcessing', $data ?? [], null);
        $this->setIfExists('averageWeeklyEarnings', $data ?? [], null);
        $this->setIfExists('automaticAWECalculation', $data ?? [], null);
        $this->setIfExists('offsetPay', $data ?? [], null);
        $this->setIfExists('calculationType', $data ?? [], null);
        $this->setIfExists('percentOfPay', $data ?? [], null);
        $this->setIfExists('strikeHoursToDeduct', $data ?? [], null);
        $this->setIfExists('paySSPInAddition', $data ?? [], null);
        $this->setIfExists('useAssumedPensionablePay', $data ?? [], null);
        $this->setIfExists('assumedPensionablePay', $data ?? [], null);
        $this->setIfExists('automaticAPPCalculation', $data ?? [], null);
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
     * Gets payrollCode
     *
     * @return string|null
     */
    public function getPayrollCode(): ?string
    {
        return $this->container['payrollCode'];
    }

    /**
     * Sets payrollCode
     *
     * @param string|null $payrollCode Payroll Code
     *
     * @return $this
     */
    public function setPayrollCode(?string $payrollCode): static
    {
        if (is_null($payrollCode)) {
            array_push($this->openAPINullablesSetToNull, 'payrollCode');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('payrollCode', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['payrollCode'] = $payrollCode;

        return $this;
    }

    /**
     * Gets type
     *
     * @return \SynergiTech\Staffology\Model\LeaveType|null
     */
    public function getType(): ?\SynergiTech\Staffology\Model\LeaveType
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param \SynergiTech\Staffology\Model\LeaveType|null $type type
     *
     * @return $this
     */
    public function setType(?\SynergiTech\Staffology\Model\LeaveType $type): static
    {
        if (is_null($type)) {
            throw new InvalidArgumentException('non-nullable type cannot be null');
        }
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets pay
     *
     * @return \SynergiTech\Staffology\Model\LeavePayType|null
     */
    public function getPay(): ?\SynergiTech\Staffology\Model\LeavePayType
    {
        return $this->container['pay'];
    }

    /**
     * Sets pay
     *
     * @param \SynergiTech\Staffology\Model\LeavePayType|null $pay pay
     *
     * @return $this
     */
    public function setPay(?\SynergiTech\Staffology\Model\LeavePayType $pay): static
    {
        if (is_null($pay)) {
            throw new InvalidArgumentException('non-nullable pay cannot be null');
        }
        $this->container['pay'] = $pay;

        return $this;
    }

    /**
     * Gets openEndedAbsence
     *
     * @return bool|null
     */
    public function getOpenEndedAbsence(): ?bool
    {
        return $this->container['openEndedAbsence'];
    }

    /**
     * Sets openEndedAbsence
     *
     * @param bool|null $openEndedAbsence Open Ended Absence
     *
     * @return $this
     */
    public function setOpenEndedAbsence(?bool $openEndedAbsence): static
    {
        if (is_null($openEndedAbsence)) {
            throw new InvalidArgumentException('non-nullable openEndedAbsence cannot be null');
        }
        $this->container['openEndedAbsence'] = $openEndedAbsence;

        return $this;
    }

    /**
     * Gets from
     *
     * @return \DateTime|null
     */
    public function getFrom(): ?\DateTime
    {
        return $this->container['from'];
    }

    /**
     * Sets from
     *
     * @param \DateTime|null $from The first day of Leave.
     *
     * @return $this
     */
    public function setFrom(?\DateTime $from): static
    {
        if (is_null($from)) {
            array_push($this->openAPINullablesSetToNull, 'from');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('from', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['from'] = $from;

        return $this;
    }

    /**
     * Gets to
     *
     * @return \DateTime|null
     */
    public function getTo(): ?\DateTime
    {
        return $this->container['to'];
    }

    /**
     * Sets to
     *
     * @param \DateTime|null $to The last day of Leave.
     *
     * @return $this
     */
    public function setTo(?\DateTime $to): static
    {
        if (is_null($to)) {
            array_push($this->openAPINullablesSetToNull, 'to');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('to', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['to'] = $to;

        return $this;
    }

    /**
     * Gets historicLeaveRequiresProcessing
     *
     * @return bool|null
     */
    public function getHistoricLeaveRequiresProcessing(): ?bool
    {
        return $this->container['historicLeaveRequiresProcessing'];
    }

    /**
     * Sets historicLeaveRequiresProcessing
     *
     * @param bool|null $historicLeaveRequiresProcessing Only used during the creation of historical SSP.  When creating historical SSP, this will determine whether to pay that leave in the next PayRun.
     *
     * @return $this
     */
    public function setHistoricLeaveRequiresProcessing(?bool $historicLeaveRequiresProcessing): static
    {
        if (is_null($historicLeaveRequiresProcessing)) {
            throw new InvalidArgumentException('non-nullable historicLeaveRequiresProcessing cannot be null');
        }
        $this->container['historicLeaveRequiresProcessing'] = $historicLeaveRequiresProcessing;

        return $this;
    }

    /**
     * Gets averageWeeklyEarnings
     *
     * @return float|null
     */
    public function getAverageWeeklyEarnings(): ?float
    {
        return $this->container['averageWeeklyEarnings'];
    }

    /**
     * Sets averageWeeklyEarnings
     *
     * @param float|null $averageWeeklyEarnings The employees average weekly earnings.
     *
     * @return $this
     */
    public function setAverageWeeklyEarnings(?float $averageWeeklyEarnings): static
    {
        if (is_null($averageWeeklyEarnings)) {
            array_push($this->openAPINullablesSetToNull, 'averageWeeklyEarnings');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('averageWeeklyEarnings', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['averageWeeklyEarnings'] = $averageWeeklyEarnings;

        return $this;
    }

    /**
     * Gets automaticAWECalculation
     *
     * @return bool|null
     */
    public function getAutomaticAWECalculation(): ?bool
    {
        return $this->container['automaticAWECalculation'];
    }

    /**
     * Sets automaticAWECalculation
     *
     * @param bool|null $automaticAWECalculation Automatic Average Weekly Earnings.
     *
     * @return $this
     */
    public function setAutomaticAWECalculation(?bool $automaticAWECalculation): static
    {
        if (is_null($automaticAWECalculation)) {
            throw new InvalidArgumentException('non-nullable automaticAWECalculation cannot be null');
        }
        $this->container['automaticAWECalculation'] = $automaticAWECalculation;

        return $this;
    }

    /**
     * Gets offsetPay
     *
     * @return bool|null
     */
    public function getOffsetPay(): ?bool
    {
        return $this->container['offsetPay'];
    }

    /**
     * Sets offsetPay
     *
     * @param bool|null $offsetPay Top-up pay to usual amongst (offsetting)
     *
     * @return $this
     */
    public function setOffsetPay(?bool $offsetPay): static
    {
        if (is_null($offsetPay)) {
            throw new InvalidArgumentException('non-nullable offsetPay cannot be null');
        }
        $this->container['offsetPay'] = $offsetPay;

        return $this;
    }

    /**
     * Gets calculationType
     *
     * @return \SynergiTech\Staffology\Model\LeaveCalculationType|null
     */
    public function getCalculationType(): ?\SynergiTech\Staffology\Model\LeaveCalculationType
    {
        return $this->container['calculationType'];
    }

    /**
     * Sets calculationType
     *
     * @param \SynergiTech\Staffology\Model\LeaveCalculationType|null $calculationType calculationType
     *
     * @return $this
     */
    public function setCalculationType(?\SynergiTech\Staffology\Model\LeaveCalculationType $calculationType): static
    {
        if (is_null($calculationType)) {
            throw new InvalidArgumentException('non-nullable calculationType cannot be null');
        }
        $this->container['calculationType'] = $calculationType;

        return $this;
    }

    /**
     * Gets percentOfPay
     *
     * @return float|null
     */
    public function getPercentOfPay(): ?float
    {
        return $this->container['percentOfPay'];
    }

    /**
     * Sets percentOfPay
     *
     * @param float|null $percentOfPay Only provided when the leave type is 'Sick' and the payment type is 'Custom'.
     *
     * @return $this
     */
    public function setPercentOfPay(?float $percentOfPay): static
    {
        if (is_null($percentOfPay)) {
            array_push($this->openAPINullablesSetToNull, 'percentOfPay');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('percentOfPay', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['percentOfPay'] = $percentOfPay;

        return $this;
    }

    /**
     * Gets strikeHoursToDeduct
     *
     * @return float|null
     */
    public function getStrikeHoursToDeduct(): ?float
    {
        return $this->container['strikeHoursToDeduct'];
    }

    /**
     * Sets strikeHoursToDeduct
     *
     * @param float|null $strikeHoursToDeduct Only provided when the leave type is 'StrikeAction' and the calculation type is 'SpecifyHours'.
     *
     * @return $this
     */
    public function setStrikeHoursToDeduct(?float $strikeHoursToDeduct): static
    {
        if (is_null($strikeHoursToDeduct)) {
            array_push($this->openAPINullablesSetToNull, 'strikeHoursToDeduct');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('strikeHoursToDeduct', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['strikeHoursToDeduct'] = $strikeHoursToDeduct;

        return $this;
    }

    /**
     * Gets paySSPInAddition
     *
     * @return bool|null
     */
    public function getPaySSPInAddition(): ?bool
    {
        return $this->container['paySSPInAddition'];
    }

    /**
     * Sets paySSPInAddition
     *
     * @param bool|null $paySSPInAddition Only provided when the leave type is 'Sick' and the payment type is 'Custom'.
     *
     * @return $this
     */
    public function setPaySSPInAddition(?bool $paySSPInAddition): static
    {
        if (is_null($paySSPInAddition)) {
            throw new InvalidArgumentException('non-nullable paySSPInAddition cannot be null');
        }
        $this->container['paySSPInAddition'] = $paySSPInAddition;

        return $this;
    }

    /**
     * Gets useAssumedPensionablePay
     *
     * @return bool|null
     */
    public function getUseAssumedPensionablePay(): ?bool
    {
        return $this->container['useAssumedPensionablePay'];
    }

    /**
     * Sets useAssumedPensionablePay
     *
     * @param bool|null $useAssumedPensionablePay Only provided when the leave type is 'Sick' and the payment type is 'Custom', 'Occupational Policy' or 'Statutory Pay'.
     *
     * @return $this
     */
    public function setUseAssumedPensionablePay(?bool $useAssumedPensionablePay): static
    {
        if (is_null($useAssumedPensionablePay)) {
            throw new InvalidArgumentException('non-nullable useAssumedPensionablePay cannot be null');
        }
        $this->container['useAssumedPensionablePay'] = $useAssumedPensionablePay;

        return $this;
    }

    /**
     * Gets assumedPensionablePay
     *
     * @return float|null
     */
    public function getAssumedPensionablePay(): ?float
    {
        return $this->container['assumedPensionablePay'];
    }

    /**
     * Sets assumedPensionablePay
     *
     * @param float|null $assumedPensionablePay Assumed Pensionable Pay (APP) is an average figure, calculated as the average pay in the 3 months  (or 12 weeks if weekly/fortnightly/fourweekly paid) before the absence
     *
     * @return $this
     */
    public function setAssumedPensionablePay(?float $assumedPensionablePay): static
    {
        if (is_null($assumedPensionablePay)) {
            array_push($this->openAPINullablesSetToNull, 'assumedPensionablePay');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('assumedPensionablePay', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['assumedPensionablePay'] = $assumedPensionablePay;

        return $this;
    }

    /**
     * Gets automaticAPPCalculation
     *
     * @return bool|null
     */
    public function getAutomaticAPPCalculation(): ?bool
    {
        return $this->container['automaticAPPCalculation'];
    }

    /**
     * Sets automaticAPPCalculation
     *
     * @param bool|null $automaticAPPCalculation If set to True then we'll automatically calculate the AssumedPensionablePay.   Set it to false if you want to manually provide a figure that overrides our calculations
     *
     * @return $this
     */
    public function setAutomaticAPPCalculation(?bool $automaticAPPCalculation): static
    {
        if (is_null($automaticAPPCalculation)) {
            throw new InvalidArgumentException('non-nullable automaticAPPCalculation cannot be null');
        }
        $this->container['automaticAPPCalculation'] = $automaticAPPCalculation;

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


