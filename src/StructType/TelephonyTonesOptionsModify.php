<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for telephonyTonesOptionsModify StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class TelephonyTonesOptionsModify extends AbstractStructBase
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
     * The toneRingback
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $toneRingback;
    /**
     * The toneOnHold
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $toneOnHold;
    /**
     * The toneOnClosure
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $toneOnClosure;
    /**
     * The toneOnCallWaiting
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $toneOnCallWaiting;
    /**
     * Constructor method for telephonyTonesOptionsModify
     * @uses TelephonyTonesOptionsModify::setSession()
     * @uses TelephonyTonesOptionsModify::setNumber()
     * @uses TelephonyTonesOptionsModify::setCountry()
     * @uses TelephonyTonesOptionsModify::setToneRingback()
     * @uses TelephonyTonesOptionsModify::setToneOnHold()
     * @uses TelephonyTonesOptionsModify::setToneOnClosure()
     * @uses TelephonyTonesOptionsModify::setToneOnCallWaiting()
     * @param string $session
     * @param string $number
     * @param string $country
     * @param string $toneRingback
     * @param string $toneOnHold
     * @param string $toneOnClosure
     * @param string $toneOnCallWaiting
     */
    public function __construct($session = null, $number = null, $country = null, $toneRingback = null, $toneOnHold = null, $toneOnClosure = null, $toneOnCallWaiting = null)
    {
        $this
            ->setSession($session)
            ->setNumber($number)
            ->setCountry($country)
            ->setToneRingback($toneRingback)
            ->setToneOnHold($toneOnHold)
            ->setToneOnClosure($toneOnClosure)
            ->setToneOnCallWaiting($toneOnCallWaiting);
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
     * @return \Ovh\StructType\TelephonyTonesOptionsModify
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
     * @return \Ovh\StructType\TelephonyTonesOptionsModify
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
     * @return \Ovh\StructType\TelephonyTonesOptionsModify
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
     * Get toneRingback value
     * @return string|null
     */
    public function getToneRingback()
    {
        return $this->toneRingback;
    }
    /**
     * Set toneRingback value
     * @param string $toneRingback
     * @return \Ovh\StructType\TelephonyTonesOptionsModify
     */
    public function setToneRingback($toneRingback = null)
    {
        // validation for constraint: string
        if (!is_null($toneRingback) && !is_string($toneRingback)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($toneRingback)), __LINE__);
        }
        $this->toneRingback = $toneRingback;
        return $this;
    }
    /**
     * Get toneOnHold value
     * @return string|null
     */
    public function getToneOnHold()
    {
        return $this->toneOnHold;
    }
    /**
     * Set toneOnHold value
     * @param string $toneOnHold
     * @return \Ovh\StructType\TelephonyTonesOptionsModify
     */
    public function setToneOnHold($toneOnHold = null)
    {
        // validation for constraint: string
        if (!is_null($toneOnHold) && !is_string($toneOnHold)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($toneOnHold)), __LINE__);
        }
        $this->toneOnHold = $toneOnHold;
        return $this;
    }
    /**
     * Get toneOnClosure value
     * @return string|null
     */
    public function getToneOnClosure()
    {
        return $this->toneOnClosure;
    }
    /**
     * Set toneOnClosure value
     * @param string $toneOnClosure
     * @return \Ovh\StructType\TelephonyTonesOptionsModify
     */
    public function setToneOnClosure($toneOnClosure = null)
    {
        // validation for constraint: string
        if (!is_null($toneOnClosure) && !is_string($toneOnClosure)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($toneOnClosure)), __LINE__);
        }
        $this->toneOnClosure = $toneOnClosure;
        return $this;
    }
    /**
     * Get toneOnCallWaiting value
     * @return string|null
     */
    public function getToneOnCallWaiting()
    {
        return $this->toneOnCallWaiting;
    }
    /**
     * Set toneOnCallWaiting value
     * @param string $toneOnCallWaiting
     * @return \Ovh\StructType\TelephonyTonesOptionsModify
     */
    public function setToneOnCallWaiting($toneOnCallWaiting = null)
    {
        // validation for constraint: string
        if (!is_null($toneOnCallWaiting) && !is_string($toneOnCallWaiting)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($toneOnCallWaiting)), __LINE__);
        }
        $this->toneOnCallWaiting = $toneOnCallWaiting;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ovh\StructType\TelephonyTonesOptionsModify
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
