<?php

namespace Ovh\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for emailFilterRuleStruct StructType
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EmailFilterRuleStruct extends AbstractStructBase
{
    /**
     * The id
     * @var int
     */
    public $id;
    /**
     * The header
     * @var string
     */
    public $header;
    /**
     * The rule
     * @var string
     */
    public $rule;
    /**
     * The rule_param
     * @var string
     */
    public $rule_param;
    /**
     * Constructor method for emailFilterRuleStruct
     * @uses EmailFilterRuleStruct::setId()
     * @uses EmailFilterRuleStruct::setHeader()
     * @uses EmailFilterRuleStruct::setRule()
     * @uses EmailFilterRuleStruct::setRule_param()
     * @param int $id
     * @param string $header
     * @param string $rule
     * @param string $rule_param
     */
    public function __construct($id = null, $header = null, $rule = null, $rule_param = null)
    {
        $this
            ->setId($id)
            ->setHeader($header)
            ->setRule($rule)
            ->setRule_param($rule_param);
    }
    /**
     * Get id value
     * @return int|null
     */
    public function getId()
    {
        return $this->id;
    }
    /**
     * Set id value
     * @param int $id
     * @return \Ovh\StructType\EmailFilterRuleStruct
     */
    public function setId($id = null)
    {
        // validation for constraint: int
        if (!is_null($id) && !is_numeric($id)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($id)), __LINE__);
        }
        $this->id = $id;
        return $this;
    }
    /**
     * Get header value
     * @return string|null
     */
    public function getHeader()
    {
        return $this->header;
    }
    /**
     * Set header value
     * @param string $header
     * @return \Ovh\StructType\EmailFilterRuleStruct
     */
    public function setHeader($header = null)
    {
        // validation for constraint: string
        if (!is_null($header) && !is_string($header)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($header)), __LINE__);
        }
        $this->header = $header;
        return $this;
    }
    /**
     * Get rule value
     * @return string|null
     */
    public function getRule()
    {
        return $this->rule;
    }
    /**
     * Set rule value
     * @param string $rule
     * @return \Ovh\StructType\EmailFilterRuleStruct
     */
    public function setRule($rule = null)
    {
        // validation for constraint: string
        if (!is_null($rule) && !is_string($rule)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($rule)), __LINE__);
        }
        $this->rule = $rule;
        return $this;
    }
    /**
     * Get rule_param value
     * @return string|null
     */
    public function getRule_param()
    {
        return $this->rule_param;
    }
    /**
     * Set rule_param value
     * @param string $rule_param
     * @return \Ovh\StructType\EmailFilterRuleStruct
     */
    public function setRule_param($rule_param = null)
    {
        // validation for constraint: string
        if (!is_null($rule_param) && !is_string($rule_param)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($rule_param)), __LINE__);
        }
        $this->rule_param = $rule_param;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ovh\StructType\EmailFilterRuleStruct
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
