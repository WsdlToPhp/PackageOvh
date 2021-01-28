<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for popAttachMasterNic StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class PopAttachMasterNic extends AbstractStructBase
{
    /**
     * The session
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $session;
    /**
     * The domain
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $domain;
    /**
     * The pop
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $pop;
    /**
     * The nic
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $nic;
    /**
     * Constructor method for popAttachMasterNic
     * @uses PopAttachMasterNic::setSession()
     * @uses PopAttachMasterNic::setDomain()
     * @uses PopAttachMasterNic::setPop()
     * @uses PopAttachMasterNic::setNic()
     * @param string $session
     * @param string $domain
     * @param string $pop
     * @param string $nic
     */
    public function __construct($session = null, $domain = null, $pop = null, $nic = null)
    {
        $this
            ->setSession($session)
            ->setDomain($domain)
            ->setPop($pop)
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
     * @return \Ovh\StructType\PopAttachMasterNic
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
     * Get domain value
     * @return string|null
     */
    public function getDomain()
    {
        return $this->domain;
    }
    /**
     * Set domain value
     * @param string $domain
     * @return \Ovh\StructType\PopAttachMasterNic
     */
    public function setDomain($domain = null)
    {
        // validation for constraint: string
        if (!is_null($domain) && !is_string($domain)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($domain, true), gettype($domain)), __LINE__);
        }
        $this->domain = $domain;
        return $this;
    }
    /**
     * Get pop value
     * @return string|null
     */
    public function getPop()
    {
        return $this->pop;
    }
    /**
     * Set pop value
     * @param string $pop
     * @return \Ovh\StructType\PopAttachMasterNic
     */
    public function setPop($pop = null)
    {
        // validation for constraint: string
        if (!is_null($pop) && !is_string($pop)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($pop, true), gettype($pop)), __LINE__);
        }
        $this->pop = $pop;
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
     * @return \Ovh\StructType\PopAttachMasterNic
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
