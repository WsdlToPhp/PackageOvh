<?php

namespace Ovh\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for MyArrayOfTelephonyGetClosureEventsAsArrayEventStructType
 * ArrayType
 * @subpackage Arrays
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class MyArrayOfTelephonyGetClosureEventsAsArrayEventStructType extends AbstractStructArrayBase
{
    /**
     * The item
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Ovh\StructType\TelephonyGetClosureEventsAsArrayEventStruct[]
     */
    public $item;
    /**
     * Constructor method for MyArrayOfTelephonyGetClosureEventsAsArrayEventStructType
     * @uses MyArrayOfTelephonyGetClosureEventsAsArrayEventStructType::setItem()
     * @param \Ovh\StructType\TelephonyGetClosureEventsAsArrayEventStruct[] $item
     */
    public function __construct(array $item = array())
    {
        $this
            ->setItem($item);
    }
    /**
     * Get item value
     * @return \Ovh\StructType\TelephonyGetClosureEventsAsArrayEventStruct[]|null
     */
    public function getItem()
    {
        return $this->item;
    }
    /**
     * This method is responsible for validating the values passed to the setItem method
     * This method is willingly generated in order to preserve the one-line inline validation within the setItem method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateItemForArrayConstraintsFromSetItem(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $myArrayOfTelephonyGetClosureEventsAsArrayEventStructTypeItemItem) {
            // validation for constraint: itemType
            if (!$myArrayOfTelephonyGetClosureEventsAsArrayEventStructTypeItemItem instanceof \Ovh\StructType\TelephonyGetClosureEventsAsArrayEventStruct) {
                $invalidValues[] = is_object($myArrayOfTelephonyGetClosureEventsAsArrayEventStructTypeItemItem) ? get_class($myArrayOfTelephonyGetClosureEventsAsArrayEventStructTypeItemItem) : sprintf('%s(%s)', gettype($myArrayOfTelephonyGetClosureEventsAsArrayEventStructTypeItemItem), var_export($myArrayOfTelephonyGetClosureEventsAsArrayEventStructTypeItemItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The item property can only contain items of type \Ovh\StructType\TelephonyGetClosureEventsAsArrayEventStruct, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set item value
     * @throws \InvalidArgumentException
     * @param \Ovh\StructType\TelephonyGetClosureEventsAsArrayEventStruct[] $item
     * @return \Ovh\ArrayType\MyArrayOfTelephonyGetClosureEventsAsArrayEventStructType
     */
    public function setItem(array $item = array())
    {
        // validation for constraint: array
        if ('' !== ($itemArrayErrorMessage = self::validateItemForArrayConstraintsFromSetItem($item))) {
            throw new \InvalidArgumentException($itemArrayErrorMessage, __LINE__);
        }
        $this->item = $item;
        return $this;
    }
    /**
     * Add item to item value
     * @throws \InvalidArgumentException
     * @param \Ovh\StructType\TelephonyGetClosureEventsAsArrayEventStruct $item
     * @return \Ovh\ArrayType\MyArrayOfTelephonyGetClosureEventsAsArrayEventStructType
     */
    public function addToItem(\Ovh\StructType\TelephonyGetClosureEventsAsArrayEventStruct $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Ovh\StructType\TelephonyGetClosureEventsAsArrayEventStruct) {
            throw new \InvalidArgumentException(sprintf('The item property can only contain items of type \Ovh\StructType\TelephonyGetClosureEventsAsArrayEventStruct, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->item[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Ovh\StructType\TelephonyGetClosureEventsAsArrayEventStruct|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Ovh\StructType\TelephonyGetClosureEventsAsArrayEventStruct|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Ovh\StructType\TelephonyGetClosureEventsAsArrayEventStruct|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Ovh\StructType\TelephonyGetClosureEventsAsArrayEventStruct|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Ovh\StructType\TelephonyGetClosureEventsAsArrayEventStruct|null
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
}
