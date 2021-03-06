<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for telephonyConferenceParamsReturn StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class TelephonyConferenceParamsReturn extends AbstractStructBase
{
    /**
     * The number
     * @var string
     */
    public $number;
    /**
     * The lang
     * @var string
     */
    public $lang;
    /**
     * The pin
     * @var int
     */
    public $pin;
    /**
     * The enterMuted
     * @var bool
     */
    public $enterMuted;
    /**
     * The announceStatus
     * @var bool
     */
    public $announceStatus;
    /**
     * The announceFilename
     * @var string
     */
    public $announceFilename;
    /**
     * The recordStatus
     * @var bool
     */
    public $recordStatus;
    /**
     * The reportStatus
     * @var string
     */
    public $reportStatus;
    /**
     * The reportMail
     * @var string
     */
    public $reportMail;
    /**
     * The eventsHash
     * @var string
     */
    public $eventsHash;
    /**
     * Constructor method for telephonyConferenceParamsReturn
     * @uses TelephonyConferenceParamsReturn::setNumber()
     * @uses TelephonyConferenceParamsReturn::setLang()
     * @uses TelephonyConferenceParamsReturn::setPin()
     * @uses TelephonyConferenceParamsReturn::setEnterMuted()
     * @uses TelephonyConferenceParamsReturn::setAnnounceStatus()
     * @uses TelephonyConferenceParamsReturn::setAnnounceFilename()
     * @uses TelephonyConferenceParamsReturn::setRecordStatus()
     * @uses TelephonyConferenceParamsReturn::setReportStatus()
     * @uses TelephonyConferenceParamsReturn::setReportMail()
     * @uses TelephonyConferenceParamsReturn::setEventsHash()
     * @param string $number
     * @param string $lang
     * @param int $pin
     * @param bool $enterMuted
     * @param bool $announceStatus
     * @param string $announceFilename
     * @param bool $recordStatus
     * @param string $reportStatus
     * @param string $reportMail
     * @param string $eventsHash
     */
    public function __construct($number = null, $lang = null, $pin = null, $enterMuted = null, $announceStatus = null, $announceFilename = null, $recordStatus = null, $reportStatus = null, $reportMail = null, $eventsHash = null)
    {
        $this
            ->setNumber($number)
            ->setLang($lang)
            ->setPin($pin)
            ->setEnterMuted($enterMuted)
            ->setAnnounceStatus($announceStatus)
            ->setAnnounceFilename($announceFilename)
            ->setRecordStatus($recordStatus)
            ->setReportStatus($reportStatus)
            ->setReportMail($reportMail)
            ->setEventsHash($eventsHash);
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
     * @return \Ovh\StructType\TelephonyConferenceParamsReturn
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
     * Get lang value
     * @return string|null
     */
    public function getLang()
    {
        return $this->lang;
    }
    /**
     * Set lang value
     * @param string $lang
     * @return \Ovh\StructType\TelephonyConferenceParamsReturn
     */
    public function setLang($lang = null)
    {
        // validation for constraint: string
        if (!is_null($lang) && !is_string($lang)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($lang, true), gettype($lang)), __LINE__);
        }
        $this->lang = $lang;
        return $this;
    }
    /**
     * Get pin value
     * @return int|null
     */
    public function getPin()
    {
        return $this->pin;
    }
    /**
     * Set pin value
     * @param int $pin
     * @return \Ovh\StructType\TelephonyConferenceParamsReturn
     */
    public function setPin($pin = null)
    {
        // validation for constraint: int
        if (!is_null($pin) && !(is_int($pin) || ctype_digit($pin))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($pin, true), gettype($pin)), __LINE__);
        }
        $this->pin = $pin;
        return $this;
    }
    /**
     * Get enterMuted value
     * @return bool|null
     */
    public function getEnterMuted()
    {
        return $this->enterMuted;
    }
    /**
     * Set enterMuted value
     * @param bool $enterMuted
     * @return \Ovh\StructType\TelephonyConferenceParamsReturn
     */
    public function setEnterMuted($enterMuted = null)
    {
        // validation for constraint: boolean
        if (!is_null($enterMuted) && !is_bool($enterMuted)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($enterMuted, true), gettype($enterMuted)), __LINE__);
        }
        $this->enterMuted = $enterMuted;
        return $this;
    }
    /**
     * Get announceStatus value
     * @return bool|null
     */
    public function getAnnounceStatus()
    {
        return $this->announceStatus;
    }
    /**
     * Set announceStatus value
     * @param bool $announceStatus
     * @return \Ovh\StructType\TelephonyConferenceParamsReturn
     */
    public function setAnnounceStatus($announceStatus = null)
    {
        // validation for constraint: boolean
        if (!is_null($announceStatus) && !is_bool($announceStatus)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($announceStatus, true), gettype($announceStatus)), __LINE__);
        }
        $this->announceStatus = $announceStatus;
        return $this;
    }
    /**
     * Get announceFilename value
     * @return string|null
     */
    public function getAnnounceFilename()
    {
        return $this->announceFilename;
    }
    /**
     * Set announceFilename value
     * @param string $announceFilename
     * @return \Ovh\StructType\TelephonyConferenceParamsReturn
     */
    public function setAnnounceFilename($announceFilename = null)
    {
        // validation for constraint: string
        if (!is_null($announceFilename) && !is_string($announceFilename)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($announceFilename, true), gettype($announceFilename)), __LINE__);
        }
        $this->announceFilename = $announceFilename;
        return $this;
    }
    /**
     * Get recordStatus value
     * @return bool|null
     */
    public function getRecordStatus()
    {
        return $this->recordStatus;
    }
    /**
     * Set recordStatus value
     * @param bool $recordStatus
     * @return \Ovh\StructType\TelephonyConferenceParamsReturn
     */
    public function setRecordStatus($recordStatus = null)
    {
        // validation for constraint: boolean
        if (!is_null($recordStatus) && !is_bool($recordStatus)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($recordStatus, true), gettype($recordStatus)), __LINE__);
        }
        $this->recordStatus = $recordStatus;
        return $this;
    }
    /**
     * Get reportStatus value
     * @return string|null
     */
    public function getReportStatus()
    {
        return $this->reportStatus;
    }
    /**
     * Set reportStatus value
     * @param string $reportStatus
     * @return \Ovh\StructType\TelephonyConferenceParamsReturn
     */
    public function setReportStatus($reportStatus = null)
    {
        // validation for constraint: string
        if (!is_null($reportStatus) && !is_string($reportStatus)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($reportStatus, true), gettype($reportStatus)), __LINE__);
        }
        $this->reportStatus = $reportStatus;
        return $this;
    }
    /**
     * Get reportMail value
     * @return string|null
     */
    public function getReportMail()
    {
        return $this->reportMail;
    }
    /**
     * Set reportMail value
     * @param string $reportMail
     * @return \Ovh\StructType\TelephonyConferenceParamsReturn
     */
    public function setReportMail($reportMail = null)
    {
        // validation for constraint: string
        if (!is_null($reportMail) && !is_string($reportMail)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($reportMail, true), gettype($reportMail)), __LINE__);
        }
        $this->reportMail = $reportMail;
        return $this;
    }
    /**
     * Get eventsHash value
     * @return string|null
     */
    public function getEventsHash()
    {
        return $this->eventsHash;
    }
    /**
     * Set eventsHash value
     * @param string $eventsHash
     * @return \Ovh\StructType\TelephonyConferenceParamsReturn
     */
    public function setEventsHash($eventsHash = null)
    {
        // validation for constraint: string
        if (!is_null($eventsHash) && !is_string($eventsHash)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($eventsHash, true), gettype($eventsHash)), __LINE__);
        }
        $this->eventsHash = $eventsHash;
        return $this;
    }
}
