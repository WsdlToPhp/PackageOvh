<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for dedicatedEditServiceMonitoringItem StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class DedicatedEditServiceMonitoringItem extends AbstractStructBase
{
    /**
     * The session
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $session;
    /**
     * The ip
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $ip;
    /**
     * The itemId
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var int
     */
    public $itemId;
    /**
     * The period
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $period;
    /**
     * The string
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $string;
    /**
     * Constructor method for dedicatedEditServiceMonitoringItem
     * @uses DedicatedEditServiceMonitoringItem::setSession()
     * @uses DedicatedEditServiceMonitoringItem::setIp()
     * @uses DedicatedEditServiceMonitoringItem::setItemId()
     * @uses DedicatedEditServiceMonitoringItem::setPeriod()
     * @uses DedicatedEditServiceMonitoringItem::setString()
     * @param string $session
     * @param string $ip
     * @param int $itemId
     * @param string $period
     * @param string $string
     */
    public function __construct($session = null, $ip = null, $itemId = null, $period = null, $string = null)
    {
        $this
            ->setSession($session)
            ->setIp($ip)
            ->setItemId($itemId)
            ->setPeriod($period)
            ->setString($string);
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
     * @return \PayPal\StructType\DedicatedEditServiceMonitoringItem
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
     * @return \PayPal\StructType\DedicatedEditServiceMonitoringItem
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
     * Get itemId value
     * @return int|null
     */
    public function getItemId()
    {
        return $this->itemId;
    }
    /**
     * Set itemId value
     * @param int $itemId
     * @return \PayPal\StructType\DedicatedEditServiceMonitoringItem
     */
    public function setItemId($itemId = null)
    {
        // validation for constraint: int
        if (!is_null($itemId) && !is_numeric($itemId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($itemId)), __LINE__);
        }
        $this->itemId = $itemId;
        return $this;
    }
    /**
     * Get period value
     * @return string|null
     */
    public function getPeriod()
    {
        return $this->period;
    }
    /**
     * Set period value
     * @param string $period
     * @return \PayPal\StructType\DedicatedEditServiceMonitoringItem
     */
    public function setPeriod($period = null)
    {
        // validation for constraint: string
        if (!is_null($period) && !is_string($period)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($period)), __LINE__);
        }
        $this->period = $period;
        return $this;
    }
    /**
     * Get string value
     * @return string|null
     */
    public function getString()
    {
        return $this->string;
    }
    /**
     * Set string value
     * @param string $string
     * @return \PayPal\StructType\DedicatedEditServiceMonitoringItem
     */
    public function setString($string = null)
    {
        // validation for constraint: string
        if (!is_null($string) && !is_string($string)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($string)), __LINE__);
        }
        $this->string = $string;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \PayPal\StructType\DedicatedEditServiceMonitoringItem
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
