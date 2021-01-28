<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for serviceListResponse StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class ServiceListResponse extends AbstractStructBase
{
    /**
     * The return
     * @var \Ovh\ArrayType\MyArrayOfServiceStructType
     */
    public $return;
    /**
     * Constructor method for serviceListResponse
     * @uses ServiceListResponse::setReturn()
     * @param \Ovh\ArrayType\MyArrayOfServiceStructType $return
     */
    public function __construct(\Ovh\ArrayType\MyArrayOfServiceStructType $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \Ovh\ArrayType\MyArrayOfServiceStructType|null
     */
    public function getReturn()
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \Ovh\ArrayType\MyArrayOfServiceStructType $return
     * @return \Ovh\StructType\ServiceListResponse
     */
    public function setReturn(\Ovh\ArrayType\MyArrayOfServiceStructType $return = null)
    {
        $this->return = $return;
        return $this;
    }
}
