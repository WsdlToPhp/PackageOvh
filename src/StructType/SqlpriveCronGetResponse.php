<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for sqlpriveCronGetResponse StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class SqlpriveCronGetResponse extends AbstractStructBase
{
    /**
     * The return
     * @var \Ovh\ArrayType\MyArrayOfSqlpriveCronStructType
     */
    public $return;
    /**
     * Constructor method for sqlpriveCronGetResponse
     * @uses SqlpriveCronGetResponse::setReturn()
     * @param \Ovh\ArrayType\MyArrayOfSqlpriveCronStructType $return
     */
    public function __construct(\Ovh\ArrayType\MyArrayOfSqlpriveCronStructType $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \Ovh\ArrayType\MyArrayOfSqlpriveCronStructType|null
     */
    public function getReturn()
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \Ovh\ArrayType\MyArrayOfSqlpriveCronStructType $return
     * @return \Ovh\StructType\SqlpriveCronGetResponse
     */
    public function setReturn(\Ovh\ArrayType\MyArrayOfSqlpriveCronStructType $return = null)
    {
        $this->return = $return;
        return $this;
    }
}
