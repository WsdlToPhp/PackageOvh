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
        if (!is_null($total) && !is_numeric($total)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($total)), __LINE__);
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
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ovh\StructType\TelephonySpareListReturn
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
