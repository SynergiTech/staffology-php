<?php
/**
 * UmbrellaReconciliationReportLine
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
 * UmbrellaReconciliationReportLine Class Doc Comment
 *
 * @package  SynergiTech\Staffology
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements ArrayAccess<string, mixed>
 */
class UmbrellaReconciliationReportLine implements ModelInterface, ArrayAccess, JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'UmbrellaReconciliationReportLine';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var array<string, string>
      */
    protected static array $openAPITypes = [
        'employee' => '\SynergiTech\Staffology\Model\Item',
        'period' => 'string',
        'payrollCode' => 'string',
        'department' => 'string',
        'totalGross' => 'float',
        'netPay' => 'float',
        'tax' => 'float',
        'employeeNi' => 'float',
        'employerNi' => 'float',
        'employeePension' => 'float',
        'employerPension' => 'float',
        'expenses' => 'float',
        'fee' => 'float',
        'appLevy' => 'float',
        'invoiceValue' => 'float',
        'employeeCosts' => 'float',
        'employerCosts' => 'float',
        'total' => 'float'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'employee' => null,
        'period' => null,
        'payrollCode' => null,
        'department' => null,
        'totalGross' => 'double',
        'netPay' => 'double',
        'tax' => 'double',
        'employeeNi' => 'double',
        'employerNi' => 'double',
        'employeePension' => 'double',
        'employerPension' => 'double',
        'expenses' => 'double',
        'fee' => 'double',
        'appLevy' => 'double',
        'invoiceValue' => 'double',
        'employeeCosts' => 'double',
        'employerCosts' => 'double',
        'total' => 'double'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var array<string, bool>
      */
    protected static array $openAPINullables = [
        'employee' => false,
        'period' => true,
        'payrollCode' => true,
        'department' => true,
        'totalGross' => false,
        'netPay' => false,
        'tax' => false,
        'employeeNi' => false,
        'employerNi' => false,
        'employeePension' => false,
        'employerPension' => false,
        'expenses' => false,
        'fee' => false,
        'appLevy' => false,
        'invoiceValue' => false,
        'employeeCosts' => false,
        'employerCosts' => false,
        'total' => false
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
        'employee' => 'employee',
        'period' => 'period',
        'payrollCode' => 'payrollCode',
        'department' => 'department',
        'totalGross' => 'totalGross',
        'netPay' => 'netPay',
        'tax' => 'tax',
        'employeeNi' => 'employeeNi',
        'employerNi' => 'employerNi',
        'employeePension' => 'employeePension',
        'employerPension' => 'employerPension',
        'expenses' => 'expenses',
        'fee' => 'fee',
        'appLevy' => 'appLevy',
        'invoiceValue' => 'invoiceValue',
        'employeeCosts' => 'employeeCosts',
        'employerCosts' => 'employerCosts',
        'total' => 'total'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var array<string, string>
     */
    protected static array $setters = [
        'employee' => 'setEmployee',
        'period' => 'setPeriod',
        'payrollCode' => 'setPayrollCode',
        'department' => 'setDepartment',
        'totalGross' => 'setTotalGross',
        'netPay' => 'setNetPay',
        'tax' => 'setTax',
        'employeeNi' => 'setEmployeeNi',
        'employerNi' => 'setEmployerNi',
        'employeePension' => 'setEmployeePension',
        'employerPension' => 'setEmployerPension',
        'expenses' => 'setExpenses',
        'fee' => 'setFee',
        'appLevy' => 'setAppLevy',
        'invoiceValue' => 'setInvoiceValue',
        'employeeCosts' => 'setEmployeeCosts',
        'employerCosts' => 'setEmployerCosts',
        'total' => 'setTotal'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var array<string, string>
     */
    protected static array $getters = [
        'employee' => 'getEmployee',
        'period' => 'getPeriod',
        'payrollCode' => 'getPayrollCode',
        'department' => 'getDepartment',
        'totalGross' => 'getTotalGross',
        'netPay' => 'getNetPay',
        'tax' => 'getTax',
        'employeeNi' => 'getEmployeeNi',
        'employerNi' => 'getEmployerNi',
        'employeePension' => 'getEmployeePension',
        'employerPension' => 'getEmployerPension',
        'expenses' => 'getExpenses',
        'fee' => 'getFee',
        'appLevy' => 'getAppLevy',
        'invoiceValue' => 'getInvoiceValue',
        'employeeCosts' => 'getEmployeeCosts',
        'employerCosts' => 'getEmployerCosts',
        'total' => 'getTotal'
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
        $this->setIfExists('employee', $data ?? [], null);
        $this->setIfExists('period', $data ?? [], null);
        $this->setIfExists('payrollCode', $data ?? [], null);
        $this->setIfExists('department', $data ?? [], null);
        $this->setIfExists('totalGross', $data ?? [], null);
        $this->setIfExists('netPay', $data ?? [], null);
        $this->setIfExists('tax', $data ?? [], null);
        $this->setIfExists('employeeNi', $data ?? [], null);
        $this->setIfExists('employerNi', $data ?? [], null);
        $this->setIfExists('employeePension', $data ?? [], null);
        $this->setIfExists('employerPension', $data ?? [], null);
        $this->setIfExists('expenses', $data ?? [], null);
        $this->setIfExists('fee', $data ?? [], null);
        $this->setIfExists('appLevy', $data ?? [], null);
        $this->setIfExists('invoiceValue', $data ?? [], null);
        $this->setIfExists('employeeCosts', $data ?? [], null);
        $this->setIfExists('employerCosts', $data ?? [], null);
        $this->setIfExists('total', $data ?? [], null);
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
     * Gets period
     *
     * @return string|null
     */
    public function getPeriod(): ?string
    {
        return $this->container['period'];
    }

    /**
     * Sets period
     *
     * @param string|null $period period
     *
     * @return $this
     */
    public function setPeriod(?string $period): static
    {
        if (is_null($period)) {
            array_push($this->openAPINullablesSetToNull, 'period');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('period', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['period'] = $period;

        return $this;
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
     * @param string|null $payrollCode payrollCode
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
     * Gets department
     *
     * @return string|null
     */
    public function getDepartment(): ?string
    {
        return $this->container['department'];
    }

    /**
     * Sets department
     *
     * @param string|null $department department
     *
     * @return $this
     */
    public function setDepartment(?string $department): static
    {
        if (is_null($department)) {
            array_push($this->openAPINullablesSetToNull, 'department');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('department', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['department'] = $department;

        return $this;
    }

    /**
     * Gets totalGross
     *
     * @return float|null
     */
    public function getTotalGross(): ?float
    {
        return $this->container['totalGross'];
    }

    /**
     * Sets totalGross
     *
     * @param float|null $totalGross totalGross
     *
     * @return $this
     */
    public function setTotalGross(?float $totalGross): static
    {
        if (is_null($totalGross)) {
            throw new InvalidArgumentException('non-nullable totalGross cannot be null');
        }
        $this->container['totalGross'] = $totalGross;

        return $this;
    }

    /**
     * Gets netPay
     *
     * @return float|null
     */
    public function getNetPay(): ?float
    {
        return $this->container['netPay'];
    }

    /**
     * Sets netPay
     *
     * @param float|null $netPay netPay
     *
     * @return $this
     */
    public function setNetPay(?float $netPay): static
    {
        if (is_null($netPay)) {
            throw new InvalidArgumentException('non-nullable netPay cannot be null');
        }
        $this->container['netPay'] = $netPay;

        return $this;
    }

    /**
     * Gets tax
     *
     * @return float|null
     */
    public function getTax(): ?float
    {
        return $this->container['tax'];
    }

    /**
     * Sets tax
     *
     * @param float|null $tax tax
     *
     * @return $this
     */
    public function setTax(?float $tax): static
    {
        if (is_null($tax)) {
            throw new InvalidArgumentException('non-nullable tax cannot be null');
        }
        $this->container['tax'] = $tax;

        return $this;
    }

    /**
     * Gets employeeNi
     *
     * @return float|null
     */
    public function getEmployeeNi(): ?float
    {
        return $this->container['employeeNi'];
    }

    /**
     * Sets employeeNi
     *
     * @param float|null $employeeNi employeeNi
     *
     * @return $this
     */
    public function setEmployeeNi(?float $employeeNi): static
    {
        if (is_null($employeeNi)) {
            throw new InvalidArgumentException('non-nullable employeeNi cannot be null');
        }
        $this->container['employeeNi'] = $employeeNi;

        return $this;
    }

    /**
     * Gets employerNi
     *
     * @return float|null
     */
    public function getEmployerNi(): ?float
    {
        return $this->container['employerNi'];
    }

    /**
     * Sets employerNi
     *
     * @param float|null $employerNi employerNi
     *
     * @return $this
     */
    public function setEmployerNi(?float $employerNi): static
    {
        if (is_null($employerNi)) {
            throw new InvalidArgumentException('non-nullable employerNi cannot be null');
        }
        $this->container['employerNi'] = $employerNi;

        return $this;
    }

    /**
     * Gets employeePension
     *
     * @return float|null
     */
    public function getEmployeePension(): ?float
    {
        return $this->container['employeePension'];
    }

    /**
     * Sets employeePension
     *
     * @param float|null $employeePension employeePension
     *
     * @return $this
     */
    public function setEmployeePension(?float $employeePension): static
    {
        if (is_null($employeePension)) {
            throw new InvalidArgumentException('non-nullable employeePension cannot be null');
        }
        $this->container['employeePension'] = $employeePension;

        return $this;
    }

    /**
     * Gets employerPension
     *
     * @return float|null
     */
    public function getEmployerPension(): ?float
    {
        return $this->container['employerPension'];
    }

    /**
     * Sets employerPension
     *
     * @param float|null $employerPension employerPension
     *
     * @return $this
     */
    public function setEmployerPension(?float $employerPension): static
    {
        if (is_null($employerPension)) {
            throw new InvalidArgumentException('non-nullable employerPension cannot be null');
        }
        $this->container['employerPension'] = $employerPension;

        return $this;
    }

    /**
     * Gets expenses
     *
     * @return float|null
     */
    public function getExpenses(): ?float
    {
        return $this->container['expenses'];
    }

    /**
     * Sets expenses
     *
     * @param float|null $expenses expenses
     *
     * @return $this
     */
    public function setExpenses(?float $expenses): static
    {
        if (is_null($expenses)) {
            throw new InvalidArgumentException('non-nullable expenses cannot be null');
        }
        $this->container['expenses'] = $expenses;

        return $this;
    }

    /**
     * Gets fee
     *
     * @return float|null
     */
    public function getFee(): ?float
    {
        return $this->container['fee'];
    }

    /**
     * Sets fee
     *
     * @param float|null $fee fee
     *
     * @return $this
     */
    public function setFee(?float $fee): static
    {
        if (is_null($fee)) {
            throw new InvalidArgumentException('non-nullable fee cannot be null');
        }
        $this->container['fee'] = $fee;

        return $this;
    }

    /**
     * Gets appLevy
     *
     * @return float|null
     */
    public function getAppLevy(): ?float
    {
        return $this->container['appLevy'];
    }

    /**
     * Sets appLevy
     *
     * @param float|null $appLevy appLevy
     *
     * @return $this
     */
    public function setAppLevy(?float $appLevy): static
    {
        if (is_null($appLevy)) {
            throw new InvalidArgumentException('non-nullable appLevy cannot be null');
        }
        $this->container['appLevy'] = $appLevy;

        return $this;
    }

    /**
     * Gets invoiceValue
     *
     * @return float|null
     */
    public function getInvoiceValue(): ?float
    {
        return $this->container['invoiceValue'];
    }

    /**
     * Sets invoiceValue
     *
     * @param float|null $invoiceValue invoiceValue
     *
     * @return $this
     */
    public function setInvoiceValue(?float $invoiceValue): static
    {
        if (is_null($invoiceValue)) {
            throw new InvalidArgumentException('non-nullable invoiceValue cannot be null');
        }
        $this->container['invoiceValue'] = $invoiceValue;

        return $this;
    }

    /**
     * Gets employeeCosts
     *
     * @return float|null
     */
    public function getEmployeeCosts(): ?float
    {
        return $this->container['employeeCosts'];
    }

    /**
     * Sets employeeCosts
     *
     * @param float|null $employeeCosts employeeCosts
     *
     * @return $this
     */
    public function setEmployeeCosts(?float $employeeCosts): static
    {
        if (is_null($employeeCosts)) {
            throw new InvalidArgumentException('non-nullable employeeCosts cannot be null');
        }
        $this->container['employeeCosts'] = $employeeCosts;

        return $this;
    }

    /**
     * Gets employerCosts
     *
     * @return float|null
     */
    public function getEmployerCosts(): ?float
    {
        return $this->container['employerCosts'];
    }

    /**
     * Sets employerCosts
     *
     * @param float|null $employerCosts employerCosts
     *
     * @return $this
     */
    public function setEmployerCosts(?float $employerCosts): static
    {
        if (is_null($employerCosts)) {
            throw new InvalidArgumentException('non-nullable employerCosts cannot be null');
        }
        $this->container['employerCosts'] = $employerCosts;

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


