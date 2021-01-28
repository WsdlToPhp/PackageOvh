<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for nicTldEligibility StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class NicTldEligibility extends AbstractStructBase
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
     * The tld
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $tld;
    /**
     * Constructor method for nicTldEligibility
     * @uses NicTldEligibility::setSession()
     * @uses NicTldEligibility::setNic()
     * @uses NicTldEligibility::setTld()
     * @param string $session
     * @param string $nic
     * @param string $tld
     */
    public function __construct($session = null, $nic = null, $tld = null)
    {
        $this
            ->setSession($session)
            ->setNic($nic)
            ->setTld($tld);
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
     * @return \Ovh\StructType\NicTldEligibility
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
     * @return \Ovh\StructType\NicTldEligibility
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
     * Get tld value
     * @return string|null
     */
    public function getTld()
    {
        return $this->tld;
    }
    /**
     * Set tld value
     * @param string $tld
     * @return \Ovh\StructType\NicTldEligibility
     */
    public function setTld($tld = null)
    {
        // validation for constraint: string
        if (!is_null($tld) && !is_string($tld)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($tld, true), gettype($tld)), __LINE__);
        }
        $this->tld = $tld;
        return $this;
    }
}
