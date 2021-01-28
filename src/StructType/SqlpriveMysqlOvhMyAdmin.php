<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for sqlpriveMysqlOvhMyAdmin StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class SqlpriveMysqlOvhMyAdmin extends AbstractStructBase
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
     * The function
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $function;
    /**
     * The database
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $database;
    /**
     * The username
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $username;
    /**
     * The password
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $password;
    /**
     * Constructor method for sqlpriveMysqlOvhMyAdmin
     * @uses SqlpriveMysqlOvhMyAdmin::setSession()
     * @uses SqlpriveMysqlOvhMyAdmin::setServer()
     * @uses SqlpriveMysqlOvhMyAdmin::setFunction()
     * @uses SqlpriveMysqlOvhMyAdmin::setDatabase()
     * @uses SqlpriveMysqlOvhMyAdmin::setUsername()
     * @uses SqlpriveMysqlOvhMyAdmin::setPassword()
     * @param string $session
     * @param string $server
     * @param string $function
     * @param string $database
     * @param string $username
     * @param string $password
     */
    public function __construct($session = null, $server = null, $function = null, $database = null, $username = null, $password = null)
    {
        $this
            ->setSession($session)
            ->setServer($server)
            ->setFunction($function)
            ->setDatabase($database)
            ->setUsername($username)
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
     * @return \Ovh\StructType\SqlpriveMysqlOvhMyAdmin
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
     * @return \Ovh\StructType\SqlpriveMysqlOvhMyAdmin
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
     * Get function value
     * @return string|null
     */
    public function getFunction()
    {
        return $this->function;
    }
    /**
     * Set function value
     * @param string $function
     * @return \Ovh\StructType\SqlpriveMysqlOvhMyAdmin
     */
    public function setFunction($function = null)
    {
        // validation for constraint: string
        if (!is_null($function) && !is_string($function)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($function, true), gettype($function)), __LINE__);
        }
        $this->function = $function;
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
     * @return \Ovh\StructType\SqlpriveMysqlOvhMyAdmin
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
     * Get username value
     * @return string|null
     */
    public function getUsername()
    {
        return $this->username;
    }
    /**
     * Set username value
     * @param string $username
     * @return \Ovh\StructType\SqlpriveMysqlOvhMyAdmin
     */
    public function setUsername($username = null)
    {
        // validation for constraint: string
        if (!is_null($username) && !is_string($username)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($username, true), gettype($username)), __LINE__);
        }
        $this->username = $username;
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
     * @return \Ovh\StructType\SqlpriveMysqlOvhMyAdmin
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
