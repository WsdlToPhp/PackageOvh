<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for multiDomainInfoResponse StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class MultiDomainInfoResponse extends AbstractStructBase
{
    /**
     * The return
     * @var \PayPal\StructType\MultiDomainStruct
     */
    public $return;
    /**
     * Constructor method for multiDomainInfoResponse
     * @uses MultiDomainInfoResponse::setReturn()
     * @param \PayPal\StructType\MultiDomainStruct $return
     */
    public function __construct(\PayPal\StructType\MultiDomainStruct $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \PayPal\StructType\MultiDomainStruct|null
     */
    public function getReturn()
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \PayPal\StructType\MultiDomainStruct $return
     * @return \PayPal\StructType\MultiDomainInfoResponse
     */
    public function setReturn(\PayPal\StructType\MultiDomainStruct $return = null)
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
     * @return \PayPal\StructType\MultiDomainInfoResponse
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
