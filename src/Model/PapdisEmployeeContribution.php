<?php
/**
 * PapdisEmployeeContribution
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
 * PapdisEmployeeContribution Class Doc Comment
 *
 * @package  SynergiTech\Staffology
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements ArrayAccess<string, mixed>
 */
class PapdisEmployeeContribution implements ModelInterface, ArrayAccess, JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'PapdisEmployeeContribution';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var array<string, string>
      */
    protected static array $openAPITypes = [
        'employerContributionsAmount' => 'float',
        'employerContributionsPercent' => 'float',
        'employeeContributionsAmount' => 'float',
        'employeeContributionsPercent' => 'float',
        'additionalVoluntaryContributionsAmount' => 'float',
        'additionalVoluntaryContributionsPercent' => 'float',
        'salarySacrificeIndicator' => 'bool',
        'contributionStartDate' => '\DateTime',
        'employeeContributionIsPercentage' => 'bool',
        'employerContributionIsPercentage' => 'bool',
        'unadjustedEmployeeContributionsAmount' => 'float',
        'unadjustedEmployerContributionsAmount' => 'float',
        'unadjustedAdditionalVoluntaryContributionsAmount' => 'float',
        'employerContributionNiSavings' => 'float',
        'contributionLevelType' => '\SynergiTech\Staffology\Model\PensionContributionLevelType',
        'isAvcOnly' => 'bool',
        'employerContributionIncludesNiSaving' => 'bool',
        'unadjustedAdditionalVoluntaryContributionsPercent' => 'float',
        'isHalfContributionMember' => 'bool',
        'assumedPensionablePay' => 'float',
        'isPensionRefund' => 'bool',
        'lowerLimit' => 'float'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'employerContributionsAmount' => 'double',
        'employerContributionsPercent' => 'double',
        'employeeContributionsAmount' => 'double',
        'employeeContributionsPercent' => 'double',
        'additionalVoluntaryContributionsAmount' => 'double',
        'additionalVoluntaryContributionsPercent' => 'double',
        'salarySacrificeIndicator' => null,
        'contributionStartDate' => 'date',
        'employeeContributionIsPercentage' => null,
        'employerContributionIsPercentage' => null,
        'unadjustedEmployeeContributionsAmount' => 'double',
        'unadjustedEmployerContributionsAmount' => 'double',
        'unadjustedAdditionalVoluntaryContributionsAmount' => 'double',
        'employerContributionNiSavings' => 'double',
        'contributionLevelType' => null,
        'isAvcOnly' => null,
        'employerContributionIncludesNiSaving' => null,
        'unadjustedAdditionalVoluntaryContributionsPercent' => 'double',
        'isHalfContributionMember' => null,
        'assumedPensionablePay' => 'double',
        'isPensionRefund' => null,
        'lowerLimit' => 'double'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var array<string, bool>
      */
    protected static array $openAPINullables = [
        'employerContributionsAmount' => false,
        'employerContributionsPercent' => false,
        'employeeContributionsAmount' => false,
        'employeeContributionsPercent' => false,
        'additionalVoluntaryContributionsAmount' => false,
        'additionalVoluntaryContributionsPercent' => false,
        'salarySacrificeIndicator' => false,
        'contributionStartDate' => false,
        'employeeContributionIsPercentage' => false,
        'employerContributionIsPercentage' => false,
        'unadjustedEmployeeContributionsAmount' => false,
        'unadjustedEmployerContributionsAmount' => false,
        'unadjustedAdditionalVoluntaryContributionsAmount' => false,
        'employerContributionNiSavings' => false,
        'contributionLevelType' => false,
        'isAvcOnly' => false,
        'employerContributionIncludesNiSaving' => false,
        'unadjustedAdditionalVoluntaryContributionsPercent' => false,
        'isHalfContributionMember' => false,
        'assumedPensionablePay' => true,
        'isPensionRefund' => false,
        'lowerLimit' => false
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
        'employerContributionsAmount' => 'employerContributionsAmount',
        'employerContributionsPercent' => 'employerContributionsPercent',
        'employeeContributionsAmount' => 'employeeContributionsAmount',
        'employeeContributionsPercent' => 'employeeContributionsPercent',
        'additionalVoluntaryContributionsAmount' => 'additionalVoluntaryContributionsAmount',
        'additionalVoluntaryContributionsPercent' => 'additionalVoluntaryContributionsPercent',
        'salarySacrificeIndicator' => 'salarySacrificeIndicator',
        'contributionStartDate' => 'contributionStartDate',
        'employeeContributionIsPercentage' => 'employeeContributionIsPercentage',
        'employerContributionIsPercentage' => 'employerContributionIsPercentage',
        'unadjustedEmployeeContributionsAmount' => 'unadjustedEmployeeContributionsAmount',
        'unadjustedEmployerContributionsAmount' => 'unadjustedEmployerContributionsAmount',
        'unadjustedAdditionalVoluntaryContributionsAmount' => 'unadjustedAdditionalVoluntaryContributionsAmount',
        'employerContributionNiSavings' => 'employerContributionNiSavings',
        'contributionLevelType' => 'contributionLevelType',
        'isAvcOnly' => 'isAvcOnly',
        'employerContributionIncludesNiSaving' => 'employerContributionIncludesNiSaving',
        'unadjustedAdditionalVoluntaryContributionsPercent' => 'unadjustedAdditionalVoluntaryContributionsPercent',
        'isHalfContributionMember' => 'isHalfContributionMember',
        'assumedPensionablePay' => 'assumedPensionablePay',
        'isPensionRefund' => 'isPensionRefund',
        'lowerLimit' => 'lowerLimit'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var array<string, string>
     */
    protected static array $setters = [
        'employerContributionsAmount' => 'setEmployerContributionsAmount',
        'employerContributionsPercent' => 'setEmployerContributionsPercent',
        'employeeContributionsAmount' => 'setEmployeeContributionsAmount',
        'employeeContributionsPercent' => 'setEmployeeContributionsPercent',
        'additionalVoluntaryContributionsAmount' => 'setAdditionalVoluntaryContributionsAmount',
        'additionalVoluntaryContributionsPercent' => 'setAdditionalVoluntaryContributionsPercent',
        'salarySacrificeIndicator' => 'setSalarySacrificeIndicator',
        'contributionStartDate' => 'setContributionStartDate',
        'employeeContributionIsPercentage' => 'setEmployeeContributionIsPercentage',
        'employerContributionIsPercentage' => 'setEmployerContributionIsPercentage',
        'unadjustedEmployeeContributionsAmount' => 'setUnadjustedEmployeeContributionsAmount',
        'unadjustedEmployerContributionsAmount' => 'setUnadjustedEmployerContributionsAmount',
        'unadjustedAdditionalVoluntaryContributionsAmount' => 'setUnadjustedAdditionalVoluntaryContributionsAmount',
        'employerContributionNiSavings' => 'setEmployerContributionNiSavings',
        'contributionLevelType' => 'setContributionLevelType',
        'isAvcOnly' => 'setIsAvcOnly',
        'employerContributionIncludesNiSaving' => 'setEmployerContributionIncludesNiSaving',
        'unadjustedAdditionalVoluntaryContributionsPercent' => 'setUnadjustedAdditionalVoluntaryContributionsPercent',
        'isHalfContributionMember' => 'setIsHalfContributionMember',
        'assumedPensionablePay' => 'setAssumedPensionablePay',
        'isPensionRefund' => 'setIsPensionRefund',
        'lowerLimit' => 'setLowerLimit'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var array<string, string>
     */
    protected static array $getters = [
        'employerContributionsAmount' => 'getEmployerContributionsAmount',
        'employerContributionsPercent' => 'getEmployerContributionsPercent',
        'employeeContributionsAmount' => 'getEmployeeContributionsAmount',
        'employeeContributionsPercent' => 'getEmployeeContributionsPercent',
        'additionalVoluntaryContributionsAmount' => 'getAdditionalVoluntaryContributionsAmount',
        'additionalVoluntaryContributionsPercent' => 'getAdditionalVoluntaryContributionsPercent',
        'salarySacrificeIndicator' => 'getSalarySacrificeIndicator',
        'contributionStartDate' => 'getContributionStartDate',
        'employeeContributionIsPercentage' => 'getEmployeeContributionIsPercentage',
        'employerContributionIsPercentage' => 'getEmployerContributionIsPercentage',
        'unadjustedEmployeeContributionsAmount' => 'getUnadjustedEmployeeContributionsAmount',
        'unadjustedEmployerContributionsAmount' => 'getUnadjustedEmployerContributionsAmount',
        'unadjustedAdditionalVoluntaryContributionsAmount' => 'getUnadjustedAdditionalVoluntaryContributionsAmount',
        'employerContributionNiSavings' => 'getEmployerContributionNiSavings',
        'contributionLevelType' => 'getContributionLevelType',
        'isAvcOnly' => 'getIsAvcOnly',
        'employerContributionIncludesNiSaving' => 'getEmployerContributionIncludesNiSaving',
        'unadjustedAdditionalVoluntaryContributionsPercent' => 'getUnadjustedAdditionalVoluntaryContributionsPercent',
        'isHalfContributionMember' => 'getIsHalfContributionMember',
        'assumedPensionablePay' => 'getAssumedPensionablePay',
        'isPensionRefund' => 'getIsPensionRefund',
        'lowerLimit' => 'getLowerLimit'
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
        $this->setIfExists('employerContributionsAmount', $data ?? [], null);
        $this->setIfExists('employerContributionsPercent', $data ?? [], null);
        $this->setIfExists('employeeContributionsAmount', $data ?? [], null);
        $this->setIfExists('employeeContributionsPercent', $data ?? [], null);
        $this->setIfExists('additionalVoluntaryContributionsAmount', $data ?? [], null);
        $this->setIfExists('additionalVoluntaryContributionsPercent', $data ?? [], null);
        $this->setIfExists('salarySacrificeIndicator', $data ?? [], null);
        $this->setIfExists('contributionStartDate', $data ?? [], null);
        $this->setIfExists('employeeContributionIsPercentage', $data ?? [], null);
        $this->setIfExists('employerContributionIsPercentage', $data ?? [], null);
        $this->setIfExists('unadjustedEmployeeContributionsAmount', $data ?? [], null);
        $this->setIfExists('unadjustedEmployerContributionsAmount', $data ?? [], null);
        $this->setIfExists('unadjustedAdditionalVoluntaryContributionsAmount', $data ?? [], null);
        $this->setIfExists('employerContributionNiSavings', $data ?? [], null);
        $this->setIfExists('contributionLevelType', $data ?? [], null);
        $this->setIfExists('isAvcOnly', $data ?? [], null);
        $this->setIfExists('employerContributionIncludesNiSaving', $data ?? [], null);
        $this->setIfExists('unadjustedAdditionalVoluntaryContributionsPercent', $data ?? [], null);
        $this->setIfExists('isHalfContributionMember', $data ?? [], null);
        $this->setIfExists('assumedPensionablePay', $data ?? [], null);
        $this->setIfExists('isPensionRefund', $data ?? [], null);
        $this->setIfExists('lowerLimit', $data ?? [], null);
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
     * Gets employerContributionsAmount
     *
     * @return float|null
     */
    public function getEmployerContributionsAmount(): ?float
    {
        return $this->container['employerContributionsAmount'];
    }

    /**
     * Sets employerContributionsAmount
     *
     * @param float|null $employerContributionsAmount [readonly]
     *
     * @return $this
     */
    public function setEmployerContributionsAmount(?float $employerContributionsAmount): static
    {
        if (is_null($employerContributionsAmount)) {
            throw new InvalidArgumentException('non-nullable employerContributionsAmount cannot be null');
        }
        $this->container['employerContributionsAmount'] = $employerContributionsAmount;

        return $this;
    }

    /**
     * Gets employerContributionsPercent
     *
     * @return float|null
     */
    public function getEmployerContributionsPercent(): ?float
    {
        return $this->container['employerContributionsPercent'];
    }

    /**
     * Sets employerContributionsPercent
     *
     * @param float|null $employerContributionsPercent [readonly]
     *
     * @return $this
     */
    public function setEmployerContributionsPercent(?float $employerContributionsPercent): static
    {
        if (is_null($employerContributionsPercent)) {
            throw new InvalidArgumentException('non-nullable employerContributionsPercent cannot be null');
        }
        $this->container['employerContributionsPercent'] = $employerContributionsPercent;

        return $this;
    }

    /**
     * Gets employeeContributionsAmount
     *
     * @return float|null
     */
    public function getEmployeeContributionsAmount(): ?float
    {
        return $this->container['employeeContributionsAmount'];
    }

    /**
     * Sets employeeContributionsAmount
     *
     * @param float|null $employeeContributionsAmount [readonly]
     *
     * @return $this
     */
    public function setEmployeeContributionsAmount(?float $employeeContributionsAmount): static
    {
        if (is_null($employeeContributionsAmount)) {
            throw new InvalidArgumentException('non-nullable employeeContributionsAmount cannot be null');
        }
        $this->container['employeeContributionsAmount'] = $employeeContributionsAmount;

        return $this;
    }

    /**
     * Gets employeeContributionsPercent
     *
     * @return float|null
     */
    public function getEmployeeContributionsPercent(): ?float
    {
        return $this->container['employeeContributionsPercent'];
    }

    /**
     * Sets employeeContributionsPercent
     *
     * @param float|null $employeeContributionsPercent [readonly]
     *
     * @return $this
     */
    public function setEmployeeContributionsPercent(?float $employeeContributionsPercent): static
    {
        if (is_null($employeeContributionsPercent)) {
            throw new InvalidArgumentException('non-nullable employeeContributionsPercent cannot be null');
        }
        $this->container['employeeContributionsPercent'] = $employeeContributionsPercent;

        return $this;
    }

    /**
     * Gets additionalVoluntaryContributionsAmount
     *
     * @return float|null
     */
    public function getAdditionalVoluntaryContributionsAmount(): ?float
    {
        return $this->container['additionalVoluntaryContributionsAmount'];
    }

    /**
     * Sets additionalVoluntaryContributionsAmount
     *
     * @param float|null $additionalVoluntaryContributionsAmount [readonly]
     *
     * @return $this
     */
    public function setAdditionalVoluntaryContributionsAmount(?float $additionalVoluntaryContributionsAmount): static
    {
        if (is_null($additionalVoluntaryContributionsAmount)) {
            throw new InvalidArgumentException('non-nullable additionalVoluntaryContributionsAmount cannot be null');
        }
        $this->container['additionalVoluntaryContributionsAmount'] = $additionalVoluntaryContributionsAmount;

        return $this;
    }

    /**
     * Gets additionalVoluntaryContributionsPercent
     *
     * @return float|null
     */
    public function getAdditionalVoluntaryContributionsPercent(): ?float
    {
        return $this->container['additionalVoluntaryContributionsPercent'];
    }

    /**
     * Sets additionalVoluntaryContributionsPercent
     *
     * @param float|null $additionalVoluntaryContributionsPercent [readonly]
     *
     * @return $this
     */
    public function setAdditionalVoluntaryContributionsPercent(?float $additionalVoluntaryContributionsPercent): static
    {
        if (is_null($additionalVoluntaryContributionsPercent)) {
            throw new InvalidArgumentException('non-nullable additionalVoluntaryContributionsPercent cannot be null');
        }
        $this->container['additionalVoluntaryContributionsPercent'] = $additionalVoluntaryContributionsPercent;

        return $this;
    }

    /**
     * Gets salarySacrificeIndicator
     *
     * @return bool|null
     */
    public function getSalarySacrificeIndicator(): ?bool
    {
        return $this->container['salarySacrificeIndicator'];
    }

    /**
     * Sets salarySacrificeIndicator
     *
     * @param bool|null $salarySacrificeIndicator [readonly]
     *
     * @return $this
     */
    public function setSalarySacrificeIndicator(?bool $salarySacrificeIndicator): static
    {
        if (is_null($salarySacrificeIndicator)) {
            throw new InvalidArgumentException('non-nullable salarySacrificeIndicator cannot be null');
        }
        $this->container['salarySacrificeIndicator'] = $salarySacrificeIndicator;

        return $this;
    }

    /**
     * Gets contributionStartDate
     *
     * @return \DateTime|null
     */
    public function getContributionStartDate(): ?\DateTime
    {
        return $this->container['contributionStartDate'];
    }

    /**
     * Sets contributionStartDate
     *
     * @param \DateTime|null $contributionStartDate [readonly]
     *
     * @return $this
     */
    public function setContributionStartDate(?\DateTime $contributionStartDate): static
    {
        if (is_null($contributionStartDate)) {
            throw new InvalidArgumentException('non-nullable contributionStartDate cannot be null');
        }
        $this->container['contributionStartDate'] = $contributionStartDate;

        return $this;
    }

    /**
     * Gets employeeContributionIsPercentage
     *
     * @return bool|null
     */
    public function getEmployeeContributionIsPercentage(): ?bool
    {
        return $this->container['employeeContributionIsPercentage'];
    }

    /**
     * Sets employeeContributionIsPercentage
     *
     * @param bool|null $employeeContributionIsPercentage [readonly]
     *
     * @return $this
     */
    public function setEmployeeContributionIsPercentage(?bool $employeeContributionIsPercentage): static
    {
        if (is_null($employeeContributionIsPercentage)) {
            throw new InvalidArgumentException('non-nullable employeeContributionIsPercentage cannot be null');
        }
        $this->container['employeeContributionIsPercentage'] = $employeeContributionIsPercentage;

        return $this;
    }

    /**
     * Gets employerContributionIsPercentage
     *
     * @return bool|null
     */
    public function getEmployerContributionIsPercentage(): ?bool
    {
        return $this->container['employerContributionIsPercentage'];
    }

    /**
     * Sets employerContributionIsPercentage
     *
     * @param bool|null $employerContributionIsPercentage [readonly]
     *
     * @return $this
     */
    public function setEmployerContributionIsPercentage(?bool $employerContributionIsPercentage): static
    {
        if (is_null($employerContributionIsPercentage)) {
            throw new InvalidArgumentException('non-nullable employerContributionIsPercentage cannot be null');
        }
        $this->container['employerContributionIsPercentage'] = $employerContributionIsPercentage;

        return $this;
    }

    /**
     * Gets unadjustedEmployeeContributionsAmount
     *
     * @return float|null
     */
    public function getUnadjustedEmployeeContributionsAmount(): ?float
    {
        return $this->container['unadjustedEmployeeContributionsAmount'];
    }

    /**
     * Sets unadjustedEmployeeContributionsAmount
     *
     * @param float|null $unadjustedEmployeeContributionsAmount [readonly]
     *
     * @return $this
     */
    public function setUnadjustedEmployeeContributionsAmount(?float $unadjustedEmployeeContributionsAmount): static
    {
        if (is_null($unadjustedEmployeeContributionsAmount)) {
            throw new InvalidArgumentException('non-nullable unadjustedEmployeeContributionsAmount cannot be null');
        }
        $this->container['unadjustedEmployeeContributionsAmount'] = $unadjustedEmployeeContributionsAmount;

        return $this;
    }

    /**
     * Gets unadjustedEmployerContributionsAmount
     *
     * @return float|null
     */
    public function getUnadjustedEmployerContributionsAmount(): ?float
    {
        return $this->container['unadjustedEmployerContributionsAmount'];
    }

    /**
     * Sets unadjustedEmployerContributionsAmount
     *
     * @param float|null $unadjustedEmployerContributionsAmount [readonly]
     *
     * @return $this
     */
    public function setUnadjustedEmployerContributionsAmount(?float $unadjustedEmployerContributionsAmount): static
    {
        if (is_null($unadjustedEmployerContributionsAmount)) {
            throw new InvalidArgumentException('non-nullable unadjustedEmployerContributionsAmount cannot be null');
        }
        $this->container['unadjustedEmployerContributionsAmount'] = $unadjustedEmployerContributionsAmount;

        return $this;
    }

    /**
     * Gets unadjustedAdditionalVoluntaryContributionsAmount
     *
     * @return float|null
     */
    public function getUnadjustedAdditionalVoluntaryContributionsAmount(): ?float
    {
        return $this->container['unadjustedAdditionalVoluntaryContributionsAmount'];
    }

    /**
     * Sets unadjustedAdditionalVoluntaryContributionsAmount
     *
     * @param float|null $unadjustedAdditionalVoluntaryContributionsAmount [readonly]
     *
     * @return $this
     */
    public function setUnadjustedAdditionalVoluntaryContributionsAmount(?float $unadjustedAdditionalVoluntaryContributionsAmount): static
    {
        if (is_null($unadjustedAdditionalVoluntaryContributionsAmount)) {
            throw new InvalidArgumentException('non-nullable unadjustedAdditionalVoluntaryContributionsAmount cannot be null');
        }
        $this->container['unadjustedAdditionalVoluntaryContributionsAmount'] = $unadjustedAdditionalVoluntaryContributionsAmount;

        return $this;
    }

    /**
     * Gets employerContributionNiSavings
     *
     * @return float|null
     */
    public function getEmployerContributionNiSavings(): ?float
    {
        return $this->container['employerContributionNiSavings'];
    }

    /**
     * Sets employerContributionNiSavings
     *
     * @param float|null $employerContributionNiSavings [readonly]
     *
     * @return $this
     */
    public function setEmployerContributionNiSavings(?float $employerContributionNiSavings): static
    {
        if (is_null($employerContributionNiSavings)) {
            throw new InvalidArgumentException('non-nullable employerContributionNiSavings cannot be null');
        }
        $this->container['employerContributionNiSavings'] = $employerContributionNiSavings;

        return $this;
    }

    /**
     * Gets contributionLevelType
     *
     * @return \SynergiTech\Staffology\Model\PensionContributionLevelType|null
     */
    public function getContributionLevelType(): ?\SynergiTech\Staffology\Model\PensionContributionLevelType
    {
        return $this->container['contributionLevelType'];
    }

    /**
     * Sets contributionLevelType
     *
     * @param \SynergiTech\Staffology\Model\PensionContributionLevelType|null $contributionLevelType contributionLevelType
     *
     * @return $this
     */
    public function setContributionLevelType(?\SynergiTech\Staffology\Model\PensionContributionLevelType $contributionLevelType): static
    {
        if (is_null($contributionLevelType)) {
            throw new InvalidArgumentException('non-nullable contributionLevelType cannot be null');
        }
        $this->container['contributionLevelType'] = $contributionLevelType;

        return $this;
    }

    /**
     * Gets isAvcOnly
     *
     * @return bool|null
     */
    public function getIsAvcOnly(): ?bool
    {
        return $this->container['isAvcOnly'];
    }

    /**
     * Sets isAvcOnly
     *
     * @param bool|null $isAvcOnly [readonly]
     *
     * @return $this
     */
    public function setIsAvcOnly(?bool $isAvcOnly): static
    {
        if (is_null($isAvcOnly)) {
            throw new InvalidArgumentException('non-nullable isAvcOnly cannot be null');
        }
        $this->container['isAvcOnly'] = $isAvcOnly;

        return $this;
    }

    /**
     * Gets employerContributionIncludesNiSaving
     *
     * @return bool|null
     */
    public function getEmployerContributionIncludesNiSaving(): ?bool
    {
        return $this->container['employerContributionIncludesNiSaving'];
    }

    /**
     * Sets employerContributionIncludesNiSaving
     *
     * @param bool|null $employerContributionIncludesNiSaving [readonly]
     *
     * @return $this
     */
    public function setEmployerContributionIncludesNiSaving(?bool $employerContributionIncludesNiSaving): static
    {
        if (is_null($employerContributionIncludesNiSaving)) {
            throw new InvalidArgumentException('non-nullable employerContributionIncludesNiSaving cannot be null');
        }
        $this->container['employerContributionIncludesNiSaving'] = $employerContributionIncludesNiSaving;

        return $this;
    }

    /**
     * Gets unadjustedAdditionalVoluntaryContributionsPercent
     *
     * @return float|null
     */
    public function getUnadjustedAdditionalVoluntaryContributionsPercent(): ?float
    {
        return $this->container['unadjustedAdditionalVoluntaryContributionsPercent'];
    }

    /**
     * Sets unadjustedAdditionalVoluntaryContributionsPercent
     *
     * @param float|null $unadjustedAdditionalVoluntaryContributionsPercent [readonly]
     *
     * @return $this
     */
    public function setUnadjustedAdditionalVoluntaryContributionsPercent(?float $unadjustedAdditionalVoluntaryContributionsPercent): static
    {
        if (is_null($unadjustedAdditionalVoluntaryContributionsPercent)) {
            throw new InvalidArgumentException('non-nullable unadjustedAdditionalVoluntaryContributionsPercent cannot be null');
        }
        $this->container['unadjustedAdditionalVoluntaryContributionsPercent'] = $unadjustedAdditionalVoluntaryContributionsPercent;

        return $this;
    }

    /**
     * Gets isHalfContributionMember
     *
     * @return bool|null
     */
    public function getIsHalfContributionMember(): ?bool
    {
        return $this->container['isHalfContributionMember'];
    }

    /**
     * Sets isHalfContributionMember
     *
     * @param bool|null $isHalfContributionMember [readonly]
     *
     * @return $this
     */
    public function setIsHalfContributionMember(?bool $isHalfContributionMember): static
    {
        if (is_null($isHalfContributionMember)) {
            throw new InvalidArgumentException('non-nullable isHalfContributionMember cannot be null');
        }
        $this->container['isHalfContributionMember'] = $isHalfContributionMember;

        return $this;
    }

    /**
     * Gets assumedPensionablePay
     *
     * @return float|null
     */
    public function getAssumedPensionablePay(): ?float
    {
        return $this->container['assumedPensionablePay'];
    }

    /**
     * Sets assumedPensionablePay
     *
     * @param float|null $assumedPensionablePay [readonly]
     *
     * @return $this
     */
    public function setAssumedPensionablePay(?float $assumedPensionablePay): static
    {
        if (is_null($assumedPensionablePay)) {
            array_push($this->openAPINullablesSetToNull, 'assumedPensionablePay');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('assumedPensionablePay', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['assumedPensionablePay'] = $assumedPensionablePay;

        return $this;
    }

    /**
     * Gets isPensionRefund
     *
     * @return bool|null
     */
    public function getIsPensionRefund(): ?bool
    {
        return $this->container['isPensionRefund'];
    }

    /**
     * Sets isPensionRefund
     *
     * @param bool|null $isPensionRefund [readonly]
     *
     * @return $this
     */
    public function setIsPensionRefund(?bool $isPensionRefund): static
    {
        if (is_null($isPensionRefund)) {
            throw new InvalidArgumentException('non-nullable isPensionRefund cannot be null');
        }
        $this->container['isPensionRefund'] = $isPensionRefund;

        return $this;
    }

    /**
     * Gets lowerLimit
     *
     * @return float|null
     */
    public function getLowerLimit(): ?float
    {
        return $this->container['lowerLimit'];
    }

    /**
     * Sets lowerLimit
     *
     * @param float|null $lowerLimit [readonly]
     *
     * @return $this
     */
    public function setLowerLimit(?float $lowerLimit): static
    {
        if (is_null($lowerLimit)) {
            throw new InvalidArgumentException('non-nullable lowerLimit cannot be null');
        }
        $this->container['lowerLimit'] = $lowerLimit;

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


