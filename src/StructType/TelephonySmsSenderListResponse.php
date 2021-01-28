<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for telephonySmsSenderListResponse StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class TelephonySmsSenderListResponse extends AbstractStructBase
{
    /**
     * The return
     * @var \Ovh\ArrayType\MyArrayOfTelephonySmsSenderStructType
     */
    public $return;
    /**
     * Constructor method for telephonySmsSenderListResponse
     * @uses TelephonySmsSenderListResponse::setReturn()
     * @param \Ovh\ArrayType\MyArrayOfTelephonySmsSenderStructType $return
     */
    public function __construct(\Ovh\ArrayType\MyArrayOfTelephonySmsSenderStructType $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \Ovh\ArrayType\MyArrayOfTelephonySmsSenderStructType|null
     */
    public function getReturn()
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \Ovh\ArrayType\MyArrayOfTelephonySmsSenderStructType $return
     * @return \Ovh\StructType\TelephonySmsSenderListResponse
     */
    public function setReturn(\Ovh\ArrayType\MyArrayOfTelephonySmsSenderStructType $return = null)
    {
        $this->return = $return;
        return $this;
    }
}
