<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for telephonyBillDetailsResponse StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class TelephonyBillDetailsResponse extends AbstractStructBase
{
    /**
     * The return
     * @var \Ovh\StructType\TelephonyBillDetailsReturn
     */
    public $return;
    /**
     * Constructor method for telephonyBillDetailsResponse
     * @uses TelephonyBillDetailsResponse::setReturn()
     * @param \Ovh\StructType\TelephonyBillDetailsReturn $return
     */
    public function __construct(\Ovh\StructType\TelephonyBillDetailsReturn $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \Ovh\StructType\TelephonyBillDetailsReturn|null
     */
    public function getReturn()
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \Ovh\StructType\TelephonyBillDetailsReturn $return
     * @return \Ovh\StructType\TelephonyBillDetailsResponse
     */
    public function setReturn(\Ovh\StructType\TelephonyBillDetailsReturn $return = null)
    {
        $this->return = $return;
        return $this;
    }
}
