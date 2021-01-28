<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for telephonyNumberOrderResponse StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class TelephonyNumberOrderResponse extends AbstractStructBase
{
    /**
     * The return
     * @var \Ovh\StructType\TelephonyNumberOrderReturn
     */
    public $return;
    /**
     * Constructor method for telephonyNumberOrderResponse
     * @uses TelephonyNumberOrderResponse::setReturn()
     * @param \Ovh\StructType\TelephonyNumberOrderReturn $return
     */
    public function __construct(\Ovh\StructType\TelephonyNumberOrderReturn $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \Ovh\StructType\TelephonyNumberOrderReturn|null
     */
    public function getReturn()
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \Ovh\StructType\TelephonyNumberOrderReturn $return
     * @return \Ovh\StructType\TelephonyNumberOrderResponse
     */
    public function setReturn(\Ovh\StructType\TelephonyNumberOrderReturn $return = null)
    {
        $this->return = $return;
        return $this;
    }
}
