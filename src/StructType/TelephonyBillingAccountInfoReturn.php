<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for telephonyBillingAccountInfoReturn StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class TelephonyBillingAccountInfoReturn extends AbstractStructBase
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
     * The offer
     * @var string
     */
    public $offer;
    /**
     * The consumtionTime
     * @var string
     */
    public $consumtionTime;
    /**
     * The outPlan
     * @var string
     */
    public $outPlan;
    /**
     * The facturationDate
     * @var string
     */
    public $facturationDate;
    /**
     * The children
     * @var \Ovh\ArrayType\MyArrayOfTelephonyBillingAccountInfoChildrenStructType
     */
    public $children;
    /**
     * Constructor method for telephonyBillingAccountInfoReturn
     * @uses TelephonyBillingAccountInfoReturn::setName()
     * @uses TelephonyBillingAccountInfoReturn::setDescription()
     * @uses TelephonyBillingAccountInfoReturn::setOffer()
     * @uses TelephonyBillingAccountInfoReturn::setConsumtionTime()
     * @uses TelephonyBillingAccountInfoReturn::setOutPlan()
     * @uses TelephonyBillingAccountInfoReturn::setFacturationDate()
     * @uses TelephonyBillingAccountInfoReturn::setChildren()
     * @param string $name
     * @param string $description
     * @param string $offer
     * @param string $consumtionTime
     * @param string $outPlan
     * @param string $facturationDate
     * @param \Ovh\ArrayType\MyArrayOfTelephonyBillingAccountInfoChildrenStructType $children
     */
    public function __construct($name = null, $description = null, $offer = null, $consumtionTime = null, $outPlan = null, $facturationDate = null, \Ovh\ArrayType\MyArrayOfTelephonyBillingAccountInfoChildrenStructType $children = null)
    {
        $this
            ->setName($name)
            ->setDescription($description)
            ->setOffer($offer)
            ->setConsumtionTime($consumtionTime)
            ->setOutPlan($outPlan)
            ->setFacturationDate($facturationDate)
            ->setChildren($children);
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
     * @return \Ovh\StructType\TelephonyBillingAccountInfoReturn
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
     * @return \Ovh\StructType\TelephonyBillingAccountInfoReturn
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
     * Get offer value
     * @return string|null
     */
    public function getOffer()
    {
        return $this->offer;
    }
    /**
     * Set offer value
     * @param string $offer
     * @return \Ovh\StructType\TelephonyBillingAccountInfoReturn
     */
    public function setOffer($offer = null)
    {
        // validation for constraint: string
        if (!is_null($offer) && !is_string($offer)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($offer, true), gettype($offer)), __LINE__);
        }
        $this->offer = $offer;
        return $this;
    }
    /**
     * Get consumtionTime value
     * @return string|null
     */
    public function getConsumtionTime()
    {
        return $this->consumtionTime;
    }
    /**
     * Set consumtionTime value
     * @param string $consumtionTime
     * @return \Ovh\StructType\TelephonyBillingAccountInfoReturn
     */
    public function setConsumtionTime($consumtionTime = null)
    {
        // validation for constraint: string
        if (!is_null($consumtionTime) && !is_string($consumtionTime)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($consumtionTime, true), gettype($consumtionTime)), __LINE__);
        }
        $this->consumtionTime = $consumtionTime;
        return $this;
    }
    /**
     * Get outPlan value
     * @return string|null
     */
    public function getOutPlan()
    {
        return $this->outPlan;
    }
    /**
     * Set outPlan value
     * @param string $outPlan
     * @return \Ovh\StructType\TelephonyBillingAccountInfoReturn
     */
    public function setOutPlan($outPlan = null)
    {
        // validation for constraint: string
        if (!is_null($outPlan) && !is_string($outPlan)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($outPlan, true), gettype($outPlan)), __LINE__);
        }
        $this->outPlan = $outPlan;
        return $this;
    }
    /**
     * Get facturationDate value
     * @return string|null
     */
    public function getFacturationDate()
    {
        return $this->facturationDate;
    }
    /**
     * Set facturationDate value
     * @param string $facturationDate
     * @return \Ovh\StructType\TelephonyBillingAccountInfoReturn
     */
    public function setFacturationDate($facturationDate = null)
    {
        // validation for constraint: string
        if (!is_null($facturationDate) && !is_string($facturationDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($facturationDate, true), gettype($facturationDate)), __LINE__);
        }
        $this->facturationDate = $facturationDate;
        return $this;
    }
    /**
     * Get children value
     * @return \Ovh\ArrayType\MyArrayOfTelephonyBillingAccountInfoChildrenStructType|null
     */
    public function getChildren()
    {
        return $this->children;
    }
    /**
     * Set children value
     * @param \Ovh\ArrayType\MyArrayOfTelephonyBillingAccountInfoChildrenStructType $children
     * @return \Ovh\StructType\TelephonyBillingAccountInfoReturn
     */
    public function setChildren(\Ovh\ArrayType\MyArrayOfTelephonyBillingAccountInfoChildrenStructType $children = null)
    {
        $this->children = $children;
        return $this;
    }
}
