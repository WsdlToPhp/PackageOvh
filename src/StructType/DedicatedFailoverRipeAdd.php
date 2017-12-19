<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for dedicatedFailoverRipeAdd StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class DedicatedFailoverRipeAdd extends AbstractStructBase
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
     * The netname
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $netname;
    /**
     * The description
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $description;
    /**
     * The country
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $country;
    /**
     * The addressesNumber
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var int
     */
    public $addressesNumber;
    /**
     * The comment
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $comment;
    /**
     * The routedToInterface
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $routedToInterface;
    /**
     * Constructor method for dedicatedFailoverRipeAdd
     * @uses DedicatedFailoverRipeAdd::setSession()
     * @uses DedicatedFailoverRipeAdd::setHostname()
     * @uses DedicatedFailoverRipeAdd::setNetname()
     * @uses DedicatedFailoverRipeAdd::setDescription()
     * @uses DedicatedFailoverRipeAdd::setCountry()
     * @uses DedicatedFailoverRipeAdd::setAddressesNumber()
     * @uses DedicatedFailoverRipeAdd::setComment()
     * @uses DedicatedFailoverRipeAdd::setRoutedToInterface()
     * @param string $session
     * @param string $hostname
     * @param string $netname
     * @param string $description
     * @param string $country
     * @param int $addressesNumber
     * @param string $comment
     * @param string $routedToInterface
     */
    public function __construct($session = null, $hostname = null, $netname = null, $description = null, $country = null, $addressesNumber = null, $comment = null, $routedToInterface = null)
    {
        $this
            ->setSession($session)
            ->setHostname($hostname)
            ->setNetname($netname)
            ->setDescription($description)
            ->setCountry($country)
            ->setAddressesNumber($addressesNumber)
            ->setComment($comment)
            ->setRoutedToInterface($routedToInterface);
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
     * @return \Ovh\StructType\DedicatedFailoverRipeAdd
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
     * @return \Ovh\StructType\DedicatedFailoverRipeAdd
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
     * Get netname value
     * @return string|null
     */
    public function getNetname()
    {
        return $this->netname;
    }
    /**
     * Set netname value
     * @param string $netname
     * @return \Ovh\StructType\DedicatedFailoverRipeAdd
     */
    public function setNetname($netname = null)
    {
        // validation for constraint: string
        if (!is_null($netname) && !is_string($netname)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($netname)), __LINE__);
        }
        $this->netname = $netname;
        return $this;
    }
    /**
     * Get description value
     * @return string|null
     */
    public function getDescription()
    {
        return $this->description;
    }
    /**
     * Set description value
     * @param string $description
     * @return \Ovh\StructType\DedicatedFailoverRipeAdd
     */
    public function setDescription($description = null)
    {
        // validation for constraint: string
        if (!is_null($description) && !is_string($description)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($description)), __LINE__);
        }
        $this->description = $description;
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
     * @return \Ovh\StructType\DedicatedFailoverRipeAdd
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
     * Get addressesNumber value
     * @return int|null
     */
    public function getAddressesNumber()
    {
        return $this->addressesNumber;
    }
    /**
     * Set addressesNumber value
     * @param int $addressesNumber
     * @return \Ovh\StructType\DedicatedFailoverRipeAdd
     */
    public function setAddressesNumber($addressesNumber = null)
    {
        // validation for constraint: int
        if (!is_null($addressesNumber) && !is_numeric($addressesNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($addressesNumber)), __LINE__);
        }
        $this->addressesNumber = $addressesNumber;
        return $this;
    }
    /**
     * Get comment value
     * @return string|null
     */
    public function getComment()
    {
        return $this->comment;
    }
    /**
     * Set comment value
     * @param string $comment
     * @return \Ovh\StructType\DedicatedFailoverRipeAdd
     */
    public function setComment($comment = null)
    {
        // validation for constraint: string
        if (!is_null($comment) && !is_string($comment)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($comment)), __LINE__);
        }
        $this->comment = $comment;
        return $this;
    }
    /**
     * Get routedToInterface value
     * @return string|null
     */
    public function getRoutedToInterface()
    {
        return $this->routedToInterface;
    }
    /**
     * Set routedToInterface value
     * @param string $routedToInterface
     * @return \Ovh\StructType\DedicatedFailoverRipeAdd
     */
    public function setRoutedToInterface($routedToInterface = null)
    {
        // validation for constraint: string
        if (!is_null($routedToInterface) && !is_string($routedToInterface)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($routedToInterface)), __LINE__);
        }
        $this->routedToInterface = $routedToInterface;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ovh\StructType\DedicatedFailoverRipeAdd
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
