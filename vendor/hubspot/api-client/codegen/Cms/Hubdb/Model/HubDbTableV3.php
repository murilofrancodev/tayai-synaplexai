<?php
/**
 * HubDbTableV3
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  HubSpot\Client\Cms\Hubdb
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Hubdb
 *
 * HubDB is a relational data store that presents data as rows, columns, and cells in a table, much like a spreadsheet. HubDB tables can be added or modified [in the HubSpot CMS](https://knowledge.hubspot.com/cos-general/how-to-edit-hubdb-tables), but you can also use the API endpoints documented here. For more information on HubDB tables and using their data on a HubSpot site, see the [CMS developers site](https://designers.hubspot.com/docs/tools/hubdb). You can also see the [documentation for dynamic pages](https://designers.hubspot.com/docs/tutorials/how-to-build-dynamic-pages-with-hubdb) for more details about the `useForPages` field.  HubDB tables support `draft` and `published` versions. This allows you to update data in the table, either for testing or to allow for a manual approval process, without affecting any live pages using the existing data. Draft data can be reviewed, and published by a user working in HubSpot or published via the API. Draft data can also be discarded, allowing users to go back to the published version of the data without disrupting it. If a table is set to be `allowed for public access`, you can access the published version of the table and rows without any authentication by specifying the portal id via the query parameter `portalId`.
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

namespace HubSpot\Client\Cms\Hubdb\Model;

use \ArrayAccess;
use \HubSpot\Client\Cms\Hubdb\ObjectSerializer;

/**
 * HubDbTableV3 Class Doc Comment
 *
 * @category Class
 * @description Model for HubDB table
 * @package  HubSpot\Client\Cms\Hubdb
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class HubDbTableV3 implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'HubDbTableV3';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'dynamic_meta_tags' => 'array<string,int>',
        'updated_by' => '\HubSpot\Client\Cms\Hubdb\Model\SimpleUser',
        'allow_public_api_access' => 'bool',
        'use_for_pages' => 'bool',
        'published_at' => '\DateTime',
        'columns' => '\HubSpot\Client\Cms\Hubdb\Model\Column[]',
        'label' => 'string',
        'published' => 'bool',
        'column_count' => 'int',
        'allow_child_tables' => 'bool',
        'created_at' => '\DateTime',
        'deleted' => 'bool',
        'created_by' => '\HubSpot\Client\Cms\Hubdb\Model\SimpleUser',
        'name' => 'string',
        'enable_child_table_pages' => 'bool',
        'id' => 'string',
        'row_count' => 'int',
        'is_ordered_manually' => 'bool',
        'updated_at' => '\DateTime'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'dynamic_meta_tags' => 'int32',
        'updated_by' => null,
        'allow_public_api_access' => null,
        'use_for_pages' => null,
        'published_at' => 'date-time',
        'columns' => null,
        'label' => null,
        'published' => null,
        'column_count' => 'int32',
        'allow_child_tables' => null,
        'created_at' => 'date-time',
        'deleted' => null,
        'created_by' => null,
        'name' => null,
        'enable_child_table_pages' => null,
        'id' => null,
        'row_count' => 'int32',
        'is_ordered_manually' => null,
        'updated_at' => 'date-time'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'dynamic_meta_tags' => false,
        'updated_by' => false,
        'allow_public_api_access' => false,
        'use_for_pages' => false,
        'published_at' => false,
        'columns' => false,
        'label' => false,
        'published' => false,
        'column_count' => false,
        'allow_child_tables' => false,
        'created_at' => false,
        'deleted' => false,
        'created_by' => false,
        'name' => false,
        'enable_child_table_pages' => false,
        'id' => false,
        'row_count' => false,
        'is_ordered_manually' => false,
        'updated_at' => false
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
        'dynamic_meta_tags' => 'dynamicMetaTags',
        'updated_by' => 'updatedBy',
        'allow_public_api_access' => 'allowPublicApiAccess',
        'use_for_pages' => 'useForPages',
        'published_at' => 'publishedAt',
        'columns' => 'columns',
        'label' => 'label',
        'published' => 'published',
        'column_count' => 'columnCount',
        'allow_child_tables' => 'allowChildTables',
        'created_at' => 'createdAt',
        'deleted' => 'deleted',
        'created_by' => 'createdBy',
        'name' => 'name',
        'enable_child_table_pages' => 'enableChildTablePages',
        'id' => 'id',
        'row_count' => 'rowCount',
        'is_ordered_manually' => 'isOrderedManually',
        'updated_at' => 'updatedAt'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'dynamic_meta_tags' => 'setDynamicMetaTags',
        'updated_by' => 'setUpdatedBy',
        'allow_public_api_access' => 'setAllowPublicApiAccess',
        'use_for_pages' => 'setUseForPages',
        'published_at' => 'setPublishedAt',
        'columns' => 'setColumns',
        'label' => 'setLabel',
        'published' => 'setPublished',
        'column_count' => 'setColumnCount',
        'allow_child_tables' => 'setAllowChildTables',
        'created_at' => 'setCreatedAt',
        'deleted' => 'setDeleted',
        'created_by' => 'setCreatedBy',
        'name' => 'setName',
        'enable_child_table_pages' => 'setEnableChildTablePages',
        'id' => 'setId',
        'row_count' => 'setRowCount',
        'is_ordered_manually' => 'setIsOrderedManually',
        'updated_at' => 'setUpdatedAt'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'dynamic_meta_tags' => 'getDynamicMetaTags',
        'updated_by' => 'getUpdatedBy',
        'allow_public_api_access' => 'getAllowPublicApiAccess',
        'use_for_pages' => 'getUseForPages',
        'published_at' => 'getPublishedAt',
        'columns' => 'getColumns',
        'label' => 'getLabel',
        'published' => 'getPublished',
        'column_count' => 'getColumnCount',
        'allow_child_tables' => 'getAllowChildTables',
        'created_at' => 'getCreatedAt',
        'deleted' => 'getDeleted',
        'created_by' => 'getCreatedBy',
        'name' => 'getName',
        'enable_child_table_pages' => 'getEnableChildTablePages',
        'id' => 'getId',
        'row_count' => 'getRowCount',
        'is_ordered_manually' => 'getIsOrderedManually',
        'updated_at' => 'getUpdatedAt'
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
        $this->setIfExists('dynamic_meta_tags', $data ?? [], null);
        $this->setIfExists('updated_by', $data ?? [], null);
        $this->setIfExists('allow_public_api_access', $data ?? [], null);
        $this->setIfExists('use_for_pages', $data ?? [], null);
        $this->setIfExists('published_at', $data ?? [], null);
        $this->setIfExists('columns', $data ?? [], null);
        $this->setIfExists('label', $data ?? [], null);
        $this->setIfExists('published', $data ?? [], null);
        $this->setIfExists('column_count', $data ?? [], null);
        $this->setIfExists('allow_child_tables', $data ?? [], null);
        $this->setIfExists('created_at', $data ?? [], null);
        $this->setIfExists('deleted', $data ?? [], null);
        $this->setIfExists('created_by', $data ?? [], null);
        $this->setIfExists('name', $data ?? [], null);
        $this->setIfExists('enable_child_table_pages', $data ?? [], null);
        $this->setIfExists('id', $data ?? [], null);
        $this->setIfExists('row_count', $data ?? [], null);
        $this->setIfExists('is_ordered_manually', $data ?? [], null);
        $this->setIfExists('updated_at', $data ?? [], null);
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
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
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
     * Gets dynamic_meta_tags
     *
     * @return array<string,int>|null
     */
    public function getDynamicMetaTags()
    {
        return $this->container['dynamic_meta_tags'];
    }

    /**
     * Sets dynamic_meta_tags
     *
     * @param array<string,int>|null $dynamic_meta_tags Specifies the key value pairs of the metadata fields with the associated column ids
     *
     * @return self
     */
    public function setDynamicMetaTags($dynamic_meta_tags)
    {
        if (is_null($dynamic_meta_tags)) {
            throw new \InvalidArgumentException('non-nullable dynamic_meta_tags cannot be null');
        }
        $this->container['dynamic_meta_tags'] = $dynamic_meta_tags;

        return $this;
    }

    /**
     * Gets updated_by
     *
     * @return \HubSpot\Client\Cms\Hubdb\Model\SimpleUser|null
     */
    public function getUpdatedBy()
    {
        return $this->container['updated_by'];
    }

    /**
     * Sets updated_by
     *
     * @param \HubSpot\Client\Cms\Hubdb\Model\SimpleUser|null $updated_by updated_by
     *
     * @return self
     */
    public function setUpdatedBy($updated_by)
    {
        if (is_null($updated_by)) {
            throw new \InvalidArgumentException('non-nullable updated_by cannot be null');
        }
        $this->container['updated_by'] = $updated_by;

        return $this;
    }

    /**
     * Gets allow_public_api_access
     *
     * @return bool|null
     */
    public function getAllowPublicApiAccess()
    {
        return $this->container['allow_public_api_access'];
    }

    /**
     * Sets allow_public_api_access
     *
     * @param bool|null $allow_public_api_access Specifies whether the table can be read by public without authorization
     *
     * @return self
     */
    public function setAllowPublicApiAccess($allow_public_api_access)
    {
        if (is_null($allow_public_api_access)) {
            throw new \InvalidArgumentException('non-nullable allow_public_api_access cannot be null');
        }
        $this->container['allow_public_api_access'] = $allow_public_api_access;

        return $this;
    }

    /**
     * Gets use_for_pages
     *
     * @return bool|null
     */
    public function getUseForPages()
    {
        return $this->container['use_for_pages'];
    }

    /**
     * Sets use_for_pages
     *
     * @param bool|null $use_for_pages Specifies whether the table can be used for creation of dynamic pages
     *
     * @return self
     */
    public function setUseForPages($use_for_pages)
    {
        if (is_null($use_for_pages)) {
            throw new \InvalidArgumentException('non-nullable use_for_pages cannot be null');
        }
        $this->container['use_for_pages'] = $use_for_pages;

        return $this;
    }

    /**
     * Gets published_at
     *
     * @return \DateTime|null
     */
    public function getPublishedAt()
    {
        return $this->container['published_at'];
    }

    /**
     * Sets published_at
     *
     * @param \DateTime|null $published_at Timestamp at which the table is published recently
     *
     * @return self
     */
    public function setPublishedAt($published_at)
    {
        if (is_null($published_at)) {
            throw new \InvalidArgumentException('non-nullable published_at cannot be null');
        }
        $this->container['published_at'] = $published_at;

        return $this;
    }

    /**
     * Gets columns
     *
     * @return \HubSpot\Client\Cms\Hubdb\Model\Column[]|null
     */
    public function getColumns()
    {
        return $this->container['columns'];
    }

    /**
     * Sets columns
     *
     * @param \HubSpot\Client\Cms\Hubdb\Model\Column[]|null $columns List of columns in the table
     *
     * @return self
     */
    public function setColumns($columns)
    {
        if (is_null($columns)) {
            throw new \InvalidArgumentException('non-nullable columns cannot be null');
        }
        $this->container['columns'] = $columns;

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
     * @param string $label Label of the table
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
     * Gets published
     *
     * @return bool|null
     */
    public function getPublished()
    {
        return $this->container['published'];
    }

    /**
     * Sets published
     *
     * @param bool|null $published published
     *
     * @return self
     */
    public function setPublished($published)
    {
        if (is_null($published)) {
            throw new \InvalidArgumentException('non-nullable published cannot be null');
        }
        $this->container['published'] = $published;

        return $this;
    }

    /**
     * Gets column_count
     *
     * @return int|null
     */
    public function getColumnCount()
    {
        return $this->container['column_count'];
    }

    /**
     * Sets column_count
     *
     * @param int|null $column_count Number of columns including deleted
     *
     * @return self
     */
    public function setColumnCount($column_count)
    {
        if (is_null($column_count)) {
            throw new \InvalidArgumentException('non-nullable column_count cannot be null');
        }
        $this->container['column_count'] = $column_count;

        return $this;
    }

    /**
     * Gets allow_child_tables
     *
     * @return bool|null
     */
    public function getAllowChildTables()
    {
        return $this->container['allow_child_tables'];
    }

    /**
     * Sets allow_child_tables
     *
     * @param bool|null $allow_child_tables Specifies whether child tables can be created
     *
     * @return self
     */
    public function setAllowChildTables($allow_child_tables)
    {
        if (is_null($allow_child_tables)) {
            throw new \InvalidArgumentException('non-nullable allow_child_tables cannot be null');
        }
        $this->container['allow_child_tables'] = $allow_child_tables;

        return $this;
    }

    /**
     * Gets created_at
     *
     * @return \DateTime|null
     */
    public function getCreatedAt()
    {
        return $this->container['created_at'];
    }

    /**
     * Sets created_at
     *
     * @param \DateTime|null $created_at Timestamp at which the table is created
     *
     * @return self
     */
    public function setCreatedAt($created_at)
    {
        if (is_null($created_at)) {
            throw new \InvalidArgumentException('non-nullable created_at cannot be null');
        }
        $this->container['created_at'] = $created_at;

        return $this;
    }

    /**
     * Gets deleted
     *
     * @return bool|null
     */
    public function getDeleted()
    {
        return $this->container['deleted'];
    }

    /**
     * Sets deleted
     *
     * @param bool|null $deleted deleted
     *
     * @return self
     */
    public function setDeleted($deleted)
    {
        if (is_null($deleted)) {
            throw new \InvalidArgumentException('non-nullable deleted cannot be null');
        }
        $this->container['deleted'] = $deleted;

        return $this;
    }

    /**
     * Gets created_by
     *
     * @return \HubSpot\Client\Cms\Hubdb\Model\SimpleUser|null
     */
    public function getCreatedBy()
    {
        return $this->container['created_by'];
    }

    /**
     * Sets created_by
     *
     * @param \HubSpot\Client\Cms\Hubdb\Model\SimpleUser|null $created_by created_by
     *
     * @return self
     */
    public function setCreatedBy($created_by)
    {
        if (is_null($created_by)) {
            throw new \InvalidArgumentException('non-nullable created_by cannot be null');
        }
        $this->container['created_by'] = $created_by;

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
     * @param string $name Name of the table
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
     * Gets enable_child_table_pages
     *
     * @return bool|null
     */
    public function getEnableChildTablePages()
    {
        return $this->container['enable_child_table_pages'];
    }

    /**
     * Sets enable_child_table_pages
     *
     * @param bool|null $enable_child_table_pages Specifies creation of multi-level dynamic pages using child tables
     *
     * @return self
     */
    public function setEnableChildTablePages($enable_child_table_pages)
    {
        if (is_null($enable_child_table_pages)) {
            throw new \InvalidArgumentException('non-nullable enable_child_table_pages cannot be null');
        }
        $this->container['enable_child_table_pages'] = $enable_child_table_pages;

        return $this;
    }

    /**
     * Gets id
     *
     * @return string|null
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string|null $id Id of the table
     *
     * @return self
     */
    public function setId($id)
    {
        if (is_null($id)) {
            throw new \InvalidArgumentException('non-nullable id cannot be null');
        }
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets row_count
     *
     * @return int|null
     */
    public function getRowCount()
    {
        return $this->container['row_count'];
    }

    /**
     * Sets row_count
     *
     * @param int|null $row_count Number of rows in the table
     *
     * @return self
     */
    public function setRowCount($row_count)
    {
        if (is_null($row_count)) {
            throw new \InvalidArgumentException('non-nullable row_count cannot be null');
        }
        $this->container['row_count'] = $row_count;

        return $this;
    }

    /**
     * Gets is_ordered_manually
     *
     * @return bool|null
     */
    public function getIsOrderedManually()
    {
        return $this->container['is_ordered_manually'];
    }

    /**
     * Sets is_ordered_manually
     *
     * @param bool|null $is_ordered_manually is_ordered_manually
     *
     * @return self
     */
    public function setIsOrderedManually($is_ordered_manually)
    {
        if (is_null($is_ordered_manually)) {
            throw new \InvalidArgumentException('non-nullable is_ordered_manually cannot be null');
        }
        $this->container['is_ordered_manually'] = $is_ordered_manually;

        return $this;
    }

    /**
     * Gets updated_at
     *
     * @return \DateTime|null
     */
    public function getUpdatedAt()
    {
        return $this->container['updated_at'];
    }

    /**
     * Sets updated_at
     *
     * @param \DateTime|null $updated_at Timestamp at which the table is updated recently
     *
     * @return self
     */
    public function setUpdatedAt($updated_at)
    {
        if (is_null($updated_at)) {
            throw new \InvalidArgumentException('non-nullable updated_at cannot be null');
        }
        $this->container['updated_at'] = $updated_at;

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

