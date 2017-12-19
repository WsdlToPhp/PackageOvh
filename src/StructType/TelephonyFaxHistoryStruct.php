<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for telephonyFaxHistoryStruct StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class TelephonyFaxHistoryStruct extends AbstractStructBase
{
    /**
     * The id
     * @var int
     */
    public $id;
    /**
     * The relatedNumber
     * @var string
     */
    public $relatedNumber;
    /**
     * The jobid
     * @var int
     */
    public $jobid;
    /**
     * The jobtag
     * @var string
     */
    public $jobtag;
    /**
     * The sender
     * @var string
     */
    public $sender;
    /**
     * The pages
     * @var int
     */
    public $pages;
    /**
     * The quality
     * @var string
     */
    public $quality;
    /**
     * The callTime
     * @var string
     */
    public $callTime;
    /**
     * The date
     * @var string
     */
    public $date;
    /**
     * The state
     * @var string
     */
    public $state;
    /**
     * Constructor method for telephonyFaxHistoryStruct
     * @uses TelephonyFaxHistoryStruct::setId()
     * @uses TelephonyFaxHistoryStruct::setRelatedNumber()
     * @uses TelephonyFaxHistoryStruct::setJobid()
     * @uses TelephonyFaxHistoryStruct::setJobtag()
     * @uses TelephonyFaxHistoryStruct::setSender()
     * @uses TelephonyFaxHistoryStruct::setPages()
     * @uses TelephonyFaxHistoryStruct::setQuality()
     * @uses TelephonyFaxHistoryStruct::setCallTime()
     * @uses TelephonyFaxHistoryStruct::setDate()
     * @uses TelephonyFaxHistoryStruct::setState()
     * @param int $id
     * @param string $relatedNumber
     * @param int $jobid
     * @param string $jobtag
     * @param string $sender
     * @param int $pages
     * @param string $quality
     * @param string $callTime
     * @param string $date
     * @param string $state
     */
    public function __construct($id = null, $relatedNumber = null, $jobid = null, $jobtag = null, $sender = null, $pages = null, $quality = null, $callTime = null, $date = null, $state = null)
    {
        $this
            ->setId($id)
            ->setRelatedNumber($relatedNumber)
            ->setJobid($jobid)
            ->setJobtag($jobtag)
            ->setSender($sender)
            ->setPages($pages)
            ->setQuality($quality)
            ->setCallTime($callTime)
            ->setDate($date)
            ->setState($state);
    }
    /**
     * Get id value
     * @return int|null
     */
    public function getId()
    {
        return $this->id;
    }
    /**
     * Set id value
     * @param int $id
     * @return \Ovh\StructType\TelephonyFaxHistoryStruct
     */
    public function setId($id = null)
    {
        // validation for constraint: int
        if (!is_null($id) && !is_numeric($id)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($id)), __LINE__);
        }
        $this->id = $id;
        return $this;
    }
    /**
     * Get relatedNumber value
     * @return string|null
     */
    public function getRelatedNumber()
    {
        return $this->relatedNumber;
    }
    /**
     * Set relatedNumber value
     * @param string $relatedNumber
     * @return \Ovh\StructType\TelephonyFaxHistoryStruct
     */
    public function setRelatedNumber($relatedNumber = null)
    {
        // validation for constraint: string
        if (!is_null($relatedNumber) && !is_string($relatedNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($relatedNumber)), __LINE__);
        }
        $this->relatedNumber = $relatedNumber;
        return $this;
    }
    /**
     * Get jobid value
     * @return int|null
     */
    public function getJobid()
    {
        return $this->jobid;
    }
    /**
     * Set jobid value
     * @param int $jobid
     * @return \Ovh\StructType\TelephonyFaxHistoryStruct
     */
    public function setJobid($jobid = null)
    {
        // validation for constraint: int
        if (!is_null($jobid) && !is_numeric($jobid)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($jobid)), __LINE__);
        }
        $this->jobid = $jobid;
        return $this;
    }
    /**
     * Get jobtag value
     * @return string|null
     */
    public function getJobtag()
    {
        return $this->jobtag;
    }
    /**
     * Set jobtag value
     * @param string $jobtag
     * @return \Ovh\StructType\TelephonyFaxHistoryStruct
     */
    public function setJobtag($jobtag = null)
    {
        // validation for constraint: string
        if (!is_null($jobtag) && !is_string($jobtag)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($jobtag)), __LINE__);
        }
        $this->jobtag = $jobtag;
        return $this;
    }
    /**
     * Get sender value
     * @return string|null
     */
    public function getSender()
    {
        return $this->sender;
    }
    /**
     * Set sender value
     * @param string $sender
     * @return \Ovh\StructType\TelephonyFaxHistoryStruct
     */
    public function setSender($sender = null)
    {
        // validation for constraint: string
        if (!is_null($sender) && !is_string($sender)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($sender)), __LINE__);
        }
        $this->sender = $sender;
        return $this;
    }
    /**
     * Get pages value
     * @return int|null
     */
    public function getPages()
    {
        return $this->pages;
    }
    /**
     * Set pages value
     * @param int $pages
     * @return \Ovh\StructType\TelephonyFaxHistoryStruct
     */
    public function setPages($pages = null)
    {
        // validation for constraint: int
        if (!is_null($pages) && !is_numeric($pages)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($pages)), __LINE__);
        }
        $this->pages = $pages;
        return $this;
    }
    /**
     * Get quality value
     * @return string|null
     */
    public function getQuality()
    {
        return $this->quality;
    }
    /**
     * Set quality value
     * @param string $quality
     * @return \Ovh\StructType\TelephonyFaxHistoryStruct
     */
    public function setQuality($quality = null)
    {
        // validation for constraint: string
        if (!is_null($quality) && !is_string($quality)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($quality)), __LINE__);
        }
        $this->quality = $quality;
        return $this;
    }
    /**
     * Get callTime value
     * @return string|null
     */
    public function getCallTime()
    {
        return $this->callTime;
    }
    /**
     * Set callTime value
     * @param string $callTime
     * @return \Ovh\StructType\TelephonyFaxHistoryStruct
     */
    public function setCallTime($callTime = null)
    {
        // validation for constraint: string
        if (!is_null($callTime) && !is_string($callTime)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($callTime)), __LINE__);
        }
        $this->callTime = $callTime;
        return $this;
    }
    /**
     * Get date value
     * @return string|null
     */
    public function getDate()
    {
        return $this->date;
    }
    /**
     * Set date value
     * @param string $date
     * @return \Ovh\StructType\TelephonyFaxHistoryStruct
     */
    public function setDate($date = null)
    {
        // validation for constraint: string
        if (!is_null($date) && !is_string($date)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($date)), __LINE__);
        }
        $this->date = $date;
        return $this;
    }
    /**
     * Get state value
     * @return string|null
     */
    public function getState()
    {
        return $this->state;
    }
    /**
     * Set state value
     * @param string $state
     * @return \Ovh\StructType\TelephonyFaxHistoryStruct
     */
    public function setState($state = null)
    {
        // validation for constraint: string
        if (!is_null($state) && !is_string($state)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($state)), __LINE__);
        }
        $this->state = $state;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ovh\StructType\TelephonyFaxHistoryStruct
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
