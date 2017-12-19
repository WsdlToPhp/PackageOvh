<?php

namespace PayPal\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for serviceListPaginatedStruct StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class ServiceListPaginatedStruct extends AbstractStructBase
{
    /**
     * The total
     * @var int
     */
    public $total;
    /**
     * The results
     * @var \PayPal\ArrayType\MyArrayOfServiceLightStructType
     */
    public $results;
    /**
     * Constructor method for serviceListPaginatedStruct
     * @uses ServiceListPaginatedStruct::setTotal()
     * @uses ServiceListPaginatedStruct::setResults()
     * @param int $total
     * @param \PayPal\ArrayType\MyArrayOfServiceLightStructType $results
     */
    public function __construct($total = null, \PayPal\ArrayType\MyArrayOfServiceLightStructType $results = null)
    {
        $this
            ->setTotal($total)
            ->setResults($results);
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
     * @return \PayPal\StructType\ServiceListPaginatedStruct
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
     * Get results value
     * @return \PayPal\ArrayType\MyArrayOfServiceLightStructType|null
     */
    public function getResults()
    {
        return $this->results;
    }
    /**
     * Set results value
     * @param \PayPal\ArrayType\MyArrayOfServiceLightStructType $results
     * @return \PayPal\StructType\ServiceListPaginatedStruct
     */
    public function setResults(\PayPal\ArrayType\MyArrayOfServiceLightStructType $results = null)
    {
        $this->results = $results;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \PayPal\StructType\ServiceListPaginatedStruct
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
