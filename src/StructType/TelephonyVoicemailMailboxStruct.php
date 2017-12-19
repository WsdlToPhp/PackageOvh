<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for telephonyVoicemailMailboxStruct StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class TelephonyVoicemailMailboxStruct extends AbstractStructBase
{
    /**
     * The id
     * @var string
     */
    public $id;
    /**
     * The callerid
     * @var string
     */
    public $callerid;
    /**
     * The origdate
     * @var string
     */
    public $origdate;
    /**
     * The origtime
     * @var string
     */
    public $origtime;
    /**
     * The origmailbox
     * @var string
     */
    public $origmailbox;
    /**
     * The duration
     * @var int
     */
    public $duration;
    /**
     * The folder
     * @var string
     */
    public $folder;
    /**
     * The url
     * @var string
     */
    public $url;
    /**
     * Constructor method for telephonyVoicemailMailboxStruct
     * @uses TelephonyVoicemailMailboxStruct::setId()
     * @uses TelephonyVoicemailMailboxStruct::setCallerid()
     * @uses TelephonyVoicemailMailboxStruct::setOrigdate()
     * @uses TelephonyVoicemailMailboxStruct::setOrigtime()
     * @uses TelephonyVoicemailMailboxStruct::setOrigmailbox()
     * @uses TelephonyVoicemailMailboxStruct::setDuration()
     * @uses TelephonyVoicemailMailboxStruct::setFolder()
     * @uses TelephonyVoicemailMailboxStruct::setUrl()
     * @param string $id
     * @param string $callerid
     * @param string $origdate
     * @param string $origtime
     * @param string $origmailbox
     * @param int $duration
     * @param string $folder
     * @param string $url
     */
    public function __construct($id = null, $callerid = null, $origdate = null, $origtime = null, $origmailbox = null, $duration = null, $folder = null, $url = null)
    {
        $this
            ->setId($id)
            ->setCallerid($callerid)
            ->setOrigdate($origdate)
            ->setOrigtime($origtime)
            ->setOrigmailbox($origmailbox)
            ->setDuration($duration)
            ->setFolder($folder)
            ->setUrl($url);
    }
    /**
     * Get id value
     * @return string|null
     */
    public function getId()
    {
        return $this->id;
    }
    /**
     * Set id value
     * @param string $id
     * @return \PayPal\StructType\TelephonyVoicemailMailboxStruct
     */
    public function setId($id = null)
    {
        // validation for constraint: string
        if (!is_null($id) && !is_string($id)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($id)), __LINE__);
        }
        $this->id = $id;
        return $this;
    }
    /**
     * Get callerid value
     * @return string|null
     */
    public function getCallerid()
    {
        return $this->callerid;
    }
    /**
     * Set callerid value
     * @param string $callerid
     * @return \PayPal\StructType\TelephonyVoicemailMailboxStruct
     */
    public function setCallerid($callerid = null)
    {
        // validation for constraint: string
        if (!is_null($callerid) && !is_string($callerid)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($callerid)), __LINE__);
        }
        $this->callerid = $callerid;
        return $this;
    }
    /**
     * Get origdate value
     * @return string|null
     */
    public function getOrigdate()
    {
        return $this->origdate;
    }
    /**
     * Set origdate value
     * @param string $origdate
     * @return \PayPal\StructType\TelephonyVoicemailMailboxStruct
     */
    public function setOrigdate($origdate = null)
    {
        // validation for constraint: string
        if (!is_null($origdate) && !is_string($origdate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($origdate)), __LINE__);
        }
        $this->origdate = $origdate;
        return $this;
    }
    /**
     * Get origtime value
     * @return string|null
     */
    public function getOrigtime()
    {
        return $this->origtime;
    }
    /**
     * Set origtime value
     * @param string $origtime
     * @return \PayPal\StructType\TelephonyVoicemailMailboxStruct
     */
    public function setOrigtime($origtime = null)
    {
        // validation for constraint: string
        if (!is_null($origtime) && !is_string($origtime)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($origtime)), __LINE__);
        }
        $this->origtime = $origtime;
        return $this;
    }
    /**
     * Get origmailbox value
     * @return string|null
     */
    public function getOrigmailbox()
    {
        return $this->origmailbox;
    }
    /**
     * Set origmailbox value
     * @param string $origmailbox
     * @return \PayPal\StructType\TelephonyVoicemailMailboxStruct
     */
    public function setOrigmailbox($origmailbox = null)
    {
        // validation for constraint: string
        if (!is_null($origmailbox) && !is_string($origmailbox)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($origmailbox)), __LINE__);
        }
        $this->origmailbox = $origmailbox;
        return $this;
    }
    /**
     * Get duration value
     * @return int|null
     */
    public function getDuration()
    {
        return $this->duration;
    }
    /**
     * Set duration value
     * @param int $duration
     * @return \PayPal\StructType\TelephonyVoicemailMailboxStruct
     */
    public function setDuration($duration = null)
    {
        // validation for constraint: int
        if (!is_null($duration) && !is_numeric($duration)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($duration)), __LINE__);
        }
        $this->duration = $duration;
        return $this;
    }
    /**
     * Get folder value
     * @return string|null
     */
    public function getFolder()
    {
        return $this->folder;
    }
    /**
     * Set folder value
     * @param string $folder
     * @return \PayPal\StructType\TelephonyVoicemailMailboxStruct
     */
    public function setFolder($folder = null)
    {
        // validation for constraint: string
        if (!is_null($folder) && !is_string($folder)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($folder)), __LINE__);
        }
        $this->folder = $folder;
        return $this;
    }
    /**
     * Get url value
     * @return string|null
     */
    public function getUrl()
    {
        return $this->url;
    }
    /**
     * Set url value
     * @param string $url
     * @return \PayPal\StructType\TelephonyVoicemailMailboxStruct
     */
    public function setUrl($url = null)
    {
        // validation for constraint: string
        if (!is_null($url) && !is_string($url)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($url)), __LINE__);
        }
        $this->url = $url;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \PayPal\StructType\TelephonyVoicemailMailboxStruct
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
