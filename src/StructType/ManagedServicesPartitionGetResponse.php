<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for managedServicesPartitionGetResponse StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class ManagedServicesPartitionGetResponse extends AbstractStructBase
{
    /**
     * The return
     * @var \Ovh\ArrayType\MyArrayOfManagedServicesPartitionStructType
     */
    public $return;
    /**
     * Constructor method for managedServicesPartitionGetResponse
     * @uses ManagedServicesPartitionGetResponse::setReturn()
     * @param \Ovh\ArrayType\MyArrayOfManagedServicesPartitionStructType $return
     */
    public function __construct(\Ovh\ArrayType\MyArrayOfManagedServicesPartitionStructType $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \Ovh\ArrayType\MyArrayOfManagedServicesPartitionStructType|null
     */
    public function getReturn()
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \Ovh\ArrayType\MyArrayOfManagedServicesPartitionStructType $return
     * @return \Ovh\StructType\ManagedServicesPartitionGetResponse
     */
    public function setReturn(\Ovh\ArrayType\MyArrayOfManagedServicesPartitionStructType $return = null)
    {
        $this->return = $return;
        return $this;
    }
}
