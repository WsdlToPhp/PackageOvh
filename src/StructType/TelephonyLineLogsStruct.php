<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for telephonyLineLogsStruct StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class TelephonyLineLogsStruct extends AbstractStructBase
{
    /**
     * The number
     * @var string
     */
    public $number;
    /**
     * The list
     * @var \Ovh\ArrayType\MyArrayOfTelephonyLineLogsListStructType
     */
    public $list;
    /**
     * The totalRecords
     * @var int
     */
    public $totalRecords;
    /**
     * Constructor method for telephonyLineLogsStruct
     * @uses TelephonyLineLogsStruct::setNumber()
     * @uses TelephonyLineLogsStruct::setList()
     * @uses TelephonyLineLogsStruct::setTotalRecords()
     * @param string $number
     * @param \Ovh\ArrayType\MyArrayOfTelephonyLineLogsListStructType $list
     * @param int $totalRecords
     */
    public function __construct($number = null, \Ovh\ArrayType\MyArrayOfTelephonyLineLogsListStructType $list = null, $totalRecords = null)
    {
        $this
            ->setNumber($number)
            ->setList($list)
            ->setTotalRecords($totalRecords);
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
     * @return \Ovh\StructType\TelephonyLineLogsStruct
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
     * @return \Ovh\ArrayType\MyArrayOfTelephonyLineLogsListStructType|null
     */
    public function getList()
    {
        return $this->list;
    }
    /**
     * Set list value
     * @param \Ovh\ArrayType\MyArrayOfTelephonyLineLogsListStructType $list
     * @return \Ovh\StructType\TelephonyLineLogsStruct
     */
    public function setList(\Ovh\ArrayType\MyArrayOfTelephonyLineLogsListStructType $list = null)
    {
        $this->list = $list;
        return $this;
    }
    /**
     * Get totalRecords value
     * @return int|null
     */
    public function getTotalRecords()
    {
        return $this->totalRecords;
    }
    /**
     * Set totalRecords value
     * @param int $totalRecords
     * @return \Ovh\StructType\TelephonyLineLogsStruct
     */
    public function setTotalRecords($totalRecords = null)
    {
        // validation for constraint: int
        if (!is_null($totalRecords) && !(is_int($totalRecords) || ctype_digit($totalRecords))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($totalRecords, true), gettype($totalRecords)), __LINE__);
        }
        $this->totalRecords = $totalRecords;
        return $this;
    }
}
