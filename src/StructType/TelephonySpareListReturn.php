<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for telephonySpareListReturn StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class TelephonySpareListReturn extends AbstractStructBase
{
    /**
     * The list
     * @var \Ovh\ArrayType\MyArrayOfTelephonySpareInfoStructType
     */
    public $list;
    /**
     * The total
     * @var int
     */
    public $total;
    /**
     * The serviceInfo
     * @var \Ovh\StructType\TelephonySpareServiceInfoStruct
     */
    public $serviceInfo;
    /**
     * Constructor method for telephonySpareListReturn
     * @uses TelephonySpareListReturn::setList()
     * @uses TelephonySpareListReturn::setTotal()
     * @uses TelephonySpareListReturn::setServiceInfo()
     * @param \Ovh\ArrayType\MyArrayOfTelephonySpareInfoStructType $list
     * @param int $total
     * @param \Ovh\StructType\TelephonySpareServiceInfoStruct $serviceInfo
     */
    public function __construct(\Ovh\ArrayType\MyArrayOfTelephonySpareInfoStructType $list = null, $total = null, \Ovh\StructType\TelephonySpareServiceInfoStruct $serviceInfo = null)
    {
        $this
            ->setList($list)
            ->setTotal($total)
            ->setServiceInfo($serviceInfo);
    }
    /**
     * Get list value
     * @return \Ovh\ArrayType\MyArrayOfTelephonySpareInfoStructType|null
     */
    public function getList()
    {
        return $this->list;
    }
    /**
     * Set list value
     * @param \Ovh\ArrayType\MyArrayOfTelephonySpareInfoStructType $list
     * @return \Ovh\StructType\TelephonySpareListReturn
     */
    public function setList(\Ovh\ArrayType\MyArrayOfTelephonySpareInfoStructType $list = null)
    {
        $this->list = $list;
        return $this;
    }
    /**
     * Get total value
     * @return int|null
     */
    public function getTotal()
    {
        return $this->total;
    }
    /**
     * Set total value
     * @param int $total
     * @return \Ovh\StructType\TelephonySpareListReturn
     */
    public function setTotal($total = null)
    {
        // validation for constraint: int
        if (!is_null($total) && !(is_int($total) || ctype_digit($total))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($total, true), gettype($total)), __LINE__);
        }
        $this->total = $total;
        return $this;
    }
    /**
     * Get serviceInfo value
     * @return \Ovh\StructType\TelephonySpareServiceInfoStruct|null
     */
    public function getServiceInfo()
    {
        return $this->serviceInfo;
    }
    /**
     * Set serviceInfo value
     * @param \Ovh\StructType\TelephonySpareServiceInfoStruct $serviceInfo
     * @return \Ovh\StructType\TelephonySpareListReturn
     */
    public function setServiceInfo(\Ovh\StructType\TelephonySpareServiceInfoStruct $serviceInfo = null)
    {
        $this->serviceInfo = $serviceInfo;
        return $this;
    }
}
