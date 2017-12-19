<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for telephonySmsplusServiceDelete StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class TelephonySmsplusServiceDelete extends AbstractStructBase
{
    /**
     * The session
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $session;
    /**
     * The shortCode
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $shortCode;
    /**
     * The keyword
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $keyword;
    /**
     * The cancelDelete
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var bool
     */
    public $cancelDelete;
    /**
     * Constructor method for telephonySmsplusServiceDelete
     * @uses TelephonySmsplusServiceDelete::setSession()
     * @uses TelephonySmsplusServiceDelete::setShortCode()
     * @uses TelephonySmsplusServiceDelete::setKeyword()
     * @uses TelephonySmsplusServiceDelete::setCancelDelete()
     * @param string $session
     * @param string $shortCode
     * @param string $keyword
     * @param bool $cancelDelete
     */
    public function __construct($session = null, $shortCode = null, $keyword = null, $cancelDelete = null)
    {
        $this
            ->setSession($session)
            ->setShortCode($shortCode)
            ->setKeyword($keyword)
            ->setCancelDelete($cancelDelete);
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
     * @return \PayPal\StructType\TelephonySmsplusServiceDelete
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
     * Get shortCode value
     * @return string|null
     */
    public function getShortCode()
    {
        return $this->shortCode;
    }
    /**
     * Set shortCode value
     * @param string $shortCode
     * @return \PayPal\StructType\TelephonySmsplusServiceDelete
     */
    public function setShortCode($shortCode = null)
    {
        // validation for constraint: string
        if (!is_null($shortCode) && !is_string($shortCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($shortCode)), __LINE__);
        }
        $this->shortCode = $shortCode;
        return $this;
    }
    /**
     * Get keyword value
     * @return string|null
     */
    public function getKeyword()
    {
        return $this->keyword;
    }
    /**
     * Set keyword value
     * @param string $keyword
     * @return \PayPal\StructType\TelephonySmsplusServiceDelete
     */
    public function setKeyword($keyword = null)
    {
        // validation for constraint: string
        if (!is_null($keyword) && !is_string($keyword)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($keyword)), __LINE__);
        }
        $this->keyword = $keyword;
        return $this;
    }
    /**
     * Get cancelDelete value
     * @return bool|null
     */
    public function getCancelDelete()
    {
        return $this->cancelDelete;
    }
    /**
     * Set cancelDelete value
     * @param bool $cancelDelete
     * @return \PayPal\StructType\TelephonySmsplusServiceDelete
     */
    public function setCancelDelete($cancelDelete = null)
    {
        // validation for constraint: boolean
        if (!is_null($cancelDelete) && !is_bool($cancelDelete)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($cancelDelete)), __LINE__);
        }
        $this->cancelDelete = $cancelDelete;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \PayPal\StructType\TelephonySmsplusServiceDelete
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
