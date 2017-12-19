<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for dedicatedServerPartioningReturn StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class DedicatedServerPartioningReturn extends AbstractStructBase
{
    /**
     * The os
     * @var string
     */
    public $os;
    /**
     * The langaue
     * @var string
     */
    public $langaue;
    /**
     * The partioning
     * @var \Ovh\ArrayType\MyArrayOfDedicatedServerPartioningDetailStructType
     */
    public $partioning;
    /**
     * The warn
     * @var int
     */
    public $warn;
    /**
     * Constructor method for dedicatedServerPartioningReturn
     * @uses DedicatedServerPartioningReturn::setOs()
     * @uses DedicatedServerPartioningReturn::setLangaue()
     * @uses DedicatedServerPartioningReturn::setPartioning()
     * @uses DedicatedServerPartioningReturn::setWarn()
     * @param string $os
     * @param string $langaue
     * @param \Ovh\ArrayType\MyArrayOfDedicatedServerPartioningDetailStructType $partioning
     * @param int $warn
     */
    public function __construct($os = null, $langaue = null, \Ovh\ArrayType\MyArrayOfDedicatedServerPartioningDetailStructType $partioning = null, $warn = null)
    {
        $this
            ->setOs($os)
            ->setLangaue($langaue)
            ->setPartioning($partioning)
            ->setWarn($warn);
    }
    /**
     * Get os value
     * @return string|null
     */
    public function getOs()
    {
        return $this->os;
    }
    /**
     * Set os value
     * @param string $os
     * @return \Ovh\StructType\DedicatedServerPartioningReturn
     */
    public function setOs($os = null)
    {
        // validation for constraint: string
        if (!is_null($os) && !is_string($os)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($os)), __LINE__);
        }
        $this->os = $os;
        return $this;
    }
    /**
     * Get langaue value
     * @return string|null
     */
    public function getLangaue()
    {
        return $this->langaue;
    }
    /**
     * Set langaue value
     * @param string $langaue
     * @return \Ovh\StructType\DedicatedServerPartioningReturn
     */
    public function setLangaue($langaue = null)
    {
        // validation for constraint: string
        if (!is_null($langaue) && !is_string($langaue)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($langaue)), __LINE__);
        }
        $this->langaue = $langaue;
        return $this;
    }
    /**
     * Get partioning value
     * @return \Ovh\ArrayType\MyArrayOfDedicatedServerPartioningDetailStructType|null
     */
    public function getPartioning()
    {
        return $this->partioning;
    }
    /**
     * Set partioning value
     * @param \Ovh\ArrayType\MyArrayOfDedicatedServerPartioningDetailStructType $partioning
     * @return \Ovh\StructType\DedicatedServerPartioningReturn
     */
    public function setPartioning(\Ovh\ArrayType\MyArrayOfDedicatedServerPartioningDetailStructType $partioning = null)
    {
        $this->partioning = $partioning;
        return $this;
    }
    /**
     * Get warn value
     * @return int|null
     */
    public function getWarn()
    {
        return $this->warn;
    }
    /**
     * Set warn value
     * @param int $warn
     * @return \Ovh\StructType\DedicatedServerPartioningReturn
     */
    public function setWarn($warn = null)
    {
        // validation for constraint: int
        if (!is_null($warn) && !is_numeric($warn)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($warn)), __LINE__);
        }
        $this->warn = $warn;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ovh\StructType\DedicatedServerPartioningReturn
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
