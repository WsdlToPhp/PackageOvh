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
        if (!is_null($page) && !is_numeric($page)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($page)), __LINE__);
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
        if (!is_null($total) && !is_numeric($total)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($total)), __LINE__);
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
        if (!is_null($start) && !is_numeric($start)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($start)), __LINE__);
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
        if (!is_null($end) && !is_numeric($end)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($end)), __LINE__);
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
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ovh\StructType\PrepaidGetHistoryReturn
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
