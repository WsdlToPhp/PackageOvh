<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for rtmSystemRtmStruct StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class RtmSystemRtmStruct extends AbstractStructBase
{
    /**
     * The status
     * @var bool
     */
    public $status;
    /**
     * The version
     * @var string
     */
    public $version;
    /**
     * The current
     * @var string
     */
    public $current;
    /**
     * Constructor method for rtmSystemRtmStruct
     * @uses RtmSystemRtmStruct::setStatus()
     * @uses RtmSystemRtmStruct::setVersion()
     * @uses RtmSystemRtmStruct::setCurrent()
     * @param bool $status
     * @param string $version
     * @param string $current
     */
    public function __construct($status = null, $version = null, $current = null)
    {
        $this
            ->setStatus($status)
            ->setVersion($version)
            ->setCurrent($current);
    }
    /**
     * Get status value
     * @return bool|null
     */
    public function getStatus()
    {
        return $this->status;
    }
    /**
     * Set status value
     * @param bool $status
     * @return \Ovh\StructType\RtmSystemRtmStruct
     */
    public function setStatus($status = null)
    {
        // validation for constraint: boolean
        if (!is_null($status) && !is_bool($status)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($status, true), gettype($status)), __LINE__);
        }
        $this->status = $status;
        return $this;
    }
    /**
     * Get version value
     * @return string|null
     */
    public function getVersion()
    {
        return $this->version;
    }
    /**
     * Set version value
     * @param string $version
     * @return \Ovh\StructType\RtmSystemRtmStruct
     */
    public function setVersion($version = null)
    {
        // validation for constraint: string
        if (!is_null($version) && !is_string($version)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($version, true), gettype($version)), __LINE__);
        }
        $this->version = $version;
        return $this;
    }
    /**
     * Get current value
     * @return string|null
     */
    public function getCurrent()
    {
        return $this->current;
    }
    /**
     * Set current value
     * @param string $current
     * @return \Ovh\StructType\RtmSystemRtmStruct
     */
    public function setCurrent($current = null)
    {
        // validation for constraint: string
        if (!is_null($current) && !is_string($current)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($current, true), gettype($current)), __LINE__);
        }
        $this->current = $current;
        return $this;
    }
}
