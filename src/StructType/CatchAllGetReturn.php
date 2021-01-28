<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for catchAllGetReturn StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class CatchAllGetReturn extends AbstractStructBase
{
    /**
     * The domain
     * @var string
     */
    public $domain;
    /**
     * The type
     * @var string
     */
    public $type;
    /**
     * The destination
     * @var string
     */
    public $destination;
    /**
     * Constructor method for catchAllGetReturn
     * @uses CatchAllGetReturn::setDomain()
     * @uses CatchAllGetReturn::setType()
     * @uses CatchAllGetReturn::setDestination()
     * @param string $domain
     * @param string $type
     * @param string $destination
     */
    public function __construct($domain = null, $type = null, $destination = null)
    {
        $this
            ->setDomain($domain)
            ->setType($type)
            ->setDestination($destination);
    }
    /**
     * Get domain value
     * @return string|null
     */
    public function getDomain()
    {
        return $this->domain;
    }
    /**
     * Set domain value
     * @param string $domain
     * @return \Ovh\StructType\CatchAllGetReturn
     */
    public function setDomain($domain = null)
    {
        // validation for constraint: string
        if (!is_null($domain) && !is_string($domain)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($domain, true), gettype($domain)), __LINE__);
        }
        $this->domain = $domain;
        return $this;
    }
    /**
     * Get type value
     * @return string|null
     */
    public function getType()
    {
        return $this->type;
    }
    /**
     * Set type value
     * @param string $type
     * @return \Ovh\StructType\CatchAllGetReturn
     */
    public function setType($type = null)
    {
        // validation for constraint: string
        if (!is_null($type) && !is_string($type)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($type, true), gettype($type)), __LINE__);
        }
        $this->type = $type;
        return $this;
    }
    /**
     * Get destination value
     * @return string|null
     */
    public function getDestination()
    {
        return $this->destination;
    }
    /**
     * Set destination value
     * @param string $destination
     * @return \Ovh\StructType\CatchAllGetReturn
     */
    public function setDestination($destination = null)
    {
        // validation for constraint: string
        if (!is_null($destination) && !is_string($destination)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($destination, true), gettype($destination)), __LINE__);
        }
        $this->destination = $destination;
        return $this;
    }
}
