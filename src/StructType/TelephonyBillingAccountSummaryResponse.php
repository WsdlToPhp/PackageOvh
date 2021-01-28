<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for telephonyBillingAccountSummaryResponse StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class TelephonyBillingAccountSummaryResponse extends AbstractStructBase
{
    /**
     * The return
     * @var \Ovh\StructType\TelephonyBillingAccountSummaryReturn
     */
    public $return;
    /**
     * Constructor method for telephonyBillingAccountSummaryResponse
     * @uses TelephonyBillingAccountSummaryResponse::setReturn()
     * @param \Ovh\StructType\TelephonyBillingAccountSummaryReturn $return
     */
    public function __construct(\Ovh\StructType\TelephonyBillingAccountSummaryReturn $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \Ovh\StructType\TelephonyBillingAccountSummaryReturn|null
     */
    public function getReturn()
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \Ovh\StructType\TelephonyBillingAccountSummaryReturn $return
     * @return \Ovh\StructType\TelephonyBillingAccountSummaryResponse
     */
    public function setReturn(\Ovh\StructType\TelephonyBillingAccountSummaryReturn $return = null)
    {
        $this->return = $return;
        return $this;
    }
}
