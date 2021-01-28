<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for telephonyFaxCallsSummaryStruct StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class TelephonyFaxCallsSummaryStruct extends AbstractStructBase
{
    /**
     * The high
     * @var \Ovh\StructType\TelephonyFaxCallsSummaryDetailsStruct
     */
    public $high;
    /**
     * The low
     * @var \Ovh\StructType\TelephonyFaxCallsSummaryDetailsStruct
     */
    public $low;
    /**
     * Constructor method for telephonyFaxCallsSummaryStruct
     * @uses TelephonyFaxCallsSummaryStruct::setHigh()
     * @uses TelephonyFaxCallsSummaryStruct::setLow()
     * @param \Ovh\StructType\TelephonyFaxCallsSummaryDetailsStruct $high
     * @param \Ovh\StructType\TelephonyFaxCallsSummaryDetailsStruct $low
     */
    public function __construct(\Ovh\StructType\TelephonyFaxCallsSummaryDetailsStruct $high = null, \Ovh\StructType\TelephonyFaxCallsSummaryDetailsStruct $low = null)
    {
        $this
            ->setHigh($high)
            ->setLow($low);
    }
    /**
     * Get high value
     * @return \Ovh\StructType\TelephonyFaxCallsSummaryDetailsStruct|null
     */
    public function getHigh()
    {
        return $this->high;
    }
    /**
     * Set high value
     * @param \Ovh\StructType\TelephonyFaxCallsSummaryDetailsStruct $high
     * @return \Ovh\StructType\TelephonyFaxCallsSummaryStruct
     */
    public function setHigh(\Ovh\StructType\TelephonyFaxCallsSummaryDetailsStruct $high = null)
    {
        $this->high = $high;
        return $this;
    }
    /**
     * Get low value
     * @return \Ovh\StructType\TelephonyFaxCallsSummaryDetailsStruct|null
     */
    public function getLow()
    {
        return $this->low;
    }
    /**
     * Set low value
     * @param \Ovh\StructType\TelephonyFaxCallsSummaryDetailsStruct $low
     * @return \Ovh\StructType\TelephonyFaxCallsSummaryStruct
     */
    public function setLow(\Ovh\StructType\TelephonyFaxCallsSummaryDetailsStruct $low = null)
    {
        $this->low = $low;
        return $this;
    }
}
