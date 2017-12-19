<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ticketStruct StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class TicketStruct extends AbstractStructBase
{
    /**
     * The id
     * @var int
     */
    public $id;
    /**
     * The creationDate
     * @var string
     */
    public $creationDate;
    /**
     * The requestStatus
     * @var string
     */
    public $requestStatus;
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
     * Constructor method for ticketStruct
     * @uses TicketStruct::setId()
     * @uses TicketStruct::setCreationDate()
     * @uses TicketStruct::setRequestStatus()
     * @uses TicketStruct::setSubject()
     * @uses TicketStruct::setNic()
     * @uses TicketStruct::setLevel()
     * @uses TicketStruct::setDomain()
     * @uses TicketStruct::setOrderId()
     * @uses TicketStruct::setComponentType()
     * @param int $id
     * @param string $creationDate
     * @param string $requestStatus
     * @param string $subject
     * @param string $nic
     * @param string $level
     * @param string $domain
     * @param int $orderId
     * @param string $componentType
     */
    public function __construct($id = null, $creationDate = null, $requestStatus = null, $subject = null, $nic = null, $level = null, $domain = null, $orderId = null, $componentType = null)
    {
        $this
            ->setId($id)
            ->setCreationDate($creationDate)
            ->setRequestStatus($requestStatus)
            ->setSubject($subject)
            ->setNic($nic)
            ->setLevel($level)
            ->setDomain($domain)
            ->setOrderId($orderId)
            ->setComponentType($componentType);
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
     * @return \Ovh\StructType\TicketStruct
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
     * Get creationDate value
     * @return string|null
     */
    public function getCreationDate()
    {
        return $this->creationDate;
    }
    /**
     * Set creationDate value
     * @param string $creationDate
     * @return \Ovh\StructType\TicketStruct
     */
    public function setCreationDate($creationDate = null)
    {
        // validation for constraint: string
        if (!is_null($creationDate) && !is_string($creationDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($creationDate)), __LINE__);
        }
        $this->creationDate = $creationDate;
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
     * @return \Ovh\StructType\TicketStruct
     */
    public function setRequestStatus($requestStatus = null)
    {
        // validation for constraint: string
        if (!is_null($requestStatus) && !is_string($requestStatus)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($requestStatus)), __LINE__);
        }
        $this->requestStatus = $requestStatus;
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
     * @return \Ovh\StructType\TicketStruct
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
     * @return \Ovh\StructType\TicketStruct
     */
    public function setNic($nic = null)
    {
        // validation for constraint: string
        if (!is_null($nic) && !is_string($nic)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($nic)), __LINE__);
        }
        $this->nic = $nic;
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
     * @return \Ovh\StructType\TicketStruct
     */
    public function setLevel($level = null)
    {
        // validation for constraint: string
        if (!is_null($level) && !is_string($level)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($level)), __LINE__);
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
     * @return \Ovh\StructType\TicketStruct
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
     * @return \Ovh\StructType\TicketStruct
     */
    public function setOrderId($orderId = null)
    {
        // validation for constraint: int
        if (!is_null($orderId) && !is_numeric($orderId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($orderId)), __LINE__);
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
     * @return \Ovh\StructType\TicketStruct
     */
    public function setComponentType($componentType = null)
    {
        // validation for constraint: string
        if (!is_null($componentType) && !is_string($componentType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($componentType)), __LINE__);
        }
        $this->componentType = $componentType;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ovh\StructType\TicketStruct
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
