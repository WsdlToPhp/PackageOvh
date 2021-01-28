<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for telephonyPlugAndPhoneInfoResponse StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class TelephonyPlugAndPhoneInfoResponse extends AbstractStructBase
{
    /**
     * The return
     * @var \Ovh\StructType\TelephonyPlugAndPhoneInfoReturn
     */
    public $return;
    /**
     * Constructor method for telephonyPlugAndPhoneInfoResponse
     * @uses TelephonyPlugAndPhoneInfoResponse::setReturn()
     * @param \Ovh\StructType\TelephonyPlugAndPhoneInfoReturn $return
     */
    public function __construct(\Ovh\StructType\TelephonyPlugAndPhoneInfoReturn $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \Ovh\StructType\TelephonyPlugAndPhoneInfoReturn|null
     */
    public function getReturn()
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \Ovh\StructType\TelephonyPlugAndPhoneInfoReturn $return
     * @return \Ovh\StructType\TelephonyPlugAndPhoneInfoResponse
     */
    public function setReturn(\Ovh\StructType\TelephonyPlugAndPhoneInfoReturn $return = null)
    {
        $this->return = $return;
        return $this;
    }
}
