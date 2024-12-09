<?php
/**
 * WorkingPattern
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
 * WorkingPattern Class Doc Comment
 *
 * @package  SynergiTech\Staffology
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements ArrayAccess<string, mixed>
 */
class WorkingPattern implements ModelInterface, ArrayAccess, JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'WorkingPattern';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var array<string, string>
      */
    protected static array $openAPITypes = [
        'title' => 'string',
        'mon' => 'float',
        'tue' => 'float',
        'wed' => 'float',
        'thu' => 'float',
        'fri' => 'float',
        'sat' => 'float',
        'sun' => 'float',
        'contractedWeeks' => 'float',
        'fullTimeContractedWeeks' => 'float',
        'fullTimeContractedHours' => 'float',
        'bankHolidays' => '\SynergiTech\Staffology\Model\BankHolidayCollection',
        'proRataRule' => '\SynergiTech\Staffology\Model\ProRataRule',
        'bankHolidayDates' => '\DateTime[]',
        'workingPatternHoursType' => '\SynergiTech\Staffology\Model\WorkingPatternHoursType',
        'isDefault' => 'bool',
        'effectiveFrom' => '\DateTime',
        'workingPatternType' => '\SynergiTech\Staffology\Model\WorkingPatternType',
        'shiftWorkingPatternDays' => '\SynergiTech\Staffology\Model\ShiftWorkingPatternDay[]',
        'id' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'title' => null,
        'mon' => 'double',
        'tue' => 'double',
        'wed' => 'double',
        'thu' => 'double',
        'fri' => 'double',
        'sat' => 'double',
        'sun' => 'double',
        'contractedWeeks' => 'double',
        'fullTimeContractedWeeks' => 'double',
        'fullTimeContractedHours' => 'double',
        'bankHolidays' => null,
        'proRataRule' => null,
        'bankHolidayDates' => 'date-time',
        'workingPatternHoursType' => null,
        'isDefault' => null,
        'effectiveFrom' => 'date',
        'workingPatternType' => null,
        'shiftWorkingPatternDays' => null,
        'id' => 'uuid'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var array<string, bool>
      */
    protected static array $openAPINullables = [
        'title' => false,
        'mon' => false,
        'tue' => false,
        'wed' => false,
        'thu' => false,
        'fri' => false,
        'sat' => false,
        'sun' => false,
        'contractedWeeks' => true,
        'fullTimeContractedWeeks' => true,
        'fullTimeContractedHours' => true,
        'bankHolidays' => false,
        'proRataRule' => false,
        'bankHolidayDates' => true,
        'workingPatternHoursType' => false,
        'isDefault' => false,
        'effectiveFrom' => true,
        'workingPatternType' => false,
        'shiftWorkingPatternDays' => true,
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
        'title' => 'title',
        'mon' => 'mon',
        'tue' => 'tue',
        'wed' => 'wed',
        'thu' => 'thu',
        'fri' => 'fri',
        'sat' => 'sat',
        'sun' => 'sun',
        'contractedWeeks' => 'contractedWeeks',
        'fullTimeContractedWeeks' => 'fullTimeContractedWeeks',
        'fullTimeContractedHours' => 'fullTimeContractedHours',
        'bankHolidays' => 'bankHolidays',
        'proRataRule' => 'proRataRule',
        'bankHolidayDates' => 'bankHolidayDates',
        'workingPatternHoursType' => 'workingPatternHoursType',
        'isDefault' => 'isDefault',
        'effectiveFrom' => 'effectiveFrom',
        'workingPatternType' => 'workingPatternType',
        'shiftWorkingPatternDays' => 'shiftWorkingPatternDays',
        'id' => 'id'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var array<string, string>
     */
    protected static array $setters = [
        'title' => 'setTitle',
        'mon' => 'setMon',
        'tue' => 'setTue',
        'wed' => 'setWed',
        'thu' => 'setThu',
        'fri' => 'setFri',
        'sat' => 'setSat',
        'sun' => 'setSun',
        'contractedWeeks' => 'setContractedWeeks',
        'fullTimeContractedWeeks' => 'setFullTimeContractedWeeks',
        'fullTimeContractedHours' => 'setFullTimeContractedHours',
        'bankHolidays' => 'setBankHolidays',
        'proRataRule' => 'setProRataRule',
        'bankHolidayDates' => 'setBankHolidayDates',
        'workingPatternHoursType' => 'setWorkingPatternHoursType',
        'isDefault' => 'setIsDefault',
        'effectiveFrom' => 'setEffectiveFrom',
        'workingPatternType' => 'setWorkingPatternType',
        'shiftWorkingPatternDays' => 'setShiftWorkingPatternDays',
        'id' => 'setId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var array<string, string>
     */
    protected static array $getters = [
        'title' => 'getTitle',
        'mon' => 'getMon',
        'tue' => 'getTue',
        'wed' => 'getWed',
        'thu' => 'getThu',
        'fri' => 'getFri',
        'sat' => 'getSat',
        'sun' => 'getSun',
        'contractedWeeks' => 'getContractedWeeks',
        'fullTimeContractedWeeks' => 'getFullTimeContractedWeeks',
        'fullTimeContractedHours' => 'getFullTimeContractedHours',
        'bankHolidays' => 'getBankHolidays',
        'proRataRule' => 'getProRataRule',
        'bankHolidayDates' => 'getBankHolidayDates',
        'workingPatternHoursType' => 'getWorkingPatternHoursType',
        'isDefault' => 'getIsDefault',
        'effectiveFrom' => 'getEffectiveFrom',
        'workingPatternType' => 'getWorkingPatternType',
        'shiftWorkingPatternDays' => 'getShiftWorkingPatternDays',
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
        $this->setIfExists('title', $data ?? [], null);
        $this->setIfExists('mon', $data ?? [], null);
        $this->setIfExists('tue', $data ?? [], null);
        $this->setIfExists('wed', $data ?? [], null);
        $this->setIfExists('thu', $data ?? [], null);
        $this->setIfExists('fri', $data ?? [], null);
        $this->setIfExists('sat', $data ?? [], null);
        $this->setIfExists('sun', $data ?? [], null);
        $this->setIfExists('contractedWeeks', $data ?? [], null);
        $this->setIfExists('fullTimeContractedWeeks', $data ?? [], null);
        $this->setIfExists('fullTimeContractedHours', $data ?? [], null);
        $this->setIfExists('bankHolidays', $data ?? [], null);
        $this->setIfExists('proRataRule', $data ?? [], null);
        $this->setIfExists('bankHolidayDates', $data ?? [], null);
        $this->setIfExists('workingPatternHoursType', $data ?? [], null);
        $this->setIfExists('isDefault', $data ?? [], null);
        $this->setIfExists('effectiveFrom', $data ?? [], null);
        $this->setIfExists('workingPatternType', $data ?? [], null);
        $this->setIfExists('shiftWorkingPatternDays', $data ?? [], null);
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

        if ($this->container['title'] === null) {
            $invalidProperties[] = "'title' can't be null";
        }
        if ((mb_strlen($this->container['title']) > 100)) {
            $invalidProperties[] = "invalid value for 'title', the character length must be smaller than or equal to 100.";
        }

        if ((mb_strlen($this->container['title']) < 1)) {
            $invalidProperties[] = "invalid value for 'title', the character length must be bigger than or equal to 1.";
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
     * Gets title
     *
     * @return string
     */
    public function getTitle(): string
    {
        return $this->container['title'];
    }

    /**
     * Sets title
     *
     * @param string $title title
     *
     * @return $this
     */
    public function setTitle(string $title): static
    {
        if (is_null($title)) {
            throw new InvalidArgumentException('non-nullable title cannot be null');
        }
        if ((mb_strlen($title) > 100)) {
            throw new InvalidArgumentException('invalid length for $title when calling WorkingPattern., must be smaller than or equal to 100.');
        }
        if ((mb_strlen($title) < 1)) {
            throw new InvalidArgumentException('invalid length for $title when calling WorkingPattern., must be bigger than or equal to 1.');
        }

        $this->container['title'] = $title;

        return $this;
    }

    /**
     * Gets mon
     *
     * @return float|null
     */
    public function getMon(): ?float
    {
        return $this->container['mon'];
    }

    /**
     * Sets mon
     *
     * @param float|null $mon mon
     *
     * @return $this
     */
    public function setMon(?float $mon): static
    {
        if (is_null($mon)) {
            throw new InvalidArgumentException('non-nullable mon cannot be null');
        }
        $this->container['mon'] = $mon;

        return $this;
    }

    /**
     * Gets tue
     *
     * @return float|null
     */
    public function getTue(): ?float
    {
        return $this->container['tue'];
    }

    /**
     * Sets tue
     *
     * @param float|null $tue tue
     *
     * @return $this
     */
    public function setTue(?float $tue): static
    {
        if (is_null($tue)) {
            throw new InvalidArgumentException('non-nullable tue cannot be null');
        }
        $this->container['tue'] = $tue;

        return $this;
    }

    /**
     * Gets wed
     *
     * @return float|null
     */
    public function getWed(): ?float
    {
        return $this->container['wed'];
    }

    /**
     * Sets wed
     *
     * @param float|null $wed wed
     *
     * @return $this
     */
    public function setWed(?float $wed): static
    {
        if (is_null($wed)) {
            throw new InvalidArgumentException('non-nullable wed cannot be null');
        }
        $this->container['wed'] = $wed;

        return $this;
    }

    /**
     * Gets thu
     *
     * @return float|null
     */
    public function getThu(): ?float
    {
        return $this->container['thu'];
    }

    /**
     * Sets thu
     *
     * @param float|null $thu thu
     *
     * @return $this
     */
    public function setThu(?float $thu): static
    {
        if (is_null($thu)) {
            throw new InvalidArgumentException('non-nullable thu cannot be null');
        }
        $this->container['thu'] = $thu;

        return $this;
    }

    /**
     * Gets fri
     *
     * @return float|null
     */
    public function getFri(): ?float
    {
        return $this->container['fri'];
    }

    /**
     * Sets fri
     *
     * @param float|null $fri fri
     *
     * @return $this
     */
    public function setFri(?float $fri): static
    {
        if (is_null($fri)) {
            throw new InvalidArgumentException('non-nullable fri cannot be null');
        }
        $this->container['fri'] = $fri;

        return $this;
    }

    /**
     * Gets sat
     *
     * @return float|null
     */
    public function getSat(): ?float
    {
        return $this->container['sat'];
    }

    /**
     * Sets sat
     *
     * @param float|null $sat sat
     *
     * @return $this
     */
    public function setSat(?float $sat): static
    {
        if (is_null($sat)) {
            throw new InvalidArgumentException('non-nullable sat cannot be null');
        }
        $this->container['sat'] = $sat;

        return $this;
    }

    /**
     * Gets sun
     *
     * @return float|null
     */
    public function getSun(): ?float
    {
        return $this->container['sun'];
    }

    /**
     * Sets sun
     *
     * @param float|null $sun sun
     *
     * @return $this
     */
    public function setSun(?float $sun): static
    {
        if (is_null($sun)) {
            throw new InvalidArgumentException('non-nullable sun cannot be null');
        }
        $this->container['sun'] = $sun;

        return $this;
    }

    /**
     * Gets contractedWeeks
     *
     * @return float|null
     */
    public function getContractedWeeks(): ?float
    {
        return $this->container['contractedWeeks'];
    }

    /**
     * Sets contractedWeeks
     *
     * @param float|null $contractedWeeks The amount of weeks an employee works, utilise for employees who aren't working full time.  If Null then the default is used.
     *
     * @return $this
     */
    public function setContractedWeeks(?float $contractedWeeks): static
    {
        if (is_null($contractedWeeks)) {
            array_push($this->openAPINullablesSetToNull, 'contractedWeeks');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('contractedWeeks', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }


        $this->container['contractedWeeks'] = $contractedWeeks;

        return $this;
    }

    /**
     * Gets fullTimeContractedWeeks
     *
     * @return float|null
     */
    public function getFullTimeContractedWeeks(): ?float
    {
        return $this->container['fullTimeContractedWeeks'];
    }

    /**
     * Sets fullTimeContractedWeeks
     *
     * @param float|null $fullTimeContractedWeeks The amount of weeks an employee works (Full Time). If Null then the default is used.
     *
     * @return $this
     */
    public function setFullTimeContractedWeeks(?float $fullTimeContractedWeeks): static
    {
        if (is_null($fullTimeContractedWeeks)) {
            array_push($this->openAPINullablesSetToNull, 'fullTimeContractedWeeks');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('fullTimeContractedWeeks', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }


        $this->container['fullTimeContractedWeeks'] = $fullTimeContractedWeeks;

        return $this;
    }

    /**
     * Gets fullTimeContractedHours
     *
     * @return float|null
     */
    public function getFullTimeContractedHours(): ?float
    {
        return $this->container['fullTimeContractedHours'];
    }

    /**
     * Sets fullTimeContractedHours
     *
     * @param float|null $fullTimeContractedHours The amount of hours an employee works (Full Time). If Null then the default is used.
     *
     * @return $this
     */
    public function setFullTimeContractedHours(?float $fullTimeContractedHours): static
    {
        if (is_null($fullTimeContractedHours)) {
            array_push($this->openAPINullablesSetToNull, 'fullTimeContractedHours');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('fullTimeContractedHours', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['fullTimeContractedHours'] = $fullTimeContractedHours;

        return $this;
    }

    /**
     * Gets bankHolidays
     *
     * @return \SynergiTech\Staffology\Model\BankHolidayCollection|null
     */
    public function getBankHolidays(): ?\SynergiTech\Staffology\Model\BankHolidayCollection
    {
        return $this->container['bankHolidays'];
    }

    /**
     * Sets bankHolidays
     *
     * @param \SynergiTech\Staffology\Model\BankHolidayCollection|null $bankHolidays bankHolidays
     *
     * @return $this
     */
    public function setBankHolidays(?\SynergiTech\Staffology\Model\BankHolidayCollection $bankHolidays): static
    {
        if (is_null($bankHolidays)) {
            throw new InvalidArgumentException('non-nullable bankHolidays cannot be null');
        }
        $this->container['bankHolidays'] = $bankHolidays;

        return $this;
    }

    /**
     * Gets proRataRule
     *
     * @return \SynergiTech\Staffology\Model\ProRataRule|null
     */
    public function getProRataRule(): ?\SynergiTech\Staffology\Model\ProRataRule
    {
        return $this->container['proRataRule'];
    }

    /**
     * Sets proRataRule
     *
     * @param \SynergiTech\Staffology\Model\ProRataRule|null $proRataRule proRataRule
     *
     * @return $this
     */
    public function setProRataRule(?\SynergiTech\Staffology\Model\ProRataRule $proRataRule): static
    {
        if (is_null($proRataRule)) {
            throw new InvalidArgumentException('non-nullable proRataRule cannot be null');
        }
        $this->container['proRataRule'] = $proRataRule;

        return $this;
    }

    /**
     * Gets bankHolidayDates
     *
     * @return \DateTime[]|null
     */
    public function getBankHolidayDates(): ?array
    {
        return $this->container['bankHolidayDates'];
    }

    /**
     * Sets bankHolidayDates
     *
     * @param \DateTime[]|null $bankHolidayDates [readonly] The dates that are classed as Bank Holidays for this WorkingPattern
     *
     * @return $this
     */
    public function setBankHolidayDates(?array $bankHolidayDates): static
    {
        if (is_null($bankHolidayDates)) {
            array_push($this->openAPINullablesSetToNull, 'bankHolidayDates');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('bankHolidayDates', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['bankHolidayDates'] = $bankHolidayDates;

        return $this;
    }

    /**
     * Gets workingPatternHoursType
     *
     * @return \SynergiTech\Staffology\Model\WorkingPatternHoursType|null
     */
    public function getWorkingPatternHoursType(): ?\SynergiTech\Staffology\Model\WorkingPatternHoursType
    {
        return $this->container['workingPatternHoursType'];
    }

    /**
     * Sets workingPatternHoursType
     *
     * @param \SynergiTech\Staffology\Model\WorkingPatternHoursType|null $workingPatternHoursType workingPatternHoursType
     *
     * @return $this
     */
    public function setWorkingPatternHoursType(?\SynergiTech\Staffology\Model\WorkingPatternHoursType $workingPatternHoursType): static
    {
        if (is_null($workingPatternHoursType)) {
            throw new InvalidArgumentException('non-nullable workingPatternHoursType cannot be null');
        }
        $this->container['workingPatternHoursType'] = $workingPatternHoursType;

        return $this;
    }

    /**
     * Gets isDefault
     *
     * @return bool|null
     */
    public function getIsDefault(): ?bool
    {
        return $this->container['isDefault'];
    }

    /**
     * Sets isDefault
     *
     * @param bool|null $isDefault isDefault
     *
     * @return $this
     */
    public function setIsDefault(?bool $isDefault): static
    {
        if (is_null($isDefault)) {
            throw new InvalidArgumentException('non-nullable isDefault cannot be null');
        }
        $this->container['isDefault'] = $isDefault;

        return $this;
    }

    /**
     * Gets effectiveFrom
     *
     * @return \DateTime|null
     */
    public function getEffectiveFrom(): ?\DateTime
    {
        return $this->container['effectiveFrom'];
    }

    /**
     * Sets effectiveFrom
     *
     * @param \DateTime|null $effectiveFrom The date when the assignment of the Working Pattern becomes effective.  Required for a Shift WorkingPattern to determine when it starts
     *
     * @return $this
     */
    public function setEffectiveFrom(?\DateTime $effectiveFrom): static
    {
        if (is_null($effectiveFrom)) {
            array_push($this->openAPINullablesSetToNull, 'effectiveFrom');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('effectiveFrom', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['effectiveFrom'] = $effectiveFrom;

        return $this;
    }

    /**
     * Gets workingPatternType
     *
     * @return \SynergiTech\Staffology\Model\WorkingPatternType|null
     */
    public function getWorkingPatternType(): ?\SynergiTech\Staffology\Model\WorkingPatternType
    {
        return $this->container['workingPatternType'];
    }

    /**
     * Sets workingPatternType
     *
     * @param \SynergiTech\Staffology\Model\WorkingPatternType|null $workingPatternType workingPatternType
     *
     * @return $this
     */
    public function setWorkingPatternType(?\SynergiTech\Staffology\Model\WorkingPatternType $workingPatternType): static
    {
        if (is_null($workingPatternType)) {
            throw new InvalidArgumentException('non-nullable workingPatternType cannot be null');
        }
        $this->container['workingPatternType'] = $workingPatternType;

        return $this;
    }

    /**
     * Gets shiftWorkingPatternDays
     *
     * @return \SynergiTech\Staffology\Model\ShiftWorkingPatternDay[]|null
     */
    public function getShiftWorkingPatternDays(): ?array
    {
        return $this->container['shiftWorkingPatternDays'];
    }

    /**
     * Sets shiftWorkingPatternDays
     *
     * @param \SynergiTech\Staffology\Model\ShiftWorkingPatternDay[]|null $shiftWorkingPatternDays shiftWorkingPatternDays
     *
     * @return $this
     */
    public function setShiftWorkingPatternDays(?array $shiftWorkingPatternDays): static
    {
        if (is_null($shiftWorkingPatternDays)) {
            array_push($this->openAPINullablesSetToNull, 'shiftWorkingPatternDays');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('shiftWorkingPatternDays', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['shiftWorkingPatternDays'] = $shiftWorkingPatternDays;

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

