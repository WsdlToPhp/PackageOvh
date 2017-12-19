<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for telephonyFaxCampaignCreation StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class TelephonyFaxCampaignCreation extends AbstractStructBase
{
    /**
     * The session
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $session;
    /**
     * The number
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $number;
    /**
     * The country
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $country;
    /**
     * The campaignName
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $campaignName;
    /**
     * The pdfUrl
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $pdfUrl;
    /**
     * The pdfName
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $pdfName;
    /**
     * The recipients
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var \Ovh\ArrayType\MyArrayOfStringType
     */
    public $recipients;
    /**
     * The faxQuality
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $faxQuality;
    /**
     * The initialStatus
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $initialStatus;
    /**
     * The launchDate
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $launchDate;
    /**
     * The remoteRecipients
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var bool
     */
    public $remoteRecipients;
    /**
     * Constructor method for telephonyFaxCampaignCreation
     * @uses TelephonyFaxCampaignCreation::setSession()
     * @uses TelephonyFaxCampaignCreation::setNumber()
     * @uses TelephonyFaxCampaignCreation::setCountry()
     * @uses TelephonyFaxCampaignCreation::setCampaignName()
     * @uses TelephonyFaxCampaignCreation::setPdfUrl()
     * @uses TelephonyFaxCampaignCreation::setPdfName()
     * @uses TelephonyFaxCampaignCreation::setRecipients()
     * @uses TelephonyFaxCampaignCreation::setFaxQuality()
     * @uses TelephonyFaxCampaignCreation::setInitialStatus()
     * @uses TelephonyFaxCampaignCreation::setLaunchDate()
     * @uses TelephonyFaxCampaignCreation::setRemoteRecipients()
     * @param string $session
     * @param string $number
     * @param string $country
     * @param string $campaignName
     * @param string $pdfUrl
     * @param string $pdfName
     * @param \Ovh\ArrayType\MyArrayOfStringType $recipients
     * @param string $faxQuality
     * @param string $initialStatus
     * @param string $launchDate
     * @param bool $remoteRecipients
     */
    public function __construct($session = null, $number = null, $country = null, $campaignName = null, $pdfUrl = null, $pdfName = null, \Ovh\ArrayType\MyArrayOfStringType $recipients = null, $faxQuality = null, $initialStatus = null, $launchDate = null, $remoteRecipients = null)
    {
        $this
            ->setSession($session)
            ->setNumber($number)
            ->setCountry($country)
            ->setCampaignName($campaignName)
            ->setPdfUrl($pdfUrl)
            ->setPdfName($pdfName)
            ->setRecipients($recipients)
            ->setFaxQuality($faxQuality)
            ->setInitialStatus($initialStatus)
            ->setLaunchDate($launchDate)
            ->setRemoteRecipients($remoteRecipients);
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
     * @return \Ovh\StructType\TelephonyFaxCampaignCreation
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
     * @return \Ovh\StructType\TelephonyFaxCampaignCreation
     */
    public function setNumber($number = null)
    {
        // validation for constraint: string
        if (!is_null($number) && !is_string($number)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($number)), __LINE__);
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
     * @return \Ovh\StructType\TelephonyFaxCampaignCreation
     */
    public function setCountry($country = null)
    {
        // validation for constraint: string
        if (!is_null($country) && !is_string($country)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($country)), __LINE__);
        }
        $this->country = $country;
        return $this;
    }
    /**
     * Get campaignName value
     * @return string|null
     */
    public function getCampaignName()
    {
        return $this->campaignName;
    }
    /**
     * Set campaignName value
     * @param string $campaignName
     * @return \Ovh\StructType\TelephonyFaxCampaignCreation
     */
    public function setCampaignName($campaignName = null)
    {
        // validation for constraint: string
        if (!is_null($campaignName) && !is_string($campaignName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($campaignName)), __LINE__);
        }
        $this->campaignName = $campaignName;
        return $this;
    }
    /**
     * Get pdfUrl value
     * @return string|null
     */
    public function getPdfUrl()
    {
        return $this->pdfUrl;
    }
    /**
     * Set pdfUrl value
     * @param string $pdfUrl
     * @return \Ovh\StructType\TelephonyFaxCampaignCreation
     */
    public function setPdfUrl($pdfUrl = null)
    {
        // validation for constraint: string
        if (!is_null($pdfUrl) && !is_string($pdfUrl)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($pdfUrl)), __LINE__);
        }
        $this->pdfUrl = $pdfUrl;
        return $this;
    }
    /**
     * Get pdfName value
     * @return string|null
     */
    public function getPdfName()
    {
        return $this->pdfName;
    }
    /**
     * Set pdfName value
     * @param string $pdfName
     * @return \Ovh\StructType\TelephonyFaxCampaignCreation
     */
    public function setPdfName($pdfName = null)
    {
        // validation for constraint: string
        if (!is_null($pdfName) && !is_string($pdfName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($pdfName)), __LINE__);
        }
        $this->pdfName = $pdfName;
        return $this;
    }
    /**
     * Get recipients value
     * @return \Ovh\ArrayType\MyArrayOfStringType|null
     */
    public function getRecipients()
    {
        return $this->recipients;
    }
    /**
     * Set recipients value
     * @param \Ovh\ArrayType\MyArrayOfStringType $recipients
     * @return \Ovh\StructType\TelephonyFaxCampaignCreation
     */
    public function setRecipients(\Ovh\ArrayType\MyArrayOfStringType $recipients = null)
    {
        $this->recipients = $recipients;
        return $this;
    }
    /**
     * Get faxQuality value
     * @return string|null
     */
    public function getFaxQuality()
    {
        return $this->faxQuality;
    }
    /**
     * Set faxQuality value
     * @param string $faxQuality
     * @return \Ovh\StructType\TelephonyFaxCampaignCreation
     */
    public function setFaxQuality($faxQuality = null)
    {
        // validation for constraint: string
        if (!is_null($faxQuality) && !is_string($faxQuality)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($faxQuality)), __LINE__);
        }
        $this->faxQuality = $faxQuality;
        return $this;
    }
    /**
     * Get initialStatus value
     * @return string|null
     */
    public function getInitialStatus()
    {
        return $this->initialStatus;
    }
    /**
     * Set initialStatus value
     * @param string $initialStatus
     * @return \Ovh\StructType\TelephonyFaxCampaignCreation
     */
    public function setInitialStatus($initialStatus = null)
    {
        // validation for constraint: string
        if (!is_null($initialStatus) && !is_string($initialStatus)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($initialStatus)), __LINE__);
        }
        $this->initialStatus = $initialStatus;
        return $this;
    }
    /**
     * Get launchDate value
     * @return string|null
     */
    public function getLaunchDate()
    {
        return $this->launchDate;
    }
    /**
     * Set launchDate value
     * @param string $launchDate
     * @return \Ovh\StructType\TelephonyFaxCampaignCreation
     */
    public function setLaunchDate($launchDate = null)
    {
        // validation for constraint: string
        if (!is_null($launchDate) && !is_string($launchDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($launchDate)), __LINE__);
        }
        $this->launchDate = $launchDate;
        return $this;
    }
    /**
     * Get remoteRecipients value
     * @return bool|null
     */
    public function getRemoteRecipients()
    {
        return $this->remoteRecipients;
    }
    /**
     * Set remoteRecipients value
     * @param bool $remoteRecipients
     * @return \Ovh\StructType\TelephonyFaxCampaignCreation
     */
    public function setRemoteRecipients($remoteRecipients = null)
    {
        // validation for constraint: boolean
        if (!is_null($remoteRecipients) && !is_bool($remoteRecipients)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($remoteRecipients)), __LINE__);
        }
        $this->remoteRecipients = $remoteRecipients;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ovh\StructType\TelephonyFaxCampaignCreation
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
