<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for momVersionReturn StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class MomVersionReturn extends AbstractStructBase
{
    /**
     * The version
     * @var string
     */
    public $version;
    /**
     * The build
     * @var string
     */
    public $build;
    /**
     * Constructor method for momVersionReturn
     * @uses MomVersionReturn::setVersion()
     * @uses MomVersionReturn::setBuild()
     * @param string $version
     * @param string $build
     */
    public function __construct($version = null, $build = null)
    {
        $this
            ->setVersion($version)
            ->setBuild($build);
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
     * @return \Ovh\StructType\MomVersionReturn
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
     * Get build value
     * @return string|null
     */
    public function getBuild()
    {
        return $this->build;
    }
    /**
     * Set build value
     * @param string $build
     * @return \Ovh\StructType\MomVersionReturn
     */
    public function setBuild($build = null)
    {
        // validation for constraint: string
        if (!is_null($build) && !is_string($build)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($build, true), gettype($build)), __LINE__);
        }
        $this->build = $build;
        return $this;
    }
}
