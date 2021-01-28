<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for infrastructureIpListGetResponse StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class InfrastructureIpListGetResponse extends AbstractStructBase
{
    /**
     * The return
     * @var \Ovh\ArrayType\MyArrayOfInfrastructureIpStructType
     */
    public $return;
    /**
     * Constructor method for infrastructureIpListGetResponse
     * @uses InfrastructureIpListGetResponse::setReturn()
     * @param \Ovh\ArrayType\MyArrayOfInfrastructureIpStructType $return
     */
    public function __construct(\Ovh\ArrayType\MyArrayOfInfrastructureIpStructType $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \Ovh\ArrayType\MyArrayOfInfrastructureIpStructType|null
     */
    public function getReturn()
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \Ovh\ArrayType\MyArrayOfInfrastructureIpStructType $return
     * @return \Ovh\StructType\InfrastructureIpListGetResponse
     */
    public function setReturn(\Ovh\ArrayType\MyArrayOfInfrastructureIpStructType $return = null)
    {
        $this->return = $return;
        return $this;
    }
}
