<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for accountHistoryReturn StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class AccountHistoryReturn extends AbstractStructBase
{
    /**
     * The month
     * @var int
     */
    public $month;
    /**
     * The year
     * @var int
     */
    public $year;
    /**
     * The movements
     * @var \PayPal\ArrayType\MyArrayOfAccountMovementStructType
     */
    public $movements;
    /**
     * Constructor method for accountHistoryReturn
     * @uses AccountHistoryReturn::setMonth()
     * @uses AccountHistoryReturn::setYear()
     * @uses AccountHistoryReturn::setMovements()
     * @param int $month
     * @param int $year
     * @param \PayPal\ArrayType\MyArrayOfAccountMovementStructType $movements
     */
    public function __construct($month = null, $year = null, \PayPal\ArrayType\MyArrayOfAccountMovementStructType $movements = null)
    {
        $this
            ->setMonth($month)
            ->setYear($year)
            ->setMovements($movements);
    }
    /**
     * Get month value
     * @return int|null
     */
    public function getMonth()
    {
        return $this->month;
    }
    /**
     * Set month value
     * @param int $month
     * @return \PayPal\StructType\AccountHistoryReturn
     */
    public function setMonth($month = null)
    {
        // validation for constraint: int
        if (!is_null($month) && !is_numeric($month)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($month)), __LINE__);
        }
        $this->month = $month;
        return $this;
    }
    /**
     * Get year value
     * @return int|null
     */
    public function getYear()
    {
        return $this->year;
    }
    /**
     * Set year value
     * @param int $year
     * @return \PayPal\StructType\AccountHistoryReturn
     */
    public function setYear($year = null)
    {
        // validation for constraint: int
        if (!is_null($year) && !is_numeric($year)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($year)), __LINE__);
        }
        $this->year = $year;
        return $this;
    }
    /**
     * Get movements value
     * @return \PayPal\ArrayType\MyArrayOfAccountMovementStructType|null
     */
    public function getMovements()
    {
        return $this->movements;
    }
    /**
     * Set movements value
     * @param \PayPal\ArrayType\MyArrayOfAccountMovementStructType $movements
     * @return \PayPal\StructType\AccountHistoryReturn
     */
    public function setMovements(\PayPal\ArrayType\MyArrayOfAccountMovementStructType $movements = null)
    {
        $this->movements = $movements;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \PayPal\StructType\AccountHistoryReturn
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
