<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for dedicatedIPForUDPGetResponse StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class DedicatedIPForUDPGetResponse extends AbstractStructBase
{
    /**
     * The return
     * @var \Ovh\ArrayType\MyArrayOfDedicatedIPForUDPStructType
     */
    public $return;
    /**
     * Constructor method for dedicatedIPForUDPGetResponse
     * @uses DedicatedIPForUDPGetResponse::setReturn()
     * @param \Ovh\ArrayType\MyArrayOfDedicatedIPForUDPStructType $return
     */
    public function __construct(\Ovh\ArrayType\MyArrayOfDedicatedIPForUDPStructType $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \Ovh\ArrayType\MyArrayOfDedicatedIPForUDPStructType|null
     */
    public function getReturn()
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \Ovh\ArrayType\MyArrayOfDedicatedIPForUDPStructType $return
     * @return \Ovh\StructType\DedicatedIPForUDPGetResponse
     */
    public function setReturn(\Ovh\ArrayType\MyArrayOfDedicatedIPForUDPStructType $return = null)
    {
        $this->return = $return;
        return $this;
    }
}
