<?php
/**
 * AttachmentOrderPayment
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
 * AttachmentOrderPayment Class Doc Comment
 *
 * @description Used to represent a payment towards an Attachment of Earnings Order (AEO)
 * @package  SynergiTech\Staffology
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements ArrayAccess<string, mixed>
 */
class AttachmentOrderPayment implements ModelInterface, ArrayAccess, JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'AttachmentOrderPayment';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var array<string, string>
      */
    protected static array $openAPITypes = [
        'attachmentOrder' => '\SynergiTech\Staffology\Model\Item',
        'taxYear' => '\SynergiTech\Staffology\Model\TaxYear',
        'payPeriod' => '\SynergiTech\Staffology\Model\PayPeriods',
        'date' => '\DateTime',
        'description' => 'string',
        'attachablePay' => 'float',
        'protectedPay' => 'float',
        'otherAttachmentOrderDeductions' => 'float',
        'desiredDeduction' => 'float',
        'shortfall' => 'float',
        'totalPaid' => 'float',
        'resultingDeduction' => 'float',
        'resultingShortfall' => 'float',
        'adminFee' => 'float',
        'employee' => '\SynergiTech\Staffology\Model\Item',
        'id' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'attachmentOrder' => null,
        'taxYear' => null,
        'payPeriod' => null,
        'date' => 'date',
        'description' => null,
        'attachablePay' => 'double',
        'protectedPay' => 'double',
        'otherAttachmentOrderDeductions' => 'double',
        'desiredDeduction' => 'double',
        'shortfall' => 'double',
        'totalPaid' => 'double',
        'resultingDeduction' => 'double',
        'resultingShortfall' => 'double',
        'adminFee' => 'double',
        'employee' => null,
        'id' => 'uuid'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var array<string, bool>
      */
    protected static array $openAPINullables = [
        'attachmentOrder' => false,
        'taxYear' => false,
        'payPeriod' => false,
        'date' => false,
        'description' => true,
        'attachablePay' => false,
        'protectedPay' => false,
        'otherAttachmentOrderDeductions' => false,
        'desiredDeduction' => false,
        'shortfall' => false,
        'totalPaid' => false,
        'resultingDeduction' => false,
        'resultingShortfall' => false,
        'adminFee' => false,
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
        'attachmentOrder' => 'attachmentOrder',
        'taxYear' => 'taxYear',
        'payPeriod' => 'payPeriod',
        'date' => 'date',
        'description' => 'description',
        'attachablePay' => 'attachablePay',
        'protectedPay' => 'protectedPay',
        'otherAttachmentOrderDeductions' => 'otherAttachmentOrderDeductions',
        'desiredDeduction' => 'desiredDeduction',
        'shortfall' => 'shortfall',
        'totalPaid' => 'totalPaid',
        'resultingDeduction' => 'resultingDeduction',
        'resultingShortfall' => 'resultingShortfall',
        'adminFee' => 'adminFee',
        'employee' => 'employee',
        'id' => 'id'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var array<string, string>
     */
    protected static array $setters = [
        'attachmentOrder' => 'setAttachmentOrder',
        'taxYear' => 'setTaxYear',
        'payPeriod' => 'setPayPeriod',
        'date' => 'setDate',
        'description' => 'setDescription',
        'attachablePay' => 'setAttachablePay',
        'protectedPay' => 'setProtectedPay',
        'otherAttachmentOrderDeductions' => 'setOtherAttachmentOrderDeductions',
        'desiredDeduction' => 'setDesiredDeduction',
        'shortfall' => 'setShortfall',
        'totalPaid' => 'setTotalPaid',
        'resultingDeduction' => 'setResultingDeduction',
        'resultingShortfall' => 'setResultingShortfall',
        'adminFee' => 'setAdminFee',
        'employee' => 'setEmployee',
        'id' => 'setId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var array<string, string>
     */
    protected static array $getters = [
        'attachmentOrder' => 'getAttachmentOrder',
        'taxYear' => 'getTaxYear',
        'payPeriod' => 'getPayPeriod',
        'date' => 'getDate',
        'description' => 'getDescription',
        'attachablePay' => 'getAttachablePay',
        'protectedPay' => 'getProtectedPay',
        'otherAttachmentOrderDeductions' => 'getOtherAttachmentOrderDeductions',
        'desiredDeduction' => 'getDesiredDeduction',
        'shortfall' => 'getShortfall',
        'totalPaid' => 'getTotalPaid',
        'resultingDeduction' => 'getResultingDeduction',
        'resultingShortfall' => 'getResultingShortfall',
        'adminFee' => 'getAdminFee',
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
        $this->setIfExists('attachmentOrder', $data ?? [], null);
        $this->setIfExists('taxYear', $data ?? [], null);
        $this->setIfExists('payPeriod', $data ?? [], null);
        $this->setIfExists('date', $data ?? [], null);
        $this->setIfExists('description', $data ?? [], null);
        $this->setIfExists('attachablePay', $data ?? [], null);
        $this->setIfExists('protectedPay', $data ?? [], null);
        $this->setIfExists('otherAttachmentOrderDeductions', $data ?? [], null);
        $this->setIfExists('desiredDeduction', $data ?? [], null);
        $this->setIfExists('shortfall', $data ?? [], null);
        $this->setIfExists('totalPaid', $data ?? [], null);
        $this->setIfExists('resultingDeduction', $data ?? [], null);
        $this->setIfExists('resultingShortfall', $data ?? [], null);
        $this->setIfExists('adminFee', $data ?? [], null);
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
     * Gets attachmentOrder
     *
     * @return \SynergiTech\Staffology\Model\Item|null
     */
    public function getAttachmentOrder(): ?\SynergiTech\Staffology\Model\Item
    {
        return $this->container['attachmentOrder'];
    }

    /**
     * Sets attachmentOrder
     *
     * @param \SynergiTech\Staffology\Model\Item|null $attachmentOrder attachmentOrder
     *
     * @return $this
     */
    public function setAttachmentOrder(?\SynergiTech\Staffology\Model\Item $attachmentOrder): static
    {
        if (is_null($attachmentOrder)) {
            throw new InvalidArgumentException('non-nullable attachmentOrder cannot be null');
        }
        $this->container['attachmentOrder'] = $attachmentOrder;

        return $this;
    }

    /**
     * Gets taxYear
     *
     * @return \SynergiTech\Staffology\Model\TaxYear|null
     */
    public function getTaxYear(): ?\SynergiTech\Staffology\Model\TaxYear
    {
        return $this->container['taxYear'];
    }

    /**
     * Sets taxYear
     *
     * @param \SynergiTech\Staffology\Model\TaxYear|null $taxYear taxYear
     *
     * @return $this
     */
    public function setTaxYear(?\SynergiTech\Staffology\Model\TaxYear $taxYear): static
    {
        if (is_null($taxYear)) {
            throw new InvalidArgumentException('non-nullable taxYear cannot be null');
        }
        $this->container['taxYear'] = $taxYear;

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
     * Gets date
     *
     * @return \DateTime|null
     */
    public function getDate(): ?\DateTime
    {
        return $this->container['date'];
    }

    /**
     * Sets date
     *
     * @param \DateTime|null $date [readonly] The date this deduction was made
     *
     * @return $this
     */
    public function setDate(?\DateTime $date): static
    {
        if (is_null($date)) {
            throw new InvalidArgumentException('non-nullable date cannot be null');
        }
        $this->container['date'] = $date;

        return $this;
    }

    /**
     * Gets description
     *
     * @return string|null
     */
    public function getDescription(): ?string
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string|null $description [readonly] Description of deduction, usually the reference from the AttachmentOrder
     *
     * @return $this
     */
    public function setDescription(?string $description): static
    {
        if (is_null($description)) {
            array_push($this->openAPINullablesSetToNull, 'description');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('description', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets attachablePay
     *
     * @return float|null
     */
    public function getAttachablePay(): ?float
    {
        return $this->container['attachablePay'];
    }

    /**
     * Sets attachablePay
     *
     * @param float|null $attachablePay [readonly] The total Attachable pay for the Employee on this PayRun
     *
     * @return $this
     */
    public function setAttachablePay(?float $attachablePay): static
    {
        if (is_null($attachablePay)) {
            throw new InvalidArgumentException('non-nullable attachablePay cannot be null');
        }
        $this->container['attachablePay'] = $attachablePay;

        return $this;
    }

    /**
     * Gets protectedPay
     *
     * @return float|null
     */
    public function getProtectedPay(): ?float
    {
        return $this->container['protectedPay'];
    }

    /**
     * Sets protectedPay
     *
     * @param float|null $protectedPay [readonly] The amount of the Attachable Pay that must be protected
     *
     * @return $this
     */
    public function setProtectedPay(?float $protectedPay): static
    {
        if (is_null($protectedPay)) {
            throw new InvalidArgumentException('non-nullable protectedPay cannot be null');
        }
        $this->container['protectedPay'] = $protectedPay;

        return $this;
    }

    /**
     * Gets otherAttachmentOrderDeductions
     *
     * @return float|null
     */
    public function getOtherAttachmentOrderDeductions(): ?float
    {
        return $this->container['otherAttachmentOrderDeductions'];
    }

    /**
     * Sets otherAttachmentOrderDeductions
     *
     * @param float|null $otherAttachmentOrderDeductions [readonly] Deductions made on this PayRun for this employee due to  other higher priority AttachmentOrders
     *
     * @return $this
     */
    public function setOtherAttachmentOrderDeductions(?float $otherAttachmentOrderDeductions): static
    {
        if (is_null($otherAttachmentOrderDeductions)) {
            throw new InvalidArgumentException('non-nullable otherAttachmentOrderDeductions cannot be null');
        }
        $this->container['otherAttachmentOrderDeductions'] = $otherAttachmentOrderDeductions;

        return $this;
    }

    /**
     * Gets desiredDeduction
     *
     * @return float|null
     */
    public function getDesiredDeduction(): ?float
    {
        return $this->container['desiredDeduction'];
    }

    /**
     * Sets desiredDeduction
     *
     * @param float|null $desiredDeduction [readonly] The amount that should be deducted, if arrestable pay is available.  Not including any shortfall
     *
     * @return $this
     */
    public function setDesiredDeduction(?float $desiredDeduction): static
    {
        if (is_null($desiredDeduction)) {
            throw new InvalidArgumentException('non-nullable desiredDeduction cannot be null');
        }
        $this->container['desiredDeduction'] = $desiredDeduction;

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
     * @param float|null $shortfall [readonly] Any shortfall (ie arrears) that existed before this PayRun.
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
     * Gets totalPaid
     *
     * @return float|null
     */
    public function getTotalPaid(): ?float
    {
        return $this->container['totalPaid'];
    }

    /**
     * Sets totalPaid
     *
     * @param float|null $totalPaid [readonly] Total amount paid to date, including this deduction.
     *
     * @return $this
     */
    public function setTotalPaid(?float $totalPaid): static
    {
        if (is_null($totalPaid)) {
            throw new InvalidArgumentException('non-nullable totalPaid cannot be null');
        }
        $this->container['totalPaid'] = $totalPaid;

        return $this;
    }

    /**
     * Gets resultingDeduction
     *
     * @return float|null
     */
    public function getResultingDeduction(): ?float
    {
        return $this->container['resultingDeduction'];
    }

    /**
     * Sets resultingDeduction
     *
     * @param float|null $resultingDeduction [readonly] The actual amount deducted
     *
     * @return $this
     */
    public function setResultingDeduction(?float $resultingDeduction): static
    {
        if (is_null($resultingDeduction)) {
            throw new InvalidArgumentException('non-nullable resultingDeduction cannot be null');
        }
        $this->container['resultingDeduction'] = $resultingDeduction;

        return $this;
    }

    /**
     * Gets resultingShortfall
     *
     * @return float|null
     */
    public function getResultingShortfall(): ?float
    {
        return $this->container['resultingShortfall'];
    }

    /**
     * Sets resultingShortfall
     *
     * @param float|null $resultingShortfall [readonly] The resulting shortfall (including any shortfall from previous periods
     *
     * @return $this
     */
    public function setResultingShortfall(?float $resultingShortfall): static
    {
        if (is_null($resultingShortfall)) {
            throw new InvalidArgumentException('non-nullable resultingShortfall cannot be null');
        }
        $this->container['resultingShortfall'] = $resultingShortfall;

        return $this;
    }

    /**
     * Gets adminFee
     *
     * @return float|null
     */
    public function getAdminFee(): ?float
    {
        return $this->container['adminFee'];
    }

    /**
     * Sets adminFee
     *
     * @param float|null $adminFee [readonly] Any admin fee charged
     *
     * @return $this
     */
    public function setAdminFee(?float $adminFee): static
    {
        if (is_null($adminFee)) {
            throw new InvalidArgumentException('non-nullable adminFee cannot be null');
        }
        $this->container['adminFee'] = $adminFee;

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

