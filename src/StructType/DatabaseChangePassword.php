<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for databaseChangePassword StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class DatabaseChangePassword extends AbstractStructBase
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
     * The db
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $db;
    /**
     * The password
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $password;
    /**
     * Constructor method for databaseChangePassword
     * @uses DatabaseChangePassword::setSession()
     * @uses DatabaseChangePassword::setDomain()
     * @uses DatabaseChangePassword::setDb()
     * @uses DatabaseChangePassword::setPassword()
     * @param string $session
     * @param string $domain
     * @param string $db
     * @param string $password
     */
    public function __construct($session = null, $domain = null, $db = null, $password = null)
    {
        $this
            ->setSession($session)
            ->setDomain($domain)
            ->setDb($db)
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
     * @return \Ovh\StructType\DatabaseChangePassword
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
     * @return \Ovh\StructType\DatabaseChangePassword
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
     * Get db value
     * @return string|null
     */
    public function getDb()
    {
        return $this->db;
    }
    /**
     * Set db value
     * @param string $db
     * @return \Ovh\StructType\DatabaseChangePassword
     */
    public function setDb($db = null)
    {
        // validation for constraint: string
        if (!is_null($db) && !is_string($db)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($db, true), gettype($db)), __LINE__);
        }
        $this->db = $db;
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
     * @return \Ovh\StructType\DatabaseChangePassword
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
