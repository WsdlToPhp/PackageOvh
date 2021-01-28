<?php

namespace Ovh\StructType;

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
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $session;
    /**
     * The numbers
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var \Ovh\ArrayType\MyArrayOfStringType
     */
    public $numbers;
    /**
     * The offers
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var \Ovh\ArrayType\MyArrayOfStringType
     */
    public $offers;
    /**
     * The billingAccount
     * Meta information extracted from the WSDL
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
     * @param \Ovh\ArrayType\MyArrayOfStringType $numbers
     * @param \Ovh\ArrayType\MyArrayOfStringType $offers
     * @param string $billingAccount
     */
    public function __construct($session = null, \Ovh\ArrayType\MyArrayOfStringType $numbers = null, \Ovh\ArrayType\MyArrayOfStringType $offers = null, $billingAccount = null)
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
     * @return \Ovh\StructType\TelephonyLineSwitchOldOffer
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
     * Get numbers value
     * @return \Ovh\ArrayType\MyArrayOfStringType|null
     */
    public function getNumbers()
    {
        return $this->numbers;
    }
    /**
     * Set numbers value
     * @param \Ovh\ArrayType\MyArrayOfStringType $numbers
     * @return \Ovh\StructType\TelephonyLineSwitchOldOffer
     */
    public function setNumbers(\Ovh\ArrayType\MyArrayOfStringType $numbers = null)
    {
        $this->numbers = $numbers;
        return $this;
    }
    /**
     * Get offers value
     * @return \Ovh\ArrayType\MyArrayOfStringType|null
     */
    public function getOffers()
    {
        return $this->offers;
    }
    /**
     * Set offers value
     * @param \Ovh\ArrayType\MyArrayOfStringType $offers
     * @return \Ovh\StructType\TelephonyLineSwitchOldOffer
     */
    public function setOffers(\Ovh\ArrayType\MyArrayOfStringType $offers = null)
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
     * @return \Ovh\StructType\TelephonyLineSwitchOldOffer
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
}
