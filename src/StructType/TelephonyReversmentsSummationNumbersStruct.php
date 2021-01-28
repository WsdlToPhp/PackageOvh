<?php

namespace Ovh\StructType;

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
     * @var \Ovh\ArrayType\MyArrayOfTelephonyReversmentsSummationStructType
     */
    public $list;
    /**
     * Constructor method for telephonyReversmentsSummationNumbersStruct
     * @uses TelephonyReversmentsSummationNumbersStruct::setNumber()
     * @uses TelephonyReversmentsSummationNumbersStruct::setList()
     * @param string $number
     * @param \Ovh\ArrayType\MyArrayOfTelephonyReversmentsSummationStructType $list
     */
    public function __construct($number = null, \Ovh\ArrayType\MyArrayOfTelephonyReversmentsSummationStructType $list = null)
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
     * @return \Ovh\StructType\TelephonyReversmentsSummationNumbersStruct
     */
    public function setNumber($number = null)
    {
        // validation for constraint: string
        if (!is_null($number) && !is_string($number)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($number, true), gettype($number)), __LINE__);
        }
        $this->number = $number;
        return $this;
    }
    /**
     * Get list value
     * @return \Ovh\ArrayType\MyArrayOfTelephonyReversmentsSummationStructType|null
     */
    public function getList()
    {
        return $this->list;
    }
    /**
     * Set list value
     * @param \Ovh\ArrayType\MyArrayOfTelephonyReversmentsSummationStructType $list
     * @return \Ovh\StructType\TelephonyReversmentsSummationNumbersStruct
     */
    public function setList(\Ovh\ArrayType\MyArrayOfTelephonyReversmentsSummationStructType $list = null)
    {
        $this->list = $list;
        return $this;
    }
}
