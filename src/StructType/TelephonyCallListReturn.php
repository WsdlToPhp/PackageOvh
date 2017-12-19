<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for telephonyCallListReturn StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class TelephonyCallListReturn extends AbstractStructBase
{
    /**
     * The fromDate
     * @var string
     */
    public $fromDate;
    /**
     * The toDate
     * @var string
     */
    public $toDate;
    /**
     * The list
     * @var \Ovh\ArrayType\MyArrayOfTelephonyCallStructType
     */
    public $list;
    /**
     * Constructor method for telephonyCallListReturn
     * @uses TelephonyCallListReturn::setFromDate()
     * @uses TelephonyCallListReturn::setToDate()
     * @uses TelephonyCallListReturn::setList()
     * @param string $fromDate
     * @param string $toDate
     * @param \Ovh\ArrayType\MyArrayOfTelephonyCallStructType $list
     */
    public function __construct($fromDate = null, $toDate = null, \Ovh\ArrayType\MyArrayOfTelephonyCallStructType $list = null)
    {
        $this
            ->setFromDate($fromDate)
            ->setToDate($toDate)
            ->setList($list);
    }
    /**
     * Get fromDate value
     * @return string|null
     */
    public function getFromDate()
    {
        return $this->fromDate;
    }
    /**
     * Set fromDate value
     * @param string $fromDate
     * @return \Ovh\StructType\TelephonyCallListReturn
     */
    public function setFromDate($fromDate = null)
    {
        // validation for constraint: string
        if (!is_null($fromDate) && !is_string($fromDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($fromDate)), __LINE__);
        }
        $this->fromDate = $fromDate;
        return $this;
    }
    /**
     * Get toDate value
     * @return string|null
     */
    public function getToDate()
    {
        return $this->toDate;
    }
    /**
     * Set toDate value
     * @param string $toDate
     * @return \Ovh\StructType\TelephonyCallListReturn
     */
    public function setToDate($toDate = null)
    {
        // validation for constraint: string
        if (!is_null($toDate) && !is_string($toDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($toDate)), __LINE__);
        }
        $this->toDate = $toDate;
        return $this;
    }
    /**
     * Get list value
     * @return \Ovh\ArrayType\MyArrayOfTelephonyCallStructType|null
     */
    public function getList()
    {
        return $this->list;
    }
    /**
     * Set list value
     * @param \Ovh\ArrayType\MyArrayOfTelephonyCallStructType $list
     * @return \Ovh\StructType\TelephonyCallListReturn
     */
    public function setList(\Ovh\ArrayType\MyArrayOfTelephonyCallStructType $list = null)
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
     * @return \Ovh\StructType\TelephonyCallListReturn
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
