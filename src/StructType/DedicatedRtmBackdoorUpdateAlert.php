<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for dedicatedRtmBackdoorUpdateAlert StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class DedicatedRtmBackdoorUpdateAlert extends AbstractStructBase
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
     * The backdoorId
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var int
     */
    public $backdoorId;
    /**
     * The do_not_mail
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var bool
     */
    public $do_not_mail;
    /**
     * Constructor method for dedicatedRtmBackdoorUpdateAlert
     * @uses DedicatedRtmBackdoorUpdateAlert::setSession()
     * @uses DedicatedRtmBackdoorUpdateAlert::setHostname()
     * @uses DedicatedRtmBackdoorUpdateAlert::setBackdoorId()
     * @uses DedicatedRtmBackdoorUpdateAlert::setDo_not_mail()
     * @param string $session
     * @param string $hostname
     * @param int $backdoorId
     * @param bool $do_not_mail
     */
    public function __construct($session = null, $hostname = null, $backdoorId = null, $do_not_mail = null)
    {
        $this
            ->setSession($session)
            ->setHostname($hostname)
            ->setBackdoorId($backdoorId)
            ->setDo_not_mail($do_not_mail);
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
     * @return \Ovh\StructType\DedicatedRtmBackdoorUpdateAlert
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
     * @return \Ovh\StructType\DedicatedRtmBackdoorUpdateAlert
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
     * Get backdoorId value
     * @return int|null
     */
    public function getBackdoorId()
    {
        return $this->backdoorId;
    }
    /**
     * Set backdoorId value
     * @param int $backdoorId
     * @return \Ovh\StructType\DedicatedRtmBackdoorUpdateAlert
     */
    public function setBackdoorId($backdoorId = null)
    {
        // validation for constraint: int
        if (!is_null($backdoorId) && !is_numeric($backdoorId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($backdoorId)), __LINE__);
        }
        $this->backdoorId = $backdoorId;
        return $this;
    }
    /**
     * Get do_not_mail value
     * @return bool|null
     */
    public function getDo_not_mail()
    {
        return $this->do_not_mail;
    }
    /**
     * Set do_not_mail value
     * @param bool $do_not_mail
     * @return \Ovh\StructType\DedicatedRtmBackdoorUpdateAlert
     */
    public function setDo_not_mail($do_not_mail = null)
    {
        // validation for constraint: boolean
        if (!is_null($do_not_mail) && !is_bool($do_not_mail)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($do_not_mail)), __LINE__);
        }
        $this->do_not_mail = $do_not_mail;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ovh\StructType\DedicatedRtmBackdoorUpdateAlert
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
