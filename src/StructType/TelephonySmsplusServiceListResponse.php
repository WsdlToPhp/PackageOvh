<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for telephonySmsplusServiceListResponse StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class TelephonySmsplusServiceListResponse extends AbstractStructBase
{
    /**
     * The return
     * @var \Ovh\ArrayType\MyArrayOfTelephonySmsplusDetailsStructType
     */
    public $return;
    /**
     * Constructor method for telephonySmsplusServiceListResponse
     * @uses TelephonySmsplusServiceListResponse::setReturn()
     * @param \Ovh\ArrayType\MyArrayOfTelephonySmsplusDetailsStructType $return
     */
    public function __construct(\Ovh\ArrayType\MyArrayOfTelephonySmsplusDetailsStructType $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \Ovh\ArrayType\MyArrayOfTelephonySmsplusDetailsStructType|null
     */
    public function getReturn()
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \Ovh\ArrayType\MyArrayOfTelephonySmsplusDetailsStructType $return
     * @return \Ovh\StructType\TelephonySmsplusServiceListResponse
     */
    public function setReturn(\Ovh\ArrayType\MyArrayOfTelephonySmsplusDetailsStructType $return = null)
    {
        $this->return = $return;
        return $this;
    }
}
