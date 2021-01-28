<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for telephonySpareServiceListResponse StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class TelephonySpareServiceListResponse extends AbstractStructBase
{
    /**
     * The return
     * @var \Ovh\ArrayType\MyArrayOfTelephonySpareServiceInfoStructType
     */
    public $return;
    /**
     * Constructor method for telephonySpareServiceListResponse
     * @uses TelephonySpareServiceListResponse::setReturn()
     * @param \Ovh\ArrayType\MyArrayOfTelephonySpareServiceInfoStructType $return
     */
    public function __construct(\Ovh\ArrayType\MyArrayOfTelephonySpareServiceInfoStructType $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \Ovh\ArrayType\MyArrayOfTelephonySpareServiceInfoStructType|null
     */
    public function getReturn()
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \Ovh\ArrayType\MyArrayOfTelephonySpareServiceInfoStructType $return
     * @return \Ovh\StructType\TelephonySpareServiceListResponse
     */
    public function setReturn(\Ovh\ArrayType\MyArrayOfTelephonySpareServiceInfoStructType $return = null)
    {
        $this->return = $return;
        return $this;
    }
}
