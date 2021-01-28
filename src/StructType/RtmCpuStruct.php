<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for rtmCpuStruct StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class RtmCpuStruct extends AbstractStructBase
{
    /**
     * The frequency
     * @var string
     */
    public $frequency;
    /**
     * The core
     * @var int
     */
    public $core;
    /**
     * The name
     * @var string
     */
    public $name;
    /**
     * The cache
     * @var string
     */
    public $cache;
    /**
     * The percentLoad
     * @var int
     */
    public $percentLoad;
    /**
     * The loadAvg
     * @var \Ovh\StructType\RtmCpuLoadAvgStruct
     */
    public $loadAvg;
    /**
     * Constructor method for rtmCpuStruct
     * @uses RtmCpuStruct::setFrequency()
     * @uses RtmCpuStruct::setCore()
     * @uses RtmCpuStruct::setName()
     * @uses RtmCpuStruct::setCache()
     * @uses RtmCpuStruct::setPercentLoad()
     * @uses RtmCpuStruct::setLoadAvg()
     * @param string $frequency
     * @param int $core
     * @param string $name
     * @param string $cache
     * @param int $percentLoad
     * @param \Ovh\StructType\RtmCpuLoadAvgStruct $loadAvg
     */
    public function __construct($frequency = null, $core = null, $name = null, $cache = null, $percentLoad = null, \Ovh\StructType\RtmCpuLoadAvgStruct $loadAvg = null)
    {
        $this
            ->setFrequency($frequency)
            ->setCore($core)
            ->setName($name)
            ->setCache($cache)
            ->setPercentLoad($percentLoad)
            ->setLoadAvg($loadAvg);
    }
    /**
     * Get frequency value
     * @return string|null
     */
    public function getFrequency()
    {
        return $this->frequency;
    }
    /**
     * Set frequency value
     * @param string $frequency
     * @return \Ovh\StructType\RtmCpuStruct
     */
    public function setFrequency($frequency = null)
    {
        // validation for constraint: string
        if (!is_null($frequency) && !is_string($frequency)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($frequency, true), gettype($frequency)), __LINE__);
        }
        $this->frequency = $frequency;
        return $this;
    }
    /**
     * Get core value
     * @return int|null
     */
    public function getCore()
    {
        return $this->core;
    }
    /**
     * Set core value
     * @param int $core
     * @return \Ovh\StructType\RtmCpuStruct
     */
    public function setCore($core = null)
    {
        // validation for constraint: int
        if (!is_null($core) && !(is_int($core) || ctype_digit($core))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($core, true), gettype($core)), __LINE__);
        }
        $this->core = $core;
        return $this;
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
     * @return \Ovh\StructType\RtmCpuStruct
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
     * Get cache value
     * @return string|null
     */
    public function getCache()
    {
        return $this->cache;
    }
    /**
     * Set cache value
     * @param string $cache
     * @return \Ovh\StructType\RtmCpuStruct
     */
    public function setCache($cache = null)
    {
        // validation for constraint: string
        if (!is_null($cache) && !is_string($cache)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cache, true), gettype($cache)), __LINE__);
        }
        $this->cache = $cache;
        return $this;
    }
    /**
     * Get percentLoad value
     * @return int|null
     */
    public function getPercentLoad()
    {
        return $this->percentLoad;
    }
    /**
     * Set percentLoad value
     * @param int $percentLoad
     * @return \Ovh\StructType\RtmCpuStruct
     */
    public function setPercentLoad($percentLoad = null)
    {
        // validation for constraint: int
        if (!is_null($percentLoad) && !(is_int($percentLoad) || ctype_digit($percentLoad))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($percentLoad, true), gettype($percentLoad)), __LINE__);
        }
        $this->percentLoad = $percentLoad;
        return $this;
    }
    /**
     * Get loadAvg value
     * @return \Ovh\StructType\RtmCpuLoadAvgStruct|null
     */
    public function getLoadAvg()
    {
        return $this->loadAvg;
    }
    /**
     * Set loadAvg value
     * @param \Ovh\StructType\RtmCpuLoadAvgStruct $loadAvg
     * @return \Ovh\StructType\RtmCpuStruct
     */
    public function setLoadAvg(\Ovh\StructType\RtmCpuLoadAvgStruct $loadAvg = null)
    {
        $this->loadAvg = $loadAvg;
        return $this;
    }
}
