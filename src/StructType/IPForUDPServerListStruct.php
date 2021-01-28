<?php

namespace Ovh\StructType;

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
     * @var \Ovh\ArrayType\MyArrayOfDedicatedIPForUDPStructType
     */
    public $ipList;
    /**
     * Constructor method for IPForUDPServerListStruct
     * @uses IPForUDPServerListStruct::setServer()
     * @uses IPForUDPServerListStruct::setReverse()
     * @uses IPForUDPServerListStruct::setIpList()
     * @param string $server
     * @param string $reverse
     * @param \Ovh\ArrayType\MyArrayOfDedicatedIPForUDPStructType $ipList
     */
    public function __construct($server = null, $reverse = null, \Ovh\ArrayType\MyArrayOfDedicatedIPForUDPStructType $ipList = null)
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
     * @return \Ovh\StructType\IPForUDPServerListStruct
     */
    public function setServer($server = null)
    {
        // validation for constraint: string
        if (!is_null($server) && !is_string($server)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($server, true), gettype($server)), __LINE__);
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
     * @return \Ovh\StructType\IPForUDPServerListStruct
     */
    public function setReverse($reverse = null)
    {
        // validation for constraint: string
        if (!is_null($reverse) && !is_string($reverse)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($reverse, true), gettype($reverse)), __LINE__);
        }
        $this->reverse = $reverse;
        return $this;
    }
    /**
     * Get ipList value
     * @return \Ovh\ArrayType\MyArrayOfDedicatedIPForUDPStructType|null
     */
    public function getIpList()
    {
        return $this->ipList;
    }
    /**
     * Set ipList value
     * @param \Ovh\ArrayType\MyArrayOfDedicatedIPForUDPStructType $ipList
     * @return \Ovh\StructType\IPForUDPServerListStruct
     */
    public function setIpList(\Ovh\ArrayType\MyArrayOfDedicatedIPForUDPStructType $ipList = null)
    {
        $this->ipList = $ipList;
        return $this;
    }
}
