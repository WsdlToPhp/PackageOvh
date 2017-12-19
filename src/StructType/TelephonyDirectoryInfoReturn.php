<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for telephonyDirectoryInfoReturn StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class TelephonyDirectoryInfoReturn extends AbstractStructBase
{
    /**
     * The number
     * @var string
     */
    public $number;
    /**
     * The name
     * @var string
     */
    public $name;
    /**
     * The firstName
     * @var string
     */
    public $firstName;
    /**
     * The wayNumber
     * @var string
     */
    public $wayNumber;
    /**
     * The wayType
     * @var string
     */
    public $wayType;
    /**
     * The wayTypeDescription
     * @var string
     */
    public $wayTypeDescription;
    /**
     * The wayNumberExtra
     * @var string
     */
    public $wayNumberExtra;
    /**
     * The wayName
     * @var string
     */
    public $wayName;
    /**
     * The addressExtra
     * @var string
     */
    public $addressExtra;
    /**
     * The urbanDistrict
     * @var string
     */
    public $urbanDistrict;
    /**
     * The postBox
     * @var string
     */
    public $postBox;
    /**
     * The cedex
     * @var string
     */
    public $cedex;
    /**
     * The postCode
     * @var string
     */
    public $postCode;
    /**
     * The city
     * @var string
     */
    public $city;
    /**
     * The country
     * @var string
     */
    public $country;
    /**
     * The email
     * @var string
     */
    public $email;
    /**
     * The legalForm
     * @var string
     */
    public $legalForm;
    /**
     * The occupation
     * @var string
     */
    public $occupation;
    /**
     * The socialNomination
     * @var string
     */
    public $socialNomination;
    /**
     * The PJSocialNomination
     * @var string
     */
    public $PJSocialNomination;
    /**
     * The socialNominationExtra
     * @var string
     */
    public $socialNominationExtra;
    /**
     * The lineDescription
     * @var string
     */
    public $lineDescription;
    /**
     * The siret
     * @var string
     */
    public $siret;
    /**
     * The ape
     * @var string
     */
    public $ape;
    /**
     * The displayFirstName
     * @var string
     */
    public $displayFirstName;
    /**
     * The displayOnlyCity
     * @var string
     */
    public $displayOnlyCity;
    /**
     * The displayUniversalDirectory
     * @var string
     */
    public $displayUniversalDirectory;
    /**
     * The displayMarketingDirectory
     * @var string
     */
    public $displayMarketingDirectory;
    /**
     * The displaySearchReverse
     * @var string
     */
    public $displaySearchReverse;
    /**
     * The receivePJDirectory
     * @var string
     */
    public $receivePJDirectory;
    /**
     * The inseeCode
     * @var int
     */
    public $inseeCode;
    /**
     * The codePJ
     * @var string
     */
    public $codePJ;
    /**
     * The labelPJ
     * @var string
     */
    public $labelPJ;
    /**
     * The modificationType
     * @var string
     */
    public $modificationType;
    /**
     * The modificationDate
     * @var string
     */
    public $modificationDate;
    /**
     * The status
     * @var string
     */
    public $status;
    /**
     * The status_pagesjaunes
     * @var string
     */
    public $status_pagesjaunes;
    /**
     * The status_118712
     * @var string
     */
    public $status_118712;
    /**
     * The address
     * @var string
     */
    public $address;
    /**
     * Constructor method for telephonyDirectoryInfoReturn
     * @uses TelephonyDirectoryInfoReturn::setNumber()
     * @uses TelephonyDirectoryInfoReturn::setName()
     * @uses TelephonyDirectoryInfoReturn::setFirstName()
     * @uses TelephonyDirectoryInfoReturn::setWayNumber()
     * @uses TelephonyDirectoryInfoReturn::setWayType()
     * @uses TelephonyDirectoryInfoReturn::setWayTypeDescription()
     * @uses TelephonyDirectoryInfoReturn::setWayNumberExtra()
     * @uses TelephonyDirectoryInfoReturn::setWayName()
     * @uses TelephonyDirectoryInfoReturn::setAddressExtra()
     * @uses TelephonyDirectoryInfoReturn::setUrbanDistrict()
     * @uses TelephonyDirectoryInfoReturn::setPostBox()
     * @uses TelephonyDirectoryInfoReturn::setCedex()
     * @uses TelephonyDirectoryInfoReturn::setPostCode()
     * @uses TelephonyDirectoryInfoReturn::setCity()
     * @uses TelephonyDirectoryInfoReturn::setCountry()
     * @uses TelephonyDirectoryInfoReturn::setEmail()
     * @uses TelephonyDirectoryInfoReturn::setLegalForm()
     * @uses TelephonyDirectoryInfoReturn::setOccupation()
     * @uses TelephonyDirectoryInfoReturn::setSocialNomination()
     * @uses TelephonyDirectoryInfoReturn::setPJSocialNomination()
     * @uses TelephonyDirectoryInfoReturn::setSocialNominationExtra()
     * @uses TelephonyDirectoryInfoReturn::setLineDescription()
     * @uses TelephonyDirectoryInfoReturn::setSiret()
     * @uses TelephonyDirectoryInfoReturn::setApe()
     * @uses TelephonyDirectoryInfoReturn::setDisplayFirstName()
     * @uses TelephonyDirectoryInfoReturn::setDisplayOnlyCity()
     * @uses TelephonyDirectoryInfoReturn::setDisplayUniversalDirectory()
     * @uses TelephonyDirectoryInfoReturn::setDisplayMarketingDirectory()
     * @uses TelephonyDirectoryInfoReturn::setDisplaySearchReverse()
     * @uses TelephonyDirectoryInfoReturn::setReceivePJDirectory()
     * @uses TelephonyDirectoryInfoReturn::setInseeCode()
     * @uses TelephonyDirectoryInfoReturn::setCodePJ()
     * @uses TelephonyDirectoryInfoReturn::setLabelPJ()
     * @uses TelephonyDirectoryInfoReturn::setModificationType()
     * @uses TelephonyDirectoryInfoReturn::setModificationDate()
     * @uses TelephonyDirectoryInfoReturn::setStatus()
     * @uses TelephonyDirectoryInfoReturn::setStatus_pagesjaunes()
     * @uses TelephonyDirectoryInfoReturn::setStatus_118712()
     * @uses TelephonyDirectoryInfoReturn::setAddress()
     * @param string $number
     * @param string $name
     * @param string $firstName
     * @param string $wayNumber
     * @param string $wayType
     * @param string $wayTypeDescription
     * @param string $wayNumberExtra
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
     * @param string $occupation
     * @param string $socialNomination
     * @param string $pJSocialNomination
     * @param string $socialNominationExtra
     * @param string $lineDescription
     * @param string $siret
     * @param string $ape
     * @param string $displayFirstName
     * @param string $displayOnlyCity
     * @param string $displayUniversalDirectory
     * @param string $displayMarketingDirectory
     * @param string $displaySearchReverse
     * @param string $receivePJDirectory
     * @param int $inseeCode
     * @param string $codePJ
     * @param string $labelPJ
     * @param string $modificationType
     * @param string $modificationDate
     * @param string $status
     * @param string $status_pagesjaunes
     * @param string $status_118712
     * @param string $address
     */
    public function __construct($number = null, $name = null, $firstName = null, $wayNumber = null, $wayType = null, $wayTypeDescription = null, $wayNumberExtra = null, $wayName = null, $addressExtra = null, $urbanDistrict = null, $postBox = null, $cedex = null, $postCode = null, $city = null, $country = null, $email = null, $legalForm = null, $occupation = null, $socialNomination = null, $pJSocialNomination = null, $socialNominationExtra = null, $lineDescription = null, $siret = null, $ape = null, $displayFirstName = null, $displayOnlyCity = null, $displayUniversalDirectory = null, $displayMarketingDirectory = null, $displaySearchReverse = null, $receivePJDirectory = null, $inseeCode = null, $codePJ = null, $labelPJ = null, $modificationType = null, $modificationDate = null, $status = null, $status_pagesjaunes = null, $status_118712 = null, $address = null)
    {
        $this
            ->setNumber($number)
            ->setName($name)
            ->setFirstName($firstName)
            ->setWayNumber($wayNumber)
            ->setWayType($wayType)
            ->setWayTypeDescription($wayTypeDescription)
            ->setWayNumberExtra($wayNumberExtra)
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
            ->setOccupation($occupation)
            ->setSocialNomination($socialNomination)
            ->setPJSocialNomination($pJSocialNomination)
            ->setSocialNominationExtra($socialNominationExtra)
            ->setLineDescription($lineDescription)
            ->setSiret($siret)
            ->setApe($ape)
            ->setDisplayFirstName($displayFirstName)
            ->setDisplayOnlyCity($displayOnlyCity)
            ->setDisplayUniversalDirectory($displayUniversalDirectory)
            ->setDisplayMarketingDirectory($displayMarketingDirectory)
            ->setDisplaySearchReverse($displaySearchReverse)
            ->setReceivePJDirectory($receivePJDirectory)
            ->setInseeCode($inseeCode)
            ->setCodePJ($codePJ)
            ->setLabelPJ($labelPJ)
            ->setModificationType($modificationType)
            ->setModificationDate($modificationDate)
            ->setStatus($status)
            ->setStatus_pagesjaunes($status_pagesjaunes)
            ->setStatus_118712($status_118712)
            ->setAddress($address);
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
     * @return \Ovh\StructType\TelephonyDirectoryInfoReturn
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
     * @return \Ovh\StructType\TelephonyDirectoryInfoReturn
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
     * @return \Ovh\StructType\TelephonyDirectoryInfoReturn
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
     * @return \Ovh\StructType\TelephonyDirectoryInfoReturn
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
     * @return \Ovh\StructType\TelephonyDirectoryInfoReturn
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
     * Get wayTypeDescription value
     * @return string|null
     */
    public function getWayTypeDescription()
    {
        return $this->wayTypeDescription;
    }
    /**
     * Set wayTypeDescription value
     * @param string $wayTypeDescription
     * @return \Ovh\StructType\TelephonyDirectoryInfoReturn
     */
    public function setWayTypeDescription($wayTypeDescription = null)
    {
        // validation for constraint: string
        if (!is_null($wayTypeDescription) && !is_string($wayTypeDescription)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($wayTypeDescription)), __LINE__);
        }
        $this->wayTypeDescription = $wayTypeDescription;
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
     * @return \Ovh\StructType\TelephonyDirectoryInfoReturn
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
     * @return \Ovh\StructType\TelephonyDirectoryInfoReturn
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
     * @return \Ovh\StructType\TelephonyDirectoryInfoReturn
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
     * @return \Ovh\StructType\TelephonyDirectoryInfoReturn
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
     * @return \Ovh\StructType\TelephonyDirectoryInfoReturn
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
     * @return \Ovh\StructType\TelephonyDirectoryInfoReturn
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
     * @return \Ovh\StructType\TelephonyDirectoryInfoReturn
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
     * @return \Ovh\StructType\TelephonyDirectoryInfoReturn
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
     * @return \Ovh\StructType\TelephonyDirectoryInfoReturn
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
     * @return \Ovh\StructType\TelephonyDirectoryInfoReturn
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
     * @return \Ovh\StructType\TelephonyDirectoryInfoReturn
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
     * @return \Ovh\StructType\TelephonyDirectoryInfoReturn
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
     * @return \Ovh\StructType\TelephonyDirectoryInfoReturn
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
     * @return \Ovh\StructType\TelephonyDirectoryInfoReturn
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
     * @return \Ovh\StructType\TelephonyDirectoryInfoReturn
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
     * Get lineDescription value
     * @return string|null
     */
    public function getLineDescription()
    {
        return $this->lineDescription;
    }
    /**
     * Set lineDescription value
     * @param string $lineDescription
     * @return \Ovh\StructType\TelephonyDirectoryInfoReturn
     */
    public function setLineDescription($lineDescription = null)
    {
        // validation for constraint: string
        if (!is_null($lineDescription) && !is_string($lineDescription)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($lineDescription)), __LINE__);
        }
        $this->lineDescription = $lineDescription;
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
     * @return \Ovh\StructType\TelephonyDirectoryInfoReturn
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
     * @return \Ovh\StructType\TelephonyDirectoryInfoReturn
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
     * Get displayFirstName value
     * @return string|null
     */
    public function getDisplayFirstName()
    {
        return $this->displayFirstName;
    }
    /**
     * Set displayFirstName value
     * @param string $displayFirstName
     * @return \Ovh\StructType\TelephonyDirectoryInfoReturn
     */
    public function setDisplayFirstName($displayFirstName = null)
    {
        // validation for constraint: string
        if (!is_null($displayFirstName) && !is_string($displayFirstName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($displayFirstName)), __LINE__);
        }
        $this->displayFirstName = $displayFirstName;
        return $this;
    }
    /**
     * Get displayOnlyCity value
     * @return string|null
     */
    public function getDisplayOnlyCity()
    {
        return $this->displayOnlyCity;
    }
    /**
     * Set displayOnlyCity value
     * @param string $displayOnlyCity
     * @return \Ovh\StructType\TelephonyDirectoryInfoReturn
     */
    public function setDisplayOnlyCity($displayOnlyCity = null)
    {
        // validation for constraint: string
        if (!is_null($displayOnlyCity) && !is_string($displayOnlyCity)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($displayOnlyCity)), __LINE__);
        }
        $this->displayOnlyCity = $displayOnlyCity;
        return $this;
    }
    /**
     * Get displayUniversalDirectory value
     * @return string|null
     */
    public function getDisplayUniversalDirectory()
    {
        return $this->displayUniversalDirectory;
    }
    /**
     * Set displayUniversalDirectory value
     * @param string $displayUniversalDirectory
     * @return \Ovh\StructType\TelephonyDirectoryInfoReturn
     */
    public function setDisplayUniversalDirectory($displayUniversalDirectory = null)
    {
        // validation for constraint: string
        if (!is_null($displayUniversalDirectory) && !is_string($displayUniversalDirectory)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($displayUniversalDirectory)), __LINE__);
        }
        $this->displayUniversalDirectory = $displayUniversalDirectory;
        return $this;
    }
    /**
     * Get displayMarketingDirectory value
     * @return string|null
     */
    public function getDisplayMarketingDirectory()
    {
        return $this->displayMarketingDirectory;
    }
    /**
     * Set displayMarketingDirectory value
     * @param string $displayMarketingDirectory
     * @return \Ovh\StructType\TelephonyDirectoryInfoReturn
     */
    public function setDisplayMarketingDirectory($displayMarketingDirectory = null)
    {
        // validation for constraint: string
        if (!is_null($displayMarketingDirectory) && !is_string($displayMarketingDirectory)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($displayMarketingDirectory)), __LINE__);
        }
        $this->displayMarketingDirectory = $displayMarketingDirectory;
        return $this;
    }
    /**
     * Get displaySearchReverse value
     * @return string|null
     */
    public function getDisplaySearchReverse()
    {
        return $this->displaySearchReverse;
    }
    /**
     * Set displaySearchReverse value
     * @param string $displaySearchReverse
     * @return \Ovh\StructType\TelephonyDirectoryInfoReturn
     */
    public function setDisplaySearchReverse($displaySearchReverse = null)
    {
        // validation for constraint: string
        if (!is_null($displaySearchReverse) && !is_string($displaySearchReverse)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($displaySearchReverse)), __LINE__);
        }
        $this->displaySearchReverse = $displaySearchReverse;
        return $this;
    }
    /**
     * Get receivePJDirectory value
     * @return string|null
     */
    public function getReceivePJDirectory()
    {
        return $this->receivePJDirectory;
    }
    /**
     * Set receivePJDirectory value
     * @param string $receivePJDirectory
     * @return \Ovh\StructType\TelephonyDirectoryInfoReturn
     */
    public function setReceivePJDirectory($receivePJDirectory = null)
    {
        // validation for constraint: string
        if (!is_null($receivePJDirectory) && !is_string($receivePJDirectory)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($receivePJDirectory)), __LINE__);
        }
        $this->receivePJDirectory = $receivePJDirectory;
        return $this;
    }
    /**
     * Get inseeCode value
     * @return int|null
     */
    public function getInseeCode()
    {
        return $this->inseeCode;
    }
    /**
     * Set inseeCode value
     * @param int $inseeCode
     * @return \Ovh\StructType\TelephonyDirectoryInfoReturn
     */
    public function setInseeCode($inseeCode = null)
    {
        // validation for constraint: int
        if (!is_null($inseeCode) && !is_numeric($inseeCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($inseeCode)), __LINE__);
        }
        $this->inseeCode = $inseeCode;
        return $this;
    }
    /**
     * Get codePJ value
     * @return string|null
     */
    public function getCodePJ()
    {
        return $this->codePJ;
    }
    /**
     * Set codePJ value
     * @param string $codePJ
     * @return \Ovh\StructType\TelephonyDirectoryInfoReturn
     */
    public function setCodePJ($codePJ = null)
    {
        // validation for constraint: string
        if (!is_null($codePJ) && !is_string($codePJ)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($codePJ)), __LINE__);
        }
        $this->codePJ = $codePJ;
        return $this;
    }
    /**
     * Get labelPJ value
     * @return string|null
     */
    public function getLabelPJ()
    {
        return $this->labelPJ;
    }
    /**
     * Set labelPJ value
     * @param string $labelPJ
     * @return \Ovh\StructType\TelephonyDirectoryInfoReturn
     */
    public function setLabelPJ($labelPJ = null)
    {
        // validation for constraint: string
        if (!is_null($labelPJ) && !is_string($labelPJ)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($labelPJ)), __LINE__);
        }
        $this->labelPJ = $labelPJ;
        return $this;
    }
    /**
     * Get modificationType value
     * @return string|null
     */
    public function getModificationType()
    {
        return $this->modificationType;
    }
    /**
     * Set modificationType value
     * @param string $modificationType
     * @return \Ovh\StructType\TelephonyDirectoryInfoReturn
     */
    public function setModificationType($modificationType = null)
    {
        // validation for constraint: string
        if (!is_null($modificationType) && !is_string($modificationType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($modificationType)), __LINE__);
        }
        $this->modificationType = $modificationType;
        return $this;
    }
    /**
     * Get modificationDate value
     * @return string|null
     */
    public function getModificationDate()
    {
        return $this->modificationDate;
    }
    /**
     * Set modificationDate value
     * @param string $modificationDate
     * @return \Ovh\StructType\TelephonyDirectoryInfoReturn
     */
    public function setModificationDate($modificationDate = null)
    {
        // validation for constraint: string
        if (!is_null($modificationDate) && !is_string($modificationDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($modificationDate)), __LINE__);
        }
        $this->modificationDate = $modificationDate;
        return $this;
    }
    /**
     * Get status value
     * @return string|null
     */
    public function getStatus()
    {
        return $this->status;
    }
    /**
     * Set status value
     * @param string $status
     * @return \Ovh\StructType\TelephonyDirectoryInfoReturn
     */
    public function setStatus($status = null)
    {
        // validation for constraint: string
        if (!is_null($status) && !is_string($status)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($status)), __LINE__);
        }
        $this->status = $status;
        return $this;
    }
    /**
     * Get status_pagesjaunes value
     * @return string|null
     */
    public function getStatus_pagesjaunes()
    {
        return $this->status_pagesjaunes;
    }
    /**
     * Set status_pagesjaunes value
     * @param string $status_pagesjaunes
     * @return \Ovh\StructType\TelephonyDirectoryInfoReturn
     */
    public function setStatus_pagesjaunes($status_pagesjaunes = null)
    {
        // validation for constraint: string
        if (!is_null($status_pagesjaunes) && !is_string($status_pagesjaunes)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($status_pagesjaunes)), __LINE__);
        }
        $this->status_pagesjaunes = $status_pagesjaunes;
        return $this;
    }
    /**
     * Get status value
     * @return string|null
     */
    public function getStatus_118712()
    {
        return $this->status_118712;
    }
    /**
     * Set status value
     * @param string $status
     * @return \Ovh\StructType\TelephonyDirectoryInfoReturn
     */
    public function setStatus_118712($status_118712 = null)
    {
        // validation for constraint: string
        if (!is_null($status_118712) && !is_string($status_118712)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($status_118712)), __LINE__);
        }
        $this->status_118712 = $status_118712;
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
     * @return \Ovh\StructType\TelephonyDirectoryInfoReturn
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
     * @return \Ovh\StructType\TelephonyDirectoryInfoReturn
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
