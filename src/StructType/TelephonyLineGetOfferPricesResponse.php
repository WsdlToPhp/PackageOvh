<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for telephonyLineGetOfferPricesResponse StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class TelephonyLineGetOfferPricesResponse extends AbstractStructBase
{
    /**
     * The return
     * @var \Ovh\ArrayType\MyArrayOfTelephonyLineSwitchPossibilityPriceStructType
     */
    public $return;
    /**
     * Constructor method for telephonyLineGetOfferPricesResponse
     * @uses TelephonyLineGetOfferPricesResponse::setReturn()
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
     * @return \Ovh\StructType\TelephonyLineGetOfferPricesResponse
     */
    public function setReturn(\Ovh\ArrayType\MyArrayOfTelephonyLineSwitchPossibilityPriceStructType $return = null)
    {
        $this->return = $return;
        return $this;
    }
}
