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
        if (!is_null($totalRecords) && !(is_int($totalRecords) || ctype_digit($totalRecords))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($totalRecords, true), gettype($totalRecords)), __LINE__);
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
}
