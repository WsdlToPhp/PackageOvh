<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for telephonyVoicemailMessagesDownloadResponse StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class TelephonyVoicemailMessagesDownloadResponse extends AbstractStructBase
{
    /**
     * The return
     * @var \Ovh\StructType\TelephonyVoicemailMessagesDownloadReturn
     */
    public $return;
    /**
     * Constructor method for telephonyVoicemailMessagesDownloadResponse
     * @uses TelephonyVoicemailMessagesDownloadResponse::setReturn()
     * @param \Ovh\StructType\TelephonyVoicemailMessagesDownloadReturn $return
     */
    public function __construct(\Ovh\StructType\TelephonyVoicemailMessagesDownloadReturn $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \Ovh\StructType\TelephonyVoicemailMessagesDownloadReturn|null
     */
    public function getReturn()
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \Ovh\StructType\TelephonyVoicemailMessagesDownloadReturn $return
     * @return \Ovh\StructType\TelephonyVoicemailMessagesDownloadResponse
     */
    public function setReturn(\Ovh\StructType\TelephonyVoicemailMessagesDownloadReturn $return = null)
    {
        $this->return = $return;
        return $this;
    }
}
