<?php

namespace Ovh\StructType;

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
     * @return \Ovh\StructType\TelephonyVoicemailMailboxStruct
     */
    public function setId($id = null)
    {
        // validation for constraint: string
        if (!is_null($id) && !is_string($id)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($id, true), gettype($id)), __LINE__);
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
     * @return \Ovh\StructType\TelephonyVoicemailMailboxStruct
     */
    public function setCallerid($callerid = null)
    {
        // validation for constraint: string
        if (!is_null($callerid) && !is_string($callerid)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($callerid, true), gettype($callerid)), __LINE__);
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
     * @return \Ovh\StructType\TelephonyVoicemailMailboxStruct
     */
    public function setOrigdate($origdate = null)
    {
        // validation for constraint: string
        if (!is_null($origdate) && !is_string($origdate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($origdate, true), gettype($origdate)), __LINE__);
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
     * @return \Ovh\StructType\TelephonyVoicemailMailboxStruct
     */
    public function setOrigtime($origtime = null)
    {
        // validation for constraint: string
        if (!is_null($origtime) && !is_string($origtime)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($origtime, true), gettype($origtime)), __LINE__);
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
     * @return \Ovh\StructType\TelephonyVoicemailMailboxStruct
     */
    public function setOrigmailbox($origmailbox = null)
    {
        // validation for constraint: string
        if (!is_null($origmailbox) && !is_string($origmailbox)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($origmailbox, true), gettype($origmailbox)), __LINE__);
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
     * @return \Ovh\StructType\TelephonyVoicemailMailboxStruct
     */
    public function setDuration($duration = null)
    {
        // validation for constraint: int
        if (!is_null($duration) && !(is_int($duration) || ctype_digit($duration))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($duration, true), gettype($duration)), __LINE__);
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
     * @return \Ovh\StructType\TelephonyVoicemailMailboxStruct
     */
    public function setFolder($folder = null)
    {
        // validation for constraint: string
        if (!is_null($folder) && !is_string($folder)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($folder, true), gettype($folder)), __LINE__);
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
     * @return \Ovh\StructType\TelephonyVoicemailMailboxStruct
     */
    public function setUrl($url = null)
    {
        // validation for constraint: string
        if (!is_null($url) && !is_string($url)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($url, true), gettype($url)), __LINE__);
        }
        $this->url = $url;
        return $this;
    }
}
