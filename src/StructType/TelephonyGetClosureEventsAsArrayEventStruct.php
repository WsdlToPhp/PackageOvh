<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for telephonyGetClosureEventsAsArrayEventStruct StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class TelephonyGetClosureEventsAsArrayEventStruct extends AbstractStructBase
{
    /**
     * The uid
     * @var string
     */
    public $uid;
    /**
     * The summary
     * @var string
     */
    public $summary;
    /**
     * The description
     * @var string
     */
    public $description;
    /**
     * The categories
     * @var string
     */
    public $categories;
    /**
     * The created
     * @var string
     */
    public $created;
    /**
     * The lastModified
     * @var string
     */
    public $lastModified;
    /**
     * The dtStart
     * @var string
     */
    public $dtStart;
    /**
     * The dtStartValue
     * @var string
     */
    public $dtStartValue;
    /**
     * The dtStartTzid
     * @var string
     */
    public $dtStartTzid;
    /**
     * The dtStartUserValue
     * @var string
     */
    public $dtStartUserValue;
    /**
     * The dtEnd
     * @var string
     */
    public $dtEnd;
    /**
     * The dtEndValue
     * @var string
     */
    public $dtEndValue;
    /**
     * The dtEndTzid
     * @var string
     */
    public $dtEndTzid;
    /**
     * The dtEndUserValue
     * @var string
     */
    public $dtEndUserValue;
    /**
     * Constructor method for telephonyGetClosureEventsAsArrayEventStruct
     * @uses TelephonyGetClosureEventsAsArrayEventStruct::setUid()
     * @uses TelephonyGetClosureEventsAsArrayEventStruct::setSummary()
     * @uses TelephonyGetClosureEventsAsArrayEventStruct::setDescription()
     * @uses TelephonyGetClosureEventsAsArrayEventStruct::setCategories()
     * @uses TelephonyGetClosureEventsAsArrayEventStruct::setCreated()
     * @uses TelephonyGetClosureEventsAsArrayEventStruct::setLastModified()
     * @uses TelephonyGetClosureEventsAsArrayEventStruct::setDtStart()
     * @uses TelephonyGetClosureEventsAsArrayEventStruct::setDtStartValue()
     * @uses TelephonyGetClosureEventsAsArrayEventStruct::setDtStartTzid()
     * @uses TelephonyGetClosureEventsAsArrayEventStruct::setDtStartUserValue()
     * @uses TelephonyGetClosureEventsAsArrayEventStruct::setDtEnd()
     * @uses TelephonyGetClosureEventsAsArrayEventStruct::setDtEndValue()
     * @uses TelephonyGetClosureEventsAsArrayEventStruct::setDtEndTzid()
     * @uses TelephonyGetClosureEventsAsArrayEventStruct::setDtEndUserValue()
     * @param string $uid
     * @param string $summary
     * @param string $description
     * @param string $categories
     * @param string $created
     * @param string $lastModified
     * @param string $dtStart
     * @param string $dtStartValue
     * @param string $dtStartTzid
     * @param string $dtStartUserValue
     * @param string $dtEnd
     * @param string $dtEndValue
     * @param string $dtEndTzid
     * @param string $dtEndUserValue
     */
    public function __construct($uid = null, $summary = null, $description = null, $categories = null, $created = null, $lastModified = null, $dtStart = null, $dtStartValue = null, $dtStartTzid = null, $dtStartUserValue = null, $dtEnd = null, $dtEndValue = null, $dtEndTzid = null, $dtEndUserValue = null)
    {
        $this
            ->setUid($uid)
            ->setSummary($summary)
            ->setDescription($description)
            ->setCategories($categories)
            ->setCreated($created)
            ->setLastModified($lastModified)
            ->setDtStart($dtStart)
            ->setDtStartValue($dtStartValue)
            ->setDtStartTzid($dtStartTzid)
            ->setDtStartUserValue($dtStartUserValue)
            ->setDtEnd($dtEnd)
            ->setDtEndValue($dtEndValue)
            ->setDtEndTzid($dtEndTzid)
            ->setDtEndUserValue($dtEndUserValue);
    }
    /**
     * Get uid value
     * @return string|null
     */
    public function getUid()
    {
        return $this->uid;
    }
    /**
     * Set uid value
     * @param string $uid
     * @return \PayPal\StructType\TelephonyGetClosureEventsAsArrayEventStruct
     */
    public function setUid($uid = null)
    {
        // validation for constraint: string
        if (!is_null($uid) && !is_string($uid)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($uid)), __LINE__);
        }
        $this->uid = $uid;
        return $this;
    }
    /**
     * Get summary value
     * @return string|null
     */
    public function getSummary()
    {
        return $this->summary;
    }
    /**
     * Set summary value
     * @param string $summary
     * @return \PayPal\StructType\TelephonyGetClosureEventsAsArrayEventStruct
     */
    public function setSummary($summary = null)
    {
        // validation for constraint: string
        if (!is_null($summary) && !is_string($summary)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($summary)), __LINE__);
        }
        $this->summary = $summary;
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
     * @return \PayPal\StructType\TelephonyGetClosureEventsAsArrayEventStruct
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
     * Get categories value
     * @return string|null
     */
    public function getCategories()
    {
        return $this->categories;
    }
    /**
     * Set categories value
     * @param string $categories
     * @return \PayPal\StructType\TelephonyGetClosureEventsAsArrayEventStruct
     */
    public function setCategories($categories = null)
    {
        // validation for constraint: string
        if (!is_null($categories) && !is_string($categories)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($categories)), __LINE__);
        }
        $this->categories = $categories;
        return $this;
    }
    /**
     * Get created value
     * @return string|null
     */
    public function getCreated()
    {
        return $this->created;
    }
    /**
     * Set created value
     * @param string $created
     * @return \PayPal\StructType\TelephonyGetClosureEventsAsArrayEventStruct
     */
    public function setCreated($created = null)
    {
        // validation for constraint: string
        if (!is_null($created) && !is_string($created)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($created)), __LINE__);
        }
        $this->created = $created;
        return $this;
    }
    /**
     * Get lastModified value
     * @return string|null
     */
    public function getLastModified()
    {
        return $this->lastModified;
    }
    /**
     * Set lastModified value
     * @param string $lastModified
     * @return \PayPal\StructType\TelephonyGetClosureEventsAsArrayEventStruct
     */
    public function setLastModified($lastModified = null)
    {
        // validation for constraint: string
        if (!is_null($lastModified) && !is_string($lastModified)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($lastModified)), __LINE__);
        }
        $this->lastModified = $lastModified;
        return $this;
    }
    /**
     * Get dtStart value
     * @return string|null
     */
    public function getDtStart()
    {
        return $this->dtStart;
    }
    /**
     * Set dtStart value
     * @param string $dtStart
     * @return \PayPal\StructType\TelephonyGetClosureEventsAsArrayEventStruct
     */
    public function setDtStart($dtStart = null)
    {
        // validation for constraint: string
        if (!is_null($dtStart) && !is_string($dtStart)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($dtStart)), __LINE__);
        }
        $this->dtStart = $dtStart;
        return $this;
    }
    /**
     * Get dtStartValue value
     * @return string|null
     */
    public function getDtStartValue()
    {
        return $this->dtStartValue;
    }
    /**
     * Set dtStartValue value
     * @param string $dtStartValue
     * @return \PayPal\StructType\TelephonyGetClosureEventsAsArrayEventStruct
     */
    public function setDtStartValue($dtStartValue = null)
    {
        // validation for constraint: string
        if (!is_null($dtStartValue) && !is_string($dtStartValue)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($dtStartValue)), __LINE__);
        }
        $this->dtStartValue = $dtStartValue;
        return $this;
    }
    /**
     * Get dtStartTzid value
     * @return string|null
     */
    public function getDtStartTzid()
    {
        return $this->dtStartTzid;
    }
    /**
     * Set dtStartTzid value
     * @param string $dtStartTzid
     * @return \PayPal\StructType\TelephonyGetClosureEventsAsArrayEventStruct
     */
    public function setDtStartTzid($dtStartTzid = null)
    {
        // validation for constraint: string
        if (!is_null($dtStartTzid) && !is_string($dtStartTzid)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($dtStartTzid)), __LINE__);
        }
        $this->dtStartTzid = $dtStartTzid;
        return $this;
    }
    /**
     * Get dtStartUserValue value
     * @return string|null
     */
    public function getDtStartUserValue()
    {
        return $this->dtStartUserValue;
    }
    /**
     * Set dtStartUserValue value
     * @param string $dtStartUserValue
     * @return \PayPal\StructType\TelephonyGetClosureEventsAsArrayEventStruct
     */
    public function setDtStartUserValue($dtStartUserValue = null)
    {
        // validation for constraint: string
        if (!is_null($dtStartUserValue) && !is_string($dtStartUserValue)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($dtStartUserValue)), __LINE__);
        }
        $this->dtStartUserValue = $dtStartUserValue;
        return $this;
    }
    /**
     * Get dtEnd value
     * @return string|null
     */
    public function getDtEnd()
    {
        return $this->dtEnd;
    }
    /**
     * Set dtEnd value
     * @param string $dtEnd
     * @return \PayPal\StructType\TelephonyGetClosureEventsAsArrayEventStruct
     */
    public function setDtEnd($dtEnd = null)
    {
        // validation for constraint: string
        if (!is_null($dtEnd) && !is_string($dtEnd)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($dtEnd)), __LINE__);
        }
        $this->dtEnd = $dtEnd;
        return $this;
    }
    /**
     * Get dtEndValue value
     * @return string|null
     */
    public function getDtEndValue()
    {
        return $this->dtEndValue;
    }
    /**
     * Set dtEndValue value
     * @param string $dtEndValue
     * @return \PayPal\StructType\TelephonyGetClosureEventsAsArrayEventStruct
     */
    public function setDtEndValue($dtEndValue = null)
    {
        // validation for constraint: string
        if (!is_null($dtEndValue) && !is_string($dtEndValue)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($dtEndValue)), __LINE__);
        }
        $this->dtEndValue = $dtEndValue;
        return $this;
    }
    /**
     * Get dtEndTzid value
     * @return string|null
     */
    public function getDtEndTzid()
    {
        return $this->dtEndTzid;
    }
    /**
     * Set dtEndTzid value
     * @param string $dtEndTzid
     * @return \PayPal\StructType\TelephonyGetClosureEventsAsArrayEventStruct
     */
    public function setDtEndTzid($dtEndTzid = null)
    {
        // validation for constraint: string
        if (!is_null($dtEndTzid) && !is_string($dtEndTzid)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($dtEndTzid)), __LINE__);
        }
        $this->dtEndTzid = $dtEndTzid;
        return $this;
    }
    /**
     * Get dtEndUserValue value
     * @return string|null
     */
    public function getDtEndUserValue()
    {
        return $this->dtEndUserValue;
    }
    /**
     * Set dtEndUserValue value
     * @param string $dtEndUserValue
     * @return \PayPal\StructType\TelephonyGetClosureEventsAsArrayEventStruct
     */
    public function setDtEndUserValue($dtEndUserValue = null)
    {
        // validation for constraint: string
        if (!is_null($dtEndUserValue) && !is_string($dtEndUserValue)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($dtEndUserValue)), __LINE__);
        }
        $this->dtEndUserValue = $dtEndUserValue;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \PayPal\StructType\TelephonyGetClosureEventsAsArrayEventStruct
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
