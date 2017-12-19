<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for dedicatedFailoverStruct StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class DedicatedFailoverStruct extends AbstractStructBase
{
    /**
     * The ip
     * @var string
     */
    public $ip;
    /**
     * The routedTo
     * @var string
     */
    public $routedTo;
    /**
     * The comment
     * @var string
     */
    public $comment;
    /**
     * The ssl
     * @var bool
     */
    public $ssl;
    /**
     * Constructor method for dedicatedFailoverStruct
     * @uses DedicatedFailoverStruct::setIp()
     * @uses DedicatedFailoverStruct::setRoutedTo()
     * @uses DedicatedFailoverStruct::setComment()
     * @uses DedicatedFailoverStruct::setSsl()
     * @param string $ip
     * @param string $routedTo
     * @param string $comment
     * @param bool $ssl
     */
    public function __construct($ip = null, $routedTo = null, $comment = null, $ssl = null)
    {
        $this
            ->setIp($ip)
            ->setRoutedTo($routedTo)
            ->setComment($comment)
            ->setSsl($ssl);
    }
    /**
     * Get ip value
     * @return string|null
     */
    public function getIp()
    {
        return $this->ip;
    }
    /**
     * Set ip value
     * @param string $ip
     * @return \PayPal\StructType\DedicatedFailoverStruct
     */
    public function setIp($ip = null)
    {
        // validation for constraint: string
        if (!is_null($ip) && !is_string($ip)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($ip)), __LINE__);
        }
        $this->ip = $ip;
        return $this;
    }
    /**
     * Get routedTo value
     * @return string|null
     */
    public function getRoutedTo()
    {
        return $this->routedTo;
    }
    /**
     * Set routedTo value
     * @param string $routedTo
     * @return \PayPal\StructType\DedicatedFailoverStruct
     */
    public function setRoutedTo($routedTo = null)
    {
        // validation for constraint: string
        if (!is_null($routedTo) && !is_string($routedTo)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($routedTo)), __LINE__);
        }
        $this->routedTo = $routedTo;
        return $this;
    }
    /**
     * Get comment value
     * @return string|null
     */
    public function getComment()
    {
        return $this->comment;
    }
    /**
     * Set comment value
     * @param string $comment
     * @return \PayPal\StructType\DedicatedFailoverStruct
     */
    public function setComment($comment = null)
    {
        // validation for constraint: string
        if (!is_null($comment) && !is_string($comment)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($comment)), __LINE__);
        }
        $this->comment = $comment;
        return $this;
    }
    /**
     * Get ssl value
     * @return bool|null
     */
    public function getSsl()
    {
        return $this->ssl;
    }
    /**
     * Set ssl value
     * @param bool $ssl
     * @return \PayPal\StructType\DedicatedFailoverStruct
     */
    public function setSsl($ssl = null)
    {
        // validation for constraint: boolean
        if (!is_null($ssl) && !is_bool($ssl)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($ssl)), __LINE__);
        }
        $this->ssl = $ssl;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \PayPal\StructType\DedicatedFailoverStruct
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
