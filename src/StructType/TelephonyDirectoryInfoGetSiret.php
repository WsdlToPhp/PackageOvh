<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for telephonyDirectoryInfoGetSiret StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class TelephonyDirectoryInfoGetSiret extends AbstractStructBase
{
    /**
     * The session
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $session;
    /**
     * The siret
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var int
     */
    public $siret;
    /**
     * Constructor method for telephonyDirectoryInfoGetSiret
     * @uses TelephonyDirectoryInfoGetSiret::setSession()
     * @uses TelephonyDirectoryInfoGetSiret::setSiret()
     * @param string $session
     * @param int $siret
     */
    public function __construct($session = null, $siret = null)
    {
        $this
            ->setSession($session)
            ->setSiret($siret);
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
     * @return \PayPal\StructType\TelephonyDirectoryInfoGetSiret
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
     * Get siret value
     * @return int|null
     */
    public function getSiret()
    {
        return $this->siret;
    }
    /**
     * Set siret value
     * @param int $siret
     * @return \PayPal\StructType\TelephonyDirectoryInfoGetSiret
     */
    public function setSiret($siret = null)
    {
        // validation for constraint: int
        if (!is_null($siret) && !is_numeric($siret)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($siret)), __LINE__);
        }
        $this->siret = $siret;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \PayPal\StructType\TelephonyDirectoryInfoGetSiret
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
