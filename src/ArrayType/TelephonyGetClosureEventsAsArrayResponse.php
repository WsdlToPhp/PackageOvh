<?php

namespace Ovh\ArrayType;

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
     * @var \Ovh\StructType\TelephonyGetClosureEventsAsArrayStruct
     */
    public $return;
    /**
     * Constructor method for telephonyGetClosureEventsAsArrayResponse
     * @uses TelephonyGetClosureEventsAsArrayResponse::setReturn()
     * @param \Ovh\StructType\TelephonyGetClosureEventsAsArrayStruct $return
     */
    public function __construct(\Ovh\StructType\TelephonyGetClosureEventsAsArrayStruct $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \Ovh\StructType\TelephonyGetClosureEventsAsArrayStruct|null
     */
    public function getReturn()
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \Ovh\StructType\TelephonyGetClosureEventsAsArrayStruct $return
     * @return \Ovh\ArrayType\TelephonyGetClosureEventsAsArrayResponse
     */
    public function setReturn(\Ovh\StructType\TelephonyGetClosureEventsAsArrayStruct $return = null)
    {
        $this->return = $return;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Ovh\StructType\TelephonyGetClosureEventsAsArrayStruct|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Ovh\StructType\TelephonyGetClosureEventsAsArrayStruct|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Ovh\StructType\TelephonyGetClosureEventsAsArrayStruct|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Ovh\StructType\TelephonyGetClosureEventsAsArrayStruct|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Ovh\StructType\TelephonyGetClosureEventsAsArrayStruct|null
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
}
