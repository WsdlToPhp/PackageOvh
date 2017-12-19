<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for supportThreadDetailStruct StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class SupportThreadDetailStruct extends AbstractStructBase
{
    /**
     * The id
     * @var int
     */
    public $id;
    /**
     * The date
     * @var string
     */
    public $date;
    /**
     * The subject
     * @var string
     */
    public $subject;
    /**
     * The domain
     * @var string
     */
    public $domain;
    /**
     * The status
     * @var string
     */
    public $status;
    /**
     * The unread
     * @var int
     */
    public $unread;
    /**
     * The closed
     * @var int
     */
    public $closed;
    /**
     * The answered
     * @var int
     */
    public $answered;
    /**
     * Constructor method for supportThreadDetailStruct
     * @uses SupportThreadDetailStruct::setId()
     * @uses SupportThreadDetailStruct::setDate()
     * @uses SupportThreadDetailStruct::setSubject()
     * @uses SupportThreadDetailStruct::setDomain()
     * @uses SupportThreadDetailStruct::setStatus()
     * @uses SupportThreadDetailStruct::setUnread()
     * @uses SupportThreadDetailStruct::setClosed()
     * @uses SupportThreadDetailStruct::setAnswered()
     * @param int $id
     * @param string $date
     * @param string $subject
     * @param string $domain
     * @param string $status
     * @param int $unread
     * @param int $closed
     * @param int $answered
     */
    public function __construct($id = null, $date = null, $subject = null, $domain = null, $status = null, $unread = null, $closed = null, $answered = null)
    {
        $this
            ->setId($id)
            ->setDate($date)
            ->setSubject($subject)
            ->setDomain($domain)
            ->setStatus($status)
            ->setUnread($unread)
            ->setClosed($closed)
            ->setAnswered($answered);
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
     * @return \PayPal\StructType\SupportThreadDetailStruct
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
     * @return \PayPal\StructType\SupportThreadDetailStruct
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
     * Get subject value
     * @return string|null
     */
    public function getSubject()
    {
        return $this->subject;
    }
    /**
     * Set subject value
     * @param string $subject
     * @return \PayPal\StructType\SupportThreadDetailStruct
     */
    public function setSubject($subject = null)
    {
        // validation for constraint: string
        if (!is_null($subject) && !is_string($subject)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($subject)), __LINE__);
        }
        $this->subject = $subject;
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
     * @return \PayPal\StructType\SupportThreadDetailStruct
     */
    public function setDomain($domain = null)
    {
        // validation for constraint: string
        if (!is_null($domain) && !is_string($domain)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($domain)), __LINE__);
        }
        $this->domain = $domain;
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
     * @return \PayPal\StructType\SupportThreadDetailStruct
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
     * Get unread value
     * @return int|null
     */
    public function getUnread()
    {
        return $this->unread;
    }
    /**
     * Set unread value
     * @param int $unread
     * @return \PayPal\StructType\SupportThreadDetailStruct
     */
    public function setUnread($unread = null)
    {
        // validation for constraint: int
        if (!is_null($unread) && !is_numeric($unread)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($unread)), __LINE__);
        }
        $this->unread = $unread;
        return $this;
    }
    /**
     * Get closed value
     * @return int|null
     */
    public function getClosed()
    {
        return $this->closed;
    }
    /**
     * Set closed value
     * @param int $closed
     * @return \PayPal\StructType\SupportThreadDetailStruct
     */
    public function setClosed($closed = null)
    {
        // validation for constraint: int
        if (!is_null($closed) && !is_numeric($closed)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($closed)), __LINE__);
        }
        $this->closed = $closed;
        return $this;
    }
    /**
     * Get answered value
     * @return int|null
     */
    public function getAnswered()
    {
        return $this->answered;
    }
    /**
     * Set answered value
     * @param int $answered
     * @return \PayPal\StructType\SupportThreadDetailStruct
     */
    public function setAnswered($answered = null)
    {
        // validation for constraint: int
        if (!is_null($answered) && !is_numeric($answered)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($answered)), __LINE__);
        }
        $this->answered = $answered;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \PayPal\StructType\SupportThreadDetailStruct
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
