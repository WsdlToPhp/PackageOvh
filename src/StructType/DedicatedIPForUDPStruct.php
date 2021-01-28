<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for dedicatedIPForUDPStruct StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class DedicatedIPForUDPStruct extends AbstractStructBase
{
    /**
     * The ip
     * @var string
     */
    public $ip;
    /**
     * The routedTo
     * @var string
     */
    public $routedTo;
    /**
     * The status
     * @var string
     */
    public $status;
    /**
     * The mac
     * @var string
     */
    public $mac;
    /**
     * The reverse
     * @var string
     */
    public $reverse;
    /**
     * Constructor method for dedicatedIPForUDPStruct
     * @uses DedicatedIPForUDPStruct::setIp()
     * @uses DedicatedIPForUDPStruct::setRoutedTo()
     * @uses DedicatedIPForUDPStruct::setStatus()
     * @uses DedicatedIPForUDPStruct::setMac()
     * @uses DedicatedIPForUDPStruct::setReverse()
     * @param string $ip
     * @param string $routedTo
     * @param string $status
     * @param string $mac
     * @param string $reverse
     */
    public function __construct($ip = null, $routedTo = null, $status = null, $mac = null, $reverse = null)
    {
        $this
            ->setIp($ip)
            ->setRoutedTo($routedTo)
            ->setStatus($status)
            ->setMac($mac)
            ->setReverse($reverse);
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
     * @return \Ovh\StructType\DedicatedIPForUDPStruct
     */
    public function setIp($ip = null)
    {
        // validation for constraint: string
        if (!is_null($ip) && !is_string($ip)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($ip, true), gettype($ip)), __LINE__);
        }
        $this->ip = $ip;
        return $this;
    }
    /**
     * Get routedTo value
     * @return string|null
     */
    public function getRoutedTo()
    {
        return $this->routedTo;
    }
    /**
     * Set routedTo value
     * @param string $routedTo
     * @return \Ovh\StructType\DedicatedIPForUDPStruct
     */
    public function setRoutedTo($routedTo = null)
    {
        // validation for constraint: string
        if (!is_null($routedTo) && !is_string($routedTo)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($routedTo, true), gettype($routedTo)), __LINE__);
        }
        $this->routedTo = $routedTo;
        return $this;
    }
    /**
     * Get status value
     * @return string|null
     */
    public function getStatus()
    {
        return $this->status;
    }
    /**
     * Set status value
     * @param string $status
     * @return \Ovh\StructType\DedicatedIPForUDPStruct
     */
    public function setStatus($status = null)
    {
        // validation for constraint: string
        if (!is_null($status) && !is_string($status)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($status, true), gettype($status)), __LINE__);
        }
        $this->status = $status;
        return $this;
    }
    /**
     * Get mac value
     * @return string|null
     */
    public function getMac()
    {
        return $this->mac;
    }
    /**
     * Set mac value
     * @param string $mac
     * @return \Ovh\StructType\DedicatedIPForUDPStruct
     */
    public function setMac($mac = null)
    {
        // validation for constraint: string
        if (!is_null($mac) && !is_string($mac)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($mac, true), gettype($mac)), __LINE__);
        }
        $this->mac = $mac;
        return $this;
    }
    /**
     * Get reverse value
     * @return string|null
     */
    public function getReverse()
    {
        return $this->reverse;
    }
    /**
     * Set reverse value
     * @param string $reverse
     * @return \Ovh\StructType\DedicatedIPForUDPStruct
     */
    public function setReverse($reverse = null)
    {
        // validation for constraint: string
        if (!is_null($reverse) && !is_string($reverse)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($reverse, true), gettype($reverse)), __LINE__);
        }
        $this->reverse = $reverse;
        return $this;
    }
}
