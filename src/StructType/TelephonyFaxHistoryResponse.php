<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for telephonyFaxHistoryResponse StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class TelephonyFaxHistoryResponse extends AbstractStructBase
{
    /**
     * The return
     * @var \PayPal\ArrayType\MyArrayOfTelephonyFaxHistoryStructType
     */
    public $return;
    /**
     * Constructor method for telephonyFaxHistoryResponse
     * @uses TelephonyFaxHistoryResponse::setReturn()
     * @param \PayPal\ArrayType\MyArrayOfTelephonyFaxHistoryStructType $return
     */
    public function __construct(\PayPal\ArrayType\MyArrayOfTelephonyFaxHistoryStructType $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \PayPal\ArrayType\MyArrayOfTelephonyFaxHistoryStructType|null
     */
    public function getReturn()
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \PayPal\ArrayType\MyArrayOfTelephonyFaxHistoryStructType $return
     * @return \PayPal\StructType\TelephonyFaxHistoryResponse
     */
    public function setReturn(\PayPal\ArrayType\MyArrayOfTelephonyFaxHistoryStructType $return = null)
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
     * @return \PayPal\StructType\TelephonyFaxHistoryResponse
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
