<?php
/**
 * EmployeePayRunTotal
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
 * EmployeePayRunTotal Class Doc Comment
 *
 * @description EmployeePayRunTotal is used to calculte the employee pay run total
 * @package  SynergiTech\Staffology
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements ArrayAccess<string, mixed>
 */
class EmployeePayRunTotal implements ModelInterface, ArrayAccess, JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'EmployeePayRunTotal';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var array<string, string>
      */
    protected static array $openAPITypes = [
        'payrollCode' => 'string',
        'grossForNi' => 'float',
        'grossPensionPay' => 'float',
        'employerPensionContribution' => 'float',
        'employerNi' => 'float',
        'grossTaxablePay' => 'float',
        'employeeNi' => 'float',
        'tax' => 'float',
        'studentLoanRecovered' => 'float',
        'employeePension' => 'float',
        'employeePensionContributionReliefAtSource' => 'float',
        'employeePensionContributionSalarySacrifice' => 'float'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'payrollCode' => null,
        'grossForNi' => 'double',
        'grossPensionPay' => 'double',
        'employerPensionContribution' => 'double',
        'employerNi' => 'double',
        'grossTaxablePay' => 'double',
        'employeeNi' => 'double',
        'tax' => 'double',
        'studentLoanRecovered' => 'double',
        'employeePension' => 'double',
        'employeePensionContributionReliefAtSource' => 'double',
        'employeePensionContributionSalarySacrifice' => 'double'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var array<string, bool>
      */
    protected static array $openAPINullables = [
        'payrollCode' => true,
        'grossForNi' => false,
        'grossPensionPay' => false,
        'employerPensionContribution' => false,
        'employerNi' => false,
        'grossTaxablePay' => false,
        'employeeNi' => false,
        'tax' => false,
        'studentLoanRecovered' => false,
        'employeePension' => false,
        'employeePensionContributionReliefAtSource' => false,
        'employeePensionContributionSalarySacrifice' => false
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
        'grossForNi' => 'grossForNi',
        'grossPensionPay' => 'grossPensionPay',
        'employerPensionContribution' => 'employerPensionContribution',
        'employerNi' => 'employerNi',
        'grossTaxablePay' => 'grossTaxablePay',
        'employeeNi' => 'employeeNi',
        'tax' => 'tax',
        'studentLoanRecovered' => 'studentLoanRecovered',
        'employeePension' => 'employeePension',
        'employeePensionContributionReliefAtSource' => 'employeePensionContributionReliefAtSource',
        'employeePensionContributionSalarySacrifice' => 'employeePensionContributionSalarySacrifice'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var array<string, string>
     */
    protected static array $setters = [
        'payrollCode' => 'setPayrollCode',
        'grossForNi' => 'setGrossForNi',
        'grossPensionPay' => 'setGrossPensionPay',
        'employerPensionContribution' => 'setEmployerPensionContribution',
        'employerNi' => 'setEmployerNi',
        'grossTaxablePay' => 'setGrossTaxablePay',
        'employeeNi' => 'setEmployeeNi',
        'tax' => 'setTax',
        'studentLoanRecovered' => 'setStudentLoanRecovered',
        'employeePension' => 'setEmployeePension',
        'employeePensionContributionReliefAtSource' => 'setEmployeePensionContributionReliefAtSource',
        'employeePensionContributionSalarySacrifice' => 'setEmployeePensionContributionSalarySacrifice'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var array<string, string>
     */
    protected static array $getters = [
        'payrollCode' => 'getPayrollCode',
        'grossForNi' => 'getGrossForNi',
        'grossPensionPay' => 'getGrossPensionPay',
        'employerPensionContribution' => 'getEmployerPensionContribution',
        'employerNi' => 'getEmployerNi',
        'grossTaxablePay' => 'getGrossTaxablePay',
        'employeeNi' => 'getEmployeeNi',
        'tax' => 'getTax',
        'studentLoanRecovered' => 'getStudentLoanRecovered',
        'employeePension' => 'getEmployeePension',
        'employeePensionContributionReliefAtSource' => 'getEmployeePensionContributionReliefAtSource',
        'employeePensionContributionSalarySacrifice' => 'getEmployeePensionContributionSalarySacrifice'
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
        $this->setIfExists('grossForNi', $data ?? [], null);
        $this->setIfExists('grossPensionPay', $data ?? [], null);
        $this->setIfExists('employerPensionContribution', $data ?? [], null);
        $this->setIfExists('employerNi', $data ?? [], null);
        $this->setIfExists('grossTaxablePay', $data ?? [], null);
        $this->setIfExists('employeeNi', $data ?? [], null);
        $this->setIfExists('tax', $data ?? [], null);
        $this->setIfExists('studentLoanRecovered', $data ?? [], null);
        $this->setIfExists('employeePension', $data ?? [], null);
        $this->setIfExists('employeePensionContributionReliefAtSource', $data ?? [], null);
        $this->setIfExists('employeePensionContributionSalarySacrifice', $data ?? [], null);
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
     * @param string|null $payrollCode Payroll code of the employee
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
     * Gets grossForNi
     *
     * @return float|null
     */
    public function getGrossForNi(): ?float
    {
        return $this->container['grossForNi'];
    }

    /**
     * Sets grossForNi
     *
     * @param float|null $grossForNi The amount of the Gross that is subject to NI
     *
     * @return $this
     */
    public function setGrossForNi(?float $grossForNi): static
    {
        if (is_null($grossForNi)) {
            throw new InvalidArgumentException('non-nullable grossForNi cannot be null');
        }
        $this->container['grossForNi'] = $grossForNi;

        return $this;
    }

    /**
     * Gets grossPensionPay
     *
     * @return float|null
     */
    public function getGrossPensionPay(): ?float
    {
        return $this->container['grossPensionPay'];
    }

    /**
     * Sets grossPensionPay
     *
     * @param float|null $grossPensionPay The amount of the Gross that is subject to PensionPay
     *
     * @return $this
     */
    public function setGrossPensionPay(?float $grossPensionPay): static
    {
        if (is_null($grossPensionPay)) {
            throw new InvalidArgumentException('non-nullable grossPensionPay cannot be null');
        }
        $this->container['grossPensionPay'] = $grossPensionPay;

        return $this;
    }

    /**
     * Gets employerPensionContribution
     *
     * @return float|null
     */
    public function getEmployerPensionContribution(): ?float
    {
        return $this->container['employerPensionContribution'];
    }

    /**
     * Sets employerPensionContribution
     *
     * @param float|null $employerPensionContribution The value of the Pension Contribution being made by the Employer for this Employee
     *
     * @return $this
     */
    public function setEmployerPensionContribution(?float $employerPensionContribution): static
    {
        if (is_null($employerPensionContribution)) {
            throw new InvalidArgumentException('non-nullable employerPensionContribution cannot be null');
        }
        $this->container['employerPensionContribution'] = $employerPensionContribution;

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
     * @param float|null $employerNi The Employer NI Contribution amount
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
     * Gets grossTaxablePay
     *
     * @return float|null
     */
    public function getGrossTaxablePay(): ?float
    {
        return $this->container['grossTaxablePay'];
    }

    /**
     * Sets grossTaxablePay
     *
     * @param float|null $grossTaxablePay The amount of the Gross that is subject to TaxablePay
     *
     * @return $this
     */
    public function setGrossTaxablePay(?float $grossTaxablePay): static
    {
        if (is_null($grossTaxablePay)) {
            throw new InvalidArgumentException('non-nullable grossTaxablePay cannot be null');
        }
        $this->container['grossTaxablePay'] = $grossTaxablePay;

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
     * @param float|null $employeeNi The Employee NI Contribution amount
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
     * @param float|null $tax The Employee Tax amount
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
     * Gets studentLoanRecovered
     *
     * @return float|null
     */
    public function getStudentLoanRecovered(): ?float
    {
        return $this->container['studentLoanRecovered'];
    }

    /**
     * Sets studentLoanRecovered
     *
     * @param float|null $studentLoanRecovered The Employee Student Loan recovered amount
     *
     * @return $this
     */
    public function setStudentLoanRecovered(?float $studentLoanRecovered): static
    {
        if (is_null($studentLoanRecovered)) {
            throw new InvalidArgumentException('non-nullable studentLoanRecovered cannot be null');
        }
        $this->container['studentLoanRecovered'] = $studentLoanRecovered;

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
     * @param float|null $employeePension The value of the Pension Contribution(PENSION) being made by the Employee as a Net Pay Arrangement
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
     * Gets employeePensionContributionReliefAtSource
     *
     * @return float|null
     */
    public function getEmployeePensionContributionReliefAtSource(): ?float
    {
        return $this->container['employeePensionContributionReliefAtSource'];
    }

    /**
     * Sets employeePensionContributionReliefAtSource
     *
     * @param float|null $employeePensionContributionReliefAtSource The value of employee pension contributions Relief At Source(PENSIONRAS) that are not paid under 'net pay arrangements'
     *
     * @return $this
     */
    public function setEmployeePensionContributionReliefAtSource(?float $employeePensionContributionReliefAtSource): static
    {
        if (is_null($employeePensionContributionReliefAtSource)) {
            throw new InvalidArgumentException('non-nullable employeePensionContributionReliefAtSource cannot be null');
        }
        $this->container['employeePensionContributionReliefAtSource'] = $employeePensionContributionReliefAtSource;

        return $this;
    }

    /**
     * Gets employeePensionContributionSalarySacrifice
     *
     * @return float|null
     */
    public function getEmployeePensionContributionSalarySacrifice(): ?float
    {
        return $this->container['employeePensionContributionSalarySacrifice'];
    }

    /**
     * Sets employeePensionContributionSalarySacrifice
     *
     * @param float|null $employeePensionContributionSalarySacrifice The value of the Pension Contribution Salary Sacrifice(PENSIONSS) being made by the Employee as a Salary Sacrifice
     *
     * @return $this
     */
    public function setEmployeePensionContributionSalarySacrifice(?float $employeePensionContributionSalarySacrifice): static
    {
        if (is_null($employeePensionContributionSalarySacrifice)) {
            throw new InvalidArgumentException('non-nullable employeePensionContributionSalarySacrifice cannot be null');
        }
        $this->container['employeePensionContributionSalarySacrifice'] = $employeePensionContributionSalarySacrifice;

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


