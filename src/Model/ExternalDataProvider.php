<?php
/**
 * ExternalDataProvider
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
 * ExternalDataProvider Class Doc Comment
 *
 * @package  SynergiTech\Staffology
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements ArrayAccess<string, mixed>
 */
class ExternalDataProvider implements ModelInterface, ArrayAccess, JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'ExternalDataProvider';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var array<string, string>
      */
    protected static array $openAPITypes = [
        'name' => 'string',
        'id' => '\SynergiTech\Staffology\Model\ExternalDataProviderId',
        'authScheme' => '\SynergiTech\Staffology\Model\AuthScheme',
        'logoUrl' => 'string',
        'iconUrl' => 'string',
        'connected' => 'bool',
        'connectedAs' => 'string',
        'requiresConfig' => 'bool',
        'deferralUrl' => 'string',
        'types' => '\SynergiTech\Staffology\Model\ExternalDataProviderType[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'name' => null,
        'id' => null,
        'authScheme' => null,
        'logoUrl' => null,
        'iconUrl' => null,
        'connected' => null,
        'connectedAs' => null,
        'requiresConfig' => null,
        'deferralUrl' => null,
        'types' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var array<string, bool>
      */
    protected static array $openAPINullables = [
        'name' => true,
        'id' => false,
        'authScheme' => false,
        'logoUrl' => true,
        'iconUrl' => true,
        'connected' => false,
        'connectedAs' => true,
        'requiresConfig' => false,
        'deferralUrl' => true,
        'types' => true
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
        'id' => 'id',
        'authScheme' => 'authScheme',
        'logoUrl' => 'logoUrl',
        'iconUrl' => 'iconUrl',
        'connected' => 'connected',
        'connectedAs' => 'connectedAs',
        'requiresConfig' => 'requiresConfig',
        'deferralUrl' => 'deferralUrl',
        'types' => 'types'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var array<string, string>
     */
    protected static array $setters = [
        'name' => 'setName',
        'id' => 'setId',
        'authScheme' => 'setAuthScheme',
        'logoUrl' => 'setLogoUrl',
        'iconUrl' => 'setIconUrl',
        'connected' => 'setConnected',
        'connectedAs' => 'setConnectedAs',
        'requiresConfig' => 'setRequiresConfig',
        'deferralUrl' => 'setDeferralUrl',
        'types' => 'setTypes'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var array<string, string>
     */
    protected static array $getters = [
        'name' => 'getName',
        'id' => 'getId',
        'authScheme' => 'getAuthScheme',
        'logoUrl' => 'getLogoUrl',
        'iconUrl' => 'getIconUrl',
        'connected' => 'getConnected',
        'connectedAs' => 'getConnectedAs',
        'requiresConfig' => 'getRequiresConfig',
        'deferralUrl' => 'getDeferralUrl',
        'types' => 'getTypes'
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
        $this->setIfExists('id', $data ?? [], null);
        $this->setIfExists('authScheme', $data ?? [], null);
        $this->setIfExists('logoUrl', $data ?? [], null);
        $this->setIfExists('iconUrl', $data ?? [], null);
        $this->setIfExists('connected', $data ?? [], null);
        $this->setIfExists('connectedAs', $data ?? [], null);
        $this->setIfExists('requiresConfig', $data ?? [], null);
        $this->setIfExists('deferralUrl', $data ?? [], null);
        $this->setIfExists('types', $data ?? [], null);
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
     * @param string|null $name name
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
     * Gets id
     *
     * @return \SynergiTech\Staffology\Model\ExternalDataProviderId|null
     */
    public function getId(): ?\SynergiTech\Staffology\Model\ExternalDataProviderId
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param \SynergiTech\Staffology\Model\ExternalDataProviderId|null $id id
     *
     * @return $this
     */
    public function setId(?\SynergiTech\Staffology\Model\ExternalDataProviderId $id): static
    {
        if (is_null($id)) {
            throw new InvalidArgumentException('non-nullable id cannot be null');
        }
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets authScheme
     *
     * @return \SynergiTech\Staffology\Model\AuthScheme|null
     */
    public function getAuthScheme(): ?\SynergiTech\Staffology\Model\AuthScheme
    {
        return $this->container['authScheme'];
    }

    /**
     * Sets authScheme
     *
     * @param \SynergiTech\Staffology\Model\AuthScheme|null $authScheme authScheme
     *
     * @return $this
     */
    public function setAuthScheme(?\SynergiTech\Staffology\Model\AuthScheme $authScheme): static
    {
        if (is_null($authScheme)) {
            throw new InvalidArgumentException('non-nullable authScheme cannot be null');
        }
        $this->container['authScheme'] = $authScheme;

        return $this;
    }

    /**
     * Gets logoUrl
     *
     * @return string|null
     */
    public function getLogoUrl(): ?string
    {
        return $this->container['logoUrl'];
    }

    /**
     * Sets logoUrl
     *
     * @param string|null $logoUrl logoUrl
     *
     * @return $this
     */
    public function setLogoUrl(?string $logoUrl): static
    {
        if (is_null($logoUrl)) {
            array_push($this->openAPINullablesSetToNull, 'logoUrl');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('logoUrl', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['logoUrl'] = $logoUrl;

        return $this;
    }

    /**
     * Gets iconUrl
     *
     * @return string|null
     */
    public function getIconUrl(): ?string
    {
        return $this->container['iconUrl'];
    }

    /**
     * Sets iconUrl
     *
     * @param string|null $iconUrl iconUrl
     *
     * @return $this
     */
    public function setIconUrl(?string $iconUrl): static
    {
        if (is_null($iconUrl)) {
            array_push($this->openAPINullablesSetToNull, 'iconUrl');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('iconUrl', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['iconUrl'] = $iconUrl;

        return $this;
    }

    /**
     * Gets connected
     *
     * @return bool|null
     */
    public function getConnected(): ?bool
    {
        return $this->container['connected'];
    }

    /**
     * Sets connected
     *
     * @param bool|null $connected connected
     *
     * @return $this
     */
    public function setConnected(?bool $connected): static
    {
        if (is_null($connected)) {
            throw new InvalidArgumentException('non-nullable connected cannot be null');
        }
        $this->container['connected'] = $connected;

        return $this;
    }

    /**
     * Gets connectedAs
     *
     * @return string|null
     */
    public function getConnectedAs(): ?string
    {
        return $this->container['connectedAs'];
    }

    /**
     * Sets connectedAs
     *
     * @param string|null $connectedAs connectedAs
     *
     * @return $this
     */
    public function setConnectedAs(?string $connectedAs): static
    {
        if (is_null($connectedAs)) {
            array_push($this->openAPINullablesSetToNull, 'connectedAs');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('connectedAs', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['connectedAs'] = $connectedAs;

        return $this;
    }

    /**
     * Gets requiresConfig
     *
     * @return bool|null
     */
    public function getRequiresConfig(): ?bool
    {
        return $this->container['requiresConfig'];
    }

    /**
     * Sets requiresConfig
     *
     * @param bool|null $requiresConfig requiresConfig
     *
     * @return $this
     */
    public function setRequiresConfig(?bool $requiresConfig): static
    {
        if (is_null($requiresConfig)) {
            throw new InvalidArgumentException('non-nullable requiresConfig cannot be null');
        }
        $this->container['requiresConfig'] = $requiresConfig;

        return $this;
    }

    /**
     * Gets deferralUrl
     *
     * @return string|null
     */
    public function getDeferralUrl(): ?string
    {
        return $this->container['deferralUrl'];
    }

    /**
     * Sets deferralUrl
     *
     * @param string|null $deferralUrl deferralUrl
     *
     * @return $this
     */
    public function setDeferralUrl(?string $deferralUrl): static
    {
        if (is_null($deferralUrl)) {
            array_push($this->openAPINullablesSetToNull, 'deferralUrl');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('deferralUrl', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['deferralUrl'] = $deferralUrl;

        return $this;
    }

    /**
     * Gets types
     *
     * @return \SynergiTech\Staffology\Model\ExternalDataProviderType[]|null
     */
    public function getTypes(): ?array
    {
        return $this->container['types'];
    }

    /**
     * Sets types
     *
     * @param \SynergiTech\Staffology\Model\ExternalDataProviderType[]|null $types types
     *
     * @return $this
     */
    public function setTypes(?array $types): static
    {
        if (is_null($types)) {
            array_push($this->openAPINullablesSetToNull, 'types');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('types', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['types'] = $types;

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

