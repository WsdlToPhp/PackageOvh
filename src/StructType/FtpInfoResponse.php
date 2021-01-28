<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ftpInfoResponse StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class FtpInfoResponse extends AbstractStructBase
{
    /**
     * The return
     * @var \Ovh\StructType\FtpInfoReturn
     */
    public $return;
    /**
     * Constructor method for ftpInfoResponse
     * @uses FtpInfoResponse::setReturn()
     * @param \Ovh\StructType\FtpInfoReturn $return
     */
    public function __construct(\Ovh\StructType\FtpInfoReturn $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \Ovh\StructType\FtpInfoReturn|null
     */
    public function getReturn()
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \Ovh\StructType\FtpInfoReturn $return
     * @return \Ovh\StructType\FtpInfoResponse
     */
    public function setReturn(\Ovh\StructType\FtpInfoReturn $return = null)
    {
        $this->return = $return;
        return $this;
    }
}
