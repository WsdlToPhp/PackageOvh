<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for multiFtpAdd StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class MultiFtpAdd extends AbstractStructBase
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
     * The subdir
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $subdir;
    /**
     * The loginsuffix
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $loginsuffix;
    /**
     * The password
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $password;
    /**
     * Constructor method for multiFtpAdd
     * @uses MultiFtpAdd::setSession()
     * @uses MultiFtpAdd::setDomain()
     * @uses MultiFtpAdd::setSubdir()
     * @uses MultiFtpAdd::setLoginsuffix()
     * @uses MultiFtpAdd::setPassword()
     * @param string $session
     * @param string $domain
     * @param string $subdir
     * @param string $loginsuffix
     * @param string $password
     */
    public function __construct($session = null, $domain = null, $subdir = null, $loginsuffix = null, $password = null)
    {
        $this
            ->setSession($session)
            ->setDomain($domain)
            ->setSubdir($subdir)
            ->setLoginsuffix($loginsuffix)
            ->setPassword($password);
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
     * @return \Ovh\StructType\MultiFtpAdd
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
     * @return \Ovh\StructType\MultiFtpAdd
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
     * Get subdir value
     * @return string|null
     */
    public function getSubdir()
    {
        return $this->subdir;
    }
    /**
     * Set subdir value
     * @param string $subdir
     * @return \Ovh\StructType\MultiFtpAdd
     */
    public function setSubdir($subdir = null)
    {
        // validation for constraint: string
        if (!is_null($subdir) && !is_string($subdir)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($subdir, true), gettype($subdir)), __LINE__);
        }
        $this->subdir = $subdir;
        return $this;
    }
    /**
     * Get loginsuffix value
     * @return string|null
     */
    public function getLoginsuffix()
    {
        return $this->loginsuffix;
    }
    /**
     * Set loginsuffix value
     * @param string $loginsuffix
     * @return \Ovh\StructType\MultiFtpAdd
     */
    public function setLoginsuffix($loginsuffix = null)
    {
        // validation for constraint: string
        if (!is_null($loginsuffix) && !is_string($loginsuffix)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($loginsuffix, true), gettype($loginsuffix)), __LINE__);
        }
        $this->loginsuffix = $loginsuffix;
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
     * @return \Ovh\StructType\MultiFtpAdd
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
}
