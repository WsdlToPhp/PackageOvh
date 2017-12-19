<?php

namespace PayPal\StructType;

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
     * @var \PayPal\StructType\TelephonyFaxSummaryDetailsStruct
     */
    public $low;
    /**
     * The high
     * @var \PayPal\StructType\TelephonyFaxSummaryDetailsStruct
     */
    public $high;
    /**
     * Constructor method for telephonyFaxSummaryStruct
     * @uses TelephonyFaxSummaryStruct::setLow()
     * @uses TelephonyFaxSummaryStruct::setHigh()
     * @param \PayPal\StructType\TelephonyFaxSummaryDetailsStruct $low
     * @param \PayPal\StructType\TelephonyFaxSummaryDetailsStruct $high
     */
    public function __construct(\PayPal\StructType\TelephonyFaxSummaryDetailsStruct $low = null, \PayPal\StructType\TelephonyFaxSummaryDetailsStruct $high = null)
    {
        $this
            ->setLow($low)
            ->setHigh($high);
    }
    /**
     * Get low value
     * @return \PayPal\StructType\TelephonyFaxSummaryDetailsStruct|null
     */
    public function getLow()
    {
        return $this->low;
    }
    /**
     * Set low value
     * @param \PayPal\StructType\TelephonyFaxSummaryDetailsStruct $low
     * @return \PayPal\StructType\TelephonyFaxSummaryStruct
     */
    public function setLow(\PayPal\StructType\TelephonyFaxSummaryDetailsStruct $low = null)
    {
        $this->low = $low;
        return $this;
    }
    /**
     * Get high value
     * @return \PayPal\StructType\TelephonyFaxSummaryDetailsStruct|null
     */
    public function getHigh()
    {
        return $this->high;
    }
    /**
     * Set high value
     * @param \PayPal\StructType\TelephonyFaxSummaryDetailsStruct $high
     * @return \PayPal\StructType\TelephonyFaxSummaryStruct
     */
    public function setHigh(\PayPal\StructType\TelephonyFaxSummaryDetailsStruct $high = null)
    {
        $this->high = $high;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \PayPal\StructType\TelephonyFaxSummaryStruct
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
