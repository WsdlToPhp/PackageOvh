<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for sqlpriveMysqlDatabaseUserPrivilegeStruct StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class SqlpriveMysqlDatabaseUserPrivilegeStruct extends AbstractStructBase
{
    /**
     * The userName
     * @var string
     */
    public $userName;
    /**
     * The userPriv
     * @var string
     */
    public $userPriv;
    /**
     * Constructor method for sqlpriveMysqlDatabaseUserPrivilegeStruct
     * @uses SqlpriveMysqlDatabaseUserPrivilegeStruct::setUserName()
     * @uses SqlpriveMysqlDatabaseUserPrivilegeStruct::setUserPriv()
     * @param string $userName
     * @param string $userPriv
     */
    public function __construct($userName = null, $userPriv = null)
    {
        $this
            ->setUserName($userName)
            ->setUserPriv($userPriv);
    }
    /**
     * Get userName value
     * @return string|null
     */
    public function getUserName()
    {
        return $this->userName;
    }
    /**
     * Set userName value
     * @param string $userName
     * @return \Ovh\StructType\SqlpriveMysqlDatabaseUserPrivilegeStruct
     */
    public function setUserName($userName = null)
    {
        // validation for constraint: string
        if (!is_null($userName) && !is_string($userName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($userName, true), gettype($userName)), __LINE__);
        }
        $this->userName = $userName;
        return $this;
    }
    /**
     * Get userPriv value
     * @return string|null
     */
    public function getUserPriv()
    {
        return $this->userPriv;
    }
    /**
     * Set userPriv value
     * @param string $userPriv
     * @return \Ovh\StructType\SqlpriveMysqlDatabaseUserPrivilegeStruct
     */
    public function setUserPriv($userPriv = null)
    {
        // validation for constraint: string
        if (!is_null($userPriv) && !is_string($userPriv)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($userPriv, true), gettype($userPriv)), __LINE__);
        }
        $this->userPriv = $userPriv;
        return $this;
    }
}
