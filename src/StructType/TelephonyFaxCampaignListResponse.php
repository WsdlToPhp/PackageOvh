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
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ovh\StructType\TelephonyFaxCampaignListResponse
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
