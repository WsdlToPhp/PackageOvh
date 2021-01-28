<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for telephonyFaxCampaignListResponse StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class TelephonyFaxCampaignListResponse extends AbstractStructBase
{
    /**
     * The return
     * @var \Ovh\StructType\TelephonyFaxCampaignListReturn
     */
    public $return;
    /**
     * Constructor method for telephonyFaxCampaignListResponse
     * @uses TelephonyFaxCampaignListResponse::setReturn()
     * @param \Ovh\StructType\TelephonyFaxCampaignListReturn $return
     */
    public function __construct(\Ovh\StructType\TelephonyFaxCampaignListReturn $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \Ovh\StructType\TelephonyFaxCampaignListReturn|null
     */
    public function getReturn()
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \Ovh\StructType\TelephonyFaxCampaignListReturn $return
     * @return \Ovh\StructType\TelephonyFaxCampaignListResponse
     */
    public function setReturn(\Ovh\StructType\TelephonyFaxCampaignListReturn $return = null)
    {
        $this->return = $return;
        return $this;
    }
}
