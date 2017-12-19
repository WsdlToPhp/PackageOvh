<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for telephonySmsplusServiceAdd StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class TelephonySmsplusServiceAdd extends AbstractStructBase
{
    /**
     * The session
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $session;
    /**
     * The billingAccount
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $billingAccount;
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
     * The procedureId
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var int
     */
    public $procedureId;
    /**
     * The applicationType
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $applicationType;
    /**
     * The applicationDescription
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $applicationDescription;
    /**
     * The company
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $company;
    /**
     * The acceptedContract
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var bool
     */
    public $acceptedContract;
    /**
     * Constructor method for telephonySmsplusServiceAdd
     * @uses TelephonySmsplusServiceAdd::setSession()
     * @uses TelephonySmsplusServiceAdd::setBillingAccount()
     * @uses TelephonySmsplusServiceAdd::setShortCode()
     * @uses TelephonySmsplusServiceAdd::setKeyword()
     * @uses TelephonySmsplusServiceAdd::setProcedureId()
     * @uses TelephonySmsplusServiceAdd::setApplicationType()
     * @uses TelephonySmsplusServiceAdd::setApplicationDescription()
     * @uses TelephonySmsplusServiceAdd::setCompany()
     * @uses TelephonySmsplusServiceAdd::setAcceptedContract()
     * @param string $session
     * @param string $billingAccount
     * @param string $shortCode
     * @param string $keyword
     * @param int $procedureId
     * @param string $applicationType
     * @param string $applicationDescription
     * @param string $company
     * @param bool $acceptedContract
     */
    public function __construct($session = null, $billingAccount = null, $shortCode = null, $keyword = null, $procedureId = null, $applicationType = null, $applicationDescription = null, $company = null, $acceptedContract = null)
    {
        $this
            ->setSession($session)
            ->setBillingAccount($billingAccount)
            ->setShortCode($shortCode)
            ->setKeyword($keyword)
            ->setProcedureId($procedureId)
            ->setApplicationType($applicationType)
            ->setApplicationDescription($applicationDescription)
            ->setCompany($company)
            ->setAcceptedContract($acceptedContract);
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
     * @return \PayPal\StructType\TelephonySmsplusServiceAdd
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
     * Get billingAccount value
     * @return string|null
     */
    public function getBillingAccount()
    {
        return $this->billingAccount;
    }
    /**
     * Set billingAccount value
     * @param string $billingAccount
     * @return \PayPal\StructType\TelephonySmsplusServiceAdd
     */
    public function setBillingAccount($billingAccount = null)
    {
        // validation for constraint: string
        if (!is_null($billingAccount) && !is_string($billingAccount)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($billingAccount)), __LINE__);
        }
        $this->billingAccount = $billingAccount;
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
     * @return \PayPal\StructType\TelephonySmsplusServiceAdd
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
     * @return \PayPal\StructType\TelephonySmsplusServiceAdd
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
     * Get procedureId value
     * @return int|null
     */
    public function getProcedureId()
    {
        return $this->procedureId;
    }
    /**
     * Set procedureId value
     * @param int $procedureId
     * @return \PayPal\StructType\TelephonySmsplusServiceAdd
     */
    public function setProcedureId($procedureId = null)
    {
        // validation for constraint: int
        if (!is_null($procedureId) && !is_numeric($procedureId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($procedureId)), __LINE__);
        }
        $this->procedureId = $procedureId;
        return $this;
    }
    /**
     * Get applicationType value
     * @return string|null
     */
    public function getApplicationType()
    {
        return $this->applicationType;
    }
    /**
     * Set applicationType value
     * @param string $applicationType
     * @return \PayPal\StructType\TelephonySmsplusServiceAdd
     */
    public function setApplicationType($applicationType = null)
    {
        // validation for constraint: string
        if (!is_null($applicationType) && !is_string($applicationType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($applicationType)), __LINE__);
        }
        $this->applicationType = $applicationType;
        return $this;
    }
    /**
     * Get applicationDescription value
     * @return string|null
     */
    public function getApplicationDescription()
    {
        return $this->applicationDescription;
    }
    /**
     * Set applicationDescription value
     * @param string $applicationDescription
     * @return \PayPal\StructType\TelephonySmsplusServiceAdd
     */
    public function setApplicationDescription($applicationDescription = null)
    {
        // validation for constraint: string
        if (!is_null($applicationDescription) && !is_string($applicationDescription)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($applicationDescription)), __LINE__);
        }
        $this->applicationDescription = $applicationDescription;
        return $this;
    }
    /**
     * Get company value
     * @return string|null
     */
    public function getCompany()
    {
        return $this->company;
    }
    /**
     * Set company value
     * @param string $company
     * @return \PayPal\StructType\TelephonySmsplusServiceAdd
     */
    public function setCompany($company = null)
    {
        // validation for constraint: string
        if (!is_null($company) && !is_string($company)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($company)), __LINE__);
        }
        $this->company = $company;
        return $this;
    }
    /**
     * Get acceptedContract value
     * @return bool|null
     */
    public function getAcceptedContract()
    {
        return $this->acceptedContract;
    }
    /**
     * Set acceptedContract value
     * @param bool $acceptedContract
     * @return \PayPal\StructType\TelephonySmsplusServiceAdd
     */
    public function setAcceptedContract($acceptedContract = null)
    {
        // validation for constraint: boolean
        if (!is_null($acceptedContract) && !is_bool($acceptedContract)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($acceptedContract)), __LINE__);
        }
        $this->acceptedContract = $acceptedContract;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \PayPal\StructType\TelephonySmsplusServiceAdd
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
