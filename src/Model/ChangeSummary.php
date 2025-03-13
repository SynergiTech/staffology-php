<?php
/**
 * ChangeSummary
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
 * ChangeSummary Class Doc Comment
 *
 * @package  SynergiTech\Staffology
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements ArrayAccess<string, mixed>
 */
class ChangeSummary implements ModelInterface, ArrayAccess, JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'ChangeSummary';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var array<string, string>
      */
    protected static array $openAPITypes = [
        'id' => 'string',
        'auditId' => 'string',
        'previousAuditId' => 'string',
        'date' => '\DateTime',
        'name' => 'string',
        'actionPerformed' => '\SynergiTech\Staffology\Model\AuditEventAction',
        'entityType' => '\SynergiTech\Staffology\Model\EntityType',
        'entityId' => 'string',
        'employeeUniqueId' => 'string',
        'employerUniqueId' => 'string',
        'actionPerformedBy' => 'string',
        'actionPerformedOn' => 'string',
        'employeeFirstName' => 'string',
        'employeeLastName' => 'string',
        'uniqueId' => 'string',
        'parentEventType' => 'string',
        'displayName' => 'string',
        'payRunPeriod' => 'int',
        'changeType' => 'string',
        'modifications' => '\SynergiTech\Staffology\Model\FieldModification[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'id' => 'uuid',
        'auditId' => 'uuid',
        'previousAuditId' => 'uuid',
        'date' => 'date',
        'name' => null,
        'actionPerformed' => null,
        'entityType' => null,
        'entityId' => 'uuid',
        'employeeUniqueId' => 'uuid',
        'employerUniqueId' => 'uuid',
        'actionPerformedBy' => null,
        'actionPerformedOn' => null,
        'employeeFirstName' => null,
        'employeeLastName' => null,
        'uniqueId' => 'uuid',
        'parentEventType' => null,
        'displayName' => null,
        'payRunPeriod' => 'int32',
        'changeType' => null,
        'modifications' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var array<string, bool>
      */
    protected static array $openAPINullables = [
        'id' => false,
        'auditId' => false,
        'previousAuditId' => false,
        'date' => false,
        'name' => true,
        'actionPerformed' => false,
        'entityType' => false,
        'entityId' => false,
        'employeeUniqueId' => false,
        'employerUniqueId' => false,
        'actionPerformedBy' => true,
        'actionPerformedOn' => true,
        'employeeFirstName' => true,
        'employeeLastName' => true,
        'uniqueId' => false,
        'parentEventType' => true,
        'displayName' => true,
        'payRunPeriod' => false,
        'changeType' => true,
        'modifications' => true
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
        'auditId' => 'auditId',
        'previousAuditId' => 'previousAuditId',
        'date' => 'date',
        'name' => 'name',
        'actionPerformed' => 'actionPerformed',
        'entityType' => 'entityType',
        'entityId' => 'entityId',
        'employeeUniqueId' => 'employeeUniqueId',
        'employerUniqueId' => 'employerUniqueId',
        'actionPerformedBy' => 'actionPerformedBy',
        'actionPerformedOn' => 'actionPerformedOn',
        'employeeFirstName' => 'employeeFirstName',
        'employeeLastName' => 'employeeLastName',
        'uniqueId' => 'uniqueId',
        'parentEventType' => 'parentEventType',
        'displayName' => 'displayName',
        'payRunPeriod' => 'payRunPeriod',
        'changeType' => 'changeType',
        'modifications' => 'modifications'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var array<string, string>
     */
    protected static array $setters = [
        'id' => 'setId',
        'auditId' => 'setAuditId',
        'previousAuditId' => 'setPreviousAuditId',
        'date' => 'setDate',
        'name' => 'setName',
        'actionPerformed' => 'setActionPerformed',
        'entityType' => 'setEntityType',
        'entityId' => 'setEntityId',
        'employeeUniqueId' => 'setEmployeeUniqueId',
        'employerUniqueId' => 'setEmployerUniqueId',
        'actionPerformedBy' => 'setActionPerformedBy',
        'actionPerformedOn' => 'setActionPerformedOn',
        'employeeFirstName' => 'setEmployeeFirstName',
        'employeeLastName' => 'setEmployeeLastName',
        'uniqueId' => 'setUniqueId',
        'parentEventType' => 'setParentEventType',
        'displayName' => 'setDisplayName',
        'payRunPeriod' => 'setPayRunPeriod',
        'changeType' => 'setChangeType',
        'modifications' => 'setModifications'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var array<string, string>
     */
    protected static array $getters = [
        'id' => 'getId',
        'auditId' => 'getAuditId',
        'previousAuditId' => 'getPreviousAuditId',
        'date' => 'getDate',
        'name' => 'getName',
        'actionPerformed' => 'getActionPerformed',
        'entityType' => 'getEntityType',
        'entityId' => 'getEntityId',
        'employeeUniqueId' => 'getEmployeeUniqueId',
        'employerUniqueId' => 'getEmployerUniqueId',
        'actionPerformedBy' => 'getActionPerformedBy',
        'actionPerformedOn' => 'getActionPerformedOn',
        'employeeFirstName' => 'getEmployeeFirstName',
        'employeeLastName' => 'getEmployeeLastName',
        'uniqueId' => 'getUniqueId',
        'parentEventType' => 'getParentEventType',
        'displayName' => 'getDisplayName',
        'payRunPeriod' => 'getPayRunPeriod',
        'changeType' => 'getChangeType',
        'modifications' => 'getModifications'
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
        $this->setIfExists('auditId', $data ?? [], null);
        $this->setIfExists('previousAuditId', $data ?? [], null);
        $this->setIfExists('date', $data ?? [], null);
        $this->setIfExists('name', $data ?? [], null);
        $this->setIfExists('actionPerformed', $data ?? [], null);
        $this->setIfExists('entityType', $data ?? [], null);
        $this->setIfExists('entityId', $data ?? [], null);
        $this->setIfExists('employeeUniqueId', $data ?? [], null);
        $this->setIfExists('employerUniqueId', $data ?? [], null);
        $this->setIfExists('actionPerformedBy', $data ?? [], null);
        $this->setIfExists('actionPerformedOn', $data ?? [], null);
        $this->setIfExists('employeeFirstName', $data ?? [], null);
        $this->setIfExists('employeeLastName', $data ?? [], null);
        $this->setIfExists('uniqueId', $data ?? [], null);
        $this->setIfExists('parentEventType', $data ?? [], null);
        $this->setIfExists('displayName', $data ?? [], null);
        $this->setIfExists('payRunPeriod', $data ?? [], null);
        $this->setIfExists('changeType', $data ?? [], null);
        $this->setIfExists('modifications', $data ?? [], null);
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
     * @param string|null $id id
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
     * Gets auditId
     *
     * @return string|null
     */
    public function getAuditId(): ?string
    {
        return $this->container['auditId'];
    }

    /**
     * Sets auditId
     *
     * @param string|null $auditId auditId
     *
     * @return $this
     */
    public function setAuditId(?string $auditId): static
    {
        if (is_null($auditId)) {
            throw new InvalidArgumentException('non-nullable auditId cannot be null');
        }
        $this->container['auditId'] = $auditId;

        return $this;
    }

    /**
     * Gets previousAuditId
     *
     * @return string|null
     */
    public function getPreviousAuditId(): ?string
    {
        return $this->container['previousAuditId'];
    }

    /**
     * Sets previousAuditId
     *
     * @param string|null $previousAuditId This Id is used to delete the previous audit entry once the change summary entry is created  for the modifications between the current and the previous audit entry.
     *
     * @return $this
     */
    public function setPreviousAuditId(?string $previousAuditId): static
    {
        if (is_null($previousAuditId)) {
            throw new InvalidArgumentException('non-nullable previousAuditId cannot be null');
        }
        $this->container['previousAuditId'] = $previousAuditId;

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
     * Gets actionPerformed
     *
     * @return \SynergiTech\Staffology\Model\AuditEventAction|null
     */
    public function getActionPerformed(): ?\SynergiTech\Staffology\Model\AuditEventAction
    {
        return $this->container['actionPerformed'];
    }

    /**
     * Sets actionPerformed
     *
     * @param \SynergiTech\Staffology\Model\AuditEventAction|null $actionPerformed actionPerformed
     *
     * @return $this
     */
    public function setActionPerformed(?\SynergiTech\Staffology\Model\AuditEventAction $actionPerformed): static
    {
        if (is_null($actionPerformed)) {
            throw new InvalidArgumentException('non-nullable actionPerformed cannot be null');
        }
        $this->container['actionPerformed'] = $actionPerformed;

        return $this;
    }

    /**
     * Gets entityType
     *
     * @return \SynergiTech\Staffology\Model\EntityType|null
     */
    public function getEntityType(): ?\SynergiTech\Staffology\Model\EntityType
    {
        return $this->container['entityType'];
    }

    /**
     * Sets entityType
     *
     * @param \SynergiTech\Staffology\Model\EntityType|null $entityType entityType
     *
     * @return $this
     */
    public function setEntityType(?\SynergiTech\Staffology\Model\EntityType $entityType): static
    {
        if (is_null($entityType)) {
            throw new InvalidArgumentException('non-nullable entityType cannot be null');
        }
        $this->container['entityType'] = $entityType;

        return $this;
    }

    /**
     * Gets entityId
     *
     * @return string|null
     */
    public function getEntityId(): ?string
    {
        return $this->container['entityId'];
    }

    /**
     * Sets entityId
     *
     * @param string|null $entityId Id of the underlying entity
     *
     * @return $this
     */
    public function setEntityId(?string $entityId): static
    {
        if (is_null($entityId)) {
            throw new InvalidArgumentException('non-nullable entityId cannot be null');
        }
        $this->container['entityId'] = $entityId;

        return $this;
    }

    /**
     * Gets employeeUniqueId
     *
     * @return string|null
     */
    public function getEmployeeUniqueId(): ?string
    {
        return $this->container['employeeUniqueId'];
    }

    /**
     * Sets employeeUniqueId
     *
     * @param string|null $employeeUniqueId Unique id of the employee this operation belongs to
     *
     * @return $this
     */
    public function setEmployeeUniqueId(?string $employeeUniqueId): static
    {
        if (is_null($employeeUniqueId)) {
            throw new InvalidArgumentException('non-nullable employeeUniqueId cannot be null');
        }
        $this->container['employeeUniqueId'] = $employeeUniqueId;

        return $this;
    }

    /**
     * Gets employerUniqueId
     *
     * @return string|null
     */
    public function getEmployerUniqueId(): ?string
    {
        return $this->container['employerUniqueId'];
    }

    /**
     * Sets employerUniqueId
     *
     * @param string|null $employerUniqueId Unique id of the employer this operation belongs to
     *
     * @return $this
     */
    public function setEmployerUniqueId(?string $employerUniqueId): static
    {
        if (is_null($employerUniqueId)) {
            throw new InvalidArgumentException('non-nullable employerUniqueId cannot be null');
        }
        $this->container['employerUniqueId'] = $employerUniqueId;

        return $this;
    }

    /**
     * Gets actionPerformedBy
     *
     * @return string|null
     */
    public function getActionPerformedBy(): ?string
    {
        return $this->container['actionPerformedBy'];
    }

    /**
     * Sets actionPerformedBy
     *
     * @param string|null $actionPerformedBy actionPerformedBy
     *
     * @return $this
     */
    public function setActionPerformedBy(?string $actionPerformedBy): static
    {
        if (is_null($actionPerformedBy)) {
            array_push($this->openAPINullablesSetToNull, 'actionPerformedBy');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('actionPerformedBy', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['actionPerformedBy'] = $actionPerformedBy;

        return $this;
    }

    /**
     * Gets actionPerformedOn
     *
     * @return string|null
     */
    public function getActionPerformedOn(): ?string
    {
        return $this->container['actionPerformedOn'];
    }

    /**
     * Sets actionPerformedOn
     *
     * @param string|null $actionPerformedOn actionPerformedOn
     *
     * @return $this
     */
    public function setActionPerformedOn(?string $actionPerformedOn): static
    {
        if (is_null($actionPerformedOn)) {
            array_push($this->openAPINullablesSetToNull, 'actionPerformedOn');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('actionPerformedOn', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['actionPerformedOn'] = $actionPerformedOn;

        return $this;
    }

    /**
     * Gets employeeFirstName
     *
     * @return string|null
     */
    public function getEmployeeFirstName(): ?string
    {
        return $this->container['employeeFirstName'];
    }

    /**
     * Sets employeeFirstName
     *
     * @param string|null $employeeFirstName employeeFirstName
     *
     * @return $this
     */
    public function setEmployeeFirstName(?string $employeeFirstName): static
    {
        if (is_null($employeeFirstName)) {
            array_push($this->openAPINullablesSetToNull, 'employeeFirstName');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('employeeFirstName', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['employeeFirstName'] = $employeeFirstName;

        return $this;
    }

    /**
     * Gets employeeLastName
     *
     * @return string|null
     */
    public function getEmployeeLastName(): ?string
    {
        return $this->container['employeeLastName'];
    }

    /**
     * Sets employeeLastName
     *
     * @param string|null $employeeLastName employeeLastName
     *
     * @return $this
     */
    public function setEmployeeLastName(?string $employeeLastName): static
    {
        if (is_null($employeeLastName)) {
            array_push($this->openAPINullablesSetToNull, 'employeeLastName');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('employeeLastName', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['employeeLastName'] = $employeeLastName;

        return $this;
    }

    /**
     * Gets uniqueId
     *
     * @return string|null
     */
    public function getUniqueId(): ?string
    {
        return $this->container['uniqueId'];
    }

    /**
     * Sets uniqueId
     *
     * @param string|null $uniqueId Unique id of the owner this request belongs to
     *
     * @return $this
     */
    public function setUniqueId(?string $uniqueId): static
    {
        if (is_null($uniqueId)) {
            throw new InvalidArgumentException('non-nullable uniqueId cannot be null');
        }
        $this->container['uniqueId'] = $uniqueId;

        return $this;
    }

    /**
     * Gets parentEventType
     *
     * @return string|null
     */
    public function getParentEventType(): ?string
    {
        return $this->container['parentEventType'];
    }

    /**
     * Sets parentEventType
     *
     * @param string|null $parentEventType parentEventType
     *
     * @return $this
     */
    public function setParentEventType(?string $parentEventType): static
    {
        if (is_null($parentEventType)) {
            array_push($this->openAPINullablesSetToNull, 'parentEventType');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('parentEventType', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['parentEventType'] = $parentEventType;

        return $this;
    }

    /**
     * Gets displayName
     *
     * @return string|null
     */
    public function getDisplayName(): ?string
    {
        return $this->container['displayName'];
    }

    /**
     * Sets displayName
     *
     * @param string|null $displayName displayName
     *
     * @return $this
     */
    public function setDisplayName(?string $displayName): static
    {
        if (is_null($displayName)) {
            array_push($this->openAPINullablesSetToNull, 'displayName');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('displayName', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['displayName'] = $displayName;

        return $this;
    }

    /**
     * Gets payRunPeriod
     *
     * @return int|null
     */
    public function getPayRunPeriod(): ?int
    {
        return $this->container['payRunPeriod'];
    }

    /**
     * Sets payRunPeriod
     *
     * @param int|null $payRunPeriod payRunPeriod
     *
     * @return $this
     */
    public function setPayRunPeriod(?int $payRunPeriod): static
    {
        if (is_null($payRunPeriod)) {
            throw new InvalidArgumentException('non-nullable payRunPeriod cannot be null');
        }
        $this->container['payRunPeriod'] = $payRunPeriod;

        return $this;
    }

    /**
     * Gets changeType
     *
     * @return string|null
     */
    public function getChangeType(): ?string
    {
        return $this->container['changeType'];
    }

    /**
     * Sets changeType
     *
     * @param string|null $changeType changeType
     *
     * @return $this
     */
    public function setChangeType(?string $changeType): static
    {
        if (is_null($changeType)) {
            array_push($this->openAPINullablesSetToNull, 'changeType');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('changeType', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['changeType'] = $changeType;

        return $this;
    }

    /**
     * Gets modifications
     *
     * @return \SynergiTech\Staffology\Model\FieldModification[]|null
     */
    public function getModifications(): ?array
    {
        return $this->container['modifications'];
    }

    /**
     * Sets modifications
     *
     * @param \SynergiTech\Staffology\Model\FieldModification[]|null $modifications modifications
     *
     * @return $this
     */
    public function setModifications(?array $modifications): static
    {
        if (is_null($modifications)) {
            array_push($this->openAPINullablesSetToNull, 'modifications');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('modifications', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['modifications'] = $modifications;

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


