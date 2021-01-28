<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for dedicatedBackupGetFreePlanningResponse StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class DedicatedBackupGetFreePlanningResponse extends AbstractStructBase
{
    /**
     * The return
     * @var \Ovh\ArrayType\MyArrayOfDedicatedBackupGetPlanningStructType
     */
    public $return;
    /**
     * Constructor method for dedicatedBackupGetFreePlanningResponse
     * @uses DedicatedBackupGetFreePlanningResponse::setReturn()
     * @param \Ovh\ArrayType\MyArrayOfDedicatedBackupGetPlanningStructType $return
     */
    public function __construct(\Ovh\ArrayType\MyArrayOfDedicatedBackupGetPlanningStructType $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \Ovh\ArrayType\MyArrayOfDedicatedBackupGetPlanningStructType|null
     */
    public function getReturn()
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \Ovh\ArrayType\MyArrayOfDedicatedBackupGetPlanningStructType $return
     * @return \Ovh\StructType\DedicatedBackupGetFreePlanningResponse
     */
    public function setReturn(\Ovh\ArrayType\MyArrayOfDedicatedBackupGetPlanningStructType $return = null)
    {
        $this->return = $return;
        return $this;
    }
}
