<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for telephonyAbbreviatedNumberOnGroupListResponse StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class TelephonyAbbreviatedNumberOnGroupListResponse extends AbstractStructBase
{
    /**
     * The return
     * @var \Ovh\ArrayType\MyArrayOfTelephonyAbbreviatedNumberStructType
     */
    public $return;
    /**
     * Constructor method for telephonyAbbreviatedNumberOnGroupListResponse
     * @uses TelephonyAbbreviatedNumberOnGroupListResponse::setReturn()
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
     * @return \Ovh\StructType\TelephonyAbbreviatedNumberOnGroupListResponse
     */
    public function setReturn(\Ovh\ArrayType\MyArrayOfTelephonyAbbreviatedNumberStructType $return = null)
    {
        $this->return = $return;
        return $this;
    }
}
