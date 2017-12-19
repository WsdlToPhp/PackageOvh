<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for telephonyReversmentsSummationNumbersStruct StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class TelephonyReversmentsSummationNumbersStruct extends AbstractStructBase
{
    /**
     * The number
     * @var string
     */
    public $number;
    /**
     * The list
     * @var \PayPal\ArrayType\MyArrayOfTelephonyReversmentsSummationStructType
     */
    public $list;
    /**
     * Constructor method for telephonyReversmentsSummationNumbersStruct
     * @uses TelephonyReversmentsSummationNumbersStruct::setNumber()
     * @uses TelephonyReversmentsSummationNumbersStruct::setList()
     * @param string $number
     * @param \PayPal\ArrayType\MyArrayOfTelephonyReversmentsSummationStructType $list
     */
    public function __construct($number = null, \PayPal\ArrayType\MyArrayOfTelephonyReversmentsSummationStructType $list = null)
    {
        $this
            ->setNumber($number)
            ->setList($list);
    }
    /**
     * Get number value
     * @return string|null
     */
    public function getNumber()
    {
        return $this->number;
    }
    /**
     * Set number value
     * @param string $number
     * @return \PayPal\StructType\TelephonyReversmentsSummationNumbersStruct
     */
    public function setNumber($number = null)
    {
        // validation for constraint: string
        if (!is_null($number) && !is_string($number)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($number)), __LINE__);
        }
        $this->number = $number;
        return $this;
    }
    /**
     * Get list value
     * @return \PayPal\ArrayType\MyArrayOfTelephonyReversmentsSummationStructType|null
     */
    public function getList()
    {
        return $this->list;
    }
    /**
     * Set list value
     * @param \PayPal\ArrayType\MyArrayOfTelephonyReversmentsSummationStructType $list
     * @return \PayPal\StructType\TelephonyReversmentsSummationNumbersStruct
     */
    public function setList(\PayPal\ArrayType\MyArrayOfTelephonyReversmentsSummationStructType $list = null)
    {
        $this->list = $list;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \PayPal\StructType\TelephonyReversmentsSummationNumbersStruct
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
