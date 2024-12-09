<?php
/**
 * FpsEmployeeNIlettersAndValues
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
 * FpsEmployeeNIlettersAndValues Class Doc Comment
 *
 * @package  SynergiTech\Staffology
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements ArrayAccess<string, mixed>
 */
class FpsEmployeeNIlettersAndValues implements ModelInterface, ArrayAccess, JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'FpsEmployeeNIlettersAndValues';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var array<string, string>
      */
    protected static array $openAPITypes = [
        'nIletter' => 'string',
        'grossEarningsForNICsInPd' => 'string',
        'grossEarningsForNICsYTD' => 'string',
        'atLELYTD' => 'string',
        'leLtoPTYTD' => 'string',
        'pTtoUELYTD' => 'string',
        'totalEmpNICInPd' => 'string',
        'totalEmpNICYTD' => 'string',
        'empeeContribnsInPd' => 'string',
        'empeeContribnsYTD' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'nIletter' => null,
        'grossEarningsForNICsInPd' => null,
        'grossEarningsForNICsYTD' => null,
        'atLELYTD' => null,
        'leLtoPTYTD' => null,
        'pTtoUELYTD' => null,
        'totalEmpNICInPd' => null,
        'totalEmpNICYTD' => null,
        'empeeContribnsInPd' => null,
        'empeeContribnsYTD' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var array<string, bool>
      */
    protected static array $openAPINullables = [
        'nIletter' => true,
        'grossEarningsForNICsInPd' => true,
        'grossEarningsForNICsYTD' => true,
        'atLELYTD' => true,
        'leLtoPTYTD' => true,
        'pTtoUELYTD' => true,
        'totalEmpNICInPd' => true,
        'totalEmpNICYTD' => true,
        'empeeContribnsInPd' => true,
        'empeeContribnsYTD' => true
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
        'nIletter' => 'nIletter',
        'grossEarningsForNICsInPd' => 'grossEarningsForNICsInPd',
        'grossEarningsForNICsYTD' => 'grossEarningsForNICsYTD',
        'atLELYTD' => 'atLELYTD',
        'leLtoPTYTD' => 'leLtoPTYTD',
        'pTtoUELYTD' => 'pTtoUELYTD',
        'totalEmpNICInPd' => 'totalEmpNICInPd',
        'totalEmpNICYTD' => 'totalEmpNICYTD',
        'empeeContribnsInPd' => 'empeeContribnsInPd',
        'empeeContribnsYTD' => 'empeeContribnsYTD'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var array<string, string>
     */
    protected static array $setters = [
        'nIletter' => 'setNIletter',
        'grossEarningsForNICsInPd' => 'setGrossEarningsForNICsInPd',
        'grossEarningsForNICsYTD' => 'setGrossEarningsForNICsYTD',
        'atLELYTD' => 'setAtLELYTD',
        'leLtoPTYTD' => 'setLeLtoPTYTD',
        'pTtoUELYTD' => 'setPTtoUELYTD',
        'totalEmpNICInPd' => 'setTotalEmpNICInPd',
        'totalEmpNICYTD' => 'setTotalEmpNICYTD',
        'empeeContribnsInPd' => 'setEmpeeContribnsInPd',
        'empeeContribnsYTD' => 'setEmpeeContribnsYTD'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var array<string, string>
     */
    protected static array $getters = [
        'nIletter' => 'getNIletter',
        'grossEarningsForNICsInPd' => 'getGrossEarningsForNICsInPd',
        'grossEarningsForNICsYTD' => 'getGrossEarningsForNICsYTD',
        'atLELYTD' => 'getAtLELYTD',
        'leLtoPTYTD' => 'getLeLtoPTYTD',
        'pTtoUELYTD' => 'getPTtoUELYTD',
        'totalEmpNICInPd' => 'getTotalEmpNICInPd',
        'totalEmpNICYTD' => 'getTotalEmpNICYTD',
        'empeeContribnsInPd' => 'getEmpeeContribnsInPd',
        'empeeContribnsYTD' => 'getEmpeeContribnsYTD'
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
        $this->setIfExists('nIletter', $data ?? [], null);
        $this->setIfExists('grossEarningsForNICsInPd', $data ?? [], null);
        $this->setIfExists('grossEarningsForNICsYTD', $data ?? [], null);
        $this->setIfExists('atLELYTD', $data ?? [], null);
        $this->setIfExists('leLtoPTYTD', $data ?? [], null);
        $this->setIfExists('pTtoUELYTD', $data ?? [], null);
        $this->setIfExists('totalEmpNICInPd', $data ?? [], null);
        $this->setIfExists('totalEmpNICYTD', $data ?? [], null);
        $this->setIfExists('empeeContribnsInPd', $data ?? [], null);
        $this->setIfExists('empeeContribnsYTD', $data ?? [], null);
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
     * Gets nIletter
     *
     * @return string|null
     */
    public function getNIletter(): ?string
    {
        return $this->container['nIletter'];
    }

    /**
     * Sets nIletter
     *
     * @param string|null $nIletter nIletter
     *
     * @return $this
     */
    public function setNIletter(?string $nIletter): static
    {
        if (is_null($nIletter)) {
            array_push($this->openAPINullablesSetToNull, 'nIletter');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('nIletter', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['nIletter'] = $nIletter;

        return $this;
    }

    /**
     * Gets grossEarningsForNICsInPd
     *
     * @return string|null
     */
    public function getGrossEarningsForNICsInPd(): ?string
    {
        return $this->container['grossEarningsForNICsInPd'];
    }

    /**
     * Sets grossEarningsForNICsInPd
     *
     * @param string|null $grossEarningsForNICsInPd grossEarningsForNICsInPd
     *
     * @return $this
     */
    public function setGrossEarningsForNICsInPd(?string $grossEarningsForNICsInPd): static
    {
        if (is_null($grossEarningsForNICsInPd)) {
            array_push($this->openAPINullablesSetToNull, 'grossEarningsForNICsInPd');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('grossEarningsForNICsInPd', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['grossEarningsForNICsInPd'] = $grossEarningsForNICsInPd;

        return $this;
    }

    /**
     * Gets grossEarningsForNICsYTD
     *
     * @return string|null
     */
    public function getGrossEarningsForNICsYTD(): ?string
    {
        return $this->container['grossEarningsForNICsYTD'];
    }

    /**
     * Sets grossEarningsForNICsYTD
     *
     * @param string|null $grossEarningsForNICsYTD grossEarningsForNICsYTD
     *
     * @return $this
     */
    public function setGrossEarningsForNICsYTD(?string $grossEarningsForNICsYTD): static
    {
        if (is_null($grossEarningsForNICsYTD)) {
            array_push($this->openAPINullablesSetToNull, 'grossEarningsForNICsYTD');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('grossEarningsForNICsYTD', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['grossEarningsForNICsYTD'] = $grossEarningsForNICsYTD;

        return $this;
    }

    /**
     * Gets atLELYTD
     *
     * @return string|null
     */
    public function getAtLELYTD(): ?string
    {
        return $this->container['atLELYTD'];
    }

    /**
     * Sets atLELYTD
     *
     * @param string|null $atLELYTD atLELYTD
     *
     * @return $this
     */
    public function setAtLELYTD(?string $atLELYTD): static
    {
        if (is_null($atLELYTD)) {
            array_push($this->openAPINullablesSetToNull, 'atLELYTD');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('atLELYTD', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['atLELYTD'] = $atLELYTD;

        return $this;
    }

    /**
     * Gets leLtoPTYTD
     *
     * @return string|null
     */
    public function getLeLtoPTYTD(): ?string
    {
        return $this->container['leLtoPTYTD'];
    }

    /**
     * Sets leLtoPTYTD
     *
     * @param string|null $leLtoPTYTD leLtoPTYTD
     *
     * @return $this
     */
    public function setLeLtoPTYTD(?string $leLtoPTYTD): static
    {
        if (is_null($leLtoPTYTD)) {
            array_push($this->openAPINullablesSetToNull, 'leLtoPTYTD');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('leLtoPTYTD', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['leLtoPTYTD'] = $leLtoPTYTD;

        return $this;
    }

    /**
     * Gets pTtoUELYTD
     *
     * @return string|null
     */
    public function getPTtoUELYTD(): ?string
    {
        return $this->container['pTtoUELYTD'];
    }

    /**
     * Sets pTtoUELYTD
     *
     * @param string|null $pTtoUELYTD pTtoUELYTD
     *
     * @return $this
     */
    public function setPTtoUELYTD(?string $pTtoUELYTD): static
    {
        if (is_null($pTtoUELYTD)) {
            array_push($this->openAPINullablesSetToNull, 'pTtoUELYTD');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('pTtoUELYTD', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['pTtoUELYTD'] = $pTtoUELYTD;

        return $this;
    }

    /**
     * Gets totalEmpNICInPd
     *
     * @return string|null
     */
    public function getTotalEmpNICInPd(): ?string
    {
        return $this->container['totalEmpNICInPd'];
    }

    /**
     * Sets totalEmpNICInPd
     *
     * @param string|null $totalEmpNICInPd totalEmpNICInPd
     *
     * @return $this
     */
    public function setTotalEmpNICInPd(?string $totalEmpNICInPd): static
    {
        if (is_null($totalEmpNICInPd)) {
            array_push($this->openAPINullablesSetToNull, 'totalEmpNICInPd');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('totalEmpNICInPd', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['totalEmpNICInPd'] = $totalEmpNICInPd;

        return $this;
    }

    /**
     * Gets totalEmpNICYTD
     *
     * @return string|null
     */
    public function getTotalEmpNICYTD(): ?string
    {
        return $this->container['totalEmpNICYTD'];
    }

    /**
     * Sets totalEmpNICYTD
     *
     * @param string|null $totalEmpNICYTD totalEmpNICYTD
     *
     * @return $this
     */
    public function setTotalEmpNICYTD(?string $totalEmpNICYTD): static
    {
        if (is_null($totalEmpNICYTD)) {
            array_push($this->openAPINullablesSetToNull, 'totalEmpNICYTD');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('totalEmpNICYTD', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['totalEmpNICYTD'] = $totalEmpNICYTD;

        return $this;
    }

    /**
     * Gets empeeContribnsInPd
     *
     * @return string|null
     */
    public function getEmpeeContribnsInPd(): ?string
    {
        return $this->container['empeeContribnsInPd'];
    }

    /**
     * Sets empeeContribnsInPd
     *
     * @param string|null $empeeContribnsInPd empeeContribnsInPd
     *
     * @return $this
     */
    public function setEmpeeContribnsInPd(?string $empeeContribnsInPd): static
    {
        if (is_null($empeeContribnsInPd)) {
            array_push($this->openAPINullablesSetToNull, 'empeeContribnsInPd');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('empeeContribnsInPd', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['empeeContribnsInPd'] = $empeeContribnsInPd;

        return $this;
    }

    /**
     * Gets empeeContribnsYTD
     *
     * @return string|null
     */
    public function getEmpeeContribnsYTD(): ?string
    {
        return $this->container['empeeContribnsYTD'];
    }

    /**
     * Sets empeeContribnsYTD
     *
     * @param string|null $empeeContribnsYTD empeeContribnsYTD
     *
     * @return $this
     */
    public function setEmpeeContribnsYTD(?string $empeeContribnsYTD): static
    {
        if (is_null($empeeContribnsYTD)) {
            array_push($this->openAPINullablesSetToNull, 'empeeContribnsYTD');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('empeeContribnsYTD', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['empeeContribnsYTD'] = $empeeContribnsYTD;

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


