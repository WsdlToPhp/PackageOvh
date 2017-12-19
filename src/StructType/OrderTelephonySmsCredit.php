<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for orderTelephonySmsCredit StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class OrderTelephonySmsCredit extends AbstractStructBase
{
    /**
     * The session
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $session;
    /**
     * The smsAccount
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $smsAccount;
    /**
     * The quantity
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $quantity;
    /**
     * The payWithPoints
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var bool
     */
    public $payWithPoints;
    /**
     * Constructor method for orderTelephonySmsCredit
     * @uses OrderTelephonySmsCredit::setSession()
     * @uses OrderTelephonySmsCredit::setSmsAccount()
     * @uses OrderTelephonySmsCredit::setQuantity()
     * @uses OrderTelephonySmsCredit::setPayWithPoints()
     * @param string $session
     * @param string $smsAccount
     * @param string $quantity
     * @param bool $payWithPoints
     */
    public function __construct($session = null, $smsAccount = null, $quantity = null, $payWithPoints = null)
    {
        $this
            ->setSession($session)
            ->setSmsAccount($smsAccount)
            ->setQuantity($quantity)
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
     * @return \Ovh\StructType\OrderTelephonySmsCredit
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
     * Get smsAccount value
     * @return string|null
     */
    public function getSmsAccount()
    {
        return $this->smsAccount;
    }
    /**
     * Set smsAccount value
     * @param string $smsAccount
     * @return \Ovh\StructType\OrderTelephonySmsCredit
     */
    public function setSmsAccount($smsAccount = null)
    {
        // validation for constraint: string
        if (!is_null($smsAccount) && !is_string($smsAccount)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($smsAccount)), __LINE__);
        }
        $this->smsAccount = $smsAccount;
        return $this;
    }
    /**
     * Get quantity value
     * @return string|null
     */
    public function getQuantity()
    {
        return $this->quantity;
    }
    /**
     * Set quantity value
     * @param string $quantity
     * @return \Ovh\StructType\OrderTelephonySmsCredit
     */
    public function setQuantity($quantity = null)
    {
        // validation for constraint: string
        if (!is_null($quantity) && !is_string($quantity)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($quantity)), __LINE__);
        }
        $this->quantity = $quantity;
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
     * @return \Ovh\StructType\OrderTelephonySmsCredit
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
     * @return \Ovh\StructType\OrderTelephonySmsCredit
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
