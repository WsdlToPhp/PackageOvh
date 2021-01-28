<?php

namespace Ovh\StructType;

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
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $session;
    /**
     * The type
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $type;
    /**
     * The service
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $service;
    /**
     * The spare
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $spare;
    /**
     * The action
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $action;
    /**
     * The ip
     * Meta information extracted from the WSDL
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
     * @return \Ovh\StructType\TelephonySpareReplace
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
     * @return \Ovh\StructType\TelephonySpareReplace
     */
    public function setType($type = null)
    {
        // validation for constraint: string
        if (!is_null($type) && !is_string($type)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($type, true), gettype($type)), __LINE__);
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
     * @return \Ovh\StructType\TelephonySpareReplace
     */
    public function setService($service = null)
    {
        // validation for constraint: string
        if (!is_null($service) && !is_string($service)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($service, true), gettype($service)), __LINE__);
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
     * @return \Ovh\StructType\TelephonySpareReplace
     */
    public function setSpare($spare = null)
    {
        // validation for constraint: string
        if (!is_null($spare) && !is_string($spare)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($spare, true), gettype($spare)), __LINE__);
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
     * @return \Ovh\StructType\TelephonySpareReplace
     */
    public function setAction($action = null)
    {
        // validation for constraint: string
        if (!is_null($action) && !is_string($action)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($action, true), gettype($action)), __LINE__);
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
     * @return \Ovh\StructType\TelephonySpareReplace
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
}
