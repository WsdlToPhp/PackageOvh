<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for databaseListResponse StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class DatabaseListResponse extends AbstractStructBase
{
    /**
     * The return
     * @var \Ovh\ArrayType\MyArrayOfDatabaseStructType
     */
    public $return;
    /**
     * Constructor method for databaseListResponse
     * @uses DatabaseListResponse::setReturn()
     * @param \Ovh\ArrayType\MyArrayOfDatabaseStructType $return
     */
    public function __construct(\Ovh\ArrayType\MyArrayOfDatabaseStructType $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \Ovh\ArrayType\MyArrayOfDatabaseStructType|null
     */
    public function getReturn()
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \Ovh\ArrayType\MyArrayOfDatabaseStructType $return
     * @return \Ovh\StructType\DatabaseListResponse
     */
    public function setReturn(\Ovh\ArrayType\MyArrayOfDatabaseStructType $return = null)
    {
        $this->return = $return;
        return $this;
    }
}
