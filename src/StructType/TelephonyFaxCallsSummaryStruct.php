<?php

namespace PayPal\StructType;

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
     * @var \PayPal\StructType\TelephonyFaxCallsSummaryDetailsStruct
     */
    public $high;
    /**
     * The low
     * @var \PayPal\StructType\TelephonyFaxCallsSummaryDetailsStruct
     */
    public $low;
    /**
     * Constructor method for telephonyFaxCallsSummaryStruct
     * @uses TelephonyFaxCallsSummaryStruct::setHigh()
     * @uses TelephonyFaxCallsSummaryStruct::setLow()
     * @param \PayPal\StructType\TelephonyFaxCallsSummaryDetailsStruct $high
     * @param \PayPal\StructType\TelephonyFaxCallsSummaryDetailsStruct $low
     */
    public function __construct(\PayPal\StructType\TelephonyFaxCallsSummaryDetailsStruct $high = null, \PayPal\StructType\TelephonyFaxCallsSummaryDetailsStruct $low = null)
    {
        $this
            ->setHigh($high)
            ->setLow($low);
    }
    /**
     * Get high value
     * @return \PayPal\StructType\TelephonyFaxCallsSummaryDetailsStruct|null
     */
    public function getHigh()
    {
        return $this->high;
    }
    /**
     * Set high value
     * @param \PayPal\StructType\TelephonyFaxCallsSummaryDetailsStruct $high
     * @return \PayPal\StructType\TelephonyFaxCallsSummaryStruct
     */
    public function setHigh(\PayPal\StructType\TelephonyFaxCallsSummaryDetailsStruct $high = null)
    {
        $this->high = $high;
        return $this;
    }
    /**
     * Get low value
     * @return \PayPal\StructType\TelephonyFaxCallsSummaryDetailsStruct|null
     */
    public function getLow()
    {
        return $this->low;
    }
    /**
     * Set low value
     * @param \PayPal\StructType\TelephonyFaxCallsSummaryDetailsStruct $low
     * @return \PayPal\StructType\TelephonyFaxCallsSummaryStruct
     */
    public function setLow(\PayPal\StructType\TelephonyFaxCallsSummaryDetailsStruct $low = null)
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
     * @return \PayPal\StructType\TelephonyFaxCallsSummaryStruct
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
