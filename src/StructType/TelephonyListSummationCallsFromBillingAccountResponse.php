<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for telephonyListSummationCallsFromBillingAccountResponse
 * StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class TelephonyListSummationCallsFromBillingAccountResponse extends AbstractStructBase
{
    /**
     * The return
     * @var \Ovh\ArrayType\MyArrayOfTelephonyReversmentsSummationNumbersStructType
     */
    public $return;
    /**
     * Constructor method for telephonyListSummationCallsFromBillingAccountResponse
     * @uses TelephonyListSummationCallsFromBillingAccountResponse::setReturn()
     * @param \Ovh\ArrayType\MyArrayOfTelephonyReversmentsSummationNumbersStructType $return
     */
    public function __construct(\Ovh\ArrayType\MyArrayOfTelephonyReversmentsSummationNumbersStructType $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \Ovh\ArrayType\MyArrayOfTelephonyReversmentsSummationNumbersStructType|null
     */
    public function getReturn()
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \Ovh\ArrayType\MyArrayOfTelephonyReversmentsSummationNumbersStructType $return
     * @return \Ovh\StructType\TelephonyListSummationCallsFromBillingAccountResponse
     */
    public function setReturn(\Ovh\ArrayType\MyArrayOfTelephonyReversmentsSummationNumbersStructType $return = null)
    {
        $this->return = $return;
        return $this;
    }
}
