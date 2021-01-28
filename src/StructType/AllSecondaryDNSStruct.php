<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for allSecondaryDNSStruct StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class AllSecondaryDNSStruct extends AbstractStructBase
{
    /**
     * The ip
     * @var string
     */
    public $ip;
    /**
     * The secondary
     * @var \Ovh\ArrayType\MyArrayOfSecondaryDNSStructType
     */
    public $secondary;
    /**
     * Constructor method for allSecondaryDNSStruct
     * @uses AllSecondaryDNSStruct::setIp()
     * @uses AllSecondaryDNSStruct::setSecondary()
     * @param string $ip
     * @param \Ovh\ArrayType\MyArrayOfSecondaryDNSStructType $secondary
     */
    public function __construct($ip = null, \Ovh\ArrayType\MyArrayOfSecondaryDNSStructType $secondary = null)
    {
        $this
            ->setIp($ip)
            ->setSecondary($secondary);
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
     * @return \Ovh\StructType\AllSecondaryDNSStruct
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
     * Get secondary value
     * @return \Ovh\ArrayType\MyArrayOfSecondaryDNSStructType|null
     */
    public function getSecondary()
    {
        return $this->secondary;
    }
    /**
     * Set secondary value
     * @param \Ovh\ArrayType\MyArrayOfSecondaryDNSStructType $secondary
     * @return \Ovh\StructType\AllSecondaryDNSStruct
     */
    public function setSecondary(\Ovh\ArrayType\MyArrayOfSecondaryDNSStructType $secondary = null)
    {
        $this->secondary = $secondary;
        return $this;
    }
}
