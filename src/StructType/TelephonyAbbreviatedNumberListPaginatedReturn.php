<?php

namespace PayPal\StructType;

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
     * @var \PayPal\ArrayType\MyArrayOfTelephonyAbbreviatedNumberStructType
     */
    public $list;
    /**
     * Constructor method for telephonyAbbreviatedNumberListPaginatedReturn
     * @uses TelephonyAbbreviatedNumberListPaginatedReturn::setTotalRecords()
     * @uses TelephonyAbbreviatedNumberListPaginatedReturn::setList()
     * @param int $totalRecords
     * @param \PayPal\ArrayType\MyArrayOfTelephonyAbbreviatedNumberStructType $list
     */
    public function __construct($totalRecords = null, \PayPal\ArrayType\MyArrayOfTelephonyAbbreviatedNumberStructType $list = null)
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
     * @return \PayPal\StructType\TelephonyAbbreviatedNumberListPaginatedReturn
     */
    public function setTotalRecords($totalRecords = null)
    {
        // validation for constraint: int
        if (!is_null($totalRecords) && !is_numeric($totalRecords)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($totalRecords)), __LINE__);
        }
        $this->totalRecords = $totalRecords;
        return $this;
    }
    /**
     * Get list value
     * @return \PayPal\ArrayType\MyArrayOfTelephonyAbbreviatedNumberStructType|null
     */
    public function getList()
    {
        return $this->list;
    }
    /**
     * Set list value
     * @param \PayPal\ArrayType\MyArrayOfTelephonyAbbreviatedNumberStructType $list
     * @return \PayPal\StructType\TelephonyAbbreviatedNumberListPaginatedReturn
     */
    public function setList(\PayPal\ArrayType\MyArrayOfTelephonyAbbreviatedNumberStructType $list = null)
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
     * @return \PayPal\StructType\TelephonyAbbreviatedNumberListPaginatedReturn
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
