<?php

namespace Ovh\StructType;

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
     * @var \Ovh\ArrayType\MyArrayOfTelephonyLineSwitchOldOfferStructType
     */
    public $return;
    /**
     * Constructor method for telephonyLineSwitchOldOfferPossibilityResponse
     * @uses TelephonyLineSwitchOldOfferPossibilityResponse::setReturn()
     * @param \Ovh\ArrayType\MyArrayOfTelephonyLineSwitchOldOfferStructType $return
     */
    public function __construct(\Ovh\ArrayType\MyArrayOfTelephonyLineSwitchOldOfferStructType $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \Ovh\ArrayType\MyArrayOfTelephonyLineSwitchOldOfferStructType|null
     */
    public function getReturn()
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \Ovh\ArrayType\MyArrayOfTelephonyLineSwitchOldOfferStructType $return
     * @return \Ovh\StructType\TelephonyLineSwitchOldOfferPossibilityResponse
     */
    public function setReturn(\Ovh\ArrayType\MyArrayOfTelephonyLineSwitchOldOfferStructType $return = null)
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
     * @return \Ovh\StructType\TelephonyLineSwitchOldOfferPossibilityResponse
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
