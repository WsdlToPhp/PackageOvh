<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for nicUpdateIT StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class NicUpdateIT extends AbstractStructBase
{
    /**
     * The session
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $session;
    /**
     * The nic
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $nic;
    /**
     * The name
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $name;
    /**
     * The firstname
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $firstname;
    /**
     * The sex
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $sex;
    /**
     * The legalForm
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $legalForm;
    /**
     * The organisation
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $organisation;
    /**
     * The legalName
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $legalName;
    /**
     * The legalNumber
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $legalNumber;
    /**
     * The vat
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $vat;
    /**
     * The birthDay
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $birthDay;
    /**
     * The birthCity
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $birthCity;
    /**
     * The nationalIdentificationNumber
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $nationalIdentificationNumber;
    /**
     * The companyNationalIdentificationNumber
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $companyNationalIdentificationNumber;
    /**
     * The corporationType
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $corporationType;
    /**
     * Constructor method for nicUpdateIT
     * @uses NicUpdateIT::setSession()
     * @uses NicUpdateIT::setNic()
     * @uses NicUpdateIT::setName()
     * @uses NicUpdateIT::setFirstname()
     * @uses NicUpdateIT::setSex()
     * @uses NicUpdateIT::setLegalForm()
     * @uses NicUpdateIT::setOrganisation()
     * @uses NicUpdateIT::setLegalName()
     * @uses NicUpdateIT::setLegalNumber()
     * @uses NicUpdateIT::setVat()
     * @uses NicUpdateIT::setBirthDay()
     * @uses NicUpdateIT::setBirthCity()
     * @uses NicUpdateIT::setNationalIdentificationNumber()
     * @uses NicUpdateIT::setCompanyNationalIdentificationNumber()
     * @uses NicUpdateIT::setCorporationType()
     * @param string $session
     * @param string $nic
     * @param string $name
     * @param string $firstname
     * @param string $sex
     * @param string $legalForm
     * @param string $organisation
     * @param string $legalName
     * @param string $legalNumber
     * @param string $vat
     * @param string $birthDay
     * @param string $birthCity
     * @param string $nationalIdentificationNumber
     * @param string $companyNationalIdentificationNumber
     * @param string $corporationType
     */
    public function __construct($session = null, $nic = null, $name = null, $firstname = null, $sex = null, $legalForm = null, $organisation = null, $legalName = null, $legalNumber = null, $vat = null, $birthDay = null, $birthCity = null, $nationalIdentificationNumber = null, $companyNationalIdentificationNumber = null, $corporationType = null)
    {
        $this
            ->setSession($session)
            ->setNic($nic)
            ->setName($name)
            ->setFirstname($firstname)
            ->setSex($sex)
            ->setLegalForm($legalForm)
            ->setOrganisation($organisation)
            ->setLegalName($legalName)
            ->setLegalNumber($legalNumber)
            ->setVat($vat)
            ->setBirthDay($birthDay)
            ->setBirthCity($birthCity)
            ->setNationalIdentificationNumber($nationalIdentificationNumber)
            ->setCompanyNationalIdentificationNumber($companyNationalIdentificationNumber)
            ->setCorporationType($corporationType);
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
     * @return \Ovh\StructType\NicUpdateIT
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
     * Get nic value
     * @return string|null
     */
    public function getNic()
    {
        return $this->nic;
    }
    /**
     * Set nic value
     * @param string $nic
     * @return \Ovh\StructType\NicUpdateIT
     */
    public function setNic($nic = null)
    {
        // validation for constraint: string
        if (!is_null($nic) && !is_string($nic)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($nic, true), gettype($nic)), __LINE__);
        }
        $this->nic = $nic;
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
     * @return \Ovh\StructType\NicUpdateIT
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
     * Get firstname value
     * @return string|null
     */
    public function getFirstname()
    {
        return $this->firstname;
    }
    /**
     * Set firstname value
     * @param string $firstname
     * @return \Ovh\StructType\NicUpdateIT
     */
    public function setFirstname($firstname = null)
    {
        // validation for constraint: string
        if (!is_null($firstname) && !is_string($firstname)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($firstname, true), gettype($firstname)), __LINE__);
        }
        $this->firstname = $firstname;
        return $this;
    }
    /**
     * Get sex value
     * @return string|null
     */
    public function getSex()
    {
        return $this->sex;
    }
    /**
     * Set sex value
     * @param string $sex
     * @return \Ovh\StructType\NicUpdateIT
     */
    public function setSex($sex = null)
    {
        // validation for constraint: string
        if (!is_null($sex) && !is_string($sex)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($sex, true), gettype($sex)), __LINE__);
        }
        $this->sex = $sex;
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
     * @return \Ovh\StructType\NicUpdateIT
     */
    public function setLegalForm($legalForm = null)
    {
        // validation for constraint: string
        if (!is_null($legalForm) && !is_string($legalForm)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($legalForm, true), gettype($legalForm)), __LINE__);
        }
        $this->legalForm = $legalForm;
        return $this;
    }
    /**
     * Get organisation value
     * @return string|null
     */
    public function getOrganisation()
    {
        return $this->organisation;
    }
    /**
     * Set organisation value
     * @param string $organisation
     * @return \Ovh\StructType\NicUpdateIT
     */
    public function setOrganisation($organisation = null)
    {
        // validation for constraint: string
        if (!is_null($organisation) && !is_string($organisation)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($organisation, true), gettype($organisation)), __LINE__);
        }
        $this->organisation = $organisation;
        return $this;
    }
    /**
     * Get legalName value
     * @return string|null
     */
    public function getLegalName()
    {
        return $this->legalName;
    }
    /**
     * Set legalName value
     * @param string $legalName
     * @return \Ovh\StructType\NicUpdateIT
     */
    public function setLegalName($legalName = null)
    {
        // validation for constraint: string
        if (!is_null($legalName) && !is_string($legalName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($legalName, true), gettype($legalName)), __LINE__);
        }
        $this->legalName = $legalName;
        return $this;
    }
    /**
     * Get legalNumber value
     * @return string|null
     */
    public function getLegalNumber()
    {
        return $this->legalNumber;
    }
    /**
     * Set legalNumber value
     * @param string $legalNumber
     * @return \Ovh\StructType\NicUpdateIT
     */
    public function setLegalNumber($legalNumber = null)
    {
        // validation for constraint: string
        if (!is_null($legalNumber) && !is_string($legalNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($legalNumber, true), gettype($legalNumber)), __LINE__);
        }
        $this->legalNumber = $legalNumber;
        return $this;
    }
    /**
     * Get vat value
     * @return string|null
     */
    public function getVat()
    {
        return $this->vat;
    }
    /**
     * Set vat value
     * @param string $vat
     * @return \Ovh\StructType\NicUpdateIT
     */
    public function setVat($vat = null)
    {
        // validation for constraint: string
        if (!is_null($vat) && !is_string($vat)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($vat, true), gettype($vat)), __LINE__);
        }
        $this->vat = $vat;
        return $this;
    }
    /**
     * Get birthDay value
     * @return string|null
     */
    public function getBirthDay()
    {
        return $this->birthDay;
    }
    /**
     * Set birthDay value
     * @param string $birthDay
     * @return \Ovh\StructType\NicUpdateIT
     */
    public function setBirthDay($birthDay = null)
    {
        // validation for constraint: string
        if (!is_null($birthDay) && !is_string($birthDay)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($birthDay, true), gettype($birthDay)), __LINE__);
        }
        $this->birthDay = $birthDay;
        return $this;
    }
    /**
     * Get birthCity value
     * @return string|null
     */
    public function getBirthCity()
    {
        return $this->birthCity;
    }
    /**
     * Set birthCity value
     * @param string $birthCity
     * @return \Ovh\StructType\NicUpdateIT
     */
    public function setBirthCity($birthCity = null)
    {
        // validation for constraint: string
        if (!is_null($birthCity) && !is_string($birthCity)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($birthCity, true), gettype($birthCity)), __LINE__);
        }
        $this->birthCity = $birthCity;
        return $this;
    }
    /**
     * Get nationalIdentificationNumber value
     * @return string|null
     */
    public function getNationalIdentificationNumber()
    {
        return $this->nationalIdentificationNumber;
    }
    /**
     * Set nationalIdentificationNumber value
     * @param string $nationalIdentificationNumber
     * @return \Ovh\StructType\NicUpdateIT
     */
    public function setNationalIdentificationNumber($nationalIdentificationNumber = null)
    {
        // validation for constraint: string
        if (!is_null($nationalIdentificationNumber) && !is_string($nationalIdentificationNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($nationalIdentificationNumber, true), gettype($nationalIdentificationNumber)), __LINE__);
        }
        $this->nationalIdentificationNumber = $nationalIdentificationNumber;
        return $this;
    }
    /**
     * Get companyNationalIdentificationNumber value
     * @return string|null
     */
    public function getCompanyNationalIdentificationNumber()
    {
        return $this->companyNationalIdentificationNumber;
    }
    /**
     * Set companyNationalIdentificationNumber value
     * @param string $companyNationalIdentificationNumber
     * @return \Ovh\StructType\NicUpdateIT
     */
    public function setCompanyNationalIdentificationNumber($companyNationalIdentificationNumber = null)
    {
        // validation for constraint: string
        if (!is_null($companyNationalIdentificationNumber) && !is_string($companyNationalIdentificationNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($companyNationalIdentificationNumber, true), gettype($companyNationalIdentificationNumber)), __LINE__);
        }
        $this->companyNationalIdentificationNumber = $companyNationalIdentificationNumber;
        return $this;
    }
    /**
     * Get corporationType value
     * @return string|null
     */
    public function getCorporationType()
    {
        return $this->corporationType;
    }
    /**
     * Set corporationType value
     * @param string $corporationType
     * @return \Ovh\StructType\NicUpdateIT
     */
    public function setCorporationType($corporationType = null)
    {
        // validation for constraint: string
        if (!is_null($corporationType) && !is_string($corporationType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($corporationType, true), gettype($corporationType)), __LINE__);
        }
        $this->corporationType = $corporationType;
        return $this;
    }
}
