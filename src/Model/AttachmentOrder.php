<?php
/**
 * AttachmentOrder
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

use ArrayAccess;
use JsonSerializable;
use InvalidArgumentException;
use ReturnTypeWillChange;
use SynergiTech\Staffology\ObjectSerializer;

/**
 * AttachmentOrder Class Doc Comment
 *
 * @description Used to represent an Attachment of Earnings Order (AEO)
 * @package  SynergiTech\Staffology
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements ArrayAccess<string, mixed>
 */
class AttachmentOrder implements ModelInterface, ArrayAccess, JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'AttachmentOrder';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var array<string, string>
      */
    protected static array $openAPITypes = [
        'type' => '\SynergiTech\Staffology\Model\AttachmentOrderType',
        'carryForwardShortfall' => 'bool',
        'allowProtectedEarnings' => 'bool',
        'autoDeduction' => 'bool',
        'reference' => 'string',
        'issueDate' => '\DateTime',
        'applyFrom' => '\DateTime',
        'applyUntil' => '\DateTime',
        'deductionIsPercentage' => 'bool',
        'deduction' => 'float',
        'protectedEarningsIsPercentage' => 'bool',
        'protectedEarnings' => 'float',
        'chargeAdminFee' => 'bool',
        'shortfall' => 'float',
        'stopWhenTotalPaid' => 'bool',
        'totalAmountToPay' => 'float',
        'amountPreviouslyPaid' => 'float',
        'stopped' => 'bool',
        'notes' => 'string',
        'includeBankDetails' => 'bool',
        'bankDetails' => '\SynergiTech\Staffology\Model\BankDetails',
        'payments' => '\SynergiTech\Staffology\Model\AttachmentOrderPayment[]',
        'payee' => 'string',
        'payeeName' => 'string',
        'documentCount' => 'int',
        'documents' => '\SynergiTech\Staffology\Model\Item[]',
        'employee' => '\SynergiTech\Staffology\Model\Item',
        'id' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'type' => null,
        'carryForwardShortfall' => null,
        'allowProtectedEarnings' => null,
        'autoDeduction' => null,
        'reference' => null,
        'issueDate' => 'date',
        'applyFrom' => 'date',
        'applyUntil' => 'date',
        'deductionIsPercentage' => null,
        'deduction' => 'double',
        'protectedEarningsIsPercentage' => null,
        'protectedEarnings' => 'double',
        'chargeAdminFee' => null,
        'shortfall' => 'double',
        'stopWhenTotalPaid' => null,
        'totalAmountToPay' => 'double',
        'amountPreviouslyPaid' => 'double',
        'stopped' => null,
        'notes' => null,
        'includeBankDetails' => null,
        'bankDetails' => null,
        'payments' => null,
        'payee' => 'uuid',
        'payeeName' => null,
        'documentCount' => 'int32',
        'documents' => null,
        'employee' => null,
        'id' => 'uuid'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var array<string, bool>
      */
    protected static array $openAPINullables = [
        'type' => false,
        'carryForwardShortfall' => false,
        'allowProtectedEarnings' => false,
        'autoDeduction' => false,
        'reference' => true,
        'issueDate' => false,
        'applyFrom' => false,
        'applyUntil' => true,
        'deductionIsPercentage' => false,
        'deduction' => false,
        'protectedEarningsIsPercentage' => false,
        'protectedEarnings' => false,
        'chargeAdminFee' => false,
        'shortfall' => false,
        'stopWhenTotalPaid' => false,
        'totalAmountToPay' => false,
        'amountPreviouslyPaid' => false,
        'stopped' => false,
        'notes' => true,
        'includeBankDetails' => false,
        'bankDetails' => false,
        'payments' => true,
        'payee' => true,
        'payeeName' => true,
        'documentCount' => false,
        'documents' => true,
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
        'type' => 'type',
        'carryForwardShortfall' => 'carryForwardShortfall',
        'allowProtectedEarnings' => 'allowProtectedEarnings',
        'autoDeduction' => 'autoDeduction',
        'reference' => 'reference',
        'issueDate' => 'issueDate',
        'applyFrom' => 'applyFrom',
        'applyUntil' => 'applyUntil',
        'deductionIsPercentage' => 'deductionIsPercentage',
        'deduction' => 'deduction',
        'protectedEarningsIsPercentage' => 'protectedEarningsIsPercentage',
        'protectedEarnings' => 'protectedEarnings',
        'chargeAdminFee' => 'chargeAdminFee',
        'shortfall' => 'shortfall',
        'stopWhenTotalPaid' => 'stopWhenTotalPaid',
        'totalAmountToPay' => 'totalAmountToPay',
        'amountPreviouslyPaid' => 'amountPreviouslyPaid',
        'stopped' => 'stopped',
        'notes' => 'notes',
        'includeBankDetails' => 'includeBankDetails',
        'bankDetails' => 'bankDetails',
        'payments' => 'payments',
        'payee' => 'payee',
        'payeeName' => 'payeeName',
        'documentCount' => 'documentCount',
        'documents' => 'documents',
        'employee' => 'employee',
        'id' => 'id'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var array<string, string>
     */
    protected static array $setters = [
        'type' => 'setType',
        'carryForwardShortfall' => 'setCarryForwardShortfall',
        'allowProtectedEarnings' => 'setAllowProtectedEarnings',
        'autoDeduction' => 'setAutoDeduction',
        'reference' => 'setReference',
        'issueDate' => 'setIssueDate',
        'applyFrom' => 'setApplyFrom',
        'applyUntil' => 'setApplyUntil',
        'deductionIsPercentage' => 'setDeductionIsPercentage',
        'deduction' => 'setDeduction',
        'protectedEarningsIsPercentage' => 'setProtectedEarningsIsPercentage',
        'protectedEarnings' => 'setProtectedEarnings',
        'chargeAdminFee' => 'setChargeAdminFee',
        'shortfall' => 'setShortfall',
        'stopWhenTotalPaid' => 'setStopWhenTotalPaid',
        'totalAmountToPay' => 'setTotalAmountToPay',
        'amountPreviouslyPaid' => 'setAmountPreviouslyPaid',
        'stopped' => 'setStopped',
        'notes' => 'setNotes',
        'includeBankDetails' => 'setIncludeBankDetails',
        'bankDetails' => 'setBankDetails',
        'payments' => 'setPayments',
        'payee' => 'setPayee',
        'payeeName' => 'setPayeeName',
        'documentCount' => 'setDocumentCount',
        'documents' => 'setDocuments',
        'employee' => 'setEmployee',
        'id' => 'setId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var array<string, string>
     */
    protected static array $getters = [
        'type' => 'getType',
        'carryForwardShortfall' => 'getCarryForwardShortfall',
        'allowProtectedEarnings' => 'getAllowProtectedEarnings',
        'autoDeduction' => 'getAutoDeduction',
        'reference' => 'getReference',
        'issueDate' => 'getIssueDate',
        'applyFrom' => 'getApplyFrom',
        'applyUntil' => 'getApplyUntil',
        'deductionIsPercentage' => 'getDeductionIsPercentage',
        'deduction' => 'getDeduction',
        'protectedEarningsIsPercentage' => 'getProtectedEarningsIsPercentage',
        'protectedEarnings' => 'getProtectedEarnings',
        'chargeAdminFee' => 'getChargeAdminFee',
        'shortfall' => 'getShortfall',
        'stopWhenTotalPaid' => 'getStopWhenTotalPaid',
        'totalAmountToPay' => 'getTotalAmountToPay',
        'amountPreviouslyPaid' => 'getAmountPreviouslyPaid',
        'stopped' => 'getStopped',
        'notes' => 'getNotes',
        'includeBankDetails' => 'getIncludeBankDetails',
        'bankDetails' => 'getBankDetails',
        'payments' => 'getPayments',
        'payee' => 'getPayee',
        'payeeName' => 'getPayeeName',
        'documentCount' => 'getDocumentCount',
        'documents' => 'getDocuments',
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
    public function __construct(array $data = null)
    {
        $this->setIfExists('type', $data ?? [], null);
        $this->setIfExists('carryForwardShortfall', $data ?? [], null);
        $this->setIfExists('allowProtectedEarnings', $data ?? [], null);
        $this->setIfExists('autoDeduction', $data ?? [], null);
        $this->setIfExists('reference', $data ?? [], null);
        $this->setIfExists('issueDate', $data ?? [], null);
        $this->setIfExists('applyFrom', $data ?? [], null);
        $this->setIfExists('applyUntil', $data ?? [], null);
        $this->setIfExists('deductionIsPercentage', $data ?? [], null);
        $this->setIfExists('deduction', $data ?? [], null);
        $this->setIfExists('protectedEarningsIsPercentage', $data ?? [], null);
        $this->setIfExists('protectedEarnings', $data ?? [], null);
        $this->setIfExists('chargeAdminFee', $data ?? [], null);
        $this->setIfExists('shortfall', $data ?? [], null);
        $this->setIfExists('stopWhenTotalPaid', $data ?? [], null);
        $this->setIfExists('totalAmountToPay', $data ?? [], null);
        $this->setIfExists('amountPreviouslyPaid', $data ?? [], null);
        $this->setIfExists('stopped', $data ?? [], null);
        $this->setIfExists('notes', $data ?? [], null);
        $this->setIfExists('includeBankDetails', $data ?? [], null);
        $this->setIfExists('bankDetails', $data ?? [], null);
        $this->setIfExists('payments', $data ?? [], null);
        $this->setIfExists('payee', $data ?? [], null);
        $this->setIfExists('payeeName', $data ?? [], null);
        $this->setIfExists('documentCount', $data ?? [], null);
        $this->setIfExists('documents', $data ?? [], null);
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

        if (!is_null($this->container['reference']) && (mb_strlen($this->container['reference']) > 100)) {
            $invalidProperties[] = "invalid value for 'reference', the character length must be smaller than or equal to 100.";
        }

        if (!is_null($this->container['notes']) && (mb_strlen($this->container['notes']) > 300)) {
            $invalidProperties[] = "invalid value for 'notes', the character length must be smaller than or equal to 300.";
        }

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
     * Gets type
     *
     * @return \SynergiTech\Staffology\Model\AttachmentOrderType|null
     */
    public function getType(): ?\SynergiTech\Staffology\Model\AttachmentOrderType
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param \SynergiTech\Staffology\Model\AttachmentOrderType|null $type type
     *
     * @return $this
     */
    public function setType(?\SynergiTech\Staffology\Model\AttachmentOrderType $type): static
    {
        if (is_null($type)) {
            throw new InvalidArgumentException('non-nullable type cannot be null');
        }
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets carryForwardShortfall
     *
     * @return bool|null
     */
    public function getCarryForwardShortfall(): ?bool
    {
        return $this->container['carryForwardShortfall'];
    }

    /**
     * Sets carryForwardShortfall
     *
     * @param bool|null $carryForwardShortfall [ReadOnly] Whether or not shortfalls should be carried forward
     *
     * @return $this
     */
    public function setCarryForwardShortfall(?bool $carryForwardShortfall): static
    {
        if (is_null($carryForwardShortfall)) {
            throw new InvalidArgumentException('non-nullable carryForwardShortfall cannot be null');
        }
        $this->container['carryForwardShortfall'] = $carryForwardShortfall;

        return $this;
    }

    /**
     * Gets allowProtectedEarnings
     *
     * @return bool|null
     */
    public function getAllowProtectedEarnings(): ?bool
    {
        return $this->container['allowProtectedEarnings'];
    }

    /**
     * Sets allowProtectedEarnings
     *
     * @param bool|null $allowProtectedEarnings [ReadOnly] Whether or not shortfalls should be carried forward
     *
     * @return $this
     */
    public function setAllowProtectedEarnings(?bool $allowProtectedEarnings): static
    {
        if (is_null($allowProtectedEarnings)) {
            throw new InvalidArgumentException('non-nullable allowProtectedEarnings cannot be null');
        }
        $this->container['allowProtectedEarnings'] = $allowProtectedEarnings;

        return $this;
    }

    /**
     * Gets autoDeduction
     *
     * @return bool|null
     */
    public function getAutoDeduction(): ?bool
    {
        return $this->container['autoDeduction'];
    }

    /**
     * Sets autoDeduction
     *
     * @param bool|null $autoDeduction [readonly] Whether or not the amount to be deducted is automatically calculated
     *
     * @return $this
     */
    public function setAutoDeduction(?bool $autoDeduction): static
    {
        if (is_null($autoDeduction)) {
            throw new InvalidArgumentException('non-nullable autoDeduction cannot be null');
        }
        $this->container['autoDeduction'] = $autoDeduction;

        return $this;
    }

    /**
     * Gets reference
     *
     * @return string|null
     */
    public function getReference(): ?string
    {
        return $this->container['reference'];
    }

    /**
     * Sets reference
     *
     * @param string|null $reference The reference which appeared on the court paperwork
     *
     * @return $this
     */
    public function setReference(?string $reference): static
    {
        if (is_null($reference)) {
            array_push($this->openAPINullablesSetToNull, 'reference');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('reference', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($reference) && (mb_strlen($reference) > 100)) {
            throw new InvalidArgumentException('invalid length for $reference when calling AttachmentOrder., must be smaller than or equal to 100.');
        }

        $this->container['reference'] = $reference;

        return $this;
    }

    /**
     * Gets issueDate
     *
     * @return \DateTime|null
     */
    public function getIssueDate(): ?\DateTime
    {
        return $this->container['issueDate'];
    }

    /**
     * Sets issueDate
     *
     * @param \DateTime|null $issueDate The date of issue for this Order
     *
     * @return $this
     */
    public function setIssueDate(?\DateTime $issueDate): static
    {
        if (is_null($issueDate)) {
            throw new InvalidArgumentException('non-nullable issueDate cannot be null');
        }
        $this->container['issueDate'] = $issueDate;

        return $this;
    }

    /**
     * Gets applyFrom
     *
     * @return \DateTime|null
     */
    public function getApplyFrom(): ?\DateTime
    {
        return $this->container['applyFrom'];
    }

    /**
     * Sets applyFrom
     *
     * @param \DateTime|null $applyFrom The date from which to apply this Order
     *
     * @return $this
     */
    public function setApplyFrom(?\DateTime $applyFrom): static
    {
        if (is_null($applyFrom)) {
            throw new InvalidArgumentException('non-nullable applyFrom cannot be null');
        }
        $this->container['applyFrom'] = $applyFrom;

        return $this;
    }

    /**
     * Gets applyUntil
     *
     * @return \DateTime|null
     */
    public function getApplyUntil(): ?\DateTime
    {
        return $this->container['applyUntil'];
    }

    /**
     * Sets applyUntil
     *
     * @param \DateTime|null $applyUntil An optional date on which to stop applying this order
     *
     * @return $this
     */
    public function setApplyUntil(?\DateTime $applyUntil): static
    {
        if (is_null($applyUntil)) {
            array_push($this->openAPINullablesSetToNull, 'applyUntil');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('applyUntil', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['applyUntil'] = $applyUntil;

        return $this;
    }

    /**
     * Gets deductionIsPercentage
     *
     * @return bool|null
     */
    public function getDeductionIsPercentage(): ?bool
    {
        return $this->container['deductionIsPercentage'];
    }

    /**
     * Sets deductionIsPercentage
     *
     * @param bool|null $deductionIsPercentage Whether or not the amount given for Deduction is a percentage rather than a fixed amount
     *
     * @return $this
     */
    public function setDeductionIsPercentage(?bool $deductionIsPercentage): static
    {
        if (is_null($deductionIsPercentage)) {
            throw new InvalidArgumentException('non-nullable deductionIsPercentage cannot be null');
        }
        $this->container['deductionIsPercentage'] = $deductionIsPercentage;

        return $this;
    }

    /**
     * Gets deduction
     *
     * @return float|null
     */
    public function getDeduction(): ?float
    {
        return $this->container['deduction'];
    }

    /**
     * Sets deduction
     *
     * @param float|null $deduction The percentage or amount (depending on DeductionIsPercentage) to deduct
     *
     * @return $this
     */
    public function setDeduction(?float $deduction): static
    {
        if (is_null($deduction)) {
            throw new InvalidArgumentException('non-nullable deduction cannot be null');
        }
        $this->container['deduction'] = $deduction;

        return $this;
    }

    /**
     * Gets protectedEarningsIsPercentage
     *
     * @return bool|null
     */
    public function getProtectedEarningsIsPercentage(): ?bool
    {
        return $this->container['protectedEarningsIsPercentage'];
    }

    /**
     * Sets protectedEarningsIsPercentage
     *
     * @param bool|null $protectedEarningsIsPercentage Whether or not the amount for ProtectedEarnings is a percentage rather than a fixed amount.
     *
     * @return $this
     */
    public function setProtectedEarningsIsPercentage(?bool $protectedEarningsIsPercentage): static
    {
        if (is_null($protectedEarningsIsPercentage)) {
            throw new InvalidArgumentException('non-nullable protectedEarningsIsPercentage cannot be null');
        }
        $this->container['protectedEarningsIsPercentage'] = $protectedEarningsIsPercentage;

        return $this;
    }

    /**
     * Gets protectedEarnings
     *
     * @return float|null
     */
    public function getProtectedEarnings(): ?float
    {
        return $this->container['protectedEarnings'];
    }

    /**
     * Sets protectedEarnings
     *
     * @param float|null $protectedEarnings The percentage or amount or percentage (depending on ProtectedEarningsIsPercentage) to protect
     *
     * @return $this
     */
    public function setProtectedEarnings(?float $protectedEarnings): static
    {
        if (is_null($protectedEarnings)) {
            throw new InvalidArgumentException('non-nullable protectedEarnings cannot be null');
        }
        $this->container['protectedEarnings'] = $protectedEarnings;

        return $this;
    }

    /**
     * Gets chargeAdminFee
     *
     * @return bool|null
     */
    public function getChargeAdminFee(): ?bool
    {
        return $this->container['chargeAdminFee'];
    }

    /**
     * Sets chargeAdminFee
     *
     * @param bool|null $chargeAdminFee Whether or not a £1 admin fee should be deducted for this order
     *
     * @return $this
     */
    public function setChargeAdminFee(?bool $chargeAdminFee): static
    {
        if (is_null($chargeAdminFee)) {
            throw new InvalidArgumentException('non-nullable chargeAdminFee cannot be null');
        }
        $this->container['chargeAdminFee'] = $chargeAdminFee;

        return $this;
    }

    /**
     * Gets shortfall
     *
     * @return float|null
     */
    public function getShortfall(): ?float
    {
        return $this->container['shortfall'];
    }

    /**
     * Sets shortfall
     *
     * @param float|null $shortfall Any shortfall that is being carried forward
     *
     * @return $this
     */
    public function setShortfall(?float $shortfall): static
    {
        if (is_null($shortfall)) {
            throw new InvalidArgumentException('non-nullable shortfall cannot be null');
        }
        $this->container['shortfall'] = $shortfall;

        return $this;
    }

    /**
     * Gets stopWhenTotalPaid
     *
     * @return bool|null
     */
    public function getStopWhenTotalPaid(): ?bool
    {
        return $this->container['stopWhenTotalPaid'];
    }

    /**
     * Sets stopWhenTotalPaid
     *
     * @param bool|null $stopWhenTotalPaid Whether or not this order should be stopped once a total amount has been paid
     *
     * @return $this
     */
    public function setStopWhenTotalPaid(?bool $stopWhenTotalPaid): static
    {
        if (is_null($stopWhenTotalPaid)) {
            throw new InvalidArgumentException('non-nullable stopWhenTotalPaid cannot be null');
        }
        $this->container['stopWhenTotalPaid'] = $stopWhenTotalPaid;

        return $this;
    }

    /**
     * Gets totalAmountToPay
     *
     * @return float|null
     */
    public function getTotalAmountToPay(): ?float
    {
        return $this->container['totalAmountToPay'];
    }

    /**
     * Sets totalAmountToPay
     *
     * @param float|null $totalAmountToPay The Total amount that needs to be paid for this Order
     *
     * @return $this
     */
    public function setTotalAmountToPay(?float $totalAmountToPay): static
    {
        if (is_null($totalAmountToPay)) {
            throw new InvalidArgumentException('non-nullable totalAmountToPay cannot be null');
        }
        $this->container['totalAmountToPay'] = $totalAmountToPay;

        return $this;
    }

    /**
     * Gets amountPreviouslyPaid
     *
     * @return float|null
     */
    public function getAmountPreviouslyPaid(): ?float
    {
        return $this->container['amountPreviouslyPaid'];
    }

    /**
     * Sets amountPreviouslyPaid
     *
     * @param float|null $amountPreviouslyPaid Any amount that has previously been paid towards this Order
     *
     * @return $this
     */
    public function setAmountPreviouslyPaid(?float $amountPreviouslyPaid): static
    {
        if (is_null($amountPreviouslyPaid)) {
            throw new InvalidArgumentException('non-nullable amountPreviouslyPaid cannot be null');
        }
        $this->container['amountPreviouslyPaid'] = $amountPreviouslyPaid;

        return $this;
    }

    /**
     * Gets stopped
     *
     * @return bool|null
     */
    public function getStopped(): ?bool
    {
        return $this->container['stopped'];
    }

    /**
     * Sets stopped
     *
     * @param bool|null $stopped [readonly] Whether or not this Order has been stopped.  This is set automatically when either it's paid in full or the ApplyUntil date has been reached.
     *
     * @return $this
     */
    public function setStopped(?bool $stopped): static
    {
        if (is_null($stopped)) {
            throw new InvalidArgumentException('non-nullable stopped cannot be null');
        }
        $this->container['stopped'] = $stopped;

        return $this;
    }

    /**
     * Gets notes
     *
     * @return string|null
     */
    public function getNotes(): ?string
    {
        return $this->container['notes'];
    }

    /**
     * Sets notes
     *
     * @param string|null $notes A free-form text field to record any comments
     *
     * @return $this
     */
    public function setNotes(?string $notes): static
    {
        if (is_null($notes)) {
            array_push($this->openAPINullablesSetToNull, 'notes');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('notes', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($notes) && (mb_strlen($notes) > 300)) {
            throw new InvalidArgumentException('invalid length for $notes when calling AttachmentOrder., must be smaller than or equal to 300.');
        }

        $this->container['notes'] = $notes;

        return $this;
    }

    /**
     * Gets includeBankDetails
     *
     * @return bool|null
     */
    public function getIncludeBankDetails(): ?bool
    {
        return $this->container['includeBankDetails'];
    }

    /**
     * Sets includeBankDetails
     *
     * @param bool|null $includeBankDetails includeBankDetails
     *
     * @return $this
     */
    public function setIncludeBankDetails(?bool $includeBankDetails): static
    {
        if (is_null($includeBankDetails)) {
            throw new InvalidArgumentException('non-nullable includeBankDetails cannot be null');
        }
        $this->container['includeBankDetails'] = $includeBankDetails;

        return $this;
    }

    /**
     * Gets bankDetails
     *
     * @return \SynergiTech\Staffology\Model\BankDetails|null
     */
    public function getBankDetails(): ?\SynergiTech\Staffology\Model\BankDetails
    {
        return $this->container['bankDetails'];
    }

    /**
     * Sets bankDetails
     *
     * @param \SynergiTech\Staffology\Model\BankDetails|null $bankDetails bankDetails
     *
     * @return $this
     */
    public function setBankDetails(?\SynergiTech\Staffology\Model\BankDetails $bankDetails): static
    {
        if (is_null($bankDetails)) {
            throw new InvalidArgumentException('non-nullable bankDetails cannot be null');
        }
        $this->container['bankDetails'] = $bankDetails;

        return $this;
    }

    /**
     * Gets payments
     *
     * @return \SynergiTech\Staffology\Model\AttachmentOrderPayment[]|null
     */
    public function getPayments(): ?array
    {
        return $this->container['payments'];
    }

    /**
     * Sets payments
     *
     * @param \SynergiTech\Staffology\Model\AttachmentOrderPayment[]|null $payments [readonly] Payments made towards this order. Only populated when viewed as a report.
     *
     * @return $this
     */
    public function setPayments(?array $payments): static
    {
        if (is_null($payments)) {
            array_push($this->openAPINullablesSetToNull, 'payments');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('payments', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['payments'] = $payments;

        return $this;
    }

    /**
     * Gets payee
     *
     * @return string|null
     */
    public function getPayee(): ?string
    {
        return $this->container['payee'];
    }

    /**
     * Sets payee
     *
     * @param string|null $payee The Id of the Payee, if any, that deductions are to be paid to.
     *
     * @return $this
     */
    public function setPayee(?string $payee): static
    {
        if (is_null($payee)) {
            array_push($this->openAPINullablesSetToNull, 'payee');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('payee', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['payee'] = $payee;

        return $this;
    }

    /**
     * Gets payeeName
     *
     * @return string|null
     */
    public function getPayeeName(): ?string
    {
        return $this->container['payeeName'];
    }

    /**
     * Sets payeeName
     *
     * @param string|null $payeeName The name of the Payee, if any, that deductions are to be paid to.
     *
     * @return $this
     */
    public function setPayeeName(?string $payeeName): static
    {
        if (is_null($payeeName)) {
            array_push($this->openAPINullablesSetToNull, 'payeeName');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('payeeName', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['payeeName'] = $payeeName;

        return $this;
    }

    /**
     * Gets documentCount
     *
     * @return int|null
     */
    public function getDocumentCount(): ?int
    {
        return $this->container['documentCount'];
    }

    /**
     * Sets documentCount
     *
     * @param int|null $documentCount [readonly] The number of attachments associated with this model
     *
     * @return $this
     */
    public function setDocumentCount(?int $documentCount): static
    {
        if (is_null($documentCount)) {
            throw new InvalidArgumentException('non-nullable documentCount cannot be null');
        }
        $this->container['documentCount'] = $documentCount;

        return $this;
    }

    /**
     * Gets documents
     *
     * @return \SynergiTech\Staffology\Model\Item[]|null
     */
    public function getDocuments(): ?array
    {
        return $this->container['documents'];
    }

    /**
     * Sets documents
     *
     * @param \SynergiTech\Staffology\Model\Item[]|null $documents [readonly] The attachments associated with this model
     *
     * @return $this
     */
    public function setDocuments(?array $documents): static
    {
        if (is_null($documents)) {
            array_push($this->openAPINullablesSetToNull, 'documents');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('documents', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['documents'] = $documents;

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


