<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for telephonySmsBlacklistedSendersListReturn StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class TelephonySmsBlacklistedSendersListReturn extends AbstractStructBase
{
    /**
     * The totalRecords
     * @var int
     */
    public $totalRecords;
    /**
     * The list
     * @var \Ovh\ArrayType\MyArrayOfTelephonySmsBlacklistedSenderStructType
     */
    public $list;
    /**
     * Constructor method for telephonySmsBlacklistedSendersListReturn
     * @uses TelephonySmsBlacklistedSendersListReturn::setTotalRecords()
     * @uses TelephonySmsBlacklistedSendersListReturn::setList()
     * @param int $totalRecords
     * @param \Ovh\ArrayType\MyArrayOfTelephonySmsBlacklistedSenderStructType $list
     */
    public function __construct($totalRecords = null, \Ovh\ArrayType\MyArrayOfTelephonySmsBlacklistedSenderStructType $list = null)
    {
        $this
            ->setTotalRecords($totalRecords)
            ->setList($list);
    }
    /**
     * Get totalRecords value
     * @return int|null
     */
    public function getTotalRecords()
    {
        return $this->totalRecords;
    }
    /**
     * Set totalRecords value
     * @param int $totalRecords
     * @return \Ovh\StructType\TelephonySmsBlacklistedSendersListReturn
     */
    public function setTotalRecords($totalRecords = null)
    {
        // validation for constraint: int
        if (!is_null($totalRecords) && !is_numeric($totalRecords)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($totalRecords)), __LINE__);
        }
        $this->totalRecords = $totalRecords;
        return $this;
    }
    /**
     * Get list value
     * @return \Ovh\ArrayType\MyArrayOfTelephonySmsBlacklistedSenderStructType|null
     */
    public function getList()
    {
        return $this->list;
    }
    /**
     * Set list value
     * @param \Ovh\ArrayType\MyArrayOfTelephonySmsBlacklistedSenderStructType $list
     * @return \Ovh\StructType\TelephonySmsBlacklistedSendersListReturn
     */
    public function setList(\Ovh\ArrayType\MyArrayOfTelephonySmsBlacklistedSenderStructType $list = null)
    {
        $this->list = $list;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ovh\StructType\TelephonySmsBlacklistedSendersListReturn
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
