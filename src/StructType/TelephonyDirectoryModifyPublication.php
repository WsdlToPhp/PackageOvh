<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for telephonyDirectoryModifyPublication StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class TelephonyDirectoryModifyPublication extends AbstractStructBase
{
    /**
     * The session
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $session;
    /**
     * The callNumber
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $callNumber;
    /**
     * The countryCode
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $countryCode;
    /**
     * The lineDescription
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $lineDescription;
    /**
     * The displayFirstName
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $displayFirstName;
    /**
     * The displayOnlyCity
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $displayOnlyCity;
    /**
     * The displayUniversalDirectory
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $displayUniversalDirectory;
    /**
     * The displayMarketingDirectory
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $displayMarketingDirectory;
    /**
     * The displaySearchReverse
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $displaySearchReverse;
    /**
     * The receivePJDirectory
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $receivePJDirectory;
    /**
     * Constructor method for telephonyDirectoryModifyPublication
     * @uses TelephonyDirectoryModifyPublication::setSession()
     * @uses TelephonyDirectoryModifyPublication::setCallNumber()
     * @uses TelephonyDirectoryModifyPublication::setCountryCode()
     * @uses TelephonyDirectoryModifyPublication::setLineDescription()
     * @uses TelephonyDirectoryModifyPublication::setDisplayFirstName()
     * @uses TelephonyDirectoryModifyPublication::setDisplayOnlyCity()
     * @uses TelephonyDirectoryModifyPublication::setDisplayUniversalDirectory()
     * @uses TelephonyDirectoryModifyPublication::setDisplayMarketingDirectory()
     * @uses TelephonyDirectoryModifyPublication::setDisplaySearchReverse()
     * @uses TelephonyDirectoryModifyPublication::setReceivePJDirectory()
     * @param string $session
     * @param string $callNumber
     * @param string $countryCode
     * @param string $lineDescription
     * @param string $displayFirstName
     * @param string $displayOnlyCity
     * @param string $displayUniversalDirectory
     * @param string $displayMarketingDirectory
     * @param string $displaySearchReverse
     * @param string $receivePJDirectory
     */
    public function __construct($session = null, $callNumber = null, $countryCode = null, $lineDescription = null, $displayFirstName = null, $displayOnlyCity = null, $displayUniversalDirectory = null, $displayMarketingDirectory = null, $displaySearchReverse = null, $receivePJDirectory = null)
    {
        $this
            ->setSession($session)
            ->setCallNumber($callNumber)
            ->setCountryCode($countryCode)
            ->setLineDescription($lineDescription)
            ->setDisplayFirstName($displayFirstName)
            ->setDisplayOnlyCity($displayOnlyCity)
            ->setDisplayUniversalDirectory($displayUniversalDirectory)
            ->setDisplayMarketingDirectory($displayMarketingDirectory)
            ->setDisplaySearchReverse($displaySearchReverse)
            ->setReceivePJDirectory($receivePJDirectory);
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
     * @return \PayPal\StructType\TelephonyDirectoryModifyPublication
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
     * Get callNumber value
     * @return string|null
     */
    public function getCallNumber()
    {
        return $this->callNumber;
    }
    /**
     * Set callNumber value
     * @param string $callNumber
     * @return \PayPal\StructType\TelephonyDirectoryModifyPublication
     */
    public function setCallNumber($callNumber = null)
    {
        // validation for constraint: string
        if (!is_null($callNumber) && !is_string($callNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($callNumber)), __LINE__);
        }
        $this->callNumber = $callNumber;
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
     * @return \PayPal\StructType\TelephonyDirectoryModifyPublication
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
     * Get lineDescription value
     * @return string|null
     */
    public function getLineDescription()
    {
        return $this->lineDescription;
    }
    /**
     * Set lineDescription value
     * @param string $lineDescription
     * @return \PayPal\StructType\TelephonyDirectoryModifyPublication
     */
    public function setLineDescription($lineDescription = null)
    {
        // validation for constraint: string
        if (!is_null($lineDescription) && !is_string($lineDescription)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($lineDescription)), __LINE__);
        }
        $this->lineDescription = $lineDescription;
        return $this;
    }
    /**
     * Get displayFirstName value
     * @return string|null
     */
    public function getDisplayFirstName()
    {
        return $this->displayFirstName;
    }
    /**
     * Set displayFirstName value
     * @param string $displayFirstName
     * @return \PayPal\StructType\TelephonyDirectoryModifyPublication
     */
    public function setDisplayFirstName($displayFirstName = null)
    {
        // validation for constraint: string
        if (!is_null($displayFirstName) && !is_string($displayFirstName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($displayFirstName)), __LINE__);
        }
        $this->displayFirstName = $displayFirstName;
        return $this;
    }
    /**
     * Get displayOnlyCity value
     * @return string|null
     */
    public function getDisplayOnlyCity()
    {
        return $this->displayOnlyCity;
    }
    /**
     * Set displayOnlyCity value
     * @param string $displayOnlyCity
     * @return \PayPal\StructType\TelephonyDirectoryModifyPublication
     */
    public function setDisplayOnlyCity($displayOnlyCity = null)
    {
        // validation for constraint: string
        if (!is_null($displayOnlyCity) && !is_string($displayOnlyCity)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($displayOnlyCity)), __LINE__);
        }
        $this->displayOnlyCity = $displayOnlyCity;
        return $this;
    }
    /**
     * Get displayUniversalDirectory value
     * @return string|null
     */
    public function getDisplayUniversalDirectory()
    {
        return $this->displayUniversalDirectory;
    }
    /**
     * Set displayUniversalDirectory value
     * @param string $displayUniversalDirectory
     * @return \PayPal\StructType\TelephonyDirectoryModifyPublication
     */
    public function setDisplayUniversalDirectory($displayUniversalDirectory = null)
    {
        // validation for constraint: string
        if (!is_null($displayUniversalDirectory) && !is_string($displayUniversalDirectory)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($displayUniversalDirectory)), __LINE__);
        }
        $this->displayUniversalDirectory = $displayUniversalDirectory;
        return $this;
    }
    /**
     * Get displayMarketingDirectory value
     * @return string|null
     */
    public function getDisplayMarketingDirectory()
    {
        return $this->displayMarketingDirectory;
    }
    /**
     * Set displayMarketingDirectory value
     * @param string $displayMarketingDirectory
     * @return \PayPal\StructType\TelephonyDirectoryModifyPublication
     */
    public function setDisplayMarketingDirectory($displayMarketingDirectory = null)
    {
        // validation for constraint: string
        if (!is_null($displayMarketingDirectory) && !is_string($displayMarketingDirectory)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($displayMarketingDirectory)), __LINE__);
        }
        $this->displayMarketingDirectory = $displayMarketingDirectory;
        return $this;
    }
    /**
     * Get displaySearchReverse value
     * @return string|null
     */
    public function getDisplaySearchReverse()
    {
        return $this->displaySearchReverse;
    }
    /**
     * Set displaySearchReverse value
     * @param string $displaySearchReverse
     * @return \PayPal\StructType\TelephonyDirectoryModifyPublication
     */
    public function setDisplaySearchReverse($displaySearchReverse = null)
    {
        // validation for constraint: string
        if (!is_null($displaySearchReverse) && !is_string($displaySearchReverse)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($displaySearchReverse)), __LINE__);
        }
        $this->displaySearchReverse = $displaySearchReverse;
        return $this;
    }
    /**
     * Get receivePJDirectory value
     * @return string|null
     */
    public function getReceivePJDirectory()
    {
        return $this->receivePJDirectory;
    }
    /**
     * Set receivePJDirectory value
     * @param string $receivePJDirectory
     * @return \PayPal\StructType\TelephonyDirectoryModifyPublication
     */
    public function setReceivePJDirectory($receivePJDirectory = null)
    {
        // validation for constraint: string
        if (!is_null($receivePJDirectory) && !is_string($receivePJDirectory)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($receivePJDirectory)), __LINE__);
        }
        $this->receivePJDirectory = $receivePJDirectory;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \PayPal\StructType\TelephonyDirectoryModifyPublication
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
