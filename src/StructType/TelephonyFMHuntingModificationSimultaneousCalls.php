<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for telephonyFMHuntingModificationSimultaneousCalls StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class TelephonyFMHuntingModificationSimultaneousCalls extends AbstractStructBase
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
     * The numberOfCalls
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var int
     */
    public $numberOfCalls;
    /**
     * Constructor method for telephonyFMHuntingModificationSimultaneousCalls
     * @uses TelephonyFMHuntingModificationSimultaneousCalls::setSession()
     * @uses TelephonyFMHuntingModificationSimultaneousCalls::setNumber()
     * @uses TelephonyFMHuntingModificationSimultaneousCalls::setCountry()
     * @uses TelephonyFMHuntingModificationSimultaneousCalls::setBillingAccount()
     * @uses TelephonyFMHuntingModificationSimultaneousCalls::setNumberOfCalls()
     * @param string $session
     * @param string $number
     * @param string $country
     * @param string $billingAccount
     * @param int $numberOfCalls
     */
    public function __construct($session = null, $number = null, $country = null, $billingAccount = null, $numberOfCalls = null)
    {
        $this
            ->setSession($session)
            ->setNumber($number)
            ->setCountry($country)
            ->setBillingAccount($billingAccount)
            ->setNumberOfCalls($numberOfCalls);
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
     * @return \Ovh\StructType\TelephonyFMHuntingModificationSimultaneousCalls
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
     * @return \Ovh\StructType\TelephonyFMHuntingModificationSimultaneousCalls
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
     * @return \Ovh\StructType\TelephonyFMHuntingModificationSimultaneousCalls
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
     * @return \Ovh\StructType\TelephonyFMHuntingModificationSimultaneousCalls
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
     * Get numberOfCalls value
     * @return int|null
     */
    public function getNumberOfCalls()
    {
        return $this->numberOfCalls;
    }
    /**
     * Set numberOfCalls value
     * @param int $numberOfCalls
     * @return \Ovh\StructType\TelephonyFMHuntingModificationSimultaneousCalls
     */
    public function setNumberOfCalls($numberOfCalls = null)
    {
        // validation for constraint: int
        if (!is_null($numberOfCalls) && !(is_int($numberOfCalls) || ctype_digit($numberOfCalls))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($numberOfCalls, true), gettype($numberOfCalls)), __LINE__);
        }
        $this->numberOfCalls = $numberOfCalls;
        return $this;
    }
}
