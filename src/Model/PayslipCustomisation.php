<?php
/**
 * PayslipCustomisation
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
 * PayslipCustomisation Class Doc Comment
 *
 * @description Used to represent any customisations you make to the look of Payslip PDFs.  This is covered in detail in the Guides section.
 * @package  SynergiTech\Staffology
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements ArrayAccess<string, mixed>
 */
class PayslipCustomisation implements ModelInterface, ArrayAccess, JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'PayslipCustomisation';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var array<string, string>
      */
    protected static array $openAPITypes = [
        'custom' => 'bool',
        'includeLogo' => 'bool',
        'customCssOption' => '\SynergiTech\Staffology\Model\ReportCustomCssOption',
        'customCss' => 'string',
        'removeYtd' => 'bool',
        'includeEmployerAddress' => 'bool',
        'useUmbrellaFormat' => 'bool',
        'filename' => 'string',
        'includeDepartment' => 'bool',
        'includeHealthAndSocialCareMessage' => 'bool',
        'includeBenefits' => 'bool',
        'paperSize' => '\SynergiTech\Staffology\Model\PdfPaperSize',
        'orientation' => '\SynergiTech\Staffology\Model\PdfPaperOrientation',
        'margins' => '\SynergiTech\Staffology\Model\PdfPaperMargins',
        'id' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'custom' => null,
        'includeLogo' => null,
        'customCssOption' => null,
        'customCss' => null,
        'removeYtd' => null,
        'includeEmployerAddress' => null,
        'useUmbrellaFormat' => null,
        'filename' => null,
        'includeDepartment' => null,
        'includeHealthAndSocialCareMessage' => null,
        'includeBenefits' => null,
        'paperSize' => null,
        'orientation' => null,
        'margins' => null,
        'id' => 'uuid'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var array<string, bool>
      */
    protected static array $openAPINullables = [
        'custom' => false,
        'includeLogo' => false,
        'customCssOption' => false,
        'customCss' => true,
        'removeYtd' => false,
        'includeEmployerAddress' => false,
        'useUmbrellaFormat' => false,
        'filename' => true,
        'includeDepartment' => false,
        'includeHealthAndSocialCareMessage' => false,
        'includeBenefits' => false,
        'paperSize' => false,
        'orientation' => false,
        'margins' => false,
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
        'custom' => 'custom',
        'includeLogo' => 'includeLogo',
        'customCssOption' => 'customCssOption',
        'customCss' => 'customCss',
        'removeYtd' => 'removeYtd',
        'includeEmployerAddress' => 'includeEmployerAddress',
        'useUmbrellaFormat' => 'useUmbrellaFormat',
        'filename' => 'filename',
        'includeDepartment' => 'includeDepartment',
        'includeHealthAndSocialCareMessage' => 'includeHealthAndSocialCareMessage',
        'includeBenefits' => 'includeBenefits',
        'paperSize' => 'paperSize',
        'orientation' => 'orientation',
        'margins' => 'margins',
        'id' => 'id'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var array<string, string>
     */
    protected static array $setters = [
        'custom' => 'setCustom',
        'includeLogo' => 'setIncludeLogo',
        'customCssOption' => 'setCustomCssOption',
        'customCss' => 'setCustomCss',
        'removeYtd' => 'setRemoveYtd',
        'includeEmployerAddress' => 'setIncludeEmployerAddress',
        'useUmbrellaFormat' => 'setUseUmbrellaFormat',
        'filename' => 'setFilename',
        'includeDepartment' => 'setIncludeDepartment',
        'includeHealthAndSocialCareMessage' => 'setIncludeHealthAndSocialCareMessage',
        'includeBenefits' => 'setIncludeBenefits',
        'paperSize' => 'setPaperSize',
        'orientation' => 'setOrientation',
        'margins' => 'setMargins',
        'id' => 'setId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var array<string, string>
     */
    protected static array $getters = [
        'custom' => 'getCustom',
        'includeLogo' => 'getIncludeLogo',
        'customCssOption' => 'getCustomCssOption',
        'customCss' => 'getCustomCss',
        'removeYtd' => 'getRemoveYtd',
        'includeEmployerAddress' => 'getIncludeEmployerAddress',
        'useUmbrellaFormat' => 'getUseUmbrellaFormat',
        'filename' => 'getFilename',
        'includeDepartment' => 'getIncludeDepartment',
        'includeHealthAndSocialCareMessage' => 'getIncludeHealthAndSocialCareMessage',
        'includeBenefits' => 'getIncludeBenefits',
        'paperSize' => 'getPaperSize',
        'orientation' => 'getOrientation',
        'margins' => 'getMargins',
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
        $this->setIfExists('custom', $data ?? [], null);
        $this->setIfExists('includeLogo', $data ?? [], null);
        $this->setIfExists('customCssOption', $data ?? [], null);
        $this->setIfExists('customCss', $data ?? [], null);
        $this->setIfExists('removeYtd', $data ?? [], null);
        $this->setIfExists('includeEmployerAddress', $data ?? [], null);
        $this->setIfExists('useUmbrellaFormat', $data ?? [], null);
        $this->setIfExists('filename', $data ?? [], null);
        $this->setIfExists('includeDepartment', $data ?? [], null);
        $this->setIfExists('includeHealthAndSocialCareMessage', $data ?? [], null);
        $this->setIfExists('includeBenefits', $data ?? [], null);
        $this->setIfExists('paperSize', $data ?? [], null);
        $this->setIfExists('orientation', $data ?? [], null);
        $this->setIfExists('margins', $data ?? [], null);
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

        if (!is_null($this->container['customCss']) && (mb_strlen($this->container['customCss']) > 2500)) {
            $invalidProperties[] = "invalid value for 'customCss', the character length must be smaller than or equal to 2500.";
        }

        if (!is_null($this->container['filename']) && (mb_strlen($this->container['filename']) > 200)) {
            $invalidProperties[] = "invalid value for 'filename', the character length must be smaller than or equal to 200.";
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
     * Gets custom
     *
     * @return bool|null
     */
    public function getCustom(): ?bool
    {
        return $this->container['custom'];
    }

    /**
     * Sets custom
     *
     * @param bool|null $custom Whether or not you are customising the Payslip.  This should always be true if you are providing any other values.
     *
     * @return $this
     */
    public function setCustom(?bool $custom): static
    {
        if (is_null($custom)) {
            throw new InvalidArgumentException('non-nullable custom cannot be null');
        }
        $this->container['custom'] = $custom;

        return $this;
    }

    /**
     * Gets includeLogo
     *
     * @return bool|null
     */
    public function getIncludeLogo(): ?bool
    {
        return $this->container['includeLogo'];
    }

    /**
     * Sets includeLogo
     *
     * @param bool|null $includeLogo Whether or not to include the employer logo on the payslip.
     *
     * @return $this
     */
    public function setIncludeLogo(?bool $includeLogo): static
    {
        if (is_null($includeLogo)) {
            throw new InvalidArgumentException('non-nullable includeLogo cannot be null');
        }
        $this->container['includeLogo'] = $includeLogo;

        return $this;
    }

    /**
     * Gets customCssOption
     *
     * @return \SynergiTech\Staffology\Model\ReportCustomCssOption|null
     */
    public function getCustomCssOption(): ?\SynergiTech\Staffology\Model\ReportCustomCssOption
    {
        return $this->container['customCssOption'];
    }

    /**
     * Sets customCssOption
     *
     * @param \SynergiTech\Staffology\Model\ReportCustomCssOption|null $customCssOption customCssOption
     *
     * @return $this
     */
    public function setCustomCssOption(?\SynergiTech\Staffology\Model\ReportCustomCssOption $customCssOption): static
    {
        if (is_null($customCssOption)) {
            throw new InvalidArgumentException('non-nullable customCssOption cannot be null');
        }
        $this->container['customCssOption'] = $customCssOption;

        return $this;
    }

    /**
     * Gets customCss
     *
     * @return string|null
     */
    public function getCustomCss(): ?string
    {
        return $this->container['customCss'];
    }

    /**
     * Sets customCss
     *
     * @param string|null $customCss customCss
     *
     * @return $this
     */
    public function setCustomCss(?string $customCss): static
    {
        if (is_null($customCss)) {
            array_push($this->openAPINullablesSetToNull, 'customCss');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('customCss', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($customCss) && (mb_strlen($customCss) > 2500)) {
            throw new InvalidArgumentException('invalid length for $customCss when calling PayslipCustomisation., must be smaller than or equal to 2500.');
        }

        $this->container['customCss'] = $customCss;

        return $this;
    }

    /**
     * Gets removeYtd
     *
     * @return bool|null
     */
    public function getRemoveYtd(): ?bool
    {
        return $this->container['removeYtd'];
    }

    /**
     * Sets removeYtd
     *
     * @param bool|null $removeYtd Whether or not to remove the YTD column
     *
     * @return $this
     */
    public function setRemoveYtd(?bool $removeYtd): static
    {
        if (is_null($removeYtd)) {
            throw new InvalidArgumentException('non-nullable removeYtd cannot be null');
        }
        $this->container['removeYtd'] = $removeYtd;

        return $this;
    }

    /**
     * Gets includeEmployerAddress
     *
     * @return bool|null
     */
    public function getIncludeEmployerAddress(): ?bool
    {
        return $this->container['includeEmployerAddress'];
    }

    /**
     * Sets includeEmployerAddress
     *
     * @param bool|null $includeEmployerAddress Whether or not to include the employer address
     *
     * @return $this
     */
    public function setIncludeEmployerAddress(?bool $includeEmployerAddress): static
    {
        if (is_null($includeEmployerAddress)) {
            throw new InvalidArgumentException('non-nullable includeEmployerAddress cannot be null');
        }
        $this->container['includeEmployerAddress'] = $includeEmployerAddress;

        return $this;
    }

    /**
     * Gets useUmbrellaFormat
     *
     * @return bool|null
     */
    public function getUseUmbrellaFormat(): ?bool
    {
        return $this->container['useUmbrellaFormat'];
    }

    /**
     * Sets useUmbrellaFormat
     *
     * @param bool|null $useUmbrellaFormat If true then the format the payslip will include details of the Umbrella Payment as well as employer costs
     *
     * @return $this
     */
    public function setUseUmbrellaFormat(?bool $useUmbrellaFormat): static
    {
        if (is_null($useUmbrellaFormat)) {
            throw new InvalidArgumentException('non-nullable useUmbrellaFormat cannot be null');
        }
        $this->container['useUmbrellaFormat'] = $useUmbrellaFormat;

        return $this;
    }

    /**
     * Gets filename
     *
     * @return string|null
     */
    public function getFilename(): ?string
    {
        return $this->container['filename'];
    }

    /**
     * Sets filename
     *
     * @param string|null $filename filename
     *
     * @return $this
     */
    public function setFilename(?string $filename): static
    {
        if (is_null($filename)) {
            array_push($this->openAPINullablesSetToNull, 'filename');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('filename', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($filename) && (mb_strlen($filename) > 200)) {
            throw new InvalidArgumentException('invalid length for $filename when calling PayslipCustomisation., must be smaller than or equal to 200.');
        }

        $this->container['filename'] = $filename;

        return $this;
    }

    /**
     * Gets includeDepartment
     *
     * @return bool|null
     */
    public function getIncludeDepartment(): ?bool
    {
        return $this->container['includeDepartment'];
    }

    /**
     * Sets includeDepartment
     *
     * @param bool|null $includeDepartment Whether or not to include the primary department of the employee on the payslip
     *
     * @return $this
     */
    public function setIncludeDepartment(?bool $includeDepartment): static
    {
        if (is_null($includeDepartment)) {
            throw new InvalidArgumentException('non-nullable includeDepartment cannot be null');
        }
        $this->container['includeDepartment'] = $includeDepartment;

        return $this;
    }

    /**
     * Gets includeHealthAndSocialCareMessage
     *
     * @return bool|null
     */
    public function getIncludeHealthAndSocialCareMessage(): ?bool
    {
        return $this->container['includeHealthAndSocialCareMessage'];
    }

    /**
     * Sets includeHealthAndSocialCareMessage
     *
     * @param bool|null $includeHealthAndSocialCareMessage Whether or not to include health and social car message
     *
     * @return $this
     */
    public function setIncludeHealthAndSocialCareMessage(?bool $includeHealthAndSocialCareMessage): static
    {
        if (is_null($includeHealthAndSocialCareMessage)) {
            throw new InvalidArgumentException('non-nullable includeHealthAndSocialCareMessage cannot be null');
        }
        $this->container['includeHealthAndSocialCareMessage'] = $includeHealthAndSocialCareMessage;

        return $this;
    }

    /**
     * Gets includeBenefits
     *
     * @return bool|null
     */
    public function getIncludeBenefits(): ?bool
    {
        return $this->container['includeBenefits'];
    }

    /**
     * Sets includeBenefits
     *
     * @param bool|null $includeBenefits Whether or not to include any payrolled benefits
     *
     * @return $this
     */
    public function setIncludeBenefits(?bool $includeBenefits): static
    {
        if (is_null($includeBenefits)) {
            throw new InvalidArgumentException('non-nullable includeBenefits cannot be null');
        }
        $this->container['includeBenefits'] = $includeBenefits;

        return $this;
    }

    /**
     * Gets paperSize
     *
     * @return \SynergiTech\Staffology\Model\PdfPaperSize|null
     */
    public function getPaperSize(): ?\SynergiTech\Staffology\Model\PdfPaperSize
    {
        return $this->container['paperSize'];
    }

    /**
     * Sets paperSize
     *
     * @param \SynergiTech\Staffology\Model\PdfPaperSize|null $paperSize paperSize
     *
     * @return $this
     */
    public function setPaperSize(?\SynergiTech\Staffology\Model\PdfPaperSize $paperSize): static
    {
        if (is_null($paperSize)) {
            throw new InvalidArgumentException('non-nullable paperSize cannot be null');
        }
        $this->container['paperSize'] = $paperSize;

        return $this;
    }

    /**
     * Gets orientation
     *
     * @return \SynergiTech\Staffology\Model\PdfPaperOrientation|null
     */
    public function getOrientation(): ?\SynergiTech\Staffology\Model\PdfPaperOrientation
    {
        return $this->container['orientation'];
    }

    /**
     * Sets orientation
     *
     * @param \SynergiTech\Staffology\Model\PdfPaperOrientation|null $orientation orientation
     *
     * @return $this
     */
    public function setOrientation(?\SynergiTech\Staffology\Model\PdfPaperOrientation $orientation): static
    {
        if (is_null($orientation)) {
            throw new InvalidArgumentException('non-nullable orientation cannot be null');
        }
        $this->container['orientation'] = $orientation;

        return $this;
    }

    /**
     * Gets margins
     *
     * @return \SynergiTech\Staffology\Model\PdfPaperMargins|null
     */
    public function getMargins(): ?\SynergiTech\Staffology\Model\PdfPaperMargins
    {
        return $this->container['margins'];
    }

    /**
     * Sets margins
     *
     * @param \SynergiTech\Staffology\Model\PdfPaperMargins|null $margins margins
     *
     * @return $this
     */
    public function setMargins(?\SynergiTech\Staffology\Model\PdfPaperMargins $margins): static
    {
        if (is_null($margins)) {
            throw new InvalidArgumentException('non-nullable margins cannot be null');
        }
        $this->container['margins'] = $margins;

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


