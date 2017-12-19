<?php

namespace PayPal\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for MyArrayOfInfrastructureIpStructType ArrayType
 * @subpackage Arrays
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class MyArrayOfInfrastructureIpStructType extends AbstractStructArrayBase
{
    /**
     * The item
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \PayPal\StructType\InfrastructureIpStruct[]
     */
    public $item;
    /**
     * Constructor method for MyArrayOfInfrastructureIpStructType
     * @uses MyArrayOfInfrastructureIpStructType::setItem()
     * @param \PayPal\StructType\InfrastructureIpStruct[] $item
     */
    public function __construct(array $item = array())
    {
        $this
            ->setItem($item);
    }
    /**
     * Get item value
     * @return \PayPal\StructType\InfrastructureIpStruct[]|null
     */
    public function getItem()
    {
        return $this->item;
    }
    /**
     * Set item value
     * @throws \InvalidArgumentException
     * @param \PayPal\StructType\InfrastructureIpStruct[] $item
     * @return \PayPal\ArrayType\MyArrayOfInfrastructureIpStructType
     */
    public function setItem(array $item = array())
    {
        foreach ($item as $myArrayOfInfrastructureIpStructTypeItemItem) {
            // validation for constraint: itemType
            if (!$myArrayOfInfrastructureIpStructTypeItemItem instanceof \PayPal\StructType\InfrastructureIpStruct) {
                throw new \InvalidArgumentException(sprintf('The item property can only contain items of \PayPal\StructType\InfrastructureIpStruct, "%s" given', is_object($myArrayOfInfrastructureIpStructTypeItemItem) ? get_class($myArrayOfInfrastructureIpStructTypeItemItem) : gettype($myArrayOfInfrastructureIpStructTypeItemItem)), __LINE__);
            }
        }
        $this->item = $item;
        return $this;
    }
    /**
     * Add item to item value
     * @throws \InvalidArgumentException
     * @param \PayPal\StructType\InfrastructureIpStruct $item
     * @return \PayPal\ArrayType\MyArrayOfInfrastructureIpStructType
     */
    public function addToItem(\PayPal\StructType\InfrastructureIpStruct $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \PayPal\StructType\InfrastructureIpStruct) {
            throw new \InvalidArgumentException(sprintf('The item property can only contain items of \PayPal\StructType\InfrastructureIpStruct, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->item[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \PayPal\StructType\InfrastructureIpStruct|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \PayPal\StructType\InfrastructureIpStruct|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \PayPal\StructType\InfrastructureIpStruct|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \PayPal\StructType\InfrastructureIpStruct|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \PayPal\StructType\InfrastructureIpStruct|null
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
     * @return \PayPal\ArrayType\MyArrayOfInfrastructureIpStructType
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
