<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for dedicatedIPForUDPServerListResponse StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class DedicatedIPForUDPServerListResponse extends AbstractStructBase
{
    /**
     * The return
     * @var \Ovh\ArrayType\MyArrayOfIPForUDPServerListStructType
     */
    public $return;
    /**
     * Constructor method for dedicatedIPForUDPServerListResponse
     * @uses DedicatedIPForUDPServerListResponse::setReturn()
     * @param \Ovh\ArrayType\MyArrayOfIPForUDPServerListStructType $return
     */
    public function __construct(\Ovh\ArrayType\MyArrayOfIPForUDPServerListStructType $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \Ovh\ArrayType\MyArrayOfIPForUDPServerListStructType|null
     */
    public function getReturn()
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \Ovh\ArrayType\MyArrayOfIPForUDPServerListStructType $return
     * @return \Ovh\StructType\DedicatedIPForUDPServerListResponse
     */
    public function setReturn(\Ovh\ArrayType\MyArrayOfIPForUDPServerListStructType $return = null)
    {
        $this->return = $return;
        return $this;
    }
}
