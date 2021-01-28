<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for sqlpriveListResponse StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class SqlpriveListResponse extends AbstractStructBase
{
    /**
     * The return
     * @var \Ovh\ArrayType\MyArrayOfSqlpriveStructType
     */
    public $return;
    /**
     * Constructor method for sqlpriveListResponse
     * @uses SqlpriveListResponse::setReturn()
     * @param \Ovh\ArrayType\MyArrayOfSqlpriveStructType $return
     */
    public function __construct(\Ovh\ArrayType\MyArrayOfSqlpriveStructType $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \Ovh\ArrayType\MyArrayOfSqlpriveStructType|null
     */
    public function getReturn()
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \Ovh\ArrayType\MyArrayOfSqlpriveStructType $return
     * @return \Ovh\StructType\SqlpriveListResponse
     */
    public function setReturn(\Ovh\ArrayType\MyArrayOfSqlpriveStructType $return = null)
    {
        $this->return = $return;
        return $this;
    }
}
