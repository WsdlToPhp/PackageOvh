<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for billingGetReferencesToExpired StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class BillingGetReferencesToExpired extends AbstractStructBase
{
    /**
     * The session
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $session;
    /**
     * The delay
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var int
     */
    public $delay;
    /**
     * Constructor method for billingGetReferencesToExpired
     * @uses BillingGetReferencesToExpired::setSession()
     * @uses BillingGetReferencesToExpired::setDelay()
     * @param string $session
     * @param int $delay
     */
    public function __construct($session = null, $delay = null)
    {
        $this
            ->setSession($session)
            ->setDelay($delay);
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
     * @return \PayPal\StructType\BillingGetReferencesToExpired
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
     * Get delay value
     * @return int|null
     */
    public function getDelay()
    {
        return $this->delay;
    }
    /**
     * Set delay value
     * @param int $delay
     * @return \PayPal\StructType\BillingGetReferencesToExpired
     */
    public function setDelay($delay = null)
    {
        // validation for constraint: int
        if (!is_null($delay) && !is_numeric($delay)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($delay)), __LINE__);
        }
        $this->delay = $delay;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \PayPal\StructType\BillingGetReferencesToExpired
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
