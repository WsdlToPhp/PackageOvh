<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for prepaidSetThreshold StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class PrepaidSetThreshold extends AbstractStructBase
{
    /**
     * The session
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $session;
    /**
     * The nic
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $nic;
    /**
     * The threshold
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var int
     */
    public $threshold;
    /**
     * Constructor method for prepaidSetThreshold
     * @uses PrepaidSetThreshold::setSession()
     * @uses PrepaidSetThreshold::setNic()
     * @uses PrepaidSetThreshold::setThreshold()
     * @param string $session
     * @param string $nic
     * @param int $threshold
     */
    public function __construct($session = null, $nic = null, $threshold = null)
    {
        $this
            ->setSession($session)
            ->setNic($nic)
            ->setThreshold($threshold);
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
     * @return \Ovh\StructType\PrepaidSetThreshold
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
     * Get nic value
     * @return string|null
     */
    public function getNic()
    {
        return $this->nic;
    }
    /**
     * Set nic value
     * @param string $nic
     * @return \Ovh\StructType\PrepaidSetThreshold
     */
    public function setNic($nic = null)
    {
        // validation for constraint: string
        if (!is_null($nic) && !is_string($nic)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($nic, true), gettype($nic)), __LINE__);
        }
        $this->nic = $nic;
        return $this;
    }
    /**
     * Get threshold value
     * @return int|null
     */
    public function getThreshold()
    {
        return $this->threshold;
    }
    /**
     * Set threshold value
     * @param int $threshold
     * @return \Ovh\StructType\PrepaidSetThreshold
     */
    public function setThreshold($threshold = null)
    {
        // validation for constraint: int
        if (!is_null($threshold) && !(is_int($threshold) || ctype_digit($threshold))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($threshold, true), gettype($threshold)), __LINE__);
        }
        $this->threshold = $threshold;
        return $this;
    }
}
