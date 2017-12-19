<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for databaseDump StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class DatabaseDump extends AbstractStructBase
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
     * The backup
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $backup;
    /**
     * Constructor method for databaseDump
     * @uses DatabaseDump::setSession()
     * @uses DatabaseDump::setDomain()
     * @uses DatabaseDump::setDb()
     * @uses DatabaseDump::setBackup()
     * @param string $session
     * @param string $domain
     * @param string $db
     * @param string $backup
     */
    public function __construct($session = null, $domain = null, $db = null, $backup = null)
    {
        $this
            ->setSession($session)
            ->setDomain($domain)
            ->setDb($db)
            ->setBackup($backup);
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
     * @return \PayPal\StructType\DatabaseDump
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
     * @return \PayPal\StructType\DatabaseDump
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
     * @return \PayPal\StructType\DatabaseDump
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
     * Get backup value
     * @return string|null
     */
    public function getBackup()
    {
        return $this->backup;
    }
    /**
     * Set backup value
     * @param string $backup
     * @return \PayPal\StructType\DatabaseDump
     */
    public function setBackup($backup = null)
    {
        // validation for constraint: string
        if (!is_null($backup) && !is_string($backup)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($backup)), __LINE__);
        }
        $this->backup = $backup;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \PayPal\StructType\DatabaseDump
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
