<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for supportThreadTreeReturn StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class SupportThreadTreeReturn extends AbstractStructBase
{
    /**
     * The id
     * @var int
     */
    public $id;
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
     * The closed
     * @var int
     */
    public $closed;
    /**
     * The reportReason
     * @var string
     */
    public $reportReason;
    /**
     * The messages
     * @var \Ovh\ArrayType\MyArrayOfSupportThreadMessageDetailStructType
     */
    public $messages;
    /**
     * Constructor method for supportThreadTreeReturn
     * @uses SupportThreadTreeReturn::setId()
     * @uses SupportThreadTreeReturn::setSubject()
     * @uses SupportThreadTreeReturn::setDomain()
     * @uses SupportThreadTreeReturn::setClosed()
     * @uses SupportThreadTreeReturn::setReportReason()
     * @uses SupportThreadTreeReturn::setMessages()
     * @param int $id
     * @param string $subject
     * @param string $domain
     * @param int $closed
     * @param string $reportReason
     * @param \Ovh\ArrayType\MyArrayOfSupportThreadMessageDetailStructType $messages
     */
    public function __construct($id = null, $subject = null, $domain = null, $closed = null, $reportReason = null, \Ovh\ArrayType\MyArrayOfSupportThreadMessageDetailStructType $messages = null)
    {
        $this
            ->setId($id)
            ->setSubject($subject)
            ->setDomain($domain)
            ->setClosed($closed)
            ->setReportReason($reportReason)
            ->setMessages($messages);
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
     * @return \Ovh\StructType\SupportThreadTreeReturn
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
     * @return \Ovh\StructType\SupportThreadTreeReturn
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
     * @return \Ovh\StructType\SupportThreadTreeReturn
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
     * @return \Ovh\StructType\SupportThreadTreeReturn
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
     * @return \Ovh\StructType\SupportThreadTreeReturn
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
    /**
     * Get messages value
     * @return \Ovh\ArrayType\MyArrayOfSupportThreadMessageDetailStructType|null
     */
    public function getMessages()
    {
        return $this->messages;
    }
    /**
     * Set messages value
     * @param \Ovh\ArrayType\MyArrayOfSupportThreadMessageDetailStructType $messages
     * @return \Ovh\StructType\SupportThreadTreeReturn
     */
    public function setMessages(\Ovh\ArrayType\MyArrayOfSupportThreadMessageDetailStructType $messages = null)
    {
        $this->messages = $messages;
        return $this;
    }
}
