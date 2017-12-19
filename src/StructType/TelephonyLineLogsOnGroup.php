<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for telephonyLineLogsOnGroup StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class TelephonyLineLogsOnGroup extends AbstractStructBase
{
    /**
     * The group
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $group;
    /**
     * The pagingStart
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var int
     */
    public $pagingStart;
    /**
     * The pagingLimit
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var int
     */
    public $pagingLimit;
    /**
     * Constructor method for telephonyLineLogsOnGroup
     * @uses TelephonyLineLogsOnGroup::setGroup()
     * @uses TelephonyLineLogsOnGroup::setPagingStart()
     * @uses TelephonyLineLogsOnGroup::setPagingLimit()
     * @param string $group
     * @param int $pagingStart
     * @param int $pagingLimit
     */
    public function __construct($group = null, $pagingStart = null, $pagingLimit = null)
    {
        $this
            ->setGroup($group)
            ->setPagingStart($pagingStart)
            ->setPagingLimit($pagingLimit);
    }
    /**
     * Get group value
     * @return string|null
     */
    public function getGroup()
    {
        return $this->group;
    }
    /**
     * Set group value
     * @param string $group
     * @return \PayPal\StructType\TelephonyLineLogsOnGroup
     */
    public function setGroup($group = null)
    {
        // validation for constraint: string
        if (!is_null($group) && !is_string($group)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($group)), __LINE__);
        }
        $this->group = $group;
        return $this;
    }
    /**
     * Get pagingStart value
     * @return int|null
     */
    public function getPagingStart()
    {
        return $this->pagingStart;
    }
    /**
     * Set pagingStart value
     * @param int $pagingStart
     * @return \PayPal\StructType\TelephonyLineLogsOnGroup
     */
    public function setPagingStart($pagingStart = null)
    {
        // validation for constraint: int
        if (!is_null($pagingStart) && !is_numeric($pagingStart)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($pagingStart)), __LINE__);
        }
        $this->pagingStart = $pagingStart;
        return $this;
    }
    /**
     * Get pagingLimit value
     * @return int|null
     */
    public function getPagingLimit()
    {
        return $this->pagingLimit;
    }
    /**
     * Set pagingLimit value
     * @param int $pagingLimit
     * @return \PayPal\StructType\TelephonyLineLogsOnGroup
     */
    public function setPagingLimit($pagingLimit = null)
    {
        // validation for constraint: int
        if (!is_null($pagingLimit) && !is_numeric($pagingLimit)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($pagingLimit)), __LINE__);
        }
        $this->pagingLimit = $pagingLimit;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \PayPal\StructType\TelephonyLineLogsOnGroup
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
