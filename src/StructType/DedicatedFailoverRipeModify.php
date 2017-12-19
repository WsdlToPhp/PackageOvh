<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for dedicatedFailoverRipeModify StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class DedicatedFailoverRipeModify extends AbstractStructBase
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
     * The hostnameNew
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $hostnameNew;
    /**
     * The networkIp
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $networkIp;
    /**
     * The suffix
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var int
     */
    public $suffix;
    /**
     * The ip
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $ip;
    /**
     * Constructor method for dedicatedFailoverRipeModify
     * @uses DedicatedFailoverRipeModify::setSession()
     * @uses DedicatedFailoverRipeModify::setHostname()
     * @uses DedicatedFailoverRipeModify::setHostnameNew()
     * @uses DedicatedFailoverRipeModify::setNetworkIp()
     * @uses DedicatedFailoverRipeModify::setSuffix()
     * @uses DedicatedFailoverRipeModify::setIp()
     * @param string $session
     * @param string $hostname
     * @param string $hostnameNew
     * @param string $networkIp
     * @param int $suffix
     * @param string $ip
     */
    public function __construct($session = null, $hostname = null, $hostnameNew = null, $networkIp = null, $suffix = null, $ip = null)
    {
        $this
            ->setSession($session)
            ->setHostname($hostname)
            ->setHostnameNew($hostnameNew)
            ->setNetworkIp($networkIp)
            ->setSuffix($suffix)
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
     * @return \Ovh\StructType\DedicatedFailoverRipeModify
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
     * @return \Ovh\StructType\DedicatedFailoverRipeModify
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
     * Get hostnameNew value
     * @return string|null
     */
    public function getHostnameNew()
    {
        return $this->hostnameNew;
    }
    /**
     * Set hostnameNew value
     * @param string $hostnameNew
     * @return \Ovh\StructType\DedicatedFailoverRipeModify
     */
    public function setHostnameNew($hostnameNew = null)
    {
        // validation for constraint: string
        if (!is_null($hostnameNew) && !is_string($hostnameNew)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($hostnameNew)), __LINE__);
        }
        $this->hostnameNew = $hostnameNew;
        return $this;
    }
    /**
     * Get networkIp value
     * @return string|null
     */
    public function getNetworkIp()
    {
        return $this->networkIp;
    }
    /**
     * Set networkIp value
     * @param string $networkIp
     * @return \Ovh\StructType\DedicatedFailoverRipeModify
     */
    public function setNetworkIp($networkIp = null)
    {
        // validation for constraint: string
        if (!is_null($networkIp) && !is_string($networkIp)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($networkIp)), __LINE__);
        }
        $this->networkIp = $networkIp;
        return $this;
    }
    /**
     * Get suffix value
     * @return int|null
     */
    public function getSuffix()
    {
        return $this->suffix;
    }
    /**
     * Set suffix value
     * @param int $suffix
     * @return \Ovh\StructType\DedicatedFailoverRipeModify
     */
    public function setSuffix($suffix = null)
    {
        // validation for constraint: int
        if (!is_null($suffix) && !is_numeric($suffix)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($suffix)), __LINE__);
        }
        $this->suffix = $suffix;
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
     * @return \Ovh\StructType\DedicatedFailoverRipeModify
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
     * @return \Ovh\StructType\DedicatedFailoverRipeModify
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
