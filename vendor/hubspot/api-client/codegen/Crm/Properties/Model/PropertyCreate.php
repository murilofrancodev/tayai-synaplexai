<?php
/**
 * PropertyCreate
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  HubSpot\Client\Crm\Properties
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Properties
 *
 * All HubSpot objects store data in default and custom properties. These endpoints provide access to read and modify object properties in HubSpot.
 *
 * The version of the OpenAPI document: v3
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 7.3.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace HubSpot\Client\Crm\Properties\Model;

use \ArrayAccess;
use \HubSpot\Client\Crm\Properties\ObjectSerializer;

/**
 * PropertyCreate Class Doc Comment
 *
 * @category Class
 * @package  HubSpot\Client\Crm\Properties
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class PropertyCreate implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'PropertyCreate';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'hidden' => 'bool',
        'display_order' => 'int',
        'description' => 'string',
        'label' => 'string',
        'type' => 'string',
        'form_field' => 'bool',
        'group_name' => 'string',
        'referenced_object_type' => 'string',
        'name' => 'string',
        'options' => '\HubSpot\Client\Crm\Properties\Model\OptionInput[]',
        'calculation_formula' => 'string',
        'has_unique_value' => 'bool',
        'field_type' => 'string',
        'external_options' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'hidden' => null,
        'display_order' => 'int32',
        'description' => null,
        'label' => null,
        'type' => null,
        'form_field' => null,
        'group_name' => null,
        'referenced_object_type' => null,
        'name' => null,
        'options' => null,
        'calculation_formula' => null,
        'has_unique_value' => null,
        'field_type' => null,
        'external_options' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'hidden' => false,
        'display_order' => false,
        'description' => false,
        'label' => false,
        'type' => false,
        'form_field' => false,
        'group_name' => false,
        'referenced_object_type' => false,
        'name' => false,
        'options' => false,
        'calculation_formula' => false,
        'has_unique_value' => false,
        'field_type' => false,
        'external_options' => false
    ];

    /**
      * If a nullable field gets set to null, insert it here
      *
      * @var boolean[]
      */
    protected array $openAPINullablesSetToNull = [];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of nullable properties
     *
     * @return array
     */
    protected static function openAPINullables(): array
    {
        return self::$openAPINullables;
    }

    /**
     * Array of nullable field names deliberately set to null
     *
     * @return boolean[]
     */
    private function getOpenAPINullablesSetToNull(): array
    {
        return $this->openAPINullablesSetToNull;
    }

    /**
     * Setter - Array of nullable field names deliberately set to null
     *
     * @param boolean[] $openAPINullablesSetToNull
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
     * @var string[]
     */
    protected static $attributeMap = [
        'hidden' => 'hidden',
        'display_order' => 'displayOrder',
        'description' => 'description',
        'label' => 'label',
        'type' => 'type',
        'form_field' => 'formField',
        'group_name' => 'groupName',
        'referenced_object_type' => 'referencedObjectType',
        'name' => 'name',
        'options' => 'options',
        'calculation_formula' => 'calculationFormula',
        'has_unique_value' => 'hasUniqueValue',
        'field_type' => 'fieldType',
        'external_options' => 'externalOptions'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'hidden' => 'setHidden',
        'display_order' => 'setDisplayOrder',
        'description' => 'setDescription',
        'label' => 'setLabel',
        'type' => 'setType',
        'form_field' => 'setFormField',
        'group_name' => 'setGroupName',
        'referenced_object_type' => 'setReferencedObjectType',
        'name' => 'setName',
        'options' => 'setOptions',
        'calculation_formula' => 'setCalculationFormula',
        'has_unique_value' => 'setHasUniqueValue',
        'field_type' => 'setFieldType',
        'external_options' => 'setExternalOptions'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'hidden' => 'getHidden',
        'display_order' => 'getDisplayOrder',
        'description' => 'getDescription',
        'label' => 'getLabel',
        'type' => 'getType',
        'form_field' => 'getFormField',
        'group_name' => 'getGroupName',
        'referenced_object_type' => 'getReferencedObjectType',
        'name' => 'getName',
        'options' => 'getOptions',
        'calculation_formula' => 'getCalculationFormula',
        'has_unique_value' => 'getHasUniqueValue',
        'field_type' => 'getFieldType',
        'external_options' => 'getExternalOptions'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$openAPIModelName;
    }

    public const TYPE_STRING = 'string';
    public const TYPE_NUMBER = 'number';
    public const TYPE_DATE = 'date';
    public const TYPE_DATETIME = 'datetime';
    public const TYPE_ENUMERATION = 'enumeration';
    public const TYPE_BOOL = 'bool';
    public const FIELD_TYPE_TEXTAREA = 'textarea';
    public const FIELD_TYPE_TEXT = 'text';
    public const FIELD_TYPE_DATE = 'date';
    public const FIELD_TYPE_FILE = 'file';
    public const FIELD_TYPE_NUMBER = 'number';
    public const FIELD_TYPE_SELECT = 'select';
    public const FIELD_TYPE_RADIO = 'radio';
    public const FIELD_TYPE_CHECKBOX = 'checkbox';
    public const FIELD_TYPE_BOOLEANCHECKBOX = 'booleancheckbox';
    public const FIELD_TYPE_CALCULATION_EQUATION = 'calculation_equation';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_STRING,
            self::TYPE_NUMBER,
            self::TYPE_DATE,
            self::TYPE_DATETIME,
            self::TYPE_ENUMERATION,
            self::TYPE_BOOL,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getFieldTypeAllowableValues()
    {
        return [
            self::FIELD_TYPE_TEXTAREA,
            self::FIELD_TYPE_TEXT,
            self::FIELD_TYPE_DATE,
            self::FIELD_TYPE_FILE,
            self::FIELD_TYPE_NUMBER,
            self::FIELD_TYPE_SELECT,
            self::FIELD_TYPE_RADIO,
            self::FIELD_TYPE_CHECKBOX,
            self::FIELD_TYPE_BOOLEANCHECKBOX,
            self::FIELD_TYPE_CALCULATION_EQUATION,
        ];
    }

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->setIfExists('hidden', $data ?? [], null);
        $this->setIfExists('display_order', $data ?? [], null);
        $this->setIfExists('description', $data ?? [], null);
        $this->setIfExists('label', $data ?? [], null);
        $this->setIfExists('type', $data ?? [], null);
        $this->setIfExists('form_field', $data ?? [], null);
        $this->setIfExists('group_name', $data ?? [], null);
        $this->setIfExists('referenced_object_type', $data ?? [], null);
        $this->setIfExists('name', $data ?? [], null);
        $this->setIfExists('options', $data ?? [], null);
        $this->setIfExists('calculation_formula', $data ?? [], null);
        $this->setIfExists('has_unique_value', $data ?? [], null);
        $this->setIfExists('field_type', $data ?? [], null);
        $this->setIfExists('external_options', $data ?? [], null);
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
    private function setIfExists(string $variableName, array $fields, $defaultValue): void
    {
        if (self::isNullable($variableName) && array_key_exists($variableName, $fields) && is_null($fields[$variableName])) {
            $this->openAPINullablesSetToNull[] = $variableName;
        }

        $this->container[$variableName] = $fields[$variableName] ?? $defaultValue;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['label'] === null) {
            $invalidProperties[] = "'label' can't be null";
        }
        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
        }
        $allowedValues = $this->getTypeAllowableValues();
        if (!is_null($this->container['type']) && !in_array($this->container['type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'type', must be one of '%s'",
                $this->container['type'],
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['group_name'] === null) {
            $invalidProperties[] = "'group_name' can't be null";
        }
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['field_type'] === null) {
            $invalidProperties[] = "'field_type' can't be null";
        }
        $allowedValues = $this->getFieldTypeAllowableValues();
        if (!is_null($this->container['field_type']) && !in_array($this->container['field_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'field_type', must be one of '%s'",
                $this->container['field_type'],
                implode("', '", $allowedValues)
            );
        }

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets hidden
     *
     * @return bool|null
     */
    public function getHidden()
    {
        return $this->container['hidden'];
    }

    /**
     * Sets hidden
     *
     * @param bool|null $hidden If true, the property won't be visible and can't be used in HubSpot.
     *
     * @return self
     */
    public function setHidden($hidden)
    {
        if (is_null($hidden)) {
            throw new \InvalidArgumentException('non-nullable hidden cannot be null');
        }
        $this->container['hidden'] = $hidden;

        return $this;
    }

    /**
     * Gets display_order
     *
     * @return int|null
     */
    public function getDisplayOrder()
    {
        return $this->container['display_order'];
    }

    /**
     * Sets display_order
     *
     * @param int|null $display_order Properties are displayed in order starting with the lowest positive integer value. Values of -1 will cause the property to be displayed after any positive values.
     *
     * @return self
     */
    public function setDisplayOrder($display_order)
    {
        if (is_null($display_order)) {
            throw new \InvalidArgumentException('non-nullable display_order cannot be null');
        }
        $this->container['display_order'] = $display_order;

        return $this;
    }

    /**
     * Gets description
     *
     * @return string|null
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string|null $description A description of the property that will be shown as help text in HubSpot.
     *
     * @return self
     */
    public function setDescription($description)
    {
        if (is_null($description)) {
            throw new \InvalidArgumentException('non-nullable description cannot be null');
        }
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets label
     *
     * @return string
     */
    public function getLabel()
    {
        return $this->container['label'];
    }

    /**
     * Sets label
     *
     * @param string $label A human-readable property label that will be shown in HubSpot.
     *
     * @return self
     */
    public function setLabel($label)
    {
        if (is_null($label)) {
            throw new \InvalidArgumentException('non-nullable label cannot be null');
        }
        $this->container['label'] = $label;

        return $this;
    }

    /**
     * Gets type
     *
     * @return string
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param string $type The data type of the property.
     *
     * @return self
     */
    public function setType($type)
    {
        if (is_null($type)) {
            throw new \InvalidArgumentException('non-nullable type cannot be null');
        }
        $allowedValues = $this->getTypeAllowableValues();
        if (!in_array($type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'type', must be one of '%s'",
                    $type,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets form_field
     *
     * @return bool|null
     */
    public function getFormField()
    {
        return $this->container['form_field'];
    }

    /**
     * Sets form_field
     *
     * @param bool|null $form_field Whether or not the property can be used in a HubSpot form.
     *
     * @return self
     */
    public function setFormField($form_field)
    {
        if (is_null($form_field)) {
            throw new \InvalidArgumentException('non-nullable form_field cannot be null');
        }
        $this->container['form_field'] = $form_field;

        return $this;
    }

    /**
     * Gets group_name
     *
     * @return string
     */
    public function getGroupName()
    {
        return $this->container['group_name'];
    }

    /**
     * Sets group_name
     *
     * @param string $group_name The name of the property group the property belongs to.
     *
     * @return self
     */
    public function setGroupName($group_name)
    {
        if (is_null($group_name)) {
            throw new \InvalidArgumentException('non-nullable group_name cannot be null');
        }
        $this->container['group_name'] = $group_name;

        return $this;
    }

    /**
     * Gets referenced_object_type
     *
     * @return string|null
     */
    public function getReferencedObjectType()
    {
        return $this->container['referenced_object_type'];
    }

    /**
     * Sets referenced_object_type
     *
     * @param string|null $referenced_object_type Should be set to 'OWNER' when 'externalOptions' is true, which causes the property to dynamically pull option values from the current HubSpot users.
     *
     * @return self
     */
    public function setReferencedObjectType($referenced_object_type)
    {
        if (is_null($referenced_object_type)) {
            throw new \InvalidArgumentException('non-nullable referenced_object_type cannot be null');
        }
        $this->container['referenced_object_type'] = $referenced_object_type;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name The internal property name, which must be used when referencing the property via the API.
     *
     * @return self
     */
    public function setName($name)
    {
        if (is_null($name)) {
            throw new \InvalidArgumentException('non-nullable name cannot be null');
        }
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets options
     *
     * @return \HubSpot\Client\Crm\Properties\Model\OptionInput[]|null
     */
    public function getOptions()
    {
        return $this->container['options'];
    }

    /**
     * Sets options
     *
     * @param \HubSpot\Client\Crm\Properties\Model\OptionInput[]|null $options A list of valid options for the property. This field is required for enumerated properties.
     *
     * @return self
     */
    public function setOptions($options)
    {
        if (is_null($options)) {
            throw new \InvalidArgumentException('non-nullable options cannot be null');
        }
        $this->container['options'] = $options;

        return $this;
    }

    /**
     * Gets calculation_formula
     *
     * @return string|null
     */
    public function getCalculationFormula()
    {
        return $this->container['calculation_formula'];
    }

    /**
     * Sets calculation_formula
     *
     * @param string|null $calculation_formula Represents a formula that is used to compute a calculated property.
     *
     * @return self
     */
    public function setCalculationFormula($calculation_formula)
    {
        if (is_null($calculation_formula)) {
            throw new \InvalidArgumentException('non-nullable calculation_formula cannot be null');
        }
        $this->container['calculation_formula'] = $calculation_formula;

        return $this;
    }

    /**
     * Gets has_unique_value
     *
     * @return bool|null
     */
    public function getHasUniqueValue()
    {
        return $this->container['has_unique_value'];
    }

    /**
     * Sets has_unique_value
     *
     * @param bool|null $has_unique_value Whether or not the property's value must be unique. Once set, this can't be changed.
     *
     * @return self
     */
    public function setHasUniqueValue($has_unique_value)
    {
        if (is_null($has_unique_value)) {
            throw new \InvalidArgumentException('non-nullable has_unique_value cannot be null');
        }
        $this->container['has_unique_value'] = $has_unique_value;

        return $this;
    }

    /**
     * Gets field_type
     *
     * @return string
     */
    public function getFieldType()
    {
        return $this->container['field_type'];
    }

    /**
     * Sets field_type
     *
     * @param string $field_type Controls how the property appears in HubSpot.
     *
     * @return self
     */
    public function setFieldType($field_type)
    {
        if (is_null($field_type)) {
            throw new \InvalidArgumentException('non-nullable field_type cannot be null');
        }
        $allowedValues = $this->getFieldTypeAllowableValues();
        if (!in_array($field_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'field_type', must be one of '%s'",
                    $field_type,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['field_type'] = $field_type;

        return $this;
    }

    /**
     * Gets external_options
     *
     * @return bool|null
     */
    public function getExternalOptions()
    {
        return $this->container['external_options'];
    }

    /**
     * Sets external_options
     *
     * @param bool|null $external_options Applicable only for 'enumeration' type properties.  Should be set to true in conjunction with a 'referencedObjectType' of 'OWNER'.  Otherwise false.
     *
     * @return self
     */
    public function setExternalOptions($external_options)
    {
        if (is_null($external_options)) {
            throw new \InvalidArgumentException('non-nullable external_options cannot be null');
        }
        $this->container['external_options'] = $external_options;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset): bool
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
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
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
    public function offsetSet($offset, $value): void
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
    public function offsetUnset($offset): void
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
    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
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
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}

