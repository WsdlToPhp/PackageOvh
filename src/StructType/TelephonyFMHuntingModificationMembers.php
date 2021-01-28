<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for telephonyFMHuntingModificationMembers StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class TelephonyFMHuntingModificationMembers extends AbstractStructBase
{
    /**
     * The session
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $session;
    /**
     * The number
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $number;
    /**
     * The country
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $country;
    /**
     * The billingAccount
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $billingAccount;
    /**
     * The list_destinations
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var \Ovh\ArrayType\MyArrayOfStringType
     */
    public $list_destinations;
    /**
     * The list_noReplyTimer
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var \Ovh\ArrayType\MyArrayOfIntType
     */
    public $list_noReplyTimer;
    /**
     * The list_logged
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var \Ovh\ArrayType\MyArrayOfBooleanType
     */
    public $list_logged;
    /**
     * Constructor method for telephonyFMHuntingModificationMembers
     * @uses TelephonyFMHuntingModificationMembers::setSession()
     * @uses TelephonyFMHuntingModificationMembers::setNumber()
     * @uses TelephonyFMHuntingModificationMembers::setCountry()
     * @uses TelephonyFMHuntingModificationMembers::setBillingAccount()
     * @uses TelephonyFMHuntingModificationMembers::setList_destinations()
     * @uses TelephonyFMHuntingModificationMembers::setList_noReplyTimer()
     * @uses TelephonyFMHuntingModificationMembers::setList_logged()
     * @param string $session
     * @param string $number
     * @param string $country
     * @param string $billingAccount
     * @param \Ovh\ArrayType\MyArrayOfStringType $list_destinations
     * @param \Ovh\ArrayType\MyArrayOfIntType $list_noReplyTimer
     * @param \Ovh\ArrayType\MyArrayOfBooleanType $list_logged
     */
    public function __construct($session = null, $number = null, $country = null, $billingAccount = null, \Ovh\ArrayType\MyArrayOfStringType $list_destinations = null, \Ovh\ArrayType\MyArrayOfIntType $list_noReplyTimer = null, \Ovh\ArrayType\MyArrayOfBooleanType $list_logged = null)
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
     * @return \Ovh\StructType\TelephonyFMHuntingModificationMembers
     */
    public function setSession($session = null)
    {
        // validation for constraint: string
        if (!is_null($session) && !is_string($session)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($session, true), gettype($session)), __LINE__);
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
     * @return \Ovh\StructType\TelephonyFMHuntingModificationMembers
     */
    public function setNumber($number = null)
    {
        // validation for constraint: string
        if (!is_null($number) && !is_string($number)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($number, true), gettype($number)), __LINE__);
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
     * @return \Ovh\StructType\TelephonyFMHuntingModificationMembers
     */
    public function setCountry($country = null)
    {
        // validation for constraint: string
        if (!is_null($country) && !is_string($country)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($country, true), gettype($country)), __LINE__);
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
     * @return \Ovh\StructType\TelephonyFMHuntingModificationMembers
     */
    public function setBillingAccount($billingAccount = null)
    {
        // validation for constraint: string
        if (!is_null($billingAccount) && !is_string($billingAccount)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($billingAccount, true), gettype($billingAccount)), __LINE__);
        }
        $this->billingAccount = $billingAccount;
        return $this;
    }
    /**
     * Get list_destinations value
     * @return \Ovh\ArrayType\MyArrayOfStringType|null
     */
    public function getList_destinations()
    {
        return $this->list_destinations;
    }
    /**
     * Set list_destinations value
     * @param \Ovh\ArrayType\MyArrayOfStringType $list_destinations
     * @return \Ovh\StructType\TelephonyFMHuntingModificationMembers
     */
    public function setList_destinations(\Ovh\ArrayType\MyArrayOfStringType $list_destinations = null)
    {
        $this->list_destinations = $list_destinations;
        return $this;
    }
    /**
     * Get list_noReplyTimer value
     * @return \Ovh\ArrayType\MyArrayOfIntType|null
     */
    public function getList_noReplyTimer()
    {
        return $this->list_noReplyTimer;
    }
    /**
     * Set list_noReplyTimer value
     * @param \Ovh\ArrayType\MyArrayOfIntType $list_noReplyTimer
     * @return \Ovh\StructType\TelephonyFMHuntingModificationMembers
     */
    public function setList_noReplyTimer(\Ovh\ArrayType\MyArrayOfIntType $list_noReplyTimer = null)
    {
        $this->list_noReplyTimer = $list_noReplyTimer;
        return $this;
    }
    /**
     * Get list_logged value
     * @return \Ovh\ArrayType\MyArrayOfBooleanType|null
     */
    public function getList_logged()
    {
        return $this->list_logged;
    }
    /**
     * Set list_logged value
     * @param \Ovh\ArrayType\MyArrayOfBooleanType $list_logged
     * @return \Ovh\StructType\TelephonyFMHuntingModificationMembers
     */
    public function setList_logged(\Ovh\ArrayType\MyArrayOfBooleanType $list_logged = null)
    {
        $this->list_logged = $list_logged;
        return $this;
    }
}
