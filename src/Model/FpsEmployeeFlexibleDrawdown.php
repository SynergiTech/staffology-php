<?php
/**
 * FpsEmployeeFlexibleDrawdown
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
 * FpsEmployeeFlexibleDrawdown Class Doc Comment
 *
 * @package  SynergiTech\Staffology
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements ArrayAccess<string, mixed>
 */
class FpsEmployeeFlexibleDrawdown implements ModelInterface, ArrayAccess, JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'FpsEmployeeFlexibleDrawdown';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var array<string, string>
      */
    protected static array $openAPITypes = [
        'flexiblyAccessingPensionRights' => 'string',
        'pensionDeathBenefit' => 'string',
        'seriousIllHealthLumpSum' => 'string',
        'standAloneLumpSum' => 'string',
        'pensionCommencementExcess' => 'string',
        'taxablePayment' => 'string',
        'nontaxablePayment' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'flexiblyAccessingPensionRights' => null,
        'pensionDeathBenefit' => null,
        'seriousIllHealthLumpSum' => null,
        'standAloneLumpSum' => null,
        'pensionCommencementExcess' => null,
        'taxablePayment' => null,
        'nontaxablePayment' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var array<string, bool>
      */
    protected static array $openAPINullables = [
        'flexiblyAccessingPensionRights' => true,
        'pensionDeathBenefit' => true,
        'seriousIllHealthLumpSum' => true,
        'standAloneLumpSum' => true,
        'pensionCommencementExcess' => true,
        'taxablePayment' => true,
        'nontaxablePayment' => true
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
        'flexiblyAccessingPensionRights' => 'flexiblyAccessingPensionRights',
        'pensionDeathBenefit' => 'pensionDeathBenefit',
        'seriousIllHealthLumpSum' => 'seriousIllHealthLumpSum',
        'standAloneLumpSum' => 'standAloneLumpSum',
        'pensionCommencementExcess' => 'pensionCommencementExcess',
        'taxablePayment' => 'taxablePayment',
        'nontaxablePayment' => 'nontaxablePayment'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var array<string, string>
     */
    protected static array $setters = [
        'flexiblyAccessingPensionRights' => 'setFlexiblyAccessingPensionRights',
        'pensionDeathBenefit' => 'setPensionDeathBenefit',
        'seriousIllHealthLumpSum' => 'setSeriousIllHealthLumpSum',
        'standAloneLumpSum' => 'setStandAloneLumpSum',
        'pensionCommencementExcess' => 'setPensionCommencementExcess',
        'taxablePayment' => 'setTaxablePayment',
        'nontaxablePayment' => 'setNontaxablePayment'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var array<string, string>
     */
    protected static array $getters = [
        'flexiblyAccessingPensionRights' => 'getFlexiblyAccessingPensionRights',
        'pensionDeathBenefit' => 'getPensionDeathBenefit',
        'seriousIllHealthLumpSum' => 'getSeriousIllHealthLumpSum',
        'standAloneLumpSum' => 'getStandAloneLumpSum',
        'pensionCommencementExcess' => 'getPensionCommencementExcess',
        'taxablePayment' => 'getTaxablePayment',
        'nontaxablePayment' => 'getNontaxablePayment'
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
        $this->setIfExists('flexiblyAccessingPensionRights', $data ?? [], null);
        $this->setIfExists('pensionDeathBenefit', $data ?? [], null);
        $this->setIfExists('seriousIllHealthLumpSum', $data ?? [], null);
        $this->setIfExists('standAloneLumpSum', $data ?? [], null);
        $this->setIfExists('pensionCommencementExcess', $data ?? [], null);
        $this->setIfExists('taxablePayment', $data ?? [], null);
        $this->setIfExists('nontaxablePayment', $data ?? [], null);
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
     * Gets flexiblyAccessingPensionRights
     *
     * @return string|null
     */
    public function getFlexiblyAccessingPensionRights(): ?string
    {
        return $this->container['flexiblyAccessingPensionRights'];
    }

    /**
     * Sets flexiblyAccessingPensionRights
     *
     * @param string|null $flexiblyAccessingPensionRights flexiblyAccessingPensionRights
     *
     * @return $this
     */
    public function setFlexiblyAccessingPensionRights(?string $flexiblyAccessingPensionRights): static
    {
        if (is_null($flexiblyAccessingPensionRights)) {
            array_push($this->openAPINullablesSetToNull, 'flexiblyAccessingPensionRights');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('flexiblyAccessingPensionRights', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['flexiblyAccessingPensionRights'] = $flexiblyAccessingPensionRights;

        return $this;
    }

    /**
     * Gets pensionDeathBenefit
     *
     * @return string|null
     */
    public function getPensionDeathBenefit(): ?string
    {
        return $this->container['pensionDeathBenefit'];
    }

    /**
     * Sets pensionDeathBenefit
     *
     * @param string|null $pensionDeathBenefit pensionDeathBenefit
     *
     * @return $this
     */
    public function setPensionDeathBenefit(?string $pensionDeathBenefit): static
    {
        if (is_null($pensionDeathBenefit)) {
            array_push($this->openAPINullablesSetToNull, 'pensionDeathBenefit');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('pensionDeathBenefit', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['pensionDeathBenefit'] = $pensionDeathBenefit;

        return $this;
    }

    /**
     * Gets seriousIllHealthLumpSum
     *
     * @return string|null
     */
    public function getSeriousIllHealthLumpSum(): ?string
    {
        return $this->container['seriousIllHealthLumpSum'];
    }

    /**
     * Sets seriousIllHealthLumpSum
     *
     * @param string|null $seriousIllHealthLumpSum seriousIllHealthLumpSum
     *
     * @return $this
     */
    public function setSeriousIllHealthLumpSum(?string $seriousIllHealthLumpSum): static
    {
        if (is_null($seriousIllHealthLumpSum)) {
            array_push($this->openAPINullablesSetToNull, 'seriousIllHealthLumpSum');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('seriousIllHealthLumpSum', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['seriousIllHealthLumpSum'] = $seriousIllHealthLumpSum;

        return $this;
    }

    /**
     * Gets standAloneLumpSum
     *
     * @return string|null
     */
    public function getStandAloneLumpSum(): ?string
    {
        return $this->container['standAloneLumpSum'];
    }

    /**
     * Sets standAloneLumpSum
     *
     * @param string|null $standAloneLumpSum standAloneLumpSum
     *
     * @return $this
     */
    public function setStandAloneLumpSum(?string $standAloneLumpSum): static
    {
        if (is_null($standAloneLumpSum)) {
            array_push($this->openAPINullablesSetToNull, 'standAloneLumpSum');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('standAloneLumpSum', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['standAloneLumpSum'] = $standAloneLumpSum;

        return $this;
    }

    /**
     * Gets pensionCommencementExcess
     *
     * @return string|null
     */
    public function getPensionCommencementExcess(): ?string
    {
        return $this->container['pensionCommencementExcess'];
    }

    /**
     * Sets pensionCommencementExcess
     *
     * @param string|null $pensionCommencementExcess pensionCommencementExcess
     *
     * @return $this
     */
    public function setPensionCommencementExcess(?string $pensionCommencementExcess): static
    {
        if (is_null($pensionCommencementExcess)) {
            array_push($this->openAPINullablesSetToNull, 'pensionCommencementExcess');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('pensionCommencementExcess', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['pensionCommencementExcess'] = $pensionCommencementExcess;

        return $this;
    }

    /**
     * Gets taxablePayment
     *
     * @return string|null
     */
    public function getTaxablePayment(): ?string
    {
        return $this->container['taxablePayment'];
    }

    /**
     * Sets taxablePayment
     *
     * @param string|null $taxablePayment taxablePayment
     *
     * @return $this
     */
    public function setTaxablePayment(?string $taxablePayment): static
    {
        if (is_null($taxablePayment)) {
            array_push($this->openAPINullablesSetToNull, 'taxablePayment');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('taxablePayment', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['taxablePayment'] = $taxablePayment;

        return $this;
    }

    /**
     * Gets nontaxablePayment
     *
     * @return string|null
     */
    public function getNontaxablePayment(): ?string
    {
        return $this->container['nontaxablePayment'];
    }

    /**
     * Sets nontaxablePayment
     *
     * @param string|null $nontaxablePayment nontaxablePayment
     *
     * @return $this
     */
    public function setNontaxablePayment(?string $nontaxablePayment): static
    {
        if (is_null($nontaxablePayment)) {
            array_push($this->openAPINullablesSetToNull, 'nontaxablePayment');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('nontaxablePayment', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['nontaxablePayment'] = $nontaxablePayment;

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


