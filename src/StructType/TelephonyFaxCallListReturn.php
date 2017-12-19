<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for telephonyFaxCallListReturn StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class TelephonyFaxCallListReturn extends AbstractStructBase
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
     * @var \PayPal\ArrayType\MyArrayOfTelephonyFaxCallStructType
     */
    public $list;
    /**
     * The summary
     * @var \PayPal\StructType\TelephonyFaxCallsSummaryStruct
     */
    public $summary;
    /**
     * Constructor method for telephonyFaxCallListReturn
     * @uses TelephonyFaxCallListReturn::setFromDate()
     * @uses TelephonyFaxCallListReturn::setToDate()
     * @uses TelephonyFaxCallListReturn::setList()
     * @uses TelephonyFaxCallListReturn::setSummary()
     * @param string $fromDate
     * @param string $toDate
     * @param \PayPal\ArrayType\MyArrayOfTelephonyFaxCallStructType $list
     * @param \PayPal\StructType\TelephonyFaxCallsSummaryStruct $summary
     */
    public function __construct($fromDate = null, $toDate = null, \PayPal\ArrayType\MyArrayOfTelephonyFaxCallStructType $list = null, \PayPal\StructType\TelephonyFaxCallsSummaryStruct $summary = null)
    {
        $this
            ->setFromDate($fromDate)
            ->setToDate($toDate)
            ->setList($list)
            ->setSummary($summary);
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
     * @return \PayPal\StructType\TelephonyFaxCallListReturn
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
     * @return \PayPal\StructType\TelephonyFaxCallListReturn
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
     * @return \PayPal\ArrayType\MyArrayOfTelephonyFaxCallStructType|null
     */
    public function getList()
    {
        return $this->list;
    }
    /**
     * Set list value
     * @param \PayPal\ArrayType\MyArrayOfTelephonyFaxCallStructType $list
     * @return \PayPal\StructType\TelephonyFaxCallListReturn
     */
    public function setList(\PayPal\ArrayType\MyArrayOfTelephonyFaxCallStructType $list = null)
    {
        $this->list = $list;
        return $this;
    }
    /**
     * Get summary value
     * @return \PayPal\StructType\TelephonyFaxCallsSummaryStruct|null
     */
    public function getSummary()
    {
        return $this->summary;
    }
    /**
     * Set summary value
     * @param \PayPal\StructType\TelephonyFaxCallsSummaryStruct $summary
     * @return \PayPal\StructType\TelephonyFaxCallListReturn
     */
    public function setSummary(\PayPal\StructType\TelephonyFaxCallsSummaryStruct $summary = null)
    {
        $this->summary = $summary;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \PayPal\StructType\TelephonyFaxCallListReturn
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
