<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for sqlpriveMysqlDatabaseListResponse StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class SqlpriveMysqlDatabaseListResponse extends AbstractStructBase
{
    /**
     * The return
     * @var \Ovh\ArrayType\MyArrayOfStringType
     */
    public $return;
    /**
     * Constructor method for sqlpriveMysqlDatabaseListResponse
     * @uses SqlpriveMysqlDatabaseListResponse::setReturn()
     * @param \Ovh\ArrayType\MyArrayOfStringType $return
     */
    public function __construct(\Ovh\ArrayType\MyArrayOfStringType $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \Ovh\ArrayType\MyArrayOfStringType|null
     */
    public function getReturn()
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \Ovh\ArrayType\MyArrayOfStringType $return
     * @return \Ovh\StructType\SqlpriveMysqlDatabaseListResponse
     */
    public function setReturn(\Ovh\ArrayType\MyArrayOfStringType $return = null)
    {
        $this->return = $return;
        return $this;
    }
}
