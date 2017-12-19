<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for telephonyDirectoryPJCode StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class TelephonyDirectoryPJCode extends AbstractStructBase
{
    /**
     * The session
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $session;
    /**
     * The ape
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $ape;
    /**
     * The PJCode
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $PJCode;
    /**
     * The showOnlyAssociatedWithAPE
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var bool
     */
    public $showOnlyAssociatedWithAPE;
    /**
     * Constructor method for telephonyDirectoryPJCode
     * @uses TelephonyDirectoryPJCode::setSession()
     * @uses TelephonyDirectoryPJCode::setApe()
     * @uses TelephonyDirectoryPJCode::setPJCode()
     * @uses TelephonyDirectoryPJCode::setShowOnlyAssociatedWithAPE()
     * @param string $session
     * @param string $ape
     * @param string $pJCode
     * @param bool $showOnlyAssociatedWithAPE
     */
    public function __construct($session = null, $ape = null, $pJCode = null, $showOnlyAssociatedWithAPE = null)
    {
        $this
            ->setSession($session)
            ->setApe($ape)
            ->setPJCode($pJCode)
            ->setShowOnlyAssociatedWithAPE($showOnlyAssociatedWithAPE);
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
     * @return \Ovh\StructType\TelephonyDirectoryPJCode
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
     * Get ape value
     * @return string|null
     */
    public function getApe()
    {
        return $this->ape;
    }
    /**
     * Set ape value
     * @param string $ape
     * @return \Ovh\StructType\TelephonyDirectoryPJCode
     */
    public function setApe($ape = null)
    {
        // validation for constraint: string
        if (!is_null($ape) && !is_string($ape)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($ape)), __LINE__);
        }
        $this->ape = $ape;
        return $this;
    }
    /**
     * Get PJCode value
     * @return string|null
     */
    public function getPJCode()
    {
        return $this->PJCode;
    }
    /**
     * Set PJCode value
     * @param string $pJCode
     * @return \Ovh\StructType\TelephonyDirectoryPJCode
     */
    public function setPJCode($pJCode = null)
    {
        // validation for constraint: string
        if (!is_null($pJCode) && !is_string($pJCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($pJCode)), __LINE__);
        }
        $this->PJCode = $pJCode;
        return $this;
    }
    /**
     * Get showOnlyAssociatedWithAPE value
     * @return bool|null
     */
    public function getShowOnlyAssociatedWithAPE()
    {
        return $this->showOnlyAssociatedWithAPE;
    }
    /**
     * Set showOnlyAssociatedWithAPE value
     * @param bool $showOnlyAssociatedWithAPE
     * @return \Ovh\StructType\TelephonyDirectoryPJCode
     */
    public function setShowOnlyAssociatedWithAPE($showOnlyAssociatedWithAPE = null)
    {
        // validation for constraint: boolean
        if (!is_null($showOnlyAssociatedWithAPE) && !is_bool($showOnlyAssociatedWithAPE)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($showOnlyAssociatedWithAPE)), __LINE__);
        }
        $this->showOnlyAssociatedWithAPE = $showOnlyAssociatedWithAPE;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ovh\StructType\TelephonyDirectoryPJCode
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
