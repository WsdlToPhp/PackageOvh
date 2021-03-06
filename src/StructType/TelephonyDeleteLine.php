<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for telephonyDeleteLine StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class TelephonyDeleteLine extends AbstractStructBase
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
     * The cancelDelete
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var bool
     */
    public $cancelDelete;
    /**
     * Constructor method for telephonyDeleteLine
     * @uses TelephonyDeleteLine::setSession()
     * @uses TelephonyDeleteLine::setNumber()
     * @uses TelephonyDeleteLine::setCountry()
     * @uses TelephonyDeleteLine::setCancelDelete()
     * @param string $session
     * @param string $number
     * @param string $country
     * @param bool $cancelDelete
     */
    public function __construct($session = null, $number = null, $country = null, $cancelDelete = null)
    {
        $this
            ->setSession($session)
            ->setNumber($number)
            ->setCountry($country)
            ->setCancelDelete($cancelDelete);
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
     * @return \Ovh\StructType\TelephonyDeleteLine
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
     * @return \Ovh\StructType\TelephonyDeleteLine
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
     * @return \Ovh\StructType\TelephonyDeleteLine
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
     * Get cancelDelete value
     * @return bool|null
     */
    public function getCancelDelete()
    {
        return $this->cancelDelete;
    }
    /**
     * Set cancelDelete value
     * @param bool $cancelDelete
     * @return \Ovh\StructType\TelephonyDeleteLine
     */
    public function setCancelDelete($cancelDelete = null)
    {
        // validation for constraint: boolean
        if (!is_null($cancelDelete) && !is_bool($cancelDelete)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($cancelDelete, true), gettype($cancelDelete)), __LINE__);
        }
        $this->cancelDelete = $cancelDelete;
        return $this;
    }
}
