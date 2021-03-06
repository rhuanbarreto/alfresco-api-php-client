<?php
/**
 * RequestHighlight
 *
 * PHP version 5
 *
 * @category Class
 * @package  Alfresco
 * @author   Swaagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Alfresco Content Services REST API
 *
 * **API**  Provides access to the features of Alfresco Content Services.
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

namespace Alfresco\Model;

use \ArrayAccess;

/**
 * RequestHighlight Class Doc Comment
 *
 * @category    Class
 * @description Request that highlight fragments to be added to result set rows The properties reflect SOLR highlighting parameters.
 * @package     Alfresco
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class RequestHighlight implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'RequestHighlight';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'prefix' => 'string',
        'postfix' => 'string',
        'snippet_count' => 'int',
        'fragment_size' => 'int',
        'max_analyzed_chars' => 'int',
        'merge_contiguous' => 'bool',
        'use_phrase_highlighter' => 'bool',
        'fields' => '\Alfresco\Model\RequestHighlightFields[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'prefix' => null,
        'postfix' => null,
        'snippet_count' => null,
        'fragment_size' => null,
        'max_analyzed_chars' => null,
        'merge_contiguous' => null,
        'use_phrase_highlighter' => null,
        'fields' => null
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
        'prefix' => 'prefix',
        'postfix' => 'postfix',
        'snippet_count' => 'snippetCount',
        'fragment_size' => 'fragmentSize',
        'max_analyzed_chars' => 'maxAnalyzedChars',
        'merge_contiguous' => 'mergeContiguous',
        'use_phrase_highlighter' => 'usePhraseHighlighter',
        'fields' => 'fields'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'prefix' => 'setPrefix',
        'postfix' => 'setPostfix',
        'snippet_count' => 'setSnippetCount',
        'fragment_size' => 'setFragmentSize',
        'max_analyzed_chars' => 'setMaxAnalyzedChars',
        'merge_contiguous' => 'setMergeContiguous',
        'use_phrase_highlighter' => 'setUsePhraseHighlighter',
        'fields' => 'setFields'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'prefix' => 'getPrefix',
        'postfix' => 'getPostfix',
        'snippet_count' => 'getSnippetCount',
        'fragment_size' => 'getFragmentSize',
        'max_analyzed_chars' => 'getMaxAnalyzedChars',
        'merge_contiguous' => 'getMergeContiguous',
        'use_phrase_highlighter' => 'getUsePhraseHighlighter',
        'fields' => 'getFields'
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
        $this->container['prefix'] = isset($data['prefix']) ? $data['prefix'] : null;
        $this->container['postfix'] = isset($data['postfix']) ? $data['postfix'] : null;
        $this->container['snippet_count'] = isset($data['snippet_count']) ? $data['snippet_count'] : null;
        $this->container['fragment_size'] = isset($data['fragment_size']) ? $data['fragment_size'] : null;
        $this->container['max_analyzed_chars'] = isset($data['max_analyzed_chars']) ? $data['max_analyzed_chars'] : null;
        $this->container['merge_contiguous'] = isset($data['merge_contiguous']) ? $data['merge_contiguous'] : null;
        $this->container['use_phrase_highlighter'] = isset($data['use_phrase_highlighter']) ? $data['use_phrase_highlighter'] : null;
        $this->container['fields'] = isset($data['fields']) ? $data['fields'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

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

        return true;
    }


    /**
     * Gets prefix
     * @return string
     */
    public function getPrefix()
    {
        return $this->container['prefix'];
    }

    /**
     * Sets prefix
     * @param string $prefix The string used to mark the start of a highlight in a fragment.
     * @return $this
     */
    public function setPrefix($prefix)
    {
        $this->container['prefix'] = $prefix;

        return $this;
    }

    /**
     * Gets postfix
     * @return string
     */
    public function getPostfix()
    {
        return $this->container['postfix'];
    }

    /**
     * Sets postfix
     * @param string $postfix The string used to mark the end of a highlight in a fragment.
     * @return $this
     */
    public function setPostfix($postfix)
    {
        $this->container['postfix'] = $postfix;

        return $this;
    }

    /**
     * Gets snippet_count
     * @return int
     */
    public function getSnippetCount()
    {
        return $this->container['snippet_count'];
    }

    /**
     * Sets snippet_count
     * @param int $snippet_count The maximum number of distinct highlight snippets to return for each highlight field.
     * @return $this
     */
    public function setSnippetCount($snippet_count)
    {
        $this->container['snippet_count'] = $snippet_count;

        return $this;
    }

    /**
     * Gets fragment_size
     * @return int
     */
    public function getFragmentSize()
    {
        return $this->container['fragment_size'];
    }

    /**
     * Sets fragment_size
     * @param int $fragment_size The character length of each snippet.
     * @return $this
     */
    public function setFragmentSize($fragment_size)
    {
        $this->container['fragment_size'] = $fragment_size;

        return $this;
    }

    /**
     * Gets max_analyzed_chars
     * @return int
     */
    public function getMaxAnalyzedChars()
    {
        return $this->container['max_analyzed_chars'];
    }

    /**
     * Sets max_analyzed_chars
     * @param int $max_analyzed_chars The number of characters to be considered for highlighting. Matches after this count will not be shown.
     * @return $this
     */
    public function setMaxAnalyzedChars($max_analyzed_chars)
    {
        $this->container['max_analyzed_chars'] = $max_analyzed_chars;

        return $this;
    }

    /**
     * Gets merge_contiguous
     * @return bool
     */
    public function getMergeContiguous()
    {
        return $this->container['merge_contiguous'];
    }

    /**
     * Sets merge_contiguous
     * @param bool $merge_contiguous If fragments over lap they can be  merged into one larger fragment
     * @return $this
     */
    public function setMergeContiguous($merge_contiguous)
    {
        $this->container['merge_contiguous'] = $merge_contiguous;

        return $this;
    }

    /**
     * Gets use_phrase_highlighter
     * @return bool
     */
    public function getUsePhraseHighlighter()
    {
        return $this->container['use_phrase_highlighter'];
    }

    /**
     * Sets use_phrase_highlighter
     * @param bool $use_phrase_highlighter Should phrases be identified.
     * @return $this
     */
    public function setUsePhraseHighlighter($use_phrase_highlighter)
    {
        $this->container['use_phrase_highlighter'] = $use_phrase_highlighter;

        return $this;
    }

    /**
     * Gets fields
     * @return \Alfresco\Model\RequestHighlightFields[]
     */
    public function getFields()
    {
        return $this->container['fields'];
    }

    /**
     * Sets fields
     * @param \Alfresco\Model\RequestHighlightFields[] $fields The fields to highlight and field specific configuration properties for each field
     * @return $this
     */
    public function setFields($fields)
    {
        $this->container['fields'] = $fields;

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
            return json_encode(\Alfresco\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\Alfresco\ObjectSerializer::sanitizeForSerialization($this));
    }
}


