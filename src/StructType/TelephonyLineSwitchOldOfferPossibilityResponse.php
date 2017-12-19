<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for telephonyLineSwitchOldOfferPossibilityResponse StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class TelephonyLineSwitchOldOfferPossibilityResponse extends AbstractStructBase
{
    /**
     * The return
     * @var \PayPal\ArrayType\MyArrayOfTelephonyLineSwitchOldOfferStructType
     */
    public $return;
    /**
     * Constructor method for telephonyLineSwitchOldOfferPossibilityResponse
     * @uses TelephonyLineSwitchOldOfferPossibilityResponse::setReturn()
     * @param \PayPal\ArrayType\MyArrayOfTelephonyLineSwitchOldOfferStructType $return
     */
    public function __construct(\PayPal\ArrayType\MyArrayOfTelephonyLineSwitchOldOfferStructType $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \PayPal\ArrayType\MyArrayOfTelephonyLineSwitchOldOfferStructType|null
     */
    public function getReturn()
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \PayPal\ArrayType\MyArrayOfTelephonyLineSwitchOldOfferStructType $return
     * @return \PayPal\StructType\TelephonyLineSwitchOldOfferPossibilityResponse
     */
    public function setReturn(\PayPal\ArrayType\MyArrayOfTelephonyLineSwitchOldOfferStructType $return = null)
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
     * @return \PayPal\StructType\TelephonyLineSwitchOldOfferPossibilityResponse
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
