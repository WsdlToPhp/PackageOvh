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
}
