<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for fullTicketReturn StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class FullTicketReturn extends AbstractStructBase
{
    /**
     * The ticketId
     * @var int
     */
    public $ticketId;
    /**
     * The requestStatus
     * @var string
     */
    public $requestStatus;
    /**
     * The status
     * @var string
     */
    public $status;
    /**
     * The subject
     * @var string
     */
    public $subject;
    /**
     * The nic
     * @var string
     */
    public $nic;
    /**
     * The phone
     * @var string
     */
    public $phone;
    /**
     * The email
     * @var string
     */
    public $email;
    /**
     * The level
     * @var string
     */
    public $level;
    /**
     * The domain
     * @var string
     */
    public $domain;
    /**
     * The orderId
     * @var int
     */
    public $orderId;
    /**
     * The componentType
     * @var string
     */
    public $componentType;
    /**
     * The messages
     * @var \Ovh\ArrayType\MyArrayOfMessageDetailStructType
     */
    public $messages;
    /**
     * Constructor method for fullTicketReturn
     * @uses FullTicketReturn::setTicketId()
     * @uses FullTicketReturn::setRequestStatus()
     * @uses FullTicketReturn::setStatus()
     * @uses FullTicketReturn::setSubject()
     * @uses FullTicketReturn::setNic()
     * @uses FullTicketReturn::setPhone()
     * @uses FullTicketReturn::setEmail()
     * @uses FullTicketReturn::setLevel()
     * @uses FullTicketReturn::setDomain()
     * @uses FullTicketReturn::setOrderId()
     * @uses FullTicketReturn::setComponentType()
     * @uses FullTicketReturn::setMessages()
     * @param int $ticketId
     * @param string $requestStatus
     * @param string $status
     * @param string $subject
     * @param string $nic
     * @param string $phone
     * @param string $email
     * @param string $level
     * @param string $domain
     * @param int $orderId
     * @param string $componentType
     * @param \Ovh\ArrayType\MyArrayOfMessageDetailStructType $messages
     */
    public function __construct($ticketId = null, $requestStatus = null, $status = null, $subject = null, $nic = null, $phone = null, $email = null, $level = null, $domain = null, $orderId = null, $componentType = null, \Ovh\ArrayType\MyArrayOfMessageDetailStructType $messages = null)
    {
        $this
            ->setTicketId($ticketId)
            ->setRequestStatus($requestStatus)
            ->setStatus($status)
            ->setSubject($subject)
            ->setNic($nic)
            ->setPhone($phone)
            ->setEmail($email)
            ->setLevel($level)
            ->setDomain($domain)
            ->setOrderId($orderId)
            ->setComponentType($componentType)
            ->setMessages($messages);
    }
    /**
     * Get ticketId value
     * @return int|null
     */
    public function getTicketId()
    {
        return $this->ticketId;
    }
    /**
     * Set ticketId value
     * @param int $ticketId
     * @return \Ovh\StructType\FullTicketReturn
     */
    public function setTicketId($ticketId = null)
    {
        // validation for constraint: int
        if (!is_null($ticketId) && !(is_int($ticketId) || ctype_digit($ticketId))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($ticketId, true), gettype($ticketId)), __LINE__);
        }
        $this->ticketId = $ticketId;
        return $this;
    }
    /**
     * Get requestStatus value
     * @return string|null
     */
    public function getRequestStatus()
    {
        return $this->requestStatus;
    }
    /**
     * Set requestStatus value
     * @param string $requestStatus
     * @return \Ovh\StructType\FullTicketReturn
     */
    public function setRequestStatus($requestStatus = null)
    {
        // validation for constraint: string
        if (!is_null($requestStatus) && !is_string($requestStatus)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($requestStatus, true), gettype($requestStatus)), __LINE__);
        }
        $this->requestStatus = $requestStatus;
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
     * @return \Ovh\StructType\FullTicketReturn
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
     * @return \Ovh\StructType\FullTicketReturn
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
     * Get nic value
     * @return string|null
     */
    public function getNic()
    {
        return $this->nic;
    }
    /**
     * Set nic value
     * @param string $nic
     * @return \Ovh\StructType\FullTicketReturn
     */
    public function setNic($nic = null)
    {
        // validation for constraint: string
        if (!is_null($nic) && !is_string($nic)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($nic, true), gettype($nic)), __LINE__);
        }
        $this->nic = $nic;
        return $this;
    }
    /**
     * Get phone value
     * @return string|null
     */
    public function getPhone()
    {
        return $this->phone;
    }
    /**
     * Set phone value
     * @param string $phone
     * @return \Ovh\StructType\FullTicketReturn
     */
    public function setPhone($phone = null)
    {
        // validation for constraint: string
        if (!is_null($phone) && !is_string($phone)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($phone, true), gettype($phone)), __LINE__);
        }
        $this->phone = $phone;
        return $this;
    }
    /**
     * Get email value
     * @return string|null
     */
    public function getEmail()
    {
        return $this->email;
    }
    /**
     * Set email value
     * @param string $email
     * @return \Ovh\StructType\FullTicketReturn
     */
    public function setEmail($email = null)
    {
        // validation for constraint: string
        if (!is_null($email) && !is_string($email)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($email, true), gettype($email)), __LINE__);
        }
        $this->email = $email;
        return $this;
    }
    /**
     * Get level value
     * @return string|null
     */
    public function getLevel()
    {
        return $this->level;
    }
    /**
     * Set level value
     * @param string $level
     * @return \Ovh\StructType\FullTicketReturn
     */
    public function setLevel($level = null)
    {
        // validation for constraint: string
        if (!is_null($level) && !is_string($level)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($level, true), gettype($level)), __LINE__);
        }
        $this->level = $level;
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
     * @return \Ovh\StructType\FullTicketReturn
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
     * Get orderId value
     * @return int|null
     */
    public function getOrderId()
    {
        return $this->orderId;
    }
    /**
     * Set orderId value
     * @param int $orderId
     * @return \Ovh\StructType\FullTicketReturn
     */
    public function setOrderId($orderId = null)
    {
        // validation for constraint: int
        if (!is_null($orderId) && !(is_int($orderId) || ctype_digit($orderId))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($orderId, true), gettype($orderId)), __LINE__);
        }
        $this->orderId = $orderId;
        return $this;
    }
    /**
     * Get componentType value
     * @return string|null
     */
    public function getComponentType()
    {
        return $this->componentType;
    }
    /**
     * Set componentType value
     * @param string $componentType
     * @return \Ovh\StructType\FullTicketReturn
     */
    public function setComponentType($componentType = null)
    {
        // validation for constraint: string
        if (!is_null($componentType) && !is_string($componentType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($componentType, true), gettype($componentType)), __LINE__);
        }
        $this->componentType = $componentType;
        return $this;
    }
    /**
     * Get messages value
     * @return \Ovh\ArrayType\MyArrayOfMessageDetailStructType|null
     */
    public function getMessages()
    {
        return $this->messages;
    }
    /**
     * Set messages value
     * @param \Ovh\ArrayType\MyArrayOfMessageDetailStructType $messages
     * @return \Ovh\StructType\FullTicketReturn
     */
    public function setMessages(\Ovh\ArrayType\MyArrayOfMessageDetailStructType $messages = null)
    {
        $this->messages = $messages;
        return $this;
    }
}
