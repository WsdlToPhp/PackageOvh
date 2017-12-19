<?php

namespace PayPal\StructType;

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
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $session;
    /**
     * The nic
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $nic;
    /**
     * The threshold
     * Meta informations extracted from the WSDL
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
     * @return \PayPal\StructType\PrepaidSetThreshold
     */
    public function setSession($session = null)
    {
        // validation for constraint: string
        if (!is_null($session) && !is_string($session)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($session)), __LINE__);
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
     * @return \PayPal\StructType\PrepaidSetThreshold
     */
    public function setNic($nic = null)
    {
        // validation for constraint: string
        if (!is_null($nic) && !is_string($nic)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($nic)), __LINE__);
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
     * @return \PayPal\StructType\PrepaidSetThreshold
     */
    public function setThreshold($threshold = null)
    {
        // validation for constraint: int
        if (!is_null($threshold) && !is_numeric($threshold)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($threshold)), __LINE__);
        }
        $this->threshold = $threshold;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \PayPal\StructType\PrepaidSetThreshold
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
