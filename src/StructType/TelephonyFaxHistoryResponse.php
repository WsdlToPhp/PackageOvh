<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for telephonyFaxHistoryResponse StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class TelephonyFaxHistoryResponse extends AbstractStructBase
{
    /**
     * The return
     * @var \Ovh\ArrayType\MyArrayOfTelephonyFaxHistoryStructType
     */
    public $return;
    /**
     * Constructor method for telephonyFaxHistoryResponse
     * @uses TelephonyFaxHistoryResponse::setReturn()
     * @param \Ovh\ArrayType\MyArrayOfTelephonyFaxHistoryStructType $return
     */
    public function __construct(\Ovh\ArrayType\MyArrayOfTelephonyFaxHistoryStructType $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \Ovh\ArrayType\MyArrayOfTelephonyFaxHistoryStructType|null
     */
    public function getReturn()
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \Ovh\ArrayType\MyArrayOfTelephonyFaxHistoryStructType $return
     * @return \Ovh\StructType\TelephonyFaxHistoryResponse
     */
    public function setReturn(\Ovh\ArrayType\MyArrayOfTelephonyFaxHistoryStructType $return = null)
    {
        $this->return = $return;
        return $this;
    }
}
