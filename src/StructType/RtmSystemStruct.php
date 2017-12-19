<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for rtmSystemStruct StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class RtmSystemStruct extends AbstractStructBase
{
    /**
     * The last_update
     * @var string
     */
    public $last_update;
    /**
     * The ip
     * @var string
     */
    public $ip;
    /**
     * The hostname
     * @var string
     */
    public $hostname;
    /**
     * The uptime
     * @var int
     */
    public $uptime;
    /**
     * The freshest_file_date
     * @var string
     */
    public $freshest_file_date;
    /**
     * The os
     * @var \Ovh\StructType\RtmSystemOsStruct
     */
    public $os;
    /**
     * The rtm
     * @var \Ovh\StructType\RtmSystemRtmStruct
     */
    public $rtm;
    /**
     * The kernel
     * @var \Ovh\StructType\RtmSystemKernelStruct
     */
    public $kernel;
    /**
     * Constructor method for rtmSystemStruct
     * @uses RtmSystemStruct::setLast_update()
     * @uses RtmSystemStruct::setIp()
     * @uses RtmSystemStruct::setHostname()
     * @uses RtmSystemStruct::setUptime()
     * @uses RtmSystemStruct::setFreshest_file_date()
     * @uses RtmSystemStruct::setOs()
     * @uses RtmSystemStruct::setRtm()
     * @uses RtmSystemStruct::setKernel()
     * @param string $last_update
     * @param string $ip
     * @param string $hostname
     * @param int $uptime
     * @param string $freshest_file_date
     * @param \Ovh\StructType\RtmSystemOsStruct $os
     * @param \Ovh\StructType\RtmSystemRtmStruct $rtm
     * @param \Ovh\StructType\RtmSystemKernelStruct $kernel
     */
    public function __construct($last_update = null, $ip = null, $hostname = null, $uptime = null, $freshest_file_date = null, \Ovh\StructType\RtmSystemOsStruct $os = null, \Ovh\StructType\RtmSystemRtmStruct $rtm = null, \Ovh\StructType\RtmSystemKernelStruct $kernel = null)
    {
        $this
            ->setLast_update($last_update)
            ->setIp($ip)
            ->setHostname($hostname)
            ->setUptime($uptime)
            ->setFreshest_file_date($freshest_file_date)
            ->setOs($os)
            ->setRtm($rtm)
            ->setKernel($kernel);
    }
    /**
     * Get last_update value
     * @return string|null
     */
    public function getLast_update()
    {
        return $this->last_update;
    }
    /**
     * Set last_update value
     * @param string $last_update
     * @return \Ovh\StructType\RtmSystemStruct
     */
    public function setLast_update($last_update = null)
    {
        // validation for constraint: string
        if (!is_null($last_update) && !is_string($last_update)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($last_update)), __LINE__);
        }
        $this->last_update = $last_update;
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
     * @return \Ovh\StructType\RtmSystemStruct
     */
    public function setIp($ip = null)
    {
        // validation for constraint: string
        if (!is_null($ip) && !is_string($ip)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($ip)), __LINE__);
        }
        $this->ip = $ip;
        return $this;
    }
    /**
     * Get hostname value
     * @return string|null
     */
    public function getHostname()
    {
        return $this->hostname;
    }
    /**
     * Set hostname value
     * @param string $hostname
     * @return \Ovh\StructType\RtmSystemStruct
     */
    public function setHostname($hostname = null)
    {
        // validation for constraint: string
        if (!is_null($hostname) && !is_string($hostname)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($hostname)), __LINE__);
        }
        $this->hostname = $hostname;
        return $this;
    }
    /**
     * Get uptime value
     * @return int|null
     */
    public function getUptime()
    {
        return $this->uptime;
    }
    /**
     * Set uptime value
     * @param int $uptime
     * @return \Ovh\StructType\RtmSystemStruct
     */
    public function setUptime($uptime = null)
    {
        // validation for constraint: int
        if (!is_null($uptime) && !is_numeric($uptime)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($uptime)), __LINE__);
        }
        $this->uptime = $uptime;
        return $this;
    }
    /**
     * Get freshest_file_date value
     * @return string|null
     */
    public function getFreshest_file_date()
    {
        return $this->freshest_file_date;
    }
    /**
     * Set freshest_file_date value
     * @param string $freshest_file_date
     * @return \Ovh\StructType\RtmSystemStruct
     */
    public function setFreshest_file_date($freshest_file_date = null)
    {
        // validation for constraint: string
        if (!is_null($freshest_file_date) && !is_string($freshest_file_date)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($freshest_file_date)), __LINE__);
        }
        $this->freshest_file_date = $freshest_file_date;
        return $this;
    }
    /**
     * Get os value
     * @return \Ovh\StructType\RtmSystemOsStruct|null
     */
    public function getOs()
    {
        return $this->os;
    }
    /**
     * Set os value
     * @param \Ovh\StructType\RtmSystemOsStruct $os
     * @return \Ovh\StructType\RtmSystemStruct
     */
    public function setOs(\Ovh\StructType\RtmSystemOsStruct $os = null)
    {
        $this->os = $os;
        return $this;
    }
    /**
     * Get rtm value
     * @return \Ovh\StructType\RtmSystemRtmStruct|null
     */
    public function getRtm()
    {
        return $this->rtm;
    }
    /**
     * Set rtm value
     * @param \Ovh\StructType\RtmSystemRtmStruct $rtm
     * @return \Ovh\StructType\RtmSystemStruct
     */
    public function setRtm(\Ovh\StructType\RtmSystemRtmStruct $rtm = null)
    {
        $this->rtm = $rtm;
        return $this;
    }
    /**
     * Get kernel value
     * @return \Ovh\StructType\RtmSystemKernelStruct|null
     */
    public function getKernel()
    {
        return $this->kernel;
    }
    /**
     * Set kernel value
     * @param \Ovh\StructType\RtmSystemKernelStruct $kernel
     * @return \Ovh\StructType\RtmSystemStruct
     */
    public function setKernel(\Ovh\StructType\RtmSystemKernelStruct $kernel = null)
    {
        $this->kernel = $kernel;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ovh\StructType\RtmSystemStruct
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
