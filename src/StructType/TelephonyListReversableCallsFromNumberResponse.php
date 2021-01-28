<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for telephonyListReversableCallsFromNumberResponse StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class TelephonyListReversableCallsFromNumberResponse extends AbstractStructBase
{
    /**
     * The return
     * @var \Ovh\StructType\TelephonyListReversableCallsFromNumberReturn
     */
    public $return;
    /**
     * Constructor method for telephonyListReversableCallsFromNumberResponse
     * @uses TelephonyListReversableCallsFromNumberResponse::setReturn()
     * @param \Ovh\StructType\TelephonyListReversableCallsFromNumberReturn $return
     */
    public function __construct(\Ovh\StructType\TelephonyListReversableCallsFromNumberReturn $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \Ovh\StructType\TelephonyListReversableCallsFromNumberReturn|null
     */
    public function getReturn()
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \Ovh\StructType\TelephonyListReversableCallsFromNumberReturn $return
     * @return \Ovh\StructType\TelephonyListReversableCallsFromNumberResponse
     */
    public function setReturn(\Ovh\StructType\TelephonyListReversableCallsFromNumberReturn $return = null)
    {
        $this->return = $return;
        return $this;
    }
}
