<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for telephonyListReversableCallsFromNumberReturn StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class TelephonyListReversableCallsFromNumberReturn extends AbstractStructBase
{
    /**
     * The totalRecords
     * @var int
     */
    public $totalRecords;
    /**
     * The list
     * @var \Ovh\ArrayType\MyArrayOfTelephonyReversmentsDetailsStructType
     */
    public $list;
    /**
     * Constructor method for telephonyListReversableCallsFromNumberReturn
     * @uses TelephonyListReversableCallsFromNumberReturn::setTotalRecords()
     * @uses TelephonyListReversableCallsFromNumberReturn::setList()
     * @param int $totalRecords
     * @param \Ovh\ArrayType\MyArrayOfTelephonyReversmentsDetailsStructType $list
     */
    public function __construct($totalRecords = null, \Ovh\ArrayType\MyArrayOfTelephonyReversmentsDetailsStructType $list = null)
    {
        $this
            ->setTotalRecords($totalRecords)
            ->setList($list);
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
     * @return \Ovh\StructType\TelephonyListReversableCallsFromNumberReturn
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
    /**
     * Get list value
     * @return \Ovh\ArrayType\MyArrayOfTelephonyReversmentsDetailsStructType|null
     */
    public function getList()
    {
        return $this->list;
    }
    /**
     * Set list value
     * @param \Ovh\ArrayType\MyArrayOfTelephonyReversmentsDetailsStructType $list
     * @return \Ovh\StructType\TelephonyListReversableCallsFromNumberReturn
     */
    public function setList(\Ovh\ArrayType\MyArrayOfTelephonyReversmentsDetailsStructType $list = null)
    {
        $this->list = $list;
        return $this;
    }
}
