<?php
/**
 * PayOptionsImport
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
 * PayOptionsImport Class Doc Comment
 *
 * @description This object is used to import payment information for a payrun entry
 * @package  SynergiTech\Staffology
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements ArrayAccess<string, mixed>
 */
class PayOptionsImport implements ModelInterface, ArrayAccess, JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'PayOptionsImport';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var array<string, string>
      */
    protected static array $openAPITypes = [
        'employerIdentifier' => 'string',
        'payrollCode' => 'string',
        'payAmount' => 'float',
        'basis' => '\SynergiTech\Staffology\Model\PayBasis',
        'payCode' => 'string',
        'roleReference' => 'string',
        'payAmountMultiplier' => 'float',
        'note' => 'string',
        'tags' => 'string[]',
        'isNetToGross' => 'bool',
        'department' => 'string',
        'costCentre' => 'string',
        'analysisCategoryCodes' => '\SynergiTech\Staffology\Model\AnalysisCategoryCodes[]',
        'lines' => '\SynergiTech\Staffology\Model\PayLine[]',
        'effectiveFrom' => '\DateTime',
        'effectiveTo' => '\DateTime',
        'isAutomaticBackPay' => 'bool',
        'ignoreInitialBackPay' => 'bool',
        'contributesToBasicPay' => 'bool',
        'autoAdjustForLeave' => 'bool',
        'paySpine' => 'string',
        'payGrade' => 'string',
        'spinePoint' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'employerIdentifier' => null,
        'payrollCode' => null,
        'payAmount' => 'double',
        'basis' => null,
        'payCode' => null,
        'roleReference' => null,
        'payAmountMultiplier' => 'double',
        'note' => null,
        'tags' => null,
        'isNetToGross' => null,
        'department' => null,
        'costCentre' => null,
        'analysisCategoryCodes' => null,
        'lines' => null,
        'effectiveFrom' => 'date',
        'effectiveTo' => 'date',
        'isAutomaticBackPay' => null,
        'ignoreInitialBackPay' => null,
        'contributesToBasicPay' => null,
        'autoAdjustForLeave' => null,
        'paySpine' => null,
        'payGrade' => null,
        'spinePoint' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var array<string, bool>
      */
    protected static array $openAPINullables = [
        'employerIdentifier' => true,
        'payrollCode' => true,
        'payAmount' => false,
        'basis' => false,
        'payCode' => true,
        'roleReference' => true,
        'payAmountMultiplier' => false,
        'note' => true,
        'tags' => true,
        'isNetToGross' => false,
        'department' => true,
        'costCentre' => true,
        'analysisCategoryCodes' => true,
        'lines' => true,
        'effectiveFrom' => true,
        'effectiveTo' => true,
        'isAutomaticBackPay' => false,
        'ignoreInitialBackPay' => false,
        'contributesToBasicPay' => false,
        'autoAdjustForLeave' => false,
        'paySpine' => true,
        'payGrade' => true,
        'spinePoint' => true
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
        'employerIdentifier' => 'employerIdentifier',
        'payrollCode' => 'payrollCode',
        'payAmount' => 'payAmount',
        'basis' => 'basis',
        'payCode' => 'payCode',
        'roleReference' => 'roleReference',
        'payAmountMultiplier' => 'payAmountMultiplier',
        'note' => 'note',
        'tags' => 'tags',
        'isNetToGross' => 'isNetToGross',
        'department' => 'department',
        'costCentre' => 'costCentre',
        'analysisCategoryCodes' => 'analysisCategoryCodes',
        'lines' => 'lines',
        'effectiveFrom' => 'effectiveFrom',
        'effectiveTo' => 'effectiveTo',
        'isAutomaticBackPay' => 'isAutomaticBackPay',
        'ignoreInitialBackPay' => 'ignoreInitialBackPay',
        'contributesToBasicPay' => 'contributesToBasicPay',
        'autoAdjustForLeave' => 'autoAdjustForLeave',
        'paySpine' => 'paySpine',
        'payGrade' => 'payGrade',
        'spinePoint' => 'spinePoint'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var array<string, string>
     */
    protected static array $setters = [
        'employerIdentifier' => 'setEmployerIdentifier',
        'payrollCode' => 'setPayrollCode',
        'payAmount' => 'setPayAmount',
        'basis' => 'setBasis',
        'payCode' => 'setPayCode',
        'roleReference' => 'setRoleReference',
        'payAmountMultiplier' => 'setPayAmountMultiplier',
        'note' => 'setNote',
        'tags' => 'setTags',
        'isNetToGross' => 'setIsNetToGross',
        'department' => 'setDepartment',
        'costCentre' => 'setCostCentre',
        'analysisCategoryCodes' => 'setAnalysisCategoryCodes',
        'lines' => 'setLines',
        'effectiveFrom' => 'setEffectiveFrom',
        'effectiveTo' => 'setEffectiveTo',
        'isAutomaticBackPay' => 'setIsAutomaticBackPay',
        'ignoreInitialBackPay' => 'setIgnoreInitialBackPay',
        'contributesToBasicPay' => 'setContributesToBasicPay',
        'autoAdjustForLeave' => 'setAutoAdjustForLeave',
        'paySpine' => 'setPaySpine',
        'payGrade' => 'setPayGrade',
        'spinePoint' => 'setSpinePoint'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var array<string, string>
     */
    protected static array $getters = [
        'employerIdentifier' => 'getEmployerIdentifier',
        'payrollCode' => 'getPayrollCode',
        'payAmount' => 'getPayAmount',
        'basis' => 'getBasis',
        'payCode' => 'getPayCode',
        'roleReference' => 'getRoleReference',
        'payAmountMultiplier' => 'getPayAmountMultiplier',
        'note' => 'getNote',
        'tags' => 'getTags',
        'isNetToGross' => 'getIsNetToGross',
        'department' => 'getDepartment',
        'costCentre' => 'getCostCentre',
        'analysisCategoryCodes' => 'getAnalysisCategoryCodes',
        'lines' => 'getLines',
        'effectiveFrom' => 'getEffectiveFrom',
        'effectiveTo' => 'getEffectiveTo',
        'isAutomaticBackPay' => 'getIsAutomaticBackPay',
        'ignoreInitialBackPay' => 'getIgnoreInitialBackPay',
        'contributesToBasicPay' => 'getContributesToBasicPay',
        'autoAdjustForLeave' => 'getAutoAdjustForLeave',
        'paySpine' => 'getPaySpine',
        'payGrade' => 'getPayGrade',
        'spinePoint' => 'getSpinePoint'
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
        $this->setIfExists('employerIdentifier', $data ?? [], null);
        $this->setIfExists('payrollCode', $data ?? [], null);
        $this->setIfExists('payAmount', $data ?? [], null);
        $this->setIfExists('basis', $data ?? [], null);
        $this->setIfExists('payCode', $data ?? [], null);
        $this->setIfExists('roleReference', $data ?? [], null);
        $this->setIfExists('payAmountMultiplier', $data ?? [], null);
        $this->setIfExists('note', $data ?? [], null);
        $this->setIfExists('tags', $data ?? [], null);
        $this->setIfExists('isNetToGross', $data ?? [], null);
        $this->setIfExists('department', $data ?? [], null);
        $this->setIfExists('costCentre', $data ?? [], null);
        $this->setIfExists('analysisCategoryCodes', $data ?? [], null);
        $this->setIfExists('lines', $data ?? [], null);
        $this->setIfExists('effectiveFrom', $data ?? [], null);
        $this->setIfExists('effectiveTo', $data ?? [], null);
        $this->setIfExists('isAutomaticBackPay', $data ?? [], null);
        $this->setIfExists('ignoreInitialBackPay', $data ?? [], null);
        $this->setIfExists('contributesToBasicPay', $data ?? [], null);
        $this->setIfExists('autoAdjustForLeave', $data ?? [], null);
        $this->setIfExists('paySpine', $data ?? [], null);
        $this->setIfExists('payGrade', $data ?? [], null);
        $this->setIfExists('spinePoint', $data ?? [], null);
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
     * Gets employerIdentifier
     *
     * @return string|null
     */
    public function getEmployerIdentifier(): ?string
    {
        return $this->container['employerIdentifier'];
    }

    /**
     * Sets employerIdentifier
     *
     * @param string|null $employerIdentifier Optional. But if one entry has it then all must.  Allows you to import to multiple employers by specifying the Employers AlternativeIdentifier
     *
     * @return $this
     */
    public function setEmployerIdentifier(?string $employerIdentifier): static
    {
        if (is_null($employerIdentifier)) {
            array_push($this->openAPINullablesSetToNull, 'employerIdentifier');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('employerIdentifier', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['employerIdentifier'] = $employerIdentifier;

        return $this;
    }

    /**
     * Gets payrollCode
     *
     * @return string|null
     */
    public function getPayrollCode(): ?string
    {
        return $this->container['payrollCode'];
    }

    /**
     * Sets payrollCode
     *
     * @param string|null $payrollCode The payroll code of the employee to update
     *
     * @return $this
     */
    public function setPayrollCode(?string $payrollCode): static
    {
        if (is_null($payrollCode)) {
            array_push($this->openAPINullablesSetToNull, 'payrollCode');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('payrollCode', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['payrollCode'] = $payrollCode;

        return $this;
    }

    /**
     * Gets payAmount
     *
     * @return float|null
     */
    public function getPayAmount(): ?float
    {
        return $this->container['payAmount'];
    }

    /**
     * Sets payAmount
     *
     * @param float|null $payAmount The amount the Employee is regularly paid each period
     *
     * @return $this
     */
    public function setPayAmount(?float $payAmount): static
    {
        if (is_null($payAmount)) {
            throw new InvalidArgumentException('non-nullable payAmount cannot be null');
        }
        $this->container['payAmount'] = $payAmount;

        return $this;
    }

    /**
     * Gets basis
     *
     * @return \SynergiTech\Staffology\Model\PayBasis|null
     */
    public function getBasis(): ?\SynergiTech\Staffology\Model\PayBasis
    {
        return $this->container['basis'];
    }

    /**
     * Sets basis
     *
     * @param \SynergiTech\Staffology\Model\PayBasis|null $basis basis
     *
     * @return $this
     */
    public function setBasis(?\SynergiTech\Staffology\Model\PayBasis $basis): static
    {
        if (is_null($basis)) {
            throw new InvalidArgumentException('non-nullable basis cannot be null');
        }
        $this->container['basis'] = $basis;

        return $this;
    }

    /**
     * Gets payCode
     *
     * @return string|null
     */
    public function getPayCode(): ?string
    {
        return $this->container['payCode'];
    }

    /**
     * Sets payCode
     *
     * @param string|null $payCode If you want to override the PayCode used for the Basic Pay then set the code here, otherwise leave this blank and the default will be used.
     *
     * @return $this
     */
    public function setPayCode(?string $payCode): static
    {
        if (is_null($payCode)) {
            array_push($this->openAPINullablesSetToNull, 'payCode');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('payCode', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['payCode'] = $payCode;

        return $this;
    }

    /**
     * Gets roleReference
     *
     * @return string|null
     */
    public function getRoleReference(): ?string
    {
        return $this->container['roleReference'];
    }

    /**
     * Sets roleReference
     *
     * @param string|null $roleReference This is the unique reference of the Role that the employee is assigned to.
     *
     * @return $this
     */
    public function setRoleReference(?string $roleReference): static
    {
        if (is_null($roleReference)) {
            array_push($this->openAPINullablesSetToNull, 'roleReference');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('roleReference', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['roleReference'] = $roleReference;

        return $this;
    }

    /**
     * Gets payAmountMultiplier
     *
     * @return float|null
     */
    public function getPayAmountMultiplier(): ?float
    {
        return $this->container['payAmountMultiplier'];
    }

    /**
     * Sets payAmountMultiplier
     *
     * @param float|null $payAmountMultiplier This property is irrelevant if the basis is Monthly.  But if the basis is Daily or Hourly then this property sets how many days/hours the employee should be paid for in the period.
     *
     * @return $this
     */
    public function setPayAmountMultiplier(?float $payAmountMultiplier): static
    {
        if (is_null($payAmountMultiplier)) {
            throw new InvalidArgumentException('non-nullable payAmountMultiplier cannot be null');
        }
        $this->container['payAmountMultiplier'] = $payAmountMultiplier;

        return $this;
    }

    /**
     * Gets note
     *
     * @return string|null
     */
    public function getNote(): ?string
    {
        return $this->container['note'];
    }

    /**
     * Sets note
     *
     * @param string|null $note Any note that you'd like to appear on the payslip
     *
     * @return $this
     */
    public function setNote(?string $note): static
    {
        if (is_null($note)) {
            array_push($this->openAPINullablesSetToNull, 'note');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('note', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['note'] = $note;

        return $this;
    }

    /**
     * Gets tags
     *
     * @return string[]|null
     */
    public function getTags(): ?array
    {
        return $this->container['tags'];
    }

    /**
     * Sets tags
     *
     * @param string[]|null $tags tags
     *
     * @return $this
     */
    public function setTags(?array $tags): static
    {
        if (is_null($tags)) {
            array_push($this->openAPINullablesSetToNull, 'tags');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('tags', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['tags'] = $tags;

        return $this;
    }

    /**
     * Gets isNetToGross
     *
     * @return bool|null
     */
    public function getIsNetToGross(): ?bool
    {
        return $this->container['isNetToGross'];
    }

    /**
     * Sets isNetToGross
     *
     * @param bool|null $isNetToGross isNetToGross
     *
     * @return $this
     */
    public function setIsNetToGross(?bool $isNetToGross): static
    {
        if (is_null($isNetToGross)) {
            throw new InvalidArgumentException('non-nullable isNetToGross cannot be null');
        }
        $this->container['isNetToGross'] = $isNetToGross;

        return $this;
    }

    /**
     * Gets department
     *
     * @return string|null
     */
    public function getDepartment(): ?string
    {
        return $this->container['department'];
    }

    /**
     * Sets department
     *
     * @param string|null $department Any Department that you'd like to appear on the payslip
     *
     * @return $this
     */
    public function setDepartment(?string $department): static
    {
        if (is_null($department)) {
            array_push($this->openAPINullablesSetToNull, 'department');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('department', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['department'] = $department;

        return $this;
    }

    /**
     * Gets costCentre
     *
     * @return string|null
     */
    public function getCostCentre(): ?string
    {
        return $this->container['costCentre'];
    }

    /**
     * Sets costCentre
     *
     * @param string|null $costCentre Any CostCentre that you'd like to appear on the payslip
     *
     * @return $this
     */
    public function setCostCentre(?string $costCentre): static
    {
        if (is_null($costCentre)) {
            array_push($this->openAPINullablesSetToNull, 'costCentre');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('costCentre', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['costCentre'] = $costCentre;

        return $this;
    }

    /**
     * Gets analysisCategoryCodes
     *
     * @return \SynergiTech\Staffology\Model\AnalysisCategoryCodes[]|null
     */
    public function getAnalysisCategoryCodes(): ?array
    {
        return $this->container['analysisCategoryCodes'];
    }

    /**
     * Sets analysisCategoryCodes
     *
     * @param \SynergiTech\Staffology\Model\AnalysisCategoryCodes[]|null $analysisCategoryCodes List of Analysis Category Codes associated with this item on the payslip.
     *
     * @return $this
     */
    public function setAnalysisCategoryCodes(?array $analysisCategoryCodes): static
    {
        if (is_null($analysisCategoryCodes)) {
            array_push($this->openAPINullablesSetToNull, 'analysisCategoryCodes');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('analysisCategoryCodes', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['analysisCategoryCodes'] = $analysisCategoryCodes;

        return $this;
    }

    /**
     * Gets lines
     *
     * @return \SynergiTech\Staffology\Model\PayLine[]|null
     */
    public function getLines(): ?array
    {
        return $this->container['lines'];
    }

    /**
     * Sets lines
     *
     * @param \SynergiTech\Staffology\Model\PayLine[]|null $lines lines
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
     * @param \DateTime|null $effectiveFrom EffectiveFrom date for imported pay lines
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
     * Gets effectiveTo
     *
     * @return \DateTime|null
     */
    public function getEffectiveTo(): ?\DateTime
    {
        return $this->container['effectiveTo'];
    }

    /**
     * Sets effectiveTo
     *
     * @param \DateTime|null $effectiveTo EffectiveTo date for imported pay lines
     *
     * @return $this
     */
    public function setEffectiveTo(?\DateTime $effectiveTo): static
    {
        if (is_null($effectiveTo)) {
            array_push($this->openAPINullablesSetToNull, 'effectiveTo');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('effectiveTo', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['effectiveTo'] = $effectiveTo;

        return $this;
    }

    /**
     * Gets isAutomaticBackPay
     *
     * @return bool|null
     */
    public function getIsAutomaticBackPay(): ?bool
    {
        return $this->container['isAutomaticBackPay'];
    }

    /**
     * Sets isAutomaticBackPay
     *
     * @param bool|null $isAutomaticBackPay IsAutomaticBackPay for imported pay lines
     *
     * @return $this
     */
    public function setIsAutomaticBackPay(?bool $isAutomaticBackPay): static
    {
        if (is_null($isAutomaticBackPay)) {
            throw new InvalidArgumentException('non-nullable isAutomaticBackPay cannot be null');
        }
        $this->container['isAutomaticBackPay'] = $isAutomaticBackPay;

        return $this;
    }

    /**
     * Gets ignoreInitialBackPay
     *
     * @return bool|null
     */
    public function getIgnoreInitialBackPay(): ?bool
    {
        return $this->container['ignoreInitialBackPay'];
    }

    /**
     * Sets ignoreInitialBackPay
     *
     * @param bool|null $ignoreInitialBackPay IgnoreInitialBackPay for imported pay lines
     *
     * @return $this
     */
    public function setIgnoreInitialBackPay(?bool $ignoreInitialBackPay): static
    {
        if (is_null($ignoreInitialBackPay)) {
            throw new InvalidArgumentException('non-nullable ignoreInitialBackPay cannot be null');
        }
        $this->container['ignoreInitialBackPay'] = $ignoreInitialBackPay;

        return $this;
    }

    /**
     * Gets contributesToBasicPay
     *
     * @return bool|null
     */
    public function getContributesToBasicPay(): ?bool
    {
        return $this->container['contributesToBasicPay'];
    }

    /**
     * Sets contributesToBasicPay
     *
     * @param bool|null $contributesToBasicPay ContributesToBasicPay for imported pay lines
     *
     * @return $this
     */
    public function setContributesToBasicPay(?bool $contributesToBasicPay): static
    {
        if (is_null($contributesToBasicPay)) {
            throw new InvalidArgumentException('non-nullable contributesToBasicPay cannot be null');
        }
        $this->container['contributesToBasicPay'] = $contributesToBasicPay;

        return $this;
    }

    /**
     * Gets autoAdjustForLeave
     *
     * @return bool|null
     */
    public function getAutoAdjustForLeave(): ?bool
    {
        return $this->container['autoAdjustForLeave'];
    }

    /**
     * Sets autoAdjustForLeave
     *
     * @param bool|null $autoAdjustForLeave AutoAdjustForLeave for imported pay lines
     *
     * @return $this
     */
    public function setAutoAdjustForLeave(?bool $autoAdjustForLeave): static
    {
        if (is_null($autoAdjustForLeave)) {
            throw new InvalidArgumentException('non-nullable autoAdjustForLeave cannot be null');
        }
        $this->container['autoAdjustForLeave'] = $autoAdjustForLeave;

        return $this;
    }

    /**
     * Gets paySpine
     *
     * @return string|null
     */
    public function getPaySpine(): ?string
    {
        return $this->container['paySpine'];
    }

    /**
     * Sets paySpine
     *
     * @param string|null $paySpine PaySpine for imported pay lines
     *
     * @return $this
     */
    public function setPaySpine(?string $paySpine): static
    {
        if (is_null($paySpine)) {
            array_push($this->openAPINullablesSetToNull, 'paySpine');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('paySpine', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['paySpine'] = $paySpine;

        return $this;
    }

    /**
     * Gets payGrade
     *
     * @return string|null
     */
    public function getPayGrade(): ?string
    {
        return $this->container['payGrade'];
    }

    /**
     * Sets payGrade
     *
     * @param string|null $payGrade PayGrade for imported pay lines
     *
     * @return $this
     */
    public function setPayGrade(?string $payGrade): static
    {
        if (is_null($payGrade)) {
            array_push($this->openAPINullablesSetToNull, 'payGrade');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('payGrade', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['payGrade'] = $payGrade;

        return $this;
    }

    /**
     * Gets spinePoint
     *
     * @return string|null
     */
    public function getSpinePoint(): ?string
    {
        return $this->container['spinePoint'];
    }

    /**
     * Sets spinePoint
     *
     * @param string|null $spinePoint SpinePoint for imported pay lines
     *
     * @return $this
     */
    public function setSpinePoint(?string $spinePoint): static
    {
        if (is_null($spinePoint)) {
            array_push($this->openAPINullablesSetToNull, 'spinePoint');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('spinePoint', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['spinePoint'] = $spinePoint;

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

