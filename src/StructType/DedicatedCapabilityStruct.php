<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for dedicatedCapabilityStruct StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class DedicatedCapabilityStruct extends AbstractStructBase
{
    /**
     * The backupFtp
     * @var int
     */
    public $backupFtp;
    /**
     * The backupFtpServer
     * @var string
     */
    public $backupFtpServer;
    /**
     * The allocationBlockIp
     * @var int
     */
    public $allocationBlockIp;
    /**
     * The additionalIp
     * @var int
     */
    public $additionalIp;
    /**
     * The rootDevice
     * @var string
     */
    public $rootDevice;
    /**
     * The diskSize
     * @var int
     */
    public $diskSize;
    /**
     * The tuning
     * @var int
     */
    public $tuning;
    /**
     * Constructor method for dedicatedCapabilityStruct
     * @uses DedicatedCapabilityStruct::setBackupFtp()
     * @uses DedicatedCapabilityStruct::setBackupFtpServer()
     * @uses DedicatedCapabilityStruct::setAllocationBlockIp()
     * @uses DedicatedCapabilityStruct::setAdditionalIp()
     * @uses DedicatedCapabilityStruct::setRootDevice()
     * @uses DedicatedCapabilityStruct::setDiskSize()
     * @uses DedicatedCapabilityStruct::setTuning()
     * @param int $backupFtp
     * @param string $backupFtpServer
     * @param int $allocationBlockIp
     * @param int $additionalIp
     * @param string $rootDevice
     * @param int $diskSize
     * @param int $tuning
     */
    public function __construct($backupFtp = null, $backupFtpServer = null, $allocationBlockIp = null, $additionalIp = null, $rootDevice = null, $diskSize = null, $tuning = null)
    {
        $this
            ->setBackupFtp($backupFtp)
            ->setBackupFtpServer($backupFtpServer)
            ->setAllocationBlockIp($allocationBlockIp)
            ->setAdditionalIp($additionalIp)
            ->setRootDevice($rootDevice)
            ->setDiskSize($diskSize)
            ->setTuning($tuning);
    }
    /**
     * Get backupFtp value
     * @return int|null
     */
    public function getBackupFtp()
    {
        return $this->backupFtp;
    }
    /**
     * Set backupFtp value
     * @param int $backupFtp
     * @return \Ovh\StructType\DedicatedCapabilityStruct
     */
    public function setBackupFtp($backupFtp = null)
    {
        // validation for constraint: int
        if (!is_null($backupFtp) && !(is_int($backupFtp) || ctype_digit($backupFtp))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($backupFtp, true), gettype($backupFtp)), __LINE__);
        }
        $this->backupFtp = $backupFtp;
        return $this;
    }
    /**
     * Get backupFtpServer value
     * @return string|null
     */
    public function getBackupFtpServer()
    {
        return $this->backupFtpServer;
    }
    /**
     * Set backupFtpServer value
     * @param string $backupFtpServer
     * @return \Ovh\StructType\DedicatedCapabilityStruct
     */
    public function setBackupFtpServer($backupFtpServer = null)
    {
        // validation for constraint: string
        if (!is_null($backupFtpServer) && !is_string($backupFtpServer)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($backupFtpServer, true), gettype($backupFtpServer)), __LINE__);
        }
        $this->backupFtpServer = $backupFtpServer;
        return $this;
    }
    /**
     * Get allocationBlockIp value
     * @return int|null
     */
    public function getAllocationBlockIp()
    {
        return $this->allocationBlockIp;
    }
    /**
     * Set allocationBlockIp value
     * @param int $allocationBlockIp
     * @return \Ovh\StructType\DedicatedCapabilityStruct
     */
    public function setAllocationBlockIp($allocationBlockIp = null)
    {
        // validation for constraint: int
        if (!is_null($allocationBlockIp) && !(is_int($allocationBlockIp) || ctype_digit($allocationBlockIp))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($allocationBlockIp, true), gettype($allocationBlockIp)), __LINE__);
        }
        $this->allocationBlockIp = $allocationBlockIp;
        return $this;
    }
    /**
     * Get additionalIp value
     * @return int|null
     */
    public function getAdditionalIp()
    {
        return $this->additionalIp;
    }
    /**
     * Set additionalIp value
     * @param int $additionalIp
     * @return \Ovh\StructType\DedicatedCapabilityStruct
     */
    public function setAdditionalIp($additionalIp = null)
    {
        // validation for constraint: int
        if (!is_null($additionalIp) && !(is_int($additionalIp) || ctype_digit($additionalIp))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($additionalIp, true), gettype($additionalIp)), __LINE__);
        }
        $this->additionalIp = $additionalIp;
        return $this;
    }
    /**
     * Get rootDevice value
     * @return string|null
     */
    public function getRootDevice()
    {
        return $this->rootDevice;
    }
    /**
     * Set rootDevice value
     * @param string $rootDevice
     * @return \Ovh\StructType\DedicatedCapabilityStruct
     */
    public function setRootDevice($rootDevice = null)
    {
        // validation for constraint: string
        if (!is_null($rootDevice) && !is_string($rootDevice)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($rootDevice, true), gettype($rootDevice)), __LINE__);
        }
        $this->rootDevice = $rootDevice;
        return $this;
    }
    /**
     * Get diskSize value
     * @return int|null
     */
    public function getDiskSize()
    {
        return $this->diskSize;
    }
    /**
     * Set diskSize value
     * @param int $diskSize
     * @return \Ovh\StructType\DedicatedCapabilityStruct
     */
    public function setDiskSize($diskSize = null)
    {
        // validation for constraint: int
        if (!is_null($diskSize) && !(is_int($diskSize) || ctype_digit($diskSize))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($diskSize, true), gettype($diskSize)), __LINE__);
        }
        $this->diskSize = $diskSize;
        return $this;
    }
    /**
     * Get tuning value
     * @return int|null
     */
    public function getTuning()
    {
        return $this->tuning;
    }
    /**
     * Set tuning value
     * @param int $tuning
     * @return \Ovh\StructType\DedicatedCapabilityStruct
     */
    public function setTuning($tuning = null)
    {
        // validation for constraint: int
        if (!is_null($tuning) && !(is_int($tuning) || ctype_digit($tuning))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($tuning, true), gettype($tuning)), __LINE__);
        }
        $this->tuning = $tuning;
        return $this;
    }
}
