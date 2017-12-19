<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for telephonyHuntingModificationMode StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class TelephonyHuntingModificationMode extends AbstractStructBase
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
     * The strategy
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $strategy;
    /**
     * The pattern
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $pattern;
    /**
     * Constructor method for telephonyHuntingModificationMode
     * @uses TelephonyHuntingModificationMode::setSession()
     * @uses TelephonyHuntingModificationMode::setNumber()
     * @uses TelephonyHuntingModificationMode::setCountry()
     * @uses TelephonyHuntingModificationMode::setBillingAccount()
     * @uses TelephonyHuntingModificationMode::setStrategy()
     * @uses TelephonyHuntingModificationMode::setPattern()
     * @param string $session
     * @param string $number
     * @param string $country
     * @param string $billingAccount
     * @param string $strategy
     * @param string $pattern
     */
    public function __construct($session = null, $number = null, $country = null, $billingAccount = null, $strategy = null, $pattern = null)
    {
        $this
            ->setSession($session)
            ->setNumber($number)
            ->setCountry($country)
            ->setBillingAccount($billingAccount)
            ->setStrategy($strategy)
            ->setPattern($pattern);
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
     * @return \Ovh\StructType\TelephonyHuntingModificationMode
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
     * @return \Ovh\StructType\TelephonyHuntingModificationMode
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
     * @return \Ovh\StructType\TelephonyHuntingModificationMode
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
     * @return \Ovh\StructType\TelephonyHuntingModificationMode
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
     * Get strategy value
     * @return string|null
     */
    public function getStrategy()
    {
        return $this->strategy;
    }
    /**
     * Set strategy value
     * @param string $strategy
     * @return \Ovh\StructType\TelephonyHuntingModificationMode
     */
    public function setStrategy($strategy = null)
    {
        // validation for constraint: string
        if (!is_null($strategy) && !is_string($strategy)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($strategy)), __LINE__);
        }
        $this->strategy = $strategy;
        return $this;
    }
    /**
     * Get pattern value
     * @return string|null
     */
    public function getPattern()
    {
        return $this->pattern;
    }
    /**
     * Set pattern value
     * @param string $pattern
     * @return \Ovh\StructType\TelephonyHuntingModificationMode
     */
    public function setPattern($pattern = null)
    {
        // validation for constraint: string
        if (!is_null($pattern) && !is_string($pattern)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($pattern)), __LINE__);
        }
        $this->pattern = $pattern;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ovh\StructType\TelephonyHuntingModificationMode
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
