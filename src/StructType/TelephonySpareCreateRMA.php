<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for telephonySpareCreateRMA StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class TelephonySpareCreateRMA extends AbstractStructBase
{
    /**
     * The session
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $session;
    /**
     * The type
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $type;
    /**
     * The spare
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $spare;
    /**
     * Constructor method for telephonySpareCreateRMA
     * @uses TelephonySpareCreateRMA::setSession()
     * @uses TelephonySpareCreateRMA::setType()
     * @uses TelephonySpareCreateRMA::setSpare()
     * @param string $session
     * @param string $type
     * @param string $spare
     */
    public function __construct($session = null, $type = null, $spare = null)
    {
        $this
            ->setSession($session)
            ->setType($type)
            ->setSpare($spare);
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
     * @return \Ovh\StructType\TelephonySpareCreateRMA
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
     * @return \Ovh\StructType\TelephonySpareCreateRMA
     */
    public function setType($type = null)
    {
        // validation for constraint: string
        if (!is_null($type) && !is_string($type)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($type, true), gettype($type)), __LINE__);
        }
        $this->type = $type;
        return $this;
    }
    /**
     * Get spare value
     * @return string|null
     */
    public function getSpare()
    {
        return $this->spare;
    }
    /**
     * Set spare value
     * @param string $spare
     * @return \Ovh\StructType\TelephonySpareCreateRMA
     */
    public function setSpare($spare = null)
    {
        // validation for constraint: string
        if (!is_null($spare) && !is_string($spare)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($spare, true), gettype($spare)), __LINE__);
        }
        $this->spare = $spare;
        return $this;
    }
}
