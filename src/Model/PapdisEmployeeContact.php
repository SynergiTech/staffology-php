<?php
/**
 * PapdisEmployeeContact
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
 * PapdisEmployeeContact Class Doc Comment
 *
 * @package  SynergiTech\Staffology
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements ArrayAccess<string, mixed>
 */
class PapdisEmployeeContact implements ModelInterface, ArrayAccess, JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'PapdisEmployeeContact';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var array<string, string>
      */
    protected static array $openAPITypes = [
        'postalAddress' => '\SynergiTech\Staffology\Model\PapdisEmployeeContactPostalAddress',
        'emailAddress' => 'string',
        'secondaryEmailAddress' => 'string',
        'telephone' => 'string',
        'mobile' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'postalAddress' => null,
        'emailAddress' => null,
        'secondaryEmailAddress' => null,
        'telephone' => null,
        'mobile' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var array<string, bool>
      */
    protected static array $openAPINullables = [
        'postalAddress' => false,
        'emailAddress' => true,
        'secondaryEmailAddress' => true,
        'telephone' => true,
        'mobile' => true
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
        'postalAddress' => 'postalAddress',
        'emailAddress' => 'emailAddress',
        'secondaryEmailAddress' => 'secondaryEmailAddress',
        'telephone' => 'telephone',
        'mobile' => 'mobile'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var array<string, string>
     */
    protected static array $setters = [
        'postalAddress' => 'setPostalAddress',
        'emailAddress' => 'setEmailAddress',
        'secondaryEmailAddress' => 'setSecondaryEmailAddress',
        'telephone' => 'setTelephone',
        'mobile' => 'setMobile'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var array<string, string>
     */
    protected static array $getters = [
        'postalAddress' => 'getPostalAddress',
        'emailAddress' => 'getEmailAddress',
        'secondaryEmailAddress' => 'getSecondaryEmailAddress',
        'telephone' => 'getTelephone',
        'mobile' => 'getMobile'
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
        $this->setIfExists('postalAddress', $data ?? [], null);
        $this->setIfExists('emailAddress', $data ?? [], null);
        $this->setIfExists('secondaryEmailAddress', $data ?? [], null);
        $this->setIfExists('telephone', $data ?? [], null);
        $this->setIfExists('mobile', $data ?? [], null);
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
     * Gets postalAddress
     *
     * @return \SynergiTech\Staffology\Model\PapdisEmployeeContactPostalAddress|null
     */
    public function getPostalAddress(): ?\SynergiTech\Staffology\Model\PapdisEmployeeContactPostalAddress
    {
        return $this->container['postalAddress'];
    }

    /**
     * Sets postalAddress
     *
     * @param \SynergiTech\Staffology\Model\PapdisEmployeeContactPostalAddress|null $postalAddress postalAddress
     *
     * @return $this
     */
    public function setPostalAddress(?\SynergiTech\Staffology\Model\PapdisEmployeeContactPostalAddress $postalAddress): static
    {
        if (is_null($postalAddress)) {
            throw new InvalidArgumentException('non-nullable postalAddress cannot be null');
        }
        $this->container['postalAddress'] = $postalAddress;

        return $this;
    }

    /**
     * Gets emailAddress
     *
     * @return string|null
     */
    public function getEmailAddress(): ?string
    {
        return $this->container['emailAddress'];
    }

    /**
     * Sets emailAddress
     *
     * @param string|null $emailAddress [readonly]
     *
     * @return $this
     */
    public function setEmailAddress(?string $emailAddress): static
    {
        if (is_null($emailAddress)) {
            array_push($this->openAPINullablesSetToNull, 'emailAddress');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('emailAddress', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['emailAddress'] = $emailAddress;

        return $this;
    }

    /**
     * Gets secondaryEmailAddress
     *
     * @return string|null
     */
    public function getSecondaryEmailAddress(): ?string
    {
        return $this->container['secondaryEmailAddress'];
    }

    /**
     * Sets secondaryEmailAddress
     *
     * @param string|null $secondaryEmailAddress [readonly]
     *
     * @return $this
     */
    public function setSecondaryEmailAddress(?string $secondaryEmailAddress): static
    {
        if (is_null($secondaryEmailAddress)) {
            array_push($this->openAPINullablesSetToNull, 'secondaryEmailAddress');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('secondaryEmailAddress', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['secondaryEmailAddress'] = $secondaryEmailAddress;

        return $this;
    }

    /**
     * Gets telephone
     *
     * @return string|null
     */
    public function getTelephone(): ?string
    {
        return $this->container['telephone'];
    }

    /**
     * Sets telephone
     *
     * @param string|null $telephone [readonly]
     *
     * @return $this
     */
    public function setTelephone(?string $telephone): static
    {
        if (is_null($telephone)) {
            array_push($this->openAPINullablesSetToNull, 'telephone');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('telephone', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['telephone'] = $telephone;

        return $this;
    }

    /**
     * Gets mobile
     *
     * @return string|null
     */
    public function getMobile(): ?string
    {
        return $this->container['mobile'];
    }

    /**
     * Sets mobile
     *
     * @param string|null $mobile [readonly]
     *
     * @return $this
     */
    public function setMobile(?string $mobile): static
    {
        if (is_null($mobile)) {
            array_push($this->openAPINullablesSetToNull, 'mobile');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('mobile', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['mobile'] = $mobile;

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


