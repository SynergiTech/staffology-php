<?php
/**
 * ProcessingNote
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
 * ProcessingNote Class Doc Comment
 *
 * @package  SynergiTech\Staffology
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements ArrayAccess<string, mixed>
 */
class ProcessingNote implements ModelInterface, ArrayAccess, JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'ProcessingNote';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var array<string, string>
      */
    protected static array $openAPITypes = [
        'payRunEntryId' => 'string',
        'note' => 'string',
        'user' => '\SynergiTech\Staffology\Model\Item',
        'payRun' => '\SynergiTech\Staffology\Model\Item',
        'date' => '\DateTime',
        'documentCount' => 'int',
        'documents' => '\SynergiTech\Staffology\Model\Item[]',
        'status' => '\SynergiTech\Staffology\Model\ProcessingNoteStatus',
        'updatedByName' => 'string',
        'completedDate' => '\DateTime',
        'id' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'payRunEntryId' => 'uuid',
        'note' => null,
        'user' => null,
        'payRun' => null,
        'date' => 'date',
        'documentCount' => 'int32',
        'documents' => null,
        'status' => null,
        'updatedByName' => null,
        'completedDate' => 'date',
        'id' => 'uuid'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var array<string, bool>
      */
    protected static array $openAPINullables = [
        'payRunEntryId' => true,
        'note' => false,
        'user' => false,
        'payRun' => false,
        'date' => false,
        'documentCount' => false,
        'documents' => true,
        'status' => false,
        'updatedByName' => true,
        'completedDate' => true,
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
        'payRunEntryId' => 'payRunEntryId',
        'note' => 'note',
        'user' => 'user',
        'payRun' => 'payRun',
        'date' => 'date',
        'documentCount' => 'documentCount',
        'documents' => 'documents',
        'status' => 'status',
        'updatedByName' => 'updatedByName',
        'completedDate' => 'completedDate',
        'id' => 'id'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var array<string, string>
     */
    protected static array $setters = [
        'payRunEntryId' => 'setPayRunEntryId',
        'note' => 'setNote',
        'user' => 'setUser',
        'payRun' => 'setPayRun',
        'date' => 'setDate',
        'documentCount' => 'setDocumentCount',
        'documents' => 'setDocuments',
        'status' => 'setStatus',
        'updatedByName' => 'setUpdatedByName',
        'completedDate' => 'setCompletedDate',
        'id' => 'setId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var array<string, string>
     */
    protected static array $getters = [
        'payRunEntryId' => 'getPayRunEntryId',
        'note' => 'getNote',
        'user' => 'getUser',
        'payRun' => 'getPayRun',
        'date' => 'getDate',
        'documentCount' => 'getDocumentCount',
        'documents' => 'getDocuments',
        'status' => 'getStatus',
        'updatedByName' => 'getUpdatedByName',
        'completedDate' => 'getCompletedDate',
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
        $this->setIfExists('payRunEntryId', $data ?? [], null);
        $this->setIfExists('note', $data ?? [], null);
        $this->setIfExists('user', $data ?? [], null);
        $this->setIfExists('payRun', $data ?? [], null);
        $this->setIfExists('date', $data ?? [], null);
        $this->setIfExists('documentCount', $data ?? [], null);
        $this->setIfExists('documents', $data ?? [], null);
        $this->setIfExists('status', $data ?? [], null);
        $this->setIfExists('updatedByName', $data ?? [], null);
        $this->setIfExists('completedDate', $data ?? [], null);
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

        if ($this->container['note'] === null) {
            $invalidProperties[] = "'note' can't be null";
        }
        if ((mb_strlen($this->container['note']) < 1)) {
            $invalidProperties[] = "invalid value for 'note', the character length must be bigger than or equal to 1.";
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
     * Gets payRunEntryId
     *
     * @return string|null
     */
    public function getPayRunEntryId(): ?string
    {
        return $this->container['payRunEntryId'];
    }

    /**
     * Sets payRunEntryId
     *
     * @param string|null $payRunEntryId The Id of the payrunEntry this ProcessingNote relates to, if any
     *
     * @return $this
     */
    public function setPayRunEntryId(?string $payRunEntryId): static
    {
        if (is_null($payRunEntryId)) {
            array_push($this->openAPINullablesSetToNull, 'payRunEntryId');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('payRunEntryId', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['payRunEntryId'] = $payRunEntryId;

        return $this;
    }

    /**
     * Gets note
     *
     * @return string
     */
    public function getNote(): string
    {
        return $this->container['note'];
    }

    /**
     * Sets note
     *
     * @param string $note note
     *
     * @return $this
     */
    public function setNote(string $note): static
    {
        if (is_null($note)) {
            throw new InvalidArgumentException('non-nullable note cannot be null');
        }

        if ((mb_strlen($note) < 1)) {
            throw new InvalidArgumentException('invalid length for $note when calling ProcessingNote., must be bigger than or equal to 1.');
        }

        $this->container['note'] = $note;

        return $this;
    }

    /**
     * Gets user
     *
     * @return \SynergiTech\Staffology\Model\Item|null
     */
    public function getUser(): ?\SynergiTech\Staffology\Model\Item
    {
        return $this->container['user'];
    }

    /**
     * Sets user
     *
     * @param \SynergiTech\Staffology\Model\Item|null $user user
     *
     * @return $this
     */
    public function setUser(?\SynergiTech\Staffology\Model\Item $user): static
    {
        if (is_null($user)) {
            throw new InvalidArgumentException('non-nullable user cannot be null');
        }
        $this->container['user'] = $user;

        return $this;
    }

    /**
     * Gets payRun
     *
     * @return \SynergiTech\Staffology\Model\Item|null
     */
    public function getPayRun(): ?\SynergiTech\Staffology\Model\Item
    {
        return $this->container['payRun'];
    }

    /**
     * Sets payRun
     *
     * @param \SynergiTech\Staffology\Model\Item|null $payRun payRun
     *
     * @return $this
     */
    public function setPayRun(?\SynergiTech\Staffology\Model\Item $payRun): static
    {
        if (is_null($payRun)) {
            throw new InvalidArgumentException('non-nullable payRun cannot be null');
        }
        $this->container['payRun'] = $payRun;

        return $this;
    }

    /**
     * Gets date
     *
     * @return \DateTime|null
     */
    public function getDate(): ?\DateTime
    {
        return $this->container['date'];
    }

    /**
     * Sets date
     *
     * @param \DateTime|null $date date
     *
     * @return $this
     */
    public function setDate(?\DateTime $date): static
    {
        if (is_null($date)) {
            throw new InvalidArgumentException('non-nullable date cannot be null');
        }
        $this->container['date'] = $date;

        return $this;
    }

    /**
     * Gets documentCount
     *
     * @return int|null
     */
    public function getDocumentCount(): ?int
    {
        return $this->container['documentCount'];
    }

    /**
     * Sets documentCount
     *
     * @param int|null $documentCount [readonly] The number of attachments associated with this model
     *
     * @return $this
     */
    public function setDocumentCount(?int $documentCount): static
    {
        if (is_null($documentCount)) {
            throw new InvalidArgumentException('non-nullable documentCount cannot be null');
        }
        $this->container['documentCount'] = $documentCount;

        return $this;
    }

    /**
     * Gets documents
     *
     * @return \SynergiTech\Staffology\Model\Item[]|null
     */
    public function getDocuments(): ?array
    {
        return $this->container['documents'];
    }

    /**
     * Sets documents
     *
     * @param \SynergiTech\Staffology\Model\Item[]|null $documents [readonly] The attachments associated with this model
     *
     * @return $this
     */
    public function setDocuments(?array $documents): static
    {
        if (is_null($documents)) {
            array_push($this->openAPINullablesSetToNull, 'documents');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('documents', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['documents'] = $documents;

        return $this;
    }

    /**
     * Gets status
     *
     * @return \SynergiTech\Staffology\Model\ProcessingNoteStatus|null
     */
    public function getStatus(): ?\SynergiTech\Staffology\Model\ProcessingNoteStatus
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param \SynergiTech\Staffology\Model\ProcessingNoteStatus|null $status status
     *
     * @return $this
     */
    public function setStatus(?\SynergiTech\Staffology\Model\ProcessingNoteStatus $status): static
    {
        if (is_null($status)) {
            throw new InvalidArgumentException('non-nullable status cannot be null');
        }
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets updatedByName
     *
     * @return string|null
     */
    public function getUpdatedByName(): ?string
    {
        return $this->container['updatedByName'];
    }

    /**
     * Sets updatedByName
     *
     * @param string|null $updatedByName Name of the user who was last to update the record
     *
     * @return $this
     */
    public function setUpdatedByName(?string $updatedByName): static
    {
        if (is_null($updatedByName)) {
            array_push($this->openAPINullablesSetToNull, 'updatedByName');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('updatedByName', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['updatedByName'] = $updatedByName;

        return $this;
    }

    /**
     * Gets completedDate
     *
     * @return \DateTime|null
     */
    public function getCompletedDate(): ?\DateTime
    {
        return $this->container['completedDate'];
    }

    /**
     * Sets completedDate
     *
     * @param \DateTime|null $completedDate UpdatedDate is assigned to this to get around the base implementation of UpdatedDate having [JsonIgnore] tag
     *
     * @return $this
     */
    public function setCompletedDate(?\DateTime $completedDate): static
    {
        if (is_null($completedDate)) {
            array_push($this->openAPINullablesSetToNull, 'completedDate');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('completedDate', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['completedDate'] = $completedDate;

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


