<?php
/**
 * TeachersPensionEoyReport
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
 * TeachersPensionEoyReport Class Doc Comment
 *
 * @package  SynergiTech\Staffology
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements ArrayAccess<string, mixed>
 */
class TeachersPensionEoyReport implements ModelInterface, ArrayAccess, JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'TeachersPensionEoyReport';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var array<string, string>
      */
    protected static array $openAPITypes = [
        'pdfFileName' => 'string',
        'establishment' => '\SynergiTech\Staffology\Model\Establishment',
        'lineItems' => '\SynergiTech\Staffology\Model\TeachersPensionEoyLineItem[]',
        'careerAverageFlexibilities' => 'float',
        'additionalPensionPayments' => 'float',
        'additionalContributions' => 'float',
        'teachersContributions' => 'float',
        'employersContributions' => 'float',
        'totalContributions' => 'float',
        'efeArrears' => 'float',
        'prestonContributions' => 'float',
        'tr22ElectionAmounts' => 'float',
        'totalExtraContributions' => 'float',
        'overallBalance' => 'float',
        'employersContributionPercentage' => 'float',
        'totalContributorySalary' => 'float',
        'totalTeachersContributions' => 'float',
        'totalEmployersContributions' => 'float',
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
        'pdfFileName' => null,
        'establishment' => null,
        'lineItems' => null,
        'careerAverageFlexibilities' => 'double',
        'additionalPensionPayments' => 'double',
        'additionalContributions' => 'double',
        'teachersContributions' => 'double',
        'employersContributions' => 'double',
        'totalContributions' => 'double',
        'efeArrears' => 'double',
        'prestonContributions' => 'double',
        'tr22ElectionAmounts' => 'double',
        'totalExtraContributions' => 'double',
        'overallBalance' => 'double',
        'employersContributionPercentage' => 'double',
        'totalContributorySalary' => 'double',
        'totalTeachersContributions' => 'double',
        'totalEmployersContributions' => 'double',
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
        'pdfFileName' => true,
        'establishment' => false,
        'lineItems' => true,
        'careerAverageFlexibilities' => false,
        'additionalPensionPayments' => false,
        'additionalContributions' => false,
        'teachersContributions' => false,
        'employersContributions' => false,
        'totalContributions' => false,
        'efeArrears' => false,
        'prestonContributions' => false,
        'tr22ElectionAmounts' => false,
        'totalExtraContributions' => false,
        'overallBalance' => false,
        'employersContributionPercentage' => false,
        'totalContributorySalary' => false,
        'totalTeachersContributions' => false,
        'totalEmployersContributions' => false,
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
        'pdfFileName' => 'pdfFileName',
        'establishment' => 'establishment',
        'lineItems' => 'lineItems',
        'careerAverageFlexibilities' => 'careerAverageFlexibilities',
        'additionalPensionPayments' => 'additionalPensionPayments',
        'additionalContributions' => 'additionalContributions',
        'teachersContributions' => 'teachersContributions',
        'employersContributions' => 'employersContributions',
        'totalContributions' => 'totalContributions',
        'efeArrears' => 'efeArrears',
        'prestonContributions' => 'prestonContributions',
        'tr22ElectionAmounts' => 'tr22ElectionAmounts',
        'totalExtraContributions' => 'totalExtraContributions',
        'overallBalance' => 'overallBalance',
        'employersContributionPercentage' => 'employersContributionPercentage',
        'totalContributorySalary' => 'totalContributorySalary',
        'totalTeachersContributions' => 'totalTeachersContributions',
        'totalEmployersContributions' => 'totalEmployersContributions',
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
        'pdfFileName' => 'setPdfFileName',
        'establishment' => 'setEstablishment',
        'lineItems' => 'setLineItems',
        'careerAverageFlexibilities' => 'setCareerAverageFlexibilities',
        'additionalPensionPayments' => 'setAdditionalPensionPayments',
        'additionalContributions' => 'setAdditionalContributions',
        'teachersContributions' => 'setTeachersContributions',
        'employersContributions' => 'setEmployersContributions',
        'totalContributions' => 'setTotalContributions',
        'efeArrears' => 'setEfeArrears',
        'prestonContributions' => 'setPrestonContributions',
        'tr22ElectionAmounts' => 'setTr22ElectionAmounts',
        'totalExtraContributions' => 'setTotalExtraContributions',
        'overallBalance' => 'setOverallBalance',
        'employersContributionPercentage' => 'setEmployersContributionPercentage',
        'totalContributorySalary' => 'setTotalContributorySalary',
        'totalTeachersContributions' => 'setTotalTeachersContributions',
        'totalEmployersContributions' => 'setTotalEmployersContributions',
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
        'pdfFileName' => 'getPdfFileName',
        'establishment' => 'getEstablishment',
        'lineItems' => 'getLineItems',
        'careerAverageFlexibilities' => 'getCareerAverageFlexibilities',
        'additionalPensionPayments' => 'getAdditionalPensionPayments',
        'additionalContributions' => 'getAdditionalContributions',
        'teachersContributions' => 'getTeachersContributions',
        'employersContributions' => 'getEmployersContributions',
        'totalContributions' => 'getTotalContributions',
        'efeArrears' => 'getEfeArrears',
        'prestonContributions' => 'getPrestonContributions',
        'tr22ElectionAmounts' => 'getTr22ElectionAmounts',
        'totalExtraContributions' => 'getTotalExtraContributions',
        'overallBalance' => 'getOverallBalance',
        'employersContributionPercentage' => 'getEmployersContributionPercentage',
        'totalContributorySalary' => 'getTotalContributorySalary',
        'totalTeachersContributions' => 'getTotalTeachersContributions',
        'totalEmployersContributions' => 'getTotalEmployersContributions',
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
        $this->setIfExists('pdfFileName', $data ?? [], null);
        $this->setIfExists('establishment', $data ?? [], null);
        $this->setIfExists('lineItems', $data ?? [], null);
        $this->setIfExists('careerAverageFlexibilities', $data ?? [], null);
        $this->setIfExists('additionalPensionPayments', $data ?? [], null);
        $this->setIfExists('additionalContributions', $data ?? [], null);
        $this->setIfExists('teachersContributions', $data ?? [], null);
        $this->setIfExists('employersContributions', $data ?? [], null);
        $this->setIfExists('totalContributions', $data ?? [], null);
        $this->setIfExists('efeArrears', $data ?? [], null);
        $this->setIfExists('prestonContributions', $data ?? [], null);
        $this->setIfExists('tr22ElectionAmounts', $data ?? [], null);
        $this->setIfExists('totalExtraContributions', $data ?? [], null);
        $this->setIfExists('overallBalance', $data ?? [], null);
        $this->setIfExists('employersContributionPercentage', $data ?? [], null);
        $this->setIfExists('totalContributorySalary', $data ?? [], null);
        $this->setIfExists('totalTeachersContributions', $data ?? [], null);
        $this->setIfExists('totalEmployersContributions', $data ?? [], null);
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
     * Gets pdfFileName
     *
     * @return string|null
     */
    public function getPdfFileName(): ?string
    {
        return $this->container['pdfFileName'];
    }

    /**
     * Sets pdfFileName
     *
     * @param string|null $pdfFileName pdfFileName
     *
     * @return $this
     */
    public function setPdfFileName(?string $pdfFileName): static
    {
        if (is_null($pdfFileName)) {
            array_push($this->openAPINullablesSetToNull, 'pdfFileName');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('pdfFileName', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['pdfFileName'] = $pdfFileName;

        return $this;
    }

    /**
     * Gets establishment
     *
     * @return \SynergiTech\Staffology\Model\Establishment|null
     */
    public function getEstablishment(): ?\SynergiTech\Staffology\Model\Establishment
    {
        return $this->container['establishment'];
    }

    /**
     * Sets establishment
     *
     * @param \SynergiTech\Staffology\Model\Establishment|null $establishment establishment
     *
     * @return $this
     */
    public function setEstablishment(?\SynergiTech\Staffology\Model\Establishment $establishment): static
    {
        if (is_null($establishment)) {
            throw new InvalidArgumentException('non-nullable establishment cannot be null');
        }
        $this->container['establishment'] = $establishment;

        return $this;
    }

    /**
     * Gets lineItems
     *
     * @return \SynergiTech\Staffology\Model\TeachersPensionEoyLineItem[]|null
     */
    public function getLineItems(): ?array
    {
        return $this->container['lineItems'];
    }

    /**
     * Sets lineItems
     *
     * @param \SynergiTech\Staffology\Model\TeachersPensionEoyLineItem[]|null $lineItems lineItems
     *
     * @return $this
     */
    public function setLineItems(?array $lineItems): static
    {
        if (is_null($lineItems)) {
            array_push($this->openAPINullablesSetToNull, 'lineItems');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('lineItems', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['lineItems'] = $lineItems;

        return $this;
    }

    /**
     * Gets careerAverageFlexibilities
     *
     * @return float|null
     */
    public function getCareerAverageFlexibilities(): ?float
    {
        return $this->container['careerAverageFlexibilities'];
    }

    /**
     * Sets careerAverageFlexibilities
     *
     * @param float|null $careerAverageFlexibilities careerAverageFlexibilities
     *
     * @return $this
     */
    public function setCareerAverageFlexibilities(?float $careerAverageFlexibilities): static
    {
        if (is_null($careerAverageFlexibilities)) {
            throw new InvalidArgumentException('non-nullable careerAverageFlexibilities cannot be null');
        }
        $this->container['careerAverageFlexibilities'] = $careerAverageFlexibilities;

        return $this;
    }

    /**
     * Gets additionalPensionPayments
     *
     * @return float|null
     */
    public function getAdditionalPensionPayments(): ?float
    {
        return $this->container['additionalPensionPayments'];
    }

    /**
     * Sets additionalPensionPayments
     *
     * @param float|null $additionalPensionPayments additionalPensionPayments
     *
     * @return $this
     */
    public function setAdditionalPensionPayments(?float $additionalPensionPayments): static
    {
        if (is_null($additionalPensionPayments)) {
            throw new InvalidArgumentException('non-nullable additionalPensionPayments cannot be null');
        }
        $this->container['additionalPensionPayments'] = $additionalPensionPayments;

        return $this;
    }

    /**
     * Gets additionalContributions
     *
     * @return float|null
     */
    public function getAdditionalContributions(): ?float
    {
        return $this->container['additionalContributions'];
    }

    /**
     * Sets additionalContributions
     *
     * @param float|null $additionalContributions additionalContributions
     *
     * @return $this
     */
    public function setAdditionalContributions(?float $additionalContributions): static
    {
        if (is_null($additionalContributions)) {
            throw new InvalidArgumentException('non-nullable additionalContributions cannot be null');
        }
        $this->container['additionalContributions'] = $additionalContributions;

        return $this;
    }

    /**
     * Gets teachersContributions
     *
     * @return float|null
     */
    public function getTeachersContributions(): ?float
    {
        return $this->container['teachersContributions'];
    }

    /**
     * Sets teachersContributions
     *
     * @param float|null $teachersContributions teachersContributions
     *
     * @return $this
     */
    public function setTeachersContributions(?float $teachersContributions): static
    {
        if (is_null($teachersContributions)) {
            throw new InvalidArgumentException('non-nullable teachersContributions cannot be null');
        }
        $this->container['teachersContributions'] = $teachersContributions;

        return $this;
    }

    /**
     * Gets employersContributions
     *
     * @return float|null
     */
    public function getEmployersContributions(): ?float
    {
        return $this->container['employersContributions'];
    }

    /**
     * Sets employersContributions
     *
     * @param float|null $employersContributions employersContributions
     *
     * @return $this
     */
    public function setEmployersContributions(?float $employersContributions): static
    {
        if (is_null($employersContributions)) {
            throw new InvalidArgumentException('non-nullable employersContributions cannot be null');
        }
        $this->container['employersContributions'] = $employersContributions;

        return $this;
    }

    /**
     * Gets totalContributions
     *
     * @return float|null
     */
    public function getTotalContributions(): ?float
    {
        return $this->container['totalContributions'];
    }

    /**
     * Sets totalContributions
     *
     * @param float|null $totalContributions totalContributions
     *
     * @return $this
     */
    public function setTotalContributions(?float $totalContributions): static
    {
        if (is_null($totalContributions)) {
            throw new InvalidArgumentException('non-nullable totalContributions cannot be null');
        }
        $this->container['totalContributions'] = $totalContributions;

        return $this;
    }

    /**
     * Gets efeArrears
     *
     * @return float|null
     */
    public function getEfeArrears(): ?float
    {
        return $this->container['efeArrears'];
    }

    /**
     * Sets efeArrears
     *
     * @param float|null $efeArrears efeArrears
     *
     * @return $this
     */
    public function setEfeArrears(?float $efeArrears): static
    {
        if (is_null($efeArrears)) {
            throw new InvalidArgumentException('non-nullable efeArrears cannot be null');
        }
        $this->container['efeArrears'] = $efeArrears;

        return $this;
    }

    /**
     * Gets prestonContributions
     *
     * @return float|null
     */
    public function getPrestonContributions(): ?float
    {
        return $this->container['prestonContributions'];
    }

    /**
     * Sets prestonContributions
     *
     * @param float|null $prestonContributions prestonContributions
     *
     * @return $this
     */
    public function setPrestonContributions(?float $prestonContributions): static
    {
        if (is_null($prestonContributions)) {
            throw new InvalidArgumentException('non-nullable prestonContributions cannot be null');
        }
        $this->container['prestonContributions'] = $prestonContributions;

        return $this;
    }

    /**
     * Gets tr22ElectionAmounts
     *
     * @return float|null
     */
    public function getTr22ElectionAmounts(): ?float
    {
        return $this->container['tr22ElectionAmounts'];
    }

    /**
     * Sets tr22ElectionAmounts
     *
     * @param float|null $tr22ElectionAmounts tr22ElectionAmounts
     *
     * @return $this
     */
    public function setTr22ElectionAmounts(?float $tr22ElectionAmounts): static
    {
        if (is_null($tr22ElectionAmounts)) {
            throw new InvalidArgumentException('non-nullable tr22ElectionAmounts cannot be null');
        }
        $this->container['tr22ElectionAmounts'] = $tr22ElectionAmounts;

        return $this;
    }

    /**
     * Gets totalExtraContributions
     *
     * @return float|null
     */
    public function getTotalExtraContributions(): ?float
    {
        return $this->container['totalExtraContributions'];
    }

    /**
     * Sets totalExtraContributions
     *
     * @param float|null $totalExtraContributions totalExtraContributions
     *
     * @return $this
     */
    public function setTotalExtraContributions(?float $totalExtraContributions): static
    {
        if (is_null($totalExtraContributions)) {
            throw new InvalidArgumentException('non-nullable totalExtraContributions cannot be null');
        }
        $this->container['totalExtraContributions'] = $totalExtraContributions;

        return $this;
    }

    /**
     * Gets overallBalance
     *
     * @return float|null
     */
    public function getOverallBalance(): ?float
    {
        return $this->container['overallBalance'];
    }

    /**
     * Sets overallBalance
     *
     * @param float|null $overallBalance overallBalance
     *
     * @return $this
     */
    public function setOverallBalance(?float $overallBalance): static
    {
        if (is_null($overallBalance)) {
            throw new InvalidArgumentException('non-nullable overallBalance cannot be null');
        }
        $this->container['overallBalance'] = $overallBalance;

        return $this;
    }

    /**
     * Gets employersContributionPercentage
     *
     * @return float|null
     */
    public function getEmployersContributionPercentage(): ?float
    {
        return $this->container['employersContributionPercentage'];
    }

    /**
     * Sets employersContributionPercentage
     *
     * @param float|null $employersContributionPercentage employersContributionPercentage
     *
     * @return $this
     */
    public function setEmployersContributionPercentage(?float $employersContributionPercentage): static
    {
        if (is_null($employersContributionPercentage)) {
            throw new InvalidArgumentException('non-nullable employersContributionPercentage cannot be null');
        }
        $this->container['employersContributionPercentage'] = $employersContributionPercentage;

        return $this;
    }

    /**
     * Gets totalContributorySalary
     *
     * @return float|null
     */
    public function getTotalContributorySalary(): ?float
    {
        return $this->container['totalContributorySalary'];
    }

    /**
     * Sets totalContributorySalary
     *
     * @param float|null $totalContributorySalary totalContributorySalary
     *
     * @return $this
     */
    public function setTotalContributorySalary(?float $totalContributorySalary): static
    {
        if (is_null($totalContributorySalary)) {
            throw new InvalidArgumentException('non-nullable totalContributorySalary cannot be null');
        }
        $this->container['totalContributorySalary'] = $totalContributorySalary;

        return $this;
    }

    /**
     * Gets totalTeachersContributions
     *
     * @return float|null
     */
    public function getTotalTeachersContributions(): ?float
    {
        return $this->container['totalTeachersContributions'];
    }

    /**
     * Sets totalTeachersContributions
     *
     * @param float|null $totalTeachersContributions totalTeachersContributions
     *
     * @return $this
     */
    public function setTotalTeachersContributions(?float $totalTeachersContributions): static
    {
        if (is_null($totalTeachersContributions)) {
            throw new InvalidArgumentException('non-nullable totalTeachersContributions cannot be null');
        }
        $this->container['totalTeachersContributions'] = $totalTeachersContributions;

        return $this;
    }

    /**
     * Gets totalEmployersContributions
     *
     * @return float|null
     */
    public function getTotalEmployersContributions(): ?float
    {
        return $this->container['totalEmployersContributions'];
    }

    /**
     * Sets totalEmployersContributions
     *
     * @param float|null $totalEmployersContributions totalEmployersContributions
     *
     * @return $this
     */
    public function setTotalEmployersContributions(?float $totalEmployersContributions): static
    {
        if (is_null($totalEmployersContributions)) {
            throw new InvalidArgumentException('non-nullable totalEmployersContributions cannot be null');
        }
        $this->container['totalEmployersContributions'] = $totalEmployersContributions;

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


