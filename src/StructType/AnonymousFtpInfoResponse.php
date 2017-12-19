<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for anonymousFtpInfoResponse StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class AnonymousFtpInfoResponse extends AbstractStructBase
{
    /**
     * The return
     * @var \PayPal\StructType\AnonymousFtpInfoReturn
     */
    public $return;
    /**
     * Constructor method for anonymousFtpInfoResponse
     * @uses AnonymousFtpInfoResponse::setReturn()
     * @param \PayPal\StructType\AnonymousFtpInfoReturn $return
     */
    public function __construct(\PayPal\StructType\AnonymousFtpInfoReturn $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \PayPal\StructType\AnonymousFtpInfoReturn|null
     */
    public function getReturn()
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \PayPal\StructType\AnonymousFtpInfoReturn $return
     * @return \PayPal\StructType\AnonymousFtpInfoResponse
     */
    public function setReturn(\PayPal\StructType\AnonymousFtpInfoReturn $return = null)
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
     * @return \PayPal\StructType\AnonymousFtpInfoResponse
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
