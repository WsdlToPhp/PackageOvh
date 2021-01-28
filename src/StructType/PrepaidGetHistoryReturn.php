<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for prepaidGetHistoryReturn StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class PrepaidGetHistoryReturn extends AbstractStructBase
{
    /**
     * The page
     * @var int
     */
    public $page;
    /**
     * The total
     * @var int
     */
    public $total;
    /**
     * The start
     * @var int
     */
    public $start;
    /**
     * The end
     * @var int
     */
    public $end;
    /**
     * The operations
     * @var \Ovh\ArrayType\MyArrayOfPrepaidOperationStructType
     */
    public $operations;
    /**
     * Constructor method for prepaidGetHistoryReturn
     * @uses PrepaidGetHistoryReturn::setPage()
     * @uses PrepaidGetHistoryReturn::setTotal()
     * @uses PrepaidGetHistoryReturn::setStart()
     * @uses PrepaidGetHistoryReturn::setEnd()
     * @uses PrepaidGetHistoryReturn::setOperations()
     * @param int $page
     * @param int $total
     * @param int $start
     * @param int $end
     * @param \Ovh\ArrayType\MyArrayOfPrepaidOperationStructType $operations
     */
    public function __construct($page = null, $total = null, $start = null, $end = null, \Ovh\ArrayType\MyArrayOfPrepaidOperationStructType $operations = null)
    {
        $this
            ->setPage($page)
            ->setTotal($total)
            ->setStart($start)
            ->setEnd($end)
            ->setOperations($operations);
    }
    /**
     * Get page value
     * @return int|null
     */
    public function getPage()
    {
        return $this->page;
    }
    /**
     * Set page value
     * @param int $page
     * @return \Ovh\StructType\PrepaidGetHistoryReturn
     */
    public function setPage($page = null)
    {
        // validation for constraint: int
        if (!is_null($page) && !(is_int($page) || ctype_digit($page))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($page, true), gettype($page)), __LINE__);
        }
        $this->page = $page;
        return $this;
    }
    /**
     * Get total value
     * @return int|null
     */
    public function getTotal()
    {
        return $this->total;
    }
    /**
     * Set total value
     * @param int $total
     * @return \Ovh\StructType\PrepaidGetHistoryReturn
     */
    public function setTotal($total = null)
    {
        // validation for constraint: int
        if (!is_null($total) && !(is_int($total) || ctype_digit($total))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($total, true), gettype($total)), __LINE__);
        }
        $this->total = $total;
        return $this;
    }
    /**
     * Get start value
     * @return int|null
     */
    public function getStart()
    {
        return $this->start;
    }
    /**
     * Set start value
     * @param int $start
     * @return \Ovh\StructType\PrepaidGetHistoryReturn
     */
    public function setStart($start = null)
    {
        // validation for constraint: int
        if (!is_null($start) && !(is_int($start) || ctype_digit($start))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($start, true), gettype($start)), __LINE__);
        }
        $this->start = $start;
        return $this;
    }
    /**
     * Get end value
     * @return int|null
     */
    public function getEnd()
    {
        return $this->end;
    }
    /**
     * Set end value
     * @param int $end
     * @return \Ovh\StructType\PrepaidGetHistoryReturn
     */
    public function setEnd($end = null)
    {
        // validation for constraint: int
        if (!is_null($end) && !(is_int($end) || ctype_digit($end))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($end, true), gettype($end)), __LINE__);
        }
        $this->end = $end;
        return $this;
    }
    /**
     * Get operations value
     * @return \Ovh\ArrayType\MyArrayOfPrepaidOperationStructType|null
     */
    public function getOperations()
    {
        return $this->operations;
    }
    /**
     * Set operations value
     * @param \Ovh\ArrayType\MyArrayOfPrepaidOperationStructType $operations
     * @return \Ovh\StructType\PrepaidGetHistoryReturn
     */
    public function setOperations(\Ovh\ArrayType\MyArrayOfPrepaidOperationStructType $operations = null)
    {
        $this->operations = $operations;
        return $this;
    }
}
