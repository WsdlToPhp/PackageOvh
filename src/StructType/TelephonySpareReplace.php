<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for telephonySpareReplace StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class TelephonySpareReplace extends AbstractStructBase
{
    /**
     * The session
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $session;
    /**
     * The type
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $type;
    /**
     * The service
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $service;
    /**
     * The spare
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $spare;
    /**
     * The action
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $action;
    /**
     * The ip
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $ip;
    /**
     * Constructor method for telephonySpareReplace
     * @uses TelephonySpareReplace::setSession()
     * @uses TelephonySpareReplace::setType()
     * @uses TelephonySpareReplace::setService()
     * @uses TelephonySpareReplace::setSpare()
     * @uses TelephonySpareReplace::setAction()
     * @uses TelephonySpareReplace::setIp()
     * @param string $session
     * @param string $type
     * @param string $service
     * @param string $spare
     * @param string $action
     * @param string $ip
     */
    public function __construct($session = null, $type = null, $service = null, $spare = null, $action = null, $ip = null)
    {
        $this
            ->setSession($session)
            ->setType($type)
            ->setService($service)
            ->setSpare($spare)
            ->setAction($action)
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
     * @return \PayPal\StructType\TelephonySpareReplace
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
     * @return \PayPal\StructType\TelephonySpareReplace
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
     * Get service value
     * @return string|null
     */
    public function getService()
    {
        return $this->service;
    }
    /**
     * Set service value
     * @param string $service
     * @return \PayPal\StructType\TelephonySpareReplace
     */
    public function setService($service = null)
    {
        // validation for constraint: string
        if (!is_null($service) && !is_string($service)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($service)), __LINE__);
        }
        $this->service = $service;
        return $this;
    }
    /**
     * Get spare value
     * @return string|null
     */
    public function getSpare()
    {
        return $this->spare;
    }
    /**
     * Set spare value
     * @param string $spare
     * @return \PayPal\StructType\TelephonySpareReplace
     */
    public function setSpare($spare = null)
    {
        // validation for constraint: string
        if (!is_null($spare) && !is_string($spare)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($spare)), __LINE__);
        }
        $this->spare = $spare;
        return $this;
    }
    /**
     * Get action value
     * @return string|null
     */
    public function getAction()
    {
        return $this->action;
    }
    /**
     * Set action value
     * @param string $action
     * @return \PayPal\StructType\TelephonySpareReplace
     */
    public function setAction($action = null)
    {
        // validation for constraint: string
        if (!is_null($action) && !is_string($action)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($action)), __LINE__);
        }
        $this->action = $action;
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
     * @return \PayPal\StructType\TelephonySpareReplace
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
     * @return \PayPal\StructType\TelephonySpareReplace
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
