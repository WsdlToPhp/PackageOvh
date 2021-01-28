<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for telephonyTrunkExternalDisplayedNumberListResponse
 * StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class TelephonyTrunkExternalDisplayedNumberListResponse extends AbstractStructBase
{
    /**
     * The return
     * @var \Ovh\ArrayType\MyArrayOfTelephonyTrunkExternalDisplayedNumberStructType
     */
    public $return;
    /**
     * Constructor method for telephonyTrunkExternalDisplayedNumberListResponse
     * @uses TelephonyTrunkExternalDisplayedNumberListResponse::setReturn()
     * @param \Ovh\ArrayType\MyArrayOfTelephonyTrunkExternalDisplayedNumberStructType $return
     */
    public function __construct(\Ovh\ArrayType\MyArrayOfTelephonyTrunkExternalDisplayedNumberStructType $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \Ovh\ArrayType\MyArrayOfTelephonyTrunkExternalDisplayedNumberStructType|null
     */
    public function getReturn()
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \Ovh\ArrayType\MyArrayOfTelephonyTrunkExternalDisplayedNumberStructType $return
     * @return \Ovh\StructType\TelephonyTrunkExternalDisplayedNumberListResponse
     */
    public function setReturn(\Ovh\ArrayType\MyArrayOfTelephonyTrunkExternalDisplayedNumberStructType $return = null)
    {
        $this->return = $return;
        return $this;
    }
}
