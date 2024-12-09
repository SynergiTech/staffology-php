<?php
/**
 * NationalInsuranceCode
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
 * NationalInsuranceCode Class Doc Comment
 *
 * @description Part of the TaxYearConfig that our engine uses to calculate National Insurance Contributions.  It is used internally when our engine performs calculations.  You do not need to do anything with this model, it&#39;s provided purely for informational purposes.
 * @package  SynergiTech\Staffology
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements ArrayAccess<string, mixed>
 */
class NationalInsuranceCode implements ModelInterface, ArrayAccess, JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'NationalInsuranceCode';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var array<string, string>
      */
    protected static array $openAPITypes = [
        'code' => 'string',
        'description' => 'string',
        'eeB' => 'float',
        'eeC' => 'float',
        'eeD' => 'float',
        'eeE' => 'float',
        'eeF' => 'float',
        'erB' => 'float',
        'erC' => 'float',
        'erD' => 'float',
        'erE' => 'float',
        'erF' => 'float',
        'effectiveFrom' => '\DateTime',
        'midYearChanges' => '\SynergiTech\Staffology\Model\NationalInsuranceCode[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'code' => null,
        'description' => null,
        'eeB' => 'double',
        'eeC' => 'double',
        'eeD' => 'double',
        'eeE' => 'double',
        'eeF' => 'double',
        'erB' => 'double',
        'erC' => 'double',
        'erD' => 'double',
        'erE' => 'double',
        'erF' => 'double',
        'effectiveFrom' => 'date',
        'midYearChanges' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var array<string, bool>
      */
    protected static array $openAPINullables = [
        'code' => false,
        'description' => true,
        'eeB' => false,
        'eeC' => false,
        'eeD' => false,
        'eeE' => false,
        'eeF' => false,
        'erB' => false,
        'erC' => false,
        'erD' => false,
        'erE' => false,
        'erF' => false,
        'effectiveFrom' => true,
        'midYearChanges' => true
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
        'code' => 'code',
        'description' => 'description',
        'eeB' => 'eeB',
        'eeC' => 'eeC',
        'eeD' => 'eeD',
        'eeE' => 'eeE',
        'eeF' => 'eeF',
        'erB' => 'erB',
        'erC' => 'erC',
        'erD' => 'erD',
        'erE' => 'erE',
        'erF' => 'erF',
        'effectiveFrom' => 'effectiveFrom',
        'midYearChanges' => 'midYearChanges'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var array<string, string>
     */
    protected static array $setters = [
        'code' => 'setCode',
        'description' => 'setDescription',
        'eeB' => 'setEeB',
        'eeC' => 'setEeC',
        'eeD' => 'setEeD',
        'eeE' => 'setEeE',
        'eeF' => 'setEeF',
        'erB' => 'setErB',
        'erC' => 'setErC',
        'erD' => 'setErD',
        'erE' => 'setErE',
        'erF' => 'setErF',
        'effectiveFrom' => 'setEffectiveFrom',
        'midYearChanges' => 'setMidYearChanges'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var array<string, string>
     */
    protected static array $getters = [
        'code' => 'getCode',
        'description' => 'getDescription',
        'eeB' => 'getEeB',
        'eeC' => 'getEeC',
        'eeD' => 'getEeD',
        'eeE' => 'getEeE',
        'eeF' => 'getEeF',
        'erB' => 'getErB',
        'erC' => 'getErC',
        'erD' => 'getErD',
        'erE' => 'getErE',
        'erF' => 'getErF',
        'effectiveFrom' => 'getEffectiveFrom',
        'midYearChanges' => 'getMidYearChanges'
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
        $this->setIfExists('code', $data ?? [], null);
        $this->setIfExists('description', $data ?? [], null);
        $this->setIfExists('eeB', $data ?? [], null);
        $this->setIfExists('eeC', $data ?? [], null);
        $this->setIfExists('eeD', $data ?? [], null);
        $this->setIfExists('eeE', $data ?? [], null);
        $this->setIfExists('eeF', $data ?? [], null);
        $this->setIfExists('erB', $data ?? [], null);
        $this->setIfExists('erC', $data ?? [], null);
        $this->setIfExists('erD', $data ?? [], null);
        $this->setIfExists('erE', $data ?? [], null);
        $this->setIfExists('erF', $data ?? [], null);
        $this->setIfExists('effectiveFrom', $data ?? [], null);
        $this->setIfExists('midYearChanges', $data ?? [], null);
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
     * Gets code
     *
     * @return string|null
     */
    public function getCode(): ?string
    {
        return $this->container['code'];
    }

    /**
     * Sets code
     *
     * @param string|null $code [readonly] NI Table Letter
     *
     * @return $this
     */
    public function setCode(?string $code): static
    {
        if (is_null($code)) {
            throw new InvalidArgumentException('non-nullable code cannot be null');
        }
        $this->container['code'] = $code;

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
     * @param string|null $description [readonly] Description of Employees that would use this NI Letter
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
     * Gets eeB
     *
     * @return float|null
     */
    public function getEeB(): ?float
    {
        return $this->container['eeB'];
    }

    /**
     * Sets eeB
     *
     * @param float|null $eeB [readonly] Earnings at or above LEL up to and including PT (Employee Contribution)
     *
     * @return $this
     */
    public function setEeB(?float $eeB): static
    {
        if (is_null($eeB)) {
            throw new InvalidArgumentException('non-nullable eeB cannot be null');
        }
        $this->container['eeB'] = $eeB;

        return $this;
    }

    /**
     * Gets eeC
     *
     * @return float|null
     */
    public function getEeC(): ?float
    {
        return $this->container['eeC'];
    }

    /**
     * Sets eeC
     *
     * @param float|null $eeC [readonly] Earnings above the PT up to and including UEL (Employee Contribution)
     *
     * @return $this
     */
    public function setEeC(?float $eeC): static
    {
        if (is_null($eeC)) {
            throw new InvalidArgumentException('non-nullable eeC cannot be null');
        }
        $this->container['eeC'] = $eeC;

        return $this;
    }

    /**
     * Gets eeD
     *
     * @return float|null
     */
    public function getEeD(): ?float
    {
        return $this->container['eeD'];
    }

    /**
     * Sets eeD
     *
     * @param float|null $eeD [readonly] Balance of earnings above UEL (Employee Contribution)
     *
     * @return $this
     */
    public function setEeD(?float $eeD): static
    {
        if (is_null($eeD)) {
            throw new InvalidArgumentException('non-nullable eeD cannot be null');
        }
        $this->container['eeD'] = $eeD;

        return $this;
    }

    /**
     * Gets eeE
     *
     * @return float|null
     */
    public function getEeE(): ?float
    {
        return $this->container['eeE'];
    }

    /**
     * Sets eeE
     *
     * @param float|null $eeE [readonly]
     *
     * @return $this
     */
    public function setEeE(?float $eeE): static
    {
        if (is_null($eeE)) {
            throw new InvalidArgumentException('non-nullable eeE cannot be null');
        }
        $this->container['eeE'] = $eeE;

        return $this;
    }

    /**
     * Gets eeF
     *
     * @return float|null
     */
    public function getEeF(): ?float
    {
        return $this->container['eeF'];
    }

    /**
     * Sets eeF
     *
     * @param float|null $eeF [readonly]
     *
     * @return $this
     */
    public function setEeF(?float $eeF): static
    {
        if (is_null($eeF)) {
            throw new InvalidArgumentException('non-nullable eeF cannot be null');
        }
        $this->container['eeF'] = $eeF;

        return $this;
    }

    /**
     * Gets erB
     *
     * @return float|null
     */
    public function getErB(): ?float
    {
        return $this->container['erB'];
    }

    /**
     * Sets erB
     *
     * @param float|null $erB [readonly] Earnings at or above LEL up to and including PT (Employer Contribution)
     *
     * @return $this
     */
    public function setErB(?float $erB): static
    {
        if (is_null($erB)) {
            throw new InvalidArgumentException('non-nullable erB cannot be null');
        }
        $this->container['erB'] = $erB;

        return $this;
    }

    /**
     * Gets erC
     *
     * @return float|null
     */
    public function getErC(): ?float
    {
        return $this->container['erC'];
    }

    /**
     * Sets erC
     *
     * @param float|null $erC [readonly]  Earnings above the PT up to and including UEL (Employer Contribution)
     *
     * @return $this
     */
    public function setErC(?float $erC): static
    {
        if (is_null($erC)) {
            throw new InvalidArgumentException('non-nullable erC cannot be null');
        }
        $this->container['erC'] = $erC;

        return $this;
    }

    /**
     * Gets erD
     *
     * @return float|null
     */
    public function getErD(): ?float
    {
        return $this->container['erD'];
    }

    /**
     * Sets erD
     *
     * @param float|null $erD [readonly] Balance of earnings above UEL (Employer Contribution)
     *
     * @return $this
     */
    public function setErD(?float $erD): static
    {
        if (is_null($erD)) {
            throw new InvalidArgumentException('non-nullable erD cannot be null');
        }
        $this->container['erD'] = $erD;

        return $this;
    }

    /**
     * Gets erE
     *
     * @return float|null
     */
    public function getErE(): ?float
    {
        return $this->container['erE'];
    }

    /**
     * Sets erE
     *
     * @param float|null $erE [readonly]
     *
     * @return $this
     */
    public function setErE(?float $erE): static
    {
        if (is_null($erE)) {
            throw new InvalidArgumentException('non-nullable erE cannot be null');
        }
        $this->container['erE'] = $erE;

        return $this;
    }

    /**
     * Gets erF
     *
     * @return float|null
     */
    public function getErF(): ?float
    {
        return $this->container['erF'];
    }

    /**
     * Sets erF
     *
     * @param float|null $erF [readonly]
     *
     * @return $this
     */
    public function setErF(?float $erF): static
    {
        if (is_null($erF)) {
            throw new InvalidArgumentException('non-nullable erF cannot be null');
        }
        $this->container['erF'] = $erF;

        return $this;
    }

    /**
     * Gets effectiveFrom
     *
     * @return \DateTime|null
     */
    public function getEffectiveFrom(): ?\DateTime
    {
        return $this->container['effectiveFrom'];
    }

    /**
     * Sets effectiveFrom
     *
     * @param \DateTime|null $effectiveFrom The date when these period values are effective
     *
     * @return $this
     */
    public function setEffectiveFrom(?\DateTime $effectiveFrom): static
    {
        if (is_null($effectiveFrom)) {
            array_push($this->openAPINullablesSetToNull, 'effectiveFrom');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('effectiveFrom', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['effectiveFrom'] = $effectiveFrom;

        return $this;
    }

    /**
     * Gets midYearChanges
     *
     * @return \SynergiTech\Staffology\Model\NationalInsuranceCode[]|null
     */
    public function getMidYearChanges(): ?array
    {
        return $this->container['midYearChanges'];
    }

    /**
     * Sets midYearChanges
     *
     * @param \SynergiTech\Staffology\Model\NationalInsuranceCode[]|null $midYearChanges Any optional changes to the period values that are effective from a specified date in the middle of a tax year
     *
     * @return $this
     */
    public function setMidYearChanges(?array $midYearChanges): static
    {
        if (is_null($midYearChanges)) {
            array_push($this->openAPINullablesSetToNull, 'midYearChanges');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('midYearChanges', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['midYearChanges'] = $midYearChanges;

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


