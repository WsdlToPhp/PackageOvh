<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for telephonyBillListResponse StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class TelephonyBillListResponse extends AbstractStructBase
{
    /**
     * The return
     * @var \Ovh\ArrayType\MyArrayOfTelephonyBillStructType
     */
    public $return;
    /**
     * Constructor method for telephonyBillListResponse
     * @uses TelephonyBillListResponse::setReturn()
     * @param \Ovh\ArrayType\MyArrayOfTelephonyBillStructType $return
     */
    public function __construct(\Ovh\ArrayType\MyArrayOfTelephonyBillStructType $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \Ovh\ArrayType\MyArrayOfTelephonyBillStructType|null
     */
    public function getReturn()
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \Ovh\ArrayType\MyArrayOfTelephonyBillStructType $return
     * @return \Ovh\StructType\TelephonyBillListResponse
     */
    public function setReturn(\Ovh\ArrayType\MyArrayOfTelephonyBillStructType $return = null)
    {
        $this->return = $return;
        return $this;
    }
}
