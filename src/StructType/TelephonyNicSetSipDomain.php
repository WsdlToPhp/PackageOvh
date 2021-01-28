<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for telephonyNicSetSipDomain StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class TelephonyNicSetSipDomain extends AbstractStructBase
{
    /**
     * The session
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $session;
    /**
     * The fr
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $fr;
    /**
     * The de
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $de;
    /**
     * The es
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $es;
    /**
     * The uk
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $uk;
    /**
     * The be
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $be;
    /**
     * Constructor method for telephonyNicSetSipDomain
     * @uses TelephonyNicSetSipDomain::setSession()
     * @uses TelephonyNicSetSipDomain::setFr()
     * @uses TelephonyNicSetSipDomain::setDe()
     * @uses TelephonyNicSetSipDomain::setEs()
     * @uses TelephonyNicSetSipDomain::setUk()
     * @uses TelephonyNicSetSipDomain::setBe()
     * @param string $session
     * @param string $fr
     * @param string $de
     * @param string $es
     * @param string $uk
     * @param string $be
     */
    public function __construct($session = null, $fr = null, $de = null, $es = null, $uk = null, $be = null)
    {
        $this
            ->setSession($session)
            ->setFr($fr)
            ->setDe($de)
            ->setEs($es)
            ->setUk($uk)
            ->setBe($be);
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
     * @return \Ovh\StructType\TelephonyNicSetSipDomain
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
     * Get fr value
     * @return string|null
     */
    public function getFr()
    {
        return $this->fr;
    }
    /**
     * Set fr value
     * @param string $fr
     * @return \Ovh\StructType\TelephonyNicSetSipDomain
     */
    public function setFr($fr = null)
    {
        // validation for constraint: string
        if (!is_null($fr) && !is_string($fr)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($fr, true), gettype($fr)), __LINE__);
        }
        $this->fr = $fr;
        return $this;
    }
    /**
     * Get de value
     * @return string|null
     */
    public function getDe()
    {
        return $this->de;
    }
    /**
     * Set de value
     * @param string $de
     * @return \Ovh\StructType\TelephonyNicSetSipDomain
     */
    public function setDe($de = null)
    {
        // validation for constraint: string
        if (!is_null($de) && !is_string($de)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($de, true), gettype($de)), __LINE__);
        }
        $this->de = $de;
        return $this;
    }
    /**
     * Get es value
     * @return string|null
     */
    public function getEs()
    {
        return $this->es;
    }
    /**
     * Set es value
     * @param string $es
     * @return \Ovh\StructType\TelephonyNicSetSipDomain
     */
    public function setEs($es = null)
    {
        // validation for constraint: string
        if (!is_null($es) && !is_string($es)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($es, true), gettype($es)), __LINE__);
        }
        $this->es = $es;
        return $this;
    }
    /**
     * Get uk value
     * @return string|null
     */
    public function getUk()
    {
        return $this->uk;
    }
    /**
     * Set uk value
     * @param string $uk
     * @return \Ovh\StructType\TelephonyNicSetSipDomain
     */
    public function setUk($uk = null)
    {
        // validation for constraint: string
        if (!is_null($uk) && !is_string($uk)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($uk, true), gettype($uk)), __LINE__);
        }
        $this->uk = $uk;
        return $this;
    }
    /**
     * Get be value
     * @return string|null
     */
    public function getBe()
    {
        return $this->be;
    }
    /**
     * Set be value
     * @param string $be
     * @return \Ovh\StructType\TelephonyNicSetSipDomain
     */
    public function setBe($be = null)
    {
        // validation for constraint: string
        if (!is_null($be) && !is_string($be)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($be, true), gettype($be)), __LINE__);
        }
        $this->be = $be;
        return $this;
    }
}
