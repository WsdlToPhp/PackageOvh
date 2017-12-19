<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for dedicatedCapabilitiesStruct StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class DedicatedCapabilitiesStruct extends AbstractStructBase
{
    /**
     * The hostname
     * @var string
     */
    public $hostname;
    /**
     * The originalClassicFailover
     * @var int
     */
    public $originalClassicFailover;
    /**
     * The originalFailoverRipe
     * @var int
     */
    public $originalFailoverRipe;
    /**
     * The originalLoadBalancingSlot
     * @var int
     */
    public $originalLoadBalancingSlot;
    /**
     * The additionalClassicFailover
     * @var int
     */
    public $additionalClassicFailover;
    /**
     * The additionalFailoverRipe
     * @var int
     */
    public $additionalFailoverRipe;
    /**
     * The usedClassicFailover
     * @var int
     */
    public $usedClassicFailover;
    /**
     * The usedFailoverRipe
     * @var int
     */
    public $usedFailoverRipe;
    /**
     * Constructor method for dedicatedCapabilitiesStruct
     * @uses DedicatedCapabilitiesStruct::setHostname()
     * @uses DedicatedCapabilitiesStruct::setOriginalClassicFailover()
     * @uses DedicatedCapabilitiesStruct::setOriginalFailoverRipe()
     * @uses DedicatedCapabilitiesStruct::setOriginalLoadBalancingSlot()
     * @uses DedicatedCapabilitiesStruct::setAdditionalClassicFailover()
     * @uses DedicatedCapabilitiesStruct::setAdditionalFailoverRipe()
     * @uses DedicatedCapabilitiesStruct::setUsedClassicFailover()
     * @uses DedicatedCapabilitiesStruct::setUsedFailoverRipe()
     * @param string $hostname
     * @param int $originalClassicFailover
     * @param int $originalFailoverRipe
     * @param int $originalLoadBalancingSlot
     * @param int $additionalClassicFailover
     * @param int $additionalFailoverRipe
     * @param int $usedClassicFailover
     * @param int $usedFailoverRipe
     */
    public function __construct($hostname = null, $originalClassicFailover = null, $originalFailoverRipe = null, $originalLoadBalancingSlot = null, $additionalClassicFailover = null, $additionalFailoverRipe = null, $usedClassicFailover = null, $usedFailoverRipe = null)
    {
        $this
            ->setHostname($hostname)
            ->setOriginalClassicFailover($originalClassicFailover)
            ->setOriginalFailoverRipe($originalFailoverRipe)
            ->setOriginalLoadBalancingSlot($originalLoadBalancingSlot)
            ->setAdditionalClassicFailover($additionalClassicFailover)
            ->setAdditionalFailoverRipe($additionalFailoverRipe)
            ->setUsedClassicFailover($usedClassicFailover)
            ->setUsedFailoverRipe($usedFailoverRipe);
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
     * @return \Ovh\StructType\DedicatedCapabilitiesStruct
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
     * Get originalClassicFailover value
     * @return int|null
     */
    public function getOriginalClassicFailover()
    {
        return $this->originalClassicFailover;
    }
    /**
     * Set originalClassicFailover value
     * @param int $originalClassicFailover
     * @return \Ovh\StructType\DedicatedCapabilitiesStruct
     */
    public function setOriginalClassicFailover($originalClassicFailover = null)
    {
        // validation for constraint: int
        if (!is_null($originalClassicFailover) && !is_numeric($originalClassicFailover)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($originalClassicFailover)), __LINE__);
        }
        $this->originalClassicFailover = $originalClassicFailover;
        return $this;
    }
    /**
     * Get originalFailoverRipe value
     * @return int|null
     */
    public function getOriginalFailoverRipe()
    {
        return $this->originalFailoverRipe;
    }
    /**
     * Set originalFailoverRipe value
     * @param int $originalFailoverRipe
     * @return \Ovh\StructType\DedicatedCapabilitiesStruct
     */
    public function setOriginalFailoverRipe($originalFailoverRipe = null)
    {
        // validation for constraint: int
        if (!is_null($originalFailoverRipe) && !is_numeric($originalFailoverRipe)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($originalFailoverRipe)), __LINE__);
        }
        $this->originalFailoverRipe = $originalFailoverRipe;
        return $this;
    }
    /**
     * Get originalLoadBalancingSlot value
     * @return int|null
     */
    public function getOriginalLoadBalancingSlot()
    {
        return $this->originalLoadBalancingSlot;
    }
    /**
     * Set originalLoadBalancingSlot value
     * @param int $originalLoadBalancingSlot
     * @return \Ovh\StructType\DedicatedCapabilitiesStruct
     */
    public function setOriginalLoadBalancingSlot($originalLoadBalancingSlot = null)
    {
        // validation for constraint: int
        if (!is_null($originalLoadBalancingSlot) && !is_numeric($originalLoadBalancingSlot)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($originalLoadBalancingSlot)), __LINE__);
        }
        $this->originalLoadBalancingSlot = $originalLoadBalancingSlot;
        return $this;
    }
    /**
     * Get additionalClassicFailover value
     * @return int|null
     */
    public function getAdditionalClassicFailover()
    {
        return $this->additionalClassicFailover;
    }
    /**
     * Set additionalClassicFailover value
     * @param int $additionalClassicFailover
     * @return \Ovh\StructType\DedicatedCapabilitiesStruct
     */
    public function setAdditionalClassicFailover($additionalClassicFailover = null)
    {
        // validation for constraint: int
        if (!is_null($additionalClassicFailover) && !is_numeric($additionalClassicFailover)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($additionalClassicFailover)), __LINE__);
        }
        $this->additionalClassicFailover = $additionalClassicFailover;
        return $this;
    }
    /**
     * Get additionalFailoverRipe value
     * @return int|null
     */
    public function getAdditionalFailoverRipe()
    {
        return $this->additionalFailoverRipe;
    }
    /**
     * Set additionalFailoverRipe value
     * @param int $additionalFailoverRipe
     * @return \Ovh\StructType\DedicatedCapabilitiesStruct
     */
    public function setAdditionalFailoverRipe($additionalFailoverRipe = null)
    {
        // validation for constraint: int
        if (!is_null($additionalFailoverRipe) && !is_numeric($additionalFailoverRipe)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($additionalFailoverRipe)), __LINE__);
        }
        $this->additionalFailoverRipe = $additionalFailoverRipe;
        return $this;
    }
    /**
     * Get usedClassicFailover value
     * @return int|null
     */
    public function getUsedClassicFailover()
    {
        return $this->usedClassicFailover;
    }
    /**
     * Set usedClassicFailover value
     * @param int $usedClassicFailover
     * @return \Ovh\StructType\DedicatedCapabilitiesStruct
     */
    public function setUsedClassicFailover($usedClassicFailover = null)
    {
        // validation for constraint: int
        if (!is_null($usedClassicFailover) && !is_numeric($usedClassicFailover)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($usedClassicFailover)), __LINE__);
        }
        $this->usedClassicFailover = $usedClassicFailover;
        return $this;
    }
    /**
     * Get usedFailoverRipe value
     * @return int|null
     */
    public function getUsedFailoverRipe()
    {
        return $this->usedFailoverRipe;
    }
    /**
     * Set usedFailoverRipe value
     * @param int $usedFailoverRipe
     * @return \Ovh\StructType\DedicatedCapabilitiesStruct
     */
    public function setUsedFailoverRipe($usedFailoverRipe = null)
    {
        // validation for constraint: int
        if (!is_null($usedFailoverRipe) && !is_numeric($usedFailoverRipe)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($usedFailoverRipe)), __LINE__);
        }
        $this->usedFailoverRipe = $usedFailoverRipe;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ovh\StructType\DedicatedCapabilitiesStruct
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
