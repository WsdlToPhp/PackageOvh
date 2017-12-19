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
        if (!is_null($bounce) && !is_numeric($bounce)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($bounce)), __LINE__);
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
        if (!is_null($sent) && !is_numeric($sent)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($sent)), __LINE__);
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
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($return)), __LINE__);
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
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($state)), __LINE__);
        }
        $this->state = $state;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ovh\StructType\AutomatedMailGetStateReturn
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
