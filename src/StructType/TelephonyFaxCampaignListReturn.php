<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for telephonyFaxCampaignListReturn StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class TelephonyFaxCampaignListReturn extends AbstractStructBase
{
    /**
     * The totalRecords
     * @var int
     */
    public $totalRecords;
    /**
     * The list
     * @var \Ovh\ArrayType\MyArrayOfTelephonyFaxCampaignStructType
     */
    public $list;
    /**
     * Constructor method for telephonyFaxCampaignListReturn
     * @uses TelephonyFaxCampaignListReturn::setTotalRecords()
     * @uses TelephonyFaxCampaignListReturn::setList()
     * @param int $totalRecords
     * @param \Ovh\ArrayType\MyArrayOfTelephonyFaxCampaignStructType $list
     */
    public function __construct($totalRecords = null, \Ovh\ArrayType\MyArrayOfTelephonyFaxCampaignStructType $list = null)
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
     * @return \Ovh\StructType\TelephonyFaxCampaignListReturn
     */
    public function setTotalRecords($totalRecords = null)
    {
        // validation for constraint: int
        if (!is_null($totalRecords) && !(is_int($totalRecords) || ctype_digit($totalRecords))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($totalRecords, true), gettype($totalRecords)), __LINE__);
        }
        $this->totalRecords = $totalRecords;
        return $this;
    }
    /**
     * Get list value
     * @return \Ovh\ArrayType\MyArrayOfTelephonyFaxCampaignStructType|null
     */
    public function getList()
    {
        return $this->list;
    }
    /**
     * Set list value
     * @param \Ovh\ArrayType\MyArrayOfTelephonyFaxCampaignStructType $list
     * @return \Ovh\StructType\TelephonyFaxCampaignListReturn
     */
    public function setList(\Ovh\ArrayType\MyArrayOfTelephonyFaxCampaignStructType $list = null)
    {
        $this->list = $list;
        return $this;
    }
}
