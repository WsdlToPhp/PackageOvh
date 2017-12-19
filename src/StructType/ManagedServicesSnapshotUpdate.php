<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for managedServicesSnapshotUpdate StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class ManagedServicesSnapshotUpdate extends AbstractStructBase
{
    /**
     * The session
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $session;
    /**
     * The domain
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $domain;
    /**
     * The snapShotList
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $snapShotList;
    /**
     * Constructor method for managedServicesSnapshotUpdate
     * @uses ManagedServicesSnapshotUpdate::setSession()
     * @uses ManagedServicesSnapshotUpdate::setDomain()
     * @uses ManagedServicesSnapshotUpdate::setSnapShotList()
     * @param string $session
     * @param string $domain
     * @param string $snapShotList
     */
    public function __construct($session = null, $domain = null, $snapShotList = null)
    {
        $this
            ->setSession($session)
            ->setDomain($domain)
            ->setSnapShotList($snapShotList);
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
     * @return \Ovh\StructType\ManagedServicesSnapshotUpdate
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
     * @return \Ovh\StructType\ManagedServicesSnapshotUpdate
     */
    public function setDomain($domain = null)
    {
        // validation for constraint: string
        if (!is_null($domain) && !is_string($domain)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($domain)), __LINE__);
        }
        $this->domain = $domain;
        return $this;
    }
    /**
     * Get snapShotList value
     * @return string|null
     */
    public function getSnapShotList()
    {
        return $this->snapShotList;
    }
    /**
     * Set snapShotList value
     * @param string $snapShotList
     * @return \Ovh\StructType\ManagedServicesSnapshotUpdate
     */
    public function setSnapShotList($snapShotList = null)
    {
        // validation for constraint: string
        if (!is_null($snapShotList) && !is_string($snapShotList)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($snapShotList)), __LINE__);
        }
        $this->snapShotList = $snapShotList;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ovh\StructType\ManagedServicesSnapshotUpdate
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
