<?php

namespace PayPal\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for telephonyGetClosureEventsAsArrayResponse ArrayType
 * @subpackage Arrays
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class TelephonyGetClosureEventsAsArrayResponse extends AbstractStructArrayBase
{
    /**
     * The return
     * @var \PayPal\StructType\TelephonyGetClosureEventsAsArrayStruct
     */
    public $return;
    /**
     * Constructor method for telephonyGetClosureEventsAsArrayResponse
     * @uses TelephonyGetClosureEventsAsArrayResponse::setReturn()
     * @param \PayPal\StructType\TelephonyGetClosureEventsAsArrayStruct $return
     */
    public function __construct(\PayPal\StructType\TelephonyGetClosureEventsAsArrayStruct $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \PayPal\StructType\TelephonyGetClosureEventsAsArrayStruct|null
     */
    public function getReturn()
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \PayPal\StructType\TelephonyGetClosureEventsAsArrayStruct $return
     * @return \PayPal\ArrayType\TelephonyGetClosureEventsAsArrayResponse
     */
    public function setReturn(\PayPal\StructType\TelephonyGetClosureEventsAsArrayStruct $return = null)
    {
        $this->return = $return;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \PayPal\StructType\TelephonyGetClosureEventsAsArrayStruct|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \PayPal\StructType\TelephonyGetClosureEventsAsArrayStruct|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \PayPal\StructType\TelephonyGetClosureEventsAsArrayStruct|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \PayPal\StructType\TelephonyGetClosureEventsAsArrayStruct|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \PayPal\StructType\TelephonyGetClosureEventsAsArrayStruct|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string return
     */
    public function getAttributeName()
    {
        return 'return';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \PayPal\ArrayType\TelephonyGetClosureEventsAsArrayResponse
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
