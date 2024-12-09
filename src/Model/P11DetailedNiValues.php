<?php
/**
 * P11DetailedNiValues
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
 * P11DetailedNiValues Class Doc Comment
 *
 * @description Forms the NI Summary table in the P11 Detailed report.
 * @package  SynergiTech\Staffology
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements ArrayAccess<string, mixed>
 */
class P11DetailedNiValues implements ModelInterface, ArrayAccess, JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'P11DetailedNiValues';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var array<string, string>
      */
    protected static array $openAPITypes = [
        'table' => 'string',
        'earningsAtLel' => 'float',
        'earningsAboveLelToPt' => 'float',
        'earningsAbovePtToUap' => 'float',
        'earningsAboveUapToUel' => 'float',
        'earningsAbovePtToUel' => 'float',
        'employeeNics' => 'float',
        'employerNics' => 'float',
        'employeeAndEmployerNics' => 'float'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'table' => null,
        'earningsAtLel' => 'double',
        'earningsAboveLelToPt' => 'double',
        'earningsAbovePtToUap' => 'double',
        'earningsAboveUapToUel' => 'double',
        'earningsAbovePtToUel' => 'double',
        'employeeNics' => 'double',
        'employerNics' => 'double',
        'employeeAndEmployerNics' => 'double'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var array<string, bool>
      */
    protected static array $openAPINullables = [
        'table' => true,
        'earningsAtLel' => false,
        'earningsAboveLelToPt' => false,
        'earningsAbovePtToUap' => false,
        'earningsAboveUapToUel' => false,
        'earningsAbovePtToUel' => false,
        'employeeNics' => false,
        'employerNics' => false,
        'employeeAndEmployerNics' => false
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
        'table' => 'table',
        'earningsAtLel' => 'earningsAtLel',
        'earningsAboveLelToPt' => 'earningsAboveLelToPt',
        'earningsAbovePtToUap' => 'earningsAbovePtToUap',
        'earningsAboveUapToUel' => 'earningsAboveUapToUel',
        'earningsAbovePtToUel' => 'earningsAbovePtToUel',
        'employeeNics' => 'employeeNics',
        'employerNics' => 'employerNics',
        'employeeAndEmployerNics' => 'employeeAndEmployerNics'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var array<string, string>
     */
    protected static array $setters = [
        'table' => 'setTable',
        'earningsAtLel' => 'setEarningsAtLel',
        'earningsAboveLelToPt' => 'setEarningsAboveLelToPt',
        'earningsAbovePtToUap' => 'setEarningsAbovePtToUap',
        'earningsAboveUapToUel' => 'setEarningsAboveUapToUel',
        'earningsAbovePtToUel' => 'setEarningsAbovePtToUel',
        'employeeNics' => 'setEmployeeNics',
        'employerNics' => 'setEmployerNics',
        'employeeAndEmployerNics' => 'setEmployeeAndEmployerNics'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var array<string, string>
     */
    protected static array $getters = [
        'table' => 'getTable',
        'earningsAtLel' => 'getEarningsAtLel',
        'earningsAboveLelToPt' => 'getEarningsAboveLelToPt',
        'earningsAbovePtToUap' => 'getEarningsAbovePtToUap',
        'earningsAboveUapToUel' => 'getEarningsAboveUapToUel',
        'earningsAbovePtToUel' => 'getEarningsAbovePtToUel',
        'employeeNics' => 'getEmployeeNics',
        'employerNics' => 'getEmployerNics',
        'employeeAndEmployerNics' => 'getEmployeeAndEmployerNics'
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
        $this->setIfExists('table', $data ?? [], null);
        $this->setIfExists('earningsAtLel', $data ?? [], null);
        $this->setIfExists('earningsAboveLelToPt', $data ?? [], null);
        $this->setIfExists('earningsAbovePtToUap', $data ?? [], null);
        $this->setIfExists('earningsAboveUapToUel', $data ?? [], null);
        $this->setIfExists('earningsAbovePtToUel', $data ?? [], null);
        $this->setIfExists('employeeNics', $data ?? [], null);
        $this->setIfExists('employerNics', $data ?? [], null);
        $this->setIfExists('employeeAndEmployerNics', $data ?? [], null);
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
     * Gets table
     *
     * @return string|null
     */
    public function getTable(): ?string
    {
        return $this->container['table'];
    }

    /**
     * Sets table
     *
     * @param string|null $table [readonly]
     *
     * @return $this
     */
    public function setTable(?string $table): static
    {
        if (is_null($table)) {
            array_push($this->openAPINullablesSetToNull, 'table');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('table', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['table'] = $table;

        return $this;
    }

    /**
     * Gets earningsAtLel
     *
     * @return float|null
     */
    public function getEarningsAtLel(): ?float
    {
        return $this->container['earningsAtLel'];
    }

    /**
     * Sets earningsAtLel
     *
     * @param float|null $earningsAtLel [readonly]
     *
     * @return $this
     */
    public function setEarningsAtLel(?float $earningsAtLel): static
    {
        if (is_null($earningsAtLel)) {
            throw new InvalidArgumentException('non-nullable earningsAtLel cannot be null');
        }
        $this->container['earningsAtLel'] = $earningsAtLel;

        return $this;
    }

    /**
     * Gets earningsAboveLelToPt
     *
     * @return float|null
     */
    public function getEarningsAboveLelToPt(): ?float
    {
        return $this->container['earningsAboveLelToPt'];
    }

    /**
     * Sets earningsAboveLelToPt
     *
     * @param float|null $earningsAboveLelToPt [readonly]
     *
     * @return $this
     */
    public function setEarningsAboveLelToPt(?float $earningsAboveLelToPt): static
    {
        if (is_null($earningsAboveLelToPt)) {
            throw new InvalidArgumentException('non-nullable earningsAboveLelToPt cannot be null');
        }
        $this->container['earningsAboveLelToPt'] = $earningsAboveLelToPt;

        return $this;
    }

    /**
     * Gets earningsAbovePtToUap
     *
     * @return float|null
     */
    public function getEarningsAbovePtToUap(): ?float
    {
        return $this->container['earningsAbovePtToUap'];
    }

    /**
     * Sets earningsAbovePtToUap
     *
     * @param float|null $earningsAbovePtToUap [readonly]
     *
     * @return $this
     */
    public function setEarningsAbovePtToUap(?float $earningsAbovePtToUap): static
    {
        if (is_null($earningsAbovePtToUap)) {
            throw new InvalidArgumentException('non-nullable earningsAbovePtToUap cannot be null');
        }
        $this->container['earningsAbovePtToUap'] = $earningsAbovePtToUap;

        return $this;
    }

    /**
     * Gets earningsAboveUapToUel
     *
     * @return float|null
     */
    public function getEarningsAboveUapToUel(): ?float
    {
        return $this->container['earningsAboveUapToUel'];
    }

    /**
     * Sets earningsAboveUapToUel
     *
     * @param float|null $earningsAboveUapToUel [readonly]
     *
     * @return $this
     */
    public function setEarningsAboveUapToUel(?float $earningsAboveUapToUel): static
    {
        if (is_null($earningsAboveUapToUel)) {
            throw new InvalidArgumentException('non-nullable earningsAboveUapToUel cannot be null');
        }
        $this->container['earningsAboveUapToUel'] = $earningsAboveUapToUel;

        return $this;
    }

    /**
     * Gets earningsAbovePtToUel
     *
     * @return float|null
     */
    public function getEarningsAbovePtToUel(): ?float
    {
        return $this->container['earningsAbovePtToUel'];
    }

    /**
     * Sets earningsAbovePtToUel
     *
     * @param float|null $earningsAbovePtToUel [readonly]
     *
     * @return $this
     */
    public function setEarningsAbovePtToUel(?float $earningsAbovePtToUel): static
    {
        if (is_null($earningsAbovePtToUel)) {
            throw new InvalidArgumentException('non-nullable earningsAbovePtToUel cannot be null');
        }
        $this->container['earningsAbovePtToUel'] = $earningsAbovePtToUel;

        return $this;
    }

    /**
     * Gets employeeNics
     *
     * @return float|null
     */
    public function getEmployeeNics(): ?float
    {
        return $this->container['employeeNics'];
    }

    /**
     * Sets employeeNics
     *
     * @param float|null $employeeNics [readonly]
     *
     * @return $this
     */
    public function setEmployeeNics(?float $employeeNics): static
    {
        if (is_null($employeeNics)) {
            throw new InvalidArgumentException('non-nullable employeeNics cannot be null');
        }
        $this->container['employeeNics'] = $employeeNics;

        return $this;
    }

    /**
     * Gets employerNics
     *
     * @return float|null
     */
    public function getEmployerNics(): ?float
    {
        return $this->container['employerNics'];
    }

    /**
     * Sets employerNics
     *
     * @param float|null $employerNics [readonly]
     *
     * @return $this
     */
    public function setEmployerNics(?float $employerNics): static
    {
        if (is_null($employerNics)) {
            throw new InvalidArgumentException('non-nullable employerNics cannot be null');
        }
        $this->container['employerNics'] = $employerNics;

        return $this;
    }

    /**
     * Gets employeeAndEmployerNics
     *
     * @return float|null
     */
    public function getEmployeeAndEmployerNics(): ?float
    {
        return $this->container['employeeAndEmployerNics'];
    }

    /**
     * Sets employeeAndEmployerNics
     *
     * @param float|null $employeeAndEmployerNics [readonly]
     *
     * @return $this
     */
    public function setEmployeeAndEmployerNics(?float $employeeAndEmployerNics): static
    {
        if (is_null($employeeAndEmployerNics)) {
            throw new InvalidArgumentException('non-nullable employeeAndEmployerNics cannot be null');
        }
        $this->container['employeeAndEmployerNics'] = $employeeAndEmployerNics;

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

