<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for dedicatedReverseAdd StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class DedicatedReverseAdd extends AbstractStructBase
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
     * The ip
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $ip;
    /**
     * The reverse
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $reverse;
    /**
     * Constructor method for dedicatedReverseAdd
     * @uses DedicatedReverseAdd::setSession()
     * @uses DedicatedReverseAdd::setHostname()
     * @uses DedicatedReverseAdd::setIp()
     * @uses DedicatedReverseAdd::setReverse()
     * @param string $session
     * @param string $hostname
     * @param string $ip
     * @param string $reverse
     */
    public function __construct($session = null, $hostname = null, $ip = null, $reverse = null)
    {
        $this
            ->setSession($session)
            ->setHostname($hostname)
            ->setIp($ip)
            ->setReverse($reverse);
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
     * @return \Ovh\StructType\DedicatedReverseAdd
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
     * @return \Ovh\StructType\DedicatedReverseAdd
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
     * @return \Ovh\StructType\DedicatedReverseAdd
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
     * Get reverse value
     * @return string|null
     */
    public function getReverse()
    {
        return $this->reverse;
    }
    /**
     * Set reverse value
     * @param string $reverse
     * @return \Ovh\StructType\DedicatedReverseAdd
     */
    public function setReverse($reverse = null)
    {
        // validation for constraint: string
        if (!is_null($reverse) && !is_string($reverse)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($reverse, true), gettype($reverse)), __LINE__);
        }
        $this->reverse = $reverse;
        return $this;
    }
}
