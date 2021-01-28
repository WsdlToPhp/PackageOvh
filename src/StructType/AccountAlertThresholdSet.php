<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for accountAlertThresholdSet StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class AccountAlertThresholdSet extends AbstractStructBase
{
    /**
     * The session
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $session;
    /**
     * The threshold
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var int
     */
    public $threshold;
    /**
     * Constructor method for accountAlertThresholdSet
     * @uses AccountAlertThresholdSet::setSession()
     * @uses AccountAlertThresholdSet::setThreshold()
     * @param string $session
     * @param int $threshold
     */
    public function __construct($session = null, $threshold = null)
    {
        $this
            ->setSession($session)
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
     * @return \Ovh\StructType\AccountAlertThresholdSet
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
     * @return \Ovh\StructType\AccountAlertThresholdSet
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
