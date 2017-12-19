<?php

namespace Ovh\StructType;

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
     * @var \Ovh\ArrayType\MyArrayOfDedicatedBasicInstallProgressStructType
     */
    public $progress;
    /**
     * Constructor method for dedicatedBasicInstallProgressReturn
     * @uses DedicatedBasicInstallProgressReturn::setProgress()
     * @param \Ovh\ArrayType\MyArrayOfDedicatedBasicInstallProgressStructType $progress
     */
    public function __construct(\Ovh\ArrayType\MyArrayOfDedicatedBasicInstallProgressStructType $progress = null)
    {
        $this
            ->setProgress($progress);
    }
    /**
     * Get progress value
     * @return \Ovh\ArrayType\MyArrayOfDedicatedBasicInstallProgressStructType|null
     */
    public function getProgress()
    {
        return $this->progress;
    }
    /**
     * Set progress value
     * @param \Ovh\ArrayType\MyArrayOfDedicatedBasicInstallProgressStructType $progress
     * @return \Ovh\StructType\DedicatedBasicInstallProgressReturn
     */
    public function setProgress(\Ovh\ArrayType\MyArrayOfDedicatedBasicInstallProgressStructType $progress = null)
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
     * @return \Ovh\StructType\DedicatedBasicInstallProgressReturn
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
