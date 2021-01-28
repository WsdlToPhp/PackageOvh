<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for telephonySmsUserGetCsvAttachmentResponse StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class TelephonySmsUserGetCsvAttachmentResponse extends AbstractStructBase
{
    /**
     * The return
     * @var string
     */
    public $return;
    /**
     * Constructor method for telephonySmsUserGetCsvAttachmentResponse
     * @uses TelephonySmsUserGetCsvAttachmentResponse::setReturn()
     * @param string $return
     */
    public function __construct($return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return string|null
     */
    public function getReturn()
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param string $return
     * @return \Ovh\StructType\TelephonySmsUserGetCsvAttachmentResponse
     */
    public function setReturn($return = null)
    {
        // validation for constraint: string
        if (!is_null($return) && !is_string($return)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($return, true), gettype($return)), __LINE__);
        }
        $this->return = $return;
        return $this;
    }
}
