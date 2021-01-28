<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for managedServicesPartitionStatusCheck StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class ManagedServicesPartitionStatusCheck extends AbstractStructBase
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
     * The partitionName
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $partitionName;
    /**
     * Constructor method for managedServicesPartitionStatusCheck
     * @uses ManagedServicesPartitionStatusCheck::setSession()
     * @uses ManagedServicesPartitionStatusCheck::setStorage()
     * @uses ManagedServicesPartitionStatusCheck::setPartitionName()
     * @param string $session
     * @param string $storage
     * @param string $partitionName
     */
    public function __construct($session = null, $storage = null, $partitionName = null)
    {
        $this
            ->setSession($session)
            ->setStorage($storage)
            ->setPartitionName($partitionName);
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
     * @return \Ovh\StructType\ManagedServicesPartitionStatusCheck
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
     * @return \Ovh\StructType\ManagedServicesPartitionStatusCheck
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
     * Get partitionName value
     * @return string|null
     */
    public function getPartitionName()
    {
        return $this->partitionName;
    }
    /**
     * Set partitionName value
     * @param string $partitionName
     * @return \Ovh\StructType\ManagedServicesPartitionStatusCheck
     */
    public function setPartitionName($partitionName = null)
    {
        // validation for constraint: string
        if (!is_null($partitionName) && !is_string($partitionName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($partitionName, true), gettype($partitionName)), __LINE__);
        }
        $this->partitionName = $partitionName;
        return $this;
    }
}
