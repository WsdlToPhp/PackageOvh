<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for sqlpriveMysqlDatabaseSave StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class SqlpriveMysqlDatabaseSave extends AbstractStructBase
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
     * The comment
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $comment;
    /**
     * The compress
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var bool
     */
    public $compress;
    /**
     * Constructor method for sqlpriveMysqlDatabaseSave
     * @uses SqlpriveMysqlDatabaseSave::setSession()
     * @uses SqlpriveMysqlDatabaseSave::setServer()
     * @uses SqlpriveMysqlDatabaseSave::setDatabase()
     * @uses SqlpriveMysqlDatabaseSave::setComment()
     * @uses SqlpriveMysqlDatabaseSave::setCompress()
     * @param string $session
     * @param string $server
     * @param string $database
     * @param string $comment
     * @param bool $compress
     */
    public function __construct($session = null, $server = null, $database = null, $comment = null, $compress = null)
    {
        $this
            ->setSession($session)
            ->setServer($server)
            ->setDatabase($database)
            ->setComment($comment)
            ->setCompress($compress);
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
     * @return \Ovh\StructType\SqlpriveMysqlDatabaseSave
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
     * @return \Ovh\StructType\SqlpriveMysqlDatabaseSave
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
     * @return \Ovh\StructType\SqlpriveMysqlDatabaseSave
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
     * Get comment value
     * @return string|null
     */
    public function getComment()
    {
        return $this->comment;
    }
    /**
     * Set comment value
     * @param string $comment
     * @return \Ovh\StructType\SqlpriveMysqlDatabaseSave
     */
    public function setComment($comment = null)
    {
        // validation for constraint: string
        if (!is_null($comment) && !is_string($comment)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($comment, true), gettype($comment)), __LINE__);
        }
        $this->comment = $comment;
        return $this;
    }
    /**
     * Get compress value
     * @return bool|null
     */
    public function getCompress()
    {
        return $this->compress;
    }
    /**
     * Set compress value
     * @param bool $compress
     * @return \Ovh\StructType\SqlpriveMysqlDatabaseSave
     */
    public function setCompress($compress = null)
    {
        // validation for constraint: boolean
        if (!is_null($compress) && !is_bool($compress)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($compress, true), gettype($compress)), __LINE__);
        }
        $this->compress = $compress;
        return $this;
    }
}
