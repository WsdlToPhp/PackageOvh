<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for telephonySpareReplaceResponse StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class TelephonySpareReplaceResponse extends AbstractStructBase
{
    /**
     * The return
     * @var \PayPal\StructType\TelephonyPlugAndPhoneReinitConfigurationReturn
     */
    public $return;
    /**
     * Constructor method for telephonySpareReplaceResponse
     * @uses TelephonySpareReplaceResponse::setReturn()
     * @param \PayPal\StructType\TelephonyPlugAndPhoneReinitConfigurationReturn $return
     */
    public function __construct(\PayPal\StructType\TelephonyPlugAndPhoneReinitConfigurationReturn $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \PayPal\StructType\TelephonyPlugAndPhoneReinitConfigurationReturn|null
     */
    public function getReturn()
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \PayPal\StructType\TelephonyPlugAndPhoneReinitConfigurationReturn $return
     * @return \PayPal\StructType\TelephonySpareReplaceResponse
     */
    public function setReturn(\PayPal\StructType\TelephonyPlugAndPhoneReinitConfigurationReturn $return = null)
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
     * @return \PayPal\StructType\TelephonySpareReplaceResponse
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
