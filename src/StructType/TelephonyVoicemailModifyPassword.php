<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for telephonyVoicemailModifyPassword StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class TelephonyVoicemailModifyPassword extends AbstractStructBase
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
     * The password
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $password;
    /**
     * The forcePassword
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var bool
     */
    public $forcePassword;
    /**
     * Constructor method for telephonyVoicemailModifyPassword
     * @uses TelephonyVoicemailModifyPassword::setSession()
     * @uses TelephonyVoicemailModifyPassword::setNumber()
     * @uses TelephonyVoicemailModifyPassword::setCountry()
     * @uses TelephonyVoicemailModifyPassword::setPassword()
     * @uses TelephonyVoicemailModifyPassword::setForcePassword()
     * @param string $session
     * @param string $number
     * @param string $country
     * @param string $password
     * @param bool $forcePassword
     */
    public function __construct($session = null, $number = null, $country = null, $password = null, $forcePassword = null)
    {
        $this
            ->setSession($session)
            ->setNumber($number)
            ->setCountry($country)
            ->setPassword($password)
            ->setForcePassword($forcePassword);
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
     * @return \Ovh\StructType\TelephonyVoicemailModifyPassword
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
     * @return \Ovh\StructType\TelephonyVoicemailModifyPassword
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
     * @return \Ovh\StructType\TelephonyVoicemailModifyPassword
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
     * Get password value
     * @return string|null
     */
    public function getPassword()
    {
        return $this->password;
    }
    /**
     * Set password value
     * @param string $password
     * @return \Ovh\StructType\TelephonyVoicemailModifyPassword
     */
    public function setPassword($password = null)
    {
        // validation for constraint: string
        if (!is_null($password) && !is_string($password)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($password, true), gettype($password)), __LINE__);
        }
        $this->password = $password;
        return $this;
    }
    /**
     * Get forcePassword value
     * @return bool|null
     */
    public function getForcePassword()
    {
        return $this->forcePassword;
    }
    /**
     * Set forcePassword value
     * @param bool $forcePassword
     * @return \Ovh\StructType\TelephonyVoicemailModifyPassword
     */
    public function setForcePassword($forcePassword = null)
    {
        // validation for constraint: boolean
        if (!is_null($forcePassword) && !is_bool($forcePassword)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($forcePassword, true), gettype($forcePassword)), __LINE__);
        }
        $this->forcePassword = $forcePassword;
        return $this;
    }
}
