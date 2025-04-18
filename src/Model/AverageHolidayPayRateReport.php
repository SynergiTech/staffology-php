<?php
/**
 * AverageHolidayPayRateReport
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
 * AverageHolidayPayRateReport Class Doc Comment
 *
 * @package  SynergiTech\Staffology
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements ArrayAccess<string, mixed>
 */
class AverageHolidayPayRateReport implements ModelInterface, ArrayAccess, JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'AverageHolidayPayRateReport';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var array<string, string>
      */
    protected static array $openAPITypes = [
        'lines' => '\SynergiTech\Staffology\Model\AverageHolidayPayRateReportLine[]',
        'employer' => '\SynergiTech\Staffology\Model\Item',
        'payPeriod' => '\SynergiTech\Staffology\Model\PayPeriods',
        'ordinal' => 'int',
        'period' => 'int',
        'periodTo' => 'int',
        'startPeriodName' => 'string',
        'endPeriodName' => 'string',
        'startDate' => '\DateTime',
        'endDate' => '\DateTime',
        'report' => '\SynergiTech\Staffology\Model\Report',
        'taxYear' => '\SynergiTech\Staffology\Model\TaxYear',
        'title' => 'string',
        'isDraft' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'lines' => null,
        'employer' => null,
        'payPeriod' => null,
        'ordinal' => 'int32',
        'period' => 'int32',
        'periodTo' => 'int32',
        'startPeriodName' => null,
        'endPeriodName' => null,
        'startDate' => 'date',
        'endDate' => 'date',
        'report' => null,
        'taxYear' => null,
        'title' => null,
        'isDraft' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var array<string, bool>
      */
    protected static array $openAPINullables = [
        'lines' => true,
        'employer' => false,
        'payPeriod' => false,
        'ordinal' => false,
        'period' => false,
        'periodTo' => false,
        'startPeriodName' => true,
        'endPeriodName' => true,
        'startDate' => false,
        'endDate' => false,
        'report' => false,
        'taxYear' => false,
        'title' => true,
        'isDraft' => false
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
        'lines' => 'lines',
        'employer' => 'employer',
        'payPeriod' => 'payPeriod',
        'ordinal' => 'ordinal',
        'period' => 'period',
        'periodTo' => 'periodTo',
        'startPeriodName' => 'startPeriodName',
        'endPeriodName' => 'endPeriodName',
        'startDate' => 'startDate',
        'endDate' => 'endDate',
        'report' => 'report',
        'taxYear' => 'taxYear',
        'title' => 'title',
        'isDraft' => 'isDraft'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var array<string, string>
     */
    protected static array $setters = [
        'lines' => 'setLines',
        'employer' => 'setEmployer',
        'payPeriod' => 'setPayPeriod',
        'ordinal' => 'setOrdinal',
        'period' => 'setPeriod',
        'periodTo' => 'setPeriodTo',
        'startPeriodName' => 'setStartPeriodName',
        'endPeriodName' => 'setEndPeriodName',
        'startDate' => 'setStartDate',
        'endDate' => 'setEndDate',
        'report' => 'setReport',
        'taxYear' => 'setTaxYear',
        'title' => 'setTitle',
        'isDraft' => 'setIsDraft'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var array<string, string>
     */
    protected static array $getters = [
        'lines' => 'getLines',
        'employer' => 'getEmployer',
        'payPeriod' => 'getPayPeriod',
        'ordinal' => 'getOrdinal',
        'period' => 'getPeriod',
        'periodTo' => 'getPeriodTo',
        'startPeriodName' => 'getStartPeriodName',
        'endPeriodName' => 'getEndPeriodName',
        'startDate' => 'getStartDate',
        'endDate' => 'getEndDate',
        'report' => 'getReport',
        'taxYear' => 'getTaxYear',
        'title' => 'getTitle',
        'isDraft' => 'getIsDraft'
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
        $this->setIfExists('lines', $data ?? [], null);
        $this->setIfExists('employer', $data ?? [], null);
        $this->setIfExists('payPeriod', $data ?? [], null);
        $this->setIfExists('ordinal', $data ?? [], null);
        $this->setIfExists('period', $data ?? [], null);
        $this->setIfExists('periodTo', $data ?? [], null);
        $this->setIfExists('startPeriodName', $data ?? [], null);
        $this->setIfExists('endPeriodName', $data ?? [], null);
        $this->setIfExists('startDate', $data ?? [], null);
        $this->setIfExists('endDate', $data ?? [], null);
        $this->setIfExists('report', $data ?? [], null);
        $this->setIfExists('taxYear', $data ?? [], null);
        $this->setIfExists('title', $data ?? [], null);
        $this->setIfExists('isDraft', $data ?? [], null);
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
     * Gets lines
     *
     * @return \SynergiTech\Staffology\Model\AverageHolidayPayRateReportLine[]|null
     */
    public function getLines(): ?array
    {
        return $this->container['lines'];
    }

    /**
     * Sets lines
     *
     * @param \SynergiTech\Staffology\Model\AverageHolidayPayRateReportLine[]|null $lines lines
     *
     * @return $this
     */
    public function setLines(?array $lines): static
    {
        if (is_null($lines)) {
            array_push($this->openAPINullablesSetToNull, 'lines');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('lines', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['lines'] = $lines;

        return $this;
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
     * Gets payPeriod
     *
     * @return \SynergiTech\Staffology\Model\PayPeriods|null
     */
    public function getPayPeriod(): ?\SynergiTech\Staffology\Model\PayPeriods
    {
        return $this->container['payPeriod'];
    }

    /**
     * Sets payPeriod
     *
     * @param \SynergiTech\Staffology\Model\PayPeriods|null $payPeriod payPeriod
     *
     * @return $this
     */
    public function setPayPeriod(?\SynergiTech\Staffology\Model\PayPeriods $payPeriod): static
    {
        if (is_null($payPeriod)) {
            throw new InvalidArgumentException('non-nullable payPeriod cannot be null');
        }
        $this->container['payPeriod'] = $payPeriod;

        return $this;
    }

    /**
     * Gets ordinal
     *
     * @return int|null
     */
    public function getOrdinal(): ?int
    {
        return $this->container['ordinal'];
    }

    /**
     * Sets ordinal
     *
     * @param int|null $ordinal ordinal
     *
     * @return $this
     */
    public function setOrdinal(?int $ordinal): static
    {
        if (is_null($ordinal)) {
            throw new InvalidArgumentException('non-nullable ordinal cannot be null');
        }
        $this->container['ordinal'] = $ordinal;

        return $this;
    }

    /**
     * Gets period
     *
     * @return int|null
     */
    public function getPeriod(): ?int
    {
        return $this->container['period'];
    }

    /**
     * Sets period
     *
     * @param int|null $period period
     *
     * @return $this
     */
    public function setPeriod(?int $period): static
    {
        if (is_null($period)) {
            throw new InvalidArgumentException('non-nullable period cannot be null');
        }
        $this->container['period'] = $period;

        return $this;
    }

    /**
     * Gets periodTo
     *
     * @return int|null
     */
    public function getPeriodTo(): ?int
    {
        return $this->container['periodTo'];
    }

    /**
     * Sets periodTo
     *
     * @param int|null $periodTo periodTo
     *
     * @return $this
     */
    public function setPeriodTo(?int $periodTo): static
    {
        if (is_null($periodTo)) {
            throw new InvalidArgumentException('non-nullable periodTo cannot be null');
        }
        $this->container['periodTo'] = $periodTo;

        return $this;
    }

    /**
     * Gets startPeriodName
     *
     * @return string|null
     */
    public function getStartPeriodName(): ?string
    {
        return $this->container['startPeriodName'];
    }

    /**
     * Sets startPeriodName
     *
     * @param string|null $startPeriodName startPeriodName
     *
     * @return $this
     */
    public function setStartPeriodName(?string $startPeriodName): static
    {
        if (is_null($startPeriodName)) {
            array_push($this->openAPINullablesSetToNull, 'startPeriodName');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('startPeriodName', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['startPeriodName'] = $startPeriodName;

        return $this;
    }

    /**
     * Gets endPeriodName
     *
     * @return string|null
     */
    public function getEndPeriodName(): ?string
    {
        return $this->container['endPeriodName'];
    }

    /**
     * Sets endPeriodName
     *
     * @param string|null $endPeriodName endPeriodName
     *
     * @return $this
     */
    public function setEndPeriodName(?string $endPeriodName): static
    {
        if (is_null($endPeriodName)) {
            array_push($this->openAPINullablesSetToNull, 'endPeriodName');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('endPeriodName', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['endPeriodName'] = $endPeriodName;

        return $this;
    }

    /**
     * Gets startDate
     *
     * @return \DateTime|null
     */
    public function getStartDate(): ?\DateTime
    {
        return $this->container['startDate'];
    }

    /**
     * Sets startDate
     *
     * @param \DateTime|null $startDate startDate
     *
     * @return $this
     */
    public function setStartDate(?\DateTime $startDate): static
    {
        if (is_null($startDate)) {
            throw new InvalidArgumentException('non-nullable startDate cannot be null');
        }
        $this->container['startDate'] = $startDate;

        return $this;
    }

    /**
     * Gets endDate
     *
     * @return \DateTime|null
     */
    public function getEndDate(): ?\DateTime
    {
        return $this->container['endDate'];
    }

    /**
     * Sets endDate
     *
     * @param \DateTime|null $endDate endDate
     *
     * @return $this
     */
    public function setEndDate(?\DateTime $endDate): static
    {
        if (is_null($endDate)) {
            throw new InvalidArgumentException('non-nullable endDate cannot be null');
        }
        $this->container['endDate'] = $endDate;

        return $this;
    }

    /**
     * Gets report
     *
     * @return \SynergiTech\Staffology\Model\Report|null
     */
    public function getReport(): ?\SynergiTech\Staffology\Model\Report
    {
        return $this->container['report'];
    }

    /**
     * Sets report
     *
     * @param \SynergiTech\Staffology\Model\Report|null $report report
     *
     * @return $this
     */
    public function setReport(?\SynergiTech\Staffology\Model\Report $report): static
    {
        if (is_null($report)) {
            throw new InvalidArgumentException('non-nullable report cannot be null');
        }
        $this->container['report'] = $report;

        return $this;
    }

    /**
     * Gets taxYear
     *
     * @return \SynergiTech\Staffology\Model\TaxYear|null
     */
    public function getTaxYear(): ?\SynergiTech\Staffology\Model\TaxYear
    {
        return $this->container['taxYear'];
    }

    /**
     * Sets taxYear
     *
     * @param \SynergiTech\Staffology\Model\TaxYear|null $taxYear taxYear
     *
     * @return $this
     */
    public function setTaxYear(?\SynergiTech\Staffology\Model\TaxYear $taxYear): static
    {
        if (is_null($taxYear)) {
            throw new InvalidArgumentException('non-nullable taxYear cannot be null');
        }
        $this->container['taxYear'] = $taxYear;

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
     * @param string|null $title title
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
     * Gets isDraft
     *
     * @return bool|null
     */
    public function getIsDraft(): ?bool
    {
        return $this->container['isDraft'];
    }

    /**
     * Sets isDraft
     *
     * @param bool|null $isDraft isDraft
     *
     * @return $this
     */
    public function setIsDraft(?bool $isDraft): static
    {
        if (is_null($isDraft)) {
            throw new InvalidArgumentException('non-nullable isDraft cannot be null');
        }
        $this->container['isDraft'] = $isDraft;

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


