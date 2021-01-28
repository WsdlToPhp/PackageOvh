<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for dedicatedRipeGetIpStruct StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class DedicatedRipeGetIpStruct extends AbstractStructBase
{
    /**
     * The exclusion
     * @var string
     */
    public $exclusion;
    /**
     * The routedTo
     * @var string
     */
    public $routedTo;
    /**
     * The ip
     * @var string
     */
    public $ip;
    /**
     * The netname
     * @var string
     */
    public $netname;
    /**
     * Constructor method for dedicatedRipeGetIpStruct
     * @uses DedicatedRipeGetIpStruct::setExclusion()
     * @uses DedicatedRipeGetIpStruct::setRoutedTo()
     * @uses DedicatedRipeGetIpStruct::setIp()
     * @uses DedicatedRipeGetIpStruct::setNetname()
     * @param string $exclusion
     * @param string $routedTo
     * @param string $ip
     * @param string $netname
     */
    public function __construct($exclusion = null, $routedTo = null, $ip = null, $netname = null)
    {
        $this
            ->setExclusion($exclusion)
            ->setRoutedTo($routedTo)
            ->setIp($ip)
            ->setNetname($netname);
    }
    /**
     * Get exclusion value
     * @return string|null
     */
    public function getExclusion()
    {
        return $this->exclusion;
    }
    /**
     * Set exclusion value
     * @param string $exclusion
     * @return \Ovh\StructType\DedicatedRipeGetIpStruct
     */
    public function setExclusion($exclusion = null)
    {
        // validation for constraint: string
        if (!is_null($exclusion) && !is_string($exclusion)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($exclusion, true), gettype($exclusion)), __LINE__);
        }
        $this->exclusion = $exclusion;
        return $this;
    }
    /**
     * Get routedTo value
     * @return string|null
     */
    public function getRoutedTo()
    {
        return $this->routedTo;
    }
    /**
     * Set routedTo value
     * @param string $routedTo
     * @return \Ovh\StructType\DedicatedRipeGetIpStruct
     */
    public function setRoutedTo($routedTo = null)
    {
        // validation for constraint: string
        if (!is_null($routedTo) && !is_string($routedTo)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($routedTo, true), gettype($routedTo)), __LINE__);
        }
        $this->routedTo = $routedTo;
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
     * @return \Ovh\StructType\DedicatedRipeGetIpStruct
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
     * Get netname value
     * @return string|null
     */
    public function getNetname()
    {
        return $this->netname;
    }
    /**
     * Set netname value
     * @param string $netname
     * @return \Ovh\StructType\DedicatedRipeGetIpStruct
     */
    public function setNetname($netname = null)
    {
        // validation for constraint: string
        if (!is_null($netname) && !is_string($netname)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($netname, true), gettype($netname)), __LINE__);
        }
        $this->netname = $netname;
        return $this;
    }
}
