<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for telephonyBillingAccountInfoResponse StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class TelephonyBillingAccountInfoResponse extends AbstractStructBase
{
    /**
     * The return
     * @var \Ovh\StructType\TelephonyBillingAccountInfoReturn
     */
    public $return;
    /**
     * Constructor method for telephonyBillingAccountInfoResponse
     * @uses TelephonyBillingAccountInfoResponse::setReturn()
     * @param \Ovh\StructType\TelephonyBillingAccountInfoReturn $return
     */
    public function __construct(\Ovh\StructType\TelephonyBillingAccountInfoReturn $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \Ovh\StructType\TelephonyBillingAccountInfoReturn|null
     */
    public function getReturn()
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \Ovh\StructType\TelephonyBillingAccountInfoReturn $return
     * @return \Ovh\StructType\TelephonyBillingAccountInfoResponse
     */
    public function setReturn(\Ovh\StructType\TelephonyBillingAccountInfoReturn $return = null)
    {
        $this->return = $return;
        return $this;
    }
}
