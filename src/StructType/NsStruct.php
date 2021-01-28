<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for nsStruct StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class NsStruct extends AbstractStructBase
{
    /**
     * The name
     * @var string
     */
    public $name;
    /**
     * The ip
     * @var string
     */
    public $ip;
    /**
     * Constructor method for nsStruct
     * @uses NsStruct::setName()
     * @uses NsStruct::setIp()
     * @param string $name
     * @param string $ip
     */
    public function __construct($name = null, $ip = null)
    {
        $this
            ->setName($name)
            ->setIp($ip);
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
     * @return \Ovh\StructType\NsStruct
     */
    public function setName($name = null)
    {
        // validation for constraint: string
        if (!is_null($name) && !is_string($name)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($name, true), gettype($name)), __LINE__);
        }
        $this->name = $name;
        return $this;
    }
    /**
     * Get ip value
     * @return string|null
     */
    public function getIp()
    {
        return $this->ip;
    }
    /**
     * Set ip value
     * @param string $ip
     * @return \Ovh\StructType\NsStruct
     */
    public function setIp($ip = null)
    {
        // validation for constraint: string
        if (!is_null($ip) && !is_string($ip)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($ip, true), gettype($ip)), __LINE__);
        }
        $this->ip = $ip;
        return $this;
    }
}
