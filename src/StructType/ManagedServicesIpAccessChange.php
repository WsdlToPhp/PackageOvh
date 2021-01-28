<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for managedServicesIpAccessChange StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class ManagedServicesIpAccessChange extends AbstractStructBase
{
    /**
     * The session
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $session;
    /**
     * The storage
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $storage;
    /**
     * The value
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $value;
    /**
     * The server
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $server;
    /**
     * The idZfs
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $idZfs;
    /**
     * Constructor method for managedServicesIpAccessChange
     * @uses ManagedServicesIpAccessChange::setSession()
     * @uses ManagedServicesIpAccessChange::setStorage()
     * @uses ManagedServicesIpAccessChange::setValue()
     * @uses ManagedServicesIpAccessChange::setServer()
     * @uses ManagedServicesIpAccessChange::setIdZfs()
     * @param string $session
     * @param string $storage
     * @param string $value
     * @param string $server
     * @param string $idZfs
     */
    public function __construct($session = null, $storage = null, $value = null, $server = null, $idZfs = null)
    {
        $this
            ->setSession($session)
            ->setStorage($storage)
            ->setValue($value)
            ->setServer($server)
            ->setIdZfs($idZfs);
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
     * @return \Ovh\StructType\ManagedServicesIpAccessChange
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
     * Get storage value
     * @return string|null
     */
    public function getStorage()
    {
        return $this->storage;
    }
    /**
     * Set storage value
     * @param string $storage
     * @return \Ovh\StructType\ManagedServicesIpAccessChange
     */
    public function setStorage($storage = null)
    {
        // validation for constraint: string
        if (!is_null($storage) && !is_string($storage)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($storage, true), gettype($storage)), __LINE__);
        }
        $this->storage = $storage;
        return $this;
    }
    /**
     * Get value value
     * @return string|null
     */
    public function getValue()
    {
        return $this->value;
    }
    /**
     * Set value value
     * @param string $value
     * @return \Ovh\StructType\ManagedServicesIpAccessChange
     */
    public function setValue($value = null)
    {
        // validation for constraint: string
        if (!is_null($value) && !is_string($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($value, true), gettype($value)), __LINE__);
        }
        $this->value = $value;
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
     * @return \Ovh\StructType\ManagedServicesIpAccessChange
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
     * Get idZfs value
     * @return string|null
     */
    public function getIdZfs()
    {
        return $this->idZfs;
    }
    /**
     * Set idZfs value
     * @param string $idZfs
     * @return \Ovh\StructType\ManagedServicesIpAccessChange
     */
    public function setIdZfs($idZfs = null)
    {
        // validation for constraint: string
        if (!is_null($idZfs) && !is_string($idZfs)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($idZfs, true), gettype($idZfs)), __LINE__);
        }
        $this->idZfs = $idZfs;
        return $this;
    }
}
