<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for telephonyNumberCityForZoneListResponse StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class TelephonyNumberCityForZoneListResponse extends AbstractStructBase
{
    /**
     * The return
     * @var \Ovh\ArrayType\MyArrayOfTelephonyNumberCityForZoneStructType
     */
    public $return;
    /**
     * Constructor method for telephonyNumberCityForZoneListResponse
     * @uses TelephonyNumberCityForZoneListResponse::setReturn()
     * @param \Ovh\ArrayType\MyArrayOfTelephonyNumberCityForZoneStructType $return
     */
    public function __construct(\Ovh\ArrayType\MyArrayOfTelephonyNumberCityForZoneStructType $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \Ovh\ArrayType\MyArrayOfTelephonyNumberCityForZoneStructType|null
     */
    public function getReturn()
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \Ovh\ArrayType\MyArrayOfTelephonyNumberCityForZoneStructType $return
     * @return \Ovh\StructType\TelephonyNumberCityForZoneListResponse
     */
    public function setReturn(\Ovh\ArrayType\MyArrayOfTelephonyNumberCityForZoneStructType $return = null)
    {
        $this->return = $return;
        return $this;
    }
}
