<?php

namespace Ovh\StructType;

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
     * @var \Ovh\ArrayType\MyArrayOfDedicatedAllowedDistributionLanguageStructType
     */
    public $language;
    /**
     * The languageList
     * @var \Ovh\ArrayType\MyArrayOfStringType
     */
    public $languageList;
    /**
     * The defaultLanguage
     * @var string
     */
    public $defaultLanguage;
    /**
     * The bitFormat
     * @var \Ovh\ArrayType\MyArrayOfDedicatedAllowedDistributionBitFormatStructType
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
     * @param \Ovh\ArrayType\MyArrayOfDedicatedAllowedDistributionLanguageStructType $language
     * @param \Ovh\ArrayType\MyArrayOfStringType $languageList
     * @param string $defaultLanguage
     * @param \Ovh\ArrayType\MyArrayOfDedicatedAllowedDistributionBitFormatStructType $bitFormat
     * @param string $longName
     * @param string $name
     */
    public function __construct(\Ovh\ArrayType\MyArrayOfDedicatedAllowedDistributionLanguageStructType $language = null, \Ovh\ArrayType\MyArrayOfStringType $languageList = null, $defaultLanguage = null, \Ovh\ArrayType\MyArrayOfDedicatedAllowedDistributionBitFormatStructType $bitFormat = null, $longName = null, $name = null)
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
     * @return \Ovh\ArrayType\MyArrayOfDedicatedAllowedDistributionLanguageStructType|null
     */
    public function getLanguage()
    {
        return $this->language;
    }
    /**
     * Set language value
     * @param \Ovh\ArrayType\MyArrayOfDedicatedAllowedDistributionLanguageStructType $language
     * @return \Ovh\StructType\DedicatedAllowedDistributionDetailsStruct
     */
    public function setLanguage(\Ovh\ArrayType\MyArrayOfDedicatedAllowedDistributionLanguageStructType $language = null)
    {
        $this->language = $language;
        return $this;
    }
    /**
     * Get languageList value
     * @return \Ovh\ArrayType\MyArrayOfStringType|null
     */
    public function getLanguageList()
    {
        return $this->languageList;
    }
    /**
     * Set languageList value
     * @param \Ovh\ArrayType\MyArrayOfStringType $languageList
     * @return \Ovh\StructType\DedicatedAllowedDistributionDetailsStruct
     */
    public function setLanguageList(\Ovh\ArrayType\MyArrayOfStringType $languageList = null)
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
     * @return \Ovh\StructType\DedicatedAllowedDistributionDetailsStruct
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
     * @return \Ovh\ArrayType\MyArrayOfDedicatedAllowedDistributionBitFormatStructType|null
     */
    public function getBitFormat()
    {
        return $this->bitFormat;
    }
    /**
     * Set bitFormat value
     * @param \Ovh\ArrayType\MyArrayOfDedicatedAllowedDistributionBitFormatStructType $bitFormat
     * @return \Ovh\StructType\DedicatedAllowedDistributionDetailsStruct
     */
    public function setBitFormat(\Ovh\ArrayType\MyArrayOfDedicatedAllowedDistributionBitFormatStructType $bitFormat = null)
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
     * @return \Ovh\StructType\DedicatedAllowedDistributionDetailsStruct
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
     * @return \Ovh\StructType\DedicatedAllowedDistributionDetailsStruct
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
     * @return \Ovh\StructType\DedicatedAllowedDistributionDetailsStruct
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
