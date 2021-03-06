<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for dedicatedFailoverRipeStruct StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class DedicatedFailoverRipeStruct extends AbstractStructBase
{
    /**
     * The country
     * @var string
     */
    public $country;
    /**
     * The netname
     * @var string
     */
    public $netname;
    /**
     * The routedTo
     * @var string
     */
    public $routedTo;
    /**
     * The routingStatus
     * @var string
     */
    public $routingStatus;
    /**
     * The status
     * @var string
     */
    public $status;
    /**
     * The addressesNumber
     * @var int
     */
    public $addressesNumber;
    /**
     * The networkIp
     * @var string
     */
    public $networkIp;
    /**
     * The isExclude
     * @var bool
     */
    public $isExclude;
    /**
     * Constructor method for dedicatedFailoverRipeStruct
     * @uses DedicatedFailoverRipeStruct::setCountry()
     * @uses DedicatedFailoverRipeStruct::setNetname()
     * @uses DedicatedFailoverRipeStruct::setRoutedTo()
     * @uses DedicatedFailoverRipeStruct::setRoutingStatus()
     * @uses DedicatedFailoverRipeStruct::setStatus()
     * @uses DedicatedFailoverRipeStruct::setAddressesNumber()
     * @uses DedicatedFailoverRipeStruct::setNetworkIp()
     * @uses DedicatedFailoverRipeStruct::setIsExclude()
     * @param string $country
     * @param string $netname
     * @param string $routedTo
     * @param string $routingStatus
     * @param string $status
     * @param int $addressesNumber
     * @param string $networkIp
     * @param bool $isExclude
     */
    public function __construct($country = null, $netname = null, $routedTo = null, $routingStatus = null, $status = null, $addressesNumber = null, $networkIp = null, $isExclude = null)
    {
        $this
            ->setCountry($country)
            ->setNetname($netname)
            ->setRoutedTo($routedTo)
            ->setRoutingStatus($routingStatus)
            ->setStatus($status)
            ->setAddressesNumber($addressesNumber)
            ->setNetworkIp($networkIp)
            ->setIsExclude($isExclude);
    }
    /**
     * Get country value
     * @return string|null
     */
    public function getCountry()
    {
        return $this->country;
    }
    /**
     * Set country value
     * @param string $country
     * @return \Ovh\StructType\DedicatedFailoverRipeStruct
     */
    public function setCountry($country = null)
    {
        // validation for constraint: string
        if (!is_null($country) && !is_string($country)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($country, true), gettype($country)), __LINE__);
        }
        $this->country = $country;
        return $this;
    }
    /**
     * Get netname value
     * @return string|null
     */
    public function getNetname()
    {
        return $this->netname;
    }
    /**
     * Set netname value
     * @param string $netname
     * @return \Ovh\StructType\DedicatedFailoverRipeStruct
     */
    public function setNetname($netname = null)
    {
        // validation for constraint: string
        if (!is_null($netname) && !is_string($netname)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($netname, true), gettype($netname)), __LINE__);
        }
        $this->netname = $netname;
        return $this;
    }
    /**
     * Get routedTo value
     * @return string|null
     */
    public function getRoutedTo()
    {
        return $this->routedTo;
    }
    /**
     * Set routedTo value
     * @param string $routedTo
     * @return \Ovh\StructType\DedicatedFailoverRipeStruct
     */
    public function setRoutedTo($routedTo = null)
    {
        // validation for constraint: string
        if (!is_null($routedTo) && !is_string($routedTo)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($routedTo, true), gettype($routedTo)), __LINE__);
        }
        $this->routedTo = $routedTo;
        return $this;
    }
    /**
     * Get routingStatus value
     * @return string|null
     */
    public function getRoutingStatus()
    {
        return $this->routingStatus;
    }
    /**
     * Set routingStatus value
     * @param string $routingStatus
     * @return \Ovh\StructType\DedicatedFailoverRipeStruct
     */
    public function setRoutingStatus($routingStatus = null)
    {
        // validation for constraint: string
        if (!is_null($routingStatus) && !is_string($routingStatus)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($routingStatus, true), gettype($routingStatus)), __LINE__);
        }
        $this->routingStatus = $routingStatus;
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
     * @return \Ovh\StructType\DedicatedFailoverRipeStruct
     */
    public function setStatus($status = null)
    {
        // validation for constraint: string
        if (!is_null($status) && !is_string($status)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($status, true), gettype($status)), __LINE__);
        }
        $this->status = $status;
        return $this;
    }
    /**
     * Get addressesNumber value
     * @return int|null
     */
    public function getAddressesNumber()
    {
        return $this->addressesNumber;
    }
    /**
     * Set addressesNumber value
     * @param int $addressesNumber
     * @return \Ovh\StructType\DedicatedFailoverRipeStruct
     */
    public function setAddressesNumber($addressesNumber = null)
    {
        // validation for constraint: int
        if (!is_null($addressesNumber) && !(is_int($addressesNumber) || ctype_digit($addressesNumber))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($addressesNumber, true), gettype($addressesNumber)), __LINE__);
        }
        $this->addressesNumber = $addressesNumber;
        return $this;
    }
    /**
     * Get networkIp value
     * @return string|null
     */
    public function getNetworkIp()
    {
        return $this->networkIp;
    }
    /**
     * Set networkIp value
     * @param string $networkIp
     * @return \Ovh\StructType\DedicatedFailoverRipeStruct
     */
    public function setNetworkIp($networkIp = null)
    {
        // validation for constraint: string
        if (!is_null($networkIp) && !is_string($networkIp)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($networkIp, true), gettype($networkIp)), __LINE__);
        }
        $this->networkIp = $networkIp;
        return $this;
    }
    /**
     * Get isExclude value
     * @return bool|null
     */
    public function getIsExclude()
    {
        return $this->isExclude;
    }
    /**
     * Set isExclude value
     * @param bool $isExclude
     * @return \Ovh\StructType\DedicatedFailoverRipeStruct
     */
    public function setIsExclude($isExclude = null)
    {
        // validation for constraint: boolean
        if (!is_null($isExclude) && !is_bool($isExclude)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isExclude, true), gettype($isExclude)), __LINE__);
        }
        $this->isExclude = $isExclude;
        return $this;
    }
}
