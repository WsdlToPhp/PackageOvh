<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for telephonyDirectoryListWayTypeResponse StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class TelephonyDirectoryListWayTypeResponse extends AbstractStructBase
{
    /**
     * The return
     * @var \Ovh\ArrayType\MyArrayOfTelephonyDirectoryWayTypeStructType
     */
    public $return;
    /**
     * Constructor method for telephonyDirectoryListWayTypeResponse
     * @uses TelephonyDirectoryListWayTypeResponse::setReturn()
     * @param \Ovh\ArrayType\MyArrayOfTelephonyDirectoryWayTypeStructType $return
     */
    public function __construct(\Ovh\ArrayType\MyArrayOfTelephonyDirectoryWayTypeStructType $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \Ovh\ArrayType\MyArrayOfTelephonyDirectoryWayTypeStructType|null
     */
    public function getReturn()
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \Ovh\ArrayType\MyArrayOfTelephonyDirectoryWayTypeStructType $return
     * @return \Ovh\StructType\TelephonyDirectoryListWayTypeResponse
     */
    public function setReturn(\Ovh\ArrayType\MyArrayOfTelephonyDirectoryWayTypeStructType $return = null)
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
     * @return \Ovh\StructType\TelephonyDirectoryListWayTypeResponse
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
