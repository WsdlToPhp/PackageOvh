<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for telephonySmsUserHistoryResponse StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class TelephonySmsUserHistoryResponse extends AbstractStructBase
{
    /**
     * The return
     * @var \Ovh\ArrayType\MyArrayOfTelephonySmsHistoryStructType
     */
    public $return;
    /**
     * Constructor method for telephonySmsUserHistoryResponse
     * @uses TelephonySmsUserHistoryResponse::setReturn()
     * @param \Ovh\ArrayType\MyArrayOfTelephonySmsHistoryStructType $return
     */
    public function __construct(\Ovh\ArrayType\MyArrayOfTelephonySmsHistoryStructType $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \Ovh\ArrayType\MyArrayOfTelephonySmsHistoryStructType|null
     */
    public function getReturn()
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \Ovh\ArrayType\MyArrayOfTelephonySmsHistoryStructType $return
     * @return \Ovh\StructType\TelephonySmsUserHistoryResponse
     */
    public function setReturn(\Ovh\ArrayType\MyArrayOfTelephonySmsHistoryStructType $return = null)
    {
        $this->return = $return;
        return $this;
    }
}
