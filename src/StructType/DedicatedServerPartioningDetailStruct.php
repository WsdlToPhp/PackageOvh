<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for dedicatedServerPartioningDetailStruct StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class DedicatedServerPartioningDetailStruct extends AbstractStructBase
{
    /**
     * The partSize
     * @var string
     */
    public $partSize;
    /**
     * The id
     * @var int
     */
    public $id;
    /**
     * The raidType
     * @var int
     */
    public $raidType;
    /**
     * The mountPoint
     * @var string
     */
    public $mountPoint;
    /**
     * The partType
     * @var string
     */
    public $partType;
    /**
     * The fileSystem
     * @var string
     */
    public $fileSystem;
    /**
     * Constructor method for dedicatedServerPartioningDetailStruct
     * @uses DedicatedServerPartioningDetailStruct::setPartSize()
     * @uses DedicatedServerPartioningDetailStruct::setId()
     * @uses DedicatedServerPartioningDetailStruct::setRaidType()
     * @uses DedicatedServerPartioningDetailStruct::setMountPoint()
     * @uses DedicatedServerPartioningDetailStruct::setPartType()
     * @uses DedicatedServerPartioningDetailStruct::setFileSystem()
     * @param string $partSize
     * @param int $id
     * @param int $raidType
     * @param string $mountPoint
     * @param string $partType
     * @param string $fileSystem
     */
    public function __construct($partSize = null, $id = null, $raidType = null, $mountPoint = null, $partType = null, $fileSystem = null)
    {
        $this
            ->setPartSize($partSize)
            ->setId($id)
            ->setRaidType($raidType)
            ->setMountPoint($mountPoint)
            ->setPartType($partType)
            ->setFileSystem($fileSystem);
    }
    /**
     * Get partSize value
     * @return string|null
     */
    public function getPartSize()
    {
        return $this->partSize;
    }
    /**
     * Set partSize value
     * @param string $partSize
     * @return \Ovh\StructType\DedicatedServerPartioningDetailStruct
     */
    public function setPartSize($partSize = null)
    {
        // validation for constraint: string
        if (!is_null($partSize) && !is_string($partSize)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($partSize)), __LINE__);
        }
        $this->partSize = $partSize;
        return $this;
    }
    /**
     * Get id value
     * @return int|null
     */
    public function getId()
    {
        return $this->id;
    }
    /**
     * Set id value
     * @param int $id
     * @return \Ovh\StructType\DedicatedServerPartioningDetailStruct
     */
    public function setId($id = null)
    {
        // validation for constraint: int
        if (!is_null($id) && !is_numeric($id)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($id)), __LINE__);
        }
        $this->id = $id;
        return $this;
    }
    /**
     * Get raidType value
     * @return int|null
     */
    public function getRaidType()
    {
        return $this->raidType;
    }
    /**
     * Set raidType value
     * @param int $raidType
     * @return \Ovh\StructType\DedicatedServerPartioningDetailStruct
     */
    public function setRaidType($raidType = null)
    {
        // validation for constraint: int
        if (!is_null($raidType) && !is_numeric($raidType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($raidType)), __LINE__);
        }
        $this->raidType = $raidType;
        return $this;
    }
    /**
     * Get mountPoint value
     * @return string|null
     */
    public function getMountPoint()
    {
        return $this->mountPoint;
    }
    /**
     * Set mountPoint value
     * @param string $mountPoint
     * @return \Ovh\StructType\DedicatedServerPartioningDetailStruct
     */
    public function setMountPoint($mountPoint = null)
    {
        // validation for constraint: string
        if (!is_null($mountPoint) && !is_string($mountPoint)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($mountPoint)), __LINE__);
        }
        $this->mountPoint = $mountPoint;
        return $this;
    }
    /**
     * Get partType value
     * @return string|null
     */
    public function getPartType()
    {
        return $this->partType;
    }
    /**
     * Set partType value
     * @param string $partType
     * @return \Ovh\StructType\DedicatedServerPartioningDetailStruct
     */
    public function setPartType($partType = null)
    {
        // validation for constraint: string
        if (!is_null($partType) && !is_string($partType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($partType)), __LINE__);
        }
        $this->partType = $partType;
        return $this;
    }
    /**
     * Get fileSystem value
     * @return string|null
     */
    public function getFileSystem()
    {
        return $this->fileSystem;
    }
    /**
     * Set fileSystem value
     * @param string $fileSystem
     * @return \Ovh\StructType\DedicatedServerPartioningDetailStruct
     */
    public function setFileSystem($fileSystem = null)
    {
        // validation for constraint: string
        if (!is_null($fileSystem) && !is_string($fileSystem)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($fileSystem)), __LINE__);
        }
        $this->fileSystem = $fileSystem;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ovh\StructType\DedicatedServerPartioningDetailStruct
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
