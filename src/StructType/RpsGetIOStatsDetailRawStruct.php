<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for rpsGetIOStatsDetailRawStruct StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class RpsGetIOStatsDetailRawStruct extends AbstractStructBase
{
    /**
     * The raw
     * @var string
     */
    public $raw;
    /**
     * Constructor method for rpsGetIOStatsDetailRawStruct
     * @uses RpsGetIOStatsDetailRawStruct::setRaw()
     * @param string $raw
     */
    public function __construct($raw = null)
    {
        $this
            ->setRaw($raw);
    }
    /**
     * Get raw value
     * @return string|null
     */
    public function getRaw()
    {
        return $this->raw;
    }
    /**
     * Set raw value
     * @param string $raw
     * @return \Ovh\StructType\RpsGetIOStatsDetailRawStruct
     */
    public function setRaw($raw = null)
    {
        // validation for constraint: string
        if (!is_null($raw) && !is_string($raw)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($raw, true), gettype($raw)), __LINE__);
        }
        $this->raw = $raw;
        return $this;
    }
}
