<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for sqlpriveMysqlProcessListResponse StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class SqlpriveMysqlProcessListResponse extends AbstractStructBase
{
    /**
     * The return
     * @var \Ovh\ArrayType\MyArrayOfSqlpriveMysqlProcessStructType
     */
    public $return;
    /**
     * Constructor method for sqlpriveMysqlProcessListResponse
     * @uses SqlpriveMysqlProcessListResponse::setReturn()
     * @param \Ovh\ArrayType\MyArrayOfSqlpriveMysqlProcessStructType $return
     */
    public function __construct(\Ovh\ArrayType\MyArrayOfSqlpriveMysqlProcessStructType $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \Ovh\ArrayType\MyArrayOfSqlpriveMysqlProcessStructType|null
     */
    public function getReturn()
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \Ovh\ArrayType\MyArrayOfSqlpriveMysqlProcessStructType $return
     * @return \Ovh\StructType\SqlpriveMysqlProcessListResponse
     */
    public function setReturn(\Ovh\ArrayType\MyArrayOfSqlpriveMysqlProcessStructType $return = null)
    {
        $this->return = $return;
        return $this;
    }
}
