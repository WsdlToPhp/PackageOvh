<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for dedicatedInfoReturn StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class DedicatedInfoReturn extends AbstractStructBase
{
    /**
     * The hostname
     * @var string
     */
    public $hostname;
    /**
     * The datacenter
     * @var string
     */
    public $datacenter;
    /**
     * The os
     * @var string
     */
    public $os;
    /**
     * The isKimSufi
     * @var bool
     */
    public $isKimSufi;
    /**
     * The isRPS
     * @var bool
     */
    public $isRPS;
    /**
     * The isHG
     * @var bool
     */
    public $isHG;
    /**
     * The num
     * @var int
     */
    public $num;
    /**
     * The rack
     * @var string
     */
    public $rack;
    /**
     * The countryBilling
     * @var string
     */
    public $countryBilling;
    /**
     * The network
     * @var \Ovh\StructType\DedicatedNetworkStruct
     */
    public $network;
    /**
     * The capability
     * @var \Ovh\StructType\DedicatedCapabilityStruct
     */
    public $capability;
    /**
     * The freeDom
     * @var \Ovh\StructType\DedicatedFreedomStruct
     */
    public $freeDom;
    /**
     * Constructor method for dedicatedInfoReturn
     * @uses DedicatedInfoReturn::setHostname()
     * @uses DedicatedInfoReturn::setDatacenter()
     * @uses DedicatedInfoReturn::setOs()
     * @uses DedicatedInfoReturn::setIsKimSufi()
     * @uses DedicatedInfoReturn::setIsRPS()
     * @uses DedicatedInfoReturn::setIsHG()
     * @uses DedicatedInfoReturn::setNum()
     * @uses DedicatedInfoReturn::setRack()
     * @uses DedicatedInfoReturn::setCountryBilling()
     * @uses DedicatedInfoReturn::setNetwork()
     * @uses DedicatedInfoReturn::setCapability()
     * @uses DedicatedInfoReturn::setFreeDom()
     * @param string $hostname
     * @param string $datacenter
     * @param string $os
     * @param bool $isKimSufi
     * @param bool $isRPS
     * @param bool $isHG
     * @param int $num
     * @param string $rack
     * @param string $countryBilling
     * @param \Ovh\StructType\DedicatedNetworkStruct $network
     * @param \Ovh\StructType\DedicatedCapabilityStruct $capability
     * @param \Ovh\StructType\DedicatedFreedomStruct $freeDom
     */
    public function __construct($hostname = null, $datacenter = null, $os = null, $isKimSufi = null, $isRPS = null, $isHG = null, $num = null, $rack = null, $countryBilling = null, \Ovh\StructType\DedicatedNetworkStruct $network = null, \Ovh\StructType\DedicatedCapabilityStruct $capability = null, \Ovh\StructType\DedicatedFreedomStruct $freeDom = null)
    {
        $this
            ->setHostname($hostname)
            ->setDatacenter($datacenter)
            ->setOs($os)
            ->setIsKimSufi($isKimSufi)
            ->setIsRPS($isRPS)
            ->setIsHG($isHG)
            ->setNum($num)
            ->setRack($rack)
            ->setCountryBilling($countryBilling)
            ->setNetwork($network)
            ->setCapability($capability)
            ->setFreeDom($freeDom);
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
     * @return \Ovh\StructType\DedicatedInfoReturn
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
     * Get datacenter value
     * @return string|null
     */
    public function getDatacenter()
    {
        return $this->datacenter;
    }
    /**
     * Set datacenter value
     * @param string $datacenter
     * @return \Ovh\StructType\DedicatedInfoReturn
     */
    public function setDatacenter($datacenter = null)
    {
        // validation for constraint: string
        if (!is_null($datacenter) && !is_string($datacenter)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($datacenter)), __LINE__);
        }
        $this->datacenter = $datacenter;
        return $this;
    }
    /**
     * Get os value
     * @return string|null
     */
    public function getOs()
    {
        return $this->os;
    }
    /**
     * Set os value
     * @param string $os
     * @return \Ovh\StructType\DedicatedInfoReturn
     */
    public function setOs($os = null)
    {
        // validation for constraint: string
        if (!is_null($os) && !is_string($os)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($os)), __LINE__);
        }
        $this->os = $os;
        return $this;
    }
    /**
     * Get isKimSufi value
     * @return bool|null
     */
    public function getIsKimSufi()
    {
        return $this->isKimSufi;
    }
    /**
     * Set isKimSufi value
     * @param bool $isKimSufi
     * @return \Ovh\StructType\DedicatedInfoReturn
     */
    public function setIsKimSufi($isKimSufi = null)
    {
        // validation for constraint: boolean
        if (!is_null($isKimSufi) && !is_bool($isKimSufi)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($isKimSufi)), __LINE__);
        }
        $this->isKimSufi = $isKimSufi;
        return $this;
    }
    /**
     * Get isRPS value
     * @return bool|null
     */
    public function getIsRPS()
    {
        return $this->isRPS;
    }
    /**
     * Set isRPS value
     * @param bool $isRPS
     * @return \Ovh\StructType\DedicatedInfoReturn
     */
    public function setIsRPS($isRPS = null)
    {
        // validation for constraint: boolean
        if (!is_null($isRPS) && !is_bool($isRPS)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($isRPS)), __LINE__);
        }
        $this->isRPS = $isRPS;
        return $this;
    }
    /**
     * Get isHG value
     * @return bool|null
     */
    public function getIsHG()
    {
        return $this->isHG;
    }
    /**
     * Set isHG value
     * @param bool $isHG
     * @return \Ovh\StructType\DedicatedInfoReturn
     */
    public function setIsHG($isHG = null)
    {
        // validation for constraint: boolean
        if (!is_null($isHG) && !is_bool($isHG)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($isHG)), __LINE__);
        }
        $this->isHG = $isHG;
        return $this;
    }
    /**
     * Get num value
     * @return int|null
     */
    public function getNum()
    {
        return $this->num;
    }
    /**
     * Set num value
     * @param int $num
     * @return \Ovh\StructType\DedicatedInfoReturn
     */
    public function setNum($num = null)
    {
        // validation for constraint: int
        if (!is_null($num) && !is_numeric($num)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($num)), __LINE__);
        }
        $this->num = $num;
        return $this;
    }
    /**
     * Get rack value
     * @return string|null
     */
    public function getRack()
    {
        return $this->rack;
    }
    /**
     * Set rack value
     * @param string $rack
     * @return \Ovh\StructType\DedicatedInfoReturn
     */
    public function setRack($rack = null)
    {
        // validation for constraint: string
        if (!is_null($rack) && !is_string($rack)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($rack)), __LINE__);
        }
        $this->rack = $rack;
        return $this;
    }
    /**
     * Get countryBilling value
     * @return string|null
     */
    public function getCountryBilling()
    {
        return $this->countryBilling;
    }
    /**
     * Set countryBilling value
     * @param string $countryBilling
     * @return \Ovh\StructType\DedicatedInfoReturn
     */
    public function setCountryBilling($countryBilling = null)
    {
        // validation for constraint: string
        if (!is_null($countryBilling) && !is_string($countryBilling)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($countryBilling)), __LINE__);
        }
        $this->countryBilling = $countryBilling;
        return $this;
    }
    /**
     * Get network value
     * @return \Ovh\StructType\DedicatedNetworkStruct|null
     */
    public function getNetwork()
    {
        return $this->network;
    }
    /**
     * Set network value
     * @param \Ovh\StructType\DedicatedNetworkStruct $network
     * @return \Ovh\StructType\DedicatedInfoReturn
     */
    public function setNetwork(\Ovh\StructType\DedicatedNetworkStruct $network = null)
    {
        $this->network = $network;
        return $this;
    }
    /**
     * Get capability value
     * @return \Ovh\StructType\DedicatedCapabilityStruct|null
     */
    public function getCapability()
    {
        return $this->capability;
    }
    /**
     * Set capability value
     * @param \Ovh\StructType\DedicatedCapabilityStruct $capability
     * @return \Ovh\StructType\DedicatedInfoReturn
     */
    public function setCapability(\Ovh\StructType\DedicatedCapabilityStruct $capability = null)
    {
        $this->capability = $capability;
        return $this;
    }
    /**
     * Get freeDom value
     * @return \Ovh\StructType\DedicatedFreedomStruct|null
     */
    public function getFreeDom()
    {
        return $this->freeDom;
    }
    /**
     * Set freeDom value
     * @param \Ovh\StructType\DedicatedFreedomStruct $freeDom
     * @return \Ovh\StructType\DedicatedInfoReturn
     */
    public function setFreeDom(\Ovh\StructType\DedicatedFreedomStruct $freeDom = null)
    {
        $this->freeDom = $freeDom;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ovh\StructType\DedicatedInfoReturn
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
