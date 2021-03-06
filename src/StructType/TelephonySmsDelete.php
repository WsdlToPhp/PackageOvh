<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for telephonySmsDelete StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class TelephonySmsDelete extends AbstractStructBase
{
    /**
     * The session
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $session;
    /**
     * The smsAccount
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $smsAccount;
    /**
     * The smsIds
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var \Ovh\ArrayType\MyArrayOfIntType
     */
    public $smsIds;
    /**
     * Constructor method for telephonySmsDelete
     * @uses TelephonySmsDelete::setSession()
     * @uses TelephonySmsDelete::setSmsAccount()
     * @uses TelephonySmsDelete::setSmsIds()
     * @param string $session
     * @param string $smsAccount
     * @param \Ovh\ArrayType\MyArrayOfIntType $smsIds
     */
    public function __construct($session = null, $smsAccount = null, \Ovh\ArrayType\MyArrayOfIntType $smsIds = null)
    {
        $this
            ->setSession($session)
            ->setSmsAccount($smsAccount)
            ->setSmsIds($smsIds);
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
     * @return \Ovh\StructType\TelephonySmsDelete
     */
    public function setSession($session = null)
    {
        // validation for constraint: string
        if (!is_null($session) && !is_string($session)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($session, true), gettype($session)), __LINE__);
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
     * @return \Ovh\StructType\TelephonySmsDelete
     */
    public function setSmsAccount($smsAccount = null)
    {
        // validation for constraint: string
        if (!is_null($smsAccount) && !is_string($smsAccount)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($smsAccount, true), gettype($smsAccount)), __LINE__);
        }
        $this->smsAccount = $smsAccount;
        return $this;
    }
    /**
     * Get smsIds value
     * @return \Ovh\ArrayType\MyArrayOfIntType|null
     */
    public function getSmsIds()
    {
        return $this->smsIds;
    }
    /**
     * Set smsIds value
     * @param \Ovh\ArrayType\MyArrayOfIntType $smsIds
     * @return \Ovh\StructType\TelephonySmsDelete
     */
    public function setSmsIds(\Ovh\ArrayType\MyArrayOfIntType $smsIds = null)
    {
        $this->smsIds = $smsIds;
        return $this;
    }
}
