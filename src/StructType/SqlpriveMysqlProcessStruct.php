<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for sqlpriveMysqlProcessStruct StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class SqlpriveMysqlProcessStruct extends AbstractStructBase
{
    /**
     * The id
     * @var int
     */
    public $id;
    /**
     * The user
     * @var string
     */
    public $user;
    /**
     * The host
     * @var string
     */
    public $host;
    /**
     * The database
     * @var string
     */
    public $database;
    /**
     * The query
     * @var string
     */
    public $query;
    /**
     * The time
     * @var string
     */
    public $time;
    /**
     * The state
     * @var string
     */
    public $state;
    /**
     * The request
     * @var string
     */
    public $request;
    /**
     * Constructor method for sqlpriveMysqlProcessStruct
     * @uses SqlpriveMysqlProcessStruct::setId()
     * @uses SqlpriveMysqlProcessStruct::setUser()
     * @uses SqlpriveMysqlProcessStruct::setHost()
     * @uses SqlpriveMysqlProcessStruct::setDatabase()
     * @uses SqlpriveMysqlProcessStruct::setQuery()
     * @uses SqlpriveMysqlProcessStruct::setTime()
     * @uses SqlpriveMysqlProcessStruct::setState()
     * @uses SqlpriveMysqlProcessStruct::setRequest()
     * @param int $id
     * @param string $user
     * @param string $host
     * @param string $database
     * @param string $query
     * @param string $time
     * @param string $state
     * @param string $request
     */
    public function __construct($id = null, $user = null, $host = null, $database = null, $query = null, $time = null, $state = null, $request = null)
    {
        $this
            ->setId($id)
            ->setUser($user)
            ->setHost($host)
            ->setDatabase($database)
            ->setQuery($query)
            ->setTime($time)
            ->setState($state)
            ->setRequest($request);
    }
    /**
     * Get id value
     * @return int|null
     */
    public function getId()
    {
        return $this->id;
    }
    /**
     * Set id value
     * @param int $id
     * @return \PayPal\StructType\SqlpriveMysqlProcessStruct
     */
    public function setId($id = null)
    {
        // validation for constraint: int
        if (!is_null($id) && !is_numeric($id)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($id)), __LINE__);
        }
        $this->id = $id;
        return $this;
    }
    /**
     * Get user value
     * @return string|null
     */
    public function getUser()
    {
        return $this->user;
    }
    /**
     * Set user value
     * @param string $user
     * @return \PayPal\StructType\SqlpriveMysqlProcessStruct
     */
    public function setUser($user = null)
    {
        // validation for constraint: string
        if (!is_null($user) && !is_string($user)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($user)), __LINE__);
        }
        $this->user = $user;
        return $this;
    }
    /**
     * Get host value
     * @return string|null
     */
    public function getHost()
    {
        return $this->host;
    }
    /**
     * Set host value
     * @param string $host
     * @return \PayPal\StructType\SqlpriveMysqlProcessStruct
     */
    public function setHost($host = null)
    {
        // validation for constraint: string
        if (!is_null($host) && !is_string($host)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($host)), __LINE__);
        }
        $this->host = $host;
        return $this;
    }
    /**
     * Get database value
     * @return string|null
     */
    public function getDatabase()
    {
        return $this->database;
    }
    /**
     * Set database value
     * @param string $database
     * @return \PayPal\StructType\SqlpriveMysqlProcessStruct
     */
    public function setDatabase($database = null)
    {
        // validation for constraint: string
        if (!is_null($database) && !is_string($database)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($database)), __LINE__);
        }
        $this->database = $database;
        return $this;
    }
    /**
     * Get query value
     * @return string|null
     */
    public function getQuery()
    {
        return $this->query;
    }
    /**
     * Set query value
     * @param string $query
     * @return \PayPal\StructType\SqlpriveMysqlProcessStruct
     */
    public function setQuery($query = null)
    {
        // validation for constraint: string
        if (!is_null($query) && !is_string($query)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($query)), __LINE__);
        }
        $this->query = $query;
        return $this;
    }
    /**
     * Get time value
     * @return string|null
     */
    public function getTime()
    {
        return $this->time;
    }
    /**
     * Set time value
     * @param string $time
     * @return \PayPal\StructType\SqlpriveMysqlProcessStruct
     */
    public function setTime($time = null)
    {
        // validation for constraint: string
        if (!is_null($time) && !is_string($time)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($time)), __LINE__);
        }
        $this->time = $time;
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
     * @return \PayPal\StructType\SqlpriveMysqlProcessStruct
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
     * Get request value
     * @return string|null
     */
    public function getRequest()
    {
        return $this->request;
    }
    /**
     * Set request value
     * @param string $request
     * @return \PayPal\StructType\SqlpriveMysqlProcessStruct
     */
    public function setRequest($request = null)
    {
        // validation for constraint: string
        if (!is_null($request) && !is_string($request)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($request)), __LINE__);
        }
        $this->request = $request;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \PayPal\StructType\SqlpriveMysqlProcessStruct
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
