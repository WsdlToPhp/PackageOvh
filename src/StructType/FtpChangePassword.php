<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ftpChangePassword StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class FtpChangePassword extends AbstractStructBase
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
     * The password
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $password;
    /**
     * The oldstate
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $oldstate;
    /**
     * The newstate
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $newstate;
    /**
     * Constructor method for ftpChangePassword
     * @uses FtpChangePassword::setSession()
     * @uses FtpChangePassword::setDomain()
     * @uses FtpChangePassword::setPassword()
     * @uses FtpChangePassword::setOldstate()
     * @uses FtpChangePassword::setNewstate()
     * @param string $session
     * @param string $domain
     * @param string $password
     * @param string $oldstate
     * @param string $newstate
     */
    public function __construct($session = null, $domain = null, $password = null, $oldstate = null, $newstate = null)
    {
        $this
            ->setSession($session)
            ->setDomain($domain)
            ->setPassword($password)
            ->setOldstate($oldstate)
            ->setNewstate($newstate);
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
     * @return \Ovh\StructType\FtpChangePassword
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
     * @return \Ovh\StructType\FtpChangePassword
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
     * @return \Ovh\StructType\FtpChangePassword
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
     * Get oldstate value
     * @return string|null
     */
    public function getOldstate()
    {
        return $this->oldstate;
    }
    /**
     * Set oldstate value
     * @param string $oldstate
     * @return \Ovh\StructType\FtpChangePassword
     */
    public function setOldstate($oldstate = null)
    {
        // validation for constraint: string
        if (!is_null($oldstate) && !is_string($oldstate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($oldstate, true), gettype($oldstate)), __LINE__);
        }
        $this->oldstate = $oldstate;
        return $this;
    }
    /**
     * Get newstate value
     * @return string|null
     */
    public function getNewstate()
    {
        return $this->newstate;
    }
    /**
     * Set newstate value
     * @param string $newstate
     * @return \Ovh\StructType\FtpChangePassword
     */
    public function setNewstate($newstate = null)
    {
        // validation for constraint: string
        if (!is_null($newstate) && !is_string($newstate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($newstate, true), gettype($newstate)), __LINE__);
        }
        $this->newstate = $newstate;
        return $this;
    }
}
