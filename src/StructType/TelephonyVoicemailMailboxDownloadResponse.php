<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for telephonyVoicemailMailboxDownloadResponse StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class TelephonyVoicemailMailboxDownloadResponse extends AbstractStructBase
{
    /**
     * The return
     * @var \Ovh\StructType\TelephonyVoicemailMailboxDownloadReturn
     */
    public $return;
    /**
     * Constructor method for telephonyVoicemailMailboxDownloadResponse
     * @uses TelephonyVoicemailMailboxDownloadResponse::setReturn()
     * @param \Ovh\StructType\TelephonyVoicemailMailboxDownloadReturn $return
     */
    public function __construct(\Ovh\StructType\TelephonyVoicemailMailboxDownloadReturn $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \Ovh\StructType\TelephonyVoicemailMailboxDownloadReturn|null
     */
    public function getReturn()
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \Ovh\StructType\TelephonyVoicemailMailboxDownloadReturn $return
     * @return \Ovh\StructType\TelephonyVoicemailMailboxDownloadResponse
     */
    public function setReturn(\Ovh\StructType\TelephonyVoicemailMailboxDownloadReturn $return = null)
    {
        $this->return = $return;
        return $this;
    }
}
