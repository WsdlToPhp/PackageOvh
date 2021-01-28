<?php

namespace Ovh\StructType;

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
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $session;
    /**
     * The siret
     * Meta information extracted from the WSDL
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
     * @return \Ovh\StructType\TelephonyDirectoryInfoGetSiret
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
     * @return \Ovh\StructType\TelephonyDirectoryInfoGetSiret
     */
    public function setSiret($siret = null)
    {
        // validation for constraint: int
        if (!is_null($siret) && !(is_int($siret) || ctype_digit($siret))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($siret, true), gettype($siret)), __LINE__);
        }
        $this->siret = $siret;
        return $this;
    }
}
