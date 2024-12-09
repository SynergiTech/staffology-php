<?php
/**
 * ExpensesAndBenefits
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
 * ExpensesAndBenefits Class Doc Comment
 *
 * @package  SynergiTech\Staffology
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements ArrayAccess<string, mixed>
 */
class ExpensesAndBenefits implements ModelInterface, ArrayAccess, JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'ExpensesAndBenefits';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var array<string, string>
      */
    protected static array $openAPITypes = [
        'employer' => '\SynergiTech\Staffology\Model\ExbEmployer',
        'declarations' => '\SynergiTech\Staffology\Model\ExbDeclarations',
        'p11Db' => '\SynergiTech\Staffology\Model\ExbP11db',
        'p11DrecordCount' => 'int',
        'p46CarRecordCount' => 'int',
        'p11D' => '\SynergiTech\Staffology\Model\ExbP11d[]',
        'relatedTaxYear' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'employer' => null,
        'declarations' => null,
        'p11Db' => null,
        'p11DrecordCount' => 'int32',
        'p46CarRecordCount' => 'int32',
        'p11D' => null,
        'relatedTaxYear' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var array<string, bool>
      */
    protected static array $openAPINullables = [
        'employer' => false,
        'declarations' => false,
        'p11Db' => false,
        'p11DrecordCount' => false,
        'p46CarRecordCount' => false,
        'p11D' => true,
        'relatedTaxYear' => true
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
        'employer' => 'employer',
        'declarations' => 'declarations',
        'p11Db' => 'p11Db',
        'p11DrecordCount' => 'p11DrecordCount',
        'p46CarRecordCount' => 'p46CarRecordCount',
        'p11D' => 'p11D',
        'relatedTaxYear' => 'relatedTaxYear'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var array<string, string>
     */
    protected static array $setters = [
        'employer' => 'setEmployer',
        'declarations' => 'setDeclarations',
        'p11Db' => 'setP11Db',
        'p11DrecordCount' => 'setP11DrecordCount',
        'p46CarRecordCount' => 'setP46CarRecordCount',
        'p11D' => 'setP11D',
        'relatedTaxYear' => 'setRelatedTaxYear'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var array<string, string>
     */
    protected static array $getters = [
        'employer' => 'getEmployer',
        'declarations' => 'getDeclarations',
        'p11Db' => 'getP11Db',
        'p11DrecordCount' => 'getP11DrecordCount',
        'p46CarRecordCount' => 'getP46CarRecordCount',
        'p11D' => 'getP11D',
        'relatedTaxYear' => 'getRelatedTaxYear'
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
        $this->setIfExists('employer', $data ?? [], null);
        $this->setIfExists('declarations', $data ?? [], null);
        $this->setIfExists('p11Db', $data ?? [], null);
        $this->setIfExists('p11DrecordCount', $data ?? [], null);
        $this->setIfExists('p46CarRecordCount', $data ?? [], null);
        $this->setIfExists('p11D', $data ?? [], null);
        $this->setIfExists('relatedTaxYear', $data ?? [], null);
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
     * Gets employer
     *
     * @return \SynergiTech\Staffology\Model\ExbEmployer|null
     */
    public function getEmployer(): ?\SynergiTech\Staffology\Model\ExbEmployer
    {
        return $this->container['employer'];
    }

    /**
     * Sets employer
     *
     * @param \SynergiTech\Staffology\Model\ExbEmployer|null $employer employer
     *
     * @return $this
     */
    public function setEmployer(?\SynergiTech\Staffology\Model\ExbEmployer $employer): static
    {
        if (is_null($employer)) {
            throw new InvalidArgumentException('non-nullable employer cannot be null');
        }
        $this->container['employer'] = $employer;

        return $this;
    }

    /**
     * Gets declarations
     *
     * @return \SynergiTech\Staffology\Model\ExbDeclarations|null
     */
    public function getDeclarations(): ?\SynergiTech\Staffology\Model\ExbDeclarations
    {
        return $this->container['declarations'];
    }

    /**
     * Sets declarations
     *
     * @param \SynergiTech\Staffology\Model\ExbDeclarations|null $declarations declarations
     *
     * @return $this
     */
    public function setDeclarations(?\SynergiTech\Staffology\Model\ExbDeclarations $declarations): static
    {
        if (is_null($declarations)) {
            throw new InvalidArgumentException('non-nullable declarations cannot be null');
        }
        $this->container['declarations'] = $declarations;

        return $this;
    }

    /**
     * Gets p11Db
     *
     * @return \SynergiTech\Staffology\Model\ExbP11db|null
     */
    public function getP11Db(): ?\SynergiTech\Staffology\Model\ExbP11db
    {
        return $this->container['p11Db'];
    }

    /**
     * Sets p11Db
     *
     * @param \SynergiTech\Staffology\Model\ExbP11db|null $p11Db p11Db
     *
     * @return $this
     */
    public function setP11Db(?\SynergiTech\Staffology\Model\ExbP11db $p11Db): static
    {
        if (is_null($p11Db)) {
            throw new InvalidArgumentException('non-nullable p11Db cannot be null');
        }
        $this->container['p11Db'] = $p11Db;

        return $this;
    }

    /**
     * Gets p11DrecordCount
     *
     * @return int|null
     */
    public function getP11DrecordCount(): ?int
    {
        return $this->container['p11DrecordCount'];
    }

    /**
     * Sets p11DrecordCount
     *
     * @param int|null $p11DrecordCount p11DrecordCount
     *
     * @return $this
     */
    public function setP11DrecordCount(?int $p11DrecordCount): static
    {
        if (is_null($p11DrecordCount)) {
            throw new InvalidArgumentException('non-nullable p11DrecordCount cannot be null');
        }
        $this->container['p11DrecordCount'] = $p11DrecordCount;

        return $this;
    }

    /**
     * Gets p46CarRecordCount
     *
     * @return int|null
     */
    public function getP46CarRecordCount(): ?int
    {
        return $this->container['p46CarRecordCount'];
    }

    /**
     * Sets p46CarRecordCount
     *
     * @param int|null $p46CarRecordCount p46CarRecordCount
     *
     * @return $this
     */
    public function setP46CarRecordCount(?int $p46CarRecordCount): static
    {
        if (is_null($p46CarRecordCount)) {
            throw new InvalidArgumentException('non-nullable p46CarRecordCount cannot be null');
        }
        $this->container['p46CarRecordCount'] = $p46CarRecordCount;

        return $this;
    }

    /**
     * Gets p11D
     *
     * @return \SynergiTech\Staffology\Model\ExbP11d[]|null
     */
    public function getP11D(): ?array
    {
        return $this->container['p11D'];
    }

    /**
     * Sets p11D
     *
     * @param \SynergiTech\Staffology\Model\ExbP11d[]|null $p11D p11D
     *
     * @return $this
     */
    public function setP11D(?array $p11D): static
    {
        if (is_null($p11D)) {
            array_push($this->openAPINullablesSetToNull, 'p11D');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('p11D', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['p11D'] = $p11D;

        return $this;
    }

    /**
     * Gets relatedTaxYear
     *
     * @return string|null
     */
    public function getRelatedTaxYear(): ?string
    {
        return $this->container['relatedTaxYear'];
    }

    /**
     * Sets relatedTaxYear
     *
     * @param string|null $relatedTaxYear relatedTaxYear
     *
     * @return $this
     */
    public function setRelatedTaxYear(?string $relatedTaxYear): static
    {
        if (is_null($relatedTaxYear)) {
            array_push($this->openAPINullablesSetToNull, 'relatedTaxYear');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('relatedTaxYear', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['relatedTaxYear'] = $relatedTaxYear;

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

