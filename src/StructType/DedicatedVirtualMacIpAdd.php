<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for dedicatedVirtualMacIpAdd StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class DedicatedVirtualMacIpAdd extends AbstractStructBase
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
     * The ip
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $ip;
    /**
     * The newMac
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $newMac;
    /**
     * The typeMac
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $typeMac;
    /**
     * The macName
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $macName;
    /**
     * The mac
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $mac;
    /**
     * Constructor method for dedicatedVirtualMacIpAdd
     * @uses DedicatedVirtualMacIpAdd::setSession()
     * @uses DedicatedVirtualMacIpAdd::setHostname()
     * @uses DedicatedVirtualMacIpAdd::setIp()
     * @uses DedicatedVirtualMacIpAdd::setNewMac()
     * @uses DedicatedVirtualMacIpAdd::setTypeMac()
     * @uses DedicatedVirtualMacIpAdd::setMacName()
     * @uses DedicatedVirtualMacIpAdd::setMac()
     * @param string $session
     * @param string $hostname
     * @param string $ip
     * @param string $newMac
     * @param string $typeMac
     * @param string $macName
     * @param string $mac
     */
    public function __construct($session = null, $hostname = null, $ip = null, $newMac = null, $typeMac = null, $macName = null, $mac = null)
    {
        $this
            ->setSession($session)
            ->setHostname($hostname)
            ->setIp($ip)
            ->setNewMac($newMac)
            ->setTypeMac($typeMac)
            ->setMacName($macName)
            ->setMac($mac);
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
     * @return \Ovh\StructType\DedicatedVirtualMacIpAdd
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
     * @return \Ovh\StructType\DedicatedVirtualMacIpAdd
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
     * @return \Ovh\StructType\DedicatedVirtualMacIpAdd
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
     * Get newMac value
     * @return string|null
     */
    public function getNewMac()
    {
        return $this->newMac;
    }
    /**
     * Set newMac value
     * @param string $newMac
     * @return \Ovh\StructType\DedicatedVirtualMacIpAdd
     */
    public function setNewMac($newMac = null)
    {
        // validation for constraint: string
        if (!is_null($newMac) && !is_string($newMac)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($newMac)), __LINE__);
        }
        $this->newMac = $newMac;
        return $this;
    }
    /**
     * Get typeMac value
     * @return string|null
     */
    public function getTypeMac()
    {
        return $this->typeMac;
    }
    /**
     * Set typeMac value
     * @param string $typeMac
     * @return \Ovh\StructType\DedicatedVirtualMacIpAdd
     */
    public function setTypeMac($typeMac = null)
    {
        // validation for constraint: string
        if (!is_null($typeMac) && !is_string($typeMac)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($typeMac)), __LINE__);
        }
        $this->typeMac = $typeMac;
        return $this;
    }
    /**
     * Get macName value
     * @return string|null
     */
    public function getMacName()
    {
        return $this->macName;
    }
    /**
     * Set macName value
     * @param string $macName
     * @return \Ovh\StructType\DedicatedVirtualMacIpAdd
     */
    public function setMacName($macName = null)
    {
        // validation for constraint: string
        if (!is_null($macName) && !is_string($macName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($macName)), __LINE__);
        }
        $this->macName = $macName;
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
     * @return \Ovh\StructType\DedicatedVirtualMacIpAdd
     */
    public function setMac($mac = null)
    {
        // validation for constraint: string
        if (!is_null($mac) && !is_string($mac)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($mac)), __LINE__);
        }
        $this->mac = $mac;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ovh\StructType\DedicatedVirtualMacIpAdd
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
