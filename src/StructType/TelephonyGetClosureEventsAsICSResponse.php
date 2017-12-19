<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for telephonyGetClosureEventsAsICSResponse StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class TelephonyGetClosureEventsAsICSResponse extends AbstractStructBase
{
    /**
     * The return
     * @var \Ovh\StructType\TelephonyGetClosureEventsAsIcsStruct
     */
    public $return;
    /**
     * Constructor method for telephonyGetClosureEventsAsICSResponse
     * @uses TelephonyGetClosureEventsAsICSResponse::setReturn()
     * @param \Ovh\StructType\TelephonyGetClosureEventsAsIcsStruct $return
     */
    public function __construct(\Ovh\StructType\TelephonyGetClosureEventsAsIcsStruct $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \Ovh\StructType\TelephonyGetClosureEventsAsIcsStruct|null
     */
    public function getReturn()
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \Ovh\StructType\TelephonyGetClosureEventsAsIcsStruct $return
     * @return \Ovh\StructType\TelephonyGetClosureEventsAsICSResponse
     */
    public function setReturn(\Ovh\StructType\TelephonyGetClosureEventsAsIcsStruct $return = null)
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
     * @return \Ovh\StructType\TelephonyGetClosureEventsAsICSResponse
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
