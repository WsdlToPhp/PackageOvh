<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for serviceGroupGetAllInfoResponse StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class ServiceGroupGetAllInfoResponse extends AbstractStructBase
{
    /**
     * The return
     * @var \Ovh\ArrayType\MyArrayOfServiceGroupStructType
     */
    public $return;
    /**
     * Constructor method for serviceGroupGetAllInfoResponse
     * @uses ServiceGroupGetAllInfoResponse::setReturn()
     * @param \Ovh\ArrayType\MyArrayOfServiceGroupStructType $return
     */
    public function __construct(\Ovh\ArrayType\MyArrayOfServiceGroupStructType $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \Ovh\ArrayType\MyArrayOfServiceGroupStructType|null
     */
    public function getReturn()
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \Ovh\ArrayType\MyArrayOfServiceGroupStructType $return
     * @return \Ovh\StructType\ServiceGroupGetAllInfoResponse
     */
    public function setReturn(\Ovh\ArrayType\MyArrayOfServiceGroupStructType $return = null)
    {
        $this->return = $return;
        return $this;
    }
}
