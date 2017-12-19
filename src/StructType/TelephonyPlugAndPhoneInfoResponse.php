<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for telephonyPlugAndPhoneInfoResponse StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class TelephonyPlugAndPhoneInfoResponse extends AbstractStructBase
{
    /**
     * The return
     * @var \Ovh\StructType\TelephonyPlugAndPhoneInfoReturn
     */
    public $return;
    /**
     * Constructor method for telephonyPlugAndPhoneInfoResponse
     * @uses TelephonyPlugAndPhoneInfoResponse::setReturn()
     * @param \Ovh\StructType\TelephonyPlugAndPhoneInfoReturn $return
     */
    public function __construct(\Ovh\StructType\TelephonyPlugAndPhoneInfoReturn $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \Ovh\StructType\TelephonyPlugAndPhoneInfoReturn|null
     */
    public function getReturn()
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \Ovh\StructType\TelephonyPlugAndPhoneInfoReturn $return
     * @return \Ovh\StructType\TelephonyPlugAndPhoneInfoResponse
     */
    public function setReturn(\Ovh\StructType\TelephonyPlugAndPhoneInfoReturn $return = null)
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
     * @return \Ovh\StructType\TelephonyPlugAndPhoneInfoResponse
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
