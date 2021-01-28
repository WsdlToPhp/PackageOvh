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
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $session;
    /**
     * The hostname
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $hostname;
    /**
     * The hostnameNew
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $hostnameNew;
    /**
     * The networkIp
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $networkIp;
    /**
     * The suffix
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var int
     */
    public $suffix;
    /**
     * The ip
     * Meta information extracted from the WSDL
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
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($session, true), gettype($session)), __LINE__);
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
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($hostname, true), gettype($hostname)), __LINE__);
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
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($hostnameNew, true), gettype($hostnameNew)), __LINE__);
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
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($networkIp, true), gettype($networkIp)), __LINE__);
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
        if (!is_null($suffix) && !(is_int($suffix) || ctype_digit($suffix))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($suffix, true), gettype($suffix)), __LINE__);
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
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($ip, true), gettype($ip)), __LINE__);
        }
        $this->ip = $ip;
        return $this;
    }
}
