<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for dedicatedIPForUDPMove StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class DedicatedIPForUDPMove extends AbstractStructBase
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
     * The hostnameTo
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $hostnameTo;
    /**
     * The ip
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $ip;
    /**
     * Constructor method for dedicatedIPForUDPMove
     * @uses DedicatedIPForUDPMove::setSession()
     * @uses DedicatedIPForUDPMove::setHostname()
     * @uses DedicatedIPForUDPMove::setHostnameTo()
     * @uses DedicatedIPForUDPMove::setIp()
     * @param string $session
     * @param string $hostname
     * @param string $hostnameTo
     * @param string $ip
     */
    public function __construct($session = null, $hostname = null, $hostnameTo = null, $ip = null)
    {
        $this
            ->setSession($session)
            ->setHostname($hostname)
            ->setHostnameTo($hostnameTo)
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
     * @return \Ovh\StructType\DedicatedIPForUDPMove
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
     * @return \Ovh\StructType\DedicatedIPForUDPMove
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
     * Get hostnameTo value
     * @return string|null
     */
    public function getHostnameTo()
    {
        return $this->hostnameTo;
    }
    /**
     * Set hostnameTo value
     * @param string $hostnameTo
     * @return \Ovh\StructType\DedicatedIPForUDPMove
     */
    public function setHostnameTo($hostnameTo = null)
    {
        // validation for constraint: string
        if (!is_null($hostnameTo) && !is_string($hostnameTo)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($hostnameTo, true), gettype($hostnameTo)), __LINE__);
        }
        $this->hostnameTo = $hostnameTo;
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
     * @return \Ovh\StructType\DedicatedIPForUDPMove
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
