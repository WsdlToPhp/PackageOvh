<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for dedicatedAddServiceMonitoringAlertEmail StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class DedicatedAddServiceMonitoringAlertEmail extends AbstractStructBase
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
     * The port
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var int
     */
    public $port;
    /**
     * The itemId
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var int
     */
    public $itemId;
    /**
     * The email
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $email;
    /**
     * Constructor method for dedicatedAddServiceMonitoringAlertEmail
     * @uses DedicatedAddServiceMonitoringAlertEmail::setSession()
     * @uses DedicatedAddServiceMonitoringAlertEmail::setIp()
     * @uses DedicatedAddServiceMonitoringAlertEmail::setPort()
     * @uses DedicatedAddServiceMonitoringAlertEmail::setItemId()
     * @uses DedicatedAddServiceMonitoringAlertEmail::setEmail()
     * @param string $session
     * @param string $ip
     * @param int $port
     * @param int $itemId
     * @param string $email
     */
    public function __construct($session = null, $ip = null, $port = null, $itemId = null, $email = null)
    {
        $this
            ->setSession($session)
            ->setIp($ip)
            ->setPort($port)
            ->setItemId($itemId)
            ->setEmail($email);
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
     * @return \PayPal\StructType\DedicatedAddServiceMonitoringAlertEmail
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
     * @return \PayPal\StructType\DedicatedAddServiceMonitoringAlertEmail
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
     * Get port value
     * @return int|null
     */
    public function getPort()
    {
        return $this->port;
    }
    /**
     * Set port value
     * @param int $port
     * @return \PayPal\StructType\DedicatedAddServiceMonitoringAlertEmail
     */
    public function setPort($port = null)
    {
        // validation for constraint: int
        if (!is_null($port) && !is_numeric($port)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($port)), __LINE__);
        }
        $this->port = $port;
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
     * @return \PayPal\StructType\DedicatedAddServiceMonitoringAlertEmail
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
     * Get email value
     * @return string|null
     */
    public function getEmail()
    {
        return $this->email;
    }
    /**
     * Set email value
     * @param string $email
     * @return \PayPal\StructType\DedicatedAddServiceMonitoringAlertEmail
     */
    public function setEmail($email = null)
    {
        // validation for constraint: string
        if (!is_null($email) && !is_string($email)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($email)), __LINE__);
        }
        $this->email = $email;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \PayPal\StructType\DedicatedAddServiceMonitoringAlertEmail
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
