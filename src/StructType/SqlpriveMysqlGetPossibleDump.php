<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for sqlpriveMysqlGetPossibleDump StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class SqlpriveMysqlGetPossibleDump extends AbstractStructBase
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
     * The directory
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $directory;
    /**
     * Constructor method for sqlpriveMysqlGetPossibleDump
     * @uses SqlpriveMysqlGetPossibleDump::setSession()
     * @uses SqlpriveMysqlGetPossibleDump::setServer()
     * @uses SqlpriveMysqlGetPossibleDump::setDirectory()
     * @param string $session
     * @param string $server
     * @param string $directory
     */
    public function __construct($session = null, $server = null, $directory = null)
    {
        $this
            ->setSession($session)
            ->setServer($server)
            ->setDirectory($directory);
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
     * @return \Ovh\StructType\SqlpriveMysqlGetPossibleDump
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
     * @return \Ovh\StructType\SqlpriveMysqlGetPossibleDump
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
     * Get directory value
     * @return string|null
     */
    public function getDirectory()
    {
        return $this->directory;
    }
    /**
     * Set directory value
     * @param string $directory
     * @return \Ovh\StructType\SqlpriveMysqlGetPossibleDump
     */
    public function setDirectory($directory = null)
    {
        // validation for constraint: string
        if (!is_null($directory) && !is_string($directory)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($directory, true), gettype($directory)), __LINE__);
        }
        $this->directory = $directory;
        return $this;
    }
}
