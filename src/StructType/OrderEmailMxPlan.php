<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for orderEmailMxPlan StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class OrderEmailMxPlan extends AbstractStructBase
{
    /**
     * The session
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $session;
    /**
     * The domain
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $domain;
    /**
     * The type
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $type;
    /**
     * The payWithPoints
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var bool
     */
    public $payWithPoints;
    /**
     * Constructor method for orderEmailMxPlan
     * @uses OrderEmailMxPlan::setSession()
     * @uses OrderEmailMxPlan::setDomain()
     * @uses OrderEmailMxPlan::setType()
     * @uses OrderEmailMxPlan::setPayWithPoints()
     * @param string $session
     * @param string $domain
     * @param string $type
     * @param bool $payWithPoints
     */
    public function __construct($session = null, $domain = null, $type = null, $payWithPoints = null)
    {
        $this
            ->setSession($session)
            ->setDomain($domain)
            ->setType($type)
            ->setPayWithPoints($payWithPoints);
    }
    /**
     * Get session value
     * @return string|null
     */
    public function getSession()
    {
        return $this->session;
    }
    /**
     * Set session value
     * @param string $session
     * @return \Ovh\StructType\OrderEmailMxPlan
     */
    public function setSession($session = null)
    {
        // validation for constraint: string
        if (!is_null($session) && !is_string($session)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($session)), __LINE__);
        }
        $this->session = $session;
        return $this;
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
     * @return \Ovh\StructType\OrderEmailMxPlan
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
     * Get type value
     * @return string|null
     */
    public function getType()
    {
        return $this->type;
    }
    /**
     * Set type value
     * @param string $type
     * @return \Ovh\StructType\OrderEmailMxPlan
     */
    public function setType($type = null)
    {
        // validation for constraint: string
        if (!is_null($type) && !is_string($type)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($type)), __LINE__);
        }
        $this->type = $type;
        return $this;
    }
    /**
     * Get payWithPoints value
     * @return bool|null
     */
    public function getPayWithPoints()
    {
        return $this->payWithPoints;
    }
    /**
     * Set payWithPoints value
     * @param bool $payWithPoints
     * @return \Ovh\StructType\OrderEmailMxPlan
     */
    public function setPayWithPoints($payWithPoints = null)
    {
        // validation for constraint: boolean
        if (!is_null($payWithPoints) && !is_bool($payWithPoints)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($payWithPoints)), __LINE__);
        }
        $this->payWithPoints = $payWithPoints;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ovh\StructType\OrderEmailMxPlan
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
