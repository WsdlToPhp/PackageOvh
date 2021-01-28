<?php

namespace Ovh\StructType;

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
     * @var \Ovh\ArrayType\MyArrayOfStringType
     */
    public $trackingMedias;
    /**
     * The trackingTargets
     * @var \Ovh\ArrayType\MyArrayOfStringType
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
     * @param \Ovh\ArrayType\MyArrayOfStringType $trackingMedias
     * @param \Ovh\ArrayType\MyArrayOfStringType $trackingTargets
     */
    public function __construct($sendingNoSmsMt = null, $defaultSmsAccount = null, $defaultSmsSender = null, $defaultSmsAccountMtBilling = null, \Ovh\ArrayType\MyArrayOfStringType $trackingMedias = null, \Ovh\ArrayType\MyArrayOfStringType $trackingTargets = null)
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
     * @return \Ovh\StructType\TelephonySmsplusOptionsStruct
     */
    public function setSendingNoSmsMt($sendingNoSmsMt = null)
    {
        // validation for constraint: boolean
        if (!is_null($sendingNoSmsMt) && !is_bool($sendingNoSmsMt)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($sendingNoSmsMt, true), gettype($sendingNoSmsMt)), __LINE__);
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
     * @return \Ovh\StructType\TelephonySmsplusOptionsStruct
     */
    public function setDefaultSmsAccount($defaultSmsAccount = null)
    {
        // validation for constraint: string
        if (!is_null($defaultSmsAccount) && !is_string($defaultSmsAccount)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($defaultSmsAccount, true), gettype($defaultSmsAccount)), __LINE__);
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
     * @return \Ovh\StructType\TelephonySmsplusOptionsStruct
     */
    public function setDefaultSmsSender($defaultSmsSender = null)
    {
        // validation for constraint: string
        if (!is_null($defaultSmsSender) && !is_string($defaultSmsSender)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($defaultSmsSender, true), gettype($defaultSmsSender)), __LINE__);
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
     * @return \Ovh\StructType\TelephonySmsplusOptionsStruct
     */
    public function setDefaultSmsAccountMtBilling($defaultSmsAccountMtBilling = null)
    {
        // validation for constraint: string
        if (!is_null($defaultSmsAccountMtBilling) && !is_string($defaultSmsAccountMtBilling)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($defaultSmsAccountMtBilling, true), gettype($defaultSmsAccountMtBilling)), __LINE__);
        }
        $this->defaultSmsAccountMtBilling = $defaultSmsAccountMtBilling;
        return $this;
    }
    /**
     * Get trackingMedias value
     * @return \Ovh\ArrayType\MyArrayOfStringType|null
     */
    public function getTrackingMedias()
    {
        return $this->trackingMedias;
    }
    /**
     * Set trackingMedias value
     * @param \Ovh\ArrayType\MyArrayOfStringType $trackingMedias
     * @return \Ovh\StructType\TelephonySmsplusOptionsStruct
     */
    public function setTrackingMedias(\Ovh\ArrayType\MyArrayOfStringType $trackingMedias = null)
    {
        $this->trackingMedias = $trackingMedias;
        return $this;
    }
    /**
     * Get trackingTargets value
     * @return \Ovh\ArrayType\MyArrayOfStringType|null
     */
    public function getTrackingTargets()
    {
        return $this->trackingTargets;
    }
    /**
     * Set trackingTargets value
     * @param \Ovh\ArrayType\MyArrayOfStringType $trackingTargets
     * @return \Ovh\StructType\TelephonySmsplusOptionsStruct
     */
    public function setTrackingTargets(\Ovh\ArrayType\MyArrayOfStringType $trackingTargets = null)
    {
        $this->trackingTargets = $trackingTargets;
        return $this;
    }
}
