<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for telephonyRedirectInfoReturn StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class TelephonyRedirectInfoReturn extends AbstractStructBase
{
    /**
     * The number
     * @var string
     */
    public $number;
    /**
     * The country
     * @var string
     */
    public $country;
    /**
     * The noReplyTimer
     * @var int
     */
    public $noReplyTimer;
    /**
     * The logged
     * @var bool
     */
    public $logged;
    /**
     * Constructor method for telephonyRedirectInfoReturn
     * @uses TelephonyRedirectInfoReturn::setNumber()
     * @uses TelephonyRedirectInfoReturn::setCountry()
     * @uses TelephonyRedirectInfoReturn::setNoReplyTimer()
     * @uses TelephonyRedirectInfoReturn::setLogged()
     * @param string $number
     * @param string $country
     * @param int $noReplyTimer
     * @param bool $logged
     */
    public function __construct($number = null, $country = null, $noReplyTimer = null, $logged = null)
    {
        $this
            ->setNumber($number)
            ->setCountry($country)
            ->setNoReplyTimer($noReplyTimer)
            ->setLogged($logged);
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
     * @return \Ovh\StructType\TelephonyRedirectInfoReturn
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
     * @return \Ovh\StructType\TelephonyRedirectInfoReturn
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
     * @return \Ovh\StructType\TelephonyRedirectInfoReturn
     */
    public function setNoReplyTimer($noReplyTimer = null)
    {
        // validation for constraint: int
        if (!is_null($noReplyTimer) && !(is_int($noReplyTimer) || ctype_digit($noReplyTimer))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($noReplyTimer, true), gettype($noReplyTimer)), __LINE__);
        }
        $this->noReplyTimer = $noReplyTimer;
        return $this;
    }
    /**
     * Get logged value
     * @return bool|null
     */
    public function getLogged()
    {
        return $this->logged;
    }
    /**
     * Set logged value
     * @param bool $logged
     * @return \Ovh\StructType\TelephonyRedirectInfoReturn
     */
    public function setLogged($logged = null)
    {
        // validation for constraint: boolean
        if (!is_null($logged) && !is_bool($logged)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($logged, true), gettype($logged)), __LINE__);
        }
        $this->logged = $logged;
        return $this;
    }
}
