<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for dedicatedBackupListResponse StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class DedicatedBackupListResponse extends AbstractStructBase
{
    /**
     * The return
     * @var \Ovh\ArrayType\MyArrayOfDedicatedBackupListStructType
     */
    public $return;
    /**
     * Constructor method for dedicatedBackupListResponse
     * @uses DedicatedBackupListResponse::setReturn()
     * @param \Ovh\ArrayType\MyArrayOfDedicatedBackupListStructType $return
     */
    public function __construct(\Ovh\ArrayType\MyArrayOfDedicatedBackupListStructType $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \Ovh\ArrayType\MyArrayOfDedicatedBackupListStructType|null
     */
    public function getReturn()
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \Ovh\ArrayType\MyArrayOfDedicatedBackupListStructType $return
     * @return \Ovh\StructType\DedicatedBackupListResponse
     */
    public function setReturn(\Ovh\ArrayType\MyArrayOfDedicatedBackupListStructType $return = null)
    {
        $this->return = $return;
        return $this;
    }
}
