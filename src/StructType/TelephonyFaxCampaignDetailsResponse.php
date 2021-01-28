<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for telephonyFaxCampaignDetailsResponse StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class TelephonyFaxCampaignDetailsResponse extends AbstractStructBase
{
    /**
     * The return
     * @var \Ovh\StructType\TelephonyFaxCampaignDetailsStruct
     */
    public $return;
    /**
     * Constructor method for telephonyFaxCampaignDetailsResponse
     * @uses TelephonyFaxCampaignDetailsResponse::setReturn()
     * @param \Ovh\StructType\TelephonyFaxCampaignDetailsStruct $return
     */
    public function __construct(\Ovh\StructType\TelephonyFaxCampaignDetailsStruct $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \Ovh\StructType\TelephonyFaxCampaignDetailsStruct|null
     */
    public function getReturn()
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \Ovh\StructType\TelephonyFaxCampaignDetailsStruct $return
     * @return \Ovh\StructType\TelephonyFaxCampaignDetailsResponse
     */
    public function setReturn(\Ovh\StructType\TelephonyFaxCampaignDetailsStruct $return = null)
    {
        $this->return = $return;
        return $this;
    }
}
