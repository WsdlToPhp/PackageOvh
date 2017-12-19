<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for domainCapabilitiesReturn StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class DomainCapabilitiesReturn extends AbstractStructBase
{
    /**
     * The needAuthInfo
     * @var bool
     */
    public $needAuthInfo;
    /**
     * The needZoneCheck
     * @var bool
     */
    public $needZoneCheck;
    /**
     * The owo
     * @var bool
     */
    public $owo;
    /**
     * The hostIPv4
     * @var bool
     */
    public $hostIPv4;
    /**
     * The hostIPv6
     * @var bool
     */
    public $hostIPv6;
    /**
     * The hostmultiIp
     * @var bool
     */
    public $hostmultiIp;
    /**
     * The ownerUpdateAllowed
     * @var bool
     */
    public $ownerUpdateAllowed;
    /**
     * The ownerTradeAllowed
     * @var bool
     */
    public $ownerTradeAllowed;
    /**
     * Constructor method for domainCapabilitiesReturn
     * @uses DomainCapabilitiesReturn::setNeedAuthInfo()
     * @uses DomainCapabilitiesReturn::setNeedZoneCheck()
     * @uses DomainCapabilitiesReturn::setOwo()
     * @uses DomainCapabilitiesReturn::setHostIPv4()
     * @uses DomainCapabilitiesReturn::setHostIPv6()
     * @uses DomainCapabilitiesReturn::setHostmultiIp()
     * @uses DomainCapabilitiesReturn::setOwnerUpdateAllowed()
     * @uses DomainCapabilitiesReturn::setOwnerTradeAllowed()
     * @param bool $needAuthInfo
     * @param bool $needZoneCheck
     * @param bool $owo
     * @param bool $hostIPv4
     * @param bool $hostIPv6
     * @param bool $hostmultiIp
     * @param bool $ownerUpdateAllowed
     * @param bool $ownerTradeAllowed
     */
    public function __construct($needAuthInfo = null, $needZoneCheck = null, $owo = null, $hostIPv4 = null, $hostIPv6 = null, $hostmultiIp = null, $ownerUpdateAllowed = null, $ownerTradeAllowed = null)
    {
        $this
            ->setNeedAuthInfo($needAuthInfo)
            ->setNeedZoneCheck($needZoneCheck)
            ->setOwo($owo)
            ->setHostIPv4($hostIPv4)
            ->setHostIPv6($hostIPv6)
            ->setHostmultiIp($hostmultiIp)
            ->setOwnerUpdateAllowed($ownerUpdateAllowed)
            ->setOwnerTradeAllowed($ownerTradeAllowed);
    }
    /**
     * Get needAuthInfo value
     * @return bool|null
     */
    public function getNeedAuthInfo()
    {
        return $this->needAuthInfo;
    }
    /**
     * Set needAuthInfo value
     * @param bool $needAuthInfo
     * @return \PayPal\StructType\DomainCapabilitiesReturn
     */
    public function setNeedAuthInfo($needAuthInfo = null)
    {
        // validation for constraint: boolean
        if (!is_null($needAuthInfo) && !is_bool($needAuthInfo)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($needAuthInfo)), __LINE__);
        }
        $this->needAuthInfo = $needAuthInfo;
        return $this;
    }
    /**
     * Get needZoneCheck value
     * @return bool|null
     */
    public function getNeedZoneCheck()
    {
        return $this->needZoneCheck;
    }
    /**
     * Set needZoneCheck value
     * @param bool $needZoneCheck
     * @return \PayPal\StructType\DomainCapabilitiesReturn
     */
    public function setNeedZoneCheck($needZoneCheck = null)
    {
        // validation for constraint: boolean
        if (!is_null($needZoneCheck) && !is_bool($needZoneCheck)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($needZoneCheck)), __LINE__);
        }
        $this->needZoneCheck = $needZoneCheck;
        return $this;
    }
    /**
     * Get owo value
     * @return bool|null
     */
    public function getOwo()
    {
        return $this->owo;
    }
    /**
     * Set owo value
     * @param bool $owo
     * @return \PayPal\StructType\DomainCapabilitiesReturn
     */
    public function setOwo($owo = null)
    {
        // validation for constraint: boolean
        if (!is_null($owo) && !is_bool($owo)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($owo)), __LINE__);
        }
        $this->owo = $owo;
        return $this;
    }
    /**
     * Get hostIPv4 value
     * @return bool|null
     */
    public function getHostIPv4()
    {
        return $this->hostIPv4;
    }
    /**
     * Set hostIPv4 value
     * @param bool $hostIPv4
     * @return \PayPal\StructType\DomainCapabilitiesReturn
     */
    public function setHostIPv4($hostIPv4 = null)
    {
        // validation for constraint: boolean
        if (!is_null($hostIPv4) && !is_bool($hostIPv4)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($hostIPv4)), __LINE__);
        }
        $this->hostIPv4 = $hostIPv4;
        return $this;
    }
    /**
     * Get hostIPv6 value
     * @return bool|null
     */
    public function getHostIPv6()
    {
        return $this->hostIPv6;
    }
    /**
     * Set hostIPv6 value
     * @param bool $hostIPv6
     * @return \PayPal\StructType\DomainCapabilitiesReturn
     */
    public function setHostIPv6($hostIPv6 = null)
    {
        // validation for constraint: boolean
        if (!is_null($hostIPv6) && !is_bool($hostIPv6)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($hostIPv6)), __LINE__);
        }
        $this->hostIPv6 = $hostIPv6;
        return $this;
    }
    /**
     * Get hostmultiIp value
     * @return bool|null
     */
    public function getHostmultiIp()
    {
        return $this->hostmultiIp;
    }
    /**
     * Set hostmultiIp value
     * @param bool $hostmultiIp
     * @return \PayPal\StructType\DomainCapabilitiesReturn
     */
    public function setHostmultiIp($hostmultiIp = null)
    {
        // validation for constraint: boolean
        if (!is_null($hostmultiIp) && !is_bool($hostmultiIp)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($hostmultiIp)), __LINE__);
        }
        $this->hostmultiIp = $hostmultiIp;
        return $this;
    }
    /**
     * Get ownerUpdateAllowed value
     * @return bool|null
     */
    public function getOwnerUpdateAllowed()
    {
        return $this->ownerUpdateAllowed;
    }
    /**
     * Set ownerUpdateAllowed value
     * @param bool $ownerUpdateAllowed
     * @return \PayPal\StructType\DomainCapabilitiesReturn
     */
    public function setOwnerUpdateAllowed($ownerUpdateAllowed = null)
    {
        // validation for constraint: boolean
        if (!is_null($ownerUpdateAllowed) && !is_bool($ownerUpdateAllowed)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($ownerUpdateAllowed)), __LINE__);
        }
        $this->ownerUpdateAllowed = $ownerUpdateAllowed;
        return $this;
    }
    /**
     * Get ownerTradeAllowed value
     * @return bool|null
     */
    public function getOwnerTradeAllowed()
    {
        return $this->ownerTradeAllowed;
    }
    /**
     * Set ownerTradeAllowed value
     * @param bool $ownerTradeAllowed
     * @return \PayPal\StructType\DomainCapabilitiesReturn
     */
    public function setOwnerTradeAllowed($ownerTradeAllowed = null)
    {
        // validation for constraint: boolean
        if (!is_null($ownerTradeAllowed) && !is_bool($ownerTradeAllowed)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($ownerTradeAllowed)), __LINE__);
        }
        $this->ownerTradeAllowed = $ownerTradeAllowed;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \PayPal\StructType\DomainCapabilitiesReturn
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
