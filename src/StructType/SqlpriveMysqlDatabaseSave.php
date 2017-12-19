<?php

namespace PayPal\StructType;

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
     * The comment
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $comment;
    /**
     * The compress
     * Meta informations extracted from the WSDL
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
     * @return \PayPal\StructType\SqlpriveMysqlDatabaseSave
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
     * @return \PayPal\StructType\SqlpriveMysqlDatabaseSave
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
     * @return \PayPal\StructType\SqlpriveMysqlDatabaseSave
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
     * @return \PayPal\StructType\SqlpriveMysqlDatabaseSave
     */
    public function setComment($comment = null)
    {
        // validation for constraint: string
        if (!is_null($comment) && !is_string($comment)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($comment)), __LINE__);
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
     * @return \PayPal\StructType\SqlpriveMysqlDatabaseSave
     */
    public function setCompress($compress = null)
    {
        // validation for constraint: boolean
        if (!is_null($compress) && !is_bool($compress)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($compress)), __LINE__);
        }
        $this->compress = $compress;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \PayPal\StructType\SqlpriveMysqlDatabaseSave
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
