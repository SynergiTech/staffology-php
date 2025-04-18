<?php
/**
 * ContractEmployeeRoleAnalysisCategoryCodeResponse
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
 * ContractEmployeeRoleAnalysisCategoryCodeResponse Class Doc Comment
 *
 * @package  SynergiTech\Staffology
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements ArrayAccess<string, mixed>
 */
class ContractEmployeeRoleAnalysisCategoryCodeResponse implements ModelInterface, ArrayAccess, JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'Contract.EmployeeRoleAnalysisCategoryCodeResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var array<string, string>
      */
    protected static array $openAPITypes = [
        'id' => 'string',
        'code' => 'string',
        'color' => 'string',
        'title' => 'string',
        'weighting' => 'float',
        'analysisCategoryName' => 'string',
        'analysisCategoryPublicId' => 'string',
        'isPrimary' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'id' => 'uuid',
        'code' => null,
        'color' => null,
        'title' => null,
        'weighting' => 'double',
        'analysisCategoryName' => null,
        'analysisCategoryPublicId' => 'uuid',
        'isPrimary' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var array<string, bool>
      */
    protected static array $openAPINullables = [
        'id' => false,
        'code' => true,
        'color' => true,
        'title' => true,
        'weighting' => false,
        'analysisCategoryName' => true,
        'analysisCategoryPublicId' => false,
        'isPrimary' => false
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
        'id' => 'id',
        'code' => 'code',
        'color' => 'color',
        'title' => 'title',
        'weighting' => 'weighting',
        'analysisCategoryName' => 'analysisCategoryName',
        'analysisCategoryPublicId' => 'analysisCategoryPublicId',
        'isPrimary' => 'isPrimary'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var array<string, string>
     */
    protected static array $setters = [
        'id' => 'setId',
        'code' => 'setCode',
        'color' => 'setColor',
        'title' => 'setTitle',
        'weighting' => 'setWeighting',
        'analysisCategoryName' => 'setAnalysisCategoryName',
        'analysisCategoryPublicId' => 'setAnalysisCategoryPublicId',
        'isPrimary' => 'setIsPrimary'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var array<string, string>
     */
    protected static array $getters = [
        'id' => 'getId',
        'code' => 'getCode',
        'color' => 'getColor',
        'title' => 'getTitle',
        'weighting' => 'getWeighting',
        'analysisCategoryName' => 'getAnalysisCategoryName',
        'analysisCategoryPublicId' => 'getAnalysisCategoryPublicId',
        'isPrimary' => 'getIsPrimary'
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
        $this->setIfExists('id', $data ?? [], null);
        $this->setIfExists('code', $data ?? [], null);
        $this->setIfExists('color', $data ?? [], null);
        $this->setIfExists('title', $data ?? [], null);
        $this->setIfExists('weighting', $data ?? [], null);
        $this->setIfExists('analysisCategoryName', $data ?? [], null);
        $this->setIfExists('analysisCategoryPublicId', $data ?? [], null);
        $this->setIfExists('isPrimary', $data ?? [], null);
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
     * @param string|null $id Employee Role Analysis Category Code identifier
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
     * @param string|null $code Analysis Category code
     *
     * @return $this
     */
    public function setCode(?string $code): static
    {
        if (is_null($code)) {
            array_push($this->openAPINullablesSetToNull, 'code');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('code', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['code'] = $code;

        return $this;
    }

    /**
     * Gets color
     *
     * @return string|null
     */
    public function getColor(): ?string
    {
        return $this->container['color'];
    }

    /**
     * Sets color
     *
     * @param string|null $color Analysis Category code color
     *
     * @return $this
     */
    public function setColor(?string $color): static
    {
        if (is_null($color)) {
            array_push($this->openAPINullablesSetToNull, 'color');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('color', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['color'] = $color;

        return $this;
    }

    /**
     * Gets title
     *
     * @return string|null
     */
    public function getTitle(): ?string
    {
        return $this->container['title'];
    }

    /**
     * Sets title
     *
     * @param string|null $title Analysis Category code Title
     *
     * @return $this
     */
    public function setTitle(?string $title): static
    {
        if (is_null($title)) {
            array_push($this->openAPINullablesSetToNull, 'title');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('title', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['title'] = $title;

        return $this;
    }

    /**
     * Gets weighting
     *
     * @return float|null
     */
    public function getWeighting(): ?float
    {
        return $this->container['weighting'];
    }

    /**
     * Sets weighting
     *
     * @param float|null $weighting Weightage for analysis category code
     *
     * @return $this
     */
    public function setWeighting(?float $weighting): static
    {
        if (is_null($weighting)) {
            throw new InvalidArgumentException('non-nullable weighting cannot be null');
        }
        $this->container['weighting'] = $weighting;

        return $this;
    }

    /**
     * Gets analysisCategoryName
     *
     * @return string|null
     */
    public function getAnalysisCategoryName(): ?string
    {
        return $this->container['analysisCategoryName'];
    }

    /**
     * Sets analysisCategoryName
     *
     * @param string|null $analysisCategoryName Analysis category name for AnalysisCategory code
     *
     * @return $this
     */
    public function setAnalysisCategoryName(?string $analysisCategoryName): static
    {
        if (is_null($analysisCategoryName)) {
            array_push($this->openAPINullablesSetToNull, 'analysisCategoryName');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('analysisCategoryName', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['analysisCategoryName'] = $analysisCategoryName;

        return $this;
    }

    /**
     * Gets analysisCategoryPublicId
     *
     * @return string|null
     */
    public function getAnalysisCategoryPublicId(): ?string
    {
        return $this->container['analysisCategoryPublicId'];
    }

    /**
     * Sets analysisCategoryPublicId
     *
     * @param string|null $analysisCategoryPublicId Analysis category identifier
     *
     * @return $this
     */
    public function setAnalysisCategoryPublicId(?string $analysisCategoryPublicId): static
    {
        if (is_null($analysisCategoryPublicId)) {
            throw new InvalidArgumentException('non-nullable analysisCategoryPublicId cannot be null');
        }
        $this->container['analysisCategoryPublicId'] = $analysisCategoryPublicId;

        return $this;
    }

    /**
     * Gets isPrimary
     *
     * @return bool|null
     */
    public function getIsPrimary(): ?bool
    {
        return $this->container['isPrimary'];
    }

    /**
     * Sets isPrimary
     *
     * @param bool|null $isPrimary Return whether Employee Role is primary for not
     *
     * @return $this
     */
    public function setIsPrimary(?bool $isPrimary): static
    {
        if (is_null($isPrimary)) {
            throw new InvalidArgumentException('non-nullable isPrimary cannot be null');
        }
        $this->container['isPrimary'] = $isPrimary;

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


