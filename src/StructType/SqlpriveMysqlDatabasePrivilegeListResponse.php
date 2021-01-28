<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for sqlpriveMysqlDatabasePrivilegeListResponse StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class SqlpriveMysqlDatabasePrivilegeListResponse extends AbstractStructBase
{
    /**
     * The return
     * @var \Ovh\ArrayType\MyArrayOfSqlpriveMysqlDatabasePrivilegeStructType
     */
    public $return;
    /**
     * Constructor method for sqlpriveMysqlDatabasePrivilegeListResponse
     * @uses SqlpriveMysqlDatabasePrivilegeListResponse::setReturn()
     * @param \Ovh\ArrayType\MyArrayOfSqlpriveMysqlDatabasePrivilegeStructType $return
     */
    public function __construct(\Ovh\ArrayType\MyArrayOfSqlpriveMysqlDatabasePrivilegeStructType $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \Ovh\ArrayType\MyArrayOfSqlpriveMysqlDatabasePrivilegeStructType|null
     */
    public function getReturn()
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \Ovh\ArrayType\MyArrayOfSqlpriveMysqlDatabasePrivilegeStructType $return
     * @return \Ovh\StructType\SqlpriveMysqlDatabasePrivilegeListResponse
     */
    public function setReturn(\Ovh\ArrayType\MyArrayOfSqlpriveMysqlDatabasePrivilegeStructType $return = null)
    {
        $this->return = $return;
        return $this;
    }
}
