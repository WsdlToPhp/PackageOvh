<?php

namespace Ovh\StructType;

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
     * @var \Ovh\ArrayType\MyArrayOfTelephonyFaxCallStructType
     */
    public $list;
    /**
     * The summary
     * @var \Ovh\StructType\TelephonyFaxCallsSummaryStruct
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
     * @param \Ovh\ArrayType\MyArrayOfTelephonyFaxCallStructType $list
     * @param \Ovh\StructType\TelephonyFaxCallsSummaryStruct $summary
     */
    public function __construct($fromDate = null, $toDate = null, \Ovh\ArrayType\MyArrayOfTelephonyFaxCallStructType $list = null, \Ovh\StructType\TelephonyFaxCallsSummaryStruct $summary = null)
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
     * @return \Ovh\StructType\TelephonyFaxCallListReturn
     */
    public function setFromDate($fromDate = null)
    {
        // validation for constraint: string
        if (!is_null($fromDate) && !is_string($fromDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($fromDate, true), gettype($fromDate)), __LINE__);
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
     * @return \Ovh\StructType\TelephonyFaxCallListReturn
     */
    public function setToDate($toDate = null)
    {
        // validation for constraint: string
        if (!is_null($toDate) && !is_string($toDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($toDate, true), gettype($toDate)), __LINE__);
        }
        $this->toDate = $toDate;
        return $this;
    }
    /**
     * Get list value
     * @return \Ovh\ArrayType\MyArrayOfTelephonyFaxCallStructType|null
     */
    public function getList()
    {
        return $this->list;
    }
    /**
     * Set list value
     * @param \Ovh\ArrayType\MyArrayOfTelephonyFaxCallStructType $list
     * @return \Ovh\StructType\TelephonyFaxCallListReturn
     */
    public function setList(\Ovh\ArrayType\MyArrayOfTelephonyFaxCallStructType $list = null)
    {
        $this->list = $list;
        return $this;
    }
    /**
     * Get summary value
     * @return \Ovh\StructType\TelephonyFaxCallsSummaryStruct|null
     */
    public function getSummary()
    {
        return $this->summary;
    }
    /**
     * Set summary value
     * @param \Ovh\StructType\TelephonyFaxCallsSummaryStruct $summary
     * @return \Ovh\StructType\TelephonyFaxCallListReturn
     */
    public function setSummary(\Ovh\StructType\TelephonyFaxCallsSummaryStruct $summary = null)
    {
        $this->summary = $summary;
        return $this;
    }
}
