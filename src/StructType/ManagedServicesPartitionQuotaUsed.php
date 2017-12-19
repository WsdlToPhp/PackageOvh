<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for managedServicesPartitionQuotaUsed StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class ManagedServicesPartitionQuotaUsed extends AbstractStructBase
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
     * The partitionName
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $partitionName;
    /**
     * Constructor method for managedServicesPartitionQuotaUsed
     * @uses ManagedServicesPartitionQuotaUsed::setSession()
     * @uses ManagedServicesPartitionQuotaUsed::setStorage()
     * @uses ManagedServicesPartitionQuotaUsed::setPartitionName()
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
     * @return \PayPal\StructType\ManagedServicesPartitionQuotaUsed
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
     * @return \PayPal\StructType\ManagedServicesPartitionQuotaUsed
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
     * @return \PayPal\StructType\ManagedServicesPartitionQuotaUsed
     */
    public function setPartitionName($partitionName = null)
    {
        // validation for constraint: string
        if (!is_null($partitionName) && !is_string($partitionName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($partitionName)), __LINE__);
        }
        $this->partitionName = $partitionName;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \PayPal\StructType\ManagedServicesPartitionQuotaUsed
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
