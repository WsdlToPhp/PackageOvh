<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for telephonySviInfoReturn StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class TelephonySviInfoReturn extends AbstractStructBase
{
    /**
     * The number
     * @var string
     */
    public $number;
    /**
     * The country
     * @var string
     */
    public $country;
    /**
     * The url
     * @var string
     */
    public $url;
    /**
     * The recordinfo
     * @var string
     */
    public $recordinfo;
    /**
     * Constructor method for telephonySviInfoReturn
     * @uses TelephonySviInfoReturn::setNumber()
     * @uses TelephonySviInfoReturn::setCountry()
     * @uses TelephonySviInfoReturn::setUrl()
     * @uses TelephonySviInfoReturn::setRecordinfo()
     * @param string $number
     * @param string $country
     * @param string $url
     * @param string $recordinfo
     */
    public function __construct($number = null, $country = null, $url = null, $recordinfo = null)
    {
        $this
            ->setNumber($number)
            ->setCountry($country)
            ->setUrl($url)
            ->setRecordinfo($recordinfo);
    }
    /**
     * Get number value
     * @return string|null
     */
    public function getNumber()
    {
        return $this->number;
    }
    /**
     * Set number value
     * @param string $number
     * @return \PayPal\StructType\TelephonySviInfoReturn
     */
    public function setNumber($number = null)
    {
        // validation for constraint: string
        if (!is_null($number) && !is_string($number)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($number)), __LINE__);
        }
        $this->number = $number;
        return $this;
    }
    /**
     * Get country value
     * @return string|null
     */
    public function getCountry()
    {
        return $this->country;
    }
    /**
     * Set country value
     * @param string $country
     * @return \PayPal\StructType\TelephonySviInfoReturn
     */
    public function setCountry($country = null)
    {
        // validation for constraint: string
        if (!is_null($country) && !is_string($country)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($country)), __LINE__);
        }
        $this->country = $country;
        return $this;
    }
    /**
     * Get url value
     * @return string|null
     */
    public function getUrl()
    {
        return $this->url;
    }
    /**
     * Set url value
     * @param string $url
     * @return \PayPal\StructType\TelephonySviInfoReturn
     */
    public function setUrl($url = null)
    {
        // validation for constraint: string
        if (!is_null($url) && !is_string($url)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($url)), __LINE__);
        }
        $this->url = $url;
        return $this;
    }
    /**
     * Get recordinfo value
     * @return string|null
     */
    public function getRecordinfo()
    {
        return $this->recordinfo;
    }
    /**
     * Set recordinfo value
     * @param string $recordinfo
     * @return \PayPal\StructType\TelephonySviInfoReturn
     */
    public function setRecordinfo($recordinfo = null)
    {
        // validation for constraint: string
        if (!is_null($recordinfo) && !is_string($recordinfo)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($recordinfo)), __LINE__);
        }
        $this->recordinfo = $recordinfo;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \PayPal\StructType\TelephonySviInfoReturn
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
