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
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($ip)), __LINE__);
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
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ovh\StructType\AllSecondaryDNSStruct
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
