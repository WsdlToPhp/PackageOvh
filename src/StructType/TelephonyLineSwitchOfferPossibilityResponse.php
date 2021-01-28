<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for telephonyLineSwitchOfferPossibilityResponse StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class TelephonyLineSwitchOfferPossibilityResponse extends AbstractStructBase
{
    /**
     * The return
     * @var \Ovh\ArrayType\MyArrayOfTelephonyLineSwitchPossibilityPriceStructType
     */
    public $return;
    /**
     * Constructor method for telephonyLineSwitchOfferPossibilityResponse
     * @uses TelephonyLineSwitchOfferPossibilityResponse::setReturn()
     * @param \Ovh\ArrayType\MyArrayOfTelephonyLineSwitchPossibilityPriceStructType $return
     */
    public function __construct(\Ovh\ArrayType\MyArrayOfTelephonyLineSwitchPossibilityPriceStructType $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \Ovh\ArrayType\MyArrayOfTelephonyLineSwitchPossibilityPriceStructType|null
     */
    public function getReturn()
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \Ovh\ArrayType\MyArrayOfTelephonyLineSwitchPossibilityPriceStructType $return
     * @return \Ovh\StructType\TelephonyLineSwitchOfferPossibilityResponse
     */
    public function setReturn(\Ovh\ArrayType\MyArrayOfTelephonyLineSwitchPossibilityPriceStructType $return = null)
    {
        $this->return = $return;
        return $this;
    }
}
