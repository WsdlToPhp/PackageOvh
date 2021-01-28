<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for telephonyListSummationCallsFromNumberResponse StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class TelephonyListSummationCallsFromNumberResponse extends AbstractStructBase
{
    /**
     * The return
     * @var \Ovh\ArrayType\MyArrayOfTelephonyReversmentsSummationStructType
     */
    public $return;
    /**
     * Constructor method for telephonyListSummationCallsFromNumberResponse
     * @uses TelephonyListSummationCallsFromNumberResponse::setReturn()
     * @param \Ovh\ArrayType\MyArrayOfTelephonyReversmentsSummationStructType $return
     */
    public function __construct(\Ovh\ArrayType\MyArrayOfTelephonyReversmentsSummationStructType $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \Ovh\ArrayType\MyArrayOfTelephonyReversmentsSummationStructType|null
     */
    public function getReturn()
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \Ovh\ArrayType\MyArrayOfTelephonyReversmentsSummationStructType $return
     * @return \Ovh\StructType\TelephonyListSummationCallsFromNumberResponse
     */
    public function setReturn(\Ovh\ArrayType\MyArrayOfTelephonyReversmentsSummationStructType $return = null)
    {
        $this->return = $return;
        return $this;
    }
}
