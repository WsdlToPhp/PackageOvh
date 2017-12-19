<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for supportSendMessageReturn StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class SupportSendMessageReturn extends AbstractStructBase
{
    /**
     * The threadId
     * @var int
     */
    public $threadId;
    /**
     * The messageId
     * @var int
     */
    public $messageId;
    /**
     * The dateTime
     * @var string
     */
    public $dateTime;
    /**
     * Constructor method for supportSendMessageReturn
     * @uses SupportSendMessageReturn::setThreadId()
     * @uses SupportSendMessageReturn::setMessageId()
     * @uses SupportSendMessageReturn::setDateTime()
     * @param int $threadId
     * @param int $messageId
     * @param string $dateTime
     */
    public function __construct($threadId = null, $messageId = null, $dateTime = null)
    {
        $this
            ->setThreadId($threadId)
            ->setMessageId($messageId)
            ->setDateTime($dateTime);
    }
    /**
     * Get threadId value
     * @return int|null
     */
    public function getThreadId()
    {
        return $this->threadId;
    }
    /**
     * Set threadId value
     * @param int $threadId
     * @return \Ovh\StructType\SupportSendMessageReturn
     */
    public function setThreadId($threadId = null)
    {
        // validation for constraint: int
        if (!is_null($threadId) && !is_numeric($threadId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($threadId)), __LINE__);
        }
        $this->threadId = $threadId;
        return $this;
    }
    /**
     * Get messageId value
     * @return int|null
     */
    public function getMessageId()
    {
        return $this->messageId;
    }
    /**
     * Set messageId value
     * @param int $messageId
     * @return \Ovh\StructType\SupportSendMessageReturn
     */
    public function setMessageId($messageId = null)
    {
        // validation for constraint: int
        if (!is_null($messageId) && !is_numeric($messageId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($messageId)), __LINE__);
        }
        $this->messageId = $messageId;
        return $this;
    }
    /**
     * Get dateTime value
     * @return string|null
     */
    public function getDateTime()
    {
        return $this->dateTime;
    }
    /**
     * Set dateTime value
     * @param string $dateTime
     * @return \Ovh\StructType\SupportSendMessageReturn
     */
    public function setDateTime($dateTime = null)
    {
        // validation for constraint: string
        if (!is_null($dateTime) && !is_string($dateTime)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($dateTime)), __LINE__);
        }
        $this->dateTime = $dateTime;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ovh\StructType\SupportSendMessageReturn
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
