<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for telephonyBillingAccountSummaryLineStruct StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class TelephonyBillingAccountSummaryLineStruct extends AbstractStructBase
{
    /**
     * The line
     * @var string
     */
    public $line;
    /**
     * The phoneNumber
     * @var string
     */
    public $phoneNumber;
    /**
     * The fixe
     * @var \PayPal\StructType\TelephonyCallsSummaryStruct
     */
    public $fixe;
    /**
     * The special
     * @var \PayPal\StructType\TelephonyCallsSummaryStruct
     */
    public $special;
    /**
     * The mobile
     * @var \PayPal\StructType\TelephonyCallsSummaryStruct
     */
    public $mobile;
    /**
     * The fax
     * @var \PayPal\StructType\TelephonyFaxSummaryStruct
     */
    public $fax;
    /**
     * Constructor method for telephonyBillingAccountSummaryLineStruct
     * @uses TelephonyBillingAccountSummaryLineStruct::setLine()
     * @uses TelephonyBillingAccountSummaryLineStruct::setPhoneNumber()
     * @uses TelephonyBillingAccountSummaryLineStruct::setFixe()
     * @uses TelephonyBillingAccountSummaryLineStruct::setSpecial()
     * @uses TelephonyBillingAccountSummaryLineStruct::setMobile()
     * @uses TelephonyBillingAccountSummaryLineStruct::setFax()
     * @param string $line
     * @param string $phoneNumber
     * @param \PayPal\StructType\TelephonyCallsSummaryStruct $fixe
     * @param \PayPal\StructType\TelephonyCallsSummaryStruct $special
     * @param \PayPal\StructType\TelephonyCallsSummaryStruct $mobile
     * @param \PayPal\StructType\TelephonyFaxSummaryStruct $fax
     */
    public function __construct($line = null, $phoneNumber = null, \PayPal\StructType\TelephonyCallsSummaryStruct $fixe = null, \PayPal\StructType\TelephonyCallsSummaryStruct $special = null, \PayPal\StructType\TelephonyCallsSummaryStruct $mobile = null, \PayPal\StructType\TelephonyFaxSummaryStruct $fax = null)
    {
        $this
            ->setLine($line)
            ->setPhoneNumber($phoneNumber)
            ->setFixe($fixe)
            ->setSpecial($special)
            ->setMobile($mobile)
            ->setFax($fax);
    }
    /**
     * Get line value
     * @return string|null
     */
    public function getLine()
    {
        return $this->line;
    }
    /**
     * Set line value
     * @param string $line
     * @return \PayPal\StructType\TelephonyBillingAccountSummaryLineStruct
     */
    public function setLine($line = null)
    {
        // validation for constraint: string
        if (!is_null($line) && !is_string($line)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($line)), __LINE__);
        }
        $this->line = $line;
        return $this;
    }
    /**
     * Get phoneNumber value
     * @return string|null
     */
    public function getPhoneNumber()
    {
        return $this->phoneNumber;
    }
    /**
     * Set phoneNumber value
     * @param string $phoneNumber
     * @return \PayPal\StructType\TelephonyBillingAccountSummaryLineStruct
     */
    public function setPhoneNumber($phoneNumber = null)
    {
        // validation for constraint: string
        if (!is_null($phoneNumber) && !is_string($phoneNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($phoneNumber)), __LINE__);
        }
        $this->phoneNumber = $phoneNumber;
        return $this;
    }
    /**
     * Get fixe value
     * @return \PayPal\StructType\TelephonyCallsSummaryStruct|null
     */
    public function getFixe()
    {
        return $this->fixe;
    }
    /**
     * Set fixe value
     * @param \PayPal\StructType\TelephonyCallsSummaryStruct $fixe
     * @return \PayPal\StructType\TelephonyBillingAccountSummaryLineStruct
     */
    public function setFixe(\PayPal\StructType\TelephonyCallsSummaryStruct $fixe = null)
    {
        $this->fixe = $fixe;
        return $this;
    }
    /**
     * Get special value
     * @return \PayPal\StructType\TelephonyCallsSummaryStruct|null
     */
    public function getSpecial()
    {
        return $this->special;
    }
    /**
     * Set special value
     * @param \PayPal\StructType\TelephonyCallsSummaryStruct $special
     * @return \PayPal\StructType\TelephonyBillingAccountSummaryLineStruct
     */
    public function setSpecial(\PayPal\StructType\TelephonyCallsSummaryStruct $special = null)
    {
        $this->special = $special;
        return $this;
    }
    /**
     * Get mobile value
     * @return \PayPal\StructType\TelephonyCallsSummaryStruct|null
     */
    public function getMobile()
    {
        return $this->mobile;
    }
    /**
     * Set mobile value
     * @param \PayPal\StructType\TelephonyCallsSummaryStruct $mobile
     * @return \PayPal\StructType\TelephonyBillingAccountSummaryLineStruct
     */
    public function setMobile(\PayPal\StructType\TelephonyCallsSummaryStruct $mobile = null)
    {
        $this->mobile = $mobile;
        return $this;
    }
    /**
     * Get fax value
     * @return \PayPal\StructType\TelephonyFaxSummaryStruct|null
     */
    public function getFax()
    {
        return $this->fax;
    }
    /**
     * Set fax value
     * @param \PayPal\StructType\TelephonyFaxSummaryStruct $fax
     * @return \PayPal\StructType\TelephonyBillingAccountSummaryLineStruct
     */
    public function setFax(\PayPal\StructType\TelephonyFaxSummaryStruct $fax = null)
    {
        $this->fax = $fax;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \PayPal\StructType\TelephonyBillingAccountSummaryLineStruct
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
