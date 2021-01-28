<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for telephonyHuntingModificationAnonymousCallRejection
 * StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class TelephonyHuntingModificationAnonymousCallRejection extends AbstractStructBase
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
     * The anonymousCallRejection
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var bool
     */
    public $anonymousCallRejection;
    /**
     * Constructor method for telephonyHuntingModificationAnonymousCallRejection
     * @uses TelephonyHuntingModificationAnonymousCallRejection::setSession()
     * @uses TelephonyHuntingModificationAnonymousCallRejection::setNumber()
     * @uses TelephonyHuntingModificationAnonymousCallRejection::setCountry()
     * @uses TelephonyHuntingModificationAnonymousCallRejection::setBillingAccount()
     * @uses TelephonyHuntingModificationAnonymousCallRejection::setAnonymousCallRejection()
     * @param string $session
     * @param string $number
     * @param string $country
     * @param string $billingAccount
     * @param bool $anonymousCallRejection
     */
    public function __construct($session = null, $number = null, $country = null, $billingAccount = null, $anonymousCallRejection = null)
    {
        $this
            ->setSession($session)
            ->setNumber($number)
            ->setCountry($country)
            ->setBillingAccount($billingAccount)
            ->setAnonymousCallRejection($anonymousCallRejection);
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
     * @return \Ovh\StructType\TelephonyHuntingModificationAnonymousCallRejection
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
     * @return \Ovh\StructType\TelephonyHuntingModificationAnonymousCallRejection
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
     * @return \Ovh\StructType\TelephonyHuntingModificationAnonymousCallRejection
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
     * @return \Ovh\StructType\TelephonyHuntingModificationAnonymousCallRejection
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
     * Get anonymousCallRejection value
     * @return bool|null
     */
    public function getAnonymousCallRejection()
    {
        return $this->anonymousCallRejection;
    }
    /**
     * Set anonymousCallRejection value
     * @param bool $anonymousCallRejection
     * @return \Ovh\StructType\TelephonyHuntingModificationAnonymousCallRejection
     */
    public function setAnonymousCallRejection($anonymousCallRejection = null)
    {
        // validation for constraint: boolean
        if (!is_null($anonymousCallRejection) && !is_bool($anonymousCallRejection)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($anonymousCallRejection, true), gettype($anonymousCallRejection)), __LINE__);
        }
        $this->anonymousCallRejection = $anonymousCallRejection;
        return $this;
    }
}
