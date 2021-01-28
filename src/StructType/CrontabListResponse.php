<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for crontabListResponse StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class CrontabListResponse extends AbstractStructBase
{
    /**
     * The return
     * @var \Ovh\ArrayType\MyArrayOfCrontabStructType
     */
    public $return;
    /**
     * Constructor method for crontabListResponse
     * @uses CrontabListResponse::setReturn()
     * @param \Ovh\ArrayType\MyArrayOfCrontabStructType $return
     */
    public function __construct(\Ovh\ArrayType\MyArrayOfCrontabStructType $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \Ovh\ArrayType\MyArrayOfCrontabStructType|null
     */
    public function getReturn()
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \Ovh\ArrayType\MyArrayOfCrontabStructType $return
     * @return \Ovh\StructType\CrontabListResponse
     */
    public function setReturn(\Ovh\ArrayType\MyArrayOfCrontabStructType $return = null)
    {
        $this->return = $return;
        return $this;
    }
}
