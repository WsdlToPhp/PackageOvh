<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for zoneImport StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class ZoneImport extends AbstractStructBase
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
     * The zone
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $zone;
    /**
     * Constructor method for zoneImport
     * @uses ZoneImport::setSession()
     * @uses ZoneImport::setDomain()
     * @uses ZoneImport::setZone()
     * @param string $session
     * @param string $domain
     * @param string $zone
     */
    public function __construct($session = null, $domain = null, $zone = null)
    {
        $this
            ->setSession($session)
            ->setDomain($domain)
            ->setZone($zone);
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
     * @return \Ovh\StructType\ZoneImport
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
     * @return \Ovh\StructType\ZoneImport
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
     * Get zone value
     * @return string|null
     */
    public function getZone()
    {
        return $this->zone;
    }
    /**
     * Set zone value
     * @param string $zone
     * @return \Ovh\StructType\ZoneImport
     */
    public function setZone($zone = null)
    {
        // validation for constraint: string
        if (!is_null($zone) && !is_string($zone)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($zone, true), gettype($zone)), __LINE__);
        }
        $this->zone = $zone;
        return $this;
    }
}
