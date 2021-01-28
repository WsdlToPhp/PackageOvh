<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for telephonyLineGetCodecsResponse StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class TelephonyLineGetCodecsResponse extends AbstractStructBase
{
    /**
     * The return
     * @var \Ovh\StructType\TelephonyLineGetCodecsReturn
     */
    public $return;
    /**
     * Constructor method for telephonyLineGetCodecsResponse
     * @uses TelephonyLineGetCodecsResponse::setReturn()
     * @param \Ovh\StructType\TelephonyLineGetCodecsReturn $return
     */
    public function __construct(\Ovh\StructType\TelephonyLineGetCodecsReturn $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \Ovh\StructType\TelephonyLineGetCodecsReturn|null
     */
    public function getReturn()
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \Ovh\StructType\TelephonyLineGetCodecsReturn $return
     * @return \Ovh\StructType\TelephonyLineGetCodecsResponse
     */
    public function setReturn(\Ovh\StructType\TelephonyLineGetCodecsReturn $return = null)
    {
        $this->return = $return;
        return $this;
    }
}
