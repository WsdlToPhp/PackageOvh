<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for sqlpriveMysqlGetPossibleDumpResponse StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class SqlpriveMysqlGetPossibleDumpResponse extends AbstractStructBase
{
    /**
     * The return
     * @var \Ovh\ArrayType\MyArrayOfSqlpriveGetPossibleDumpStructType
     */
    public $return;
    /**
     * Constructor method for sqlpriveMysqlGetPossibleDumpResponse
     * @uses SqlpriveMysqlGetPossibleDumpResponse::setReturn()
     * @param \Ovh\ArrayType\MyArrayOfSqlpriveGetPossibleDumpStructType $return
     */
    public function __construct(\Ovh\ArrayType\MyArrayOfSqlpriveGetPossibleDumpStructType $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \Ovh\ArrayType\MyArrayOfSqlpriveGetPossibleDumpStructType|null
     */
    public function getReturn()
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \Ovh\ArrayType\MyArrayOfSqlpriveGetPossibleDumpStructType $return
     * @return \Ovh\StructType\SqlpriveMysqlGetPossibleDumpResponse
     */
    public function setReturn(\Ovh\ArrayType\MyArrayOfSqlpriveGetPossibleDumpStructType $return = null)
    {
        $this->return = $return;
        return $this;
    }
}
