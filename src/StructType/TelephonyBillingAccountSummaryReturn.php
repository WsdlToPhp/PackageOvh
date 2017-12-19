<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for telephonyBillingAccountSummaryReturn StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class TelephonyBillingAccountSummaryReturn extends AbstractStructBase
{
    /**
     * The billingAccount
     * @var \PayPal\StructType\TelephonyBillingAccountSummaryBillingAccountStruct
     */
    public $billingAccount;
    /**
     * The lines
     * @var \PayPal\ArrayType\MyArrayOfTelephonyBillingAccountSummaryLineStructType
     */
    public $lines;
    /**
     * Constructor method for telephonyBillingAccountSummaryReturn
     * @uses TelephonyBillingAccountSummaryReturn::setBillingAccount()
     * @uses TelephonyBillingAccountSummaryReturn::setLines()
     * @param \PayPal\StructType\TelephonyBillingAccountSummaryBillingAccountStruct $billingAccount
     * @param \PayPal\ArrayType\MyArrayOfTelephonyBillingAccountSummaryLineStructType $lines
     */
    public function __construct(\PayPal\StructType\TelephonyBillingAccountSummaryBillingAccountStruct $billingAccount = null, \PayPal\ArrayType\MyArrayOfTelephonyBillingAccountSummaryLineStructType $lines = null)
    {
        $this
            ->setBillingAccount($billingAccount)
            ->setLines($lines);
    }
    /**
     * Get billingAccount value
     * @return \PayPal\StructType\TelephonyBillingAccountSummaryBillingAccountStruct|null
     */
    public function getBillingAccount()
    {
        return $this->billingAccount;
    }
    /**
     * Set billingAccount value
     * @param \PayPal\StructType\TelephonyBillingAccountSummaryBillingAccountStruct $billingAccount
     * @return \PayPal\StructType\TelephonyBillingAccountSummaryReturn
     */
    public function setBillingAccount(\PayPal\StructType\TelephonyBillingAccountSummaryBillingAccountStruct $billingAccount = null)
    {
        $this->billingAccount = $billingAccount;
        return $this;
    }
    /**
     * Get lines value
     * @return \PayPal\ArrayType\MyArrayOfTelephonyBillingAccountSummaryLineStructType|null
     */
    public function getLines()
    {
        return $this->lines;
    }
    /**
     * Set lines value
     * @param \PayPal\ArrayType\MyArrayOfTelephonyBillingAccountSummaryLineStructType $lines
     * @return \PayPal\StructType\TelephonyBillingAccountSummaryReturn
     */
    public function setLines(\PayPal\ArrayType\MyArrayOfTelephonyBillingAccountSummaryLineStructType $lines = null)
    {
        $this->lines = $lines;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \PayPal\StructType\TelephonyBillingAccountSummaryReturn
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
