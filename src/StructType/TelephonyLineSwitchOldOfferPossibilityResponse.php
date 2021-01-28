<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for telephonyLineSwitchOldOfferPossibilityResponse StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class TelephonyLineSwitchOldOfferPossibilityResponse extends AbstractStructBase
{
    /**
     * The return
     * @var \Ovh\ArrayType\MyArrayOfTelephonyLineSwitchOldOfferStructType
     */
    public $return;
    /**
     * Constructor method for telephonyLineSwitchOldOfferPossibilityResponse
     * @uses TelephonyLineSwitchOldOfferPossibilityResponse::setReturn()
     * @param \Ovh\ArrayType\MyArrayOfTelephonyLineSwitchOldOfferStructType $return
     */
    public function __construct(\Ovh\ArrayType\MyArrayOfTelephonyLineSwitchOldOfferStructType $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \Ovh\ArrayType\MyArrayOfTelephonyLineSwitchOldOfferStructType|null
     */
    public function getReturn()
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \Ovh\ArrayType\MyArrayOfTelephonyLineSwitchOldOfferStructType $return
     * @return \Ovh\StructType\TelephonyLineSwitchOldOfferPossibilityResponse
     */
    public function setReturn(\Ovh\ArrayType\MyArrayOfTelephonyLineSwitchOldOfferStructType $return = null)
    {
        $this->return = $return;
        return $this;
    }
}
