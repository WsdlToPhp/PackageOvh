<?php

namespace Ovh\StructType;

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
     * @var \Ovh\ArrayType\MyArrayOfResellerAccountMovementStructType
     */
    public $movements;
    /**
     * Constructor method for resellerAccountHistoryReturn
     * @uses ResellerAccountHistoryReturn::setMonth()
     * @uses ResellerAccountHistoryReturn::setYear()
     * @uses ResellerAccountHistoryReturn::setMovements()
     * @param int $month
     * @param int $year
     * @param \Ovh\ArrayType\MyArrayOfResellerAccountMovementStructType $movements
     */
    public function __construct($month = null, $year = null, \Ovh\ArrayType\MyArrayOfResellerAccountMovementStructType $movements = null)
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
     * @return \Ovh\StructType\ResellerAccountHistoryReturn
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
     * @return \Ovh\StructType\ResellerAccountHistoryReturn
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
     * @return \Ovh\ArrayType\MyArrayOfResellerAccountMovementStructType|null
     */
    public function getMovements()
    {
        return $this->movements;
    }
    /**
     * Set movements value
     * @param \Ovh\ArrayType\MyArrayOfResellerAccountMovementStructType $movements
     * @return \Ovh\StructType\ResellerAccountHistoryReturn
     */
    public function setMovements(\Ovh\ArrayType\MyArrayOfResellerAccountMovementStructType $movements = null)
    {
        $this->movements = $movements;
        return $this;
    }
}
