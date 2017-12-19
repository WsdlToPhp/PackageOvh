<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for telephonyFaxOptionsListReturn StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class TelephonyFaxOptionsListReturn extends AbstractStructBase
{
    /**
     * The callNumber
     * @var string
     */
    public $callNumber;
    /**
     * The countryCode
     * @var string
     */
    public $countryCode;
    /**
     * The fromName
     * @var string
     */
    public $fromName;
    /**
     * The fromEmail
     * @var string
     */
    public $fromEmail;
    /**
     * The faxQuality
     * @var string
     */
    public $faxQuality;
    /**
     * The faxTagLine
     * @var string
     */
    public $faxTagLine;
    /**
     * The faxMaxCall
     * @var int
     */
    public $faxMaxCall;
    /**
     * The receivId
     * @var string
     */
    public $receivId;
    /**
     * The senderId
     * @var string
     */
    public $senderId;
    /**
     * The redirection1Email
     * @var string
     */
    public $redirection1Email;
    /**
     * The redirection2Email
     * @var string
     */
    public $redirection2Email;
    /**
     * The redirection3Email
     * @var string
     */
    public $redirection3Email;
    /**
     * The redirection4Email
     * @var string
     */
    public $redirection4Email;
    /**
     * The redirection5Email
     * @var string
     */
    public $redirection5Email;
    /**
     * Constructor method for telephonyFaxOptionsListReturn
     * @uses TelephonyFaxOptionsListReturn::setCallNumber()
     * @uses TelephonyFaxOptionsListReturn::setCountryCode()
     * @uses TelephonyFaxOptionsListReturn::setFromName()
     * @uses TelephonyFaxOptionsListReturn::setFromEmail()
     * @uses TelephonyFaxOptionsListReturn::setFaxQuality()
     * @uses TelephonyFaxOptionsListReturn::setFaxTagLine()
     * @uses TelephonyFaxOptionsListReturn::setFaxMaxCall()
     * @uses TelephonyFaxOptionsListReturn::setReceivId()
     * @uses TelephonyFaxOptionsListReturn::setSenderId()
     * @uses TelephonyFaxOptionsListReturn::setRedirection1Email()
     * @uses TelephonyFaxOptionsListReturn::setRedirection2Email()
     * @uses TelephonyFaxOptionsListReturn::setRedirection3Email()
     * @uses TelephonyFaxOptionsListReturn::setRedirection4Email()
     * @uses TelephonyFaxOptionsListReturn::setRedirection5Email()
     * @param string $callNumber
     * @param string $countryCode
     * @param string $fromName
     * @param string $fromEmail
     * @param string $faxQuality
     * @param string $faxTagLine
     * @param int $faxMaxCall
     * @param string $receivId
     * @param string $senderId
     * @param string $redirection1Email
     * @param string $redirection2Email
     * @param string $redirection3Email
     * @param string $redirection4Email
     * @param string $redirection5Email
     */
    public function __construct($callNumber = null, $countryCode = null, $fromName = null, $fromEmail = null, $faxQuality = null, $faxTagLine = null, $faxMaxCall = null, $receivId = null, $senderId = null, $redirection1Email = null, $redirection2Email = null, $redirection3Email = null, $redirection4Email = null, $redirection5Email = null)
    {
        $this
            ->setCallNumber($callNumber)
            ->setCountryCode($countryCode)
            ->setFromName($fromName)
            ->setFromEmail($fromEmail)
            ->setFaxQuality($faxQuality)
            ->setFaxTagLine($faxTagLine)
            ->setFaxMaxCall($faxMaxCall)
            ->setReceivId($receivId)
            ->setSenderId($senderId)
            ->setRedirection1Email($redirection1Email)
            ->setRedirection2Email($redirection2Email)
            ->setRedirection3Email($redirection3Email)
            ->setRedirection4Email($redirection4Email)
            ->setRedirection5Email($redirection5Email);
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
     * @return \Ovh\StructType\TelephonyFaxOptionsListReturn
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
     * @return \Ovh\StructType\TelephonyFaxOptionsListReturn
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
     * Get fromName value
     * @return string|null
     */
    public function getFromName()
    {
        return $this->fromName;
    }
    /**
     * Set fromName value
     * @param string $fromName
     * @return \Ovh\StructType\TelephonyFaxOptionsListReturn
     */
    public function setFromName($fromName = null)
    {
        // validation for constraint: string
        if (!is_null($fromName) && !is_string($fromName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($fromName)), __LINE__);
        }
        $this->fromName = $fromName;
        return $this;
    }
    /**
     * Get fromEmail value
     * @return string|null
     */
    public function getFromEmail()
    {
        return $this->fromEmail;
    }
    /**
     * Set fromEmail value
     * @param string $fromEmail
     * @return \Ovh\StructType\TelephonyFaxOptionsListReturn
     */
    public function setFromEmail($fromEmail = null)
    {
        // validation for constraint: string
        if (!is_null($fromEmail) && !is_string($fromEmail)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($fromEmail)), __LINE__);
        }
        $this->fromEmail = $fromEmail;
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
     * @return \Ovh\StructType\TelephonyFaxOptionsListReturn
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
     * Get faxTagLine value
     * @return string|null
     */
    public function getFaxTagLine()
    {
        return $this->faxTagLine;
    }
    /**
     * Set faxTagLine value
     * @param string $faxTagLine
     * @return \Ovh\StructType\TelephonyFaxOptionsListReturn
     */
    public function setFaxTagLine($faxTagLine = null)
    {
        // validation for constraint: string
        if (!is_null($faxTagLine) && !is_string($faxTagLine)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($faxTagLine)), __LINE__);
        }
        $this->faxTagLine = $faxTagLine;
        return $this;
    }
    /**
     * Get faxMaxCall value
     * @return int|null
     */
    public function getFaxMaxCall()
    {
        return $this->faxMaxCall;
    }
    /**
     * Set faxMaxCall value
     * @param int $faxMaxCall
     * @return \Ovh\StructType\TelephonyFaxOptionsListReturn
     */
    public function setFaxMaxCall($faxMaxCall = null)
    {
        // validation for constraint: int
        if (!is_null($faxMaxCall) && !is_numeric($faxMaxCall)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($faxMaxCall)), __LINE__);
        }
        $this->faxMaxCall = $faxMaxCall;
        return $this;
    }
    /**
     * Get receivId value
     * @return string|null
     */
    public function getReceivId()
    {
        return $this->receivId;
    }
    /**
     * Set receivId value
     * @param string $receivId
     * @return \Ovh\StructType\TelephonyFaxOptionsListReturn
     */
    public function setReceivId($receivId = null)
    {
        // validation for constraint: string
        if (!is_null($receivId) && !is_string($receivId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($receivId)), __LINE__);
        }
        $this->receivId = $receivId;
        return $this;
    }
    /**
     * Get senderId value
     * @return string|null
     */
    public function getSenderId()
    {
        return $this->senderId;
    }
    /**
     * Set senderId value
     * @param string $senderId
     * @return \Ovh\StructType\TelephonyFaxOptionsListReturn
     */
    public function setSenderId($senderId = null)
    {
        // validation for constraint: string
        if (!is_null($senderId) && !is_string($senderId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($senderId)), __LINE__);
        }
        $this->senderId = $senderId;
        return $this;
    }
    /**
     * Get redirection1Email value
     * @return string|null
     */
    public function getRedirection1Email()
    {
        return $this->redirection1Email;
    }
    /**
     * Set redirection1Email value
     * @param string $redirection1Email
     * @return \Ovh\StructType\TelephonyFaxOptionsListReturn
     */
    public function setRedirection1Email($redirection1Email = null)
    {
        // validation for constraint: string
        if (!is_null($redirection1Email) && !is_string($redirection1Email)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($redirection1Email)), __LINE__);
        }
        $this->redirection1Email = $redirection1Email;
        return $this;
    }
    /**
     * Get redirection2Email value
     * @return string|null
     */
    public function getRedirection2Email()
    {
        return $this->redirection2Email;
    }
    /**
     * Set redirection2Email value
     * @param string $redirection2Email
     * @return \Ovh\StructType\TelephonyFaxOptionsListReturn
     */
    public function setRedirection2Email($redirection2Email = null)
    {
        // validation for constraint: string
        if (!is_null($redirection2Email) && !is_string($redirection2Email)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($redirection2Email)), __LINE__);
        }
        $this->redirection2Email = $redirection2Email;
        return $this;
    }
    /**
     * Get redirection3Email value
     * @return string|null
     */
    public function getRedirection3Email()
    {
        return $this->redirection3Email;
    }
    /**
     * Set redirection3Email value
     * @param string $redirection3Email
     * @return \Ovh\StructType\TelephonyFaxOptionsListReturn
     */
    public function setRedirection3Email($redirection3Email = null)
    {
        // validation for constraint: string
        if (!is_null($redirection3Email) && !is_string($redirection3Email)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($redirection3Email)), __LINE__);
        }
        $this->redirection3Email = $redirection3Email;
        return $this;
    }
    /**
     * Get redirection4Email value
     * @return string|null
     */
    public function getRedirection4Email()
    {
        return $this->redirection4Email;
    }
    /**
     * Set redirection4Email value
     * @param string $redirection4Email
     * @return \Ovh\StructType\TelephonyFaxOptionsListReturn
     */
    public function setRedirection4Email($redirection4Email = null)
    {
        // validation for constraint: string
        if (!is_null($redirection4Email) && !is_string($redirection4Email)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($redirection4Email)), __LINE__);
        }
        $this->redirection4Email = $redirection4Email;
        return $this;
    }
    /**
     * Get redirection5Email value
     * @return string|null
     */
    public function getRedirection5Email()
    {
        return $this->redirection5Email;
    }
    /**
     * Set redirection5Email value
     * @param string $redirection5Email
     * @return \Ovh\StructType\TelephonyFaxOptionsListReturn
     */
    public function setRedirection5Email($redirection5Email = null)
    {
        // validation for constraint: string
        if (!is_null($redirection5Email) && !is_string($redirection5Email)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($redirection5Email)), __LINE__);
        }
        $this->redirection5Email = $redirection5Email;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ovh\StructType\TelephonyFaxOptionsListReturn
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
