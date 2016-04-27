<?php


/**
 * ClassifierService
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
 * ClassifierService Class Doc Comment
 *
 * @category    Class
 * @description 
 * @package     Swagger\Client
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class ClassifierService implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    static $swaggerModelName = 'ClassifierService';

    /**
      * Array of property to type mappings. Used for (de)serialization 
      * @var string[]
      */
    static $swaggerTypes = array(
        'prepare_settings' => '\Swagger\Client\Model\ClassifierPrepareSettings',
        'activate_settings' => '\Swagger\Client\Model\ClassifierActivateSettings',
        'id' => 'string',
        'name' => 'string',
        'description' => 'string',
        'status' => 'string',
        'type' => 'string',
        'process_id_list' => 'string[]',
        'actual_process_id' => 'string'
    );
  
    static function swaggerTypes() {
        return self::$swaggerTypes;
    }

    /** 
      * Array of attributes where the key is the local name, and the value is the original name
      * @var string[] 
      */
    static $attributeMap = array(
        'prepare_settings' => 'PrepareSettings',
        'activate_settings' => 'ActivateSettings',
        'id' => 'Id',
        'name' => 'Name',
        'description' => 'Description',
        'status' => 'Status',
        'type' => 'Type',
        'process_id_list' => 'ProcessIdList',
        'actual_process_id' => 'ActualProcessId'
    );
  
    static function attributeMap() {
        return self::$attributeMap;
    }

    /**
      * Array of attributes to setter functions (for deserialization of responses)
      * @var string[]
      */
    static $setters = array(
        'prepare_settings' => 'setPrepareSettings',
        'activate_settings' => 'setActivateSettings',
        'id' => 'setId',
        'name' => 'setName',
        'description' => 'setDescription',
        'status' => 'setStatus',
        'type' => 'setType',
        'process_id_list' => 'setProcessIdList',
        'actual_process_id' => 'setActualProcessId'
    );
  
    static function setters() {
        return self::$setters;
    }

    /**
      * Array of attributes to getter functions (for serialization of requests)
      * @var string[]
      */
    static $getters = array(
        'prepare_settings' => 'getPrepareSettings',
        'activate_settings' => 'getActivateSettings',
        'id' => 'getId',
        'name' => 'getName',
        'description' => 'getDescription',
        'status' => 'getStatus',
        'type' => 'getType',
        'process_id_list' => 'getProcessIdList',
        'actual_process_id' => 'getActualProcessId'
    );
  
    static function getters() {
        return self::$getters;
    }

    
    /**
      * $prepare_settings 
      * @var \Swagger\Client\Model\ClassifierPrepareSettings
      */
    protected $prepare_settings;
    
    /**
      * $activate_settings 
      * @var \Swagger\Client\Model\ClassifierActivateSettings
      */
    protected $activate_settings;
    
    /**
      * $id 
      * @var string
      */
    protected $id;
    
    /**
      * $name 
      * @var string
      */
    protected $name;
    
    /**
      * $description 
      * @var string
      */
    protected $description;
    
    /**
      * $status 
      * @var string
      */
    protected $status;
    
    /**
      * $type 
      * @var string
      */
    protected $type;
    
    /**
      * $process_id_list 
      * @var string[]
      */
    protected $process_id_list;
    
    /**
      * $actual_process_id 
      * @var string
      */
    protected $actual_process_id;
    

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = null)
    {
        
        

        if ($data != null) {
            $this->prepare_settings = $data["prepare_settings"];
            $this->activate_settings = $data["activate_settings"];
            $this->id = $data["id"];
            $this->name = $data["name"];
            $this->description = $data["description"];
            $this->status = $data["status"];
            $this->type = $data["type"];
            $this->process_id_list = $data["process_id_list"];
            $this->actual_process_id = $data["actual_process_id"];
        }
    }
    
    /**
     * Gets prepare_settings
     * @return \Swagger\Client\Model\ClassifierPrepareSettings
     */
    public function getPrepareSettings()
    {
        return $this->prepare_settings;
    }
  
    /**
     * Sets prepare_settings
     * @param \Swagger\Client\Model\ClassifierPrepareSettings $prepare_settings 
     * @return $this
     */
    public function setPrepareSettings($prepare_settings)
    {
        
        $this->prepare_settings = $prepare_settings;
        return $this;
    }
    
    /**
     * Gets activate_settings
     * @return \Swagger\Client\Model\ClassifierActivateSettings
     */
    public function getActivateSettings()
    {
        return $this->activate_settings;
    }
  
    /**
     * Sets activate_settings
     * @param \Swagger\Client\Model\ClassifierActivateSettings $activate_settings 
     * @return $this
     */
    public function setActivateSettings($activate_settings)
    {
        
        $this->activate_settings = $activate_settings;
        return $this;
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
     * @param string $id 
     * @return $this
     */
    public function setId($id)
    {
        
        $this->id = $id;
        return $this;
    }
    
    /**
     * Gets name
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }
  
    /**
     * Sets name
     * @param string $name 
     * @return $this
     */
    public function setName($name)
    {
        
        $this->name = $name;
        return $this;
    }
    
    /**
     * Gets description
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }
  
    /**
     * Sets description
     * @param string $description 
     * @return $this
     */
    public function setDescription($description)
    {
        
        $this->description = $description;
        return $this;
    }
    
    /**
     * Gets status
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }
  
    /**
     * Sets status
     * @param string $status 
     * @return $this
     */
    public function setStatus($status)
    {
        $allowed_values = array("New", "Busy", "Prepared", "Active");
        if (!in_array($status, $allowed_values)) {
            throw new \InvalidArgumentException("Invalid value for 'status', must be one of 'New', 'Busy', 'Prepared', 'Active'");
        }
        $this->status = $status;
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
     * @param string $type 
     * @return $this
     */
    public function setType($type)
    {
        $allowed_values = array("Classifier", "Prc");
        if (!in_array($type, $allowed_values)) {
            throw new \InvalidArgumentException("Invalid value for 'type', must be one of 'Classifier', 'Prc'");
        }
        $this->type = $type;
        return $this;
    }
    
    /**
     * Gets process_id_list
     * @return string[]
     */
    public function getProcessIdList()
    {
        return $this->process_id_list;
    }
  
    /**
     * Sets process_id_list
     * @param string[] $process_id_list 
     * @return $this
     */
    public function setProcessIdList($process_id_list)
    {
        
        $this->process_id_list = $process_id_list;
        return $this;
    }
    
    /**
     * Gets actual_process_id
     * @return string
     */
    public function getActualProcessId()
    {
        return $this->actual_process_id;
    }
  
    /**
     * Sets actual_process_id
     * @param string $actual_process_id 
     * @return $this
     */
    public function setActualProcessId($actual_process_id)
    {
        
        $this->actual_process_id = $actual_process_id;
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


