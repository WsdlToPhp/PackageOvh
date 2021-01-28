<?php

namespace Ovh\StructType;

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
     * @var \Ovh\StructType\TelephonyCallsSummaryDetailsStruct
     */
    public $pricePlan;
    /**
     * The outPlan
     * @var \Ovh\StructType\TelephonyCallsSummaryDetailsStruct
     */
    public $outPlan;
    /**
     * Constructor method for telephonyCallsSummaryStruct
     * @uses TelephonyCallsSummaryStruct::setPricePlan()
     * @uses TelephonyCallsSummaryStruct::setOutPlan()
     * @param \Ovh\StructType\TelephonyCallsSummaryDetailsStruct $pricePlan
     * @param \Ovh\StructType\TelephonyCallsSummaryDetailsStruct $outPlan
     */
    public function __construct(\Ovh\StructType\TelephonyCallsSummaryDetailsStruct $pricePlan = null, \Ovh\StructType\TelephonyCallsSummaryDetailsStruct $outPlan = null)
    {
        $this
            ->setPricePlan($pricePlan)
            ->setOutPlan($outPlan);
    }
    /**
     * Get pricePlan value
     * @return \Ovh\StructType\TelephonyCallsSummaryDetailsStruct|null
     */
    public function getPricePlan()
    {
        return $this->pricePlan;
    }
    /**
     * Set pricePlan value
     * @param \Ovh\StructType\TelephonyCallsSummaryDetailsStruct $pricePlan
     * @return \Ovh\StructType\TelephonyCallsSummaryStruct
     */
    public function setPricePlan(\Ovh\StructType\TelephonyCallsSummaryDetailsStruct $pricePlan = null)
    {
        $this->pricePlan = $pricePlan;
        return $this;
    }
    /**
     * Get outPlan value
     * @return \Ovh\StructType\TelephonyCallsSummaryDetailsStruct|null
     */
    public function getOutPlan()
    {
        return $this->outPlan;
    }
    /**
     * Set outPlan value
     * @param \Ovh\StructType\TelephonyCallsSummaryDetailsStruct $outPlan
     * @return \Ovh\StructType\TelephonyCallsSummaryStruct
     */
    public function setOutPlan(\Ovh\StructType\TelephonyCallsSummaryDetailsStruct $outPlan = null)
    {
        $this->outPlan = $outPlan;
        return $this;
    }
}
