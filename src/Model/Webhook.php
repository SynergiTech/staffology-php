<?php
/**
 * Webhook
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
 * Webhook Class Doc Comment
 *
 * @package  SynergiTech\Staffology
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements ArrayAccess<string, mixed>
 */
class Webhook implements ModelInterface, ArrayAccess, JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'Webhook';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var array<string, string>
      */
    protected static array $openAPITypes = [
        'webhookEvent' => '\SynergiTech\Staffology\Model\WebhookEvent',
        'url' => 'string',
        'active' => 'bool',
        'eventCount' => 'int',
        'lastPayload' => '\SynergiTech\Staffology\Model\WebhookPayload',
        'id' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'webhookEvent' => null,
        'url' => 'uri',
        'active' => null,
        'eventCount' => 'int32',
        'lastPayload' => null,
        'id' => 'uuid'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var array<string, bool>
      */
    protected static array $openAPINullables = [
        'webhookEvent' => false,
        'url' => false,
        'active' => false,
        'eventCount' => false,
        'lastPayload' => false,
        'id' => false
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
        'webhookEvent' => 'webhookEvent',
        'url' => 'url',
        'active' => 'active',
        'eventCount' => 'eventCount',
        'lastPayload' => 'lastPayload',
        'id' => 'id'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var array<string, string>
     */
    protected static array $setters = [
        'webhookEvent' => 'setWebhookEvent',
        'url' => 'setUrl',
        'active' => 'setActive',
        'eventCount' => 'setEventCount',
        'lastPayload' => 'setLastPayload',
        'id' => 'setId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var array<string, string>
     */
    protected static array $getters = [
        'webhookEvent' => 'getWebhookEvent',
        'url' => 'getUrl',
        'active' => 'getActive',
        'eventCount' => 'getEventCount',
        'lastPayload' => 'getLastPayload',
        'id' => 'getId'
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
        $this->setIfExists('webhookEvent', $data ?? [], null);
        $this->setIfExists('url', $data ?? [], null);
        $this->setIfExists('active', $data ?? [], null);
        $this->setIfExists('eventCount', $data ?? [], null);
        $this->setIfExists('lastPayload', $data ?? [], null);
        $this->setIfExists('id', $data ?? [], null);
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

        if ($this->container['url'] === null) {
            $invalidProperties[] = "'url' can't be null";
        }
        if ((mb_strlen($this->container['url']) > 300)) {
            $invalidProperties[] = "invalid value for 'url', the character length must be smaller than or equal to 300.";
        }

        if ((mb_strlen($this->container['url']) < 1)) {
            $invalidProperties[] = "invalid value for 'url', the character length must be bigger than or equal to 1.";
        }

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
     * Gets webhookEvent
     *
     * @return \SynergiTech\Staffology\Model\WebhookEvent|null
     */
    public function getWebhookEvent(): ?\SynergiTech\Staffology\Model\WebhookEvent
    {
        return $this->container['webhookEvent'];
    }

    /**
     * Sets webhookEvent
     *
     * @param \SynergiTech\Staffology\Model\WebhookEvent|null $webhookEvent webhookEvent
     *
     * @return $this
     */
    public function setWebhookEvent(?\SynergiTech\Staffology\Model\WebhookEvent $webhookEvent): static
    {
        if (is_null($webhookEvent)) {
            throw new InvalidArgumentException('non-nullable webhookEvent cannot be null');
        }
        $this->container['webhookEvent'] = $webhookEvent;

        return $this;
    }

    /**
     * Gets url
     *
     * @return string
     */
    public function getUrl(): string
    {
        return $this->container['url'];
    }

    /**
     * Sets url
     *
     * @param string $url The Url to which the payload should be sent
     *
     * @return $this
     */
    public function setUrl(string $url): static
    {
        if (is_null($url)) {
            throw new InvalidArgumentException('non-nullable url cannot be null');
        }
        if ((mb_strlen($url) > 300)) {
            throw new InvalidArgumentException('invalid length for $url when calling Webhook., must be smaller than or equal to 300.');
        }
        if ((mb_strlen($url) < 1)) {
            throw new InvalidArgumentException('invalid length for $url when calling Webhook., must be bigger than or equal to 1.');
        }

        $this->container['url'] = $url;

        return $this;
    }

    /**
     * Gets active
     *
     * @return bool|null
     */
    public function getActive(): ?bool
    {
        return $this->container['active'];
    }

    /**
     * Sets active
     *
     * @param bool|null $active If set to false then this Webhook will not be triggered
     *
     * @return $this
     */
    public function setActive(?bool $active): static
    {
        if (is_null($active)) {
            throw new InvalidArgumentException('non-nullable active cannot be null');
        }
        $this->container['active'] = $active;

        return $this;
    }

    /**
     * Gets eventCount
     *
     * @return int|null
     */
    public function getEventCount(): ?int
    {
        return $this->container['eventCount'];
    }

    /**
     * Sets eventCount
     *
     * @param int|null $eventCount The number of times this webhook has been triggered
     *
     * @return $this
     */
    public function setEventCount(?int $eventCount): static
    {
        if (is_null($eventCount)) {
            throw new InvalidArgumentException('non-nullable eventCount cannot be null');
        }
        $this->container['eventCount'] = $eventCount;

        return $this;
    }

    /**
     * Gets lastPayload
     *
     * @return \SynergiTech\Staffology\Model\WebhookPayload|null
     */
    public function getLastPayload(): ?\SynergiTech\Staffology\Model\WebhookPayload
    {
        return $this->container['lastPayload'];
    }

    /**
     * Sets lastPayload
     *
     * @param \SynergiTech\Staffology\Model\WebhookPayload|null $lastPayload lastPayload
     *
     * @return $this
     */
    public function setLastPayload(?\SynergiTech\Staffology\Model\WebhookPayload $lastPayload): static
    {
        if (is_null($lastPayload)) {
            throw new InvalidArgumentException('non-nullable lastPayload cannot be null');
        }
        $this->container['lastPayload'] = $lastPayload;

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
     * @param string|null $id [readonly] The unique id of the object
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


