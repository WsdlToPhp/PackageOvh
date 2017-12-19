<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for dedicatedNetworkStruct StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class DedicatedNetworkStruct extends AbstractStructBase
{
    /**
     * The type
     * @var string
     */
    public $type;
    /**
     * The priority
     * @var string
     */
    public $priority;
    /**
     * The connexion
     * @var string
     */
    public $connexion;
    /**
     * The bandwidth
     * @var int
     */
    public $bandwidth;
    /**
     * The bandwidthOvhToOvh
     * @var int
     */
    public $bandwidthOvhToOvh;
    /**
     * The bandwidthOvhToInternet
     * @var int
     */
    public $bandwidthOvhToInternet;
    /**
     * The bandwidthInternetToOvh
     * @var int
     */
    public $bandwidthInternetToOvh;
    /**
     * The over
     * @var bool
     */
    public $over;
    /**
     * The interfaces
     * @var \Ovh\ArrayType\MyArrayOfDedicatedNetworkInterfaceStructType
     */
    public $interfaces;
    /**
     * The traffic
     * @var \Ovh\StructType\DedicatedNetworkTrafficStruct
     */
    public $traffic;
    /**
     * Constructor method for dedicatedNetworkStruct
     * @uses DedicatedNetworkStruct::setType()
     * @uses DedicatedNetworkStruct::setPriority()
     * @uses DedicatedNetworkStruct::setConnexion()
     * @uses DedicatedNetworkStruct::setBandwidth()
     * @uses DedicatedNetworkStruct::setBandwidthOvhToOvh()
     * @uses DedicatedNetworkStruct::setBandwidthOvhToInternet()
     * @uses DedicatedNetworkStruct::setBandwidthInternetToOvh()
     * @uses DedicatedNetworkStruct::setOver()
     * @uses DedicatedNetworkStruct::setInterfaces()
     * @uses DedicatedNetworkStruct::setTraffic()
     * @param string $type
     * @param string $priority
     * @param string $connexion
     * @param int $bandwidth
     * @param int $bandwidthOvhToOvh
     * @param int $bandwidthOvhToInternet
     * @param int $bandwidthInternetToOvh
     * @param bool $over
     * @param \Ovh\ArrayType\MyArrayOfDedicatedNetworkInterfaceStructType $interfaces
     * @param \Ovh\StructType\DedicatedNetworkTrafficStruct $traffic
     */
    public function __construct($type = null, $priority = null, $connexion = null, $bandwidth = null, $bandwidthOvhToOvh = null, $bandwidthOvhToInternet = null, $bandwidthInternetToOvh = null, $over = null, \Ovh\ArrayType\MyArrayOfDedicatedNetworkInterfaceStructType $interfaces = null, \Ovh\StructType\DedicatedNetworkTrafficStruct $traffic = null)
    {
        $this
            ->setType($type)
            ->setPriority($priority)
            ->setConnexion($connexion)
            ->setBandwidth($bandwidth)
            ->setBandwidthOvhToOvh($bandwidthOvhToOvh)
            ->setBandwidthOvhToInternet($bandwidthOvhToInternet)
            ->setBandwidthInternetToOvh($bandwidthInternetToOvh)
            ->setOver($over)
            ->setInterfaces($interfaces)
            ->setTraffic($traffic);
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
     * @return \Ovh\StructType\DedicatedNetworkStruct
     */
    public function setType($type = null)
    {
        // validation for constraint: string
        if (!is_null($type) && !is_string($type)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($type)), __LINE__);
        }
        $this->type = $type;
        return $this;
    }
    /**
     * Get priority value
     * @return string|null
     */
    public function getPriority()
    {
        return $this->priority;
    }
    /**
     * Set priority value
     * @param string $priority
     * @return \Ovh\StructType\DedicatedNetworkStruct
     */
    public function setPriority($priority = null)
    {
        // validation for constraint: string
        if (!is_null($priority) && !is_string($priority)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($priority)), __LINE__);
        }
        $this->priority = $priority;
        return $this;
    }
    /**
     * Get connexion value
     * @return string|null
     */
    public function getConnexion()
    {
        return $this->connexion;
    }
    /**
     * Set connexion value
     * @param string $connexion
     * @return \Ovh\StructType\DedicatedNetworkStruct
     */
    public function setConnexion($connexion = null)
    {
        // validation for constraint: string
        if (!is_null($connexion) && !is_string($connexion)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($connexion)), __LINE__);
        }
        $this->connexion = $connexion;
        return $this;
    }
    /**
     * Get bandwidth value
     * @return int|null
     */
    public function getBandwidth()
    {
        return $this->bandwidth;
    }
    /**
     * Set bandwidth value
     * @param int $bandwidth
     * @return \Ovh\StructType\DedicatedNetworkStruct
     */
    public function setBandwidth($bandwidth = null)
    {
        // validation for constraint: int
        if (!is_null($bandwidth) && !is_numeric($bandwidth)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($bandwidth)), __LINE__);
        }
        $this->bandwidth = $bandwidth;
        return $this;
    }
    /**
     * Get bandwidthOvhToOvh value
     * @return int|null
     */
    public function getBandwidthOvhToOvh()
    {
        return $this->bandwidthOvhToOvh;
    }
    /**
     * Set bandwidthOvhToOvh value
     * @param int $bandwidthOvhToOvh
     * @return \Ovh\StructType\DedicatedNetworkStruct
     */
    public function setBandwidthOvhToOvh($bandwidthOvhToOvh = null)
    {
        // validation for constraint: int
        if (!is_null($bandwidthOvhToOvh) && !is_numeric($bandwidthOvhToOvh)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($bandwidthOvhToOvh)), __LINE__);
        }
        $this->bandwidthOvhToOvh = $bandwidthOvhToOvh;
        return $this;
    }
    /**
     * Get bandwidthOvhToInternet value
     * @return int|null
     */
    public function getBandwidthOvhToInternet()
    {
        return $this->bandwidthOvhToInternet;
    }
    /**
     * Set bandwidthOvhToInternet value
     * @param int $bandwidthOvhToInternet
     * @return \Ovh\StructType\DedicatedNetworkStruct
     */
    public function setBandwidthOvhToInternet($bandwidthOvhToInternet = null)
    {
        // validation for constraint: int
        if (!is_null($bandwidthOvhToInternet) && !is_numeric($bandwidthOvhToInternet)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($bandwidthOvhToInternet)), __LINE__);
        }
        $this->bandwidthOvhToInternet = $bandwidthOvhToInternet;
        return $this;
    }
    /**
     * Get bandwidthInternetToOvh value
     * @return int|null
     */
    public function getBandwidthInternetToOvh()
    {
        return $this->bandwidthInternetToOvh;
    }
    /**
     * Set bandwidthInternetToOvh value
     * @param int $bandwidthInternetToOvh
     * @return \Ovh\StructType\DedicatedNetworkStruct
     */
    public function setBandwidthInternetToOvh($bandwidthInternetToOvh = null)
    {
        // validation for constraint: int
        if (!is_null($bandwidthInternetToOvh) && !is_numeric($bandwidthInternetToOvh)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($bandwidthInternetToOvh)), __LINE__);
        }
        $this->bandwidthInternetToOvh = $bandwidthInternetToOvh;
        return $this;
    }
    /**
     * Get over value
     * @return bool|null
     */
    public function getOver()
    {
        return $this->over;
    }
    /**
     * Set over value
     * @param bool $over
     * @return \Ovh\StructType\DedicatedNetworkStruct
     */
    public function setOver($over = null)
    {
        // validation for constraint: boolean
        if (!is_null($over) && !is_bool($over)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($over)), __LINE__);
        }
        $this->over = $over;
        return $this;
    }
    /**
     * Get interfaces value
     * @return \Ovh\ArrayType\MyArrayOfDedicatedNetworkInterfaceStructType|null
     */
    public function getInterfaces()
    {
        return $this->interfaces;
    }
    /**
     * Set interfaces value
     * @param \Ovh\ArrayType\MyArrayOfDedicatedNetworkInterfaceStructType $interfaces
     * @return \Ovh\StructType\DedicatedNetworkStruct
     */
    public function setInterfaces(\Ovh\ArrayType\MyArrayOfDedicatedNetworkInterfaceStructType $interfaces = null)
    {
        $this->interfaces = $interfaces;
        return $this;
    }
    /**
     * Get traffic value
     * @return \Ovh\StructType\DedicatedNetworkTrafficStruct|null
     */
    public function getTraffic()
    {
        return $this->traffic;
    }
    /**
     * Set traffic value
     * @param \Ovh\StructType\DedicatedNetworkTrafficStruct $traffic
     * @return \Ovh\StructType\DedicatedNetworkStruct
     */
    public function setTraffic(\Ovh\StructType\DedicatedNetworkTrafficStruct $traffic = null)
    {
        $this->traffic = $traffic;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ovh\StructType\DedicatedNetworkStruct
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
