<?php
/**
 * MailSettings
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
 * MailSettings Class Doc Comment
 *
 * @description Determines the settings used when the Employer sends emails.  If CustomiseSmtpSettings is false then SmtpSettings will be null and our default internal settings will be used;
 * @package  SynergiTech\Staffology
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements ArrayAccess<string, mixed>
 */
class MailSettings implements ModelInterface, ArrayAccess, JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'MailSettings';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var array<string, string>
      */
    protected static array $openAPITypes = [
        'senderName' => 'string',
        'senderEmail' => 'string',
        'useSystemFromAddress' => 'bool',
        'senderEmailVerified' => 'bool',
        'customiseSmtpSettings' => 'bool',
        'smtpSettings' => '\SynergiTech\Staffology\Model\SmtpSettings',
        'customiseHtmlEmailSettings' => 'bool',
        'htmlEmailSettings' => '\SynergiTech\Staffology\Model\HtmlEmailSettings',
        'id' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'senderName' => null,
        'senderEmail' => 'email',
        'useSystemFromAddress' => null,
        'senderEmailVerified' => null,
        'customiseSmtpSettings' => null,
        'smtpSettings' => null,
        'customiseHtmlEmailSettings' => null,
        'htmlEmailSettings' => null,
        'id' => 'uuid'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var array<string, bool>
      */
    protected static array $openAPINullables = [
        'senderName' => false,
        'senderEmail' => false,
        'useSystemFromAddress' => false,
        'senderEmailVerified' => false,
        'customiseSmtpSettings' => false,
        'smtpSettings' => false,
        'customiseHtmlEmailSettings' => false,
        'htmlEmailSettings' => false,
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
        'senderName' => 'senderName',
        'senderEmail' => 'senderEmail',
        'useSystemFromAddress' => 'useSystemFromAddress',
        'senderEmailVerified' => 'senderEmailVerified',
        'customiseSmtpSettings' => 'customiseSmtpSettings',
        'smtpSettings' => 'smtpSettings',
        'customiseHtmlEmailSettings' => 'customiseHtmlEmailSettings',
        'htmlEmailSettings' => 'htmlEmailSettings',
        'id' => 'id'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var array<string, string>
     */
    protected static array $setters = [
        'senderName' => 'setSenderName',
        'senderEmail' => 'setSenderEmail',
        'useSystemFromAddress' => 'setUseSystemFromAddress',
        'senderEmailVerified' => 'setSenderEmailVerified',
        'customiseSmtpSettings' => 'setCustomiseSmtpSettings',
        'smtpSettings' => 'setSmtpSettings',
        'customiseHtmlEmailSettings' => 'setCustomiseHtmlEmailSettings',
        'htmlEmailSettings' => 'setHtmlEmailSettings',
        'id' => 'setId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var array<string, string>
     */
    protected static array $getters = [
        'senderName' => 'getSenderName',
        'senderEmail' => 'getSenderEmail',
        'useSystemFromAddress' => 'getUseSystemFromAddress',
        'senderEmailVerified' => 'getSenderEmailVerified',
        'customiseSmtpSettings' => 'getCustomiseSmtpSettings',
        'smtpSettings' => 'getSmtpSettings',
        'customiseHtmlEmailSettings' => 'getCustomiseHtmlEmailSettings',
        'htmlEmailSettings' => 'getHtmlEmailSettings',
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
    public function __construct(array $data = null)
    {
        $this->setIfExists('senderName', $data ?? [], null);
        $this->setIfExists('senderEmail', $data ?? [], null);
        $this->setIfExists('useSystemFromAddress', $data ?? [], null);
        $this->setIfExists('senderEmailVerified', $data ?? [], null);
        $this->setIfExists('customiseSmtpSettings', $data ?? [], null);
        $this->setIfExists('smtpSettings', $data ?? [], null);
        $this->setIfExists('customiseHtmlEmailSettings', $data ?? [], null);
        $this->setIfExists('htmlEmailSettings', $data ?? [], null);
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

        if ($this->container['senderName'] === null) {
            $invalidProperties[] = "'senderName' can't be null";
        }
        if ((mb_strlen($this->container['senderName']) > 100)) {
            $invalidProperties[] = "invalid value for 'senderName', the character length must be smaller than or equal to 100.";
        }

        if ((mb_strlen($this->container['senderName']) < 1)) {
            $invalidProperties[] = "invalid value for 'senderName', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['senderEmail'] === null) {
            $invalidProperties[] = "'senderEmail' can't be null";
        }
        if ((mb_strlen($this->container['senderEmail']) > 100)) {
            $invalidProperties[] = "invalid value for 'senderEmail', the character length must be smaller than or equal to 100.";
        }

        if ((mb_strlen($this->container['senderEmail']) < 1)) {
            $invalidProperties[] = "invalid value for 'senderEmail', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['customiseSmtpSettings'] === null) {
            $invalidProperties[] = "'customiseSmtpSettings' can't be null";
        }
        if ($this->container['customiseHtmlEmailSettings'] === null) {
            $invalidProperties[] = "'customiseHtmlEmailSettings' can't be null";
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
     * Gets senderName
     *
     * @return string
     */
    public function getSenderName(): string
    {
        return $this->container['senderName'];
    }

    /**
     * Sets senderName
     *
     * @param string $senderName senderName
     *
     * @return $this
     */
    public function setSenderName(string $senderName): static
    {
        if (is_null($senderName)) {
            throw new InvalidArgumentException('non-nullable senderName cannot be null');
        }
        if ((mb_strlen($senderName) > 100)) {
            throw new InvalidArgumentException('invalid length for $senderName when calling MailSettings., must be smaller than or equal to 100.');
        }
        if ((mb_strlen($senderName) < 1)) {
            throw new InvalidArgumentException('invalid length for $senderName when calling MailSettings., must be bigger than or equal to 1.');
        }

        $this->container['senderName'] = $senderName;

        return $this;
    }

    /**
     * Gets senderEmail
     *
     * @return string
     */
    public function getSenderEmail(): string
    {
        return $this->container['senderEmail'];
    }

    /**
     * Sets senderEmail
     *
     * @param string $senderEmail senderEmail
     *
     * @return $this
     */
    public function setSenderEmail(string $senderEmail): static
    {
        if (is_null($senderEmail)) {
            throw new InvalidArgumentException('non-nullable senderEmail cannot be null');
        }
        if ((mb_strlen($senderEmail) > 100)) {
            throw new InvalidArgumentException('invalid length for $senderEmail when calling MailSettings., must be smaller than or equal to 100.');
        }
        if ((mb_strlen($senderEmail) < 1)) {
            throw new InvalidArgumentException('invalid length for $senderEmail when calling MailSettings., must be bigger than or equal to 1.');
        }

        $this->container['senderEmail'] = $senderEmail;

        return $this;
    }

    /**
     * Gets useSystemFromAddress
     *
     * @return bool|null
     */
    public function getUseSystemFromAddress(): ?bool
    {
        return $this->container['useSystemFromAddress'];
    }

    /**
     * Sets useSystemFromAddress
     *
     * @param bool|null $useSystemFromAddress If set to true then the SenderEmail provided will only be used in the   ReplyTo fields. The system defaults will be used for the From address.
     *
     * @return $this
     */
    public function setUseSystemFromAddress(?bool $useSystemFromAddress): static
    {
        if (is_null($useSystemFromAddress)) {
            throw new InvalidArgumentException('non-nullable useSystemFromAddress cannot be null');
        }
        $this->container['useSystemFromAddress'] = $useSystemFromAddress;

        return $this;
    }

    /**
     * Gets senderEmailVerified
     *
     * @return bool|null
     */
    public function getSenderEmailVerified(): ?bool
    {
        return $this->container['senderEmailVerified'];
    }

    /**
     * Sets senderEmailVerified
     *
     * @param bool|null $senderEmailVerified [readonly] The SenderEmail must be verified before you can send email using that address
     *
     * @return $this
     */
    public function setSenderEmailVerified(?bool $senderEmailVerified): static
    {
        if (is_null($senderEmailVerified)) {
            throw new InvalidArgumentException('non-nullable senderEmailVerified cannot be null');
        }
        $this->container['senderEmailVerified'] = $senderEmailVerified;

        return $this;
    }

    /**
     * Gets customiseSmtpSettings
     *
     * @return bool
     */
    public function getCustomiseSmtpSettings(): bool
    {
        return $this->container['customiseSmtpSettings'];
    }

    /**
     * Sets customiseSmtpSettings
     *
     * @param bool $customiseSmtpSettings customiseSmtpSettings
     *
     * @return $this
     */
    public function setCustomiseSmtpSettings(bool $customiseSmtpSettings): static
    {
        if (is_null($customiseSmtpSettings)) {
            throw new InvalidArgumentException('non-nullable customiseSmtpSettings cannot be null');
        }
        $this->container['customiseSmtpSettings'] = $customiseSmtpSettings;

        return $this;
    }

    /**
     * Gets smtpSettings
     *
     * @return \SynergiTech\Staffology\Model\SmtpSettings|null
     */
    public function getSmtpSettings(): ?\SynergiTech\Staffology\Model\SmtpSettings
    {
        return $this->container['smtpSettings'];
    }

    /**
     * Sets smtpSettings
     *
     * @param \SynergiTech\Staffology\Model\SmtpSettings|null $smtpSettings smtpSettings
     *
     * @return $this
     */
    public function setSmtpSettings(?\SynergiTech\Staffology\Model\SmtpSettings $smtpSettings): static
    {
        if (is_null($smtpSettings)) {
            throw new InvalidArgumentException('non-nullable smtpSettings cannot be null');
        }
        $this->container['smtpSettings'] = $smtpSettings;

        return $this;
    }

    /**
     * Gets customiseHtmlEmailSettings
     *
     * @return bool
     */
    public function getCustomiseHtmlEmailSettings(): bool
    {
        return $this->container['customiseHtmlEmailSettings'];
    }

    /**
     * Sets customiseHtmlEmailSettings
     *
     * @param bool $customiseHtmlEmailSettings customiseHtmlEmailSettings
     *
     * @return $this
     */
    public function setCustomiseHtmlEmailSettings(bool $customiseHtmlEmailSettings): static
    {
        if (is_null($customiseHtmlEmailSettings)) {
            throw new InvalidArgumentException('non-nullable customiseHtmlEmailSettings cannot be null');
        }
        $this->container['customiseHtmlEmailSettings'] = $customiseHtmlEmailSettings;

        return $this;
    }

    /**
     * Gets htmlEmailSettings
     *
     * @return \SynergiTech\Staffology\Model\HtmlEmailSettings|null
     */
    public function getHtmlEmailSettings(): ?\SynergiTech\Staffology\Model\HtmlEmailSettings
    {
        return $this->container['htmlEmailSettings'];
    }

    /**
     * Sets htmlEmailSettings
     *
     * @param \SynergiTech\Staffology\Model\HtmlEmailSettings|null $htmlEmailSettings htmlEmailSettings
     *
     * @return $this
     */
    public function setHtmlEmailSettings(?\SynergiTech\Staffology\Model\HtmlEmailSettings $htmlEmailSettings): static
    {
        if (is_null($htmlEmailSettings)) {
            throw new InvalidArgumentException('non-nullable htmlEmailSettings cannot be null');
        }
        $this->container['htmlEmailSettings'] = $htmlEmailSettings;

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

