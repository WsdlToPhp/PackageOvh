<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for supportCapabilitiesReturn StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class SupportCapabilitiesReturn extends AbstractStructBase
{
    /**
     * The hasSupportPlus
     * @var bool
     */
    public $hasSupportPlus;
    /**
     * Constructor method for supportCapabilitiesReturn
     * @uses SupportCapabilitiesReturn::setHasSupportPlus()
     * @param bool $hasSupportPlus
     */
    public function __construct($hasSupportPlus = null)
    {
        $this
            ->setHasSupportPlus($hasSupportPlus);
    }
    /**
     * Get hasSupportPlus value
     * @return bool|null
     */
    public function getHasSupportPlus()
    {
        return $this->hasSupportPlus;
    }
    /**
     * Set hasSupportPlus value
     * @param bool $hasSupportPlus
     * @return \Ovh\StructType\SupportCapabilitiesReturn
     */
    public function setHasSupportPlus($hasSupportPlus = null)
    {
        // validation for constraint: boolean
        if (!is_null($hasSupportPlus) && !is_bool($hasSupportPlus)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($hasSupportPlus, true), gettype($hasSupportPlus)), __LINE__);
        }
        $this->hasSupportPlus = $hasSupportPlus;
        return $this;
    }
}
