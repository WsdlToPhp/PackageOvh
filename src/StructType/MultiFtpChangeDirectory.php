<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for multiFtpChangeDirectory StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class MultiFtpChangeDirectory extends AbstractStructBase
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
     * The login
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $login;
    /**
     * The directory
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $directory;
    /**
     * Constructor method for multiFtpChangeDirectory
     * @uses MultiFtpChangeDirectory::setSession()
     * @uses MultiFtpChangeDirectory::setDomain()
     * @uses MultiFtpChangeDirectory::setLogin()
     * @uses MultiFtpChangeDirectory::setDirectory()
     * @param string $session
     * @param string $domain
     * @param string $login
     * @param string $directory
     */
    public function __construct($session = null, $domain = null, $login = null, $directory = null)
    {
        $this
            ->setSession($session)
            ->setDomain($domain)
            ->setLogin($login)
            ->setDirectory($directory);
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
     * @return \Ovh\StructType\MultiFtpChangeDirectory
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
     * @return \Ovh\StructType\MultiFtpChangeDirectory
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
     * Get login value
     * @return string|null
     */
    public function getLogin()
    {
        return $this->login;
    }
    /**
     * Set login value
     * @param string $login
     * @return \Ovh\StructType\MultiFtpChangeDirectory
     */
    public function setLogin($login = null)
    {
        // validation for constraint: string
        if (!is_null($login) && !is_string($login)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($login, true), gettype($login)), __LINE__);
        }
        $this->login = $login;
        return $this;
    }
    /**
     * Get directory value
     * @return string|null
     */
    public function getDirectory()
    {
        return $this->directory;
    }
    /**
     * Set directory value
     * @param string $directory
     * @return \Ovh\StructType\MultiFtpChangeDirectory
     */
    public function setDirectory($directory = null)
    {
        // validation for constraint: string
        if (!is_null($directory) && !is_string($directory)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($directory, true), gettype($directory)), __LINE__);
        }
        $this->directory = $directory;
        return $this;
    }
}
