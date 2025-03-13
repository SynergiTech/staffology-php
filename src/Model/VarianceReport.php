<?php
/**
 * VarianceReport
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
 * VarianceReport Class Doc Comment
 *
 * @package  SynergiTech\Staffology
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements ArrayAccess<string, mixed>
 */
class VarianceReport implements ModelInterface, ArrayAccess, JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'VarianceReport';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var array<string, string>
      */
    protected static array $openAPITypes = [
        'showDifferenceAsPercentage' => 'bool',
        'minimumChangePercentage' => 'float',
        'primary' => '\SynergiTech\Staffology\Model\GrossToNetReport',
        'secondary' => '\SynergiTech\Staffology\Model\GrossToNetReport',
        'joiners' => '\SynergiTech\Staffology\Model\GrossToNetReportLine[]',
        'leavers' => '\SynergiTech\Staffology\Model\GrossToNetReportLine[]',
        'hasDepartments' => 'bool',
        'commonLines' => '\SynergiTech\Staffology\Model\GrossToNetReportLine[]',
        'hasVariances' => 'bool',
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
        'showDifferenceAsPercentage' => null,
        'minimumChangePercentage' => 'double',
        'primary' => null,
        'secondary' => null,
        'joiners' => null,
        'leavers' => null,
        'hasDepartments' => null,
        'commonLines' => null,
        'hasVariances' => null,
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
        'showDifferenceAsPercentage' => false,
        'minimumChangePercentage' => false,
        'primary' => false,
        'secondary' => false,
        'joiners' => true,
        'leavers' => true,
        'hasDepartments' => false,
        'commonLines' => true,
        'hasVariances' => false,
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
        'showDifferenceAsPercentage' => 'showDifferenceAsPercentage',
        'minimumChangePercentage' => 'minimumChangePercentage',
        'primary' => 'primary',
        'secondary' => 'secondary',
        'joiners' => 'joiners',
        'leavers' => 'leavers',
        'hasDepartments' => 'hasDepartments',
        'commonLines' => 'commonLines',
        'hasVariances' => 'hasVariances',
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
        'showDifferenceAsPercentage' => 'setShowDifferenceAsPercentage',
        'minimumChangePercentage' => 'setMinimumChangePercentage',
        'primary' => 'setPrimary',
        'secondary' => 'setSecondary',
        'joiners' => 'setJoiners',
        'leavers' => 'setLeavers',
        'hasDepartments' => 'setHasDepartments',
        'commonLines' => 'setCommonLines',
        'hasVariances' => 'setHasVariances',
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
        'showDifferenceAsPercentage' => 'getShowDifferenceAsPercentage',
        'minimumChangePercentage' => 'getMinimumChangePercentage',
        'primary' => 'getPrimary',
        'secondary' => 'getSecondary',
        'joiners' => 'getJoiners',
        'leavers' => 'getLeavers',
        'hasDepartments' => 'getHasDepartments',
        'commonLines' => 'getCommonLines',
        'hasVariances' => 'getHasVariances',
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
        $this->setIfExists('showDifferenceAsPercentage', $data ?? [], null);
        $this->setIfExists('minimumChangePercentage', $data ?? [], null);
        $this->setIfExists('primary', $data ?? [], null);
        $this->setIfExists('secondary', $data ?? [], null);
        $this->setIfExists('joiners', $data ?? [], null);
        $this->setIfExists('leavers', $data ?? [], null);
        $this->setIfExists('hasDepartments', $data ?? [], null);
        $this->setIfExists('commonLines', $data ?? [], null);
        $this->setIfExists('hasVariances', $data ?? [], null);
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
     * Gets showDifferenceAsPercentage
     *
     * @return bool|null
     */
    public function getShowDifferenceAsPercentage(): ?bool
    {
        return $this->container['showDifferenceAsPercentage'];
    }

    /**
     * Sets showDifferenceAsPercentage
     *
     * @param bool|null $showDifferenceAsPercentage showDifferenceAsPercentage
     *
     * @return $this
     */
    public function setShowDifferenceAsPercentage(?bool $showDifferenceAsPercentage): static
    {
        if (is_null($showDifferenceAsPercentage)) {
            throw new InvalidArgumentException('non-nullable showDifferenceAsPercentage cannot be null');
        }
        $this->container['showDifferenceAsPercentage'] = $showDifferenceAsPercentage;

        return $this;
    }

    /**
     * Gets minimumChangePercentage
     *
     * @return float|null
     */
    public function getMinimumChangePercentage(): ?float
    {
        return $this->container['minimumChangePercentage'];
    }

    /**
     * Sets minimumChangePercentage
     *
     * @param float|null $minimumChangePercentage minimumChangePercentage
     *
     * @return $this
     */
    public function setMinimumChangePercentage(?float $minimumChangePercentage): static
    {
        if (is_null($minimumChangePercentage)) {
            throw new InvalidArgumentException('non-nullable minimumChangePercentage cannot be null');
        }
        $this->container['minimumChangePercentage'] = $minimumChangePercentage;

        return $this;
    }

    /**
     * Gets primary
     *
     * @return \SynergiTech\Staffology\Model\GrossToNetReport|null
     */
    public function getPrimary(): ?\SynergiTech\Staffology\Model\GrossToNetReport
    {
        return $this->container['primary'];
    }

    /**
     * Sets primary
     *
     * @param \SynergiTech\Staffology\Model\GrossToNetReport|null $primary primary
     *
     * @return $this
     */
    public function setPrimary(?\SynergiTech\Staffology\Model\GrossToNetReport $primary): static
    {
        if (is_null($primary)) {
            throw new InvalidArgumentException('non-nullable primary cannot be null');
        }
        $this->container['primary'] = $primary;

        return $this;
    }

    /**
     * Gets secondary
     *
     * @return \SynergiTech\Staffology\Model\GrossToNetReport|null
     */
    public function getSecondary(): ?\SynergiTech\Staffology\Model\GrossToNetReport
    {
        return $this->container['secondary'];
    }

    /**
     * Sets secondary
     *
     * @param \SynergiTech\Staffology\Model\GrossToNetReport|null $secondary secondary
     *
     * @return $this
     */
    public function setSecondary(?\SynergiTech\Staffology\Model\GrossToNetReport $secondary): static
    {
        if (is_null($secondary)) {
            throw new InvalidArgumentException('non-nullable secondary cannot be null');
        }
        $this->container['secondary'] = $secondary;

        return $this;
    }

    /**
     * Gets joiners
     *
     * @return \SynergiTech\Staffology\Model\GrossToNetReportLine[]|null
     */
    public function getJoiners(): ?array
    {
        return $this->container['joiners'];
    }

    /**
     * Sets joiners
     *
     * @param \SynergiTech\Staffology\Model\GrossToNetReportLine[]|null $joiners joiners
     *
     * @return $this
     */
    public function setJoiners(?array $joiners): static
    {
        if (is_null($joiners)) {
            array_push($this->openAPINullablesSetToNull, 'joiners');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('joiners', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['joiners'] = $joiners;

        return $this;
    }

    /**
     * Gets leavers
     *
     * @return \SynergiTech\Staffology\Model\GrossToNetReportLine[]|null
     */
    public function getLeavers(): ?array
    {
        return $this->container['leavers'];
    }

    /**
     * Sets leavers
     *
     * @param \SynergiTech\Staffology\Model\GrossToNetReportLine[]|null $leavers leavers
     *
     * @return $this
     */
    public function setLeavers(?array $leavers): static
    {
        if (is_null($leavers)) {
            array_push($this->openAPINullablesSetToNull, 'leavers');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('leavers', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['leavers'] = $leavers;

        return $this;
    }

    /**
     * Gets hasDepartments
     *
     * @return bool|null
     */
    public function getHasDepartments(): ?bool
    {
        return $this->container['hasDepartments'];
    }

    /**
     * Sets hasDepartments
     *
     * @param bool|null $hasDepartments hasDepartments
     *
     * @return $this
     */
    public function setHasDepartments(?bool $hasDepartments): static
    {
        if (is_null($hasDepartments)) {
            throw new InvalidArgumentException('non-nullable hasDepartments cannot be null');
        }
        $this->container['hasDepartments'] = $hasDepartments;

        return $this;
    }

    /**
     * Gets commonLines
     *
     * @return \SynergiTech\Staffology\Model\GrossToNetReportLine[]|null
     */
    public function getCommonLines(): ?array
    {
        return $this->container['commonLines'];
    }

    /**
     * Sets commonLines
     *
     * @param \SynergiTech\Staffology\Model\GrossToNetReportLine[]|null $commonLines commonLines
     *
     * @return $this
     */
    public function setCommonLines(?array $commonLines): static
    {
        if (is_null($commonLines)) {
            array_push($this->openAPINullablesSetToNull, 'commonLines');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('commonLines', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['commonLines'] = $commonLines;

        return $this;
    }

    /**
     * Gets hasVariances
     *
     * @return bool|null
     */
    public function getHasVariances(): ?bool
    {
        return $this->container['hasVariances'];
    }

    /**
     * Sets hasVariances
     *
     * @param bool|null $hasVariances hasVariances
     *
     * @return $this
     */
    public function setHasVariances(?bool $hasVariances): static
    {
        if (is_null($hasVariances)) {
            throw new InvalidArgumentException('non-nullable hasVariances cannot be null');
        }
        $this->container['hasVariances'] = $hasVariances;

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


