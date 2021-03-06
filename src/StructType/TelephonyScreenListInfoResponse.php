<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for telephonyScreenListInfoResponse StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class TelephonyScreenListInfoResponse extends AbstractStructBase
{
    /**
     * The return
     * @var \Ovh\ArrayType\MyArrayOfTelephonyScreenStructType
     */
    public $return;
    /**
     * Constructor method for telephonyScreenListInfoResponse
     * @uses TelephonyScreenListInfoResponse::setReturn()
     * @param \Ovh\ArrayType\MyArrayOfTelephonyScreenStructType $return
     */
    public function __construct(\Ovh\ArrayType\MyArrayOfTelephonyScreenStructType $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \Ovh\ArrayType\MyArrayOfTelephonyScreenStructType|null
     */
    public function getReturn()
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \Ovh\ArrayType\MyArrayOfTelephonyScreenStructType $return
     * @return \Ovh\StructType\TelephonyScreenListInfoResponse
     */
    public function setReturn(\Ovh\ArrayType\MyArrayOfTelephonyScreenStructType $return = null)
    {
        $this->return = $return;
        return $this;
    }
}
