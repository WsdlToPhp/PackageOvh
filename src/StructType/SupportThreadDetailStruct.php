<?php

namespace Ovh\StructType;

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
     * @return \Ovh\StructType\SupportThreadDetailStruct
     */
    public function setId($id = null)
    {
        // validation for constraint: int
        if (!is_null($id) && !(is_int($id) || ctype_digit($id))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($id, true), gettype($id)), __LINE__);
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
     * @return \Ovh\StructType\SupportThreadDetailStruct
     */
    public function setDate($date = null)
    {
        // validation for constraint: string
        if (!is_null($date) && !is_string($date)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($date, true), gettype($date)), __LINE__);
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
     * @return \Ovh\StructType\SupportThreadDetailStruct
     */
    public function setSubject($subject = null)
    {
        // validation for constraint: string
        if (!is_null($subject) && !is_string($subject)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($subject, true), gettype($subject)), __LINE__);
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
     * @return \Ovh\StructType\SupportThreadDetailStruct
     */
    public function setDomain($domain = null)
    {
        // validation for constraint: string
        if (!is_null($domain) && !is_string($domain)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($domain, true), gettype($domain)), __LINE__);
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
     * @return \Ovh\StructType\SupportThreadDetailStruct
     */
    public function setStatus($status = null)
    {
        // validation for constraint: string
        if (!is_null($status) && !is_string($status)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($status, true), gettype($status)), __LINE__);
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
     * @return \Ovh\StructType\SupportThreadDetailStruct
     */
    public function setUnread($unread = null)
    {
        // validation for constraint: int
        if (!is_null($unread) && !(is_int($unread) || ctype_digit($unread))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($unread, true), gettype($unread)), __LINE__);
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
     * @return \Ovh\StructType\SupportThreadDetailStruct
     */
    public function setClosed($closed = null)
    {
        // validation for constraint: int
        if (!is_null($closed) && !(is_int($closed) || ctype_digit($closed))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($closed, true), gettype($closed)), __LINE__);
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
     * @return \Ovh\StructType\SupportThreadDetailStruct
     */
    public function setAnswered($answered = null)
    {
        // validation for constraint: int
        if (!is_null($answered) && !(is_int($answered) || ctype_digit($answered))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($answered, true), gettype($answered)), __LINE__);
        }
        $this->answered = $answered;
        return $this;
    }
}
