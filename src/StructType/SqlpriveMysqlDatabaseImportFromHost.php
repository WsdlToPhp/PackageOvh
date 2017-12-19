<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for sqlpriveMysqlDatabaseImportFromHost StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class SqlpriveMysqlDatabaseImportFromHost extends AbstractStructBase
{
    /**
     * The session
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $session;
    /**
     * The server
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $server;
    /**
     * The database
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $database;
    /**
     * The foreignHost
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $foreignHost;
    /**
     * The foreignUser
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $foreignUser;
    /**
     * The foreignPassword
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $foreignPassword;
    /**
     * The foreignDatabase
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $foreignDatabase;
    /**
     * Constructor method for sqlpriveMysqlDatabaseImportFromHost
     * @uses SqlpriveMysqlDatabaseImportFromHost::setSession()
     * @uses SqlpriveMysqlDatabaseImportFromHost::setServer()
     * @uses SqlpriveMysqlDatabaseImportFromHost::setDatabase()
     * @uses SqlpriveMysqlDatabaseImportFromHost::setForeignHost()
     * @uses SqlpriveMysqlDatabaseImportFromHost::setForeignUser()
     * @uses SqlpriveMysqlDatabaseImportFromHost::setForeignPassword()
     * @uses SqlpriveMysqlDatabaseImportFromHost::setForeignDatabase()
     * @param string $session
     * @param string $server
     * @param string $database
     * @param string $foreignHost
     * @param string $foreignUser
     * @param string $foreignPassword
     * @param string $foreignDatabase
     */
    public function __construct($session = null, $server = null, $database = null, $foreignHost = null, $foreignUser = null, $foreignPassword = null, $foreignDatabase = null)
    {
        $this
            ->setSession($session)
            ->setServer($server)
            ->setDatabase($database)
            ->setForeignHost($foreignHost)
            ->setForeignUser($foreignUser)
            ->setForeignPassword($foreignPassword)
            ->setForeignDatabase($foreignDatabase);
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
     * @return \Ovh\StructType\SqlpriveMysqlDatabaseImportFromHost
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
     * Get server value
     * @return string|null
     */
    public function getServer()
    {
        return $this->server;
    }
    /**
     * Set server value
     * @param string $server
     * @return \Ovh\StructType\SqlpriveMysqlDatabaseImportFromHost
     */
    public function setServer($server = null)
    {
        // validation for constraint: string
        if (!is_null($server) && !is_string($server)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($server)), __LINE__);
        }
        $this->server = $server;
        return $this;
    }
    /**
     * Get database value
     * @return string|null
     */
    public function getDatabase()
    {
        return $this->database;
    }
    /**
     * Set database value
     * @param string $database
     * @return \Ovh\StructType\SqlpriveMysqlDatabaseImportFromHost
     */
    public function setDatabase($database = null)
    {
        // validation for constraint: string
        if (!is_null($database) && !is_string($database)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($database)), __LINE__);
        }
        $this->database = $database;
        return $this;
    }
    /**
     * Get foreignHost value
     * @return string|null
     */
    public function getForeignHost()
    {
        return $this->foreignHost;
    }
    /**
     * Set foreignHost value
     * @param string $foreignHost
     * @return \Ovh\StructType\SqlpriveMysqlDatabaseImportFromHost
     */
    public function setForeignHost($foreignHost = null)
    {
        // validation for constraint: string
        if (!is_null($foreignHost) && !is_string($foreignHost)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($foreignHost)), __LINE__);
        }
        $this->foreignHost = $foreignHost;
        return $this;
    }
    /**
     * Get foreignUser value
     * @return string|null
     */
    public function getForeignUser()
    {
        return $this->foreignUser;
    }
    /**
     * Set foreignUser value
     * @param string $foreignUser
     * @return \Ovh\StructType\SqlpriveMysqlDatabaseImportFromHost
     */
    public function setForeignUser($foreignUser = null)
    {
        // validation for constraint: string
        if (!is_null($foreignUser) && !is_string($foreignUser)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($foreignUser)), __LINE__);
        }
        $this->foreignUser = $foreignUser;
        return $this;
    }
    /**
     * Get foreignPassword value
     * @return string|null
     */
    public function getForeignPassword()
    {
        return $this->foreignPassword;
    }
    /**
     * Set foreignPassword value
     * @param string $foreignPassword
     * @return \Ovh\StructType\SqlpriveMysqlDatabaseImportFromHost
     */
    public function setForeignPassword($foreignPassword = null)
    {
        // validation for constraint: string
        if (!is_null($foreignPassword) && !is_string($foreignPassword)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($foreignPassword)), __LINE__);
        }
        $this->foreignPassword = $foreignPassword;
        return $this;
    }
    /**
     * Get foreignDatabase value
     * @return string|null
     */
    public function getForeignDatabase()
    {
        return $this->foreignDatabase;
    }
    /**
     * Set foreignDatabase value
     * @param string $foreignDatabase
     * @return \Ovh\StructType\SqlpriveMysqlDatabaseImportFromHost
     */
    public function setForeignDatabase($foreignDatabase = null)
    {
        // validation for constraint: string
        if (!is_null($foreignDatabase) && !is_string($foreignDatabase)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($foreignDatabase)), __LINE__);
        }
        $this->foreignDatabase = $foreignDatabase;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ovh\StructType\SqlpriveMysqlDatabaseImportFromHost
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
