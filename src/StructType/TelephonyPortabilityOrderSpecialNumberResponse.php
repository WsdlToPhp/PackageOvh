<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for telephonyPortabilityOrderSpecialNumberResponse StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class TelephonyPortabilityOrderSpecialNumberResponse extends AbstractStructBase
{
    /**
     * The return
     * @var \Ovh\StructType\TelephonyNumberOrderReturn
     */
    public $return;
    /**
     * Constructor method for telephonyPortabilityOrderSpecialNumberResponse
     * @uses TelephonyPortabilityOrderSpecialNumberResponse::setReturn()
     * @param \Ovh\StructType\TelephonyNumberOrderReturn $return
     */
    public function __construct(\Ovh\StructType\TelephonyNumberOrderReturn $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \Ovh\StructType\TelephonyNumberOrderReturn|null
     */
    public function getReturn()
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \Ovh\StructType\TelephonyNumberOrderReturn $return
     * @return \Ovh\StructType\TelephonyPortabilityOrderSpecialNumberResponse
     */
    public function setReturn(\Ovh\StructType\TelephonyNumberOrderReturn $return = null)
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
     * @return \Ovh\StructType\TelephonyPortabilityOrderSpecialNumberResponse
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
