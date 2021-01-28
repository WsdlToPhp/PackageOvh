<?php

namespace Ovh\StructType;

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
     * @var \Ovh\ArrayType\MyArrayOfAccountMovementStructType
     */
    public $movements;
    /**
     * Constructor method for accountHistoryReturn
     * @uses AccountHistoryReturn::setMonth()
     * @uses AccountHistoryReturn::setYear()
     * @uses AccountHistoryReturn::setMovements()
     * @param int $month
     * @param int $year
     * @param \Ovh\ArrayType\MyArrayOfAccountMovementStructType $movements
     */
    public function __construct($month = null, $year = null, \Ovh\ArrayType\MyArrayOfAccountMovementStructType $movements = null)
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
     * @return \Ovh\StructType\AccountHistoryReturn
     */
    public function setMonth($month = null)
    {
        // validation for constraint: int
        if (!is_null($month) && !(is_int($month) || ctype_digit($month))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($month, true), gettype($month)), __LINE__);
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
     * @return \Ovh\StructType\AccountHistoryReturn
     */
    public function setYear($year = null)
    {
        // validation for constraint: int
        if (!is_null($year) && !(is_int($year) || ctype_digit($year))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($year, true), gettype($year)), __LINE__);
        }
        $this->year = $year;
        return $this;
    }
    /**
     * Get movements value
     * @return \Ovh\ArrayType\MyArrayOfAccountMovementStructType|null
     */
    public function getMovements()
    {
        return $this->movements;
    }
    /**
     * Set movements value
     * @param \Ovh\ArrayType\MyArrayOfAccountMovementStructType $movements
     * @return \Ovh\StructType\AccountHistoryReturn
     */
    public function setMovements(\Ovh\ArrayType\MyArrayOfAccountMovementStructType $movements = null)
    {
        $this->movements = $movements;
        return $this;
    }
}
