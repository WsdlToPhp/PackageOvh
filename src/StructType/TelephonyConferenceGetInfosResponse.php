<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for telephonyConferenceGetInfosResponse StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class TelephonyConferenceGetInfosResponse extends AbstractStructBase
{
    /**
     * The return
     * @var \Ovh\StructType\TelephonyConferenceGetInfosReturn
     */
    public $return;
    /**
     * Constructor method for telephonyConferenceGetInfosResponse
     * @uses TelephonyConferenceGetInfosResponse::setReturn()
     * @param \Ovh\StructType\TelephonyConferenceGetInfosReturn $return
     */
    public function __construct(\Ovh\StructType\TelephonyConferenceGetInfosReturn $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \Ovh\StructType\TelephonyConferenceGetInfosReturn|null
     */
    public function getReturn()
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \Ovh\StructType\TelephonyConferenceGetInfosReturn $return
     * @return \Ovh\StructType\TelephonyConferenceGetInfosResponse
     */
    public function setReturn(\Ovh\StructType\TelephonyConferenceGetInfosReturn $return = null)
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
     * @return \Ovh\StructType\TelephonyConferenceGetInfosResponse
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
