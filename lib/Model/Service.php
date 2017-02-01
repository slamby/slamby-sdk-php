<?php


/**
 * Service
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
 * Service Class Doc Comment
 *
 * @category    Class
 * @description 
 * @package     Swagger\Client
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class Service implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    static $swaggerModelName = 'Service';

    /**
      * Array of property to type mappings. Used for (de)serialization 
      * @var string[]
      */
    static $swaggerTypes = array(
        'id' => 'string',
        'name' => 'string',
        'alias' => 'string',
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
        'id' => 'Id',
        'name' => 'Name',
        'alias' => 'Alias',
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
        'id' => 'setId',
        'name' => 'setName',
        'alias' => 'setAlias',
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
        'id' => 'getId',
        'name' => 'getName',
        'alias' => 'getAlias',
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
      * $id Service unique identifier. It cannot be modified.
      * @var string
      */
    protected $id;
    
    /**
      * $name User-defined name for the service
      * @var string
      */
    protected $name;
    
    /**
      * $alias Alias name of the service. Services can be accessed via this name.\r\nAlias can be modified. It is unique amongst the services.
      * @var string
      */
    protected $alias;
    
    /**
      * $description Service description
      * @var string
      */
    protected $description;
    
    /**
      * $status New - the service was created | \r\nBusy - the service is working on something (e.g.: during the Prepare) | \r\nPrepared - the service was prepared so you can activate it to use | \r\nActive - the service so you can use it
      * @var string
      */
    protected $status;
    
    /**
      * $type Type of the service.\r\nCurrently supported types:\r\n- Classifier\r\n- Prc
      * @var string
      */
    protected $type;
    
    /**
      * $process_id_list Contains all the process ids which belong to this service
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
            $this->id = $data["id"];
            $this->name = $data["name"];
            $this->alias = $data["alias"];
            $this->description = $data["description"];
            $this->status = $data["status"];
            $this->type = $data["type"];
            $this->process_id_list = $data["process_id_list"];
            $this->actual_process_id = $data["actual_process_id"];
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
     * @param string $id Service unique identifier. It cannot be modified.
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
     * @param string $name User-defined name for the service
     * @return $this
     */
    public function setName($name)
    {
        
        $this->name = $name;
        return $this;
    }
    
    /**
     * Gets alias
     * @return string
     */
    public function getAlias()
    {
        return $this->alias;
    }
  
    /**
     * Sets alias
     * @param string $alias Alias name of the service. Services can be accessed via this name.\r\nAlias can be modified. It is unique amongst the services.
     * @return $this
     */
    public function setAlias($alias)
    {
        
        $this->alias = $alias;
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
     * @param string $description Service description
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
     * @param string $status New - the service was created | \r\nBusy - the service is working on something (e.g.: during the Prepare) | \r\nPrepared - the service was prepared so you can activate it to use | \r\nActive - the service so you can use it
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
     * @param string $type Type of the service.\r\nCurrently supported types:\r\n- Classifier\r\n- Prc
     * @return $this
     */
    public function setType($type)
    {
        $allowed_values = array("Classifier", "Prc", "Search");
        if (!in_array($type, $allowed_values)) {
            throw new \InvalidArgumentException("Invalid value for 'type', must be one of 'Classifier', 'Prc', 'Search'");
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
     * @param string[] $process_id_list Contains all the process ids which belong to this service
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


