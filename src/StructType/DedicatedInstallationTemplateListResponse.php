<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for dedicatedInstallationTemplateListResponse StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class DedicatedInstallationTemplateListResponse extends AbstractStructBase
{
    /**
     * The return
     * @var \Ovh\ArrayType\MyArrayOfDedicatedInstallationTemplateStructType
     */
    public $return;
    /**
     * Constructor method for dedicatedInstallationTemplateListResponse
     * @uses DedicatedInstallationTemplateListResponse::setReturn()
     * @param \Ovh\ArrayType\MyArrayOfDedicatedInstallationTemplateStructType $return
     */
    public function __construct(\Ovh\ArrayType\MyArrayOfDedicatedInstallationTemplateStructType $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \Ovh\ArrayType\MyArrayOfDedicatedInstallationTemplateStructType|null
     */
    public function getReturn()
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \Ovh\ArrayType\MyArrayOfDedicatedInstallationTemplateStructType $return
     * @return \Ovh\StructType\DedicatedInstallationTemplateListResponse
     */
    public function setReturn(\Ovh\ArrayType\MyArrayOfDedicatedInstallationTemplateStructType $return = null)
    {
        $this->return = $return;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ovh\StructType\DedicatedInstallationTemplateListResponse
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
