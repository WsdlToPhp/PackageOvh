<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for telephonyPhonebookGroupListResponse StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class TelephonyPhonebookGroupListResponse extends AbstractStructBase
{
    /**
     * The return
     * @var \PayPal\ArrayType\MyArrayOfTelephonyPhonebookGroupStructType
     */
    public $return;
    /**
     * Constructor method for telephonyPhonebookGroupListResponse
     * @uses TelephonyPhonebookGroupListResponse::setReturn()
     * @param \PayPal\ArrayType\MyArrayOfTelephonyPhonebookGroupStructType $return
     */
    public function __construct(\PayPal\ArrayType\MyArrayOfTelephonyPhonebookGroupStructType $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \PayPal\ArrayType\MyArrayOfTelephonyPhonebookGroupStructType|null
     */
    public function getReturn()
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \PayPal\ArrayType\MyArrayOfTelephonyPhonebookGroupStructType $return
     * @return \PayPal\StructType\TelephonyPhonebookGroupListResponse
     */
    public function setReturn(\PayPal\ArrayType\MyArrayOfTelephonyPhonebookGroupStructType $return = null)
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
     * @return \PayPal\StructType\TelephonyPhonebookGroupListResponse
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
