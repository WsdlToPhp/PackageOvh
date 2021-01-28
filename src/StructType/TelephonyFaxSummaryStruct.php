<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for telephonyFaxSummaryStruct StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class TelephonyFaxSummaryStruct extends AbstractStructBase
{
    /**
     * The low
     * @var \Ovh\StructType\TelephonyFaxSummaryDetailsStruct
     */
    public $low;
    /**
     * The high
     * @var \Ovh\StructType\TelephonyFaxSummaryDetailsStruct
     */
    public $high;
    /**
     * Constructor method for telephonyFaxSummaryStruct
     * @uses TelephonyFaxSummaryStruct::setLow()
     * @uses TelephonyFaxSummaryStruct::setHigh()
     * @param \Ovh\StructType\TelephonyFaxSummaryDetailsStruct $low
     * @param \Ovh\StructType\TelephonyFaxSummaryDetailsStruct $high
     */
    public function __construct(\Ovh\StructType\TelephonyFaxSummaryDetailsStruct $low = null, \Ovh\StructType\TelephonyFaxSummaryDetailsStruct $high = null)
    {
        $this
            ->setLow($low)
            ->setHigh($high);
    }
    /**
     * Get low value
     * @return \Ovh\StructType\TelephonyFaxSummaryDetailsStruct|null
     */
    public function getLow()
    {
        return $this->low;
    }
    /**
     * Set low value
     * @param \Ovh\StructType\TelephonyFaxSummaryDetailsStruct $low
     * @return \Ovh\StructType\TelephonyFaxSummaryStruct
     */
    public function setLow(\Ovh\StructType\TelephonyFaxSummaryDetailsStruct $low = null)
    {
        $this->low = $low;
        return $this;
    }
    /**
     * Get high value
     * @return \Ovh\StructType\TelephonyFaxSummaryDetailsStruct|null
     */
    public function getHigh()
    {
        return $this->high;
    }
    /**
     * Set high value
     * @param \Ovh\StructType\TelephonyFaxSummaryDetailsStruct $high
     * @return \Ovh\StructType\TelephonyFaxSummaryStruct
     */
    public function setHigh(\Ovh\StructType\TelephonyFaxSummaryDetailsStruct $high = null)
    {
        $this->high = $high;
        return $this;
    }
}
