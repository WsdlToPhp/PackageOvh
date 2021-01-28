<?php

namespace Ovh\StructType;

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
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $session;
    /**
     * The server
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $server;
    /**
     * The database
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $database;
    /**
     * The filename
     * Meta information extracted from the WSDL
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
     * @return \Ovh\StructType\SqlpriveMysqlDatabaseImportFromFile
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
     * @return \Ovh\StructType\SqlpriveMysqlDatabaseImportFromFile
     */
    public function setServer($server = null)
    {
        // validation for constraint: string
        if (!is_null($server) && !is_string($server)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($server, true), gettype($server)), __LINE__);
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
     * @return \Ovh\StructType\SqlpriveMysqlDatabaseImportFromFile
     */
    public function setDatabase($database = null)
    {
        // validation for constraint: string
        if (!is_null($database) && !is_string($database)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($database, true), gettype($database)), __LINE__);
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
     * @return \Ovh\StructType\SqlpriveMysqlDatabaseImportFromFile
     */
    public function setFilename($filename = null)
    {
        // validation for constraint: string
        if (!is_null($filename) && !is_string($filename)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($filename, true), gettype($filename)), __LINE__);
        }
        $this->filename = $filename;
        return $this;
    }
}
