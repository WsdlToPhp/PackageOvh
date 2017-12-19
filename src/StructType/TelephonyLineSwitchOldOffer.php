<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for telephonyLineSwitchOldOffer StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class TelephonyLineSwitchOldOffer extends AbstractStructBase
{
    /**
     * The session
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $session;
    /**
     * The numbers
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var \PayPal\ArrayType\MyArrayOfStringType
     */
    public $numbers;
    /**
     * The offers
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var \PayPal\ArrayType\MyArrayOfStringType
     */
    public $offers;
    /**
     * The billingAccount
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $billingAccount;
    /**
     * Constructor method for telephonyLineSwitchOldOffer
     * @uses TelephonyLineSwitchOldOffer::setSession()
     * @uses TelephonyLineSwitchOldOffer::setNumbers()
     * @uses TelephonyLineSwitchOldOffer::setOffers()
     * @uses TelephonyLineSwitchOldOffer::setBillingAccount()
     * @param string $session
     * @param \PayPal\ArrayType\MyArrayOfStringType $numbers
     * @param \PayPal\ArrayType\MyArrayOfStringType $offers
     * @param string $billingAccount
     */
    public function __construct($session = null, \PayPal\ArrayType\MyArrayOfStringType $numbers = null, \PayPal\ArrayType\MyArrayOfStringType $offers = null, $billingAccount = null)
    {
        $this
            ->setSession($session)
            ->setNumbers($numbers)
            ->setOffers($offers)
            ->setBillingAccount($billingAccount);
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
     * @return \PayPal\StructType\TelephonyLineSwitchOldOffer
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
     * Get numbers value
     * @return \PayPal\ArrayType\MyArrayOfStringType|null
     */
    public function getNumbers()
    {
        return $this->numbers;
    }
    /**
     * Set numbers value
     * @param \PayPal\ArrayType\MyArrayOfStringType $numbers
     * @return \PayPal\StructType\TelephonyLineSwitchOldOffer
     */
    public function setNumbers(\PayPal\ArrayType\MyArrayOfStringType $numbers = null)
    {
        $this->numbers = $numbers;
        return $this;
    }
    /**
     * Get offers value
     * @return \PayPal\ArrayType\MyArrayOfStringType|null
     */
    public function getOffers()
    {
        return $this->offers;
    }
    /**
     * Set offers value
     * @param \PayPal\ArrayType\MyArrayOfStringType $offers
     * @return \PayPal\StructType\TelephonyLineSwitchOldOffer
     */
    public function setOffers(\PayPal\ArrayType\MyArrayOfStringType $offers = null)
    {
        $this->offers = $offers;
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
     * @return \PayPal\StructType\TelephonyLineSwitchOldOffer
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
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \PayPal\StructType\TelephonyLineSwitchOldOffer
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
