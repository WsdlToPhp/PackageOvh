<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for telephonyNumberDecodeStruct StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class TelephonyNumberDecodeStruct extends AbstractStructBase
{
    /**
     * The numberDisplay
     * @var string
     */
    public $numberDisplay;
    /**
     * The numberInternal
     * @var string
     */
    public $numberInternal;
    /**
     * The numberInternational
     * @var string
     */
    public $numberInternational;
    /**
     * The numberNational
     * @var string
     */
    public $numberNational;
    /**
     * The countryCode
     * @var string
     */
    public $countryCode;
    /**
     * The language
     * @var string
     */
    public $language;
    /**
     * The cirpackNature
     * @var string
     */
    public $cirpackNature;
    /**
     * The cirpackNumber
     * @var string
     */
    public $cirpackNumber;
    /**
     * Constructor method for telephonyNumberDecodeStruct
     * @uses TelephonyNumberDecodeStruct::setNumberDisplay()
     * @uses TelephonyNumberDecodeStruct::setNumberInternal()
     * @uses TelephonyNumberDecodeStruct::setNumberInternational()
     * @uses TelephonyNumberDecodeStruct::setNumberNational()
     * @uses TelephonyNumberDecodeStruct::setCountryCode()
     * @uses TelephonyNumberDecodeStruct::setLanguage()
     * @uses TelephonyNumberDecodeStruct::setCirpackNature()
     * @uses TelephonyNumberDecodeStruct::setCirpackNumber()
     * @param string $numberDisplay
     * @param string $numberInternal
     * @param string $numberInternational
     * @param string $numberNational
     * @param string $countryCode
     * @param string $language
     * @param string $cirpackNature
     * @param string $cirpackNumber
     */
    public function __construct($numberDisplay = null, $numberInternal = null, $numberInternational = null, $numberNational = null, $countryCode = null, $language = null, $cirpackNature = null, $cirpackNumber = null)
    {
        $this
            ->setNumberDisplay($numberDisplay)
            ->setNumberInternal($numberInternal)
            ->setNumberInternational($numberInternational)
            ->setNumberNational($numberNational)
            ->setCountryCode($countryCode)
            ->setLanguage($language)
            ->setCirpackNature($cirpackNature)
            ->setCirpackNumber($cirpackNumber);
    }
    /**
     * Get numberDisplay value
     * @return string|null
     */
    public function getNumberDisplay()
    {
        return $this->numberDisplay;
    }
    /**
     * Set numberDisplay value
     * @param string $numberDisplay
     * @return \PayPal\StructType\TelephonyNumberDecodeStruct
     */
    public function setNumberDisplay($numberDisplay = null)
    {
        // validation for constraint: string
        if (!is_null($numberDisplay) && !is_string($numberDisplay)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($numberDisplay)), __LINE__);
        }
        $this->numberDisplay = $numberDisplay;
        return $this;
    }
    /**
     * Get numberInternal value
     * @return string|null
     */
    public function getNumberInternal()
    {
        return $this->numberInternal;
    }
    /**
     * Set numberInternal value
     * @param string $numberInternal
     * @return \PayPal\StructType\TelephonyNumberDecodeStruct
     */
    public function setNumberInternal($numberInternal = null)
    {
        // validation for constraint: string
        if (!is_null($numberInternal) && !is_string($numberInternal)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($numberInternal)), __LINE__);
        }
        $this->numberInternal = $numberInternal;
        return $this;
    }
    /**
     * Get numberInternational value
     * @return string|null
     */
    public function getNumberInternational()
    {
        return $this->numberInternational;
    }
    /**
     * Set numberInternational value
     * @param string $numberInternational
     * @return \PayPal\StructType\TelephonyNumberDecodeStruct
     */
    public function setNumberInternational($numberInternational = null)
    {
        // validation for constraint: string
        if (!is_null($numberInternational) && !is_string($numberInternational)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($numberInternational)), __LINE__);
        }
        $this->numberInternational = $numberInternational;
        return $this;
    }
    /**
     * Get numberNational value
     * @return string|null
     */
    public function getNumberNational()
    {
        return $this->numberNational;
    }
    /**
     * Set numberNational value
     * @param string $numberNational
     * @return \PayPal\StructType\TelephonyNumberDecodeStruct
     */
    public function setNumberNational($numberNational = null)
    {
        // validation for constraint: string
        if (!is_null($numberNational) && !is_string($numberNational)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($numberNational)), __LINE__);
        }
        $this->numberNational = $numberNational;
        return $this;
    }
    /**
     * Get countryCode value
     * @return string|null
     */
    public function getCountryCode()
    {
        return $this->countryCode;
    }
    /**
     * Set countryCode value
     * @param string $countryCode
     * @return \PayPal\StructType\TelephonyNumberDecodeStruct
     */
    public function setCountryCode($countryCode = null)
    {
        // validation for constraint: string
        if (!is_null($countryCode) && !is_string($countryCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($countryCode)), __LINE__);
        }
        $this->countryCode = $countryCode;
        return $this;
    }
    /**
     * Get language value
     * @return string|null
     */
    public function getLanguage()
    {
        return $this->language;
    }
    /**
     * Set language value
     * @param string $language
     * @return \PayPal\StructType\TelephonyNumberDecodeStruct
     */
    public function setLanguage($language = null)
    {
        // validation for constraint: string
        if (!is_null($language) && !is_string($language)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($language)), __LINE__);
        }
        $this->language = $language;
        return $this;
    }
    /**
     * Get cirpackNature value
     * @return string|null
     */
    public function getCirpackNature()
    {
        return $this->cirpackNature;
    }
    /**
     * Set cirpackNature value
     * @param string $cirpackNature
     * @return \PayPal\StructType\TelephonyNumberDecodeStruct
     */
    public function setCirpackNature($cirpackNature = null)
    {
        // validation for constraint: string
        if (!is_null($cirpackNature) && !is_string($cirpackNature)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($cirpackNature)), __LINE__);
        }
        $this->cirpackNature = $cirpackNature;
        return $this;
    }
    /**
     * Get cirpackNumber value
     * @return string|null
     */
    public function getCirpackNumber()
    {
        return $this->cirpackNumber;
    }
    /**
     * Set cirpackNumber value
     * @param string $cirpackNumber
     * @return \PayPal\StructType\TelephonyNumberDecodeStruct
     */
    public function setCirpackNumber($cirpackNumber = null)
    {
        // validation for constraint: string
        if (!is_null($cirpackNumber) && !is_string($cirpackNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($cirpackNumber)), __LINE__);
        }
        $this->cirpackNumber = $cirpackNumber;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \PayPal\StructType\TelephonyNumberDecodeStruct
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