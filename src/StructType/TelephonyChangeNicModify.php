<?php

namespace PayPal\StructType;

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
     * @var \PayPal\ArrayType\MyArrayOfStringType
     */
    public $nicNames;
    /**
     * The nicPasswords
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var \PayPal\ArrayType\MyArrayOfStringType
     */
    public $nicPasswords;
    /**
     * The nicTypes
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var \PayPal\ArrayType\MyArrayOfStringType
     */
    public $nicTypes;
    /**
     * The changeTypes
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var \PayPal\ArrayType\MyArrayOfStringType
     */
    public $changeTypes;
    /**
     * The changeElts
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var \PayPal\ArrayType\MyArrayOfStringType
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
     * @param \PayPal\ArrayType\MyArrayOfStringType $nicNames
     * @param \PayPal\ArrayType\MyArrayOfStringType $nicPasswords
     * @param \PayPal\ArrayType\MyArrayOfStringType $nicTypes
     * @param \PayPal\ArrayType\MyArrayOfStringType $changeTypes
     * @param \PayPal\ArrayType\MyArrayOfStringType $changeElts
     */
    public function __construct($session = null, \PayPal\ArrayType\MyArrayOfStringType $nicNames = null, \PayPal\ArrayType\MyArrayOfStringType $nicPasswords = null, \PayPal\ArrayType\MyArrayOfStringType $nicTypes = null, \PayPal\ArrayType\MyArrayOfStringType $changeTypes = null, \PayPal\ArrayType\MyArrayOfStringType $changeElts = null)
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
     * @return \PayPal\StructType\TelephonyChangeNicModify
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
     * @return \PayPal\ArrayType\MyArrayOfStringType|null
     */
    public function getNicNames()
    {
        return $this->nicNames;
    }
    /**
     * Set nicNames value
     * @param \PayPal\ArrayType\MyArrayOfStringType $nicNames
     * @return \PayPal\StructType\TelephonyChangeNicModify
     */
    public function setNicNames(\PayPal\ArrayType\MyArrayOfStringType $nicNames = null)
    {
        $this->nicNames = $nicNames;
        return $this;
    }
    /**
     * Get nicPasswords value
     * @return \PayPal\ArrayType\MyArrayOfStringType|null
     */
    public function getNicPasswords()
    {
        return $this->nicPasswords;
    }
    /**
     * Set nicPasswords value
     * @param \PayPal\ArrayType\MyArrayOfStringType $nicPasswords
     * @return \PayPal\StructType\TelephonyChangeNicModify
     */
    public function setNicPasswords(\PayPal\ArrayType\MyArrayOfStringType $nicPasswords = null)
    {
        $this->nicPasswords = $nicPasswords;
        return $this;
    }
    /**
     * Get nicTypes value
     * @return \PayPal\ArrayType\MyArrayOfStringType|null
     */
    public function getNicTypes()
    {
        return $this->nicTypes;
    }
    /**
     * Set nicTypes value
     * @param \PayPal\ArrayType\MyArrayOfStringType $nicTypes
     * @return \PayPal\StructType\TelephonyChangeNicModify
     */
    public function setNicTypes(\PayPal\ArrayType\MyArrayOfStringType $nicTypes = null)
    {
        $this->nicTypes = $nicTypes;
        return $this;
    }
    /**
     * Get changeTypes value
     * @return \PayPal\ArrayType\MyArrayOfStringType|null
     */
    public function getChangeTypes()
    {
        return $this->changeTypes;
    }
    /**
     * Set changeTypes value
     * @param \PayPal\ArrayType\MyArrayOfStringType $changeTypes
     * @return \PayPal\StructType\TelephonyChangeNicModify
     */
    public function setChangeTypes(\PayPal\ArrayType\MyArrayOfStringType $changeTypes = null)
    {
        $this->changeTypes = $changeTypes;
        return $this;
    }
    /**
     * Get changeElts value
     * @return \PayPal\ArrayType\MyArrayOfStringType|null
     */
    public function getChangeElts()
    {
        return $this->changeElts;
    }
    /**
     * Set changeElts value
     * @param \PayPal\ArrayType\MyArrayOfStringType $changeElts
     * @return \PayPal\StructType\TelephonyChangeNicModify
     */
    public function setChangeElts(\PayPal\ArrayType\MyArrayOfStringType $changeElts = null)
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
     * @return \PayPal\StructType\TelephonyChangeNicModify
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
