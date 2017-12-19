<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for telephonyFaxCampaignStartStop StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class TelephonyFaxCampaignStartStop extends AbstractStructBase
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
     * The reference
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $reference;
    /**
     * The forceStart
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var bool
     */
    public $forceStart;
    /**
     * Constructor method for telephonyFaxCampaignStartStop
     * @uses TelephonyFaxCampaignStartStop::setSession()
     * @uses TelephonyFaxCampaignStartStop::setNumber()
     * @uses TelephonyFaxCampaignStartStop::setCountry()
     * @uses TelephonyFaxCampaignStartStop::setReference()
     * @uses TelephonyFaxCampaignStartStop::setForceStart()
     * @param string $session
     * @param string $number
     * @param string $country
     * @param string $reference
     * @param bool $forceStart
     */
    public function __construct($session = null, $number = null, $country = null, $reference = null, $forceStart = null)
    {
        $this
            ->setSession($session)
            ->setNumber($number)
            ->setCountry($country)
            ->setReference($reference)
            ->setForceStart($forceStart);
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
     * @return \PayPal\StructType\TelephonyFaxCampaignStartStop
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
     * @return \PayPal\StructType\TelephonyFaxCampaignStartStop
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
     * @return \PayPal\StructType\TelephonyFaxCampaignStartStop
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
     * Get reference value
     * @return string|null
     */
    public function getReference()
    {
        return $this->reference;
    }
    /**
     * Set reference value
     * @param string $reference
     * @return \PayPal\StructType\TelephonyFaxCampaignStartStop
     */
    public function setReference($reference = null)
    {
        // validation for constraint: string
        if (!is_null($reference) && !is_string($reference)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($reference)), __LINE__);
        }
        $this->reference = $reference;
        return $this;
    }
    /**
     * Get forceStart value
     * @return bool|null
     */
    public function getForceStart()
    {
        return $this->forceStart;
    }
    /**
     * Set forceStart value
     * @param bool $forceStart
     * @return \PayPal\StructType\TelephonyFaxCampaignStartStop
     */
    public function setForceStart($forceStart = null)
    {
        // validation for constraint: boolean
        if (!is_null($forceStart) && !is_bool($forceStart)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($forceStart)), __LINE__);
        }
        $this->forceStart = $forceStart;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \PayPal\StructType\TelephonyFaxCampaignStartStop
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
