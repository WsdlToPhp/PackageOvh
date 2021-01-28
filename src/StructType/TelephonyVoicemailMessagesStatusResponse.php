<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for telephonyVoicemailMessagesStatusResponse StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class TelephonyVoicemailMessagesStatusResponse extends AbstractStructBase
{
    /**
     * The return
     * @var \Ovh\StructType\TelephonyVoicemailMessagesStatusReturn
     */
    public $return;
    /**
     * Constructor method for telephonyVoicemailMessagesStatusResponse
     * @uses TelephonyVoicemailMessagesStatusResponse::setReturn()
     * @param \Ovh\StructType\TelephonyVoicemailMessagesStatusReturn $return
     */
    public function __construct(\Ovh\StructType\TelephonyVoicemailMessagesStatusReturn $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \Ovh\StructType\TelephonyVoicemailMessagesStatusReturn|null
     */
    public function getReturn()
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \Ovh\StructType\TelephonyVoicemailMessagesStatusReturn $return
     * @return \Ovh\StructType\TelephonyVoicemailMessagesStatusResponse
     */
    public function setReturn(\Ovh\StructType\TelephonyVoicemailMessagesStatusReturn $return = null)
    {
        $this->return = $return;
        return $this;
    }
}
