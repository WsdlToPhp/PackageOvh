<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for automatedMailGetStateReturn StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class AutomatedMailGetStateReturn extends AbstractStructBase
{
    /**
     * The bounce
     * @var int
     */
    public $bounce;
    /**
     * The sent
     * @var int
     */
    public $sent;
    /**
     * The return
     * @var string
     */
    public $return;
    /**
     * The state
     * @var string
     */
    public $state;
    /**
     * Constructor method for automatedMailGetStateReturn
     * @uses AutomatedMailGetStateReturn::setBounce()
     * @uses AutomatedMailGetStateReturn::setSent()
     * @uses AutomatedMailGetStateReturn::setReturn()
     * @uses AutomatedMailGetStateReturn::setState()
     * @param int $bounce
     * @param int $sent
     * @param string $return
     * @param string $state
     */
    public function __construct($bounce = null, $sent = null, $return = null, $state = null)
    {
        $this
            ->setBounce($bounce)
            ->setSent($sent)
            ->setReturn($return)
            ->setState($state);
    }
    /**
     * Get bounce value
     * @return int|null
     */
    public function getBounce()
    {
        return $this->bounce;
    }
    /**
     * Set bounce value
     * @param int $bounce
     * @return \Ovh\StructType\AutomatedMailGetStateReturn
     */
    public function setBounce($bounce = null)
    {
        // validation for constraint: int
        if (!is_null($bounce) && !(is_int($bounce) || ctype_digit($bounce))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($bounce, true), gettype($bounce)), __LINE__);
        }
        $this->bounce = $bounce;
        return $this;
    }
    /**
     * Get sent value
     * @return int|null
     */
    public function getSent()
    {
        return $this->sent;
    }
    /**
     * Set sent value
     * @param int $sent
     * @return \Ovh\StructType\AutomatedMailGetStateReturn
     */
    public function setSent($sent = null)
    {
        // validation for constraint: int
        if (!is_null($sent) && !(is_int($sent) || ctype_digit($sent))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($sent, true), gettype($sent)), __LINE__);
        }
        $this->sent = $sent;
        return $this;
    }
    /**
     * Get return value
     * @return string|null
     */
    public function getReturn()
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param string $return
     * @return \Ovh\StructType\AutomatedMailGetStateReturn
     */
    public function setReturn($return = null)
    {
        // validation for constraint: string
        if (!is_null($return) && !is_string($return)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($return, true), gettype($return)), __LINE__);
        }
        $this->return = $return;
        return $this;
    }
    /**
     * Get state value
     * @return string|null
     */
    public function getState()
    {
        return $this->state;
    }
    /**
     * Set state value
     * @param string $state
     * @return \Ovh\StructType\AutomatedMailGetStateReturn
     */
    public function setState($state = null)
    {
        // validation for constraint: string
        if (!is_null($state) && !is_string($state)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($state, true), gettype($state)), __LINE__);
        }
        $this->state = $state;
        return $this;
    }
}
