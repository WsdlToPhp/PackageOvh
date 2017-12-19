<?php

namespace PayPal\StructType;

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
     * @var \PayPal\StructType\TelephonyVoicemailMailboxDownloadReturn
     */
    public $return;
    /**
     * Constructor method for telephonyVoicemailMailboxDownloadResponse
     * @uses TelephonyVoicemailMailboxDownloadResponse::setReturn()
     * @param \PayPal\StructType\TelephonyVoicemailMailboxDownloadReturn $return
     */
    public function __construct(\PayPal\StructType\TelephonyVoicemailMailboxDownloadReturn $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \PayPal\StructType\TelephonyVoicemailMailboxDownloadReturn|null
     */
    public function getReturn()
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \PayPal\StructType\TelephonyVoicemailMailboxDownloadReturn $return
     * @return \PayPal\StructType\TelephonyVoicemailMailboxDownloadResponse
     */
    public function setReturn(\PayPal\StructType\TelephonyVoicemailMailboxDownloadReturn $return = null)
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
     * @return \PayPal\StructType\TelephonyVoicemailMailboxDownloadResponse
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
