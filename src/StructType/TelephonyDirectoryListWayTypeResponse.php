<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for telephonyDirectoryListWayTypeResponse StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class TelephonyDirectoryListWayTypeResponse extends AbstractStructBase
{
    /**
     * The return
     * @var \Ovh\ArrayType\MyArrayOfTelephonyDirectoryWayTypeStructType
     */
    public $return;
    /**
     * Constructor method for telephonyDirectoryListWayTypeResponse
     * @uses TelephonyDirectoryListWayTypeResponse::setReturn()
     * @param \Ovh\ArrayType\MyArrayOfTelephonyDirectoryWayTypeStructType $return
     */
    public function __construct(\Ovh\ArrayType\MyArrayOfTelephonyDirectoryWayTypeStructType $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \Ovh\ArrayType\MyArrayOfTelephonyDirectoryWayTypeStructType|null
     */
    public function getReturn()
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \Ovh\ArrayType\MyArrayOfTelephonyDirectoryWayTypeStructType $return
     * @return \Ovh\StructType\TelephonyDirectoryListWayTypeResponse
     */
    public function setReturn(\Ovh\ArrayType\MyArrayOfTelephonyDirectoryWayTypeStructType $return = null)
    {
        $this->return = $return;
        return $this;
    }
}
