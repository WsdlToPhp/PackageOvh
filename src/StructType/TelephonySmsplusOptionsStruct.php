<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for telephonySmsplusOptionsStruct StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class TelephonySmsplusOptionsStruct extends AbstractStructBase
{
    /**
     * The sendingNoSmsMt
     * @var bool
     */
    public $sendingNoSmsMt;
    /**
     * The defaultSmsAccount
     * @var string
     */
    public $defaultSmsAccount;
    /**
     * The defaultSmsSender
     * @var string
     */
    public $defaultSmsSender;
    /**
     * The defaultSmsAccountMtBilling
     * @var string
     */
    public $defaultSmsAccountMtBilling;
    /**
     * The trackingMedias
     * @var \PayPal\ArrayType\MyArrayOfStringType
     */
    public $trackingMedias;
    /**
     * The trackingTargets
     * @var \PayPal\ArrayType\MyArrayOfStringType
     */
    public $trackingTargets;
    /**
     * Constructor method for telephonySmsplusOptionsStruct
     * @uses TelephonySmsplusOptionsStruct::setSendingNoSmsMt()
     * @uses TelephonySmsplusOptionsStruct::setDefaultSmsAccount()
     * @uses TelephonySmsplusOptionsStruct::setDefaultSmsSender()
     * @uses TelephonySmsplusOptionsStruct::setDefaultSmsAccountMtBilling()
     * @uses TelephonySmsplusOptionsStruct::setTrackingMedias()
     * @uses TelephonySmsplusOptionsStruct::setTrackingTargets()
     * @param bool $sendingNoSmsMt
     * @param string $defaultSmsAccount
     * @param string $defaultSmsSender
     * @param string $defaultSmsAccountMtBilling
     * @param \PayPal\ArrayType\MyArrayOfStringType $trackingMedias
     * @param \PayPal\ArrayType\MyArrayOfStringType $trackingTargets
     */
    public function __construct($sendingNoSmsMt = null, $defaultSmsAccount = null, $defaultSmsSender = null, $defaultSmsAccountMtBilling = null, \PayPal\ArrayType\MyArrayOfStringType $trackingMedias = null, \PayPal\ArrayType\MyArrayOfStringType $trackingTargets = null)
    {
        $this
            ->setSendingNoSmsMt($sendingNoSmsMt)
            ->setDefaultSmsAccount($defaultSmsAccount)
            ->setDefaultSmsSender($defaultSmsSender)
            ->setDefaultSmsAccountMtBilling($defaultSmsAccountMtBilling)
            ->setTrackingMedias($trackingMedias)
            ->setTrackingTargets($trackingTargets);
    }
    /**
     * Get sendingNoSmsMt value
     * @return bool|null
     */
    public function getSendingNoSmsMt()
    {
        return $this->sendingNoSmsMt;
    }
    /**
     * Set sendingNoSmsMt value
     * @param bool $sendingNoSmsMt
     * @return \PayPal\StructType\TelephonySmsplusOptionsStruct
     */
    public function setSendingNoSmsMt($sendingNoSmsMt = null)
    {
        // validation for constraint: boolean
        if (!is_null($sendingNoSmsMt) && !is_bool($sendingNoSmsMt)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($sendingNoSmsMt)), __LINE__);
        }
        $this->sendingNoSmsMt = $sendingNoSmsMt;
        return $this;
    }
    /**
     * Get defaultSmsAccount value
     * @return string|null
     */
    public function getDefaultSmsAccount()
    {
        return $this->defaultSmsAccount;
    }
    /**
     * Set defaultSmsAccount value
     * @param string $defaultSmsAccount
     * @return \PayPal\StructType\TelephonySmsplusOptionsStruct
     */
    public function setDefaultSmsAccount($defaultSmsAccount = null)
    {
        // validation for constraint: string
        if (!is_null($defaultSmsAccount) && !is_string($defaultSmsAccount)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($defaultSmsAccount)), __LINE__);
        }
        $this->defaultSmsAccount = $defaultSmsAccount;
        return $this;
    }
    /**
     * Get defaultSmsSender value
     * @return string|null
     */
    public function getDefaultSmsSender()
    {
        return $this->defaultSmsSender;
    }
    /**
     * Set defaultSmsSender value
     * @param string $defaultSmsSender
     * @return \PayPal\StructType\TelephonySmsplusOptionsStruct
     */
    public function setDefaultSmsSender($defaultSmsSender = null)
    {
        // validation for constraint: string
        if (!is_null($defaultSmsSender) && !is_string($defaultSmsSender)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($defaultSmsSender)), __LINE__);
        }
        $this->defaultSmsSender = $defaultSmsSender;
        return $this;
    }
    /**
     * Get defaultSmsAccountMtBilling value
     * @return string|null
     */
    public function getDefaultSmsAccountMtBilling()
    {
        return $this->defaultSmsAccountMtBilling;
    }
    /**
     * Set defaultSmsAccountMtBilling value
     * @param string $defaultSmsAccountMtBilling
     * @return \PayPal\StructType\TelephonySmsplusOptionsStruct
     */
    public function setDefaultSmsAccountMtBilling($defaultSmsAccountMtBilling = null)
    {
        // validation for constraint: string
        if (!is_null($defaultSmsAccountMtBilling) && !is_string($defaultSmsAccountMtBilling)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($defaultSmsAccountMtBilling)), __LINE__);
        }
        $this->defaultSmsAccountMtBilling = $defaultSmsAccountMtBilling;
        return $this;
    }
    /**
     * Get trackingMedias value
     * @return \PayPal\ArrayType\MyArrayOfStringType|null
     */
    public function getTrackingMedias()
    {
        return $this->trackingMedias;
    }
    /**
     * Set trackingMedias value
     * @param \PayPal\ArrayType\MyArrayOfStringType $trackingMedias
     * @return \PayPal\StructType\TelephonySmsplusOptionsStruct
     */
    public function setTrackingMedias(\PayPal\ArrayType\MyArrayOfStringType $trackingMedias = null)
    {
        $this->trackingMedias = $trackingMedias;
        return $this;
    }
    /**
     * Get trackingTargets value
     * @return \PayPal\ArrayType\MyArrayOfStringType|null
     */
    public function getTrackingTargets()
    {
        return $this->trackingTargets;
    }
    /**
     * Set trackingTargets value
     * @param \PayPal\ArrayType\MyArrayOfStringType $trackingTargets
     * @return \PayPal\StructType\TelephonySmsplusOptionsStruct
     */
    public function setTrackingTargets(\PayPal\ArrayType\MyArrayOfStringType $trackingTargets = null)
    {
        $this->trackingTargets = $trackingTargets;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \PayPal\StructType\TelephonySmsplusOptionsStruct
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
