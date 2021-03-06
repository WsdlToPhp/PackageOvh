<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for rtmSystemKernelStruct StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class RtmSystemKernelStruct extends AbstractStructBase
{
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
     * The current_26
     * @var string
     */
    public $current_26;
    /**
     * The current_ipv6
     * @var string
     */
    public $current_ipv6;
    /**
     * The release
     * @var string
     */
    public $release;
    /**
     * Constructor method for rtmSystemKernelStruct
     * @uses RtmSystemKernelStruct::setVersion()
     * @uses RtmSystemKernelStruct::setCurrent()
     * @uses RtmSystemKernelStruct::setCurrent_26()
     * @uses RtmSystemKernelStruct::setCurrent_ipv6()
     * @uses RtmSystemKernelStruct::setRelease()
     * @param string $version
     * @param string $current
     * @param string $current_26
     * @param string $current_ipv6
     * @param string $release
     */
    public function __construct($version = null, $current = null, $current_26 = null, $current_ipv6 = null, $release = null)
    {
        $this
            ->setVersion($version)
            ->setCurrent($current)
            ->setCurrent_26($current_26)
            ->setCurrent_ipv6($current_ipv6)
            ->setRelease($release);
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
     * @return \Ovh\StructType\RtmSystemKernelStruct
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
     * @return \Ovh\StructType\RtmSystemKernelStruct
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
    /**
     * Get current value
     * @return string|null
     */
    public function getCurrent_26()
    {
        return $this->current_26;
    }
    /**
     * Set current value
     * @param string $current
     * @return \Ovh\StructType\RtmSystemKernelStruct
     */
    public function setCurrent_26($current_26 = null)
    {
        // validation for constraint: string
        if (!is_null($current_26) && !is_string($current_26)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($current_26, true), gettype($current_26)), __LINE__);
        }
        $this->current_26 = $current_26;
        return $this;
    }
    /**
     * Get current_ipv6 value
     * @return string|null
     */
    public function getCurrent_ipv6()
    {
        return $this->current_ipv6;
    }
    /**
     * Set current_ipv6 value
     * @param string $current_ipv6
     * @return \Ovh\StructType\RtmSystemKernelStruct
     */
    public function setCurrent_ipv6($current_ipv6 = null)
    {
        // validation for constraint: string
        if (!is_null($current_ipv6) && !is_string($current_ipv6)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($current_ipv6, true), gettype($current_ipv6)), __LINE__);
        }
        $this->current_ipv6 = $current_ipv6;
        return $this;
    }
    /**
     * Get release value
     * @return string|null
     */
    public function getRelease()
    {
        return $this->release;
    }
    /**
     * Set release value
     * @param string $release
     * @return \Ovh\StructType\RtmSystemKernelStruct
     */
    public function setRelease($release = null)
    {
        // validation for constraint: string
        if (!is_null($release) && !is_string($release)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($release, true), gettype($release)), __LINE__);
        }
        $this->release = $release;
        return $this;
    }
}
