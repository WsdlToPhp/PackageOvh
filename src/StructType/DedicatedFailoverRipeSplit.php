<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for dedicatedFailoverRipeSplit StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class DedicatedFailoverRipeSplit extends AbstractStructBase
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
     * The netname
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $netname;
    /**
     * The networkIp
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $networkIp;
    /**
     * Constructor method for dedicatedFailoverRipeSplit
     * @uses DedicatedFailoverRipeSplit::setSession()
     * @uses DedicatedFailoverRipeSplit::setHostname()
     * @uses DedicatedFailoverRipeSplit::setNetname()
     * @uses DedicatedFailoverRipeSplit::setNetworkIp()
     * @param string $session
     * @param string $hostname
     * @param string $netname
     * @param string $networkIp
     */
    public function __construct($session = null, $hostname = null, $netname = null, $networkIp = null)
    {
        $this
            ->setSession($session)
            ->setHostname($hostname)
            ->setNetname($netname)
            ->setNetworkIp($networkIp);
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
     * @return \Ovh\StructType\DedicatedFailoverRipeSplit
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
     * @return \Ovh\StructType\DedicatedFailoverRipeSplit
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
     * Get netname value
     * @return string|null
     */
    public function getNetname()
    {
        return $this->netname;
    }
    /**
     * Set netname value
     * @param string $netname
     * @return \Ovh\StructType\DedicatedFailoverRipeSplit
     */
    public function setNetname($netname = null)
    {
        // validation for constraint: string
        if (!is_null($netname) && !is_string($netname)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($netname, true), gettype($netname)), __LINE__);
        }
        $this->netname = $netname;
        return $this;
    }
    /**
     * Get networkIp value
     * @return string|null
     */
    public function getNetworkIp()
    {
        return $this->networkIp;
    }
    /**
     * Set networkIp value
     * @param string $networkIp
     * @return \Ovh\StructType\DedicatedFailoverRipeSplit
     */
    public function setNetworkIp($networkIp = null)
    {
        // validation for constraint: string
        if (!is_null($networkIp) && !is_string($networkIp)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($networkIp, true), gettype($networkIp)), __LINE__);
        }
        $this->networkIp = $networkIp;
        return $this;
    }
}
