<?php
/**
 * Invitation
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
 * Invitation Class Doc Comment
 *
 * @description Invitations are used to invite other users to access an existing Employer
 * @package  SynergiTech\Staffology
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements ArrayAccess<string, mixed>
 */
class Invitation implements ModelInterface, ArrayAccess, JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'Invitation';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var array<string, string>
      */
    protected static array $openAPITypes = [
        'employer' => '\SynergiTech\Staffology\Model\Item',
        'emailAddress' => 'string',
        'message' => 'string',
        'role' => '\SynergiTech\Staffology\Model\UserRole',
        'emailId' => 'string',
        'emailStatus' => '\SynergiTech\Staffology\Model\BackgroundTaskStatus',
        'invitedBy' => '\SynergiTech\Staffology\Model\Item',
        'id' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'employer' => null,
        'emailAddress' => 'email',
        'message' => null,
        'role' => null,
        'emailId' => 'uuid',
        'emailStatus' => null,
        'invitedBy' => null,
        'id' => 'uuid'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var array<string, bool>
      */
    protected static array $openAPINullables = [
        'employer' => false,
        'emailAddress' => false,
        'message' => true,
        'role' => false,
        'emailId' => true,
        'emailStatus' => false,
        'invitedBy' => false,
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
        'employer' => 'employer',
        'emailAddress' => 'emailAddress',
        'message' => 'message',
        'role' => 'role',
        'emailId' => 'emailId',
        'emailStatus' => 'emailStatus',
        'invitedBy' => 'invitedBy',
        'id' => 'id'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var array<string, string>
     */
    protected static array $setters = [
        'employer' => 'setEmployer',
        'emailAddress' => 'setEmailAddress',
        'message' => 'setMessage',
        'role' => 'setRole',
        'emailId' => 'setEmailId',
        'emailStatus' => 'setEmailStatus',
        'invitedBy' => 'setInvitedBy',
        'id' => 'setId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var array<string, string>
     */
    protected static array $getters = [
        'employer' => 'getEmployer',
        'emailAddress' => 'getEmailAddress',
        'message' => 'getMessage',
        'role' => 'getRole',
        'emailId' => 'getEmailId',
        'emailStatus' => 'getEmailStatus',
        'invitedBy' => 'getInvitedBy',
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
        $this->setIfExists('employer', $data ?? [], null);
        $this->setIfExists('emailAddress', $data ?? [], null);
        $this->setIfExists('message', $data ?? [], null);
        $this->setIfExists('role', $data ?? [], null);
        $this->setIfExists('emailId', $data ?? [], null);
        $this->setIfExists('emailStatus', $data ?? [], null);
        $this->setIfExists('invitedBy', $data ?? [], null);
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

        if ($this->container['emailAddress'] === null) {
            $invalidProperties[] = "'emailAddress' can't be null";
        }
        if ((mb_strlen($this->container['emailAddress']) > 150)) {
            $invalidProperties[] = "invalid value for 'emailAddress', the character length must be smaller than or equal to 150.";
        }

        if ((mb_strlen($this->container['emailAddress']) < 1)) {
            $invalidProperties[] = "invalid value for 'emailAddress', the character length must be bigger than or equal to 1.";
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
     * Gets employer
     *
     * @return \SynergiTech\Staffology\Model\Item|null
     */
    public function getEmployer(): ?\SynergiTech\Staffology\Model\Item
    {
        return $this->container['employer'];
    }

    /**
     * Sets employer
     *
     * @param \SynergiTech\Staffology\Model\Item|null $employer employer
     *
     * @return $this
     */
    public function setEmployer(?\SynergiTech\Staffology\Model\Item $employer): static
    {
        if (is_null($employer)) {
            throw new InvalidArgumentException('non-nullable employer cannot be null');
        }
        $this->container['employer'] = $employer;

        return $this;
    }

    /**
     * Gets emailAddress
     *
     * @return string
     */
    public function getEmailAddress(): string
    {
        return $this->container['emailAddress'];
    }

    /**
     * Sets emailAddress
     *
     * @param string $emailAddress The email address of the user that is being invited to access the Employer
     *
     * @return $this
     */
    public function setEmailAddress(string $emailAddress): static
    {
        if (is_null($emailAddress)) {
            throw new InvalidArgumentException('non-nullable emailAddress cannot be null');
        }
        if ((mb_strlen($emailAddress) > 150)) {
            throw new InvalidArgumentException('invalid length for $emailAddress when calling Invitation., must be smaller than or equal to 150.');
        }
        if ((mb_strlen($emailAddress) < 1)) {
            throw new InvalidArgumentException('invalid length for $emailAddress when calling Invitation., must be bigger than or equal to 1.');
        }

        $this->container['emailAddress'] = $emailAddress;

        return $this;
    }

    /**
     * Gets message
     *
     * @return string|null
     */
    public function getMessage(): ?string
    {
        return $this->container['message'];
    }

    /**
     * Sets message
     *
     * @param string|null $message An optional message to include in the email sent to the EmailAddress
     *
     * @return $this
     */
    public function setMessage(?string $message): static
    {
        if (is_null($message)) {
            array_push($this->openAPINullablesSetToNull, 'message');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('message', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['message'] = $message;

        return $this;
    }

    /**
     * Gets role
     *
     * @return \SynergiTech\Staffology\Model\UserRole|null
     */
    public function getRole(): ?\SynergiTech\Staffology\Model\UserRole
    {
        return $this->container['role'];
    }

    /**
     * Sets role
     *
     * @param \SynergiTech\Staffology\Model\UserRole|null $role role
     *
     * @return $this
     */
    public function setRole(?\SynergiTech\Staffology\Model\UserRole $role): static
    {
        if (is_null($role)) {
            throw new InvalidArgumentException('non-nullable role cannot be null');
        }
        $this->container['role'] = $role;

        return $this;
    }

    /**
     * Gets emailId
     *
     * @return string|null
     */
    public function getEmailId(): ?string
    {
        return $this->container['emailId'];
    }

    /**
     * Sets emailId
     *
     * @param string|null $emailId emailId
     *
     * @return $this
     */
    public function setEmailId(?string $emailId): static
    {
        if (is_null($emailId)) {
            array_push($this->openAPINullablesSetToNull, 'emailId');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('emailId', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['emailId'] = $emailId;

        return $this;
    }

    /**
     * Gets emailStatus
     *
     * @return \SynergiTech\Staffology\Model\BackgroundTaskStatus|null
     */
    public function getEmailStatus(): ?\SynergiTech\Staffology\Model\BackgroundTaskStatus
    {
        return $this->container['emailStatus'];
    }

    /**
     * Sets emailStatus
     *
     * @param \SynergiTech\Staffology\Model\BackgroundTaskStatus|null $emailStatus emailStatus
     *
     * @return $this
     */
    public function setEmailStatus(?\SynergiTech\Staffology\Model\BackgroundTaskStatus $emailStatus): static
    {
        if (is_null($emailStatus)) {
            throw new InvalidArgumentException('non-nullable emailStatus cannot be null');
        }
        $this->container['emailStatus'] = $emailStatus;

        return $this;
    }

    /**
     * Gets invitedBy
     *
     * @return \SynergiTech\Staffology\Model\Item|null
     */
    public function getInvitedBy(): ?\SynergiTech\Staffology\Model\Item
    {
        return $this->container['invitedBy'];
    }

    /**
     * Sets invitedBy
     *
     * @param \SynergiTech\Staffology\Model\Item|null $invitedBy invitedBy
     *
     * @return $this
     */
    public function setInvitedBy(?\SynergiTech\Staffology\Model\Item $invitedBy): static
    {
        if (is_null($invitedBy)) {
            throw new InvalidArgumentException('non-nullable invitedBy cannot be null');
        }
        $this->container['invitedBy'] = $invitedBy;

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


