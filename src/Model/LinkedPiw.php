<?php
/**
 * LinkedPiw
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
 * LinkedPiw Class Doc Comment
 *
 * @description Linked Period of Incapacity for Work.  If you record Sick Leave and select Statutory Pay then any other Sick Leave with Statutory Pay  lasting 4 or more days in the previous 8 weeks will be linked to it
 * @package  SynergiTech\Staffology
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements ArrayAccess<string, mixed>
 */
class LinkedPiw implements ModelInterface, ArrayAccess, JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'LinkedPiw';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var array<string, string>
      */
    protected static array $openAPITypes = [
        'result' => '\SynergiTech\Staffology\Model\LinkedPiwResult',
        'id' => 'string',
        'averageWeeklyEarnings' => 'float',
        'workingDays' => 'float',
        'totalDays' => 'float',
        'sspFirstPayDay' => '\DateTime',
        'sspFirstDay' => '\DateTime'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'result' => null,
        'id' => 'uuid',
        'averageWeeklyEarnings' => 'double',
        'workingDays' => 'double',
        'totalDays' => 'double',
        'sspFirstPayDay' => 'date',
        'sspFirstDay' => 'date'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var array<string, bool>
      */
    protected static array $openAPINullables = [
        'result' => false,
        'id' => false,
        'averageWeeklyEarnings' => false,
        'workingDays' => false,
        'totalDays' => false,
        'sspFirstPayDay' => true,
        'sspFirstDay' => true
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
        'result' => 'result',
        'id' => 'id',
        'averageWeeklyEarnings' => 'averageWeeklyEarnings',
        'workingDays' => 'workingDays',
        'totalDays' => 'totalDays',
        'sspFirstPayDay' => 'sspFirstPayDay',
        'sspFirstDay' => 'sspFirstDay'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var array<string, string>
     */
    protected static array $setters = [
        'result' => 'setResult',
        'id' => 'setId',
        'averageWeeklyEarnings' => 'setAverageWeeklyEarnings',
        'workingDays' => 'setWorkingDays',
        'totalDays' => 'setTotalDays',
        'sspFirstPayDay' => 'setSspFirstPayDay',
        'sspFirstDay' => 'setSspFirstDay'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var array<string, string>
     */
    protected static array $getters = [
        'result' => 'getResult',
        'id' => 'getId',
        'averageWeeklyEarnings' => 'getAverageWeeklyEarnings',
        'workingDays' => 'getWorkingDays',
        'totalDays' => 'getTotalDays',
        'sspFirstPayDay' => 'getSspFirstPayDay',
        'sspFirstDay' => 'getSspFirstDay'
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
        $this->setIfExists('result', $data ?? [], null);
        $this->setIfExists('id', $data ?? [], null);
        $this->setIfExists('averageWeeklyEarnings', $data ?? [], null);
        $this->setIfExists('workingDays', $data ?? [], null);
        $this->setIfExists('totalDays', $data ?? [], null);
        $this->setIfExists('sspFirstPayDay', $data ?? [], null);
        $this->setIfExists('sspFirstDay', $data ?? [], null);
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
     * Gets result
     *
     * @return \SynergiTech\Staffology\Model\LinkedPiwResult|null
     */
    public function getResult(): ?\SynergiTech\Staffology\Model\LinkedPiwResult
    {
        return $this->container['result'];
    }

    /**
     * Sets result
     *
     * @param \SynergiTech\Staffology\Model\LinkedPiwResult|null $result result
     *
     * @return $this
     */
    public function setResult(?\SynergiTech\Staffology\Model\LinkedPiwResult $result): static
    {
        if (is_null($result)) {
            throw new InvalidArgumentException('non-nullable result cannot be null');
        }
        $this->container['result'] = $result;

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
     * @param string|null $id [readonly] The Id of the linked Leave
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
     * Gets averageWeeklyEarnings
     *
     * @return float|null
     */
    public function getAverageWeeklyEarnings(): ?float
    {
        return $this->container['averageWeeklyEarnings'];
    }

    /**
     * Sets averageWeeklyEarnings
     *
     * @param float|null $averageWeeklyEarnings [readonly] Average weekly earnings from linked Leave
     *
     * @return $this
     */
    public function setAverageWeeklyEarnings(?float $averageWeeklyEarnings): static
    {
        if (is_null($averageWeeklyEarnings)) {
            throw new InvalidArgumentException('non-nullable averageWeeklyEarnings cannot be null');
        }
        $this->container['averageWeeklyEarnings'] = $averageWeeklyEarnings;

        return $this;
    }

    /**
     * Gets workingDays
     *
     * @return float|null
     */
    public function getWorkingDays(): ?float
    {
        return $this->container['workingDays'];
    }

    /**
     * Sets workingDays
     *
     * @param float|null $workingDays [readonly] The number of working days in the linked Leave.
     *
     * @return $this
     */
    public function setWorkingDays(?float $workingDays): static
    {
        if (is_null($workingDays)) {
            throw new InvalidArgumentException('non-nullable workingDays cannot be null');
        }
        $this->container['workingDays'] = $workingDays;

        return $this;
    }

    /**
     * Gets totalDays
     *
     * @return float|null
     */
    public function getTotalDays(): ?float
    {
        return $this->container['totalDays'];
    }

    /**
     * Sets totalDays
     *
     * @param float|null $totalDays [readonly] The number of days covered by the linked Leave.
     *
     * @return $this
     */
    public function setTotalDays(?float $totalDays): static
    {
        if (is_null($totalDays)) {
            throw new InvalidArgumentException('non-nullable totalDays cannot be null');
        }
        $this->container['totalDays'] = $totalDays;

        return $this;
    }

    /**
     * Gets sspFirstPayDay
     *
     * @return \DateTime|null
     */
    public function getSspFirstPayDay(): ?\DateTime
    {
        return $this->container['sspFirstPayDay'];
    }

    /**
     * Sets sspFirstPayDay
     *
     * @param \DateTime|null $sspFirstPayDay [readonly] The SspFirstPayDay from the linked Leave, if set
     *
     * @return $this
     */
    public function setSspFirstPayDay(?\DateTime $sspFirstPayDay): static
    {
        if (is_null($sspFirstPayDay)) {
            array_push($this->openAPINullablesSetToNull, 'sspFirstPayDay');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('sspFirstPayDay', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['sspFirstPayDay'] = $sspFirstPayDay;

        return $this;
    }

    /**
     * Gets sspFirstDay
     *
     * @return \DateTime|null
     */
    public function getSspFirstDay(): ?\DateTime
    {
        return $this->container['sspFirstDay'];
    }

    /**
     * Sets sspFirstDay
     *
     * @param \DateTime|null $sspFirstDay [readonly] The SspFirstDay from the linked Leave, if set
     *
     * @return $this
     */
    public function setSspFirstDay(?\DateTime $sspFirstDay): static
    {
        if (is_null($sspFirstDay)) {
            array_push($this->openAPINullablesSetToNull, 'sspFirstDay');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('sspFirstDay', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['sspFirstDay'] = $sspFirstDay;

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

