<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for dedicatedHardRebootStatusReturn StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class DedicatedHardRebootStatusReturn extends AbstractStructBase
{
    /**
     * The start
     * @var string
     */
    public $start;
    /**
     * The end
     * @var string
     */
    public $end;
    /**
     * Constructor method for dedicatedHardRebootStatusReturn
     * @uses DedicatedHardRebootStatusReturn::setStart()
     * @uses DedicatedHardRebootStatusReturn::setEnd()
     * @param string $start
     * @param string $end
     */
    public function __construct($start = null, $end = null)
    {
        $this
            ->setStart($start)
            ->setEnd($end);
    }
    /**
     * Get start value
     * @return string|null
     */
    public function getStart()
    {
        return $this->start;
    }
    /**
     * Set start value
     * @param string $start
     * @return \Ovh\StructType\DedicatedHardRebootStatusReturn
     */
    public function setStart($start = null)
    {
        // validation for constraint: string
        if (!is_null($start) && !is_string($start)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($start, true), gettype($start)), __LINE__);
        }
        $this->start = $start;
        return $this;
    }
    /**
     * Get end value
     * @return string|null
     */
    public function getEnd()
    {
        return $this->end;
    }
    /**
     * Set end value
     * @param string $end
     * @return \Ovh\StructType\DedicatedHardRebootStatusReturn
     */
    public function setEnd($end = null)
    {
        // validation for constraint: string
        if (!is_null($end) && !is_string($end)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($end, true), gettype($end)), __LINE__);
        }
        $this->end = $end;
        return $this;
    }
}
