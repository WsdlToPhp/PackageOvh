<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for domainHostInfoReturn StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class DomainHostInfoReturn extends AbstractStructBase
{
    /**
     * The hostname
     * @var string
     */
    public $hostname;
    /**
     * The ipv4
     * @var string
     */
    public $ipv4;
    /**
     * The ipv6
     * @var string
     */
    public $ipv6;
    /**
     * Constructor method for domainHostInfoReturn
     * @uses DomainHostInfoReturn::setHostname()
     * @uses DomainHostInfoReturn::setIpv4()
     * @uses DomainHostInfoReturn::setIpv6()
     * @param string $hostname
     * @param string $ipv4
     * @param string $ipv6
     */
    public function __construct($hostname = null, $ipv4 = null, $ipv6 = null)
    {
        $this
            ->setHostname($hostname)
            ->setIpv4($ipv4)
            ->setIpv6($ipv6);
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
     * @return \Ovh\StructType\DomainHostInfoReturn
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
     * Get ipv4 value
     * @return string|null
     */
    public function getIpv4()
    {
        return $this->ipv4;
    }
    /**
     * Set ipv4 value
     * @param string $ipv4
     * @return \Ovh\StructType\DomainHostInfoReturn
     */
    public function setIpv4($ipv4 = null)
    {
        // validation for constraint: string
        if (!is_null($ipv4) && !is_string($ipv4)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($ipv4, true), gettype($ipv4)), __LINE__);
        }
        $this->ipv4 = $ipv4;
        return $this;
    }
    /**
     * Get ipv6 value
     * @return string|null
     */
    public function getIpv6()
    {
        return $this->ipv6;
    }
    /**
     * Set ipv6 value
     * @param string $ipv6
     * @return \Ovh\StructType\DomainHostInfoReturn
     */
    public function setIpv6($ipv6 = null)
    {
        // validation for constraint: string
        if (!is_null($ipv6) && !is_string($ipv6)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($ipv6, true), gettype($ipv6)), __LINE__);
        }
        $this->ipv6 = $ipv6;
        return $this;
    }
}
