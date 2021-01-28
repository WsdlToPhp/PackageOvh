<?php

namespace Ovh\StructType;

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
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $session;
    /**
     * The email
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $email;
    /**
     * The mailingList
     * Meta information extracted from the WSDL
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
     * @return \Ovh\StructType\DedicatedMailinglistSubscribe
     */
    public function setSession($session = null)
    {
        // validation for constraint: string
        if (!is_null($session) && !is_string($session)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($session, true), gettype($session)), __LINE__);
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
     * @return \Ovh\StructType\DedicatedMailinglistSubscribe
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
     * @return \Ovh\StructType\DedicatedMailinglistSubscribe
     */
    public function setMailingList($mailingList = null)
    {
        // validation for constraint: string
        if (!is_null($mailingList) && !is_string($mailingList)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($mailingList, true), gettype($mailingList)), __LINE__);
        }
        $this->mailingList = $mailingList;
        return $this;
    }
}
