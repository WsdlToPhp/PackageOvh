<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for sqlpriveMysqlDatabasePrivilegeStruct StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class SqlpriveMysqlDatabasePrivilegeStruct extends AbstractStructBase
{
    /**
     * The databaseName
     * @var string
     */
    public $databaseName;
    /**
     * The databaseUsers
     * @var \Ovh\ArrayType\MyArrayOfSqlpriveMysqlDatabaseUserPrivilegeStructType
     */
    public $databaseUsers;
    /**
     * Constructor method for sqlpriveMysqlDatabasePrivilegeStruct
     * @uses SqlpriveMysqlDatabasePrivilegeStruct::setDatabaseName()
     * @uses SqlpriveMysqlDatabasePrivilegeStruct::setDatabaseUsers()
     * @param string $databaseName
     * @param \Ovh\ArrayType\MyArrayOfSqlpriveMysqlDatabaseUserPrivilegeStructType $databaseUsers
     */
    public function __construct($databaseName = null, \Ovh\ArrayType\MyArrayOfSqlpriveMysqlDatabaseUserPrivilegeStructType $databaseUsers = null)
    {
        $this
            ->setDatabaseName($databaseName)
            ->setDatabaseUsers($databaseUsers);
    }
    /**
     * Get databaseName value
     * @return string|null
     */
    public function getDatabaseName()
    {
        return $this->databaseName;
    }
    /**
     * Set databaseName value
     * @param string $databaseName
     * @return \Ovh\StructType\SqlpriveMysqlDatabasePrivilegeStruct
     */
    public function setDatabaseName($databaseName = null)
    {
        // validation for constraint: string
        if (!is_null($databaseName) && !is_string($databaseName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($databaseName, true), gettype($databaseName)), __LINE__);
        }
        $this->databaseName = $databaseName;
        return $this;
    }
    /**
     * Get databaseUsers value
     * @return \Ovh\ArrayType\MyArrayOfSqlpriveMysqlDatabaseUserPrivilegeStructType|null
     */
    public function getDatabaseUsers()
    {
        return $this->databaseUsers;
    }
    /**
     * Set databaseUsers value
     * @param \Ovh\ArrayType\MyArrayOfSqlpriveMysqlDatabaseUserPrivilegeStructType $databaseUsers
     * @return \Ovh\StructType\SqlpriveMysqlDatabasePrivilegeStruct
     */
    public function setDatabaseUsers(\Ovh\ArrayType\MyArrayOfSqlpriveMysqlDatabaseUserPrivilegeStructType $databaseUsers = null)
    {
        $this->databaseUsers = $databaseUsers;
        return $this;
    }
}
