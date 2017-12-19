<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for telephonySparePurchase StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class TelephonySparePurchase extends AbstractStructBase
{
    /**
     * The session
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $session;
    /**
     * The type
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $type;
    /**
     * The offers
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var \PayPal\ArrayType\MyArrayOfStringType
     */
    public $offers;
    /**
     * The quantities
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var \PayPal\ArrayType\MyArrayOfIntType
     */
    public $quantities;
    /**
     * The nicShipping
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $nicShipping;
    /**
     * The name
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $name;
    /**
     * The address
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $address;
    /**
     * The zip
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $zip;
    /**
     * The city
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $city;
    /**
     * The country
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $country;
    /**
     * Constructor method for telephonySparePurchase
     * @uses TelephonySparePurchase::setSession()
     * @uses TelephonySparePurchase::setType()
     * @uses TelephonySparePurchase::setOffers()
     * @uses TelephonySparePurchase::setQuantities()
     * @uses TelephonySparePurchase::setNicShipping()
     * @uses TelephonySparePurchase::setName()
     * @uses TelephonySparePurchase::setAddress()
     * @uses TelephonySparePurchase::setZip()
     * @uses TelephonySparePurchase::setCity()
     * @uses TelephonySparePurchase::setCountry()
     * @param string $session
     * @param string $type
     * @param \PayPal\ArrayType\MyArrayOfStringType $offers
     * @param \PayPal\ArrayType\MyArrayOfIntType $quantities
     * @param string $nicShipping
     * @param string $name
     * @param string $address
     * @param string $zip
     * @param string $city
     * @param string $country
     */
    public function __construct($session = null, $type = null, \PayPal\ArrayType\MyArrayOfStringType $offers = null, \PayPal\ArrayType\MyArrayOfIntType $quantities = null, $nicShipping = null, $name = null, $address = null, $zip = null, $city = null, $country = null)
    {
        $this
            ->setSession($session)
            ->setType($type)
            ->setOffers($offers)
            ->setQuantities($quantities)
            ->setNicShipping($nicShipping)
            ->setName($name)
            ->setAddress($address)
            ->setZip($zip)
            ->setCity($city)
            ->setCountry($country);
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
     * @return \PayPal\StructType\TelephonySparePurchase
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
     * Get type value
     * @return string|null
     */
    public function getType()
    {
        return $this->type;
    }
    /**
     * Set type value
     * @param string $type
     * @return \PayPal\StructType\TelephonySparePurchase
     */
    public function setType($type = null)
    {
        // validation for constraint: string
        if (!is_null($type) && !is_string($type)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($type)), __LINE__);
        }
        $this->type = $type;
        return $this;
    }
    /**
     * Get offers value
     * @return \PayPal\ArrayType\MyArrayOfStringType|null
     */
    public function getOffers()
    {
        return $this->offers;
    }
    /**
     * Set offers value
     * @param \PayPal\ArrayType\MyArrayOfStringType $offers
     * @return \PayPal\StructType\TelephonySparePurchase
     */
    public function setOffers(\PayPal\ArrayType\MyArrayOfStringType $offers = null)
    {
        $this->offers = $offers;
        return $this;
    }
    /**
     * Get quantities value
     * @return \PayPal\ArrayType\MyArrayOfIntType|null
     */
    public function getQuantities()
    {
        return $this->quantities;
    }
    /**
     * Set quantities value
     * @param \PayPal\ArrayType\MyArrayOfIntType $quantities
     * @return \PayPal\StructType\TelephonySparePurchase
     */
    public function setQuantities(\PayPal\ArrayType\MyArrayOfIntType $quantities = null)
    {
        $this->quantities = $quantities;
        return $this;
    }
    /**
     * Get nicShipping value
     * @return string|null
     */
    public function getNicShipping()
    {
        return $this->nicShipping;
    }
    /**
     * Set nicShipping value
     * @param string $nicShipping
     * @return \PayPal\StructType\TelephonySparePurchase
     */
    public function setNicShipping($nicShipping = null)
    {
        // validation for constraint: string
        if (!is_null($nicShipping) && !is_string($nicShipping)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($nicShipping)), __LINE__);
        }
        $this->nicShipping = $nicShipping;
        return $this;
    }
    /**
     * Get name value
     * @return string|null
     */
    public function getName()
    {
        return $this->name;
    }
    /**
     * Set name value
     * @param string $name
     * @return \PayPal\StructType\TelephonySparePurchase
     */
    public function setName($name = null)
    {
        // validation for constraint: string
        if (!is_null($name) && !is_string($name)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($name)), __LINE__);
        }
        $this->name = $name;
        return $this;
    }
    /**
     * Get address value
     * @return string|null
     */
    public function getAddress()
    {
        return $this->address;
    }
    /**
     * Set address value
     * @param string $address
     * @return \PayPal\StructType\TelephonySparePurchase
     */
    public function setAddress($address = null)
    {
        // validation for constraint: string
        if (!is_null($address) && !is_string($address)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($address)), __LINE__);
        }
        $this->address = $address;
        return $this;
    }
    /**
     * Get zip value
     * @return string|null
     */
    public function getZip()
    {
        return $this->zip;
    }
    /**
     * Set zip value
     * @param string $zip
     * @return \PayPal\StructType\TelephonySparePurchase
     */
    public function setZip($zip = null)
    {
        // validation for constraint: string
        if (!is_null($zip) && !is_string($zip)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($zip)), __LINE__);
        }
        $this->zip = $zip;
        return $this;
    }
    /**
     * Get city value
     * @return string|null
     */
    public function getCity()
    {
        return $this->city;
    }
    /**
     * Set city value
     * @param string $city
     * @return \PayPal\StructType\TelephonySparePurchase
     */
    public function setCity($city = null)
    {
        // validation for constraint: string
        if (!is_null($city) && !is_string($city)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($city)), __LINE__);
        }
        $this->city = $city;
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
     * @return \PayPal\StructType\TelephonySparePurchase
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
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \PayPal\StructType\TelephonySparePurchase
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
