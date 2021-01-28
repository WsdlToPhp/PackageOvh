<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for telephonyVoicemailOptionsListResponse StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class TelephonyVoicemailOptionsListResponse extends AbstractStructBase
{
    /**
     * The return
     * @var \Ovh\StructType\TelephonyVoicemailOptionsListReturn
     */
    public $return;
    /**
     * Constructor method for telephonyVoicemailOptionsListResponse
     * @uses TelephonyVoicemailOptionsListResponse::setReturn()
     * @param \Ovh\StructType\TelephonyVoicemailOptionsListReturn $return
     */
    public function __construct(\Ovh\StructType\TelephonyVoicemailOptionsListReturn $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \Ovh\StructType\TelephonyVoicemailOptionsListReturn|null
     */
    public function getReturn()
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \Ovh\StructType\TelephonyVoicemailOptionsListReturn $return
     * @return \Ovh\StructType\TelephonyVoicemailOptionsListResponse
     */
    public function setReturn(\Ovh\StructType\TelephonyVoicemailOptionsListReturn $return = null)
    {
        $this->return = $return;
        return $this;
    }
}
