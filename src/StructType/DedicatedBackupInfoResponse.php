<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for dedicatedBackupInfoResponse StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class DedicatedBackupInfoResponse extends AbstractStructBase
{
    /**
     * The return
     * @var \Ovh\StructType\DedicatedBackupListReturn
     */
    public $return;
    /**
     * Constructor method for dedicatedBackupInfoResponse
     * @uses DedicatedBackupInfoResponse::setReturn()
     * @param \Ovh\StructType\DedicatedBackupListReturn $return
     */
    public function __construct(\Ovh\StructType\DedicatedBackupListReturn $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \Ovh\StructType\DedicatedBackupListReturn|null
     */
    public function getReturn()
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \Ovh\StructType\DedicatedBackupListReturn $return
     * @return \Ovh\StructType\DedicatedBackupInfoResponse
     */
    public function setReturn(\Ovh\StructType\DedicatedBackupListReturn $return = null)
    {
        $this->return = $return;
        return $this;
    }
}
