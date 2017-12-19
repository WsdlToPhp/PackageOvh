<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for telephonyBillingAccountListResponse StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class TelephonyBillingAccountListResponse extends AbstractStructBase
{
    /**
     * The return
     * @var \Ovh\ArrayType\MyArrayOfTelephonyBillingAccountStructType
     */
    public $return;
    /**
     * Constructor method for telephonyBillingAccountListResponse
     * @uses TelephonyBillingAccountListResponse::setReturn()
     * @param \Ovh\ArrayType\MyArrayOfTelephonyBillingAccountStructType $return
     */
    public function __construct(\Ovh\ArrayType\MyArrayOfTelephonyBillingAccountStructType $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \Ovh\ArrayType\MyArrayOfTelephonyBillingAccountStructType|null
     */
    public function getReturn()
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \Ovh\ArrayType\MyArrayOfTelephonyBillingAccountStructType $return
     * @return \Ovh\StructType\TelephonyBillingAccountListResponse
     */
    public function setReturn(\Ovh\ArrayType\MyArrayOfTelephonyBillingAccountStructType $return = null)
    {
        $this->return = $return;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ovh\StructType\TelephonyBillingAccountListResponse
     */
    public static function __set_state(array $array)
    {
        return parent::__set_state($array);
    }
    /**
     * Method returning the class name
     * @return string __CLASS__
     */
    public function __toString()
    {
        return __CLASS__;
    }
}
