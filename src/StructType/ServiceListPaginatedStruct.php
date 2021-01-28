<?php

namespace Ovh\StructType;

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
     * @var \Ovh\ArrayType\MyArrayOfServiceLightStructType
     */
    public $results;
    /**
     * Constructor method for serviceListPaginatedStruct
     * @uses ServiceListPaginatedStruct::setTotal()
     * @uses ServiceListPaginatedStruct::setResults()
     * @param int $total
     * @param \Ovh\ArrayType\MyArrayOfServiceLightStructType $results
     */
    public function __construct($total = null, \Ovh\ArrayType\MyArrayOfServiceLightStructType $results = null)
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
     * @return \Ovh\StructType\ServiceListPaginatedStruct
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
     * Get results value
     * @return \Ovh\ArrayType\MyArrayOfServiceLightStructType|null
     */
    public function getResults()
    {
        return $this->results;
    }
    /**
     * Set results value
     * @param \Ovh\ArrayType\MyArrayOfServiceLightStructType $results
     * @return \Ovh\StructType\ServiceListPaginatedStruct
     */
    public function setResults(\Ovh\ArrayType\MyArrayOfServiceLightStructType $results = null)
    {
        $this->results = $results;
        return $this;
    }
}
