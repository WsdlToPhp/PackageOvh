<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for telephonySmsplusServiceReversableTicketsListResponse
 * StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class TelephonySmsplusServiceReversableTicketsListResponse extends AbstractStructBase
{
    /**
     * The return
     * @var \Ovh\ArrayType\MyArrayOfTelephonySmsplusTicketsStructType
     */
    public $return;
    /**
     * Constructor method for telephonySmsplusServiceReversableTicketsListResponse
     * @uses TelephonySmsplusServiceReversableTicketsListResponse::setReturn()
     * @param \Ovh\ArrayType\MyArrayOfTelephonySmsplusTicketsStructType $return
     */
    public function __construct(\Ovh\ArrayType\MyArrayOfTelephonySmsplusTicketsStructType $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \Ovh\ArrayType\MyArrayOfTelephonySmsplusTicketsStructType|null
     */
    public function getReturn()
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \Ovh\ArrayType\MyArrayOfTelephonySmsplusTicketsStructType $return
     * @return \Ovh\StructType\TelephonySmsplusServiceReversableTicketsListResponse
     */
    public function setReturn(\Ovh\ArrayType\MyArrayOfTelephonySmsplusTicketsStructType $return = null)
    {
        $this->return = $return;
        return $this;
    }
}
