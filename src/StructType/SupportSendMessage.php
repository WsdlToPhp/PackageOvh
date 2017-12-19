<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for supportSendMessage StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class SupportSendMessage extends AbstractStructBase
{
    /**
     * The session
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $session;
    /**
     * The messagePrevious
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var int
     */
    public $messagePrevious;
    /**
     * The category
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var int
     */
    public $category;
    /**
     * The domain
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $domain;
    /**
     * The subject
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $subject;
    /**
     * The body
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $body;
    /**
     * Constructor method for supportSendMessage
     * @uses SupportSendMessage::setSession()
     * @uses SupportSendMessage::setMessagePrevious()
     * @uses SupportSendMessage::setCategory()
     * @uses SupportSendMessage::setDomain()
     * @uses SupportSendMessage::setSubject()
     * @uses SupportSendMessage::setBody()
     * @param string $session
     * @param int $messagePrevious
     * @param int $category
     * @param string $domain
     * @param string $subject
     * @param string $body
     */
    public function __construct($session = null, $messagePrevious = null, $category = null, $domain = null, $subject = null, $body = null)
    {
        $this
            ->setSession($session)
            ->setMessagePrevious($messagePrevious)
            ->setCategory($category)
            ->setDomain($domain)
            ->setSubject($subject)
            ->setBody($body);
    }
    /**
     * Get session value
     * @return string|null
     */
    public function getSession()
    {
        return $this->session;
    }
    /**
     * Set session value
     * @param string $session
     * @return \PayPal\StructType\SupportSendMessage
     */
    public function setSession($session = null)
    {
        // validation for constraint: string
        if (!is_null($session) && !is_string($session)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($session)), __LINE__);
        }
        $this->session = $session;
        return $this;
    }
    /**
     * Get messagePrevious value
     * @return int|null
     */
    public function getMessagePrevious()
    {
        return $this->messagePrevious;
    }
    /**
     * Set messagePrevious value
     * @param int $messagePrevious
     * @return \PayPal\StructType\SupportSendMessage
     */
    public function setMessagePrevious($messagePrevious = null)
    {
        // validation for constraint: int
        if (!is_null($messagePrevious) && !is_numeric($messagePrevious)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($messagePrevious)), __LINE__);
        }
        $this->messagePrevious = $messagePrevious;
        return $this;
    }
    /**
     * Get category value
     * @return int|null
     */
    public function getCategory()
    {
        return $this->category;
    }
    /**
     * Set category value
     * @param int $category
     * @return \PayPal\StructType\SupportSendMessage
     */
    public function setCategory($category = null)
    {
        // validation for constraint: int
        if (!is_null($category) && !is_numeric($category)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($category)), __LINE__);
        }
        $this->category = $category;
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
     * @return \PayPal\StructType\SupportSendMessage
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
     * @return \PayPal\StructType\SupportSendMessage
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
     * @return \PayPal\StructType\SupportSendMessage
     */
    public function setBody($body = null)
    {
        // validation for constraint: string
        if (!is_null($body) && !is_string($body)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($body)), __LINE__);
        }
        $this->body = $body;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \PayPal\StructType\SupportSendMessage
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
