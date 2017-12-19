<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for dedicatedBasicInstallProgressReturn StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class DedicatedBasicInstallProgressReturn extends AbstractStructBase
{
    /**
     * The progress
     * @var \PayPal\ArrayType\MyArrayOfDedicatedBasicInstallProgressStructType
     */
    public $progress;
    /**
     * Constructor method for dedicatedBasicInstallProgressReturn
     * @uses DedicatedBasicInstallProgressReturn::setProgress()
     * @param \PayPal\ArrayType\MyArrayOfDedicatedBasicInstallProgressStructType $progress
     */
    public function __construct(\PayPal\ArrayType\MyArrayOfDedicatedBasicInstallProgressStructType $progress = null)
    {
        $this
            ->setProgress($progress);
    }
    /**
     * Get progress value
     * @return \PayPal\ArrayType\MyArrayOfDedicatedBasicInstallProgressStructType|null
     */
    public function getProgress()
    {
        return $this->progress;
    }
    /**
     * Set progress value
     * @param \PayPal\ArrayType\MyArrayOfDedicatedBasicInstallProgressStructType $progress
     * @return \PayPal\StructType\DedicatedBasicInstallProgressReturn
     */
    public function setProgress(\PayPal\ArrayType\MyArrayOfDedicatedBasicInstallProgressStructType $progress = null)
    {
        $this->progress = $progress;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \PayPal\StructType\DedicatedBasicInstallProgressReturn
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
