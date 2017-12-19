<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for telephonySmsDeleteCsvAttachment StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class TelephonySmsDeleteCsvAttachment extends AbstractStructBase
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
     * The ids
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var \PayPal\ArrayType\MyArrayOfIntType
     */
    public $ids;
    /**
     * Constructor method for telephonySmsDeleteCsvAttachment
     * @uses TelephonySmsDeleteCsvAttachment::setSession()
     * @uses TelephonySmsDeleteCsvAttachment::setSmsAccount()
     * @uses TelephonySmsDeleteCsvAttachment::setIds()
     * @param string $session
     * @param string $smsAccount
     * @param \PayPal\ArrayType\MyArrayOfIntType $ids
     */
    public function __construct($session = null, $smsAccount = null, \PayPal\ArrayType\MyArrayOfIntType $ids = null)
    {
        $this
            ->setSession($session)
            ->setSmsAccount($smsAccount)
            ->setIds($ids);
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
     * @return \PayPal\StructType\TelephonySmsDeleteCsvAttachment
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
     * @return \PayPal\StructType\TelephonySmsDeleteCsvAttachment
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
     * Get ids value
     * @return \PayPal\ArrayType\MyArrayOfIntType|null
     */
    public function getIds()
    {
        return $this->ids;
    }
    /**
     * Set ids value
     * @param \PayPal\ArrayType\MyArrayOfIntType $ids
     * @return \PayPal\StructType\TelephonySmsDeleteCsvAttachment
     */
    public function setIds(\PayPal\ArrayType\MyArrayOfIntType $ids = null)
    {
        $this->ids = $ids;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \PayPal\StructType\TelephonySmsDeleteCsvAttachment
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
