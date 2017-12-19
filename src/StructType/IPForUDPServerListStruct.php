<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for IPForUDPServerListStruct StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class IPForUDPServerListStruct extends AbstractStructBase
{
    /**
     * The server
     * @var string
     */
    public $server;
    /**
     * The reverse
     * @var string
     */
    public $reverse;
    /**
     * The ipList
     * @var \PayPal\ArrayType\MyArrayOfDedicatedIPForUDPStructType
     */
    public $ipList;
    /**
     * Constructor method for IPForUDPServerListStruct
     * @uses IPForUDPServerListStruct::setServer()
     * @uses IPForUDPServerListStruct::setReverse()
     * @uses IPForUDPServerListStruct::setIpList()
     * @param string $server
     * @param string $reverse
     * @param \PayPal\ArrayType\MyArrayOfDedicatedIPForUDPStructType $ipList
     */
    public function __construct($server = null, $reverse = null, \PayPal\ArrayType\MyArrayOfDedicatedIPForUDPStructType $ipList = null)
    {
        $this
            ->setServer($server)
            ->setReverse($reverse)
            ->setIpList($ipList);
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
     * @return \PayPal\StructType\IPForUDPServerListStruct
     */
    public function setServer($server = null)
    {
        // validation for constraint: string
        if (!is_null($server) && !is_string($server)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($server)), __LINE__);
        }
        $this->server = $server;
        return $this;
    }
    /**
     * Get reverse value
     * @return string|null
     */
    public function getReverse()
    {
        return $this->reverse;
    }
    /**
     * Set reverse value
     * @param string $reverse
     * @return \PayPal\StructType\IPForUDPServerListStruct
     */
    public function setReverse($reverse = null)
    {
        // validation for constraint: string
        if (!is_null($reverse) && !is_string($reverse)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($reverse)), __LINE__);
        }
        $this->reverse = $reverse;
        return $this;
    }
    /**
     * Get ipList value
     * @return \PayPal\ArrayType\MyArrayOfDedicatedIPForUDPStructType|null
     */
    public function getIpList()
    {
        return $this->ipList;
    }
    /**
     * Set ipList value
     * @param \PayPal\ArrayType\MyArrayOfDedicatedIPForUDPStructType $ipList
     * @return \PayPal\StructType\IPForUDPServerListStruct
     */
    public function setIpList(\PayPal\ArrayType\MyArrayOfDedicatedIPForUDPStructType $ipList = null)
    {
        $this->ipList = $ipList;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \PayPal\StructType\IPForUDPServerListStruct
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
