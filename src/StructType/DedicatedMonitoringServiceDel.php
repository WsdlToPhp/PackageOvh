<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for dedicatedMonitoringServiceDel StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class DedicatedMonitoringServiceDel extends AbstractStructBase
{
    /**
     * The session
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $session;
    /**
     * The hostname
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $hostname;
    /**
     * The itemsIdTable
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var \Ovh\ArrayType\MyArrayOfStringType
     */
    public $itemsIdTable;
    /**
     * Constructor method for dedicatedMonitoringServiceDel
     * @uses DedicatedMonitoringServiceDel::setSession()
     * @uses DedicatedMonitoringServiceDel::setHostname()
     * @uses DedicatedMonitoringServiceDel::setItemsIdTable()
     * @param string $session
     * @param string $hostname
     * @param \Ovh\ArrayType\MyArrayOfStringType $itemsIdTable
     */
    public function __construct($session = null, $hostname = null, \Ovh\ArrayType\MyArrayOfStringType $itemsIdTable = null)
    {
        $this
            ->setSession($session)
            ->setHostname($hostname)
            ->setItemsIdTable($itemsIdTable);
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
     * @return \Ovh\StructType\DedicatedMonitoringServiceDel
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
     * Get hostname value
     * @return string|null
     */
    public function getHostname()
    {
        return $this->hostname;
    }
    /**
     * Set hostname value
     * @param string $hostname
     * @return \Ovh\StructType\DedicatedMonitoringServiceDel
     */
    public function setHostname($hostname = null)
    {
        // validation for constraint: string
        if (!is_null($hostname) && !is_string($hostname)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($hostname)), __LINE__);
        }
        $this->hostname = $hostname;
        return $this;
    }
    /**
     * Get itemsIdTable value
     * @return \Ovh\ArrayType\MyArrayOfStringType|null
     */
    public function getItemsIdTable()
    {
        return $this->itemsIdTable;
    }
    /**
     * Set itemsIdTable value
     * @param \Ovh\ArrayType\MyArrayOfStringType $itemsIdTable
     * @return \Ovh\StructType\DedicatedMonitoringServiceDel
     */
    public function setItemsIdTable(\Ovh\ArrayType\MyArrayOfStringType $itemsIdTable = null)
    {
        $this->itemsIdTable = $itemsIdTable;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ovh\StructType\DedicatedMonitoringServiceDel
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
