<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for telephonyAbbreviatedNumberListResponse StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class TelephonyAbbreviatedNumberListResponse extends AbstractStructBase
{
    /**
     * The return
     * @var \Ovh\ArrayType\MyArrayOfTelephonyAbbreviatedNumberStructType
     */
    public $return;
    /**
     * Constructor method for telephonyAbbreviatedNumberListResponse
     * @uses TelephonyAbbreviatedNumberListResponse::setReturn()
     * @param \Ovh\ArrayType\MyArrayOfTelephonyAbbreviatedNumberStructType $return
     */
    public function __construct(\Ovh\ArrayType\MyArrayOfTelephonyAbbreviatedNumberStructType $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \Ovh\ArrayType\MyArrayOfTelephonyAbbreviatedNumberStructType|null
     */
    public function getReturn()
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \Ovh\ArrayType\MyArrayOfTelephonyAbbreviatedNumberStructType $return
     * @return \Ovh\StructType\TelephonyAbbreviatedNumberListResponse
     */
    public function setReturn(\Ovh\ArrayType\MyArrayOfTelephonyAbbreviatedNumberStructType $return = null)
    {
        $this->return = $return;
        return $this;
    }
}
