<?php
/**
 * ContractSpinalPointRequest
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
 * ContractSpinalPointRequest Class Doc Comment
 *
 * @package  SynergiTech\Staffology
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements ArrayAccess<string, mixed>
 */
class ContractSpinalPointRequest implements ModelInterface, ArrayAccess, JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'Contract.SpinalPointRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var array<string, string>
      */
    protected static array $openAPITypes = [
        'name' => 'string',
        'number' => 'int',
        'annualValue' => 'float',
        'annualValueAltMax' => 'float',
        'annualValueLAInner' => 'float',
        'annualValueLAInnerAltMax' => 'float',
        'annualValueLAOuter' => 'float',
        'annualValueLAOuterAltMax' => 'float',
        'annualValueLAFringe' => 'float',
        'annualValueLAFringeAltMax' => 'float',
        'effectiveDate' => '\DateTime',
        'predecessorId' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'name' => null,
        'number' => 'int32',
        'annualValue' => 'double',
        'annualValueAltMax' => 'double',
        'annualValueLAInner' => 'double',
        'annualValueLAInnerAltMax' => 'double',
        'annualValueLAOuter' => 'double',
        'annualValueLAOuterAltMax' => 'double',
        'annualValueLAFringe' => 'double',
        'annualValueLAFringeAltMax' => 'double',
        'effectiveDate' => 'date',
        'predecessorId' => 'uuid'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var array<string, bool>
      */
    protected static array $openAPINullables = [
        'name' => true,
        'number' => false,
        'annualValue' => false,
        'annualValueAltMax' => false,
        'annualValueLAInner' => false,
        'annualValueLAInnerAltMax' => false,
        'annualValueLAOuter' => false,
        'annualValueLAOuterAltMax' => false,
        'annualValueLAFringe' => false,
        'annualValueLAFringeAltMax' => false,
        'effectiveDate' => false,
        'predecessorId' => true
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
        'name' => 'name',
        'number' => 'number',
        'annualValue' => 'annualValue',
        'annualValueAltMax' => 'annualValueAltMax',
        'annualValueLAInner' => 'annualValueLAInner',
        'annualValueLAInnerAltMax' => 'annualValueLAInnerAltMax',
        'annualValueLAOuter' => 'annualValueLAOuter',
        'annualValueLAOuterAltMax' => 'annualValueLAOuterAltMax',
        'annualValueLAFringe' => 'annualValueLAFringe',
        'annualValueLAFringeAltMax' => 'annualValueLAFringeAltMax',
        'effectiveDate' => 'effectiveDate',
        'predecessorId' => 'predecessorId'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var array<string, string>
     */
    protected static array $setters = [
        'name' => 'setName',
        'number' => 'setNumber',
        'annualValue' => 'setAnnualValue',
        'annualValueAltMax' => 'setAnnualValueAltMax',
        'annualValueLAInner' => 'setAnnualValueLAInner',
        'annualValueLAInnerAltMax' => 'setAnnualValueLAInnerAltMax',
        'annualValueLAOuter' => 'setAnnualValueLAOuter',
        'annualValueLAOuterAltMax' => 'setAnnualValueLAOuterAltMax',
        'annualValueLAFringe' => 'setAnnualValueLAFringe',
        'annualValueLAFringeAltMax' => 'setAnnualValueLAFringeAltMax',
        'effectiveDate' => 'setEffectiveDate',
        'predecessorId' => 'setPredecessorId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var array<string, string>
     */
    protected static array $getters = [
        'name' => 'getName',
        'number' => 'getNumber',
        'annualValue' => 'getAnnualValue',
        'annualValueAltMax' => 'getAnnualValueAltMax',
        'annualValueLAInner' => 'getAnnualValueLAInner',
        'annualValueLAInnerAltMax' => 'getAnnualValueLAInnerAltMax',
        'annualValueLAOuter' => 'getAnnualValueLAOuter',
        'annualValueLAOuterAltMax' => 'getAnnualValueLAOuterAltMax',
        'annualValueLAFringe' => 'getAnnualValueLAFringe',
        'annualValueLAFringeAltMax' => 'getAnnualValueLAFringeAltMax',
        'effectiveDate' => 'getEffectiveDate',
        'predecessorId' => 'getPredecessorId'
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
        $this->setIfExists('name', $data ?? [], null);
        $this->setIfExists('number', $data ?? [], null);
        $this->setIfExists('annualValue', $data ?? [], null);
        $this->setIfExists('annualValueAltMax', $data ?? [], null);
        $this->setIfExists('annualValueLAInner', $data ?? [], null);
        $this->setIfExists('annualValueLAInnerAltMax', $data ?? [], null);
        $this->setIfExists('annualValueLAOuter', $data ?? [], null);
        $this->setIfExists('annualValueLAOuterAltMax', $data ?? [], null);
        $this->setIfExists('annualValueLAFringe', $data ?? [], null);
        $this->setIfExists('annualValueLAFringeAltMax', $data ?? [], null);
        $this->setIfExists('effectiveDate', $data ?? [], null);
        $this->setIfExists('predecessorId', $data ?? [], null);
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
     * Gets name
     *
     * @return string|null
     */
    public function getName(): ?string
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string|null $name Name of the Spinal Point
     *
     * @return $this
     */
    public function setName(?string $name): static
    {
        if (is_null($name)) {
            array_push($this->openAPINullablesSetToNull, 'name');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('name', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets number
     *
     * @return int|null
     */
    public function getNumber(): ?int
    {
        return $this->container['number'];
    }

    /**
     * Sets number
     *
     * @param int|null $number Number of Spinal Point within the Scale
     *
     * @return $this
     */
    public function setNumber(?int $number): static
    {
        if (is_null($number)) {
            throw new InvalidArgumentException('non-nullable number cannot be null');
        }
        $this->container['number'] = $number;

        return $this;
    }

    /**
     * Gets annualValue
     *
     * @return float|null
     */
    public function getAnnualValue(): ?float
    {
        return $this->container['annualValue'];
    }

    /**
     * Sets annualValue
     *
     * @param float|null $annualValue Annual Value for the Spinal Point
     *
     * @return $this
     */
    public function setAnnualValue(?float $annualValue): static
    {
        if (is_null($annualValue)) {
            throw new InvalidArgumentException('non-nullable annualValue cannot be null');
        }
        $this->container['annualValue'] = $annualValue;

        return $this;
    }

    /**
     * Gets annualValueAltMax
     *
     * @return float|null
     */
    public function getAnnualValueAltMax(): ?float
    {
        return $this->container['annualValueAltMax'];
    }

    /**
     * Sets annualValueAltMax
     *
     * @param float|null $annualValueAltMax Annual Value for the Spinal Point (Alternative Max Value)
     *
     * @return $this
     */
    public function setAnnualValueAltMax(?float $annualValueAltMax): static
    {
        if (is_null($annualValueAltMax)) {
            throw new InvalidArgumentException('non-nullable annualValueAltMax cannot be null');
        }
        $this->container['annualValueAltMax'] = $annualValueAltMax;

        return $this;
    }

    /**
     * Gets annualValueLAInner
     *
     * @return float|null
     */
    public function getAnnualValueLAInner(): ?float
    {
        return $this->container['annualValueLAInner'];
    }

    /**
     * Sets annualValueLAInner
     *
     * @param float|null $annualValueLAInner Annual Value for the Spinal Point Inner London Allowance
     *
     * @return $this
     */
    public function setAnnualValueLAInner(?float $annualValueLAInner): static
    {
        if (is_null($annualValueLAInner)) {
            throw new InvalidArgumentException('non-nullable annualValueLAInner cannot be null');
        }
        $this->container['annualValueLAInner'] = $annualValueLAInner;

        return $this;
    }

    /**
     * Gets annualValueLAInnerAltMax
     *
     * @return float|null
     */
    public function getAnnualValueLAInnerAltMax(): ?float
    {
        return $this->container['annualValueLAInnerAltMax'];
    }

    /**
     * Sets annualValueLAInnerAltMax
     *
     * @param float|null $annualValueLAInnerAltMax Annual Value for the Spinal Point Inner LA (Alt Max Value)
     *
     * @return $this
     */
    public function setAnnualValueLAInnerAltMax(?float $annualValueLAInnerAltMax): static
    {
        if (is_null($annualValueLAInnerAltMax)) {
            throw new InvalidArgumentException('non-nullable annualValueLAInnerAltMax cannot be null');
        }
        $this->container['annualValueLAInnerAltMax'] = $annualValueLAInnerAltMax;

        return $this;
    }

    /**
     * Gets annualValueLAOuter
     *
     * @return float|null
     */
    public function getAnnualValueLAOuter(): ?float
    {
        return $this->container['annualValueLAOuter'];
    }

    /**
     * Sets annualValueLAOuter
     *
     * @param float|null $annualValueLAOuter Annual Value for the Spinal Point Outer London Allowance
     *
     * @return $this
     */
    public function setAnnualValueLAOuter(?float $annualValueLAOuter): static
    {
        if (is_null($annualValueLAOuter)) {
            throw new InvalidArgumentException('non-nullable annualValueLAOuter cannot be null');
        }
        $this->container['annualValueLAOuter'] = $annualValueLAOuter;

        return $this;
    }

    /**
     * Gets annualValueLAOuterAltMax
     *
     * @return float|null
     */
    public function getAnnualValueLAOuterAltMax(): ?float
    {
        return $this->container['annualValueLAOuterAltMax'];
    }

    /**
     * Sets annualValueLAOuterAltMax
     *
     * @param float|null $annualValueLAOuterAltMax Annual Value for the Spinal Point Outer LA (Alt Max Value)
     *
     * @return $this
     */
    public function setAnnualValueLAOuterAltMax(?float $annualValueLAOuterAltMax): static
    {
        if (is_null($annualValueLAOuterAltMax)) {
            throw new InvalidArgumentException('non-nullable annualValueLAOuterAltMax cannot be null');
        }
        $this->container['annualValueLAOuterAltMax'] = $annualValueLAOuterAltMax;

        return $this;
    }

    /**
     * Gets annualValueLAFringe
     *
     * @return float|null
     */
    public function getAnnualValueLAFringe(): ?float
    {
        return $this->container['annualValueLAFringe'];
    }

    /**
     * Sets annualValueLAFringe
     *
     * @param float|null $annualValueLAFringe Annual Value for the Spinal Point Fringe London Allowance
     *
     * @return $this
     */
    public function setAnnualValueLAFringe(?float $annualValueLAFringe): static
    {
        if (is_null($annualValueLAFringe)) {
            throw new InvalidArgumentException('non-nullable annualValueLAFringe cannot be null');
        }
        $this->container['annualValueLAFringe'] = $annualValueLAFringe;

        return $this;
    }

    /**
     * Gets annualValueLAFringeAltMax
     *
     * @return float|null
     */
    public function getAnnualValueLAFringeAltMax(): ?float
    {
        return $this->container['annualValueLAFringeAltMax'];
    }

    /**
     * Sets annualValueLAFringeAltMax
     *
     * @param float|null $annualValueLAFringeAltMax Annual Value for the Spinal Point Fringe LA (Alt Max Value)
     *
     * @return $this
     */
    public function setAnnualValueLAFringeAltMax(?float $annualValueLAFringeAltMax): static
    {
        if (is_null($annualValueLAFringeAltMax)) {
            throw new InvalidArgumentException('non-nullable annualValueLAFringeAltMax cannot be null');
        }
        $this->container['annualValueLAFringeAltMax'] = $annualValueLAFringeAltMax;

        return $this;
    }

    /**
     * Gets effectiveDate
     *
     * @return \DateTime|null
     */
    public function getEffectiveDate(): ?\DateTime
    {
        return $this->container['effectiveDate'];
    }

    /**
     * Sets effectiveDate
     *
     * @param \DateTime|null $effectiveDate Date these rates became effective
     *
     * @return $this
     */
    public function setEffectiveDate(?\DateTime $effectiveDate): static
    {
        if (is_null($effectiveDate)) {
            throw new InvalidArgumentException('non-nullable effectiveDate cannot be null');
        }
        $this->container['effectiveDate'] = $effectiveDate;

        return $this;
    }

    /**
     * Gets predecessorId
     *
     * @return string|null
     */
    public function getPredecessorId(): ?string
    {
        return $this->container['predecessorId'];
    }

    /**
     * Sets predecessorId
     *
     * @param string|null $predecessorId Spinal point predecessorId
     *
     * @return $this
     */
    public function setPredecessorId(?string $predecessorId): static
    {
        if (is_null($predecessorId)) {
            array_push($this->openAPINullablesSetToNull, 'predecessorId');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('predecessorId', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['predecessorId'] = $predecessorId;

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


