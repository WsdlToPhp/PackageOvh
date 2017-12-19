<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for dedicatedIPForUDPMove StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class DedicatedIPForUDPMove extends AbstractStructBase
{
    /**
     * The session
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $session;
    /**
     * The hostname
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $hostname;
    /**
     * The hostnameTo
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $hostnameTo;
    /**
     * The ip
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $ip;
    /**
     * Constructor method for dedicatedIPForUDPMove
     * @uses DedicatedIPForUDPMove::setSession()
     * @uses DedicatedIPForUDPMove::setHostname()
     * @uses DedicatedIPForUDPMove::setHostnameTo()
     * @uses DedicatedIPForUDPMove::setIp()
     * @param string $session
     * @param string $hostname
     * @param string $hostnameTo
     * @param string $ip
     */
    public function __construct($session = null, $hostname = null, $hostnameTo = null, $ip = null)
    {
        $this
            ->setSession($session)
            ->setHostname($hostname)
            ->setHostnameTo($hostnameTo)
            ->setIp($ip);
    }
    /**
     * Get session value
     * @return string|null
     */
    public function getSession()
    {
        return $this->session;
    }
    /**
     * Set session value
     * @param string $session
     * @return \Ovh\StructType\DedicatedIPForUDPMove
     */
    public function setSession($session = null)
    {
        // validation for constraint: string
        if (!is_null($session) && !is_string($session)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($session)), __LINE__);
        }
        $this->session = $session;
        return $this;
    }
    /**
     * Get hostname value
     * @return string|null
     */
    public function getHostname()
    {
        return $this->hostname;
    }
    /**
     * Set hostname value
     * @param string $hostname
     * @return \Ovh\StructType\DedicatedIPForUDPMove
     */
    public function setHostname($hostname = null)
    {
        // validation for constraint: string
        if (!is_null($hostname) && !is_string($hostname)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($hostname)), __LINE__);
        }
        $this->hostname = $hostname;
        return $this;
    }
    /**
     * Get hostnameTo value
     * @return string|null
     */
    public function getHostnameTo()
    {
        return $this->hostnameTo;
    }
    /**
     * Set hostnameTo value
     * @param string $hostnameTo
     * @return \Ovh\StructType\DedicatedIPForUDPMove
     */
    public function setHostnameTo($hostnameTo = null)
    {
        // validation for constraint: string
        if (!is_null($hostnameTo) && !is_string($hostnameTo)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($hostnameTo)), __LINE__);
        }
        $this->hostnameTo = $hostnameTo;
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
     * @return \Ovh\StructType\DedicatedIPForUDPMove
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
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ovh\StructType\DedicatedIPForUDPMove
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
