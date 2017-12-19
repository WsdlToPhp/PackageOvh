<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for dedicatedMailinglistSubscribe StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class DedicatedMailinglistSubscribe extends AbstractStructBase
{
    /**
     * The session
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $session;
    /**
     * The email
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $email;
    /**
     * The mailingList
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $mailingList;
    /**
     * Constructor method for dedicatedMailinglistSubscribe
     * @uses DedicatedMailinglistSubscribe::setSession()
     * @uses DedicatedMailinglistSubscribe::setEmail()
     * @uses DedicatedMailinglistSubscribe::setMailingList()
     * @param string $session
     * @param string $email
     * @param string $mailingList
     */
    public function __construct($session = null, $email = null, $mailingList = null)
    {
        $this
            ->setSession($session)
            ->setEmail($email)
            ->setMailingList($mailingList);
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
     * @return \PayPal\StructType\DedicatedMailinglistSubscribe
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
     * @return \PayPal\StructType\DedicatedMailinglistSubscribe
     */
    public function setEmail($email = null)
    {
        // validation for constraint: string
        if (!is_null($email) && !is_string($email)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($email)), __LINE__);
        }
        $this->email = $email;
        return $this;
    }
    /**
     * Get mailingList value
     * @return string|null
     */
    public function getMailingList()
    {
        return $this->mailingList;
    }
    /**
     * Set mailingList value
     * @param string $mailingList
     * @return \PayPal\StructType\DedicatedMailinglistSubscribe
     */
    public function setMailingList($mailingList = null)
    {
        // validation for constraint: string
        if (!is_null($mailingList) && !is_string($mailingList)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($mailingList)), __LINE__);
        }
        $this->mailingList = $mailingList;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \PayPal\StructType\DedicatedMailinglistSubscribe
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
