<?php

namespace Ovh\StructType;

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
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $session;
    /**
     * The type
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $type;
    /**
     * The offers
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var \Ovh\ArrayType\MyArrayOfStringType
     */
    public $offers;
    /**
     * The quantities
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var \Ovh\ArrayType\MyArrayOfIntType
     */
    public $quantities;
    /**
     * The nicShipping
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $nicShipping;
    /**
     * The name
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $name;
    /**
     * The address
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $address;
    /**
     * The zip
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $zip;
    /**
     * The city
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $city;
    /**
     * The country
     * Meta information extracted from the WSDL
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
     * @param \Ovh\ArrayType\MyArrayOfStringType $offers
     * @param \Ovh\ArrayType\MyArrayOfIntType $quantities
     * @param string $nicShipping
     * @param string $name
     * @param string $address
     * @param string $zip
     * @param string $city
     * @param string $country
     */
    public function __construct($session = null, $type = null, \Ovh\ArrayType\MyArrayOfStringType $offers = null, \Ovh\ArrayType\MyArrayOfIntType $quantities = null, $nicShipping = null, $name = null, $address = null, $zip = null, $city = null, $country = null)
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
     * @return \Ovh\StructType\TelephonySparePurchase
     */
    public function setSession($session = null)
    {
        // validation for constraint: string
        if (!is_null($session) && !is_string($session)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($session, true), gettype($session)), __LINE__);
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
     * @return \Ovh\StructType\TelephonySparePurchase
     */
    public function setType($type = null)
    {
        // validation for constraint: string
        if (!is_null($type) && !is_string($type)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($type, true), gettype($type)), __LINE__);
        }
        $this->type = $type;
        return $this;
    }
    /**
     * Get offers value
     * @return \Ovh\ArrayType\MyArrayOfStringType|null
     */
    public function getOffers()
    {
        return $this->offers;
    }
    /**
     * Set offers value
     * @param \Ovh\ArrayType\MyArrayOfStringType $offers
     * @return \Ovh\StructType\TelephonySparePurchase
     */
    public function setOffers(\Ovh\ArrayType\MyArrayOfStringType $offers = null)
    {
        $this->offers = $offers;
        return $this;
    }
    /**
     * Get quantities value
     * @return \Ovh\ArrayType\MyArrayOfIntType|null
     */
    public function getQuantities()
    {
        return $this->quantities;
    }
    /**
     * Set quantities value
     * @param \Ovh\ArrayType\MyArrayOfIntType $quantities
     * @return \Ovh\StructType\TelephonySparePurchase
     */
    public function setQuantities(\Ovh\ArrayType\MyArrayOfIntType $quantities = null)
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
     * @return \Ovh\StructType\TelephonySparePurchase
     */
    public function setNicShipping($nicShipping = null)
    {
        // validation for constraint: string
        if (!is_null($nicShipping) && !is_string($nicShipping)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($nicShipping, true), gettype($nicShipping)), __LINE__);
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
     * @return \Ovh\StructType\TelephonySparePurchase
     */
    public function setName($name = null)
    {
        // validation for constraint: string
        if (!is_null($name) && !is_string($name)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($name, true), gettype($name)), __LINE__);
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
     * @return \Ovh\StructType\TelephonySparePurchase
     */
    public function setAddress($address = null)
    {
        // validation for constraint: string
        if (!is_null($address) && !is_string($address)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($address, true), gettype($address)), __LINE__);
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
     * @return \Ovh\StructType\TelephonySparePurchase
     */
    public function setZip($zip = null)
    {
        // validation for constraint: string
        if (!is_null($zip) && !is_string($zip)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($zip, true), gettype($zip)), __LINE__);
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
     * @return \Ovh\StructType\TelephonySparePurchase
     */
    public function setCity($city = null)
    {
        // validation for constraint: string
        if (!is_null($city) && !is_string($city)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($city, true), gettype($city)), __LINE__);
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
     * @return \Ovh\StructType\TelephonySparePurchase
     */
    public function setCountry($country = null)
    {
        // validation for constraint: string
        if (!is_null($country) && !is_string($country)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($country, true), gettype($country)), __LINE__);
        }
        $this->country = $country;
        return $this;
    }
}
