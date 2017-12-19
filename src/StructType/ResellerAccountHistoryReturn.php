<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for resellerAccountHistoryReturn StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class ResellerAccountHistoryReturn extends AbstractStructBase
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
     * @var \PayPal\ArrayType\MyArrayOfResellerAccountMovementStructType
     */
    public $movements;
    /**
     * Constructor method for resellerAccountHistoryReturn
     * @uses ResellerAccountHistoryReturn::setMonth()
     * @uses ResellerAccountHistoryReturn::setYear()
     * @uses ResellerAccountHistoryReturn::setMovements()
     * @param int $month
     * @param int $year
     * @param \PayPal\ArrayType\MyArrayOfResellerAccountMovementStructType $movements
     */
    public function __construct($month = null, $year = null, \PayPal\ArrayType\MyArrayOfResellerAccountMovementStructType $movements = null)
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
     * @return \PayPal\StructType\ResellerAccountHistoryReturn
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
     * @return \PayPal\StructType\ResellerAccountHistoryReturn
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
     * @return \PayPal\ArrayType\MyArrayOfResellerAccountMovementStructType|null
     */
    public function getMovements()
    {
        return $this->movements;
    }
    /**
     * Set movements value
     * @param \PayPal\ArrayType\MyArrayOfResellerAccountMovementStructType $movements
     * @return \PayPal\StructType\ResellerAccountHistoryReturn
     */
    public function setMovements(\PayPal\ArrayType\MyArrayOfResellerAccountMovementStructType $movements = null)
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
     * @return \PayPal\StructType\ResellerAccountHistoryReturn
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
