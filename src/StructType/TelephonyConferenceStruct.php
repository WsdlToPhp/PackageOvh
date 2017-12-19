<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for telephonyConferenceStruct StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class TelephonyConferenceStruct extends AbstractStructBase
{
    /**
     * The room
     * @var string
     */
    public $room;
    /**
     * The countryCode
     * @var string
     */
    public $countryCode;
    /**
     * The callNumber
     * @var string
     */
    public $callNumber;
    /**
     * The language
     * @var string
     */
    public $language;
    /**
     * The customAnnounce
     * @var bool
     */
    public $customAnnounce;
    /**
     * The recordAnnounce
     * @var bool
     */
    public $recordAnnounce;
    /**
     * The mailReport
     * @var bool
     */
    public $mailReport;
    /**
     * The customMailReportAddress
     * @var string
     */
    public $customMailReportAddress;
    /**
     * The askName
     * @var bool
     */
    public $askName;
    /**
     * The tellMemberCount
     * @var bool
     */
    public $tellMemberCount;
    /**
     * The moderatorCountryCode
     * @var string
     */
    public $moderatorCountryCode;
    /**
     * The moderatorCallNumber
     * @var string
     */
    public $moderatorCallNumber;
    /**
     * The status
     * @var string
     */
    public $status;
    /**
     * The dtmfmenu
     * @var bool
     */
    public $dtmfmenu;
    /**
     * The announce_rcv
     * @var bool
     */
    public $announce_rcv;
    /**
     * The announce_snd
     * @var bool
     */
    public $announce_snd;
    /**
     * The recordConf
     * @var bool
     */
    public $recordConf;
    /**
     * Constructor method for telephonyConferenceStruct
     * @uses TelephonyConferenceStruct::setRoom()
     * @uses TelephonyConferenceStruct::setCountryCode()
     * @uses TelephonyConferenceStruct::setCallNumber()
     * @uses TelephonyConferenceStruct::setLanguage()
     * @uses TelephonyConferenceStruct::setCustomAnnounce()
     * @uses TelephonyConferenceStruct::setRecordAnnounce()
     * @uses TelephonyConferenceStruct::setMailReport()
     * @uses TelephonyConferenceStruct::setCustomMailReportAddress()
     * @uses TelephonyConferenceStruct::setAskName()
     * @uses TelephonyConferenceStruct::setTellMemberCount()
     * @uses TelephonyConferenceStruct::setModeratorCountryCode()
     * @uses TelephonyConferenceStruct::setModeratorCallNumber()
     * @uses TelephonyConferenceStruct::setStatus()
     * @uses TelephonyConferenceStruct::setDtmfmenu()
     * @uses TelephonyConferenceStruct::setAnnounce_rcv()
     * @uses TelephonyConferenceStruct::setAnnounce_snd()
     * @uses TelephonyConferenceStruct::setRecordConf()
     * @param string $room
     * @param string $countryCode
     * @param string $callNumber
     * @param string $language
     * @param bool $customAnnounce
     * @param bool $recordAnnounce
     * @param bool $mailReport
     * @param string $customMailReportAddress
     * @param bool $askName
     * @param bool $tellMemberCount
     * @param string $moderatorCountryCode
     * @param string $moderatorCallNumber
     * @param string $status
     * @param bool $dtmfmenu
     * @param bool $announce_rcv
     * @param bool $announce_snd
     * @param bool $recordConf
     */
    public function __construct($room = null, $countryCode = null, $callNumber = null, $language = null, $customAnnounce = null, $recordAnnounce = null, $mailReport = null, $customMailReportAddress = null, $askName = null, $tellMemberCount = null, $moderatorCountryCode = null, $moderatorCallNumber = null, $status = null, $dtmfmenu = null, $announce_rcv = null, $announce_snd = null, $recordConf = null)
    {
        $this
            ->setRoom($room)
            ->setCountryCode($countryCode)
            ->setCallNumber($callNumber)
            ->setLanguage($language)
            ->setCustomAnnounce($customAnnounce)
            ->setRecordAnnounce($recordAnnounce)
            ->setMailReport($mailReport)
            ->setCustomMailReportAddress($customMailReportAddress)
            ->setAskName($askName)
            ->setTellMemberCount($tellMemberCount)
            ->setModeratorCountryCode($moderatorCountryCode)
            ->setModeratorCallNumber($moderatorCallNumber)
            ->setStatus($status)
            ->setDtmfmenu($dtmfmenu)
            ->setAnnounce_rcv($announce_rcv)
            ->setAnnounce_snd($announce_snd)
            ->setRecordConf($recordConf);
    }
    /**
     * Get room value
     * @return string|null
     */
    public function getRoom()
    {
        return $this->room;
    }
    /**
     * Set room value
     * @param string $room
     * @return \Ovh\StructType\TelephonyConferenceStruct
     */
    public function setRoom($room = null)
    {
        // validation for constraint: string
        if (!is_null($room) && !is_string($room)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($room)), __LINE__);
        }
        $this->room = $room;
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
     * @return \Ovh\StructType\TelephonyConferenceStruct
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
     * @return \Ovh\StructType\TelephonyConferenceStruct
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
     * @return \Ovh\StructType\TelephonyConferenceStruct
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
     * Get customAnnounce value
     * @return bool|null
     */
    public function getCustomAnnounce()
    {
        return $this->customAnnounce;
    }
    /**
     * Set customAnnounce value
     * @param bool $customAnnounce
     * @return \Ovh\StructType\TelephonyConferenceStruct
     */
    public function setCustomAnnounce($customAnnounce = null)
    {
        // validation for constraint: boolean
        if (!is_null($customAnnounce) && !is_bool($customAnnounce)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($customAnnounce)), __LINE__);
        }
        $this->customAnnounce = $customAnnounce;
        return $this;
    }
    /**
     * Get recordAnnounce value
     * @return bool|null
     */
    public function getRecordAnnounce()
    {
        return $this->recordAnnounce;
    }
    /**
     * Set recordAnnounce value
     * @param bool $recordAnnounce
     * @return \Ovh\StructType\TelephonyConferenceStruct
     */
    public function setRecordAnnounce($recordAnnounce = null)
    {
        // validation for constraint: boolean
        if (!is_null($recordAnnounce) && !is_bool($recordAnnounce)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($recordAnnounce)), __LINE__);
        }
        $this->recordAnnounce = $recordAnnounce;
        return $this;
    }
    /**
     * Get mailReport value
     * @return bool|null
     */
    public function getMailReport()
    {
        return $this->mailReport;
    }
    /**
     * Set mailReport value
     * @param bool $mailReport
     * @return \Ovh\StructType\TelephonyConferenceStruct
     */
    public function setMailReport($mailReport = null)
    {
        // validation for constraint: boolean
        if (!is_null($mailReport) && !is_bool($mailReport)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($mailReport)), __LINE__);
        }
        $this->mailReport = $mailReport;
        return $this;
    }
    /**
     * Get customMailReportAddress value
     * @return string|null
     */
    public function getCustomMailReportAddress()
    {
        return $this->customMailReportAddress;
    }
    /**
     * Set customMailReportAddress value
     * @param string $customMailReportAddress
     * @return \Ovh\StructType\TelephonyConferenceStruct
     */
    public function setCustomMailReportAddress($customMailReportAddress = null)
    {
        // validation for constraint: string
        if (!is_null($customMailReportAddress) && !is_string($customMailReportAddress)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($customMailReportAddress)), __LINE__);
        }
        $this->customMailReportAddress = $customMailReportAddress;
        return $this;
    }
    /**
     * Get askName value
     * @return bool|null
     */
    public function getAskName()
    {
        return $this->askName;
    }
    /**
     * Set askName value
     * @param bool $askName
     * @return \Ovh\StructType\TelephonyConferenceStruct
     */
    public function setAskName($askName = null)
    {
        // validation for constraint: boolean
        if (!is_null($askName) && !is_bool($askName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($askName)), __LINE__);
        }
        $this->askName = $askName;
        return $this;
    }
    /**
     * Get tellMemberCount value
     * @return bool|null
     */
    public function getTellMemberCount()
    {
        return $this->tellMemberCount;
    }
    /**
     * Set tellMemberCount value
     * @param bool $tellMemberCount
     * @return \Ovh\StructType\TelephonyConferenceStruct
     */
    public function setTellMemberCount($tellMemberCount = null)
    {
        // validation for constraint: boolean
        if (!is_null($tellMemberCount) && !is_bool($tellMemberCount)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($tellMemberCount)), __LINE__);
        }
        $this->tellMemberCount = $tellMemberCount;
        return $this;
    }
    /**
     * Get moderatorCountryCode value
     * @return string|null
     */
    public function getModeratorCountryCode()
    {
        return $this->moderatorCountryCode;
    }
    /**
     * Set moderatorCountryCode value
     * @param string $moderatorCountryCode
     * @return \Ovh\StructType\TelephonyConferenceStruct
     */
    public function setModeratorCountryCode($moderatorCountryCode = null)
    {
        // validation for constraint: string
        if (!is_null($moderatorCountryCode) && !is_string($moderatorCountryCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($moderatorCountryCode)), __LINE__);
        }
        $this->moderatorCountryCode = $moderatorCountryCode;
        return $this;
    }
    /**
     * Get moderatorCallNumber value
     * @return string|null
     */
    public function getModeratorCallNumber()
    {
        return $this->moderatorCallNumber;
    }
    /**
     * Set moderatorCallNumber value
     * @param string $moderatorCallNumber
     * @return \Ovh\StructType\TelephonyConferenceStruct
     */
    public function setModeratorCallNumber($moderatorCallNumber = null)
    {
        // validation for constraint: string
        if (!is_null($moderatorCallNumber) && !is_string($moderatorCallNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($moderatorCallNumber)), __LINE__);
        }
        $this->moderatorCallNumber = $moderatorCallNumber;
        return $this;
    }
    /**
     * Get status value
     * @return string|null
     */
    public function getStatus()
    {
        return $this->status;
    }
    /**
     * Set status value
     * @param string $status
     * @return \Ovh\StructType\TelephonyConferenceStruct
     */
    public function setStatus($status = null)
    {
        // validation for constraint: string
        if (!is_null($status) && !is_string($status)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($status)), __LINE__);
        }
        $this->status = $status;
        return $this;
    }
    /**
     * Get dtmfmenu value
     * @return bool|null
     */
    public function getDtmfmenu()
    {
        return $this->dtmfmenu;
    }
    /**
     * Set dtmfmenu value
     * @param bool $dtmfmenu
     * @return \Ovh\StructType\TelephonyConferenceStruct
     */
    public function setDtmfmenu($dtmfmenu = null)
    {
        // validation for constraint: boolean
        if (!is_null($dtmfmenu) && !is_bool($dtmfmenu)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($dtmfmenu)), __LINE__);
        }
        $this->dtmfmenu = $dtmfmenu;
        return $this;
    }
    /**
     * Get announce_rcv value
     * @return bool|null
     */
    public function getAnnounce_rcv()
    {
        return $this->announce_rcv;
    }
    /**
     * Set announce_rcv value
     * @param bool $announce_rcv
     * @return \Ovh\StructType\TelephonyConferenceStruct
     */
    public function setAnnounce_rcv($announce_rcv = null)
    {
        // validation for constraint: boolean
        if (!is_null($announce_rcv) && !is_bool($announce_rcv)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($announce_rcv)), __LINE__);
        }
        $this->announce_rcv = $announce_rcv;
        return $this;
    }
    /**
     * Get announce_snd value
     * @return bool|null
     */
    public function getAnnounce_snd()
    {
        return $this->announce_snd;
    }
    /**
     * Set announce_snd value
     * @param bool $announce_snd
     * @return \Ovh\StructType\TelephonyConferenceStruct
     */
    public function setAnnounce_snd($announce_snd = null)
    {
        // validation for constraint: boolean
        if (!is_null($announce_snd) && !is_bool($announce_snd)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($announce_snd)), __LINE__);
        }
        $this->announce_snd = $announce_snd;
        return $this;
    }
    /**
     * Get recordConf value
     * @return bool|null
     */
    public function getRecordConf()
    {
        return $this->recordConf;
    }
    /**
     * Set recordConf value
     * @param bool $recordConf
     * @return \Ovh\StructType\TelephonyConferenceStruct
     */
    public function setRecordConf($recordConf = null)
    {
        // validation for constraint: boolean
        if (!is_null($recordConf) && !is_bool($recordConf)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($recordConf)), __LINE__);
        }
        $this->recordConf = $recordConf;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ovh\StructType\TelephonyConferenceStruct
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
