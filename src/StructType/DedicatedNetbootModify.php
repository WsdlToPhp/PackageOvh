<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for dedicatedNetbootModify StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class DedicatedNetbootModify extends AbstractStructBase
{
    /**
     * The session
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $session;
    /**
     * The hostname
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $hostname;
    /**
     * The kernel
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $kernel;
    /**
     * The cpufamily
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $cpufamily;
    /**
     * The grsec
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var bool
     */
    public $grsec;
    /**
     * The smp
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var bool
     */
    public $smp;
    /**
     * The ipv6
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var bool
     */
    public $ipv6;
    /**
     * The root
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $root;
    /**
     * The rescueEmail
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $rescueEmail;
    /**
     * The hz
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $hz;
    /**
     * Constructor method for dedicatedNetbootModify
     * @uses DedicatedNetbootModify::setSession()
     * @uses DedicatedNetbootModify::setHostname()
     * @uses DedicatedNetbootModify::setKernel()
     * @uses DedicatedNetbootModify::setCpufamily()
     * @uses DedicatedNetbootModify::setGrsec()
     * @uses DedicatedNetbootModify::setSmp()
     * @uses DedicatedNetbootModify::setIpv6()
     * @uses DedicatedNetbootModify::setRoot()
     * @uses DedicatedNetbootModify::setRescueEmail()
     * @uses DedicatedNetbootModify::setHz()
     * @param string $session
     * @param string $hostname
     * @param string $kernel
     * @param string $cpufamily
     * @param bool $grsec
     * @param bool $smp
     * @param bool $ipv6
     * @param string $root
     * @param string $rescueEmail
     * @param string $hz
     */
    public function __construct($session = null, $hostname = null, $kernel = null, $cpufamily = null, $grsec = null, $smp = null, $ipv6 = null, $root = null, $rescueEmail = null, $hz = null)
    {
        $this
            ->setSession($session)
            ->setHostname($hostname)
            ->setKernel($kernel)
            ->setCpufamily($cpufamily)
            ->setGrsec($grsec)
            ->setSmp($smp)
            ->setIpv6($ipv6)
            ->setRoot($root)
            ->setRescueEmail($rescueEmail)
            ->setHz($hz);
    }
    /**
     * Get session value
     * @return string|null
     */
    public function getSession()
    {
        return $this->session;
    }
    /**
     * Set session value
     * @param string $session
     * @return \Ovh\StructType\DedicatedNetbootModify
     */
    public function setSession($session = null)
    {
        // validation for constraint: string
        if (!is_null($session) && !is_string($session)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($session, true), gettype($session)), __LINE__);
        }
        $this->session = $session;
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
     * @return \Ovh\StructType\DedicatedNetbootModify
     */
    public function setHostname($hostname = null)
    {
        // validation for constraint: string
        if (!is_null($hostname) && !is_string($hostname)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($hostname, true), gettype($hostname)), __LINE__);
        }
        $this->hostname = $hostname;
        return $this;
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
     * @return \Ovh\StructType\DedicatedNetbootModify
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
     * @return \Ovh\StructType\DedicatedNetbootModify
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
     * @return \Ovh\StructType\DedicatedNetbootModify
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
     * @return \Ovh\StructType\DedicatedNetbootModify
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
     * @return \Ovh\StructType\DedicatedNetbootModify
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
     * @return \Ovh\StructType\DedicatedNetbootModify
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
     * Get rescueEmail value
     * @return string|null
     */
    public function getRescueEmail()
    {
        return $this->rescueEmail;
    }
    /**
     * Set rescueEmail value
     * @param string $rescueEmail
     * @return \Ovh\StructType\DedicatedNetbootModify
     */
    public function setRescueEmail($rescueEmail = null)
    {
        // validation for constraint: string
        if (!is_null($rescueEmail) && !is_string($rescueEmail)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($rescueEmail, true), gettype($rescueEmail)), __LINE__);
        }
        $this->rescueEmail = $rescueEmail;
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
     * @return \Ovh\StructType\DedicatedNetbootModify
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
}
