<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for telephonyOfferSimultaneousLinesModify StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class TelephonyOfferSimultaneousLinesModify extends AbstractStructBase
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
     * The simultaneousLines
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var int
     */
    public $simultaneousLines;
    /**
     * Constructor method for telephonyOfferSimultaneousLinesModify
     * @uses TelephonyOfferSimultaneousLinesModify::setSession()
     * @uses TelephonyOfferSimultaneousLinesModify::setNumber()
     * @uses TelephonyOfferSimultaneousLinesModify::setCountry()
     * @uses TelephonyOfferSimultaneousLinesModify::setSimultaneousLines()
     * @param string $session
     * @param string $number
     * @param string $country
     * @param int $simultaneousLines
     */
    public function __construct($session = null, $number = null, $country = null, $simultaneousLines = null)
    {
        $this
            ->setSession($session)
            ->setNumber($number)
            ->setCountry($country)
            ->setSimultaneousLines($simultaneousLines);
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
     * @return \Ovh\StructType\TelephonyOfferSimultaneousLinesModify
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
     * @return \Ovh\StructType\TelephonyOfferSimultaneousLinesModify
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
     * @return \Ovh\StructType\TelephonyOfferSimultaneousLinesModify
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
     * Get simultaneousLines value
     * @return int|null
     */
    public function getSimultaneousLines()
    {
        return $this->simultaneousLines;
    }
    /**
     * Set simultaneousLines value
     * @param int $simultaneousLines
     * @return \Ovh\StructType\TelephonyOfferSimultaneousLinesModify
     */
    public function setSimultaneousLines($simultaneousLines = null)
    {
        // validation for constraint: int
        if (!is_null($simultaneousLines) && !(is_int($simultaneousLines) || ctype_digit($simultaneousLines))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($simultaneousLines, true), gettype($simultaneousLines)), __LINE__);
        }
        $this->simultaneousLines = $simultaneousLines;
        return $this;
    }
}
