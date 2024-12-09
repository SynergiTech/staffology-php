<?php
/**
 * ContractNetOfOnCostsResponse
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
 * ContractNetOfOnCostsResponse Class Doc Comment
 *
 * @package  SynergiTech\Staffology
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements ArrayAccess<string, mixed>
 */
class ContractNetOfOnCostsResponse implements ModelInterface, ArrayAccess, JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'Contract.NetOfOnCostsResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var array<string, string>
      */
    protected static array $openAPITypes = [
        'salary' => 'float',
        'holidayPay' => 'float',
        'employersPensionContribution' => 'float',
        'employeesPensionContribution' => 'float',
        'employersNi' => 'float',
        'apprenticeshipLevy' => 'float',
        'grossDailyRate' => 'float',
        'totalFees' => 'float',
        'numberOfDays' => 'float',
        'simulation' => '\SynergiTech\Staffology\Model\ContractNetOfOnCostsSimulationResponse',
        'holInclusiveSimulation' => '\SynergiTech\Staffology\Model\ContractNetOfOnCostsSimulationResponse'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'salary' => 'double',
        'holidayPay' => 'double',
        'employersPensionContribution' => 'double',
        'employeesPensionContribution' => 'double',
        'employersNi' => 'double',
        'apprenticeshipLevy' => 'double',
        'grossDailyRate' => 'double',
        'totalFees' => 'double',
        'numberOfDays' => 'double',
        'simulation' => null,
        'holInclusiveSimulation' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var array<string, bool>
      */
    protected static array $openAPINullables = [
        'salary' => false,
        'holidayPay' => false,
        'employersPensionContribution' => false,
        'employeesPensionContribution' => false,
        'employersNi' => false,
        'apprenticeshipLevy' => false,
        'grossDailyRate' => false,
        'totalFees' => false,
        'numberOfDays' => false,
        'simulation' => false,
        'holInclusiveSimulation' => false
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
        'salary' => 'salary',
        'holidayPay' => 'holidayPay',
        'employersPensionContribution' => 'employersPensionContribution',
        'employeesPensionContribution' => 'employeesPensionContribution',
        'employersNi' => 'employersNi',
        'apprenticeshipLevy' => 'apprenticeshipLevy',
        'grossDailyRate' => 'grossDailyRate',
        'totalFees' => 'totalFees',
        'numberOfDays' => 'numberOfDays',
        'simulation' => 'simulation',
        'holInclusiveSimulation' => 'holInclusiveSimulation'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var array<string, string>
     */
    protected static array $setters = [
        'salary' => 'setSalary',
        'holidayPay' => 'setHolidayPay',
        'employersPensionContribution' => 'setEmployersPensionContribution',
        'employeesPensionContribution' => 'setEmployeesPensionContribution',
        'employersNi' => 'setEmployersNi',
        'apprenticeshipLevy' => 'setApprenticeshipLevy',
        'grossDailyRate' => 'setGrossDailyRate',
        'totalFees' => 'setTotalFees',
        'numberOfDays' => 'setNumberOfDays',
        'simulation' => 'setSimulation',
        'holInclusiveSimulation' => 'setHolInclusiveSimulation'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var array<string, string>
     */
    protected static array $getters = [
        'salary' => 'getSalary',
        'holidayPay' => 'getHolidayPay',
        'employersPensionContribution' => 'getEmployersPensionContribution',
        'employeesPensionContribution' => 'getEmployeesPensionContribution',
        'employersNi' => 'getEmployersNi',
        'apprenticeshipLevy' => 'getApprenticeshipLevy',
        'grossDailyRate' => 'getGrossDailyRate',
        'totalFees' => 'getTotalFees',
        'numberOfDays' => 'getNumberOfDays',
        'simulation' => 'getSimulation',
        'holInclusiveSimulation' => 'getHolInclusiveSimulation'
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
        $this->setIfExists('salary', $data ?? [], null);
        $this->setIfExists('holidayPay', $data ?? [], null);
        $this->setIfExists('employersPensionContribution', $data ?? [], null);
        $this->setIfExists('employeesPensionContribution', $data ?? [], null);
        $this->setIfExists('employersNi', $data ?? [], null);
        $this->setIfExists('apprenticeshipLevy', $data ?? [], null);
        $this->setIfExists('grossDailyRate', $data ?? [], null);
        $this->setIfExists('totalFees', $data ?? [], null);
        $this->setIfExists('numberOfDays', $data ?? [], null);
        $this->setIfExists('simulation', $data ?? [], null);
        $this->setIfExists('holInclusiveSimulation', $data ?? [], null);
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
     * Gets salary
     *
     * @return float|null
     */
    public function getSalary(): ?float
    {
        return $this->container['salary'];
    }

    /**
     * Sets salary
     *
     * @param float|null $salary salary
     *
     * @return $this
     */
    public function setSalary(?float $salary): static
    {
        if (is_null($salary)) {
            throw new InvalidArgumentException('non-nullable salary cannot be null');
        }
        $this->container['salary'] = $salary;

        return $this;
    }

    /**
     * Gets holidayPay
     *
     * @return float|null
     */
    public function getHolidayPay(): ?float
    {
        return $this->container['holidayPay'];
    }

    /**
     * Sets holidayPay
     *
     * @param float|null $holidayPay holidayPay
     *
     * @return $this
     */
    public function setHolidayPay(?float $holidayPay): static
    {
        if (is_null($holidayPay)) {
            throw new InvalidArgumentException('non-nullable holidayPay cannot be null');
        }
        $this->container['holidayPay'] = $holidayPay;

        return $this;
    }

    /**
     * Gets employersPensionContribution
     *
     * @return float|null
     */
    public function getEmployersPensionContribution(): ?float
    {
        return $this->container['employersPensionContribution'];
    }

    /**
     * Sets employersPensionContribution
     *
     * @param float|null $employersPensionContribution employersPensionContribution
     *
     * @return $this
     */
    public function setEmployersPensionContribution(?float $employersPensionContribution): static
    {
        if (is_null($employersPensionContribution)) {
            throw new InvalidArgumentException('non-nullable employersPensionContribution cannot be null');
        }
        $this->container['employersPensionContribution'] = $employersPensionContribution;

        return $this;
    }

    /**
     * Gets employeesPensionContribution
     *
     * @return float|null
     */
    public function getEmployeesPensionContribution(): ?float
    {
        return $this->container['employeesPensionContribution'];
    }

    /**
     * Sets employeesPensionContribution
     *
     * @param float|null $employeesPensionContribution employeesPensionContribution
     *
     * @return $this
     */
    public function setEmployeesPensionContribution(?float $employeesPensionContribution): static
    {
        if (is_null($employeesPensionContribution)) {
            throw new InvalidArgumentException('non-nullable employeesPensionContribution cannot be null');
        }
        $this->container['employeesPensionContribution'] = $employeesPensionContribution;

        return $this;
    }

    /**
     * Gets employersNi
     *
     * @return float|null
     */
    public function getEmployersNi(): ?float
    {
        return $this->container['employersNi'];
    }

    /**
     * Sets employersNi
     *
     * @param float|null $employersNi employersNi
     *
     * @return $this
     */
    public function setEmployersNi(?float $employersNi): static
    {
        if (is_null($employersNi)) {
            throw new InvalidArgumentException('non-nullable employersNi cannot be null');
        }
        $this->container['employersNi'] = $employersNi;

        return $this;
    }

    /**
     * Gets apprenticeshipLevy
     *
     * @return float|null
     */
    public function getApprenticeshipLevy(): ?float
    {
        return $this->container['apprenticeshipLevy'];
    }

    /**
     * Sets apprenticeshipLevy
     *
     * @param float|null $apprenticeshipLevy apprenticeshipLevy
     *
     * @return $this
     */
    public function setApprenticeshipLevy(?float $apprenticeshipLevy): static
    {
        if (is_null($apprenticeshipLevy)) {
            throw new InvalidArgumentException('non-nullable apprenticeshipLevy cannot be null');
        }
        $this->container['apprenticeshipLevy'] = $apprenticeshipLevy;

        return $this;
    }

    /**
     * Gets grossDailyRate
     *
     * @return float|null
     */
    public function getGrossDailyRate(): ?float
    {
        return $this->container['grossDailyRate'];
    }

    /**
     * Sets grossDailyRate
     *
     * @param float|null $grossDailyRate grossDailyRate
     *
     * @return $this
     */
    public function setGrossDailyRate(?float $grossDailyRate): static
    {
        if (is_null($grossDailyRate)) {
            throw new InvalidArgumentException('non-nullable grossDailyRate cannot be null');
        }
        $this->container['grossDailyRate'] = $grossDailyRate;

        return $this;
    }

    /**
     * Gets totalFees
     *
     * @return float|null
     */
    public function getTotalFees(): ?float
    {
        return $this->container['totalFees'];
    }

    /**
     * Sets totalFees
     *
     * @param float|null $totalFees totalFees
     *
     * @return $this
     */
    public function setTotalFees(?float $totalFees): static
    {
        if (is_null($totalFees)) {
            throw new InvalidArgumentException('non-nullable totalFees cannot be null');
        }
        $this->container['totalFees'] = $totalFees;

        return $this;
    }

    /**
     * Gets numberOfDays
     *
     * @return float|null
     */
    public function getNumberOfDays(): ?float
    {
        return $this->container['numberOfDays'];
    }

    /**
     * Sets numberOfDays
     *
     * @param float|null $numberOfDays numberOfDays
     *
     * @return $this
     */
    public function setNumberOfDays(?float $numberOfDays): static
    {
        if (is_null($numberOfDays)) {
            throw new InvalidArgumentException('non-nullable numberOfDays cannot be null');
        }
        $this->container['numberOfDays'] = $numberOfDays;

        return $this;
    }

    /**
     * Gets simulation
     *
     * @return \SynergiTech\Staffology\Model\ContractNetOfOnCostsSimulationResponse|null
     */
    public function getSimulation(): ?\SynergiTech\Staffology\Model\ContractNetOfOnCostsSimulationResponse
    {
        return $this->container['simulation'];
    }

    /**
     * Sets simulation
     *
     * @param \SynergiTech\Staffology\Model\ContractNetOfOnCostsSimulationResponse|null $simulation simulation
     *
     * @return $this
     */
    public function setSimulation(?\SynergiTech\Staffology\Model\ContractNetOfOnCostsSimulationResponse $simulation): static
    {
        if (is_null($simulation)) {
            throw new InvalidArgumentException('non-nullable simulation cannot be null');
        }
        $this->container['simulation'] = $simulation;

        return $this;
    }

    /**
     * Gets holInclusiveSimulation
     *
     * @return \SynergiTech\Staffology\Model\ContractNetOfOnCostsSimulationResponse|null
     */
    public function getHolInclusiveSimulation(): ?\SynergiTech\Staffology\Model\ContractNetOfOnCostsSimulationResponse
    {
        return $this->container['holInclusiveSimulation'];
    }

    /**
     * Sets holInclusiveSimulation
     *
     * @param \SynergiTech\Staffology\Model\ContractNetOfOnCostsSimulationResponse|null $holInclusiveSimulation holInclusiveSimulation
     *
     * @return $this
     */
    public function setHolInclusiveSimulation(?\SynergiTech\Staffology\Model\ContractNetOfOnCostsSimulationResponse $holInclusiveSimulation): static
    {
        if (is_null($holInclusiveSimulation)) {
            throw new InvalidArgumentException('non-nullable holInclusiveSimulation cannot be null');
        }
        $this->container['holInclusiveSimulation'] = $holInclusiveSimulation;

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


