<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for managedServicesPartitionCreate StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class ManagedServicesPartitionCreate extends AbstractStructBase
{
    /**
     * The session
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $session;
    /**
     * The storage
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $storage;
    /**
     * The name
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $name;
    /**
     * The size
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var int
     */
    public $size;
    /**
     * The protocol
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $protocol;
    /**
     * Constructor method for managedServicesPartitionCreate
     * @uses ManagedServicesPartitionCreate::setSession()
     * @uses ManagedServicesPartitionCreate::setStorage()
     * @uses ManagedServicesPartitionCreate::setName()
     * @uses ManagedServicesPartitionCreate::setSize()
     * @uses ManagedServicesPartitionCreate::setProtocol()
     * @param string $session
     * @param string $storage
     * @param string $name
     * @param int $size
     * @param string $protocol
     */
    public function __construct($session = null, $storage = null, $name = null, $size = null, $protocol = null)
    {
        $this
            ->setSession($session)
            ->setStorage($storage)
            ->setName($name)
            ->setSize($size)
            ->setProtocol($protocol);
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
     * @return \Ovh\StructType\ManagedServicesPartitionCreate
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
     * @return \Ovh\StructType\ManagedServicesPartitionCreate
     */
    public function setStorage($storage = null)
    {
        // validation for constraint: string
        if (!is_null($storage) && !is_string($storage)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($storage)), __LINE__);
        }
        $this->storage = $storage;
        return $this;
    }
    /**
     * Get name value
     * @return string|null
     */
    public function getName()
    {
        return $this->name;
    }
    /**
     * Set name value
     * @param string $name
     * @return \Ovh\StructType\ManagedServicesPartitionCreate
     */
    public function setName($name = null)
    {
        // validation for constraint: string
        if (!is_null($name) && !is_string($name)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($name)), __LINE__);
        }
        $this->name = $name;
        return $this;
    }
    /**
     * Get size value
     * @return int|null
     */
    public function getSize()
    {
        return $this->size;
    }
    /**
     * Set size value
     * @param int $size
     * @return \Ovh\StructType\ManagedServicesPartitionCreate
     */
    public function setSize($size = null)
    {
        // validation for constraint: int
        if (!is_null($size) && !is_numeric($size)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($size)), __LINE__);
        }
        $this->size = $size;
        return $this;
    }
    /**
     * Get protocol value
     * @return string|null
     */
    public function getProtocol()
    {
        return $this->protocol;
    }
    /**
     * Set protocol value
     * @param string $protocol
     * @return \Ovh\StructType\ManagedServicesPartitionCreate
     */
    public function setProtocol($protocol = null)
    {
        // validation for constraint: string
        if (!is_null($protocol) && !is_string($protocol)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($protocol)), __LINE__);
        }
        $this->protocol = $protocol;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ovh\StructType\ManagedServicesPartitionCreate
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
