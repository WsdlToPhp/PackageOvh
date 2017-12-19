<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for telephonyFMHuntingModificationVoicemail StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class TelephonyFMHuntingModificationVoicemail extends AbstractStructBase
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
     * The noReplyTimer
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var int
     */
    public $noReplyTimer;
    /**
     * The mainVoicemail
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $mainVoicemail;
    /**
     * Constructor method for telephonyFMHuntingModificationVoicemail
     * @uses TelephonyFMHuntingModificationVoicemail::setSession()
     * @uses TelephonyFMHuntingModificationVoicemail::setNumber()
     * @uses TelephonyFMHuntingModificationVoicemail::setCountry()
     * @uses TelephonyFMHuntingModificationVoicemail::setBillingAccount()
     * @uses TelephonyFMHuntingModificationVoicemail::setNoReplyTimer()
     * @uses TelephonyFMHuntingModificationVoicemail::setMainVoicemail()
     * @param string $session
     * @param string $number
     * @param string $country
     * @param string $billingAccount
     * @param int $noReplyTimer
     * @param string $mainVoicemail
     */
    public function __construct($session = null, $number = null, $country = null, $billingAccount = null, $noReplyTimer = null, $mainVoicemail = null)
    {
        $this
            ->setSession($session)
            ->setNumber($number)
            ->setCountry($country)
            ->setBillingAccount($billingAccount)
            ->setNoReplyTimer($noReplyTimer)
            ->setMainVoicemail($mainVoicemail);
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
     * @return \Ovh\StructType\TelephonyFMHuntingModificationVoicemail
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
     * @return \Ovh\StructType\TelephonyFMHuntingModificationVoicemail
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
     * @return \Ovh\StructType\TelephonyFMHuntingModificationVoicemail
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
     * @return \Ovh\StructType\TelephonyFMHuntingModificationVoicemail
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
     * Get noReplyTimer value
     * @return int|null
     */
    public function getNoReplyTimer()
    {
        return $this->noReplyTimer;
    }
    /**
     * Set noReplyTimer value
     * @param int $noReplyTimer
     * @return \Ovh\StructType\TelephonyFMHuntingModificationVoicemail
     */
    public function setNoReplyTimer($noReplyTimer = null)
    {
        // validation for constraint: int
        if (!is_null($noReplyTimer) && !is_numeric($noReplyTimer)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($noReplyTimer)), __LINE__);
        }
        $this->noReplyTimer = $noReplyTimer;
        return $this;
    }
    /**
     * Get mainVoicemail value
     * @return string|null
     */
    public function getMainVoicemail()
    {
        return $this->mainVoicemail;
    }
    /**
     * Set mainVoicemail value
     * @param string $mainVoicemail
     * @return \Ovh\StructType\TelephonyFMHuntingModificationVoicemail
     */
    public function setMainVoicemail($mainVoicemail = null)
    {
        // validation for constraint: string
        if (!is_null($mainVoicemail) && !is_string($mainVoicemail)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($mainVoicemail)), __LINE__);
        }
        $this->mainVoicemail = $mainVoicemail;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ovh\StructType\TelephonyFMHuntingModificationVoicemail
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
