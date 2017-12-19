<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for dedicatedIpVirtualMacUsedStruct StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class DedicatedIpVirtualMacUsedStruct extends AbstractStructBase
{
    /**
     * The virtualMachineName
     * @var string
     */
    public $virtualMachineName;
    /**
     * The status
     * @var string
     */
    public $status;
    /**
     * The ipAddress
     * @var string
     */
    public $ipAddress;
    /**
     * The type
     * @var string
     */
    public $type;
    /**
     * The mac
     * @var string
     */
    public $mac;
    /**
     * Constructor method for dedicatedIpVirtualMacUsedStruct
     * @uses DedicatedIpVirtualMacUsedStruct::setVirtualMachineName()
     * @uses DedicatedIpVirtualMacUsedStruct::setStatus()
     * @uses DedicatedIpVirtualMacUsedStruct::setIpAddress()
     * @uses DedicatedIpVirtualMacUsedStruct::setType()
     * @uses DedicatedIpVirtualMacUsedStruct::setMac()
     * @param string $virtualMachineName
     * @param string $status
     * @param string $ipAddress
     * @param string $type
     * @param string $mac
     */
    public function __construct($virtualMachineName = null, $status = null, $ipAddress = null, $type = null, $mac = null)
    {
        $this
            ->setVirtualMachineName($virtualMachineName)
            ->setStatus($status)
            ->setIpAddress($ipAddress)
            ->setType($type)
            ->setMac($mac);
    }
    /**
     * Get virtualMachineName value
     * @return string|null
     */
    public function getVirtualMachineName()
    {
        return $this->virtualMachineName;
    }
    /**
     * Set virtualMachineName value
     * @param string $virtualMachineName
     * @return \PayPal\StructType\DedicatedIpVirtualMacUsedStruct
     */
    public function setVirtualMachineName($virtualMachineName = null)
    {
        // validation for constraint: string
        if (!is_null($virtualMachineName) && !is_string($virtualMachineName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($virtualMachineName)), __LINE__);
        }
        $this->virtualMachineName = $virtualMachineName;
        return $this;
    }
    /**
     * Get status value
     * @return string|null
     */
    public function getStatus()
    {
        return $this->status;
    }
    /**
     * Set status value
     * @param string $status
     * @return \PayPal\StructType\DedicatedIpVirtualMacUsedStruct
     */
    public function setStatus($status = null)
    {
        // validation for constraint: string
        if (!is_null($status) && !is_string($status)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($status)), __LINE__);
        }
        $this->status = $status;
        return $this;
    }
    /**
     * Get ipAddress value
     * @return string|null
     */
    public function getIpAddress()
    {
        return $this->ipAddress;
    }
    /**
     * Set ipAddress value
     * @param string $ipAddress
     * @return \PayPal\StructType\DedicatedIpVirtualMacUsedStruct
     */
    public function setIpAddress($ipAddress = null)
    {
        // validation for constraint: string
        if (!is_null($ipAddress) && !is_string($ipAddress)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($ipAddress)), __LINE__);
        }
        $this->ipAddress = $ipAddress;
        return $this;
    }
    /**
     * Get type value
     * @return string|null
     */
    public function getType()
    {
        return $this->type;
    }
    /**
     * Set type value
     * @param string $type
     * @return \PayPal\StructType\DedicatedIpVirtualMacUsedStruct
     */
    public function setType($type = null)
    {
        // validation for constraint: string
        if (!is_null($type) && !is_string($type)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($type)), __LINE__);
        }
        $this->type = $type;
        return $this;
    }
    /**
     * Get mac value
     * @return string|null
     */
    public function getMac()
    {
        return $this->mac;
    }
    /**
     * Set mac value
     * @param string $mac
     * @return \PayPal\StructType\DedicatedIpVirtualMacUsedStruct
     */
    public function setMac($mac = null)
    {
        // validation for constraint: string
        if (!is_null($mac) && !is_string($mac)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($mac)), __LINE__);
        }
        $this->mac = $mac;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \PayPal\StructType\DedicatedIpVirtualMacUsedStruct
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
