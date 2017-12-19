<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for telephonyAbbreviatedNumberListResponse StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class TelephonyAbbreviatedNumberListResponse extends AbstractStructBase
{
    /**
     * The return
     * @var \PayPal\ArrayType\MyArrayOfTelephonyAbbreviatedNumberStructType
     */
    public $return;
    /**
     * Constructor method for telephonyAbbreviatedNumberListResponse
     * @uses TelephonyAbbreviatedNumberListResponse::setReturn()
     * @param \PayPal\ArrayType\MyArrayOfTelephonyAbbreviatedNumberStructType $return
     */
    public function __construct(\PayPal\ArrayType\MyArrayOfTelephonyAbbreviatedNumberStructType $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \PayPal\ArrayType\MyArrayOfTelephonyAbbreviatedNumberStructType|null
     */
    public function getReturn()
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \PayPal\ArrayType\MyArrayOfTelephonyAbbreviatedNumberStructType $return
     * @return \PayPal\StructType\TelephonyAbbreviatedNumberListResponse
     */
    public function setReturn(\PayPal\ArrayType\MyArrayOfTelephonyAbbreviatedNumberStructType $return = null)
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
     * @return \PayPal\StructType\TelephonyAbbreviatedNumberListResponse
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
