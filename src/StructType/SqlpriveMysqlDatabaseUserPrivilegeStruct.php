<?php

namespace PayPal\StructType;

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
     * @return \PayPal\StructType\SqlpriveMysqlDatabaseUserPrivilegeStruct
     */
    public function setUserName($userName = null)
    {
        // validation for constraint: string
        if (!is_null($userName) && !is_string($userName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($userName)), __LINE__);
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
     * @return \PayPal\StructType\SqlpriveMysqlDatabaseUserPrivilegeStruct
     */
    public function setUserPriv($userPriv = null)
    {
        // validation for constraint: string
        if (!is_null($userPriv) && !is_string($userPriv)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($userPriv)), __LINE__);
        }
        $this->userPriv = $userPriv;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \PayPal\StructType\SqlpriveMysqlDatabaseUserPrivilegeStruct
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
