<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for popModifyPassword StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class PopModifyPassword extends AbstractStructBase
{
    /**
     * The session
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $session;
    /**
     * The domain
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $domain;
    /**
     * The pop
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $pop;
    /**
     * The password
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $password;
    /**
     * The doNotSendMail
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var bool
     */
    public $doNotSendMail;
    /**
     * Constructor method for popModifyPassword
     * @uses PopModifyPassword::setSession()
     * @uses PopModifyPassword::setDomain()
     * @uses PopModifyPassword::setPop()
     * @uses PopModifyPassword::setPassword()
     * @uses PopModifyPassword::setDoNotSendMail()
     * @param string $session
     * @param string $domain
     * @param string $pop
     * @param string $password
     * @param bool $doNotSendMail
     */
    public function __construct($session = null, $domain = null, $pop = null, $password = null, $doNotSendMail = null)
    {
        $this
            ->setSession($session)
            ->setDomain($domain)
            ->setPop($pop)
            ->setPassword($password)
            ->setDoNotSendMail($doNotSendMail);
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
     * @return \Ovh\StructType\PopModifyPassword
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
     * @return \Ovh\StructType\PopModifyPassword
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
     * Get pop value
     * @return string|null
     */
    public function getPop()
    {
        return $this->pop;
    }
    /**
     * Set pop value
     * @param string $pop
     * @return \Ovh\StructType\PopModifyPassword
     */
    public function setPop($pop = null)
    {
        // validation for constraint: string
        if (!is_null($pop) && !is_string($pop)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($pop, true), gettype($pop)), __LINE__);
        }
        $this->pop = $pop;
        return $this;
    }
    /**
     * Get password value
     * @return string|null
     */
    public function getPassword()
    {
        return $this->password;
    }
    /**
     * Set password value
     * @param string $password
     * @return \Ovh\StructType\PopModifyPassword
     */
    public function setPassword($password = null)
    {
        // validation for constraint: string
        if (!is_null($password) && !is_string($password)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($password, true), gettype($password)), __LINE__);
        }
        $this->password = $password;
        return $this;
    }
    /**
     * Get doNotSendMail value
     * @return bool|null
     */
    public function getDoNotSendMail()
    {
        return $this->doNotSendMail;
    }
    /**
     * Set doNotSendMail value
     * @param bool $doNotSendMail
     * @return \Ovh\StructType\PopModifyPassword
     */
    public function setDoNotSendMail($doNotSendMail = null)
    {
        // validation for constraint: boolean
        if (!is_null($doNotSendMail) && !is_bool($doNotSendMail)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($doNotSendMail, true), gettype($doNotSendMail)), __LINE__);
        }
        $this->doNotSendMail = $doNotSendMail;
        return $this;
    }
}
