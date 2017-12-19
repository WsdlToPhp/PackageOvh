<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for telephonySmsplusSendSmsMt StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class TelephonySmsplusSendSmsMt extends AbstractStructBase
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
     * The message
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $message;
    /**
     * The idsList
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var \Ovh\ArrayType\MyArrayOfIntType
     */
    public $idsList;
    /**
     * Constructor method for telephonySmsplusSendSmsMt
     * @uses TelephonySmsplusSendSmsMt::setSession()
     * @uses TelephonySmsplusSendSmsMt::setShortCode()
     * @uses TelephonySmsplusSendSmsMt::setKeyword()
     * @uses TelephonySmsplusSendSmsMt::setMessage()
     * @uses TelephonySmsplusSendSmsMt::setIdsList()
     * @param string $session
     * @param string $shortCode
     * @param string $keyword
     * @param string $message
     * @param \Ovh\ArrayType\MyArrayOfIntType $idsList
     */
    public function __construct($session = null, $shortCode = null, $keyword = null, $message = null, \Ovh\ArrayType\MyArrayOfIntType $idsList = null)
    {
        $this
            ->setSession($session)
            ->setShortCode($shortCode)
            ->setKeyword($keyword)
            ->setMessage($message)
            ->setIdsList($idsList);
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
     * @return \Ovh\StructType\TelephonySmsplusSendSmsMt
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
     * @return \Ovh\StructType\TelephonySmsplusSendSmsMt
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
     * @return \Ovh\StructType\TelephonySmsplusSendSmsMt
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
     * Get message value
     * @return string|null
     */
    public function getMessage()
    {
        return $this->message;
    }
    /**
     * Set message value
     * @param string $message
     * @return \Ovh\StructType\TelephonySmsplusSendSmsMt
     */
    public function setMessage($message = null)
    {
        // validation for constraint: string
        if (!is_null($message) && !is_string($message)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($message)), __LINE__);
        }
        $this->message = $message;
        return $this;
    }
    /**
     * Get idsList value
     * @return \Ovh\ArrayType\MyArrayOfIntType|null
     */
    public function getIdsList()
    {
        return $this->idsList;
    }
    /**
     * Set idsList value
     * @param \Ovh\ArrayType\MyArrayOfIntType $idsList
     * @return \Ovh\StructType\TelephonySmsplusSendSmsMt
     */
    public function setIdsList(\Ovh\ArrayType\MyArrayOfIntType $idsList = null)
    {
        $this->idsList = $idsList;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ovh\StructType\TelephonySmsplusSendSmsMt
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
