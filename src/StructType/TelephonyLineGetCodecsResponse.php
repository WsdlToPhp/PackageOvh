<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for telephonyLineGetCodecsResponse StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class TelephonyLineGetCodecsResponse extends AbstractStructBase
{
    /**
     * The return
     * @var \PayPal\StructType\TelephonyLineGetCodecsReturn
     */
    public $return;
    /**
     * Constructor method for telephonyLineGetCodecsResponse
     * @uses TelephonyLineGetCodecsResponse::setReturn()
     * @param \PayPal\StructType\TelephonyLineGetCodecsReturn $return
     */
    public function __construct(\PayPal\StructType\TelephonyLineGetCodecsReturn $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \PayPal\StructType\TelephonyLineGetCodecsReturn|null
     */
    public function getReturn()
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \PayPal\StructType\TelephonyLineGetCodecsReturn $return
     * @return \PayPal\StructType\TelephonyLineGetCodecsResponse
     */
    public function setReturn(\PayPal\StructType\TelephonyLineGetCodecsReturn $return = null)
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
     * @return \PayPal\StructType\TelephonyLineGetCodecsResponse
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
