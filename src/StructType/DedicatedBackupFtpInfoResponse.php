<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for dedicatedBackupFtpInfoResponse StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class DedicatedBackupFtpInfoResponse extends AbstractStructBase
{
    /**
     * The return
     * @var \Ovh\StructType\DedicatedBackupFtpInfoReturn
     */
    public $return;
    /**
     * Constructor method for dedicatedBackupFtpInfoResponse
     * @uses DedicatedBackupFtpInfoResponse::setReturn()
     * @param \Ovh\StructType\DedicatedBackupFtpInfoReturn $return
     */
    public function __construct(\Ovh\StructType\DedicatedBackupFtpInfoReturn $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \Ovh\StructType\DedicatedBackupFtpInfoReturn|null
     */
    public function getReturn()
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \Ovh\StructType\DedicatedBackupFtpInfoReturn $return
     * @return \Ovh\StructType\DedicatedBackupFtpInfoResponse
     */
    public function setReturn(\Ovh\StructType\DedicatedBackupFtpInfoReturn $return = null)
    {
        $this->return = $return;
        return $this;
    }
}
