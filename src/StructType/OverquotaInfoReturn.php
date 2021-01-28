<?php

namespace Ovh\StructType;

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
     * @var \Ovh\ArrayType\MyArrayOfOverquotaInfoStructType
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
     * @param \Ovh\ArrayType\MyArrayOfOverquotaInfoStructType $quota
     * @param int $capacities
     * @param int $order
     */
    public function __construct($domain = null, \Ovh\ArrayType\MyArrayOfOverquotaInfoStructType $quota = null, $capacities = null, $order = null)
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
     * @return \Ovh\StructType\OverquotaInfoReturn
     */
    public function setDomain($domain = null)
    {
        // validation for constraint: string
        if (!is_null($domain) && !is_string($domain)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($domain, true), gettype($domain)), __LINE__);
        }
        $this->domain = $domain;
        return $this;
    }
    /**
     * Get quota value
     * @return \Ovh\ArrayType\MyArrayOfOverquotaInfoStructType|null
     */
    public function getQuota()
    {
        return $this->quota;
    }
    /**
     * Set quota value
     * @param \Ovh\ArrayType\MyArrayOfOverquotaInfoStructType $quota
     * @return \Ovh\StructType\OverquotaInfoReturn
     */
    public function setQuota(\Ovh\ArrayType\MyArrayOfOverquotaInfoStructType $quota = null)
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
     * @return \Ovh\StructType\OverquotaInfoReturn
     */
    public function setCapacities($capacities = null)
    {
        // validation for constraint: int
        if (!is_null($capacities) && !(is_int($capacities) || ctype_digit($capacities))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($capacities, true), gettype($capacities)), __LINE__);
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
     * @return \Ovh\StructType\OverquotaInfoReturn
     */
    public function setOrder($order = null)
    {
        // validation for constraint: int
        if (!is_null($order) && !(is_int($order) || ctype_digit($order))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($order, true), gettype($order)), __LINE__);
        }
        $this->order = $order;
        return $this;
    }
}
