<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for telephonyHuntingGenericScreenOptionsModify StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class TelephonyHuntingGenericScreenOptionsModify extends AbstractStructBase
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
     * The forwardUnconditionalNumber
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $forwardUnconditionalNumber;
    /**
     * The mainVoicemail
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $mainVoicemail;
    /**
     * The forwardPolicyIndex
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $forwardPolicyIndex;
    /**
     * The timeout
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var int
     */
    public $timeout;
    /**
     * Constructor method for telephonyHuntingGenericScreenOptionsModify
     * @uses TelephonyHuntingGenericScreenOptionsModify::setSession()
     * @uses TelephonyHuntingGenericScreenOptionsModify::setNumber()
     * @uses TelephonyHuntingGenericScreenOptionsModify::setCountry()
     * @uses TelephonyHuntingGenericScreenOptionsModify::setForwardUnconditionalNumber()
     * @uses TelephonyHuntingGenericScreenOptionsModify::setMainVoicemail()
     * @uses TelephonyHuntingGenericScreenOptionsModify::setForwardPolicyIndex()
     * @uses TelephonyHuntingGenericScreenOptionsModify::setTimeout()
     * @param string $session
     * @param string $number
     * @param string $country
     * @param string $forwardUnconditionalNumber
     * @param string $mainVoicemail
     * @param string $forwardPolicyIndex
     * @param int $timeout
     */
    public function __construct($session = null, $number = null, $country = null, $forwardUnconditionalNumber = null, $mainVoicemail = null, $forwardPolicyIndex = null, $timeout = null)
    {
        $this
            ->setSession($session)
            ->setNumber($number)
            ->setCountry($country)
            ->setForwardUnconditionalNumber($forwardUnconditionalNumber)
            ->setMainVoicemail($mainVoicemail)
            ->setForwardPolicyIndex($forwardPolicyIndex)
            ->setTimeout($timeout);
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
     * @return \Ovh\StructType\TelephonyHuntingGenericScreenOptionsModify
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
     * @return \Ovh\StructType\TelephonyHuntingGenericScreenOptionsModify
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
     * @return \Ovh\StructType\TelephonyHuntingGenericScreenOptionsModify
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
     * Get forwardUnconditionalNumber value
     * @return string|null
     */
    public function getForwardUnconditionalNumber()
    {
        return $this->forwardUnconditionalNumber;
    }
    /**
     * Set forwardUnconditionalNumber value
     * @param string $forwardUnconditionalNumber
     * @return \Ovh\StructType\TelephonyHuntingGenericScreenOptionsModify
     */
    public function setForwardUnconditionalNumber($forwardUnconditionalNumber = null)
    {
        // validation for constraint: string
        if (!is_null($forwardUnconditionalNumber) && !is_string($forwardUnconditionalNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($forwardUnconditionalNumber)), __LINE__);
        }
        $this->forwardUnconditionalNumber = $forwardUnconditionalNumber;
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
     * @return \Ovh\StructType\TelephonyHuntingGenericScreenOptionsModify
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
     * Get forwardPolicyIndex value
     * @return string|null
     */
    public function getForwardPolicyIndex()
    {
        return $this->forwardPolicyIndex;
    }
    /**
     * Set forwardPolicyIndex value
     * @param string $forwardPolicyIndex
     * @return \Ovh\StructType\TelephonyHuntingGenericScreenOptionsModify
     */
    public function setForwardPolicyIndex($forwardPolicyIndex = null)
    {
        // validation for constraint: string
        if (!is_null($forwardPolicyIndex) && !is_string($forwardPolicyIndex)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($forwardPolicyIndex)), __LINE__);
        }
        $this->forwardPolicyIndex = $forwardPolicyIndex;
        return $this;
    }
    /**
     * Get timeout value
     * @return int|null
     */
    public function getTimeout()
    {
        return $this->timeout;
    }
    /**
     * Set timeout value
     * @param int $timeout
     * @return \Ovh\StructType\TelephonyHuntingGenericScreenOptionsModify
     */
    public function setTimeout($timeout = null)
    {
        // validation for constraint: int
        if (!is_null($timeout) && !is_numeric($timeout)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($timeout)), __LINE__);
        }
        $this->timeout = $timeout;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ovh\StructType\TelephonyHuntingGenericScreenOptionsModify
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
