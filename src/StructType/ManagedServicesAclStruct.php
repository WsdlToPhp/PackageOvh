<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for managedServicesAclStruct StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class ManagedServicesAclStruct extends AbstractStructBase
{
    /**
     * The ip
     * @var string
     */
    public $ip;
    /**
     * The type
     * @var string
     */
    public $type;
    /**
     * The host
     * @var string
     */
    public $host;
    /**
     * Constructor method for managedServicesAclStruct
     * @uses ManagedServicesAclStruct::setIp()
     * @uses ManagedServicesAclStruct::setType()
     * @uses ManagedServicesAclStruct::setHost()
     * @param string $ip
     * @param string $type
     * @param string $host
     */
    public function __construct($ip = null, $type = null, $host = null)
    {
        $this
            ->setIp($ip)
            ->setType($type)
            ->setHost($host);
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
     * @return \PayPal\StructType\ManagedServicesAclStruct
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
     * @return \PayPal\StructType\ManagedServicesAclStruct
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
     * Get host value
     * @return string|null
     */
    public function getHost()
    {
        return $this->host;
    }
    /**
     * Set host value
     * @param string $host
     * @return \PayPal\StructType\ManagedServicesAclStruct
     */
    public function setHost($host = null)
    {
        // validation for constraint: string
        if (!is_null($host) && !is_string($host)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($host)), __LINE__);
        }
        $this->host = $host;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \PayPal\StructType\ManagedServicesAclStruct
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
