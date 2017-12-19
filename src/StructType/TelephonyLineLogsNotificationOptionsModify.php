<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for telephonyLineLogsNotificationOptionsModify StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class TelephonyLineLogsNotificationOptionsModify extends AbstractStructBase
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
     * The frequency
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $frequency;
    /**
     * The sendIfNull
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var bool
     */
    public $sendIfNull;
    /**
     * The email
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $email;
    /**
     * Constructor method for telephonyLineLogsNotificationOptionsModify
     * @uses TelephonyLineLogsNotificationOptionsModify::setSession()
     * @uses TelephonyLineLogsNotificationOptionsModify::setNumber()
     * @uses TelephonyLineLogsNotificationOptionsModify::setCountry()
     * @uses TelephonyLineLogsNotificationOptionsModify::setFrequency()
     * @uses TelephonyLineLogsNotificationOptionsModify::setSendIfNull()
     * @uses TelephonyLineLogsNotificationOptionsModify::setEmail()
     * @param string $session
     * @param string $number
     * @param string $country
     * @param string $frequency
     * @param bool $sendIfNull
     * @param string $email
     */
    public function __construct($session = null, $number = null, $country = null, $frequency = null, $sendIfNull = null, $email = null)
    {
        $this
            ->setSession($session)
            ->setNumber($number)
            ->setCountry($country)
            ->setFrequency($frequency)
            ->setSendIfNull($sendIfNull)
            ->setEmail($email);
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
     * @return \Ovh\StructType\TelephonyLineLogsNotificationOptionsModify
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
     * @return \Ovh\StructType\TelephonyLineLogsNotificationOptionsModify
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
     * @return \Ovh\StructType\TelephonyLineLogsNotificationOptionsModify
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
     * Get frequency value
     * @return string|null
     */
    public function getFrequency()
    {
        return $this->frequency;
    }
    /**
     * Set frequency value
     * @param string $frequency
     * @return \Ovh\StructType\TelephonyLineLogsNotificationOptionsModify
     */
    public function setFrequency($frequency = null)
    {
        // validation for constraint: string
        if (!is_null($frequency) && !is_string($frequency)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($frequency)), __LINE__);
        }
        $this->frequency = $frequency;
        return $this;
    }
    /**
     * Get sendIfNull value
     * @return bool|null
     */
    public function getSendIfNull()
    {
        return $this->sendIfNull;
    }
    /**
     * Set sendIfNull value
     * @param bool $sendIfNull
     * @return \Ovh\StructType\TelephonyLineLogsNotificationOptionsModify
     */
    public function setSendIfNull($sendIfNull = null)
    {
        // validation for constraint: boolean
        if (!is_null($sendIfNull) && !is_bool($sendIfNull)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($sendIfNull)), __LINE__);
        }
        $this->sendIfNull = $sendIfNull;
        return $this;
    }
    /**
     * Get email value
     * @return string|null
     */
    public function getEmail()
    {
        return $this->email;
    }
    /**
     * Set email value
     * @param string $email
     * @return \Ovh\StructType\TelephonyLineLogsNotificationOptionsModify
     */
    public function setEmail($email = null)
    {
        // validation for constraint: string
        if (!is_null($email) && !is_string($email)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($email)), __LINE__);
        }
        $this->email = $email;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ovh\StructType\TelephonyLineLogsNotificationOptionsModify
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
