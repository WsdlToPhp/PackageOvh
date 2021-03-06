<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for dedicatedHardRebootDo StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class DedicatedHardRebootDo extends AbstractStructBase
{
    /**
     * The session
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $session;
    /**
     * The hostname
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $hostname;
    /**
     * The reason
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $reason;
    /**
     * The email
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $email;
    /**
     * The emailLanguage
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $emailLanguage;
    /**
     * Constructor method for dedicatedHardRebootDo
     * @uses DedicatedHardRebootDo::setSession()
     * @uses DedicatedHardRebootDo::setHostname()
     * @uses DedicatedHardRebootDo::setReason()
     * @uses DedicatedHardRebootDo::setEmail()
     * @uses DedicatedHardRebootDo::setEmailLanguage()
     * @param string $session
     * @param string $hostname
     * @param string $reason
     * @param string $email
     * @param string $emailLanguage
     */
    public function __construct($session = null, $hostname = null, $reason = null, $email = null, $emailLanguage = null)
    {
        $this
            ->setSession($session)
            ->setHostname($hostname)
            ->setReason($reason)
            ->setEmail($email)
            ->setEmailLanguage($emailLanguage);
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
     * @return \Ovh\StructType\DedicatedHardRebootDo
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
     * Get hostname value
     * @return string|null
     */
    public function getHostname()
    {
        return $this->hostname;
    }
    /**
     * Set hostname value
     * @param string $hostname
     * @return \Ovh\StructType\DedicatedHardRebootDo
     */
    public function setHostname($hostname = null)
    {
        // validation for constraint: string
        if (!is_null($hostname) && !is_string($hostname)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($hostname, true), gettype($hostname)), __LINE__);
        }
        $this->hostname = $hostname;
        return $this;
    }
    /**
     * Get reason value
     * @return string|null
     */
    public function getReason()
    {
        return $this->reason;
    }
    /**
     * Set reason value
     * @param string $reason
     * @return \Ovh\StructType\DedicatedHardRebootDo
     */
    public function setReason($reason = null)
    {
        // validation for constraint: string
        if (!is_null($reason) && !is_string($reason)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($reason, true), gettype($reason)), __LINE__);
        }
        $this->reason = $reason;
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
     * @return \Ovh\StructType\DedicatedHardRebootDo
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
     * Get emailLanguage value
     * @return string|null
     */
    public function getEmailLanguage()
    {
        return $this->emailLanguage;
    }
    /**
     * Set emailLanguage value
     * @param string $emailLanguage
     * @return \Ovh\StructType\DedicatedHardRebootDo
     */
    public function setEmailLanguage($emailLanguage = null)
    {
        // validation for constraint: string
        if (!is_null($emailLanguage) && !is_string($emailLanguage)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($emailLanguage, true), gettype($emailLanguage)), __LINE__);
        }
        $this->emailLanguage = $emailLanguage;
        return $this;
    }
}
