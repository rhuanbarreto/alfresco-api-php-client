<?php
/**
 * Rating
 *
 * PHP version 5
 *
 * @category Class
 * @package  Alfresco\Core
 * @author   Swaagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Alfresco Content Services REST API
 *
 * **Core API**  Provides access to the core features of Alfresco Content Services.
 *
 * OpenAPI spec version: 1
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Alfresco\Core\Model;

use \ArrayAccess;

/**
 * Rating Class Doc Comment
 *
 * @category    Class
 * @description A person can rate an item of content by liking it. They can also remove their like of an item of content. API methods exist to get a list of ratings and to add a new rating.
 * @package     Alfresco\Core
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class Rating implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'Rating';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'string',
        'aggregate' => '\Alfresco\Core\Model\RatingAggregate',
        'rated_at' => '\DateTime',
        'my_rating' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => null,
        'aggregate' => null,
        'rated_at' => 'date-time',
        'my_rating' => null
    ];

    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @var string[]
     */
    protected static $attributeMap = [
        'id' => 'id',
        'aggregate' => 'aggregate',
        'rated_at' => 'ratedAt',
        'my_rating' => 'myRating'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'aggregate' => 'setAggregate',
        'rated_at' => 'setRatedAt',
        'my_rating' => 'setMyRating'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'aggregate' => 'getAggregate',
        'rated_at' => 'getRatedAt',
        'my_rating' => 'getMyRating'
    ];

    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    public static function setters()
    {
        return self::$setters;
    }

    public static function getters()
    {
        return self::$getters;
    }

    

    

    /**
     * Associative array for storing property values
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     * @param mixed[] $data Associated array of property values initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['aggregate'] = isset($data['aggregate']) ? $data['aggregate'] : null;
        $this->container['rated_at'] = isset($data['rated_at']) ? $data['rated_at'] : null;
        $this->container['my_rating'] = isset($data['my_rating']) ? $data['my_rating'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        if ($this->container['id'] === null) {
            $invalid_properties[] = "'id' can't be null";
        }
        return $invalid_properties;
    }

    /**
     * validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {

        if ($this->container['id'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets id
     * @return string
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     * @param string $id
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets aggregate
     * @return \Alfresco\Core\Model\RatingAggregate
     */
    public function getAggregate()
    {
        return $this->container['aggregate'];
    }

    /**
     * Sets aggregate
     * @param \Alfresco\Core\Model\RatingAggregate $aggregate
     * @return $this
     */
    public function setAggregate($aggregate)
    {
        $this->container['aggregate'] = $aggregate;

        return $this;
    }

    /**
     * Gets rated_at
     * @return \DateTime
     */
    public function getRatedAt()
    {
        return $this->container['rated_at'];
    }

    /**
     * Sets rated_at
     * @param \DateTime $rated_at
     * @return $this
     */
    public function setRatedAt($rated_at)
    {
        $this->container['rated_at'] = $rated_at;

        return $this;
    }

    /**
     * Gets my_rating
     * @return string
     */
    public function getMyRating()
    {
        return $this->container['my_rating'];
    }

    /**
     * Sets my_rating
     * @param string $my_rating The rating. The type is specific to the rating scheme, boolean for the likes and an integer for the fiveStar.
     * @return $this
     */
    public function setMyRating($my_rating)
    {
        $this->container['my_rating'] = $my_rating;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     * @param  integer $offset Offset
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     * @param  integer $offset Offset
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     * @param  integer $offset Offset
     * @param  mixed   $value  Value to be set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     * @param  integer $offset Offset
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(\Alfresco\Core\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\Alfresco\Core\ObjectSerializer::sanitizeForSerialization($this));
    }
}

