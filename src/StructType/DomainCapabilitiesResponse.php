<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for domainCapabilitiesResponse StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class DomainCapabilitiesResponse extends AbstractStructBase
{
    /**
     * The return
     * @var \PayPal\StructType\DomainCapabilitiesReturn
     */
    public $return;
    /**
     * Constructor method for domainCapabilitiesResponse
     * @uses DomainCapabilitiesResponse::setReturn()
     * @param \PayPal\StructType\DomainCapabilitiesReturn $return
     */
    public function __construct(\PayPal\StructType\DomainCapabilitiesReturn $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \PayPal\StructType\DomainCapabilitiesReturn|null
     */
    public function getReturn()
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \PayPal\StructType\DomainCapabilitiesReturn $return
     * @return \PayPal\StructType\DomainCapabilitiesResponse
     */
    public function setReturn(\PayPal\StructType\DomainCapabilitiesReturn $return = null)
    {
        $this->return = $return;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \PayPal\StructType\DomainCapabilitiesResponse
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