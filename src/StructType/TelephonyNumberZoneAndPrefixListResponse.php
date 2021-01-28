<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for telephonyNumberZoneAndPrefixListResponse StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class TelephonyNumberZoneAndPrefixListResponse extends AbstractStructBase
{
    /**
     * The return
     * @var \Ovh\ArrayType\MyArrayOfTelephonyNumberZoneAndPrefixStructType
     */
    public $return;
    /**
     * Constructor method for telephonyNumberZoneAndPrefixListResponse
     * @uses TelephonyNumberZoneAndPrefixListResponse::setReturn()
     * @param \Ovh\ArrayType\MyArrayOfTelephonyNumberZoneAndPrefixStructType $return
     */
    public function __construct(\Ovh\ArrayType\MyArrayOfTelephonyNumberZoneAndPrefixStructType $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \Ovh\ArrayType\MyArrayOfTelephonyNumberZoneAndPrefixStructType|null
     */
    public function getReturn()
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \Ovh\ArrayType\MyArrayOfTelephonyNumberZoneAndPrefixStructType $return
     * @return \Ovh\StructType\TelephonyNumberZoneAndPrefixListResponse
     */
    public function setReturn(\Ovh\ArrayType\MyArrayOfTelephonyNumberZoneAndPrefixStructType $return = null)
    {
        $this->return = $return;
        return $this;
    }
}
