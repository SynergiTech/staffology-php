<?php
/**
 * PapdisPayrollPeriod
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
 * PapdisPayrollPeriod Class Doc Comment
 *
 * @package  SynergiTech\Staffology
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements ArrayAccess<string, mixed>
 */
class PapdisPayrollPeriod implements ModelInterface, ArrayAccess, JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'PapdisPayrollPeriod';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var array<string, string>
      */
    protected static array $openAPITypes = [
        'payPeriodStartDate' => '\DateTime',
        'payPeriodEndDate' => '\DateTime',
        'contributionDeductionDate' => '\DateTime',
        'frequencyCode' => 'string',
        'taxPeriod' => 'int',
        'payReferenceStartDate' => '\DateTime',
        'payReferenceEndDate' => '\DateTime',
        'employees' => '\SynergiTech\Staffology\Model\PapdisEmployee[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'payPeriodStartDate' => 'date',
        'payPeriodEndDate' => 'date',
        'contributionDeductionDate' => 'date',
        'frequencyCode' => null,
        'taxPeriod' => 'int32',
        'payReferenceStartDate' => 'date',
        'payReferenceEndDate' => 'date',
        'employees' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var array<string, bool>
      */
    protected static array $openAPINullables = [
        'payPeriodStartDate' => false,
        'payPeriodEndDate' => false,
        'contributionDeductionDate' => false,
        'frequencyCode' => true,
        'taxPeriod' => false,
        'payReferenceStartDate' => false,
        'payReferenceEndDate' => false,
        'employees' => true
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
        'payPeriodStartDate' => 'payPeriodStartDate',
        'payPeriodEndDate' => 'payPeriodEndDate',
        'contributionDeductionDate' => 'contributionDeductionDate',
        'frequencyCode' => 'frequencyCode',
        'taxPeriod' => 'taxPeriod',
        'payReferenceStartDate' => 'payReferenceStartDate',
        'payReferenceEndDate' => 'payReferenceEndDate',
        'employees' => 'employees'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var array<string, string>
     */
    protected static array $setters = [
        'payPeriodStartDate' => 'setPayPeriodStartDate',
        'payPeriodEndDate' => 'setPayPeriodEndDate',
        'contributionDeductionDate' => 'setContributionDeductionDate',
        'frequencyCode' => 'setFrequencyCode',
        'taxPeriod' => 'setTaxPeriod',
        'payReferenceStartDate' => 'setPayReferenceStartDate',
        'payReferenceEndDate' => 'setPayReferenceEndDate',
        'employees' => 'setEmployees'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var array<string, string>
     */
    protected static array $getters = [
        'payPeriodStartDate' => 'getPayPeriodStartDate',
        'payPeriodEndDate' => 'getPayPeriodEndDate',
        'contributionDeductionDate' => 'getContributionDeductionDate',
        'frequencyCode' => 'getFrequencyCode',
        'taxPeriod' => 'getTaxPeriod',
        'payReferenceStartDate' => 'getPayReferenceStartDate',
        'payReferenceEndDate' => 'getPayReferenceEndDate',
        'employees' => 'getEmployees'
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
        $this->setIfExists('payPeriodStartDate', $data ?? [], null);
        $this->setIfExists('payPeriodEndDate', $data ?? [], null);
        $this->setIfExists('contributionDeductionDate', $data ?? [], null);
        $this->setIfExists('frequencyCode', $data ?? [], null);
        $this->setIfExists('taxPeriod', $data ?? [], null);
        $this->setIfExists('payReferenceStartDate', $data ?? [], null);
        $this->setIfExists('payReferenceEndDate', $data ?? [], null);
        $this->setIfExists('employees', $data ?? [], null);
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
     * Gets payPeriodStartDate
     *
     * @return \DateTime|null
     */
    public function getPayPeriodStartDate(): ?\DateTime
    {
        return $this->container['payPeriodStartDate'];
    }

    /**
     * Sets payPeriodStartDate
     *
     * @param \DateTime|null $payPeriodStartDate [readonly]
     *
     * @return $this
     */
    public function setPayPeriodStartDate(?\DateTime $payPeriodStartDate): static
    {
        if (is_null($payPeriodStartDate)) {
            throw new InvalidArgumentException('non-nullable payPeriodStartDate cannot be null');
        }
        $this->container['payPeriodStartDate'] = $payPeriodStartDate;

        return $this;
    }

    /**
     * Gets payPeriodEndDate
     *
     * @return \DateTime|null
     */
    public function getPayPeriodEndDate(): ?\DateTime
    {
        return $this->container['payPeriodEndDate'];
    }

    /**
     * Sets payPeriodEndDate
     *
     * @param \DateTime|null $payPeriodEndDate [readonly]
     *
     * @return $this
     */
    public function setPayPeriodEndDate(?\DateTime $payPeriodEndDate): static
    {
        if (is_null($payPeriodEndDate)) {
            throw new InvalidArgumentException('non-nullable payPeriodEndDate cannot be null');
        }
        $this->container['payPeriodEndDate'] = $payPeriodEndDate;

        return $this;
    }

    /**
     * Gets contributionDeductionDate
     *
     * @return \DateTime|null
     */
    public function getContributionDeductionDate(): ?\DateTime
    {
        return $this->container['contributionDeductionDate'];
    }

    /**
     * Sets contributionDeductionDate
     *
     * @param \DateTime|null $contributionDeductionDate [readonly]
     *
     * @return $this
     */
    public function setContributionDeductionDate(?\DateTime $contributionDeductionDate): static
    {
        if (is_null($contributionDeductionDate)) {
            throw new InvalidArgumentException('non-nullable contributionDeductionDate cannot be null');
        }
        $this->container['contributionDeductionDate'] = $contributionDeductionDate;

        return $this;
    }

    /**
     * Gets frequencyCode
     *
     * @return string|null
     */
    public function getFrequencyCode(): ?string
    {
        return $this->container['frequencyCode'];
    }

    /**
     * Sets frequencyCode
     *
     * @param string|null $frequencyCode [readonly]
     *
     * @return $this
     */
    public function setFrequencyCode(?string $frequencyCode): static
    {
        if (is_null($frequencyCode)) {
            array_push($this->openAPINullablesSetToNull, 'frequencyCode');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('frequencyCode', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['frequencyCode'] = $frequencyCode;

        return $this;
    }

    /**
     * Gets taxPeriod
     *
     * @return int|null
     */
    public function getTaxPeriod(): ?int
    {
        return $this->container['taxPeriod'];
    }

    /**
     * Sets taxPeriod
     *
     * @param int|null $taxPeriod [readonly]
     *
     * @return $this
     */
    public function setTaxPeriod(?int $taxPeriod): static
    {
        if (is_null($taxPeriod)) {
            throw new InvalidArgumentException('non-nullable taxPeriod cannot be null');
        }
        $this->container['taxPeriod'] = $taxPeriod;

        return $this;
    }

    /**
     * Gets payReferenceStartDate
     *
     * @return \DateTime|null
     */
    public function getPayReferenceStartDate(): ?\DateTime
    {
        return $this->container['payReferenceStartDate'];
    }

    /**
     * Sets payReferenceStartDate
     *
     * @param \DateTime|null $payReferenceStartDate [readonly]
     *
     * @return $this
     */
    public function setPayReferenceStartDate(?\DateTime $payReferenceStartDate): static
    {
        if (is_null($payReferenceStartDate)) {
            throw new InvalidArgumentException('non-nullable payReferenceStartDate cannot be null');
        }
        $this->container['payReferenceStartDate'] = $payReferenceStartDate;

        return $this;
    }

    /**
     * Gets payReferenceEndDate
     *
     * @return \DateTime|null
     */
    public function getPayReferenceEndDate(): ?\DateTime
    {
        return $this->container['payReferenceEndDate'];
    }

    /**
     * Sets payReferenceEndDate
     *
     * @param \DateTime|null $payReferenceEndDate [readonly]
     *
     * @return $this
     */
    public function setPayReferenceEndDate(?\DateTime $payReferenceEndDate): static
    {
        if (is_null($payReferenceEndDate)) {
            throw new InvalidArgumentException('non-nullable payReferenceEndDate cannot be null');
        }
        $this->container['payReferenceEndDate'] = $payReferenceEndDate;

        return $this;
    }

    /**
     * Gets employees
     *
     * @return \SynergiTech\Staffology\Model\PapdisEmployee[]|null
     */
    public function getEmployees(): ?array
    {
        return $this->container['employees'];
    }

    /**
     * Sets employees
     *
     * @param \SynergiTech\Staffology\Model\PapdisEmployee[]|null $employees [readonly] Employees and contributions made in this period
     *
     * @return $this
     */
    public function setEmployees(?array $employees): static
    {
        if (is_null($employees)) {
            array_push($this->openAPINullablesSetToNull, 'employees');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('employees', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['employees'] = $employees;

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


