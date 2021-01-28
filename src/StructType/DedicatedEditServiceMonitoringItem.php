<?php

namespace Ovh\StructType;

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
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $session;
    /**
     * The ip
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $ip;
    /**
     * The itemId
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var int
     */
    public $itemId;
    /**
     * The period
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $period;
    /**
     * The string
     * Meta information extracted from the WSDL
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
     * @return \Ovh\StructType\DedicatedEditServiceMonitoringItem
     */
    public function setSession($session = null)
    {
        // validation for constraint: string
        if (!is_null($session) && !is_string($session)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($session, true), gettype($session)), __LINE__);
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
     * @return \Ovh\StructType\DedicatedEditServiceMonitoringItem
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
     * @return \Ovh\StructType\DedicatedEditServiceMonitoringItem
     */
    public function setItemId($itemId = null)
    {
        // validation for constraint: int
        if (!is_null($itemId) && !(is_int($itemId) || ctype_digit($itemId))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($itemId, true), gettype($itemId)), __LINE__);
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
     * @return \Ovh\StructType\DedicatedEditServiceMonitoringItem
     */
    public function setPeriod($period = null)
    {
        // validation for constraint: string
        if (!is_null($period) && !is_string($period)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($period, true), gettype($period)), __LINE__);
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
     * @return \Ovh\StructType\DedicatedEditServiceMonitoringItem
     */
    public function setString($string = null)
    {
        // validation for constraint: string
        if (!is_null($string) && !is_string($string)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($string, true), gettype($string)), __LINE__);
        }
        $this->string = $string;
        return $this;
    }
}
