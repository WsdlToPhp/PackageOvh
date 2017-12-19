<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for telephonySpareCapabilitiesResponse StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class TelephonySpareCapabilitiesResponse extends AbstractStructBase
{
    /**
     * The return
     * @var \Ovh\ArrayType\MyArrayOfTelephonySpareFamilyStructType
     */
    public $return;
    /**
     * Constructor method for telephonySpareCapabilitiesResponse
     * @uses TelephonySpareCapabilitiesResponse::setReturn()
     * @param \Ovh\ArrayType\MyArrayOfTelephonySpareFamilyStructType $return
     */
    public function __construct(\Ovh\ArrayType\MyArrayOfTelephonySpareFamilyStructType $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \Ovh\ArrayType\MyArrayOfTelephonySpareFamilyStructType|null
     */
    public function getReturn()
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \Ovh\ArrayType\MyArrayOfTelephonySpareFamilyStructType $return
     * @return \Ovh\StructType\TelephonySpareCapabilitiesResponse
     */
    public function setReturn(\Ovh\ArrayType\MyArrayOfTelephonySpareFamilyStructType $return = null)
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
     * @return \Ovh\StructType\TelephonySpareCapabilitiesResponse
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
