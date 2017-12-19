<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for databaseStruct StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class DatabaseStruct extends AbstractStructBase
{
    /**
     * The db
     * @var string
     */
    public $db;
    /**
     * The quota
     * @var float
     */
    public $quota;
    /**
     * The limit
     * @var float
     */
    public $limit;
    /**
     * The version
     * @var string
     */
    public $version;
    /**
     * The date
     * @var string
     */
    public $date;
    /**
     * The state
     * @var string
     */
    public $state;
    /**
     * The type
     * @var string
     */
    public $type;
    /**
     * The server
     * @var string
     */
    public $server;
    /**
     * The todo
     * @var bool
     */
    public $todo;
    /**
     * The quota_warning
     * @var bool
     */
    public $quota_warning;
    /**
     * Constructor method for databaseStruct
     * @uses DatabaseStruct::setDb()
     * @uses DatabaseStruct::setQuota()
     * @uses DatabaseStruct::setLimit()
     * @uses DatabaseStruct::setVersion()
     * @uses DatabaseStruct::setDate()
     * @uses DatabaseStruct::setState()
     * @uses DatabaseStruct::setType()
     * @uses DatabaseStruct::setServer()
     * @uses DatabaseStruct::setTodo()
     * @uses DatabaseStruct::setQuota_warning()
     * @param string $db
     * @param float $quota
     * @param float $limit
     * @param string $version
     * @param string $date
     * @param string $state
     * @param string $type
     * @param string $server
     * @param bool $todo
     * @param bool $quota_warning
     */
    public function __construct($db = null, $quota = null, $limit = null, $version = null, $date = null, $state = null, $type = null, $server = null, $todo = null, $quota_warning = null)
    {
        $this
            ->setDb($db)
            ->setQuota($quota)
            ->setLimit($limit)
            ->setVersion($version)
            ->setDate($date)
            ->setState($state)
            ->setType($type)
            ->setServer($server)
            ->setTodo($todo)
            ->setQuota_warning($quota_warning);
    }
    /**
     * Get db value
     * @return string|null
     */
    public function getDb()
    {
        return $this->db;
    }
    /**
     * Set db value
     * @param string $db
     * @return \PayPal\StructType\DatabaseStruct
     */
    public function setDb($db = null)
    {
        // validation for constraint: string
        if (!is_null($db) && !is_string($db)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($db)), __LINE__);
        }
        $this->db = $db;
        return $this;
    }
    /**
     * Get quota value
     * @return float|null
     */
    public function getQuota()
    {
        return $this->quota;
    }
    /**
     * Set quota value
     * @param float $quota
     * @return \PayPal\StructType\DatabaseStruct
     */
    public function setQuota($quota = null)
    {
        $this->quota = $quota;
        return $this;
    }
    /**
     * Get limit value
     * @return float|null
     */
    public function getLimit()
    {
        return $this->limit;
    }
    /**
     * Set limit value
     * @param float $limit
     * @return \PayPal\StructType\DatabaseStruct
     */
    public function setLimit($limit = null)
    {
        $this->limit = $limit;
        return $this;
    }
    /**
     * Get version value
     * @return string|null
     */
    public function getVersion()
    {
        return $this->version;
    }
    /**
     * Set version value
     * @param string $version
     * @return \PayPal\StructType\DatabaseStruct
     */
    public function setVersion($version = null)
    {
        // validation for constraint: string
        if (!is_null($version) && !is_string($version)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($version)), __LINE__);
        }
        $this->version = $version;
        return $this;
    }
    /**
     * Get date value
     * @return string|null
     */
    public function getDate()
    {
        return $this->date;
    }
    /**
     * Set date value
     * @param string $date
     * @return \PayPal\StructType\DatabaseStruct
     */
    public function setDate($date = null)
    {
        // validation for constraint: string
        if (!is_null($date) && !is_string($date)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($date)), __LINE__);
        }
        $this->date = $date;
        return $this;
    }
    /**
     * Get state value
     * @return string|null
     */
    public function getState()
    {
        return $this->state;
    }
    /**
     * Set state value
     * @param string $state
     * @return \PayPal\StructType\DatabaseStruct
     */
    public function setState($state = null)
    {
        // validation for constraint: string
        if (!is_null($state) && !is_string($state)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($state)), __LINE__);
        }
        $this->state = $state;
        return $this;
    }
    /**
     * Get type value
     * @return string|null
     */
    public function getType()
    {
        return $this->type;
    }
    /**
     * Set type value
     * @param string $type
     * @return \PayPal\StructType\DatabaseStruct
     */
    public function setType($type = null)
    {
        // validation for constraint: string
        if (!is_null($type) && !is_string($type)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($type)), __LINE__);
        }
        $this->type = $type;
        return $this;
    }
    /**
     * Get server value
     * @return string|null
     */
    public function getServer()
    {
        return $this->server;
    }
    /**
     * Set server value
     * @param string $server
     * @return \PayPal\StructType\DatabaseStruct
     */
    public function setServer($server = null)
    {
        // validation for constraint: string
        if (!is_null($server) && !is_string($server)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($server)), __LINE__);
        }
        $this->server = $server;
        return $this;
    }
    /**
     * Get todo value
     * @return bool|null
     */
    public function getTodo()
    {
        return $this->todo;
    }
    /**
     * Set todo value
     * @param bool $todo
     * @return \PayPal\StructType\DatabaseStruct
     */
    public function setTodo($todo = null)
    {
        // validation for constraint: boolean
        if (!is_null($todo) && !is_bool($todo)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($todo)), __LINE__);
        }
        $this->todo = $todo;
        return $this;
    }
    /**
     * Get quota_warning value
     * @return bool|null
     */
    public function getQuota_warning()
    {
        return $this->quota_warning;
    }
    /**
     * Set quota_warning value
     * @param bool $quota_warning
     * @return \PayPal\StructType\DatabaseStruct
     */
    public function setQuota_warning($quota_warning = null)
    {
        // validation for constraint: boolean
        if (!is_null($quota_warning) && !is_bool($quota_warning)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($quota_warning)), __LINE__);
        }
        $this->quota_warning = $quota_warning;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \PayPal\StructType\DatabaseStruct
     */
    public static function __set_state(array $array)
    {
        return parent::__set_state($array);
    }
    /**
     * Method returning the class name
     * @return string __CLASS__
     */
    public function __toString()
    {
        return __CLASS__;
    }
}
