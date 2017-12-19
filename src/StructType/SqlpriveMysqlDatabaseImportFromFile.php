<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for sqlpriveMysqlDatabaseImportFromFile StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class SqlpriveMysqlDatabaseImportFromFile extends AbstractStructBase
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
     * The filename
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $filename;
    /**
     * Constructor method for sqlpriveMysqlDatabaseImportFromFile
     * @uses SqlpriveMysqlDatabaseImportFromFile::setSession()
     * @uses SqlpriveMysqlDatabaseImportFromFile::setServer()
     * @uses SqlpriveMysqlDatabaseImportFromFile::setDatabase()
     * @uses SqlpriveMysqlDatabaseImportFromFile::setFilename()
     * @param string $session
     * @param string $server
     * @param string $database
     * @param string $filename
     */
    public function __construct($session = null, $server = null, $database = null, $filename = null)
    {
        $this
            ->setSession($session)
            ->setServer($server)
            ->setDatabase($database)
            ->setFilename($filename);
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
     * @return \PayPal\StructType\SqlpriveMysqlDatabaseImportFromFile
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
     * @return \PayPal\StructType\SqlpriveMysqlDatabaseImportFromFile
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
     * @return \PayPal\StructType\SqlpriveMysqlDatabaseImportFromFile
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
     * Get filename value
     * @return string|null
     */
    public function getFilename()
    {
        return $this->filename;
    }
    /**
     * Set filename value
     * @param string $filename
     * @return \PayPal\StructType\SqlpriveMysqlDatabaseImportFromFile
     */
    public function setFilename($filename = null)
    {
        // validation for constraint: string
        if (!is_null($filename) && !is_string($filename)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($filename)), __LINE__);
        }
        $this->filename = $filename;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \PayPal\StructType\SqlpriveMysqlDatabaseImportFromFile
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
