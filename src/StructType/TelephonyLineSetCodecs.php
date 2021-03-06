<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for telephonyLineSetCodecs StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class TelephonyLineSetCodecs extends AbstractStructBase
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
     * The codecs
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $codecs;
    /**
     * Constructor method for telephonyLineSetCodecs
     * @uses TelephonyLineSetCodecs::setSession()
     * @uses TelephonyLineSetCodecs::setNumber()
     * @uses TelephonyLineSetCodecs::setCountry()
     * @uses TelephonyLineSetCodecs::setCodecs()
     * @param string $session
     * @param string $number
     * @param string $country
     * @param string $codecs
     */
    public function __construct($session = null, $number = null, $country = null, $codecs = null)
    {
        $this
            ->setSession($session)
            ->setNumber($number)
            ->setCountry($country)
            ->setCodecs($codecs);
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
     * @return \Ovh\StructType\TelephonyLineSetCodecs
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
     * @return \Ovh\StructType\TelephonyLineSetCodecs
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
     * @return \Ovh\StructType\TelephonyLineSetCodecs
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
     * Get codecs value
     * @return string|null
     */
    public function getCodecs()
    {
        return $this->codecs;
    }
    /**
     * Set codecs value
     * @param string $codecs
     * @return \Ovh\StructType\TelephonyLineSetCodecs
     */
    public function setCodecs($codecs = null)
    {
        // validation for constraint: string
        if (!is_null($codecs) && !is_string($codecs)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($codecs, true), gettype($codecs)), __LINE__);
        }
        $this->codecs = $codecs;
        return $this;
    }
}
