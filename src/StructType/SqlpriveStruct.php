<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for sqlpriveStruct StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class SqlpriveStruct extends AbstractStructBase
{
    /**
     * The server
     * @var string
     */
    public $server;
    /**
     * The expiration
     * @var string
     */
    public $expiration;
    /**
     * The memory
     * @var string
     */
    public $memory;
    /**
     * The ip
     * @var string
     */
    public $ip;
    /**
     * The type
     * @var string
     */
    public $type;
    /**
     * The version
     * @var string
     */
    public $version;
    /**
     * Constructor method for sqlpriveStruct
     * @uses SqlpriveStruct::setServer()
     * @uses SqlpriveStruct::setExpiration()
     * @uses SqlpriveStruct::setMemory()
     * @uses SqlpriveStruct::setIp()
     * @uses SqlpriveStruct::setType()
     * @uses SqlpriveStruct::setVersion()
     * @param string $server
     * @param string $expiration
     * @param string $memory
     * @param string $ip
     * @param string $type
     * @param string $version
     */
    public function __construct($server = null, $expiration = null, $memory = null, $ip = null, $type = null, $version = null)
    {
        $this
            ->setServer($server)
            ->setExpiration($expiration)
            ->setMemory($memory)
            ->setIp($ip)
            ->setType($type)
            ->setVersion($version);
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
     * @return \Ovh\StructType\SqlpriveStruct
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
     * Get expiration value
     * @return string|null
     */
    public function getExpiration()
    {
        return $this->expiration;
    }
    /**
     * Set expiration value
     * @param string $expiration
     * @return \Ovh\StructType\SqlpriveStruct
     */
    public function setExpiration($expiration = null)
    {
        // validation for constraint: string
        if (!is_null($expiration) && !is_string($expiration)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($expiration)), __LINE__);
        }
        $this->expiration = $expiration;
        return $this;
    }
    /**
     * Get memory value
     * @return string|null
     */
    public function getMemory()
    {
        return $this->memory;
    }
    /**
     * Set memory value
     * @param string $memory
     * @return \Ovh\StructType\SqlpriveStruct
     */
    public function setMemory($memory = null)
    {
        // validation for constraint: string
        if (!is_null($memory) && !is_string($memory)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($memory)), __LINE__);
        }
        $this->memory = $memory;
        return $this;
    }
    /**
     * Get ip value
     * @return string|null
     */
    public function getIp()
    {
        return $this->ip;
    }
    /**
     * Set ip value
     * @param string $ip
     * @return \Ovh\StructType\SqlpriveStruct
     */
    public function setIp($ip = null)
    {
        // validation for constraint: string
        if (!is_null($ip) && !is_string($ip)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($ip)), __LINE__);
        }
        $this->ip = $ip;
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
     * @return \Ovh\StructType\SqlpriveStruct
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
     * @return \Ovh\StructType\SqlpriveStruct
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
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ovh\StructType\SqlpriveStruct
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
