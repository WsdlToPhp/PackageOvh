<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for supportMessageDetailReturn StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class SupportMessageDetailReturn extends AbstractStructBase
{
    /**
     * The id
     * @var int
     */
    public $id;
    /**
     * The thread
     * @var int
     */
    public $thread;
    /**
     * The unreadThread
     * @var bool
     */
    public $unreadThread;
    /**
     * The fromEmail
     * @var string
     */
    public $fromEmail;
    /**
     * The dateSent
     * @var string
     */
    public $dateSent;
    /**
     * The subject
     * @var string
     */
    public $subject;
    /**
     * The body
     * @var string
     */
    public $body;
    /**
     * The reportReason
     * @var string
     */
    public $reportReason;
    /**
     * Constructor method for supportMessageDetailReturn
     * @uses SupportMessageDetailReturn::setId()
     * @uses SupportMessageDetailReturn::setThread()
     * @uses SupportMessageDetailReturn::setUnreadThread()
     * @uses SupportMessageDetailReturn::setFromEmail()
     * @uses SupportMessageDetailReturn::setDateSent()
     * @uses SupportMessageDetailReturn::setSubject()
     * @uses SupportMessageDetailReturn::setBody()
     * @uses SupportMessageDetailReturn::setReportReason()
     * @param int $id
     * @param int $thread
     * @param bool $unreadThread
     * @param string $fromEmail
     * @param string $dateSent
     * @param string $subject
     * @param string $body
     * @param string $reportReason
     */
    public function __construct($id = null, $thread = null, $unreadThread = null, $fromEmail = null, $dateSent = null, $subject = null, $body = null, $reportReason = null)
    {
        $this
            ->setId($id)
            ->setThread($thread)
            ->setUnreadThread($unreadThread)
            ->setFromEmail($fromEmail)
            ->setDateSent($dateSent)
            ->setSubject($subject)
            ->setBody($body)
            ->setReportReason($reportReason);
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
     * @return \Ovh\StructType\SupportMessageDetailReturn
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
     * Get thread value
     * @return int|null
     */
    public function getThread()
    {
        return $this->thread;
    }
    /**
     * Set thread value
     * @param int $thread
     * @return \Ovh\StructType\SupportMessageDetailReturn
     */
    public function setThread($thread = null)
    {
        // validation for constraint: int
        if (!is_null($thread) && !(is_int($thread) || ctype_digit($thread))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($thread, true), gettype($thread)), __LINE__);
        }
        $this->thread = $thread;
        return $this;
    }
    /**
     * Get unreadThread value
     * @return bool|null
     */
    public function getUnreadThread()
    {
        return $this->unreadThread;
    }
    /**
     * Set unreadThread value
     * @param bool $unreadThread
     * @return \Ovh\StructType\SupportMessageDetailReturn
     */
    public function setUnreadThread($unreadThread = null)
    {
        // validation for constraint: boolean
        if (!is_null($unreadThread) && !is_bool($unreadThread)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($unreadThread, true), gettype($unreadThread)), __LINE__);
        }
        $this->unreadThread = $unreadThread;
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
     * @return \Ovh\StructType\SupportMessageDetailReturn
     */
    public function setFromEmail($fromEmail = null)
    {
        // validation for constraint: string
        if (!is_null($fromEmail) && !is_string($fromEmail)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($fromEmail, true), gettype($fromEmail)), __LINE__);
        }
        $this->fromEmail = $fromEmail;
        return $this;
    }
    /**
     * Get dateSent value
     * @return string|null
     */
    public function getDateSent()
    {
        return $this->dateSent;
    }
    /**
     * Set dateSent value
     * @param string $dateSent
     * @return \Ovh\StructType\SupportMessageDetailReturn
     */
    public function setDateSent($dateSent = null)
    {
        // validation for constraint: string
        if (!is_null($dateSent) && !is_string($dateSent)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($dateSent, true), gettype($dateSent)), __LINE__);
        }
        $this->dateSent = $dateSent;
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
     * @return \Ovh\StructType\SupportMessageDetailReturn
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
     * Get body value
     * @return string|null
     */
    public function getBody()
    {
        return $this->body;
    }
    /**
     * Set body value
     * @param string $body
     * @return \Ovh\StructType\SupportMessageDetailReturn
     */
    public function setBody($body = null)
    {
        // validation for constraint: string
        if (!is_null($body) && !is_string($body)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($body, true), gettype($body)), __LINE__);
        }
        $this->body = $body;
        return $this;
    }
    /**
     * Get reportReason value
     * @return string|null
     */
    public function getReportReason()
    {
        return $this->reportReason;
    }
    /**
     * Set reportReason value
     * @param string $reportReason
     * @return \Ovh\StructType\SupportMessageDetailReturn
     */
    public function setReportReason($reportReason = null)
    {
        // validation for constraint: string
        if (!is_null($reportReason) && !is_string($reportReason)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($reportReason, true), gettype($reportReason)), __LINE__);
        }
        $this->reportReason = $reportReason;
        return $this;
    }
}
