<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for telephonyCallsSummaryStruct StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class TelephonyCallsSummaryStruct extends AbstractStructBase
{
    /**
     * The pricePlan
     * @var \PayPal\StructType\TelephonyCallsSummaryDetailsStruct
     */
    public $pricePlan;
    /**
     * The outPlan
     * @var \PayPal\StructType\TelephonyCallsSummaryDetailsStruct
     */
    public $outPlan;
    /**
     * Constructor method for telephonyCallsSummaryStruct
     * @uses TelephonyCallsSummaryStruct::setPricePlan()
     * @uses TelephonyCallsSummaryStruct::setOutPlan()
     * @param \PayPal\StructType\TelephonyCallsSummaryDetailsStruct $pricePlan
     * @param \PayPal\StructType\TelephonyCallsSummaryDetailsStruct $outPlan
     */
    public function __construct(\PayPal\StructType\TelephonyCallsSummaryDetailsStruct $pricePlan = null, \PayPal\StructType\TelephonyCallsSummaryDetailsStruct $outPlan = null)
    {
        $this
            ->setPricePlan($pricePlan)
            ->setOutPlan($outPlan);
    }
    /**
     * Get pricePlan value
     * @return \PayPal\StructType\TelephonyCallsSummaryDetailsStruct|null
     */
    public function getPricePlan()
    {
        return $this->pricePlan;
    }
    /**
     * Set pricePlan value
     * @param \PayPal\StructType\TelephonyCallsSummaryDetailsStruct $pricePlan
     * @return \PayPal\StructType\TelephonyCallsSummaryStruct
     */
    public function setPricePlan(\PayPal\StructType\TelephonyCallsSummaryDetailsStruct $pricePlan = null)
    {
        $this->pricePlan = $pricePlan;
        return $this;
    }
    /**
     * Get outPlan value
     * @return \PayPal\StructType\TelephonyCallsSummaryDetailsStruct|null
     */
    public function getOutPlan()
    {
        return $this->outPlan;
    }
    /**
     * Set outPlan value
     * @param \PayPal\StructType\TelephonyCallsSummaryDetailsStruct $outPlan
     * @return \PayPal\StructType\TelephonyCallsSummaryStruct
     */
    public function setOutPlan(\PayPal\StructType\TelephonyCallsSummaryDetailsStruct $outPlan = null)
    {
        $this->outPlan = $outPlan;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \PayPal\StructType\TelephonyCallsSummaryStruct
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
