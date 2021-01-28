<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for telephonyAbbreviatedNumberListPaginatedReturn StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class TelephonyAbbreviatedNumberListPaginatedReturn extends AbstractStructBase
{
    /**
     * The totalRecords
     * @var int
     */
    public $totalRecords;
    /**
     * The list
     * @var \Ovh\ArrayType\MyArrayOfTelephonyAbbreviatedNumberStructType
     */
    public $list;
    /**
     * Constructor method for telephonyAbbreviatedNumberListPaginatedReturn
     * @uses TelephonyAbbreviatedNumberListPaginatedReturn::setTotalRecords()
     * @uses TelephonyAbbreviatedNumberListPaginatedReturn::setList()
     * @param int $totalRecords
     * @param \Ovh\ArrayType\MyArrayOfTelephonyAbbreviatedNumberStructType $list
     */
    public function __construct($totalRecords = null, \Ovh\ArrayType\MyArrayOfTelephonyAbbreviatedNumberStructType $list = null)
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
     * @return \Ovh\StructType\TelephonyAbbreviatedNumberListPaginatedReturn
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
     * @return \Ovh\ArrayType\MyArrayOfTelephonyAbbreviatedNumberStructType|null
     */
    public function getList()
    {
        return $this->list;
    }
    /**
     * Set list value
     * @param \Ovh\ArrayType\MyArrayOfTelephonyAbbreviatedNumberStructType $list
     * @return \Ovh\StructType\TelephonyAbbreviatedNumberListPaginatedReturn
     */
    public function setList(\Ovh\ArrayType\MyArrayOfTelephonyAbbreviatedNumberStructType $list = null)
    {
        $this->list = $list;
        return $this;
    }
}
