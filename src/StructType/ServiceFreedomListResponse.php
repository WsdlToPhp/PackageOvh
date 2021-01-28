<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for serviceFreedomListResponse StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class ServiceFreedomListResponse extends AbstractStructBase
{
    /**
     * The return
     * @var \Ovh\ArrayType\MyArrayOfFreedomStructType
     */
    public $return;
    /**
     * Constructor method for serviceFreedomListResponse
     * @uses ServiceFreedomListResponse::setReturn()
     * @param \Ovh\ArrayType\MyArrayOfFreedomStructType $return
     */
    public function __construct(\Ovh\ArrayType\MyArrayOfFreedomStructType $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \Ovh\ArrayType\MyArrayOfFreedomStructType|null
     */
    public function getReturn()
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \Ovh\ArrayType\MyArrayOfFreedomStructType $return
     * @return \Ovh\StructType\ServiceFreedomListResponse
     */
    public function setReturn(\Ovh\ArrayType\MyArrayOfFreedomStructType $return = null)
    {
        $this->return = $return;
        return $this;
    }
}
