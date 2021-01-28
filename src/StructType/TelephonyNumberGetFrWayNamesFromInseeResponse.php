<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for telephonyNumberGetFrWayNamesFromInseeResponse StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class TelephonyNumberGetFrWayNamesFromInseeResponse extends AbstractStructBase
{
    /**
     * The return
     * @var \Ovh\ArrayType\MyArrayOfTelephonyNumberWayNameStructType
     */
    public $return;
    /**
     * Constructor method for telephonyNumberGetFrWayNamesFromInseeResponse
     * @uses TelephonyNumberGetFrWayNamesFromInseeResponse::setReturn()
     * @param \Ovh\ArrayType\MyArrayOfTelephonyNumberWayNameStructType $return
     */
    public function __construct(\Ovh\ArrayType\MyArrayOfTelephonyNumberWayNameStructType $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \Ovh\ArrayType\MyArrayOfTelephonyNumberWayNameStructType|null
     */
    public function getReturn()
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \Ovh\ArrayType\MyArrayOfTelephonyNumberWayNameStructType $return
     * @return \Ovh\StructType\TelephonyNumberGetFrWayNamesFromInseeResponse
     */
    public function setReturn(\Ovh\ArrayType\MyArrayOfTelephonyNumberWayNameStructType $return = null)
    {
        $this->return = $return;
        return $this;
    }
}
