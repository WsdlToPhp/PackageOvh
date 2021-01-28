<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for telephonyToneStatusResponse StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class TelephonyToneStatusResponse extends AbstractStructBase
{
    /**
     * The return
     * @var \Ovh\StructType\TelephonyToneStatusReturn
     */
    public $return;
    /**
     * Constructor method for telephonyToneStatusResponse
     * @uses TelephonyToneStatusResponse::setReturn()
     * @param \Ovh\StructType\TelephonyToneStatusReturn $return
     */
    public function __construct(\Ovh\StructType\TelephonyToneStatusReturn $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \Ovh\StructType\TelephonyToneStatusReturn|null
     */
    public function getReturn()
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \Ovh\StructType\TelephonyToneStatusReturn $return
     * @return \Ovh\StructType\TelephonyToneStatusResponse
     */
    public function setReturn(\Ovh\StructType\TelephonyToneStatusReturn $return = null)
    {
        $this->return = $return;
        return $this;
    }
}
