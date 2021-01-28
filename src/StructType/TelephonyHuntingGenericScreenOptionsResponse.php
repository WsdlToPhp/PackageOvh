<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for telephonyHuntingGenericScreenOptionsResponse StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class TelephonyHuntingGenericScreenOptionsResponse extends AbstractStructBase
{
    /**
     * The return
     * @var \Ovh\ArrayType\MyArrayOfTelephonyHuntingGenericScreenOptionsStructType
     */
    public $return;
    /**
     * Constructor method for telephonyHuntingGenericScreenOptionsResponse
     * @uses TelephonyHuntingGenericScreenOptionsResponse::setReturn()
     * @param \Ovh\ArrayType\MyArrayOfTelephonyHuntingGenericScreenOptionsStructType $return
     */
    public function __construct(\Ovh\ArrayType\MyArrayOfTelephonyHuntingGenericScreenOptionsStructType $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \Ovh\ArrayType\MyArrayOfTelephonyHuntingGenericScreenOptionsStructType|null
     */
    public function getReturn()
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \Ovh\ArrayType\MyArrayOfTelephonyHuntingGenericScreenOptionsStructType $return
     * @return \Ovh\StructType\TelephonyHuntingGenericScreenOptionsResponse
     */
    public function setReturn(\Ovh\ArrayType\MyArrayOfTelephonyHuntingGenericScreenOptionsStructType $return = null)
    {
        $this->return = $return;
        return $this;
    }
}
