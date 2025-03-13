<?php
/**
 * UsageBill
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
 * UsageBill Class Doc Comment
 *
 * @package  SynergiTech\Staffology
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements ArrayAccess<string, mixed>
 */
class UsageBill implements ModelInterface, ArrayAccess, JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'UsageBill';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var array<string, string>
      */
    protected static array $openAPITypes = [
        'year' => 'int',
        'month' => 'int',
        'payslipCount' => 'int',
        'previouslyBilledPayslipCount' => 'int',
        'netCost' => 'float',
        'discount' => 'float',
        'partnerDiscountAmount' => 'float',
        'monthlyMinimum' => 'float',
        'total' => 'float',
        'paid' => 'bool',
        'usage' => '\SynergiTech\Staffology\Model\Item[]',
        'accountingCustomerId' => 'string',
        'accountingInvoiceId' => 'string',
        'accountingInvoiceLink' => 'string',
        'useNetSuite' => 'bool',
        'id' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'year' => 'int32',
        'month' => 'int32',
        'payslipCount' => 'int32',
        'previouslyBilledPayslipCount' => 'int32',
        'netCost' => 'double',
        'discount' => 'double',
        'partnerDiscountAmount' => 'double',
        'monthlyMinimum' => 'double',
        'total' => 'double',
        'paid' => null,
        'usage' => null,
        'accountingCustomerId' => null,
        'accountingInvoiceId' => null,
        'accountingInvoiceLink' => null,
        'useNetSuite' => null,
        'id' => 'uuid'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var array<string, bool>
      */
    protected static array $openAPINullables = [
        'year' => false,
        'month' => false,
        'payslipCount' => false,
        'previouslyBilledPayslipCount' => false,
        'netCost' => false,
        'discount' => false,
        'partnerDiscountAmount' => false,
        'monthlyMinimum' => false,
        'total' => false,
        'paid' => false,
        'usage' => true,
        'accountingCustomerId' => true,
        'accountingInvoiceId' => true,
        'accountingInvoiceLink' => true,
        'useNetSuite' => false,
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
        'year' => 'year',
        'month' => 'month',
        'payslipCount' => 'payslipCount',
        'previouslyBilledPayslipCount' => 'previouslyBilledPayslipCount',
        'netCost' => 'netCost',
        'discount' => 'discount',
        'partnerDiscountAmount' => 'partnerDiscountAmount',
        'monthlyMinimum' => 'monthlyMinimum',
        'total' => 'total',
        'paid' => 'paid',
        'usage' => 'usage',
        'accountingCustomerId' => 'accountingCustomerId',
        'accountingInvoiceId' => 'accountingInvoiceId',
        'accountingInvoiceLink' => 'accountingInvoiceLink',
        'useNetSuite' => 'useNetSuite',
        'id' => 'id'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var array<string, string>
     */
    protected static array $setters = [
        'year' => 'setYear',
        'month' => 'setMonth',
        'payslipCount' => 'setPayslipCount',
        'previouslyBilledPayslipCount' => 'setPreviouslyBilledPayslipCount',
        'netCost' => 'setNetCost',
        'discount' => 'setDiscount',
        'partnerDiscountAmount' => 'setPartnerDiscountAmount',
        'monthlyMinimum' => 'setMonthlyMinimum',
        'total' => 'setTotal',
        'paid' => 'setPaid',
        'usage' => 'setUsage',
        'accountingCustomerId' => 'setAccountingCustomerId',
        'accountingInvoiceId' => 'setAccountingInvoiceId',
        'accountingInvoiceLink' => 'setAccountingInvoiceLink',
        'useNetSuite' => 'setUseNetSuite',
        'id' => 'setId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var array<string, string>
     */
    protected static array $getters = [
        'year' => 'getYear',
        'month' => 'getMonth',
        'payslipCount' => 'getPayslipCount',
        'previouslyBilledPayslipCount' => 'getPreviouslyBilledPayslipCount',
        'netCost' => 'getNetCost',
        'discount' => 'getDiscount',
        'partnerDiscountAmount' => 'getPartnerDiscountAmount',
        'monthlyMinimum' => 'getMonthlyMinimum',
        'total' => 'getTotal',
        'paid' => 'getPaid',
        'usage' => 'getUsage',
        'accountingCustomerId' => 'getAccountingCustomerId',
        'accountingInvoiceId' => 'getAccountingInvoiceId',
        'accountingInvoiceLink' => 'getAccountingInvoiceLink',
        'useNetSuite' => 'getUseNetSuite',
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
        $this->setIfExists('year', $data ?? [], null);
        $this->setIfExists('month', $data ?? [], null);
        $this->setIfExists('payslipCount', $data ?? [], null);
        $this->setIfExists('previouslyBilledPayslipCount', $data ?? [], null);
        $this->setIfExists('netCost', $data ?? [], null);
        $this->setIfExists('discount', $data ?? [], null);
        $this->setIfExists('partnerDiscountAmount', $data ?? [], null);
        $this->setIfExists('monthlyMinimum', $data ?? [], null);
        $this->setIfExists('total', $data ?? [], null);
        $this->setIfExists('paid', $data ?? [], null);
        $this->setIfExists('usage', $data ?? [], null);
        $this->setIfExists('accountingCustomerId', $data ?? [], null);
        $this->setIfExists('accountingInvoiceId', $data ?? [], null);
        $this->setIfExists('accountingInvoiceLink', $data ?? [], null);
        $this->setIfExists('useNetSuite', $data ?? [], null);
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
     * Gets year
     *
     * @return int|null
     */
    public function getYear(): ?int
    {
        return $this->container['year'];
    }

    /**
     * Sets year
     *
     * @param int|null $year year
     *
     * @return $this
     */
    public function setYear(?int $year): static
    {
        if (is_null($year)) {
            throw new InvalidArgumentException('non-nullable year cannot be null');
        }
        $this->container['year'] = $year;

        return $this;
    }

    /**
     * Gets month
     *
     * @return int|null
     */
    public function getMonth(): ?int
    {
        return $this->container['month'];
    }

    /**
     * Sets month
     *
     * @param int|null $month month
     *
     * @return $this
     */
    public function setMonth(?int $month): static
    {
        if (is_null($month)) {
            throw new InvalidArgumentException('non-nullable month cannot be null');
        }
        $this->container['month'] = $month;

        return $this;
    }

    /**
     * Gets payslipCount
     *
     * @return int|null
     */
    public function getPayslipCount(): ?int
    {
        return $this->container['payslipCount'];
    }

    /**
     * Sets payslipCount
     *
     * @param int|null $payslipCount payslipCount
     *
     * @return $this
     */
    public function setPayslipCount(?int $payslipCount): static
    {
        if (is_null($payslipCount)) {
            throw new InvalidArgumentException('non-nullable payslipCount cannot be null');
        }
        $this->container['payslipCount'] = $payslipCount;

        return $this;
    }

    /**
     * Gets previouslyBilledPayslipCount
     *
     * @return int|null
     */
    public function getPreviouslyBilledPayslipCount(): ?int
    {
        return $this->container['previouslyBilledPayslipCount'];
    }

    /**
     * Sets previouslyBilledPayslipCount
     *
     * @param int|null $previouslyBilledPayslipCount The number of payslips that appear in the usage, but were billed in a previous period
     *
     * @return $this
     */
    public function setPreviouslyBilledPayslipCount(?int $previouslyBilledPayslipCount): static
    {
        if (is_null($previouslyBilledPayslipCount)) {
            throw new InvalidArgumentException('non-nullable previouslyBilledPayslipCount cannot be null');
        }
        $this->container['previouslyBilledPayslipCount'] = $previouslyBilledPayslipCount;

        return $this;
    }

    /**
     * Gets netCost
     *
     * @return float|null
     */
    public function getNetCost(): ?float
    {
        return $this->container['netCost'];
    }

    /**
     * Sets netCost
     *
     * @param float|null $netCost Net cost of any payslips, or the Pricing Table minimum, whichever is greater.
     *
     * @return $this
     */
    public function setNetCost(?float $netCost): static
    {
        if (is_null($netCost)) {
            throw new InvalidArgumentException('non-nullable netCost cannot be null');
        }
        $this->container['netCost'] = $netCost;

        return $this;
    }

    /**
     * Gets discount
     *
     * @return float|null
     */
    public function getDiscount(): ?float
    {
        return $this->container['discount'];
    }

    /**
     * Sets discount
     *
     * @param float|null $discount discount
     *
     * @return $this
     */
    public function setDiscount(?float $discount): static
    {
        if (is_null($discount)) {
            throw new InvalidArgumentException('non-nullable discount cannot be null');
        }
        $this->container['discount'] = $discount;

        return $this;
    }

    /**
     * Gets partnerDiscountAmount
     *
     * @return float|null
     */
    public function getPartnerDiscountAmount(): ?float
    {
        return $this->container['partnerDiscountAmount'];
    }

    /**
     * Sets partnerDiscountAmount
     *
     * @param float|null $partnerDiscountAmount partnerDiscountAmount
     *
     * @return $this
     */
    public function setPartnerDiscountAmount(?float $partnerDiscountAmount): static
    {
        if (is_null($partnerDiscountAmount)) {
            throw new InvalidArgumentException('non-nullable partnerDiscountAmount cannot be null');
        }
        $this->container['partnerDiscountAmount'] = $partnerDiscountAmount;

        return $this;
    }

    /**
     * Gets monthlyMinimum
     *
     * @return float|null
     */
    public function getMonthlyMinimum(): ?float
    {
        return $this->container['monthlyMinimum'];
    }

    /**
     * Sets monthlyMinimum
     *
     * @param float|null $monthlyMinimum This is actually an offset against the NetCost and doesn't contain the full MonthlyMinimum.
     *
     * @return $this
     */
    public function setMonthlyMinimum(?float $monthlyMinimum): static
    {
        if (is_null($monthlyMinimum)) {
            throw new InvalidArgumentException('non-nullable monthlyMinimum cannot be null');
        }
        $this->container['monthlyMinimum'] = $monthlyMinimum;

        return $this;
    }

    /**
     * Gets total
     *
     * @return float|null
     */
    public function getTotal(): ?float
    {
        return $this->container['total'];
    }

    /**
     * Sets total
     *
     * @param float|null $total total
     *
     * @return $this
     */
    public function setTotal(?float $total): static
    {
        if (is_null($total)) {
            throw new InvalidArgumentException('non-nullable total cannot be null');
        }
        $this->container['total'] = $total;

        return $this;
    }

    /**
     * Gets paid
     *
     * @return bool|null
     */
    public function getPaid(): ?bool
    {
        return $this->container['paid'];
    }

    /**
     * Sets paid
     *
     * @param bool|null $paid paid
     *
     * @return $this
     */
    public function setPaid(?bool $paid): static
    {
        if (is_null($paid)) {
            throw new InvalidArgumentException('non-nullable paid cannot be null');
        }
        $this->container['paid'] = $paid;

        return $this;
    }

    /**
     * Gets usage
     *
     * @return \SynergiTech\Staffology\Model\Item[]|null
     */
    public function getUsage(): ?array
    {
        return $this->container['usage'];
    }

    /**
     * Sets usage
     *
     * @param \SynergiTech\Staffology\Model\Item[]|null $usage usage
     *
     * @return $this
     */
    public function setUsage(?array $usage): static
    {
        if (is_null($usage)) {
            array_push($this->openAPINullablesSetToNull, 'usage');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('usage', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['usage'] = $usage;

        return $this;
    }

    /**
     * Gets accountingCustomerId
     *
     * @return string|null
     */
    public function getAccountingCustomerId(): ?string
    {
        return $this->container['accountingCustomerId'];
    }

    /**
     * Sets accountingCustomerId
     *
     * @param string|null $accountingCustomerId accountingCustomerId
     *
     * @return $this
     */
    public function setAccountingCustomerId(?string $accountingCustomerId): static
    {
        if (is_null($accountingCustomerId)) {
            array_push($this->openAPINullablesSetToNull, 'accountingCustomerId');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('accountingCustomerId', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['accountingCustomerId'] = $accountingCustomerId;

        return $this;
    }

    /**
     * Gets accountingInvoiceId
     *
     * @return string|null
     */
    public function getAccountingInvoiceId(): ?string
    {
        return $this->container['accountingInvoiceId'];
    }

    /**
     * Sets accountingInvoiceId
     *
     * @param string|null $accountingInvoiceId accountingInvoiceId
     *
     * @return $this
     */
    public function setAccountingInvoiceId(?string $accountingInvoiceId): static
    {
        if (is_null($accountingInvoiceId)) {
            array_push($this->openAPINullablesSetToNull, 'accountingInvoiceId');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('accountingInvoiceId', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['accountingInvoiceId'] = $accountingInvoiceId;

        return $this;
    }

    /**
     * Gets accountingInvoiceLink
     *
     * @return string|null
     */
    public function getAccountingInvoiceLink(): ?string
    {
        return $this->container['accountingInvoiceLink'];
    }

    /**
     * Sets accountingInvoiceLink
     *
     * @param string|null $accountingInvoiceLink accountingInvoiceLink
     *
     * @return $this
     */
    public function setAccountingInvoiceLink(?string $accountingInvoiceLink): static
    {
        if (is_null($accountingInvoiceLink)) {
            array_push($this->openAPINullablesSetToNull, 'accountingInvoiceLink');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('accountingInvoiceLink', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['accountingInvoiceLink'] = $accountingInvoiceLink;

        return $this;
    }

    /**
     * Gets useNetSuite
     *
     * @return bool|null
     */
    public function getUseNetSuite(): ?bool
    {
        return $this->container['useNetSuite'];
    }

    /**
     * Sets useNetSuite
     *
     * @param bool|null $useNetSuite useNetSuite
     *
     * @return $this
     */
    public function setUseNetSuite(?bool $useNetSuite): static
    {
        if (is_null($useNetSuite)) {
            throw new InvalidArgumentException('non-nullable useNetSuite cannot be null');
        }
        $this->container['useNetSuite'] = $useNetSuite;

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


