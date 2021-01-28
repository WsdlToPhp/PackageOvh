<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for telephonySmsUserMultiSendResponse StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class TelephonySmsUserMultiSendResponse extends AbstractStructBase
{
    /**
     * The return
     * @var \Ovh\ArrayType\MyArrayOfIntType
     */
    public $return;
    /**
     * Constructor method for telephonySmsUserMultiSendResponse
     * @uses TelephonySmsUserMultiSendResponse::setReturn()
     * @param \Ovh\ArrayType\MyArrayOfIntType $return
     */
    public function __construct(\Ovh\ArrayType\MyArrayOfIntType $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \Ovh\ArrayType\MyArrayOfIntType|null
     */
    public function getReturn()
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \Ovh\ArrayType\MyArrayOfIntType $return
     * @return \Ovh\StructType\TelephonySmsUserMultiSendResponse
     */
    public function setReturn(\Ovh\ArrayType\MyArrayOfIntType $return = null)
    {
        $this->return = $return;
        return $this;
    }
}
