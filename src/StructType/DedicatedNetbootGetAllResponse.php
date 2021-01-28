<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for dedicatedNetbootGetAllResponse StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class DedicatedNetbootGetAllResponse extends AbstractStructBase
{
    /**
     * The return
     * @var \Ovh\ArrayType\MyArrayOfDedicatedNetbootStructType
     */
    public $return;
    /**
     * Constructor method for dedicatedNetbootGetAllResponse
     * @uses DedicatedNetbootGetAllResponse::setReturn()
     * @param \Ovh\ArrayType\MyArrayOfDedicatedNetbootStructType $return
     */
    public function __construct(\Ovh\ArrayType\MyArrayOfDedicatedNetbootStructType $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \Ovh\ArrayType\MyArrayOfDedicatedNetbootStructType|null
     */
    public function getReturn()
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \Ovh\ArrayType\MyArrayOfDedicatedNetbootStructType $return
     * @return \Ovh\StructType\DedicatedNetbootGetAllResponse
     */
    public function setReturn(\Ovh\ArrayType\MyArrayOfDedicatedNetbootStructType $return = null)
    {
        $this->return = $return;
        return $this;
    }
}
