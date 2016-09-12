<?php


/**
 * PrcRecommendationRequest
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
 * PrcRecommendationRequest Class Doc Comment
 *
 * @category    Class
 * @description 
 * @package     Swagger\Client
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class PrcRecommendationRequest implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    static $swaggerModelName = 'PrcRecommendationRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization 
      * @var string[]
      */
    static $swaggerTypes = array(
        'text' => 'string',
        'filter' => '\Swagger\Client\Model\Filter',
        'count' => 'int',
        'need_document_in_result' => 'bool',
        'tag_id' => 'string',
        'weights' => '\Swagger\Client\Model\Weight[]'
    );
  
    static function swaggerTypes() {
        return self::$swaggerTypes;
    }

    /** 
      * Array of attributes where the key is the local name, and the value is the original name
      * @var string[] 
      */
    static $attributeMap = array(
        'text' => 'Text',
        'filter' => 'Filter',
        'count' => 'Count',
        'need_document_in_result' => 'NeedDocumentInResult',
        'tag_id' => 'TagId',
        'weights' => 'Weights'
    );
  
    static function attributeMap() {
        return self::$attributeMap;
    }

    /**
      * Array of attributes to setter functions (for deserialization of responses)
      * @var string[]
      */
    static $setters = array(
        'text' => 'setText',
        'filter' => 'setFilter',
        'count' => 'setCount',
        'need_document_in_result' => 'setNeedDocumentInResult',
        'tag_id' => 'setTagId',
        'weights' => 'setWeights'
    );
  
    static function setters() {
        return self::$setters;
    }

    /**
      * Array of attributes to getter functions (for serialization of requests)
      * @var string[]
      */
    static $getters = array(
        'text' => 'getText',
        'filter' => 'getFilter',
        'count' => 'getCount',
        'need_document_in_result' => 'getNeedDocumentInResult',
        'tag_id' => 'getTagId',
        'weights' => 'getWeights'
    );
  
    static function getters() {
        return self::$getters;
    }

    
    /**
      * $text 
      * @var string
      */
    protected $text;
    
    /**
      * $filter 
      * @var \Swagger\Client\Model\Filter
      */
    protected $filter;
    
    /**
      * $count 
      * @var int
      */
    protected $count;
    
    /**
      * $need_document_in_result 
      * @var bool
      */
    protected $need_document_in_result;
    
    /**
      * $tag_id 
      * @var string
      */
    protected $tag_id;
    
    /**
      * $weights 
      * @var \Swagger\Client\Model\Weight[]
      */
    protected $weights;
    

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = null)
    {
        
        

        if ($data != null) {
            $this->text = $data["text"];
            $this->filter = $data["filter"];
            $this->count = $data["count"];
            $this->need_document_in_result = $data["need_document_in_result"];
            $this->tag_id = $data["tag_id"];
            $this->weights = $data["weights"];
        }
    }
    
    /**
     * Gets text
     * @return string
     */
    public function getText()
    {
        return $this->text;
    }
  
    /**
     * Sets text
     * @param string $text 
     * @return $this
     */
    public function setText($text)
    {
        
        $this->text = $text;
        return $this;
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
     * @param \Swagger\Client\Model\Filter $filter 
     * @return $this
     */
    public function setFilter($filter)
    {
        
        $this->filter = $filter;
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
     * @param int $count 
     * @return $this
     */
    public function setCount($count)
    {
        
        $this->count = $count;
        return $this;
    }
    
    /**
     * Gets need_document_in_result
     * @return bool
     */
    public function getNeedDocumentInResult()
    {
        return $this->need_document_in_result;
    }
  
    /**
     * Sets need_document_in_result
     * @param bool $need_document_in_result 
     * @return $this
     */
    public function setNeedDocumentInResult($need_document_in_result)
    {
        
        $this->need_document_in_result = $need_document_in_result;
        return $this;
    }
    
    /**
     * Gets tag_id
     * @return string
     */
    public function getTagId()
    {
        return $this->tag_id;
    }
  
    /**
     * Sets tag_id
     * @param string $tag_id 
     * @return $this
     */
    public function setTagId($tag_id)
    {
        
        $this->tag_id = $tag_id;
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
     * @param \Swagger\Client\Model\Weight[] $weights 
     * @return $this
     */
    public function setWeights($weights)
    {
        
        $this->weights = $weights;
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


