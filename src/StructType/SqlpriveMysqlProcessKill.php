<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for sqlpriveMysqlProcessKill StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class SqlpriveMysqlProcessKill extends AbstractStructBase
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
     * The process
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var int
     */
    public $process;
    /**
     * Constructor method for sqlpriveMysqlProcessKill
     * @uses SqlpriveMysqlProcessKill::setSession()
     * @uses SqlpriveMysqlProcessKill::setServer()
     * @uses SqlpriveMysqlProcessKill::setProcess()
     * @param string $session
     * @param string $server
     * @param int $process
     */
    public function __construct($session = null, $server = null, $process = null)
    {
        $this
            ->setSession($session)
            ->setServer($server)
            ->setProcess($process);
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
     * @return \Ovh\StructType\SqlpriveMysqlProcessKill
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
     * @return \Ovh\StructType\SqlpriveMysqlProcessKill
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
     * Get process value
     * @return int|null
     */
    public function getProcess()
    {
        return $this->process;
    }
    /**
     * Set process value
     * @param int $process
     * @return \Ovh\StructType\SqlpriveMysqlProcessKill
     */
    public function setProcess($process = null)
    {
        // validation for constraint: int
        if (!is_null($process) && !(is_int($process) || ctype_digit($process))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($process, true), gettype($process)), __LINE__);
        }
        $this->process = $process;
        return $this;
    }
}
