<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for logsAccessListResponse StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class LogsAccessListResponse extends AbstractStructBase
{
    /**
     * The return
     * @var \Ovh\ArrayType\MyArrayOfLogsAccessStructType
     */
    public $return;
    /**
     * Constructor method for logsAccessListResponse
     * @uses LogsAccessListResponse::setReturn()
     * @param \Ovh\ArrayType\MyArrayOfLogsAccessStructType $return
     */
    public function __construct(\Ovh\ArrayType\MyArrayOfLogsAccessStructType $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \Ovh\ArrayType\MyArrayOfLogsAccessStructType|null
     */
    public function getReturn()
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \Ovh\ArrayType\MyArrayOfLogsAccessStructType $return
     * @return \Ovh\StructType\LogsAccessListResponse
     */
    public function setReturn(\Ovh\ArrayType\MyArrayOfLogsAccessStructType $return = null)
    {
        $this->return = $return;
        return $this;
    }
}
