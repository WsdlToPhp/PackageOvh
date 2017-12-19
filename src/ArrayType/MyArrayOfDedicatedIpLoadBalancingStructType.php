<?php

namespace PayPal\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for MyArrayOfDedicatedIpLoadBalancingStructType ArrayType
 * @subpackage Arrays
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class MyArrayOfDedicatedIpLoadBalancingStructType extends AbstractStructArrayBase
{
    /**
     * The item
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \PayPal\StructType\DedicatedIpLoadBalancingStruct[]
     */
    public $item;
    /**
     * Constructor method for MyArrayOfDedicatedIpLoadBalancingStructType
     * @uses MyArrayOfDedicatedIpLoadBalancingStructType::setItem()
     * @param \PayPal\StructType\DedicatedIpLoadBalancingStruct[] $item
     */
    public function __construct(array $item = array())
    {
        $this
            ->setItem($item);
    }
    /**
     * Get item value
     * @return \PayPal\StructType\DedicatedIpLoadBalancingStruct[]|null
     */
    public function getItem()
    {
        return $this->item;
    }
    /**
     * Set item value
     * @throws \InvalidArgumentException
     * @param \PayPal\StructType\DedicatedIpLoadBalancingStruct[] $item
     * @return \PayPal\ArrayType\MyArrayOfDedicatedIpLoadBalancingStructType
     */
    public function setItem(array $item = array())
    {
        foreach ($item as $myArrayOfDedicatedIpLoadBalancingStructTypeItemItem) {
            // validation for constraint: itemType
            if (!$myArrayOfDedicatedIpLoadBalancingStructTypeItemItem instanceof \PayPal\StructType\DedicatedIpLoadBalancingStruct) {
                throw new \InvalidArgumentException(sprintf('The item property can only contain items of \PayPal\StructType\DedicatedIpLoadBalancingStruct, "%s" given', is_object($myArrayOfDedicatedIpLoadBalancingStructTypeItemItem) ? get_class($myArrayOfDedicatedIpLoadBalancingStructTypeItemItem) : gettype($myArrayOfDedicatedIpLoadBalancingStructTypeItemItem)), __LINE__);
            }
        }
        $this->item = $item;
        return $this;
    }
    /**
     * Add item to item value
     * @throws \InvalidArgumentException
     * @param \PayPal\StructType\DedicatedIpLoadBalancingStruct $item
     * @return \PayPal\ArrayType\MyArrayOfDedicatedIpLoadBalancingStructType
     */
    public function addToItem(\PayPal\StructType\DedicatedIpLoadBalancingStruct $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \PayPal\StructType\DedicatedIpLoadBalancingStruct) {
            throw new \InvalidArgumentException(sprintf('The item property can only contain items of \PayPal\StructType\DedicatedIpLoadBalancingStruct, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->item[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \PayPal\StructType\DedicatedIpLoadBalancingStruct|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \PayPal\StructType\DedicatedIpLoadBalancingStruct|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \PayPal\StructType\DedicatedIpLoadBalancingStruct|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \PayPal\StructType\DedicatedIpLoadBalancingStruct|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \PayPal\StructType\DedicatedIpLoadBalancingStruct|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string item
     */
    public function getAttributeName()
    {
        return 'item';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \PayPal\ArrayType\MyArrayOfDedicatedIpLoadBalancingStructType
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
