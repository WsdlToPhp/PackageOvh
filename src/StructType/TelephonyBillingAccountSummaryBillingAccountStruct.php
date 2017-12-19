<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for telephonyBillingAccountSummaryBillingAccountStruct
 * StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class TelephonyBillingAccountSummaryBillingAccountStruct extends AbstractStructBase
{
    /**
     * The name
     * @var string
     */
    public $name;
    /**
     * The description
     * @var string
     */
    public $description;
    /**
     * The betaGammaOffer
     * @var bool
     */
    public $betaGammaOffer;
    /**
     * The mobile
     * @var \PayPal\StructType\TelephonyCallsSummaryStruct
     */
    public $mobile;
    /**
     * Constructor method for telephonyBillingAccountSummaryBillingAccountStruct
     * @uses TelephonyBillingAccountSummaryBillingAccountStruct::setName()
     * @uses TelephonyBillingAccountSummaryBillingAccountStruct::setDescription()
     * @uses TelephonyBillingAccountSummaryBillingAccountStruct::setBetaGammaOffer()
     * @uses TelephonyBillingAccountSummaryBillingAccountStruct::setMobile()
     * @param string $name
     * @param string $description
     * @param bool $betaGammaOffer
     * @param \PayPal\StructType\TelephonyCallsSummaryStruct $mobile
     */
    public function __construct($name = null, $description = null, $betaGammaOffer = null, \PayPal\StructType\TelephonyCallsSummaryStruct $mobile = null)
    {
        $this
            ->setName($name)
            ->setDescription($description)
            ->setBetaGammaOffer($betaGammaOffer)
            ->setMobile($mobile);
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
     * @return \PayPal\StructType\TelephonyBillingAccountSummaryBillingAccountStruct
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
     * @return \PayPal\StructType\TelephonyBillingAccountSummaryBillingAccountStruct
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
     * Get betaGammaOffer value
     * @return bool|null
     */
    public function getBetaGammaOffer()
    {
        return $this->betaGammaOffer;
    }
    /**
     * Set betaGammaOffer value
     * @param bool $betaGammaOffer
     * @return \PayPal\StructType\TelephonyBillingAccountSummaryBillingAccountStruct
     */
    public function setBetaGammaOffer($betaGammaOffer = null)
    {
        // validation for constraint: boolean
        if (!is_null($betaGammaOffer) && !is_bool($betaGammaOffer)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($betaGammaOffer)), __LINE__);
        }
        $this->betaGammaOffer = $betaGammaOffer;
        return $this;
    }
    /**
     * Get mobile value
     * @return \PayPal\StructType\TelephonyCallsSummaryStruct|null
     */
    public function getMobile()
    {
        return $this->mobile;
    }
    /**
     * Set mobile value
     * @param \PayPal\StructType\TelephonyCallsSummaryStruct $mobile
     * @return \PayPal\StructType\TelephonyBillingAccountSummaryBillingAccountStruct
     */
    public function setMobile(\PayPal\StructType\TelephonyCallsSummaryStruct $mobile = null)
    {
        $this->mobile = $mobile;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \PayPal\StructType\TelephonyBillingAccountSummaryBillingAccountStruct
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
