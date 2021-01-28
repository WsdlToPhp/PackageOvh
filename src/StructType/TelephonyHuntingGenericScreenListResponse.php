<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for telephonyHuntingGenericScreenListResponse StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class TelephonyHuntingGenericScreenListResponse extends AbstractStructBase
{
    /**
     * The return
     * @var \Ovh\ArrayType\MyArrayOfTelephonyHuntingGenericScreenStructType
     */
    public $return;
    /**
     * Constructor method for telephonyHuntingGenericScreenListResponse
     * @uses TelephonyHuntingGenericScreenListResponse::setReturn()
     * @param \Ovh\ArrayType\MyArrayOfTelephonyHuntingGenericScreenStructType $return
     */
    public function __construct(\Ovh\ArrayType\MyArrayOfTelephonyHuntingGenericScreenStructType $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \Ovh\ArrayType\MyArrayOfTelephonyHuntingGenericScreenStructType|null
     */
    public function getReturn()
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \Ovh\ArrayType\MyArrayOfTelephonyHuntingGenericScreenStructType $return
     * @return \Ovh\StructType\TelephonyHuntingGenericScreenListResponse
     */
    public function setReturn(\Ovh\ArrayType\MyArrayOfTelephonyHuntingGenericScreenStructType $return = null)
    {
        $this->return = $return;
        return $this;
    }
}
