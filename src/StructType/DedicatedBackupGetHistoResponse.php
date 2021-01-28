<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for dedicatedBackupGetHistoResponse StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class DedicatedBackupGetHistoResponse extends AbstractStructBase
{
    /**
     * The return
     * @var \Ovh\ArrayType\MyArrayOfDedicatedBackupHistoStructType
     */
    public $return;
    /**
     * Constructor method for dedicatedBackupGetHistoResponse
     * @uses DedicatedBackupGetHistoResponse::setReturn()
     * @param \Ovh\ArrayType\MyArrayOfDedicatedBackupHistoStructType $return
     */
    public function __construct(\Ovh\ArrayType\MyArrayOfDedicatedBackupHistoStructType $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \Ovh\ArrayType\MyArrayOfDedicatedBackupHistoStructType|null
     */
    public function getReturn()
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \Ovh\ArrayType\MyArrayOfDedicatedBackupHistoStructType $return
     * @return \Ovh\StructType\DedicatedBackupGetHistoResponse
     */
    public function setReturn(\Ovh\ArrayType\MyArrayOfDedicatedBackupHistoStructType $return = null)
    {
        $this->return = $return;
        return $this;
    }
}
