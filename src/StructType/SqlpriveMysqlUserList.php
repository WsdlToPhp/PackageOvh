<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for sqlpriveMysqlUserList StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class SqlpriveMysqlUserList extends AbstractStructBase
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
     * Constructor method for sqlpriveMysqlUserList
     * @uses SqlpriveMysqlUserList::setSession()
     * @uses SqlpriveMysqlUserList::setServer()
     * @param string $session
     * @param string $server
     */
    public function __construct($session = null, $server = null)
    {
        $this
            ->setSession($session)
            ->setServer($server);
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
     * @return \Ovh\StructType\SqlpriveMysqlUserList
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
     * @return \Ovh\StructType\SqlpriveMysqlUserList
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
}
