<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for telephonyDirectoryModifyAddress StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class TelephonyDirectoryModifyAddress extends AbstractStructBase
{
    /**
     * The session
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $session;
    /**
     * The callNumber
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $callNumber;
    /**
     * The countryCode
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $countryCode;
    /**
     * The name
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $name;
    /**
     * The firstName
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $firstName;
    /**
     * The wayNumber
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $wayNumber;
    /**
     * The wayNumberExtra
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $wayNumberExtra;
    /**
     * The wayType
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $wayType;
    /**
     * The wayName
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $wayName;
    /**
     * The addressExtra
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $addressExtra;
    /**
     * The urbanDistrict
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $urbanDistrict;
    /**
     * The postBox
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $postBox;
    /**
     * The cedex
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $cedex;
    /**
     * The postCode
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $postCode;
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
     * The email
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $email;
    /**
     * The legalForm
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $legalForm;
    /**
     * The socialNomination
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $socialNomination;
    /**
     * The PJSocialNomination
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $PJSocialNomination;
    /**
     * The socialNominationExtra
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $socialNominationExtra;
    /**
     * The occupation
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $occupation;
    /**
     * The siret
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $siret;
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
     * The address
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $address;
    /**
     * Constructor method for telephonyDirectoryModifyAddress
     * @uses TelephonyDirectoryModifyAddress::setSession()
     * @uses TelephonyDirectoryModifyAddress::setCallNumber()
     * @uses TelephonyDirectoryModifyAddress::setCountryCode()
     * @uses TelephonyDirectoryModifyAddress::setName()
     * @uses TelephonyDirectoryModifyAddress::setFirstName()
     * @uses TelephonyDirectoryModifyAddress::setWayNumber()
     * @uses TelephonyDirectoryModifyAddress::setWayNumberExtra()
     * @uses TelephonyDirectoryModifyAddress::setWayType()
     * @uses TelephonyDirectoryModifyAddress::setWayName()
     * @uses TelephonyDirectoryModifyAddress::setAddressExtra()
     * @uses TelephonyDirectoryModifyAddress::setUrbanDistrict()
     * @uses TelephonyDirectoryModifyAddress::setPostBox()
     * @uses TelephonyDirectoryModifyAddress::setCedex()
     * @uses TelephonyDirectoryModifyAddress::setPostCode()
     * @uses TelephonyDirectoryModifyAddress::setCity()
     * @uses TelephonyDirectoryModifyAddress::setCountry()
     * @uses TelephonyDirectoryModifyAddress::setEmail()
     * @uses TelephonyDirectoryModifyAddress::setLegalForm()
     * @uses TelephonyDirectoryModifyAddress::setSocialNomination()
     * @uses TelephonyDirectoryModifyAddress::setPJSocialNomination()
     * @uses TelephonyDirectoryModifyAddress::setSocialNominationExtra()
     * @uses TelephonyDirectoryModifyAddress::setOccupation()
     * @uses TelephonyDirectoryModifyAddress::setSiret()
     * @uses TelephonyDirectoryModifyAddress::setApe()
     * @uses TelephonyDirectoryModifyAddress::setPJCode()
     * @uses TelephonyDirectoryModifyAddress::setAddress()
     * @param string $session
     * @param string $callNumber
     * @param string $countryCode
     * @param string $name
     * @param string $firstName
     * @param string $wayNumber
     * @param string $wayNumberExtra
     * @param string $wayType
     * @param string $wayName
     * @param string $addressExtra
     * @param string $urbanDistrict
     * @param string $postBox
     * @param string $cedex
     * @param string $postCode
     * @param string $city
     * @param string $country
     * @param string $email
     * @param string $legalForm
     * @param string $socialNomination
     * @param string $pJSocialNomination
     * @param string $socialNominationExtra
     * @param string $occupation
     * @param string $siret
     * @param string $ape
     * @param string $pJCode
     * @param string $address
     */
    public function __construct($session = null, $callNumber = null, $countryCode = null, $name = null, $firstName = null, $wayNumber = null, $wayNumberExtra = null, $wayType = null, $wayName = null, $addressExtra = null, $urbanDistrict = null, $postBox = null, $cedex = null, $postCode = null, $city = null, $country = null, $email = null, $legalForm = null, $socialNomination = null, $pJSocialNomination = null, $socialNominationExtra = null, $occupation = null, $siret = null, $ape = null, $pJCode = null, $address = null)
    {
        $this
            ->setSession($session)
            ->setCallNumber($callNumber)
            ->setCountryCode($countryCode)
            ->setName($name)
            ->setFirstName($firstName)
            ->setWayNumber($wayNumber)
            ->setWayNumberExtra($wayNumberExtra)
            ->setWayType($wayType)
            ->setWayName($wayName)
            ->setAddressExtra($addressExtra)
            ->setUrbanDistrict($urbanDistrict)
            ->setPostBox($postBox)
            ->setCedex($cedex)
            ->setPostCode($postCode)
            ->setCity($city)
            ->setCountry($country)
            ->setEmail($email)
            ->setLegalForm($legalForm)
            ->setSocialNomination($socialNomination)
            ->setPJSocialNomination($pJSocialNomination)
            ->setSocialNominationExtra($socialNominationExtra)
            ->setOccupation($occupation)
            ->setSiret($siret)
            ->setApe($ape)
            ->setPJCode($pJCode)
            ->setAddress($address);
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
     * @return \Ovh\StructType\TelephonyDirectoryModifyAddress
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
     * Get callNumber value
     * @return string|null
     */
    public function getCallNumber()
    {
        return $this->callNumber;
    }
    /**
     * Set callNumber value
     * @param string $callNumber
     * @return \Ovh\StructType\TelephonyDirectoryModifyAddress
     */
    public function setCallNumber($callNumber = null)
    {
        // validation for constraint: string
        if (!is_null($callNumber) && !is_string($callNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($callNumber)), __LINE__);
        }
        $this->callNumber = $callNumber;
        return $this;
    }
    /**
     * Get countryCode value
     * @return string|null
     */
    public function getCountryCode()
    {
        return $this->countryCode;
    }
    /**
     * Set countryCode value
     * @param string $countryCode
     * @return \Ovh\StructType\TelephonyDirectoryModifyAddress
     */
    public function setCountryCode($countryCode = null)
    {
        // validation for constraint: string
        if (!is_null($countryCode) && !is_string($countryCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($countryCode)), __LINE__);
        }
        $this->countryCode = $countryCode;
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
     * @return \Ovh\StructType\TelephonyDirectoryModifyAddress
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
     * Get firstName value
     * @return string|null
     */
    public function getFirstName()
    {
        return $this->firstName;
    }
    /**
     * Set firstName value
     * @param string $firstName
     * @return \Ovh\StructType\TelephonyDirectoryModifyAddress
     */
    public function setFirstName($firstName = null)
    {
        // validation for constraint: string
        if (!is_null($firstName) && !is_string($firstName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($firstName)), __LINE__);
        }
        $this->firstName = $firstName;
        return $this;
    }
    /**
     * Get wayNumber value
     * @return string|null
     */
    public function getWayNumber()
    {
        return $this->wayNumber;
    }
    /**
     * Set wayNumber value
     * @param string $wayNumber
     * @return \Ovh\StructType\TelephonyDirectoryModifyAddress
     */
    public function setWayNumber($wayNumber = null)
    {
        // validation for constraint: string
        if (!is_null($wayNumber) && !is_string($wayNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($wayNumber)), __LINE__);
        }
        $this->wayNumber = $wayNumber;
        return $this;
    }
    /**
     * Get wayNumberExtra value
     * @return string|null
     */
    public function getWayNumberExtra()
    {
        return $this->wayNumberExtra;
    }
    /**
     * Set wayNumberExtra value
     * @param string $wayNumberExtra
     * @return \Ovh\StructType\TelephonyDirectoryModifyAddress
     */
    public function setWayNumberExtra($wayNumberExtra = null)
    {
        // validation for constraint: string
        if (!is_null($wayNumberExtra) && !is_string($wayNumberExtra)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($wayNumberExtra)), __LINE__);
        }
        $this->wayNumberExtra = $wayNumberExtra;
        return $this;
    }
    /**
     * Get wayType value
     * @return string|null
     */
    public function getWayType()
    {
        return $this->wayType;
    }
    /**
     * Set wayType value
     * @param string $wayType
     * @return \Ovh\StructType\TelephonyDirectoryModifyAddress
     */
    public function setWayType($wayType = null)
    {
        // validation for constraint: string
        if (!is_null($wayType) && !is_string($wayType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($wayType)), __LINE__);
        }
        $this->wayType = $wayType;
        return $this;
    }
    /**
     * Get wayName value
     * @return string|null
     */
    public function getWayName()
    {
        return $this->wayName;
    }
    /**
     * Set wayName value
     * @param string $wayName
     * @return \Ovh\StructType\TelephonyDirectoryModifyAddress
     */
    public function setWayName($wayName = null)
    {
        // validation for constraint: string
        if (!is_null($wayName) && !is_string($wayName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($wayName)), __LINE__);
        }
        $this->wayName = $wayName;
        return $this;
    }
    /**
     * Get addressExtra value
     * @return string|null
     */
    public function getAddressExtra()
    {
        return $this->addressExtra;
    }
    /**
     * Set addressExtra value
     * @param string $addressExtra
     * @return \Ovh\StructType\TelephonyDirectoryModifyAddress
     */
    public function setAddressExtra($addressExtra = null)
    {
        // validation for constraint: string
        if (!is_null($addressExtra) && !is_string($addressExtra)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($addressExtra)), __LINE__);
        }
        $this->addressExtra = $addressExtra;
        return $this;
    }
    /**
     * Get urbanDistrict value
     * @return string|null
     */
    public function getUrbanDistrict()
    {
        return $this->urbanDistrict;
    }
    /**
     * Set urbanDistrict value
     * @param string $urbanDistrict
     * @return \Ovh\StructType\TelephonyDirectoryModifyAddress
     */
    public function setUrbanDistrict($urbanDistrict = null)
    {
        // validation for constraint: string
        if (!is_null($urbanDistrict) && !is_string($urbanDistrict)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($urbanDistrict)), __LINE__);
        }
        $this->urbanDistrict = $urbanDistrict;
        return $this;
    }
    /**
     * Get postBox value
     * @return string|null
     */
    public function getPostBox()
    {
        return $this->postBox;
    }
    /**
     * Set postBox value
     * @param string $postBox
     * @return \Ovh\StructType\TelephonyDirectoryModifyAddress
     */
    public function setPostBox($postBox = null)
    {
        // validation for constraint: string
        if (!is_null($postBox) && !is_string($postBox)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($postBox)), __LINE__);
        }
        $this->postBox = $postBox;
        return $this;
    }
    /**
     * Get cedex value
     * @return string|null
     */
    public function getCedex()
    {
        return $this->cedex;
    }
    /**
     * Set cedex value
     * @param string $cedex
     * @return \Ovh\StructType\TelephonyDirectoryModifyAddress
     */
    public function setCedex($cedex = null)
    {
        // validation for constraint: string
        if (!is_null($cedex) && !is_string($cedex)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($cedex)), __LINE__);
        }
        $this->cedex = $cedex;
        return $this;
    }
    /**
     * Get postCode value
     * @return string|null
     */
    public function getPostCode()
    {
        return $this->postCode;
    }
    /**
     * Set postCode value
     * @param string $postCode
     * @return \Ovh\StructType\TelephonyDirectoryModifyAddress
     */
    public function setPostCode($postCode = null)
    {
        // validation for constraint: string
        if (!is_null($postCode) && !is_string($postCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($postCode)), __LINE__);
        }
        $this->postCode = $postCode;
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
     * @return \Ovh\StructType\TelephonyDirectoryModifyAddress
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
     * @return \Ovh\StructType\TelephonyDirectoryModifyAddress
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
     * Get email value
     * @return string|null
     */
    public function getEmail()
    {
        return $this->email;
    }
    /**
     * Set email value
     * @param string $email
     * @return \Ovh\StructType\TelephonyDirectoryModifyAddress
     */
    public function setEmail($email = null)
    {
        // validation for constraint: string
        if (!is_null($email) && !is_string($email)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($email)), __LINE__);
        }
        $this->email = $email;
        return $this;
    }
    /**
     * Get legalForm value
     * @return string|null
     */
    public function getLegalForm()
    {
        return $this->legalForm;
    }
    /**
     * Set legalForm value
     * @param string $legalForm
     * @return \Ovh\StructType\TelephonyDirectoryModifyAddress
     */
    public function setLegalForm($legalForm = null)
    {
        // validation for constraint: string
        if (!is_null($legalForm) && !is_string($legalForm)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($legalForm)), __LINE__);
        }
        $this->legalForm = $legalForm;
        return $this;
    }
    /**
     * Get socialNomination value
     * @return string|null
     */
    public function getSocialNomination()
    {
        return $this->socialNomination;
    }
    /**
     * Set socialNomination value
     * @param string $socialNomination
     * @return \Ovh\StructType\TelephonyDirectoryModifyAddress
     */
    public function setSocialNomination($socialNomination = null)
    {
        // validation for constraint: string
        if (!is_null($socialNomination) && !is_string($socialNomination)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($socialNomination)), __LINE__);
        }
        $this->socialNomination = $socialNomination;
        return $this;
    }
    /**
     * Get PJSocialNomination value
     * @return string|null
     */
    public function getPJSocialNomination()
    {
        return $this->PJSocialNomination;
    }
    /**
     * Set PJSocialNomination value
     * @param string $pJSocialNomination
     * @return \Ovh\StructType\TelephonyDirectoryModifyAddress
     */
    public function setPJSocialNomination($pJSocialNomination = null)
    {
        // validation for constraint: string
        if (!is_null($pJSocialNomination) && !is_string($pJSocialNomination)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($pJSocialNomination)), __LINE__);
        }
        $this->PJSocialNomination = $pJSocialNomination;
        return $this;
    }
    /**
     * Get socialNominationExtra value
     * @return string|null
     */
    public function getSocialNominationExtra()
    {
        return $this->socialNominationExtra;
    }
    /**
     * Set socialNominationExtra value
     * @param string $socialNominationExtra
     * @return \Ovh\StructType\TelephonyDirectoryModifyAddress
     */
    public function setSocialNominationExtra($socialNominationExtra = null)
    {
        // validation for constraint: string
        if (!is_null($socialNominationExtra) && !is_string($socialNominationExtra)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($socialNominationExtra)), __LINE__);
        }
        $this->socialNominationExtra = $socialNominationExtra;
        return $this;
    }
    /**
     * Get occupation value
     * @return string|null
     */
    public function getOccupation()
    {
        return $this->occupation;
    }
    /**
     * Set occupation value
     * @param string $occupation
     * @return \Ovh\StructType\TelephonyDirectoryModifyAddress
     */
    public function setOccupation($occupation = null)
    {
        // validation for constraint: string
        if (!is_null($occupation) && !is_string($occupation)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($occupation)), __LINE__);
        }
        $this->occupation = $occupation;
        return $this;
    }
    /**
     * Get siret value
     * @return string|null
     */
    public function getSiret()
    {
        return $this->siret;
    }
    /**
     * Set siret value
     * @param string $siret
     * @return \Ovh\StructType\TelephonyDirectoryModifyAddress
     */
    public function setSiret($siret = null)
    {
        // validation for constraint: string
        if (!is_null($siret) && !is_string($siret)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($siret)), __LINE__);
        }
        $this->siret = $siret;
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
     * @return \Ovh\StructType\TelephonyDirectoryModifyAddress
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
     * @return \Ovh\StructType\TelephonyDirectoryModifyAddress
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
     * @return \Ovh\StructType\TelephonyDirectoryModifyAddress
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
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ovh\StructType\TelephonyDirectoryModifyAddress
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
