<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for prepaidGetSummary StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class PrepaidGetSummary extends AbstractStructBase
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
     * Constructor method for prepaidGetSummary
     * @uses PrepaidGetSummary::setSession()
     * @uses PrepaidGetSummary::setNic()
     * @param string $session
     * @param string $nic
     */
    public function __construct($session = null, $nic = null)
    {
        $this
            ->setSession($session)
            ->setNic($nic);
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
     * @return \Ovh\StructType\PrepaidGetSummary
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
     * @return \Ovh\StructType\PrepaidGetSummary
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
}
