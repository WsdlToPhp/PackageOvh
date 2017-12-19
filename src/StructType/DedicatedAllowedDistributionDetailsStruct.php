<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for dedicatedAllowedDistributionDetailsStruct StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class DedicatedAllowedDistributionDetailsStruct extends AbstractStructBase
{
    /**
     * The language
     * @var \PayPal\ArrayType\MyArrayOfDedicatedAllowedDistributionLanguageStructType
     */
    public $language;
    /**
     * The languageList
     * @var \PayPal\ArrayType\MyArrayOfStringType
     */
    public $languageList;
    /**
     * The defaultLanguage
     * @var string
     */
    public $defaultLanguage;
    /**
     * The bitFormat
     * @var \PayPal\ArrayType\MyArrayOfDedicatedAllowedDistributionBitFormatStructType
     */
    public $bitFormat;
    /**
     * The longName
     * @var string
     */
    public $longName;
    /**
     * The name
     * @var string
     */
    public $name;
    /**
     * Constructor method for dedicatedAllowedDistributionDetailsStruct
     * @uses DedicatedAllowedDistributionDetailsStruct::setLanguage()
     * @uses DedicatedAllowedDistributionDetailsStruct::setLanguageList()
     * @uses DedicatedAllowedDistributionDetailsStruct::setDefaultLanguage()
     * @uses DedicatedAllowedDistributionDetailsStruct::setBitFormat()
     * @uses DedicatedAllowedDistributionDetailsStruct::setLongName()
     * @uses DedicatedAllowedDistributionDetailsStruct::setName()
     * @param \PayPal\ArrayType\MyArrayOfDedicatedAllowedDistributionLanguageStructType $language
     * @param \PayPal\ArrayType\MyArrayOfStringType $languageList
     * @param string $defaultLanguage
     * @param \PayPal\ArrayType\MyArrayOfDedicatedAllowedDistributionBitFormatStructType $bitFormat
     * @param string $longName
     * @param string $name
     */
    public function __construct(\PayPal\ArrayType\MyArrayOfDedicatedAllowedDistributionLanguageStructType $language = null, \PayPal\ArrayType\MyArrayOfStringType $languageList = null, $defaultLanguage = null, \PayPal\ArrayType\MyArrayOfDedicatedAllowedDistributionBitFormatStructType $bitFormat = null, $longName = null, $name = null)
    {
        $this
            ->setLanguage($language)
            ->setLanguageList($languageList)
            ->setDefaultLanguage($defaultLanguage)
            ->setBitFormat($bitFormat)
            ->setLongName($longName)
            ->setName($name);
    }
    /**
     * Get language value
     * @return \PayPal\ArrayType\MyArrayOfDedicatedAllowedDistributionLanguageStructType|null
     */
    public function getLanguage()
    {
        return $this->language;
    }
    /**
     * Set language value
     * @param \PayPal\ArrayType\MyArrayOfDedicatedAllowedDistributionLanguageStructType $language
     * @return \PayPal\StructType\DedicatedAllowedDistributionDetailsStruct
     */
    public function setLanguage(\PayPal\ArrayType\MyArrayOfDedicatedAllowedDistributionLanguageStructType $language = null)
    {
        $this->language = $language;
        return $this;
    }
    /**
     * Get languageList value
     * @return \PayPal\ArrayType\MyArrayOfStringType|null
     */
    public function getLanguageList()
    {
        return $this->languageList;
    }
    /**
     * Set languageList value
     * @param \PayPal\ArrayType\MyArrayOfStringType $languageList
     * @return \PayPal\StructType\DedicatedAllowedDistributionDetailsStruct
     */
    public function setLanguageList(\PayPal\ArrayType\MyArrayOfStringType $languageList = null)
    {
        $this->languageList = $languageList;
        return $this;
    }
    /**
     * Get defaultLanguage value
     * @return string|null
     */
    public function getDefaultLanguage()
    {
        return $this->defaultLanguage;
    }
    /**
     * Set defaultLanguage value
     * @param string $defaultLanguage
     * @return \PayPal\StructType\DedicatedAllowedDistributionDetailsStruct
     */
    public function setDefaultLanguage($defaultLanguage = null)
    {
        // validation for constraint: string
        if (!is_null($defaultLanguage) && !is_string($defaultLanguage)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($defaultLanguage)), __LINE__);
        }
        $this->defaultLanguage = $defaultLanguage;
        return $this;
    }
    /**
     * Get bitFormat value
     * @return \PayPal\ArrayType\MyArrayOfDedicatedAllowedDistributionBitFormatStructType|null
     */
    public function getBitFormat()
    {
        return $this->bitFormat;
    }
    /**
     * Set bitFormat value
     * @param \PayPal\ArrayType\MyArrayOfDedicatedAllowedDistributionBitFormatStructType $bitFormat
     * @return \PayPal\StructType\DedicatedAllowedDistributionDetailsStruct
     */
    public function setBitFormat(\PayPal\ArrayType\MyArrayOfDedicatedAllowedDistributionBitFormatStructType $bitFormat = null)
    {
        $this->bitFormat = $bitFormat;
        return $this;
    }
    /**
     * Get longName value
     * @return string|null
     */
    public function getLongName()
    {
        return $this->longName;
    }
    /**
     * Set longName value
     * @param string $longName
     * @return \PayPal\StructType\DedicatedAllowedDistributionDetailsStruct
     */
    public function setLongName($longName = null)
    {
        // validation for constraint: string
        if (!is_null($longName) && !is_string($longName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($longName)), __LINE__);
        }
        $this->longName = $longName;
        return $this;
    }
    /**
     * Get name value
     * @return string|null
     */
    public function getName()
    {
        return $this->name;
    }
    /**
     * Set name value
     * @param string $name
     * @return \PayPal\StructType\DedicatedAllowedDistributionDetailsStruct
     */
    public function setName($name = null)
    {
        // validation for constraint: string
        if (!is_null($name) && !is_string($name)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($name)), __LINE__);
        }
        $this->name = $name;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \PayPal\StructType\DedicatedAllowedDistributionDetailsStruct
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
