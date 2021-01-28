<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for sqlpriveCronDel StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class SqlpriveCronDel extends AbstractStructBase
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
     * The cronId
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $cronId;
    /**
     * Constructor method for sqlpriveCronDel
     * @uses SqlpriveCronDel::setSession()
     * @uses SqlpriveCronDel::setServer()
     * @uses SqlpriveCronDel::setCronId()
     * @param string $session
     * @param string $server
     * @param string $cronId
     */
    public function __construct($session = null, $server = null, $cronId = null)
    {
        $this
            ->setSession($session)
            ->setServer($server)
            ->setCronId($cronId);
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
     * @return \Ovh\StructType\SqlpriveCronDel
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
     * @return \Ovh\StructType\SqlpriveCronDel
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
     * Get cronId value
     * @return string|null
     */
    public function getCronId()
    {
        return $this->cronId;
    }
    /**
     * Set cronId value
     * @param string $cronId
     * @return \Ovh\StructType\SqlpriveCronDel
     */
    public function setCronId($cronId = null)
    {
        // validation for constraint: string
        if (!is_null($cronId) && !is_string($cronId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cronId, true), gettype($cronId)), __LINE__);
        }
        $this->cronId = $cronId;
        return $this;
    }
}
