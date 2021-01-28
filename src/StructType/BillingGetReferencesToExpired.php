<?php

namespace Ovh\StructType;

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
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $session;
    /**
     * The delay
     * Meta information extracted from the WSDL
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
     * @return \Ovh\StructType\BillingGetReferencesToExpired
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
     * @return \Ovh\StructType\BillingGetReferencesToExpired
     */
    public function setDelay($delay = null)
    {
        // validation for constraint: int
        if (!is_null($delay) && !(is_int($delay) || ctype_digit($delay))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($delay, true), gettype($delay)), __LINE__);
        }
        $this->delay = $delay;
        return $this;
    }
}
