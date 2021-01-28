<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for telephonyAliasToSipPossibilitiesResponse StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class TelephonyAliasToSipPossibilitiesResponse extends AbstractStructBase
{
    /**
     * The return
     * @var \Ovh\ArrayType\MyArrayOfTelephonyAliasToLinePossibilityPriceStructType
     */
    public $return;
    /**
     * Constructor method for telephonyAliasToSipPossibilitiesResponse
     * @uses TelephonyAliasToSipPossibilitiesResponse::setReturn()
     * @param \Ovh\ArrayType\MyArrayOfTelephonyAliasToLinePossibilityPriceStructType $return
     */
    public function __construct(\Ovh\ArrayType\MyArrayOfTelephonyAliasToLinePossibilityPriceStructType $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \Ovh\ArrayType\MyArrayOfTelephonyAliasToLinePossibilityPriceStructType|null
     */
    public function getReturn()
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \Ovh\ArrayType\MyArrayOfTelephonyAliasToLinePossibilityPriceStructType $return
     * @return \Ovh\StructType\TelephonyAliasToSipPossibilitiesResponse
     */
    public function setReturn(\Ovh\ArrayType\MyArrayOfTelephonyAliasToLinePossibilityPriceStructType $return = null)
    {
        $this->return = $return;
        return $this;
    }
}
