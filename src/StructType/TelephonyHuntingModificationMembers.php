<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for telephonyHuntingModificationMembers StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class TelephonyHuntingModificationMembers extends AbstractStructBase
{
    /**
     * The session
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $session;
    /**
     * The number
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $number;
    /**
     * The country
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $country;
    /**
     * The billingAccount
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $billingAccount;
    /**
     * The list_destinations
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var \PayPal\ArrayType\MyArrayOfStringType
     */
    public $list_destinations;
    /**
     * The list_noReplyTimer
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var \PayPal\ArrayType\MyArrayOfIntType
     */
    public $list_noReplyTimer;
    /**
     * The list_logged
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var \PayPal\ArrayType\MyArrayOfBooleanType
     */
    public $list_logged;
    /**
     * Constructor method for telephonyHuntingModificationMembers
     * @uses TelephonyHuntingModificationMembers::setSession()
     * @uses TelephonyHuntingModificationMembers::setNumber()
     * @uses TelephonyHuntingModificationMembers::setCountry()
     * @uses TelephonyHuntingModificationMembers::setBillingAccount()
     * @uses TelephonyHuntingModificationMembers::setList_destinations()
     * @uses TelephonyHuntingModificationMembers::setList_noReplyTimer()
     * @uses TelephonyHuntingModificationMembers::setList_logged()
     * @param string $session
     * @param string $number
     * @param string $country
     * @param string $billingAccount
     * @param \PayPal\ArrayType\MyArrayOfStringType $list_destinations
     * @param \PayPal\ArrayType\MyArrayOfIntType $list_noReplyTimer
     * @param \PayPal\ArrayType\MyArrayOfBooleanType $list_logged
     */
    public function __construct($session = null, $number = null, $country = null, $billingAccount = null, \PayPal\ArrayType\MyArrayOfStringType $list_destinations = null, \PayPal\ArrayType\MyArrayOfIntType $list_noReplyTimer = null, \PayPal\ArrayType\MyArrayOfBooleanType $list_logged = null)
    {
        $this
            ->setSession($session)
            ->setNumber($number)
            ->setCountry($country)
            ->setBillingAccount($billingAccount)
            ->setList_destinations($list_destinations)
            ->setList_noReplyTimer($list_noReplyTimer)
            ->setList_logged($list_logged);
    }
    /**
     * Get session value
     * @return string|null
     */
    public function getSession()
    {
        return $this->session;
    }
    /**
     * Set session value
     * @param string $session
     * @return \PayPal\StructType\TelephonyHuntingModificationMembers
     */
    public function setSession($session = null)
    {
        // validation for constraint: string
        if (!is_null($session) && !is_string($session)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($session)), __LINE__);
        }
        $this->session = $session;
        return $this;
    }
    /**
     * Get number value
     * @return string|null
     */
    public function getNumber()
    {
        return $this->number;
    }
    /**
     * Set number value
     * @param string $number
     * @return \PayPal\StructType\TelephonyHuntingModificationMembers
     */
    public function setNumber($number = null)
    {
        // validation for constraint: string
        if (!is_null($number) && !is_string($number)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($number)), __LINE__);
        }
        $this->number = $number;
        return $this;
    }
    /**
     * Get country value
     * @return string|null
     */
    public function getCountry()
    {
        return $this->country;
    }
    /**
     * Set country value
     * @param string $country
     * @return \PayPal\StructType\TelephonyHuntingModificationMembers
     */
    public function setCountry($country = null)
    {
        // validation for constraint: string
        if (!is_null($country) && !is_string($country)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($country)), __LINE__);
        }
        $this->country = $country;
        return $this;
    }
    /**
     * Get billingAccount value
     * @return string|null
     */
    public function getBillingAccount()
    {
        return $this->billingAccount;
    }
    /**
     * Set billingAccount value
     * @param string $billingAccount
     * @return \PayPal\StructType\TelephonyHuntingModificationMembers
     */
    public function setBillingAccount($billingAccount = null)
    {
        // validation for constraint: string
        if (!is_null($billingAccount) && !is_string($billingAccount)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($billingAccount)), __LINE__);
        }
        $this->billingAccount = $billingAccount;
        return $this;
    }
    /**
     * Get list_destinations value
     * @return \PayPal\ArrayType\MyArrayOfStringType|null
     */
    public function getList_destinations()
    {
        return $this->list_destinations;
    }
    /**
     * Set list_destinations value
     * @param \PayPal\ArrayType\MyArrayOfStringType $list_destinations
     * @return \PayPal\StructType\TelephonyHuntingModificationMembers
     */
    public function setList_destinations(\PayPal\ArrayType\MyArrayOfStringType $list_destinations = null)
    {
        $this->list_destinations = $list_destinations;
        return $this;
    }
    /**
     * Get list_noReplyTimer value
     * @return \PayPal\ArrayType\MyArrayOfIntType|null
     */
    public function getList_noReplyTimer()
    {
        return $this->list_noReplyTimer;
    }
    /**
     * Set list_noReplyTimer value
     * @param \PayPal\ArrayType\MyArrayOfIntType $list_noReplyTimer
     * @return \PayPal\StructType\TelephonyHuntingModificationMembers
     */
    public function setList_noReplyTimer(\PayPal\ArrayType\MyArrayOfIntType $list_noReplyTimer = null)
    {
        $this->list_noReplyTimer = $list_noReplyTimer;
        return $this;
    }
    /**
     * Get list_logged value
     * @return \PayPal\ArrayType\MyArrayOfBooleanType|null
     */
    public function getList_logged()
    {
        return $this->list_logged;
    }
    /**
     * Set list_logged value
     * @param \PayPal\ArrayType\MyArrayOfBooleanType $list_logged
     * @return \PayPal\StructType\TelephonyHuntingModificationMembers
     */
    public function setList_logged(\PayPal\ArrayType\MyArrayOfBooleanType $list_logged = null)
    {
        $this->list_logged = $list_logged;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \PayPal\StructType\TelephonyHuntingModificationMembers
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