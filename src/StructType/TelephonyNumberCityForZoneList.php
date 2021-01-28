<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for telephonyNumberCityForZoneList StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class TelephonyNumberCityForZoneList extends AbstractStructBase
{
    /**
     * The session
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $session;
    /**
     * The zone
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $zone;
    /**
     * Constructor method for telephonyNumberCityForZoneList
     * @uses TelephonyNumberCityForZoneList::setSession()
     * @uses TelephonyNumberCityForZoneList::setZone()
     * @param string $session
     * @param string $zone
     */
    public function __construct($session = null, $zone = null)
    {
        $this
            ->setSession($session)
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
     * @return \Ovh\StructType\TelephonyNumberCityForZoneList
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
     * @return \Ovh\StructType\TelephonyNumberCityForZoneList
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
