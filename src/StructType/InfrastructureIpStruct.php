<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for InfrastructureIpStruct StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class InfrastructureIpStruct extends AbstractStructBase
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
     * The ipAddressFromBlock
     * @var \PayPal\ArrayType\MyArrayOfStringType
     */
    public $ipAddressFromBlock;
    /**
     * Constructor method for InfrastructureIpStruct
     * @uses InfrastructureIpStruct::setCountry()
     * @uses InfrastructureIpStruct::setNetname()
     * @uses InfrastructureIpStruct::setRoutedTo()
     * @uses InfrastructureIpStruct::setStatus()
     * @uses InfrastructureIpStruct::setAddressesNumber()
     * @uses InfrastructureIpStruct::setNetworkIp()
     * @uses InfrastructureIpStruct::setIpAddressFromBlock()
     * @param string $country
     * @param string $netname
     * @param string $routedTo
     * @param string $status
     * @param int $addressesNumber
     * @param string $networkIp
     * @param \PayPal\ArrayType\MyArrayOfStringType $ipAddressFromBlock
     */
    public function __construct($country = null, $netname = null, $routedTo = null, $status = null, $addressesNumber = null, $networkIp = null, \PayPal\ArrayType\MyArrayOfStringType $ipAddressFromBlock = null)
    {
        $this
            ->setCountry($country)
            ->setNetname($netname)
            ->setRoutedTo($routedTo)
            ->setStatus($status)
            ->setAddressesNumber($addressesNumber)
            ->setNetworkIp($networkIp)
            ->setIpAddressFromBlock($ipAddressFromBlock);
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
     * @return \PayPal\StructType\InfrastructureIpStruct
     */
    public function setCountry($country = null)
    {
        // validation for constraint: string
        if (!is_null($country) && !is_string($country)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($country)), __LINE__);
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
     * @return \PayPal\StructType\InfrastructureIpStruct
     */
    public function setNetname($netname = null)
    {
        // validation for constraint: string
        if (!is_null($netname) && !is_string($netname)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($netname)), __LINE__);
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
     * @return \PayPal\StructType\InfrastructureIpStruct
     */
    public function setRoutedTo($routedTo = null)
    {
        // validation for constraint: string
        if (!is_null($routedTo) && !is_string($routedTo)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($routedTo)), __LINE__);
        }
        $this->routedTo = $routedTo;
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
     * @return \PayPal\StructType\InfrastructureIpStruct
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
     * @return \PayPal\StructType\InfrastructureIpStruct
     */
    public function setAddressesNumber($addressesNumber = null)
    {
        // validation for constraint: int
        if (!is_null($addressesNumber) && !is_numeric($addressesNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($addressesNumber)), __LINE__);
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
     * @return \PayPal\StructType\InfrastructureIpStruct
     */
    public function setNetworkIp($networkIp = null)
    {
        // validation for constraint: string
        if (!is_null($networkIp) && !is_string($networkIp)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($networkIp)), __LINE__);
        }
        $this->networkIp = $networkIp;
        return $this;
    }
    /**
     * Get ipAddressFromBlock value
     * @return \PayPal\ArrayType\MyArrayOfStringType|null
     */
    public function getIpAddressFromBlock()
    {
        return $this->ipAddressFromBlock;
    }
    /**
     * Set ipAddressFromBlock value
     * @param \PayPal\ArrayType\MyArrayOfStringType $ipAddressFromBlock
     * @return \PayPal\StructType\InfrastructureIpStruct
     */
    public function setIpAddressFromBlock(\PayPal\ArrayType\MyArrayOfStringType $ipAddressFromBlock = null)
    {
        $this->ipAddressFromBlock = $ipAddressFromBlock;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \PayPal\StructType\InfrastructureIpStruct
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
