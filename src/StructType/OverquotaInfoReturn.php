<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for overquotaInfoReturn StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class OverquotaInfoReturn extends AbstractStructBase
{
    /**
     * The domain
     * @var string
     */
    public $domain;
    /**
     * The quota
     * @var \PayPal\ArrayType\MyArrayOfOverquotaInfoStructType
     */
    public $quota;
    /**
     * The capacities
     * @var int
     */
    public $capacities;
    /**
     * The order
     * @var int
     */
    public $order;
    /**
     * Constructor method for overquotaInfoReturn
     * @uses OverquotaInfoReturn::setDomain()
     * @uses OverquotaInfoReturn::setQuota()
     * @uses OverquotaInfoReturn::setCapacities()
     * @uses OverquotaInfoReturn::setOrder()
     * @param string $domain
     * @param \PayPal\ArrayType\MyArrayOfOverquotaInfoStructType $quota
     * @param int $capacities
     * @param int $order
     */
    public function __construct($domain = null, \PayPal\ArrayType\MyArrayOfOverquotaInfoStructType $quota = null, $capacities = null, $order = null)
    {
        $this
            ->setDomain($domain)
            ->setQuota($quota)
            ->setCapacities($capacities)
            ->setOrder($order);
    }
    /**
     * Get domain value
     * @return string|null
     */
    public function getDomain()
    {
        return $this->domain;
    }
    /**
     * Set domain value
     * @param string $domain
     * @return \PayPal\StructType\OverquotaInfoReturn
     */
    public function setDomain($domain = null)
    {
        // validation for constraint: string
        if (!is_null($domain) && !is_string($domain)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($domain)), __LINE__);
        }
        $this->domain = $domain;
        return $this;
    }
    /**
     * Get quota value
     * @return \PayPal\ArrayType\MyArrayOfOverquotaInfoStructType|null
     */
    public function getQuota()
    {
        return $this->quota;
    }
    /**
     * Set quota value
     * @param \PayPal\ArrayType\MyArrayOfOverquotaInfoStructType $quota
     * @return \PayPal\StructType\OverquotaInfoReturn
     */
    public function setQuota(\PayPal\ArrayType\MyArrayOfOverquotaInfoStructType $quota = null)
    {
        $this->quota = $quota;
        return $this;
    }
    /**
     * Get capacities value
     * @return int|null
     */
    public function getCapacities()
    {
        return $this->capacities;
    }
    /**
     * Set capacities value
     * @param int $capacities
     * @return \PayPal\StructType\OverquotaInfoReturn
     */
    public function setCapacities($capacities = null)
    {
        // validation for constraint: int
        if (!is_null($capacities) && !is_numeric($capacities)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($capacities)), __LINE__);
        }
        $this->capacities = $capacities;
        return $this;
    }
    /**
     * Get order value
     * @return int|null
     */
    public function getOrder()
    {
        return $this->order;
    }
    /**
     * Set order value
     * @param int $order
     * @return \PayPal\StructType\OverquotaInfoReturn
     */
    public function setOrder($order = null)
    {
        // validation for constraint: int
        if (!is_null($order) && !is_numeric($order)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($order)), __LINE__);
        }
        $this->order = $order;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \PayPal\StructType\OverquotaInfoReturn
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
