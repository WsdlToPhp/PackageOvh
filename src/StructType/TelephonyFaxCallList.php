<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for telephonyFaxCallList StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class TelephonyFaxCallList extends AbstractStructBase
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
     * The listBegin
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var int
     */
    public $listBegin;
    /**
     * The listLimit
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var int
     */
    public $listLimit;
    /**
     * The faxReceived
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var bool
     */
    public $faxReceived;
    /**
     * Constructor method for telephonyFaxCallList
     * @uses TelephonyFaxCallList::setSession()
     * @uses TelephonyFaxCallList::setNumber()
     * @uses TelephonyFaxCallList::setCountry()
     * @uses TelephonyFaxCallList::setListBegin()
     * @uses TelephonyFaxCallList::setListLimit()
     * @uses TelephonyFaxCallList::setFaxReceived()
     * @param string $session
     * @param string $number
     * @param string $country
     * @param int $listBegin
     * @param int $listLimit
     * @param bool $faxReceived
     */
    public function __construct($session = null, $number = null, $country = null, $listBegin = null, $listLimit = null, $faxReceived = null)
    {
        $this
            ->setSession($session)
            ->setNumber($number)
            ->setCountry($country)
            ->setListBegin($listBegin)
            ->setListLimit($listLimit)
            ->setFaxReceived($faxReceived);
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
     * @return \Ovh\StructType\TelephonyFaxCallList
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
     * @return \Ovh\StructType\TelephonyFaxCallList
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
     * @return \Ovh\StructType\TelephonyFaxCallList
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
     * Get listBegin value
     * @return int|null
     */
    public function getListBegin()
    {
        return $this->listBegin;
    }
    /**
     * Set listBegin value
     * @param int $listBegin
     * @return \Ovh\StructType\TelephonyFaxCallList
     */
    public function setListBegin($listBegin = null)
    {
        // validation for constraint: int
        if (!is_null($listBegin) && !(is_int($listBegin) || ctype_digit($listBegin))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($listBegin, true), gettype($listBegin)), __LINE__);
        }
        $this->listBegin = $listBegin;
        return $this;
    }
    /**
     * Get listLimit value
     * @return int|null
     */
    public function getListLimit()
    {
        return $this->listLimit;
    }
    /**
     * Set listLimit value
     * @param int $listLimit
     * @return \Ovh\StructType\TelephonyFaxCallList
     */
    public function setListLimit($listLimit = null)
    {
        // validation for constraint: int
        if (!is_null($listLimit) && !(is_int($listLimit) || ctype_digit($listLimit))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($listLimit, true), gettype($listLimit)), __LINE__);
        }
        $this->listLimit = $listLimit;
        return $this;
    }
    /**
     * Get faxReceived value
     * @return bool|null
     */
    public function getFaxReceived()
    {
        return $this->faxReceived;
    }
    /**
     * Set faxReceived value
     * @param bool $faxReceived
     * @return \Ovh\StructType\TelephonyFaxCallList
     */
    public function setFaxReceived($faxReceived = null)
    {
        // validation for constraint: boolean
        if (!is_null($faxReceived) && !is_bool($faxReceived)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($faxReceived, true), gettype($faxReceived)), __LINE__);
        }
        $this->faxReceived = $faxReceived;
        return $this;
    }
}
