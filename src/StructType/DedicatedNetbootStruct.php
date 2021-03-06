<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for dedicatedNetbootStruct StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class DedicatedNetbootStruct extends AbstractStructBase
{
    /**
     * The kernel
     * @var string
     */
    public $kernel;
    /**
     * The cpufamily
     * @var string
     */
    public $cpufamily;
    /**
     * The root
     * @var string
     */
    public $root;
    /**
     * The smp
     * @var bool
     */
    public $smp;
    /**
     * The ipv6
     * @var bool
     */
    public $ipv6;
    /**
     * The grsec
     * @var bool
     */
    public $grsec;
    /**
     * The hz
     * @var string
     */
    public $hz;
    /**
     * The id
     * @var int
     */
    public $id;
    /**
     * The state
     * @var string
     */
    public $state;
    /**
     * Constructor method for dedicatedNetbootStruct
     * @uses DedicatedNetbootStruct::setKernel()
     * @uses DedicatedNetbootStruct::setCpufamily()
     * @uses DedicatedNetbootStruct::setRoot()
     * @uses DedicatedNetbootStruct::setSmp()
     * @uses DedicatedNetbootStruct::setIpv6()
     * @uses DedicatedNetbootStruct::setGrsec()
     * @uses DedicatedNetbootStruct::setHz()
     * @uses DedicatedNetbootStruct::setId()
     * @uses DedicatedNetbootStruct::setState()
     * @param string $kernel
     * @param string $cpufamily
     * @param string $root
     * @param bool $smp
     * @param bool $ipv6
     * @param bool $grsec
     * @param string $hz
     * @param int $id
     * @param string $state
     */
    public function __construct($kernel = null, $cpufamily = null, $root = null, $smp = null, $ipv6 = null, $grsec = null, $hz = null, $id = null, $state = null)
    {
        $this
            ->setKernel($kernel)
            ->setCpufamily($cpufamily)
            ->setRoot($root)
            ->setSmp($smp)
            ->setIpv6($ipv6)
            ->setGrsec($grsec)
            ->setHz($hz)
            ->setId($id)
            ->setState($state);
    }
    /**
     * Get kernel value
     * @return string|null
     */
    public function getKernel()
    {
        return $this->kernel;
    }
    /**
     * Set kernel value
     * @param string $kernel
     * @return \Ovh\StructType\DedicatedNetbootStruct
     */
    public function setKernel($kernel = null)
    {
        // validation for constraint: string
        if (!is_null($kernel) && !is_string($kernel)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($kernel, true), gettype($kernel)), __LINE__);
        }
        $this->kernel = $kernel;
        return $this;
    }
    /**
     * Get cpufamily value
     * @return string|null
     */
    public function getCpufamily()
    {
        return $this->cpufamily;
    }
    /**
     * Set cpufamily value
     * @param string $cpufamily
     * @return \Ovh\StructType\DedicatedNetbootStruct
     */
    public function setCpufamily($cpufamily = null)
    {
        // validation for constraint: string
        if (!is_null($cpufamily) && !is_string($cpufamily)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cpufamily, true), gettype($cpufamily)), __LINE__);
        }
        $this->cpufamily = $cpufamily;
        return $this;
    }
    /**
     * Get root value
     * @return string|null
     */
    public function getRoot()
    {
        return $this->root;
    }
    /**
     * Set root value
     * @param string $root
     * @return \Ovh\StructType\DedicatedNetbootStruct
     */
    public function setRoot($root = null)
    {
        // validation for constraint: string
        if (!is_null($root) && !is_string($root)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($root, true), gettype($root)), __LINE__);
        }
        $this->root = $root;
        return $this;
    }
    /**
     * Get smp value
     * @return bool|null
     */
    public function getSmp()
    {
        return $this->smp;
    }
    /**
     * Set smp value
     * @param bool $smp
     * @return \Ovh\StructType\DedicatedNetbootStruct
     */
    public function setSmp($smp = null)
    {
        // validation for constraint: boolean
        if (!is_null($smp) && !is_bool($smp)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($smp, true), gettype($smp)), __LINE__);
        }
        $this->smp = $smp;
        return $this;
    }
    /**
     * Get ipv6 value
     * @return bool|null
     */
    public function getIpv6()
    {
        return $this->ipv6;
    }
    /**
     * Set ipv6 value
     * @param bool $ipv6
     * @return \Ovh\StructType\DedicatedNetbootStruct
     */
    public function setIpv6($ipv6 = null)
    {
        // validation for constraint: boolean
        if (!is_null($ipv6) && !is_bool($ipv6)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($ipv6, true), gettype($ipv6)), __LINE__);
        }
        $this->ipv6 = $ipv6;
        return $this;
    }
    /**
     * Get grsec value
     * @return bool|null
     */
    public function getGrsec()
    {
        return $this->grsec;
    }
    /**
     * Set grsec value
     * @param bool $grsec
     * @return \Ovh\StructType\DedicatedNetbootStruct
     */
    public function setGrsec($grsec = null)
    {
        // validation for constraint: boolean
        if (!is_null($grsec) && !is_bool($grsec)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($grsec, true), gettype($grsec)), __LINE__);
        }
        $this->grsec = $grsec;
        return $this;
    }
    /**
     * Get hz value
     * @return string|null
     */
    public function getHz()
    {
        return $this->hz;
    }
    /**
     * Set hz value
     * @param string $hz
     * @return \Ovh\StructType\DedicatedNetbootStruct
     */
    public function setHz($hz = null)
    {
        // validation for constraint: string
        if (!is_null($hz) && !is_string($hz)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($hz, true), gettype($hz)), __LINE__);
        }
        $this->hz = $hz;
        return $this;
    }
    /**
     * Get id value
     * @return int|null
     */
    public function getId()
    {
        return $this->id;
    }
    /**
     * Set id value
     * @param int $id
     * @return \Ovh\StructType\DedicatedNetbootStruct
     */
    public function setId($id = null)
    {
        // validation for constraint: int
        if (!is_null($id) && !(is_int($id) || ctype_digit($id))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($id, true), gettype($id)), __LINE__);
        }
        $this->id = $id;
        return $this;
    }
    /**
     * Get state value
     * @return string|null
     */
    public function getState()
    {
        return $this->state;
    }
    /**
     * Set state value
     * @param string $state
     * @return \Ovh\StructType\DedicatedNetbootStruct
     */
    public function setState($state = null)
    {
        // validation for constraint: string
        if (!is_null($state) && !is_string($state)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($state, true), gettype($state)), __LINE__);
        }
        $this->state = $state;
        return $this;
    }
}
