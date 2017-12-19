<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for telephonySmsplusServiceDetailsResponse StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class TelephonySmsplusServiceDetailsResponse extends AbstractStructBase
{
    /**
     * The return
     * @var \PayPal\StructType\TelephonySmsplusDetailsStruct
     */
    public $return;
    /**
     * Constructor method for telephonySmsplusServiceDetailsResponse
     * @uses TelephonySmsplusServiceDetailsResponse::setReturn()
     * @param \PayPal\StructType\TelephonySmsplusDetailsStruct $return
     */
    public function __construct(\PayPal\StructType\TelephonySmsplusDetailsStruct $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \PayPal\StructType\TelephonySmsplusDetailsStruct|null
     */
    public function getReturn()
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \PayPal\StructType\TelephonySmsplusDetailsStruct $return
     * @return \PayPal\StructType\TelephonySmsplusServiceDetailsResponse
     */
    public function setReturn(\PayPal\StructType\TelephonySmsplusDetailsStruct $return = null)
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
     * @return \PayPal\StructType\TelephonySmsplusServiceDetailsResponse
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
