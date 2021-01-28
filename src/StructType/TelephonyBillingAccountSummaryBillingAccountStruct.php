<?php

namespace Ovh\StructType;

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
     * @var \Ovh\StructType\TelephonyCallsSummaryStruct
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
     * @param \Ovh\StructType\TelephonyCallsSummaryStruct $mobile
     */
    public function __construct($name = null, $description = null, $betaGammaOffer = null, \Ovh\StructType\TelephonyCallsSummaryStruct $mobile = null)
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
     * @return \Ovh\StructType\TelephonyBillingAccountSummaryBillingAccountStruct
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
     * @return \Ovh\StructType\TelephonyBillingAccountSummaryBillingAccountStruct
     */
    public function setDescription($description = null)
    {
        // validation for constraint: string
        if (!is_null($description) && !is_string($description)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($description, true), gettype($description)), __LINE__);
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
     * @return \Ovh\StructType\TelephonyBillingAccountSummaryBillingAccountStruct
     */
    public function setBetaGammaOffer($betaGammaOffer = null)
    {
        // validation for constraint: boolean
        if (!is_null($betaGammaOffer) && !is_bool($betaGammaOffer)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($betaGammaOffer, true), gettype($betaGammaOffer)), __LINE__);
        }
        $this->betaGammaOffer = $betaGammaOffer;
        return $this;
    }
    /**
     * Get mobile value
     * @return \Ovh\StructType\TelephonyCallsSummaryStruct|null
     */
    public function getMobile()
    {
        return $this->mobile;
    }
    /**
     * Set mobile value
     * @param \Ovh\StructType\TelephonyCallsSummaryStruct $mobile
     * @return \Ovh\StructType\TelephonyBillingAccountSummaryBillingAccountStruct
     */
    public function setMobile(\Ovh\StructType\TelephonyCallsSummaryStruct $mobile = null)
    {
        $this->mobile = $mobile;
        return $this;
    }
}
