<?php


/**
 * DocumentSampleSettings
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
 * DocumentSampleSettings Class Doc Comment
 *
 * @category    Class
 * @description 
 * @package     Swagger\Client
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class DocumentSampleSettings implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    static $swaggerModelName = 'DocumentSampleSettings';

    /**
      * Array of property to type mappings. Used for (de)serialization 
      * @var string[]
      */
    static $swaggerTypes = array(
        'id' => 'string',
        'tag_id_list' => 'string[]',
        'percent' => 'double',
        'size' => 'int',
        'field_list' => 'string[]'
    );
  
    static function swaggerTypes() {
        return self::$swaggerTypes;
    }

    /** 
      * Array of attributes where the key is the local name, and the value is the original name
      * @var string[] 
      */
    static $attributeMap = array(
        'id' => 'Id',
        'tag_id_list' => 'TagIdList',
        'percent' => 'Percent',
        'size' => 'Size',
        'field_list' => 'FieldList'
    );
  
    static function attributeMap() {
        return self::$attributeMap;
    }

    /**
      * Array of attributes to setter functions (for deserialization of responses)
      * @var string[]
      */
    static $setters = array(
        'id' => 'setId',
        'tag_id_list' => 'setTagIdList',
        'percent' => 'setPercent',
        'size' => 'setSize',
        'field_list' => 'setFieldList'
    );
  
    static function setters() {
        return self::$setters;
    }

    /**
      * Array of attributes to getter functions (for serialization of requests)
      * @var string[]
      */
    static $getters = array(
        'id' => 'getId',
        'tag_id_list' => 'getTagIdList',
        'percent' => 'getPercent',
        'size' => 'getSize',
        'field_list' => 'getFieldList'
    );
  
    static function getters() {
        return self::$getters;
    }

    
    /**
      * $id It must be a random string for every new sampling, but must be the same for the same sampling during pagination. \r\n            If you leave it empty then it'll be generated automatically, but then you can not use pagination
      * @var string
      */
    protected $id;
    
    /**
      * $tag_id_list You can create a sample from a whole dataset, or just from a given tag section. \r\n            To create a sample from the whole dataset please keep it empty. \r\n            To create a sample from a given number of tags please provide the tag ids
      * @var string[]
      */
    protected $tag_id_list;
    
    /**
      * $percent Defining the sample size, you can use percentage or a given number. \r\n            Using a percentage you can define the document number by a percentage. \r\n            This percentage will calculate the document number by using the available dataset document number. \r\n            E.g.: if your dataset contains 100.000 documents and you are using 10% as a sampling size without stratified method, your sample size is 100.000 x 10% = 10.000
      * @var double
      */
    protected $percent;
    
    /**
      * $size Define your sample size by providing a simple integer. \r\n            E.g.: if your dataset contains 100.000 documents and you are using 3.000 as a sampling size without stratified method, your sample size is 3.000
      * @var int
      */
    protected $size;
    
    /**
      * $field_list Query returns only with the specified field(s)
      * @var string[]
      */
    protected $field_list;
    

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = null)
    {
        
        

        if ($data != null) {
            $this->id = $data["id"];
            $this->tag_id_list = $data["tag_id_list"];
            $this->percent = $data["percent"];
            $this->size = $data["size"];
            $this->field_list = $data["field_list"];
        }
    }
    
    /**
     * Gets id
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }
  
    /**
     * Sets id
     * @param string $id It must be a random string for every new sampling, but must be the same for the same sampling during pagination. \r\n            If you leave it empty then it'll be generated automatically, but then you can not use pagination
     * @return $this
     */
    public function setId($id)
    {
        
        $this->id = $id;
        return $this;
    }
    
    /**
     * Gets tag_id_list
     * @return string[]
     */
    public function getTagIdList()
    {
        return $this->tag_id_list;
    }
  
    /**
     * Sets tag_id_list
     * @param string[] $tag_id_list You can create a sample from a whole dataset, or just from a given tag section. \r\n            To create a sample from the whole dataset please keep it empty. \r\n            To create a sample from a given number of tags please provide the tag ids
     * @return $this
     */
    public function setTagIdList($tag_id_list)
    {
        
        $this->tag_id_list = $tag_id_list;
        return $this;
    }
    
    /**
     * Gets percent
     * @return double
     */
    public function getPercent()
    {
        return $this->percent;
    }
  
    /**
     * Sets percent
     * @param double $percent Defining the sample size, you can use percentage or a given number. \r\n            Using a percentage you can define the document number by a percentage. \r\n            This percentage will calculate the document number by using the available dataset document number. \r\n            E.g.: if your dataset contains 100.000 documents and you are using 10% as a sampling size without stratified method, your sample size is 100.000 x 10% = 10.000
     * @return $this
     */
    public function setPercent($percent)
    {
        
        $this->percent = $percent;
        return $this;
    }
    
    /**
     * Gets size
     * @return int
     */
    public function getSize()
    {
        return $this->size;
    }
  
    /**
     * Sets size
     * @param int $size Define your sample size by providing a simple integer. \r\n            E.g.: if your dataset contains 100.000 documents and you are using 3.000 as a sampling size without stratified method, your sample size is 3.000
     * @return $this
     */
    public function setSize($size)
    {
        
        $this->size = $size;
        return $this;
    }
    
    /**
     * Gets field_list
     * @return string[]
     */
    public function getFieldList()
    {
        return $this->field_list;
    }
  
    /**
     * Sets field_list
     * @param string[] $field_list Query returns only with the specified field(s)
     * @return $this
     */
    public function setFieldList($field_list)
    {
        
        $this->field_list = $field_list;
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


