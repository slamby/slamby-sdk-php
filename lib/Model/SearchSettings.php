<?php


/**
 * SearchSettings
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link     https://github.com/swagger-api/swagger-codegen
 */
/**
 *  Copyright 2016 SmartBear Software
 *
 *  Licensed under the Apache License, Version 2.0 (the "License");
 *  you may not use this file except in compliance with the License.
 *  You may obtain a copy of the License at
 *
 *      http://www.apache.org/licenses/LICENSE-2.0
 *
 *  Unless required by applicable law or agreed to in writing, software
 *  distributed under the License is distributed on an "AS IS" BASIS,
 *  WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 *  See the License for the specific language governing permissions and
 *  limitations under the License.
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Model;

use \ArrayAccess;
/**
 * SearchSettings Class Doc Comment
 *
 * @category    Class
 * @description The Search settings. The search is using ElasticSearch MATCH or QUERYSTRING search. Depends on the Type setting
 * @package     Swagger\Client
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class SearchSettings implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    static $swaggerModelName = 'SearchSettings';

    /**
      * Array of property to type mappings. Used for (de)serialization 
      * @var string[]
      */
    static $swaggerTypes = array(
        'filter' => '\Swagger\Client\Model\Filter',
        'use_default_filter' => 'bool',
        'weights' => '\Swagger\Client\Model\Weight[]',
        'use_default_weights' => 'bool',
        'response_field_list' => 'string[]',
        'search_field_list' => 'string[]',
        'type' => 'string',
        'cut_off_frequency' => 'double',
        'fuzziness' => 'int',
        'count' => 'int',
        'operator' => 'string',
        'order' => '\Swagger\Client\Model\Order'
    );
  
    static function swaggerTypes() {
        return self::$swaggerTypes;
    }

    /** 
      * Array of attributes where the key is the local name, and the value is the original name
      * @var string[] 
      */
    static $attributeMap = array(
        'filter' => 'Filter',
        'use_default_filter' => 'UseDefaultFilter',
        'weights' => 'Weights',
        'use_default_weights' => 'UseDefaultWeights',
        'response_field_list' => 'ResponseFieldList',
        'search_field_list' => 'SearchFieldList',
        'type' => 'Type',
        'cut_off_frequency' => 'CutOffFrequency',
        'fuzziness' => 'Fuzziness',
        'count' => 'Count',
        'operator' => 'Operator',
        'order' => 'Order'
    );
  
    static function attributeMap() {
        return self::$attributeMap;
    }

    /**
      * Array of attributes to setter functions (for deserialization of responses)
      * @var string[]
      */
    static $setters = array(
        'filter' => 'setFilter',
        'use_default_filter' => 'setUseDefaultFilter',
        'weights' => 'setWeights',
        'use_default_weights' => 'setUseDefaultWeights',
        'response_field_list' => 'setResponseFieldList',
        'search_field_list' => 'setSearchFieldList',
        'type' => 'setType',
        'cut_off_frequency' => 'setCutOffFrequency',
        'fuzziness' => 'setFuzziness',
        'count' => 'setCount',
        'operator' => 'setOperator',
        'order' => 'setOrder'
    );
  
    static function setters() {
        return self::$setters;
    }

    /**
      * Array of attributes to getter functions (for serialization of requests)
      * @var string[]
      */
    static $getters = array(
        'filter' => 'getFilter',
        'use_default_filter' => 'getUseDefaultFilter',
        'weights' => 'getWeights',
        'use_default_weights' => 'getUseDefaultWeights',
        'response_field_list' => 'getResponseFieldList',
        'search_field_list' => 'getSearchFieldList',
        'type' => 'getType',
        'cut_off_frequency' => 'getCutOffFrequency',
        'fuzziness' => 'getFuzziness',
        'count' => 'getCount',
        'operator' => 'getOperator',
        'order' => 'getOrder'
    );
  
    static function getters() {
        return self::$getters;
    }

    
    /**
      * $filter The Filter settings
      * @var \Swagger\Client\Model\Filter
      */
    protected $filter;
    
    /**
      * $use_default_filter When you activate a Search service with a Filter, you can use this property to control if you want to use that 'default filter' during each searches
      * @var bool
      */
    protected $use_default_filter;
    
    /**
      * $weights Can use each available dataset field, a preferred value and a weighted score between 0 and 10 to boost the result
      * @var \Swagger\Client\Model\Weight[]
      */
    protected $weights;
    
    /**
      * $use_default_weights When you activate a Search service with Weights, you can use this property to control if you want to use that 'default weights' during each searches
      * @var bool
      */
    protected $use_default_weights;
    
    /**
      * $response_field_list Which dataset fields must be in the search response
      * @var string[]
      */
    protected $response_field_list;
    
    /**
      * $search_field_list In which fields you would liket to search. The list can contains boosts. For example: title^2  which means matches on the title field will have twice the weight as those on the other fields
      * @var string[]
      */
    protected $search_field_list;
    
    /**
      * $type The type of the search. Can be MATCH (default) which means a simple word based search or can be QUERY which means you can use expressions in the query, like in the [QueryString Query](https://www.elastic.co/guide/en/elasticsearch/reference/current/query-dsl-query-string-query.html#query-string-syntax) in ElasticSearch
      * @var string
      */
    protected $type;
    
    /**
      * $cut_off_frequency Allows specifying an absolute or relative document frequency where high frequency terms are moved into an optional subquery and are only scored if one of the low frequency (below the cutoff) terms in the case of an OR operator or all of the low frequency terms in the case of an AND operator match
      * @var double
      */
    protected $cut_off_frequency;
    
    /**
      * $fuzziness Interpreted as a Levenshtein Edit Distance\u00E2\u20AC\u2030\u00E2\u20AC\u201D\u00E2\u20AC\u2030the number of one character changes that need to be made to one string to make it the same as another string. Can be specified as: -1 (generates an edit distance based on the length of the term) or 0, 1, 2 (the maximum allowed Levenshtein Edit Distance)
      * @var int
      */
    protected $fuzziness;
    
    /**
      * $count The maximum number of matches
      * @var int
      */
    protected $count;
    
    /**
      * $operator Can be set to OR or AND to control the operators between the text words\r\nFor example if the operator is AND, and the query is: 'white mobilephone' then the 'white' AND the 'mobilephone' must be match the documents\r\nIf the operator is OR in the same query then one of the query words is enough for a match. Of course if a document matches all the words then that will have a higher score
      * @var string
      */
    protected $operator;
    
    /**
      * $order You can change the order of the search results. You have to specify a field of the dataset the order (Ascending or Descending)\r\nBe careful with this, if you change the default order then not the most relevant (for the text) documents will be on the top
      * @var \Swagger\Client\Model\Order
      */
    protected $order;
    

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = null)
    {
        
        

        if ($data != null) {
            $this->filter = $data["filter"];
            $this->use_default_filter = $data["use_default_filter"];
            $this->weights = $data["weights"];
            $this->use_default_weights = $data["use_default_weights"];
            $this->response_field_list = $data["response_field_list"];
            $this->search_field_list = $data["search_field_list"];
            $this->type = $data["type"];
            $this->cut_off_frequency = $data["cut_off_frequency"];
            $this->fuzziness = $data["fuzziness"];
            $this->count = $data["count"];
            $this->operator = $data["operator"];
            $this->order = $data["order"];
        }
    }
    
    /**
     * Gets filter
     * @return \Swagger\Client\Model\Filter
     */
    public function getFilter()
    {
        return $this->filter;
    }
  
    /**
     * Sets filter
     * @param \Swagger\Client\Model\Filter $filter The Filter settings
     * @return $this
     */
    public function setFilter($filter)
    {
        
        $this->filter = $filter;
        return $this;
    }
    
    /**
     * Gets use_default_filter
     * @return bool
     */
    public function getUseDefaultFilter()
    {
        return $this->use_default_filter;
    }
  
    /**
     * Sets use_default_filter
     * @param bool $use_default_filter When you activate a Search service with a Filter, you can use this property to control if you want to use that 'default filter' during each searches
     * @return $this
     */
    public function setUseDefaultFilter($use_default_filter)
    {
        
        $this->use_default_filter = $use_default_filter;
        return $this;
    }
    
    /**
     * Gets weights
     * @return \Swagger\Client\Model\Weight[]
     */
    public function getWeights()
    {
        return $this->weights;
    }
  
    /**
     * Sets weights
     * @param \Swagger\Client\Model\Weight[] $weights Can use each available dataset field, a preferred value and a weighted score between 0 and 10 to boost the result
     * @return $this
     */
    public function setWeights($weights)
    {
        
        $this->weights = $weights;
        return $this;
    }
    
    /**
     * Gets use_default_weights
     * @return bool
     */
    public function getUseDefaultWeights()
    {
        return $this->use_default_weights;
    }
  
    /**
     * Sets use_default_weights
     * @param bool $use_default_weights When you activate a Search service with Weights, you can use this property to control if you want to use that 'default weights' during each searches
     * @return $this
     */
    public function setUseDefaultWeights($use_default_weights)
    {
        
        $this->use_default_weights = $use_default_weights;
        return $this;
    }
    
    /**
     * Gets response_field_list
     * @return string[]
     */
    public function getResponseFieldList()
    {
        return $this->response_field_list;
    }
  
    /**
     * Sets response_field_list
     * @param string[] $response_field_list Which dataset fields must be in the search response
     * @return $this
     */
    public function setResponseFieldList($response_field_list)
    {
        
        $this->response_field_list = $response_field_list;
        return $this;
    }
    
    /**
     * Gets search_field_list
     * @return string[]
     */
    public function getSearchFieldList()
    {
        return $this->search_field_list;
    }
  
    /**
     * Sets search_field_list
     * @param string[] $search_field_list In which fields you would liket to search. The list can contains boosts. For example: title^2  which means matches on the title field will have twice the weight as those on the other fields
     * @return $this
     */
    public function setSearchFieldList($search_field_list)
    {
        
        $this->search_field_list = $search_field_list;
        return $this;
    }
    
    /**
     * Gets type
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }
  
    /**
     * Sets type
     * @param string $type The type of the search. Can be MATCH (default) which means a simple word based search or can be QUERY which means you can use expressions in the query, like in the [QueryString Query](https://www.elastic.co/guide/en/elasticsearch/reference/current/query-dsl-query-string-query.html#query-string-syntax) in ElasticSearch
     * @return $this
     */
    public function setType($type)
    {
        $allowed_values = array("Match", "Query");
        if (!in_array($type, $allowed_values)) {
            throw new \InvalidArgumentException("Invalid value for 'type', must be one of 'Match', 'Query'");
        }
        $this->type = $type;
        return $this;
    }
    
    /**
     * Gets cut_off_frequency
     * @return double
     */
    public function getCutOffFrequency()
    {
        return $this->cut_off_frequency;
    }
  
    /**
     * Sets cut_off_frequency
     * @param double $cut_off_frequency Allows specifying an absolute or relative document frequency where high frequency terms are moved into an optional subquery and are only scored if one of the low frequency (below the cutoff) terms in the case of an OR operator or all of the low frequency terms in the case of an AND operator match
     * @return $this
     */
    public function setCutOffFrequency($cut_off_frequency)
    {
        
        $this->cut_off_frequency = $cut_off_frequency;
        return $this;
    }
    
    /**
     * Gets fuzziness
     * @return int
     */
    public function getFuzziness()
    {
        return $this->fuzziness;
    }
  
    /**
     * Sets fuzziness
     * @param int $fuzziness Interpreted as a Levenshtein Edit Distance\u00E2\u20AC\u2030\u00E2\u20AC\u201D\u00E2\u20AC\u2030the number of one character changes that need to be made to one string to make it the same as another string. Can be specified as: -1 (generates an edit distance based on the length of the term) or 0, 1, 2 (the maximum allowed Levenshtein Edit Distance)
     * @return $this
     */
    public function setFuzziness($fuzziness)
    {
        
        $this->fuzziness = $fuzziness;
        return $this;
    }
    
    /**
     * Gets count
     * @return int
     */
    public function getCount()
    {
        return $this->count;
    }
  
    /**
     * Sets count
     * @param int $count The maximum number of matches
     * @return $this
     */
    public function setCount($count)
    {
        
        $this->count = $count;
        return $this;
    }
    
    /**
     * Gets operator
     * @return string
     */
    public function getOperator()
    {
        return $this->operator;
    }
  
    /**
     * Sets operator
     * @param string $operator Can be set to OR or AND to control the operators between the text words\r\nFor example if the operator is AND, and the query is: 'white mobilephone' then the 'white' AND the 'mobilephone' must be match the documents\r\nIf the operator is OR in the same query then one of the query words is enough for a match. Of course if a document matches all the words then that will have a higher score
     * @return $this
     */
    public function setOperator($operator)
    {
        $allowed_values = array("AND", "OR");
        if (!in_array($operator, $allowed_values)) {
            throw new \InvalidArgumentException("Invalid value for 'operator', must be one of 'AND', 'OR'");
        }
        $this->operator = $operator;
        return $this;
    }
    
    /**
     * Gets order
     * @return \Swagger\Client\Model\Order
     */
    public function getOrder()
    {
        return $this->order;
    }
  
    /**
     * Sets order
     * @param \Swagger\Client\Model\Order $order You can change the order of the search results. You have to specify a field of the dataset the order (Ascending or Descending)\r\nBe careful with this, if you change the default order then not the most relevant (for the text) documents will be on the top
     * @return $this
     */
    public function setOrder($order)
    {
        
        $this->order = $order;
        return $this;
    }
    
    /**
     * Returns true if offset exists. False otherwise.
     * @param  integer $offset Offset 
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->$offset);
    }
  
    /**
     * Gets offset.
     * @param  integer $offset Offset 
     * @return mixed 
     */
    public function offsetGet($offset)
    {
        return $this->$offset;
    }
  
    /**
     * Sets value based on offset.
     * @param  integer $offset Offset 
     * @param  mixed   $value  Value to be set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        $this->$offset = $value;
    }
  
    /**
     * Unsets offset.
     * @param  integer $offset Offset 
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->$offset);
    }
  
    /**
     * Gets the string presentation of the object
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(\Swagger\Client\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\Swagger\Client\ObjectSerializer::sanitizeForSerialization($this));
    }
}


