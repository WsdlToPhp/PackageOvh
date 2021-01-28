<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for dedicatedBackupGetDateResponse StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class DedicatedBackupGetDateResponse extends AbstractStructBase
{
    /**
     * The return
     * @var \Ovh\ArrayType\MyArrayOfDedicatedBackupDateStructType
     */
    public $return;
    /**
     * Constructor method for dedicatedBackupGetDateResponse
     * @uses DedicatedBackupGetDateResponse::setReturn()
     * @param \Ovh\ArrayType\MyArrayOfDedicatedBackupDateStructType $return
     */
    public function __construct(\Ovh\ArrayType\MyArrayOfDedicatedBackupDateStructType $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \Ovh\ArrayType\MyArrayOfDedicatedBackupDateStructType|null
     */
    public function getReturn()
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \Ovh\ArrayType\MyArrayOfDedicatedBackupDateStructType $return
     * @return \Ovh\StructType\DedicatedBackupGetDateResponse
     */
    public function setReturn(\Ovh\ArrayType\MyArrayOfDedicatedBackupDateStructType $return = null)
    {
        $this->return = $return;
        return $this;
    }
}
