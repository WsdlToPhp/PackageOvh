<?php

namespace PayPal\StructType;

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
     * @var \PayPal\ArrayType\MyArrayOfSqlpriveMysqlDatabaseUserPrivilegeStructType
     */
    public $databaseUsers;
    /**
     * Constructor method for sqlpriveMysqlDatabasePrivilegeStruct
     * @uses SqlpriveMysqlDatabasePrivilegeStruct::setDatabaseName()
     * @uses SqlpriveMysqlDatabasePrivilegeStruct::setDatabaseUsers()
     * @param string $databaseName
     * @param \PayPal\ArrayType\MyArrayOfSqlpriveMysqlDatabaseUserPrivilegeStructType $databaseUsers
     */
    public function __construct($databaseName = null, \PayPal\ArrayType\MyArrayOfSqlpriveMysqlDatabaseUserPrivilegeStructType $databaseUsers = null)
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
     * @return \PayPal\StructType\SqlpriveMysqlDatabasePrivilegeStruct
     */
    public function setDatabaseName($databaseName = null)
    {
        // validation for constraint: string
        if (!is_null($databaseName) && !is_string($databaseName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($databaseName)), __LINE__);
        }
        $this->databaseName = $databaseName;
        return $this;
    }
    /**
     * Get databaseUsers value
     * @return \PayPal\ArrayType\MyArrayOfSqlpriveMysqlDatabaseUserPrivilegeStructType|null
     */
    public function getDatabaseUsers()
    {
        return $this->databaseUsers;
    }
    /**
     * Set databaseUsers value
     * @param \PayPal\ArrayType\MyArrayOfSqlpriveMysqlDatabaseUserPrivilegeStructType $databaseUsers
     * @return \PayPal\StructType\SqlpriveMysqlDatabasePrivilegeStruct
     */
    public function setDatabaseUsers(\PayPal\ArrayType\MyArrayOfSqlpriveMysqlDatabaseUserPrivilegeStructType $databaseUsers = null)
    {
        $this->databaseUsers = $databaseUsers;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \PayPal\StructType\SqlpriveMysqlDatabasePrivilegeStruct
     */
    public static function __set_state(array $array)
    {
        return parent::__set_state($array);
    }
    /**
     * Method returning the class name
     * @return string __CLASS__
     */
    public function __toString()
    {
        return __CLASS__;
    }
}