<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for hostingListStruct StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class HostingListStruct extends AbstractStructBase
{
    /**
     * The domain
     * @var string
     */
    public $domain;
    /**
     * The hosting
     * @var string
     */
    public $hosting;
    /**
     * Constructor method for hostingListStruct
     * @uses HostingListStruct::setDomain()
     * @uses HostingListStruct::setHosting()
     * @param string $domain
     * @param string $hosting
     */
    public function __construct($domain = null, $hosting = null)
    {
        $this
            ->setDomain($domain)
            ->setHosting($hosting);
    }
    /**
     * Get domain value
     * @return string|null
     */
    public function getDomain()
    {
        return $this->domain;
    }
    /**
     * Set domain value
     * @param string $domain
     * @return \PayPal\StructType\HostingListStruct
     */
    public function setDomain($domain = null)
    {
        // validation for constraint: string
        if (!is_null($domain) && !is_string($domain)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($domain)), __LINE__);
        }
        $this->domain = $domain;
        return $this;
    }
    /**
     * Get hosting value
     * @return string|null
     */
    public function getHosting()
    {
        return $this->hosting;
    }
    /**
     * Set hosting value
     * @param string $hosting
     * @return \PayPal\StructType\HostingListStruct
     */
    public function setHosting($hosting = null)
    {
        // validation for constraint: string
        if (!is_null($hosting) && !is_string($hosting)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($hosting)), __LINE__);
        }
        $this->hosting = $hosting;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \PayPal\StructType\HostingListStruct
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
