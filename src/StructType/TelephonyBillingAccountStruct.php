<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for telephonyBillingAccountStruct StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class TelephonyBillingAccountStruct extends AbstractStructBase
{
    /**
     * The description
     * @var string
     */
    public $description;
    /**
     * The mobile
     * @var string
     */
    public $mobile;
    /**
     * The mobileDestination
     * @var string
     */
    public $mobileDestination;
    /**
     * The expirationDate
     * @var string
     */
    public $expirationDate;
    /**
     * The version
     * @var string
     */
    public $version;
    /**
     * The trusted
     * @var bool
     */
    public $trusted;
    /**
     * The pendingAction
     * @var \Ovh\StructType\TelephonyPendingActionStruct
     */
    public $pendingAction;
    /**
     * The descriptionUser
     * @var string
     */
    public $descriptionUser;
    /**
     * Constructor method for telephonyBillingAccountStruct
     * @uses TelephonyBillingAccountStruct::setDescription()
     * @uses TelephonyBillingAccountStruct::setMobile()
     * @uses TelephonyBillingAccountStruct::setMobileDestination()
     * @uses TelephonyBillingAccountStruct::setExpirationDate()
     * @uses TelephonyBillingAccountStruct::setVersion()
     * @uses TelephonyBillingAccountStruct::setTrusted()
     * @uses TelephonyBillingAccountStruct::setPendingAction()
     * @uses TelephonyBillingAccountStruct::setDescriptionUser()
     * @param string $description
     * @param string $mobile
     * @param string $mobileDestination
     * @param string $expirationDate
     * @param string $version
     * @param bool $trusted
     * @param \Ovh\StructType\TelephonyPendingActionStruct $pendingAction
     * @param string $descriptionUser
     */
    public function __construct($description = null, $mobile = null, $mobileDestination = null, $expirationDate = null, $version = null, $trusted = null, \Ovh\StructType\TelephonyPendingActionStruct $pendingAction = null, $descriptionUser = null)
    {
        $this
            ->setDescription($description)
            ->setMobile($mobile)
            ->setMobileDestination($mobileDestination)
            ->setExpirationDate($expirationDate)
            ->setVersion($version)
            ->setTrusted($trusted)
            ->setPendingAction($pendingAction)
            ->setDescriptionUser($descriptionUser);
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
     * @return \Ovh\StructType\TelephonyBillingAccountStruct
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
     * Get mobile value
     * @return string|null
     */
    public function getMobile()
    {
        return $this->mobile;
    }
    /**
     * Set mobile value
     * @param string $mobile
     * @return \Ovh\StructType\TelephonyBillingAccountStruct
     */
    public function setMobile($mobile = null)
    {
        // validation for constraint: string
        if (!is_null($mobile) && !is_string($mobile)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($mobile)), __LINE__);
        }
        $this->mobile = $mobile;
        return $this;
    }
    /**
     * Get mobileDestination value
     * @return string|null
     */
    public function getMobileDestination()
    {
        return $this->mobileDestination;
    }
    /**
     * Set mobileDestination value
     * @param string $mobileDestination
     * @return \Ovh\StructType\TelephonyBillingAccountStruct
     */
    public function setMobileDestination($mobileDestination = null)
    {
        // validation for constraint: string
        if (!is_null($mobileDestination) && !is_string($mobileDestination)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($mobileDestination)), __LINE__);
        }
        $this->mobileDestination = $mobileDestination;
        return $this;
    }
    /**
     * Get expirationDate value
     * @return string|null
     */
    public function getExpirationDate()
    {
        return $this->expirationDate;
    }
    /**
     * Set expirationDate value
     * @param string $expirationDate
     * @return \Ovh\StructType\TelephonyBillingAccountStruct
     */
    public function setExpirationDate($expirationDate = null)
    {
        // validation for constraint: string
        if (!is_null($expirationDate) && !is_string($expirationDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($expirationDate)), __LINE__);
        }
        $this->expirationDate = $expirationDate;
        return $this;
    }
    /**
     * Get version value
     * @return string|null
     */
    public function getVersion()
    {
        return $this->version;
    }
    /**
     * Set version value
     * @param string $version
     * @return \Ovh\StructType\TelephonyBillingAccountStruct
     */
    public function setVersion($version = null)
    {
        // validation for constraint: string
        if (!is_null($version) && !is_string($version)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($version)), __LINE__);
        }
        $this->version = $version;
        return $this;
    }
    /**
     * Get trusted value
     * @return bool|null
     */
    public function getTrusted()
    {
        return $this->trusted;
    }
    /**
     * Set trusted value
     * @param bool $trusted
     * @return \Ovh\StructType\TelephonyBillingAccountStruct
     */
    public function setTrusted($trusted = null)
    {
        // validation for constraint: boolean
        if (!is_null($trusted) && !is_bool($trusted)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($trusted)), __LINE__);
        }
        $this->trusted = $trusted;
        return $this;
    }
    /**
     * Get pendingAction value
     * @return \Ovh\StructType\TelephonyPendingActionStruct|null
     */
    public function getPendingAction()
    {
        return $this->pendingAction;
    }
    /**
     * Set pendingAction value
     * @param \Ovh\StructType\TelephonyPendingActionStruct $pendingAction
     * @return \Ovh\StructType\TelephonyBillingAccountStruct
     */
    public function setPendingAction(\Ovh\StructType\TelephonyPendingActionStruct $pendingAction = null)
    {
        $this->pendingAction = $pendingAction;
        return $this;
    }
    /**
     * Get descriptionUser value
     * @return string|null
     */
    public function getDescriptionUser()
    {
        return $this->descriptionUser;
    }
    /**
     * Set descriptionUser value
     * @param string $descriptionUser
     * @return \Ovh\StructType\TelephonyBillingAccountStruct
     */
    public function setDescriptionUser($descriptionUser = null)
    {
        // validation for constraint: string
        if (!is_null($descriptionUser) && !is_string($descriptionUser)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($descriptionUser)), __LINE__);
        }
        $this->descriptionUser = $descriptionUser;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ovh\StructType\TelephonyBillingAccountStruct
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
