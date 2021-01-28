<?php

namespace Ovh\StructType;

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
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $session;
    /**
     * The callNumber
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $callNumber;
    /**
     * The countryCode
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $countryCode;
    /**
     * The lineDescription
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $lineDescription;
    /**
     * The displayFirstName
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $displayFirstName;
    /**
     * The displayOnlyCity
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $displayOnlyCity;
    /**
     * The displayUniversalDirectory
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $displayUniversalDirectory;
    /**
     * The displayMarketingDirectory
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $displayMarketingDirectory;
    /**
     * The displaySearchReverse
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $displaySearchReverse;
    /**
     * The receivePJDirectory
     * Meta information extracted from the WSDL
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
     * @return \Ovh\StructType\TelephonyDirectoryModifyPublication
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
     * @return \Ovh\StructType\TelephonyDirectoryModifyPublication
     */
    public function setCallNumber($callNumber = null)
    {
        // validation for constraint: string
        if (!is_null($callNumber) && !is_string($callNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($callNumber, true), gettype($callNumber)), __LINE__);
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
     * @return \Ovh\StructType\TelephonyDirectoryModifyPublication
     */
    public function setCountryCode($countryCode = null)
    {
        // validation for constraint: string
        if (!is_null($countryCode) && !is_string($countryCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($countryCode, true), gettype($countryCode)), __LINE__);
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
     * @return \Ovh\StructType\TelephonyDirectoryModifyPublication
     */
    public function setLineDescription($lineDescription = null)
    {
        // validation for constraint: string
        if (!is_null($lineDescription) && !is_string($lineDescription)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($lineDescription, true), gettype($lineDescription)), __LINE__);
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
     * @return \Ovh\StructType\TelephonyDirectoryModifyPublication
     */
    public function setDisplayFirstName($displayFirstName = null)
    {
        // validation for constraint: string
        if (!is_null($displayFirstName) && !is_string($displayFirstName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($displayFirstName, true), gettype($displayFirstName)), __LINE__);
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
     * @return \Ovh\StructType\TelephonyDirectoryModifyPublication
     */
    public function setDisplayOnlyCity($displayOnlyCity = null)
    {
        // validation for constraint: string
        if (!is_null($displayOnlyCity) && !is_string($displayOnlyCity)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($displayOnlyCity, true), gettype($displayOnlyCity)), __LINE__);
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
     * @return \Ovh\StructType\TelephonyDirectoryModifyPublication
     */
    public function setDisplayUniversalDirectory($displayUniversalDirectory = null)
    {
        // validation for constraint: string
        if (!is_null($displayUniversalDirectory) && !is_string($displayUniversalDirectory)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($displayUniversalDirectory, true), gettype($displayUniversalDirectory)), __LINE__);
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
     * @return \Ovh\StructType\TelephonyDirectoryModifyPublication
     */
    public function setDisplayMarketingDirectory($displayMarketingDirectory = null)
    {
        // validation for constraint: string
        if (!is_null($displayMarketingDirectory) && !is_string($displayMarketingDirectory)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($displayMarketingDirectory, true), gettype($displayMarketingDirectory)), __LINE__);
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
     * @return \Ovh\StructType\TelephonyDirectoryModifyPublication
     */
    public function setDisplaySearchReverse($displaySearchReverse = null)
    {
        // validation for constraint: string
        if (!is_null($displaySearchReverse) && !is_string($displaySearchReverse)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($displaySearchReverse, true), gettype($displaySearchReverse)), __LINE__);
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
     * @return \Ovh\StructType\TelephonyDirectoryModifyPublication
     */
    public function setReceivePJDirectory($receivePJDirectory = null)
    {
        // validation for constraint: string
        if (!is_null($receivePJDirectory) && !is_string($receivePJDirectory)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($receivePJDirectory, true), gettype($receivePJDirectory)), __LINE__);
        }
        $this->receivePJDirectory = $receivePJDirectory;
        return $this;
    }
}
