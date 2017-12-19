<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for telephonyConferenceGetParamsResponse StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class TelephonyConferenceGetParamsResponse extends AbstractStructBase
{
    /**
     * The return
     * @var \Ovh\StructType\TelephonyConferenceParamsReturn
     */
    public $return;
    /**
     * Constructor method for telephonyConferenceGetParamsResponse
     * @uses TelephonyConferenceGetParamsResponse::setReturn()
     * @param \Ovh\StructType\TelephonyConferenceParamsReturn $return
     */
    public function __construct(\Ovh\StructType\TelephonyConferenceParamsReturn $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \Ovh\StructType\TelephonyConferenceParamsReturn|null
     */
    public function getReturn()
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \Ovh\StructType\TelephonyConferenceParamsReturn $return
     * @return \Ovh\StructType\TelephonyConferenceGetParamsResponse
     */
    public function setReturn(\Ovh\StructType\TelephonyConferenceParamsReturn $return = null)
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
     * @return \Ovh\StructType\TelephonyConferenceGetParamsResponse
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
