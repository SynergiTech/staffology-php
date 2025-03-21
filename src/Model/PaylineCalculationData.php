<?php
/**
 * PaylineCalculationData
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
 * PaylineCalculationData Class Doc Comment
 *
 * @package  SynergiTech\Staffology
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements ArrayAccess<string, mixed>
 */
class PaylineCalculationData implements ModelInterface, ArrayAccess, JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'PaylineCalculationData';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var array<string, string>
      */
    protected static array $openAPITypes = [
        'fixedAnnualValue' => 'float',
        'contractedHours' => 'float',
        'contractedWeeks' => 'float',
        'fullTimeEquivalent' => 'float',
        'fullTimeHours' => 'float',
        'fullTimeWeeks' => 'float',
        'fullTimeSalary' => 'float'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'fixedAnnualValue' => 'double',
        'contractedHours' => 'double',
        'contractedWeeks' => 'double',
        'fullTimeEquivalent' => 'double',
        'fullTimeHours' => 'double',
        'fullTimeWeeks' => 'double',
        'fullTimeSalary' => 'double'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var array<string, bool>
      */
    protected static array $openAPINullables = [
        'fixedAnnualValue' => false,
        'contractedHours' => false,
        'contractedWeeks' => false,
        'fullTimeEquivalent' => false,
        'fullTimeHours' => false,
        'fullTimeWeeks' => false,
        'fullTimeSalary' => false
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
        'fixedAnnualValue' => 'fixedAnnualValue',
        'contractedHours' => 'contractedHours',
        'contractedWeeks' => 'contractedWeeks',
        'fullTimeEquivalent' => 'fullTimeEquivalent',
        'fullTimeHours' => 'fullTimeHours',
        'fullTimeWeeks' => 'fullTimeWeeks',
        'fullTimeSalary' => 'fullTimeSalary'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var array<string, string>
     */
    protected static array $setters = [
        'fixedAnnualValue' => 'setFixedAnnualValue',
        'contractedHours' => 'setContractedHours',
        'contractedWeeks' => 'setContractedWeeks',
        'fullTimeEquivalent' => 'setFullTimeEquivalent',
        'fullTimeHours' => 'setFullTimeHours',
        'fullTimeWeeks' => 'setFullTimeWeeks',
        'fullTimeSalary' => 'setFullTimeSalary'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var array<string, string>
     */
    protected static array $getters = [
        'fixedAnnualValue' => 'getFixedAnnualValue',
        'contractedHours' => 'getContractedHours',
        'contractedWeeks' => 'getContractedWeeks',
        'fullTimeEquivalent' => 'getFullTimeEquivalent',
        'fullTimeHours' => 'getFullTimeHours',
        'fullTimeWeeks' => 'getFullTimeWeeks',
        'fullTimeSalary' => 'getFullTimeSalary'
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
        $this->setIfExists('fixedAnnualValue', $data ?? [], null);
        $this->setIfExists('contractedHours', $data ?? [], null);
        $this->setIfExists('contractedWeeks', $data ?? [], null);
        $this->setIfExists('fullTimeEquivalent', $data ?? [], null);
        $this->setIfExists('fullTimeHours', $data ?? [], null);
        $this->setIfExists('fullTimeWeeks', $data ?? [], null);
        $this->setIfExists('fullTimeSalary', $data ?? [], null);
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
     * Gets fixedAnnualValue
     *
     * @return float|null
     */
    public function getFixedAnnualValue(): ?float
    {
        return $this->container['fixedAnnualValue'];
    }

    /**
     * Sets fixedAnnualValue
     *
     * @param float|null $fixedAnnualValue PaySpine full time annual value
     *
     * @return $this
     */
    public function setFixedAnnualValue(?float $fixedAnnualValue): static
    {
        if (is_null($fixedAnnualValue)) {
            throw new InvalidArgumentException('non-nullable fixedAnnualValue cannot be null');
        }
        $this->container['fixedAnnualValue'] = $fixedAnnualValue;

        return $this;
    }

    /**
     * Gets contractedHours
     *
     * @return float|null
     */
    public function getContractedHours(): ?float
    {
        return $this->container['contractedHours'];
    }

    /**
     * Sets contractedHours
     *
     * @param float|null $contractedHours PaySpine contracted hours
     *
     * @return $this
     */
    public function setContractedHours(?float $contractedHours): static
    {
        if (is_null($contractedHours)) {
            throw new InvalidArgumentException('non-nullable contractedHours cannot be null');
        }
        $this->container['contractedHours'] = $contractedHours;

        return $this;
    }

    /**
     * Gets contractedWeeks
     *
     * @return float|null
     */
    public function getContractedWeeks(): ?float
    {
        return $this->container['contractedWeeks'];
    }

    /**
     * Sets contractedWeeks
     *
     * @param float|null $contractedWeeks PaySpine contracted weeks
     *
     * @return $this
     */
    public function setContractedWeeks(?float $contractedWeeks): static
    {
        if (is_null($contractedWeeks)) {
            throw new InvalidArgumentException('non-nullable contractedWeeks cannot be null');
        }
        $this->container['contractedWeeks'] = $contractedWeeks;

        return $this;
    }

    /**
     * Gets fullTimeEquivalent
     *
     * @return float|null
     */
    public function getFullTimeEquivalent(): ?float
    {
        return $this->container['fullTimeEquivalent'];
    }

    /**
     * Sets fullTimeEquivalent
     *
     * @param float|null $fullTimeEquivalent PaySpine full time equivalent value
     *
     * @return $this
     */
    public function setFullTimeEquivalent(?float $fullTimeEquivalent): static
    {
        if (is_null($fullTimeEquivalent)) {
            throw new InvalidArgumentException('non-nullable fullTimeEquivalent cannot be null');
        }
        $this->container['fullTimeEquivalent'] = $fullTimeEquivalent;

        return $this;
    }

    /**
     * Gets fullTimeHours
     *
     * @return float|null
     */
    public function getFullTimeHours(): ?float
    {
        return $this->container['fullTimeHours'];
    }

    /**
     * Sets fullTimeHours
     *
     * @param float|null $fullTimeHours PaySpine full time hours
     *
     * @return $this
     */
    public function setFullTimeHours(?float $fullTimeHours): static
    {
        if (is_null($fullTimeHours)) {
            throw new InvalidArgumentException('non-nullable fullTimeHours cannot be null');
        }
        $this->container['fullTimeHours'] = $fullTimeHours;

        return $this;
    }

    /**
     * Gets fullTimeWeeks
     *
     * @return float|null
     */
    public function getFullTimeWeeks(): ?float
    {
        return $this->container['fullTimeWeeks'];
    }

    /**
     * Sets fullTimeWeeks
     *
     * @param float|null $fullTimeWeeks PaySpine full time weeks
     *
     * @return $this
     */
    public function setFullTimeWeeks(?float $fullTimeWeeks): static
    {
        if (is_null($fullTimeWeeks)) {
            throw new InvalidArgumentException('non-nullable fullTimeWeeks cannot be null');
        }
        $this->container['fullTimeWeeks'] = $fullTimeWeeks;

        return $this;
    }

    /**
     * Gets fullTimeSalary
     *
     * @return float|null
     */
    public function getFullTimeSalary(): ?float
    {
        return $this->container['fullTimeSalary'];
    }

    /**
     * Sets fullTimeSalary
     *
     * @param float|null $fullTimeSalary PaySpine full time salary
     *
     * @return $this
     */
    public function setFullTimeSalary(?float $fullTimeSalary): static
    {
        if (is_null($fullTimeSalary)) {
            throw new InvalidArgumentException('non-nullable fullTimeSalary cannot be null');
        }
        $this->container['fullTimeSalary'] = $fullTimeSalary;

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


