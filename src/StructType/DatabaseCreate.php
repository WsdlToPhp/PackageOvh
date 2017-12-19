<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for databaseCreate StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class DatabaseCreate extends AbstractStructBase
{
    /**
     * The session
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $session;
    /**
     * The domain
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $domain;
    /**
     * The db
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $db;
    /**
     * The password
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $password;
    /**
     * The dbType
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $dbType;
    /**
     * Constructor method for databaseCreate
     * @uses DatabaseCreate::setSession()
     * @uses DatabaseCreate::setDomain()
     * @uses DatabaseCreate::setDb()
     * @uses DatabaseCreate::setPassword()
     * @uses DatabaseCreate::setDbType()
     * @param string $session
     * @param string $domain
     * @param string $db
     * @param string $password
     * @param string $dbType
     */
    public function __construct($session = null, $domain = null, $db = null, $password = null, $dbType = null)
    {
        $this
            ->setSession($session)
            ->setDomain($domain)
            ->setDb($db)
            ->setPassword($password)
            ->setDbType($dbType);
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
     * @return \PayPal\StructType\DatabaseCreate
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
     * @return \PayPal\StructType\DatabaseCreate
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
     * @return \PayPal\StructType\DatabaseCreate
     */
    public function setDb($db = null)
    {
        // validation for constraint: string
        if (!is_null($db) && !is_string($db)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($db)), __LINE__);
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
     * @return \PayPal\StructType\DatabaseCreate
     */
    public function setPassword($password = null)
    {
        // validation for constraint: string
        if (!is_null($password) && !is_string($password)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($password)), __LINE__);
        }
        $this->password = $password;
        return $this;
    }
    /**
     * Get dbType value
     * @return string|null
     */
    public function getDbType()
    {
        return $this->dbType;
    }
    /**
     * Set dbType value
     * @param string $dbType
     * @return \PayPal\StructType\DatabaseCreate
     */
    public function setDbType($dbType = null)
    {
        // validation for constraint: string
        if (!is_null($dbType) && !is_string($dbType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($dbType)), __LINE__);
        }
        $this->dbType = $dbType;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \PayPal\StructType\DatabaseCreate
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
