<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for managedServicesPartitionStruct StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class ManagedServicesPartitionStruct extends AbstractStructBase
{
    /**
     * The idZfs
     * @var string
     */
    public $idZfs;
    /**
     * The name
     * @var string
     */
    public $name;
    /**
     * The size
     * @var string
     */
    public $size;
    /**
     * The used
     * @var string
     */
    public $used;
    /**
     * The state
     * @var string
     */
    public $state;
    /**
     * The accessList
     * @var \Ovh\ArrayType\MyArrayOfManagedServicesAclStructType
     */
    public $accessList;
    /**
     * Constructor method for managedServicesPartitionStruct
     * @uses ManagedServicesPartitionStruct::setIdZfs()
     * @uses ManagedServicesPartitionStruct::setName()
     * @uses ManagedServicesPartitionStruct::setSize()
     * @uses ManagedServicesPartitionStruct::setUsed()
     * @uses ManagedServicesPartitionStruct::setState()
     * @uses ManagedServicesPartitionStruct::setAccessList()
     * @param string $idZfs
     * @param string $name
     * @param string $size
     * @param string $used
     * @param string $state
     * @param \Ovh\ArrayType\MyArrayOfManagedServicesAclStructType $accessList
     */
    public function __construct($idZfs = null, $name = null, $size = null, $used = null, $state = null, \Ovh\ArrayType\MyArrayOfManagedServicesAclStructType $accessList = null)
    {
        $this
            ->setIdZfs($idZfs)
            ->setName($name)
            ->setSize($size)
            ->setUsed($used)
            ->setState($state)
            ->setAccessList($accessList);
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
     * @return \Ovh\StructType\ManagedServicesPartitionStruct
     */
    public function setIdZfs($idZfs = null)
    {
        // validation for constraint: string
        if (!is_null($idZfs) && !is_string($idZfs)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($idZfs)), __LINE__);
        }
        $this->idZfs = $idZfs;
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
     * @return \Ovh\StructType\ManagedServicesPartitionStruct
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
     * @return string|null
     */
    public function getSize()
    {
        return $this->size;
    }
    /**
     * Set size value
     * @param string $size
     * @return \Ovh\StructType\ManagedServicesPartitionStruct
     */
    public function setSize($size = null)
    {
        // validation for constraint: string
        if (!is_null($size) && !is_string($size)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($size)), __LINE__);
        }
        $this->size = $size;
        return $this;
    }
    /**
     * Get used value
     * @return string|null
     */
    public function getUsed()
    {
        return $this->used;
    }
    /**
     * Set used value
     * @param string $used
     * @return \Ovh\StructType\ManagedServicesPartitionStruct
     */
    public function setUsed($used = null)
    {
        // validation for constraint: string
        if (!is_null($used) && !is_string($used)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($used)), __LINE__);
        }
        $this->used = $used;
        return $this;
    }
    /**
     * Get state value
     * @return string|null
     */
    public function getState()
    {
        return $this->state;
    }
    /**
     * Set state value
     * @param string $state
     * @return \Ovh\StructType\ManagedServicesPartitionStruct
     */
    public function setState($state = null)
    {
        // validation for constraint: string
        if (!is_null($state) && !is_string($state)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($state)), __LINE__);
        }
        $this->state = $state;
        return $this;
    }
    /**
     * Get accessList value
     * @return \Ovh\ArrayType\MyArrayOfManagedServicesAclStructType|null
     */
    public function getAccessList()
    {
        return $this->accessList;
    }
    /**
     * Set accessList value
     * @param \Ovh\ArrayType\MyArrayOfManagedServicesAclStructType $accessList
     * @return \Ovh\StructType\ManagedServicesPartitionStruct
     */
    public function setAccessList(\Ovh\ArrayType\MyArrayOfManagedServicesAclStructType $accessList = null)
    {
        $this->accessList = $accessList;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ovh\StructType\ManagedServicesPartitionStruct
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
