<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for telephonySmsplusDetailsStruct StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class TelephonySmsplusDetailsStruct extends AbstractStructBase
{
    /**
     * The shortCodeCategory
     * @var string
     */
    public $shortCodeCategory;
    /**
     * The shortCode
     * @var string
     */
    public $shortCode;
    /**
     * The keyword
     * @var string
     */
    public $keyword;
    /**
     * The domain
     * @var string
     */
    public $domain;
    /**
     * The publicType
     * @var string
     */
    public $publicType;
    /**
     * The price
     * @var float
     */
    public $price;
    /**
     * The priceReversed
     * @var float
     */
    public $priceReversed;
    /**
     * The rates
     * @var string
     */
    public $rates;
    /**
     * The level
     * @var string
     */
    public $level;
    /**
     * The company
     * @var string
     */
    public $company;
    /**
     * The applicationDescription
     * @var string
     */
    public $applicationDescription;
    /**
     * The applicationType
     * @var string
     */
    public $applicationType;
    /**
     * The cgiUrl
     * @var string
     */
    public $cgiUrl;
    /**
     * The text
     * @var string
     */
    public $text;
    /**
     * The cgiActivation
     * @var bool
     */
    public $cgiActivation;
    /**
     * The options
     * @var \Ovh\StructType\TelephonySmsplusOptionsStruct
     */
    public $options;
    /**
     * The description
     * @var string
     */
    public $description;
    /**
     * Constructor method for telephonySmsplusDetailsStruct
     * @uses TelephonySmsplusDetailsStruct::setShortCodeCategory()
     * @uses TelephonySmsplusDetailsStruct::setShortCode()
     * @uses TelephonySmsplusDetailsStruct::setKeyword()
     * @uses TelephonySmsplusDetailsStruct::setDomain()
     * @uses TelephonySmsplusDetailsStruct::setPublicType()
     * @uses TelephonySmsplusDetailsStruct::setPrice()
     * @uses TelephonySmsplusDetailsStruct::setPriceReversed()
     * @uses TelephonySmsplusDetailsStruct::setRates()
     * @uses TelephonySmsplusDetailsStruct::setLevel()
     * @uses TelephonySmsplusDetailsStruct::setCompany()
     * @uses TelephonySmsplusDetailsStruct::setApplicationDescription()
     * @uses TelephonySmsplusDetailsStruct::setApplicationType()
     * @uses TelephonySmsplusDetailsStruct::setCgiUrl()
     * @uses TelephonySmsplusDetailsStruct::setText()
     * @uses TelephonySmsplusDetailsStruct::setCgiActivation()
     * @uses TelephonySmsplusDetailsStruct::setOptions()
     * @uses TelephonySmsplusDetailsStruct::setDescription()
     * @param string $shortCodeCategory
     * @param string $shortCode
     * @param string $keyword
     * @param string $domain
     * @param string $publicType
     * @param float $price
     * @param float $priceReversed
     * @param string $rates
     * @param string $level
     * @param string $company
     * @param string $applicationDescription
     * @param string $applicationType
     * @param string $cgiUrl
     * @param string $text
     * @param bool $cgiActivation
     * @param \Ovh\StructType\TelephonySmsplusOptionsStruct $options
     * @param string $description
     */
    public function __construct($shortCodeCategory = null, $shortCode = null, $keyword = null, $domain = null, $publicType = null, $price = null, $priceReversed = null, $rates = null, $level = null, $company = null, $applicationDescription = null, $applicationType = null, $cgiUrl = null, $text = null, $cgiActivation = null, \Ovh\StructType\TelephonySmsplusOptionsStruct $options = null, $description = null)
    {
        $this
            ->setShortCodeCategory($shortCodeCategory)
            ->setShortCode($shortCode)
            ->setKeyword($keyword)
            ->setDomain($domain)
            ->setPublicType($publicType)
            ->setPrice($price)
            ->setPriceReversed($priceReversed)
            ->setRates($rates)
            ->setLevel($level)
            ->setCompany($company)
            ->setApplicationDescription($applicationDescription)
            ->setApplicationType($applicationType)
            ->setCgiUrl($cgiUrl)
            ->setText($text)
            ->setCgiActivation($cgiActivation)
            ->setOptions($options)
            ->setDescription($description);
    }
    /**
     * Get shortCodeCategory value
     * @return string|null
     */
    public function getShortCodeCategory()
    {
        return $this->shortCodeCategory;
    }
    /**
     * Set shortCodeCategory value
     * @param string $shortCodeCategory
     * @return \Ovh\StructType\TelephonySmsplusDetailsStruct
     */
    public function setShortCodeCategory($shortCodeCategory = null)
    {
        // validation for constraint: string
        if (!is_null($shortCodeCategory) && !is_string($shortCodeCategory)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($shortCodeCategory, true), gettype($shortCodeCategory)), __LINE__);
        }
        $this->shortCodeCategory = $shortCodeCategory;
        return $this;
    }
    /**
     * Get shortCode value
     * @return string|null
     */
    public function getShortCode()
    {
        return $this->shortCode;
    }
    /**
     * Set shortCode value
     * @param string $shortCode
     * @return \Ovh\StructType\TelephonySmsplusDetailsStruct
     */
    public function setShortCode($shortCode = null)
    {
        // validation for constraint: string
        if (!is_null($shortCode) && !is_string($shortCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($shortCode, true), gettype($shortCode)), __LINE__);
        }
        $this->shortCode = $shortCode;
        return $this;
    }
    /**
     * Get keyword value
     * @return string|null
     */
    public function getKeyword()
    {
        return $this->keyword;
    }
    /**
     * Set keyword value
     * @param string $keyword
     * @return \Ovh\StructType\TelephonySmsplusDetailsStruct
     */
    public function setKeyword($keyword = null)
    {
        // validation for constraint: string
        if (!is_null($keyword) && !is_string($keyword)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($keyword, true), gettype($keyword)), __LINE__);
        }
        $this->keyword = $keyword;
        return $this;
    }
    /**
     * Get domain value
     * @return string|null
     */
    public function getDomain()
    {
        return $this->domain;
    }
    /**
     * Set domain value
     * @param string $domain
     * @return \Ovh\StructType\TelephonySmsplusDetailsStruct
     */
    public function setDomain($domain = null)
    {
        // validation for constraint: string
        if (!is_null($domain) && !is_string($domain)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($domain, true), gettype($domain)), __LINE__);
        }
        $this->domain = $domain;
        return $this;
    }
    /**
     * Get publicType value
     * @return string|null
     */
    public function getPublicType()
    {
        return $this->publicType;
    }
    /**
     * Set publicType value
     * @param string $publicType
     * @return \Ovh\StructType\TelephonySmsplusDetailsStruct
     */
    public function setPublicType($publicType = null)
    {
        // validation for constraint: string
        if (!is_null($publicType) && !is_string($publicType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($publicType, true), gettype($publicType)), __LINE__);
        }
        $this->publicType = $publicType;
        return $this;
    }
    /**
     * Get price value
     * @return float|null
     */
    public function getPrice()
    {
        return $this->price;
    }
    /**
     * Set price value
     * @param float $price
     * @return \Ovh\StructType\TelephonySmsplusDetailsStruct
     */
    public function setPrice($price = null)
    {
        // validation for constraint: float
        if (!is_null($price) && !(is_float($price) || is_numeric($price))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($price, true), gettype($price)), __LINE__);
        }
        $this->price = $price;
        return $this;
    }
    /**
     * Get priceReversed value
     * @return float|null
     */
    public function getPriceReversed()
    {
        return $this->priceReversed;
    }
    /**
     * Set priceReversed value
     * @param float $priceReversed
     * @return \Ovh\StructType\TelephonySmsplusDetailsStruct
     */
    public function setPriceReversed($priceReversed = null)
    {
        // validation for constraint: float
        if (!is_null($priceReversed) && !(is_float($priceReversed) || is_numeric($priceReversed))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($priceReversed, true), gettype($priceReversed)), __LINE__);
        }
        $this->priceReversed = $priceReversed;
        return $this;
    }
    /**
     * Get rates value
     * @return string|null
     */
    public function getRates()
    {
        return $this->rates;
    }
    /**
     * Set rates value
     * @param string $rates
     * @return \Ovh\StructType\TelephonySmsplusDetailsStruct
     */
    public function setRates($rates = null)
    {
        // validation for constraint: string
        if (!is_null($rates) && !is_string($rates)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($rates, true), gettype($rates)), __LINE__);
        }
        $this->rates = $rates;
        return $this;
    }
    /**
     * Get level value
     * @return string|null
     */
    public function getLevel()
    {
        return $this->level;
    }
    /**
     * Set level value
     * @param string $level
     * @return \Ovh\StructType\TelephonySmsplusDetailsStruct
     */
    public function setLevel($level = null)
    {
        // validation for constraint: string
        if (!is_null($level) && !is_string($level)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($level, true), gettype($level)), __LINE__);
        }
        $this->level = $level;
        return $this;
    }
    /**
     * Get company value
     * @return string|null
     */
    public function getCompany()
    {
        return $this->company;
    }
    /**
     * Set company value
     * @param string $company
     * @return \Ovh\StructType\TelephonySmsplusDetailsStruct
     */
    public function setCompany($company = null)
    {
        // validation for constraint: string
        if (!is_null($company) && !is_string($company)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($company, true), gettype($company)), __LINE__);
        }
        $this->company = $company;
        return $this;
    }
    /**
     * Get applicationDescription value
     * @return string|null
     */
    public function getApplicationDescription()
    {
        return $this->applicationDescription;
    }
    /**
     * Set applicationDescription value
     * @param string $applicationDescription
     * @return \Ovh\StructType\TelephonySmsplusDetailsStruct
     */
    public function setApplicationDescription($applicationDescription = null)
    {
        // validation for constraint: string
        if (!is_null($applicationDescription) && !is_string($applicationDescription)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($applicationDescription, true), gettype($applicationDescription)), __LINE__);
        }
        $this->applicationDescription = $applicationDescription;
        return $this;
    }
    /**
     * Get applicationType value
     * @return string|null
     */
    public function getApplicationType()
    {
        return $this->applicationType;
    }
    /**
     * Set applicationType value
     * @param string $applicationType
     * @return \Ovh\StructType\TelephonySmsplusDetailsStruct
     */
    public function setApplicationType($applicationType = null)
    {
        // validation for constraint: string
        if (!is_null($applicationType) && !is_string($applicationType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($applicationType, true), gettype($applicationType)), __LINE__);
        }
        $this->applicationType = $applicationType;
        return $this;
    }
    /**
     * Get cgiUrl value
     * @return string|null
     */
    public function getCgiUrl()
    {
        return $this->cgiUrl;
    }
    /**
     * Set cgiUrl value
     * @param string $cgiUrl
     * @return \Ovh\StructType\TelephonySmsplusDetailsStruct
     */
    public function setCgiUrl($cgiUrl = null)
    {
        // validation for constraint: string
        if (!is_null($cgiUrl) && !is_string($cgiUrl)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cgiUrl, true), gettype($cgiUrl)), __LINE__);
        }
        $this->cgiUrl = $cgiUrl;
        return $this;
    }
    /**
     * Get text value
     * @return string|null
     */
    public function getText()
    {
        return $this->text;
    }
    /**
     * Set text value
     * @param string $text
     * @return \Ovh\StructType\TelephonySmsplusDetailsStruct
     */
    public function setText($text = null)
    {
        // validation for constraint: string
        if (!is_null($text) && !is_string($text)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($text, true), gettype($text)), __LINE__);
        }
        $this->text = $text;
        return $this;
    }
    /**
     * Get cgiActivation value
     * @return bool|null
     */
    public function getCgiActivation()
    {
        return $this->cgiActivation;
    }
    /**
     * Set cgiActivation value
     * @param bool $cgiActivation
     * @return \Ovh\StructType\TelephonySmsplusDetailsStruct
     */
    public function setCgiActivation($cgiActivation = null)
    {
        // validation for constraint: boolean
        if (!is_null($cgiActivation) && !is_bool($cgiActivation)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($cgiActivation, true), gettype($cgiActivation)), __LINE__);
        }
        $this->cgiActivation = $cgiActivation;
        return $this;
    }
    /**
     * Get options value
     * @return \Ovh\StructType\TelephonySmsplusOptionsStruct|null
     */
    public function getOptions()
    {
        return $this->options;
    }
    /**
     * Set options value
     * @param \Ovh\StructType\TelephonySmsplusOptionsStruct $options
     * @return \Ovh\StructType\TelephonySmsplusDetailsStruct
     */
    public function setOptions(\Ovh\StructType\TelephonySmsplusOptionsStruct $options = null)
    {
        $this->options = $options;
        return $this;
    }
    /**
     * Get description value
     * @return string|null
     */
    public function getDescription()
    {
        return $this->description;
    }
    /**
     * Set description value
     * @param string $description
     * @return \Ovh\StructType\TelephonySmsplusDetailsStruct
     */
    public function setDescription($description = null)
    {
        // validation for constraint: string
        if (!is_null($description) && !is_string($description)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($description, true), gettype($description)), __LINE__);
        }
        $this->description = $description;
        return $this;
    }
}
