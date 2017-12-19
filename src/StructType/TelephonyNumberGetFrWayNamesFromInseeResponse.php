<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for telephonyNumberGetFrWayNamesFromInseeResponse StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class TelephonyNumberGetFrWayNamesFromInseeResponse extends AbstractStructBase
{
    /**
     * The return
     * @var \Ovh\ArrayType\MyArrayOfTelephonyNumberWayNameStructType
     */
    public $return;
    /**
     * Constructor method for telephonyNumberGetFrWayNamesFromInseeResponse
     * @uses TelephonyNumberGetFrWayNamesFromInseeResponse::setReturn()
     * @param \Ovh\ArrayType\MyArrayOfTelephonyNumberWayNameStructType $return
     */
    public function __construct(\Ovh\ArrayType\MyArrayOfTelephonyNumberWayNameStructType $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \Ovh\ArrayType\MyArrayOfTelephonyNumberWayNameStructType|null
     */
    public function getReturn()
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \Ovh\ArrayType\MyArrayOfTelephonyNumberWayNameStructType $return
     * @return \Ovh\StructType\TelephonyNumberGetFrWayNamesFromInseeResponse
     */
    public function setReturn(\Ovh\ArrayType\MyArrayOfTelephonyNumberWayNameStructType $return = null)
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
     * @return \Ovh\StructType\TelephonyNumberGetFrWayNamesFromInseeResponse
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
