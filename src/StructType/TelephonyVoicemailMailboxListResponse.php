<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for telephonyVoicemailMailboxListResponse StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class TelephonyVoicemailMailboxListResponse extends AbstractStructBase
{
    /**
     * The return
     * @var \Ovh\ArrayType\MyArrayOfTelephonyVoicemailMailboxStructType
     */
    public $return;
    /**
     * Constructor method for telephonyVoicemailMailboxListResponse
     * @uses TelephonyVoicemailMailboxListResponse::setReturn()
     * @param \Ovh\ArrayType\MyArrayOfTelephonyVoicemailMailboxStructType $return
     */
    public function __construct(\Ovh\ArrayType\MyArrayOfTelephonyVoicemailMailboxStructType $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \Ovh\ArrayType\MyArrayOfTelephonyVoicemailMailboxStructType|null
     */
    public function getReturn()
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \Ovh\ArrayType\MyArrayOfTelephonyVoicemailMailboxStructType $return
     * @return \Ovh\StructType\TelephonyVoicemailMailboxListResponse
     */
    public function setReturn(\Ovh\ArrayType\MyArrayOfTelephonyVoicemailMailboxStructType $return = null)
    {
        $this->return = $return;
        return $this;
    }
}
