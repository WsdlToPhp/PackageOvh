<?php

namespace Ovh\StructType;

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
     * The reference
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $reference;
    /**
     * The forceStart
     * Meta information extracted from the WSDL
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
     * @return \Ovh\StructType\TelephonyFaxCampaignStartStop
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
     * @return \Ovh\StructType\TelephonyFaxCampaignStartStop
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
     * @return \Ovh\StructType\TelephonyFaxCampaignStartStop
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
     * @return \Ovh\StructType\TelephonyFaxCampaignStartStop
     */
    public function setReference($reference = null)
    {
        // validation for constraint: string
        if (!is_null($reference) && !is_string($reference)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($reference, true), gettype($reference)), __LINE__);
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
     * @return \Ovh\StructType\TelephonyFaxCampaignStartStop
     */
    public function setForceStart($forceStart = null)
    {
        // validation for constraint: boolean
        if (!is_null($forceStart) && !is_bool($forceStart)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($forceStart, true), gettype($forceStart)), __LINE__);
        }
        $this->forceStart = $forceStart;
        return $this;
    }
}
