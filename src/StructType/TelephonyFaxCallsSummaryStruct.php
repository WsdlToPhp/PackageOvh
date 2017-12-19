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
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ovh\StructType\TelephonyFaxCallsSummaryStruct
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
