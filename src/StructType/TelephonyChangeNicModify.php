<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for telephonyChangeNicModify StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class TelephonyChangeNicModify extends AbstractStructBase
{
    /**
     * The session
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $session;
    /**
     * The nicNames
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var \Ovh\ArrayType\MyArrayOfStringType
     */
    public $nicNames;
    /**
     * The nicPasswords
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var \Ovh\ArrayType\MyArrayOfStringType
     */
    public $nicPasswords;
    /**
     * The nicTypes
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var \Ovh\ArrayType\MyArrayOfStringType
     */
    public $nicTypes;
    /**
     * The changeTypes
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var \Ovh\ArrayType\MyArrayOfStringType
     */
    public $changeTypes;
    /**
     * The changeElts
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var \Ovh\ArrayType\MyArrayOfStringType
     */
    public $changeElts;
    /**
     * Constructor method for telephonyChangeNicModify
     * @uses TelephonyChangeNicModify::setSession()
     * @uses TelephonyChangeNicModify::setNicNames()
     * @uses TelephonyChangeNicModify::setNicPasswords()
     * @uses TelephonyChangeNicModify::setNicTypes()
     * @uses TelephonyChangeNicModify::setChangeTypes()
     * @uses TelephonyChangeNicModify::setChangeElts()
     * @param string $session
     * @param \Ovh\ArrayType\MyArrayOfStringType $nicNames
     * @param \Ovh\ArrayType\MyArrayOfStringType $nicPasswords
     * @param \Ovh\ArrayType\MyArrayOfStringType $nicTypes
     * @param \Ovh\ArrayType\MyArrayOfStringType $changeTypes
     * @param \Ovh\ArrayType\MyArrayOfStringType $changeElts
     */
    public function __construct($session = null, \Ovh\ArrayType\MyArrayOfStringType $nicNames = null, \Ovh\ArrayType\MyArrayOfStringType $nicPasswords = null, \Ovh\ArrayType\MyArrayOfStringType $nicTypes = null, \Ovh\ArrayType\MyArrayOfStringType $changeTypes = null, \Ovh\ArrayType\MyArrayOfStringType $changeElts = null)
    {
        $this
            ->setSession($session)
            ->setNicNames($nicNames)
            ->setNicPasswords($nicPasswords)
            ->setNicTypes($nicTypes)
            ->setChangeTypes($changeTypes)
            ->setChangeElts($changeElts);
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
     * @return \Ovh\StructType\TelephonyChangeNicModify
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
     * Get nicNames value
     * @return \Ovh\ArrayType\MyArrayOfStringType|null
     */
    public function getNicNames()
    {
        return $this->nicNames;
    }
    /**
     * Set nicNames value
     * @param \Ovh\ArrayType\MyArrayOfStringType $nicNames
     * @return \Ovh\StructType\TelephonyChangeNicModify
     */
    public function setNicNames(\Ovh\ArrayType\MyArrayOfStringType $nicNames = null)
    {
        $this->nicNames = $nicNames;
        return $this;
    }
    /**
     * Get nicPasswords value
     * @return \Ovh\ArrayType\MyArrayOfStringType|null
     */
    public function getNicPasswords()
    {
        return $this->nicPasswords;
    }
    /**
     * Set nicPasswords value
     * @param \Ovh\ArrayType\MyArrayOfStringType $nicPasswords
     * @return \Ovh\StructType\TelephonyChangeNicModify
     */
    public function setNicPasswords(\Ovh\ArrayType\MyArrayOfStringType $nicPasswords = null)
    {
        $this->nicPasswords = $nicPasswords;
        return $this;
    }
    /**
     * Get nicTypes value
     * @return \Ovh\ArrayType\MyArrayOfStringType|null
     */
    public function getNicTypes()
    {
        return $this->nicTypes;
    }
    /**
     * Set nicTypes value
     * @param \Ovh\ArrayType\MyArrayOfStringType $nicTypes
     * @return \Ovh\StructType\TelephonyChangeNicModify
     */
    public function setNicTypes(\Ovh\ArrayType\MyArrayOfStringType $nicTypes = null)
    {
        $this->nicTypes = $nicTypes;
        return $this;
    }
    /**
     * Get changeTypes value
     * @return \Ovh\ArrayType\MyArrayOfStringType|null
     */
    public function getChangeTypes()
    {
        return $this->changeTypes;
    }
    /**
     * Set changeTypes value
     * @param \Ovh\ArrayType\MyArrayOfStringType $changeTypes
     * @return \Ovh\StructType\TelephonyChangeNicModify
     */
    public function setChangeTypes(\Ovh\ArrayType\MyArrayOfStringType $changeTypes = null)
    {
        $this->changeTypes = $changeTypes;
        return $this;
    }
    /**
     * Get changeElts value
     * @return \Ovh\ArrayType\MyArrayOfStringType|null
     */
    public function getChangeElts()
    {
        return $this->changeElts;
    }
    /**
     * Set changeElts value
     * @param \Ovh\ArrayType\MyArrayOfStringType $changeElts
     * @return \Ovh\StructType\TelephonyChangeNicModify
     */
    public function setChangeElts(\Ovh\ArrayType\MyArrayOfStringType $changeElts = null)
    {
        $this->changeElts = $changeElts;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ovh\StructType\TelephonyChangeNicModify
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
